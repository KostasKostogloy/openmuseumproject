<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $id;
	const  ERROR_NOT_ACTIVE = 3;
	
	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
    public function authenticate()
    {
        $user=User::model()->findByAttributes(array('email'=>$this->username));
		$encryption= new Encryption;
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($encryption->validate_password($this->password, $user->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->id=$user->id;
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
    }
 
    public function getId(){
        return $this->id;
	}
}