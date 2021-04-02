<?php session_start();
$_SESSION['username']="";
$_SESSION['cart']=array();
header("Location:../login/");
?>
