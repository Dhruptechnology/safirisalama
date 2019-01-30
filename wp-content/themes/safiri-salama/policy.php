<?php
/*
Template Name: policy
*/
get_header();
?>


<section class="testi_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p><?php echo the_title(); ?> </p>
               <!-- <h1><?php echo get_field('short_title'); ?></h1>-->
            </div>
        </div>
    </div>
</section>
<section class="testi_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p><?php echo the_content(); ?></p>
            </div>
        </div>    
    </div>        
</section>
<style>
    section.testi_main .heateor_sss_sharing_container.heateor_sss_horizontal_sharing {
    display: none;
}
</style>
<?php
get_footer();
?>