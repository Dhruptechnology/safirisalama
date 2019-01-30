<?php
include 'wp-config.php';
$email= $_GET['search_keyword'];
$webaddress= 'http://imdhrup.com/wordpress/dhoct2018_197/';
$fulladdress=$webaddress.$email;

$query = $wpdb->get_results("SELECT * from wp_tribute where webaddress ='$fulladdress'");
$tot=count($query);
if ($tot >= 1) 
      {
         echo 'Already Exist please try Some other Memorial address.';
      }
      

?>