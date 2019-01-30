<?php
global $session;
session_start();
/**
 * Template Name: admin
 **/
get_header();
?>
<style>
    .package_sec1 {
    background: url(<?php echo get_stylesheet_directory_uri(); ?>/img/package_bg.png)no-repeat;
    background-size: cover;
    background-position: center;
    padding: 100px 0;
    color: #ffffff;
}
</style>
 <?php
                        if(($_SESSION['id']!=''))
                        {
                            $id =  $_SESSION['id'];
                        }
                        ?>
    <?php
    $query = $wpdb->get_results("SELECT * from wp_tribute where id= $id");
    $fname=($query[0]->accountname!='')?$query[0]->accountname:"";
     $lname=($query[0]->accountlname!='')?$query[0]->accountlname:"";
      $acountemail=($query[0]->acountemail!='')?$query[0]->acountemail:"";
       $acountpass=($query[0]->accountpassword!='')?$query[0]->accountpassword:"";
        $acountpass=($query[0]->accountpassword!='')?$query[0]->accountpassword:"";
         $privacy=($query[0]->privacy!='')?$query[0]->privacy:"";
         $emailnoti=($query[0]->email_notification!='')?$query[0]->email_notification:"";
         $package=($query[0]->package!='')?$query[0]->package:"";
          $themeid=($query[0]->themeid!='')?$query[0]->themeid:"";
          /*print_r($themeid)*/
?>
 <?php
 if(isset($_REQUEST['subbutton']))
{
 $accountemail=isset($_POST['accountemail'])?$_POST['accountemail']:'';
  $password=isset($_POST['password'])?$_POST['password']:'';
  $emailnotification=isset($_POST['radioInline'])?$_POST['radioInline']:'';
   $memorypriv=isset($_POST['radioInline1'])?$_POST['radioInline1']:'';
   
 $wpdb->query("UPDATE wp_tribute  SET acountemail = '$accountemail', accountpassword = '$password',email_notification = '$emailnotification', privacy = '$memorypriv' WHERE id='$id'");
 
 if($emailnotification == "enable")
 {
  $to2= $accountemail;


$subject2 = 'Memorial Data Successfull Updated';

$messages2 = '
   <html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
  <title>You have New Message</title>
  </head>
  <body>
 <div style="">
<table width="503" style="background-color:#89cbe3;border: 1px dashed #00adef;font-size: 21px;    border-radius: 1px;">
<tbody>
<tr style="background:#89cbe3;color:#ffffff;border-bottom:5px solid #00adef;word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding:0;padding-top:10px;text-align:center;margin-bottom:0px" valign="top">
  
</tr>
<tr style="color: white;">

<td align="center" colspan="2">Memorial Data Successfull Updated</td>
</tr>
</tbody>
</table>
<table width="503" style="background-color: white;    border: 1px dashed;    font-size: 21px;    border-radius: 1px;">
<tbody> 
    <tr>
      <td><b>User Name:</b></td>
      <td>'.$fname.'</td>
    </tr>
    <tr>
      <td><b>New User Name:</b></td>
      <td>'.$accountemail.'</td>
    </tr>
    <tr>
      <td><b>New Password:</b></td>
      <td>'.$password.'</td>
    </tr>
 
 </table>
 </div>
  </body>
  </html>
';

$headers2 = "MIME-Version: 1.0" . "\r\n";
$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers2 .= 'From: '.$sender_name.' <'.$sender_email.'>' . "\r\n";

if(mail($to2,$subject2,$messages2,$headers2))
{
$msg2 = '<span style="color:#32CD32; font-size:16px;margin-left: 14px;">Thank you...Your message has been submitted to us. We will be in touch shortly.</span>';
  // send mail end ======================================================
}
    
}
}
 ?>


 

<?php
$postid4 = 238;
$post4 = get_post( $postid4 );

if($themeid == $postid4)
{
    $back=wp_get_attachment_url( get_post_thumbnail_id( $post4));
?>


<?php
}

?>
<?php
$postid3 = 242;
$post3 = get_post( $postid3 );
if($themeid == $postid3)
{
    $back=wp_get_attachment_url( get_post_thumbnail_id( $post3));
  
?>

<?php
}

?>
<?php
$postid2 = 240;
$post2 = get_post( $postid2 );
if($themeid == $postid2)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post2));
?>

<?php
}

?>
<?php
$postid1 = 236;
$post1 = get_post( $postid1 );

if($themeid == $postid1)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post1));
?>
<?php
}

?>
<?php
$postid = 230;
$post = get_post( $postid );

if($themeid == $postid)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
?>


<?php
}

?>
<?php
$postid = 230;
$post = get_post( $postid );

if($themeid == $postid)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
?>


<?php
}

?>
<?php
$postid = 443;
$post = get_post( $postid );

if($themeid == $postid)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
?>


<?php
}

?>
<?php
$postid = 449;
$post = get_post( $postid );

if($themeid == $postid)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
?>


<?php
}

?>
<?php
$postid = 457;
$post = get_post( $postid );

if($themeid == $postid)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
?>


<?php
}

?>
<?php
$postid = 461;
$post = get_post( $postid );

if($themeid == $postid)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
?>


<?php
}

?>
<?php
$postid = 466;
$post = get_post( $postid );

if($themeid == $postid)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
?>


<?php
}

?>
<?php
$postid = 470;
$post = get_post( $postid );

if($themeid == $postid)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
?>


<?php
}

?>
<?php
$postid = 474;
$post = get_post( $postid );

if($themeid == $postid)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
?>


<?php
}

?>
<?php
$postid = 480;
$post = get_post( $postid );

if($themeid == $postid)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
?>


<?php
}

?>
<?php
$postid = 484;
$post = get_post( $postid );

if($themeid == $postid)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
?>


<?php
}

?>
<?php
$postid = 488;
$post = get_post( $postid );

if($themeid == $postid)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
?>


<?php
}

?>
<?php
$postid = 492;
$post = get_post( $postid );

if($themeid == $postid)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
?>


<?php
}

?>
<?php
$postid = 496;
$post = get_post( $postid );

if($themeid == $postid)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
?>


<?php
}

?>
<?php
$postid = 501;
$post = get_post( $postid );

if($themeid == $postid)
{
     $back=wp_get_attachment_url( get_post_thumbnail_id( $post));
?>


<?php
}

?>
<section class="package_sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Welcome, <?php echo $fname; ?> <?php echo $lname; ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="welcome_main">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="acc_box mar_class">
                    <h3>My Account</h3>
                    <div class="media">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Ellipse-2.png" alt="img">
                      <div class="media-body">
                        <h4><?php echo $fname ?></h4>
                        <p>User Level Administrator</p>
                      </div>
                    </div>
                    <form action="" method="post">
                    <div class="form-group row">
                        <div class="col-md-9 col-lg-10 col-9 pad_right10">
                            <span class="right_text">Email</span> 
                           <input type="email" class="form-control" id="checkemail" name="accountemail" placeholder="<?php echo $acountemail; ?>" value="<?php echo $acountemail; ?>" disabled="disabled">
                           <p class="checkexiest" style="display:none;"></p>
                        </div>
                        <div class="col-md-3 col-lg-2 col-3 pad_left10">
                            <label for="txt1" class="label_text chng">Change</label>
                           
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-md-9 col-lg-10 col-9 pad_right10">
                            <span class="right_text password_text">Password</span>
                           <input type="Password" class="form-control pwd" id="password" name="password" placeholder="" value="<?php echo  $acountpass; ?>"> 
                           <span toggle="#password-field" class="fa fa-fw field-icon toggle-password fa-eye-slash"></span>
                            
                        </div>
                        
                        <div class="col-md-3 col-lg-2 col-3 pad_left10">
                            <label for="txt1" class="label_text">Change</label>
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-md-9 col-lg-10 col-9 pad_right10">
                            <span class="right_text password_text">Confirm Password</span>
                            <input type="password" class="form-control pwd" placeholder="Confirm password" name="accountconpassword" id="confirm_password">
                          <!-- <input type="Password" class="form-control pwd" id="txt1" name="password" placeholder="" value="<?php echo  $acountpass; ?>"> -->
                           <!--<span toggle="#password-field" class="fa fa-fw field-icon toggle-password fa-eye-slash"></span>-->
                             <span id='message'></span>
                        </div>
                        
                        <!--<div class="col-md-3 col-lg-2 col-3 pad_left10">
                            <label for="txt1" class="label_text">Change</label>
                        </div>-->
                    </div>
                    
                      
                    <div class="p_class_new">
                        
                        <?php
                         $msg9 = $wpdb->get_results("SELECT * FROM `wp_tribute` Where `id` = $id");
                          foreach($msg9 as $val9)
                            {
                                 $plan=$val9->package;
                                 if($plan == premium)
                                 {
                            ?> 
                            <?php
                 $msg11 = $wpdb->get_results("SELECT count(*) as counts FROM `wp_userslist` Where `memberid` = $id order by `uid` desc");
                
                  foreach($msg11 as $val11)
                            {
                                $count=$val11->counts;
                                if($count <= 4)
                                {
                            ?>
                          <li class="list-inline-item"><a href="#" class="red_text"  data-toggle="modal" data-target="#myModal2">Add Account Contact</a></li>
                          <?php
                                }
                            }
                            }
                            }
                            ?>
                             
                   
                    <div class="space20"></div>
                    <p><a onclick="deletaccount(<?php echo $id ?>)" class="deltac">Delete Account</a></p>
                   </div>
                </div>
                <div class="acc_box">
                     
                   
                    <div class="form-group row">
                        <?php
                         $msg9 = $wpdb->get_results("SELECT * FROM `wp_tribute` Where `id` = $id");
                          foreach($msg9 as $val9)
                            {
                                 $plan=$val9->package;
                                 if($plan == premium)
                                 {
                            ?> 
                             <h3>Administrator & Permissions</h3>
                          <?php
                 $msg10 = $wpdb->get_results("SELECT * FROM `wp_userslist` Where `memberid` = $id order by `uid` desc");
                
                  foreach($msg10 as $val10)
                            {
                            ?>
                        <div class="col-md-9 col-lg-10 col-9 pad_right10 space">
                          
                            <span class="right_text">Email</span> 
                           <input type="email" class="form-control" id="txt1" placeholder="<?php echo $val10->username;  ?>">
                          
                        </div>
                         <br>
                         <?php
                           }
                                 }
                                 }
                           ?>
                          
                        <!--<div class="col-md-3 col-lg-2 col-3 pad_left10">
                            <label for="txt1" class="label_text">Change</label>
                        </div>-->
                    </div>
                    <div class="row">
                        <div class="col-md-5  pad_right0">
                            <span class="span_text-new">Email Notifications</span>
                        </div>
                        <div class="col-md-7 pad_left0">
                            <div class="radio_class">
                                <div class="radio radio-inline radio-inline-new">
                                    <input type="radio" id="inlineRadio1" value="enable" name="radioInline"  <?php if($emailnoti=="enable"){ echo "checked";}?>>
                                    <label for="inlineRadio1"> Enable </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input type="radio" id="inlineRadio2" value="disable" name="radioInline" <?php if($emailnoti=="disable"){ echo "checked";}?>>
                                    <label for="inlineRadio2"> Disable </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="acc_box">
                    <h3>Memorial Privacy</h3>
                    <div class="radio_class radio_class-new">
                        <div class="radio radio-inline">
                            <input type="radio" id="inlineRadio5" value="public" name="radioInline1"  <?php if($privacy=="public"){ echo "checked";}?>>
                            <label for="inlineRadio5"> All visitors can view and contribute. </label>
                        </div>
                        <p>Recommended for most websites. This option facilitates collaboration.</p>
                        <div class="radio radio-inline">
                            <input type="radio" id="inlineRadio6" value="private" name="radioInline1" <?php if($privacy=="private"){ echo "checked";}?>>
                            <label for="inlineRadio6"> Visible only to me </label>
                        </div>
                        <p>This option allows for maximum privacy</p>
                        <div class="radio radio-inline">
                            <input type="radio" id="inlineRadio7" value="friend" name="radioInline1" <?php if($privacy=="friend"){ echo "checked";}?>>
                            <label for="inlineRadio7"> Shared with family and friends </label>
                        </div>
                        <p>This option allows access to the people you choose, while keeping it hidden from public view</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <h4 class="manage_class">Manage Page</h4>
                <div class="row">
                    <div class="col-md-8">
                        <img class="img-fluid" alt="img" src="<?php echo $back; ?>">
                    </div>
                    <div class="col-md-4">
                        <ul class="list-unstyled">
                          <!--  <form method="post" action="<?php echo get_site_url(); ?>/admin-setting/">-->
                            <li><a href="<?php echo get_site_url(); ?>/admin-setting?id=1" class="setting_btn">Change Music</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/admin-setting?id=2" class="setting_btn">Change Template</a></li>
                            <li><a href="<?php echo get_site_url(); ?>/admin-setting?id=3" class="setting_btn">Edit Information</a></li>
                            <?php
                            if($package == basic)
                            {
                            ?>
                            <li><a href="<?php echo get_site_url(); ?>/plans-and-features" class="setting_btn">Upgrade</a></li>
                            <?php
                            }
                            ?>
                            <li><a href="" class="setting_btn">Another Setting</a></li>
                            <!--<li><a href="" class="red_btn next_btn save_new">Save</a></li>-->
                           <input type="submit" name="subbutton" class="red_btn next_btn save_new" value="Save">
                        </ul>
                    </div>
                </div>
                <h4 class="manage_class">Manage Posts</h4>
               
                <?php $query1 = $wpdb->get_results("SELECT * from wp_trubutenote where userid= $id order by trid desc"); 
                foreach($query1 as $val1)
                            {
                                 $tributty=$val1->tribute_type;
                                 $tribaction=$val1->tributeaction;
                                  $status=$val1->Approval;
                                  $trifname=$val1->trnfname;
                                  $trilname=$val1->trlname;
                                 $triid=$val1->trid;
                                 $blockstaus=$val1->block_status;
                            ?>
                              <?php
                              if($tribaction == leave_note)
                              {
                              ?>
                               <h5><?php echo $trifname; ?> <?php echo $trilname; ?> posted a Note.</h5>
                             <p class="main_new"><?php echo $val1->note; ?></p>
                              <ul class="list-inline list_new">
                                  <?php
                                  if($status == 0)
                                  {
                                  ?>
                                    <li class="list-inline-item"><a onclick="appr(<?php echo $val1->trid; ?>,1)" class="red_btn next_btn save_new save_new1">Approve</a></li>
                                    <?php
                                      }
                                      else if($status == 1)
                                      {
                                     ?>
                                     <li class="list-inline-item"><a onclick="appr(<?php echo $val1->trid; ?>,0)" class="red_btn next_btn green1 save_new save_new1">Approved</a></li>
                                     <?php
                                      }
                                      ?>
                                    <li class="list-inline-item"><a onclick="deletetri(<?php echo $triid ?>)" class="red_text">Delete</a></li>
                                    <?php
                                    if($blockstaus == unblock || $blockstaus == "" )
                                    {
                                    ?>
                                      <li class="list-inline-item"><a onclick="block('block','<?php echo $trifname; ?>','<?php echo $trilname; ?>')" class="red_text">Block “<?php echo $trifname ?> <?php echo $trilname ?>”</a></li>
                                   <?php
                                    }
                                    else  if($blockstaus == block)
                                    {
                                    ?>
                                     <li class="list-inline-item"><a onclick="block('unblock','<?php echo $trifname; ?>','<?php echo $trilname; ?>')" class="red_text">UnBlock “<?php echo $trifname ?> <?php echo $trilname ?>”</a></li>
                                    <?php
                                    }
                                    ?>
                                    <li class="list-inline-item"><a href="#" class="red_text"  data-toggle="modal" data-target="#myModal1">Profanity Check</a></li>
                                         <div class="modal modal_popup" id="myModal1">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                  <form method="post">
                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                        <button type="button" class="close btn_close_class" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Report This Ad</h4>
                                      </div>
                                
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                        <p class="p_text_modal"><span><!--<img class="img-fluid img_ex" alt="img" src="img/img_ex.png">--></span><span>Help us understand what's happening with this ad. How would you describe it?</span></p>
                                        <div class="inline_class">
                                          <div class="form-group">  
                                            <label class="btn">
                                              <input type="hidden" name="userfname" id="trfname" value="<?php echo $trifname; ?>">
                                                 <input type="hidden" name="user1name" id="trlname" value="<?php echo $trilname; ?>">
                                                  <input type="hidden" name="memberid" id="memberid" value="<?php echo $id; ?>">
                                              <span class="checkbox_class">Sexually Inappropriate</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Sexually Inappropriate" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Offensive</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Offensive" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Violence</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Violence" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Prohibited Content</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Prohibited Content" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Spam</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Spam" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">False News</span>
                                              <input type="checkbox" name="chk1" id="item4" value="False News" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn ">
                                              <span class="checkbox_class">Misleading or Scam</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Misleading or Scam" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Other</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Other" class="hidden input_chk" autocomplete="off">
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- Modal footer -->
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn_submit" data-dismiss="modal">SUBMIT</button>
                                      </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                </ul>
                            <?php
                              }
                              ?>
                            <?php
                              if($tributty == flower)
                              {
                              ?>
                               <h5><?php echo $trifname; ?> <?php echo $trilname; ?> posted a tribute.</h5>
                             <p class="main_new"><?php echo $val1->tributenote_first; ?></p>
                              <ul class="list-inline list_new">
                                  <?php
                                  if($status == 0)
                                  {
                                  ?>
                                    <li class="list-inline-item"><a onclick="appr(<?php echo $val1->trid; ?>,1)" class="red_btn next_btn save_new save_new1">Approve</a></li>
                                    <?php
                                      }
                                      else if($status == 1)
                                      {
                                     ?>
                                     <li class="list-inline-item"><a onclick="appr(<?php echo $val1->trid; ?>,0)" class="red_btn next_btn green1 save_new save_new1">Approved</a></li>
                                     <?php
                                      }
                                      ?>
                                    <li class="list-inline-item"><a onclick="deletetri(<?php echo $triid ?>)" class="red_text">Delete</a></li>
                                    
                                     <?php
                                    if($blockstaus == unblock || $blockstaus == "" )
                                    {
                                    ?>
                                      <li class="list-inline-item"><a onclick="block('block','<?php echo $trifname; ?>','<?php echo $trilname; ?>')" class="red_text">Block “<?php echo $trifname ?> <?php echo $trilname ?>”</a></li>
                                   <?php
                                    }
                                    else  if($blockstaus == block)
                                    {
                                    ?>
                                     <li class="list-inline-item"><a onclick="block('unblock','<?php echo $trifname; ?>','<?php echo $trilname; ?>')" class="red_text">UnBlock “<?php echo $trifname ?> <?php echo $trilname ?>”</a></li>
                                    <?php
                                    }
                                    ?>
                                    
                                    <li class="list-inline-item"><a href="#" class="red_text"  data-toggle="modal" data-target="#myModal1">Profanity Check</a></li>
                                         <div class="modal modal_popup" id="myModal1">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                  <form method="post">
                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                        <button type="button" class="close btn_close_class" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Report This Ad</h4>
                                      </div>
                                
                                      <!-- Modal body -->
                                         <div class="modal-body">
                                        <p class="p_text_modal"><span><!--<img class="img-fluid img_ex" alt="img" src="img/img_ex.png">--></span><span>Help us understand what's happening with this ad. How would you describe it?</span></p>
                                        <div class="inline_class">
                                          <div class="form-group">  
                                            <label class="btn">
                                              <input type="hidden" name="userfname" id="trfname" value="<?php echo $trifname; ?>">
                                                 <input type="hidden" name="user1name" id="trlname" value="<?php echo $trilname; ?>">
                                                  <input type="hidden" name="memberid" id="memberid" value="<?php echo $id; ?>">
                                              <span class="checkbox_class">Sexually Inappropriate</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Sexually Inappropriate" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Offensive</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Offensive" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Violence</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Violence" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Prohibited Content</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Prohibited Content" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Spam</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Spam" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">False News</span>
                                              <input type="checkbox" name="chk1" id="item4" value="False News" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn ">
                                              <span class="checkbox_class">Misleading or Scam</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Misleading or Scam" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Other</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Other" class="hidden input_chk" autocomplete="off">
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- Modal footer -->
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn_submit" data-dismiss="modal">SUBMIT</button>
                                      </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                </ul>
                            <?php
                              }
                              if($tributty == candle)
                               {
                               ?>
                                <h5><?php echo $trifname; ?> <?php echo $trilname; ?> posted a tribute.</h5>
                                <p class="main_new"><?php echo $val1->note; ?></p>
                                 <ul class="list-inline list_new">
                                      <?php
                                  if($status == 0)
                                  {
                                  ?>
                                    <li class="list-inline-item"><a onclick="appr(<?php echo $val1->trid; ?>,1)" class="red_btn next_btn save_new save_new1">Approve</a></li>
                                     <?php
                                      }
                                      else if($status == 1)
                                      {
                                     ?>
                                       <li class="list-inline-item"><a onclick="appr(<?php echo $val1->trid; ?>,0)" class="red_btn next_btn green1 save_new save_new1">Approved</a></li>
                                     <?php
                                      }
                                     ?>
                                    <li class="list-inline-item"><a onclick="deletetri(<?php echo $triid ?>)" class="red_text">Delete</a></li>
                                       <li class="list-inline-item"><a onclick="block('block','<?php echo $trifname; ?>','<?php echo $trilname; ?>')" class="red_text">Block “<?php echo $trifname ?> <?php echo $trilname ?>”</a></li>
                               
                                    <li class="list-inline-item"><a href="#" class="red_text"  data-toggle="modal" data-target="#myModal1">Profanity Check</a></li>
                                         <div class="modal modal_popup" id="myModal1">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                  <form method="post">
                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                        <button type="button" class="close btn_close_class" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Report This Ad</h4>
                                      </div>
                                
                                      <!-- Modal body -->
                                        <div class="modal-body">
                                        <p class="p_text_modal"><span><!--<img class="img-fluid img_ex" alt="img" src="img/img_ex.png">--></span><span>Help us understand what's happening with this ad. How would you describe it?</span></p>
                                        <div class="inline_class">
                                          <div class="form-group">  
                                            <label class="btn">
                                                <input type="hidden" name="userfname" id="trfname" value="<?php echo $trifname; ?>">
                                                 <input type="hidden" name="user1name" id="trlname" value="<?php echo $trilname; ?>">
                                                  <input type="hidden" name="memberid" id="memberid" value="<?php echo $id; ?>">
                                              <span class="checkbox_class">Sexually Inappropriate</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Sexually Inappropriate" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Offensive</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Offensive" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Violence</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Violence" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Prohibited Content</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Prohibited Content" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Spam</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Spam" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">False News</span>
                                              <input type="checkbox" name="chk1" id="item4" value="False News" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn ">
                                              <span class="checkbox_class">Misleading or Scam</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Misleading or Scam" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Other</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Other" class="hidden input_chk" autocomplete="off">
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- Modal footer -->
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn_submit" data-dismiss="modal">SUBMIT</button>
                                      </div>
                                </form>
                                    </div>
                                  </div>
                                </div>
                                </ul>
                                <?php
                               }
                                if($tributty == feather)
                               {
                               ?>
                                <h5><?php echo $trifname; ?> <?php echo $trilname; ?> posted a tribute.</h5>
                                <p class="main_new"><?php echo  $val1->tributenote2_second; ?></p>
                                 <ul class="list-inline list_new">
                                       <?php
                                  if($status == 0)
                                  {
                                  ?>
                                    <li class="list-inline-item"><a onclick="appr(<?php echo $val1->trid; ?>)" class="red_btn next_btn save_new save_new1">Approve</a></li>
                                     <?php
                                      }
                                      else if($status == 1)
                                      {
                                     ?>
                                      <li class="list-inline-item"><a onclick="appr(<?php echo $val1->trid; ?>)" class="red_btn next_btn green1 save_new save_new1">Approved</a></li>
                                      <?php
                                      }
                                      ?>
                                    <li class="list-inline-item"><a onclick="deletetri(<?php echo $triid ?>)" class="red_text">Delete</a></li>
                                   
                                      <?php
                                    if($blockstaus == unblock || $blockstaus == "" )
                                    {
                                    ?>
                                      <li class="list-inline-item"><a onclick="block('block','<?php echo $trifname; ?>','<?php echo $trilname; ?>')" class="red_text">Block “<?php echo $trifname ?> <?php echo $trilname ?>”</a></li>
                                   <?php
                                    }
                                    else  if($blockstaus == block)
                                    {
                                    ?>
                                     <li class="list-inline-item"><a onclick="block('unblock','<?php echo $trifname; ?>','<?php echo $trilname; ?>')" class="red_text">UnBlock “<?php echo $trifname ?> <?php echo $trilname ?>”</a></li>
                                    <?php
                                    }
                                    ?>
                                   
                                    <li class="list-inline-item"><a href="#" class="red_text"  data-toggle="modal" data-target="#myModal1">Profanity Check</a></li>
                                    
                                    <div class="modal modal_popup" id="myModal1">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                   <form method="post">
                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                        <button type="button" class="close btn_close_class" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Report This Ad</h4>
                                      </div>
                                
                                      <!-- Modal body -->
                                       <div class="modal-body">
                                        <p class="p_text_modal"><span><!--<img class="img-fluid img_ex" alt="img" src="img/img_ex.png">--></span><span>Help us understand what's happening with this ad. How would you describe it?</span></p>
                                        <div class="inline_class">
                                          <div class="form-group">  
                                            <label class="btn">
                                                <input type="hidden" name="userfname" id="trfname" value="<?php echo $trifname; ?>">
                                                 <input type="hidden" name="user1name" id="trlname" value="<?php echo $trilname; ?>">
                                                  <input type="hidden" name="memberid" id="memberid" value="<?php echo $id; ?>">
                                              <span class="checkbox_class">Sexually Inappropriate</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Sexually Inappropriate" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Offensive</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Offensive" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Violence</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Violence" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Prohibited Content</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Prohibited Content" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Spam</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Spam" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">False News</span>
                                              <input type="checkbox" name="chk1" id="item4" value="False News" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn ">
                                              <span class="checkbox_class">Misleading or Scam</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Misleading or Scam" class="hidden input_chk" autocomplete="off">
                                            </label>
                                            <label class="btn">
                                              <span class="checkbox_class">Other</span>
                                              <input type="checkbox" name="chk1" id="item4" value="Other" class="hidden input_chk" autocomplete="off">
                                            </label>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- Modal footer -->
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn_submit" data-dismiss="modal">SUBMIT</button>
                                      </div>
                                </form>
                                    </div>
                                  </div>
                                </div>
                                </ul>
                               <?php
                               }
                               ?>
                
                <?php
                 }
                ?>
               
            </div>
             </form>
        </div>
    </div>
</section>
                       <div class="modal modal_popup" id="myModal2">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                   <form method="post" id="contcatsubmit">
                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                        <button type="button" class="close btn_close_class" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Add Contact Data</h4>
                                      </div>
                                
                                      <!-- Modal body -->
                                       <div class="modal-body">
                                      
                                          <div class="form-group">  
                                              
                                                <div class="col-md-12 col-lg-12 col-12 ">
                                                    <input type="hidden" name="memid" class="memid" id="memid" value="<?php echo $id; ?>">
                                                  <input type="text" name="fname" value="" class="modalform" id="adminfname" placeholder="First Name">
                                                </div>
                                                <div class="col-md-12 col-lg-12 col-12 ">
                                                    
                                                  <input type="text" name="lname" value="" class="modalform" id="adminlname" placeholder="Last Name">
                                                </div>
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
                                        
                                          <button type="button" class="btn btn_submit" id="contaform" data-dismiss="modal">SUBMIT</button>
                                        
                                      </div>
                                </form>
                                    </div>
                                  </div>
                                </div>
<div class="modal purchase_modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Payment Confirmation</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>You have selcted:</p>
        <h4>premium package</h4>
        <h3><?php echo get_field('basic_price'); ?>.00</h3>
        <a href="" class="cancel">cancel</a>
        <a href="<?php echo get_site_url(); ?>/create-memory/?plan=2" class="proceed blue_bg">proceed</a>
      </div>

      <!-- Modal footer -->
    </div>
  </div>
</div>
<!--<div class="modal purchase_modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

     
      <div class="modal-header">
        <h4 class="modal-title">Post have been Approved</h4>
      </div>

     
      <div class="modal-body">
        
        <h4></h4>
        
        <a  class="proceed blue_bg" data-dismiss="modal">Ok</a>
        
      </div>

    </div>
  </div>
</div>-->


<style>
    .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
.pwd {
    padding: 0.375rem 1.75rem;
}
a.red_btn.next_btn.save_new.save_new1 {
    color: #fff;
}
a.red_btn.next_btn.save_new.save_new1 {
    cursor: pointer;
}
/*.green {
   
    background: green;
}*/
.deltac {
    cursor: pointer;
}
p.checkexiest {
    color: red;
}
.border {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
input.red_btn.next_btn.save_new {
    border: none;
}
a.red_text {
    cursor: pointer;
}
input.modalform {
    width: 100%;
    border: 1px solid #c8bebe;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 10px;
}
a.red_text {
    color: #582236;
}
.space {
    margin-bottom: 10px;
}
</style>
<?php
get_footer();

?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    
  $(".toggle-password").click(function() {

  $(this).removeClass("fa-eye-slash");
   $(this).addClass("fa-eye");
  var input = $($(this).attr("toggle"));


  if ($('.pwd').attr('type') == "password") {
   $('.pwd').attr('type','text');
   
  } else {
    $(this).removeClass("fa-eye");
   $(this).addClass("fa-eye-slash");
     $('.pwd').attr('type','password')
  
  }
});


function appr(id,status)
 {
     swal({
  title: "Are you sure?",
 /* text: "Once deleted, you will not be able to recover this imaginary file!",*/
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
       jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/adminapprove.php'; ?>",
        data:{'id': id,'status': status},
        success: function(data)
        {
           
           location.reload();
             
           /*  $(".save_new1").text('approved')*/
          /*  $("#myModal1").modal('show');*/
            /*alert(data);
         alert("Tribure have been Approved")*/
        }
        });
    swal("Tribute has been approved", {
      icon: "success",
    });
  } else {
      
    swal("Tribute has not been approved");
  }
});
    
}

function block(status,fname,lname)
 {
 swal({
  title: "Are you sure?",
 /*text: "Once deleted, you will not be able to recover this imaginary file!",*/
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
       jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/blockuser.php'; ?>",
        data:{'fname': fname,'lname': lname,'status': status},
        success: function(data)
        {
            //alert(data);
           
           location.reload();
             
           /*  $(".save_new1").text('approved')*/
          /*  $("#myModal1").modal('show');*/
            /*alert(data);
         alert("Tribure have been Approved")*/
        }
        });
    swal("User is blocked", {
      icon: "success",
    });
  } else {
      
    swal("User is not blocked");
  }
});
    
}
    </script>
<script>   
function deletaccount(id)
{
   swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Account!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
         jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/deleteaccount.php'; ?>",
        data:{'id': id},
        success: function(data)
        {
            
          }
        });
      
    swal("Poof! Your Account has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your Account is safe!");
  }
});
}
</script>  
<script>   
function deletetri(id)
{
   swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this Tribute",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
         jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/deleteadmintribute.php'; ?>",
        data:{'id': id},
        success: function(data)
        {
            location.reload();
          }
        });
      
    swal("Poof! Your Tribute has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your Account is safe!");
  }
});
}
</script>    
<script>
    var searchRequest = null;

$(function () {
    var minlength = 3;

    $("#checkemail").keyup(function () {
            
        var that = this,
        value = $(this).val();
 if (value.length >= minlength ) {
            if (searchRequest != null) 
                searchRequest.abort();
            searchRequest = $.ajax({
                type: "GET",
                url: " <?php echo get_site_url().'/compareadminacc.php'; ?>",
               data: {'search_keyword' : value },
                dataType: "text",
                success: function(msg){
                     jQuery(".checkexiest").html('');
                     jQuery(".checkexiest").html(msg);
              jQuery(".checkexiest").css('display','block');
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
   $('.chng').click(function(){
      $('#checkemail').addClass("border");
   });
   
   $('#password, #confirm_password').on('keyup', function () {
      
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
    
  } else 
    $('#message').html('Not Matching').css('color', 'red');
    
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("button").click(function(){
             var trfname = $("#trfname").val();
             var trlname = $("#trlname").val();
             var memberid = $("#memberid").val();
            var favorite = [];
            $.each($("input[name='chk1']:checked"), function(){            
                favorite.push($(this).val());
            });
            var val= favorite.join(", ");
            
              jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/profanitycheck.php'; ?>",
        data:{'trfname': trfname,'trlname': trlname,'memberid': memberid,'val': val},
        success: function(data)
        {
         
        }
        });
            
        });
    });
</script>
<script type="text/javascript">
$("#contaform").click(function(){
  var memid = $("#memid").val();
  var adminfname = $("#adminfname").val();
  var adminlname = $("#adminlname").val();
  var adminemail = $("#adminemail").val();
  var adminpass = $("#adminpass").val();
  jQuery.ajax({
        type: "POST",
        url: "<?php echo get_site_url().'/addsubuser.php'; ?>",
        data:{'adminfname': adminfname,'adminlname': adminlname,'adminemail': adminemail,'adminpass': adminpass,'memid': memid},
        success: function(data)
        {
      
        }
        });
            });   
   
      
 $(".chng").click(function(event){
    event.preventDefault();
    $('#checkemail').removeAttr("disabled")
}); 
</script>
