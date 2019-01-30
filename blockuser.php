<?php
include 'wp-config.php';
if((!empty($_POST)))
{
   /* print_r($_POST);*/
    $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $blockdata=$_POST['status'];
}
$wpdb->query("UPDATE wp_tributeuser SET block = '$blockdata' WHERE fname='$fname' and lname='$lname'");
$wpdb->query("UPDATE wp_trubutenote SET block_status = '$blockdata' WHERE trnfname='$fname' and trlname='$lname'");
?>