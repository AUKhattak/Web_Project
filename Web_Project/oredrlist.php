<html>
<head>
<title>ExTreme Studio</title>
<style>
.out{
float:left;
border:thick;
background-color:#FFFFFF;
border: solid 0px;
border-radius: 10px;
width:1509px;
height:67px;
}
.outer{
height: 790px;
width: 1509px;
position:relative;
top:-8px;
left:-8;
float:left;
background-color:#0C88AF;
}
.home{
float:left;
font-family:"Courier New", Courier, monospace;
font-size:24px;
margin-left:15px;
background-color: #FFFFFF;
border-right: solid 1px;
border-right-color: #003399;
width:200px;
height:67px;
-webkit-transition: width 1s;
 transition: width 1s;
}
.home:hover {
    width: 230px;
    }
.pic{
float:left;
border: thin;
font-family:"Courier New", Courier, monospace;
font-size:22px;
background-color:#FFFFFF;
border-right: solid 1px;
border-right-color: #003399; 
width:200px;
height:67px;
font-size:25px;
-webkit-transition: width 1s;
 transition: width 1s;
}
.pic:hover {
    width: 230px;
    }
.video{
float:left;
border:thick;
font-family:"Courier New", Courier, monospace;
font-size:22px;
background-color:#FFFFFF;
border-right: solid 1px;
border-right-color: #003399;
width:200px;
height:67px;
-webkit-transition: width 1s;
 transition: width 1s;

}
.video:hover {
    width: 230px;
    }
.rando{
float:left;
border:thick;
font-family:"Courier New", Courier, monospace;
font-size:22px;
background-color:#FFFFFF;
border-right: solid 1px;
border-right-color: #003399;
width:210px;
height:67px;
-webkit-transition: width 1s;
 transition: width 1s;
}
.rando:hover {
    width: 230px;
    }
.feedback{
float:left;
border:thick;
font-family:"Courier New", Courier, monospace;
font-size:22px;
background-color:#FFFFFF;
border-right: solid 1px;
border-right-color: #003399;
width:230px;
height:67px;
-webkit-transition: width 1s;
 transition: width 1s;
}
.feedback:hover {
    width: 230px;
    }
.signin{
float:left;
border:thick;
font-family:"Courier New", Courier, monospace;
font-size:22px;
background-color:#FFFFFF;
border-right: solid 1px;
border-right-color: #003399;
width:240px;
height:67px;
-webkit-transition: width 1s;
 transition: width 1s;
}
.signin:hover {
    width: 240px;
    }
.contact{
float:left;
border:thick;
font-family:"Courier New", Courier, monospace;
font-size:24px;
background-color:#FFFFFF;
border: solid 0px;
width:210px;
height:67px;
-webkit-transition: width 1s;
 transition: width 1s;
}
.contact:hover {
    width: 230px;
    }
	.frm{ 
width:1300px; height:250px; background-color:#FFFFFF; color:#000000; float:left; position:absolute;top:350px; left:100px;overflow:auto;
border:solid 2px #0C88AF; border-collapse:collapse;

 }
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
    <div class="home"><a href="home3.php"><img src="home-icon.png" style="height:50" width="50" align="absmiddle" alt=""/>HOME</a></div>
   <div class="pic"><a href="pictures.php"><img src="pictures-icon.png" style="height:60" width="60" align="absmiddle" alt=""/>PICTURES</a></div>
    <div class="video"><a href="videos.php"><img src="video.png" style="height:50" width="50" align="absmiddle" alt=""/>VIDEOS</a></div>
    <div class="rando"><a href="add_emp.php"><img src="rates-icon.png" style="height:50" width="50" align="absmiddle" alt=""/>Add Employe</a></div>
      <div class="feedback"><a href=""><img src="rates-icon.png" style="height:50" width="50" align="absmiddle" alt=""/>Employe list</a></div>
        <div class="signin"><a href="contact.php"><img src="4cbKjLbpi.png" style="height:50" width="50" align="absmiddle" alt=""/>CONTACT INFO.</a></div>
    <div class="logout"><a href="log_out.php"><img src="logout.png" style="height:50" width="50" align="absmiddle" alt=""/>Log Out</a></div>
    </div><br>
    <center>
    <h1 style="color: #CCCCCC; font-style:italic; margin-bottom:-50px">ORDER</h1>
    </center>   
<div class="frm">
<table style="border-collapse:collapse; width:1300px"  border="2" cellspacing="17" >
 
<tr style="border:solid 2px;">
<td  style="border:solid 2px #0C88AF; color:#0C88AF"><strong>ID<strong></td>
<td  style="border:solid 2px #0C88AF; color:#0C88AF"><strong>FUNCTION_TYPE<strong></td>
<td  style="border:solid 2px #0C88AF; color:#0C88AF"><strong>NAME<strong></td>
<td  style="border:solid 2px #0C88AF; color:#0C88AF"><strong>PH#<strong></td>
<td  style="border:solid 2px #0C88AF; color:#0C88AF"><strong>ADDRESS<strong></td>
<td  style="border:solid 2px #0C88AF; color:#0C88AF"><strong>DATE<strong></td>
<td  style="border:solid 2px #0C88AF; color:#0C88AF"><strong>TIMING<strong></td>
<td  style="border:solid 2px #0C88AF; color:#0C88AF"><strong>PAYMENT_TYPE<strong></td>
<td  style="border:solid 2px #0C88AF; color:#0C88AF"><strong>ACCOUNT_NO<strong></td>
<td  style="border:solid 2px #0C88AF; color:#0C88AF"><strong>AMOUNT<strong></td>

</tr>
<?php
$link = mysql_connect('localhost','root','');
mysql_select_db('extreme');

$sql="SELECT * from add_emp";
  $res=mysql_query($sql);

while($resl= mysql_fetch_array($res)){

?>

 <tr>
    <td style=" border:solid 2px #0C88AF; color:#0C88AF"><?php echo $resl['	id']; ?></td>
    <td style=" border:solid 2px #0C88AF; color:#0C88AF"><?php echo $resl['FUNCTION_TYPE']; ?></td>
    <td style=" border:solid 2px #0C88AF; color:#0C88AF"><?php echo $resl['NAME']; ?></td>
      <td style=" border:solid 2px #0C88AF; color:#0C88AF"><?php echo $resl['PH#']; ?></td>
        <td style=" border:solid 2px #0C88AF; color:#0C88AF"><?php echo $resl['ADDRESS']; ?></td>
          <td style=" border:solid 2px #0C88AF; color:#0C88AF"><?php echo $resl['DATE']; ?></td>
            <td style=" border:solid 2px #0C88AF; color:#0C88AF"><?php echo $resl['TIMING']; ?></td>
              <td style=" border:solid 2px #0C88AF; color:#0C88AF"><?php echo $resl['PAYMENT_TYPE']; ?></td>
                <td style=" border:solid 2px #0C88AF; color:#0C88AF"><?php echo $resl['	ACCOUNT_NO']; ?></td>
                  <td style=" border:solid 2px #0C88AF; color:#0C88AF"><?php echo $resl['AMOUNT']; ?></td>
                      <td style=" border:solid 2px #0C88AF; color:#0C88AF"><a href="">Edit</a> </td>
        <td style=" border:solid 2px #0C88AF; color:#0C88AF"><a href="">Delete</a> </td>
                
   
  </tr>

<?php
  };
  ?>
</table>
</div>

    </div>

 
</body>
</html>
