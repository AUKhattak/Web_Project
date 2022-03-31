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
            <img src="rates-icon.png" style="margin-left:60px;margin-top:-10px" alt="login" height="50" width="60" align="left">
            <img src="miranda_cosgrove_png_signature__violet__by_princessjxoxo13-d51qrvq.png" alt="login" height="50" width="150" align="right">
          <p style="color: #CCCCCC; margin-left:100px; font-style:italic"> ExTreme'S OrdeR</p>
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
    <form name="reg" action="ins_order.php" onSubmit="return validateForm()" method="post" >
    <H1 style="color:#CCCCCC; font-style:italic">
        ADD YOUR ORDER: 
    </H1>
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td width="95"><div align="right">FUNCTION TYPE :</div></td>
    <td width="171"><input type="item#" name="item" /></td>
  </tr>
  <tr>
    <td width="95"><div align="right">NAME:</div></td>
    <td width="171"><input type="item#" name="itemid" /></td>
  </tr>
  <tr>
    <td><div align="right">PHONE # :</div></td>
    <td><input type="text" name="itemname" /></td>
  </tr>
  <tr>
    <td><div align="right">ADRESS(COMPLETE):</div></td>
    <td><input type="text" name="itemcompany" /></td>
  </tr>
  <tr>
    <td><div align="right">DATE  :</div></td>
    <td><input type="text" name="itemquantity" placeholder="YYYY-MM-DD"  /></td>
  </tr>

  <tr>
    <td><div align="right">TIMING  :</div></td>
    <td><input type="" name="enteringdate"placeholder="HH:MM:SS"  /></td>
  </tr>
  <tr>
      <td><div align="right">payment type :</div></td>
      <td>
          <input type="radio" value="VisaCard" name="gender" /><img src="p1.jpg">
<input type="radio" value="MasterCard" name="gender" /><img src="p2.jpg">
        
      </td>
  </tr>
       <tr>
    <td><div align="right">Account #  :</div></td>
    <td><input type="" name="0enteringdate" /></td>
  </tr>
      <tr>
    <td><div align="right">Amount :</div></td>
    <td><input type="text" name="2enteringdate" placeholder="AS DEFINED PER FUNCTION "  /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="ADD" type="submit" value="ADD ORDER" /></td>
  </tr>
 
</table>
    
</form>
 <center>
<footer>


	<div align="center" style=" border-top:solid 1px #DDDDDD; width:700px; margin-left:60px; margin-top:500px;">

   <p style="color:#CCCCCC">Copyright@ Design By ExTreme,All Rights Reserved</p>
</center>
</footer>
</div>
</body>
</html>
