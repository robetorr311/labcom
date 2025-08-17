<?php include('config.php');

session_destroy();
$_SESSION['logat'] = 0;

header("Location: login.php");

?>