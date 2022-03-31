<?php 
header('location:view.php');
?>
<?php

$dell=$_GET['del'];
$sql="DELETE FROM `picture` WHERE `id` = $dell";
mysqli_query($conn,$sql);




?>