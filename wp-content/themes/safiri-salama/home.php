<?php
global $session;
session_start();
/**
 * Template Name: Home
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
?>
<style>
  .header_bg p {
   
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}
    .memorials {
        background: url(<?php echo get_field('banner_image2',$id)['url'];?>)no-repeat;
        background-size: cover;
        background-position: center;
        padding: 120px 0 30px;
    }
    span.screen-reader-text {
        display: none;
    }
    input.search-field {
        outline-offset: -2px;
        font-size: 15px;
        color: #787878;
        background-color: #fff;
        border: none;
        border-radius: 5px;
        width: 250px;
        height: 40px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        padding: 0 10px;
        -webkit-appearance: none;
        margin-right: 5px;
    }
    input.search-submit {
        width: 33%;
        background: #582236;
        color: #fff;
        font-size: 14px;
        font-family: 'SF-Pro-Display-Heavy';
        border-radius: 5px;
        border: 0;
        height: 40px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        transition: .5s linear;
        cursor: pointer;
    }
    @media(max-width:767px){
        input.search-submit {
            width: 103%;
        }
    }
</style>
<div id="demo" class="carousel slide" data-ride="carousel">
<?php echo do_shortcode('[rev_slider alias="home"][/rev_slider]'); ?>
</div>

<section class="memorials">
    <div class="container">
        <div class="search_box search_box_main">
            <div class="row">
                <div class="col-md-12">
                  
                      <div class="row ">
                          <div class="col-md-5">
                              <h3>Search for a memorial:</h3>
                              <form method="post" action="<?php echo get_site_url(); ?>/memory-search/">
                             <div class="row pad_right5">
                                  <div class="col-md-8 pad6">
                                      <input type="text" class="form-control" placeholder="Last Name" name="serlname">
                                  </div>
                                  <div class="col-md-4 pad6">
                                      <input type="submit" class="btn_start" name="btnsub" type="button" value="SEARCH">
                                  </div>
                              </div>
                              </form>
                               <?php//	get_search_form(); ?>
                          </div>
                          <div class="col-md-7">
                                <h3>I want to share memories of:</h3>
                                <form action="<?php echo get_site_url(); ?>/create-memory" method="post">
                                <div class="row pad_left5">
                                 
                                      <div class="col-md-4 pad6">
                                          <input type="text" class="form-control" placeholder="First Name" name="fname">
                                      </div>
                                      <div class="col-md-4 pad6">
                                          <input type="text" class="form-control" placeholder="Last Name" name="lname">
                                      </div>
                                      <div class="col-md-4 pad6">
                                         <button class="btn_start" type="submit" name="subbtn">GET STARTED</button>
                                      </div>
                                 
                              </div>
                              </form>
                          </div>
                      </div>
                   
                </div>
            </div>
        </div>
                <div class="row">
            <div class="col-md-12">
                <h2 class="h2_class">Recent Memorials <a href="<?php echo get_site_url(); ?>/view-memories/" class="pull-right">View All Memorials</a></h2>
                <div class="memo_class">
                   
                    <div class="owl-carousel owl-theme">
                         <?php
                         /* $args_slider = array( 'post_type' => 'memorial', 'posts_per_page' => 5, 'order' => 'DESC');
                          $loop_slider = new WP_Query( $args_slider );
                          while ( $loop_slider->have_posts() ) : $loop_slider->the_post();*/
                        ?>
                     <!-- <div class="item">
                        <div class="memo_block">
                            <img class="img-fluid" alt="img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));  ?>">
                            <p><?php //echo the_title();?></p>
                            <span><?php// echo get_field('years',$id);?></span>
                        </div>
                      </div>-->
                        <?php// endwhile; ?>
                         <?php
                         $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute` where privacy ='public'");
     
                            foreach($msg1 as $val1)
                            {
                                $fullbirthdate= $val1->fullbirthdate;
                                 $orderdate = explode('/', $fullbirthdate);
                                   $year  = $orderdate[2];
                                    $fulldeathdate= $val1->fulldeathdate;
                                     $orderdate1 = explode('/', $fulldeathdate);
                                    $year1  = $orderdate1[2];
                                
                                ?>
                                <a href="<?php echo  $val1->webaddress;  ?>/?id=<?php echo  $val1->id;  ?>">
                         <div class="item">
                        <div class="memo_block">
                          <div class="img_class_frame">
                            <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_frame.png">
                            <?php
                            $profile= $val1->profileimg;
                            if(empty($profile))
                            {
                            ?>
                            <img class="img-fluid img_frame1" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-user.png">
                            <?php
                            }
                            else
                            {
                             ?>
                             <img class="img-fluid img_frame1" alt="img" src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->profileimg; ?>">
                            <?php
                            }
                            ?>
                          </div>
                            <p><?php echo $val1->fname; ?> <?php echo $val1->lname; ?></p>
                            <span><?php echo $year; ?>-<?php echo $year1; ?></span>
                        </div>
                      </div>
                      </a>
                          <?php
                            }
                        ?>
                  </div>
                </div>
                <div class="counte_Class">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="projectFacts" class="sectionClass">
                                <div class="fullWidth eight columns">
                                    <div class="projectFactsWrap ">
                                        <div class="item wow fadeInUpBig animated animated" data-number="12" style="visibility: visible;">
                                            <p id="number1" class="number number_class"></p>
                                            <p>Our Visitors</p>
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
                <div class="footer_class">
                    <div class="row">
                        <div class="col-md-2  md-3-width pad_right0">
                            <a href=""><img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri();?>/img/foot_logo.png"></a>
                        </div>
                        <div class="col-md-7">
                            <ul class="list-inline foot_link">
                             <?php
                                 $menuLocations = get_nav_menu_locations(); 
                                 $menuID = $menuLocations['my-custom-menu']; 
                                 $primaryNav = wp_get_nav_menu_items($menuID);
                                 foreach ( $primaryNav as $navItem ) {
                                     echo '<li class="list-inline-item"><a href="'.$navItem->url.'">'.$navItem->title.'</a></li>';
                                 }  
                             ?>
                            </ul>
                        </div>
                        <div class="col-md-3 pad_left0">
                            <div class="prehead_left">
                                <ul class="list-inline pull-right">
                                   <li class="list-inline-item"><?php echo do_shortcode('[Sassy_Social_Share style="background-color:#000;"]') ?></li>
                                   <li class="list-inline-item"><a href="">Share this page</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; endif; ?>
                  
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline copyright_link">
                    <?php
                     $menuLocations = get_nav_menu_locations(); 
                     $menuID = $menuLocations['my-custom-menu2']; 
                     $primaryNav = wp_get_nav_menu_items($menuID);
                     foreach ( $primaryNav as $navItem ) {
                         echo '<li class="list-inline-item"><a href="'.$navItem->url.'">'.$navItem->title.'</a></li>';
                     }  
                    ?>
                    
                </ul>
            </div>
        </div>
    </div>
</footer>
  




<!-- javascript libraries -->
<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/owl.carousel.min.js"></script>  
<script type="text/javascript">
  $('.navbar-nav li').addClass('nav-item');
  $('.navbar-nav li a').addClass('nav-link');



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


$('#number1').jQuerySimpleCounter({end:  <?php echo vcp_get_visit_count('T') ?>,duration: 3000});
$('#number2').jQuerySimpleCounter({end:  <?php
                $msg2 = $wpdb->get_results("SELECT count(*) as countred FROM `wp_tribute`");
                 foreach($msg2 as $val2)
                                {
                                ?><?php echo $val2->countred; ?><?php } ?>,duration: 3000});
$('#number3').jQuerySimpleCounter({end: <?php
                $msg3 = $wpdb->get_results("SELECT count(*) as countred1 FROM `wp_trubutenote` where `Approval` = 1");
                 foreach($msg3 as $val3)
                                {
                                ?><?php echo $val3->countred1; ?><?php } ?>,duration: 2000});
$('#number4').jQuerySimpleCounter({end: <?php
                $msg4 = $wpdb->get_results("SELECT count(*) as countred2 FROM `wp_photo`");
                 foreach($msg4 as $val4)
                                {
                                ?><?php echo $val4->countred2; ?><?php } ?>,duration: 2500});



    /* AUTHOR LINK */
     $('.about-me-img').hover(function(){
            $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
        }, function(){
            $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
        });
        
        
</script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        autoplay:true,
        loop:true,
        margin:30,
        nav:true,
        items: 5,
        smartSpeed: 750,
        navText: ['<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/left.png">', '<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/right.png">'],
        responsive : {
            0 : {
                items: 2
            },
            480 : {
                items: 2
            },
            767 : {
                items: 5
            },
            1200 : {
                items: 5
            }
        }

    });
</script>

<?php wp_footer(); ?>

</body>
</html>
