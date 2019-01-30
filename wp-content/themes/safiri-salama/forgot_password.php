<?php
global $session;
session_start();
/**
 * Template Name: forgotpassword
 **/
get_header();

if(isset($_REQUEST['forgetpas']))
{
    
    $email=isset($_REQUEST['user_email'])?$_REQUEST['user_email']:'';
    //echo $email;
    $member=$wpdb->get_results("SELECT * from wp_tribute  where acountemail='$email'");
   /* echo $wpdb->last_query;*/
  // print_r($member);
    $username=($member[0]->accountname!='')?$member[0]->accountname:"";
    $email=($member[0]->acountemail!='')?$member[0]->acountemail:"";
    $pwd=($member[0]->accountpassword!='')?$member[0]->accountpassword:"";

    $to= $email;
    $to2='Info@safirisalama.com';
    $subject = 'Credentials For Login from Safiri Salama';
    $messages = '
       <html>
      <head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
      <title>Forgot Password Mail from Safiri Salama</title>
      </head>
      <body>
     <div style="">
    <table width="503" style="background-color:#89cbe3;border: 1px dashed #00adef;font-size: 21px;    border-radius: 1px;">
    <tbody>
    <tr style="background:#89cbe3;color:#ffffff;border-bottom:5px solid #00adef;word-break:break-word;border-collapse:collapse!important;vertical-align:top;padding:0;padding-top:10px;text-align:center;margin-bottom:0px" valign="top">
      
    </tr>
    <tr style="color: white;">
    
    <td align="right" colspan="2">Credentials For Login  in Ordomi</td>
    </tr>
    </tbody>
    </table>
    <table width="503" style="background-color: white;    border: 1px dashed;    font-size: 21px;    border-radius: 1px;">
    <tbody> 
    
     <tr>
      <td><b>Username:</b></td>
      <td>'.$username.'</td>
    </tr> 
     <tr>
      <td><b>Email :</b></td>
      <td>'.$email.'</td>
    </tr>
   <tr>
      <td><b>Password :</b></td>
      <td>'.$pwd.'</td>
    </tr>
  
   </tbody>
     
 </table>
 </div>
  </body>
  </html>
';

$headers2 = "MIME-Version: 1.0" . "\r\n";
$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers2 .= 'From: <'.$to2.'>' . "\r\n";
if(mail($to,$subject,$messages,$headers2))
{
    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal("Thank You!", "Email has been sended on this email Id!", "success");</script>
  <?php
}
else
 {
?>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>swal ( "Failed" ,  "Email is not registered!" ,  "error" );</script>

<?php
 }   
}

?>
<section class="package_sec1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="log_box">
                 <h5>Please Add Email Id.</h5>
                 <form class="space40 comment-form" name="login_form" id="login_form" method="post">
                   <div class="form-group">
                     <input type="email" class="form-control" id="email" placeholder="Email" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" name="user_email">
                   </div>
                   
                    <input type="submit" class="log_btn" name="forgetpas" value="Forgot Password">
                    
                    </form>
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
    font-size: 15px;
}
</style>
<?php
get_footer();
?>
 <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> 
<script type="text/javascript">
  $("#login_form").validate({
  rules: {
     
      user_email:{
        required:true,
        email:true
      },
    
  },
  messages: {
 user_email:{
        required:'Please Enter Email',
        email:'like - abc@domain.com'
      },
     
  },
  submitHandler: function (form) {
      form.submit();
  }
});
</script>