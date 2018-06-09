<?php

session_start();
require_once ("lib/autoload.php");

if (file_exists(__DIR__ . "/../.env")) {
	
	$dotenv = new Dotenv\Dotenv(__DIR__ . "/../");
	$dotenv->load();
}

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('92cn549wstz4twcp');
Braintree_Configuration::publicKey('4n9g6npfpbzmr94g');
Braintree_Configuration::privateKey('5c40c392584270cd830ae7ae1224195a');


?>