<?php

Yii::import('application.models._base.BaseGCMUsers');

define("GOOGLE_API_KEY", "AIzaSyCD1T8SfIgtJo0YrH0z9TL_fVCOkdsx2Cc"); // Swapnil's private key

class GCMUsers extends BaseGCMUsers {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 
     * @param array $registration_ids The ids of devices to which the notification needs to be sent
     * @param type $message Message to be sent
     * @return type TRUE if message sent, error if failed
     */
    public static function send_notification($registration_ids, $message) {
        try {
            // Set POST variables
            $url = 'https://android.googleapis.com/gcm/send';
            $headers = array(
                'Authorization: key=' . GOOGLE_API_KEY,
                'Content-Type: application/json'
            );
            // Open connection
            $ch = curl_init();

            // Set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_URL, $url);

            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // Disabling SSL Certificate support temporarly
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(
                            array(
                                'registration_ids' => $registration_ids,
                                'data' => $message,
                            )
            ));

            curl_setopt($ch, CURLOPT_VERBOSE, true); //return verbose
            // Execute post
            $result = curl_exec($ch);
            ob_start();
            echo $result;
            if ($result === FALSE) {
                echo 'Curl failed: ' . curl_error($ch);
            }
            $res = ob_get_clean();
            $GCMValidity = self::GCMInvalid($res, $registration_ids[0]);
            if ($GCMValidity)
                self::deleteUser($GCMValidity);

            // Close connection
            curl_close($ch);
        } catch (Exception $exc) {
            return $exc->getTraceAsString();
        }
        return TRUE;
    }

    public static function GCMInvalid($result, $REG_ID) {
        try {
            $result = json_decode($result, true);
            if ($result["success"] == 1) {
                $results = $result["results"];
                $GCM_ID = isset($results[0]["registration_id"]) ? $results[0]["registration_id"] : null;
                if ($GCM_ID) {
                    if (GCMUsers::model()->exists("reg_id=:GCM", array(":GCM" => $GCM_ID))) {
                        return $REG_ID;
                    } else
                        return FALSE;
                }else {
                    return FALSE;
                }
            } else {
                return $REG_ID;
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            return FALSE;
        }
    }

    public static function deleteUser($GCM_ID) {
        $db = Yii::app()->db->beginTransaction();
        try {
            $GCMUser = GCMUsers::model()->deleteAll("reg_id=:GCM", array(":GCM" => $GCM_ID));
            $db->commit();
        } catch (Exception $exc) {
            $error = $exc->getTraceAsString();
            $db->rollback();
        }
    }

    public static function uploadGCM($gcm_id, $new_gcm = "", $update = False) {
        if ($update) {
            $gcm = GCMUsers::model()->find('reg_id =:gcm_id', array(':gcm_id' => $gcm_id));
            if ($gcm) {
                $gcm->reg_id = $new_gcm;
                if (!$gcm->save())
                    return $gcm->errors;
                else
                    return TRUE;
            } else
                return ['GCM ID' => ['GCM ID is not Valid']];
        }else {
            $gcm = new GCMUsers();
            $gcm->reg_id = $gcm_id;
            if (!$gcm->save())
                return $gcm->errors;
            else
                return TRUE;
        }
    }

}
