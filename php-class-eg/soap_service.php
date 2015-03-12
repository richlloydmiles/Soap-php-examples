<?php
// SOAP (Simple Object Access Protocol) is based on XML and
// it is a way to access web services
// A WSDL (Web Service Description Language) is an XML format
// commonly used with SOAP, for describing the functionality of network 
// services.
// A WSDL file describes how the service is called, what parameters 
// it expects, and the data structures it returns.

// Non-WSDL SOAP Server

// Insert to the Students class
require_once('Students.php');

// Because a WSDL isn't used we must provide a URI for the service
$options = array("uri" => "http://localhost");

// Create a SOAPServer object
// You'll either pass it a WSDL file or null and the array that
// contains the URI
$server = new SoapServer(null, $options);

// Define the class that holds the functions we want made available
$server->setClass('Students');

// handle() is used to process SOAP requests and responds
$server->handle();

?>