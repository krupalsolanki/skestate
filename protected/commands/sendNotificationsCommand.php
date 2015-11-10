<?php

class sendNotificationsCommand extends CConsoleCommand {

    private $GCMID;
    private $DRYRUN = FALSE;
    private $DRYGCMID = "APA91bEosa9tmcNeY8c0FGctmtea2r6LLWacVeiRPXHhW_0n4BHs6XXEoRy66JJtvE2v3zk05HNV15ky9xO3NhxAuAXDQJKHDNeZaCqNrNhyLW0yyjvxahkxstuEbHCA1_LQ8Xo-g4j71KivRBNDVHlIx2owmvom8Q";
    private $time = null;
    public static $DEFAULT_RUN = array("07:00", "09:00", "21:00");

    public function run($args = null) {
        if (!empty($args)) {
            if (in_array('-help', $args)) {
                echo "This command sends notifications to users";
                echo PHP_EOL . "\t -gcm \t GCM ID of the user to whom the notification needs to be sent" . PHP_EOL;
                echo "\t -dr \t dry run [test] sending notifications" . PHP_EOL;
                echo "\t -t \t time that needs to be sent" . PHP_EOL;
                exit();
            }
            if (in_array('-gcm', $args)) {
                $key = array_search('-gcm', $args);
                $value = $args[++$key];
                if (strpos('-', $value) == FALSE)
                    $this->GCMID = $value;
            }
            if (in_array('-dr', $args)) {
                $this->DRYRUN = TRUE;
            }
            if (in_array('-t', $args)) {
                $key = array_search('-t', $args);
                $value = $args[++$key];
                if (strpos('-', $value) == FALSE)
                    $this->time = $value;
            }
        }


        try {
            if ($this->DRYRUN && $this->time) {
                self::SendNotifications($this->time);
            } elseif ($this->DRYRUN && $this->GCMID) {
                $message = ["message" => [
                        "pref_new_gag_count" => 5,
                        "pref_new_jokes_count" => 5,
                        "pref_new_greetings_count" => 5,
                        "pref_new_quotes_count" => 2,
                ]];
                Notifications::send_notification(is_array($this->GCMID) ? $this->GCMID : [$this->GCMID], $message);
            } elseif ($this->DRYRUN) {
                $message = ["message" => [
                        "pref_new_gag_count" => 35,
                        "pref_new_jokes_count" => 35,
                        "pref_new_greetings_count" => 35,
                        "pref_new_quotes_count" => 35,
                ]];
                Notifications::send_notification([$this->DRYGCMID], $message);
            } else {
                self::SendNotifications();
            }
        } catch (Exception $exc) {
            echo "Something went wrong. Please refer below error" . PHP_EOL . $exc->getTraceAsString();
        }
        echo PHP_EOL;
    }

    public static function SendNotifications($timeOverride = NULL) {

        $GCMUSERS = GCMUsers::model()->with('notification')->findAll('active = 1 AND status = 1');

        require_once '/home/yopo/public_html/yopo_live/connectdb.inc.php';

        if ($timeOverride) {
            $date = new DateTime($timeOverride);
            $currentTime = date("Y-m-d H:i", strtotime($timeOverride));
        } else {
            $date = new DateTime();
            $currentTime = date("Y-m-d H:i");
            echo "Date Now : " . $currentTime . PHP_EOL;
        }


        $DB->dbRows("SELECT count(category_name) as count FROM `yopo_master` where DATE_FORMAT(concat(master_date,\" \",master_time),'%Y-%m-%d %H:%i') = \"" . $currentTime . "\" group by category_name");
        if (!empty($DB->rows))
            $newYOPOCount = $DB->rows[0]["count"];
        else
            $newYOPOCount = 0;


        foreach ($GCMUSERS as $user) {
            echo "user id :" . $user["id"] . PHP_EOL;
            try {
                $times = $user['notification']['times'] ? json_decode($user['notification']['times']) : NULL;
                $category = $user['notification']['category'] ? json_decode($user['notification']['category']) : NULL;
                $date->setTimezone(new DateTimeZone($user['timezone']));
                if ($times != NULL && !empty($times)) {
                    if (in_array($date->format("G:i"), $times)) {
                        $unreadCount = [];
                        $DB->dbRows("select count(category_name) as count from yopo_master where concat(master_date,\" \", master_time) BETWEEN \"" . $user['last_seen_cat_1'] . "\" AND NOW() and category_name=\"Gags\"");
                        $unreadCount[1] = $DB->rows[0]["count"];
                        $DB->dbRows("select count(category_name) as count from yopo_master where concat(master_date,\" \", master_time) BETWEEN \"" . $user['last_seen_cat_2'] . "\" AND NOW() and category_name=\"Jokes\"");
                        $unreadCount[2] = $DB->rows[0]["count"];
                        $DB->dbRows("select count(category_name) as count from yopo_master where concat(master_date,\" \", master_time) BETWEEN \"" . $user['last_seen_cat_3'] . "\" AND NOW() and category_name=\"Greetings\"");
                        $unreadCount[3] = $DB->rows[0]["count"];
                        $DB->dbRows("select count(category_name) as count from yopo_master where concat(master_date,\" \", master_time) BETWEEN \"" . $user['last_seen_cat_4'] . "\" AND NOW() and category_name=\"Quotes\"");
                        $unreadCount[4] = $DB->rows[0]["count"];
                        $prettyUnreadCount = self::getMessageCount($unreadCount);
                        $notifications = new Notifications();
                        $notifications->send_notification([$user["reg_id"]], $prettyUnreadCount);
                    }
                } elseif ($newYOPOCount > 0) {
                    if ($category != NULL && !empty($category)) {
                        $unreadCount = [];
                        if (in_array(1, $category)) {
                            $DB->dbRows("select count(category_name) as count from yopo_master where concat(master_date,\" \", master_time) BETWEEN \"" . $user['last_seen_cat_1'] . "\" AND NOW() AND category_name=\"Gags\"");
                            $unreadCount[1] = $DB->rows[0]["count"];
                        } else {
                            $unreadCount[1] = 0;
                        }
                        if (in_array(2, $category)) {
                            $DB->dbRows("select count(category_name) as count from yopo_master where concat(master_date,\" \", master_time) BETWEEN \"" . $user['last_seen_cat_2'] . "\" AND NOW() AND category_name=\"Jokes\"");
                            $unreadCount[2] = $DB->rows[0]["count"];
                        } else {
                            $unreadCount[2] = 0;
                        }
                        if (in_array(3, $category)) {
                            $DB->dbRows("select count(category_name) as count from yopo_master where concat(master_date,\" \", master_time) BETWEEN \"" . $user['last_seen_cat_3'] . "\" AND NOW() AND category_name=\"Greetings\"");
                            $unreadCount[3] = $DB->rows[0]["count"];
                        } else {
                            $unreadCount[3] = 0;
                        }
                        if (in_array(4, $category)) {
                            $DB->dbRows("select count(category_name) as count from yopo_master where concat(master_date,\" \", master_time) BETWEEN \"" . $user['last_seen_cat_4'] . "\" AND NOW() AND category_name=\"Quotes\"");
                            $unreadCount[4] = $DB->rows[0]["count"];
                        } else {
                            $unreadCount[4] = 0;
                        }

                        $prettyUnreadCount = self::getMessageCount($unreadCount);
                        $notifications = new Notifications();
                        $notifications->send_notification([$user["reg_id"]], $prettyUnreadCount);
                    }
                }
            } catch (Exception $e) {
                echo $e->getTraceAsString();
            }
        }
    }

    public static function getMessageCount($counts) {
        $message = [];
        foreach ($counts as $key => $value) {
            switch ($key) {
                case 1:
                    $message["pref_new_gags_count"] = $value;
                    break;
                case 2:
                    $message["pref_new_jokes_count"] = $value;
                    break;
                case 3:
                    $message["pref_new_greetings_count"] = $value;
                    break;
                case 4:
                    $message["pref_new_quotes_count"] = $value;
                    break;

                default:
                    break;
            }
        }
        return ["message" => $message];
    }

}
