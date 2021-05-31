<?php

require_once 'BridgePGUtil.php';

//
// init
//
$bconn = new BridgePGUtil();
$bconn->set_mid(MERCHANT_ID);
$bconn->get_status($argv[1], $argv[2]);


?>
