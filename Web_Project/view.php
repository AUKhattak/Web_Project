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
            <img src="camera-15.png" style="margin-left:60px; margin-top:-7px;" alt="login" height="50" width="50" align="left">
            <img src="miranda_cosgrove_png_signature__violet__by_princessjxoxo13-d51qrvq.png" alt="login" height="50" width="150" align="right">
          <p style="color: #CCCCCC; margin-left:100px; font-style:italic"> ExTreme'S PiCtuRes</p>
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
    </div>
    <br></br><br></br>
     <div>



  <div class="insert" style="margin-left:70px; width:1200px; height:500px; background-color:#FFF; margin-left:auto; margin-right:auto; margin-top:14px; overflow:auto">
<form action="" method="post">
<table width="1180px" height="500px;" border="2px"  style="background-color:#FFFFFF;  overflow:auto">
 <tr style="height:30px;">
 <td><h3>ID</h3></td>
 <td><h3>Title</h3></td>
 <td><h3>Image</h3></td>
  <td style="width:20px"><h3>pixel</h3></td>
 <td><h3>Discription</h3></td>
 <td><h3>Delete</h3></td>
 </tr>
 
 <?php
mysql_connect("localhost","root","");
mysql_select_db("extreme");
 
 
 $qry="select * from picture";
 $run=mysql_query($qry);
     while($row=mysql_fetch_array($run)){
	$id=$row['id'];
	
?>
<tr>
<td ><?php echo $row['id'];?></td>
<td ><?php echo $row['title'];?></td>
<td ><img src="images/<?php echo $row['pic'];?>" width="80px;"></td>
<td ><?php echo $row['pixel'];?></td>
<td ><?php echo $row['des'];?></td>
<td ><a href="delete.php?del=<?php echo $id;?>"> Delete</td>

 </tr>
 
 
 
 
 <?php } ?> 
 </>
 </table>
 
 </form>
</div>
</div>
<br>
<center>
 <a href="picture2.php" style="color: #000000">   CLICK HERE </a>
 <P style="color:#CCCCCC; font-style:italic;"> TO ADD A PICTURE</P>
</center>
<br>
<center>
<footer>


	<div align="center" style=" border-top:solid 1px #DDDDDD; width:700px; margin-left:60px; margin-top:0px;">

   <p style="color:#CCCCCC">Copyright@ Design By ExTreme,All Rights Reserved</p>
   </footer>
</center>
 
</div>

</body>
</html>
</div>
