<?php
include 'wp-config.php';
global $session;
session_start();
 $wp_upload_dir = wp_upload_dir();
 $uploadd= $wp_upload_dir['basedir'];


if((!empty($_POST)) || (!empty($_FILES)))
{
$test= explode(".",$_FILES['proimg']['name']);
$extension= end($test);
$name = rand(100,999).'.'.$extension;
 $dlogo=$_FILES['proimg']['name'];
 $location='./www/safirisalama_753/public/wp-content/uploads'.$name;
 print_r($location);
   move_uploaded_file( $_FILES['proimg']['tmp_name'],$location);


}
?>