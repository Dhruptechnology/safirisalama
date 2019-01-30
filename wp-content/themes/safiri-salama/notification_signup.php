<?php
global $session;
session_start();
/**
 * Template Name: notification signup
 **/
get_header();


  $mem_id=$_GET['id'];

   $query = $wpdb->get_results("SELECT * from wp_tribute where id = $mem_id");
$webaddress=($query[0]->webaddress!='')?$query[0]->webaddress:"";


?>

<?php
if(isset($_REQUEST['subbtnlast']))
{
  $fname=isset($_POST['fname'])?$_POST['fname']:'';
  $lname=isset($_POST['lname'])?$_POST['lname']:'';
  $emailadd=isset($_POST['emailadd'])?$_POST['emailadd']:'';
  $password=isset($_POST['password'])?$_POST['password']:'';
  $_SESSION['emailadd']=$emailadd;
    


  $insert = $wpdb->insert( 'wp_notification_signup',
  array('member_id' => $mem_id,
        'fname' => $fname,
        'lname' =>$lname, 
        'email' => $emailadd,
        'password' =>$password,
       ), //data
                array('%s','%s','%s','%s','%s') //data format     
        );
       /* header("Location: $webaddress");*/
    /* echo $wpdb->last_query;*/
    
     ?>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
     swal("Thank You!", "Now you will receive Notification!", "success");
  window.location.href='<?php echo $webaddress ?>/?id=<?php echo $mem_id ?>';
</script>
<?php
}

?>
<?php
if(isset($_POST['subregister'])) 
  {
      
      /*$remember=isset($_POST['check'])?$_POST['check']:'';*/
     
    $email1=($_POST['user_email']!='')?$_POST['user_email']:"";
    $password1=($_POST['passwordlog']!='')?$_POST['passwordlog']:"";  
    
    $query = $wpdb->get_results("SELECT * from wp_notification_signup where email ='$email1' AND password='$password1' ");
    
     $fname=$query[0]->fname;
      $lname=$query[0]->lname;
     $email=$query[0]->email;
     $password=$query[0]->password;
     $_SESSION['email']=$email;



     $insert = $wpdb->insert( 'wp_notification_signup',
  array('member_id' => $mem_id,
        'fname' => $fname,
        'lname' =>$lname, 
        'email' => $email,
        'password' =>$password,
       ), //data
                array('%s','%s','%s','%s','%s') //data format     
        );
        
    if (isset($_SESSION)) 
    {

    ?>
     <script type="text/javascript">
     
  window.location.href='<?php echo $webaddress ?>/?id=<?php echo $mem_id; ?>';
</script>
    <?php
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
               <div class="log_box registerform">
                 <h5>Please Add detail.</h5>
                 <form class="space40 comment-form" name="login_form" id="login_form" method="post">
                      <div class="form-group">
                     <input type="text" class="form-control" id="name" placeholder="First Name" value="" name="fname">
                   </div>
                  <div class="form-group">
                     <input type="text" class="form-control" id="lname" placeholder="Last Name" value="" name="lname">
                   </div>
                   <div class="form-group">
                     <input type="email" class="form-control" id="email" placeholder="Email" name="emailadd" value="">
                   </div>
                   <div class="form-group">
                     <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="">
                   </div>
                  
                    <input type="submit" class="log_btn" name="subbtnlast" value="Submit">
                    
                    
                    </form>
                    <br>
                     <p><a class="log_links login">Already have account please click for login.</a></p>
                   <p class="social_text">- or log in with social media -</p>
                   <ul class="list-inline">
                   <?php echo do_shortcode('[oa_social_login]') ?>
                   </ul>
                 
               </div>
                <div class="log_box loginform" style="display:none">
                 <h5>Please login to your account.</h5>
                 <form class="space40 comment-form" name="login_form" id="login_form" method="post">
                   <div class="form-group">
                     <input type="email" class="form-control" id="email" placeholder="Email" value="" name="user_email">
                   </div>
                   <div class="form-group">
                     <input type="password" class="form-control" id="password" placeholder="Password" name="passwordlog" value="">
                   </div>
                   <div class="form-check">
                      
                   </div>
                    <input type="submit" class="log_btn" name="subregister" value="LOG IN">
                     
                    </form>
                 <p class="social_text">- or log in with social media -</p>
                   <ul class="list-inline">
                   <?php echo do_shortcode('[oa_social_login]') ?>
                   </ul>
                  
                 
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
    font-size: 17px;
}
a.log_links.login {
    font-size: 15px;
}
a.log_links.login:hover {
   color: #f1ad48;
}
</style>
<?php
get_footer();
?>
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> 

<!-- <script type="text/javascript">
  $(document).ready(function(){
    $("#phone").mask("(999) 999-9999");
  });
</script> -->

<script>
      $( ".login" ).click(function() {
     $( ".registerform").hide();
     $( ".loginform").show();
  });
</script>

<script type="text/javascript">
  $("#login_form").validate({
  rules: {
      fname: {
          required: true
      },
      email_id:{
        required:true,
        email:true
      },
      lname:{
        required:true
      },

      password:{
        required:true
      },
  },
  messages: {
  fname: {
          required: 'Please Enter Name'
      },
      email_id:{
        required:'Please Enter Email',
        email:'like - abc@domain.com'
      },
      lname:{
        required:'Please Enter Last Name'
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
