<?php
include 'wp-config.php';
global $session;
session_start();
 $wp_upload_dir = wp_upload_dir();
 $uploadd= $wp_upload_dir['basedir'];


if((!empty($_POST)) || (!empty($_FILES)))
{
	$_SESSION['sociallogin']=sociallogin;
}
?>