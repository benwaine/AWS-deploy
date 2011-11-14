<?php

// Enable full-blown error reporting. http://twitter.com/rasmus/status/7448448829
error_reporting(-1);

// Set HTML headers
header("Content-type: text/html; charset=utf-8");

// Include the SDK
require_once '../../lib/aws-sdk/sdk.class.php';
    
    
$ec2 = new AmazonEC2();

// US East Fedora Core Image (Amazon Linux)

$image_id = 'ami-6411e20d';
$min = 1;
$max = 1;

// Opt - this contains the keys we will init the new box with
$opt = array('KeyName' => 'prod1');

// Note - you must use the private key provided when creating the key pair 
//        described in the $opt array when logging in. 
//        the user to log with depends on the instance. 
//        this examples uses 'ec2-user'


// Creates a basic instance but does not allow connection after this (as key pairs are not specified).

$result = $ec2->run_instances($image_id, $min, $max, $opt);

// Check for sucess in the AWS control pannel.

var_dump($result);
    
    
