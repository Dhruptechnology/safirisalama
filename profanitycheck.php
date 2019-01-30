<?php
include 'wp-config.php';
if((!empty($_POST)) || (!empty($_FILES)))
{
   $trfname=$_POST['trfname'];
   $trlname=$_POST['trlname'];
   $memberid=$_POST['memberid'];
   $val=$_POST['val'];

}
$insert = $wpdb->insert( 'profanity _check',
  array('memberid' =>$memberid,'fname' =>$trfname,'lname' =>$trlname,'profanity' =>$val
        
       ), //data
                array('%s','%s') //data format     
        );
       /*echo $wpdb->last_query;*/
      ?>
      