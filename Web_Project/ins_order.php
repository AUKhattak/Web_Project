<?php

$data1=$_REQUEST['item'];
$data2=$_REQUEST['itemid'];
$data3=$_REQUEST['itemname'];
$data4=$_REQUEST['itemcompany'];
$data5=$_REQUEST['itemquantity'];
$data6=$_REQUEST['enteringdate'];
$data7=$_REQUEST['gender'];
$data8=$_REQUEST['0enteringdate'];
$data10=$_REQUEST['2enteringdate'];


$link = mysql_connect('localhost','root','');
mysql_select_db('extreme');
$sql="INSERT INTO `order`(`FUNCTION_TYPE`, `NAME`, `PH#`, `ADDRESS`, `DATE`, `TIMING`, `PAYMENT_TYPE`, `ACCOUNT_NO`, `AMOUNT`) VALUES ('$data1','$data2',$data3,'$data4','$data5','$data6','$data7','$data8','$data10')";
$result = mysql_query($sql);  
if($result){

  include('home.php');

} else{

    echo("<br>Input data is fail");

}


?>