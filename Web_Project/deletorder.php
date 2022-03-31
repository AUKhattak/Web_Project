<?php 
echo $data1=$_REQUEST['orderid'];

$link = mysql_connect('localhost','root','');
mysql_select_db('extreme');


$qry="DELETE FROM `order` WHERE id=$data1";
mysql_query($qry);
header("location:orderlist.php");
?>