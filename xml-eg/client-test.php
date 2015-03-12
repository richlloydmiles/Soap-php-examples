<?php //client-test.php
ini_set("soap.wsdl_cache_enabled", "0"); // disabling WSDL cache
$client = new SoapClient("http://localhost/soap/xml-eg/inventory.wsdl");
$return = $client->getItemCount('19283');
print_r($return);
?>