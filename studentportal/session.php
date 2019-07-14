<?php
    session_start();
    if(!isset($_SESSION['jonot'])){
    header('location:login.php');
}
?>