<?php
include 'wp-config.php';
global $session;
session_start();
/*
$id1=($_SESSION['id']!='')?$_SESSION['id']:"";*/

if((!empty($_POST)) )
{
  $id=$_POST['id'];

}
$wpdb->delete( 'wp_tribute', array( 'id' => $id ), array( '%d' ) );

/*$wpdb->last_query*/
?>
