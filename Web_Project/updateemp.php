<?php 
$data1=$_REQUEST['empid'];

$link = mysql_connect('localhost','root','');
mysql_select_db('extreme');


$qry="SELECT * from `add_emp` WHERE EMP_ID ='$data1'";
  $rs1=mysql_query($qry) or die('error');
  $rd1=mysql_fetch_array($rs1);


if(isset($_POST['submit'])){




$picker1=$_POST['fname'];
$picker2=$_POST['lname'];
$picker3=$_POST['g'];
$picker4=$_POST['adress'];
$picker5=$_POST['adress1'];
$picker6=$_POST['adress2'];
$picker7=$_POST['contact'];
$picker8=$_POST['cnic'];
$picker9=$_POST['pay'];
$picker10=$_POST['hire_date'];








$qry4="UPDATE `extreme`.`add_emp` SET `F_NAME` = '$picker1', `L_NAME` = '$picker2', `GENDER` = '$picker3', `HOUSE_NO` = '$picker4', `COLONEY` = '$picker5', `CITY` = '$picker6', `CONTACT` = '$picker7', `CNIC` = '$picker8', `PAY` = '$picker9', `HIRE_DATE` = '$picker10' WHERE `add_emp`.`EMP_ID` = '$data1'";
mysql_query($qry4);
header("location:emp_list.php");




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
       <div class="home"><a href="admin_after_signin.php"><img src="home-icon.png" style="height:50" width="50" align="absmiddle" alt=""/>HOME</a></div>
   <div class="pic"><a href="picture2.php"><img src="pictures-icon.png" style="height:60" width="60" align="absmiddle" alt=""/>PICTURES</a></div>
    <div class="orderlist"><a href="orderlist.php"><img src="list.png" style="height:50" width="50" align="absmiddle" alt=""/>Order List</a></div>
    <div class="addemp"><a href="add_emp.php"><img src="emp.png" style="height:50" width="50" align="absmiddle" alt=""/>Add Employe</a></div>
      <div class="emplist"><a href="emp_list.php"><img src="list.png" style="height:50" width="50" align="absmiddle" alt=""/>Employe list</a></div>
        <div class="feedbaklist"><a href="feedbacklist.php"><img src="testimonial-icon.png" style="height:50" width="50" align="absmiddle" alt=""/>FEEDBACK LIST</a></div>
    <div class="logout"><a href="log_out.php"><img src="logout.png" style="height:50" width="50" align="absmiddle" alt=""/>Log Out</a></div>
    </div>
    </div><br><br><br>
    <form name="reg" action=""  method="post" >
    <H1 style="color:#FFFFFF; font-style:italic">
        REGISTER EMPLOYEE !
    </H1>
<table style="color:#FFFFFF" width="274" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td width="95"><div align="right">Employee ID:</div></td>
    <td width="171"><input type="text"  name="empid" value="<?php echo $rd1['EMP_ID']; ?>" /></td>
  </tr>
  <tr>
    <td width="95"><div align="right">First Name:</div></td>
    <td width="171"><input type="text" name="fname" value="<?php echo $rd1['F_NAME']; ?>" /></td>
  </tr>
  <tr>
    <td><div align="right">Last Name:</div></td>
    <td><input type="text" name="lname" value="<?php echo $rd1['L_NAME']; ?>" /></td>
  </tr>
  <tr>
    <td><div align="right">Gender:</div></td>
    <td><input type="text" name="g" value="<?php echo $rd1['GENDER']; ?>" /></td>
  </tr>
  <tr>
    <td><div align="right">house #:</div></td>
    <td><input type="text" name="adress" value="<?php echo $rd1['HOUSE_NO']; ?>" /></td>
  </tr>
   <tr>
    <td><div align="right">colony:</div></td>
    <td><input type="text" name="adress1" value="<?php echo $rd1['COLONEY']; ?>" /></td>
  </tr>
   <tr>
    <td><div align="right">city:</div></td>
    <td><input type="text" name="adress2" value="<?php echo $rd1['CITY']; ?>" /></td>
  </tr>
  <tr>
    <td><div align="right">Contact No.:</div></td>
    <td><input type="text" name="contact" value="<?php echo $rd1['CONTACT']; ?>" /></td>
  </tr>
  
  <tr>
    <td><div align="right">Cnic No.:</div></td>
    <td><input type="text" name="cnic" value="<?php echo $rd1['CNIC']; ?>" /></td>
  </tr>
  
  <tr>
    <td><div align="right">PAY selected:</div></td>
    <td><input type="text" name="pay" value="<?php echo $rd1['PAY']; ?>" /></td>
  </tr>
  
  <tr>
    <td><div align="right">HIRE DATE:</div></td>
    <td><input type="text" name="hire_date" value="<?php echo $rd1['HIRE_DATE']; ?>" /></td>
  </tr>
 
 
  <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="UPDATE" /></td>
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
