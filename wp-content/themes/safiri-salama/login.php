<?php
global $session;
session_start();
/**
 * Template Name: login
 **/
get_header();
global $wpdb;
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
if($current_user == "")
{
	?>
	<script type="text/javascript">
     /*alert($webaddress);*/
     window.location.href='<?php echo get_site_url(); ?>/create-memory/';
      </script>
      <?php
}
else if($loginname != "") 
  {
   $loginname=$current_user->user_login;
$loginusername= $current_user->user_email;
             
    $query = $wpdb->get_results("SELECT * from wp_tribute where accountname ='$loginfname' AND accountlname='$loginlname' AND acountemail='$loginusername' AND accountpassword ='$loginpassword' ");
  /*echo $wpdb->last_query; */
    $tot=count($query);
   
    $uid=$query[0]->id;
    $username=$query[0]->fname;
    $acountfname=$query[0]->accountname;
    $acountlname=$query[0]->accountlname;
    $emailid=$query[0]->acountemail;
    $password=$query[0]->accountpassword;
    $webaddress=$query[0]->webaddress;
     $themeid=$query[0]->themeid;
    $_SESSION['id']=$uid;
    $_SESSION['accountname']=$acountfname;
     $_SESSION['accountlname']=$acountlname;
    $_SESSION['acountemail']=$emailid;
    $_SESSION["accountpassword"] = $password;
    $_SESSION["fname"]=$username;
    $_SESSION["webaddress"]=$webaddress;
    $_SESSION["themeid"]=$themeid;
    
    $visitor=$query[0]->visitcount;
    if ($tot >= 1) 
      {
         
       if (isset($_SESSION)) 
              {
                  
            $totvisitor =  $visitor + 1;    
$wpdb->query("UPDATE wp_tribute SET visitcount ='$totvisitor' WHERE id=$uid ");
/*
echo $wpdb->last_query;*/
?>
             
<script type="text/javascript">
/*alert($webaddress);*/
 window.location.href='<?php echo $webaddress; ?>';
</script>

<?php
    }
      }
      else if($loginname != $emailid)
      {
       ?>
       <script type="text/javascript">
     /*alert($webaddress);*/
     window.location.href='<?php echo get_site_url(); ?>/create-memory/';
      </script>
    <?php
      }
     
   }	
?>
<?php
if(isset($_POST['subbtnlast'])) 
  {
      
      /*$remember=isset($_POST['check'])?$_POST['check']:'';*/
     
    $email=($_POST['user_email']!='')?$_POST['user_email']:"";
    $password=($_POST['password']!='')?$_POST['password']:"";  
   
    if(!empty($_POST["check"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);

} else {
	setcookie("username","");
	setcookie("password","");
             }
    $query = $wpdb->get_results("SELECT * from wp_tribute where acountemail ='$email' AND accountpassword='$password' ");
  /*echo $wpdb->last_query; */
    $tot=count($query);
   
    $uid=$query[0]->id;
    $username=$query[0]->fname;
    $acountfname=$query[0]->accountname;
    $acountlname=$query[0]->accountlname;
    $emailid=$query[0]->acountemail;
    $password=$query[0]->accountpassword;
    $webaddress=$query[0]->webaddress;
     $themeid=$query[0]->themeid;
    $_SESSION['id']=$uid;
    $_SESSION['accountname']=$acountfname;
     $_SESSION['accountlname']=$acountlname;
    $_SESSION['acountemail']=$emailid;
    $_SESSION["accountpassword"] = $password;
    $_SESSION["fname"]=$username;
    $_SESSION["webaddress"]=$webaddress;
    $_SESSION["themeid"]=$themeid;
    
    $visitor=$query[0]->visitcount;
    if ($tot >= 1) 
      {
         
       if (isset($_SESSION)) 
              {
                  
            $totvisitor =  $visitor + 1;    
$wpdb->query("UPDATE wp_tribute SET visitcount ='$totvisitor' WHERE id=$uid ");
/*
echo $wpdb->last_query;*/
?>
             
<script type="text/javascript">
/*alert($webaddress);*/
 window.location.href='<?php echo $webaddress; ?>';
</script>

<?php
    }
      }
      else 
      {
        echo 'Email or Password is invalid';
      }
    }
?>
<?php
if(isset($_POST['subbtnlastsub'])) 
  {
    $email1=($_POST['user_emailsub']!='')?$_POST['user_emailsub']:"";
    $password1=($_POST['passwordsub']!='')?$_POST['passwordsub']:""; 
    $query = $wpdb->get_results("SELECT wp_tribute.* ,wp_userslist.`username`,wp_userslist.`password` FROM wp_userslist INNER JOIN wp_tribute ON wp_userslist.`memberid`= wp_tribute.`id` where wp_userslist.`username`= '$email1' and wp_userslist.`password`='$password1' ");
 $tot=count($query);
   
    $uid=$query[0]->id;
    $username=$query[0]->fname;
    $acountfname=$query[0]->accountname;
    $acountlname=$query[0]->accountlname;
    $emailid=$query[0]->acountemail;
    $password=$query[0]->accountpassword;
    $webaddress=$query[0]->webaddress;
     $themeid=$query[0]->themeid;
    $_SESSION['id']=$uid;
    $_SESSION['accountname']=$acountfname;
     $_SESSION['accountlname']=$acountlname;
    $_SESSION['acountemail']=$emailid;
    $_SESSION["accountpassword"] = $password;
    $_SESSION["fname"]=$username;
    $_SESSION["webaddress"]=$webaddress;
    $_SESSION["themeid"]=$themeid;
    
    $visitor=$query[0]->visitcount;
    if ($tot >= 1) 
      {
         
       if (isset($_SESSION)) 
              {
                  
            $totvisitor =  $visitor + 1;    
$wpdb->query($wpdb->prepare("UPDATE wp_tribute  SET visitcount = '$totvisitor'  WHERE id='$uid'"));
?>
             
<script type="text/javascript">

  window.location.href='<?php echo $webaddress; ?>';
</script>

<?php
    }
      }
      else 
      {
        echo 'Email or Password is invalid';
      }
    }
?>

<section class="package_sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="log_box">
                 <h5>Please login to your account.</h5>
            <!--  <p class="superadmin">Login as Super admin</p><p class="subadmin">Login as Sub admin</p> -->
             <div class="superadminform">
                 <form class="space40 comment-form" name="login_form" id="login_form" method="post">
                   <div class="form-group">
                     <input type="email" class="form-control" id="email" placeholder="Email" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" name="user_email">
                   </div>
                   <div class="form-group">
                     <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
                   </div>
                   <div class="form-check">
                      <label>
                        <input type="checkbox" name="check" value="1"> <span class="label-text">Remember Me</span>
                      </label>
                   </div>
                    <input type="submit" class="log_btn" name="subbtnlast" value="LOG IN">
                     <?php
                        if(isset($_POST['subbtnlast'])) 
                          {
                        if ($tot >= 1) 
                          {
                           if (isset($_SESSION)) 
                                  {
                        ?>
                    <script type="text/javascript">
                      window.location.href='<?php echo $webaddress; ?>';
                    </script>
                    <?php
                        }
                          }
                          else 
                          {
                              ?>
                          <p class="errormsg">Email or Password is invalid</p>
                            <?php
                          }
                        }
                    ?>
                    </form>
                  <!-- <a href="" class="log_btn">LOG IN</a>-->
                   <p class="social_text">- or log in with social media -</p>
                   <ul class="list-inline">
                    <li class="list-inline-item"><a href=""><span><i class="fa fa-facebook" aria-hidden="true"></i></span>login with facebook</a></li>
                     <li class="list-inline-item"><a href=""><span><i class="fa fa-twitter" aria-hidden="true"></i></span>login with twitter</a></li>
                     <li class="list-inline-item"><a href=""><span><i class="fa fa-google-plus" aria-hidden="true"></i></span>login with google</a></li> 
                
                   </ul>
                   <p><a href="<?php echo get_site_url(); ?>/forgot-password" class="log_links">Forgot your password?</a></p>
                   <p><a href="<?php echo get_site_url(); ?>/create-memory/" class="log_links">Don’t have an acount? Register as a new user</a></p>
                 </div>
                 
     <!--===================================================================Sub admin=============================================================================================-->            
                 
                 
             <div class="subadminform" style="display:none">
                 <form class="space40 comment-form" name="login_form" id="login_form" method="post">
                   <div class="form-group">
                     <input type="email" class="form-control" id="email" placeholder="Email" value="" name="user_emailsub">
                   </div>
                   <div class="form-group">
                     <input type="password" class="form-control" id="password" placeholder="Password" name="passwordsub" value="">
                   </div>
                   <div class="form-check">
                      <label>
                        <input type="checkbox" name="check" value="1"> <span class="label-text">Remember Me</span>
                      </label>
                   </div>
                    <input type="submit" class="log_btn" name="subbtnlastsub" value="LOG IN">
                     <?php
                        if(isset($_POST['subbtnlastsub'])) 
                          {
                        if ($tot >= 1) 
                          {
                           if (isset($_SESSION)) 
                                  {
                        ?>
                    <script type="text/javascript">
                      window.location.href='<?php echo $webaddress; ?>';
                    </script>
                    <?php
                        }
                          }
                          else 
                          {
                              ?>
                          <p class="errormsg">Email or Password is invalid</p>
                            <?php
                          }
                        }
                    ?>
                    </form>
                  <!-- <a href="" class="log_btn">LOG IN</a>-->
                   <p class="social_text">- or log in with social media -</p>
                   <ul class="list-inline">
                    <!--  <li class="list-inline-item"><a href=""><span><i class="fa fa-facebook" aria-hidden="true"></i></span>login with facebook</a></li>
                     <li class="list-inline-item"><a href=""><span><i class="fa fa-twitter" aria-hidden="true"></i></span>login with twitter</a></li>
                     <li class="list-inline-item"><a href=""><span><i class="fa fa-google-plus" aria-hidden="true"></i></span>login with google</a></li> -->
                     <?php echo do_shortcode('[oa_social_login]') ?>
                   </ul>
                   <p><a href="<?php echo get_site_url(); ?>/forgot-password" class="log_links">Forgot your password?</a></p>
                   <p><a href="<?php echo get_site_url(); ?>/create-memory/" class="log_links">Don’t have an acount? Register as a new user</a></p>
                 </div>
                 
               </div>
            </div>
        </div>
    </div>
</section>
<style>
    section.login {
    padding: 102px;
}
input.loginbuttn {
    margin-left: 0px auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
    background: #582236;
    color: #fff;
    border: none;
    font-size: 17px;
    border-radius: 7px;
    padding: 10px 52px;
}
p.errormsg {
    text-align: center;
    margin-top: 10px;
    color: red;
    font-size: 23px;
}
h4.crtact a {
    color: #582236;
    font-size: 17px;
   
}
h4.crtact{
    text-align: center !important;
}
label.error {
    color: red;
    font-size: 15px;
}
p.superadmin {
    float: left;
    padding-right: 53px;
    text-decoration: underline;
    cursor: pointer;
}
p.subadmin {
   text-decoration: underline;
   cursor: pointer;
}
</style>
<?php
get_footer();
?>
 <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> 
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  $("#login_form").validate({
  rules: {
     
      user_email:{
        required:true,
        email:true
      },
      password:{
        required:true
     },
  },
  messages: {
 user_email:{
        required:'Please Enter Email',
        email:'like - abc@domain.com'
      },
      password:{
        required:'Please Enter Password'
      }
     
  },
  submitHandler: function (form) {
      form.submit();
  }
});
</script>
<script>
$(".superadmin").click(function(){
    swal("Hello Your are Login as Super Admin");
  $(".superadminform").show();
  $(".subadminform").hide();
});
$(".subadmin").click(function(){
     swal("Hello Your are Login as Sub Admin");
  $(".superadminform").hide();
  $(".subadminform").show();
});
</script>