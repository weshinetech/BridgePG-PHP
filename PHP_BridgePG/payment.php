<?php

require_once 'BridgePGUtil.php';

//
// init
//
date_default_timezone_set("Asia/Calcutta");
$bconn = new BridgePGUtil();


//
// args
//
$cscid = $argv[1];
$orderno = $argv[2];
$amount = $argv[3];
$merchant_txn = $argv[4];


//
// build 
//
$p = array(
	'csc_id' => $cscid,
	'merchant_txn_date_time' => date('Y-m-d H:i:s'),
	'merchant_receipt_no' => $orderno,
	'txn_amount' => $amount,
	'return_url' => RETURN_URL,
	'cancel_url' => CANCEL_URL,
	'product_id' => PRODUCT_ID,
	'merchant_txn' => $merchant_txn
);


//
// generate message
//
$bconn->set_params($p);
$enc_text = $bconn->get_parameter_string();
$frac = $bconn->get_fraction();


//
// output
//
echo $frac;
echo "\n";
echo $enc_text;

?>
