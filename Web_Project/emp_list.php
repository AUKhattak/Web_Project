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
    <h1 style="color: #CCCCCC; font-style:italic; margin-bottom:-50px">EMPLOYEE LIST</h1>
    </center>   
<div class="frm">
<div style="border-collapse:collapse; position:absolute; width:1501px" >
 
<div style="color: #000000; width:1301px">
<div  style="border:solid 1px  #000000; width:15px; color:#0C88AF; float:left; width:100px; position:absolute"><strong>EMP ID<strong></div>
<div style="border:solid 1px  #000000; color:#0C88AF; float:left; width:154px; position:absolute; margin-left:102px"><strong>FIRST NAME<strong></div>
<div style="border:solid 1px  #000000; color:#0C88AF; float:left; width:102px; position:absolute; margin-left:258px"><strong>LAST NAME<strong></div>
<div  style="border:solid 1px #000000; color:#0C88AF; float:left; width:100px; position:absolute; margin-left:362px"><strong>GENDER<strong></div>
<div  style="border:solid 1px #000000; color:#0C88AF; float:left; width:151px; position:absolute; margin-left:464px"><strong>HOUSE NO<strong></div>
<div  style="border:solid 1px #000000; color:#0C88AF; float:left; width:91px; position:absolute; margin-left:617px"><strong>COLONEY<strong></div>
<div  style="border:solid 1px #000000; color:#0C88AF; float:left; width:149px; position:absolute; margin-left:709px"><strong>CITY<strong></div>
<div  style="border:solid 1px #000000; color:#0C88AF; float:left; width:151px; position:absolute; margin-left:860px"><strong>CONTACT<strong></div>
<div  style="border:solid 1px #000000; color:#0C88AF; float:left; width:152px; position:absolute; margin-left:1013px"><strong>CNIC<strong></div>
<div  style="border:solid 1px #000000; color:#0C88AF; float:left; width:109px; position:absolute; margin-left:1167px"><strong>PAY<strong></div>
<div  style="border:solid 2px #000000; color:#0C88AF; float:left; width:101px; position:absolute; margin-left:1278px"><strong>HIRE DATE<strong></div>
<div  style="border:solid 2px #000000; color:#0C88AF; float:left; width:79px; position:absolute; margin-left:1381px"><strong>EDIT<strong></div>
<div  style="border:solid 2px #000000; color:#0C88AF; float:left; width:79px; position:absolute; margin-left:1462px"><strong>DELETE<strong></div>


</div>
<?php
$link = mysql_connect('localhost','root','');
mysql_select_db('extreme');

$sql="SELECT * from `add_emp`";
  $res=mysql_query($sql);

while($resl= mysql_fetch_array($res)){

?>
 <div style="border:solid 1px; color: #000000; width:1541px; float:left; margin-top:20px">
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left;width:99px; position:absolute margin-left:-1px"><?php echo $resl['EMP_ID']; ?></div> 
   <div style=" border:solid 1px  #000000; color:#0C88AF;  width:154px; position:absolute; margin-left:101px; float:left"><?php echo $resl['F_NAME']; ?></div>  
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left;  width:102px; position:absolute; margin-left:257px"><?php echo $resl['L_NAME']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left; width:100px; position:absolute; margin-left:361px"><?php echo $resl['GENDER']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left; width:151px; position:absolute; margin-left:463px"><?php echo $resl['HOUSE_NO']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left; width:91px; position:absolute; margin-left:616px"><?php echo $resl['COLONEY']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left;width:149px; position:absolute; margin-left:709px"><?php echo $resl['CITY']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left; width:151px; position:absolute; margin-left:860px"><?php echo $resl['CONTACT']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left; width:151px; position:absolute; margin-left:1013px"><?php echo $resl['CNIC']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left; width:109px; position:absolute; margin-left:1166px"><?php echo $resl['PAY']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left; width:101px; position:absolute; margin-left:1277px"><?php echo $resl['HIRE_DATE']; ?></div>

<div style=" border:solid 2px #0C88AF; color:#0C88AF; float:left; width:79px; position:absolute; margin-left:1380px"><a href="updateemp.php?empid=<?php echo $resl['EMP_ID']; ?>">Edit</a> </div>
<div style=" border:solid 2px #0C88AF; color:#0C88AF; float:left; width:79px; position:absolute; margin-left:1461px"><a href="deletemp.php?empid=<?php echo $resl['EMP_ID']; ?>"> Delete</a></div>
                
   </div>  
  

<?php
  };
  ?>
</div>
</div>
<center>
<footer>


	<div align="center" style=" border-top:solid 1px #DDDDDD; width:700px; margin-left:60px; margin-top:800px;">

   <p style="color:#CCCCCC">Copyright@ Design By ExTreme,All Rights Reserved</p>
   </footer>
</center>
    </div>
    

 
</body>
</html>
