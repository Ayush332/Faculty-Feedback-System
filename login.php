 <!DOCTYPE html><?php session_start();

?>
 <html><title> Login</title>
<head><style>

#header {
    
    color:blue;
    width:100%;
   height:10%%;
    padding:8px;
}
#container{
        width:100%;
        margin-left:20px;
        margin-right:20px;
        height:70%;
      padding:10px; 
    }

</style>
</head>

<body style="background:radial-gradient(#bfbfbf,#404040,#333333)">
<div id="header">

  <img src="logo.png" style="float:left;color:grey;  height:90px;width:110px; margin-left:300px;margin-top:5px;" >
        		<!-- bhaaratiiya suchanaa praudyogikii san:sthaan guwaahaat:ii -->
                
        		<span style="font-family:hindi,&#39; Lohit Devanagari &#39;">
                    <h2>
                       <p style="color:white; font-weight:bold; font-size:20px;"> &nbsp;&nbsp;&nbsp;&nbsp; भारतीय सूचना
प्रौद्योगिकी संस्थान गुवाहाटी</p>
                    </h2>
        		</span>
			        <p style="color:white; font-weight:bold; margin-left:100px;font-size:20px;margin-top:-0.85em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Indian Institute of Information Technology Guwahati</p>
			        
                     	    			    
</div>

<div align="center" id="container" >
<font size="6">
<h4 align="center">  FEEDBACK LOGIN</h4></font>


 <form  action="action_page.php" method="post" >
<font size="4">  Login_Id:<br>
  <input type="text" name="ln" placeholder="login_Id"><br><br>
  Login_Password:<br></font>
  <input type="password"name="li" placeholder="login_Password"><br><br>
  <?php $i=0;
  $var=array("ADMIN", "STUDENT");
  while($i<2){?>
  <input type="radio" value="<?php print "$var[$i]"; ?>" name="value" ><?php print "$var[$i]";
  $i++;}
  ?><br><br><br>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset"><br>
  </form><br><br><br><br>


  </div>
  <?php
  $var1=$_POST["r"];
  print "$var1";?>
  <div style="background:light-black; width:100%; height:15%;position:absolute; padding:10px; " id="foot">
<div style="float:left;padding-left:80px;">
<p style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:18px; color:#FFF; text-align:left">
Copyright © 2014<br>
IIIT Guwahati<br>
All rights reserved.</p></div>
<div style="float:right;padding-right:80px;">
<p style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:18px; color:#FFF; text-align:right">
Ambari<br>
G.N.Bordoloi Road<br>
Guwahati 781001
</p>
</div>
</div></body></html>


</body>
</html>
