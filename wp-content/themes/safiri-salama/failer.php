<?php
/**
 * Template Name: failer
 **/
global $session;
session_start();
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package safiri_salama
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="refresh" content="3;url=<?php echo get_site_url(); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php
   if ( is_404() ) {
    ?>
   
    <title>Tribute - safiri-salama</title>
    <?php
    }
    else
    {
    ?>
    <title><?php echo wp_title();?></title>
    <?php
    }
    ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">   
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <!-- css for slider -->
    

     <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
        <![endif]-->
        <!--[if IE]>
            <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<section class="prehead d-none d-md-block">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="prehead_left">
                    <ul class="list-inline">
                      <?php echo do_shortcode('[Sassy_Social_Share style="background-color:#000;"]') ?>
                      <li class="list-inline-item"><a href="<?php echo get_option("theme_social_link_share");?>">Share this page</a></li>
                    </ul>
                    <p><a href="tel:<?php echo get_option("theme_phone_number");?>"><i class="fa fa-phone" aria-hidden="true"></i>CALL US  <?php echo get_option("theme_phone_number");?></a></p>
                </div>
                
            </div>
            <div class="col-md-4">
                <a href="<?php echo get_site_url();?>"><img class="img-fluid" alt="img" src="<?php echo get_option("theme_photo_about");?>"></a>
            </div>
            <div class="col-md-4">
                <div class="prehead_right pull-right">
                    <p><?php // echo get_option("theme_description");?><br>
                    <?php// echo get_option("theme_intro");?></p>
                    <ul class="list-inline pull-right">
                        <?php
                        if(($_SESSION['id']!=''))
                        {
                            $fname = $_SESSION['fname'];
                             $websit = $_SESSION["webaddress"];
                        ?>
                        <li class="list-inline-item"><a href="<?php echo $websit; ?>"><?php echo $fname ?></a></li>
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/admin">admin</li>
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/logout">SIGN OUT</a></li>
                        <?php
                        }
                        else if(($_SESSION['email_id']!=''))
                        {
                            $em=$_SESSION['email_id'];
                            $pro1 = $wpdb->get_results("SELECT * FROM `wp_tributeuser` where email_id = '$em'");
                            $fname1=($pro1[0]->fname!='')?$pro1[0]->fname:"";
                        ?>
                        
                        <li class="list-inline-item"><a href="<?php echo $websit; ?>"><?php echo $fname1 ?></a></li>
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/logout">SIGN OUT</a></li>
                         <?php
                        }
                        else
                        {
                        ?>
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/login">LOG IN</a></li>
                        <?php
                        }
                        ?>
                        
                    
                      <!--  <li class="list-inline-item"><a href="">SIGN UP</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="prehead d-block d-md-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="<?php echo get_site_url();?>"><img class="img-fluid" alt="img" src="<?php echo get_option("theme_photo_about");?>"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="prehead_left">
                    <ul class="list-inline">
                      <?php echo do_shortcode('[Sassy_Social_Share style="background-color:#000;"]') ?>
                      <li class="list-inline-item"><a href="<?php echo get_option("theme_social_link_share");?>">Share this page</a></li>
                    </ul>
                    <p><a href="tel:<?php echo get_option("theme_phone_number");?>"><i class="fa fa-phone" aria-hidden="true"></i>CALL US  <?php echo get_option("theme_phone_number");?></a></p>
                </div>
            </div>
            <div class="col-6">
                <div class="prehead_right pull-right">
                    <p><?php// echo get_option("theme_description");?><br>
                    <?php //echo get_option("theme_intro");?></p>
                    <ul class="list-inline pull-right">
                      <?php
                        if(($_SESSION['id']!=''))
                        {
                            $fname = $_SESSION['accountname'];
                        ?>
                        <li class="list-inline-item"><a href=""><?php echo $fname ?></a></li>
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/logout">SIGN OUT</a></li>
                        <?php
                        }
                        else
                        {
                        ?>
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>/login">LOG IN</a></li>
                        <?php
                        }
                        ?>
                      <!--  <li class="list-inline-item"><a href="">SIGN UP</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<nav class="navbar navbar-expand-md navbar-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fa fa-bars" aria-hidden="true"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
            wp_nav_menu( array(
    	        'theme_location' => 'menu-1',
    	        'container_class'=>'nav',
    	        'container_id'   =>'nav',
    	        'menu_class'     => 'navbar-nav mr-auto',
    	        'menu_id'        => 'g1'
    	      ));
         ?>
        
      </div>
    </div>
</nav>
<section class="package_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="media">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/checkmark.png" alt="img" class="">
                    <div class="media-body">
                      <h1>Payment Failed</h1>
                      <p>Your payment Payment Failed.</p>      
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>

<section class="redirect_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Redirecting you to the home page in 3 seconds...</p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>