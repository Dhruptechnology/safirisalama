<?php
/**
 * Template Name: Contact
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
if(isset($_POST['btnsub']))
{
   $test=$_POST['serlname']; 
  
}
?>
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    $map = get_field('map',$id);
?>
<style>
    textarea#comment {
        padding: 7px;
    }
</style>

<section class="contact_head">
    <div class="container">
        <div class="row">
            <?php
                if ( have_rows('data',$id) ) : while ( have_rows('data',$id) ) : the_row(); 
                $image = get_sub_field('image',$id);
                $title = get_sub_field('title',$id);
                $text = get_sub_field('text',$id);
            ?>
            
            <div class="col-lg-3 col-md-6">
                <div class="contact_box">
                    <div class="media">
                    <div class="img_class">
                      <img src="<?php echo $image['url'];?>" alt="img">
                    </div>
                      <div class="media-body">
                        <h4><?php echo $title;?></h4>
                        <div><?php echo $text;?></div>
                      </div>
                    </div>
                </div>
            </div>
            
            <?php endwhile; endif; ?>
           
        </div>
        
    </div>
</section>
<section class="contact_space">
    <div class="container">
        <div class="search_box">
            <div class="row">
                <div class="col-md-12">
                   
                        <div class="radio_class">
                            <?php
                            if($test != "")
                            {
                            ?> 
                            <div class="radio radio-inline radio-inline1">
                    <input type="radio" id="inlineRadio1" value="1" name="drop" >
                              <label for="inlineRadio1"> DROP US A LINE </label>
                       </div>
                      <div class="radio radio-inline">
                          
                              <input type="radio" id="inlineRadio2" value="2" name="drop" checked="">
                          <label for="inlineRadio2"> Leave a testimonial </label>
                          </div>
                            <?php
                            }
                            else
                            {
                            ?>
                            <div class="radio radio-inline radio-inline1">
                    <input type="radio" id="inlineRadio1" value="1" name="drop" checked="">
                              <label for="inlineRadio1"> DROP US A LINE </label>
                       </div>
                      <div class="radio radio-inline">
                          
                              <input type="radio" id="inlineRadio2" value="2" name="drop">
                          <label for="inlineRadio2"> Leave a testimonial </label>
                          </div>
                            <?php
                            }
                         ?>
                          </div>
                           <?php
                            if($test != "")
                            {
                            ?>
                         <div id="drop1" class="desc" style="display: none;">
                          <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form"]');?>
                    
                          </div>
                          <?php
                            }
                            else
                            {
                            ?>
                             <div id="drop1" class="desc">
                          <?php echo do_shortcode('[contact-form-7 id="6" title="Contact form"]');?>
                    
                          </div>
                            <?php
                            }
                           
                            ?>
                     <?php
                            if($test != "")
                            {
                            ?>
                     <div id="drop2" class="desc" style="display: block;">
                         <?php echo do_shortcode('[contact-form-7 id="407" title="testimonial"]');?>
                     </div>
                     <?php
                            }
                            else
                            {
                            ?>
                             <div id="drop2" class="desc" style="display: none;">
                         <?php echo do_shortcode('[contact-form-7 id="407" title="testimonial"]');?>
                     </div>
                            <?php
                            }
                            ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="contact_map">
<iframe src="<?php echo $map;?>"  frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<?php endwhile; endif; ?>
<?php get_footer();?>
<script>
   $(document).ready(function() {
    $("input[name$='drop']").click(function() {
/*        alert();*/
        var test = $(this).val();

        $("div.desc").hide();
        $("#drop" + test).show();
    });
});
    
</script>