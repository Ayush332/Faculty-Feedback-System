<!DOCYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>LOGIN </title>
        

    </head>
    <body bgcolor="Magenta">
	<div id="asd"> <img src="IIITGLogo.png" height=100px width=115px/></div>

<span style="font-family:hindi, &#39;Lohit Devanagari&#39;;">
	    <h2>
		<div id="xyz1" style="color:red; font-weight:bold; font-size:35px;" lang="hi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;भारतीय सूचना
प्रौद्योगिकी संस्थान गुवाहाटी</div>
<div id="xyz" style="color:blue; font-weight:bold; font-size:42px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Indian Institute of Information Technology Guwahati</div>
	    </h2>
		</span>
	
<br><br><br><br><br><br>
<center>
<form method="post" action="try.php">
<?php
require 'Database.inc.php';
include 'core.inc.php';
$b1=$_POST['na1']; 
$b2=$_POST['na2']; 
$b3=$_POST['na3']; 
$b4=$_POST['na4'];  
$b5=$_POST['na5'];  
$b6=$_POST['nb1'];  
$b7=$_POST['nb2'];  
$b8=$_POST['nb3'];  
$b9=$_POST['nb4'];  
$b10=$_POST['nb5'];  

$comm=$_POST['comments'];
$cid=$_POST['check'];
$sid=$_SESSION['user_id'];
//$uid=$_POST['Username'];
//$pass=$_POST['Password'];
//$type='E';
$sql = " Insert into feedback values($cid,$b1,$b2,$b3,$b4,$b5,$b6,$b7,$b8,$b9,$b10,$comm)";
if ($result = mysql_query($sql)) 	
{
	$sql2= "Insert into fill values($sid,$cid,0)";
	$result3 =mysql_query($sql2);
}
else
{
	echo "asdads";
}




?>
THANKS FOR THE FEEDBACK , Your Feedback Matter for us
<input type="submit" value="Continue">
</form>
</center>
</body>
</html>


