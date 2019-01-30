<?php
/**
 * Template Name: payment
 **/
get_header();

$paymnet=$_GET['package'];
/*echo phpinfo();*/
$plan_id=$_GET['plan'];


if($plan_id == 4)
{
$amount= '2950';
}
else if($plan_id == 5)
{
    $amount= '5950';
}

if(isset($_POST['subbtnlast']))
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
  $desc=isset($_POST['desc'])?$_POST['desc']:'';
  $firstmemorialtext=isset($_POST['firstmemorialtext'])?$_POST['firstmemorialtext']:'';
  $second_memorial_text=isset($_POST['second_memorial_text'])?$_POST['second_memorial_text']:'';
  $plan=isset($_POST['payopt'])?$_POST['payopt']:'';
  
  if($paymnet == 2 || $paymnet == 2)
  {
$amount=isset($_POST['amout'])?$_POST['amout']:'';
}
else if($paymnet == 1 || $plan == 'basic')
{
  $amount= '2950';
}
else if($paymnet == 1 || $plan == 'premium')
{
    $amount= '5950';
}




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
        'package'=>$plan,
        'first_memorial_text'=>$firstmemorialtext,
        'second_memorial_text'=>$second_memorial_text,
        'status'=> '0',
       ), //data
                array('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s') //data format     
        );
?>
<?php
if(isset($_POST['upgrade']))
{
     $memid=isset($_POST['memid'])?$_POST['memid']:'';
  $planname=isset($_POST['planname'])?$_POST['planname']:'';
  $wpdb->query("UPDATE wp_tribute  SET package = '$planname'  WHERE id='$memid'");
}
?>
<?php
$plan_id=$_GET['plan'];
if($plan_id == 4)
{
	$query = $wpdb->get_results("SELECT * from wp_tribute order by id desc limit 1 ");
	$id=($query[0]->id!='')?$query[0]->id:"";
    $rphone=($query[0]->rphone!='')?$query[0]->rphone:"";
	$acountemail=($query[0]->acountemail!='')?$query[0]->acountemail:"";
	$planname='basic';
	$wpdb->query("UPDATE wp_tribute  SET package = '$planname'  WHERE id='$id'");   
	    
}
if($plan_id == 5)
{
	$query = $wpdb->get_results("SELECT * from wp_tribute order by id desc limit 1 ");
	$id=($query[0]->id!='')?$query[0]->id:"";
    $rphone=($query[0]->rphone!='')?$query[0]->rphone:"";
	$acountemail=($query[0]->acountemail!='')?$query[0]->acountemail:"";
	$planname='premium';
	$wpdb->query("UPDATE wp_tribute  SET package = '$planname'  WHERE id='$id'");   
	    
}
?>
<section class="package_sec1 package_sec1-new2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>You’re almost there...</h1>
                <p>Before completing your order please select the desired payment method.</p>
            </div>
        </div>
    </div>
</section>


<section class="payment_method">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pad_right9">
                <div class="payment_box-new payment_box-new1">
                    <h3>Your Selection:</h3>
                    <?php
                    if($paymnet == 3)
                    {
                    ?>
                    <h4>PREMIUM PACKAGE</h4>
                    <h5 class="withcoupn"><?php echo $amount ?><span>.00</span></h5>
                     <div class="withcoupnamount"></div>
                    <?php
                    }
                    ?>
                    <?php
                    if($paymnet == 2)
                    {
                    ?>
                    <h4>BASIC PACKAGE</h4>
                    <h5 class="withcoupn"><?php echo $amount ?><span>.00</span></h5>
                    <div class="withcoupnamount"></div>
                    <?php
                    }
                    ?>
                     <?php
                    if($plan == 'premium' &&  $paymnet == 1)
                    {
                    ?>
                    <h4>PREMIUM PACKAGE</h4>
                    <h5 class="withcoupn"><?php echo $amount ?><span>.00</span></h5>
                  <div class="withcoupnamount"></div>
                    <?php
                    }
                    ?>
                    <?php
                    if($plan == 'basic' &&  $paymnet == 1)
                    {
                    ?>
                    <h4>BASIC PACKAGE</h4>
                    <h5 class="withcoupn"><?php echo $amount ?><span>.00</span></h5>
                   <div class="withcoupnamount"></div>
                    <?php
                    }
                    ?>
                    <?php
                    if($plan_id == 4)
                    {
                    ?>
                    <h4>BASIC PACKAGE</h4>
                    <h5 class="withcoupn"><?php echo $amount ?><span>.00</span></h5>
                   <div class="withcoupnamount"></div>
                    <?php
                    }
                    ?>
                    <?php
                    if($plan_id == 5)
                    {
                    ?>
                    <h4>BASIC PACKAGE</h4>
                    <h5 class="withcoupn"><?php echo $amount ?><span>.00</span></h5>
                   <div class="withcoupnamount"></div>
                    <?php
                    }
                    ?>
                    
                    <!--<a href="" class="red_btn selectn_btn">Change Selection</a>-->
                </div>
            </div>
            <div class="col-md-8 pad_left9">
                <div class="payment_box-new">
                    
                    <div class="payment-inner">
                      <h3>Your Payment Method:</h3>
                      <!--<input type="hidden" name="amount" id="amount" value="<?php echo $amount; ?>">-->
                      <!-- <input type="hidden" name="name" id="name" value="<?php echo $fname; ?>">-->
                       
                    
                  
                      <div class="row">
                          <div class="col-lg-2 col-md-4 col-6">
                            <div class="radio">
                                <input type="radio" id="inlineRadio1" value="option1" name="radiobtn" checked>
                                <label for="inlineRadio1"> Mpesa </label>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-4 col-6">
                              <img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mpesa.png">
                          </div>
                          <div class="col-lg-7 col-md-12 col-12">
                            <form id="imgfrm1" method="post">
                            <div class="form_country">
                                <input type="hidden" name="amount" id="amount" value="<?php echo $amount; ?>">
                                <input type="hidden" name="name" id="name" value="<?php echo $fname; ?>">
                             <input type="number" pattern="(7|8|9)\d{9}" class="form-control" placeholder="Your Phone Number"  id="phone" name="phone">

                             <span class="main_span"><img alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Kenya-Emoji-Flag.png"><span class="inner_span">Kenya</span>  +254</span>
                            </div> 
                            </form>
                          </div>

                      </div>
                      <span class="validphone" style="color:red; display:none;">Please add Phone Number</span>
                      <div class="space40"></div>
                      <div class="row">
                          <div class="col-md-6">
                              <p class="payment_text">Enter the Kenyan Telephone number you wish to make the Mpesa payment with. A notification will be sent to the number provided requesting authorization. Upon approval the payment will be made.</p>
                          </div>
                          <div class="col-md-6">
                              <ul class="list-inline">
                                  <li class="list-inline-item click_text">Click to send a verification code to your phone.</li>
                                <!--  <li class="list-inline-item"><a onclick="mphase (<?php echo $amount; ?>)" class="send_code">Send Code</a></li>-->
                                  <input type="submit" name="submit" id="mpesa" class="send_code" value="Make Payment ">
                              </ul>
                          </div>
                      </div>
                    </div>
                    <hr>
                    <div class="payment-inner">
                        
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-7 pad_right0">
                                <div class="radio radio_pad">
                                    <input type="radio" id="inlineRadio2" value="option2" name="radiobtn" >
                                    <label for="inlineRadio2"> Credit Card / Debit Card </label>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 col-5 pad_left0">
                                <ul class="list-inline list_pay">
                                    <li class="list-inline-item"><a href=""><img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/visa.png"></a></li>
                                    <li class="list-inline-item"><a href=""><img class="img-fluid" alt="img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mastercard.png"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="space30"></div>
                       <!-- <form action="" method="post" id="cardform">-->
                       <!-- <div class="row">-->
                       <!--     <div class="col-lg-7 col-md-6">-->
                                
                       <!--         <div class="input_text">-->
                       <!--             <input type="text" class="form-control" placeholder="Card Number*" name="cardnum">-->
                       <!--             <input type="text" class="form-control" placeholder="CVC Number*" name="cvc">-->
                       <!--         </div>-->
                                
                       <!--     </div>-->
                       <!--     <div class="col-lg-5 col-md-6">-->
                       <!--         <div class="list-inline list_pay">-->
                       <!--             <label for="sel1">Expiration</label>-->
                       <!--             <select class="form-control select_class" id="sel1" name="month">-->
                       <!--                 <option selected>Month</option>-->
                       <!--                 <option>01</option>-->
                       <!--                 <option>02</option>-->
                       <!--                 <option>03</option>-->
                       <!--                 <option>04</option>-->
                       <!--                 <option>05</option>-->
                       <!--                  <option>06</option>-->
                       <!--                   <option>07</option>-->
                       <!--                   <option>08</option>-->
                       <!--                    <option>09</option>-->
                       <!--                     <option>10</option>-->
                       <!--                     <option>11</option>-->
                       <!--                     <option>12</option>-->
                       <!--             </select>-->
                       <!--           <select class="form-control" id="sel2" name="year">-->
                       <!--                <option selected="">Year</option>-->
                       <!--                  <option value="19">19</option>-->
                       <!--                  <option value="20">20</option>-->
                       <!--                  <option value="21">21</option>-->
                       <!--                  <option value="22">22</option>-->
                       <!--                  <option value="23">23</option>-->
                       <!--                  <option value="24">24</option>-->
                       <!--                  <option value="25">25</option>-->
                       <!--                  <option value="26">26</option>-->
                       <!--                  <option value="27">27</option>-->
                       <!--                  <option value="28">28</option>-->
                       <!--                  <option value="29">29</option>-->
                       <!--                  <option value="30">30</option>-->
                       <!--                  <option value="31">31</option>-->
                       <!--                  <option value="32">32</option>-->
                       <!--                  <option value="33">33</option>-->
                       <!--                  <option value="34">34</option>-->
                       <!--                  <option value="35">35</option>-->
                       <!--                  <option value="36">36</option>-->
                       <!--                  <option value="37">37</option>-->
                       <!--                  <option value="38">38</option>-->
                       <!--                  <option value="39">39</option>-->
                       <!--                  <option value="40">40</option>-->
                                      
                       <!--             </select>-->
                                    <!--<input type="text" class="form-control" id="sel2" name="year" placeholder="yy">-->
                       <!--         </div>-->
                       <!--         <input class="send_code pull-right" name="subbtn" id="card" type="submit" value="Confirm Pay"/>-->
                                <!--<a href="" class="send_code pull-right">Confirm Pay</a>-->
                       <!--     </div>-->
                       <!-- </div>-->
                       <!-- <input name="total" type="hidden" value="<?php echo $amount; ?>" />-->
                     
                       <!--</form>-->
                       <?php 
                            /*
                            This is a sample PHP script of how you would ideally integrate with iPay Payments Gateway and also handling the 
                            callback from iPay and doing the IPN check
                            
                            ----------------------------------------------------------------------------------------------------
                                        ************(A.) INTEGRATING WITH iPAY ***********************************************
                            ----------------------------------------------------------------------------------------------------
                            */
                            //Data needed by iPay a fair share of it obtained from the user from a form e.g email, number etc...
                            $inv = rand();
                            $oid = rand();
//                             $fields = array("live"=> "1",
//                                             "oid"=> $oid,
//                                             "inv"=> $inv,
//                                             "ttl"=> $amount,
//                                             "tel"=> $rphone,
//                                             "eml"=> $acountemail,
//                                             "vid"=> "gt14",
//                                             "curr"=> "KES",
//                                             "p1"=> "1",
//                                             "p2"=> "2",
//                                             "p3"=> "",
//                                             "p4"=> $amount,
//                                             "cbk"=> "https://safirisalama.com/ipaycallback.php",
//                                             "cst"=> "1",
//                                             "crl"=> "2"
//                                             );
                            
                               //Data needed by iPay a fair share of it obtained from the user from a form e.g email, number etc...
//                                $fields = [
//                                    "live"=> "1",
//                                    "autopay"=>"1",
//                                    "oid"=> "001",
//                                    "inv"=> "001",
//                                    "ttl"=> "1",
//                                    "tel"=> "1234567897",
//                                    "eml"=> "dhrup.niravsuthar@gmail.com",
//                                    // "vid"=> 'demo',
//                                    "vid"=> 'gt14',
//                                   // "vid"=> $member->Church->details->value->ipay_vendor_id,
//                                    "curr"=> "KES",
//                                    "p1"=> "1",
//                                    "p2"=> "2",
//                                    "p3"=> "",
//                                    "p4"=> "",
//                                    "cbk"=> "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"],
//                                    //"cbk"=> route('ipay-response'),
//                                    "cst"=> "1",
//                                    "crl"=> "0"
//                                ];
                                
                                $fields = array("live"=> "1",
                                                "autopay"=>"1",
                                               "oid"=> $oid,
                                               "inv"=> $inv,
                                               "ttl"=> 1,
                                               "tel"=> $rphone,
                                               "eml"=> $acountemail,
                                               "vid"=> "gt14",
                                               "curr"=> "KES",
                                               "p1"=> "1752",
                                               "p2"=> "2",
                                               "p3"=> "",
                                               "p4"=> "",
                                               "cbk"=>'https://safirisalama.com/ipaycallback.php',
                                               "cst"=> "1",
                                               "crl"=> "0"
                                           );
                                // GENERATING THE HASH PARAMETER FROM THE DATASTRING *********************************

                                $datastring =  $fields['live'].$fields['oid'].$fields['inv'].$fields['ttl'].$fields['tel'].$fields['eml'].$fields['vid'].$fields['curr'].$fields['p1'].$fields['p2'].$fields['p3'].$fields['p4'].$fields['cbk'].$fields['cst'].$fields['crl'];
                                $hashkey ="5d14Gtplreih6eiuf";//use "demo" for testing where vid also is set to "demo"
                                //$hashkey = $member->Church->details->value->ipay_hash_key;

                                /********************************************************************************************************
                                * Generating the HashString sample
                                */
                                $generated_hash = hash_hmac('sha1',$datastring , $hashkey);

                               // $fields['hsh'] = $generated_hash;


                              //  return view('payments.ipay', compact('fields'));
                            
                            ?>
                            <!--    Generate the form BELOW   -->
                            <form method="post" action="https://payments.ipayafrica.com/v3/ke" id="cardform">
                            <div class="row">
                                <div class="col-lg-7 col-md-6">
                                    <div class="input_text">
                                        <input type="text" class="form-control" value="<?php echo $acountemail; ?>" placeholder="Email Address" disabled>
                                        <input type="text" class="form-control" value="<?php echo $rphone; ?>" placeholder="Phone Number" disabled>
                                        <input type="text" class="form-control" value="<?php echo $amount; ?>" placeholder="Total Amount" id="amounts" disabled>

                         <?php
                          $args_slider = array( 'post_type' => 'coupen', 'posts_per_page' => 1, 'order' => 'DESC');
                          $loop_slider = new WP_Query( $args_slider );
                          while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                            $coupenamout= get_field('amount');
                        ?>
                         <input type="hidden" name="couponamount" id="couponamount" value="<?php echo $coupenamout; ?>">
                    <?php endwhile; ?>
                                    </div>
                                </div>
                            <?php 
                             foreach ($fields as $key => $value) {
                                    // echo $key;
                                    echo '&nbsp;<input name="'.$key.'" type="hidden" class="form-control" value="'.$value.'">';
                             }
                            ?><input name="hsh" type="hidden" value="<?php echo $generated_hash ?>" ></td>
                            <button type="submit" class="send_code pull-right">&nbsp;Confirm Pay&nbsp;</button>
                               
                            </form>
                    </div>
                    <hr>
                    <div class="payment-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-7 pad_right0">
                                <div class="radio radio_pad">
                                    <input type="radio" id="inlineRadio3" value="option3" name="radiobtn">
                                    <label for="inlineRadio3"> Safiri Salama Coupon </label>
                                </div>
                            </div>
                          
                        </div>
                        <div class="space30"></div>
                        <div class="row">
                            <div class="col-lg-10 col-md-8">
                                <div class="input_text">
                                  <?php
                                  $args_slider = array( 'post_type' => 'coupen', 'posts_per_page' => 1, 'order' => 'DESC');
                                  $loop_slider = new WP_Query( $args_slider );
                                  while ( $loop_slider->have_posts() ) : $loop_slider->the_post();
                                  $coupen_number= get_field('coupen_number');
                                 ?>
                                 <input type="hidden" name="couponamount" id="reamount" value="<?php echo $amount; ?>">
                                    <input type="hidden" class="form-control" id="coupencode" value="<?php echo $coupen_number ?>">
                                     <?php endwhile; ?>
                                    <input type="text" class="form-control" id="secondcode" placeholder="Enter Account code">
                                    <p class="valcode" style="display:none; color:green;">Coupen applied Successfully</p><span><img src="https://safirisalama.com/wp-content/uploads/2019/01/Reject-512.png" class="cancel" style="display:none;"></span>
                                    <p class="invalidcode" style="display:none; color:red;">Sorry Coupen Code is not Valid</p>
                                     <p class="payment_text">If you have a Gift Card and / or Coupon Code,please enter them separately above.</p>
                                     <p class="payment_text">Only one coupon and one gift card allowed per order.</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4">
                               <button class="send_code coucode pull-right">Apply Coupon</button>
                              <!--   <a href="" class="send_code pull-right">Apply Coupon</a> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
span.validphone {
    float: right;
}
.send_code {
    font-size: 13px;
    float: right;
   
    border: none;
    
}
input#sel2 {
    width: 39%;
    float: right;
    font-size: 12px;
    height: 28px;
    background: #f7f7f7;
}
label.error {
    color: red;
    font-size: 15px;
}
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
<?php
get_footer();
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$("#mpesa").click((function(e) {
    e.preventDefault();
     var name = $("#name").val();
     var amount = $("#amount").val();
     var phone = $("#phone").val();
     
    var songna = $("#songna").val();
     var themeid = $("#themeid").val();
     var fname = $("#fname").val();
     var lname = $("#lname").val();
      var mname = $("#mname").val();
     var nname = $("#nname").val();
     var radioInline8 = $("#radioInline8").val();
     var deathdate = $("#deathdate").val();
     var birthdate = $("#birthdate").val();
      var mname = $("#mname").val();
     var nname = $("#nname").val();
     var radioInline8 = $("#radioInline8").val();
     var deathdate = $("#deathdate").val();
     var webaddress = $("#webaddress").val();
     var relationname = $("#relationname").val();
     
     var rphone = $("#rphone").val();
     var rfname = $("#rfname").val();
     var rsurname = $("#rsurname").val();
     var radd = $("#radd").val();
     var remailadd = $("#remailadd").val();
      var florida = $("#florida").val();
     var accountname = $("#accountname").val();
     var accountlname = $("#accountlname").val();
     var acountemail = $("#acountemail").val();
     var accountpassword = $("#accountpassword").val();
     var privicy = $("#privicy").val();
     var mpesaphone =$('#phone').val(); 
     var desc = $("#desc").val();
     var proimg = $("#proimg").val();
      var payopt = $("#payopt").val();
     
    $.ajax({
        method: 'post',
        url: "<?php echo get_site_url().'/mphase.php'; ?>",
        data: {name:name,amount:amount,phone:phone},
        success: function(data){
        //alert(data);
        swal("Please confirm mpesa request");
        var res = JSON.parse(data);
            $.ajax({
                method: 'post',
                url: "<?php echo get_site_url().'/mpesafinal.php'; ?>",
                data: {name:name,amount:amount,phone:phone,payopt:payopt,access_token:res.access_token},
                success: function(data){
                   // alert(data);
                    if(data == "fail"){
                        swal("Payment fail. Please try again.");
                       // window.location = "<?php echo get_site_url().'/failed/'?>";
                    }else{
                        var respose = JSON.parse(data);
                        var Checkout = respose.CheckoutRequestID;
                        var msg = respose.CustomerMessage;
                        var reqid = respose.MerchantRequestID;
                        var code = respose.ResponseCode;
                        var desc = respose.ResponseDescription;
                        $.ajax({
                            method: 'post',
                            url: "<?php echo get_site_url().'/mpesacallback.php'; ?>",
                            data: {CheckoutRequestID:Checkout,CustomerMessage:msg,MerchantRequestID:reqid,ResponseCode:code,ResponseDescription:desc},
                            success: function(data){
                                //alert(data);
                                swal("Please wait for confirmation message");
                                setTimeout(function(){
                                    $.ajax({
                                        method: 'post',
                                        url: "<?php echo get_site_url().'/confirmation.php'; ?>",
                                        data: {MerchantRequestID:reqid},
                                        success: function(data){
                                            data = JSON.parse(data);
                                            if(data.responsecode == 0){
                                              alert('A pop up has been sent to your phone. Please confirm payment on your phone');
                                                window.location = "<?php echo get_site_url().'/sucess'; ?>";
                                            }else{
                                                swal(data.description + ". Please try again.");
                                            }
                                        }
                                    });
									
                                }, 15000);
                            }
                        });
                    }ve 
                }
            });
        }
    });
    
    
    
}));
</script>

<script>
  /*  var min = 19,
    max = 40,
    select = document.getElementById('sel2');

for (var i = min; i<=max; i++){
    var opt = document.createElement('option');
    opt.value = i;
    opt.innerHTML = i;
    select.appendChild(opt);
}
select.value = new Date().getFullYear().toString().substr(-2);*/
</script>
<script>
  $(".coucode").click(function(){
 
//    var a = Math.floor(100000 + Math.random() * 900000);   
//    a = String(a);
//    a = a.substring(0,4);
//    input = document.getElementById('inv');
//    input.value = +a;
 var hiddencode = document.getElementById("coupencode").value;

var coupencode1 = document.getElementById("secondcode").value;

 var realamount = document.getElementById("amounts").value;
var coupencode = document.getElementById("couponamount").value;

if (hiddencode == coupencode1) {

  var result = realamount - coupencode;
$(".withcoupnamount").append("<h5>"+result+"<span>.00</span></h5>");

$(".withcoupn").css('text-decoration','line-through');
document.getElementById("amount").value = result;
 document.getElementById("amounts").value = result; 
 $('#secondcode').css('display','none');

 $('.valcode').css('display','block');
$('.cancel').css('display','block');
$('.withcoupnamount h5:first-child').css('display','block');
$('.withcoupnamount h5:nth-child(2)').css('display','none');
$('.withcoupnamount h5:nth-child(3)').css('display','none');
$('.withcoupnamount h5:nth-child(4)').css('display','none');
}  else {
  $(".invalidcode").show()
    // do something if the first input is less than the second
}   
   
});
</script>
   <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script> 
   <script type="text/javascript">
  $("#imgfrm1").validate({
  rules: {
       phone:{
        required:true
      },
   },
  messages: {
  phone:{
        required:'Please Enter Phone Number'
      }
     
  },
  submitHandler: function (form) {
      form.submit();
  }
});
</script>
<script type="text/javascript">
  $("#cardform").validate({
  rules: {
      cardnum: {
          required: true
      },
      cvc:{
        required:true,
        
      },
      month:{
        required:true
      },

      year:{
        required:true
      }
      
    
  },
  messages: {
  cardnum: {
          required: 'Please Enter Card Number'
      },
      cvc:{
        required:'Please Enter CVV',
       
      },
      month:{
        required:'Please Enter Month'
      },
       year:{
        required:'Please Enter Expiration Month and Year'
      }
     
  },
  submitHandler: function (form) {
      form.submit();
  }
});
</script>

<script>
  $('#cardform').on('submit', function(e){
var str1 = $( "#cardform" ).serialize();
       e.preventDefault();
         $.ajax({
             url:'<?php echo get_site_url().'/cardpaymnet.php'; ?>',
             type:"post",
             data: str1,
            
              success: function(data){
               alert(data); 
                   
           }
         });
    });  
    
 $('#mpesa').click(function(){
   if($('#phone').val() == ''){
      $('.validphone').css('display','block');
   }
});  

  $('.cancel').click(function(){
 $('#secondcode').css('display','block');

 $('.valcode').css('display','none');
$('.cancel').css('display','none'); 
	
$('.withcoupnamount h5:first-child').css('display','none');
$('.withcoupn').css('text-decoration','none'); 
 var realamount = document.getElementById("reamount").value;

document.getElementById("amounts").value = realamount; 
});  

</script>