<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		// $users=array(
		// 	// username => password
		// 	'demo'=>'demo',
		// 	'admin'=>'admin',
		// );
		// $users=Thanhvien::model()->findByAttributes(array('hoTen'=>$username));
		// if(!isset($users)){
		// 	$this->errorCode=self::ERROR_USERNAME_INVALID;
		// }
		// elseif(!isset($users->password)||$users->password!==$this->password){
		// 	$this->errorCode=self::ERROR_PASSWORD_INVALID;
		// }
		// else{
		// 	$this->errorCode=self::ERROR_NONE;
		// 	Yii::app()->user->setState('userInfor',$users->attributes);
		// }

		// return !$this->errorCode;


		 	$users=Yii::app()->request->getPost('hoTen');
            $password=Yii::app()->request->getPost('matKhau');
            $url=Yii::app()->request->getPost('url');
   
            $users=Thanhvien::model()->findByAttributes(array('hoTen'->$this->username));

            if(!isset($users)){
				$this->errorCode=self::ERROR_USERNAME_INVALID;
			}
			elseif(!isset($users->password)||$users->password!==$this->password){
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			}
			else{
				$this->errorCode=self::ERROR_NONE;
				Yii::app()->user->setState('userInfor',$users->attributes);
			}

			return !$this->errorCode;
            
	}
}