<!DOCYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<meta http-equiv="Content-Language" content="hi">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<style type="text/css">
	
	form fieldset input[type="submit"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 280px;
-webkit-appearance:none;
}
		
		body{background-color:#E9F0EE;}
		ul{list-style-image:url(shirshendu.jpgn);padding-left:120px;}
		#sd{background-color:orange; color:green;}
		#feedback{color:violet;}
		#pos{position:absolute;top:300px;left:20px;}
		table{border:solid black; color:#0d0d0d;}
		tr{background-color:#98de90;}
		 #xyz{ background-color:#E9F0EE;position:absolute;top:10px;left:140px;}
#xyz1{ background-color:#E9F0EE;position:absolute;top:50px;left:300px;}
	#img1{position:absolute;top:450px;left:20px;}
	#img2{position:absolute;top:600px;left:20px;}
	#img3{position:absolute;top:750px;left:20px;}
	#img4{position:absolute;top:900px;left:20px;}
	#img5{position:absolute;top:450px;left:650px;}
	#img6{position:absolute;top:600px;left:650px;}
	#img7{position:absolute;top:750px;left:650px;}
	#img8{position:absolute;top:900px;left:650px;}
	
	#p1{position:absolute;top:490px;left:170px;}
	#p2{position:absolute;top:640px;left:170px;}
	#p3{position:absolute;top:790px;left:170px;}
	#p4{position:absolute;top:940px;left:170px;}
	#p5{position:absolute;top:490px;left:800px;}
	#p6{position:absolute;top:640px;left:800px;}
	#p7{position:absolute;top:790px;left:800px;}
	#p8{position:absolute;top:940px;left:800px;}
	</style>
</head>

<body>
<?php ini_set('session.cache_limiter','private');
session_cache_limiter(true);?>
<?php
require 'Database.inc.php';
include 'core.inc.php';
//include 'core.inc.php';
//include 'student.php';
$uid=$_POST['Username'];
$pass=$_POST['Password'];
$type='E';
$sql = " Select username, password ,type from login where username='$uid' and password= '$pass' ";
if($result = mysql_query($sql)) 	
{
	//print "fewfaefwafewa"; 
	$user_id=mysql_result($result, 0 , 'username');
	$t=mysql_result($result,0,'type');
	if($t==$type)
	{
		//echo $type;
		$_SESSION['user_id']=$user_id;
		//echo '<form name= "adm" method = "post" action ="admin.php"></form>';
		header('Location : index.php');
	}
	if($t!=$type)
	{	
		$_SESSION['user_id']=$user_id;
		header('Location : index.php'); 
	 }




?>
<form action=   <?php 
include 'student.php'; $sem= get_data('semester');
    switch($sem) {
        case "2":
            echo "try1.html";
            break;
        case "3":
            echo "try3.html";
            break;
        case "4":
            echo "try.php";
            break;
        default:
            $val = "No radio has been selected for Radio Group 1";
    }?> onsubmit="return validateForm()" method="post">
<fieldset>
<img src="IIITGLogo.png" height=100px width=115px/></br></br>
<div id="sd" style="font-weight:bold; font-size:25px;" > Student details: </div>
</br><img src= "20160116_132844.jpg" height=100px width=115px/></br>
<span style="font-family:hindi, &#39;Lohit Devanagari&#39;;">
	    <h2>
		<div id="xyz1" style="color:black; font-weight:bold; font-size:35px;" lang="hi">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;भारतीय सूचना
प्रौद्योगिकी संस्थान गुवाहाटी</div>
	    </h2>
		</span>
			<div id="xyz" style="color:blue; font-weight:bold; font-size:42px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Indian Institute of Information Technology Guwahati</div>

</br>


<table border="4" cellpadding="10" width=100%>
<tr>
<th><center> Name </center></th>
<th><center> Semester </center></th>
<th><center> Roll-no </center></th>
<th><center> Department </center></th>
<th><center> Year </center></th>
<th><center> E-Mail </center></th>
</tr>

<tr>
<td><center><?php  $name= getdata('s_name'); echo $name;?></center></td>
<td><center><?php echo get_data('semester');?></center></td>
<td><center><?php echo getdata('s_id'); ?></center></td>
<td><center>j<?php //echo get_data('department');?></center></td>
<td><center><?php echo get_data('year');?></center></td>
<td><center><?php echo getdata('Email'); }?></center></td>

</tr>
</table>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

<div id="img1"><img src="Rakesh.jpg" height=120px width=115px/></div></br></br>
<div id="img2"><img src="sanjay.jpg" height=120px width=115px/></div></br></br>
<div id="img3"><img src="shirshendu.jpg" height=120px width=115px/></div></br></br>
<div id="img4"><img src="shirshendu.jpg" height=120px width=115px/></div></br></br>
<div id="img5"><img src="IIITGLogo.png" height=120px width=115px/></div></br></br>
<div id="img6"><img src="rajarshi.jpg" height=120px width=115px/></div></br></br>
<div id="img7"><img src="IIITGLogo.png" height=120px width=115px/></div></br></br>
<div id="img8"><img src="skarmakar.jpg" height=120px width=115px/></div></br></br>

<div id="p1" style="font-weight:bold; font-size:25px;color:orange;">Computer Networks</div>
<div id="p2" style="font-weight:bold; font-size:25px;color:red;">Computer Networks Lab</div>
<div id="p3" style="font-weight:bold; font-size:25px;color:green;">Database Management Systems</div>
<div id="p4" style="font-weight:bold; font-size:25px;color:yellow;">Database Management Systems Lab</div>
<div id="p5" style="font-weight:bold; font-size:25px;color:violet;">Chemistry</div>
<div id="p6" style="font-weight:bold; font-size:25px;color:black;">Science-Fiction</div>
<div id="p7" style="font-weight:bold; font-size:25px;color:pink;">Project</div>
<div id="p8" style="font-weight:bold; font-size:25px; color:blue;">Formal Languages and Automata Theory</div>



<div id="feedback" style="font-weight:bold; font-size:22px;"> Click here to proceed to feedback page</div>


<input type="submit" value="Click here!"></div>
</fieldset>
</form>
</body>
<html>
