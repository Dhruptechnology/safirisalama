<?php
include 'wp-config.php';
if((!empty($_POST)) || (!empty($_FILES)))
{
   $id=$_POST['notid'];
   $notetype=$_POST['leavenote'];
   $not=$_POST['addnote'];
    $fnane=$_POST['fname'];
    $lnane=$_POST['lname'];
}
$insert = $wpdb->insert( 'wp_trubutenote',array('userid' =>$id,'tributeaction' =>$notetype,'note' =>$not,'trnfname' =>$fnane,'trlname' =>$lnane), //data
        array('%s','%s','%s','%s') //data format     
        );
       ?>
       <?php
                       
             /*      $msg1 = $wpdb->get_results("SELECT * FROM `wp_trubutenote` join wp_tribute where wp_tribute.id=wp_trubutenote.`userid` and `userid` = $id order by trid desc limit 1");
                  foreach($msg1 as $val1)
                            {
                            $tributetype= $val1->tributeaction;
                            $tributty=$val1->tribute_type;
                            $trifname=$val1->trnfname;
                             $tridesc=$val1->about_description;
                             $triweb=$val1->webaddress;
                            $date=$val1->created_on;
                            $trilname=$val1->trlname;
                         $crd=date('M d,y H:i:s', strtotime($val1->created_on));
                              
                                ?>
                      <div class="featured_box">
                           <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash" onclick="image(<?php echo  $val1->trid; ?>)">
                          <div class="media">
                            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">
                            <div class="media-body">
                                
                            
                              <h5><?php echo  $trifname; ?> <?php echo $trilname; ?><i>left a Note</i></h5>
                              <h6><?php echo $crd; ?></h6>

                              <!-- <a href="<?php echo $webadd; ?>" data-title="left a Note" data-desc="<?php echo  $val1->note; ?>" class="btnShare">Facebook</a>-->
                                    <a href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=left a Note&amp;p[summary]=<?php echo  $val1->note; ?>&amp;p[url]=<?php echo $triweb; ?>&amp;&p[images][0]=<?php echo $image;?>'">Facebook</a> 
                                   <a href="https://twitter.com/share?url=<?php echo $webadd;  ?>&amp;text=<?php echo $tridesc;  ?>&amp;hashtags=<?php echo  $val1->note; ?>">
                                       Twitter</a>
                                  <a href="https://plus.google.com/share?url=<?php echo $triweb;  ?>" data-desc="<?php echo  $val1->note; ?>">Google+</a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $triweb;  ?>&title=left a Note&summary=<?php echo $tridesc;  ?>&source=<?php echo  $val1->note; ?>">LinkedIn</a>
                                    <a href="https://pinterest.com/pin/create/button/?url=<?php echo $triweb;  ?>&media=gh&description=<?php echo  $val1->note; ?>">Pinterest</a>
                                   <!-- <a href="mailto:pujadivedi@dhrup.com?&subject=left a Note&body=<?php echo  $val1->note; ?>">Send Email</a>-->
                            </div>
                          </div>
                      </div>*/
                      /*<?php*/
                              /* }*/
                               ?>