<?php
$user_id;
ob_start();
session_start();
function loggedin()
{
	if(isset($SESSION['user_id']) && !empty($SESSION['user_id']))
	{
		return true;
	}
	else
	{
		return false;
	}
}

?>