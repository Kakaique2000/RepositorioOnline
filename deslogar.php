<?php
session_start();

$_SESSION['logado']=false;
$_SESSION['name']=null;
$_SESSION['erro']=false;
$_SESSION['username']=null;
header("location: login.php");
?>