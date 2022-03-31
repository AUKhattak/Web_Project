<?php 
header('location:view.php');
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("extreme");

$dell=$_GET['del'];
$sql="DELETE FROM `picture` WHERE `id` = $dell";
mysql_query($sql);




?>