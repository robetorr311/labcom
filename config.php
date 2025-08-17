<?php session_start(); ob_start();
if (!isset($_SESSION['logat'])){
    $_SESSION['logat'] = "";
}
include('db_conn.php');
?>