<?php 
session_start();
if(isset($_SESSION['u_uid'])){
session_destroy();}
$ref= @$_GET['q'];
header("location:../$ref");
?>