<?php
echo "_________________";
$proxy = new SoapClient('http://192.168.10.117/magentodemomodule/index.php/api/v2_soap/?wsdl');

$sessionId = $proxy->login('kushapitest', 'admin123');


die;

$result = $proxy->customerCustomerCreate($sessionId,array('email' => 'customer-mail@example.org','firstname' => 'kush','lastname' => 'checklasttname','password' => 'admin123','website_id' => 1, 'store_id' => 1, 'group_id' => 1));

if($result)
{
     echo "customer is created sucessfully";
}
else
{
    
     echo "not created";
}

//var_dump($result->result);

//(object)array('categoryId' => '4');
//array(array("name"=>""))

?>