
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location:home2.php"); // Redirecting To Home Page
}
?>