<?php
/**
 * Template Name: About
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package safiri_salama
 */

get_header();
$id= get_the_ID();
?>

<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    $memorial_image = get_field('memorial_banner',$id);
    $create_memorial = get_field('create_memorial',$id);
    $text = get_field('text',$id);
    $memorial_link = get_field('memorial_link',$id)
?>

<img class="img-fluid w-100 mx-auto" src="<?php echo get_field('banner_image',$id)['url'];?>" alt="img">

<section class="main_sec">
    <div class="container">
        <div class="videoh_box">
            <div class="row">
                <div class="col-md-12">
                    <iframe
                    src="<?php echo get_field('video_link',$id);?>">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="p_text"><?php echo get_field('our_online',$id);?></div>
            </div>
        </div>
        <div class="row">
            <?php
                $i=0;
                if ( have_rows('content',$id) ) : while ( have_rows('content',$id) ) : the_row(); 
                $class='';
                if(($i==0)||($i==3)){
                    $class='pad_right25';
                }
                if(($i==1)||($i==4)){
                    $class='pad20';
                }
                if(($i==2)||($i==5)){
                    $class='pad_left25';
                }
            ?>
            
                <div class="col-md-4 <?php echo $class;?>">
                    <div class="red_box">
                        <img class="img-fluid" alt="img" src="<?php echo get_sub_field('image',$id)['url'];?>">
                        <h4> <?php echo get_sub_field('title',$id);?></h4>
                        <h5><?php echo get_sub_field('text',$id);?></h5>
                        <p><?php echo get_sub_field('data',$id);?></p>
                    </div>
                </div>
                
            <?php $i++; endwhile; endif; ?>
                
        </div>
       
        <div class="owl_class">
          <div class="row">
              <div class="col-md-12">
                  <div class="owl-carousel owl-theme">
                      <?php
                      
                          $args_slider = array( 'post_type' => 'testimonial', 'posts_per_page' => 20, 'order' => 'DESC');
                          $loop_slider = new WP_Query( $args_slider );
                          while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                      ?>
                      <div class="item">
                        <div class="item-box">
                            <img class="img-fluid" alt="img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));  ?>">
                            <h3><?php echo the_title();?></h3>
                            <p><?php echo the_content();?></p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="<?php echo get_field('facebook',$id);?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo get_field('twitter',$id);?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo get_field('google_plus',$id);?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                      </div>
                     
                      <?php endwhile; ?>
                       <?php
                      /*$pro = $wpdb->get_results("SELECT * FROM `wp_cf7_vdata_entry` WHERE `name` = 'text-541' order by `data_id` DESC");*/
                      $pro = $wpdb->get_results("SELECT * FROM `wp_cf7_vdata_entry` WHERE `value` = 'yes' order by `data_id` DESC");
                       foreach($pro as $val1)
                            {
                            $testid=$val1->data_id;
                              $namesel = $wpdb->get_results("SELECT * FROM `wp_cf7_vdata_entry` WHERE `name` = 'text-541' and `data_id` = $testid");
                               $name=($namesel[0]->value!='')? $namesel[0]->value:"";
                               $testitext = $wpdb->get_results("SELECT * FROM `wp_cf7_vdata_entry` WHERE `name` = 'textarea-226' and `data_id` = $testid");
                             $con=($testitext[0]->value!='')?$testitext[0]->value:"";
                              $socialface = $wpdb->get_results("SELECT * FROM `wp_cf7_vdata_entry` WHERE `name` = 'text-891' and `data_id` = $testid");
                              $facebook=($socialface[0]->value!='')?$socialface[0]->value:"";
                               $socialgoogle= $wpdb->get_results("SELECT * FROM `wp_cf7_vdata_entry` WHERE `name` = 'text-194' and `data_id` = $testid");
                              $google=($socialgoogle[0]->value!='')?$socialgoogle[0]->value:"";
                               $socialtwit= $wpdb->get_results("SELECT * FROM `wp_cf7_vdata_entry` WHERE `name` = 'text-833' and `data_id` = $testid");
                              $twit=($socialtwit[0]->value!='')?$socialtwit[0]->value:"";
                               $testimg= $wpdb->get_results("SELECT * FROM `wp_cf7_vdata_entry` WHERE `name` = 'file-808' and `data_id` = $testid");
                              $img=($testimg[0]->value!='')?$testimg[0]->value:"";
                      ?>
                      <div class="item">
                        <div class="item-box">
                            <img class="img-fluid testimgpro" alt="img" src="<?php echo $img ?>">
                            <h3><?php echo $name;?> </h3>
                            <?php
                            $contact =substr($con, 0, 100);
                            ?>
                            <p><?php echo $contact ?></p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="<?php echo $facebook;?>" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo $twit;?>" target="blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo $google;?>" target="blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                      </div>
                      <?php
                            }
                      ?>
                      <!--<div class="item">-->
                      <!--  <div class="item-box">-->
                      <!--      <img class="img-fluid" alt="img" src="img/img9.png">-->
                      <!--      <h3>John Doe</h3>-->
                      <!--      <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem </p>-->
                      <!--      <ul class="list-inline">-->
                      <!--          <li class="list-inline-item"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                      <!--          <li class="list-inline-item"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                      <!--          <li class="list-inline-item"><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
                      <!--      </ul>-->
                      <!--  </div>-->
                      <!--</div>-->
                      <!--<div class="item">-->
                      <!--  <div class="item-box">-->
                      <!--      <img class="img-fluid" alt="img" src="img/img9.png">-->
                      <!--      <h3>John Doe</h3>-->
                      <!--      <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem </p>-->
                      <!--      <ul class="list-inline">-->
                      <!--          <li class="list-inline-item"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                      <!--          <li class="list-inline-item"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                      <!--          <li class="list-inline-item"><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
                      <!--      </ul>-->
                      <!--  </div>-->
                      <!--</div>-->
                      <!--<div class="item">-->
                      <!--  <div class="item-box">-->
                      <!--      <img class="img-fluid" alt="img" src="img/img9.png">-->
                      <!--      <h3>John Doe</h3>-->
                      <!--      <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem </p>-->
                      <!--      <ul class="list-inline">-->
                      <!--          <li class="list-inline-item"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                      <!--          <li class="list-inline-item"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                      <!--          <li class="list-inline-item"><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
                      <!--      </ul>-->
                      <!--  </div>-->
                      <!--</div>-->
                      <!--<div class="item">-->
                      <!--  <div class="item-box">-->
                      <!--      <img class="img-fluid" alt="img" src="img/img9.png">-->
                      <!--      <h3>John Doe</h3>-->
                      <!--      <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem </p>-->
                      <!--      <ul class="list-inline">-->
                      <!--          <li class="list-inline-item"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                      <!--          <li class="list-inline-item"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                      <!--          <li class="list-inline-item"><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
                      <!--      </ul>-->
                      <!--  </div>-->
                      <!--</div>-->
                      <!--<div class="item">-->
                      <!--  <div class="item-box">-->
                      <!--      <img class="img-fluid" alt="img" src="img/img9.png">-->
                      <!--      <h3>John Doe</h3>-->
                      <!--      <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem </p>-->
                      <!--      <ul class="list-inline">-->
                      <!--          <li class="list-inline-item"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
                      <!--          <li class="list-inline-item"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
                      <!--          <li class="list-inline-item"><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
                      <!--      </ul>-->
                      <!--  </div>-->
                      <!--</div>              -->
                  </div>
                  <a href="<?php echo get_site_url(); ?>/testimonial/" class="testimonial_btn">See all testimonials</a>
              </div>
          </div>
        </div>
        <div class="counte_Class counte_Class1">
            <div class="row">
                <div class="col-md-12">
                    <div id="projectFacts" class="sectionClass">
                        <div class="fullWidth eight columns">
                            <div class="projectFactsWrap ">
                                <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                                    <p id="number1" class="number number_class"><?php echo get_field('years_of_experience',$id);?></p>
                                    <p>Visitors</p>
                                </div>
                                <div class="item wow fadeInUpBig animated animated" data-number="55" style="visibility: visible;">
                                    
                                    <p id="number2" class="number"> <?php echo get_field('satisfied_customers',$id);?></p>
                                    <p>Memorials Created</p>
                                </div>
                                <div class="item wow fadeInUpBig animated animated" data-number="359" style="visibility: visible;">
                                    
                                    <p id="number3" class="number"> <?php echo get_field('tributes_written',$id);?></p>
                                    <p>Tributes Written</p>
                                </div>
                                <div class="item wow fadeInUpBig animated animated" data-number="246" style="visibility: visible;">
                                    
                                    <p id="number4" class="number"> <?php echo get_field('memorials_created',$id);?></p>
                                    <p>Pictures Uploaded</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .mem_sec {
        background: url(<?php echo $memorial_image['url'];?>)no-repeat;
        background-size: cover;
        background-position: center;
        padding: 150px 0 60px;
    }
</style>
<section class="mem_sec">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-lg-5">
        <h2><?php echo $create_memorial ;?></h2>
        <p><?php echo $text;?> </p>
        <a href="<?php echo get_site_url();?>/create-memory/" class="red_btn">CREATE MEMORIAL</a>
      </div>
    </div>
  </div>
</section>

<?php endwhile; endif; ?>
                  
<?php get_footer();?>

<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:35,
        nav:true,
        items: 3,
        smartSpeed: 750,
        navText: ['<img src="<?php echo get_stylesheet_directory_uri();?>/img/left.png">', '<img src="<?php echo get_stylesheet_directory_uri();?>/img/right.png">'],
        responsive : {
            0 : {
                items: 1
            },
            480 : {
                items: 1
            },
            767 : {
                items: 2
            },
            1200 : {
                items: 3
            }
        }

    });
</script>