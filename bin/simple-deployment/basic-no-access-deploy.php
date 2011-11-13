<?php 

// Enable full-blown error reporting. http://twitter.com/rasmus/status/7448448829
error_reporting(-1);

// Set HTML headers
header("Content-type: text/html; charset=utf-8");

// Include the SDK
require_once '../../lib/aws-sdk/sdk.class.php';
    
    
$ec2 = new AmazonEC2();

// US East Fedora Core Image (Fedora)

$image_id = 'ami-255fba4c';
$min = 1;
$max = 1;

// Creates a basic instance but does not allow connection after this (as key pairs are not specified).

$result = $ec2->run_instances($image_id, $min, $max);

// Check for sucess in the AWS control pannel.
    
    