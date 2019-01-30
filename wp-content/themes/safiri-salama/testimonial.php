<?php
/*
Template Name: testimonial
*/
get_header();
?>
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    
    $banner = get_field('banner_image');
?>
<style>
    .testi_sec {
    background: url(<?php echo $banner['url']; ?>)no-repeat;
    
}
</style>
<section class="testi_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p><?php echo get_field('main_title'); ?> </p>
                <h1><?php echo get_field('short_title'); ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="testi_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <?php
                          $args_slider = array( 'post_type' => 'testimonial', 'posts_per_page' => -1, 'order' => 'DESC');
                          $loop_slider = new WP_Query( $args_slider );
                          while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                        ?>
                <div class="testi_box">
                    <div class="row">
                        <div class="col-lg-2 border_left col-md-3">
                            <ul class="list-inline">
                                <?php
                                $rating= get_field('rating');
                                if($rating == 1)
                                {
                                ?>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <?php
                                }
                                elseif($rating == 2)
                                {
                                ?>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <?php
                                }
                                elseif($rating == 3)
                                {
                                ?>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                 <?php
                                }
                                elseif($rating == 4)
                                {
                                ?>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                 <?php
                                }
                                elseif($rating == 5)
                                {
                                ?>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                            <span>5 days ago</span>
                        </div>
                        <div class="col-lg-10 col-md-9">
                            <p><?php echo the_content(); ?></p>
                            <ul class="list-inline right_testi">
                                <li class="list-inline-item"><?php echo the_title(); ?>, <?php echo get_field('town'); ?></li>
                                <li class="list-inline-item pull-right"> <?php echo do_shortcode('[Sassy_Social_Share style="background-color:#000;"]') ?>Share</li>                                
                            </ul>
                        </div>
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
                              $ratingnum = $wpdb->get_results("SELECT * FROM `wp_cf7_vdata_entry` WHERE `name` = 'number' and `data_id` = $testid");
                              $ratnum=($ratingnum[0]->value!='')?$ratingnum[0]->value:"";
                               $countrysql= $wpdb->get_results("SELECT * FROM `wp_cf7_vdata_entry` WHERE `name` = 'text-651' and `data_id` = $testid");
                              $country=($countrysql[0]->value!='')?$countrysql[0]->value:"";
                               
                      ?>
             <div class="testi_box">
                    <div class="row">
                        <div class="col-lg-2 border_left col-md-3">
                            <ul class="list-inline">
                                <?php
                                $rating= $ratnum;
                                if($rating == 1)
                                {
                                ?>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <?php
                                }
                                elseif($rating == 2)
                                {
                                ?>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <?php
                                }
                                elseif($rating == 3)
                                {
                                ?>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                 <?php
                                }
                                elseif($rating == 4)
                                {
                                ?>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                 <?php
                                }
                                elseif($rating == 5)
                                {
                                ?>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                            <span>5 days ago</span>
                        </div>
                        <div class="col-lg-10 col-md-9">
                            <?php
                            $contact =substr($con, 0, 100);
                            ?>
                            <p><?php echo $contact ?></p>
                            <ul class="list-inline right_testi">
                                <li class="list-inline-item"><?php echo $name; ?>, <?php echo $country; ?></li>
                                <li class="list-inline-item pull-right"> <?php echo do_shortcode('[Sassy_Social_Share style="background-color:#000;"]') ?>Share</li>                                
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <form method="post" action="<?php echo get_site_url(); ?>/contact/">
                <input type="hidden" class="form-control" placeholder="Last Name" name="serlname" value="testimonial">
                <input type="submit" class="btn_start" name="btnsub" type="button" value="Add Testimonial">
            </form>            
        </div>
    </div>
</section>

<?php
endwhile;
endif;
get_footer();
?>