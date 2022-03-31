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
<div style=" background-color:#0C88AF">
<h1>
            <img src="rates-icon.png" style="margin-left:60px; margin-top:-10px" alt="login" height="50" width="60" align="left">
            <img src="miranda_cosgrove_png_signature__violet__by_princessjxoxo13-d51qrvq.png" alt="login" height="50" width="150" align="right">
          <p style="color: #CCCCCC; margin-left:100px; font-style:italic"> ExTreme'S RaTes</p>
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
    <br></br><br></br><br></br>
    <div class="order_main">
    
<div class="order">
<h1>
<img src="camera-15.png" height="45" width="45" align="left" style="margin-left:350px">
<p style="color:#CCCCCC; margin-left:330px; font-style:italic">PhotoShoot Rate</p>
 <h2>

<table style="color:#CCCCCC; font-style:italic; font-size:24px; margin-left:330px; border:solid 1px #CCCCCC">
  <tr style="width:100px">
    <td >FUNCTION TYPE...................RATE</td>
    
  </tr>
  <tr style="border:#222222; background-color:#222222">
    <td>Solo Photoshoot......................20,000</td>
    
    
  </tr>
  <tr>
    <td>Party Function........................30,000</td>
        
  </tr>
  <tr style="border:#222222; background-color:#222222">
    <td>Marrige Function...................50,000</td>
       
  </tr>
  <tr>
    <td>University Function................10,000</td>
     
    
  </tr>
  <tr style="border:#222222; background-color:#222222">
    <td>Trip Assist...............................30,000</td>
    </tr>
  <tr>
    <td>Couple Shoot..........................30,000</td>

      </tr>
        <tr style="border:#222222; background-color:#222222">
    <td>Family Shoot...........................30,000</td>
        
  </tr>
    <tr>
    <td>Family Function.....................30,000</td>
        
  </tr>
  </table>
</div>

<div class="photorder">
<h1>
<img src='video.png' height="48" width="48" align="left">
<p style="color:#CCCCCC; font-style:italic">VideoShoot Rate</p>
</h1>

<table style="color:#CCCCCC; font-style:italic; font-size:24px;border:solid 1px #CCCCCC">
  <tr style="width:100px">
    <td >FUNCTION TYPE..................RATE</td>
    
  </tr>
  <tr style="border:#222222; background-color:#222222">
    <td>Solo Videoshoot......................20,000</td>
    
    
  </tr>
  <tr>
    <td>Party Videoshoot....................30,000</td>
        
  </tr>
  <tr style="border:#222222; background-color:#222222">
    <td>Marrige Videoshoot...............50,000</td>
       
  </tr>
  <tr>
    <td>University Videoshoot............10,000</td>
     
    
  </tr>
  <tr style="border:#222222; background-color:#222222">
    <td>Trip Videoshoot......................30,000</td>
    </tr>
  <tr>
    <td>Couple Videoshoot.................30,000</td>

      </tr>
        <tr style="border:#222222; background-color:#222222">
    <td>Family Videoshoot..................30,000</td>
        
  </tr>
    <tr>
    <td>Function Videoshoot...............30,000</td>
          </tr>
  </table>
</div>
<div class="link">
 <a href="order.php" style="color: #000000">   CLICK HERE </a>
</div>
<div class="linktwo">
<P style="color:#CCCCCC; font-style:italic;"> TO GIVE AN ORDER</P>
</div>
</div>
 <center>
<footer>


	<div align="center" style=" border-top:solid 1px #DDDDDD; width:700px; margin-left:60px; margin-top:500px;">

   <p style="color:#CCCCCC">Copyright@ Design By ExTreme,All Rights Reserved</p>
</center>
</footer>
</div>
</body>
</html>
