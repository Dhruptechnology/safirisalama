<?php
/**
 * Template Name: admin setting
 **/
get_header();
    $id=($_SESSION['id']!='')?$_SESSION['id']:"";

 $pro = $wpdb->get_results("SELECT * FROM `wp_tribute` where id = '$id'");
$fname=($pro[0]->fname!='')?$pro[0]->fname:"";
$lname=($pro[0]->lname!='')?$pro[0]->lname:"";
$middname=($pro[0]->middname!='')?$pro[0]->middname:"";
$nickname=($pro[0]->nickname!='')?$pro[0]->nickname:""; 
$birthdate=($pro[0]->fullbirthdate!='')?$pro[0]->fullbirthdate:"";  
$deathdate=($pro[0]->fulldeathdate!='')?$pro[0]->fulldeathdate:""; 
$webaddress=($pro[0]->webaddress!='')?$pro[0]->webaddress:""; 
$web= substr($webaddress, strrpos($webaddress, '/') + 1);
$profileimg=($pro[0]->profileimg!='')?$pro[0]->profileimg:""; 
$relationname=($pro[0]->relationname!='')?$pro[0]->relationname:"";
$rphone=($pro[0]->rphone!='')?$pro[0]->rphone:"";
$rfname=($pro[0]->rfname!='')?$pro[0]->rfname:"";
$rsurname=($pro[0]->rsurname!='')?$pro[0]->rsurname:"";
$radd=($pro[0]->radd!='')?$pro[0]->radd:"";
$remailadd=($pro[0]->remailadd!='')?$pro[0]->remailadd:"";
$florida=($pro[0]->florida!='')?$pro[0]->florida:"";


$query1 = $wpdb->get_results("SELECT * from wp_tribute where id= $id");

$thm=($query1[0]->themeid!='')?$query1[0]->themeid:"";

if(isset($_REQUEST['datasubmit']))
{
   $fname=isset($_POST['fname'])?$_POST['fname']:'';
  $lname=isset($_POST['lname'])?$_POST['lname']:'';
  $mname=isset($_POST['mname'])?$_POST['mname']:'';
  $nname=isset($_POST['nname'])?$_POST['nname']:'';
  $gender=isset($_POST['radioInline8'])?$_POST['radioInline8']:'';
  $deathdate=isset($_POST['deathdate'])?$_POST['deathdate']:'';
  $birthdate=isset($_POST['birthdate'])?$_POST['birthdate']:'';
  $webaddress=isset($_POST['webaddress'])?$_POST['webaddress']:'';
  $webex=isset($_POST['webex'])?$_POST['webex']:'';
  
  $fullweb=$webex.$webaddress;
  $relationname=isset($_POST['relationname'])?$_POST['relationname']:'';
  $rphone=isset($_POST['rphone'])?$_POST['rphone']:'';
  $rfname=isset($_POST['rfname'])?$_POST['rfname']:'';
  $rsurname=isset($_POST['rsurname'])?$_POST['rsurname']:'';
  $radd=isset($_POST['radd'])?$_POST['radd']:'';
  $remailadd=isset($_POST['remailadd'])?$_POST['remailadd']:'';
  $florida=isset($_POST['florida'])?$_POST['florida']:'';
 
  if(!empty($_FILES['proimg']['name']))
  {
      $wp_upload_dir = wp_upload_dir();
     $uploadd= $wp_upload_dir['basedir'];
    $image1=$_FILES['proimg']['name'];
     move_uploaded_file( $_FILES['proimg']['tmp_name'],$uploadd.'/'.$_FILES['proimg']['name']);
  }
  else if($_POST['old_pic']!='')
{
  $image1=$_POST['old_pic'];
}

$wpdb->query("UPDATE wp_tribute  SET fname = '$fname',lname='$lname',middname='$mname',nickname='$nname',fulldeathdate='$deathdate',fullbirthdate='$birthdate',webaddress='$fullweb',relationname='$relationname',rphone='$rphone',rfname='$rfname',rsurname='$rsurname',radd='$radd',remailadd='$remailadd',florida='$florida',profileimg='$image1' WHERE id='$id'");

?>
<script type="text/javascript">
window.location.href='<?php echo get_site_url(); ?>/admin';
</script>
<?php
}
$id2 = $_GET['id'];
?>

<?php
if(isset($_REQUEST['changetemp']))
{
$themeid=isset($_POST['themeid'])?$_POST['themeid']:'';
$wpdb->query("UPDATE wp_tribute SET themeid = '$themeid' WHERE id='$id'");

      /*echo $wpdb->last_query;*/
       ?>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
swal("Done!", "Template Changed successful", "success");
window.location.href='<?php echo get_site_url(); ?>/admin';
</script>
<?php
}
?>
<?php
if(isset($_REQUEST['changeback']))
{
    $song=isset($_POST['songna'])?$_POST['songna']:'';

$wpdb->query("UPDATE wp_tribute SET songname = '$song' WHERE id='$id'");
     /*  echo $wpdb->last_query;*/
       ?>
<script type="text/javascript">
window.location.href='<?php echo get_site_url(); ?>/admin';
</script>
<?php
}

if($id2 == 2)
{
?>
<section class="create_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    
                  <div class="tab-content">
                      <form class="form-horizontal" action="" id="contact_form" method="post" enctype="multipart/form-data">
                   
                         <div class="row">
                            <div class="col-md-5">
                                <h4>Choose a template:</h4>
                                
                                    <div class="temp_block">
                                    <?php
                                      $args_slider = array( 'post_type' => 'templates', 'posts_per_page' => -1, 'order' => 'DESC');
                                      $loop_slider = new WP_Query( $args_slider );
                                      while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                                      $id1= get_the_ID();
                                    ?>
                                  <div class="temp_box">
                                      <div class="media">
                                          <img class="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));  ?>" alt="img" style="height:177px">
                                          <div class="media-body">
                                            <h5><?php echo the_title(); ?></h5>
                                            <h6><?php echo get_field('template_sub_title'); ?></h6>
                                            <a class="red_btn preview_btn recid" href="<?php echo $id1; ?>">preview</a>
                                            <a class="red_btn select_btn recid" href="<?php echo $id1; ?>">select</a>
                                          </div>
                                        </div>
                                  </div>
                              <?php endwhile; ?>
                              </div>
                               
                            </div>
                            
                                <div class="col-md-7 pad_left40">
                              <h4>Your existing template:</h4>
                                <?php
                                /*$postid = $thm;*/
                                
                                $postid4 = 238;
                                $post4 = get_post( $postid4 );
                                
                                if($thm == $postid4)
                                {
                                    $back=wp_get_attachment_url( get_post_thumbnail_id( $post4));
                                ?>
                                
                                
                                <?php
                                }
                                
                                ?>
                                <?php
                                $postid3 = 242;
                                $post3 = get_post( $postid3 );
                                if($thm == $postid3)
                                {
                                    $back=wp_get_attachment_url( get_post_thumbnail_id( $post3));
                                  
                                ?>
                                
                                <?php
                                }
                                
                                ?>
                                <?php
                                $postid2 = 240;
                                $post2 = get_post( $postid2 );
                                if($thm == $postid2)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post2));
                                ?>
                                
                                <?php
                                }
                                
                                ?>
                                <?php
                                $postid1 = 236;
                                $post1 = get_post( $postid1 );
                                
                                if($thm == $postid1)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post1));
                                ?>
                                <?php
                                }
                                
                                ?>
                                <?php
                                $postid = 230;
                                $post = get_post( $postid );
                                
                                if($thm == $postid)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
                                ?>
                                <?php
                                }
                                ?>
                                 <?php
                                $postid = 443;
                                $post = get_post( $postid );
                                
                                if($thm == $postid)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
                                ?>
                                <?php
                                }
                                ?>
                                <?php
                                $postid = 449;
                                $post = get_post( $postid );
                                
                                if($thm == $postid)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
                                ?>
                                <?php
                                }
                                ?>
                                 <?php
                                $postid = 457;
                                $post = get_post( $postid );
                                
                                if($thm == $postid)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
                                ?>
                                <?php
                                }
                                ?>
                                 <?php
                                $postid = 457;
                                $post = get_post( $postid );
                                
                                if($thm == $postid)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
                                ?>
                                <?php
                                }
                                ?>
                                 <?php
                                $postid = 461;
                                $post = get_post( $postid );
                                
                                if($thm == $postid)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
                                ?>
                                <?php
                                }
                                ?>
                                 <?php
                                $postid = 466;
                                $post = get_post( $postid );
                                
                                if($thm == $postid)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
                                ?>
                                <?php
                                }
                                ?>
                                 <?php
                                $postid = 470;
                                $post = get_post( $postid );
                                
                                if($thm == $postid)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
                                ?>
                                <?php
                                }
                                ?>
                                 <?php
                                $postid = 474;
                                $post = get_post( $postid );
                                
                                if($thm == $postid)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
                                ?>
                                <?php
                                }
                                ?>
                                 <?php
                                $postid = 480;
                                $post = get_post( $postid );
                                
                                if($thm == $postid)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
                                ?>
                                <?php
                                }
                                ?>
                                <?php
                                $postid = 484;
                                $post = get_post( $postid );
                                
                                if($thm == $postid)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
                                ?>
                                <?php
                                }
                                ?>
                                <?php
                                $postid = 488;
                                $post = get_post( $postid );
                                
                                if($thm == $postid)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
                                ?>
                                <?php
                                }
                                ?>
                                <?php
                                $postid = 492;
                                $post = get_post( $postid );
                                
                                if($thm == $postid)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
                                ?>
                                <?php
                                }
                                ?>
                                <?php
                                $postid = 496;
                                $post = get_post( $postid );
                                
                                if($thm == $postid)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
                                ?>
                                <?php
                                }
                                ?>
                                <?php
                                $postid = 501;
                                $post = get_post( $postid );
                                
                                if($thm == $postid)
                                {
                                     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
                                ?>
                                <?php
                                }
                                ?>
                              <div id="test">
                              <img class="img-fluid feature_img" alt="img" src="<?php echo $back; ?>">
                              </div>
                             
                              
                            </div>
                        </div>
                        <div class="space10"></div>
                        <div class="themeidint"></div>
                        <!--<a href="#" class="red_btn prev_btn prevtab"><i class="fa fa-angle-left" aria-hidden="true"></i>PREVIOUS</a>-->
                         <div class="space10"></div>
                        <button type="submit" name="changetemp" class="red_btn sub">Submit</button>
                         <a href="<?php echo get_site_url(); ?>/admin" class="red_btn back">Back</a>
                        <!--<a href="#" class="red_btn next_btn nexttab">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
                         
                         </form>
                         <style>
                             button.red_btn {
                                margin-left: auto;
                                margin-right: auto;
                            }
                         </style>
                         
                         
                   <?php
                      }
                   ?>
                  
                    <?php
                    if($id2 == 1)
                        {
                        
                            ?>
                          <section class="create_main">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                  <form class="form-horizontal" action="" id="contact_form" method="post" enctype="multipart/form-data">
                                <div class="space20"></div>
                                <h4>Select Background Song:</h4>
                                <select class="form-control" id="selection" name="songna">
                                <?php
                                if( have_rows('background_song',160) ):
                                while ( have_rows('background_song',160) ) : the_row();
                                $song=get_sub_field('background_song',160);
                                $songname=get_sub_field('song_name',160);
                                
                                     ?>
                                  <option value="<?php echo $song['url']; ?>"><?php echo $songname; ?></option>
                                 
                                    <?php
                                    endwhile;
                                    endif;
                                    ?>
                                </select>
                                <audio id="player" controls="controls" autoplay>
                                  <source id="mp3_src" src="/teachings/2011_01_09_Cut.mp3" type="audio/mp3" />
                                </audio>
                               <div class="space10"></div>
                                <button type="submit" name="changeback" class="red_btn sub">Submit</button>
                                <a href="<?php echo get_site_url(); ?>/admin" class="red_btn back">Back</a>
                                </form>
                                 </div>
                                 </div>
                                 </div>
                                 </section>
                                 <?php
                                  
                                   }
                                    ?>
                                 <?php
                    if($id2 == 3)
                        {
                            ?>
                            <section class="create_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <form class="form-horizontal" action="" id="contact_form" method="post" enctype="multipart/form-data">
                    <div class="tab-pane create_main-tab" id="menu1">
                      <h4>This memorial is dedicated to:</h4>
                       <div class="row">
                           <div class="col-md-6">
                             <input type="text" class="form-control" placeholder="First Name" value="<?php echo $fname ?>" name="fname">
                         </div>
                         <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last Name" value="<?php echo $lname ?>" name="lname">
                           </div>
                       </div> 
                       <div class="row">
                           <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Middle Name" value="<?php echo $middname ?>"  name="mname">
                           </div>
                           <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Nick Name" value="<?php echo $nickname ?>"  name="nname">
                           </div>
                       </div> 
                       <div class="row">
                           <div class="col-md-4">
                               <div class="row">
                                   <div class="col-md-3 pad_right0">
                                       <p>Gender</p>
                                   </div>
                                   <div class="col-md-9 pad_right0">
                                      <div class="radio_class radio_class-tab">
                                          <div class="radio radio-inline">
                                              <input type="radio" id="Radio8" value="Male" name="radioInline8" checked="checked">
                                              <label for="Radio8"> Male </label>
                                          </div>
                                          <div class="radio radio-inline">
                                              <input type="radio" id="Radio9" value="Female" name="radioInline8">
                                              <label for="Radio9"> Female </label>
                                          </div>
                                      </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="row">
                                   <div class="col-md-7 pad_right0">
                                       <p>Date of Death (Date/Month/Year)</p>
                                   </div>
                                   <div class="col-md-5">
                                        <input type="text" class="form-control" id="funaldate" placeholder="Date" name="deathdate" value="<?php  echo $birthdate; ?>">
                                      <!-- <div id="datepicker" class="input-group date" data-date-format="dd/mm/yyyy">
                                          <input class="form-control date_form" type="text" name="deathdate"/>
                                          <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                       </div> -->
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                              <div class="row">
                                   <div class="col-md-7 pad_right0">
                                       <p>Date of Birth (Date/Month/Year)</p>
                                   </div>
                                   <div class="col-md-5">
                                     <input type="text" class="form-control" id="burialdate" placeholder="Date" name="birthdate" value="<?php echo $deathdate; ?>">
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-3">
                               <p>Choose Memorial web address</p>
                           </div>
                           <div class="col-md-3">
                               <p class="weburl"><?php echo get_site_url(); ?>/</p>
                                 <input type="hidden" class="form-control" value="<?php echo get_site_url(); ?>/" name="webex">
                           </div>
                            <div class="col-md-2">
                               <input type="text" class="form-control" value="<?php echo $web ?>" name="webaddress" id="weaddress">
                               <p class="imgmsg5" style="display:none;">This field is required</p>
                           </div>
                           <div class="col-md-2">
                               <input type="file" accept="image/*" name="proimg" id="videoUploadFile" onchange="preview_image1(event)">
                                 <input type="hidden" name="old_pic" value="<?php echo $profileimg;?>">
                                 
                               </div>
                               <div class="col-md-2">
                            <?php
                            if(!empty($profileimg))
                            {
                            ?>
                            <img class="img-fluid" alt="img" src="<?php echo get_site_url(); ?>/wp-content/uploads/<?php echo $profileimg;  ?>" id="profilepre">
                            <?php
                            }
                            ?>
                            </div>
                       </div>
                       <h4>This memorial is Managed by:</h4>
                       <div class="row">
                           <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-5 pad_right0">
                                  <p>Reletionship to Administrator</p>
                                </div>
                                <div class="col-md-7 pad_left0">
                                   <select class="form-control" id="sel1" name="relationname">
                                       <option value="<?php echo $relationname; ?>" selected><?php echo $relationname; ?></option> 
                                        <?php
                                if( have_rows('reletionship_to_administrator',160) ):
                                while ( have_rows('reletionship_to_administrator',160) ) : the_row();
                                 $relationname=get_sub_field('relation_name',160);
                                     ?>
                                      <option value="<?php echo $relationname; ?>"><?php echo $relationname; ?></option>
                                      
                                       <?php
                                    endwhile;
                                    endif;
                                    ?>
                                    </select>
                                </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Phone Number" value="<?php echo $rphone ?>" name="rphone">
                            
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-4">
                              <input type="text" class="form-control" placeholder="First Name" name="rfname" value="<?php echo $rfname ?>">
                           </div>
                           <div class="col-md-4">
                              <input type="text" class="form-control" placeholder="Surname" name="rsurname" value="<?php echo $rsurname ?>">
                           </div>
                           <div class="col-md-4">
                              <input type="text" class="form-control" placeholder="Your Address" name="radd" value="<?php echo $radd ?>">
                           </div>
                       </div> 
                       <div class="row">
                           <div class="col-md-6">
                              <input type="Email" class="form-control" placeholder="Email Address" name="remailadd" value="<?php echo $remailadd; ?>">
                           </div>
                           <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-5 pad_right0">
                                  <p>Alternative Phone Number</p>
                                </div>
                                <div class="col-md-7 pad_left0">
                                     <input type="text" class="form-control" placeholder="Your Address" name="florida" value="<?php echo $florida; ?>">
                                  
                                </div>
                              </div>
                           </div>
                       </div>
                       <div class="space10"></div>
                       <!-- <a href="#" class="red_btn prev_btn prevtab"><i class="fa fa-angle-left" aria-hidden="true"></i>PREVIOUS</a>-->
                        <input type="submit" class="red_btn next_btn nexttab sub" name="datasubmit" value="Submit">
                         <a href="<?php echo get_site_url(); ?>/admin" class="red_btn back">Back</a>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </section>
<style>
    p.weburl {
    font-size: 15px;
}
</style>                    
                    
                    
                    <?php
                        }
                        ?>
                    
                 
                    
                  </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
        $(function () {
          $("#datepicker").datepicker({ 
                autoclose: true, 
                todayHighlight: true
          }).datepicker('update', new Date());
        });
        $(function () {
          $("#datepicker1").datepicker({ 
                autoclose: true, 
                todayHighlight: true
          }).datepicker('update', new Date());
        });
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script type="text/javascript">
  
jQuery('.recid').on('click', function (e) {
       e.preventDefault();
      var rec =  jQuery(this).attr('href');
      jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/templateprv.php'; ?>",
        data:{'rec': rec},
        success: function(data)
        {
           /* alert(data);*/
          jQuery("#test").html('');
          jQuery("#test").html(data);
           
          jQuery("#testlast").html(data);
         /* console.log(data);*/
        }
        });
  });
 </script>
<script type="text/javascript">
  jQuery('.select_btn').on('click', function (e1) {
    swal("Template Selected");
      e1.preventDefault();
      var idthm =  jQuery(this).attr('href');
        jQuery(".themeidint").html('');
       $('.themeidint').html('<input type="hidden" name="themeid" value="' +  idthm + '">');   
 swal(" ", "Template is selected", "success");
  }); 
  
  

</script>
<script>
    $(document).ready(function() {

  $('#selection').on('change', function() {
    change($(this).val());
  });

});


function change(sourceUrl) {
  var audio = document.getElementById("player");
  var source = document.getElementById("mp3_src");

  audio.pause();

  if (sourceUrl) {
    source.src = sourceUrl;
    audio.load();
    audio.play();
  }
}
</script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#funaldate" ).datepicker({
         dateFormat: 'd/m/yy'});
     $( "#furmdate" ).datepicker({
         dateFormat: 'd/m/yy'});
     $( "#burialdate" ).datepicker({
         dateFormat: 'd/m/yy'});
     
    
  } );
  
  </script>
  <script type='text/javascript'>
function preview_image1(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('profilepre');
  output.src = reader.result;
  }

 reader.readAsDataURL(event.target.files[0]);
}
</script>