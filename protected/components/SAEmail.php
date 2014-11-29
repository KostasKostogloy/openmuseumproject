<?php

class SAEmail
{
    
	/**
	 * 
	 * @param email $to
	 * @param string $subject
	 * @param string $message
	 * @param email $from OPTIONAL defaults to Yii::app()->params['adminEmail']
	 * @return boolean
	 */
    static function sendMail($to, $subject, $message,$from=NULL)
    {
		if (is_null($from))
		{
			$from=Yii::app()->params['adminEmail'];
		}
        $headers = 'From:'. $from . "\r\n" .
                    'Reply-To:'. $from . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

        if(mail($to, $subject, $message, $headers))
            return TRUE;
        else
            return FALSE;
    }
	
	
	static function errorEmail($exception)
	{
		$from = 'errors@webmaster.gr';
		$to = Yii::app()->params['adminEmail'];
        $headers = 'From:'. $from . "\r\n" .
                    'Reply-To:'. $from . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
		
		$subject = Yii::t('app','An unexpected error occurred from {SERVER_NAME} app', array('{SERVER_NAME}'=>$_SERVER['SERVER_NAME']));
		
        if(@mail($to, $subject, $exception, $headers))
            return TRUE;
        else
            return FALSE;
	}
}