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
            <img src="studio.png" style="margin-left:60px; margin-top:-7px" alt="login" height="50" width="50" align="left">
            <img src="miranda_cosgrove_png_signature__violet__by_princessjxoxo13-d51qrvq.png" alt="login" height="50" width="150" align="right">
          <p style="color: #CCCCCC; margin-left:100px; font-style:italic"> ExTreme'S PhotoStudio</p>
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
    <div style="background-color:#0C88AF;height:607px; width:600px; float:left; margin-left:5px;">
    <h1 style="font-style:italic; color:#FFFFFF"><br><br><br>Stunning Photography Effects
For Unlimited Creativity </h1>
<p style="color:#FFFFFF; font-style:italic; font-size:24px"><br><br>
Dive into the most amazing collection of high-quality photos, where we can click and turn your photo into a hipster-style snap, futuristic 3-D image, oil painting, pencil sketch, fragment from a comic book, dramatic black & white shot, cross-processed photo and much more.We can also adjust the amount of each filter to ensure it perfectly fits your style..</p>

</div>
        <div style=" float:left;background-color:#0C88AF; height:607px; width:861px; margin-left:645px; border-radius: 15px; margin-top:-600px; background-image:url(Pictures/main.png);">
    

    
    </div>
            <div style=" float:left;background-color:#0C88AF; height:607px; width:861px; margin-top:280px; border-radius: 15px; background-image:url(Pictures/main2.jpg);">
    

    
    </div>
        <div style="background-color:#0C88AF;height:607px; width:600px;  float:left; margin-left:5px; margin-top:280">
    <h1 style="font-style:italic; color:#FFFFFF"><br><br><br>Perfect Finishing
Touches to Start Something Amazing  </h1>
<p style="color:#FFFFFF; font-style:italic; font-size:24px"><br><br>
We can add frames to highlight the style. Tell the story with creative text labels or enhance your photo even further with a set of
handy editing tools. These finishing touches may as well become a start of more creative explorations with ExTreme Photo Studio. Your photography creativity never sleeps. .</p>

</div>


<div style="background-color:#0C88AF;height:607px; width:600px; margin-left:5px; margin-top:1700px">
    <h1 style="font-style:italic; color:#FFFFFF"><br><br><br><br><br><br><br>Creative
Freedom to Mix and Tweak Filters </h1>
<p style="color:#FFFFFF; font-style:italic; font-size:24px"><br><br>
ExTreme Photo Studio is the creative powerhouse. You get more high quality photos that can easily turn photo into a vintage masterpiece, pencil sketch, futuristic 3-D shot, oil or graffiti painting, lomography style snap and much more. .</p>

</div>
        <div style=" float:left;background-color:#0C88AF; height:607px; width:861px; margin-left:705px; margin-top:-430px; border-radius: 15px; background-image:url(Pictures/main4.jpg); width:800px; height:450px">
    

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
