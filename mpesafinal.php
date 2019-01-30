<?php 
include 'wp-config.php';
if((!empty($_POST)))
{
    $fname=$_REQUEST['name']; 
    $phone=$_REQUEST['phone']; 
    $amount=$_REQUEST['amount']; 
    $token = $_REQUEST['access_token']; 
   $random=rand();
}
    $MERCHANT_ID = "925888";
	$passkey = "146babb565fbbf4c5bc51fe94ab6226ea16014e134af7fd342f9c416a5e93861";
	$TIMESTAMP = date('YmdHis');
	//$PASSWORD = base64_encode( $MERCHANT_ID . $passkey . $TIMESTAMP );
	$headers = array("MERCHANT_ID"=>$MERCHANT_ID,
    			"PASSWORD"=>$PASSWORD,
    			"TIMESTAMP"=>date('YmdHis'));
    			
    			
    $MERCHANT_ID = "925888"; $passkey = "f6dcc01d4b5513c6c0372ef723679d132fa60f25427a6089617fb02a35c6fb59"; 
    $TIMESTAMP = date('YmdHis'); 
    //$PASSWORD = base64_encode(hash("sha256", $MERCHANT_ID . $passkey . $TIMESTAMP)); 
    $PASSWORD = base64_encode( $MERCHANT_ID . $passkey . $TIMESTAMP );

	$msisdn = '254' . substr($phone,-9,9); //its already done. Great
	
    // echo $msisdn;
    $curl_post_data = array(
      //Fill in the request parameters with valid values
      'BusinessShortCode' => $MERCHANT_ID,
      'Password' => $PASSWORD,
      'Timestamp' => $TIMESTAMP,
      'TransactionType' => "CustomerPayBillOnline",
      'Amount' =>  1,
      'PartyA' => $msisdn,
      'PartyB' => $MERCHANT_ID,
      'PhoneNumber' => $msisdn,
      'CallBackURL' => "https://safirisalama.com/mpesacallback.php",
      'AccountReference' => $random,
      "TransactionDesc" => "Memorial Create",
      'Occasion' => 'Memorial Create'
    );
    
    $url1 = "https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest";
    $ini = curl_init();
    
    curl_setopt( $ini, CURLOPT_URL, $url1 );
    curl_setopt( $ini, CURLOPT_CUSTOMREQUEST, "POST" ); 
    curl_setopt( $ini, CURLOPT_POSTFIELDS, json_encode($curl_post_data)); 
    curl_setopt( $ini, CURLOPT_FOLLOWLOCATION, 1 ); 
    curl_setopt( $ini, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ini, CURLOPT_HTTPHEADER, array("Authorization: Bearer ".$token, "cache-control: no-cache", "content-type: application/json"));
    
    $response = curl_exec($ini);
    
    $rawInput=json_decode($response,true); 
    $error = $rawInput['errorCode'];
    if($error != ""){
        echo "fail";
    }else{
        $merchantTransId = $rawInput['MerchantRequestID'];
        $checkout = $rawInput['CheckoutRequestID'];
        $code = $rawInput['ResponseCode'];
        $desc = $rawInput['ResponseDescription'];
        
        $save = $wpdb->insert( 'mpesa', array('checkoutrequestid'=>$checkout,'description'=>$desc,'merchantrequestid' =>$merchantTransId,'responsecode'=>$code), //data
            array('%s','%s','%s','%s') //data format
        );
        echo $response;
    }
    
?>