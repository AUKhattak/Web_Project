<?php

$data1=$_REQUEST['item'];
$data2=$_REQUEST['itemid'];
$data3=$_REQUEST['itemname'];
$data7=$_REQUEST['gender'];
$data4=$_REQUEST['itemcompany'];
$data5=$_REQUEST['itemquantity'];
$data6=$_REQUEST['enteringdate'];
$data8=$_REQUEST['0enteringdate'];
$data10=$_REQUEST['2enteringdate'];
$data11=$_REQUEST['1enteringdate'];


$link = mysql_connect('localhost','root','');
mysql_select_db('extreme');
$sql="INSERT INTO`sign_up` (`NAME`, `LAST_NAME`, `CNIC`, `GENDER`, `CONTACT_NO`, `HOUSE_NO`, `COLONEY`, `CITY`, `USER_NAME`, `PASSWARD`) VALUES ('$data1', '$data2', '$data3', '$data7', '$data4', '$data5', '$data6', '$data8', '$data10', '$data11')";
$result = mysql_query($sql);  
if($result){

  include('user_admin.php');

} else{

    echo("<br>Input data is fail");

}


?>