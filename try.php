<!DOCYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset="utf-8">
<?php ini_set('session.cache_limiter','public');
session_cache_limiter(false);?>
<?php include 'Database.inc.php'; //include 'core.inc.php'; ?> 

<style>
p {color:orange;padding:0px;}

  #img {
  opacity:1.3;padding:0;
  }
  #img1 {
  opacity:1.3;padding:0; position:absolute;top:0px;left:0px;
  }
  
  #cnl{position:absolute; top:130px;left:150px;color:orange;}
  #cn{position:absolute; top:80px;left:550px;color:orange;}
  #dbmsl{position:absolute; top:130px;left:950px;color:orange;}
  #dbms{position:absolute; top:300px;left:100px;color:orange;}
  #scifi{position:absolute; top:300px;left:1000px;color:orange;}
  #che{position:absolute; top:470px;left:150px;color:orange;}
  #flat{position:absolute; top:520px;left:550px;color:orange;}
  #pro{position:absolute; top:470px;left:950px;color:orange;}
  

 


 a:hover{color:orange; text-decoration:underline;font-size:50px}
  a:link{background-color:blue;color:white;text-decoration:underline;font-weight:bold;font-size:25px;}
	a:active{background-color:orange;}
	
input[type="submit"]{
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #f4f4f4;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 65px;
text-transform: uppercase;
width: 300px;
-webkit-appearance:none;
}

#course{
position:absolute;
top:285px;left:500px;
background-color: #98DE90;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: black;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 85px;
text-transform: uppercase;
width: 400px;
-webkit-appearance:none;
}

#pos{
position:absolute;
top:670px;left:550px;
background-color: #98DE90;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: black;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
text-transform: uppercase;
width: 200px;
-webkit-appearance:none;
}

  </style>
  <title> Your Details </title>
</head>


<body>
<?php   include 'core.inc.php' ?>
	


<div id="img">
<p><img src="landscape2.png" width="1350" height="640" alt="IIITGLogo in saanich" /></p>
</div>


<div id="cnl"> <form action=<?php $sql = " Select completed from fill where c_id=CS-252 and s_id ='$_SESSION[user_id]' ";
if ($result = mysql_query($sql)) 	
{ echo "try.php"; }
else{ echo "networkslab.html";} ?> onsubmit="return validateForm()" method="post">
<input type="submit" value= " Computer Networks Lab"></form></div>

<div id="cn"> <form action=<?php 
$sql = " Select completed from fill where c_id=CS-251 and s_id ='$_SESSION[user_id]' ";
if ($result = mysql_query($sql)) 	
{ echo "try.php"; }
else{ echo "networks.html";} ?> onsubmit="return validateForm()" method="post">
<input type="submit" value= " Computer Networks"></form></div>

<div id="dbmsl"> <form action=<?php $sql = " Select completed from fill where c_id=CS-241 and s_id ='$_SESSION[user_id]' ";
if ($result = mysql_query($sql)) 	
{ echo "try.html"; }
else{ echo "dbmslab.html";} ?> onsubmit="return validateForm()" method="post">
<input type="submit" value= " Database Management Systems Lab"></form></div>

<div id="dbms"> <form action=<?php $sql = " Select completed from fill where c_id=CS-240 and s_id ='$_SESSION[user_id]' ";
if ($result = mysql_query($sql)) 	
{ echo "try.php"; }
else{ echo "dbms.php";} ?> onsubmit="return validateForm()" method="post">
<input type="submit" value= "Database Management Systems"></form></div>

<div id="che"> <form action=<?php $sql = " Select completed from fill where c_id=SC-202 and s_id ='$_SESSION[user_id]' ";
if ($result = mysql_query($sql)) 	
{ echo "try.php"; }
else{ echo "chemistry.html";} ?> onsubmit="return validateForm()" method="post">
<input type="submit" value= " Chemistry"></form></div>

<div id="scifi"> <form action="scifi.html" onsubmit="return validateForm()" method="post">
<input type="submit" value= " Science-Fiction"></form></div>

<div id="flat"> <form action="flat.html" onsubmit="return validateForm()" method="post">
<input type="submit" value= " Formal Languages and Automata"></form></div>

<div id="pro"> <form action="project.html" onsubmit="return validateForm()" method="post">
<input type="submit" value= " Project"></form></div>


<div id="course" style="color:black;font-weight:bold; font-size:25px;"></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Courses</div>

<div id="pos"> <form action="index.html" onsubmit="return validateForm()" method="post">
<input type="submit" value="Sign Out">
</form></div>

</body>
</html>