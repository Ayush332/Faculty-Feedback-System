
<?php 
$user_id;
include 'Database.inc.php';
//require 'core.inc.php';
//echo 'Hello';
function getdata($field)
{
	$sql= "Select $field from student where s_id ='$_SESSION[user_id]' ";
    if($result=mysql_query($sql))
	{
    	
		if($res=mysql_fetch_assoc($result))
		{
			
			$ra= $res[$field];
			//$res['$field'];
			return $ra;
		}
	}
}
//echo getdata('s_name');
function get_data($field)
{
	$sql= "Select $field from takes where s_id ='$_SESSION[user_id]' ";
    if($result=mysql_query($sql))
	{
    	
		if($res=mysql_fetch_assoc($result))
		{
			
			$ra= $res[$field];
			//$res['$field'];
			return $ra;
		}
	}
}
function getfield($field1,$field2)
{
	$sql= "Select $field1 from takes where s_id ='$_SESSION[user_id]' and $field1!=$field2 ";
    if($result=mysql_query($sql))
	{
		if($res=mysql_fetch_assoc($result))
		{		
			$ra= $res[$field1];
			//$res['$field'];
			return $ra;
		}
	}
}
?>