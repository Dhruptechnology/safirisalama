<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package safiri_salama
 */

?>
<?php
if(!(get_page_uri()=='home'))
{
?>
<section class="footer_bg">
  <div class="container">
    <div class="footer_class">
      <div class="row">
        <div class="col-md-2  pad_right0">
            <a href="<?php echo get_site_url();?>"><img class="img-fluid" alt="img" src="<?php echo get_option("theme_photo_about2");?>"></a>
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
                  <li class="list-inline-item">Share this page</li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
}
?>

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
$('#number4').jQuerySimpleCounter({end:  <?php
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

<?php wp_footer(); ?>

</body>
</html>
