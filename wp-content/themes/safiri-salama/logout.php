<?php
/*
Template Name: logout
*/

session_start();
unset($_SESSION['id']);
session_unset();
session_destroy();
wp_logout();
header("Location:https://safirisalama.com");
?>