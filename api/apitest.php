<?php
error_reporting(E_ALL | E_STRICT);
require_once 'app/Mage.php';


//$proxy = new SoapClient('http://127.0.0.1/ecart/api/v2_soap/?wsdl');

$proxy = new SoapClient('http://192.168.10.117/magentodemomodule/index.php/api/v2_soap/?wsdl');

$sessionId = $proxy->login('kushapitest', 'admin123');

$allCategories = $proxy->catalogCategoryInfo($sessionId,"10"); // Get all categories.
 
var_dump($allCategories);

?>