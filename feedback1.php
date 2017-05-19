<!DOCYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>LOGIN </title>
        #xyz{position:absolute;top:500px;left:200px;font-size:20px;color:orange;}

    </head>
    <body bgcolor="aqua">
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
$b11=$_POST['nb6'];  
$b12=$_POST['nb7'];  
$b13=$_POST['nb8'];  
$b14=$_POST['nb9'];  
$b15=$_POST['nb10'];  
$b16=$_POST['nc1']; 
$b17=$_POST['nc2'];  
$b18=$_POST['nc3'];  
$b19=$_POST['nc4'];  
$b20=$_POST['nc5'];  
$b21=$_POST['nd1'];  
$b22=$_POST['nd2'];  
$b23=$_POST['nd3'];   
$b24=$_POST['nd4'];  
$b25=$_POST['nd5'];
$comm=$_POST['comments'];
$cid=$_POST['check'];
$sid=$_SESSION['user_id'];

//$uid=$_POST['Username'];
//$pass=$_POST['Password'];
//$type='E';
$sql = " Insert into feedback values($cid,$b1,$b2,$b3,$b4,$b5,$b6,$b7,$b8,$b9,$b10,$b11,$b12,$b13,$b14,$b15,$b16,$b17,$b18,$b19,$b20,$b21,$b22,$b23,$b24,$b25,$comm)";
if ($result = mysql_query($sql)) 	
{
	$sql2= "Insert into fill values($sid,$cid,0)";
	$result3 =mysql_query($sql2);

}
//session_destroy();
?>


<div id="xyz">Thanks For the Feedback , Your Feedback Matter for us</div>
<input type="submit" value="Continue">
</form>
</center>
</body>
</html>


