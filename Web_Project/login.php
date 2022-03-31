<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['mybutton'])) {
if (empty($_POST['c1']) || empty($_POST['c2'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$user_name=$_POST['c1'];
$password=$_POST['c2'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");

// Selecting Database
$db = mysql_select_db("extreme", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from sign_up where PASSWARD='$password' AND USER_NAME='$user_name'", $connection);
$myRow=  mysql_fetch_array($query);
if($myRow)
{
    header('location:home.php');
}
{
    echo error;
}
/*$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$user_name; // Initializing Session
header("location: home_page.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}*/
mysql_close($connection); // Closing Connection
}

}
?>