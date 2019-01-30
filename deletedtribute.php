<?php
include 'wp-config.php';
if((!empty($_POST)) || (!empty($_FILES)))
{
  $id=$_POST['id'];

}

$wpdb->delete( 'wp_trubutenote', array( 'trid' => $id ), array( '%d' ) );
?>
  <?php
                       
                   $msg1 = $wpdb->get_results("SELECT * FROM `wp_trubutenote` join wp_tribute where wp_tribute.id=wp_trubutenote.`userid` and `userid` = $id");
                  foreach($msg1 as $val1)
                            {
                            $tributetype= $val1->tributeaction;
                            $tributty=$val1->tribute_type;
                            $date=$val1->created_on;
                         $crd=date('M d,y H:i:s', strtotime($val1->created_on));
                               if( $tributetype == lightcandle)
                               {
                                ?>
                       
                      <div class="featured_box">
                           <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash" onclick="image(<?php echo  $val1->trid; ?>)">
                          <div class="media">
                            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">
                            <div class="media-body">
                              <h5><?php echo  $val1->accountname; ?> <i>lit a Candle</i></h5>
                              <h6><?php echo $crd; ?></h6>
                              <img class="img-fluid img13" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img13.png">
                            </div>
                          </div>
                      </div>
                     
                      <?php
                               }
                               if( $tributetype == leave_note)
                               {
                               ?>
                      <div class="featured_box">
                           <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash" onclick="image(<?php echo  $val1->trid; ?>)">
                          <div class="media">
                            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">
                            <div class="media-body">
                                
                            
                              <h5><?php echo  $val1->accountname; ?> <i>left a Note</i></h5>
                              <h6><?php echo $crd; ?></h6>

                              <span class="span_share"><a href="<?php echo $webaddress; ?>" data-title="left a Note" data-desc="<?php echo  $val1->note; ?>" class="btnShare"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a></span>
                              <p><?php echo  $val1->note; ?></p>
                            </div>
                          </div>
                      </div>
                           <?php
                               }
                               if( $tributetype == tribute)
                               {
                             ?>
                      
                      <div class="featured_box">
                          <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash" onclick="image(<?php echo  $val1->trid; ?>)">
                          <div class="media">
                             
                            <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">
                           
                            <div class="media-body">
                              <h5><?php echo  $val1->accountname; ?> <i>left a tribute</i></h5>
                              <h6><?php echo $crd; ?></h6>
                               <?php
                              if($tributty == flower)
                              {
                              ?>
                             <p><?php echo  $val1->tributenote_first; ?></p>
                            <?php
                              }
                              if($tributty == candle)
                               {
                               ?>
                                <p><?php echo  $val1->note; ?></p>
                                <?php
                               }
                                if($tributty == feather)
                               {
                               ?>
                                <p><?php echo  $val1->tributenote2_second; ?></p>
                               <?php
                               }
                               ?>
                              
                             <?php
                              if($tributty == flower)
                              {
                              ?>
                            <img class="img-fluid img14" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flower1.png" alt="mage">
                            <?php
                              }
                              if($tributty == candle)
                               {
                               ?>
                                <img class="img-fluid img14" src="<?php echo get_stylesheet_directory_uri(); ?>/img/christmas-candle.png" alt="mage">
                                <?php
                               }
                                if($tributty == feather)
                               {
                               ?>
                                <img class="img-fluid img14" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feather1.png" alt="mage">
                               <?php
                               }
                               ?>
                            </div>
                          </div>
                      </div>
                      <?php
                               }
                            }
                               ?>
                               