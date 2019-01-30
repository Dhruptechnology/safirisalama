<?php
    include 'wp-config.php';
    global $wpdb;
    
    $paid_by = $_GET["msisdn_id"];
    $amount = $_GET["mc"];
    $currencyType = "KES";
    $jpChannel = 'iPay '.$_GET["channel"];
    $transactionId = $_GET["txncd"];
    $paymentRequest = $_GET["id"];
    $resultCode = $_GET["status"];
    
    if($resultCode == "aei7p7yrx4ae34"){
        $wpdb->query("INSERT INTO paymentresponse (amount, currencyType, paid_by, jpChannel, transactionId, paymentRequest, resultCode) VALUES ('$amount', '$currencyType', '$paid_by', '$jpChannel', '$transactionId', '$paymentRequest', '$resultCode')");
        header("Location: https://safirisalama.com/sucess/");
    }else{
        echo "Transaction Fail."; 
        header("Location: https://safirisalama.com/failed/");
    }
        
    exit;
    $payment = new App\Payment; //payment table
        
        // receiving and inserting data  in db
        $payment->paid_by = $request->msisdn_id;
        $payment->amount = $request->mc;
        $payment->currencyType = "KES";
        $payment->jpChannel = 'iPay '.$request->channel;
        $payment->transactionId = $request->txncd;
        $payment->paymentRequest = $request->id;
        $payment->resultCode = $request->status;

        /*$dd = [
            'paid_by' => $request->msisdn_id,
            'amount' => $request->mc,
            'jpChannel' => 'iPay '.$request->channel,
            'transactionId' => $request->txncd,
            'paymentRequest' => $request->id,
            'resultCode' => $request->status

        ];

        $this->save_txt( json_encode($dd), 'Ipay_response_'.date('YmdHis') );*/

        $payment->save();

        $payment->load('request.member.Church.details');

        if($payment->request && $payment->request->member) {
            $message = 'Thank you '.$payment->request->member->firstName;
            $message .= '. Payment of KES ' . $payment->amount;
            $message .= ' has been recieved. God bless you abadantly.';
            App\Library\FirebaseLibrary::send([
                        'registration_ids' => [$payment->request->member->deviceId],
                        'data' => [
                                'title' => 'Thank you for your support.',
                                'body' => $message,
                                'date' => $payment->postTime,
                                'tag' => 'give',
                                'id' => $payment->id
                            ]
                        ], $payment->request->member->Church->details->value->fcm_key);

            // return ['notified'];
        }

        return redirect()->route('payment-thank-you');

   