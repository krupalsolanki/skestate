<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    private $_id;
    public $_type;
    // private $email;
    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {


        $record = User::model()->findByAttributes(array('email' => $this->username));
        if ($record == null) {
            $this->_id = 'user Null';
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if ($record->password !== $this->password) {            // here I compare db password with passwod field
            $this->_id = $this->username;
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->_id = $record['email'];
            $this->_type=$record['user_role'];
           
            $this->setState('title', $record['email']);
            
            $this->errorCode = self::ERROR_NONE;
        }
        
        
        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

}
