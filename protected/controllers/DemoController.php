<?php

class DemoController extends Controller {

    // Members
    /**
     * Key which has to be in HTTP USERNAME and PASSWORD headers 
     */
    Const SECURITY_KEY = 'askjf2lrjls23jpaisf923u';

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            array(
                'RestfullYii.filters.ERestFilter + 
                REST.GET, REST.PUT, REST.POST, REST.DELETE, REST.OPTIONS'
            ),
        );
    }

    public function accessRules() {
        return array(
            array('allow', 'actions' => array('REST.GET', 'REST.PUT', 'REST.POST', 'REST.DELETE', 'REST.OPTIONS'),
                'users' => array('*'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actions() {
        return array(
            'REST.' => 'RestfullYii.actions.ERestActionProvider',
        );
    }

    public function restEvents() {
        $this->onRest('req.get.hello.render', function() {
            $result = "hello";
//            $result = GCMUsers::model()->with('notification')->findAll('active = 1 AND status = 0');
            $this->setHeader(200);
            $this->_sendResponse(true, $result);
        });

        $this->onRest('req.get.sendMessage.render', function() {
            $message = (isset($_GET['message']) && !empty($_GET['message'])) ? $_GET['message'] : $this->_sendErrorResponse([["missing parameter" => ["Message is required"]]]);
            $gcm_ids = GCMUsers::model()->findAll();
            foreach ($gcm_ids as $gcm_id) {
                $sent = GCMUsers::send_notification([$gcm_id->reg_id], $message);
                if ($sent !== TRUE)
                    $this->_sendErrorResponse([["Error" => [$sent]]]);
            }
            $this->setHeader(200);
            $this->_sendResponse(true, TRUE);
        });


        $this->onRest('req.get.uploadgcm.render', function() {
            $new_gcm_id = "";
            $gcm_id = (isset($_GET['gcm_id']) && !empty($_GET['gcm_id'])) ? $_GET['gcm_id'] : $this->_sendErrorResponse([["missing parameter" => ["GCM ID is required"]]]);
            $update = (isset($_GET['update']) && !empty($_GET['update'])) ? (strtolower($_GET['update']) == "true" ? TRUE : FALSE) : FALSE;
            $this->sanitize([
                'string' => ['gcm_id' => $gcm_id]]
            );
            if ($update) {
                $new_gcm_id = (isset($_GET['new_gcm_id']) && !empty($_GET['new_gcm_id'])) ? $_GET['new_gcm_id'] : $this->_sendErrorResponse([["missing parameter" => ["NEW GCM ID is required"]]]);
                $this->sanitize([
                    'string' => ['new_gcm_id' => $new_gcm_id]]
                );
            }

            $upload = GCMUsers::uploadGCM($gcm_id, $new_gcm_id, $update);

            if ($upload !== TRUE)
                $this->_sendErrorResponse($updated);

            $this->setHeader(200);
            $this->_sendResponse(true, $upload);
        });
    }

    private function _sendResponse($status, $output = [], $code = "") {
        if ($code)
            $this->setHeader($code);
        $this->renderJSON([
            "data" => [
                "success" => (bool) $status,
                "result" => is_array($output) ? $output : [$output],
            ],
            "timestamp" => strtotime("now"),
        ]);
        exit();
    }

    private function _sendErrorResponse($output) {
        $this->renderJSON([
            "data" => [
                "success" => FALSE,
                "result" => is_array($output) ? $output : [$output],
            ],
            "timestamp" => strtotime("now"),
        ]);
        http_response_code(417);
        exit();
    }

    private function setHeader($status) {

        $status_header = 'HTTP/1.1 ' . $status . ' ' . $this->_getStatusCodeMessage($status);
        $content_type = "application/json; charset=utf-8";
        header($status_header);
        header('Content-type: ' . $content_type);
        header('X-Powered-By: ' . "YOPO.buzz");
    }

    private function _getStatusCodeMessage($status) {
        $codes = Array(
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
        );
        return (isset($codes[$status])) ? $codes[$status] : '';
    }

    protected function renderJSON($data) {
        echo CJSON::encode($data);

        foreach (Yii::app()->log->routes as $route) {
            if ($route instanceof CWebLogRoute) {
                $route->enabled = false; // disable any weblogroutes
            }
        }
        Yii::app()->end();
    }

    /**
     * 
     * @param type $param
     * @param type $type string | int | date | boolean | array
     * @param type $allowEmpty 
     * @return boolean 
     */
    private function sanitize($params) {
        $invalid_params = [];
        $invalid_characters = array("$", "%", "#", "<", ">", "|", "?", "~", "`", "!", "*");
        foreach ($params as $key => $value) {
            switch ($key) {
                case 'string':
                    foreach ($value as $name => $param) {
                        $param = str_replace($invalid_characters, "", trim($param));
                        if (gettype($param) != 'string' || empty($param))
                            array_push($invalid_params, ["string" => $name]);
                    }

                    break;
                case 'date':
                    foreach ($value as $name => $param) {
                        $param = preg_replace("/[a-zA-Z]/", "", $param);
                        $param = str_replace($invalid_characters, "", trim($param));
                        if (gettype($param) != 'string' || empty($param))
                            array_push($invalid_params, ["Date" => $name]);
                    }
                    break;
                case 'int':
                    foreach ($value as $name => $param) {
                        $param = str_replace($invalid_characters, "", trim($param));
                        if (!is_numeric($param) || !isset($param))
                            array_push($invalid_params, ["Integer" => $name]);
                    }
                default:
                    break;
            }
        }
        if (sizeof($invalid_params) != 0)
            $this->_sendErrorResponse([["Invalid parameter" => $invalid_params]]);
        else
            return TRUE;
    }

    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}

?>
