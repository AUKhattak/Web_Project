<?php

$data1=$_REQUEST['empid'];
$data2=$_REQUEST['fname'];
$data3=$_REQUEST['lname'];
$data7=$_REQUEST['g'];
$data4=$_REQUEST['adress'];
$data5=$_REQUEST['adress1'];
$data6=$_REQUEST['adress2'];
$data8=$_REQUEST['contact'];
$data10=$_REQUEST['cnic'];
$data11=$_REQUEST['pay'];
$data12=$_REQUEST['hire_date'];

$link = mysql_connect('localhost','root','');
mysql_select_db('extreme');
$sql="INSERT INTO add_emp (`EMP_ID`, `F_NAME`, `L_NAME`, `GENDER`, `HOUSE_NO`, `COLONEY`, `CITY`, `CONTACT`, `CNIC`, `PAY`, `HIRE_DATE`) VALUES ('$data1', '$data2', '$data3', '$data7', '$data4', '$data5', '$data6', '$data8', '$data10', '$data11', '$data12')";
$result = mysql_query($sql);  
if($result){

  include('admin_after_signin.php');

} else{

    echo("<br>Input data is fail");

}


?>