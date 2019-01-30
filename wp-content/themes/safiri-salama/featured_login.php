<?php
/**
 * Template Name: featured login
 **/
get_header();
?>
<?php
if(isset($_REQUEST['subbtnlast']))
{
  $fname=isset($_POST['fname'])?$_POST['fname']:'';
  $lname=isset($_POST['lname'])?$_POST['lname']:'';
  $email_id=isset($_POST['email_id'])?$_POST['email_id']:'';
  $password=isset($_POST['password'])?$_POST['password']:'';
  $login_type= "featurelogin";
  
  $_SESSION['email_id']=$email_id;
    
  
  $insert = $wpdb->insert( 'wp_tributeuser',
  array('admin_id' =>$mem_id,
        'fname' => $fname,
        'lname' =>$lname, 
        'email_id' => $email_id,
        'password' =>$password,
        'login_type' =>$login_type,
        ), //data
                array('%s','%s','%s','%s','%s','%s') //data format     
        );
       /* header("Location: $webaddress");*/
      echo $wpdb->last_query;
     ?>
     
 <script type="text/javascript">
     
  window.location.href='<?php echo get_site_url(); ?>/new-featured/';
</script>
<?php
}
?>

<section class="package_sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="log_box">
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

                    <?php echo do_shortcode('[oa_social_login]') ?>
                

                  <!-- <a href="" class="log_btn">LOG IN</a>-->
                  
                 
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
$('#button_facebook').click(function(){

 });
</script>