<?php
include 'wp-config.php';
global $session;
session_start();
 

if((!empty($_POST)))
{
  $uid=$_POST['id'];
  $visitor=$_POST['visitor'];
   $totvisitor =  $visitor + 1;  
 
}

$wpdb->query("UPDATE wp_tribute  SET visitcount = '$totvisitor'  WHERE id='$uid'");