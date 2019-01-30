<?php
include 'wp-config.php';
if((!empty($_POST)))
{
    $fname=($_POST['name']!='')?$_POST['name']:""; 
    $phone=($_POST['phone']!='')?$_POST['phone']:""; 
    $amount=($_POST['amount']!='')?$_POST['amount']:""; 
}
    $MERCHANT_ID = "925888";
	$passkey = "146babb565fbbf4c5bc51fe94ab6226ea16014e134af7fd342f9c416a5e93861";
	$TIMESTAMP = date('YmdHis');
	$PASSWORD = base64_encode( $MERCHANT_ID . $passkey . $TIMESTAMP );
	$headers = array("MERCHANT_ID"=>$MERCHANT_ID,
    			"PASSWORD"=>$PASSWORD,
    			"TIMESTAMP"=>date('YmdHis'));
	$msisdn = '254' . substr($_POST['phone'],-9,9);
	
    $url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    $credentials = base64_encode('I4I1Lqp3AYqTmDdAcRkLFHUIuVJX7ki3:ssK1mbVtH13u3XUf');
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials)); //setting a custom header
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $curl_response = curl_exec($curl);
    $res=json_decode($curl_response, true);
    $token = $res['access_token'];
   
?>