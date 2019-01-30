<?php
include 'wp-config.php';
if((!empty($_POST)))
{
  
  $memid=isset($_POST['memid'])?$_POST['memid']:'';
    $fname=isset($_POST['adminfname'])?$_POST['adminfname']:'';
  $email=isset($_POST['adminlname'])?$_POST['adminlname']:'';
  $lname=isset($_POST['adminemail'])?$_POST['adminemail']:'';
  $password=isset($_POST['adminpass'])?$_POST['adminpass']:'';

}
 $insert = $wpdb->insert( 'wp_userslist',
  array('memberid' => $memid,
        'fname' => $fname,
        'lname' =>$email, 
        'username' => $lname,
        'password' =>$password,
        
        ), //data
                array('%s','%s','%s','%s') //data format     
        );
      
      ?>
      
  <?php
    $msg1 = $wpdb->get_results("SELECT * FROM `wp_userslist` where `memberid`= $memid order by uid Asc");
        foreach($msg1 as $val1)
        {
            $id=$val1->uid;                
        }
  
  $msg11 = $wpdb->get_results("SELECT * FROM `wp_tribute` where `id`= $memid ");
        foreach($msg11 as $val11)
        {
            $member_id=$val11->member_id;     
            $con=$member_id.','.$id;
        }
        
  if($member_id =="")
  {
  $wpdb->query("UPDATE wp_tribute  SET member_id = $id WHERE id='$memid'");
  
  }
  else
  {
     $wpdb->query("UPDATE wp_tribute  SET member_id = '$con' WHERE id='$memid'");  
  }
 
  ?>
      