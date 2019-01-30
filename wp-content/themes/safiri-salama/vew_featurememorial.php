<?php
/**
 * Template Name: viewfeaturememories
 **/
get_header();
?>

<section class="package_sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Featured Memorials</h1>
            </div>
        </div>
    </div>
</section>


<section class="search_main search_main_sec memorial_new_Sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="radio_class">
                   
                </div>
                <div class="search_block-new search_block-new1">
                 <p class="presentmemorial">Present Featured Memorials</p>
                    <div class="row results" id="myList">
                   
                        
                                 <?php
							    $args_slider = array( 'post_type' => 'post', 'posts_per_page' => 4, 'order' => 'DESC');
							    $loop_slider = new WP_Query( $args_slider );
							    while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
							    $id= get_the_ID();
							?>
                        <div class="col-lg-3 col-md-4 pad_8 lis">
                            <div class="mem_box">
                                <div class="media">
                                     <?php
                                    $profile= wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));
                                    if(empty($profile))
                                    {
                                    ?>
                                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-user.png" alt="img" class="mr-3">
                                    <?php
                                    }
                                    else
                                    {
                                   ?>
                                  <img src="<?php echo $profile; ?>" alt="img" class="mr-3">
                                  <?php
                                    }
                                    ?>
                                   
                                 
                                  <div class="media-body">
                                    <h4><?php echo the_title(); ?></h4>
                                    <p><?php echo get_field('birth_and_death_year',$id); ?></p>
                                  </div>
                                </div>
                                 <a href="<?php echo get_site_url(); ?>/new-featured/?id=<?php echo $id;  ?>" class="memorial_link">view memorial</a>
                                <!--<a href="#" class="memorial_link">View Memorial</a>-->
                            </div>
                        </div>
                      
				        <?php endwhile; ?>
                        
                    </div>
                </div>
				
				
				 <div class="search_block-new search_block-new1">
                 <p class="presentmemorial">Past Featured Memorials</p>
                    <div class="row results">
                   <div class="col-lg-3 col-md-4 pad_8 lis">
                            <div class="mem_box">
                                <div class="media">
                                    
                                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-user.png" alt="img" class="mr-3">
                                   
                                 <div class="media-body">
                                    <h4>Nelson Mandala</h4>
                                    <p>1993-1984</p>
                                  </div>
                                </div>
                                 <a href="<?php echo the_permalink();?>" class="memorial_link1">view memorial</a>
                                <!--<a href="#" class="memorial_link">View Memorial</a>-->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 pad_8 lis">
                            <div class="mem_box">
                                <div class="media">
                                    
                                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-user.png" alt="img" class="mr-3">
                                   
                                 <div class="media-body">
                                    <h4>Nelson Mandala</h4>
                                    <p>1993-1984</p>
                                  </div>
                                </div>
                                 <a href="<?php echo get_site_url(); ?>" class="memorial_link1">view memorial</a>
                                <!--<a href="#" class="memorial_link">View Memorial</a>-->
                            </div>
                        </div>
						  <div class="col-lg-3 col-md-4 pad_8 lis">
                            <div class="mem_box">
                                <div class="media">
                                    
                                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-user.png" alt="img" class="mr-3">
                                   
                                 <div class="media-body">
                                    <h4>Nelson Mandala</h4>
                                    <p>1993-1984</p>
                                  </div>
                                </div>
                                 <a href="<?php echo the_permalink();?>" class="memorial_link1">view memorial</a>
                                <!--<a href="#" class="memorial_link">View Memorial</a>-->
                            </div>
                        </div>
						  <div class="col-lg-3 col-md-4 pad_8 lis">
                            <div class="mem_box">
                                <div class="media">
                                    
                                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-user.png" alt="img" class="mr-3">
                                   
                                 <div class="media-body">
                                    <h4>Nelson Mandala</h4>
                                    <p>1993-1984</p>
                                  </div>
                                </div>
                                 <a href="" class="memorial_link1">view memorial</a>
                                <!--<a href="#" class="memorial_link">View Memorial</a>-->
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="space60"></div>
               <div class="setting_btn setting_btn1" id="loadMore">Show More Memorials</div>
            </div>
        </div>
    </div>
</section>

<style>
    .img_box img {
   
    box-shadow: 0px 3px 9px 3px #ccc;
   
}
#myList .lis{ display:none;
}
.memorial_link:before {
   
    background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/Ellipse-22.png)no-repeat;
       background-size: contain !important;
}
.radio.radio-inline a {
    cursor: pointer;
}
p.presentmemorial {
    text-align: center;
    font-size: 18px;
    margin-bottom: 13px;
}
.memorial_link1 {
    background: #474747;
    color: #ffffff;
    font-size: 20px;
    font-family: 'SF-Pro-Display-Medium';
    text-align: center;
    width: 100%;
    display: block;
    position: relative;
    z-index: 999;
    padding: 0 0 20px;
    transition: .5s linear;
    line-height: 10px;
}
.memorial_link1:before {
    position: absolute;
    content: "";
     background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/Ellipse-222.png)no-repeat;
    height: 40px;
    width: 422px;
    background-size: contain;
    left: -20px;
    top: -20px;
    z-index: -9;
}
</style>
<?php
get_footer();
?>
<script>
    $(document).ready(function () {
    size_li = $("#myList .lis").length;
    x=4;
    $('#myList .lis:lt('+x+')').show();
    $('#loadMore').click(function () {
        x= (x+4 <= size_li) ? x+4 : size_li;
        $('#myList .lis:lt('+x+')').show();
    });
    $('#showLess').click(function () {
        x=(x-5<0) ? 3 : x-5;
        $('#myList .lis').not(':lt('+x+')').hide();
    });
});
</script>
<script type="text/javascript">
  
function visitor(id,visitor){
      
      jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/updatevisitor.php'; ?>",
        data:{'id': id,'visitor': visitor},
        success: function(data)
        {
           
        }
        });
  }
 </script>
 <script>

$('.selection').change(function(){
    var value = $( this ).val();
     jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/searchviewpage.php'; ?>",
        data:{'value': value},
        success: function(data)
        {
          
           jQuery(".results").html('');
          jQuery(".results").html(data);
        }
        }); 
});
 </script>
 <script>
 function asc(checkdata,order)
 {
   
   jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/searchviewmemory.php'; ?>",
        data:{'checkdata': checkdata,'order': order},
        success: function(data)
        {
           
           jQuery(".results").html('');
          jQuery(".results").html(data);
        }
        });   
 }
 </script>