<?php
global $session;
session_start();
/**
 * Template Name: new featured
 **/
get_header();
$postid=$_GET['id'];
?>

<?php
    $id1=($_SESSION['id']!='')?$_SESSION['id']:"";
    $acountfname=($_SESSION['accountname']!='')?$_SESSION['accountname']:"";
        $acountl=($_SESSION['accountlname']!='')?$_SESSION['accountlname']:"";
        
    $pro = $wpdb->get_results("SELECT * FROM `wp_tribute` where id = '$id1'");
    $id2=($pro[0]->id!='')?$pro[0]->id:"";
    $fname=($pro[0]->fname!='')?$pro[0]->fname:"";
    $lname=($pro[0]->lname!='')?$pro[0]->lname:"";
    ?>
    
    <?php
if(isset($_REQUEST['subtribute']))
{
    $tribure=isset($_POST['tribure'])?$_POST['tribure']:'';
  $userid=isset($_POST['userid'])?$_POST['userid']:'';
  $fname=isset($_POST['fname'])?$_POST['fname']:'';
  $lname=isset($_POST['lname'])?$_POST['lname']:'';
  $tribure_type=isset($_POST['tribure_type'])?$_POST['tribure_type']:'';
  $note=isset($_POST['note'])?$_POST['note']:'';
   $note1=isset($_POST['note1'])?$_POST['note1']:'';
    $note2=isset($_POST['note2'])?$_POST['note2']:'';
    $page=isset($_POST['page'])?$_POST['page']:'';
  
  $insert = $wpdb->insert( 'wp_trubutenote',
  array('tributeaction' => $tribure,
        'userid' => $userid,
        'tribute_type' =>$tribure_type, 
        'note' => $note,
        'tributenote_first' => $note1,
        'tributenote2_second' => $note2,
        'trnfname' => $fname,
        'trlname' => $lname,
        'tribute_frompage' => $page,
        ), //data
                array('%s','%s','%s','%s') //data format     
        );
      /*echo $wpdb->last_query;*/
    

}
?>    
    
    <?php
    $args_slider = array( 'post_type' => 'post', 'posts_per_page' => 1, 'order' => 'DESC');
    $loop_slider = new WP_Query( $args_slider );
    while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
    $id= get_the_ID();
?>

  <section class="about_nelson">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-5">
          <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));  ?>" class="img-fluid mainimg" alt="...">
          <ul class="list-inline d-flex mandela_three space15">
               <?php
                     if( have_rows('thumbnail_images') ):
                     while ( have_rows('thumbnail_images') ) : the_row();
                     $tumb=get_sub_field('images',$id);
                      ?>
            <li class="list-inline-item thumbimg"><img src="<?php echo $tumb['url']; ?>" class="img-fluid" alt="..."></li>
          
            <?php
          endwhile;
          endif;
          ?>
          </ul>
        </div>
        <div class="col-12 col-md-7">
          <div class="featured_box">
            <h2 class="nameHead"><?php echo the_title(); ?></h2>
            <h4 class="yeartag"><?php echo get_field('birth_and_death_year',$id); ?></h4>
            <div class="descrip mb-0"><?php echo the_content(); ?>    </div>
          </div>
          <div class="infoBox">
            <div class="d-flex mb-1">
              <label class="lblone">Date of Birth:</label>
              <p class="lbltwo"><?php echo get_field('date_of_death',$id); ?></p>
            </div>
            <div class="d-flex mb-1">
              <label class="lblone">Date of Death:</label>
              <p class="lbltwo"><?php echo get_field('date_of_death',$id); ?></p>
            </div>
            <div class="d-flex">
              <label class="lblone">Place of Death:</label>
              <p class="lbltwo"><?php echo get_field('place_of_death',$id); ?></p>
            </div>
          </div>
          <div class="featured_box">
            <div class="quoteTag mb-0 "><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quote1.png" class="img-fluid vtop" alt="...">&nbsp;&nbsp;<?php echo get_field('thought',$id); ?>&nbsp;&nbsp;<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quote2.png" class="img-fluid vbase" alt="..."></div>
          </div>
           
           <?php
                        if(($_SESSION['id']!=''))
                        {
                        ?>
                         <a class="btn btntribute candle1 candle lea_tri">Leave a Tribute</a>
                        <a class="btn btntlayflower ml-md-3 candle" onclick="light(<?php echo $id1 ?>,'<?php echo $fname; ?>','<?php echo $lname; ?>','lightcandle','featured')">Light a Candle</a>
                          
                           <?php
                        }
                        else if(($_SESSION['email_id']!=''))
                        {
                            
                            $em=$_SESSION['email_id'];
                        $pro5 = $wpdb->get_results("SELECT * FROM `wp_tributeuser` where email_id = '$em'");
                            $idtr=($pro5[0]->tid!='')?$pro5[0]->tid:"";
                             $tfname=($pro5[0]->fname!='')?$pro5[0]->fname:"";
                             $tlname=($pro5[0]->lname!='')?$pro5[0]->lname:"";
                        ?>
                        <a class="btn btntribute candle1 candle lea_tri">Leave a Tribute</a>
                        <a class="btn btntlayflower ml-md-3 candle" onclick="light(<?php echo $idtr;  ?>,'<?php echo $tfname ?>','<?php echo $tlname ?>','lightcandle','featured')">Light a Candle</a>
                         
                        <?php
                        }
                         else
                           {
                               ?>
                           <a href="<?php echo get_site_url(); ?>/register" class="btn btntribute candle1 candle lea_tri">Leave a Tribute</a>
                         <a class="btn btntlayflower ml-md-3 candle" href="<?php echo get_site_url(); ?>/register">Light a Candle</a>
                           
                               <?php
                               
                           }
                           ?>          
        </div>
      </div>
      <div class="space40 d-xl-none"></div>
      <div class="row space40">
        <div class="col-md-8 main_tri">
             <?php
                       
                   $msg1 = $wpdb->get_results("SELECT * FROM `wp_trubutenote` where tribute_frompage = 'featured' order by trid desc limit 15");
                    
                  foreach($msg1 as $val1)
                            {
                            $tributetype= $val1->tributeaction;
                           
                            $tributty=$val1->tribute_type;
                            $trifname=$val1->trnfname;
                            $trilname=$val1->trlname;
                            $status=$val1->Approval;
                            $date=$val1->created_on;
                         $crd=date('M d,y H:i:s', strtotime($val1->created_on));
                               if( $tributetype == lightcandle)
                               {
                                ?>
                        <div class="featured_box">
                          <div class="media">
                               <img class="img-fluid img13" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img13.png">
                           <!-- <img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">-->
                            <div class="media-body">
                              <h5><?php echo  $trifname; ?> <?php echo $trilname; ?> <i>lit a Candle</i></h5>
                              <h6><?php echo $crd; ?></h6>
                             <!-- <img class="img-fluid img13" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img13.png">-->
                            </div>
                          </div>
                        </div>
                          <div class="canlig"></div>
                            <?php
                               }
                            
                               if( $tributetype == tribute && $status == 1)
                               {
                                ?>
                                  <div class="featured_box">
                          <?php
                            if(($_SESSION['id'] == $id))
                            {
                            ?>
                          <img src="https://cdn4.iconfinder.com/data/icons/linecon/512/delete-512.png" class="trash" onclick="image(<?php echo  $val1->trid; ?>)">
                          <?php
                            }
                            ?>
                          <div class="media">
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
                            <!--<img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img12.png" alt="mage">-->
                           
                            <div class="media-body">
                              <h5><?php echo  $trifname; ?> <?php echo $trilname; ?> <i>left a tribute</i></h5>
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
                              
                             
                            </div>
                              <div class="dropdown">
                                    <span class="span_share dropbtn"><a class="btnShare"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a></span>

                                  <div class="dropdown-content">
                                   <!-- <a href="<?php echo $webadd; ?>" data-title="left a Note" data-desc="<?php echo  $val1->note; ?>" class="btnShare">Facebook</a>-->
                                    <a href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=left a Note&amp;p[summary]=<?php echo  $val1->note; ?>&amp;p[url]=<?php echo $webadd; ?>&amp;&p[images][0]=<?php echo $image;?>'" target="blank">Facebook</a> 
                                   <a href="https://twitter.com/share?url=<?php echo get_site_url();  ?>/new-featured/&amp;text=<?php echo $about_description;  ?>&amp;hashtags=<?php echo  $val1->tributenote_first; ?> <?php echo  $val1->note; ?> <?php echo  $val1->tributenote2_second; ?>" target="blank">
                                       Twitter</a>
                                  <a href="https://plus.google.com/share?url=<?php echo get_site_url();  ?>/new-featured/" data-desc="<?php echo  $val1->tributenote_first; ?> <?php echo  $val1->note; ?> <?php echo  $val1->tributenote2_second; ?>" target="blank">Google+</a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_site_url();  ?>/new-featured/&title=left a Note&summary=<?php echo $about_description;  ?>&source=<?php echo  $val1->tributenote_first; ?> <?php echo  $val1->note; ?> <?php echo  $val1->tributenote2_second; ?>" target="blank">LinkedIn</a>
                                    <a href="https://pinterest.com/pin/create/button/?url=<?php echo get_site_url();  ?>/new-featured/&media=gh&description=<?php echo  $val1->tributenote_first; ?> <?php echo  $val1->note; ?> <?php echo  $val1->tributenote2_second; ?>" target="blank">Pinterest</a>
                                   <!-- <a href="mailto:pujadivedi@dhrup.com?&subject=left a Note&body=<?php echo  $val1->note; ?>">Send Email</a>-->
  </div>
</div>
                          </div>
                      </div>
                             <?php
                               }
                                }
                            ?>
      
       
      </div>
      <div class="col-md-7 leave_tribute">
       
                        <span class="tri_span"><img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pencil.png">Leave a Tribute</span>
                        <ul class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab1" onclick="tri('tribute','candle')"><img class="img-fluid active_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/christmas-candle.png">
                            <img class="img-fluid default_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/christmas-candle1.png">
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab2" onclick="tri('tribute','flower')"><img class="img-fluid default_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flower.png">
                            <img class="img-fluid active_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/flower1.png">
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab3" onclick="tri('tribute','feather')"><img class="img-fluid default_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feather.png">
                            <img class="img-fluid active_img" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feather1.png">
                            </a>
                          </li>
                        </ul>
                        <form method="post">
                        <div class="tab-content">
                             <input type="hidden" name="tribure" value="tribute">
                            <input type="hidden" name="userid" value="0">
                             <?php
                            if(($_SESSION['id'] != ""))
                            {
                            ?>
                            
                             <input type="hidden" name="fname" value="<?php echo $acountfname ?>">
                             <input type="hidden" name="lname" value="<?php echo $acountl ?>">
                              <input type="hidden" name="page" value="featured">
                             <?php
                                }
                                else if(($_SESSION['email_id']!=''))
                                {
                                  $em=$_SESSION['email_id'];
                        $pro5 = $wpdb->get_results("SELECT * FROM `wp_tributeuser` where email_id = '$em'");
                            $idtr=($pro5[0]->tid!='')?$pro5[0]->tid:"";
                             $tfname=($pro5[0]->fname!='')?$pro5[0]->fname:"";
                             $tlname=($pro5[0]->lname!='')?$pro5[0]->lname:"";
                             
                            ?>
                             <input type="hidden" name="fname" value="<?php echo $tfname ?>">
                             <input type="hidden" name="lname" value="<?php echo $tlname ?>">
                             <input type="hidden" name="page" value="featured">
                            <?php
                            }
                            ?>
                            <div class="result">
                                 <input type="hidden" name="tribure_type" value="candle">
                            </div>
                            <div id="tab1" class="tab-pane active"><br>
                              <textarea class="form-control" rows="8" id="comment" placeholder="Add your tribute text here" name="note"></textarea>
                            </div>
                            <div id="tab2" class="tab-pane fade"><br>
                              <textarea class="form-control" rows="8" id="comment" placeholder="Add your tribute text here" name="note1"></textarea>
                            </div>
                            <div id="tab3" class="tab-pane fade"><br>
                              <textarea class="form-control" rows="8" id="comment" placeholder="Add your tribute text here" name="note2"></textarea>
                            </div>
                        </div>
                       
                        <ul class="list-inline leave_ul">
                           <?php
                            if(($_SESSION['id'] != ""))
                            {
                            ?>
                            
                          <li class="list-inline-item">by <?php echo  $acountfname; ?> <?php echo $acountl; ?></li>
                          <?php
                            }
                            else if(($_SESSION['email_id']!=''))
                            {
                                  $em=$_SESSION['email_id'];
                        $pro5 = $wpdb->get_results("SELECT * FROM `wp_tributeuser` where email_id = '$em'");
                            $idtr=($pro5[0]->tid!='')?$pro5[0]->tid:"";
                             $tfname=($pro5[0]->fname!='')?$pro5[0]->fname:"";
                             $lfname=($pro5[0]->lname!='')?$pro5[0]->lname:"";
                            ?>
                             <li class="list-inline-item">by <?php echo $tfname; ?> <?php echo $lfname; ?></li>
                             
                            <?php
                            }
                            ?>
                          <li class="list-inline-item pull-right">
                               <input type="submit" name="subtribute" class="red_btn" value="Leave a Tribute">
                            
                          </li>
                        </ul>
                    </form>
                    </div>
        <div class="col-lg-4 col-md-5">
         <div class="counte_Class">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="projectFacts" class="sectionClass">
                                <div class="fullWidth eight columns">
                                    <div class="projectFactsWrap ">
                                        <div class="item wow fadeInUpBig animated animated" data-number="225" style="visibility: visible;">
                                            <p id="number1" class="number number_class">225</p>
                                            <p>Page Views</p>
                                        </div>
                                        <div class="item wow fadeInUpBig animated animated" data-number="113" style="visibility: visible;">
                                            
                                            <p id="number2" class="number">113</p>
                                            <p>Tributes Posted</p>
                                        </div>
                                        <div class="item wow fadeInUpBig animated animated" data-number="278" style="visibility: visible;">
                                            
                                            <p id="number3" class="number">278</p>
                                            <p>Candles Lit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
          <div class="player info">

                 <h1>Now Playing</h1>
                 <h4>Random Song Name - Random Artist</h4>
               <!--  <div class="button-items">
                    <audio id="music" preload="auto" loop="false">
                        <?php
                     if( have_rows('music') ):
                     while ( have_rows('music') ) : the_row();
                     $mus=get_sub_field('music',$id);
                      ?>
                       <source src="<?php echo $mus; ?>" type="audio/<?php echo get_sub_field('music_file_type'); ?>">
                       
                          <?php
                          endwhile;
                          endif;
                          ?>
                    </audio>
                    <div id="slider"><div id="elapsed"></div></div>
                    <p id="timer">0:00</p>
                    <div class="controls">
                       <span class="expend"><svg class="step-backward" viewBox="0 0 25 25" xml:space="preserve">
                          <g><polygon points="4.9,4.3 9,4.3 9,11.6 21.4,4.3 21.4,20.7 9,13.4 9,20.7 4.9,20.7"/></g>
                       </svg></span>

                       <svg id="play" viewBox="0 0 25 25" xml:space="preserve">
                           <defs><rect x="-49.5" y="-132.9" width="446.4" height="366.4"/></defs>
                          <g><circle fill="none" cx="12.5" cy="12.5" r="10.8"/>
                               <path fill-rule="evenodd" clip-rule="evenodd" d="M8.7,6.9V18c0,0,0.2,1.4,1.8,0l8.1-4.8c0,0,1.2-1.1-1-2L9.8,6.5 C9.8,6.5,9.1,6,8.7,6.9z"/>
                          </g>
                       </svg>
                      

                       <svg id="pause" viewBox="0 0 25 25" xml:space="preserve">
                          <g>
                             <rect x="6" y="4.6" width="3.8" height="15.7"/>
                             <rect x="14" y="4.6" width="3.9" height="15.7"/>
                          </g>
                       </svg>

                       <span class="expend"><svg class="step-foreward" viewBox="0 0 25 25" xml:space="preserve">
                          <g><polygon points="20.7,4.3 16.6,4.3 16.6,11.6 4.3,4.3 4.3,20.7 16.7,13.4 16.6,20.7 20.7,20.7"/></g>
                        </svg></span>
                    </div>
                 </div>-->
                 <div class="ap" id="ap">
  <div class="ap__inner">
      <div class="ap__item ap__item--playback">
        <button class="ap__controls ap__controls--prev">
          <svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" fill="#582236" width="40" height="40" viewBox="0 0 24 24">
            <path d="M9.516 12l8.484-6v12zM6 6h2.016v12h-2.016v-12z"></path>
          </svg>
        </button>
        <button class="ap__controls ap__controls--toggle">
          <svg class="icon-play" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" fill="#582236" width="50" height="50" viewBox="0 0 36 36" data-play="M 12,26 18.5,22 18.5,14 12,10 z M 18.5,22 25,18 25,18 18.5,14 z" data-pause="M 12,26 16.33,26 16.33,10 12,10 z M 20.66,26 25,26 25,10 20.66,10 z">
            <path d="M 12,26 18.5,22 18.5,14 12,10 z M 18.5,22 25,18 25,18 18.5,14 z"></path>
          </svg>
        </button>
        <button class="ap__controls ap__controls--next">
          <svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" fill="#582236" width="40" height="40" viewBox="0 0 24 24">
            <path d="M15.984 6h2.016v12h-2.016v-12zM6 18v-12l8.484 6z"></path>
          </svg>
        </button>
      </div>
      <div class="ap__item ap__item--track">
        <div class="track">
          <div class="track__title">Queue is empty</div>
          <div class="track__time">
            <span class="track__time--current">--</span>
            <span> / </span>
            <span class="track__time--duration">--</span>
          </div>

          <div class="progress-container">
            <div class="progress">
              <div class="progress__bar"></div>
              <div class="progress__preload"></div>
            </div>
          </div>

        </div>
      </div>
      <div class="ap__item ap__item--settings">
        <div class="ap__controls volume-container">
          <button class="volume-btn">
            <svg class="icon-volume-on" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" fill="#333" width="24" height="24" viewBox="0 0 24 24">
              <path d="M14.016 3.234q3.047 0.656 5.016 3.117t1.969 5.648-1.969 5.648-5.016 3.117v-2.063q2.203-0.656 3.586-2.484t1.383-4.219-1.383-4.219-3.586-2.484v-2.063zM16.5 12q0 2.813-2.484 4.031v-8.063q2.484 1.219 2.484 4.031zM3 9h3.984l5.016-5.016v16.031l-5.016-5.016h-3.984v-6z"></path>
            </svg>
            <svg class="icon-volume-off" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" fill="#333" width="24" height="24" viewBox="0 0 24 24">
              <path d="M12 3.984v4.219l-2.109-2.109zM4.266 3l16.734 16.734-1.266 1.266-2.063-2.063q-1.734 1.359-3.656 1.828v-2.063q1.172-0.328 2.25-1.172l-4.266-4.266v6.75l-5.016-5.016h-3.984v-6h4.734l-4.734-4.734zM18.984 12q0-2.391-1.383-4.219t-3.586-2.484v-2.063q3.047 0.656 5.016 3.117t1.969 5.648q0 2.25-1.031 4.172l-1.5-1.547q0.516-1.266 0.516-2.625zM16.5 12q0 0.422-0.047 0.609l-2.438-2.438v-2.203q2.484 1.219 2.484 4.031z"></path>
            </svg>
          </button>
          <div class="volume">
            <div class="volume__track">
              <div class="volume__bar"></div>
            </div>
          </div>
        </div>
        <button class="ap__controls ap__controls--repeat">
          <svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" fill="#333" width="24" height="24" viewBox="0 0 24 24">
            <path d="M17.016 17.016v-4.031h1.969v6h-12v3l-3.984-3.984 3.984-3.984v3h10.031zM6.984 6.984v4.031h-1.969v-6h12v-3l3.984 3.984-3.984 3.984v-3h-10.031z"></path>
          </svg>
        </button>
        <button class="ap__controls ap__controls--playlist">
          <svg version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" fill="#333" width="24" height="24" viewBox="0 0 24 24">
            <path d="M17.016 12.984l4.969 3-4.969 3v-6zM2.016 15v-2.016h12.984v2.016h-12.984zM18.984 5.016v1.969h-16.969v-1.969h16.969zM18.984 9v2.016h-16.969v-2.016h16.969z"></path>
          </svg>
        </button>
      </div>
  </div>
</div>


        </div>
        <p class="space30"></p>
        <a href="<?php echo get_site_url(); ?>/view-featured-memorial/" class="viewmeo">View All Feature Memorial</a>

        </div>
      </div>
    </div>
  </section>
<style>
p.pvc_stats {
    color: transparent;
}
    div#wp-share-button-325 {
    display: none;
}
a.red_btn.candle1.candle.lea_tri {
    color: #fff;
}
a.red_btn.candle {
    color: #fff;
}
a.viewmeo {
    color: #582236;
        float: right;
    
}
</style>
<style>
/*===================Main Styles=======================*/
.about_nelson{
  background-color: #ededed;
  padding: 50px 0;
}
.mandela_three .list-inline-item:not(:last-child) {
  margin-right: 10px;
}
.featured_box {
  padding: 30px;
  background: #fff;
  box-shadow: 0 3px 10px #00000040;
  margin-bottom: 17px;
  border-radius: 6px;
  position: relative;
}
.nameHead{
  color: #582236;
      font-size: 71px;
  font-family: 'SF-Pro-Display-Light';
}
.yeartag{
  font-size: 39px;
}
.descrip p{
  font-size: 21px;
}
.infoBox{
  background-color: #582236;
  padding: 30px;
  box-shadow: 0 3px 10px #00000040;
  border-radius: 6px;
  margin-bottom: 17px;
  position: relative;
}
.lblone{
  font-family: 'SF-Pro-Display-Bold';
  width: 240px;
  display: block;
}
.lblone,.lbltwo{
  font-size: 22px;
  color: #fff;
  margin-bottom: 0;
}
.quoteTag{
  font-size: 23.5px;
  color: #582236;
}
.vtop{
  vertical-align: top;
}
.vbase{
  vertical-align: baseline;
}
.btntribute,.btntlayflower{
  font-size: 17px;
  font-family: 'SF-Pro-Display-Semibold';
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  width: 200px;
      color: #fff;
}
.btntlayflower,.btntribute{
  background-color: #582236;
  color: #fff !important;
}

.btntribute:hover,.btntlayflower:hover{
  background-color: #f1ad48;
  color: #582236;
}
.featured_box h5 {
  font-size: 21px;
  font-family: 'SF-Pro-Display-Semibold';
}
.featured_box h5 i {
  color: #935e72;
  font-family: 'SF-Pro-Display-RegularItalic';
}
.featured_box h6 {
  font-size: 13px;
}
.flame{
  position: absolute;
  right: 7%;
  bottom: 0;
}
.commentTag{
  font-size: 15px;
  font-style: italic;
}
.sharetag{
  color: #582236;
}
.counterBlock{
  border-radius: 6px;
  background-color: #582236;
  color: #fff;
  display: flex;
  justify-content: space-between;
  text-align: center;
  padding: 30px;
}
.counterBlock .childDiv{
  position: relative;
}
.counterBlock .childDiv:not(:last-child):after {
  content: '';
  position: absolute;
  width: 1px;
  height: 70px;
  right: -40px;
  background-color: #fff;
  top: -5px;
}
.numTag{
  font-size: 28px;
  font-family: 'SF-Pro-Display-Bold';
  margin-bottom: 0;
}
.subTag{
  font-size: 11px;
}

.projectFactsWrap .item p.number {
    font-size: 28px;
   
}
.projectFactsWrap .item p {
    font-size: 11px;
}
.featured_box div#wp-share-button-515 {
    display: none;
}
.projectFactsWrap .item:after {
    width: 1px;
    background: #fff;
}
.projectFactsWrap .item {
    width: 33%;
    height: 91%;
    padding: 4px 0 4px;
}
.counte_Class {
    border-radius: 6px;
    border: none;
}
img.img-fluid.mainimg {
    border-radius: 9px;
    box-shadow: 0px 1px 7px 1px #9b8f8f;
}
.thumbimg img {
    border-radius: 9px;
    box-shadow: 0px 1px 7px 1px #9b8f8f;
    height: 142px;
    
}

.thumbimg {
    width: 32%;
}
/*--------------------Media-Query-----------------*/
@media(min-width: 1200px){
  .container {
    max-width: 1220px;
  }
}
@media(max-width: 1366px){
  
}


@media(max-width: 1199px){
  .counterBlock{
    padding: 20px;
  }
  .counterBlock .childDiv:not(:last-child):after {
    right: -15px;
    top: -5px;
  }
  .lblone{
    width: 200px;
  }
  .lblone, .lbltwo {
    font-size: 18px;
  }
  .nameHead {
    font-size: 45px;
  }
  .yeartag {
    font-size: 28px;
  }
  .descrip p{
    font-size: 16px;
  }
  .quoteTag {
    font-size: 15px;
  }
  .quoteTag img{
    width: 30px;
  }
  a.viewmeo {
    color: #582236;
    /* float: right; */
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    display: inherit;
}

}

@media(max-width: 991px){
  .btntribute, .btntlayflower {
    width: 185px;
  }
  
}

@media(max-width: 767px){
.prehead_left ul li:last-child {
    margin-left: 1px;
    margin-top: 10px;
}
  .counterBlock{
    width: 290px;
  }
  .btntribute, .btntlayflower{
    display: block;
    margin:20px auto 0;
  }
  .lblone {
    width: 140px;
  }
  .lblone, .lbltwo {
    font-size: 16px;
  }
  .nameHead {
    font-size: 30px;
  }
  .flame {
    position: relative;
     right: 0; 
    margin-left: auto;
    display: block;
  }
  .featured_box,.infoBox{
    padding: 15px;
  }
  .thumbimg img {
    
    height: 88px;
}

}
</style>
 <?php endwhile; ?>
<?php
get_footer();

?>
<script type="text/javascript">
 

        $.fn.jQuerySimpleCounter = function( options ) {
        var settings = $.extend({
            start:  0,
            end:    100,
            easing: 'swing',
            duration: 400,
            complete: ''
        }, options );

        var thisElement = $(this);

        $({count: settings.start}).animate({count: settings.end}, {
            duration: settings.duration,
            easing: settings.easing,
            step: function() {
                var mathCount = Math.ceil(this.count);
                thisElement.text(mathCount);
            },
            complete: settings.complete
        });
    };


$('#number1').jQuerySimpleCounter({end: <?php $msg3 = $wpdb->get_results("SELECT`postcount` FROM `wp_pvc_total`");
                 foreach($msg3 as $val3)
                                { ?> <?php echo $val3->postcount;  ?><?php } ?>,duration: 3000});
$('#number2').jQuerySimpleCounter({end:  <?php
                $msg2 = $wpdb->get_results("SELECT count(*) as countred1 FROM `wp_trubutenote` where `Approval` = 1 And `tributeaction`='tribute' AND `tribute_frompage`='featured' ");
                 foreach($msg2 as $val2)
                                {
                                ?><?php echo $val2->countred1; ?><?php } ?>,duration: 3000});
$('#number3').jQuerySimpleCounter({end: <?php
                $msg3 = $wpdb->get_results("SELECT count(*) as countred FROM `wp_trubutenote` where `tributeaction`='lightcandle' AND `tribute_frompage`='featured'");
                 foreach($msg3 as $val3)
                                {
                                ?><?php echo $val3->countred; ?><?php } ?>,duration: 2000});




    /* AUTHOR LINK */
     $('.about-me-img').hover(function(){
            $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
        }, function(){
            $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
        });
        
        
</script>
<script type="text/javascript">
//   var music = document.getElementById("music");
// var playButton = document.getElementById("play");
// var pauseButton = document.getElementById("pause");
// var playhead = document.getElementById("elapsed");
// var timeline = document.getElementById("slider");
// var timer = document.getElementById("timer");
// var duration;
// pauseButton.style.visibility = "hidden";

// var timelineWidth = timeline.offsetWidth - playhead.offsetWidth;
// music.addEventListener("timeupdate", timeUpdate, false);

// function timeUpdate() {
//   var playPercent = timelineWidth * (music.currentTime / duration);
//   playhead.style.width = playPercent + "px";

//   var secondsIn = Math.floor(((music.currentTime / duration) / 3.5) * 100);
//   if (secondsIn <= 9) {
//     timer.innerHTML = "0:0" + secondsIn;
//   } else {
//     timer.innerHTML = "0:" + secondsIn;
//   }
// }

// playButton.onclick = function() {
//   music.play();
//   playButton.style.visibility = "hidden";
//   pause.style.visibility = "visible";
// }

// pauseButton.onclick = function() {
//   music.pause();
//   playButton.style.visibility = "visible";
//   pause.style.visibility = "hidden";
// }

// music.addEventListener("canplaythrough", function () {
//   duration = music.duration;
// }, false);
(function(window, undefined) {

'use strict';

var AudioPlayer = (function() {

  // Player vars!
  var
  docTitle = document.title,
  player   = document.getElementById('ap'),
  playBtn,
  playSvg,
  playSvgPath,
  prevBtn,
  nextBtn,
  plBtn,
  repeatBtn,
  volumeBtn,
  progressBar,
  preloadBar,
  curTime,
  durTime,
  trackTitle,
  audio,
  index = 0,
  playList,
  volumeBar,
  wheelVolumeValue = 0,
  volumeLength,
  repeating = false,
  seeking = false,
  seekingVol = false,
  rightClick = false,
  apActive = false,
  // playlist vars
  pl,
  plUl,
  plLi,
  tplList =
            '<li class="pl-list" data-track="{count}">'+
              '<div class="pl-list__track">'+
                '<div class="pl-list__icon"></div>'+
                '<div class="pl-list__eq">'+
                  '<div class="eq">'+
                    '<div class="eq__bar"></div>'+
                    '<div class="eq__bar"></div>'+
                    '<div class="eq__bar"></div>'+
                  '</div>'+
                '</div>'+
              '</div>'+
              '<div class="pl-list__title">{title}</div>'+
              '<button class="pl-list__remove">'+
                '<svg fill="#000000" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">'+
                    '<path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>'+
                    '<path d="M0 0h24v24H0z" fill="none"/>'+
                '</svg>'+
              '</button>'+
            '</li>',
  // settings
  settings = {
    volume        : 0.1,
    changeDocTitle: true,
    confirmClose  : true,
    autoPlay      : false,
    buffered      : true,
    notification  : true,
    playList      : []
  };

  function init(options) {

    if(!('classList' in document.documentElement)) {
      return false;
    }

    if(apActive || player === null) {
      return 'Player already init';
    }

    settings = extend(settings, options);

    // get player elements
    playBtn        = player.querySelector('.ap__controls--toggle');
    playSvg        = playBtn.querySelector('.icon-play');
    playSvgPath    = playSvg.querySelector('path');
    prevBtn        = player.querySelector('.ap__controls--prev');
    nextBtn        = player.querySelector('.ap__controls--next');
    repeatBtn      = player.querySelector('.ap__controls--repeat');
    volumeBtn      = player.querySelector('.volume-btn');
    plBtn          = player.querySelector('.ap__controls--playlist');
    curTime        = player.querySelector('.track__time--current');
    durTime        = player.querySelector('.track__time--duration');
    trackTitle     = player.querySelector('.track__title');
    progressBar    = player.querySelector('.progress__bar');
    preloadBar     = player.querySelector('.progress__preload');
    volumeBar      = player.querySelector('.volume__bar');

    playList = settings.playList;

    playBtn.addEventListener('click', playToggle, false);
    volumeBtn.addEventListener('click', volumeToggle, false);
    repeatBtn.addEventListener('click', repeatToggle, false);

    progressBar.closest('.progress-container').addEventListener('mousedown', handlerBar, false);
    progressBar.closest('.progress-container').addEventListener('mousemove', seek, false);

    document.documentElement.addEventListener('mouseup', seekingFalse, false);

    volumeBar.closest('.volume').addEventListener('mousedown', handlerVol, false);
    volumeBar.closest('.volume').addEventListener('mousemove', setVolume);
    volumeBar.closest('.volume').addEventListener(wheel(), setVolume, false);

    prevBtn.addEventListener('click', prev, false);
    nextBtn.addEventListener('click', next, false);

    apActive = true;

    // Create playlist
    renderPL();
    plBtn.addEventListener('click', plToggle, false);

    // Create audio object
    audio = new Audio();
    audio.volume = settings.volume;
    audio.preload = 'auto';

    audio.addEventListener('error', errorHandler, false);
    audio.addEventListener('timeupdate', timeUpdate, false);
    audio.addEventListener('ended', doEnd, false);

    volumeBar.style.height = audio.volume * 100 + '%';
    volumeLength = volumeBar.css('height');

    if(settings.confirmClose) {
      window.addEventListener("beforeunload", beforeUnload, false);
    }

    if(isEmptyList()) {
      return false;
    }
    audio.src = playList[index].file;
    trackTitle.innerHTML = playList[index].title;

    if(settings.autoPlay) {
      audio.play();
      playBtn.classList.add('is-playing');
      playSvgPath.setAttribute('d', playSvg.getAttribute('data-pause'));
      plLi[index].classList.add('pl-list--current');
      notify(playList[index].title, {
        icon: playList[index].icon,
        body: 'Now playing'
      });
    }
  }

  function changeDocumentTitle(title) {
    if(settings.changeDocTitle) {
      if(title) {
        document.title = title;
      }
      else {
        document.title = docTitle;
      }
    }
  }

  function beforeUnload(evt) {
    if(!audio.paused) {
      var message = 'Music still playing';
      evt.returnValue = message;
      return message;
    }
  }

  function errorHandler(evt) {
    if(isEmptyList()) {
      return;
    }
    var mediaError = {
      '1': 'MEDIA_ERR_ABORTED',
      '2': 'MEDIA_ERR_NETWORK',
      '3': 'MEDIA_ERR_DECODE',
      '4': 'MEDIA_ERR_SRC_NOT_SUPPORTED'
    };
    audio.pause();
    curTime.innerHTML = '--';
    durTime.innerHTML = '--';
    progressBar.style.width = 0;
    preloadBar.style.width = 0;
    playBtn.classList.remove('is-playing');
    playSvgPath.setAttribute('d', playSvg.getAttribute('data-play'));
    plLi[index] && plLi[index].classList.remove('pl-list--current');
    changeDocumentTitle();
    throw new Error('Houston we have a problem: ' + mediaError[evt.target.error.code]);
  }

/**
 * UPDATE PL
 */
  function updatePL(addList) {
    if(!apActive) {
      return 'Player is not yet initialized';
    }
    if(!Array.isArray(addList)) {
      return;
    }
    if(addList.length === 0) {
      return;
    }

    var count = playList.length;
    var html  = [];
    playList.push.apply(playList, addList);
    addList.forEach(function(item) {
      html.push(
        tplList.replace('{count}', count++).replace('{title}', item.title)
      );
    });
    // If exist empty message
    if(plUl.querySelector('.pl-list--empty')) {
      plUl.removeChild( pl.querySelector('.pl-list--empty') );
      audio.src = playList[index].file;
      trackTitle.innerHTML = playList[index].title;
    }
    // Add song into playlist
    plUl.insertAdjacentHTML('beforeEnd', html.join(''));
    plLi = pl.querySelectorAll('li');
  }

/**
 *  PlayList methods
 */
    function renderPL() {
      var html = [];

      playList.forEach(function(item, i) {
        html.push(
          tplList.replace('{count}', i).replace('{title}', item.title)
        );
      });

      pl = create('div', {
        'className': 'pl-container',
        'id': 'pl',
        'innerHTML': '<ul class="pl-ul">' + (!isEmptyList() ? html.join('') : '<li class="pl-list--empty">PlayList is empty</li>') + '</ul>'
      });

      player.parentNode.insertBefore(pl, player.nextSibling);

      plUl = pl.querySelector('.pl-ul');
      plLi = plUl.querySelectorAll('li');

      pl.addEventListener('click', listHandler, false);
    }

    function listHandler(evt) {
      evt.preventDefault();

      if(evt.target.matches('.pl-list__title')) {
        var current = parseInt(evt.target.closest('.pl-list').getAttribute('data-track'), 10);
        if(index !== current) {
          index = current;
          play(current);
        }
        else {
          playToggle();
        }
      }
      else {
          if(!!evt.target.closest('.pl-list__remove')) {
            var parentEl = evt.target.closest('.pl-list');
            var isDel = parseInt(parentEl.getAttribute('data-track'), 10);

            playList.splice(isDel, 1);
            parentEl.closest('.pl-ul').removeChild(parentEl);

            plLi = pl.querySelectorAll('li');

            [].forEach.call(plLi, function(el, i) {
              el.setAttribute('data-track', i);
            });

            if(!audio.paused) {

              if(isDel === index) {
                play(index);
              }

            }
            else {
              if(isEmptyList()) {
                clearAll();
              }
              else {
                if(isDel === index) {
                  if(isDel > playList.length - 1) {
                    index -= 1;
                  }
                  audio.src = playList[index].file;
                  trackTitle.innerHTML = playList[index].title;
                  progressBar.style.width = 0;
                }
              }
            }
            if(isDel < index) {
              index--;
            }
          }

      }
    }

    function plActive() {
      if(audio.paused) {
        plLi[index].classList.remove('pl-list--current');
        return;
      }
      var current = index;
      for(var i = 0, len = plLi.length; len > i; i++) {
        plLi[i].classList.remove('pl-list--current');
      }
      plLi[current].classList.add('pl-list--current');
    }


/**
 * Player methods
 */
  function play(currentIndex) {

    if(isEmptyList()) {
      return clearAll();
    }

    index = (currentIndex + playList.length) % playList.length;

    audio.src = playList[index].file;
    trackTitle.innerHTML = playList[index].title;

    // Change document title
    changeDocumentTitle(playList[index].title);

    // Audio play
    audio.play();

    // Show notification
    notify(playList[index].title, {
      icon: playList[index].icon,
      body: 'Now playing',
      tag: 'music-player'
    });

    // Toggle play button
    playBtn.classList.add('is-playing');
    playSvgPath.setAttribute('d', playSvg.getAttribute('data-pause'));

    // Set active song playlist
    plActive();
  }

  function prev() {
    play(index - 1);
  }

  function next() {
    play(index + 1);
  }

  function isEmptyList() {
    return playList.length === 0;
  }

  function clearAll() {
    audio.pause();
    audio.src = '';
    trackTitle.innerHTML = 'queue is empty';
    curTime.innerHTML = '--';
    durTime.innerHTML = '--';
    progressBar.style.width = 0;
    preloadBar.style.width = 0;
    playBtn.classList.remove('is-playing');
    playSvgPath.setAttribute('d', playSvg.getAttribute('data-play'));
    if(!plUl.querySelector('.pl-list--empty')) {
      plUl.innerHTML = '<li class="pl-list--empty">PlayList is empty</li>';
    }
    changeDocumentTitle();
  }

  function playToggle() {
    if(isEmptyList()) {
      return;
    }
    if(audio.paused) {

      if(audio.currentTime === 0) {
        notify(playList[index].title, {
          icon: playList[index].icon,
          body: 'Now playing'
        });
      }
      changeDocumentTitle(playList[index].title);

      audio.play();

      playBtn.classList.add('is-playing');
      playSvgPath.setAttribute('d', playSvg.getAttribute('data-pause'));
    }
    else {
      changeDocumentTitle();
      audio.pause();
      playBtn.classList.remove('is-playing');
      playSvgPath.setAttribute('d', playSvg.getAttribute('data-play'));
    }
    plActive();
  }

  function volumeToggle() {
    if(audio.muted) {
      if(parseInt(volumeLength, 10) === 0) {
        volumeBar.style.height = settings.volume * 100 + '%';
        audio.volume = settings.volume;
      }
      else {
        volumeBar.style.height = volumeLength;
      }
      audio.muted = false;
      volumeBtn.classList.remove('has-muted');
    }
    else {
      audio.muted = true;
      volumeBar.style.height = 0;
      volumeBtn.classList.add('has-muted');
    }
  }

  function repeatToggle() {
    if(repeatBtn.classList.contains('is-active')) {
      repeating = false;
      repeatBtn.classList.remove('is-active');
    }
    else {
      repeating = true;
      repeatBtn.classList.add('is-active');
    }
  }

  function plToggle() {
    plBtn.classList.toggle('is-active');
    pl.classList.toggle('h-show');
  }

  function timeUpdate() {
    if(audio.readyState === 0 || seeking) return;

    var barlength = Math.round(audio.currentTime * (100 / audio.duration));
    progressBar.style.width = barlength + '%';

    var
    curMins = Math.floor(audio.currentTime / 60),
    curSecs = Math.floor(audio.currentTime - curMins * 60),
    mins = Math.floor(audio.duration / 60),
    secs = Math.floor(audio.duration - mins * 60);
    (curSecs < 10) && (curSecs = '0' + curSecs);
    (secs < 10) && (secs = '0' + secs);

    curTime.innerHTML = curMins + ':' + curSecs;
    durTime.innerHTML = mins + ':' + secs;

    if(settings.buffered) {
      var buffered = audio.buffered;
      if(buffered.length) {
        var loaded = Math.round(100 * buffered.end(0) / audio.duration);
        preloadBar.style.width = loaded + '%';
      }
    }
  }

  /**
   * TODO shuffle
   */
  function shuffle() {
    if(shuffle) {
      index = Math.round(Math.random() * playList.length);
    }
  }

  function doEnd() {
    if(index === playList.length - 1) {
      if(!repeating) {
        audio.pause();
        plActive();
        playBtn.classList.remove('is-playing');
        playSvgPath.setAttribute('d', playSvg.getAttribute('data-play'));
        return;
      }
      else {
        play(0);
      }
    }
    else {
      play(index + 1);
    }
  }

  function moveBar(evt, el, dir) {
    var value;
    if(dir === 'horizontal') {
      value = Math.round( ((evt.clientX - el.offset().left) + window.pageXOffset)  * 100 / el.parentNode.offsetWidth);
      el.style.width = value + '%';
      return value;
    }
    else {
      if(evt.type === wheel()) {
        value = parseInt(volumeLength, 10);
        var delta = evt.deltaY || evt.detail || -evt.wheelDelta;
        value = (delta > 0) ? value - 10 : value + 10;
      }
      else {
        var offset = (el.offset().top + el.offsetHeight) - window.pageYOffset;
        value = Math.round((offset - evt.clientY));
      }
      if(value > 100) value = wheelVolumeValue = 100;
      if(value < 0) value = wheelVolumeValue = 0;
      volumeBar.style.height = value + '%';
      return value;
    }
  }

  function handlerBar(evt) {
    rightClick = (evt.which === 3) ? true : false;
    seeking = true;
    !rightClick && progressBar.classList.add('progress__bar--active');
    seek(evt);
  }

  function handlerVol(evt) {
    rightClick = (evt.which === 3) ? true : false;
    seekingVol = true;
    setVolume(evt);
  }

  function seek(evt) {
    evt.preventDefault();
    if(seeking && rightClick === false && audio.readyState !== 0) {
      window.value = moveBar(evt, progressBar, 'horizontal');
    }
  }

  function seekingFalse() {
    if(seeking && rightClick === false && audio.readyState !== 0) {
      audio.currentTime = audio.duration * (window.value / 100);
      progressBar.classList.remove('progress__bar--active');
    }
    seeking = false;
    seekingVol = false;
  }

  function setVolume(evt) {
    evt.preventDefault();
    volumeLength = volumeBar.css('height');
    if(seekingVol && rightClick === false || evt.type === wheel()) {
      var value = moveBar(evt, volumeBar.parentNode, 'vertical') / 100;
      if(value <= 0) {
        audio.volume = 0;
        audio.muted = true;
        volumeBtn.classList.add('has-muted');
      }
      else {
        if(audio.muted) audio.muted = false;
        audio.volume = value;
        volumeBtn.classList.remove('has-muted');
      }
    }
  }

  function notify(title, attr) {
    if(!settings.notification) {
      return;
    }
    if(window.Notification === undefined) {
      return;
    }
    attr.tag = 'AP music player';
    window.Notification.requestPermission(function(access) {
      if(access === 'granted') {
        var notice = new Notification(title.substr(0, 110), attr);
        setTimeout(notice.close.bind(notice), 5000);
      }
    });
  }

/* Destroy method. Clear All */
  function destroy() {
    if(!apActive) return;

    if(settings.confirmClose) {
      window.removeEventListener('beforeunload', beforeUnload, false);
    }

    playBtn.removeEventListener('click', playToggle, false);
    volumeBtn.removeEventListener('click', volumeToggle, false);
    repeatBtn.removeEventListener('click', repeatToggle, false);
    plBtn.removeEventListener('click', plToggle, false);

    progressBar.closest('.progress-container').removeEventListener('mousedown', handlerBar, false);
    progressBar.closest('.progress-container').removeEventListener('mousemove', seek, false);
    document.documentElement.removeEventListener('mouseup', seekingFalse, false);

    volumeBar.closest('.volume').removeEventListener('mousedown', handlerVol, false);
    volumeBar.closest('.volume').removeEventListener('mousemove', setVolume);
    volumeBar.closest('.volume').removeEventListener(wheel(), setVolume);
    document.documentElement.removeEventListener('mouseup', seekingFalse, false);

    prevBtn.removeEventListener('click', prev, false);
    nextBtn.removeEventListener('click', next, false);

    audio.removeEventListener('error', errorHandler, false);
    audio.removeEventListener('timeupdate', timeUpdate, false);
    audio.removeEventListener('ended', doEnd, false);

    // Playlist
    pl.removeEventListener('click', listHandler, false);
    pl.parentNode.removeChild(pl);

    audio.pause();
    apActive = false;
    index = 0;

    playBtn.classList.remove('is-playing');
    playSvgPath.setAttribute('d', playSvg.getAttribute('data-play'));
    volumeBtn.classList.remove('has-muted');
    plBtn.classList.remove('is-active');
    repeatBtn.classList.remove('is-active');

    // Remove player from the DOM if necessary
    // player.parentNode.removeChild(player);
  }


/**
 *  Helpers
 */
  function wheel() {
    var wheel;
    if ('onwheel' in document) {
      wheel = 'wheel';
    } else if ('onmousewheel' in document) {
      wheel = 'mousewheel';
    } else {
      wheel = 'MozMousePixelScroll';
    }
    return wheel;
  }

  function extend(defaults, options) {
    for(var name in options) {
      if(defaults.hasOwnProperty(name)) {
        defaults[name] = options[name];
      }
    }
    return defaults;
  }
  function create(el, attr) {
    var element = document.createElement(el);
    if(attr) {
      for(var name in attr) {
        if(element[name] !== undefined) {
          element[name] = attr[name];
        }
      }
    }
    return element;
  }

  Element.prototype.offset = function() {
    var el = this.getBoundingClientRect(),
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    return {
      top: el.top + scrollTop,
      left: el.left + scrollLeft
    };
  };

  Element.prototype.css = function(attr) {
    if(typeof attr === 'string') {
      return getComputedStyle(this, '')[attr];
    }
    else if(typeof attr === 'object') {
      for(var name in attr) {
        if(this.style[name] !== undefined) {
          this.style[name] = attr[name];
        }
      }
    }
  };

  // matches polyfill
  window.Element && function(ElementPrototype) {
      ElementPrototype.matches = ElementPrototype.matches ||
      ElementPrototype.matchesSelector ||
      ElementPrototype.webkitMatchesSelector ||
      ElementPrototype.msMatchesSelector ||
      function(selector) {
          var node = this, nodes = (node.parentNode || node.document).querySelectorAll(selector), i = -1;
          while (nodes[++i] && nodes[i] != node);
          return !!nodes[i];
      };
  }(Element.prototype);

  // closest polyfill
  window.Element && function(ElementPrototype) {
      ElementPrototype.closest = ElementPrototype.closest ||
      function(selector) {
          var el = this;
          while (el.matches && !el.matches(selector)) el = el.parentNode;
          return el.matches ? el : null;
      };
  }(Element.prototype);

/**
 *  Public methods
 */
  return {
    init: init,
    update: updatePL,
    destroy: destroy
  };

})();

window.AP = AudioPlayer;

})(window);

// TEST: image for web notifications
var iconImage = 'https://funkyimg.com/i/21pX5.png';

AP.init({
  playList: [
   <?php
                     if( have_rows('music') ):
                     while ( have_rows('music') ) : the_row();
                     $tumb=get_sub_field('music',$id);
                     $song=get_sub_field('song_name',$id);
                      ?>
    {'icon': iconImage, 'title': '<?php echo $song ?>', 'file': '<?php echo $tumb ?>'},
  
    <?php
    endwhile;
    endif;
    ?>
  ]
});

// TEST: update playlist
document.getElementById('addSongs').addEventListener('click', function(e) {
  e.preventDefault();
  AP.update([
  	 <?php
                     if( have_rows('music') ):
                     while ( have_rows('music') ) : the_row();
                     $tumb=get_sub_field('music',$id);
                     $song=get_sub_field('song_name',$id);
                      ?>
    {'icon': iconImage, 'title': '<?php echo $song ?>', 'file': '<?php echo $tumb ?>'},
     <?php
    endwhile;
    endif;
    ?>
  ]);
})

</script>
<script type="text/javascript">
  
  $( ".lea_tri" ).click(function() {
     $( ".main_tri").hide();
     $( ".leave_tribute").show();
  });
  $( ".picture_class" ).click(function() {
     $(".tribute_main").find(".tab-content").find(".tab-pane_class.active").removeClass("active");
     $(".gal_img").addClass("active show");
  });
  
</script>
<script>
function light(id,name,lname,type,page) {
    jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/feature_addtributecandle.php'; ?>",
        data:{'type': type,'id': id,'name': name,'lname': lname,'page': page},
        success: function(data)
        {
            
           jQuery(".canlig").html(data);
          /* jQuery("#test").html('');
          jQuery("#test").html(data);
           
          jQuery("#testlast").html(data);*/
         /* console.log(data);*/
        }
        });
   
}
function tri(tribute,type) {
   $('.result').html('<input type="hidden" name="tribure_type" value="' +  type + '">');
   }
</script>
</body>
</html>