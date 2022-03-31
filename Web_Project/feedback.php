<?php 
session_start();
if(!$_SESSION['c2'])
{
header("location:user_signin.php");
}

?>



<html>
<head>
<title>ExTreme Studio</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style>

</style>
</head>


<body>
<div class="outer">
<div style="background-color:#0C88AF">
<h1>
            <img src="testimonial-icon.png" style="margin-left:60px; margin-top:-10px;" alt="login" height="50" width="50" align="left">
            <img src="miranda_cosgrove_png_signature__violet__by_princessjxoxo13-d51qrvq.png" alt="login" height="50" width="150" align="right">
          <p style="color: #CCCCCC; margin-left:100px; font-style:italic">ExTreme'S  FeedBack</p>
        </h1>
        
</div>
<div class="out">
    <div class="main">	
 <a href="home.php"><div class="home"><img src="home-icon.png" style="height:60; margin-bottom:-10px" width="50"  alt=""/>Home</div></a>
  <a href="pictures.php"><div class="pic"><img src="pictures-icon.png" style="height:60; margin-bottom:-10px" width="60" alt=""/>Pictures</div></a>
  <a href="rates.php"><div class="rando"><img src="rates-icon.png" style="height:60; margin-bottom:-10px" width="50" alt=""/>Rates&Order </div> </a>
  <a href="feedback.php"><div class="feedback"><img src="Feedback.png" style="height:60; margin-bottom:-10px" width="50" alt=""/>FeedBack</div></a>
  <a href="contact.php"><div class="cntct"><img src="contactus.png" style="height:60; margin-bottom:-10px" width="50" alt=""/>Contact Info</div></a>
  <a href="about_us2.php"><div class="aboutus"><img src="aboutus.png" style="height:60; margin-bottom:-10px" width="50" alt=""/>About Us</div></a>
  <a href="log_out.php"><div class="logout"><img src="logout.png" style="height:60; margin-bottom:-10px" width="50" alt=""/>Log Out</div></a>
    </div>
    </div>
     <div style=" margin-left:10px;color:#CCCCCC">




<tr>



<td width="80%" valign="top">
    <form method="POST" action="in_feedback.php" >

Your name: <br>
<input type="text" name="realname"><br>
<br>

Your email: <br>
<input type="text" name="email"><br>
<br>

Your comments: <br>
<textarea name="comments" rows="15" cols="50" ></textarea><br><br>


male<input type="radio" value="MALE" name="gender" />
female<input type="radio" value="FeMALE" name="gender" />
<input type="submit" value="Submit">
    </form>

</div>
<footer>


	<div align="center" style=" border-top:solid 1px #DDDDDD; width:700px; margin-left:60px; margin-top:100px;">

   <p style="color:#CCCCCC">Copyright@ Design By ExTreme,All Rights Reserved</p>

</div>

</footer>
</div>


 
</body>
</html>
