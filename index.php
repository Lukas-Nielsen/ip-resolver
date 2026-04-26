<?php
// Allow from any origin
header("Access-Control-Allow-Origin: *");

// Optional: Handle preflight requests (for complex requests)
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
	header("Access-Control-Allow-Headers: Content-Type, Authorization");
	exit(0);
}

$clientIp = $_SERVER["HTTP_CF_CONNECTING_IP"] ?? $_SERVER["REMOTE_ADDR"];

header("Content-Type: text/plain");

echo $clientIp;
