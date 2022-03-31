
<?php
session_start();
if(@!$_SESSION['c2'])
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
            <img src="user2.png" style="margin-left:60px; margin-top:-10px" alt="login" height="50" width="50" align="left">
            <img src="miranda_cosgrove_png_signature__violet__by_princessjxoxo13-d51qrvq.png" alt="login" height="50" width="150" align="right">
          <p style="color: #CCCCCC; margin-left:100px; font-style:italic">User Login</p>
        </h1>
        
</div>
 <div class="out">
    <div class="main">	
  <a href="home2.php"><div class="home"><img src="home-icon.png" style="height:60;margin-bottom:-10px" width="50" alt=""/>Home</div></a>
    <a href="home_initial.php"><div class="pic"><img src="pictures-icon.png" style="height:60;margin-bottom:-10px" width="60" alt=""/>Pictures</div></a>
    <a href="home_initial.php"><div class="rando"><img src="rates-icon.png" style="height:60;margin-bottom:-10px" width="50"  alt=""/>Rates&Order </div></a>
    <a href="home_initial.php"><div class="feedback"><img src="Feedback.png" style="height:60;margin-bottom:-10px" width="50"  alt=""/>FeedBack</div></a>
    <a href="contact2.php"><div class="cntct"><img src="contactus.png" style="height:60;margin-bottom:-10px" width="50"  alt=""/>Contact Info</div></a>
    <a href="about_us.php"><div class="aboutus"><img src="aboutus.png" style="height:60;margin-bottom:-10px" width="50" alt=""/>About Us</div></a>
    <a href="user_admin.php"><div class="sigin"><img src="login.png" style="height:60;margin-bottom:-10px" width="50" alt=""/>Sign In</div></a>
    
    </div>
    </div>
   <div style="margin-top:200px; color:#CCCCCC">
     
<center>




<td width="80%" valign="top">
           <form method="POST" action="">
  Username: <input type="text"  size="15" name="c1" required />
  <br></br>
  Password: <input type="password"  size="15" name="c2" required /><br />
  
  <div align="center" style="margin-left:70px">
    <p><input type="submit" value="submit" name="mybutton"/></p>
  </div>
  IF YOU DON"T HAVE AN ACCOUNT PLEASE SIGN UP
  <br></br>
  <a style="color: #000000" href="signup.php"><h2>Sign Up</h2></a>
  
</form>
     
</td>
</center>
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

<?php
$conn=mysqli_connect("localhost","root","","extreme");
if(isset($_POST['mybutton']))
{
 $sname=$_POST['c1'];
 $qname=$_SESSION['c2']=$_POST['c2'];


 $query="SELEct * from sign_up where USER_NAME='$sname' and PASSWARD='$qname'";
$runn=mysqli_query($conn,$query);
if(mysqli_num_rows($runn)==1){
echo  "<script> window.location.assign('home.php?Logged=you are succesfully logged in....!','_self')</script>";
}
else{
echo "<script> alert('input your valid data')</script>";
}
}
?>

