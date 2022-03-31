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
    <h1 style="color: #CCCCCC; font-style:italic; margin-bottom:-50px">ORDER LIST</h1>
    </center>   
<div class="frm">
<div style="border-collapse:collapse; position:absolute; width:1300px"  border="3" cellspacing="27" >
 
<div style="color: #000000; width:1301px">
<div  style="border:solid 1px  #000000; width:15px; color:#0C88AF; float:left; width:50px; position:absolute"><strong>ID<strong></div>
<div style="border:solid 1px  #000000; color:#0C88AF; float:left; width:155px; position:absolute; margin-left:52px"><strong>FUNCTION TYPE<strong></div>
<div style="border:solid 1px  #000000; color:#0C88AF; float:left; width:101px; position:absolute; margin-left:209px"><strong>NAME<strong></div>
<div  style="border:solid 1px #000000; color:#0C88AF; float:left; width:99px; position:absolute; margin-left:312px"><strong>PHONE NO<strong></div>
<div  style="border:solid 1px #000000; color:#0C88AF; float:left; width:151px; position:absolute; margin-left:413px"><strong>ADDRESS<strong></div>
<div  style="border:solid 1px #000000; color:#0C88AF; float:left; width:91px; position:absolute; margin-left:566px"><strong>DATE<strong></div>
<div  style="border:solid 1px #000000; color:#0C88AF; float:left; width:149px; position:absolute; margin-left:659px"><strong>TIMING<strong></div>
<div  style="border:solid 1px #000000; color:#0C88AF; float:left; width:151px; position:absolute; margin-left:810px"><strong>PAYMENT_TYPE<strong></div>
<div  style="border:solid 1px #000000; color:#0C88AF; float:left; width:151px; position:absolute; margin-left:963px"><strong>ACCOUNT_NO<strong></div>
<div  style="border:solid 1px #000000; color:#0C88AF; float:left; width:102px; position:absolute; margin-left:1116px"><strong>AMOUNT<strong></div>
<div  style="border:solid 2px #000000; color:#0C88AF; float:left; width:79px; position:absolute; margin-left:1218px"><strong>DELETE<strong></div>

</div>


<?php
$link = mysql_connect('localhost','root','');
mysql_select_db('extreme');

$qry="SELECT * FROM  `order`";
  $reslt=mysql_query($qry);
while( $result= mysql_fetch_array($reslt)){

?>

   <div style="border:solid 1px; color: #000000; width:1297px; float:left; margin-top:20px">
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left;width:50px;position:absolute; margin-left:-1px"><?php echo $result['id']; ?></div> 
   <div style=" border:solid 1px  #000000; color:#0C88AF; width:155px; position:absolute; margin-left:51px; float:left"><?php echo $result['FUNCTION_TYPE']; ?></div>  
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left; width:101px; position:absolute; margin-left:208px"><?php echo $result['NAME']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left;width:99px;position:absolute; margin-left:311px"><?php echo $result['PH#']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left;width:151px;position:absolute; margin-left:412px"><?php echo $result['ADDRESS']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left;width:91px;position:absolute; margin-left:565px"><?php echo $result['DATE']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left;width:149px;position:absolute; margin-left:658px"><?php echo $result['TIMING']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left;width:151px;position:absolute; margin-left:809px"><?php echo $result['PAYMENT_TYPE']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left;width:151px;position:absolute; margin-left:962px"><?php echo $result['ACCOUNT_NO']; ?></div>
   <div style=" border:solid 1px  #000000; color:#0C88AF; float:left;width:101px;position:absolute; margin-left:1115px"><?php echo $result['AMOUNT']; ?></div>
   <div style=" border:solid 1px #000000; color: #0C88AF; float:left;width:78px;position:absolute; margin-left:1218px"><a href="deletorder.php?orderid=<?php echo $result['id']; ?>" >Delete</a> </div>
                
   
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
