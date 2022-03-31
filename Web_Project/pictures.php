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




<div>
<?php
mysql_connect("localhost","root","");
mysql_select_db("extreme");
 
 $i=1;
 $qry="select * from picture ORDER BY 1 DESC limit 21";
 $run=mysql_query($qry);
     while($row=mysql_fetch_array($run)){
	 $id=$row['id'];
	$title=$row['title'];
	$pic=$row['pic'];
	$des=$row['des'];
	$pixel=$row['pixel'];
	$store="images/".$pic;
	
?>
<tr style="float:left; margin-left:30px;">

<td><a href="final.php?item=<?php echo $id;?>" ><img src="<?php echo $store;?>" width="206" height="200" />  </a></td></tr>
<?php  $i++; $store="";} ?><strong></strong>



</div>  
<br><br> 


<footer>

	<div align="center" style=" border-top:solid 1px #FFFFFF; width:600px; margin-left:auto; margin-right:auto">

   <p style="color:#CCCCCC">Copyright@ Design By ExTreme</p>

</div>
</footer>
 
</div>

</body>
</html>
