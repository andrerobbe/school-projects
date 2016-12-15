<?php 

class MESSAGE 
{
	function __construct()
	{
	}
	public function setMessage($message)
	{
		$_SESSION["message"] = $message[0];
		$_SESSION["type"] = $message[1];
		return;
	}
	public function getMessage()
	{
			$mssg="";
			if (isset($_SESSION['message'])) 
			{
				$mssg=$_SESSION['message'];
				unset($_SESSION["message"]);
				unset($_SESSION["type"]);
			}
			else
			{
				$mssg=FALSE;
			}
			return $mssg;
	}
}
 ?>