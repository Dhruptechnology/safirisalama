<?php
include 'wp-config.php';
if((!empty($_POST)) || (!empty($_FILES)))
{
    print_r($_POST);
   $id=$_POST['id'];
   $status=$_POST['status'];

}
$wpdb->query("UPDATE wp_trubutenote  SET Approval = '1' WHERE trid='$id'");
      /* echo $wpdb->last_query;*/
?>