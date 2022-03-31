<?php

$data1=$_POST['realname'];
$data2=$_POST['email'];
$data3=$_POST['comments'];
$data4=$_POST['gender'];



mysql_connect('localhost','root','');
mysql_select_db('extreme');
$sql="INSERT INTO feedback VALUES('$data1','$data2','$data3','$data4')";

$result = mysql_query($sql);

if($result){

    include('home.php');

} else{

    echo("<br>Input data is fail");

}


?>