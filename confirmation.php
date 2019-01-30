<?php

include 'wp-config.php';

$MerchantRequestID=$_REQUEST['MerchantRequestID']; 

$rescode = $wpdb->get_results("SELECT * FROM `mpesa` WHERE merchantrequestid = '$MerchantRequestID'");

$data = [
        'responsecode' => $rescode[0]->responsecode,
        'description' => $rescode[0]->description
    ];
    
echo json_encode($data);
exit;
echo $rescode[0]->responsecode;
echo $rescode[0]->description

?>