<?php 
echo $data1=$_REQUEST['empid'];

$link = mysql_connect('localhost','root','');
mysql_select_db('extreme');


$qry="DELETE FROM `add_emp` WHERE EMP_ID=$data1";
mysql_query($qry);
header("location:emp_list.php");
?>