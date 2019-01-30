<?php
/**
 * Template Name: create memory
 **/
get_header();
 if(isset($_POST['subbtn']))
{
   $fname=$_POST['fname']; 
   $lname=$_POST['lname'];
}
?>
<?php
$plan_id=$_GET['plan'];

?>
 <?php
                                
                    $current_user = wp_get_current_user();
                   
                    $loginname=$current_user->user_login;
                    $loginusername= $current_user->user_email;
                    $loginpassword= $current_user->user_pass;
                    $loginfname=$current_user->user_firstname;
                    $loginlname=$current_user->user_lastname;
                    $userdisplayname=$current_user->display_name;
                    $loginuserid=$current_user->ID;
                ?>
<?php
if(isset($_REQUEST['subbtnlastfirst']))
{
  $songname=isset($_POST['songna'])?$_POST['songna']:'';
  $themeid=isset($_POST['themeid'])?$_POST['themeid']:'';
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
  $accountname=isset($_POST['accountname'])?$_POST['accountname']:'';
  $accountlname=isset($_POST['accountlname'])?$_POST['accountlname']:'';
  $acountemail=isset($_POST['acountemail'])?$_POST['acountemail']:'';
  $accountpassword=isset($_POST['accountpassword'])?$_POST['accountpassword']:'';
  $privicy=isset($_POST['radioInline'])?$_POST['radioInline']:'';
  $firstmemorialtext=isset($_POST['firstmemorialtext'])?$_POST['firstmemorialtext']:'';
  $secondmemorialtext=isset($_POST['secondmemorialtext'])?$_POST['secondmemorialtext']:'';
  $desc=isset($_POST['desc'])?$_POST['desc']:'';
  if(!empty($_FILES['proimg']['name']))
  {
      $wp_upload_dir = wp_upload_dir();
     $uploadd= $wp_upload_dir['basedir'];
    $image1=$_FILES['proimg']['name'];
     move_uploaded_file( $_FILES['proimg']['tmp_name'],$uploadd.'/'.$_FILES['proimg']['name']);
  }
   else if(empty($_FILES['proimg']['name']))
   {
       $image1="";
   }

$insert = $wpdb->insert( 'wp_tribute',
  array('fname' => $fname,
        'lname' => $lname,
        'songname' =>$songname, 
        'themeid' => $themeid,
        'middname' =>$mname,
        'nickname' => $nname,
        'gender' => $gender,
        'fulldeathdate' =>$deathdate,
        'fullbirthdate' =>$birthdate,
        'webaddress' =>$fullweb,
        'relationname' => $relationname,
        'rphone' => $rphone,
        'rfname' => $rfname,
        'rsurname' => $rsurname,
        'radd' => $radd,
        'remailadd' =>$remailadd,
        'florida' =>$florida,
        'accountname'=>$accountname,
        'accountlname'=>$accountlname,
        'acountemail'=>$acountemail,
        'accountpassword'=>$accountpassword,
        'privacy'=>$privicy,
        'profileimg'=>$image1,
        'about_description'=>$desc,
        'first_memorial_text'=>$firstmemorialtext,
        'second_memorial_text'=>$secondmemorialtext,
       ), //data
                array('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s') //data format     
        );
   
    ?>
  <script type="text/javascript">
  window.location.href='<?php echo get_site_url()?>/plans-n-features/';
</script>
<?php
}

?>
<?php
$plan_id=$_GET['plan'];
if($plan_id == 2)
{
?>
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>

<section class="testi_sec testi_sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create a Memorial</h1>
            </div>
        </div>
         <div class="search_box">
            <div class="row">
              <div class="panel-heading">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active firtab" data-toggle="tab">
                        <div class="media create_box">
                          <h2>1</h2>
                          <div class="media-body">
                            <h4>Select a Layout</h4>
                            <p>Lorem ipsum dolor sit amet, </p>
                          </div>
                        </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link sectab" data-toggle="tab">
                        <div class="media create_box">
                          <h2>2</h2>
                          <div class="media-body">
                            <h4>Personal Details</h4>
                            <p>Lorem ipsum dolor sit amet, </p>
                          </div>
                        </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link thirdtab" data-toggle="tab">
                       <div class="media create_box">
                          <h2>3</h2>
                          <div class="media-body">
                            <h4>Account Details</h4>
                            <p>Lorem ipsum dolor sit amet, </p>
                          </div>
                        </div> 
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link forttab" data-toggle="tab">
                       <div class="media create_box">
                          <h2>4</h2>
                          <div class="media-body">
                            <h4>Privacy Options</h4>
                            <p>Lorem ipsum dolor sit amet, </p>
                          </div>
                        </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
        </div>
    </div>
</section>

<section class="create_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <form class="form-horizontal" action="<?php echo get_site_url()?>/payment/?package=2" id="contact_form1" method="post" enctype="multipart/form-data">
                  <div class="tab-content">
                      
                    <div class="tab-pane active" id="home">
                         <div class="row">
                            <div class="col-md-5">
                                <input type="hidden" name="amout" value="2950">
                                <input type="hidden" value="premium" name="payopt">
                                <h4>Choose a template:</h4>
                                
                                    <div class="temp_block">
                                    <?php
                                      $args_slider = array( 'post_type' => 'templates', 'posts_per_page' => -1, 'order' => 'DESC');
                                      $loop_slider = new WP_Query( $args_slider );
                                      while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                                      $id= get_the_ID();
                                    ?>
                                  <div class="temp_box">
                                      <div class="media">
                                          <img class="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));  ?>" alt="img" style="height:177px">
                                          <div class="media-body">
                                            <h5><?php echo the_title(); ?></h5>
                                            <h6><?php echo get_field('template_sub_title'); ?></h6>
                                            <a class="red_btn preview_btn recid" href="<?php echo $id; ?>">preview</a>
                                            <a class="red_btn select_btn recid" href="<?php echo $id; ?>">select</a>
                                          </div>
                                        </div>
                                  </div>
                              <?php endwhile; ?>
                              </div>
                               
                            </div>
                            
                                <div class="col-md-7 pad_left40">
                              <h4>Your choice of template:</h4>
                              <?php
                              $args_slider = array( 'post_type' => 'templates', 'posts_per_page' => 1, 'order' => 'DESC');
                              $loop_slider = new WP_Query( $args_slider );
                              while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                              $id= get_the_ID();
                              ?>
                              <div id="test">
                              <img class="img-fluid feature_img" alt="img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));  ?>">
                              </div>
                              <?php endwhile; ?>
                              <?php
                              endwhile;
                              endif;
                              ?>
                              <?php
                                if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                            ?>
                                <div class="space20"></div>
                                <h4>Select Background Song:</h4>
                                <select class="form-control" id="selection" name="songna">
                                <?php
                                if( have_rows('background_song') ):
                                while ( have_rows('background_song') ) : the_row();
                                $song=get_sub_field('background_song');
                                $songname=get_sub_field('song_name');
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
                                 <?php
                                      $args_slider = array( 'post_type' => 'templates', 'posts_per_page' => 1, 'order' => 'DESC');
                                      $loop_slider = new WP_Query( $args_slider );
                                      while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                                      $id= get_the_ID();
                                    ?>
                                <div class="themeidint">
                                    <input type="hidden" class="themeid" name="themeid" value="<?php echo $id; ?>">
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="space10"></div>
                        <!--<a href="#" class="red_btn prev_btn prevtab"><i class="fa fa-angle-left" aria-hidden="true"></i>PREVIOUS</a>-->
                        <a href="#" class="red_btn next_btn nexttab firsttab " onclick="pauseAudio()">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="tab-pane fade create_main-tab" id="menu1">
                      <h4>This memorial is dedicated to:</h4>
                       <div class="row">
                           <div class="col-md-6">
                             <input type="text" class="form-control" placeholder="First Name" pattern="[A-Za-z]" id="usr" value="<?php echo $fname ?>" name="fname" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                             <p class="imgmsg1" style="display:none;">This field is required</p>
                         </div>
                         <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last Name" pattern="[A-Za-z]" id="lname" value="<?php echo $lname ?>" name="lname" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                             <p class="imgmsg2" style="display:none;">This field is required</p>
                           </div>
                       </div> 
                       <div class="row">
                           <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Middle Name" pattern="[A-Za-z]" name="mname" id="mname" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                               <p class="imgmsg3" style="display:none;">This field is required</p>
                           </div>
                           <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Nick Name" pattern="[A-Za-z]" name="nname" id="niname" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                              <p class="imgmsg4" style="display:none;">This field is required</p>
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
                                       <!--<div id="datepicker" class="input-group date" data-date-format="dd/mm/yyyy">
                                          <input class="form-control date_form" type="text" name="deathdate"/>
                                          <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                       </div> -->
                                       <input class="form-control date_form" type="text" name="deathdate" id="dathdatecheck">
                                        <p class="dateval2" style="display:none">This field is required</p>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                              <div class="row">
                                   <div class="col-md-7 pad_right0">
                                       <p>Date of Birth (Date/Month/Year)</p>
                                   </div>
                                   <div class="col-md-5">
                                      <!-- <div id="datepicker1" class="input-group date" data-date-format="dd/mm/yyyy">
                                          <input class="form-control date_form" type="text" name="birthdate"/>
                                          <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                       </div> -->
                                       <input class="form-control date_form" type="text" name="birthdate" id="birthdatecheck">
                                        <p class="dateval1" style="display:none">This field is required</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <?php
                       endwhile;
                       endif;
                       ?>
                       <?php
                        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                    ?>
                       <div class="row">
                           <div class="col-md-3">
                               <p>Choose Memorial web address</p>
                           </div>
                           <div class="col-md-2">
                               <p class="weburl"><?php echo get_site_url(); ?>/</p>
                                 <input type="hidden" class="form-control" value="<?php echo get_site_url(); ?>/" name="webex">
                           </div>
                            <div class="col-md-4">
                               <input type="text" class="form-control" value="" id="weaddress" name="webaddress">
                               <p class="imgmsg5" style="display:none;">This field is required</p>
                           </div>
                           <div class="col-md-3">
                               <input type="file" name="proimg" accept="image/*" id="videoUploadFile">
                               <p class="imgmsg6" style="display:none;">This field is required</p>
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
                                       
                                        <?php
                                if( have_rows('reletionship_to_administrator') ):
                                while ( have_rows('reletionship_to_administrator') ) : the_row();
                                $relationname=get_sub_field('relation_name');
                               
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
                              <input type="text" pattern="(7|8|9)\d{9}" class="form-control" placeholder="Phone Number" name="rphone" id="rphone">
                              <p class="imgmsg7" style="display: none;">This field is required</p>
                              <input type="hidden" name="desc" value="This memorial website was created in memory of our loved one. We will remember him forever.">
                               <input type="hidden" name="firstmemorialtext" value="Let the memory of">
                               <input type="hidden" name="secondmemorialtext" value="be with us forever">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-4">
                              <input type="text" class="form-control" placeholder="First Name" name="rfname" id="rfname" pattern="[A-Za-z]" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                              <p class="imgmsg8" style="display:none;">This field is required</p>
                           </div>
                           <div class="col-md-4">
                              <input type="text" class="form-control" placeholder="Surname" name="rsurname" id="rsurname" pattern="[A-Za-z]" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                              <p class="imgmsg9" style="display:none;">This field is required</p>
                           </div>
                           <div class="col-md-4">
                              <input type="text" class="form-control" placeholder="Your Address" name="radd" id="radd">
                              <p class="imgmsg10" style="display:none;">This field is required</p>
                           </div>
                       </div> 
                       <div class="row">
                           <div class="col-md-6">
                              <input type="email" class="form-control" placeholder="Email Address" name="remailadd" id="remail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" onblur="validateEmail(this);">
                              <p class="imgmsg11" style="display:none;">This field is required Like - abc@gmail.com</p>
                               <p id="valid"></p>
                             <input type="hidden" value="yes" class="emailval">
                           </div>
                           <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-5 pad_right0">
                                  <p>Alternative Phone Number</p>
                                </div>
                                <div class="col-md-7 pad_left0">
                                     <input type="text" pattern="(7|8|9)\d{9}" class="form-control rnum" placeholder="Your Alternative Phone Number" name="florida" name="rpnm" id="rpnm">
                                     <p class="imgmsg12" style="display: none;">This field is required</p>
                                  
                                </div>
                              </div>
                           </div>
                       </div>
                       <div class="space10"></div>
                        <a href="#" class="red_btn prev_btn prevtab"><i class="fa fa-angle-left" aria-hidden="true"></i>PREVIOUS</a>
                        <button type="button" name="submit" class="red_btn" id="info" style="display:block">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                       <!-- <a class="red_btn next_btn nexttab" id="info">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
                        <a class="red_btn next_btn abc" id="info1" style="display:none">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a class="red_btn next_btn nexttab abc" id="sec" style="display:none">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="tab-pane fade" id="menu2">
                          <p class="signtitle">Sign in to your account</p>
                        <div class="row">
                          
                           
                             <?php
                        if(($_SESSION['id']!=''))
                        {
                            $id=($_SESSION['id']!='')?$_SESSION['id']:"";
                           $pro123 = $wpdb->get_results("SELECT * FROM `wp_tribute` where id = '$id'");
                           
                           $accountname=($pro123[0]->accountname!='')?$pro123[0]->accountname:"";
                            $accountlname=($pro123[0]->accountlname!='')?$pro123[0]->accountlname:"";
                            $acountemail=($pro123[0]->acountemail!='')?$pro123[0]->acountemail:"";
                            $accountpassword=($pro123[0]->accountpassword!='')?$pro123[0]->accountpassword:"";
                        ?>
                            <div class="col-md-3" style="display:none;">
                                <h4>Sing in With your social Account:</h4>
                               <a href="" class="facebook_btn btn_layout"><i class="fa fa-facebook-official" aria-hidden="true"></i>Sign up with Facebook</a>
                                <a href="" class="google_btn btn_layout"><i class="fa fa-google" aria-hidden="true"></i>Sign up with Google</a>
                            </div>
                             <div class="col-md-4">
                                <h4>Or Your account details:</h4>
                                <!--<em>Already have an account? <a href="#" class="switch-to-login from-register">Login here.</a></em>-->
                                <input type="text" class="form-control" placeholder="First Name" name="accountname" id="acn" value="<?php echo $accountname ?>" readonly>
                                
                                <input type="text" class="form-control" placeholder="Last Name" name="accountlname" id="aclna"  value="<?php echo $accountlname ?>" readonly>
                                <input type="text" class="form-control" placeholder="Email" name="acountemail" id="acemail" value="<?php echo $acountemail ?>" readonly>
                                <input type="password" class="form-control" placeholder="Create password" name="accountpassword" id="password"value="<?php echo  $accountpassword?>" readonly>
                              <!--  <input type="password" class="form-control" placeholder="Confirm password" name="accountconpassword" id="confirm_password">-->
                                 <span id='message'></span>
                            </div>
                            <?php
                        }
                       else if(($_SESSION['id'] =='') && $userdisplayname == "")
                        {
                        ?>
                         <div class="col-md-3">
                                <h4>Sing in With your social Account:</h4>
                                <?php echo do_shortcode('[oa_social_login]') ?>
                            </div>
                             <div class="col-md-4">
                                <h4>Or Your account details:</h4>
                                <!--<em>Already have an account? <a href="#" class="switch-to-login from-register">Login here.</a></em>-->
                                <input type="text" class="form-control" placeholder="First Name" name="accountname" id="acn">
                                   <p class="imgmsg1" style="display:none;">This field is required</p>
                                <input type="text" class="form-control" placeholder="Last Name" name="accountlname" id="aclna">
                                   <p class="imgmsg1" style="display:none;">This field is required</p>
                                <!--<input type="text" class="form-control" placeholder="Email" name="acountemail" id="acemail">-->
                                  <input type="text" class="form-control" placeholder="Email" name="acountemail" id="acemail" >
                                   <p class="imgmsg1" style="display:none;">This field is required Like- abc@gmail.com</p>
                                <input type="password" class="form-control" placeholder="Create password" name="accountpassword" id="password">
                                   <p class="imgmsg1" style="display:none;">This field is required</p>
                                <input type="password" class="form-control" placeholder="Confirm password" name="accountconpassword" id="confirm_password">
                                 <span id='message'></span>
                            </div>
                            <?php
                        }
                          else if ($userdisplayname != "")
                        {
                        ?>
                           <div class="col-md-3">
                               <!--  <h4>Sing in With your social Account:</h4>
                                <?php echo do_shortcode('[oa_social_login]') ?> -->
                            </div>
                            <div class="col-md-4">
                                <h4>Your account details:</h4>
                                <?php
                                
                    $current_user = wp_get_current_user();
                   
                    $loginname=$current_user->user_login;
                    $loginusername= $current_user->user_email;
                    $loginpassword= $current_user->user_pass;
                    $loginfname=$current_user->user_firstname;
                    $loginlname=$current_user->user_lastname;
                    $userdisplayname=$current_user->display_name;
                    $loginuserid=$current_user->ID;
                ?>
                           
                                <!--<em>Already have an account? <a href="#" class="switch-to-login from-register">Login here.</a></em>-->
                                <input type="text" class="form-control" placeholder="First Name" name="accountname" id="acn" value="<?php echo $loginfname ?>">
                                   <p class="imgmsg13" style="display:none;">This field is required</p>
                                <input type="text" class="form-control" placeholder="Last Name" name="accountlname" id="aclna" value="<?php echo $loginlname; ?>">
                                   <p class="imgmsg14" style="display:none;">This field is required</p>
                                <input type="text" class="form-control" placeholder="Email" name="acountemail" id="acemail" value="<?php echo $loginusername; ?>">
                                   <p class="imgmsg15" style="display:none;">This field is required Like - abc@gmail.com</p>
                                <input type="hidden" class="form-control" placeholder="Create password" name="accountpassword" id="password"value="<?php echo $loginpassword; ?>">
                                   
                                <input type="hidden" class="form-control" placeholder="Confirm password" name="accountconpassword" id="$user_pass" value="<?php echo $loginpassword; ?>">
                                 
                                 
                                <!-- <p class="logindata" data-toggle="modal" data-target="#myModal2">already have account click here for login</p>-->
                            </div>  
                        <?php  } ?> 
                           
                        </div>  
                        <?php
                        if(($_SESSION['id']!=''))
                        {
                        ?>
                        <a class="red_btn next_btn nexttab">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <?php
                        }
                        else if(($_SESSION['id'] =='') && $userdisplayname == "")
                        {
                        ?>
                        <div class="space80"></div>
                        <a href="#" class="red_btn prev_btn prevtab prevtodata"><i class="fa fa-angle-left" aria-hidden="true"></i>PREVIOUS</a>
                        
                             <button type="button" name="submit" class="red_btn" id="inforeg" style="display:block">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                       <!-- <a class="red_btn next_btn nexttab" id="info">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
                        <a class="red_btn next_btn" id="inforegsed" style="display:none">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a class="red_btn next_btn nexttab" id="sec1" style="display:none">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <?php
                        }
                         else if(($userdisplayname != ""))
                        {
                        ?>
                         <a class="red_btn next_btn nexttab" id="sec1" style="display:block">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                       <?php
                       }
                       ?> 
                       <!-- <a href="#" class="red_btn next_btn nexttab">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
                    </div>
                    <div class="tab-pane" id="menu3">
                        <div class="row">
                              <div class="col-md-7">
                                  <h4>Would you like to share your memorial with others, or keep it private? <i>(This can be changed later.)</i></h4>
                                  <div class="radio_class">
                                      <div class="radio radio-inline">
                                          <input type="radio" id="inlineRadio1" value="private" name="radioInline" >
                                          <label for="inlineRadio1"> Keep it private </label>
                                      </div>
                                      <div class="radio radio-inline">
                                          <input type="radio" id="inlineRadio2" value="public" name="radioInline" checked="">
                                          <label for="inlineRadio2"> Make it public </label>
                                      </div>
                                  </div>
                                  <h4>Accept/Agree Guidelines . You can read  <a href="<?php echo get_site_url(); ?>/term-and-condition/" target="blank"> Terms and Conditions here.</a></h4>
                                  <div class="radio_class">
                                      <div class="radio radio-inline">
                                          <input type="radio" id="inlineRadio3" value="option1" name="radioInline1" checked="">
                                          <label for="inlineRadio3"> I Agree </label>
                                      </div>
                                  </div>
                                  <div class="space120"></div>
                                  <input type="submit" class="red_btn red_btn1" name="subbtnlast" value="proceed to Payment"> 
                                 <!-- <a href="" class="red_btn red_btn1">create memorial</a>-->
                                  <a href="" class="go_back">or go back and edit information</a>
                              </div>
                              <div class="col-md-5">
                                  <div class="pull-right">
                                  <h4>Memorial Preview</h4>
                                   <?php
                                      $args_slider = array( 'post_type' => 'templates', 'posts_per_page' => 1, 'order' => 'DESC');
                                      $loop_slider = new WP_Query( $args_slider );
                                      while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                                      $id= get_the_ID();
                                    ?>
                                  <div id="testlast">
                                       <img class="img-fluid feature_img" alt="img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id());  ?>">
                                <!--  <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_page.png">-->
                                  </div>
                                  <?php
                                  endwhile;
                                  ?>
                                  </div>
                              </div>
                        </div>
                        <div class="space30"></div>
                        <a href="#" class="red_btn prev_btn prevtab"><i class="fa fa-angle-left" aria-hidden="true"></i>PREVIOUS</a>
                    </div>
                    
                  </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #test img.img-fluid.feature_img {
    box-shadow: 0px 3px 9px 3px #ccc;
}
p.signtitle {
    margin-top: 30px;
    font-size: 23px;
    text-decoration: underline;
}
div#testlast img {
    height: 376px;
    width: 72%;
    box-shadow: 1px 1px 12px 4px #ccc;
}
input.red_btn.red_btn1 {
    border: none;
}
button#info {
    float: right;
    max-width: 165px;
    height: 40px;
    font-size: 16px;
    font-family: 'SF-Pro-Display-Bold';
    line-height: 40px;
    border: none;
}
label.error {
    color: red;
    margin-top: -31px;
    position: absolute;
    /* float: right; */
}
a#info1 {
    color: #fff;
}
a#sec,a#inforegsed,a#sec1 {
    color: #fff;
}
button#inforeg {
     float: right;
    max-width: 165px;
    height: 40px;
    font-size: 16px;
    font-family: 'SF-Pro-Display-Bold';
    line-height: 40px;
    border: none;
}
p.imgmsg {
    color: red;
}
p.weburl {
    font-size: 15px;
}
p.imgmsg1,p.imgmsg2,p.imgmsg3,p.imgmsg4,p.imgmsg5,p.imgmsg7,p.imgmsg8,p.imgmsg9,p.imgmsg10,p.imgmsg11,p.imgmsg12,p.imgmsg13,p.imgmsg14,p.imgmsg15,p.imgmsg16 {
    color: red;
    margin-top: -23px;
}
p.imgmsg6
{
  color: red;
    margin-top: 0px;  
}
a.red_btn.next_btn.nexttab {
    color: #fff;
}
.red_btn {
    cursor: pointer;
}
</style>

  <?php
endwhile;
endif;
?>
<?php
}
else if($plan_id == 3)
{
?>
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>

<section class="testi_sec testi_sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create a Memorial</h1>
            </div>
        </div>
         <div class="search_box">
            <div class="row">
              <div class="panel-heading">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active firtab" data-toggle="tab">
                        <div class="media create_box">
                          <h2>1</h2>
                          <div class="media-body">
                            <h4>Select a Layout</h4>
                            <p>Lorem ipsum dolor sit amet, </p>
                          </div>
                        </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link sectab" data-toggle="tab">
                        <div class="media create_box">
                          <h2>2</h2>
                          <div class="media-body">
                            <h4>Personal Details</h4>
                            <p>Lorem ipsum dolor sit amet, </p>
                          </div>
                        </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link thirdtab" data-toggle="tab">
                       <div class="media create_box">
                          <h2>3</h2>
                          <div class="media-body">
                            <h4>Account Details</h4>
                            <p>Lorem ipsum dolor sit amet, </p>
                          </div>
                        </div> 
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link forttab" data-toggle="tab" >
                       <div class="media create_box">
                          <h2>4</h2>
                          <div class="media-body">
                            <h4>Privacy Options</h4>
                            <p>Lorem ipsum dolor sit amet, </p>
                          </div>
                        </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
        </div>
    </div>
</section>

<section class="create_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <form class="form-horizontal" action="<?php echo get_site_url()?>/payment/?package=3" id="contact_form1" method="post" enctype="multipart/form-data">
                  <div class="tab-content">
                      
                    <div class="tab-pane active" id="home">
                         <div class="row">
                            <div class="col-md-5">
                                <input type="hidden" name="amout" value="5950">
                                <input type="hidden" value="premium" name="payopt">
                                <h4>Choose a template:</h4>
                                
                                    <div class="temp_block">
                                    <?php
                                      $args_slider = array( 'post_type' => 'templates', 'posts_per_page' => -1, 'order' => 'DESC');
                                      $loop_slider = new WP_Query( $args_slider );
                                      while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                                      $id= get_the_ID();
                                    ?>
                                  <div class="temp_box">
                                      <div class="media">
                                          <img class="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));  ?>" alt="img" style="height:177px">
                                          <div class="media-body">
                                            <h5><?php echo the_title(); ?></h5>
                                            <h6><?php echo get_field('template_sub_title'); ?></h6>
                                            <a class="red_btn preview_btn recid" href="<?php echo $id; ?>">preview</a>
                                            <a class="red_btn select_btn recid" href="<?php echo $id; ?>">select</a>
                                          </div>
                                        </div>
                                  </div>
                              <?php endwhile; ?>
                              </div>
                               
                            </div>
                            
                                <div class="col-md-7 pad_left40">
                              <h4>Your choice of template:</h4>
                              <?php
                              $args_slider = array( 'post_type' => 'templates', 'posts_per_page' => 1, 'order' => 'DESC');
                              $loop_slider = new WP_Query( $args_slider );
                              while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                              $id= get_the_ID();
                              ?>
                              <div id="test">
                              <img class="img-fluid feature_img" alt="img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));  ?>">
                              </div>
                              <?php endwhile; ?>
                              <?php
                              endwhile;
                              endif;
                              ?>
                              <?php
                                if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                            ?>
                                <div class="space20"></div>
                                <h4>Select Background Song:</h4>
                                <select class="form-control" id="selection" name="songna">
                                <?php
                                if( have_rows('background_song') ):
                                while ( have_rows('background_song') ) : the_row();
                                $song=get_sub_field('background_song');
                                $songname=get_sub_field('song_name');
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
                                 <?php
                                      $args_slider = array( 'post_type' => 'templates', 'posts_per_page' => 1, 'order' => 'DESC');
                                      $loop_slider = new WP_Query( $args_slider );
                                      while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                                      $id= get_the_ID();
                                    ?>
                                <div class="themeidint">
                                    <input type="hidden" class="themeid" name="themeid" value="<?php echo $id; ?>">
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="space10"></div>
                        <!--<a href="#" class="red_btn prev_btn prevtab"><i class="fa fa-angle-left" aria-hidden="true"></i>PREVIOUS</a>-->
                        <a href="#" class="red_btn next_btn nexttab firsttab" onclick="pauseAudio()">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="tab-pane fade create_main-tab" id="menu1">
                      <h4>This memorial is dedicated to:</h4>
                       <div class="row">
                           <div class="col-md-6">
                             <input type="text" class="form-control" placeholder="First Name" id="usr" value="<?php echo $fname ?>" name="fname" pattern="[A-Za-z]" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                             <p class="imgmsg1" style="display:none;">This field is required</p>
                         </div>
                         <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last Name" id="lname" value="<?php echo $lname ?>" name="lname" pattern="[A-Za-z]" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                             <p class="imgmsg2" style="display:none;">This field is required</p>
                           </div>
                       </div> 
                       <div class="row">
                           <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Middle Name" name="mname" id="mname" pattern="[A-Za-z]" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                               <p class="imgmsg3" style="display:none;">This field is required</p>
                           </div>
                           <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Nick Name" name="nname" id="niname" pattern="[A-Za-z]" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                              <p class="imgmsg4" style="display:none;">This field is required</p>
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
                                      <!-- <div id="datepicker" class="input-group date" data-date-format="dd/mm/yyyy">
                                          <input class="form-control date_form" type="text" name="deathdate"/>
                                          <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                       </div> -->
                                       
                                    <input class="form-control date_form" type="text" name="deathdate" id="dathdatecheck">
                                    <p class="dateval2" style="display:none">This field is required</p>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                              <div class="row">
                                   <div class="col-md-7 pad_right0">
                                       <p>Date of Birth (Date/Month/Year)</p>
                                   </div>
                                   <div class="col-md-5">
                                       <!--<div id="datepicker1" class="input-group date" data-date-format="dd/mm/yyyy">
                                          <input class="form-control date_form" type="text" name="birthdate"/>
                                          <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                       </div> -->
                                       <input class="form-control date_form" type="text" name="birthdate" id="birthdatecheck">
                                        <p class="dateval1" style="display:none">This field is required</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <?php
                       endwhile;
                       endif;
                       ?>
                       <?php
                        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                    ?>
                       <div class="row">
                           <div class="col-md-3">
                               <p>Choose Memorial web address</p>
                           </div>
                           <div class="col-md-2">
                               <p class="weburl"><?php echo get_site_url(); ?>/</p>
                                 <input type="hidden" class="form-control" value="<?php echo get_site_url(); ?>/" name="webex">
                           </div>
                            <div class="col-md-4">
                               <input type="text" class="form-control" value="" name="webaddress" id="weaddress">
                               <p class="imgmsg5" style="display:none;">This field is required</p>
                           </div>
                           <div class="col-md-3">
                               <input type="file" name="proimg" accept="image/*" id="videoUploadFile">
                               <p class="imgmsg6" style="display:none;">This field is required</p>
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
                                       
                                        <?php
                                if( have_rows('reletionship_to_administrator') ):
                                while ( have_rows('reletionship_to_administrator') ) : the_row();
                                $relationname=get_sub_field('relation_name');
                               
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
                              <input type="text" pattern="(7|8|9)\d{9}" class="form-control" placeholder="Phone Number" name="rphone" id="rphone">
                              <p class="imgmsg7" style="display: none;">This field is required</p>
                              <input type="hidden" name="desc" value="This memorial website was created in memory of our loved one. We will remember him forever.">
                               <input type="hidden" name="firstmemorialtext" value="Let the memory of">
                               <input type="hidden" name="secondmemorialtext" value="be with us forever">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-4">
                              <input type="text" class="form-control" placeholder="First Name" name="rfname" id="rfname" pattern="[A-Za-z]" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                              <p class="imgmsg8" style="display:none;">This field is required</p>
                           </div>
                           <div class="col-md-4">
                              <input type="text" class="form-control" placeholder="Surname" name="rsurname" id="rsurname" pattern="[A-Za-z]" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                              <p class="imgmsg9" style="display:none;">This field is required</p>
                           </div>
                           <div class="col-md-4">
                              <input type="text" class="form-control" placeholder="Your Address" name="radd" id="radd">
                              <p class="imgmsg10" style="display:none;">This field is required</p>
                           </div>
                       </div> 
                       <div class="row">
                           <div class="col-md-6">
                              <input type="email" class="form-control" placeholder="Email Address" name="remailadd" id="remail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" onblur="validateEmail(this);">
                             <p id="valid"></p>
                             <input type="hidden" value="yes" class="emailval">
                           </div>
                           <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-5 pad_right0">
                                  <p>Alternative Phone Number</p>
                                </div>
                                <div class="col-md-7 pad_left0">
                                     <input type="text" pattern="(7|8|9)\d{9}" class="form-control rnum" placeholder="Your Alternative Phone Number" name="florida" name="rpnm" id="rpnm">
                                     <p class="imgmsg12" style="display: none;">This field is required</p>
                                  
                                </div>
                              </div>
                           </div>
                       </div>
                       <div class="space10"></div>
                        <a href="#" class="red_btn prev_btn prevtab"><i class="fa fa-angle-left" aria-hidden="true"></i>PREVIOUS</a>
                        <button type="button" name="submit" class="red_btn" id="info" style="display:block">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                       <!-- <a class="red_btn next_btn nexttab" id="info">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
                        <a class="red_btn next_btn abc" id="info1" style="display:none">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a class="red_btn next_btn nexttab abc" id="sec" style="display:none">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="tab-pane fade" id="menu2">
                          <p class="signtitle">Sign in to your account</p>
                        <div class="row">
                          
                           
                             <?php
                        if(($_SESSION['id']!=''))
                        {
                            $id=($_SESSION['id']!='')?$_SESSION['id']:"";
                           $pro123 = $wpdb->get_results("SELECT * FROM `wp_tribute` where id = '$id'");
                           
                           $accountname=($pro123[0]->accountname!='')?$pro123[0]->accountname:"";
                            $accountlname=($pro123[0]->accountlname!='')?$pro123[0]->accountlname:"";
                            $acountemail=($pro123[0]->acountemail!='')?$pro123[0]->acountemail:"";
                            $accountpassword=($pro123[0]->accountpassword!='')?$pro123[0]->accountpassword:"";
                        ?>
                            <div class="col-md-3" style="display:none;">
                                <h4>Sing in With your social Account:</h4>
                                <?php echo do_shortcode('[oa_social_login]') ?>
                            </div>
                             <div class="col-md-4">
                                <h4>Or Your account details:</h4>
                                <!--<em>Already have an account? <a href="#" class="switch-to-login from-register">Login here.</a></em>-->
                                <input type="text" class="form-control" placeholder="First Name" name="accountname" id="acn" value="<?php echo $accountname ?>" readonly>
                                
                                <input type="text" class="form-control" placeholder="Last Name" name="accountlname" id="aclna"  value="<?php echo $accountlname ?>" readonly>
                                <input type="text" class="form-control" placeholder="Email" name="acountemail" id="acemail" value="<?php echo $acountemail ?>" readonly>
                                <input type="password" class="form-control" placeholder="Create password" name="accountpassword" id="password"value="<?php echo  $accountpassword?>" readonly>
                              <!--  <input type="password" class="form-control" placeholder="Confirm password" name="accountconpassword" id="confirm_password">-->
                                 <span id='message'></span>
                            </div>
                            <?php
                        }
                       else if(($_SESSION['id'] =='') && $userdisplayname == "")
                        {
                        ?>
                         <div class="col-md-3">
                                <h4>Sing in With your social Account:</h4>
                              <a href="" class="facebook_btn btn_layout"><i class="fa fa-facebook-official" aria-hidden="true"></i>Sign up with Facebook</a>
                                <a href="" class="google_btn btn_layout"><i class="fa fa-google" aria-hidden="true"></i>Sign up with Google</a>
                            </div>
                             <div class="col-md-4">
                                <h4>Or Your account details:</h4>
                                <!--<em>Already have an account? <a href="#" class="switch-to-login from-register">Login here.</a></em>-->
                                <input type="text" class="form-control" placeholder="First Name" name="accountname" id="acn" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                                   <p class="imgmsg1" style="display:none;">This field is required</p>
                                <input type="text" class="form-control" placeholder="Last Name" name="accountlname" id="aclna" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                                   <p class="imgmsg1" style="display:none;">This field is required</p>
                                     <input type="text" class="form-control" placeholder="Email" name="acountemail" id="acemail">
                              <!--  <input type="text" class="form-control" placeholder="Email" name="acountemail" id="acemail">-->
                                   <p class="imgmsg1" style="display:none;">This field is required Like- abc@gmail.com</p>
                                <input type="password" class="form-control" placeholder="Create password" name="accountpassword" id="password">
                                   <p class="imgmsg1" style="display:none;">This field is required</p>
                                <input type="password" class="form-control" placeholder="Confirm password" name="accountconpassword" id="confirm_password">
                                 <span id='message'></span>
                            </div>
                            <?php
                        }
                        else if ($userdisplayname != "")
                        {
                        ?>
                           <div class="col-md-3">
                                <!-- <h4>Sing in With your social Account:</h4>
                                <?php echo do_shortcode('[oa_social_login]') ?> -->
                            </div>
                            <div class="col-md-4">
                                <!-- <h4>Or Your account details:</h4> -->
                                <?php
                                
                    $current_user = wp_get_current_user();
                   
                    $loginname=$current_user->user_login;
                    $loginusername= $current_user->user_email;
                    $loginpassword= $current_user->user_pass;
                    $loginfname=$current_user->user_firstname;
                    $loginlname=$current_user->user_lastname;
                    $userdisplayname=$current_user->display_name;
                    $loginuserid=$current_user->ID;
                ?>
                           
                                <!--<em>Already have an account? <a href="#" class="switch-to-login from-register">Login here.</a></em>-->
                                <input type="text" class="form-control" placeholder="First Name" name="accountname" id="acn" value="<?php echo $loginfname ?>">
                                   <p class="imgmsg13" style="display:none;">This field is required</p>
                                <input type="text" class="form-control" placeholder="Last Name" name="accountlname" id="aclna" value="<?php echo $loginlname; ?>">
                                   <p class="imgmsg14" style="display:none;">This field is required</p>
                                <input type="text" class="form-control" placeholder="Email" name="acountemail" id="acemail" value="<?php echo $loginusername; ?>">
                                   <p class="imgmsg15" style="display:none;">This field is required Like - abc@gmail.com</p>
                                <input type="hidden" class="form-control" placeholder="Create password" name="accountpassword" id="password"value="<?php echo $loginpassword; ?>">
                                   
                                <input type="hidden" class="form-control" placeholder="Confirm password" name="accountconpassword" id="$user_pass" value="<?php echo $loginpassword; ?>">
                                 
                                 
                                <!-- <p class="logindata" data-toggle="modal" data-target="#myModal2">already have account click here for login</p>-->
                            </div>  
                        <?php  } ?>  
                           
                        </div>
                        <div class="space80"></div>
                        <a href="#" class="red_btn prev_btn prevtab"><i class="fa fa-angle-left" aria-hidden="true"></i>PREVIOUS</a>
                          <?php
                        if(($_SESSION['id']!=''))
                        {
                        ?>
                         <div class="space10"></div>
                        <a class="red_btn next_btn nexttab">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <?php
                        }
                        else if(($_SESSION['id'] =='') && $userdisplayname == "")
                        {
                        ?>
                             <button type="button" name="submit" class="red_btn" id="inforeg" style="display:block">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                       <!-- <a class="red_btn next_btn nexttab" id="info">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
                        <a class="red_btn next_btn" id="inforegsed" style="display:none">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a class="red_btn next_btn nexttab" id="sec1" style="display:none">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        
                        <?php
                        }
                         else if(($userdisplayname != ""))
                        {
                        ?>
                         <a class="red_btn next_btn nexttab" id="sec1" style="display:block">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                       <?php
                       }
                       ?> 
                        
                        
                       <!-- <a href="#" class="red_btn next_btn nexttab">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
                    </div>
                    <div class="tab-pane" id="menu3">
                        <div class="row">
                              <div class="col-md-7">
                                  <h4>Would you like to share your memorial with others, or keep it private? <i>(This can be changed later.)</i></h4>
                                  <div class="radio_class">
                                      <div class="radio radio-inline">
                                          <input type="radio" id="inlineRadio1" value="private" name="radioInline" >
                                          <label for="inlineRadio1"> Keep it private </label>
                                      </div>
                                      <div class="radio radio-inline">
                                          <input type="radio" id="inlineRadio2" value="public" name="radioInline" checked="">
                                          <label for="inlineRadio2"> Make it public </label>
                                      </div>
                                  </div>
                                  <h4>Accept/Agree Guidelines . You can read  <a href="<?php echo get_site_url(); ?>/term-and-condition/" target="blank"> Terms and Conditions here.</a></h4>
                                  <div class="radio_class">
                                      <div class="radio radio-inline">
                                          <input type="radio" id="inlineRadio3" value="option1" name="radioInline1" checked="">
                                          <label for="inlineRadio3"> I Agree </label>
                                      </div>
                                  </div>
                                  <div class="space120"></div>
                                  <input type="submit" class="red_btn red_btn1" name="subbtnlast" value="proceed to Payment"> 
                                 <!-- <a href="" class="red_btn red_btn1">create memorial</a>-->
                                  <a href="" class="go_back">or go back and edit information</a>
                              </div>
                              <div class="col-md-5">
                                  <div class="pull-right">
                                  <h4>Memorial Preview</h4>
                                   <?php
                                      $args_slider = array( 'post_type' => 'templates', 'posts_per_page' => 1, 'order' => 'DESC');
                                      $loop_slider = new WP_Query( $args_slider );
                                      while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                                      $id= get_the_ID();
                                    ?>
                                  <div id="testlast">
                                       <img class="img-fluid feature_img" alt="img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id());  ?>">
                                <!--  <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_page.png">-->
                                  </div>
                                  <?php
                                  endwhile;
                                  ?>
                                  </div>
                              </div>
                        </div>
                        <div class="space30"></div>
                        <a href="#" class="red_btn prev_btn prevtab"><i class="fa fa-angle-left" aria-hidden="true"></i>PREVIOUS</a>
                    </div>
                    
                  </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #test img.img-fluid.feature_img {
    box-shadow: 0px 3px 9px 3px #ccc;
}
p.signtitle {
    margin-top: 30px;
    font-size: 23px;
    text-decoration: underline;
}
div#testlast img {
    height: 376px;
    width: 72%;
    box-shadow: 1px 1px 12px 4px #ccc;
}
input.red_btn.red_btn1 {
    border: none;
}
button#info {
    float: right;
    max-width: 165px;
    height: 40px;
    font-size: 16px;
    font-family: 'SF-Pro-Display-Bold';
    line-height: 40px;
    border: none;
}
label.error {
    color: red;
    margin-top: -31px;
    position: absolute;
    /* float: right; */
}
a#info1 {
    color: #fff;
}
a#sec,a#inforegsed,a#sec1 {
    color: #fff;
}
button#inforeg {
     float: right;
    max-width: 165px;
    height: 40px;
    font-size: 16px;
    font-family: 'SF-Pro-Display-Bold';
    line-height: 40px;
    border: none;
}
p.imgmsg {
    color: red;
}
p.weburl {
    font-size: 15px;
}
p.imgmsg1,p.imgmsg2,p.imgmsg3,p.imgmsg4,p.imgmsg5,p.imgmsg7,p.imgmsg8,p.imgmsg9,p.imgmsg10,p.imgmsg11,p.imgmsg12,p.imgmsg13,p.imgmsg14,p.imgmsg15,p.imgmsg16  {
    color: red;
    margin-top: -23px;
}
p.imgmsg6
{
  color: red;
    margin-top: 0px;  
}
a.red_btn.next_btn.nexttab {
    color: #fff;
}
.red_btn {
    cursor: pointer;
}
</style>

  <?php
endwhile;
endif;
?>
<?php
}
else
{

?>
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>

<section class="testi_sec testi_sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create a Memorial</h1>
            </div>
        </div>
         <div class="search_box">
            <div class="row">
              <div class="panel-heading">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active firtab" data-toggle="tab">
                        <div class="media create_box">
                          <h2>1</h2>
                          <div class="media-body">
                            <h4>Select a Layout</h4>
                            <p>Lorem ipsum dolor sit amet, </p>
                          </div>
                        </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link sectab" data-toggle="tab">
                        <div class="media create_box">
                          <h2>2</h2>
                          <div class="media-body">
                            <h4>Personal Details</h4>
                            <p>Lorem ipsum dolor sit amet, </p>
                          </div>
                        </div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link thirdtab" data-toggle="tab">
                       <div class="media create_box">
                          <h2>3</h2>
                          <div class="media-body">
                            <h4>Account Details</h4>
                            <p>Lorem ipsum dolor sit amet, </p>
                          </div>
                        </div> 
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link forttab" data-toggle="tab">
                       <div class="media create_box">
                          <h2>4</h2>
                          <div class="media-body">
                            <h4>Privacy Options</h4>
                            <p>Lorem ipsum dolor sit amet, </p>
                          </div>
                        </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
        </div>
    </div>
</section>

<section class="create_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body">
                    <form class="form-horizontal" action="" id="contact_form1" method="post" enctype="multipart/form-data">
                  <div class="tab-content">
                      
                    <div class="tab-pane active" id="home">
                         <div class="row">
                            <div class="col-md-5">
                                <h4>Choose a template:</h4>
                                
                                    <div class="temp_block">
                                    <?php
                                      $args_slider = array( 'post_type' => 'templates', 'posts_per_page' => -1, 'order' => 'DESC');
                                      $loop_slider = new WP_Query( $args_slider );
                                      while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                                      $id= get_the_ID();
                                    ?>
                                  <div class="temp_box">
                                      <div class="media">
                                          <img class="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));  ?>" alt="img" style="height:177px">
                                          <div class="media-body">
                                            <h5><?php echo the_title(); ?></h5>
                                            <h6><?php echo get_field('template_sub_title'); ?></h6>
                                            <a class="red_btn preview_btn recid" href="<?php echo $id; ?>">preview</a>
                                            <a class="red_btn select_btn recid" href="<?php echo $id; ?>">select</a>
                                          </div>
                                        </div>
                                  </div>
                              <?php endwhile; ?>
                              </div>
                               
                            </div>
                            
                                <div class="col-md-7 pad_left40">
                              <h4>Your choice of template:</h4>
                              <?php
                              $args_slider = array( 'post_type' => 'templates', 'posts_per_page' => 1, 'order' => 'DESC');
                              $loop_slider = new WP_Query( $args_slider );
                              while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                              $id= get_the_ID();
                              ?>
                              <div id="test">
                              <img class="img-fluid feature_img" alt="img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));  ?>">
                              </div>
                              <?php endwhile; ?>
                              <?php
                              endwhile;
                              endif;
                              ?>
                              <?php
                                if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                            ?>
                                <div class="space20"></div>
                                <h4>Select Background Song:</h4>
                                <select class="form-control" id="selection" name="songna">
                                <?php
                                if( have_rows('background_song') ):
                                while ( have_rows('background_song') ) : the_row();
                                $song=get_sub_field('background_song');
                                $songname=get_sub_field('song_name');
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
                                 <?php
                                      $args_slider = array( 'post_type' => 'templates', 'posts_per_page' => 1, 'order' => 'DESC');
                                      $loop_slider = new WP_Query( $args_slider );
                                      while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                                      $id= get_the_ID();
                                    ?>
                                <div class="themeidint">
                                    <input type="hidden" class="themeid" name="themeid" value="<?php echo $id; ?>">
                                </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                        <div class="space10"></div>
                        <!--<a href="#" class="red_btn prev_btn prevtab"><i class="fa fa-angle-left" aria-hidden="true"></i>PREVIOUS</a>-->
                        <a href="#" class="red_btn next_btn nexttab firsttab" onclick="pauseAudio()">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="tab-pane fade create_main-tab" id="menu1">
                      <h4>This memorial is dedicated to:</h4>
                       <div class="row">
                           <div class="col-md-6">
                             <input type="text" class="form-control" placeholder="First Name" id="usr" value="<?php echo $fname ?>" name="fname" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                             <p class="imgmsg1" style="display:none;">This field is required</p>
                         </div>
                         <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Last Name" id="lname" value="<?php echo $lname ?>" name="lname" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                             <p class="imgmsg2" style="display:none;">This field is required</p>
                           </div>
                       </div> 
                       <div class="row">
                           <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Middle Name" name="mname" id="mname" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                               <p class="imgmsg3" style="display:none;">This field is required</p>
                           </div>
                           <div class="col-md-6">
                              <input type="text" class="form-control" placeholder="Nick Name" name="nname" id="niname" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                               <p class="imgmsg4" style="display:none;">This field is required</p>
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
                                     <!--  <div id="datepicker" class="input-group date" data-date-format="dd/mm/yyyy">
                                          
                                          <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                       </div> -->
                                       <input class="form-control date_form" type="text" name="deathdate" id="dathdatecheck">
                                      <p class="dateval2" style="display:none">This field is required</p>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-4">
                              <div class="row">
                                   <div class="col-md-7 pad_right0">
                                       <p>Date of Birth (Date/Month/Year)</p>
                                   </div>
                                   <div class="col-md-5">
                                      <!-- <div id="datepicker1" class="input-group date" data-date-format="dd/mm/yyyy">
                                          
                                          <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                       </div> -->
                                       <input class="form-control date_form" type="text" name="birthdate" id="birthdatecheck">
                                        <p class="dateval1" style="display:none">This field is required</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-12">
                              
                            <p class="dateval" style="display:none">Death date can't be lesser than Birth date</p>
                            </div>
                       </div>
                       <?php
                       endwhile;
                       endif;
                       ?>
                       <?php
                        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                    ?>
                       <div class="row">
                           <div class="col-md-3">
                               <p>Choose Memorial web address</p>
                           </div>
                           <div class="col-md-2">
                               <p class="weburl"><?php echo get_site_url(); ?>/</p>
                                 <input type="hidden" class="form-control" value="<?php echo get_site_url(); ?>/" name="webex">
                           </div>
                            <div class="col-md-4">
                               <input type="text" class="form-control" value="" name="webaddress" id="weaddress">
                                <p class="imgmsg5" style="display:none;">This field is required</p>
                           </div>
                           <div class="col-md-3">
                               <input type="file" name="proimg" accept="image/*" id="videoUploadFile">
                               <p class="imgmsg6" style="display:none;">This field is required</p>
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
                                       
                                        <?php
                                if( have_rows('reletionship_to_administrator') ):
                                while ( have_rows('reletionship_to_administrator') ) : the_row();
                                $relationname=get_sub_field('relation_name');
                               
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
                              <input type="text" pattern="(7|8|9)\d{9}" class="form-control rnum" placeholder="Phone Number" name="rphone" id="rphone">
                               <p class="imgmsg7" style="display:none;">This field is required</p>
                              <input type="hidden" name="desc" value="This memorial website was created in memory of our loved one. We will remember him forever.">
                               <input type="hidden" name="firstmemorialtext" value="Let the memory of">
                               <input type="hidden" name="secondmemorialtext" value="be with us forever">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-4">
                              <input type="text" class="form-control" placeholder="First Name" name="rfname" id="rfname" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                               <p class="imgmsg8" style="display:none;">This field is required</p>
                           </div>
                           <div class="col-md-4">
                              <input type="text" class="form-control" placeholder="Surname" name="rsurname" id="rsurname" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                               <p class="imgmsg9" style="display:none;">This field is required</p>
                           </div>
                           <div class="col-md-4">
                              <input type="text" class="form-control" placeholder="Your Address" name="radd" id="radd">
                               <p class="imgmsg10" style="display:none;">This field is required</p>
                           </div>
                       </div> 
                       <div class="row">
                           <div class="col-md-6">
                              <input type="Email" class="form-control" placeholder="Email Address" name="remailadd" id="remail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" onblur="validateEmail(this);">
                               <p class="imgmsg11" style="display:none;">This field is required -Like abc@gmail.com</p>
                               <p id="valid"></p>
                               <input type="hidden" value="yes" class="emailval">
                           </div>
                           <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-5 pad_right0">
                                  <p>Alternative Phone Number</p>
                                </div>
                                <div class="col-md-7 pad_left0">
                                     <input type="text" class="form-control rnum" placeholder="Your Alternative Phone Number" name="florida" name="rpnm" id="rpnm">
                                   <p class="imgmsg12" style="display:none;">This field is required</p>
                                </div>
                              </div>
                           </div>
                       </div>
                       <div class="space10"></div>
                        <a href="#" class="red_btn prev_btn prevtab"><i class="fa fa-angle-left" aria-hidden="true"></i>PREVIOUS</a>
                        <button type="button" name="submit" class="red_btn" id="info" style="display:block">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></button>
                       <!-- <a class="red_btn next_btn nexttab" id="info">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
                        <a class="red_btn next_btn abc" id="info1" style="display:none">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a class="red_btn next_btn nexttab abc" id="sec" style="display:none">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="tab-pane fade" id="menu2">
                          <p class="signtitle">Sign in to your account</p>
                        <div class="row">
                           
                           <?php
                        if(($_SESSION['id']!=''))
                        {
                            $id=($_SESSION['id']!='')?$_SESSION['id']:"";
                           $pro123 = $wpdb->get_results("SELECT * FROM `wp_tribute` where id = '$id'");
                           
                            $accountname=($pro123[0]->accountname!='')?$pro123[0]->accountname:"";
                            $accountlname=($pro123[0]->accountlname!='')?$pro123[0]->accountlname:"";
                            $acountemail=($pro123[0]->acountemail!='')?$pro123[0]->acountemail:"";
                            $accountpassword=($pro123[0]->accountpassword!='')?$pro123[0]->accountpassword:"";
                           
                          
                        ?>
                            <div class="col-md-3" style="display:none;">
                                <h4>Sing in With your social Account:</h4>
                               <a href="" class="facebook_btn btn_layout"><i class="fa fa-facebook-official" aria-hidden="true"></i>Sign up with Facebook</a>
                                <a href="" class="google_btn btn_layout"><i class="fa fa-google" aria-hidden="true"></i>Sign up with Google</a>
                            </div>
                            <div class="col-md-4">
                                <h4>Or Your account details:</h4>
                                <!--<em>Already have an account? <a href="#" class="switch-to-login from-register">Login here.</a></em>-->
                                <input type="text" class="form-control" placeholder="First Name" name="accountname" id="acn" value="<?php echo $accountname ?>" readonly>
                                <input type="text" class="form-control" placeholder="Last Name" name="accountlname" id="aclna"  value="<?php echo $accountlname ?>" readonly>
                                <input type="text" class="form-control" placeholder="Email" name="acountemail" id="acemail" value="<?php echo $acountemail ?>" readonly>
                                <input type="password" class="form-control" placeholder="Create password" name="accountpassword" id="password"value="<?php echo  $accountpassword?>" readonly>
                              <!--  <input type="password" class="form-control" placeholder="Confirm password" name="accountconpassword" id="confirm_password">-->
                                 <span id='message'></span>
                            </div>
                            <?php
                        }
                         else if(($_SESSION['id'] =='') && $userdisplayname == "")
                        { 
                        ?>
                          <div class="col-md-3">
                                <h4>Sing in With your social Account:</h4>
                                <a href="" class="facebook_btn btn_layout"><i class="fa fa-facebook-official" aria-hidden="true"></i>Sign up with Facebook</a>
                                <a href="" class="google_btn btn_layout"><i class="fa fa-google" aria-hidden="true"></i>Sign up with Google</a>
                            </div>
                            <div class="col-md-4">
                                <h4>Or Your account details:</h4>
                                <!--<em>Already have an account? <a href="#" class="switch-to-login from-register">Login here.</a></em>-->
                                <input type="text" class="form-control" placeholder="First Name" name="accountname" id="acn" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                                   <p class="imgmsg13" style="display:none;">This field is required</p>
                                <input type="text" class="form-control" placeholder="Last Name" name="accountlname" id="aclna" onkeypress="return (event.charCode > 64 && 
	event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                                   <p class="imgmsg14" style="display:none;">This field is required</p>
                                <input type="text" class="form-control" placeholder="Email" name="acountemail" id="acemail">
                                   <p class="imgmsg15" style="display:none;">This field is required Like - abc@gmail.com</p>
                                <input type="password" class="form-control" placeholder="Create password" name="accountpassword" id="password">
                                   <p class="imgmsg16" style="display:none;">This field is required</p>
                                <input type="password" class="form-control" placeholder="Confirm password" name="accountconpassword" id="confirm_password">
                                 <span id='message'></span>
                                 
                                <!-- <p class="logindata" data-toggle="modal" data-target="#myModal2">already have account click here for login</p>-->
                            </div>
                        <?php
                        }
                        else if ($userdisplayname != "")
                        {
                        ?>
                           <div class="col-md-3">
                                <!-- <h4>Sing in With your social Account:</h4>
                                <?php echo do_shortcode('[oa_social_login]') ?> -->
                            </div>
                            <div class="col-md-4">
                                <h4>Your account details:</h4>
                                <?php
                                
                    $current_user = wp_get_current_user();
                   
                    $loginname=$current_user->user_login;
                    $loginusername= $current_user->user_email;
                    $loginpassword= $current_user->user_pass;
                    $loginfname=$current_user->user_firstname;
                    $loginlname=$current_user->user_lastname;
                    $userdisplayname=$current_user->display_name;
                    $loginuserid=$current_user->ID;
                ?>
                           
                                <!--<em>Already have an account? <a href="#" class="switch-to-login from-register">Login here.</a></em>-->
                                <input type="text" class="form-control" placeholder="First Name" name="accountname" id="acn" value="<?php echo $loginfname ?>">
                                   <p class="imgmsg13" style="display:none;">This field is required</p>
                                <input type="text" class="form-control" placeholder="Last Name" name="accountlname" id="aclna" value="<?php echo $loginlname; ?>">
                                   <p class="imgmsg14" style="display:none;">This field is required</p>
                                <input type="text" class="form-control" placeholder="Email" name="acountemail" id="acemail" value="<?php echo $loginusername; ?>">
                                   <p class="imgmsg15" style="display:none;">This field is required Like - abc@gmail.com</p>
                                <input type="hidden" class="form-control" placeholder="Create password" name="accountpassword" id="password"value="<?php echo $loginpassword; ?>">
                                   
                                <input type="hidden" class="form-control" placeholder="Confirm password" name="accountconpassword" id="$user_pass" value="<?php echo $loginpassword; ?>">
                                 
                                 
                                <!-- <p class="logindata" data-toggle="modal" data-target="#myModal2">already have account click here for login</p>-->
                            </div>  
                        <?php  } ?>   
                        </div>
                        <div class="space80"></div>
                        <a href="#" class="red_btn prev_btn prevtab prevtodata"><i class="fa fa-angle-left" aria-hidden="true"></i>PREVIOUS</a>
                          <?php
                        if(($_SESSION['id']!=''))
                        {
                        ?>
                         <div class="space10"></div>
                        <a class="red_btn next_btn nexttab">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <?php
                        }
                        else if(($_SESSION['id'] =='' && $userdisplayname == ""))
                        {
                        ?>
                             <button type="button" name="submit" class="red_btn" id="inforeg" style="display:block">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></button>

                       <!-- <a class="red_btn next_btn nexttab" id="info">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
                        <a class="red_btn next_btn" id="inforegsed" style="display:none">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        <a class="red_btn next_btn nexttab" id="sec1" style="display:none">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                       <?php
                        }
                        else if(($userdisplayname != ""))
                        {
                        ?>
                         <a class="red_btn next_btn nexttab" id="sec1" style="display:block">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                       <?php
                       }
                       ?> 
                       <!-- <a href="#" class="red_btn next_btn nexttab">NEXT<i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
                    </div>
                    <div class="tab-pane" id="menu3">
                        <div class="row">
                              <div class="col-md-7">
                                  <h4>Would you like to share your memorial with others, or keep it private? <i>(This can be changed later.)</i></h4>
                                  <div class="radio_class">
                                      <div class="radio radio-inline">
                                          <input type="radio" id="inlineRadio1" value="private" name="radioInline">
                                          <label for="inlineRadio1"> Keep it private </label>
                                      </div>
                                      <div class="radio radio-inline">
                                          <input type="radio" id="inlineRadio2" value="public" name="radioInline"  checked="">
                                          <label for="inlineRadio2"> Make it public </label>
                                      </div>
                                  </div>
                                  <h4>Accept/Agree Guidelines . You can read  <a href="<?php echo get_site_url(); ?>/term-and-condition/" target="blank"> Terms and Conditions here.</a></h4>
                                  <div class="radio_class">
                                      <div class="radio radio-inline">
                                          <input type="radio" id="inlineRadio3" value="option1" name="radioInline1" checked="">
                                          <label for="inlineRadio3"> I Agree </label>
                                      </div>
                                  </div>
                                  
                                  
                                  
                                  
                                  
                                  <div class="space120"></div>
                                  <input type="submit" class="red_btn red_btn1" name="subbtnlastfirst" value="CREATE MEMORIAL"> 
                                 <!-- <a href="" class="red_btn red_btn1">create memorial</a>-->
                                  <a href="" class="go_back">or go back and edit information</a>
                              </div>
                              <div class="col-md-5">
                                  <div class="pull-right">
                                  <h4>Memorial Preview</h4>
                                   <?php
                                      $args_slider = array( 'post_type' => 'templates', 'posts_per_page' => 1, 'order' => 'DESC');
                                      $loop_slider = new WP_Query( $args_slider );
                                      while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                                      $id= get_the_ID();
                                    ?>
                                  <div id="testlast">
                                       <img class="img-fluid feature_img" alt="img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id());  ?>">
                                <!--  <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_page.png">-->
                                  </div>
                                  <?php
                                  endwhile;
                                  ?>
                                  </div>
                              </div>
                        </div>
                        <div class="space30"></div>
                        <a href="#" class="red_btn prev_btn prevtab"><i class="fa fa-angle-left" aria-hidden="true"></i>PREVIOUS</a>
                    </div>
                    
                  </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #test img.img-fluid.feature_img {
    box-shadow: 0px 3px 9px 3px #ccc;
}
p#valid {
    color: red;
    margin-top: -31px;
  }
p.signtitle {
    margin-top: 30px;
    font-size: 23px;
    text-decoration: underline;
}
div#testlast img {
    height: 376px;
    width: 72%;
    box-shadow: 1px 1px 12px 4px #ccc;
}
input.red_btn.red_btn1 {
    border: none;
}
button#info {
    float: right;
    max-width: 165px;
    height: 40px;
    font-size: 16px;
    font-family: 'SF-Pro-Display-Bold';
    line-height: 40px;
    border: none;
}
label.error {
    color: red;
    margin-top: -31px;
    position: absolute;
    /* float: right; */
}
a#info1 {
    color: #fff;
}
p.dateval2 {
    color: red;
    margin-top: -21px;
}
a#sec,a#inforegsed,a#sec1 {
    color: #fff;
}
p.dateval1 {
    color: red;
    margin-top: -19px;
}
button#inforeg {
     float: right;
    max-width: 165px;
    height: 40px;
    font-size: 16px;
    font-family: 'SF-Pro-Display-Bold';
    line-height: 40px;
    border: none;
}
p.imgmsg {
    color: red;
}
p.weburl {
    font-size: 15px;
}
.purchase_modal.modal {
   
    z-index: 9999;
}
p.imgmsg1,p.imgmsg2,p.imgmsg3,p.imgmsg4,p.imgmsg5,p.imgmsg7,p.imgmsg8,p.imgmsg9,p.imgmsg10,p.imgmsg11,p.imgmsg12,p.imgmsg13,p.imgmsg14,p.imgmsg15,p.imgmsg16  {
    color: red;
    margin-top: -23px;
}
p.imgmsg6
{
  color: red;
    margin-top: 0px;  
}
a.red_btn.next_btn.nexttab {
    color: #fff;
}
.red_btn {
    cursor: pointer;
}
</style>

  <?php
endwhile;
endif;
?>
<?php
}
?>
        <div class="modal modal_popup" id="myModal2">
            <div class="modal-dialog">
             <div class="modal-content">
              <form method="post" id="contcatsubmit">
               <!-- Modal Header -->
                <div class="modal-header">
                 <button type="button" class="close btn_close_class" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login Form</h4>
                </div>
                 <!-- Modal body -->
                   <div class="modal-body">
                     <div class="form-group">  
                     <div class="col-md-12 col-lg-12 col-12 ">
                     <input type="text" name="email" value="" class="modalform" id="adminemail" placeholder="Email address">
                     </div>
                     <div class="col-md-12 col-lg-12 col-12 ">
                     <input type="password" name="password" value="" class="modalform" id="adminpass" placeholder="Password">
                    </div>
                    </div>
                   </div>
                 <!-- Modal footer -->
                <div class="modal-footer">
               <button type="button" class="btn btn_submit" id="logindata" data-dismiss="modal">Login</button>
              </div>
            </form>
           </div>
        </div>
    </div>
<style>
    p.dateval {
    text-align: center;
    color: red;
    margin-top: -16px;
}
p#valid {
    color: red;
    margin-top: -31px;
  }
</style>
<!-- javascript libraries -->

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script type="text/javascript">
     
     
        $('.nexttab').click(function(){
          $(this).parents('.tab-pane').removeClass('show active');
          $(this).parents('.tab-pane').next().addClass('show active'); 
           $(this).parents('.create_main').siblings('.testi_sec').find('a.active').parents('li').next('li').find('.nav-link').trigger('click');
            
        });

      $('.prevtab').click(function(){
        $(this).parents('.tab-pane').removeClass('show active');
        $(this).parents('.tab-pane').prev().addClass('show active');
        $(this).parents('.create_main').siblings('.testi_sec').find('a.active').parents('li').prev('li').find('.nav-link').trigger('click');
      });
    </script>
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
      e1.preventDefault();
      var idthm =  jQuery(this).attr('href');
        jQuery(".themeidint").html('');
       $('.themeidint').html('<input type="hidden" class="themeid" name="themeid" value="' +  idthm + '">');  
       /*alert("Template is selected")*/
        /*$("#myModal").modal('show');*/
        swal("Template is selected");
        swal(" ", "Template is selected", "success");
  });   
</script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
  $("#contact_form1").validate({
  rules: {
      fname: {
          required: true
      },
      lname:{
        required:true
       },
      deathdate:{
        required:true
      },

      birthdate:{
        required:true
      },
       rphone:{
        required:true
      },
      mname:{
        required:true
      },
      nname:{
        required:true
      },
      rfname:{
        required:true
      },
       rsurname:{
        required:true
      },
       radd:{
        required:true
      },
       webaddress:{
        required:true
      },
        rsurname:{
        required:true
      },
       florida:{
        required:true
      },
      accountname:{
        required:true
      },
       accountlname:{
        required:true
      },
       acountemail:{
        required:true
      },
       accountpassword:{
        required:true
      },
      
  },
  messages: {
  fname: {
     fname: 'Please Enter First Name'
  },
  lname:{
    required:'Please Enter Last Name'
   },
  deathdate:{
    required:'Please Enter Death Date'
  },
   birthdate:{
    required:'Please Enter Birth Date'
  },
  radd:{
    required:'Please Enter relative Address'
  },
  mname:{
    required:'Please Enter Middle Name'
  },
  niname:{
    required:'Please Enter Nick name'
  },
   rphone:{
    required:'Please Enter Phone Number'
  },
  rfname:{
     required:'Please Enter relative First name'
  },
  rsurname:{
     required:'Please Enter Phone Number'
  },
       florida:{
        required:'Please Enter Alternative Phone Number'
      },
      
       accountname:{
        required:'Please Enter Name'
      },
       accountlname:{
        required:'Please Enter Last Name'
      },
       acountemail:{
        required:'Please Email Id'
      },
       accountpassword:{
        required:'Please password'
      },
      
  },
  submitHandler: function (form) {
      form.submit();
  }
});
</script>

<script type="text/javascript">
  $('.navbar-nav li').addClass('nav-item');
  $('.navbar-nav li a').addClass('nav-link');

        
</script>
  <script type="text/javascript">  
        $(".rnum").keydown(function (e) {
           
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                
                 return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    </script> 
<script>
      
    $('#info').click(function(){
        if($("input").val() != "")
       {
           $("#info").css("display","none");
         /*  $("#inforegsed").css("display","block");
         $("#inforegsed").removeClass("nexttab");*/
      
       }
       else if(("input").val() != "")
        {
           $("#info1").addClass('nexttab'); 
     
        }
         });  
         
    $('#info').click(function(){
        if( document.getElementById("videoUploadFile").files.length != 0 ){
     $(".imgmsg6").css("display","none");
     
}
             var fname= $("#usr").val();
             var laname= $("#lname").val();
             var mname= $("#mname").val();
             var niname= $("#niname").val();
             var rfname= $("#rfname").val();
             var rsurname= $("#rsurname").val();
               var radd= $("#radd").val();
                var remail= $("#remail").val();
                 var rpnm= $("#rpnm").val();
                  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                 var profile= $("#videoUploadFile").val();
                    var weaddress= $("#weaddress").val();
                     var rphone= $("#rphone").val();
                     var valeemail= $(".emailval").val();
                     
                     var birthdatecheck= $("#birthdatecheck").val();
                     var dathdatecheck= $("#dathdatecheck").val();
                     
                 if(birthdatecheck < dathdatecheck)
                    {
              $(".dateval").css("display","none")
              $(".dateval1").css("display","none")
              $(".dateval2").css("display","none")
                   }
                   else if(birthdatecheck == ""){
                    $(".dateval1").css("display","block")
                   }
                  
                   else
                   {
                        $(".dateval1").css("display","none")
                        $(".dateval").css("display","block")
                   }
                   
                    
             if(dathdatecheck == "")
             {
                 $(".dateval2").css("display","block")
             }
             if(birthdatecheck == "")
             {
                 $(".dateval1").css("display","block")
             }
             if(fname == "")
             {
                 $(".imgmsg1").css("display","block");
             }
              if(laname == "")
             {
                 $(".imgmsg2").css("display","block");
             }
             if(mname == "")
             {
                 $(".imgmsg3").css("display","block");
             }
             if(niname == "")
             {
                 $(".imgmsg4").css("display","block");
             }
             if(weaddress == "")
             {
                 $(".imgmsg5").css("display","block");
             }
             if(profile == "")
             {
                 $(".imgmsg6").css("display","block");
             }
             if(rphone == "")
             {
                 $(".imgmsg7").css("display","block");
             }
             if(rfname == "")
             {
                 $(".imgmsg8").css("display","block");
             }
             if(rsurname == "")
             {
                 $(".imgmsg9").css("display","block");
             }
              if(radd == "")
             {
                 $(".imgmsg10").css("display","block");
             }
              if(remail == "")
             {
                 $(".imgmsg11").css("display","block");
             }
              if(rpnm == "")
             {
                 $(".imgmsg12").css("display","block");
             }
             if(fname == "" || laname == "" || mname == "" || niname == "" || rfname == "" || rsurname == "" || radd == "" || remail == "" || rpnm == "" || profile == "" || birthdatecheck == "" || dathdatecheck == "" || birthdatecheck > dathdatecheck || valeemail== "not")
             {
               $("#info").css("display","block");
                  $("#info1").removeClass("nexttab");
                /*   $(".imgmsg1").css("display","block");*/
                
                
             }
             
            else if(fname != "" || laname != "" || mname != ""  || niname != "" || rfname != "" || rsurname != "" || radd != "" || remail != "" || rpnm != "" || profile != "" || birthdatecheck != "" || dathdatecheck != "" || birthdatecheck < dathdatecheck || valeemail == " ")
            {
                 /*$("#myModal1").modal('show');*/
              
                 swal("Done!", "All data filled Sucessfully!", "success");
                 /*alert("All data filled Sucessfully")*/
                 $("#info").css("display","none");
                $("#sec").css("display","block");
               /*$("#info").css("display","none");*/
               
              
         
            }
         });
         
</script>
<script>
    $("#usr").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg1").css("display","none");
                }   
            });
    $("#lname").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg2").css("display","none");
                }   
    });
     $("#mname").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg3").css("display","none");
                }   
    });
    $("#niname").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg4").css("display","none");
                }   
    });
    $("#weaddress").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg5").css("display","none");
                }   
    });
    $("#videoUploadFile").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg6").css("display","none");
                }   
    });
     $("#rphone").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg7").css("display","none");
                }   
    });
     $("#rfname").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg8").css("display","none");
                }   
    });
     $("#rfname").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg8").css("display","none");
                }   
    });
      $("#rsurname").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg9").css("display","none");
                }   
    });
     $("#radd").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg10").css("display","none");
                }   
    });
     $("#remail").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg11").css("display","none");
                }   
    });
     $("#rpnm").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg12").css("display","none");
                }   
    });
    
    
</script>
<script>
      
    $('#inforeg').click(function(){
     
  

        if($("input").val() != "")
       {
           $("#inforeg").css("display","block");
           $(".imgmsg1").css("display","block");
          /* $("#inforegsed").css("display","block");
         $("#inforegsed").removeClass("nexttab");*/
      
       }
       else if(("input").val() != "")
        {
            
           $("#inforegsed").addClass('nexttab'); 
     
        }
         });  
         
    $('#inforeg').click(function(){


             var acn= $("#acn").val();
             var aclna= $("#aclna").val();
             var acemail= $("#acemail").val();
             var password= $("#password").val();
             
                 if(acn == "")
             {
                 $(".imgmsg13").css("display","block");
             }
              if(aclna == "")
             {
                 $(".imgmsg14").css("display","block");
             }
             if(acemail == "")
             {
                 $(".imgmsg15").css("display","block");
             }
             if(password == "")
             {
                 $(".imgmsg16").css("display","block");
             }
             if(acn == "" || aclna == "" || acemail == "" || password == "")
             {
                 
              $("#inforegsed").css("display","none");
              
                  $("#info1").removeClass("nexttab");
                  
             }
            else if(acn != "" || aclna != "" || acemail != ""  || password != "")
            {
               /*  alert("All data filled Sucessfully")*/
                 $("#inforegsed").css("display","none");
               /* $("#sec1").css("display","block");*/
              
         
            }
        
             
    $("#acn").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg13").css("display","none");
                }   
            });
    $("#aclna").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg14").css("display","none");
                }   
    });
     $("#acemail").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg15").css("display","none");
                }   
    });
    $("#password").keyup(function() {
                var input = $(this);

                if( input.val() != "" ) {
                  $(".imgmsg16").css("display","none");
                }   
    });
         });
         
</script>
<script>

var validateEmail = function(elementValue) {
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(elementValue);
}

    $('#acn, #aclna, #acemail,#password,#confirm_password').on('keyup', function () {
       /* $("#inforeg").css("display","none");
                
                $("#sec1").css("display","block");*/
                  $val=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(acemail.value);
                  if($val == false)
                  {
                  	$('.imgmsg15').html("Invalid email id");
                  }
                  
          if ($('#acn').val() != "" && $('#aclna').val() != "" && $('#acemail').val() != "" && $('#password').val() != "" && $('#password').val() == $('#confirm_password').val() && $val == true) {   
               $("#sec1").css("display","block");
               $("#inforeg").css("display","none"); 
          }
         
         
         
              
 
});






$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
    
  } else 
    $('#message').html('Not Matching').css('color', 'red');
    
});
</script>

<script>
    $(document).ready(function() {

  $('#selection').on('change', function() {
    change($(this).val());
     sessionStorage.setItem("song", $(this).val());
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
<script>
  $('.firsttab').click(function(){
     $(".firtab").attr("href","#home");
 $(".sectab").attr("href","#menu1");
  });
    $('.abc').click(function(){
      $(".sectab").attr("href","#menu1");
       $(".thirdtab").attr("href","#menu2");
 
  });
  
    $('#sec1').click(function(){
       $(".thirdtab").attr("href","#menu2");
        $(".forttab").attr("href","#menu3");
 
  });
   
</script>
<script>
    var searchRequest = null;

$(function () {
    var minlength = 3;

    $("#acemail").keyup(function () {
        
        var that = this,
        value = $(this).val();
 if (value.length >= minlength ) {
            if (searchRequest != null) 
                searchRequest.abort();
            searchRequest = $.ajax({
                type: "GET",
                url: " <?php echo get_site_url().'/compareemail.php'; ?>",
               data: {'search_keyword' : value },
                dataType: "text",
                success: function(msg){
                  
                    
                    jQuery(".imgmsg15").css('display','block');
                     jQuery(".imgmsg15").html('');
                     jQuery(".imgmsg15").html(msg);
                    //we need to check if the value is the same
                    if (value==$(that).val()) {
                    //Receiving the result of search here
                    }
                }
            });
        }
    });
});
</script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#birthdatecheck" ).datepicker({
        
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'dd/m/yy',
           autoclose:true,
            endDate: "today",
             maxDate: '0'



    });
     $( "#dathdatecheck" ).datepicker({
          changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'dd/m/yy',
           autoclose:true,
            endDate: "today",
             maxDate: '0'
     });
     
    
  } );
  
  </script>
  <script>
    var searchRequest = null;

$(function () {
    var minlength = 3;

    $("#weaddress").keyup(function () {
        
        var that = this,
        value = $(this).val();
 if (value.length >= minlength ) {
            if (searchRequest != null) 
                searchRequest.abort();
            searchRequest = $.ajax({
                type: "GET",
                url: " <?php echo get_site_url().'/checkwebaddress.php'; ?>",
               data: {'search_keyword' : value },
                dataType: "text",
                success: function(msg){
                
                    jQuery(".imgmsg5").css('display','block');
                     jQuery(".imgmsg5").html('');
                     jQuery(".imgmsg5").html(msg);
                    //we need to check if the value is the same
                    if (value==$(that).val()) {
                    //Receiving the result of search here
                    }
                }
            });
        }
    });
});
</script>
<script>
var x = document.getElementById("player"); 
function pauseAudio() { 
    x.pause(); 
  } 
</script>
<script type="text/javascript">
$("#logindata").click(function(){
   var adminemail = $("#adminemail").val();
  var adminpass = $("#adminpass").val();
 
  jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/createlogin.php'; ?>",
        data:{'adminemail': adminemail,'adminpass': adminpass},
        success: function(data)
        {
        
        }
        });
            });   
      
  
</script>
<script>
 $('.prevtodata').click(function(){
    
      $("#info").css("display","block");
       $("#sec").css("display","none");
 });

 $('#button_facebook').click(function(){
 alert();
 });
</script>
<script>
$('input[name="radioInline8"]').on('change', function(){
    sessionStorage.setItem('gender', $(this).val());

});

  $('#sel1').on('change', function() {
    change($(this).val());
     sessionStorage.setItem("relaion", $(this).val());
  });
</script>
<script>
 $('.firsttab').click(function(){

 sessionStorage.setItem("themeid", $('.themeid').val());
   
});


 $('.abc').click(function(){
 sessionStorage.setItem("fname", $('#usr').val());
  sessionStorage.setItem("lname", $('#lname').val());
sessionStorage.setItem("mname", $('#mname').val());
sessionStorage.setItem("niname", $('#niname').val());
sessionStorage.setItem("niname", $('#niname').val());
sessionStorage.setItem("dod", $('#dathdatecheck').val());
sessionStorage.setItem("dob", $('#birthdatecheck').val());
sessionStorage.setItem("weaddress", $('#weaddress').val());
sessionStorage.setItem("weaddress", $('#weaddress').val());

sessionStorage.setItem("rphone", $('#rphone').val());
sessionStorage.setItem("rfname", $('#rfname').val());
sessionStorage.setItem("rsurname", $('#rsurname').val());
sessionStorage.setItem("radd", $('#radd').val());
sessionStorage.setItem("remail", $('#remail').val());
sessionStorage.setItem("rpnm", $('#rpnm').val());

var property = document.getElementById("videoUploadFile").files[0];
var image_name=property.name;
var image_extension=image_name.split('.').pop().toLowerCase();
var image_size=property.size;

var dataimg = new FormData();
dataimg.append("videoUploadFile",property);



 $.ajax({
        url: "<?php echo get_site_url().'/insertmemorydata.php'; ?>",
        data: dataimg, 
        contentType: false,        
        cache: false,             
        processData:false,
        type: 'post',
        success: function(data){
          
        }
    });
        



});
window.onload = function() {

    var themeid = sessionStorage.getItem("themeid");
   if (themeid !== null) $('.themeid').val(themeid);
   var song = sessionStorage.getItem("song");
   if (song !== null) $('#selection').val(song);
    var fname = sessionStorage.getItem("fname");
   if (fname !== null) $('#usr').val(fname);
   var lname = sessionStorage.getItem("lname");
   if (lname !== null) $('#lname').val(lname);
   var mname = sessionStorage.getItem("mname");
    if (mname !== null) $('#mname').val(mname);
    var niname = sessionStorage.getItem("niname");
    if (niname !== null) $('#niname').val(niname);
     var niname = sessionStorage.getItem("niname");
    if (niname !== null) $('#niname').val(niname);

    var dod = sessionStorage.getItem("dod");
    if (dod !== null) $('#dathdatecheck').val(dod);
    var dob = sessionStorage.getItem("dob");
    if (dob !== null) $('#birthdatecheck').val(dob);
    var dob = sessionStorage.getItem("dob");
    if (dob !== null) $('#birthdatecheck').val(dob);
    var weaddress = sessionStorage.getItem("weaddress");
    if (weaddress !== null) $('#weaddress').val(weaddress);

   

      var relaion = sessionStorage.getItem("relaion");
   if (relaion !== null) $('#sel1').val(relaion);

     var rphone = sessionStorage.getItem("rphone");
   if (rphone !== null) $('#rphone').val(rphone);
    var rfname = sessionStorage.getItem("rfname");
   if (rfname !== null) $('#rfname').val(rfname);

   var rsurname = sessionStorage.getItem("rsurname");
   if (rsurname !== null) $('#rsurname').val(rsurname);
  
var radd = sessionStorage.getItem("radd");
   if (radd !== null) $('#radd').val(radd);
 
var remail = sessionStorage.getItem("remail");
   if (remail !== null) $('#remail').val(remail);

   var rpnm = sessionStorage.getItem("rpnm");
   if (rpnm !== null) $('#rpnm').val(rpnm);
    
var radios = document.getElementsByName("radioInline8");
  var val = sessionStorage.getItem('radioInline8');
  for(var i=0;i<radios.length;i++){
    if(radios[i].value == val){
      radios[i].checked = true;
    }
  }

}

 $('#provider_facebook').click(function(){
 


 $.ajax({
        url: "<?php echo get_site_url().'/loginwithsocial.php'; ?>",
        data: dataimg, 
        contentType: false,        
        cache: false,             
        processData:false,
        type: 'post',
        success: function(data){
          
        }
    });
 });

</script>
 <script src='<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-input-file-text.js'></script>
<script>
 $(document).ready(function() {
     $('#videoUploadFile').inputFileText( { text: 'select image' } );
 });

 function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
        
        $(".imgmsg19").css("display","block");
            return false;
             $("#info").css("display","block");
                $("#sec").css("display","none");
           
        }

        return true;

}

$('#remail').on('keyup', function(){
    var valid = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(this.value) && this.value.length;
    $('#valid').html('It\'s'+ (valid?'':' not') +' valid Email Address');
    $('.emailval').val(valid?'':'not');
});
</script>
</body>
</html>