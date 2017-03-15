<?php 
session_start(); 
session_destroy('UserName');
header("location:../index.html"); 
?>
 