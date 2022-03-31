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
            <img src="studio.png" style="margin-left:60px; margin-top:-7px" alt="login" height="50" width="50" align="left">
            <img src="miranda_cosgrove_png_signature__violet__by_princessjxoxo13-d51qrvq.png" alt="login" height="50" width="150" align="right">
          <p style="color: #CCCCCC; margin-left:100px; font-style:italic"> ExTreme'S PhotoStudio</p>
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

    </div><br><br><br>
    <center>
    <h1 style="color: #CCCCCC; font-style:italic; margin-bottom:-50px">FEEDBACK LIST</h1>
    </center>   
<div class="frm">
<div style="border-collapse:collapse; position:absolute; width:1280px" >
 
<div style="color: #000000; width:1301px">
<div  style="border:solid 1px  #000000; width:200px; color:#0C88AF; float:left; width:100px; position:absolute"><strong>NAME<strong></div>
<div style="border:solid 1px  #000000; color:#0C88AF; float:left; width:300px; position:absolute; margin-left:102px"><strong>E_MAIL<strong></div>
<div style="border:solid 1px  #000000; color:#0C88AF; float:left; width:600px; position:absolute; margin-left:405px"><strong>COMMENTS<strong></div>
<div  style="border:solid 1px #000000; color:#0C88AF; float:left; width:290px; position:absolute; margin-left:1007px"><strong>GENDER<strong></div>



</div>
<?php
$link = mysql_connect('localhost','root','');
mysql_select_db('extreme');

$qry="SELECT * FROM `feedback` ";
  $reslt=mysql_query($qry);
while( $result= mysql_fetch_array($reslt)){

?>
 <div style="border:solid 1px; color: #000000; width:1296px; float:left; margin-top:20px">
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left;width:100px;position:absolute; margin-left:-1px"><?php echo $result['name']; ?></div> 
   <div style=" border:solid 1px  #000000; color:#0C88AF; width:300px; position:absolute; margin-left:101px; float:left"><?php echo $result['email']; ?></div>  
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left; width:600px; position:absolute; margin-left:404px"><?php echo $result['comment']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left;width:290px;position:absolute; margin-left:1006px"><?php echo $result['gender']; ?></div>

              
  </div>

<?php
  };
  ?>
</div
></div>
</div>
<center>
<footer>


	<div align="center" style=" border-top:solid 1px #DDDDDD; width:700px; margin-left:60px; margin-top:800px;">

   <p style="color:#CCCCCC">Copyright@ Design By ExTreme,All Rights Reserved</p>
</center>
</div>

</footer>

    </div>

 
</body>
</html>
