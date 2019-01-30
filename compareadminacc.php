<?php
include 'wp-config.php';
$email= $_GET['search_keyword'];

$query = $wpdb->get_results("SELECT * from wp_tribute where acountemail ='$email'");

$tot=count($query);
if ($tot >= 1) 
      {
         echo 'Email Already Exist';
      }
      

?>