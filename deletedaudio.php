<?php
include 'wp-config.php';
global $session;
session_start();

$id1=($_SESSION['id']!='')?$_SESSION['id']:"";

if((!empty($_POST)) || (!empty($_FILES)))
{
  $id=$_POST['id'];

}

$wpdb->delete( 'wp_photo', array( 'pic_id' => $id ), array( '%d' ) );

/*$wpdb->last_query*/
?>

<?php

                                  $msg1 = $wpdb->get_results("SELECT * FROM `wp_photo` where userid = $id1");
                                    foreach($msg1 as $val1)
                                    {
                                        $pho=$val1->media;
                                         $picid=$val1->pic_id;
                                        $ext = pathinfo($pho, PATHINFO_EXTENSION);
                                        if($ext == 'mp3' || $ext == 'mov' || $ext == 'wav' || $ext == 'ogg' || $ext == 'wma')
                                        {
                                    ?>
                                       <div class="col-md-5">
                                 
                                 <audio width="150px" height="150px" controls>
                              <source src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->media;  ?>" type="audio/ogg">
                             
                            </audio>
                            
                            
                             <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash3" onclick="mediadeltaudio(<?php echo $picid; ?>)">
                       </div>
                                   <?php
                                    }
                                    }
                                    ?>