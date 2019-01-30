<?php
include 'wp-config.php';
if((!empty($_POST)) || (!empty($_FILES)))
{
  $id=$_POST['id'];

}

$wpdb->delete( 'wp_trubutenote', array( 'trid' => $id ), array( '%d' ) );
?>