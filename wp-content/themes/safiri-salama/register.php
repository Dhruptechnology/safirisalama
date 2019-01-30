<?php
global $session;
session_start();
/**
 * Template Name: register
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
  $email_id=isset($_POST['email_id'])?$_POST['email_id']:'';
  $password=isset($_POST['password'])?$_POST['password']:'';
  $_SESSION['email_id']=$email_id;
    

 ?>    

<?php
if($mem_id == "")
{

  $insert = $wpdb->insert( 'wp_tributeuser',
  array('admin_id' => 0,
        'fname' => $fname,
        'lname' =>$lname, 
        'email_id' => $email_id,
        'password' =>$password,
        'block' =>'unblock',
        ), //data
                array('%s','%s','%s','%s','%s') //data format     
        );
       /* header("Location: $webaddress");*/
     /*echo $wpdb->last_query;*/
     ?>
<script type="text/javascript">
     
  window.location.href='<?php echo get_site_url(); ?>/new-featured/';
</script>
<?php
}
else
{
 $insert = $wpdb->insert( 'wp_tributeuser',
  array('admin_id' =>$mem_id,
        'fname' => $fname,
        'lname' =>$lname, 
        'email_id' => $email_id,
        'password' =>$password,
        'block' =>'unblock',
        ), //data
                array('%s','%s','%s','%s','%s') //data format     
        );
       /* header("Location: $webaddress");*/
     /*echo $wpdb->last_query;*/
    
     ?>
 <script type="text/javascript">
     
  window.location.href='<?php echo $webaddress ?>/?id=<?php echo $mem_id; ?>';
</script>
<?php
}
}
?>
<?php
if(isset($_POST['subregister'])) 
  {
      
      /*$remember=isset($_POST['check'])?$_POST['check']:'';*/
     
    $email1=($_POST['user_email']!='')?$_POST['user_email']:"";
    $password1=($_POST['passwordlog']!='')?$_POST['passwordlog']:"";  
    
    $query = $wpdb->get_results("SELECT * from wp_tributeuser where email_id ='$email1' AND password='$password1' ");
    
    
     $email_id=$query[0]->email_id;
     $_SESSION['email_id']=$email_id;
    if (isset($_SESSION)) 
    {
?>
<?php
if($mem_id == "")
{
    ?>
<script type="text/javascript">
  window.location.href='<?php echo get_site_url(); ?>/new-featured/';
</script>
<?php
}
else
{
    ?>
     <script type="text/javascript">
     
  window.location.href='<?php echo $webaddress ?>/?id=<?php echo $mem_id; ?>';
</script>
    <?php
}
?>
<?php
    
      }
      else 
      {
        echo 'Email or Password is invalid';
      }
    }
?>

<section class="package_sec1" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="log_box registerform" style="display:none">
                 <h5>Please Add detail.</h5>
                 <form class="space40 comment-form" name="login_form" id="login_form" method="post">
                      <div class="form-group">
                     <input type="text" class="form-control" id="name" placeholder="First Name" value="" name="fname">
                   </div>
                  <div class="form-group">
                     <input type="text" class="form-control" id="lname" placeholder="Last Name" value="" name="lname">
                   </div>
                   <div class="form-group">
                     <input type="email" class="form-control" id="email" placeholder="Email" name="email_id" value="">
                   </div>
                   <div class="form-group">
                     <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="">
                   </div>
                  
                    <input type="submit" class="log_btn" name="subbtnlast" value="Submit">
                    
                    
                    </form>
                    <br>
                     
                   <p class="social_text">- or log in with social media -</p>
                   <ul class="list-inline">
                   <li class="list-inline-item"><a href=""><span><i class="fa fa-facebook" aria-hidden="true"></i></span>login with facebook</a></li>
                     <li class="list-inline-item"><a href=""><span><i class="fa fa-twitter" aria-hidden="true"></i></span>login with twitter</a></li>
                     <li class="list-inline-item"><a href=""><span><i class="fa fa-google-plus" aria-hidden="true"></i></span>login with google</a></li> 
                   </ul>
                   <p><a class="log_links login">Already have account please click for login.</a></p>
                 
               </div>
                <div class="log_box loginform">
                 <h5>Please login to your account.</h5>
                 <form class="space40 comment-form" name="login_form" id="login_form1" method="post">
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
                   <li class="list-inline-item"><a href=""><span><i class="fa fa-facebook" aria-hidden="true"></i></span>login with facebook</a></li>
                     <li class="list-inline-item"><a href=""><span><i class="fa fa-twitter" aria-hidden="true"></i></span>login with twitter</a></li>
                     <li class="list-inline-item"><a href=""><span><i class="fa fa-google-plus" aria-hidden="true"></i></span>login with google</a></li> 
                   </ul>
                   <p><a href="<?php echo get_site_url(); ?>/forgot-password" class="log_links">Forgot your password?</a></p>
                   <p><a class="log_links">Don’t have an acount? Register as a new user</a></p>
                 
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
 <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> 

<!-- <script type="text/javascript">
  $(document).ready(function(){
    $("#phone").mask("(999) 999-9999");
  });
</script> -->

<script>
      $(".login").click(function() {
     $(".registerform").css('display','none');
     $(".loginform").css('display','block');
  });
</script>
<script>
      $( ".log_links" ).click(function() {
     $( ".registerform").show();
     $( ".loginform").hide();
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
<script type="text/javascript">
  $("#login_form1").validate({
  rules: {
       user_email:{
        required:true,
        email:true
      },
      passwordlog:{
        required:true
      },
},
  messages: {
  user_email:{
        required:'Please Enter Email',
        email:'like - abc@domain.com'
      },
     
       passwordlog:{
        required:'Please Enter Password'
      }
     
  },
  submitHandler: function (form) {
      form.submit();
  }
});
</script>