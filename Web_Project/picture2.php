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




<form action="" method="post" enctype="multipart/form-data">
<table width="600px" height="600px;" border="2px"  style="background-color:#FFFFFF; margin-left:auto; margin-right:auto; border-radius:10px; color:#874192; font-style:italic">
<tr>
<td  style=" border:0px"></td>
<td  style=" border:0px"><h2>Insert Your Picture</h2></td>
</tr>
<tr>
<td><h2>Title</h2></td>
<td><input type="text" name="titel" required></td>
</tr>
<tr>
<td><h2>Picture</h2></td>
<td><input  type="file" name="image" required></td>
</tr>
<tr>
<td><h2>Pixel</h2></td>
<td><input type="text" name="pixel" required></td>
</tr>

<tr>
<td><h2>Description</h2></td>
<td><input type="text" name="discription" required></td>
</tr>
<tr>
<td style=" border:0px"></td>
<td style=" border:0px"><input type="submit" name="submit" value="submit"></td></tr>


</table>
</form>
<center>
<footer>
<br><br><br><br>



	<div align="center" style=" border-top:solid 1px #DDDDDD; width:700px; margin-left:60px; margin-top:0px;">

   <p style="color:#CCCCCC">Copyright@ Design By ExTreme,All Rights Reserved</p>
   </footer>
</center>
 
</div>

</body>
</html>
</div>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("extreme");
     if(isset($_POST['submit'])){
 $title =$_POST['titel'];
 
 
 $image_name =$_FILES['image']['name'];
 $image_size =$_FILES['image']['size'];

 $image_type =$_FILES['image']['type'];
 $image_tmp =$_FILES['image']['tmp_name'];
 $pixel=$_POST['pixel'];
 $discription =$_POST['discription'];
 
if($title ==''  
  or $discription ==''){
  echo "<script>alert('Some field is empty')</script>";
exit();
}
if($image_type=="image/jpg" or $image_type=="image/jpeg" or $image_type=="image/png" or $image_type=="image/gif"){

if ($image_size<=111700000000){
move_uploaded_file($image_tmp,"images/$image_name");
}
else{

echo "<script>alert('image is greater only 100kb image is allowed')</script>";
}
}
else{

 echo "<script>alert('image is inviled')</script>";
}
$qry= "insert into picture(title,pic,pixel,des)values('$title','$image_name','$pixel','$discription')";
mysql_query($qry);
}
?>
