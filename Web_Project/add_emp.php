<?php 
session_start();
if(!$_SESSION['c2'])
{
header("location:admin_login.php");
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
            <img src="emp.png"style=" margin-top:-8px;margin-left:60px;" alt="login" height="50" width="50" align="left">
            <img src="miranda_cosgrove_png_signature__violet__by_princessjxoxo13-d51qrvq.png" alt="login" height="50" width="150" align="right">
          <p style="color: #CCCCCC; margin-left:100px">Add Employee</p>
        </h1>
        
</div>
 <div class="out">
    <div class="main">	
<a href="admin_after_signin.php"><div class="home"><img src="home-icon.png" style="height:60;margin-bottom:-10px" width="50" alt=""/>Home</div></a>
<a href="view.php"><div class="pic"><img src="pictures-icon.png" style="height:60;margin-bottom:-10px" width="60"  alt=""/>Pictures</div></a>
<a href="orderlist.php"><div class="orderlist"><img src="list.png" style="height:60;margin-bottom:-10px" width="50"  alt=""/>Order List</div></a>
<a href="add_emp.php"><div class="addemp"><img src="emp.png" style="height:60;margin-bottom:-10px" width="50"  alt=""/>Add Employe</div></a>
<a href="emp_list.php"><div class="emplist"><img src="list.png" style="height:60;margin-bottom:-10px" width="50" alt=""/>Employe list</div></a>
<a href="feedbacklist.php"><div class="feedbaklist"><img src="testimonial-icon.png" style="height:50" width="50" align="baseline" alt=""/>Feedback List</div></a>
<a href="log_out.php"><div class="logout"><img src="logout.png" style="height:60;margin-bottom:-10px" width="50"alt=""/>Log Out</div></a>

    </div>
    </div><br><br><br>
    <form name="reg" action="ins_emp.php" onSubmit="return validateForm()" method="post" >
    <H1 style="color:#FFFFFF; font-style:italic">
        REGISTER EMPLOYEE !
    </H1>
<table style="color:#FFFFFF" width="274" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td width="95"><div align="right">Employee ID:</div></td>
    <td width="171"><input type="text" name="empid" /></td>
  </tr>
  <tr>
    <td width="95"><div align="right">First Name:</div></td>
    <td width="171"><input type="text" name="fname" /></td>
  </tr>
  <tr>
    <td><div align="right">Last Name:</div></td>
    <td><input type="text" name="lname" /></td>
  </tr>
  <tr>
    <td><div align="right">Gender:</div></td>
    <td><input type="text" name="g" /></td>
  </tr>
  <tr>
    <td><div align="right">house #:</div></td>
    <td><input type="text" name="adress" /></td>
  </tr>
   <tr>
    <td><div align="right">colony:</div></td>
    <td><input type="text" name="adress1" /></td>
  </tr>
   <tr>
    <td><div align="right">city:</div></td>
    <td><input type="text" name="adress2" /></td>
  </tr>
  <tr>
    <td><div align="right">Contact No.:</div></td>
    <td><input type="text" name="contact" /></td>
  </tr>
  
  <tr>
    <td><div align="right">Cnic No.:</div></td>
    <td><input type="text" name="cnic" /></td>
  </tr>
  
  <tr>
    <td><div align="right">PAY selected:</div></td>
    <td><input type="text" name="pay" /></td>
  </tr>
  
  <tr>
    <td><div align="right">HIRE DATE:</div></td>
    <td><input type="text" name="hire_date" /></td>
  </tr>
 
 
  <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Submit" /></td>
  </tr>
</table>
    
</form>
<center>
<footer>


	<div align="center" style=" border-top:solid 1px #DDDDDD; width:700px; margin-left:60px; margin-top:400px;">

   <p style="color:#CCCCCC">Copyright@ Design By ExTreme,All Rights Reserved</p>
</center>
 </div>
</body>
</html>
