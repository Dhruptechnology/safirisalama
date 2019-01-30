<?php
include 'wp-config.php';
if((!empty($_POST)))
{
 
  $email=isset($_POST['adminemail'])?$_POST['adminemail']:'';
  $password=isset($_POST['adminpass'])?$_POST['adminpass']:'';

}
  $query = $wpdb->get_results("SELECT * from wp_tribute where acountemail ='$email' AND accountpassword='$password' ");
  /*echo $wpdb->last_query;*/
    $tot=count($query);
   
    $uid=$query[0]->id;
    $username=$query[0]->fname;
    $acountfname=$query[0]->accountname;
    $acountlname=$query[0]->accountlname;
    $emailid=$query[0]->acountemail;
    $password=$query[0]->accountpassword;
    $webaddress=$query[0]->webaddress;
     $themeid=$query[0]->themeid;
    $_SESSION['id']=$uid;
    $_SESSION['accountname']=$acountfname;
     $_SESSION['accountlname']=$acountlname;
    $_SESSION['acountemail']=$emailid;
    $_SESSION["accountpassword"] = $password;
    $_SESSION["fname"]=$username;
    $_SESSION["webaddress"]=$webaddress;
    $_SESSION["themeid"]=$themeid;
      ?>
