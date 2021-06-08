  
<?php 

session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

//Redirecciono al login
header("location: ../index.php");
exit;
?>