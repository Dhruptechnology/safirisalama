<?php
/**
 * Template Name: viewmemories
 **/
get_header();
session_start();
?>

<section class="package_sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Memorials</h1>
            </div>
        </div>
    </div>
</section>


<section class="search_main search_main_sec memorial_new_Sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="radio_class">
                    <p>Sort by</p>
                    <div class="radio radio-inline">
                        <input type="radio" id="inlineRadio1" value="dob" name="radioInline" class="selection" checked="">
                        <label for="inlineRadio1"> Date of Death </label>
                        <a onclick="asc('dob','asc')"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                        <a onclick="asc('dob','desc')"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                    <div class="radio radio-inline">
                        <input type="radio" id="inlineRadio2" value="gender" name="radioInline" class="selection">
                        <label for="inlineRadio2"> Gender </label>
                        <a onclick="asc('gender','m')">M</a>
                        <a onclick="asc('gender','f')">F</a>
                    </div>
                    <div class="radio radio-inline">
                        <input type="radio" id="inlineRadio3" value="fname" name="radioInline" class="selection">
                        <label for="inlineRadio3"> First Name </label>
                        <a onclick="asc('fname','asc')"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                        <a onclick="asc('fname','desc')"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                    <div class="radio radio-inline">
                        <input type="radio" id="inlineRadio4" value="lname" name="radioInline" class="selection">
                        <label for="inlineRadio4"> Second Name </label>
                        <a onclick="asc('lname','asc')"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                        <a onclick="asc('lname','desc')"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="search_block-new search_block-new1">
                    <div class="row results" id="myList">
                          <?php
                         $msg1 = $wpdb->get_results("SELECT * FROM `wp_tribute` where privacy ='public' order by `fullbirthdate` DESC");
     
                            foreach($msg1 as $val1)
                            {
                                $fullbirthdate= $val1->fullbirthdate;
                                 $orderdate = explode('/', $fullbirthdate);
                                   $year  = $orderdate[2];
                                    $fulldeathdate= $val1->fulldeathdate;
                                     $orderdate1 = explode('/', $fulldeathdate);
                                    $year1  = $orderdate1[2];
                                  
                                    $date=date_create($val1->created_by);
                                    $form= date_format($date,"d.m.y");
                             $themeid=$val1->themeid;
                               
                               
                                ?>
                        <div class="col-lg-3 col-md-4 pad_8 lis">
                            <div class="mem_box">
                                <div class="media">
                                     <?php
                                    $profile= $val1->profileimg;
                                    if(empty($profile))
                                    {
                                    ?>
                                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-user.png" alt="img" class="mr-3">
                                    <?php
                                    }
                                    else
                                    {
                                   ?>
                                  <img src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $val1->profileimg; ?>" alt="img" class="mr-3">
                                  <?php
                                    }
                                    ?>
                                  <div class="media-body">
                                    <h4><?php echo $val1->fname; ?> <?php echo  $val1->lname; ?></h4>
                                    <p><?php echo $year ; ?>-<?php echo $year1 ; ?></p>
                                  </div>
                                </div>
                                 <a href="<?php echo  $val1->webaddress;  ?>/?id=<?php echo  $val1->id;  ?>" class="memorial_link" onclick="visitor(<?php echo  $val1->id;  ?>,<?php echo  $val1->visitcount;  ?>)">view memorial</a>
                                <!--<a href="#" class="memorial_link">View Memorial</a>-->
                            </div>
                        </div>
                       <?php
                            }
                            ?>
                        
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