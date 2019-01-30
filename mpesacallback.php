<?php 
include 'wp-config.php';
if((!empty($_POST)))
{
  //  print_r($_POST);
    $songname=($_POST['songna'])?$_POST['songna']:'';
    $themeid=($_POST['themeid'])?$_POST['themeid']:'';
    $fname=($_POST['fname'])?$_POST['fname']:'';
    $lname=($_POST['lname'])?$_POST['lname']:'';
    $mname=($_POST['mname'])?$_POST['mname']:'';
    $nname=($_POST['nname'])?$_POST['nname']:'';
    $gender=($_POST['radioInline8'])?$_POST['radioInline8']:'';
    $deathdate=($_POST['deathdate'])?$_POST['deathdate']:'';
    $birthdate=($_POST['birthdate'])?$_POST['birthdate']:'';
    $webaddress=($_POST['webaddress'])?$_POST['webaddress']:'';
    $relationname=($_POST['relationname'])?$_POST['relationname']:'';
    $rphone=($_POST['rphone'])?$_POST['rphone']:'';
    $rfname=($_POST['rfname'])?$_POST['rfname']:'';
    $rsurname=($_POST['rsurname'])?$_POST['rsurname']:'';
    $radd=($_POST['radd'])?$_POST['radd']:'';
    $remailadd=($_POST['remailadd'])?$_POST['remailadd']:'';
    $florida=($_POST['florida'])?$_POST['florida']:'';
    $accountname=($_POST['accountname'])?$_POST['accountname']:'';
    $accountlname=($_POST['accountlname'])?$_POST['accountlname']:'';
    $acountemail=($_POST['acountemail'])?$_POST['acountemail']:'';
    $accountpassword=($_POST['accountpassword'])?$_POST['accountpassword']:'';
    $privicy=($_POST['radioInline'])?$_POST['radioInline']:'';
    $desc=($_POST['desc'])?$_POST['desc']:'';
    $amount=($_POST['amout'])?$_POST['amout']:'';
    $image1=($_POST['proimg'])?$_POST['proimg']:'';
}
//receive response sent on this function/ callback 

/* fo example a successfull one

{
    "Body":
        {"
            stkCallback":
                    {
                    "MerchantRequestID":"11212-261271-1",
                    "CheckoutRequestID":"ws_CO_DMZ_183513514_23112018140640464",
                    "ResultCode":0,
                    "ResultDesc":"The service request is processed successfully.",
                    "CallbackMetadata":
                        {
                        "Item":
                        [
                        {"Name":"Amount","Value":60},
                        {"Name":"MpesaReceiptNumber","Value":"MKN12U1WMJ"},
                        {"Name":"Balance"},
                        {"Name":"TransactionDate","Value":20181123140709},
                        {"Name":"PhoneNumber","Value":254724756011}]}}}}
*/
	//$response_json = trim( file_get_contents( 'php://input' ) );
	//	 $this->save_txt( $response_xml, 'Agiza_response_json_'.date('YmdHis') );
    //echo $response_json;
        

    //get the data
    $response_json = file_get_contents("php://input");
   // print_r($response_json); exit;
    //convert the string of data to an array
    $data = json_decode($response_json, true);
    
    //output the array in the response of the curl request
    //print_r($rawInput); exit;

//decode the json
$rawInput = json_decode($response_json, true);
print_r($rawInput); //exit;o
$ResultCode = $rawInput['Body']['stkCallback']['ResultCode'];  //getting the result code
$description = $rawInput['Body']['stkCallback']['ResultDesc'];
$merchantTransId = $rawInput['Body']['stkCallback']['MerchantRequestID'];
  
 if ($ResultCode == 0 )  // if it is successfull I extract payment info
 {
     
    foreach ($rawInput['Body']['stkCallback']['CallbackMetadata']['Item'] as $key => $value) {
 
                 	if ($value['Name'] == 'Amount') {
                 		  $TransAmount = $value['Value'];
                 	}
                 	if ($value['Name'] == 'MpesaReceiptNumber') {
                 
                 		 $TransID = $value['Value'];
                 	}
                 	if ($value['Name'] == 'TransactionDate') {
                 		 $TransTime = $value['Value'];
                 	}
                 	if ($value['Name'] == 'PhoneNumber') {
                 		 $MSISDN = $value['Value'];
                 	}
                 	//var_dump( $value );
                 } 
                 
            $mpesa = $wpdb->get_results("SELECT * FROM `mpesa` WHERE `merchantrequestid`= '$merchantTransId'");
                // echo $wpdb->last_query; exit;
            $mpesa->TransID = $TransID;
            $mpesa->responsecode = $ResultCode;
            $mpesa->TransTime = $TransTime;
            $mpesa->TransAmount = $TransAmount;
            $mpesa->MSISDN = $MSISDN;
            $mpesa->description = $description;
            $mpesa->active = 1;
//    echo "UPDATE mpesa SET TransID = '$TransID',responsecode= '$ResultCode', TransTime = '$TransTime',TransAmount = '$TransAmount' ,MSISDN = '$MSISDN',description = '$description' WHERE merchantrequestid='$merchantTransId'";    
//    $update = $wpdb->query($wpdb->prepare("UPDATE mpesa SET TransID = '$TransID',responsecode= '$ResultCode', TransTime = '$TransTime',TransAmount = '$TransAmount' ,MSISDN = '$MSISDN',description = '$description' WHERE merchantrequestid='$merchantTransId'"));
    $update = $wpdb->query("UPDATE mpesa  SET TransID = '$TransID',responsecode= '$ResultCode', TransTime = '$TransTime',TransAmount = '$TransAmount' ,MSISDN = '$MSISDN',description = '$description' WHERE merchantrequestid='$merchantTransId'");
    //echo $wpdb->last_query; //exit;
    //echo $ResultCode;
    //  exit;
       $mpesa1 = $wpdb->get_results("SELECT * FROM wp_tribute order by id desc limit 1");
       $id=($mpesa1[0]->id!='')?$mpesa1[0]->id:"";
       $emailid=($mpesa1[0]->acountemail!='')?$mpesa1[0]->acountemail:"";
       $webadd=($mpesa1[0]->webaddress!='')?$mpesa1[0]->webaddress:"";
       $update1 = $wpdb->query("UPDATE wp_tribute SET status = '1' where id =$id");
      // echo $wpdb->last_query;
       $to2= $emailid;


$subject2 = 'Memorial Created Sucessfully';

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

<td align="center" colspan="2">Memorial Created Sucessfully </td>
</tr>
</tbody>
</table>
<table width="503" style="background-color: white;    border: 1px dashed;    font-size: 21px;    border-radius: 1px;">
<tbody> 
    <tr>
      <td><b>Web Address:</b></td>
      <td>'.$webadd.'</td>
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
 //for fail
 else{
     /*{"Body":
     {"stkCallback":
         {
             "MerchantRequestID":"20258-14734914-1",
             "CheckoutRequestID":"ws_CO_DMZ_190417717_26112018210044373",
             "ResultCode":1036,
             "ResultDesc":"[STK_CB - ]SMSC ACK timeout."
             
         }
         
     }
     }*/
      $mpesa = $wpdb->get_results("SELECT * FROM `mpesa` WHERE `merchantrequestid`= $merchantTransId");
      $mpesa->description = $description;
      $update2 = $wpdb->query("UPDATE mpesa SET description = '$description',responsecode= '$ResultCode' WHERE merchantrequestid='$merchantTransId'");
     // echo $update;
     // echo $wpdb->last_query;
 }




