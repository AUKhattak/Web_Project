<?php 
session_start();
if(!$_SESSION['c2'])
{
header("location:user_signin.php");
}

?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("extreme");
$view=$_REQUEST['item'];

$sql="SELECT * FROM `picture` WHERE `id`='$view'";
$run=mysql_query($sql);

$row=mysql_fetch_array($run);
$title=$row['title'];
	$pic=$row['pic'];
	$des=$row['des'];
	$pixel=$row['pixel'];
	$store="images/".$pic;
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
            <img src="camera-15.png" style="margin-left:60px; margin-top:-7px;" alt="login" height="50" width="50" align="left">
            <img src="miranda_cosgrove_png_signature__violet__by_princessjxoxo13-d51qrvq.png" alt="login" height="50" width="150" align="right">
          <p style="color: #CCCCCC; margin-left:100px; font-style:italic"> ExTreme'S PiCtuRes</p>
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
    <br></br><br></br>
     <div>




<div  style="width:1300px; height:800px;">
 <div style="float:left;"><img src="<?php echo $store;?>" alt="not found" width="900" height="500" > </div>
<div style="float:right;  font-style:italic; color: #CCCCCC">
<div><h1>Title:</h1></div>
<div ><h3><?php echo $title;?></h3></div>
 <br>
<div ><h3>Pixel:</h3><?php echo $pixel;?></div>
<br>
<div><h3>Description:</h3><?php echo $des;?></div>
</div>   
</div>

<footer>

	<div align="center" style=" border-top:solid 1px #FFFFFF; width:600px; margin-left:auto; margin-right:auto ">

   <p style="color:#CCCCCC">Copyright@ Design By ExTreme</p>

</div>
</footer>
 
</div>

</body>
</html>
