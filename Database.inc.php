<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "student_feedback";
//require 'core.inc.php';
$conn = mysql_connect("127.0.0.1","root","");
$selected = mysql_select_db($dbname,$conn);
//$uid=$_POST['Username'];
//$pass=$_POST['Password'];
?>