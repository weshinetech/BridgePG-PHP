<?php

require_once 'BridgePGUtil.php';

//
// init
//
$bconn = new BridgePGUtil();
$message = $bconn->get_bridge_message_arg($argv[1]);
echo $message;


?>
