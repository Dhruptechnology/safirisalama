<?php
include 'wp-config.php';
$id= $_POST['abtid'];
$description= $_POST['dsec'];
$wpdb->query("UPDATE wp_tribute SET about_description ='$description' WHERE id='$id'");
?>
 <?php  echo $description; ?>
