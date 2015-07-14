##############################################################
short cuts keyboard :

zend installling best url
http://www.cuckooo.net/zend-framework-2-installation/


##############################################################
api keywords
http://blog.ijasoneverett.com/2013/02/rest-api-a-simple-php-tutorial/
##############################################################
for adding goodle analystics
(1) Once you�ve signed up at: h://www.google.com/analytics/sign_up.html � you�ll receive a Google Analytics account number which Magento requires.
(2) To set-up Google Analytics in Magento go to System > Configuration, and then navigate to the Sales tab and click on Google API. Then you�ll see this screen:
To view your Google Analytics page, login at: http://www.google.com/analytics/ and select your website � multiple websites can be listed and viewed under one account.


###################################################

ajax
<?php
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <div id='loadingmessage' style='display:none'>
    <img src='http://www.mytreedb.com/uploads/mytreedb/loader/ajax_loader_blue_128.gif'/>
    </div>
    <form id="PST_DT"  name="PST_DT" method="post">
    <input name="product_title_1682" id="product_title_1682" type="hidden" value="<?php  echo "myajaxsendvaluee";?>">
    <input name="product_title_1683" id="product_title_1683" type="hidden" value="PADI Advanced Open Water">
    <input  type="button" value="showyourajaxvalue" id="submit"  onclick="test();"/>
    </form>s
    <span id="results"></span>
    <script type="text/javascript">
    function test() {
//Get the data from all the fields
var alpha = document.getElementById('product_title_1682').value;
$.ajax({
type: 'POST',
url: 'http://localhost/ajaxx/dev(php)/pagi.php',
data:{ alpha : alpha },
success:function(data){
$('#stage').html(data);
var img =$('#loadingmessage').hide();
$('#results').html(img);
//$("#submit").hide();
//document.getElementById("submit").style.display='none';
},

//  error: function() {
//    $('#results').html('failure');
//  },
// timeout: 3000,

});
}
;
</script>
<div id="stage"></div>
?>
        $this->loadLayout();
                        $toplink = $this->getLayout()->getBlock('top.links')->toHtml();
                        $sidebar = $this->getLayout()->getBlock('cart_sidebar')->toHtml();

                 $sidebarquick = $this->getLayout()->getBlock('quick_sidebar')->toHtml();
                        $response['sidebar'] = $sidebar;
                        $response['toplink'] = $toplink;
                        $response['message'] = $message;
                        $response['sidequick'] = $sidebarquick;
                        $this->getResponse()->setBody(Mage::helper('core')->jsonEncode($response));
                        
                        this is the way form json enconding 
                        
                        
--testing for the ajax pagination---
http://connect20.magentocommerce.com/community/Vinagento_Vpager

                        
##############################################################

set up enity files to add new attribute for enity type
<?php
Mage_Customer_Model_Entity_Setup.
?>
##############################################################


jquery attr() value


<html>
<head>
<title>the title</title>
   <script type="text/javascript" 
   src="/jquery/jquery-1.3.2.min.js"></script>
   <script type="text/javascript" language="javascript">

   $(document).ready(function() {
      $("#myimg").attr("src", "/images/jquery.jpg");
   });

   </script>
</head>
<body>
   <div>
      <img id="myimg" src="/wongpath.jpg" alt="Sample image" />
   </div>
</body>
</html>
<html>
<head>
<title>the title</title>
   <script type="text/javascript" 
   src="/jquery/jquery-1.3.2.min.js"></script>
   <script type="text/javascript" language="javascript">

   $(document).ready(function() {
      $("em").addClass("selected");
      $("#myid").addClass("highlight");
   });

   </script>
   <style>
      .selected { color:red; }
      .highlight { background:yellow; }
  </style>
</head>
<body>
   <em title="Bold and Brave">This is first paragraph.</em>
   <p id="myid">This is second paragraph.</p>
</body>
</html>
##############################################################
polymorphism

<?php


interface Shape {
   public function getArea();
}

class Square implements Shape {
   private $width;
   private $height;

   public function __construct($width, $height) {
      $this->width = $width;
      $this->height = $height;
   }

   public function getArea(){
      return $this->width * $this->height;
   }
}

}

$square = new Square(5, 5);

echo calculateArea($square), "<br/>";
echo calculateArea($circle);
?>
##############################################################

usefull varrible 

http://www.landofcode.com/php-tutorials/php-classes-objects.php

http://coding.smashingmagazine.com/2012/03/01/basics-creating-magento-module/

http://www.magentocommerce.com/wiki/All%20Categories?idx=5_-_modules_and_development

http://magentocustom.blogspot.in/2011/05/how-to-override-magento-block-classes.html

this both have to check

http://www.magentocommerce.com/knowledge-base/entry/magento-for-dev-part-5-magento-models-and-orm-basics

http://www.atwix.com/magento/add-category-attribute/



custum api
http://www.magentocommerce.com/wiki/doc/webservices-api/custom-api


http://www.agoradesign.at/blog/creating-or-updating-products-magento-soap-v2-api-very-challenging-adventure


http://magentomechanic.blogspot.in/2010/01/magento-custom-email-contact-form-with_02.html

http://www.magentocommerce.com/magento-connect/catalog/product/view/id/17499/
http://www.magentocommerce.com/magento-connect/dolphin-respondereview.html

http://magebase.com/magento-tutorials/setting-default-values-based-on-geoip-data/comment-page-1/#comment-3763
##############################################################
Ajax add to cart function update the block by response

  if ($product = $this->_initProduct()) {
                    $this->getResponse()
                    ->setBody($this->getLayout()
                            ->createBlock('quick/product')
                            ->setProduct($product)
                            ->toHtml());
           
  ##############################################################################                          
                            another way with json
                            
                            $response = array();
                            
   $this->loadLayout();
                        $toplink = $this->getLayout()->getBlock('top.links')->toHtml();
                        $sidebar = $this->getLayout()->getBlock('cart_sidebar')->toHtml();
                        $response['toplink'] = $toplink;
                        $response['sidebar'] = $sidebar;

          $this->getResponse()->setBody(Mage::helper('core')->jsonEncode($response));
          

          jQuery.ajax({
                          url: url,
                          dataType: 'json',
                          type : 'post',
                          data: data,
                          success: function(data){
                                jQuery('#ajax_loader').hide();
                                //alert(data.status + ": " + data.message);
                                if(jQuery('.block-cart')){
                                    jQuery('.block-cart').replaceWith(data.sidebar);
                                }
                                if(jQuery('.header .links')){
                                    jQuery('.header .links').replaceWith(data.toplink);
                                }
                          }
                    });

##############################################################

Quick contact:

Quick contact

set email template 

$emailTemplate  = Mage::getModel('core/email_template')
                        ->loadDefault('quick_contact_email');                                

            $sender_name = $data['name'];

            $recipient_name = Mage::getStoreConfig('quickcontact/general/recipient_name');
            $recipient_email = Mage::getStoreConfig('quickcontact/general/recipient_email');
            //$recipient_email = 'support@magerevol.com';
            
            $sender_email = $data['email'];
            //Create an array of variables to assign to template
            $emailTemplateVariables = array();

            $emailTemplateVariables['sender_name'] = $data['name'];
            $emailTemplateVariables['sender_email'] = $data['email'];
            $emailTemplateVariables['email_subject'] = $data['subject'];
            $emailTemplateVariables['phone'] = $data['phone'];
            $emailTemplateVariables['message'] = $data['message'];

            $processedTemplate = $emailTemplate->getProcessedTemplate($emailTemplateVariables);

            $email_subject = $data['subject'];
            /*
             * Or you can send the email directly,
             * note getProcessedTemplate is called inside send()
             */
            $emailTemplate->setSenderName($sender_name);
            $emailTemplate->setSenderEmail($sender_email);
            $emailTemplate->setTemplateSubject($email_subject);
            $emailTemplate->send($recipient_email, $recipient_name, $emailTemplateVariables);

            $emailed = true;
            
##############################################################

custom mysql query in magento

$connect = Mage::getSingleton("core/resource")->getConnection("core/read");
$connect->fetchall()

##############################################################
magento core cookies function <?php     
/**      
* set cookie      
* name and value are mandatory; other parameters are optional and can be set as null      
* $period = cookie expire date in seconds      
*/    
Mage::getModel('core/cookie')--->set($name, $value, $period, $path, $domain, $secure, $httponly);
/**
* get cookie with a specific name
* $name = name of the cookie
*/
Mage::getModel('core/cookie')->get($name);
/**
* get all cookies as an array
*/
Mage::getModel('core/cookie')->get();
/**
* delete/remove cookie
* $name is mandatory; other parameters are optional and can be set to null
*/
Mage::getModel('core/cookie')->delete($name, $path, $domain, $secure, $httponly);
?>


##############################################################
API 


-there are two protocol supported by magento first is soap and xml-rpc soap is the default one


soap always work with wsdl
SOAP v2 API WSDL
Global API Faults

The following table contains fault codes that apply to all SOAP/XML-RPC API calls.

Fault Code	 Fault Message
0	 Unknown Error
1	 Internal Error. Please see log for details.
2	 Access denied.
3	 Invalid api path.
4	 Resource path is not callable.



api moudle : http://stackoverflow.com/questions/15037773/create-new-magento-rest-api-to-get-category-list-in-magento?rq=1


-soap and wsdl 

soap : it is based on xml mostly via http   post

WSDL stands for: �Web Services Description Language�. 
                It is basically XML � based language that is used for describing the functionality offered by a web service.
;



Practical example: Creating own API v2 method
Basic steps:

1. Create Magento Extension (we are not going explain here how to do it)
2. Create Model for API method
3. Create and configure api.xml file
4. Create wsdl.xml file (with proper definitions)
5. Create wsi.xml file (with proper definitions) (OPTIONAL)

Creating Model for API v2
An XML-RPC "conversation", between two systems bgins with a request from the XML-RPC client, which the server answers with a response. 


example from inchoo : http://inchoo.net/ecommerce/magento/magento-v2-soap-demystified/


api knowledge base site url : 
http://www.magentocommerce.com/api/soap/catalog/catalogCategory/catalogCategory.html\



Process for magento APi
->create appropriate  role admin 
->Create web services user (Magento Admin)
->Assign created role to the user (Magento Admin)
->Log-in to web service and retrieve Session Id (Soap Client)
->Call appropriate method (Soap Client)
##############################################################

ajax interviews
public function indexAction() {
������� $this->loadLayout();
������� if((bool) $this->getRequest()->getParam('ajax')){ // ?ajax=true
����������� $this->getLayout()->getBlock('root')->setTemplate('page/ajax.phtml');  //changes the root template
������� }
������� $this->renderLayout();
������� return $this;
��� }

##############################################################
Event Observer 

to send emails before place the order
which path would be like /app/code/local/yournamespace/yourmodule/etc/config.xml and within your <config><global> tag inert following code:

<events>
<sales_order_place_before>
<observers>
<yournamespace_yourmodule_order_observer>
<type>singleton</type>
<class>Yournamespace_Yourmodule_Model_Observer</class>
<method>sendemail</method>
</yournamespace_yourmodule_order_observer>
</observers>
</sales_order_place_before>
</event>


next:

Now create a file with name Observer.php in your Model folder and put following code:

<?php
class Yournamespace_Yourmodule_Model_Observer
{
public function __construct()
{
//Just constrcutor for fun :-)
}
public function sendemail($observer)
{
//$observer contains the object returns in the event.
$event = $observer->getEvent();
$order = $event->getOrder();
mage::log($order->getId());
//Write code to send email
return $this;
}
}





##############################################################

Magento How to get tax rate for particular country
up vote 0 down vote favorite
	

I am trying to get tax rate for particular country for example for India I used following code but it returns 0

$taxClassId = $_product->getTaxClassId();
$country = 'IN';  
$TaxRequest  = new Varien_Object();
$TaxRequest->setCountryId( $country );  
$TaxRequest->setStore( Mage::app()->getStore() );
$TaxRequest->setCustomerClassId( $taxClassId );
$taxCalculationModel = Mage::getSingleton('tax/calculation');
$rate = $taxCalculationModel->getRate($TaxRequest);


##############################################################

moving count outside the loop

$rowNum = count($rows);

for ($i = 0; $i < $rowNum; $i++) {
 //some code
}
##############################################################
<?php

$catid  = '10';

$_category = Mage::getModel('catalog/category')->load($catid);

$model =  Mage::getResourceModel('catalog/product_collection')
 //->addFieldToFilter('entity_id', array($this->getProductIds()))
 ->addCategoryFilter($_category)
 ->addAttributeToSelect(array('name'));$model->load();


foreach($model as $model1)
{
    echo $model1['name'];
}
?>




##############################################################
$res[�id�] = Mage::getModel(�catalog/product�)->getIdBySku($sku);

##############################################################
class and objects did by 
<?php
class Database 
{ 
 public $host     = "hostname";
 public $database = "databasename"; 
 public $username = "username"; 
 public $password = "password"; 
 public $conId    = 0;  
 public $queryId  = 0;  
    public $record   = array();  
    public $row;          
    public $errNo    = 0; 
    public $error    = ""; 
    
 //call connection method upon constructing 
 public function __construct(){
  $this->createConnection(); 
 }
 
 //connection to the database
 public function createConnection() 
    { 
        if( 0 == $this->conId ) 
            $this->conId=mysql_connect( $this->host, $this->username, $this->password ); 
        if( !$this->conId ) 
   $this->stopExec( "Trying to connect.... Result: failed" ); 
        if( !mysql_query( sprintf( "use %s", $this->database ), $this->conId ) ) 
            $this->stopExec( "cannot use database ".$this->database ); 
 } 

 //execute query string 
 public function query($queryString) 
    { 
        $this->queryId = mysql_query( $queryString, $this->conId ); 
        $this->row = 0; 
        $this->errNo = mysql_errno(); 
        $this->error = mysql_error(); 
        if(!$this->queryId ) 
   $this->stopExec( "Invalid SQL String: ".$queryString ); 
  return $this->queryId; // return the resource id of query. You can either then call fetchRecord method. 
    } 
 
 public function fetchRecord($type = 1)
 { 
  //1 --> for array
  //2 --> for object
  if($type == 1){
   $record = mysql_fetch_array($this->queryId); //return array
  }else{
   $record = mysql_fetch_object($this->queryId); //return object
  }
  
  return $record;
 }
 //stop the execution of query when there's an error
 public function stopExec( $msg ) 
 { 
  printf( "Database error: %s <br>n", $msg ); 
  printf( "MySQL Error: %s (%s)<br>n", $this->errNo, $this->error ); 
 } 
 
 //get the number of row
 public function numRows() 
 { 
  return mysql_num_rows( $this->queryId ); 
 } 
         
} 

?>


refer to these links
http://en.wikipedia.org/wiki/Object-oriented_programming
http://net.tutsplus.com/tutorials/php/object-oriented-php-for-beginners/
http://php.net/manual/en/language.oop5.php


- made database.php file

 public $host     = "hostname";
 public $database = "databasename"; 
 public $username = "username"; 
 public $password = "password";
 
<?php
include('database.php');
$db = new Database();
$sql = "SELECT * from tablename"; 
$db->query($sql);
print_r($db->fetchRecord(1));
?>
 

##############################################################
also the public and private and protected  concept
<?php

class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public; // Works
//echo $obj->protected; // Fatal Error
//echo $obj->private; // Fatal Error
//$obj->printHello(); // Shows Public, Protected and Private


/**
 * Define MyClass2
 */
class MyClass2 extends MyClass
{
    // We can redeclare the public and protected method, but not private
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public; // Works
echo $obj2->private; // Undefined
echo $obj2->protected; // Fatal Error
$obj2->printHello(); // Shows Public, Protected2, Undefined

?>

##############################################################
json :
json maps easily to the data structures and its better then xml
dont need to represent the new tags or attributes to represnt the data.
JSON is much easier for human to read than XML. It is easier to write, too. It is also easier for machines to read and write.
json is not  document markup language.
Actually, XML is document-oriented. JSON is data-oriented. JSON can be mapped more easily to object-oriented systems.
javascript object notation

##############################################################


#############################################################magento reading#########################################33
http://www.magentoworks.net/
##############################################################great link#######################################################################################################3
link for adding uploading image

http://stackoverflow.com/questions/12618141/custom-image-field-within-cms-magento

##############################################################great link#######################################################################################################3



http://web-experiment.info/webandpeople-custom-menu-extension.html
home see url 
_

http://www.xpressbangla.com/create-accordion-menu-for-magento-layered-navigation/

banner extension kkey 
tp://www.magentocommerce.com/magento-connect/multiple-banner-extension.ml

for template : http://www.magikcommerce.com/magento-themes/free-magento-themes/magik-tools-store-magento-theme/
[[[[
kusal finally :
tp://www.flashmint.com/template-demo-3891.ml
]]]]]]


http://sree.cc/category/magento-ecommerce-tips/page/2  (for magento contact form this url is very good for you )
query


just like  that :
tp://demo.magikcommerce.com/toolsstore/ames-true-temper-1890100-classic-4-tine-spading-fork-with-d-grip-wood-handle.ml
face
://www.magentocommerce.com/knowledge-base/entry/magento-for-dev-part-4-magento-layouts-blocks-and-templates

tp://www.magepsycho.com/tag/product/list/tagId/4/


tp://www.magepsycho.com/tag/product/list/tagId/4/


www.magentocommerce.com/magento-connect/multiple-banner-extension.ml



tp://www.magentocommerce.com/magento-connect/customer-activation.ml  (coustomer registraion )

www.paultocknell.com/21/add-a-admin-user-to-magento/  (addtionl admin user we can do by this link)

for database query writeen 
tp://sree.cc/magento-ecommerce-tips/database-concepts-how-to-write-a-query

tp://www.magentocommerce.com/magento-connect/customer-experience/category-product-page-enhancements/shop-by-brand-manufacturer-free-extension.ml
this is the new extension for integrating  :




very good 




http://www.magentocommerce.com/magento-connect/customer-experience/category-product-page-enhancements/vs-featurezoom.ml
for mredia product zooom finc
 
 
(54) tp://blog.theunical.com/ecommerce/shopping-carts/magento-cart/magento-how-to-create-a-custom-plugin-module-example-tutorial/
        (( this is the url for the module creator))


#@@@@@@@@@@@@@@@@@####################################################################################################################################################
a good link to show lig box as per client desire definatly it will work by your self dont worry; thanks 

tp://www.magentocommerce.com/magento-connect/webrotate-360-product-viewer-with-prettyphoto-ligbox-image-gallery.ml


goog  link ::
    	tp://www.newmediacampaigns.com/page/product-filtering-wizard-in-magento 

	    tp://vldmods.com/2011/jquery-step-by-step-form 

for step by step searchng advanced serache product like as advanced search ::

########################################################################

this is the good website to read the magneto manager which is completely a good link for reading about magento manager :

tp://www.mag-manager.com/useful-articles/magento-search-products


############################################################################################
Data:2000102012
(1) tp://www.pierrefay.com/magento-developper-guide-howto-tutorial-5

(2) tp://fishpig.co.uk/magento-tutorials/
schlaack@transomcap.com


my address__ A-86, Shubh Darshan Tower, Near Prerna Tirth Derasar, 


Satelite,Ahmedabad 

380015


thisis very usefull tips to read out the concept in magneto :
http://sree.cc/category/magento-ecommerce-tips


<?php ?>
6:01 PM 10/31/2011
------------------------------------------------------------
-->tp://www.magentocommerce.com/wiki/5_-

_modules_and_development/catalog/using_collections_in_magento
--

>tp://www.magentocommerce.com/wiki/welcome_to_the_magento_user_s_g

uide/chapter_32:49 PM 10/24/2011

__________________________________


<label for="category_search_field">Search by Category:</label>
            <select name="category" id="category_search_field">
                <option value="">-- Any Category --</option>
                <?php foreach ($this->getStoreCategories() as $_category): ?>
                <?php if($_category->hasChildren()): ?>
                <option class="parent-cat" value="<?php echo $_category->getId(); ?>"><?php echo $_category->getName();?></option>
                <?php foreach ($_category->getChildren() as $subcategory):
                if($subcategory->getIsActive()) : ?>
                    <option value="<?php echo $subcategory->getId(); ?>"<?php echo ($this->getRequest()->getQuery('category') == $subcategory->getId() ? ' selected="selected"': "") ?>><?php echo $subcategory->getName(); ?></option>
                <?php endif; endforeach; ?>
                <?php elseif($_category->getIsActive()): ?>
                <option value="<?php echo $_category->getId(); ?>"><?php echo $_category->getName();?></option>
                <?php endif; ?>
                <?php endforeach ?>
 
            </select> 
            
            <reference name="header">
            <block type="core/template" name="top.search" as="topSearch" template="catalogsearch/form.mini.pml"/>
</reference> 


url : for doing this
tp://www.magentocommerce.com/wiki/5_-_modules_and_development/search_and_advanced_search/how_to_add_search_by_category_to_advanced_search

--------------------------------------------------------------------
url extenison
tp://dot.collective.ro/magento-output/magento-shop-by-manufacturer-brand-character-attribute-info-pages/
############################################################################################################################################
addd js file to magento page.xml files as a externak to call them file 
<action method="addItem"><type>skin_js</type><name>js/js_file.js</name></action>
this way measns to add js file in all the pages 
-----------------------------------------------------------------------------------------

if do u wan trto add js file sto specdific files then use like this 

<reference name="head">
and add in the:

?
1
<action method="addItem"><type>skin_js</type><name>js/js_file.js</name></action

############################################################################################################################################


four level category and it subcategory

Magento vertical category menu with the code adapted from this thread. It's quite easy to implement and to make it even easier for others.
></p>
<div>
<h6>Browse Category</h6>
<ul id="side-nav">
<?php foreach ($this->getStoreCategories() as $_category): ?>
<?php if ($_category->getIsActive()) { ?>
<?php $open = $this->isCategoryActive($_category); ?>
<?php $potential = $_category->hasChildren(); ?></p>
<li><a href="<?php echo $this->getCategoryUrl($_category); ?>"<?php if($open) { echo ''; } ?><?php if($potential) { echo ''; } ?> ><?php echo $_category->getName();?></a>
<?php if ($open && $potential): ?></p>
<ul id="sub-sidenav">
<?php foreach ($_category->getChildrenCategories() as $subcategory): ?>
<?php $subCat = Mage::getModel('catalog/category')->load($subcategory); ?>
<?php $open = $this->isCategoryActive($subCat); ?>
<?php $potential = $subCat->hasChildren(); ?></p>
<li><a href="<?php echo $this->getCategoryUrl($subCat); ?>"<?php if($open) { echo ' '; } ?><?php if(!$potential&&$open) { echo ''; } ?> ><?php if($potential&&$open) { echo ' '; } elseif($potential) { echo ' '; }?><?php echo $subCat->getName(); ?></a>
<?php if ($open && $potential): ?></p>
<ul>
<?php foreach ($subcategory->getChildrenCategories() as $subsubcategory): ?>
<?php $subsubCat = Mage::getModel('catalog/category')->load($subsubcategory); ?>
<?php $open = $this->isCategoryActive($subsubCat) ?></p>
<li><a href="<?php echo $this->getCategoryUrl($subsubCat); ?>" <?php if($open) { echo ''; } ?>><?php echo $subsubCat->getName(); ?></a></li>
<p><?php endforeach; ?>
</ul>
<p><?php endif; ?>
</li>
<p><?php endforeach; ?>
</ul>
<p><?php endif; ?>
</li>
<p><?php } ?>
<?php endforeach ?>
</ul>
</div>
<p>


this may be changes :
1
<?php foreach ($_category->getChildren() as $subcategory): ?>

to
1
<?php foreach ($_category->getChildrenCategories() as $subcategory): ?>

also in css :
#ddd;
color:#222;margin: 0 -5px;display: block;}
ul#side-nav li.subcat a {display: block;padding: 2px 10px;font-size: .85em;}
ul#side-nav li.subcat:hover {
background-color:#fefefe;background-position: 50% top;}
ul#side-nav li.subcat ul li {padding-left:18px;
line-heig: 1.6;background:#fff }
ul#side-nav li.subcat ul li a {color: #1a443c;font-weig: bold;
font-size: .85em!important;
background: url(../images/base_images/icon-arrow-set.png) no-repeat 0 -59px;}
ul#side-nav li.subcat ul li:hover {text-decoration: underline;}
ul#side-nav li.subcat a ,
ul#side-nav li.subcat ul li a:hover {text-decoration: none;}

That's it! Simple isn't it?



############################################################################################################################################
-

display top l

<?php
	$category = Mage::registry('current_category');
	$it = 5; //Amount of iterations before script gives up
	if ($category) {
		while($category->getLevel() != 2 && --$it > 0) {
			$category = $category->getParentCategory();
			if (!($category instanceof Mage_Catalog_Model_Category)) {
				break;
			}
		}
		if ($category) {
			echo $category->getName();
		}
		else {
			echo 'Cannot find parent category';
		}
	}
?>

############################################################################################################################################
menu 
<?php $_menu = $this->renderCategoriesMenuHtml(0,'level-top') ?>
<?php if($_menu): ?>
<div class="nav-container">
    <ul id="nav">
        <?php echo $_menu ?>
        <?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('tlink ')->toHtml() ?>
    </ul>
</div>
<?php endif ?>


############################################################################################################################################

############################################################################################################################################

############################################################################################################################################

############################################################################################################################################
############################################################################################################################################

<div class="menu_left_navigation">

<div class="head"><?php echo $this->__('Select a Category') ?></div>

<div class="menu_sub_head">

<ul>

<?php

$obj = new Mage_Catalog_Block_Navigation();

$store_cats = $obj->getStoreCategories();

$current_cat = $obj->getCurrentCategory();

$current_cat = (is_object($current_cat) ? $current_cat->getName() : 

");

foreach ($store_cats as $cat) {

if ($cat->getName() == $current_cat) {

echo '<li class="head"><a href="'.$this->getCategoryUrl($cat).'">'.

$cat->getName()."</a>\n<ul>\n";

foreach ($obj->getCurrentChildCategories() as $subcat) {

echo '<li class="sub_head_list">&nbsp;&nbsp;&nbsp;<a href="'.$this-

>getCategoryUrl($subcat).'">'.$subcat->getName()."</a></li>\n";

}

echo "</ul>\n</li>\n";

} else {

echo '<li class="head"><a href="'.$this->getCategoryUrl($cat).'">'.

$cat->getName()."</a></li>\n";

}

}

?>

</ul>

</div>

</di

------------------------
10:39 AM 10/19/201110:40 AM 10/19/2011<script language=javascript 

type='text/javascript'>
function imagediv() {
	document.getElementById('image-gallery').style.display = 

'block';
	document.getElementById('video-gallery').style.display = 

'none';
	document.getElementById('videolink').className = "";
	document.getElementById('imagelink').className = "active";
}

function videodiv() {
	document.getElementById('image-gallery').style.display = 

'none';
	document.getElementById('video-gallery').style.disfplay = 

'block';
	document.getElementById('videolink').className = "active";
	document.getElementById('imagelink').className = "";
}
</script> 




--------------------------------------------------------------------

-----------------------------------------


<div class="tabs">
  <ul>
    <ul>
      <li><a id="imagelink" class="active" href="javascript:void

(0);" onclick="imagediv()"><em><?php echo $this->__('Afbeelding'); 

?></em></a></li>
      <li><a id="videolink" href="javascript:void(0);" 

onclick="videodiv()" ><em><?php echo $this->__('Videos'); ?

></em></a></li>
    </ul>
  </ul>
</div>

both are using in same file in diffrent 

  <div id="image-gallery"> <?php echo $this->getChildHtml('media') 

?> </div>
      
      
      <!--testing  purpose attribute--> 
       <?php  //echo $_product['video']; ?>
       <?php  //echo $this->getChildHtml('product_video');?> <!--  

this is the ectesnion video pml file -->
     
       <!--  for embedded video code --> 
      <div id="video-gallery" class="product-video-box" 

style="display:none;"> 
         <?php if ($_product->getData('video')): ?>
            <?php $videooutput= $_product->getResource()-

>getAttribute('video')->getFrontend()->getValue($_product); ?>
            <?php echo  $videooutput ?>
         <?php endif; ?>
      </div>



call it by this 

<ul>
		<li>
<a id="imagelink" class="active" href="javascript:void(0);" 

onclick="imagediv()"><em><?php echo $this->__('Afbeelding'); ?></a>
               </li>
		<li>
<a id="videolink" href="javascript:void(0);" onclick="videodiv()" 

><em><?php echo $this->__('Videos'); ?></em></a></li>             
</ul>


####################################################################

#


login and logout code :

<?php              
                if ($this->helper('customer')->isLoggedIn() ) 
                {
                ?>
                <a href="<?php echo $this->getUrl

('customer/account/logout/');?>" ><?php echo $this->__("Logout"); ?> 

</a> |
                <?php
                }
                else
                {
                ?>
                <a href="<?php echo $this->getUrl

('customer/account/login/');?>" > <?php echo $this->__("Login"); ?

>|</a>
                <?php
                }
                ?> 


#############################################################
 tp://demo.magentocommerce.com/catalogsearch/result/?q=camer 
magento demo website url 
####################################################################

#
3level category coe 

<style type="text/css">
.smh2, .strongsm { font-size: 1.4em; padding: 10px; display: block; 

}
.siteul { margin: 5px; padding: 0 0 0 10px; }
.siteul li { list-style:inside; font-size:1em!important; }
.sitecatul { margin: 0 5px; padding: 0 0 0 10px; }
.sitecatul li { list-style:none; font-size:1em!important; }
.sitecatul li ul { margin: 0 5px; padding: 0 0 0 10px; }
.sitecatul li ul li { list-style:inside; }
.two-column { width: auto; float: left; display: block; }
</style>
<div class="two-column">
<h2 class="smh2">Our Categories</h2>
<?php // Thanks to Luci @ Creare for the following code ?>
<?php $_helper = Mage::helper('catalog/category') ?>
<?php $_categories = $_helper->getStoreCategories() ?>
<?php if (count($_categories) > 0): ?>
	<ul class="sitecatul">
		<?php foreach($_categories as $_category): ?>
			<li>
					<strong class="strongsm"><?php echo $_category->getName() ?></strong>
				<?php $_category = Mage::getModel

('catalog/category')->load($_category->getId()) ?>
				<?php $_subcategories = $_category-

>getChildrenCategories() ?>
				<?php if (count($_subcategories) > 

0): ?>
					<ul>
						<?php foreach

($_subcategories as $_subcategory): ?>
							<?php 

$_nextcategory = Mage::getModel('catalog/category')->load

($_subcategory->getId()) ?>
                            <?php $_nextsubcategories = 

$_nextcategory->getChildrenCategories() ?>
							<li>
								<a 

href="<?php echo $_helper->getCategoryUrl($_subcategory) ?>" 

title="<?php echo $_subcategory->getName() ?>">
									

<?php echo $_subcategory->getName() ?>
								</a>
                                <?php if (count($_nextsubcategories) 

> 0): ?>
                                <ul>
                                	<?php foreach

($_nextsubcategories as $_nextsubcat): ?>
                                    	<li>
                                        	<a href="<?php echo 

$_helper->getCategoryUrl($_nextsubcat) ?>" title="<?php echo 

$_subcategory->getName() ?> - <?php echo $_nextsubcat->getName() ?

>">
									

			<?php echo $_nextsubcat->getName() ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>
</div>
####################################################################

#
<?php $_helper = Mage::helper('catalog/category') ?>
<?php $_categories = $_helper->getStoreCategories() ?>
<?php $currentCategory =$this->getCurrentCategory()->getName();?>
<?php 
$parentCategoryId=$this->getCurrentCategory()->getParentId();
$category = Mage::getModel('catalog/category')->load

($parentCategoryId);
$parentCategory=$category->getName();
?>
<?php if($currentCategory == 'Root Catalog') 
		$currentCategory = 'Furniture';
?>
<?php if (count($_categories) > 0): ?>
    <ul>
        <?php foreach($_categories as $_category): ?>
            <li>
                <a href="<?php echo $_helper->getCategoryUrl

($_category) ?>">
                    <?php echo $_category->getName() ?>
                </a>
                <?php if($currentCategory == $_category->getName() 

|| $parentCategory == $_category->getName()): ?> 
                <?php $_category = Mage::getModel

('catalog/category')->load($_category->getId()) ?>
 				<?php $_subcategories = $_category-

>getChildrenCategories() ?>
                <?php if (count($_subcategories) > 0): ?>
                    <ul id="nav"> 
                        <?php foreach($_subcategories as 

$_subcategory): ?>
                            <li>
                                <a href="<?php echo $_helper-

>getCategoryUrl($_subcategory) ?>">
                                    <?php echo $_subcategory-

>getName() ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


####################################################################
####################
attribute caleed on home page with categorey :
 <block type="cms/block" name="layer_brands">
        <action method="setBlockId">
            <block_id>first_category_layer_brands</block_id>
        </action>
 </block>
#############################################################
>
<?php
$_category = Mage::getModel('catalog/category')->load(18);

$_testproductCollection = Mage::getResourceModel('catalog/product_collection')
                         ->ategoryFilter($_category)
                         ->addAttributeToSelect('*')
		                 ->addAttributeToFilter('name');
                                                  $_testproductCollection->load();

foreach($_testproductCollection as $_testproduct){ 
echo $this->mlEscape($_testproduct->getName())."<br/>"; 
};
 ?>
####################################################################

#######################
magento query 

$write =   Mage::getSingleton('core/resource')->getConnection('core_write');
$result  = $write->query("SELECT  product_id FROM  

catalog_category_product  ORDER BY product_id");
$row = $result->fetch();


##################################333333333333333###################

#

for clearl url : 
<a href="<?php echo $this->getClearUrl() ?>"><?php echo $this->__

('Clear All') ?></a>

####################################################################

#######################
<?php


$collection = Mage::getModel('catalog/product')->getCollection();
$collection->addAttributeToSelect('name');
$collection->addAttributeToSelect('orig_price');
?>
<?php  //echo "<pre>";?>
<?php //print_r($collection); ?>

<?php  //echo "</pre>";?>
<?php $collection->addFieldToFilter(array(
                   array('name'=>'orig_price', 'eq'=>'Widget A'),
				   array('name'=>'orig_price', 

'eq'=>'Widget B')
				    
                 ));?>


<?php foreach ($collection as $collect)  ?>
<?php { ?>
       <?php var_dump($collect->getData());

 }?>




#####################################################
Vrul plz menu <?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 

3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * tp://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy 

immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to 

newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to tp://www.magentocommerce.com for more 

information.
 *
 * @category    design
 * @package     base_default
 * @copyrig   Copyrig (c) 2011 Magento Inc. 

(tp://www.magentocommerce.com)
 * @license     tp://opensource.org/licenses/afl-3.0.php  Academic 

Free License (AFL 3.0)
 */
?>
<?php
/**
 * Top menu for store
 *
 * @see Mage_Catalog_Block_Navigation
 */
?>
<?php
/**
 * $this->renderCategoriesMenuHtml() supports optional arguments:
 * int Level number for list item class to start from
 * string Extra class of outermost list items
 * string If specified wraps children list in div with this class
 */
?>

<!--<div class="navigation">
<div class="left_nav">
<ul>
<li><a class="active " href="{{store 

direct_url="apparel/shoes/womens.ml"}}">WOMEN</a></li>
<li><a href="{{store 

direct_url="apparel/shoes/mens.ml"}}">MEN</a></li>
</ul>
</div>
<div class="rig_nav">
<ul>
<li><a href="{{store 

direct_url="apparel/shoes/womens/jacken.ml"}}">jacken</a></li>
<li><a href="{{store 

direct_url="apparel/shoes/womens/mantel.ml"}}">m&auml;ntel</a></li

>
<li><a href="{{store 

direct_url="apparel/shoes/womens/mutzen.ml"}}">m&uuml;tzen</a></li

>
<li><a href="{{store 

direct_url="apparel/shoes/womens/accessoires.ml"}}">accessoires</a

></li>
<li class="last"><a href="{{store 

direct_url="apparel/shoes/womens/alle.ml"}}">alle</a></li>
</ul>
</div>
</div>-->

<?php $_helper = Mage::helper('catalog/category') ?>
<?php $_categories = $_helper->getStoreCategories() ?>
<?php $currentCategory =$this->getCurrentCategory()->getName();?>
<?php 
$parentCategoryId=$this->getCurrentCategory()->getParentId();
$category = Mage::getModel('catalog/category')->load

($parentCategoryId);
$parentCategory=$category->getName();
?>
<?php if($currentCategory == 'Root Catalog') 
		$currentCategory = 'Women';
?>
<div  class="navigation">
  <?php if (count($_categories) > 0): ?>
  <div class="left_nav">
    <?php if (count($_categories) > 0): ?>
    <ul>
      <?php foreach($_categories as $_category): ?>
      
      
      <?php  
	  if($currentCategory == $_category->getName() || 

$parentCategory == $_category->getName())
	  {
		  $catclass= 'class="active"';
	  } else {
		  $catclass = '';
	  }
	  ?>
      <li><a <?php echo $catclass;?>  href="<?php echo $_helper-

>getCategoryUrl($_category) ?>"> <?php echo $_category->getName() ?> 

</a></li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
  </div>
  <div class="rig_nav">
    <?php foreach($_categories as $_category): ?>
    <?php if($currentCategory == $_category->getName() || 

$parentCategory == $_category->getName()): ?>
    <?php $_category = Mage::getModel('catalog/category')->load($_category->getId()) ?>
    <?php $_subcategories = $_category->getChildrenCategories() ?>
    <?php if (count($_subcategories) > 0): ?>
	<?php $cnt =count($_subcategories); ?>
    <ul>
     
        <?php foreach($_subcategories as $_subcategory): ?>
         <?php  
	  if($currentCategory == $_subcategory->getName())
	  {
		  $catclass= 'class="active"';
	  } else {
		  $catclass = '';
	  } 
	  ?>
      <?php 
	  	if($cnt == 1)
	  	{
			$lastCls = 'class="last"';
		}
		else
		{
			$lastCls = '';
		}
		?>
      <li  <?php echo $lastCls;?>>
        <a <?php echo $catclass;?> href="<?php echo $_helper-

>getCategoryUrl($_subcategory) ?>"> <?php echo $_subcategory-

>getName() ?> </a>
         </li>
         <?php $cnt--;?>
        <?php endforeach; ?>
     
    </ul>
    <?php endif; ?>
    <?php endif; ?>
    <?php endforeach; ?>
  </div>
</div>
<?php endif; ?>





sujju1991

#########################################################3
gettotalcartitem 
<?php
  $count = $this->helper('checkout/cart')->getSummaryCount();  //get 


total items in cart
  $total = $this->helper('checkout/cart')->getQuote()->getGrandTotal(); //get total price
 
   if($count==0)
  {
    echo $this->__('Items: %s',$count);
  }
  if($count==1)
  {
    echo $this->__(' Item: %s',$count);
  }
  if($count>1)
  {
    echo $this->__(' Items: %s',$count);
  }
  echo $this->__(' Total: %s', $this->helper('core')->formatPrice

($total, false));
?>
####################################################################

############################################################


<?php $cartGrandTotal = Mage::helper('checkout')->formatPrice

(Mage::getSingleton('checkout/cart')->getQuote()->getGrandTotal()); 

?>

Total Qty. in Cart:

$cartQty = Mage::getSingleton('checkout/cart')->getSummaryQty(); 


###########################################################################################################################################################

get current currency symbol:
<?php echo Mage::app()->getLocale()->currency(Mage::app()->getStore()->getCurrentCurrencyCode())->getSymbol(); ?>
get current currency code for the checkout process


get currency code 


<?php echo $currency_code = Mage::app()->getStore()->getCurrentCurrencyCode(); ?>
###########################################################################################################################################################


real for cart 


<div class="cart">
			<span class="spanforh1">
				<a href="<?php echo $this->getUrl('checkout/cart')?>"><?php echo $this->__('warenkorb /');?>
				 <span>
				<?php
					$count = $this->helper('checkout/cart')->getSummaryCount();
				?>
				<?php $total = $this->helper('checkout/cart')->getQuote()->getGrandTotal();  ?>
				<?php
                	if ($count == 0)
					{ 
				?>		<?php  echo $this->__('0');	?>
                <?php
                	}
					else
					{
				?>
                       <?php echo $count; ?>
                <?php
					}
				?>
                </a>
               
			</span>
			<span class="price">
            	<a href="<?php  echo $this->getUrl('checkout/cart')?>" >
                	<font style="color:#8A7F54;">
						<?php echo $this->__( $this->helper('core')->formatPrice($total, false)); ?>
					</font>
				</a>
			</span>
		</div>

####################################################################


<?php $count = $this->helper('checkout/cart')->getSummeryCount(); 

      $cartprice = $this->helper('checkout/cart')->getQuote->getGrandTotal();
 
      $symbol = mage::app   ?>
<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * tp://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to tp://www.magentocommerce.com for more information.
 *
 * @category   design_default
 * @package    Mage
 * @copyrig  Copyrig (c) 2008 Irubin Consulting Inc. DBA Varien (tp://www.varien.com)
 * @license    tp://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
?>

<div class="box base-mini  mini-country-region">
	<div class="head"></div>
	<div class="content">
		<ul>
		<?php
		$currentStoreRootCatId	= Mage::app()->getStore()->getRootCategoryId(); // To get Current store root category Id
		
		$currentCategoryId		= Mage::getBlockSingleton('catalog/navigation')->getCurrentCategory()->getId(); // To get Current category Id
		
		$category				= Mage::getModel('catalog/category')->getCategories(13);
		
		foreach($category as $_category)
		{
			$currentCat = Mage::getModel('catalog/category')->load($_category->getId());
		?>
			  <li>
            
                  <a href="<?php echo $currentCat->getUrl()?>"><?php echo $currentCat->getName();?></a> (<?php echo $currentCat->getProductCount() ?>)
            
             </li>
	  		
										<?php $_category = Mage::getModel('catalog/category')->load($currentCat->getId()) ?>
                                        <?php $_subcategories = $_category->getChildrenCategories() ?>
                                        
                                      
                                      
                                         <?php  if (count($_subcategories) > 0 ): ?>
                                            <ul> 
                                            <?php foreach($_subcategories as $_subcategory): ?>
                                                <li> &nbsp;&nbsp;&nbsp;<a style="padding-left:12px;"  href="<?php echo $_subcategory->getUrl()?>"><?php echo $_subcategory->getName() ?></a>(<?php echo $_subcategory->getProductCount() ?>)</li>
                                                <?php  $_categorySub = Mage::getModel('catalog/category')->load($_subcategory->getId()) ?>
                                                <?php  $_subofsubcategories = $_categorySub->getChildrenCategories() ?>
                                               
                                                
                                                <?php if (count($_subofsubcategories) > 0): ?>
                                                    <ul>
                                                    <?php foreach($_subofsubcategories as $_subofsubcat): ?>
                                                        <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a   style="padding-left:19px;" href="<?php echo $_subofsubcat->getUrl()?>"><?php echo $_subofsubcat->getName() ?></a> (<?php echo $_subofsubcat->getProductCount() ?>)</li>
                                                                    <?php  $_categorySub1 = Mage::getModel('catalog/category')->load($_subofsubcat->getId()) ?>
                                                                    <?php  $_subofsubcategories1 = $_categorySub1->getChildrenCategories() ?>
                                                                    <?php if (count($_subofsubcategories1) > 0): ?>
                                                                                <ul>
                                                                                 <?php foreach($_subofsubcategories1 as $_subofsubcat1): ?>
                                                                                  <li> &nbsp;&nbsp;&nbsp;<a href="<?php echo $_subofsubcat1->getUrl()?>"><?php  echo $_subofsubcat1->getName() ?></a> (<?php echo $_subofsubcat1->getProductCount() ?>)</li>
                                                                                  <?php endforeach; ?>
                                                                                </ul>
                                                                     <?php endif;?>
                                                    <?php endforeach; ?>
                                                    </ul>
                                                <?php endif;?>
                                            <?php endforeach; ?>
                                            </ul>
                                        <?php endif;?>
              
		  
		  <?php } ?>    <?php // foreach cloded here ?>
		</ul>
	</div>
</div>

<div class="box base-mini  mini-wine-types">
	<div class="head"></div>
	<div class="content">
		<ul>
		<?php
		$category = Mage::getModel('catalog/category')->getCategories(13);
		foreach($category as $_category){
			$currentCat = Mage::getModel('catalog/category')->load($_category->getId());
		?>
			<li><a href="<?php echo $currentCat->getUrl()?>"><?php echo $currentCat->getName();?></a>  (<?php echo $currentCat->getProductCount() ?>) </li>
			<?php $_category = Mage::getModel('catalog/category')->load($currentCat->getId()) ?>
			<?php $_subcategories = $_category->getChildrenCategories() ?>
			<?php if (count($_subcategories) > 0): ?>
				<ul>
				<?php foreach($_subcategories as $_subcategory): ?>
					<li> &nbsp;&nbsp;&nbsp;<a href="<?php echo $_subcategory->getUrl()?>"><?php echo $_subcategory->getName() ?></a> (<?php echo $_subcategory->getProductCount() ?>) </li>
					<?php $_categorySub = Mage::getModel('catalog/category')->load($_subcategory->getId()) ?>
					<?php  $_subofsubcategories = $_categorySub->getChildrenCategories() ?>
					<?php if (count($_subofsubcategories) > 0): ?>
						<ul>
                        	<?php foreach($_subofsubcategories as $_subofsubcat): ?>
                            <li> &nbsp;&nbsp;&nbsp;<a href="<?php echo $_subofsubcat->getUrl()?>"><?php echo $_subofsubcat->getName() ?></a> (<?php echo $_subofsubcat->getProductCount() ?>) </li>
							<?php endforeach; ?>
						</ul>
					<? endif;?>
				<?php endforeach; ?>
				</ul>
			<? endif;?>
		<?php } ?>
		</ul>
	</div>
</div>





############################################################
{{block type="catalog/product_new" name="home.catalog.product.new" 

alias="product_homepage" template="catalog/product/new.pml"}}      

  - -  --  -- new products 
#################################################################7:0

9 PM 11/4/2011####
				<?php  print_r(get_class_methods

($_link));?>

####################################################################

#

for listing columns count:
 <action method="setColumnCount"><columns>5</columns></action>
###########################################################

call static block :
<?php echo $this->getLayout()->createBlock('cms/block')->setBlockId('my_static_block_name')->toHtml() ?>
####################################################################

############################################################
{{block type='core/template' name='contactForm' 

template='newsletter/subscribe.pml'}}
####################################################################

##############################################################
<?php echo $this->helper('checkout')->formatPrice

(Mage::getSingleton('checkout/cart')->getQuote()->getGrandTotal()); 

?>
####################################################################

<?php $_images = Mage::getModel('catalog/product')->load($_product->getId())->getMediaGalleryImages();?>
<?php if($_images){?>			
   <?php $i=0; foreach($_images as $_image){ $i++;?>
      <a href="#"><img src="<?=$this->helper('catalog/image')->init($_product, 'thumbnail', $_image->getFile())->resize(200, 130); ?>" width="200" heig="130" alt="<?=$this->mlEscape($_image->getLabel());?>" title="<?=$this->mlEscape($_image->getLabel());?>" /></a>				
   <?php }?>
<?php }?>

####################################################################

 <!--Image Slider Start into the home page 
 
 -->
	
	<div align="center">
<script type="text/javascript">

var image1=new Image()
image1.src="{{skin url=images/banner_1.jpg}}"
var image2=new Image()
image2.src="{{skin url=images/banner_2.jpg}}"
var image3=new Image()
image3.src="{{skin url=images/banner_3.jpg}}"

</script>
<a href="tp://##">
<img src="{{skin url=images/banner_1.jpg}}" border="2" name="slide" width="890" heig="277" /></a>
<script>

//variable that will increment through the images
var step=1
function slideit(){
//if browser does not support the image object, exit.
if (!document.images)
return
document.images.slide.src=eval("image"+step+".src")
if (step<3)
step++
else
step=1
//call function "slideit()" every 2.5 seconds
setTimeout("slideit()",5000)
}
slideit()

</script>

</div>
<!--Image Slider End-->




####################################################################
get prodcts description
 <?php if($_product->getShortDescription()):	?>
                         <?php echo $_product->getShortDescription(); ?>
                   <?php endif;?>14444
####################################################################
####################################################################

####################################################################

####################################################################

####################################################################
####################################################################
####################################################################
####################################################################
####################################################################
####################################################################

####################################################################


##############################################################
tp://blog.decryptweb.com/product-id-and-product-name/
####################################################################

##############################################################
tp://www.voodish.co.uk/articles/display-parent-category-and-

subcategories-of-current-parent-in-magento/(call category )
####################################################################

##############################################################
my_magentoecommecrce_detail

username - kush123 / kush1234
password - bharatlal

####################################################################

##############################################################
product view
<reference name = "left">
  <block type="core/template" name="product_list_special" 

template="catalog/product/special.pml"/>
</refernce>

--------------------------------------------------------------------

- <block type="cms/block" name="my-slideshow" before="-">
             <action method="setBlockId"><block_id>my-

slideshow</block_id></action>
        </block>

---------------------------------------------------------

Category default layout

<reference name = "left">
  <block type="core/template" name="product_list_special" 

template="catalog/product/special.pml"/>
</refernce>

--------------------------------------------------------------------

-----------------------------------------------------------
<!--
Product view
-->
<reference name = "left">
  <block type="core/template" name="product_list_special" 

template="catalog/product/special.pml"/>
</refernce>

core template block call into the product page 

####################################################################

##############################################################
tp://www.magentocommerce.com/magento-

connect/Unicode_Systems/extension/6106/multibanner_module
(multi banner extension key its a great banner which i get here 
)

####################################################################

##############################################################
tp://www.magentocommerce.com/magento-

connect/integrations/payment-gateways.ml#payment-gateways.ml?

id=12848&s=1&pl=0&te=0&q=&pr=0%3A635&t=0&p=2&_suid=686
( this is the banner extension url here;;)
####################################################################

##############################################################
$sql = "SELECT product_id FROM catalog_category_product WHERE 

category_id=3?;
$data = Mage::getSingleton('core/resource') ->getConnection

('core_read')->fetchAll($sql);
(simple write query in magneto pml files)
---()

$sql = "SELECT * FROM catalog_category_product WHERE category_id= 

'3' ";
$data = Mage::getSingleton('core/resource')->getConnection

('core_read')->fetchAll($sql);
//echo "<pre>";
print_r($data);


####################################################################

##############################################################
(php my admin url and information here )
 tp://192.168.0.129/phpMyAdmin/ 
Sandip Rathod says
 User : root 
Sandip Rathod says
 Pass: rootuser 

####################################################################

##############################################################

{{block type="yourmodule/blockname" name="product_list" 

category_id="6? column_count="3? count="6? limit="4? mode="grid" 

toolbar_block_name="product_list_toolbar" 

template="catalog/product/list.pml"}}

(pahination into statci block in magnento )

####################################################################

##############################################################
best 

tp://www.ecomthemes.com/archives/70#more   (very important url for 

the magento )
tp://www.ecomthemes.com/archives/22#more    (very very important 

for all category and other )
####################################################################

<?php
$categories = Mage::getModel('catalog/category')->load(2)->getChildren();
$catIds = explode(',',$cats);
?>
<ul>
<?php foreach($catIds as $catId): ?>
    <li>
        <?php
            $category = Mage::getModel('catalog/category')->load($catId);
            echo $category->getName();

            $subCats = Mage::getModel('catalog/category')->load($category->getId())->getChildren();
            $subCatIds = explode(',',$subCats);
        ?>
            <?php if(count($subCatIds) > 1):?>
                <ul>
                <?php foreach($subCatIds as $subCat) :?>
                    <li>
                    <?php
                        $subCategory = Mage::getModel('catalog/category')->load($subCat);
                        echo $subCategory->getName();
                    ?>
                    </li>
                <?php endforeach;?>
                </ul>
            <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul

##############################################################
best:

tp://slodive.com/web-development/magento-extensions/
####################################################################
category image in home page :

>
<?php foreach ($this->getStoreCategories() as $_category): ?>
<?php $open = $this->isCategoryActive($_category); ?>
<?php
$cur_category=Mage::getModel('catalog/category')->load($_category->getId());
$layer = Mage::getSingleton('catalog/layer');
$layer->setCurrentCategory($cur_category);
if ($immagine = $this->getCurrentCategory()->getImageUrl()):
?>

<div style="float: left; padding-rig: 30px; text-align: center;">
<div class="linkimage" >
<p style="float:rig; width: 350px; border: 6px double #999999; background-color: #F7F7F7; -moz-border-radius: 10px; -webkit-border-radius: 10px; margin: 10px; padding: 10px;" >
<b><a href="<?php echo $this->getCategoryUrl($_category)?>">
<img style="float:rig; width: 350px;" src="<?php echo $immagine ?>" alt="<?php echo $this->mlEscape($this->getCurrentCategory()->getName()) ?>" width="135" heig="135" />
<?php echo $_category->getName()?></b>
</a>
</p>
</div>
</div>

<?php endif; ?>
<?php endforeach; ?>





use this laso
<?php foreach ($this->getStoreCategories() as $_category): ?>
<?php
$cur_category=Mage::getModel('catalog/category')->load($_category->getId());
$layer = Mage::getSingleton('catalog/layer'); ?>

<?php 

 $mediaurl = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA); ?>
  <a href="<?php echo $this->getCategoryUrl($cur_category)?>"><?php echo  $cur_category->getName(); ?></a>	
  <a href="<?php echo $this->getCategoryUrl($cur_category)?>"><img height="162" width="199" alt="<?php echo  $cur_category['name']?>" src="<?php echo $mediaurl.'catalog/category/'.$cur_category['thumbnail'];?>"/></a>


<?php  endforeach; ?>
##############################################################

v kirit@drcsystems.com 
kushagra daharwal says
 yes karta hu  
Vibha thummar says
 vibha.thummar@drcsystems.com 
####################################################################
<?php
$breadcrumbs = $this->getLayout()->getBlock('breadcrumbs');
 
$breadcrumbs->rumb('home', array('label'=>Mage::helper('cms')->__('Home'), 'title'=>Mage::helper('cms')->__('Home Page'), 'link'=>Mage::getBaseUrl()));
 
$breadcrumbs->rumb('country', array('label'=>'Country', 'title'=>'All Countries', 'link'=>'tp://example.com/magento/moduleName/country'));
 
$breadcrumbs->rumb('manufacturer', array('label'=>'State', 'title'=>'States'));
 
echo $this->getLayout()->getBlock('breadcrumbs')->toHtml();
?>
##############################################################
        
 get all the categories in left.pml other page  whic 	h u made 
       <?php foreach ($this->getStoreCategories() as $_category): ?>
            <?php echo $this->drawItem($_category) ?>
        <?php endforeach ?>
####################################################################


up vote
0
down vote
If You want to Display top level categories and subcategories U can do Like This..

<?php $_helper = Mage::helper('catalog/category') ?>
<?php $_categories = $_helper->getStoreCategories() ?>
<?php $currentCategory = Mage::registry('current_category') ?>
<?php if (count($_categories) > 0): ?>
<ul>
    <?php foreach($_categories as $_category): ?>
        <li>
            <a href="<?php echo $_helper->getCategoryUrl($_category) ?>">
                <?php echo $_category->getName() ?>
            </a>
            <?php $_category = Mage::getModel('catalog/category')->load($_category->getId()) ?>
            <?php $_subcategories = $_category->getChildrenCategories() ?>
            <?php if (count($_subcategories) > 0): ?>
                <ul>
                    <?php foreach($_subcategories as $_subcategory): ?>
                        <li>
                            <a href="<?php echo $_helper->getCategoryUrl($_subcategory) ?>">
                                <?php echo $_subcategory->getName() ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>
For Displaying Top Level Categories and Current Categories SubCategories you can Do like ....

<?php $_helper = Mage::helper('catalog/category') ?>
<?php $_categories = $_helper->getStoreCategories() ?>
<?php $currentCategory = Mage::registry('current_category') ?>
<?php if (count($_categories) > 0): ?>
<ul>
    <?php foreach($_categories as $_category): ?>
        <li>
            <a href="<?php echo $_helper->getCategoryUrl($_category) ?>">
                <?php echo $_category->getName() ?>
            </a>
            <?php if ($currentCategory &amp;&amp; $currentCategory->getId() == $_category->getId()): ?>
                <?php $_category = Mage::getModel('catalog/category')->load($_category->getId()) ?>
                <?php $_subcategories = $_category->getChildrenCategories() ?>
                <?php if (count($_subcategories) > 0): ?>
                    <ul>
                        <?php foreach($_subcategories as $_subcategory): ?>
                            <li>
                                <a href="<?php echo $_helper->getCategoryUrl($_subcategory) ?>">
                                    <?php echo $_subcategory->getName() ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>























########################################################################################

<?php 
$cat = Mage::getModel('catalog/category')->load(24);
$subcats = $cat->getChildren();

foreach(explode(',',$subcats) as $subCatid)
{
  $_category = Mage::getModel('catalog/category')->load($subCatid);
  if($_category->getIsActive()) {
    $sub_cat = Mage::getModel('catalog/category')->load($_category->getId());
    $sub_subcats = $sub_cat->getChildren();
    foreach(explode(',',$sub_subcats) as $sub_subCatid)
    {
          $_sub_category = Mage::getModel('catalog/category')->load($sub_subCatid);
          if($_sub_category->getIsActive()) {
              echo '<li class="sub_cat"><a href="'.$_sub_category->getURL().'" title="View the products for the "'.$_sub_category->getName().'" category">'.$_sub_category->getName().'</a></li>';
          }
     }
  }
}
?>
##############################################################

great 

<?php
$obj = new Mage_Catalog_Block_Navigation();
$store_cats	= $obj->getStoreCategories();
$current_cat 	= $obj->getCurrentCategory();
$current_cat	= (is_object($current_cat) ? $current_cat->getName() 

: '');
 
foreach ($store_cats as $cat) {
	if ($cat->getName() == $current_cat) {
		echo '<li class="current"><a href="'.$this-

>getCategoryUrl($cat).'">'.$cat->getName()."</a>\n<ul>\n";
		foreach ($obj->getCurrentChildCategories() as 

$subcat) {
			echo '<li><a href="'.$this->getCategoryUrl

($subcat).'">'.$subcat->getName()."</a></li>\n";
		}
		echo "</ul>\n</li>\n";
	} else {
		echo '<li><a href="'.$this->getCategoryUrl

($cat).'">'.$cat->getName()."</a></li>\n";
	}
}
?>

####################################################################




workssssssssssssss



<?php $_categories = $this->getCurrentChildCategories(); ?>
<?php foreach ($_categories as $_category): ?><div class="subcategory">
<?php if($_category->getIsActive()): ?>
<h2><a href="<?php echo $_category->getURL() ?>" title="<?php echo $this->mlEscape($_category->getName()) ?>"><?php echo $this->mlEscape($_category->getName()) ?></a></h2>
<ul><?php
$subcategories = explode(",", $this->mlEscape($_category->getChildren()));
    foreach ($subcategories as $sub) {
        $category = new Mage_Catalog_Model_Category();
        $category->load($sub); 
        ?><a href="<?php echo $category->getURL() ?>"><?php echo $category->getName() ?></a><?php
    }?></ul>
<?php endif; ?>
<?php endforeach; ?>



upaetd:
<ul>
<?php 
/* Load category by id */
$cat = Mage::getModel('catalog/category')->load(2);

/*Returns comma separated ids*/
$subcats = $cat->getChildren();

foreach(explode(',',$subcats) as $subCatid)
{
  $_category = Mage::getModel('catalog/category')->load($subCatid);
  if($_category->getIsActive()) {
      echo '<li><a href="'.$_category->getURL().'" title="View the products for the "'.$_category->getName().'" category"><strong>'.$_category->getName().'</strong></a></li>';

    /* Load category by id */
    $sub_cat = Mage::getModel('catalog/category')->load($_category->getId());
    /*Returns comma separated ids*/
    $sub_subcats = $sub_cat->getChildren();
      foreach(explode(',',$sub_subcats) as $sub_subCatid)
    {
          $_sub_category = Mage::getModel('catalog/category')->load($sub_subCatid);
          if($_sub_category->getIsActive()) {
              echo '<li class="sub_cat"><a href="'.$_sub_category->getURL().'" title="View the products for the "'.$_sub_category->getName().'" category">'.$_sub_category->getName().'</a></li>';
          }
      }      
  }
}
?> 
</ul>

######################################################################################################################

gogggggggggg
<?php
      /* Get the categories that are active for the store */
      $_main_categories=$this->getStoreCategories();

      /* Get the current category the user is in */
      $_current_category=$this->getCurrentCategory();

      /* Get the current category path */
      $_categorypath = $this->getCurrentCategoryPath();
?>

    <?php if ($_main_categories): ?>
        <div class="box normal-nav">
            <div class="box-top">
            </div>
            <div class="box-content">
                    <ul>
                        <?php
                            /* This bit cycles through the categories - setting the next one to current */
                            foreach ($_main_categories as $_main_category):
                                if($_main_category->getIsActive()):
                                    $cur_category=Mage::getModel('catalog/category')->load($_main_category->getId());
                                    $layer = Mage::getSingleton('catalog/layer');
                                    $layer->setCurrentCategory($cur_category);
                        ?>

                                    <li><a href="<?php echo $this->getCurrentCategory()->getUrl()?>"><?php echo $this->getCurrentCategory()->getName();?></a>

                                        <?php $_maincategorylisting=$this->getCurrentCategory()?>

                                        <?php $_categories=$this->getCurrentChildCategories()?>

                                        <?php if($_categories->count()): ?>
                                            <ul class="subcategory">
                                                <? foreach ($_categories as $_category):?>
                                                   <? if($_category->getIsActive()):
                                                          $cur_subcategory=Mage::getModel('catalog/category')->load($_category->getId());
                                                          $layer = Mage::getSingleton('catalog/layer');
                                                          $layer->setCurrentCategory($cur_subcategory);
                                                   ?>

                                                          <li><a href="<?php echo $this->getCategoryUrl($_category)?>"> <?php echo $_category->getName()?></a></li>
                                                   <? endif;?>

                                                 <?endforeach?>

                                            </ul>
                                            <?php $layer->setCurrentCategory($_current_category);  ?>

                                        <? endif; ?>
                                    </li>

                             <?php endif; ?>

                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="box-bottom">

                </div>
        </div>
    <?php endif;  ?>



thenafter
	
Please try to use following code. Main idea is get main level category. For each category get children categories.

<?php
      /* Get the categories that are active for the store */
      $_main_categories=$this->getStoreCategories();

      /* Get the current category the user is in */
      $_current_category=$this->getCurrentCategory();

      /* Get the current category path */
      $_categorypath = $this->getCurrentCategoryPath();
?>

    <?php if ($_main_categories): ?>
        <div class="box normal-nav">
            <div class="box-top">
            </div>
            <div class="box-content">
                    <ul>
                        <?php
                            /* This bit cycles through the categories - setting the next one to current */
                            foreach ($_main_categories as $_main_category):
                                if($_main_category->getIsActive()):
                                    $cur_category=Mage::getModel('catalog/category')->load($_main_category->getId());
                                    $layer = Mage::getSingleton('catalog/layer');
                                    $layer->setCurrentCategory($cur_category);
                        ?>

                                    <li><a href="<?php echo $this->getCurrentCategory()->getUrl()?>"><?php echo $this->getCurrentCategory()->getName();?></a>

                                        <?php $_maincategorylisting=$this->getCurrentCategory()?>

                                        <?php $_categories=$this->getCurrentChildCategories()?>

                                        <?php if($_categories->count()): ?>
                                            <ul class="subcategory">
                                                <? foreach ($_categories as $_category):?>
                                                   <? if($_category->getIsActive()):
                                                          $cur_subcategory=Mage::getModel('catalog/category')->load($_category->getId());
                                                          $layer = Mage::getSingleton('catalog/layer');
                                                          $layer->setCurrentCategory($cur_subcategory);
                                                   ?>

                                                          <li><a href="<?php echo $this->getCategoryUrl($_category)?>"> <?php echo $_category->getName()?></a></li>
                                                   <? endif;?>

                                                 <?endforeach?>

                                            </ul>
                                            <?php $layer->setCurrentCategory($_current_category);  ?>

                                        <? endif; ?>
                                    </li>

                             <?php endif; ?>

                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="box-bottom">

                </div>
        </div>
    <?php endif;  ?>
Added later:

If apply fix for your code is look like following:

    <?php
        $_category  = $this->getCurrentCategory();
        $collection = Mage::getModel('catalog/category')->getCategories($_category->entity_id);
        $helper     = Mage::helper('catalog/category');
    ?>
   <ul>
    <?php foreach ($collection as $cat):?>
            <li>
                <a href="<?php echo $helper->getCategoryUrl($cat);?>">
                    <cite><?php echo $cat->getName();?></cite>
                </a>
                <?php $childLevel2Category = Mage::getModel('catalog/category')->getCategories($cat->entity_id); ?>
                <ul>
                    <?php foreach ($childLevel2Category as $catLevel2) { ?>
                        <li>
                            <a href="<?php echo $helper->getCategoryUrl($catLevel2);?>">
                                <cite><?php echo $catLevel2->getName();?></cite>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </li>
<?php endforeach;?>
   </ul>




##############################################################
by kushagra :

<?php //$_helper = Mage::helper('catalog/category') ?>
<?php //$_categories = $_helper->getStoreCategories() ?>

<p style="font-size:16px; color:#F00;"><?php echo "this is the 

currnet active children category " ; ?></p>
<div style="border:1px solid #F00;">
<?php $subcat = Mage::getSingleton('catalog/layer'); ?>
<?php $categorysubcat   = $subcat->getCurrentCategory();  ?>
<?php $categories =  $categorysubcat->getChildrenCategories(); ?>
  <ul>
 <?php foreach($categories as $category): ?>
        <li><p style="list-style:none; color:#C03; padding-

left:14px;"><?php echo 'subcat---->'; ?><?php  echo   $category-

>getName(); ?></p></li>
 <?php endforeach; ?>
</ul>

<br/>

<?php   $helper = Mage::helper('catalog/category'); ?>
<?php    $allcat = $helper->getStoreCategories(); ?>
<?php if(count($allcat > 0) ) :?>
<ul>
<?php foreach ($allcat as $allcat1):?>
  <li style="padding-left:11px;">
    <?php 
	  { ?>
    <p style="font-size:13px; color:#099; padding-left:2px;"><?php 

echo 'cat->'; ?> <?php echo $allcat1->getName(); ?></p>
   
  <?php }  ?>
  </li>
<?php  endforeach;?>
</ul>
<?php endif; ?>

</div>




####################################################################

##############################################################

tp://stackoverflow.com/questions/3833616/show-only-current-

categorys-products-in-product-view(call single category product 

collection)
####################################################################

    * 1. ucfirst($string) – ucfirst is an amazing function – it capitalizes that first character! 
    * Usage:

view source
print?
1	echo ucfirst('product');

    * Gives: Product

    * 2. ucwords($string) – ucfirst not good enough for you? Why not try this – capitalize all WORDS
    * Usage:

view source
print?
1	echo ucwords('my brand new product');

    * Gives: My Brand New Product

    * 3. str_replace($find, $replace, $fromthis) – str_replace is very useful, you can replace anything you like – I normally use it to remove certain undesirables from my returned strings.
    * Usage:

view source
print?
1	echo str_replace('magento', 'e-commerce webbo design', 'ebay boug magento for over $180 million!');

    * Gives: ebay boug e-commerce webbo design for over $180 million!

    * 4. strtolower($string) – ever wanted to lowercase those pesky capital letters?
    * Usage:

view source
print?
1	echo strtolower('What A BLooDY MesS ThiS SENTENCE Is.');

    * Gives: what a bloody mess this sentence is.

    * 5. stristr($string, $findthis) – want to know if a string contains another string? Try this one.
    * Usage:

view source
print?
1	if(stristr("this sentence contains something I want", "want")){
2	 
3	echo "oh  my god it's actually in here";
4	 
5	} else {
6	 
7	echo "swing and a miss!";
8	 
9	}#?>
<?php
tp://www.e-commercewebdesign.co.uk/blog/magento-tips/10-simple-php-functions-to-improve-your-magento-store.php ?>

#############################################################

Mage::getModel('catalog/product')->getCollection()-

>addAttributeToSelect('manufacturer')->addAttributeToFilter

('category_id', '3')

####################################################################

##############################################################
san

tp://www.sharpdotinc.com/mdost/2009/04/06/magento-getting-

product-attributes-values-and-labels/
####################################################################

##############################################################

attribute option and value code
<?php //
$attributesInfo = Mage::getResourceModel'eav/entity_attribute_collection')
                        ->setEntityTypeFilter(entityType)
->setCodeFilter($attributes)
->addSetInfo()
->getData();
echo "<pre>";
print_r($attributesInfo);
?>

---------------------------------------


<?php $attributes = Mage::getModel('catalogsearch/advanced')->getAttributes();

//echo "<pre>";
//print_r($attributes);
$attributeArray=array();
foreach($attributes as $a){
if($a->getAttributeCode() == 'color'){
foreach($a->getSource()->getAllOptions(false) as $option){
 $attributeArray[$option['value']] = $option['label'];
}
}
}
?>3:26 PM 10/20/2011	3:36 PM 10/20/20113:52 PM 10/20/2011

####################################################################

###################################################12:59 PM 

tp://www.learnmagento.org/magento-tutorials/brand-listing-on-

magento-sidebar/#( best url)


####################################################################

##############################################################
<?php $obj = new Mage_Catalog_Block_Navigation(); ?>
<?php $_current_category=$obj->getCurrentCategory()->getUrlPath(); 

?> 
<?php $subs = $obj->getCurrentCategory()->getAllChildren(true); ?> 


####################################################################
get collection  by attribute
<?php

 $_productCollection = Mage::getResourceModel('reports/product_collection')
    ->addAttributeToSelect('*')
    ->addAttributeToFilter('visibility', $visibility)
    ->ategoryFilter($_category)
    ->addAttributeToFilter('category_ids',array('finset'=>'36'))
    $_productCollection->load();
?>
##############################################################

<?php

//magento get all products
$collection = Mage::getModel('catalog/product')->getCollection();

//magento get range of products
$collection = Mage::getModel('catalog/product')->getCollection();
$collection->addAttributeToSelect('name');
$collection->addAttributeToSelect('orig_price');
This entry was posted in Magento. Bookmark the permalink.  ?>

##############################################################
magneto currrnecy gate S

<?php
get(number_format($_product->getPrice(),2));
?>

##############################################################

<?php Blog url for  reference 
tp://xmlandcsshelp.blogspot.com/2011_02_01_archive.ml
 ?>
##############################################################


<?php  Website store :

 tp://inchoo.net/ecommerce/magento/how-to-set-multiple-websites-with-multiple-store-views-in-magento/                 ?>
##############################################################

goti bestseller 
tp://www.thesourcelounge.com/magento/magento-custom-list-all-products-page

in cms page 

<reference name="content">
    <block type="catalog/product_list"  name="product_list" template="customname/bestseller.pml">
        <block type="catalog/product_list_toolbar" name="product_list_toolbar" template="catalog/product/list/toolbar.pml">
            <block type="page/ml_pager" name="product_list_toolbar_pager"/>
        </block>
        <action method="setCategoryId"><category_id>2</category_id></action>
  <action method="setColumnCount"><columns>4</columns></action>
        <action method="setToolbarBlockName"><name>product_list_toolbar</name></action>
    </block>
</reference> 



<?php
$visibility     = array(
                      Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH,
                      Mage_Catalog_Model_Product_Visibility::VISIBILITY_IN_CATALOG
                  );

$storeId    = Mage::app()->getStore()->getId();

$_featcategory = Mage::getModel('catalog/category')->load(68);
 //replace 68 with the id of your featured category
$_productCollection = Mage::getResourceModel('catalog/product_collection')
                        ->addAttributeToSelect('*')
    			->addAttributeToFilter('visibility', $visibility)
		        ->setStoreId($storeId)
                        ->addStoreFilter($storeId)
    		        ->ategoryFilter($_featcategory) //feature category to list first
			->setPageSize(12);	// number of products to list per page view
?>

##############################################################
<?php 
color switcher in magento colorkush
tp://www.ecomthemes.com/archives/tag/color?>
##############################################################
<?php
Project site
tp://www.phpkode.com/projects/

?>
##############################################################

<?php
 quwer 1
 tp://efreedom.com/Question/1-3062427/Magento-Products-Categories ?>

##############################################################
workiing better
<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * tp://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to tp://www.magentocommerce.com for more information.
 *
 * @category   design_default
 * @package    Mage
 * @copyrig  Copyrig (c) 2008 Irubin Consulting Inc. DBA Varien (tp://www.varien.com)
 * @license    tp://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
?>


<div class="box base-mini  mini-country-region">
	<div class="head"></div>
	<div class="content">
		<ul>
		<?php
		$currentStoreRootCatId	= Mage::app()->getStore()->getRootCategoryId(); // To get Current store root category Id
		$currentCategoryId		= Mage::getBlockSingleton('catalog/navigation')->getCurrentCategory()->getId(); // To get Current category Id
		$category				= Mage::getModel('catalog/category')->getCategories(13);
		
		$layer = Mage::getSingleton('catalog/layer');
		$categoryLayer   = $layer->getCurrentCategory();
		$CatPathIds				= $categoryLayer->__toArray();
		$CatPathIds				= $CatPathIds['path_ids'];
		$CurrentCatChildrenId	= explode(",",$categoryLayer->getAllChildren());
		
		foreach($category as $_category):
			$currentCat = Mage::getModel('catalog/category')->load($_category->getId());
		?>
        	<!-- First Step -->
        	<li><a href="<?php echo $currentCat->getUrl()?>"><?php echo $currentCat->getName();?></a> (<?php echo $currentCat->getProductCount() ?>) </li>
			<?php $_category		= Mage::getModel('catalog/category')->load($currentCat->getId()) ?>
			<?php $_subcategories	= $_category->getChildrenCategories() ?>
            <?php $arrId			= explode(",", $_category->getAllChildren());  //&& in_array($arrId[0],$CurrentCatChildrenId)?>            
			<?php if (count($_subcategories) > 0 && $this->isCategoryActive($_category)): ?>
            
				<ul>
				<?php foreach($_subcategories as $_subcategory): ?>
					<!-- Second Step -->
					<li> &nbsp;&nbsp;&nbsp;<a href="<?php echo $_subcategory->getUrl()?>"><?php echo $_subcategory->getName() ?></a>(<?php echo $_subcategory->getProductCount() ?>)</li>
					<?php $_categorySub			= Mage::getModel('catalog/category')->load($_subcategory->getId()) ?>
					<
                    <?php $arrSubofsubcategoriesId	= explode(",", $_categorySub->getAllChildren()); ?>
					<?php if (count($_subofsubcategories) > 0 && $this->isCategoryActive($_categorySub)): ?>
						<ul>
						<?php foreach($_subofsubcategories as $_subofsubcat): ?>
                        	<!-- Third Step -->
							<li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $_subofsubcat->getUrl()?>"><?php echo $_subofsubcat->getName() ?></a> (<?php echo $_subofsubcat->getProductCount() ?>)</li>
							<?php $_categorySub1			= Mage::getModel('catalog/category')->load($_subofsubcat->getId()) ?>
							<?php $_subofsubcategories1		= $_categorySub1->getChildrenCategories() ?>
                            <?php $_subofsubcategories1Id	= explode(",", $_categorySub1->getAllChildren());?>
							<?php if (count($_subofsubcategories1) > 0 && $this->isCategoryActive($_categorySub1)): ?>
								<ul>
									<?php foreach($_subofsubcategories1 as $_subofsubcat1): ?>
                                    <!-- Fourth Step -->
                                    <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $_subofsubcat1->getUrl()?>"><?php echo $_subofsubcat1->getName() ?></a> (<?php echo $_subofsubcat1->getProductCount() ?>)</li>
									<?php endforeach; ?>
								</ul>
							<?php endif;?>
						<?php endforeach; ?>
						</ul>
					<?php endif;?>
				<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		<?php endforeach; ?>
		</ul>
	</div>
</div>

<div class="box base-mini  mini-wine-types">
	<div class="head"></div>
	<div class="content">
		<ul>
		<?php
		$currentStoreRootCatId	= Mage::app()->getStore()->getRootCategoryId(); // To get Current store root category Id
		$currentCategoryId		= Mage::getBlockSingleton('catalog/navigation')->getCurrentCategory()->getId(); // To get Current category Id
		$category				= Mage::getModel('catalog/category')->getCategories(10);
		
		$layer = Mage::getSingleton('catalog/layer');
		$categoryLayer   = $layer->getCurrentCategory();
		$CatPathIds				= $categoryLayer->__toArray();
		$CatPathIds				= $CatPathIds['path_ids'];
		$CurrentCatChildrenId	= explode(",",$categoryLayer->getAllChildren());
		
		foreach($category as $_category):
			$currentCat = Mage::getModel('catalog/category')->load($_category->getId());
		?>
        	<!-- First Step -->
        	<li><a href="<?php echo $currentCat->getUrl()?>"><?php echo $currentCat->getName();?></a> (<?php echo $currentCat->getProductCount() ?>) </li>
			<?php $_category		= Mage::getModel('catalog/category')->load($currentCat->getId()) ?>
			<?php $_subcategories	= $_category->getChildrenCategories() ?>
            <?php $arrId			= explode(",", $_category->getAllChildren());  //&& in_array($arrId[0],$CurrentCatChildrenId)?>            
			<?php if (count($_subcategories) > 0 && $this->isCategoryActive($_category)): ?>
            
				<ul>
				<?php foreach($_subcategories as $_subcategory): ?>
					<!-- Second Step -->
					<li> &nbsp;&nbsp;&nbsp;<a href="<?php echo $_subcategory->getUrl()?>"><?php echo $_subcategory->getName() ?></a>(<?php echo $_subcategory->getProductCount() ?>)</li>
					<?php $_categorySub			= Mage::getModel('catalog/category')->load($_subcategory->getId()) ?>
					<?php $_subofsubcategories	= $_categorySub->getChildrenCategories() ?>
                    <?php $arrSubofsubcategoriesId	= explode(",", $_categorySub->getAllChildren()); ?>
                    <?php $sub_subcategory = Mage::getModel('catalog/category')->load($_subcategory->getId()) ?>
                    
					<?php if (count($_subofsubcategories) > 0 && $this->isCategoryActive($_categorySub)): ?>
						<ul>
						<?php foreach($_subofsubcategories as $_subofsubcat): ?>
                        	<!-- Third Step -->
							<li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $_subofsubcat->getUrl()?>"><?php echo $_subofsubcat->getName() ?></a> (<?php echo $_subofsubcat->getProductCount() ?>)</li>
							<?php $_categorySub1			= Mage::getModel('catalog/category')->load($_subofsubcat->getId()) ?>
							<?php $_subofsubcategories1		= $_categorySub1->getChildrenCategories() ?>
                            <?php $_subofsubcategories1Id	= explode(",", $_categorySub1->getAllChildren());?>
							<?php if (count($_subofsubcategories1) > 0 && $this->isCategoryActive($_categorySub1)): ?>
								<ul>
									<?php foreach($_subofsubcategories1 as $_subofsubcat1): ?>
                                    <!-- Fourth Step -->
                                    <li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $_subofsubcat1->getUrl()?>"><?php echo $_subofsubcat1->getName() ?></a> (<?php echo $_subofsubcat1->getProductCount() ?>)</li>
									<?php endforeach; ?>
								</ul>
							<?php endif;?>
						<?php endforeach; ?>
						</ul>
					<?php endif;?>
				<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		<?php endforeach; ?>
		</ul>
	</div>
</div>






##############################################################
create category image and subcategory image
<?php 
tp://www.sjlwebdesign.co.uk/sjl-blog/index.php/web-design/magento-subcategories-inside-parent-category/
?>

##############################################################

call  category and subcatgory image
  sandip1
asasas	<div>
<?php $_maincategorylisting=$this->getCurrentCategory()?>
<?php $_categories=$this->getCurrentChildCategories()?>
<?php if($_categories->count()):?>
<? foreach ($_categories as $_category):?>
<? if($_category->getIsActive()):
$cur_category=Mage::getModel('catalog/category')->load($_category->getId());
$layer = Mage::getSingleton('catalog/layer');
$layer->setCurrentCategory($cur_category);
$catName = $this->getCurrentCategory()->getName();
if($_imageUrl=!$this->getCurrentCategory()->getImageUrl()):?>
<div>
<div>
<a href="<?php echo $this->getCategoryUrl($_category)?>"><img alt="category image" src="<?php echo Mage::getBaseUrl(); ?>skin/frontend/default/your_theme/images/default.gif" /></a>
</div>
<div>
<a href="<?php echo $this->getCategoryUrl($_category)?>"><?php echo $catName ?></a>
</div>
</div>
<? endif?>
<? if($_imageUrl=$this->getCurrentCategory()->getImageUrl()):?>
<div>
<div>
<a href="<?php echo $this->getCategoryUrl($_category)?>"><img src="<?php echo $_imageUrl?>" alt="<?php echo $_category->getName()?>" /></a>
</div>
<div>
<a href="<?php echo $this->getCategoryUrl($_category)?>"> <?php echo $_category->getName()?></a>
</div>
</div>
<? endif; endif; ?>
<? endforeach ?>
<?php /* This resets the category back to the original pages category
****     If this is not done, subsequent calls on the same page will use the last category
****    in the foreach loop   */   ?>
<?php $layer->setCurrentCategory($_maincategorylisting);  ?>
<? endif; ?>
</div>
##############################################################

##############################################################

<?php
------- ----------------- ----------------------
/**
* get current category
*/
$currCat = Mage::registry('current_category');

/**
* get sub categories of current category
*/
$collection = Mage::getModel('catalog/category')->getCategories

($currCat->getEntityId());

/**
* looping through sub categories
* only showing active sub categories ($cat->getIsActive())
*/
foreach($collection as $cat) {
if($cat->getIsActive()) {
$category = Mage::getModel('catalog/category')->load($cat-

>getEntityId());

/**
* getting product collection for a particular category
* applying status and visibility filter to the product collection
* i.e. only fetching visible and enabled products
*/
$prodCollection = Mage::getResourceModel

('catalog/product_collection')->ategoryFilter($category);
Mage::getSingleton('catalog/product_status')-

>addVisibleFilterToCollection($prodCollection);
Mage::getSingleton('catalog/product_visibility')-

>addVisibleInCatalogFilterToCollection($prodCollection);

?>

<a href="<?php echo $category->getUrl() ?>"><?php echo $category-

>getName() ?></a> (<?php echo $prodCollection->count() ?>)<br/>

<?php
}
}


####################################################################

##############################################################

echo  $category = Mage::getModel('catalog/category')->load($cat-

>getEntityId());
    
       //reference by this line  $category = Mage::getModel

('catalog/category')->load($this->getCategoryId());
            
     
     
	
   $product_Collection = Mage::getResourceModel

('catalog/product_collection')->ategoryFilter($category);

(category collection by product)
####################################################################

##############################################################
tp://php.quicoto.com/how-to-random-products-home-magento/(random 

product listing in home page in mangeto )

####################################################################

##############################################################

   1.add attributr list 
      $product = Mage::getModel('catalog/product');
   2.
       
   3.
      $attributes = Mage::getResourceModel

('eav/entity_attribute_collection')
   4.
          ->setEntityTypeFilter($product->getResource()->getTypeId

())
   5.
          ->addFieldToFilter('attribute_code', 'manufacturer') // 

This can be changed to any attribute code
   6.
          ->load(false);
   7.
       
   8.
      $attribute = $attributes->getFirstItem()->setEntity($product-

>getResource());
   9.
       
  10.
      /* @var $attribute Mage_Eav_Model_Entity_Attribute */
  11.
      $manufacturers = $attribute->getSource()->getAllOptions

(false);



####################################################################

##############################################################
catalog advanced seacrh from 
<?php if( !isset($_GET['category']) ): ?>
<form action="<?echo $this->getUrl

('catalogsearch/advanced/result')?>" method="get" 

id="category_search_form">
<?php

if ($this->helper('catalog/data')->getCategory()) {
$_ccat = $this->helper('catalog/data')->getCategory();
} else {
$_ccats = $this->helper('catalog/data')->getProduct()-

>getCategoryIds();
$_ccat = Mage::getModel('catalog/category')->load($_ccats[0]);
};
$_ccatID = $_ccat->getId();
?>
<input type="hidden" id="category_search_field" name="category" 

value="<?php echo $_ccatID ?>" />
<div>
<input name="name" id="searchcat" value="<?php echo $this->__

('Search Category') ?>" title="Name" class="input-text " type="text" 

/>

<input type="image"  src="<?php echo $this->getSkinUrl

('images/ico_s_search.png')?>"  class="cw_buttonicon" />
</div>
</form>
<script type="text/javascript">
//<![CDATA[
var searchForm = new Varien.searchForm('category_search_form', 

'searchcat', '<?php echo $this->__('Search Category') ?>');
searchForm.initAutocomplete('<?php echo $this->helper

('catalogSearch')->getSuggestUrl() ?>', 'search_autocomplete');
//]]>
</script>
<?php endif; ?>

####################################################################
====== Getting and Using Categories and Sub Categories . . ======

The code below does a couple of things, first it will get all the store's categories - it then checks to see if they are active before continuing.

Also - it mig be helpful to have the sub categories displayed, rig?  Well, in my case, I only wanted the subcategory for the current category displayed - so I put a check in to do so.

<code php>
<?php
/* Get the categories that are active for the store */
$_main_categories=$this->getStoreCategories();

/* Get the current category the user is in */
$_current_category=$this->getCurrentCategory();

/* Get the current category path */
$_categorypath = $this->getCurrentCategoryPath();
?>
<ul>
<?php
if ($_main_categories):
    /* This bit cycles through the categories - setting the next one to current */
    foreach ($_main_categories as $_main_category):
      if($_main_category->getIsActive()):                             
           $cur_category=Mage::getModel('catalog/category')->load($_main_category->getId());
           $layer = Mage::getSingleton('catalog/layer');
           $layer->setCurrentCategory($cur_category);     

/* Write the main categories */           
?>                
<li><a href="<?php echo $this->getCurrentCategory()->getUrl()?>"><?php echo $this->getCurrentCategory()->getName();?></a></li>   


<?php 

/* Check the category variable loop against the current category path if it is - print sub categories */
if (in_array($this->getCurrentCategory()->getId(), $_categorypath)): ?>
<?php $_maincategorylisting=$this->getCurrentCategory()?>                        
<?php $_categories=$this->getCurrentChildCategories()?>
<?php if($_categories->count()):?>

<ul>
<? foreach ($_categories as $_category):?>                    
   <? if($_category->getIsActive()):                    
           $cur_subcategory=Mage::getModel('catalog/category')->load($_category->getId());
           $layer = Mage::getSingleton('catalog/layer');
           $layer->setCurrentCategory($cur_subcategory);  
          
?>                          
<li><a href="<?php echo $this->getCategoryUrl($_category)?>"> <?php echo $_category->getName()?></a></li>
    <? endif;?>
<?endforeach?>
</ul>            
<?php /* This resets the category back to the original pages category
****     If this is not done, subsequent calls on the same page will use the last category
****    in the foreach loop
*/   ?>

<?endif;?>   
 
<?endif;?> 
                                  
<?php $layer->setCurrentCategory($_current_category); ?>  
                                                              
<?php         
endif;
endforeach; 
else:
?>
<p>$_main_categories array was empty.</p>
<p>This mig be because you are referencing this pml file with a wrong type attribute. You should use <block type="catalog/navigation" ... /> !</p>
<?php endif; ?>
</code>##############################################################
custum code of php pml by kushagra Daharwal

<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 

3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * tp://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy 

immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to 

newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to tp://www.magentocommerce.com for more 

information.
 *
 * @category    design
 * @package     base_default
 * @copyrig   Copyrig (c) 2011 Magento Inc. 

(tp://www.magentocommerce.com)
 * @license     tp://opensource.org/licenses/afl-3.0.php  Academic 

Free License (AFL 3.0)
 */
?>
<?php
/**
 * Category layered navigation
 *
 * @see Mage_Catalog_Block_Layer_View
 */
?>

<?php

$category1 = new Mage_Catalog_Block_Navigation();

$category = $category1->getCurrentCategory();


$products = Mage::getModel('catalog/product')->getCollection();
        
	    $products->addAttributeToFilter('status', 1);//enabled
        $products->ategoryFilter($category);
        $products->addAttributeToSelect('*');
        $collection2 = Mage::getModel('catalog/category')-

>getAttributeToFilter( $category->getEntityId());
       // echo "<pre>";
		//print_r($collection2);
		
		$prodIds=$products->getAllIds();
		//echo "<pre>";
		//print_r($prodIds);
		$product = Mage::getModel('catalog/product');
        $count=1;
        foreach($prodIds as $productId)
        {


           // echo "$count <br>";
            $product->load($productId);

            $product_data = array();
            $product_data['sku']=$product->getSku();
            $product_data['title']=$product->getName();
            $product_data['description']=$product->getDescription();
            $product_data['link']=$product->getProductUrl();
            $product_data['image_link']=Mage::getBaseUrl

(Mage_Core_Model_Store::URL_TYPE_MEDIA).'catalog/product'.$product-

>getImage();
            $product_data['price']=$product->getPrice();
            $product_data['brand']=$product->getResource()-

>getAttribute('manufacturer')->getFrontend()->getValue($product);
            $product_data['product_type']='';

            //get the product categories
            foreach($product->getCategoryIds() as $_categoryId){
            $category = Mage::getModel('catalog/category')->load

($_categoryId);
            $product_data['product_type'].=$category->getName().', 

';
            }
            $product_data['product_type']=rtrim($product_data

['product_type'],', ');
            echo "<ul>";
			echo "<li style=list-style:none;>";
			  echo  $product_data['title']=$product-

>getName();
			echo round($product_data['price']=$product-

>getPrice(),'2');
		
			echo "</li>";
            echo "</ul>";
		  //  echo $product_data['title']=$product->getName

();


            //echo 'Loop end: '.memory_get_usage(false).'<br>';
            //flush();
            $count++;
        }5:08 PM 10/21/2011
?>
<?php $write = Mage::getSingleton('core/resource')->getConnection

('core_write');
$readresult = $write->query("SELECT *  FROM 

catalog_category_product");
$row = $readresult->fetchAll() ?>
<?php //echo "<pre>";?>
<?php //print_r($row); ?>
<!--get current category product collection by kushagra testing 

purpose -->
<?php 
$cat = new Mage_Catalog_Block_Navigation();
$curcata = $cat->getCurrentCategory();
echo $curcata->getName();
echo "<br>";
$collection = Mage::getModel('catalog/category')->getCategories

($curcata->getEntityId());
foreach($collection as $cat) {
if($cat->getIsActive())
 {
   echo  $category = Mage::getModel('catalog/category')->load($cat-

>getEntityId());
    
       //reference by this line  $category = Mage::getModel

('catalog/category')->load($this->getCategoryId());
            
   $product_Collection = Mage::getResourceModel

('catalog/product_collection')->ategoryFilter($category);
 //   echo $product_Collection = Mage::getResourceModel

('catalog/product_collection')->addAttributeToFilter('color');

   // echo "<pre>";
	//print_r($product_Collection); 
    Mage::getSingleton('catalog/product_status')-

>addVisibleFilterToCollection($product_Collection);
  
   Mage::getSingleton('catalog/product_visibility')-

>addVisibleInCatalogFilterToCollection($product_Collection);
   

?>
6:31 PM 10/24/2011
<a href="<?php echo $category->getUrl() ?>"><?php echo $category-

>getName() ?></a> (<?php echo $product_Collection->count() ?>)<br/>

<?php }  ?>
<?php }  ?>

<!--get current category product collection by kushagra testing 

purpose -->



<?php foreach($subs as $cat_id): ?>
        <?php $_categ->load($cat_id)?>        
        <?php $collection = $_categ->getProductCollection(); ?> 
        <?php echo $collection->addAttributeToSelect('color')?>  
        <?php endforeach;?>


<?php if($this->canShowOptions()): ?>
<?php $product_mo = Mage::getModel("catalog/product")>
 
       $filterableAttributes = $this->_getFilterableAttributes();

       ?>
       <ul>
       <?php  
		foreach ($filterableAttributes as $attribute) {
            $filters[] = $this->getChild($attribute-

>getAttributeCode() . '_filter');
             ?>
          <li style="list-style:none;"><font style="color:#F00;"><?

php // echo $this->__('Attribute Name-->')?><?php //echo  

$attribute[frontend_label]; ?></font></li>
          <li style="list-style:none;"><font style="color:#096;"><?

php  echo $this->__('Attribute Code-->')?><?php 	echo  

$attribute[attribute_code]; ?>  </font>
			 <?php  $_product=Mage::getModel

('catalog/product');
                    $attribute = $_product->getResource()-

>getAttribute($attribute[attribute_code]);
			        if($attribute->usesSource()){
                     $options = $attribute->getSource()-

>getAllOptions(false);
                         echo "<ul>";
					     foreach($options as 

$options1)
                             {
	                             echo "<li style=list-

style:none;>"; ?>  
					
					 <?php  // echo $options1-

>getItemsCount();  	?>
					 <?php echo  $optionvalue =  

$options1[label];   ?>
	                          <?php  echo "</li>";
							
                             }
                         
	                     echo "</ul>";
                     }
               ?>
             </li>
            
	    <?php }
?>

 
<?php endif;?>

<?php if($this->canShowBlock()): ?>
<div class="block block-layered-nav">
    <div class="block-title">
        <strong><span><?php echo $this->__('Shop By') ?

></span></strong>
    </div>
    <div class="block-content">
        <?php echo $this->getStateHtml() ?>
        <?php if($this->canShowOptions()): ?>
            <p class="block-subtitle"><?php echo $this->__('Shopping 

Options') ?></p>
            <dl id="narrow-by-list">
                <?php $_filters = $this->getFilters() ?>
                <?php foreach ($_filters as $_filter): ?>
                <?php if($_filter->getItemsCount()): ?>
                    <dt><?php echo $this->__($_filter->getName()) ?

></dt>
                    <dd><?php echo $_filter->getHtml() ?></dd>
                <?php endif; ?>
                <?php endforeach; ?>
            </dl>
            <script type="text/javascript">decorateDataList

('narrow-by-list')</script>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>


####################################################################
<?php $collection = $category->getProductCollection()->addAttributeToSort('name', 'asc'); ?>
to sort product collection 

##############################################################
query of magneto :
 $write = Mage::getSingleton('core/resource')->getConnection

('core_write');
          $readresult = $write->query("SELECT * FROM 

catalog_product_entity ");
          $row = $readresult->fetch();
####################################################################


category tree 

<?php
$cat_mod = Mage::getModel('catalog/category');
$_main_categories=$this->getStoreCategories();
if ($_main_categories):
    foreach ($_main_categories as $_main_category):
      if($_main_category->getIsActive()):
           $cid = $_main_category->getId();
           $cur_category = $cat_mod->load($cid);
           $category_name = $cur_category->getName();
           echo '-'.$category_name.'<br/>';
           res($cur_category,'-');
      endif;
    endforeach;
endif;    
 
function res($cur_category,$s)
{
    $children_categories = $cur_category->getChildrenCategories();
    if(!empty($children_categories))
    {
        $s .= $s;
        foreach($children_categories as $k => $v)
        {
            $all_data = $v->getData();
            $nm = $all_data['name'];
            echo $s.$nm.'<br/>';
            res($v,$s);
        }
    }
}
?>

##############################################################


Magento: Get sub categories and product count
/**
 * get current category
 */
$currCat = Mage::registry('current_category');
 
/**
 * get sub categories of current category
 */
$collection = Mage::getModel('catalog/category')->getCategories

($currCat->getEntityId());
 
/**
 * looping through sub categories
 * only showing active sub categories ($cat->getIsActive())
 */
foreach($collection as $cat) {
    if($cat->getIsActive()) {
        $category = Mage::getModel('catalog/category')->load($cat-

>getEntityId());
 
        /**
         * getting product collection for a particular category
         * applying status and visibility filter to the product 

collection
         * i.e. only fetching visible and enabled products
         */
        $prodCollection = Mage::getResourceModel

('catalog/product_collection')->ategoryFilter($category);
        Mage::getSingleton('catalog/product_status')-

>addVisibleFilterToCollection($prodCollection);
        Mage::getSingleton('catalog/product_visibility')-

>addVisibleInCatalogFilterToCollection($prodCollection);
 
        ?>
 
        <a href="<?php echo $category->getUrl() ?>"><?php echo 

$category->getName() ?></a> (<?php echo $prodCollection->count() ?

>)<br/>
 
        <?php
    }	
}


####################################################################

##############################################################

How to show products with toolbar and pagination in magento static 

block

{{block type="yourmodule/blockname" name="product_list" 

category_id="6? column_count="3? count="6? limit="4? mode="grid" 

toolbar_block_name="product_list_toolbar" 

template="catalog/product/list.pml"}}






####################################################################

<?php

   $store_category = Mage::app()->getStore()->getRootCategoryId();
  
   //echo $store_category ;  //get all product designers 
   $product = Mage::getModel('catalog/product'); 
   $attributes = Mage::getResourceModel('eav/entity_attribute_collection') ->setEntityTypeFilter($product->getResource()->getTypeId()) ->addFieldToFilter('attribute_code', 'color') ;
  // This can be changed to any attribute

   $attribute = $attributes->getFirstItem()->setEntity($product->getResource()); 
   $designers = $attribute->getSource()->getAllOptions(false);
  
    

   //get all products $collection = Mage::getModel('catalog/product')->getCollection();
    $new_collection = Mage::getModel('catalog/category')->load($store_category)->getProductCollection();
	
	 
   //filter to only get visible products 
  $kaka=   $new_collection->addAttributeToFilter('visibility', Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH); //filter by [...]
   
  // echo "<pre>";
  // print_r( $kaka->getData());

?> 

##############################################################

Add custom breadcrumbs to any pages
Share
Posted on August 9th, 2011 | Posted by admin

Dear my friends,
Today I'll write about the breadcrumbs. I'll explain how to add 

breadcrumbs to your custom module (Due to default settings, your 

custom module doesn't contain a breadcrumbs).
We will add links to breadcrumbs block of Magento.
Open the block that you want to add breadcrumbs then find function

public function _prepareLayout()

Then change it to:


public function _prepareLayout()
{
	$breadcrumbs = $this->getLayout()->getBlock('breadcrumbs');
	$breadcrumbs->rumb('home', array('label'=>Mage::helper

('cms')->__('Home'), 


'title'=>Mage::helper('cms')->__('Home Page'), 

'link'=>Mage::getBaseUrl()));
	$breadcrumbs->rumb('an_alias', array('label'=>'Your 

label', 

'title'=>'Your title', 'link'=>Mage::getUrl

("your_module/your_block")));

	return parent::_prepareLayout();
}



####################################################################

##############################################################
call the related catagory product:

<?php  
        $procollection = Mage::getModel('catalog/category')->load

(10)
   
                   ->getProductCollection()
     
                   ->addAttributeToSort('name');
   echo   count($procollection);
  foreach($procollection as $procollection1)
   {
	 echo $procollection1[name];
	
	 echo '<br>';
	}
?> 


####################################################################

##############################################################


getfilterableattribute 

$filterableAttributes = $this->_getFilterableAttributes();



####################################################################

##############################################################

searching option ad per attribute name :
<?php
    $product=Mage::getModel('catalog/product');
   
    $filterableAttributes = $this->_getFilterableAttributes();
    
    foreach ($filterableAttributes as $attribute) {
	
	       $filters[] = $this->getChild($attribute-

>getAttributeCode() . '_filter');
	
		 }
			
   
     $attributeInfo=Mage::getResourceModel

('eav/entity_attribute_collection')->addFieldToFilter

('attribute_code',$attribute[attribute_code])->load(false);
     

	
	$attribute=$attributeInfo->getFirstItem()->setEntity

($product->getResource());

	
	$attributename=$attribute->getSource()->getAllOptions

(false);
	
     $url='catalogsearch/result/?q=';
	 
	
	foreach($attributename as $attributename1):
       $val=$attributename1['label'];
    ?>
    <ul>
    <li style="list-style:none;">
    <a href="<?php echo Mage::getURL().$url.$val?>"><?php echo 

$attributename1['label']?><?php //echo count($attributename1);?></a>
</li></ul>
<?php endforeach;?>


		
####################################################################

##############################################################
<?php
$_category  = $this->getCurrentCategory(); 
$collection = Mage::getModel('catalog/category')->getCategories

($_category->entity_id); //Get the current category and its children

foreach ($collection as $category){ //Loop through the categories
    $subCategory = Mage::getModel('catalog/category')->load

($category->getId()); 

//Get the child category models
    $imgSrc = $subCategory->getImageUrl(); //Get the image url
    if($imgSrc){ 
        echo '<img src="'.$imgSrc.'" />'; //Echo  the image
    }
}	
?>

 				
####################################################################

##############################################################
get categoty product collection
<?php $store_category = Mage::app()->getStore()->getRootCategoryId

(); ?>
<?php $coll = Mage::getModel("catalog/category")->load

($store_category)->getProductCollection();?>
####################################################################

##############################################################

get product reviews : in home page :
<?php

$storeId    = Mage::app()->getStore()->getId();

$summaryData = Mage::getModel('review/review_summary')
->setStoreId($storeId)
->load($_product->getId());

/* @var $summaryData Mage_Review_Model_Review_Summary */

/*

array(
['primary_id'] => 147
['entity_pk_value'] => 166
['entity_type'] => 1
['reviews_count'] => 1
['rating_summary'] => 80
['store_id'] => 1
)
*/

?>


####################################################################

##############################################################

brand listing by kushagra : 
/**
 * Brand Listing
 *
 *
 */
?>
<div>
 
 <div>
 <h4><span>Our Brands</span></h4>
 </div>
<div style="padding-left:8px;">
<?php
$product = Mage::getModel('catalog/product');
$attributes = Mage::getResourceModel('eav/entity_attribute_collection')
                   ->setEntityTypeFilter($product->getResource()->getTypeId())
                   ->addFieldToFilter('attribute_code', 'manufacturer');
				                           $attribute = $attributes->getFirstItem()->setEntity($product->getResource());
$manufacturers = $attribute->getSource()->getAllOptions(false);
?>
<ul id="manufacturer_list">
<?php foreach ($manufacturers as $manufacturer): ?>
<li><a  href="tp://www.soamjena.com/catalogsearch/advanced/result/?manufacturer[]=<?php echo $manufacturer['value'] ?>"><?php echo 
$manufacturer['label'] ?></a></li>
<?php endforeach; ?>
</ul>
</div>
<div></div></div>


####################################################################

##############################################################

<?php
$visibility     = array(
                      

Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH,
                      

Mage_Catalog_Model_Product_Visibility::VISIBILITY_IN_CATALOG
                  );

$storeId    = Mage::app()->getStore()->getId();

$_featcategory = Mage::getModel('catalog/category')->load(13);
 //replace 68 with the id of your featured category
$_productCollection = Mage::getResourceModel

('catalog/product_collection')
                        ->addAttributeToSelect('*')
    			->addAttributeToFilter('visibility', 

$visibility)
		        ->setStoreId($storeId)
                        ->addStoreFilter($storeId)
    		        ->ategoryFilter($_featcategory) 

//feature category to list first
			->setPageSize(12);	// number of 

products to list per page view
?>
<?php foreach($_productCollection as $_productCollection1) ?>
 <?php {?>
 <?php echo  $_productCollection1['name]'];?>
 <?php }?>

####################################################################

##############################################################
bestssellling product by kushagar 

<div class="block best-seller">
<div class="rig-title-bg"><h3>Best Selling Product</h3></div>
<div class="block-content">
<ul class="best-selling-item">
<?php $count = 0;
foreach($_productCollection as $product):
$id = $product->getId();
$prod = Mage::getModel('catalog/product')->load($id);?>
<li><a href="<?php echo $prod->getProductUrl();?>" title="<?php echo 

$prod->getName();?>"><?php echo $prod->getName();?></a></li>
<?php
$count++ ;
if($count==$totalPerPage)
break;
endforeach;
?>
</ul>
</div>
</div>
v###################################################################

###############################################################

get product collection as per category id 
<?php 
     $id = 10;
   
    $model1=Mage::getModel('catalog/category')->load($id);
	$collection = $model1->getProductCollection();
	               $collection->addAttributeToSelect('name');
 
  ?>
 
<ul>
 
<?php foreach($collection as $product) : ?>
	<li style="float:left;"><a href="<?php echo $product-

>getProductUrl() ?>"><?php echo $product->getName() ?><img src="<?

php // echo $this->helper('catalog/image')->init($product, 

'small_image')->resize(135); ?>" width="50" heig="50" alt="<?php 

echo $this->stripTags($this->getImageLabel($product, 'small_image'), 

null, true) ?>"/></a></li>			
<?php endforeach; ?>
 
</ul>

####################################################################

##############################################################

searching for a particular atribute product  :

<?php  echo "searching products as per attribute"; ?>
<?php
$product = Mage::getModel('catalog/product');
$attributes = Mage::getResourceModel

('eav/entity_attribute_collection')
           ->setEntityTypeFilter($product->getResource()->getTypeId

())
           ->addFieldToFilter('attribute_code', 'color');
           $attribute = $attributes->getFirstItem()->setEntity

($product->getResource());
            $manufacturers = $attribute->getSource()->getAllOptions

(false);

echo count($manufacturers);
?>
<ul id="manufacturer_list">
<?php foreach ($manufacturers as $manufacturer): ?>
<li><a href="tp://180.211.110.196/mg-

projects/magento1401/catalogsearch/result/?q=<?php echo 

$manufacturer['label'] ?>"><?php echo $manufacturer['label'] ?

></a></li>
<?php endforeach; ?>



####################################################################

##############################################################


made the array 
$manufacturers = $products->toArray(array('brand_name'));   
$temp = array();
foreach($manufacturers as $v) {
    $temp[] = $v['brand_name'];
}
####################################################################

##############################################################

			    <action 

method="setColumnCount"><columns>5</columns></action>




####################################################################

##############################################################
getattribute calur of drop dwon list : 

<?php echo $_product->getAttributeText('attribute_name') ?>

####################################################################
<?php Simple Product

$collectionSimple = Mage::getResourceModel('catalog/product_collection')
                  ->addAttributeToFilter('type_id', array('eq' => 'simple'));
 

Configurable Product

$collectionConfigurable = Mage::getResourceModel('catalog/product_collection')
                ->addAttributeToFilter('type_id', array('eq' => 'configurable'));

 

Bundle Product

$collectionBundle = Mage::getResourceModel('catalog/product_collection')
                   ->addAttributeToFilter('type_id', array('eq' => 'bundle'));
  
 

Grouped Product

$collectionGrouped = Mage::getResourceModel('catalog/product_collection')
                ->addAttributeToFilter('type_id', array('eq' => 'grouped'));
  

Virtual Product

$collectionVirtual = Mage::getResourceModel('catalog/product_collection')
                ->addAttributeToFilter('type_id', array('eq' => 'virtual'));
?>
 
##############################################################


<?php  public function getParentCategories($category)
    {
        $pathIds = array_reverse(explode(',', $category->getPathInStore()));
        $categories = Mage::getResourceModel('catalog/category_collection')
            ->setStore(Mage::app()->getStore())
            ->addAttributeToSelect('name')
            ->addAttributeToSelect('url_key')
            ->addFieldToFilter('entity_id', array('in'=>$pathIds))
            ->addFieldToFilter('is_active', 1)
            ->load()
            ->getItems();
        return $categories;
    } ?>


get random product in home page :

tp://php.quicoto.com/how-to-random-products-home-magento/

####################################################################

##############################################################

contact form errore :
http://php.quicoto.com/how-to-fix-unable-to-submit-your-request-

please-try-again-later-contact-form/

v###################################################################

###############################################################

    <a href="tp://www.facebook.com/share.php?u=<?php echo 

Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB); ?>< ?=substr

($_SERVER['REQUEST_URI'], 1)?>"><img src="<?php echo 

Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN); 

?/>frontend/base/theme156/images/facebook.jpg" alt="" /></a>


    <a href="tp://twitter.com/home?status=<?php echo $_helper-

>productAttribute($_product, $_product->getName(), 'name') ?>+<?php 

echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB); ?>< ?

=substr($_SERVER['REQUEST_URI'], 1)?>"><img src="<?php echo 

Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN); 

?/>frontend/base/theme156/images/twitter.jpg" alt="" /></a>





###################################################################

##############################################################
change the price (like $ or other ) as per the country ijn magneto 

:::

tp://php.quicoto.com/how-to-change-currency-position-in-magento/


####################################################################

##############################################################


callimg rondom product on home page :


its for all category product 

<?php    
 
    //below code to written in file which extends the product block
    $collection = Mage::getResourceModel

('catalog/product_collection');
        Mage::getModel('catalog/layer')->prepareProductCollection

($collection);
        $collection->getSelect()->order('rand()');
        $collection->addStoreFilter();
        $this->setProductCollection($collection);
        return parent::_beforeToHtml();
 
        //below code to written in template file
 
        if (($_products = $this->getProductCollection())):
            echo $_product->getSku();
        endif;
 
?>

>>>>>>tp://blog.ecommercesoftwaresolutionsonline.com/archives/539/

displaying-new-most-viewed-random-products-in-cms-pages.ml\
####################################################################

##############################################################

call new product 
{{block type="catalog/product_new" name="home.catalog.product.new" 

alias="product_new" template="catalog/product/new.pml"}}
####################################################################

##############################################################

mostviewd product
{{block type="mostviewed/list" name="home.mostviewed.list" 

alias="product_homepage" template="catalog/product/list.pml"}}
####################################################################

##############################################################

random product limit



<?php

$_productCollection=$this->getLoadedProductCollection();
$_helper = $this->helper('catalog/output');

	if ($_productCollection->count()):

	$_productCollection = $_productCollection->getItems();
	shuffle($_productCollection);
	$i = 0;

		foreach ($_productCollection as $_product):

			if ($i < 1):

			// Product Data In Here

			endif;
			$i++;

		endforeach;

	endif;

?>
#########################################################
random produc without limit

<br/>
<br/>
<?PHP echo $this->__(' 
RANDOM PRODUCTS By KUSHAGRA ');?>
<?php
$_productCollection=$this->getLoadedProductCollection();
$_helper = $this->helper('catalog/output');

	if ($_productCollection->count()):

	$_productCollection = $_productCollection->getItems();
	shuffle($_productCollection);
?>

<ul>
	<?php 	foreach ($_productCollection as $_product):
 ?>
<?php  if($i < 5) :?>
             <li style="padding:12px;">   <a href="<?php echo 

$_product->getProductUrl() ?>" title="<?php echo $this->stripTags

($this->getImageLabel($_product, 'small_image'), null, true) ?>" 

class="product-image"><?php echo $_product->getName(); ?><img 

src="<?php echo $this->helper('catalog/image')->init($_product, 

'small_image')->resize(135); ?>" width="135" heig="135" alt="<?php 

echo $this->stripTags($this->getImageLabel($_product, 

'small_image'), null, true) ?>" /></a>
</li>
         <?php  $i++;?>
	   <?php 	endif;

	<?php 	endforeach; ?>
</ul>
<?php 	endif;

?>

v###################################################################

###############################################################
home page random product :


<div id="div1" align="center";"><div class="block best-seller" >
<div class="rig-title-bg"><h3>random product on 

homepage</h3></div>
<div class="block-content">
<ul class="best-selling-item">
<?php 
$category = Mage::getModel('catalog/category');
$category->load(10); // this is your special offers category id!
$collection = $category->getProductCollection();
$collection->getSelect()->order('rand()');//this is the random 
?>
<?php 


foreach($collection as $product):
 if ($i < 2)//give this condition for fix the value of product 
$id = $product->getId();
$prod = Mage::getModel('catalog/product')->load($id);

endforeach;
?>

<?php // echo "<pre>";?>
<?php // print_r($prod->getData());?>
<li> <a href="<?php echo $prod->getProductUrl() ?>" title="<?php 

echo $this->stripTags($this->getImageLabel($prod, 'small_image'), 

null, true) ?>" class="product-image"><?php echo $prod->getName();?

><img src="<?php  echo $this->helper('catalog/image')->init($prod, 

'small_image')->resize(135); ?>" width="50" heig="50" alt="<?php 

echo $this->stripTags($this->getImageLabel($prod, 'small_image'), 

null, true) ?>" /></a>
<a href="<?php echo $prod->getProductUrl();?>" title="<?php  echo 

$prod->getName();?>">
 <br/><?php echo round($prod->getPrice(),'2'). '&nbsp;'.'$'; ?>
</a></li>
<?php /*?><?php
$count++ ;
if($count==$totalPerPage)
break;
endforeach;
?><?php */?>
</ul>
</div>
</div>
</div>


####################################################################

##############################################################

layerd navigation in sidebar in drop downkey format :
<select onChange="setLocation(this.value)">
<?php foreach ($this->getItems() as $_item): ?>
    <option
        <?php if ($_item->getCount() > 0): ?>
        value="<?php echo $this->urlEscape($_item->getUrl()) ?>"><?

php echo $_item->getLabel() ?>
        <?php else: echo '>' . $_item->getLabel() ?>
        <?php endif; ?>
        (<?php echo $_item->getCount() ?>)
    </option>
<?php endforeach ?>
</select>


####################################################################

<?php    

in page.xml file layout first
  <default>
		<block type="core/text_list" name="featured.products" as="featured.products"/>
	</default>

?>

in hom.pml	<?php echo $this->getChildHtml('featured.products') ?>


<?
##############################################################
 ?>
 <?php 
call to the cms block to all the website in all the pages in magento we need to use it :
?>
<block type="cms/block" name="cms_toplinks">                
					<action method="setBlockId"><block_id>top_links</block_id></action>
				</block>
                <block type="page/template_links" name="top.links" as="topLinks"/>
                <block type="cms/block" name="cms_mainmenu">                
					<action method="setBlockId"><block_id>mainmenu</block_id></action>
				</block>
				<block type="core/text_list" name="top.menu" as="topMenu" translate="label">
                    <label>Navigation Bar</label>
                </block>
?>

####################################################################

to get the my cart value in home page 
<div class="sidebar-cart">
			<?php $_cartQty = Mage::getSingleton('checkout/cart')->getSummaryQty()?Mage::getSingleton('checkout/cart')->getSummaryQty():'0'; ?>
			<?php 
			$_subtotals = Mage::getSingleton('checkout/cart')->getQuote()->getTotals();
			$subtotal = $_subtotals["subtotal"]->getValue();
			?>
			<?php $_classcountfirst="";if ($subtotal==0){$_classcountfirst="<span>";}?>
			<?php $_classcountlast="";if ($subtotal==0){$_classcountlast="</span>";}?>
				
			<?php echo $this->__('<a href="%s" class="top-link-cart" id="topcartlink">Shopping bag: <span class="item-cart"> %s </span>item</a>', $this->getUrl('checkout/cart'), $_cartQty) ?>
			</div>


##############################################################
call the new products

 <reference  name="content">
  <block  type="catalog/product_new" name="product_new"  template="catalog/product/list.pml">
  <action  method="setColumnCount"><column_count>6</column_count></action>
  <action  method="setProductsCount"><count>0</count></action>
  </block>
  </reference>
####################################################################

<?php 


\app\design\frontend\default\meiller\template\page\ml\head.pml

<link rel="stylesheet" type="text/css" href="<?php echo $this->getSkinUrl('slider/css/screen.css') ?>" />
<script type="text/javascript" src="<?php echo $this->getSkinUrl('slider/js/jquery.js') ?>"></script>
<script type="text/javascript" src="<?php echo $this->getSkinUrl('slider/js/slider.js') ?>"></script>
<script type="text/javascript">
jQuery(document).ready(function(){	
	jQuery("#slider").easySlider({
		auto: true,
		continuous: true 
	});
});

</script>
------------------------------------

HTML CODE FOR SLIDER IN : To put this in home page 
Sandip Rathod says
 <div id="slider-wrapper">
<div id="slider">
<ul>
<li><a href="#"><img src="{{media url='agwines-slide/01.jpg' }}" border="0" alt="" /></a></li>
<li><a href="#"><img src="{{media url='agwines-slide/02.jpg' }}" border="0" alt="" /></a></li>
<li><a href="#"><img src="{{media url='agwines-slide/03.jpg'}}" border="0" alt="" /></a></li>
</ul>
</div>
</div> 
kushagra daharwal says
 yes ok  
kushagra daharwal says
 i put  
Sandip Rathod says
 skin\frontend\default\agwines\slider 
Sandip Rathod says
 I can't send you slider : take it from below path

\\192.168.0.129\ml\mg-projects\magento-1.6.1.0\skin\frontend\default\agwines 



?>


##############################################################

get store information :

<?php $name =  Mage::app()->getStore()->getName(); ?>

<?php  $storePhone = Mage::getStoreConfig('general/store_information/phone');
 ?>
 
get store address by this code

<?php echo Mage::getStoreConfig('general/store_information/address');    ?> 
####################################################################
call new products on home page in magento :


<?php 
{{block type="catalog/product_new" column_count="6" products_count="400" name="home.catalog.product.new" alias="product_homepage" template="catalog/product/new.pml"}}
?>
##############################################################

all category block content 

<reference name="content">
   <block type="catalog/product_new" name="product_new" template="catalog/product/list.pml">
      <action method="setCategoryId"><category_id>10</category_id></action>
      <action method="setColumnCount"><column_count>6</column_count></action>
      <action method="setProductsCount"><count>0</count></action>
      <block type="catalog/product_list_toolbar" name="product_list_toolbar" template="catalog/product/list/toolbar.pml">
         <block type="page/ml_pager" name="product_list_toolbar_pager" />
         <action method="setDefaultGridPerPage"><limit>12</limit></action>
         <action method="addPagerLimit"><mode>grid</mode><limit>12</limit></action>
         <action method="addPagerLimit"><mode>grid</mode><limit>24</limit></action>
         <action method="addPagerLimit"><mode>grid</mode><limit>36</limit></action>
         <action method="addPagerLimit"><mode>grid</mode><limit>48</limit></action>
         <action method="addPagerLimit" translate="label"><mode>grid</mode><limit>all</limit><label>All</label></action>
      </block>
      <action method="olumnCountLayoutDepend"><layout>one_column</layout><count>6</count></action>
      <action method="setToolbarBlockName"><name>product_list_toolbar</name></action>
   </block>
</reference>





####################################################################
also kusgagra add pagination in the category block 

The solution:

So here's a simple way to display products on any CMS page and include the toolbar and pagination:

1. Go to CMS > Manage Pages and click on the page where you want to display your products.

2. Under the "Design" tab, insert the following code in the "Update Layout XML" field:

<reference name="content">
<block type="catalog/product_list" name="product_list" template="catalog/product/list.pml">
<action method="setCategoryId"><category_id>3</category_id></action>
<block type="catalog/product_list_toolbar" name="product_list_toolbar" template="catalog/product/list/toolbar.pml">
<block type="page/ml_pager" name="product_list_toolbar_pager"/>
</block>
<action method="setToolbarBlockName"><name>product_list_toolbar</name></action>
</block>
</reference>

##############################################################
in layout we can also call cms page statci

< reference name="content" >
	< block type="cms/block" name="contact-info" >
                < action method="setBlockId" >< block_id>contact-info
        < /block >
< /reference >

v###################################################################
{{block type="core/template" name="contactForm" form_action="/contacts/index/post" template="contacts/form.pml"}}f

###############################################################
real use of jquery re 

<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * tp://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to tp://www.magentocommerce.com for more information.
 *
 * @category    design
 * @package     base_default
 * @copyrig   Copyrig (c) 2009 Irubin Consulting Inc. DBA Varien (tp://www.varien.com)
 * @license     tp://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->getSkinUrl('') ?>css/lof/slider.css" media="all" />
<script type="text/javascript" src="<?php echo Mage::getBaseUrl('js')?>lof/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo Mage::getBaseUrl('js')?>lof/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo Mage::getBaseUrl('js')?>lof/sliderscript.js"></script>
<script type="text/javascript">
var j = jQuery.noConflict();
j(document).ready(function($) {
	$obj = $('#lofslidecontent45').lofJSidernews( { interval:2000,
											easing:'easeOutBounce',
											duration:1200,
											auto:false } );						
});
</script>
<?php $_helper = $this->helper('catalog/output'); ?>
<?php if (($_products = $this->getProductCollection()) && $_products->getSize()): ?>
<?php $_columnCount = $this->getColumnCount(); ?>
<div id="lofslidecontent45" class="lof-slidecontent">
 <!-- MAIN CONTENT --> 
	<div class="lof-main-outer">
        <ul class="lof-main-wapper">
        	<?php $i=0; foreach ($_products->getItems() as $_product): ?>
            <li>     		           
                <div class="content_div">
                	<div class="left_div">
                    	
                    	<p class="product-image product-image-zoom" style="padding:20px 0 0 0;">
							<?php
                                $_img = '<img src="'.$this->helper('catalog/image')->init($_product, 'small_image')->resize(180).'" alt="'.$this->mlEscape($_product->getName()).'" title="'.$this->mlEscape($_product->getName()).'" />';
                                echo $_helper->productAttribute($_product, $_img, 'image');
                            ?>
                        </p>
                        
                    </div>
                    <div class="rig_div">
                        <span class="banner_heading">
                        <a href="<?php echo $_product->getProductUrl() ?>" title="<?php echo $this->mlEscape($_product->getName()) ?>">
                            <?php echo $this->mlEscape($_product->getName()) ?>
                        </a>
                        </span>
                        <p class="text_1"><?php echo $_helper->productAttribute($_product, nl2br($_product->getShortDescription()), 'short_description') ?></p>
                        <p class="text_1">
                        <span id="product-price-7-new" class="regular-pricehome">
                            <span class="banner_price"><?php echo strip_tags($this->getPriceHtml($_product, true, '-new')); ?></span>                
                        </span>
                        <br />
                        <?php if($_product->isSaleable()): ?>
                            <br /><button type="button" title="<?php echo $this->__('Add to Cart') ?>" class="button btn-cart" onClick="setLocation('<?php echo $this->getAddToCartUrl($_product) ?>')"><span><span><?php echo $this->__('Add to Cart') ?></span></span></button>
                        <?php else: ?>
                            <p class="availability out-of-stock"><span><?php echo $this->__('Out of stock') ?></span></p>
                        <?php endif; ?>
                        </p>
                         
                    </div>
                	 
                </div>
            </li> 
            <?php endforeach; ?>
        </ul>  	
	</div>
	<div class="lof-navigator-outer">
        <ul class="lof-navigator">
        	<?php $i=0; foreach ($_products->getItems() as $_product): ?>
            <li>
                <div>
                    <img src="<?php echo $this->helper('catalog/image')->init($_product, 'small_image')->resize(140) ?>" width="140" heig="70" alt="<?php echo $this->mlEscape($_product->getName()) ?>" />
                    <h3><?php echo $this->mlEscape($_product->getName()) ?></h3>
                </div>    
            </li>
            <?php endforeach; ?>
    	</ul>
    </div>
</div>
<?php endif; ?>

####################################################################
add for pagination in magento 

<reference name="content">
<block type="catalog/product_list" name="product_list" template="catalog/product/list.pml">
<action method="setCategoryId"><category_id>3</category_id></action>
<block type="catalog/product_list_toolbar" name="product_list_toolbar" template="catalog/product/list/toolbar.pml">
<block type="page/ml_pager" name="product_list_toolbar_pager"/>
</block>
<action method="setToolbarBlockName"><name>product_list_toolbar</name></action>
</block>
</reference>


##############################################################
tp://www.freelancer.com/work/magento-shop-change-language/
$fieldset->addField('logo', 'file', array(
    'label'     => 'Small Logo',
    'required'  => false,
    'name'      => 'logo',
));

edit /tab/form.php/


####################################################################
very useful vey very useful to nadew gallary and then popup

tp://blog.chapagain.com.np/jquery-grey-out-background-and-preview-image-as-popup/
##############################################################

this is links call onto the home page :


  
            <action method="addLink" translate="label title" module="customer"><label>My Account</label><url helper="customer/getAccountUrl"/><title>My Account</title><prepare/><urlParams/><position>94</position></action>
            <action method="addLink" translate="label title" module="customer"><label>Deliveries</label><url>deliveries</url><title>Deliveries</title><prepare>true</prepare><urlParams/><position>95</position></action>
            <action method="addLink" translate="label title" module="customer"><label>Returns</label><url>returns</url><title>Returns</title><prepare>true</prepare><urlParams/><position>96</position></action>
            <action method="addLink" translate="label title" module="customer"><label>Contact Us</label><url>contacts</url><title>Contact Us</title><prepare>true</prepare><urlParams/><position>97</position></action>
####################################################################
also add the link to the top menu of magento header homepge <action method="addLink" translate="label title">
  <label>Shipping Terms</label>
  <url>shipping</url>
  <title>Shipping Terms</title>
  <prepare/>
  <urlParams/>
  <position>2</position>
</action>



##############################################################

kushagra add the custum link to the hader and footer top link bar we need to do this 

<div id="footer_part">	
    <div class="nav_link1">
         <?php //echo $this->getLayout()->createBlock('cms/block')->setBlockId('milerfooter')->toHtml() ?>

      
   
        <ul>
        <li><?php echo $this->getCopyrig() ?><li/>
        <li><a href="#">- &nbsp;MEILLER Aufzugturen&nbsp; -</a></li>
        <li><a href="<?php  echo $this->getUrl('')?>"><?php echo $this->__('Home');?></a></li>
        <li><a href="<?php  echo $this->getUrl('contacts')?>"><?php echo $this->__('Contact Us');?></a></li>
        <li><a href="<?php  echo $this->getUrl('')?>"><?php echo $this->__('Impressum');?></a></li>
        <li><a href="<?php  echo $this->getUrl('catalog/seo_sitemap/category/')?>"><?php echo $this->__('Sitemap');?></a></li>
        <li><a href="<?php  echo $this->getUrl('catalogsearch/term/popular/')?>"><?php echo $this->__('Search Terms');?></a></li>
        <li><a href="<?php  echo $this->getUrl('catalogsearch/advanced/')?>"><?php echo $this->__('Advanced Search');?></a></li>


        
        <li style="margin-left:-14px !important;"><?php //echo $this->getChildHtml() ?></li>
    </ul>
    </div>
</div>




and this one is header 

 <ul>
   <li><a  href="<?php echo $this->getUrl('checkout/cart')?>"><span><img style="margin-rig:-3px !important;margin-top:2px;" src="<?php echo $this->getSkinUrl('images/shopping_cart.png') ; ?>" alt="cart" /><font style="margin-rig:-3px; "> <?php echo $this->__('My Cart');?></font>
                <?php
					$count = $this->helper('checkout/cart')->getSummaryCount();
				?>
        <?php $total = $this->helper('checkout/cart')->getQuote()->getGrandTotal();  ?>
        <?php
                	if ($count == 0)
					{ 
				?>
        <?php  echo $this->__('(0)');	?>
        <?php
                	}
					else
					{
			 	?>
        <?php  ?>
		(<?php echo $count; ?>)
        <?php
					}
				?>
        </span> </a></li>
   <li>
   
   <a href="<?php  echo $this->getUrl('wishlist')?>"><span><img src="<?php echo $this->getSkinUrl('images/items.png'); ?>"  alt="items"" /></span><?php echo $this->__('My Wishlist');?></a></li>
   <li><a href="<?php  echo $this->getUrl('customer/account')?>"><?php echo $this->__('My Account');?></a></li>

   
   <?php //echo $this->getChildHtml('topLinks') ?>
  </ul>




####################################################################
 this is the cod for wishlist kushagra daharwal
 
 <?php if ($this->helper('wishlist')->isAllow()) : ?>
<div class="box saved-items">
<div class="head">
<h4><?php echo $this->__('Saved Items') ?></h4>
</div>
<?php if($this->helper('wishlist')->getItemCount()>0): ?>
<ol id="list">
<?php foreach($this->getWishlistItems() as $_item): ?>
<li class="element">
<div class="product-actions">
<p>Item added at <br /><?php echo $_item->getAddedAt(); ?></p>
<?php if($_item->isSaleable()): ?>
<p>
<a href="<?php echo $this->helper('wishlist')->getAddToCartUrlBase64($_item) ?>" class="link-cart">
<?php echo $this->__('Add to Cart') ?></a></p>
<?php endif; ?>
<p>
<a href="<?php echo $this->helper('wishlist')->getRemoveUrl($_item) ?>" onClick="return confirm('<?php echo $this->__('Are you sure you would like to remove this item from the wishlist?') ?>');" class="widget-btn">
<img src="<?php echo $this->getSkinUrl('images/list_remove_btn.gif') ?>" alt="<?php echo $this->__('Remove Item') ?>" />
</a>
</p>
</div>

<div class="product-images">
<a href="<?php echo $_item->getProductUrl() ?>">
<img src="<?php echo $this->helper('catalog/image')->init($_item, 'thumbnail')->resize(50); ?>" alt="<?php echo $this->mlEscape($_item->getName()) ?>" width="50" heig="50" />
</a>
</div>

<div class="product-details">
<a href="<?php echo $_item->getProductUrl() ?>"> <?php echo $this->mlEscape($_item->getName()) ?></a> --
<span><?php echo $this->mlEscape($_item->getShortDescription()) ?></span>

</div>
<div class="product-price">
<?php echo $this->getPriceHtml($_item) ?>
</div>
</li>
<?php endforeach; ?>
</ol>
<?php else: ?>
<div class="content"><p><?php echo $this->__('You have no saved items.') ?></p></div>
<?php endif ?>
<div class="actions"><a href="<?php echo $this->helper('wishlist')->getListUrl() ?>">
<?php echo $this->__('Go to Wishlist') ?></a></div>
</div>
<?php endif ?>

To finish off add the following to your checkout.xml

Look for <checkout_cart_index> in your xml file and place the following within <reference name="content">.

<block type="wishlist/customer_sidebar" name="wishlist_saved" template="wishlist/saved_items.pml"/>



##############################################################
custum by me for wishlist :

  <?php if ($this->helper('wishlist')->isAllow()) : ?>  <!--custum by kushagra to wishlist in cart-->
           <?php if($tot=$this->helper('wishlist')->getItemCount()>0): ?>
                   <?php $wishlisttot =  $this->helper('wishlist')->getItemCount()?>
                    <a href="<?php  echo $this->getUrl('wishlist')?>"><span><img src="<?php echo $this->getSkinUrl('images/items.png'); ?>"  alt="items" /></span><?php echo $this->__('My Wishlist');?>(<?php echo $wishlisttot; ?>)</a>

           <?php else: ?>
                    <a href="<?php  echo $this->getUrl('wishlist')?>"><span><img src="<?php echo $this->getSkinUrl('images/items.png'); ?>"  alt="items" /></span><?php echo $this->__('My Wishlist');?>  <?php echo $this->__('(0)') ?></a>
                 </p>
		  <?php endif ?>
  <?php endif ?>



####################################################################
<?php showing all images of all the category in any cms page or sidebar (_
<div id="categories">
<div class="col_full">

<div class="listing" >
<?php $_maincategorylisting=$this->getCurrentCategory()?>
<?php $_categories=$this->getCurrentChildCategories()?>

<?php if($_categories->count()):?>
           <? foreach ($_categories as $_category):?>

                        <? if($_category->getIsActive()):

           $cur_category=Mage::getModel('catalog/category')->load($_category->getId());
           $layer = Mage::getSingleton('catalog/layer');
           $layer->setCurrentCategory($cur_category);

			$catName = $this->getCurrentCategory()->getName();  

			if($_imageUrl=!$this->getCurrentCategory()->getImageUrl()):?>

			<div class="category-box">
				<div class="category-image-box">
					<a href="<?php echo $this->getCategoryUrl($_category)?>"><img src="/skin/frontend/3graces/default/images/category_image_default.gif"></a>
				</div>
				<div class="category-name">
					<p><a href="<?php echo $this->getCategoryUrl($_category)?>">
						<?php echo $catName ?></a></p>
				</div>
			</div>	

			<?endif?>

			<? if($_imageUrl=$this->getCurrentCategory()->getImageUrl()):?>

         <div class="category-box">
				<div class="category-image-box">
					 <a href="<?php echo $this->getCategoryUrl($_category)?>"><img src="<?php echo $_imageUrl?>" heig="80"></a>
				</div>
				<div class="category-name">
					<p><a href="<?php echo $this->getCategoryUrl($_category)?>"> <?php echo $_category->getName()?></a></p>
				</div>
			</div>

<?
                        endif;
                        endif;?>
            <?endforeach?>

            <?php /* This resets the category back to the original pages category
****     If this is not done, subsequent calls on the same page will use the last category
****    in the foreach loop
*/   ?>
<?php $layer->setCurrentCategory($_maincategorylisting);  ?>
    <?endif;?>

</div>
<br clear=all>
</div>
</div>




##############################################################
inside the header tag in page.xml in magento :call cms statik block by this that call in pml file as a getChildmlblom 
          <block type="cms/block" name="cms_toplinks">                
					<action method="setBlockId"><block_id>top_links</block_id></action>
				</block>
 






################################################################################################################################################
add cms content block on home page :
{{block type="cms/block" block_id="sch_myblock" template="cms/content.phtml"}}
####################################################################


done by me
catalog navigation 


<style type="text/css">
ul.custum{ font-size:13px; }
ul.custum li { font-size:15px; }
</style>



<?php $curcat = $this->getCurrentCategory(); ?>

<?php $curchild = $this->getCurrentChildCategories(); ?>

<?php if($curchild -> count()): ?>
<ul class="custum">
		<?php foreach($curchild as $curchild1) :?>
			<li>
				<a  href="<?php echo $curchild1->getUrl(); ?>"><?php echo  $curchild1->getName();?></a><?php
				   
					   $subsubcat = Mage::getModel('catalog/category')->load($curchild1->getId());
					   
					    $subsubchild = $subsubcat->getChildrenCategories();
						?>
					    <ul>
								 <?php if (count($subsubchild) > 0):   ?>
                                        <li>
                                        <?php    
                                          foreach( $subsubchild as $subsubchild1): ?>
                                          <a style="padding-left:23px;" href="<?php echo $subsubchild1->getUrl(); ?>" ><?php echo $subsubchild1->getName(); ?><br/></a>
                        
                                                            <ul>
                                                                    <?php $subsubchild2 = Mage::getModel('catalog/category')->load($subsubchild1->getId());   ?>
                                                                    <?php  $subsubsubcatchild = $subsubchild2->getChildrenCategories();   ?> 
                                                                                                                                                                                                                                                  
                                                                    
                                       
                                                       
																		 <?php if($subsubsubcatchild->count()): ?>
                                                                                         
                                                                                    <?php  foreach($subsubsubcatchild as $subsubsubcatchild1):?>
                                                                                                                 <li>
                                
                                             <a    style="padding-left:46px;" href="<?php  echo $subsubsubcatchild1->getUrl(); ?>"><?php  echo $subsubsubcatchild1->getName(); ?></a>                                                                                                                  </li>
                                                                                     <?php endforeach;?>
                                                                                              
                                                           </ul>         <?php endif; ?>
                                      
                                     
                                     <?php endforeach;?>
                                        </li>
                                 <?php  endif; ?>
                        </ul>
	 
	          </li>                   
		<?php endforeach;?>
</ul>
<?php endif;?>


##############################################################


getcurrent time in magento 
<?php 
$now = Mage::getModel('core/date')->timestamp(time());
echo date('m/d/y h:i:s', $now);
?>



<?php
$fromDate = $r1['created_at'];
    $toDateFormat = 'F j, Y';
	$formattedDate = Mage::getModel('core/date')->date($toDateFormat , strtotime($fromDate));
	?>

v###################################################################
Magento get all products by attribute set
<?PHP
//Fetch attribute set id by attribute set name
$attrSetName = 'my_custom_attribute';
$attributeSetId = Mage::getModel('eav/entity_attribute_set')
	->load($attrSetName, 'attribute_set_name')
	->getAttributeSetId();

//Load product model collecttion filtered by attribute set id
$products = Mage::getModel('catalog/product')
	       ->getCollection()
       	->addAttributeToSelect('name')
	->addFieldToFilter('attribute_set_id', $attributeSetId);

//process your product collection as per your bussiness logic
$productsName = array();
foreach($products as $p){
	$productsName[] = $p->getData('name');
}
//return all products name with attribute set 'my_custom_attribute'
print_r($productsName);  ?>>



####################################################################

<?PHP
$productId = 10; 
$attributeName = 'my_attribute_name';

$product = Mage::getModel('catalog/product')->load($productId);
$attributes = $product->getAttributes();

$attributeValue = null;		
if(array_key_exists($attributeName , $attributes)){
	$attributesobj = $attributes["{$attributeName}"];
	$attributeValue = $attributesobj->getFrontend()->getValue($product);
}
echo $attributeValue; //attribute value for 'my_attribute_name'
?>

##############################################################
worked on this 


<div id="categories">
<div class="col_full">

<div class="listing" >
<?php $_maincategorylisting=$this->getCurrentCategory()?>
<?php $_categories=$this->getCurrentChildCategories()?>

<?php if($_categories->count()):?>
           <? foreach ($_categories as $_category):?>

                        <? if($_category->getIsActive()):

                        $cur_category=Mage::getModel('catalog/category')->load($_category->getId());
           $layer = Mage::getSingleton('catalog/layer');
           $layer->setCurrentCategory($cur_category);

			$catName = $this->getCurrentCategory()->getName();  

			if($_imageUrl=!$this->getCurrentCategory()->getImageUrl()):?>

			<div class="category-box">
				<div class="category-image-box">
					<a href="<?php echo $this->getCategoryUrl($_category)?>"><img src="/skin/frontend/3graces/default/images/category_image_default.gif"></a>
				</div>
				<div class="category-name">
					<p><a href="<?php echo $this->getCategoryUrl($_category)?>">
						<?php echo $catName ?></a></p>
				</div>
			</div>	

			<?endif?>

			<? if($_imageUrl=$this->getCurrentCategory()->getImageUrl()):?>

         <div class="category-box">
				<div class="category-image-box">
					 <a href="<?php echo $this->getCategoryUrl($_category)?>"><img src="<?php echo $_imageUrl?>" heig="80"></a>
				</div>
				<div class="category-name">
					<p><a href="<?php echo $this->getCategoryUrl($_category)?>"> <?php echo $_category->getName()?></a></p>
				</div>
			</div>

<?
                        endif;
                        endif;?>
            <?endforeach?>

            <?php /* This resets the category back to the original pages category
****     If this is not done, subsequent calls on the same page will use the last category
****    in the foreach loop
*/   ?>
<?php $layer->setCurrentCategory($_maincategorylisting);  ?>
    <?endif;?>

</div>
<br clear=all>
</div>
</div>


####################################################################
<?php 
for payment module :

tp://www.eliasinteractive.com/blog/magento-create-new-payment-method-cash-on-delivery/

<second>tp://junaidbhura.wordpress.com/2011/10/11/how-to-make-a-custom-magento-payment-extension-for-an-external-gateway/


tp://www.malcolmwong.com/2009/02/14/free-ipay88-payment-gateway-module-for-magento/




tp://www.e-commercewebdesign.co.uk/blog/magento-tutorials/simple-payment-module-extended-with-information.php
?>
##############################################################
all great link for rachemo 

tp://www.joomlart.com/forums/showthread.php?29804-JM-Product-Slider-Userguide

for populer s search 
tp://www.magentocommerce.com/boards/viewthread/21165/


for home page 

<p>{{block type="joomlart_jmproducts/list" name="home.jmproducts.list"   catsid="15"  title="Latest products" mode="latest"}} {{block type="joomlart_jmproducts/list" name="home.jmproducts.list" title="Top Rated products" catsid="22" mode="top_rated"}}</p>





####################################################################


for reading kushagra kushagra kushagra 
tp://go.magento.com/support/kb/entry/name/setting-up-google-checkout/

to made the checkout cart option  in magento enable terms and condition

tp://www.sycha.com/magento-terms-conditions-checkout
##############################################################
####################################################################

work with iframne
<?php


<iframe src="tp://player.vimeo.com/video/34035823?title=0&amp;byline=0&amp;portrait=0" width="400" heig="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><p><a href="tp://vimeo.com/34035823">David Guetta Feat. Sia - Titanium</a> from <a href="tp://vimeo.com/thisisdavidwilson">David Wilson</a> on <a href="tp://vimeo.com">Vimeo</a>.</p>

 ?>
##############################################################

allkushagra
tp://techdad.wordpress.com/2010/02/20/most-downloaded-magento-extensions/

####################################################################

tp://blog.asawebprogramming.com/2011/03/09/adding-a-youtube-video-to-magento-page/

##############################################################


tp://www.exploremagento.com/magento/simple-custom-module.php
####################################################################

tp://houstoniantech.com/howto/OnmouseOverShowDIV.aspx


Here's neat little script that displays additional text when you mouse over a text link (or graphic). You can place the text display DIV(s) anywhere you like, or seperate them to suit your page layout

Place the following in the <head> tags.

 

<script language="Javascript">

<!--

function toggleDiv(id,flagit) {

if (flagit=="1"){

if (document.layers) document.layers[''+id+''].visibility = "show"

else if (document.all) document.all[''+id+''].style.visibility = "visible"

else if (document.getElementById) document.getElementById(''+id+'').style.visibility = "visible"

}

else

if (flagit=="0"){

if (document.layers) document.layers[''+id+''].visibility = "hide"

else if (document.all) document.all[''+id+''].style.visibility = "hidden"

else if (document.getElementById) document.getElementById(''+id+'').style.visibility = "hidden"

}

}

//-->

</script>

 

 

Now set the display DIV style and positioning by placing the following in the <head> tags. Modify it to suit yourself.

<style type="text/css">#div1, #div2, #div3 {position:absolute; top: 100; left: 200; width:200; visibility:hidden}</style>

Now use the following to create the links. If you want to use them as proper links, replace # with your URLs.

<a href="#" onMouseOver="toggleDiv('div1',1)" onMouseOut="toggleDiv('div1',0)">Link 1!</a> |

<a href="#" onMouseOver="toggleDiv('div2',1)" onMouseOut="toggleDiv('div2',0)">Link 2</a> |

<a href="#" onMouseOver="toggleDiv('div3',1)" onMouseOut="toggleDiv('div3',0)">Link 3</a>

 

And finally add the associated text divs. You can relegate these to the bottom of the page (out of the way) if they get in the way.

<div id="div1">Link 1 text! I've restrained the div size to 200px wide in the style declaration. Modify this to suit yourself.</div>

<div id="div2">Link 2 text! You can add all the usual style options, and position it to suit yourself!</div>

<div id="div3">Link 3 text! Use it to explain terms or further describe your linked pages, whatever!</div>
##############################################################

www.magestore.com/community/extension/magento-core-modules-german-language-pack.mls
v###################################################################

to study to wordpress the url is 
www.magestore.com/community/extension/magento-core-modules-german-language-pack.mls


###############################################################

[7:10:54 PM] Open2Project: ICQ: 608917434
[7:11:02 PM] Kushagra Daharwal: thanks
[7:11:08 PM] Open2Project: MSN:management@get-rc.tooun tin n
####################################################################


<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * tp://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to tp://www.magentocommerce.com for more information.
 *
 * @category   design_default
 * @package    Mage
 * @copyrig  Copyrig (c) 2008 Irubin Consulting Inc. DBA Varien (tp://www.varien.com)
 * @license    tp://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
 global $tmpTools; 
?>

<div id="ja-header" class="wrap">
<div class="main clearfix">
  <p class="no-display"><a href="#main"><strong><?php echo $this->__('Skip to Main Content') ?> &raquo;</strong></a></p>
  <div class="quick-access">
	  <div class="shop-access">
                 

   <?php    $customerName = Mage::helper('customer')->getCustomerName(); ?>
	  	<strong>
		
                           <?php echo $this->getWelcome(); ?>  <!--i need to change this code -->
                <?php   if ($this->helper('customer')->isLoggedIn() ) : ?>
                  <?php echo $this->__('Hi %s', Mage::getSingleton('customer/session')->getCustomer()->getFirstname()); ?>
               <?php endif;?>
 
        </strong>
	  <?php //echo $this->getChildHtml('topLinks') ?>
	  <ul>
                    <li> <a href="<?php echo $this->getUrl('customer/account/');?>"><?php  echo $this->__('My Account')?></a></li>
                    <li> 
                             <?php if ($this->helper('wishlist')->isAllow()) : ?>  <!--custum by kushagra to wishlist in cart-->
                                       <?php if($tot=$this->helper('wishlist')->getItemCount()>0): ?>
                                               <?php $wishlisttot =  $this->helper('wishlist')->getItemCount()?>
                                                <a href="<?php  echo $this->getUrl('wishlist')?>"><?php echo $this->__('My Wishlist');?>(<?php echo $wishlisttot; ?>)</a>
                            
                                       <?php else: ?>
                                                <a href="<?php  echo $this->getUrl('wishlist')?>"><?php echo $this->__('My Wishlist');?>  <?php echo $this->__('(0)') ?></a>
                                            
                                      <?php endif ?>
                              <?php endif ?>
                     </li>                            
                                                
                  <li><a  href="<?php echo $this->getUrl('checkout/cart')?>"><?php echo $this->__('My Cart');?></font>
							<?php  $count = $this->helper('checkout/cart')->getSummaryCount(); ?>
                            <?php $total = $this->helper('checkout/cart')->getQuote()->getGrandTotal();  ?>
                            <?php  if ($count == 0)
                                        {  ?>
                                       <?php  echo $this->__('(0)');	?>
                             <?php      }
                                        else
                                        {
                               ?>
                                          (<?php echo $count; ?>)
                              <?php
                                        }
                              ?>
                          </a>
                    
                    </li>
                 
                     <li> <a href="<?php echo $this->getUrl('checkout');?>"><?php  echo $this->__('Checkout')?></a></li>
               
                     
                   
                      <li style="background:none !important;">
							     
								
                                   
								 <?php              
                                    if ($this->helper('customer')->isLoggedIn() ) 
                                    {
                                    ?>
                                        
                                          <?php $loginstorename = Mage::app()->getStore()->getName();   ?>
										       
                                                <?php   if($loginstorename == 'German'):?>
                                               <a href="<?php echo $this->getUrl('customer/account/logout/');?>" ><?php echo $this->__("Abmelden"); ?> </a> 
                                                 <?php else: ?>
                                                <a href="<?php echo $this->getUrl('customer/account/logout/');?>" ><?php echo $this->__("Logout"); ?> </a> 
      
                                                <?php endif;?>       
                                    <?php
                                    }
                                    else
                                    {
                                    ?>
                                    <a href="<?php echo $this->getUrl('customer/account/login/');?>" > <?php echo $this->__("Login"); ?></a>
                                    <?php
                                    }
                                    ?> 
                         </li>           
                   
 
 
  </ul>
  
      </div>
	  <?php echo $this->getChildHtml('store_language') ?>
    </div>
	<h1 id="logo"><a href="<?php echo $this->getUrl('') ?>"><span>JM LEAD</span></a></h1>
  <!-- MAIN NAVIGATION -->
	<div id="ja-mainnav">
		<?php echo $this->getChildHtml('topMenu') ?>
	</div>
	<!-- //MAIN NAVIGATION -->
  
</div>
</div>

<div id="ja-banner-top" class="wrap">
<div class="main clearfix">
<?php $homepagebanner = $this->getLayout()->createBlock('cms/block')->setBlockId('home_banner')->toHTML();?>
<?php 
	  if ($homepagebanner && $tmpTools->isHomepage()) : ?>
 <?php  echo  $homepagebanner; ?>

<?php endif;?>
	</div>
</div>
<div class="main  clearfix">
		
				<div id="ja-pathway">&nbsp;</div>
			
		<div id="ja-searchwrap">
			<div id="ja-search">   
                 
                <?php $hometopsearch =  $this->getChildHtml('topSearch');?>	
                 <?php // if($hometopsearch && $tmpTools->isHomepage()):?>
                    <?php   echo $hometopsearch; ?>
				 <?php // endif; ?> 
             </div> 
         </div> 
</div>            
##############################################################

use it in home page design 

<reference name="rig">
<block type="cms/block"  name="rigomenews" before="righomepage">
      <action method="setBlockId">
            <block_id>nalink </block_id>
      </action>
     </block>   


	
<block type="cms/block"  name="homeproductcompare"  before="righomepage">
      <action method="setBlockId">
            <block_id>home_rig_compare </block_id>
      </action>
     </block>   



<block type="cms/block"  name="homepageorderrig"  before="righomepage">
      <action method="setBlockId">
            <block_id>homepageorder </block_id>
      </action>
     </block>   


 <block type="cms/block"  name="righomepage" before="_">
      <action method="setBlockId">
            <block_id>rig_homerig </block_id>
      </action>
     </block>
</reference>
####################################################################


all kushagra great extension 
'
tp://www.fmeextensions.com/blog/5-free-premium-magento-extensions-rush-to-grab
##############################################################

payment gateway list for magento they are following 
tp://www.magentocommerce.com/blog/comments/50-payment-gateways-now-supported-in-magento/

####################################################################
image in cms  page in magento 

<a href="file:///G|/Users/alpesh.khambhala/Desktop/kushagra_information/other_work/important/{{store direct_url="electronics/cell-phones.ml"}}">
<img style="display: block; border: 0;" src="{{skin url='images/media/head_electronics_cellphones.gif}}" alt="Cell Phones" /></a></h3>
##############################################################


tp://www.magentonews.co.uk/magento-development/cannot-retrieve-payment-method-instance-%E2%80%93-magento-sagepay-suite-ce/
####################################################################

comment in cart box made by this

 q	 	 	




<?php echo    ?>


##############################################################
<strong>tp://www.spinonesolutions.com/page/3/</strong>
####################################################################
Scalena  news extension

##############################################################
how to made new shipping methoad 

tp://www.packtpub.com/article/shipping-modules-in-magento-part2



####################################################################
ywsyj editor funvtion using 
tp://www.fontis.com.au/magento/extension/wysiwyg-editor


##############################################################
<?php tp://www.cypherpunks.ca/otr/
[6:51:07 PM] Kushagra Daharwal: yes thanks
[6:51:13 PM] Open2Project: this add on is important for encrypted AES communication
[6:51:27 PM] Kushagra Daharwal: when i  will go at my home
[6:51:33 PM] Open2Project: ok np
[6:51:33 PM] Kushagra Daharwal: i  install
[6:51:36 PM] Open2Project: by the way check
[6:51:38 PM] Kushagra Daharwal: both of them
[6:51:45 PM] Open2Project: tp://180.211.110.196/mg-projects/rechemco/index.php/
[6:51:53 PM] Open2Project: I changed featured product
[6:52:05 PM] Open2Project: the slidebar under the big main sli ?>###################################################################

###############################################################
<?php 
tp://www.shoppingcarttalk.com/ultimento-ligbox-gallery-magento-extension-make-the-stores-fashion/
 ?>
 
####################################################################
tp://stackoverflow.com/questions/4626398/magento-login-and-register-form-one-page
##############################################################
for working 

www.scriptlance.com/projects/1317291175.sml
####################################################################

read this after going at your home :
  
tp://www.excellencemagentoblog.com/magento-add-product-to-cart-ajax
##############################################################
<?php  call attribute in product view  page ?>


<?php if ($_product->getFreeShippingDiscount()):> <?php echo ''.$_product->getAttributeText('free_shipping_discount').''> < ?php endif;> 


####################################################################
?>
<?php 
<!--hey kushagra -->
[free_shipping_discount]  we have to write in froentend  $product->getFreeShippingDiscount() ?>
?>

 <?php echo $_product->getAttributeText('attribute_name') ?>  fordropdown
 
  <?php echo $_product->getAttributeName() ?> other all
#############################################################
<?php 
call to popular tag in home page in magento 

{{block type="tag/popular" template="tag/popular.pml"}}
?>
####################################################################

pdf files 

<?php method for the give link to the pdf files in  magento ok kushagra

1. create a new folder under media/catalog/product/ named pdf so it should be media/catalog/product/pdf/

2. Upload your pdf document to yourshop/media/catalog/product/pdf so it should be yourshop/media/catalog/product/pdf/pdfdocument.pdf

3. go to your product managing page under admin panel and edit the product. Now in the short description box you must add the following code:

<div class="divider"></div>
<h4>Downloads</h4>
<div class="short-description"><a title="Download ATmega88 dev board User Guide" h


?>
<?php <a href="tp://localhost/welkete_1.6.2.0/media/catalog/product/pdf/kushagra.pdf" target="_blank">User Guide.pdf (392 Kb)</a> ?>
this is final ok 


-----
This is the good link to make pdf files in magento that is called the downloadble product


tp://www.proxyutza.com/magento-how-to-add-download-links-on-product-page/
this is on product page

tp://php.quicoto.com/how-to-create-downloadable-products-magento/


##############################################################

(1)flag code custum by kushagra to show the flag on home page:
<div class="flagpicture">
<?php if(count($this->getStores())>1): ?>
<div class="flagpicture1" id="flagspan"><?php echo $this->__('<em></em>').'&nbsp;&nbsp;'; ?> </div>
<div class="flagpicture2">
 <?php foreach ($this->getStores() as $_lang): ?>
       <a href="<?php echo $_lang->getCurrentUrl() ?>"><img src="<?php echo $this->getSkinUrl('images/flags/' . $this->mlEscape($_lang->getCode()) . '.png') ?>" alt="<?php echo $this->mlEscape($_lang->getName()) ?>"/></a>
    <?php endforeach; ?>
</div>
<?php endif; ?> 
</div>




(2)in page.xml : 

<block type="page/switch" name="store_language" as="store_language" template="page/switch/languages.phtml"/>
to
<block type="page/switch" name="store_language" as="store_language" template="page/switch/flags.phtml"/> 



####################################################################

custum login form as a mini with validation 
  <form action="<?php echo $this->getPostActionUrl() ?>" method="post" id="login-form">
  
               <div class="type_text">
                           <input name="login[username]"  value="<?php echo $this->mlEscape($this->getUsername()) ?>" title="<?php echo $this->__('Email Address') ?>" id="email" type="text" class="input-text required-entry" />
	           </div>
               <div class="type_text">
                           <input name="login[password]"   type="password" class="input-text required-entry validate-password" id="pass" />
     	
               </div>
    <div class="actions">
        <button style="display:none;" class="form-button-alt" type="submit" name="send" id="send2"><span><?php echo $this->__('Login') ?></span></button>
    </div>
</form>
</div>
<script type="text/javascript">
    var dataForm = new VarienForm('login-form', true,'<?php echo $this->__('name') ?>') ;
</script>
</div> 

##############################################################
for psd 
tp://www.thedesignwork.com/20-useful-login-page-template-psd-files/
####################################################################
<?php get product collection by attribuecode  code >?

<?php

$collection = Mage::getModel('catalog/product')->getCollection();
$collection->addAttributeToSelect('*');
$collection->addAttributeToFilter('visibility', array('neq' => 1));
$collection->setOrder('price', 'ASC');
$collection->setPageSize(10);

foreach ($collection as $product):?>

<a href="<?php echo $product->getProductUrl(); ?>" title="<?php echo $this->mlEscape($product->getName()); ?>"><?php echo $this->mlEscape($product->getName()); ?></a>
<?php echo Mage::helper('core')->currency($product->getFinalPrice()); ?>

<?php endforeach; ?>


?>
##############################################################
for calling the attribute of backend to froentend:
<?php
echo $_product->getAttributeText('theme_color');
?>
v###################################################################


seraching result by attribute L

<?php
$product = Mage::getModel('catalog/product');
$attributes = Mage::getModel('catalogsearch/advanced')->getAttributes();
echo '<pre>';
print_r('$attributes');
$attributes = Mage::getResourceModel('eav/entity_attribute_collection')
                   ->setEntityTypeFilter($product->getResource()->getTypeId())
                   ->addFieldToFilter('attribute_code', 'manufacturer');
				                           $attribute = $attributes->getFirstItem()->setEntity($product->getResource());
$manufacturers = $attribute->getSource()->getAllOptions(false);

?>
<ul id="manufacturer_list">
<?php foreach ($manufacturers as $manufacturer): ?>
<li><a href="tp://localhost/magneto_miller1610/index.php/catalogsearch/result/?q=<?php echo $manufacturer['value'] ?>"><?php echo $manufacturer['label'] ?></a></li>
<?php endforeach; ?>
</ul>
</div>

###############################################################

<?php


$mediaurl = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_LINK); 
?>
<img  src="<?php  echo $mediaurl.$collectiion['file:///G|/Users/alpesh.khambhala/Desktop/kushagra_information/other_work/important/filename'];?>"/>

((((

            <div style="border:2px solid #0C3;">
            <?php $collection = Mage::getModel('master/master')->getCollection(); ?>
			<?php foreach($collection as $collection1 ):?>
            <?php // echo '<pre>';?>
            <?php // print_r($collection1);?>
             <ul style=" margin:12px; background:#666;">
			   <li style=" list-style:none; font-size:12px; color:#fff; font-weig:bold;">
			    <a href ="<?php echo getUrl(''); ?>"><?php   echo $collection1['title'];?>
						   <?php  $mediaurl =  Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA); ?>
                           <img heig="150" width="150" src="<?php   echo $mediaurl.$collection1['file:///G|/Users/alpesh.khambhala/Desktop/kushagra_information/other_work/important/filename'];?> "/>
                </a> 
               </li>
			  </ul>
			<?php endforeach;?>
			<br/>
            </div> 





)))))

####################################################################
<?php 
$sql = "SELECT product_id  FROM catalog_category_product WHERE category_id='3'″;
$data = Mage::getSingleton('core/resource') ->getConnection('core_read')->fetchAll($sql); ?> " ;?>
<?php
$daf1 = "";
$data = Mage::getSingleton('core/resource')->getConnection('core_read')->fetchAll($daf1);
?>

##############################################################

making conditionaly home page :
<?php if ($homepagebanner && $tmpTools->isHomepage()): ?>
	<?php echo  $homepagebanner; ?>
<?php endif;?>

this is the code for making condtionaly to the home page :
####################################################################



check current page is home   page is or not this is :
code for this condton :
<?php
if($this->getUrl('') == $this->getUrl('*/*/*', array('_current'=>true, '_use_rewrite'=>true))):
    echo "Homepage";
else:
    echo "Not in Homepage";
endif;
?>

##############################################################

<?php
pagination on home page the code that is we put into the vpage layout 

<reference name="content">
<block type="catalog/layer_view" name="catalog.leftnav" before="-" template="catalog/layer/view.pml"/>
<block type="catalog/product_list" name="product_list" template="catalog/product/list.pml">
<block type="catalog/product_list_toolbar" name="product_list_toolbar" template="catalog/product/list/toolbar.pml">
<block type="page/ml_pager" name="product_list_toolbar_pager"/>
</block>
<action method="olumnCountLayoutDepend"><layout>two_columns_rig</layout><count>4</count></action>
<action method="setToolbarBlockName"><name>product_list_toolbar</name></action>
</block>
<update handle="page_two_columns_rig" />
</reference>

 ?>
####################################################################

##############################################################
pagination : files needs to be change for paganation on home apge without tollbar only pagination 

(1) product/listone.pml
    on bottom side i have to write 
       code :   <?php  echo $this->getToolbarBlock()->setTemplate('catalog/product/list/toolbar-bottom.pml')->toHtml(); ?>
     
     
     ((((((((( this is the toolbar bottom code  
       <?php if($this->getCollection()->getSize()): ?>
<div class="toolbar">
    <div class="pager">
        <p class="amount">
            <?php if($this->getLastPageNum()>1): ?>
                <?php echo $this->__('Items %s to %s of %s total', $this->getFirstNum(), $this->getLastNum(), $this->getTotalNum()) ?>
            <?php else: ?>
                <strong><?php echo $this->__('%s Item(s)', $this->getTotalNum()) ?></strong>
            <?php endif; ?>
        </p>

        <?php echo $this->getPagerHtml() ?>

    </div>

</div>
<?php endif ?>

)))))))))))))))))))))))))))))))))))

(2) in homepage desgin layout 

<reference name="content">
<block type="catalog/product_list" name="home" template="catalog/product/listonecustum.pml">
<action method="setCategoryId"><category_id>13</category_id></action>
<block type="catalog/product_list_toolbar" name="product_list_toolbar" template="catalog/product/list/toolbarbottom.pml">
<block type="page/ml_pager" name="product_list_toolbar_pager"/>
</block>
<action method="setToolbarBlockName"><name>product_list_toolbar</name></action>
</block>
</reference>

i have to write this code also 

(3)paganation and toolbar we have to rig this code on page design layout


<reference name="content">
<block type="catalog/product_list" name="home" template="catalog/product/listonecustum.pml">
<action method="setCategoryId"><category_id>13</category_id></action>
<block type="catalog/product_list_toolbar" name="product_list_toolbar" template="catalog/product/list/toolbar.pml">
<block type="page/ml_pager" name="product_list_toolbar_pager"/>
</block>
<action method="setToolbarBlockName"><name>product_list_toolbar</name></action>
</block>
</reference>

####################################################################

custum Attribute call on home page along with images :
call simple attribute in list page in magento 

<?php echo $_product->getAttributeText('attribuename')?>
<div class="product-brand-logo">
<?php $brandname = $_product->getbrand_name() ?>
<img src="<?php echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA) . "brandlogo/" .$brandname . ".png"; ?>" /> 
</div>
##############################################################
master my custum code to gave image path 
in core controller files 

	$path = Mage::getBaseDir('media')."/Master".DS."images".DS;
    
    path is  : media/Master/images/
    
####################################################################

custum add field in to certain table of mangeto 

in code into the tab/form.php

       $fieldset->addField('link', 'text', array(
          'label'     => Mage::helper('master')->__('Link'),
          'required'  => false,
          'name'      => 'link',
	  ));
	  
and also made a table column for that table  

name
lingth 
type ut8_general_c1
and then finally get in froentend :


##############################################################
<?php
magneto jquery noconflict function ok 
$k = jQuery.noConflict();

?>
####################################################################
getcurrent category 
<?php 
$currCat = Mage::registry('current_category');
$collection = Mage::getModel('catalog/category')->getCategories($currCat->getEntityId());
?>

##############################################################

for every category collection
<?php
$categories = Mage::getModel('catalog/category')->getCollection()
             ->addAttributeToSelect('name')
             ->addAttributeToSelect('url_key')
             ->addAttributeToSelect('my_attribute')
             ->addAttributeToSelect('position')
             ->addAttributeToSort('position', 'ASC')
             ->setLoadProductCount(true)
             ->addAttributeToFilter('is_active',array('eq'=>true))
             ->load();
?>
 
<?php foreach($categories as $key=>$category): ?>
<?php if($category->getName() != ''):?>
    <?php $prodCollection = Mage::getResourceModel('catalog/product_collection')->ategoryFilter($category); // Magento product collection ?>
    <a href="<?php echo $category->getUrl() ?>"><?php echo $category->getName() ?></a> (<?php echo $prodCollection->count() ?>)<br/>
<?php endif;?>
<?php endforeach; ?>



or


<?php 
$currCat = Mage::registry('current_category');
$collection = Mage::getModel('catalog/category')->getCategories($currCat->getEntityId());
?>
  <div class="white_manu">
<?php
foreach($collection as $cat) {
if($cat->getIsActive()) {
$category = Mage::getModel('catalog/category')->load($cat->getEntityId());
$prodCollection = Mage::getResourceModel('catalog/product_collection')->ategoryFilter($category);
Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($prodCollection);
Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($prodCollection);
?>
<ul>
<li>
<a href="<?php echo $category->getUrl() ?>"><?php echo $category->getName() ?></a> (<?php echo $prodCollection->count() ?>)<br/>
</li>
</ul>
<?php
}
}
?>


###################################################################
image uploading without dlash player

http://www.magentocommerce.com/magento-connect/no-flash-image-uploader.html
###############################################################
##############################################################a

contact us form 

Open this file:

app/design/frontend/default/themename/template/contacts/form.phtml

And add the following hidden field somewhere before the submit button:

<input type="text" name="hideit" id="hideit" value="" style="display:none !important;" />

For future questions, I recommend including your store URL – that way Magento Experts will be able to better assist you. 

##############################################################
link for contact us form how we configure this form :

(1) http://sree.cc/magento_ecommerce_tips/magento-enable-contact-form-add-custom-field-link-to-top-menu
####################################################################



rechemco errror :
magento upload ssl error invalid or self-signed certificate

##############################################################


<?php
$product = Mage::getModel('catalog/product');
$attributes = Mage::getResourceModel('eav/entity_attribute_collection')
                  // ->setEntityTypeFilter($product->getResource()->getTypeId())
                  ->addFieldToFilter('attribute_code', 'manufacturer');
				                           $attribute = $attributes->getFirstItem()->setEntity($product->getResource());
$manufacturers = $attribute->getSource()->getAllOptions(false);
?>
<ul id="manufacturer_list">
<?php foreach ($manufacturers as $manufacturer): ?>
<?php  $name = $manufacturer['label'];
       
	   $url = 'catalogsearch/result/?q='; ?>
      <li>
    <a href="<?php  echo Mage::getUrl().$url.$name; ?>" > <?php  echo $name; ?></a>   
  </li>
<?php endforeach;?>


<?php //coded by Kushagra Daharwal(jr php programmer(Magento)): ?>

<?php
$product = Mage::getModel('catalog/product');
$attributes1 = Mage::getResourceModel('eav/entity_attribute_collection')
                  // ->setEntityTypeFilter($product->getResource()->getTypeId())
                  ->addFieldToFilter('attribute_code', 'color');
				                           $attributeqq = $attributes1->getFirstItem()->setEntity($product->getResource());
$manufacturers = $attributeqq->getSource()->getAllOptions(false);
?>
<ul id="manufacturer_list">
<?php foreach ($manufacturers as $manufacturer): ?>
<?php  $name = $manufacturer['label'];
       
	   $url = 'catalogsearch/result/?q='; ?>
      <li>
    <a href="<?php  echo Mage::getUrl().$url.$name; ?>" > <?php  echo $name; ?></a>   
  </li>
<?php endforeach;?>
shop by brand attribute name 

####################################################################
<?php
{{block type="catalog/product_new" column_count="6" products_count="400" name="home.catalog.product.new" alias="product_homepage" template="catalog/product/new.phtml"}}

?>

this is the block for showing new products in cms page 
##############################################################

searching by category on home page or other page


<?php if( !isset($_GET['category']) ): ?> 
<form action="<?php echo $this->getUrl('catalogsearch/advanced/result')?>" method="get" id="category_search_form"> 
<?php 

if ($this->helper('catalog/data')->getCategory()) { 
$_ccat = $this->helper('catalog/data')->getCategory(); 
} else { 
$_ccats = $this->helper('catalog/data')->getProduct()->getCategoryIds(); 
$_ccat = Mage::getModel('catalog/category')->load($_ccats[0]); 
}; 
$_ccatID = $_ccat->getId(); 
?> 
<input type="hidden" id="category_search_field" name="category" value="<?php echo $_ccatID ?>" /> 
<div class="left"> 
<input name="name" id="searchcat" value="<?php echo $this->__('Search Category') ?>" title="Name" class="input-text " type="text" /> 
<input type="image" alt="<?php echo $this->__('Search') ?>" src="<?php echo $this->getSkinUrl('images/ico_s_search.png')?>"  />
</div> 
</form> 
<script type="text/javascript"> 
//<![CDATA[ 
var searchForm = new Varien.searchForm('category_search_form', 'searchcat', '<?php echo $this->__('Search Category') ?>'); 
searchForm.initAutocomplete('<?php echo $this->helper('catalogSearch')->getSuggestUrl() ?>', 'search_autocomplete'); 
//]]> 
</script> 
<?php endif ?>
####################################################################

this is custum by me that is very needfull  for us 
<?php 
$product = Mage::getModel('catalog/product');
$attributes1 = Mage::getResourceModel('eav/entity_attribute_collection')
                  // ->setEntityTypeFilter($product->getResource()->getTypeId())
                  ->addFieldToFilter('attribute_code', 'color');
				                           $attributeqq = $attributes1->getFirstItem()->setEntity($product->getResource());
$manufacturers = $attributeqq->getSource()->getAllOptions(false);


/**/?>
<select onChange="setLocation(this.value)">
   <option value=""><?php  echo $this->__('select Brand name');?></option>
   <?php foreach ($manufacturers as $manufacturer): ?> 
   <?php  $name = $manufacturer['label'];
          $url = 'catalogsearch/result/?q='; ?>
          <option value="<?php  echo Mage::getUrl().$url.$name; ?>" ><a href="<?php echo Mage::getUrl().$url.$name; ?>" >  <?php  echo $name; ?></a></option>
 <?php endforeach;?> 
  </select>
</div>



##############################################################

get ccustomer informatioon of order


<?php
require_once('file:///G|/Users/alpesh.khambhala/Desktop/kushagra_information/other_work/important/app/Mage.php');
Mage::app('admin');
Mage::getSingleton("core/session", array("name" => "adminhtml"));
Mage::register('isSecureArea',true);
$collection = Mage::getResourceModel('sales/order_collection')
->addAttributeToSelect('*');
//->addFieldToFilter('hpc_order_id', array('neq' => '',))
//->addFieldToFilter('hpc_order_from', array('eq' => 'ebay',)));

//->addFieldToFilter('status', 'complete')->load(); //pending,complete

//$collection->addAttributeToSort('created_at', 'desc');

$min_diff = '60';
$from_date = date("Y-m-d H:i:s", strtotime("-".$min_diff." minute"));
$to_date = date("Y-m-d H:i:s");
$collection->addAttributeToFilter('updated_at', array(
    'from' => $from_date,
    'to' => $to_date
    ));

/*
echo '<pre>';
print_r($collection);
echo '</pre>';
*/
echo "<br />supplement order start";
echo '<table border="1" style="1px solid #cccccc">';
 echo '<tr>';
  echo '<th>Order Id</th>';
  echo '<th>Order Created at</th>';
  echo '<th>Order Updated at</th>';
   echo '<th>Order State</th>';
   echo '<th>Order Status</th>';
   echo '<th>HPC Order ID</th>';
   echo '<th>HPC Order from</th>';
  echo '</tr>';

foreach ($collection as $col) {
    echo '<tr>';
        echo "<td>".$col->getIncrementId()."</td>";
        echo "<td>".$col->getCreatedAt()."</td>";
        echo "<td>".$col->getUpdatedAt()."</td>";
        echo "<td>".$col->getState()."</td>";
        echo "<td>".$col->getStatus()."</td>";
         echo "<td>".$col->getHpcOrderId()."</td>";
          echo "<td>".$col->getHpcOrderFrom()."</td>";
    echo '</tr>';
}
 echo '</table>';

echo "<br />supplement order ends";
?>



####################################################################
 this is for show the minimum qnanity on the product listing page in  magneto webshop option.

<form action="<?php echo $this->getAddToCartUrl($_product) ?>" method="post" id="product_addtocart_form_<?php echo $_product->getId()?>"<?php if($_product->getOptions()): ?> enctype="multipart/form-data"<?php endif; ?>>
                       <?php if(!$_product->isGrouped()): ?>
                         <label for="qty"><?php echo $this->__('Qty') ?>:</label>
                         <input type="text" name="qty" id="qty" maxlength="3" value="<?php echo ($this->getMinimalQty($_product)?$this->getMinimalQty($_product):3) ?>" />
                         <?php endif; ?>
                         <br/>
                          <button type="button" title="<?php echo $this->__('Add to Cart') ?>" class="button btn-cart" onClick="setLocation('<?php echo $this->getAddToCartUrl($_product) ?>')"><span><span><?php echo $this->__('Add to Cart') ?></span></span></button>
                       </form>
                    
                    


##############################################################
get product collection 
<?php 
$category = $layer->getCurrentCategory();
$categories = $category->getAllChildren(true);

$collection = Mage::getResourceModel('catalog/product_collection');
$collection->ategoriesFilter($categories);
?>
####################################################################



http://scriptrunner.posterous.com/magento-display-sub-categories-instead-of-pro

{{block type="catalog/navigation" name="catalog.category" template="catalog/category/list.phtml"}} 


<?php 
$_category = $this->getCurrentCategory(); 
$collection = Mage::getModel('catalog/category')->getCategories($_category->entity_id);

$rootcat = $_category->entity_id; 
$cat = Mage::getModel('catalog/category')->load($rootcat); 
$child = $cat->getChildren(); 
//echo $child;



if($child) 
{ 
    $helper = Mage::helper('catalog/category'); 
    $_helper = $this->helper('catalog/output'); 
    ?> 
    <div class="category-custom-products"> 
    <table>
        <tr>
            <td valign="top" width="405">
                <h1 class="page-title"><?php echo $_helper->categoryAttribute($_category, $_category->getName(), 'name') ?></h1>
                <?php
                    $_imgUrl = $_category->getImageUrl();
                    echo '<img id="ProductCategoryImage" src="'.$_imgUrl.'"/>';
                ?>

            </td>
            <td width="40">
            
            </td>
            <td valign="top">
                <div class="products-grid categories-grid">

                <?php foreach ($collection as $cat):?> 
                    <?php if($_category->getIsActive()):?> 
                        <?php 
                            $cur_category = Mage::getModel('catalog/category')->load($cat->getId()); 
                            $_imgUrl = $cur_category->getImageUrl();
                        ?>
                        <div class="categoryItem"> 
                            <a class="categoryImageLink" href="<?php echo $helper->getCategoryUrl($cat);?>"><?php echo '<img class="categoryImg" width="216" height="180" id="ProductCategoryImage" src="'.$_imgUrl.'"/>'; ?></a>    
                            <a class="categoryProductLink" href="<?php echo $helper->getCategoryUrl($cat);?>"><?php echo $cat->getName();?></a> 
                            <a class="viewDetailsLink" href="<?php echo $helper->getCategoryUrl($cat);?>">view details</a> 
                        </div> 

                    <?php endif?> 
                <?php endforeach;?> 
                </div>
                </td>
                </tr>
                </table>
            </div> 
    <?php 
} 
else 
{ 
?> 
    <?php echo $this->getProductListHtml() ?> 
<?php 
} 
?> 


##############################################################
Email form default :
<?php 
 <input type="text" name="hideit" id="hideit" value="" style="display:none !important;" />
?>
Put this single line code just before ths submit button ok kushagra ;


###################################################################
catagory navigation with products counts 


<div class="left_box">
              <div><img  alt="" src="<?php echo $this->getSkinUrl('images/white_top.gif') ;?>"> </div>
 <div class="box_middle_white" style="padding-top:-12px !important; margin-bottom: -9px !important;">
          <div class="main_part">
          <h1 style="font-weight:bold;"> <?php echo $this->__('Browse By') ?> </h1> 
<?php
$obj = new Mage_Catalog_Block_Navigation();
$store_cats	= $obj->getStoreCategories();
$current_cat 	= $obj->getCurrentCategory();
$current_cat	= (is_object($current_cat) ? $current_cat->getName() : '');
  ?>
  
   <div class="white_manu">
<ul>
<?php foreach ($store_cats as $cat) {
	if ($cat->getName() == $current_cat) {
		?>
	
    	<li style="padding-bottom:6px  !important;">
		<?php $prodCollection = Mage::getResourceModel('catalog/product_collection')->ategoryFilter($cat);
                                Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($prodCollection);
                                Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($prodCollection); ?>
	  <a href="<?php echo $this->getCategoryUrl($cat) ?>"><?php echo $cat->getName()?>(<?php echo $prodCollection->count() ?>)</a>
      <ul>
	<?php 	foreach ($obj->getCurrentChildCategories() as $subcat) {
		 	?>
            <?php $prodCollection1 = Mage::getResourceModel('catalog/product_collection')->ategoryFilter($subcat);
                                     Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($prodCollection1);
                                     Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($prodCollection1); ?>
          <li > <a href="<?php echo $this->getCategoryUrl($subcat)?>" ><?php echo $subcat->getName() ?>(<?php echo $prodCollection1->count() ?>)</a> </li>
          <?php }
		
	 ?> 
     </ul>
     </li>
<?php } else { ?>
		<li >
        <?php $prodCollection = Mage::getResourceModel('catalog/product_collection')->ategoryFilter($cat);
                                Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($prodCollection);
                                Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($prodCollection); ?>
        <a href="<?php echo $this->getCategoryUrl($cat) ?>" ><?php echo $cat->getName() ?>(<?php echo $prodCollection->count() ?>)</a>
        </li>
	<?php }
}
?>
</ul>
</div>
</div>
</div>
</div><div><img alt=""  style="margin-top:-1px;" src="<?php echo $this->getSkinUrl('images/white_bottom.gif') ;?>"></div>






###############################################################

this is the sql query to show of all the tier price of the product
<?php
$resource = Mage::getSingleton('core/resource');
$query = 'SELECT * FROM '.$resource->getTableName('catalog/product').'_tier_price';
$_tier_prices = $resource->getConnection('core_read')->fetchAll($query);
var_dump($_tier_prices);
?>
####################################################################
magento call attribute and its valur this is custum code and this is very imposrtant for me not for me but also other 

Get attribute collection
1
	
<?php $attribute = $_product->getResource()->getAttribute('my_attribute'); ?>

Get attribute type
1
	
<?php $attribute = $_product->getResource()->getAttribute('my_attribute')->getAttributeType(); ?>

Get attribute Label
1
	
<?php $attribute = $_product->getResource()->getAttribute('my_attribute')->getFrontendLabel(); ?>

Attribute is visible or not
1
	
<?php $attribute = $_product->getResource()->getAttribute('my_attribute')->getIsVisible(); ?>

Attribute is required
1
	
<?php $attribute = $_product->getResource()->getAttribute('my_attribute')->getIsRequired(); ?>

Get attribute value
1
	
<?php $attributeValue = Mage::getModel('catalog/product')->load($_product->getId())->getMyAttribute();?>

Get the multi-select attribute values
1
2
3
4
5
	
<?php
$attributeId = Mage::getResourceModel('eav/entity_attribute')->getIdByCode('catalog_product','attribute_code_here');
$attribute = Mage::getModel('catalog/resource_eav_attribute')->load($attributeId);
$attributeOptions = $attribute ->getSource()->getAllOptions();
?>
##############################################################
contact us form :
<input type="text" name="hideit"  id="hideit" value="" style="display:none !important;" />
####################################################################

this code uses inside vcatalog/prpduct/view/type/option/configurable.phtml

<script type="text/javascript" >  
var spConfig = new Product.Config(<?php echo $this->getJsonConfig() ?>);
    spConfig.setInitialState = function(dropdown_id)
{
//select dropdown
var dropdown = $(dropdown_id);
//remove empty option from dropdown so it is not selectable after initial selection
dropdown[0].remove();
//change selections in dropdowns
for(index = 0; index < dropdown.length; index++)
{
if(dropdown[index].value != "")
{
dropdown.selectedIndex = index;
var element = dropdown;
var event = 'change';
//fire events
if(document.createEventObject)
{
var evt = document.createEventObject();
return element.fireEvent('on'+event,evt)
}
else
{
var evt = document.createEvent("HTMLEvents");
evt.initEvent(event, true, true );
return !element.dispatchEvent(evt);
}
}
}
};
<?php foreach($_attributes as $_attribute): ?>
spConfig.setInitialState("attribute<?php echo $_attribute->getAttributeId() ?>")
<?php endforeach; ?>
</script> <!-- this  is just for testing puspose -->

##############################################################
good url for learning purpose:

http://kissmvc.com/php_mvc_framework/controller

####################################################################

<?php
if($this->getUrl('') == $this->getUrl('*/*/*', array('_current'=>true, '_use_rewrite'=>true))):
	echo "Homepage";
else:
	echo "Not in Homepage";
endif;
?>
##############################################################

tax vat no
Our VAT-ID: {{var order.getShopTaxvat()}}
Customer VAT-ID: {{var order.getCustomerTaxvat()}}
GEISS
####################################################################


call1 parent category and its children category in home page 


<div class="navigationhome"><ul>
<?php 
$_main_categories=$this->getStoreCategories();
if($_main_categories->count()):
    foreach ($_main_categories as $_main_category):
        if($_main_category->getIsActive()):
            $_sub_categories=$_main_category->getChildren();
            foreach ($_sub_categories as $_sub_category):
                if($_sub_category->getIsActive()): 
                    $cur_category=Mage::getModel('catalog/category')->load($_sub_category->getId());
                    $layer = Mage::getSingleton('catalog/layer');
                    $layer->setCurrentCategory($cur_category);                    
?>                
    

<li style="float:left;">
        <a href="<?php echo $this->getCurrentCategory()->getUrl()?>">
        <?php if($_imageUrl=$this->getCurrentCategory()->getImageUrl()):?>
            
            <img src="<?php echo $_imageUrl?>" width = "245" height = "270" alt="<?php echo $this->getCurrentCategory()->getName();?>">
           <h5> <?php echo $this->getCurrentCategory()->getName();?></h5>
        <?php else:?>
            <img src="<?php echo $this->getSkinUrl('images/no-cat-pic.jpg')?>" width = "110" height = "110" alt="<?php echo $this->getCurrentCategory()->getName();?>">
        <?php endif;?>
        </a>
 </li>
    
<?php
                endif;
            endforeach;
        endif;
    endforeach;
endif; 
?> 
</ul>
</div>
##############################################################

one page checkout 

 <div   id="checkout-step-<?php echo $_stepId ?>" class="box<?php if($_stepId=='shipping_method'): ?>-no-padding<?php endif; ?> a-item" style="display:visible;">
           
			<?php echo $this->getChildHtml($_stepId) ?>
           
        </div>
####################################################################

call attribute name its value :

(1)if it is a text field (textbox or textarea), this is all you have to do:

	

<?php echo $_product->getAttributeName() ?>

(2)If you are using a dropdown or a multiple select, you have to call it a little differently:
<?php echo $_product->getAttributeText('shirt_size') ?>


(3) code for displaying value of multiple select attribite

 <?php if ($_product->getData('custum_size')): ?> 
          <p><?php echo nl2br($_product->getResource()->getAttribute('custum_size')->getFrontend()->getValue($_product)) ?></p> 
 <?php endif; ?> 
                  
 <?php if($_product->getResource()->getAttribute('custum_size')->getFrontend()->getValue($_product)): ?>
                    <ul><li><?php
							$_comma = ",";
							$_list = "</li><li>";
							echo str_replace($_comma,$_list,$_product->getResource()->getAttribute('custum_size')->getFrontend()->getValue($_product))    ?>    
					</li>
                    </ul>
					<?php endif; ?>
##############################################################
select after clicking 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Foo</title>
<script type="text/javascript"><!--

function show_visibility(){
for(var i = 0,e = arguments.length;i < e;i++){
var myDiv = document.getElementById(arguments[i]).style;
myDiv.display = "block";
}
}

function hide_visibility(){
for(var i = 0,e = arguments.length;i < e;i++){
var myDiv = document.getElementById(arguments[i]).style;
myDiv.display = "none";
}
}
//--></script>
</head>
<body>
<div id='foo1' style="background:#F9C; width:100px; display:block;"><?php
$product = Mage::getModel('catalog/product');
$attributes = Mage::getResourceModel('eav/entity_attribute_collection')
                  // ->setEntityTypeFilter($product->getResource()->getTypeId())
                  ->addFieldToFilter('attribute_code', 'manufacturer');
                                           $attribute = $attributes->getFirstItem()->setEntity($product->getResource());
$manufacturers = $attribute->getSource()->getAllOptions(false);
?>
<ul id="manufacturer_list">
<?php foreach ($manufacturers as $manufacturer): ?>
<?php  $name = $manufacturer['label'];
       
       $url = 'catalogsearch/result/?q='; ?>
      <li>
    <a href="<?php  echo Mage::getUrl().$url.$name; ?>" > <?php  echo $name; ?></a>   
  </li>
<?php endforeach;?>

</div>
<div id='foo2' style="background:#FCF; width:100px; display:none;">sample two</div>
<div id='foo3' style="background:#99C; width:100px; display:none;">sample three</div>
<div id='foo4' style="background:#9C9; width:100px; display:none;"><?php
$product = Mage::getModel('catalog/product');
$attributes1 = Mage::getResourceModel('eav/entity_attribute_collection')
                  // ->setEntityTypeFilter($product->getResource()->getTypeId())
                  ->addFieldToFilter('attribute_code', 'color');
                                           $attributeqq = $attributes1->getFirstItem()->setEntity($product->getResource());
$manufacturers = $attributeqq->getSource()->getAllOptions(false);
?>
<ul id="manufacturer_list">
<?php foreach ($manufacturers as $manufacturer): ?>
<?php  $name = $manufacturer['label'];
       
       $url = 'catalogsearch/result/?q='; ?>
      <li>
    <a href="<?php  echo Mage::getUrl().$url.$name; ?>" > <?php  echo $name; ?></a>   
  </li>
<?php endforeach;?>

</div>
<div id='foo5' style="background:#6FC; width:100px; display:none;">sample five</div>
<br />
<a href="#" onClick="show_visibility('foo1');hide_visibility('foo2','foo3', 'foo4','foo5') ">Display Details Sample 1</a><br />
<a href="#" onClick="show_visibility('foo2');hide_visibility('foo1','foo3', 'foo4','foo5') ">Display Details Sample 2</a><br />
<a href="#" onClick="show_visibility('foo3');hide_visibility('foo1','foo2', 'foo4','foo5') ">Display Details Sample 3</a><br />
<a href="#" onClick="show_visibility('foo4');hide_visibility('foo1','foo2', 'foo3','foo5') ">Display Details Sample 4</a><br />
<a href="#" onClick="show_visibility('foo5');hide_visibility('foo1','foo2', 'foo3','foo4') ">Display Details Sample 5</a><br />
</body>
</html>



####################################################################
this is for on mouce hover and onmouce out :

right   custum by me 

<script type="text/javascript">
function showForm(){
    document.getElementById('loginForm').style.display = "block";
}

function hideForm(){
    document.getElementById('loginForm').style.display = "none";
}

</script>

 
    <div onMouseOver="showForm();" onMouseOut="hideForm();">
    Login Here
        <span id="loginForm">
       
						<img src="welcome.bto_files/icon_phone.gif" alt="Phone">
						+43-3687-24223-33
				
                   	
						<img src="welcome.bto_files/icon_mail.gif" alt="Mail">
						<a href="mailto:info@blue-tomato.com?subject=Hello%21&amp;body=Hello%20Blue%20Tomato%20Crew%21">info@blue-tomato.com</a>
				
        </span>
    </div>


##############################################################
get dropdown attributevalue:
<?php
$attributes = $_product->getAttributes();
$themeColor = $attributes['theme_color']->getFrontend()->getValue($_product);
echo $themeColor;
?>

v###################################################################


Magento: why Default Search / Mini Search not working returns 0 or more results ?
  Admin on Sat Feb 18, 2012 5:31 pm

Solution

Open up app/code/core/Mage/CatalogSearch/Block/Result.php

Uncomment line 149 and 150

// $this->getListBlock()
// ->setCollection($this->_getProductCollection());



Then change line 172

$this->_productCollection = $this->getListBlock()->getLoadedProductCollection();

to

$this->_productCollection = Mage::getSingleton('catalogsearch/layer')->getProductCollection();


That solves the search problem.

###############################################################

grt product collection in magento 

 (1)Simple Product
    $collectionSimple = Mage::getResourceModel('catalog/product_collection') ->addAttributeToFilter('type_id', array('eq' => 'simple'));


(2)Configurable Product
$collectionConfigurable = Mage::getResourceModel('catalog/product_collection') ->addAttributeToFilter('type_id', array('eq' => 'configurable'))

(3)bundle
$collectionBundle = Mage::getResourceModel('catalog/product_collection') ->addAttributeToFilter('type_id', array('eq' => 'bundle'));


(4)Grouped Product

$collectionGrouped = Mage::getResourceModel('catalog/product_collection')->addAttributeToFilter('type_id', array('eq' => 'grouped'));



(5) Virtual Product

$collectionVirtual = Mage::getResourceModel('catalog/product_collection') ->addAttributeToFilter('type_id', array('eq' => 'virtual'));
####################################################################

add review to the product  page 
http://www.e-commercewebdesign.co.uk/blog/magento-tutorials/product-reviews-on-product-view-page.php

goto : app > design > frontend > default > yourtheme > layout
<?php ?>

<block type="review/product_view_list" name="product.info.product_additional_data" as="product_review" template="review/product/view/list.phtml">
 	<block type="review/form" name="product.review.form" as="review_form"/>
	</block>


then


app > design > frontend > default > yourtheme > template > catalog > product > view.phtml


<?php echo $this->getChildHtml('product_review') ?>

##############################################################
onmouse hover 

<script>
Event.observe(window, 'load', function() {
    $$(".outer-div").invoke('observe', 'mouseover', function(event) {
        this.setStyle({cursor: 'pointer'});
        this.down('.inner2').setStyle({display: 'block', cursor: 'pointer'});
    });
    $$(".outer-div").invoke('observe', 'mouseout', function(event) {
        this.down('.inner2').setStyle({display: 'none'});
    });
});
</script>
    
    
      <div class="my_cart">
					 <div class="outer-div">
       <div class="inner1">
                    <div class="cart">
					<div><a href="#"><img src="<?php echo $this->getSkinUrl('images/cart.gif')?>" alt="" /></a></div>
					<h1>My Cart:</h1>
					<a>
                    <p>
                    <?php $count = $this->helper('checkout/cart')->getSummaryCount(); ?>
                     <?php if($count==0):  ?>
                    <font style="color:#71695f !important;"><?php echo '0 item'; ?></font>
                      <?php elseif($count==1): ?>
			  		  <a style="color:#71695f !important;"  href="<?php echo $this->getUrl('checkout/cart')?>"> <?php echo  '1 item'; ?></a>
 					  <?php else:?> 
                      <a  href="<?php echo $this->getUrl('checkout/cart')?>"><?php  echo $count.'items'; ?></a>
                      <?php endif ;?>/ 
                   <?php $total = $this->helper('checkout/cart')->getQuote()->getGrandTotal();?>
                   <span>   <a style="color:#003d64!important;"  href="<?php echo $this->getUrl('checkout/cart')?>"><?php echo number_format($total,'2'); ?>,  - EUR</a></span></p>
                   </a>
         </div>
         
         
    <div class="inner2"> <?php echo $this->getChildHtml('cart_sidebar_top');?></div></div>
   </div>

####################################################################
any page get product info 

<?
            $custom = Mage::getModel('catalog/product')->load($_item->getProductId());
            echo $custom->getShortDescription(); 
?>
##############################################################
####################################################################

add  wishlit url and Email to a freind custum url done by me :
(1)<label><a href="<?php  echo $this->getUrl('wishlist')?>">Add to wishlist</a></label>
(2)  <?php if ($this->canEmailToFriend()): ?>
             <a href="<?php echo $this->helper('catalog/product')->getEmailToFriendUrl($_product) ?>"><?php echo $this->__('Email to a Friend') ?></a>
     <?php endif; ?>

##############################################################
####################################################################
this is for show all option for configurable product :
<?php
    $_productCollection=$this->getLoadedProductCollection();
    $_helper = $this->helper('catalog/output');
?>
<?php if(!$_productCollection->count()): ?>
<p class="note-msg"><?php echo $this->__('There are no products matching the selection.') ?></p>
<?php else: ?>


<div class="category-products">
    <?php echo $this->getToolbarHtml() ?>
    <?php // List mode ?>
    <?php if($this->getMode()!='grid'): ?>
    <?php $_iterator = 0; ?>
    <ol class="products-list" id="products-list">
    <?php foreach ($_productCollection as $_product): ?>
        <li class="item<?php if( ++$_iterator == sizeof($_productCollection) ): ?> last<?php endif; ?>">
            <?php // Product Image ?>
            <a href="<?php echo $_product->getProductUrl() ?>" title="<?php echo $this->stripTags($this->getImageLabel($_product, 'small_image'), null, true) ?>" class="product-image"><img src="<?php echo $this->helper('catalog/image')->init($_product, 'small_image')->resize(135); ?>" width="135" height="135" alt="<?php echo $this->stripTags($this->getImageLabel($_product, 'small_image'), null, true) ?>" /></a>
            <?php // Product description ?>
            <div class="product-shop">
                <div class="f-fix">
                    <?php $_productNameStripped = $this->stripTags($_product->getName(), null, true); ?>
                    <h2 class="product-name"><a href="<?php echo $_product->getProductUrl() ?>" title="<?php echo $_productNameStripped; ?>"><?php echo $_helper->productAttribute($_product, $_product->getName() , 'name'); ?></a></h2>
                    <?php if($_product->getRatingSummary()): ?>
                    <?php echo $this->getReviewsSummaryHtml($_product) ?>
                    <?php endif; ?>
                    <?php echo $this->getPriceHtml($_product, true) ?>
                    <?php if($_product->isSaleable()): ?>
                        <p><button type="button" title="<?php echo $this->__('Add to Cart') ?>" class="button btn-cart" onClick="setLocation('<?php echo $this->getAddToCartUrl($_product) ?>')"><span><span><?php echo $this->__('Add to Cart') ?></span></span></button></p>
                    <?php else: ?>
                        <p class="availability out-of-stock"><span><?php echo $this->__('Out of stock') ?></span></p>
                    <?php endif; ?>
                    <div class="desc std">
                        <?php echo $_helper->productAttribute($_product, $_product->getShortDescription(), 'short_description') ?>
                        <a href="<?php echo $_product->getProductUrl() ?>" title="<?php echo $_productNameStripped ?>" class="link-learn"><?php echo $this->__('Learn More') ?></a>
                    </div>
                    <ul class="add-to-links">
                        <?php if ($this->helper('wishlist')->isAllow()) : ?>
                            <li><a href="<?php echo $this->helper('wishlist')->getAddUrl($_product) ?>" class="link-wishlist"><?php echo $this->__('Add to Wishlist') ?></a></li>
                        <?php endif; ?>
                        <?php if($_compareUrl=$this->getAddToCompareUrl($_product)): ?>
                            <li><span class="separator">|</span> <a href="<?php echo $_compareUrl ?>" class="link-compare"><?php echo $this->__('Add to Compare') ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
    </ol>
    <script type="text/javascript">decorateList('products-list', 'none-recursive')</script>

    <?php else: ?>

    <?php // Grid Mode ?>

    <?php $_collectionSize = $_productCollection->count() ?>
    <?php $_columnCount = $this->getColumnCount(); ?>
    <?php $i=0; foreach ($_productCollection as $_product): ?>
         
        <?php if ($i++%$_columnCount==0): ?>
        <ul class="products-grid">
        <?php endif ?>
            <li class="item<?php if(($i-1)%$_columnCount==0): ?> first<?php elseif($i%$_columnCount==0): ?> last<?php endif; ?>">
                <a href="<?php echo $_product->getProductUrl() ?>" title="<?php echo $this->stripTags($this->getImageLabel($_product, 'small_image'), null, true) ?>" class="product-image"><img src="<?php echo $this->helper('catalog/image')->init($_product, 'small_image')->resize(135); ?>" width="135" height="135" alt="<?php echo $this->stripTags($this->getImageLabel($_product, 'small_image'), null, true) ?>" /></a>
                <h2 class="product-name"><a href="<?php echo $_product->getProductUrl() ?>" title="<?php echo $this->stripTags($_product->getName(), null, true) ?>"><?php echo $_helper->productAttribute($_product, $_product->getName(), 'name') ?></a></h2>
                <?php if($_product->getRatingSummary()): ?>
                <?php echo $this->getReviewsSummaryHtml($_product, 'short') ?>
                <?php endif; ?>
                <?php echo $this->getPriceHtml($_product, true) ?>
                <div class="actions">
                    <?php if($_product->isSaleable()): ?>
                        <button type="button" title="<?php echo $this->__('Add to Cart') ?>" class="button btn-cart" onClick="setLocation('<?php echo $this->getAddToCartUrl($_product) ?>')"><span><span><?php echo $this->__('Add to Cart') ?></span></span></button>
                    <?php else: ?>
                        <p class="availability out-of-stock"><span><?php echo $this->__('Out of stock') ?></span></p>
                    <?php endif; ?>
                    <ul class="add-to-links">
                        <?php if ($this->helper('wishlist')->isAllow()) : ?>
                            <li><a href="<?php echo $this->helper('wishlist')->getAddUrl($_product) ?>" class="link-wishlist"><?php echo $this->__('Add to Wishlist') ?></a></li>
                        <?php endif; ?>
                        <?php if($_compareUrl=$this->getAddToCompareUrl($_product)): ?>
                            <li><span class="separator">|</span> <a href="<?php echo $_compareUrl ?>" class="link-compare"><?php echo $this->__('Add to Compare') ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </li>
        <?php if ($i%$_columnCount==0 || $i==$_collectionSize): ?>
        </ul>
        <?php endif ?>
        
        <form action="<?php echo Mage::getBaseUrl(); ?>checkout/cart/add/" method="post" style="display:block; clear:both;"> 

<?php 

$product = Mage::getModel('catalog/product'); 
$product->load($_product->getId()); 

//print_r($product); 
//exit(); 

$xml = ""; 
$hasAtts = 0; 

// configurable products 
$productType = $product->getTypeId(); 

if($productType == "configurable") { 

// configurable products 
$attValConfig = $product->getTypeInstance()->getConfigurableAttributesAsArray(); 

if(sizeof($attValConfig)) { 

$hasAtts++; 
 
foreach($attValConfig as $attValConfigSingle) { 

$xml .= "<div class='floatoption1'>".$attValConfigSingle['frontend_label'].": "; 

$xml .= "<select style='display:block; clear:both; margin-bottom:10px;' name='super_attribute[".$attValConfigSingle['attribute_id']."]'>"; 

foreach($attValConfigSingle['values'] as $attValConfigSingleVal) { 

$baseprice = $this->getPriceHtml($product, true);
$strippedprice = str_replace("£", "", $baseprice);
$numprice = strip_tags($strippedprice);
$numpricea = (float)$numprice;
$optionprice = $attValConfigSingleVal['pricing_value'];
$numpriceb = (float)$optionprice;
$catprice = $numpricea + $numpriceb;
$catpricea = number_format($catprice,2);

if (is_numeric($numpriceb)) { 
$xml .= "<option value='".$attValConfigSingleVal['value_index']."'>".$attValConfigSingleVal['label']." £".$catpricea."</option>"; 
}   else { $xml .= "<option value='".$attValConfigSingleVal['value_index']."'>Not Mumeric</option>"; }
}
$xml .= "</select></div>"; 

} 

} 


} 
// end configurable products 

$attVal = $product->getOptions(); 

if(sizeof($attVal)) { 

$hasAtts++; 

foreach($attVal as $optionVal) { 




$xml .= "<div class='floatoption1'>Size:<select style='display:block; clear:both; margin-bottom:10px;' name='options[".$optionVal->getId()."]'>"; 

foreach($optionVal->getValues() as $valuesKey => $valuesVal) { 
$xml .= "<option value='".$valuesVal->getId()."'>".$valuesVal->getTitle()." +".Mage::helper('core')->currency($valuesVal->getPrice())."</option>"; 
} 

$xml .= "</select></div>"; 

} 

} 

$xml .= "<div class='floatoption2'>Qty: <input style='display:block; clear:both; margin-bottom:20px;' id='qty' class='input-text qty' type='text' value='1' maxlength='12' name='qty'/></div>"; 

echo($xml); 

?> 

<input type="hidden" name="product" value="<?php echo($_product->getId()); ?>" /> 
<div class="catbutton">
<button class="button" class="button btn-cart" type="submit"><span><span><?php echo $this->__('Add to Cart') ?></span></span></button></div>



</form> 
        <?php endforeach ?>
        <script type="text/javascript">decorateGeneric($$('ul.products-grid'), ['odd','even','first','last'])</script>
    <?php endif; ?>

    <div class="toolbar-bottom">
        <?php echo $this->getToolbarHtml() ?>
    </div>
</div>
<?php endif; ?>


##############################################################

call seleable atribute in magento for configurable product in magento 
<?php   $sizes = array();
							if($_product->isConfigurable())
							{
							   $allproduct = $_product->getTypeinstance(true)->getUsedProducts(null,$_product);
							  // echo '<pre>';
							 //  print_r($allproduct);
							  // exit;
								foreach($allproduct  as $allproduct1 )
								{
									echo '<pre>';
									 echo $allproduct1->getAttributeText('s4_size');
									echo '</pre>';

									//if($allproduct1->isSaleable())
//									{
//										$sizes[]=$allproduct1->getAttributeText('s4_size');
//										echo '<pre>';
//										print_r($sizes);
//										echo '</pre>';
//										foreach($sizes as $sizes1)
//										echo $sizes1;
//										'<br/>';
//									//exit;
//									}
								}
								if(count($sizes)>0)
								{
									sort($sizes);
								}
							} 
             
       ?>            <?php //echo nl2br($_product->getResource()->getAttribute('s4_size')->getFrontend()->getValue($_product)) ?>
       
       
     here us my caode
      <?
if ($_product->getData('type_id') == "configurable" &&  $_product->isSaleable())
{    
        
     //get the configurable data from the product
     $config = $_product->getTypeInstance(true);
     //var_dump($config);
     
     $test = $config->getUsedProductIds($_product);
    // var_dump($test);
?>
<?    
     //loop through the attributes                                  
     foreach($config->getConfigurableAttributesAsArray($_product) as $attributes)
     { 
     //print_r($attributes);
         
		foreach($attributes["values"] as $values)
		{
			echo "<li>". $values["label"]."</li>";
		}

     }
     
?>
<? }   ?>     
####################################################################
get sample products that siign to confogurable 

<?php if($_product->getTypeId() == "configurable"):
$ids = $_product->getTypeInstance()->getUsedProductIds();  ?>
<ul>
    <?php foreach ($ids as $id) : 

        $simpleproduct = Mage::getModel('catalog/product')->load($id); ?>

        <li><?php echo $simpleproduct->getName()." - ".(int)Mage::getModel('cataloginventory/stock_item')
					->loadByProduct($simpleproduct)->getQty(); ?>
        </li>				

    <?php endforeach;	?>
</ul>
<?php endif; ?>
##############################################################
####################################################################
Get Simple Products of a Configurable Product
<?php if($_product->getTypeId() == "configurable"):
$ids = $_product->getTypeInstance()->getUsedProductIds();  ?>
<ul>
    <?php foreach ($ids as $id) : 

        $simpleproduct = Mage::getModel('catalog/product')->load($id); ?>

        <li><?php echo $simpleproduct->getName()." - ".(int)Mage::getModel('cataloginventory/stock_item')
					->loadByProduct($simpleproduct)->getQty(); ?>
        </li>				

    <?php endforeach;	?>
</ul>
<?php endif; ?>

##############################################################
v###################################################################
add to cart in listing page for configurable products in magento :

<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    design
 * @package     base_default
 * @copyright   Copyright (c) 2011 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
?>
<?php
/**
 * Product list template
 *
 * @see Mage_Catalog_Block_Product_List
 */
?>
<?php
    $_productCollection=$this->getLoadedProductCollection();
    $_helper = $this->helper('catalog/output');
?>
<?php if(!$_productCollection->count()): ?>
<p class="note-msg"><?php echo $this->__('There are no products matching the selection.') ?></p>
<?php else: ?>


<div class="category-products">
    <?php echo $this->getToolbarHtml() ?>
    <?php // List mode ?>
    <?php if($this->getMode()!='grid'): ?>
    <?php $_iterator = 0; ?>
    <ol class="products-list" id="products-list">
    <?php foreach ($_productCollection as $_product): ?>
        <li class="item<?php if( ++$_iterator == sizeof($_productCollection) ): ?> last<?php endif; ?>">
            <?php // Product Image ?>
            <a href="<?php echo $_product->getProductUrl() ?>" title="<?php echo $this->stripTags($this->getImageLabel($_product, 'small_image'), null, true) ?>" class="product-image"><img src="<?php echo $this->helper('catalog/image')->init($_product, 'small_image')->resize(135); ?>" width="135" height="135" alt="<?php echo $this->stripTags($this->getImageLabel($_product, 'small_image'), null, true) ?>" /></a>
            <?php // Product description ?>
            <div class="product-shop">
                <div class="f-fix">
                    <?php $_productNameStripped = $this->stripTags($_product->getName(), null, true); ?>
                    <h2 class="product-name"><a href="<?php echo $_product->getProductUrl() ?>" title="<?php echo $_productNameStripped; ?>"><?php echo $_helper->productAttribute($_product, $_product->getName() , 'name'); ?></a></h2>
                    <?php if($_product->getRatingSummary()): ?>
                    <?php echo $this->getReviewsSummaryHtml($_product) ?>
                    <?php endif; ?>
                    <?php echo $this->getPriceHtml($_product, true) ?>
                    <?php if($_product->isSaleable()): ?>
                        <p><button type="button" title="<?php echo $this->__('Add to Cart') ?>" class="button btn-cart" onClick="setLocation('<?php echo $this->getAddToCartUrl($_product) ?>')"><span><span><?php echo $this->__('Add to Cart') ?></span></span></button></p>
                    <?php else: ?>
                        <p class="availability out-of-stock"><span><?php echo $this->__('Out of stock') ?></span></p>
                    <?php endif; ?>
                    <div class="desc std">
                        <?php echo $_helper->productAttribute($_product, $_product->getShortDescription(), 'short_description') ?>
                        <a href="<?php echo $_product->getProductUrl() ?>" title="<?php echo $_productNameStripped ?>" class="link-learn"><?php echo $this->__('Learn More') ?></a>
                    </div>
                    <ul class="add-to-links">
                        <?php if ($this->helper('wishlist')->isAllow()) : ?>
                            <li><a href="<?php echo $this->helper('wishlist')->getAddUrl($_product) ?>" class="link-wishlist"><?php echo $this->__('Add to Wishlist') ?></a></li>
                        <?php endif; ?>
                        <?php if($_compareUrl=$this->getAddToCompareUrl($_product)): ?>
                            <li><span class="separator">|</span> <a href="<?php echo $_compareUrl ?>" class="link-compare"><?php echo $this->__('Add to Compare') ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
    </ol>
    <script type="text/javascript">decorateList('products-list', 'none-recursive')</script>

    <?php else: ?>

    <?php // Grid Mode ?>

    <?php $_collectionSize = $_productCollection->count() ?>
    <?php $_columnCount = $this->getColumnCount(); ?>
    <?php $i=0; foreach ($_productCollection as $_product): ?>
      
        <?php if ($i++%$_columnCount==0): ?>
        <ul class="products-grid">
        <?php endif ?>
            <li class="item<?php if(($i-1)%$_columnCount==0): ?> first<?php elseif($i%$_columnCount==0): ?> last<?php endif; ?>">
                <a href="<?php echo $_product->getProductUrl() ?>" title="<?php echo $this->stripTags($this->getImageLabel($_product, 'small_image'), null, true) ?>" class="product-image"><img src="<?php echo $this->helper('catalog/image')->init($_product, 'small_image')->resize(135); ?>" width="135" height="135" alt="<?php echo $this->stripTags($this->getImageLabel($_product, 'small_image'), null, true) ?>" /></a>
                <h2 class="product-name"><a href="<?php echo $_product->getProductUrl() ?>" title="<?php echo $this->stripTags($_product->getName(), null, true) ?>"><?php echo $_helper->productAttribute($_product, $_product->getName(), 'name') ?></a></h2>
                <?php if($_product->getRatingSummary()): ?>
                <?php echo $this->getReviewsSummaryHtml($_product, 'short') ?>
                <?php endif; ?>
                <?php echo $this->getPriceHtml($_product, true) ?>
                <div class="actions">
                    <?php if($_product->isSaleable()): ?>
                        <button type="button" title="<?php echo $this->__('Add to Cart') ?>" class="button btn-cart" onClick="setLocation('<?php echo $this->getAddToCartUrl($_product) ?>')"><span><span><?php echo $this->__('Add to Cart') ?></span></span></button>
                    <?php else: ?>
                        <p class="availability out-of-stock"><span><?php echo $this->__('Out of stock') ?></span></p>
                    <?php endif; ?>
                    <ul class="add-to-links">
                        <?php if ($this->helper('wishlist')->isAllow()) : ?>
                            <li><a href="<?php echo $this->helper('wishlist')->getAddUrl($_product) ?>" class="link-wishlist"><?php echo $this->__('Add to Wishlist') ?></a></li>
                        <?php endif; ?>
                        <?php if($_compareUrl=$this->getAddToCompareUrl($_product)): ?>
                            <li><span class="separator">|</span> <a href="<?php echo $_compareUrl ?>" class="link-compare"><?php echo $this->__('Add to Compare') ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </li>
        <?php if ($i%$_columnCount==0 || $i==$_collectionSize): ?>
        </ul>
        <?php endif ?>
        
        <form action="<?php echo Mage::getBaseUrl(); ?>checkout/cart/add/" method="post" style="display:block; clear:both;"> 

<?php 

$product = Mage::getModel('catalog/product'); 
$product->load($_product->getId()); 

//print_r($product); 
//exit(); 

$xml = ""; 
$hasAtts = 0; 

// configurable products 
$productType = $product->getTypeId(); 

if($productType == "configurable") { 

// configurable products 
$attValConfig = $product->getTypeInstance()->getConfigurableAttributesAsArray(); 

if(sizeof($attValConfig)) { 

$hasAtts++; 
 
foreach($attValConfig as $attValConfigSingle) { 

$xml .= "<div class='floatoption1'>".$attValConfigSingle['frontend_label'].": "; 

$xml .= "<select style='display:block; clear:both; margin-bottom:10px;' name='super_attribute[".$attValConfigSingle['attribute_id']."]'>"; 

foreach($attValConfigSingle['values'] as $attValConfigSingleVal) { 

$baseprice = $this->getPriceHtml($product, true);
$strippedprice = str_replace("£", "", $baseprice);
$numprice = strip_tags($strippedprice);
$numpricea = (float)$numprice;
$optionprice = $attValConfigSingleVal['pricing_value'];
$numpriceb = (float)$optionprice;
$catprice = $numpricea + $numpriceb;
$catpricea = number_format($catprice,2);

if (is_numeric($numpriceb)) { 
$xml .= "<option value='".$attValConfigSingleVal['value_index']."'>".$attValConfigSingleVal['label']." £".$catpricea."</option>"; 
}   else { $xml .= "<option value='".$attValConfigSingleVal['value_index']."'>Not Mumeric</option>"; }
}
$xml .= "</select></div>"; 

} 

} 


} 
// end configurable products 

$attVal = $product->getOptions(); 

if(sizeof($attVal)) { 

$hasAtts++; 

foreach($attVal as $optionVal) { 




$xml .= "<div class='floatoption1'>Size:<select style='display:block; clear:both; margin-bottom:10px;' name='options[".$optionVal->getId()."]'>"; 

foreach($optionVal->getValues() as $valuesKey => $valuesVal) { 
$xml .= "<option value='".$valuesVal->getId()."'>".$valuesVal->getTitle()." +".Mage::helper('core')->currency($valuesVal->getPrice())."</option>"; 
} 

$xml .= "</select></div>"; 

} 

} 

$xml .= "<div class='floatoption2'>Qty: <input style='display:block; clear:both; margin-bottom:20px;' id='qty' class='input-text qty' type='text' value='1' maxlength='12' name='qty'/></div>"; 

echo($xml); 

?> 

<input type="hidden" name="product" value="<?php echo($_product->getId()); ?>" /> 
<div class="catbutton">
<button class="button" class="button btn-cart" type="submit"><span><span><?php echo $this->__('Add to Cart') ?></span></span></button></div>



</form> 
        <?php endforeach ?>
        <script type="text/javascript">decorateGeneric($$('ul.products-grid'), ['odd','even','first','last'])</script>
    <?php endif; ?>

    <div class="toolbar-bottom">
        <?php echo $this->getToolbarHtml() ?>
    </div>
</div>
<?php endif; ?>



###############################################################
####################################################################
call ajax add to cart in listing page in magento :
<div style="margin-bottom:5px; text-align:right;"><button id="add-items-to-cart" class="form-button" onClick="addItemsToCart()"><span><?php echo $this->__('Add Items to Cart') ?></span></button><div id="waiting" style="height:22px; display:none; line-height:22px;"><span id="processing-text">Processing...</span> <img src="<?php echo $this->getSkinUrl().'images/wait22trans.gif'; ?>" width="22" height="22" style="display:inline; vertical-align:middle;"/></div></div>


<script type="text/javascript">
    function processNext(urls, i) {
        var next = i + 1;
        $('processing-text').update('Processing item ' + next);
        if (next < urls.size()) {
            new Ajax.Request(urls[i], {
              method: 'get',
              onComplete: function(transport) {
                processNext(urls, next);
              }
            });
        } else {
            new Ajax.Request(urls[i], {
              method: 'get',
              onComplete: function(transport) {
                window.location.reload();
              }
            });
        }
    }
 
    function addItemsToCart() {
        $('add-items-to-cart').hide();
        $('waiting').show();
 
        var addToCartUrls = [];
        $$('input.add').each(function(e){
            if(e.checked == true) {
                var id = e.readAttribute('id').split('_')[1];
                var qty = Number($('qty_' + id).value);
                if (qty < 1) qty = 1;
                addToCartUrls.push($('url_' + id).value + 'qty/' + qty);
            }
        });
 
        if (addToCartUrls.size() > 0) {
            processNext(addToCartUrls, 0);
        } else {
            $('add-items-to-cart').show();
            $('waiting').hide();
            alert('Please check off the items you want to add.');
        }
    }
</script>

<div style="margin-bottom:5px; text-align:right;"><button id="add-items-to-cart" class="form-button" onClick="addItemsToCart()"><span><?php echo $this->__('Add Items to Cart') ?></span></button><div id="waiting" style="height:22px; display:none; line-height:22px;"><span id="processing-text">Processing...</span> <img src="<?php echo $this->getSkinUrl().'images/wait22trans.gif'; ?>" width="22" height="22" style="display:inline; vertical-align:middle;"/></div></div>


##############################################################
magento add to cart by produyct SKUN 
http://prattski.com/2008/11/03/magento-add-product-to-cart-by-sku-form/

####################################################################


add custum multiple into aadd to cart in magento :
<?php $curcat =  Mage::registry('current_category'); ?>

<?php  $curcat['name'];?>
<?php $_helper = $this->helper('catalog/output'); ?>
<?php 
     $id = 4;
   
    $model1=Mage::getModel('catalog/category')->load($id);
	$collection = $model1->getProductCollection();
	               $collection->addAttributeToSelect('name');

  echo  count($collection);
  ?>
 
<ul>
<?php foreach($collection as $product) : ?>
	<li><a href="<?php echo $product->getProductUrl() ?>"><?php echo $product->getName() ?>
    <img src="<?php   echo $this->helper('catalog/image')->init($product, 'small_image')->resize(135); ?>" width="50" heig="50"
    alt="<?php echo $this->stripTags($this->getImageLabel($product, 'small_image'), null, true) ?>"/></a>
  <?php if($product['type_id']=='configurable'): ?>
<?php  $childProducts = Mage::getModel('catalog/product_type_configurable')->getUsedProducts(null, $product); ?>
    <ul>
	<?php foreach( $childProducts as  $childProducts1): ?>
      <li style=" padding-left:5px;"><?php echo $childProducts1['name'] ;?>&nbsp;&nbsp;and
                                     <font style="color:red;">sku<?php echo $childProducts1['sku'] ;?></font>
               <input type="checkbox" class="input-checkbox add" name="add_<?php echo $_iterator; ?>" id="add_<?php echo $_iterator; ?>" />
               <input type="hidden" name="url_<?php echo $_iterator; ?>" id="url_<?php echo $_iterator; ?>" value="<?php echo $this->getAddToCartUrl($childProducts1) ?>" />

                <input type="text" class="input-text qty" name="qty_<?php echo $_iterator; ?>" id="qty_<?php echo $_iterator; ?>" maxlength="12" value="<?php echo $this->getMinimalQty($childProducts1) ?>" />
</li>
    <?php endforeach;?>
    </ul>
   <?php endif; ?>
 
 </li>			

     
<input type="checkbox" class="input-checkbox add" name="add_<?php echo $_iterator; ?>" id="add_<?php echo $_iterator; ?>" />
<input type="hidden" name="url_<?php echo $_iterator; ?>" id="url_<?php echo $_iterator; ?>" value="<?php echo $this->getAddToCartUrl($product) ?>" />
<?php if(!$product->isGrouped()): ?>
     <input type="text" class="input-text qty" name="qty_<?php echo $_iterator; ?>" id="qty_<?php echo $_iterator; ?>" maxlength="12" value="<?php echo $this->getMinimalQty( $product) ?>" />
<?php endif; ?>

<script type="text/javascript">
    function processNext(urls, i) {
        var next = i + 1;
        $('processing-text').update('Processing item ' + next);
        if (next < urls.size()) {
            new Ajax.Request(urls[i], {
              method: 'get',
              onComplete: function(transport) {
                processNext(urls, next);
              }
            });
        } else {
            new Ajax.Request(urls[i], {
              method: 'get',
              onComplete: function(transport) {
                window.location.reload();
              }
            });
        }
    }

    function addItemsToCart() {
        $('add-items-to-cart').hide();
        $('waiting').show();

        var addToCartUrls = [];
        $$('input.add').each(function(e){
            if(e.checked == true) {
                var id = e.readAttribute('id').split('_')[1];
                var qty = Number($('qty_' + id).value);
                if (qty < 1) qty = 1;
                addToCartUrls.push($('url_' + id).value + 'qty/' + qty);
            }
        });

        if (addToCartUrls.size() > 0) {
            processNext(addToCartUrls, 0);
        } else {
            $('add-items-to-cart').show();
            $('waiting').hide();
            alert('Please check off the items you want to add.');
        }
    }
</script>
<?php endforeach; ?>
</ul>


<div style="margin-bottom:5px; text-align:right;">
<button id="add-items-to-cart" class="form-button" onClick="addItemsToCart()"><span><?php echo $this->__('Add Items to Cart') ?></span></button><div id="waiting" style="height:22px; display:none; line-height:22px;"><span id="processing-text">Processing...</span> <img src="<?php echo $this->getSkinUrl().'images/bkg_block-layered-dt.gif'; ?>" width="22" height="22" style="display:inline; vertical-align:middle;"/></div></div>





##############################################################
this is the map for showing multiple location a good code we can use and need to do some modification:

<http://maps.google.com/maps/ms?ll=56.607885,-95.712891&spn=32.74689,93.076172&t=h&z=4&vpsrc=6&msa=0&msid=202223571642363289419.0004bf1bb8b3a58ebe307


<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?t=h&amp;msa=0&amp;msid=202223571642363289419.0004bf1bb8b3a58ebe307&amp;ie=UTF8&amp;ll=56.607885,-95.712891&amp;spn=32.74689,93.076172&amp;output=embed"></iframe><br /><small>View <a href="http://maps.google.com/maps/ms?t=h&amp;msa=0&amp;msid=202223571642363289419.0004bf1bb8b3a58ebe307&amp;ie=UTF8&amp;ll=56.607885,-95.712891&amp;spn=32.74689,93.076172&amp;source=embed" style="color:#0000FF;text-align:left">Untitled</a> in a larger map</small>

####################################################################
Invalid method Mage_Catalog_Block_Product_List_Toolbar::isLastPage
to resolve this error :
goes 

It works. Tks dominicgamble.

frooties just copy this: 
public function isLastPage()
    {
        return $this->getCollection()->getCurPage() >= $this->getLastPageNum();
    }
and paste in app/code/core/Mage/Core/Block/Template.php after this: 
public function getCacheKeyInfo()
    {
        return array(
            'BLOCK_TPL',
            Mage::app()->getStore()->getCode(),
            $this->getTemplateFile(),
            'template' => $this->getTemplate()
        );
    }
##############################################################
paypal  kushagra

(1)http://sunnycyk.hk/2009/12/08/magento-paypal-standard-payment-and-ipn-setting/;


####################################################################

##############################################################
####################################################################

selable call attribute product in product listing page:
 <div class="ranking">  
	                                           <?php if($_product->getTypeId() == "configurable" && $_product->isSaleable()): ?>
                                                <?php $attValConfig = $_product->getTypeInstance()->getConfigurableAttributesAsArray(); ?>
                                                <?php if(sizeof($attValConfig)): ?>
                                                <?php //foreach($attValConfig as $attValConfigSingle): ?>
                                                <?php
                                                    $config		= $_product->getTypeInstance(true);
                                                    $sizes		= array();
                                                    $poducts	= $config->getUsedProductIds($_product);
                
                                                    foreach ($poducts as $product) {
                                                        $voor	=	(int) Mage::getModel('cataloginventory/stock_item')->loadByProduct($product)->getQty();
                                                        $sku	=	Mage::getModel('catalog/product')->load($product)->getSku();
                                                        $id		=	Mage::getModel('catalog/product')->load($product)->getId();
                                                        if($voor != 0) {
                                                            $_newProduct = Mage::getModel('catalog/product')->load($product);
                                                            $sizes[$id][]	=	$_newProduct->getAttributeText('s4_size');
                                                        }
                                                    }
                                                ?>     <?php foreach($sizes as $key=>$size):?>
                                                     <ul>  <li> <?php echo $size[0] ?></li></ul>
                                                         <?php endforeach;?>  
                                                       
                                                  <?php endif;?>
												  <?php endif;?>
              </div>
              

##############################################################
<?php
magentovery useful url also media url 

Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_JS);
//http://magento.demo/js/

Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_LINK);
//http://magento.demo/index.php/

Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA);
//http://magento.demo/media/

Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN);
//http://magento.demo/skin/

Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB);
//http://magento.demo/

Enjoy!

?>
####################################################################

##############################################################

this is for showing top button:

<script type="text/javascript">
    var $j = jQuery.noConflict();
      $j(document).ready(function() {
      $j('.top-link').click(function(){
      $j('html, body').animate({scrollTop:0}, 'fast');
      });
      });
</script>
<a href="javascript:void(0);" class="top-link"><?php echo $this->__('Top') ?></a>

v###################################################################

###############################################################

Fetching all the options values of attribute.
The below post show he syntax of  fetching values of attribute furniturebrand.
"furniturebrand" attribute type is combo.
Syntax ::
$product = Mage::getModel("catalog/product");
$attributes = Mage::getResourceModel("eav/entity_attribute_collection")
->setEntityTypeFilter($product->getResource()->getTypeId())
->addFieldToFilter("attribute_code", "furniturebrand") // This can be changed to any attribute code
->load(false);
$attribute = $attributes->getFirstItem()->setEntity($product->getResource()); /* @var $attribute Mage_Eav_Model_Entity_Attribute */
$sortby = $attribute->getSource()->getAllOptions(false);
foreach($sortby as $sort_attribute) {
echo $sort_attribute['value'];
}
The above foreach loop is to display all the values of attribute furniturebrand.
####################################################################

##############################################################
####################################################################


Google plus 
  <!-- Google Plus One Button BEGIN -->
                        
                            <div id="google-plusone" style="float:right;">
                            <script type="text/javascript" src="https://apis.google.com/js/plusone.js">
                            {"parsetags": "explicit"},
                            {"lang": "<?php echo $this->__('en-GB') ?>"}
                            </script>
                            <g:plusone size="medium" count="false" href=<?php echo trim(Mage::registry('current_product')->getProductUrl()) ?></g:plusone>
                            </div>
                            <script type="text/javascript">
                            gapi.plusone.go("google-plusone");
                            </script>
                          
<!-- Google Plus One Button END -->

##############################################################
####################################################################
get attribute collection by the attribute_set in magento :
added product coustum option in magento poroduct listing page:

<?php
$attributeSetModel = Mage::getModel('eav/entity_attribute_set');
$attributeSetId    = 42; // or $_product->getAttributeSetId(); if you are using product model
$attributeSetModel->load($attributeSetId);
echo $attributeSetModel['attribute_set_name'];
$attributes = Mage::getModel('catalog/product_attribute_api')->items($attributeSetId);
foreach($attributes as $_attribute){
   // echo count($_attribute);
	//echo '<pre>';
	//print_r($_attribute);
}



$productCollection = Mage::getModel('catalog/product')
                    ->getCollection()
                    ->addAttributeToSelect('name')
                    ->addFieldToFilter('attribute_set_id', $attributeSetId);
foreach($productCollection as $_product){
//    echo '<pre>';
	echo $_product['name'] ;
}
?>
<strong>


</strong>


##############################################################
####################################################################
<?php 
$productSku = $_product->getSku();
$product = Mage::getModel('catalog/product');
$productId = $product->getIdBySku( $productSku );

$product = Mage::getModel("catalog/product")->load($productId);

$attVal = $product->getOptions();

$optStr = "";

// loop through the options
foreach($attVal as $optionKey => $optionVal) {

//$optStr .= "<br/>";

//$optStr .= $optionVal->getTitle().": ";

$optStr .= "<select style='display:block; clear:both;' name='options[".$optionVal->getId()."]'>";

foreach($optionVal->getValues() as $valuesKey => $valuesVal) {
$optStr .= "<option value='".$valuesVal->getId()."'>".$valuesVal->getTitle()."</option>";
}
optStr .= "</select>";

}

echo($optStr ); 
?>
##############################################################
####################################################################
made coustum featured product:

<div id="home-featured">
	<div class="page-title featured-title">
        <h3><?php echo $this->__('Featured products') ?></h3>
    </div>

	<?php
		// some helpers
		$_helper = $this->helper('catalog/output');
		$storeId = Mage::app()->getStore()->getId();
        $catalog = $this->getLayout()->createBlock('catalog/product_list')->setStoreId($storeId);

		// get all products that are marked as featured
		$collection = Mage::getModel('catalog/product')->getCollection();
		$collection->addAttributeToSelect('featured_product');
		$collection->addFieldToFilter(array(
			array('attribute' => 'featured_product', 'eq' => true),
		));

		// if no products are currently featured, display some text
		if (!$collection->count()) :
	?>

	<p class="note-msg"><?php echo $this->__('There are no featured products at the moment.') ?></p>

	<?php else : ?>

	<div class="category-products">

	<?php
		$_collectionSize = $collection->count();
		$_columnCount = 4;
		$i = 0;

		foreach ($collection as $_product) :
			$_product = Mage::getModel('catalog/product')->setStoreId($storeId)->load($_product->getId());

	?>

	    <?php if ($i++%$_columnCount==0): ?>
	    <ul class="products-grid">
	    <?php endif ?>
	        <li class="item<?php if(($i-1)%$_columnCount==0): ?> first<?php elseif($i%$_columnCount==0): ?> last<?php endif; ?>">
	            <a href="<?php echo $_product->getProductUrl() ?>" title="<?php echo $this->stripTags($this->getImageLabel($_product, 'small_image'), null, true) ?>" class="product-image"><img src="<?php echo $this->helper('catalog/image')->init($_product, 'small_image')->resize(135); ?>" width="135" height="135" alt="<?php echo $this->stripTags($this->getImageLabel($_product, 'small_image'), null, true) ?>" /></a>
	            <h2 class="product-name"><a href="<?php echo $_product->getProductUrl() ?>" title="<?php echo $this->stripTags($_product->getName(), null, true) ?>"><?php echo $_helper->productAttribute($_product, $_product->getName(), 'name') ?></a></h2>
	            <?php if($_product->getRatingSummary()): ?>
	            <?php echo $this->getReviewsSummaryHtml($_product, 'short') ?>
	            <?php endif; ?>
	            <?php echo $this->getPriceHtml($_product, true) ?>
	            <div class="actions">
	                <?php if($_product->isSaleable()): ?>
	                    <button type="button" title="<?php echo $this->__('Add to Cart') ?>" class="button btn-cart" onClick="setLocation('<?php echo $catalog->getAddToCartUrl($_product) ?>')"><span><span><?php echo $this->__('Add to Cart') ?></span></span></button>
	                <?php else: ?>
	                    <p class="availability out-of-stock"><span><?php echo $this->__('Out of stock') ?></span></p>
	                <?php endif; ?>
	                <ul class="add-to-links">
	                    <?php if ($this->helper('wishlist')->isAllow()) : ?>
	                        <li><a href="<?php echo $this->helper('wishlist')->getAddUrl($_product) ?>" class="link-wishlist"><?php echo $this->__('Add to Wishlist') ?></a></li>
	                    <?php endif; ?>
	                    <?php if($_compareUrl=$catalog->getAddToCompareUrl($_product)): ?>
	                        <li><span class="separator">|</span> <a href="<?php echo $_compareUrl ?>" class="link-compare"><?php echo $this->__('Add to Compare') ?></a></li>
	                    <?php endif; ?>
	                </ul>
	            </div>
	        </li>
	    <?php if ($i%$_columnCount==0 || $i==$_collectionSize): ?>
	    </ul>
	    <?php endif ?>

		<?php endforeach ?>

        <script type="text/javascript">decorateGeneric($$('ul.products-grid'), ['odd','even','first','last'])</script>

	</div>

	<?php endif ?>

</div>
##############################################################
####################################################################


call the simple product of group product 

<?php
         $products = Mage::getModel('catalog/product')
                ->getCollection()
                ->addAttributeToFilter('type_id', array('eq' => 'grouped'));
                
				 foreach ($products as $product) 
				 {
                              $associatedProducts = $product->getTypeInstance(true)->getAssociatedProducts($product);
                              foreach($associatedProducts  as $associatedProducts1):
							                  // echo '<pre>';
											 //print_r($associatedProducts1->getData());
											    
												   $media =Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA);?>
<a href= "<?php echo  $associatedProducts1['url_path']; ?>"><img height="50" width="50" src="<?php echo $media."catalog/product".$associatedProducts1['thumbnail'];  ?> "/></a>	
							<?php   endforeach; 
							
                   }
?>


by this code
##############################################################
v###################################################################

serch kushagra 
 Magento: why Default Search / Mini Search not working returns 0 or more results ?
  Admin on Sat Feb 18, 2012 5:31 pm

Solution

Open up app/code/core/Mage/CatalogSearch/Block/Result.php

Uncomment line 149 and 150

// $this->getListBlock()
// ->setCollection($this->_getProductCollection());



Then change line 172

$this->_productCollection = $this->getListBlock()->getLoadedProductCollection();

to

$this->_productCollection = Mage::getSingleton('catalogsearch/layer')->getProductCollection();


That solves the search problem.

###############################################################
####################################################################

##############################################################
####################################################################

##############################################################

very very important in magento set the current url link 
<script type="text/javascript"  src="http://code.jquery.com/jquery-latest.js"></script>
<li><a id="manu1" href="<?php  echo $this->getUrl('') ?>"><span>Home</span></a></li>
                            <li><a  id="manu2"  href="<?php  echo $this->getUrl('about-us') ?>"><span>About Us</span></a></li>
                            <li><a  id="manu3"  href="<?php  echo $this->getUrl('customer-service') ?>"><span>Customer Service</span></a></li>
                            <li><a  id="manu4"  href="<?php  echo $this->getUrl('contacts') ?>"><span>Contacts</span></a></li>
                            <li><a   id="manu5" href="<?php  echo $this->getUrl('catalogsearch/term/popular') ?>"><span>Search Terms</span></a></li>
                            
                            

put in page
<script type="text/javascript">
$k = jQuery.noConflict()
$k("#manu5").lass("active");
</script>
####################################################################

##############################################################

http://www.richardcastera.com/blog/magento-add-additional-fields-to-the-contact-form

this is for the add extra field in magento contact us form.

how we add  extra
####################################################################


http://www.salimsazzad.com/how-to-show-all-category-on-magento-left-sidebar
<div class="block left-nav">
    <div class="block-title">
        <strong><span><?php echo $this->__('Shop by Category') ?></span></strong>
    </div>
    <div class="block-content">
        <ul id="left-nav">
            <?php foreach ($this->getStoreCategories() as $_category): ?>
                <?php if ($_category->getIsActive()): ?>
                    <?php $isactive      = $this->isCategoryActive($_category); ?>
                    <?php $hasChildren   = $_category->hasChildren(); ?>
                    <li class="category <?php if($isactive) echo 'active'; ?>" lang="<?php echo $_category->getId();?>">
                        <a href="<?php echo $this->getCategoryUrl($_category)?>" >
                            <span><?php echo $_category->getName();?> <?php echo "<a class='full' href='javascript:void(0)'>+</a>"; ?></span>
                        </a>
                        <?php if($isactive) echo " <a class='empty' href='".$this->getCategoryUrl($_category)."'></a>"; ?>
                    </li>
                    <?php if($hasChildren): ?>
                    <li>
                        <ul class="subcategory_<?php echo $_category->getId();?> subcategory" style="display:<?php echo $isactive? 'block' : 'none'; ?>;">
                            <?php foreach (Mage::getModel('catalog/category')->load($_category->getId())->getChildrenCategories() as $childCategory):?>
                                <?php $isactive          = $this->isCategoryActive($childCategory); ?>
                                <?php $hasmoreChildren   = $childCategory->hasChildren(); ?>
                                <li class="category" lang="<?php echo $childCategory->getId(); ?>">
                                    <a href="<?php echo $this->getCategoryUrl($_category)?>" >
                                        <?php echo $childCategory->getName(); ?>
                                    </a>
                                    <?php if($hasmoreChildren) echo " <a class='full' href='javascript:void(0)'>+</a>"; ?>
                                </li>
                                <?php if($hasmoreChildren): ?>
                                <li>                             
                                    <ul class="subcategory_<?php echo $childCategory->getId(); ?> subcategory" style="display:<?php echo $isactive? 'block' : 'none'; ?>;">
                                        <?php foreach (Mage::getModel('catalog/category')->load($childCategory->getId())->getChildrenCategories() as $_childCategory):?>
                                            <?php $isactive  = $this->isCategoryActive($_childCategory);?>
                                            <li class="category">
                                                <a href="<?php echo $_childCategory->getUrl(); ?>"  style="padding-left:15px;font-size:11px;" >
                                                    <?php echo $_childCategory->getName(); ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <?php endif ?>
                            <?php endforeach;?>
                        </ul>
                    <?php endif ?>
                    </li>
                <?php endif ?>
            <?php endforeach ?>
        </ul>
    </div>
</div>
 
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function(){ 
 
    // <a title="See also Adding custom sidebar in wordpress" href="http://www.salimsazzad.com/adding-custom-sidebar-in-wordpress">Custom</a> Menu
    jQuery(".category").click(function() {
        var open = this.getAttributeNode('lang').value;
        jQuery(".subcategory_" + open).slideToggle('medium');
    });
 
});
</script>

##############################################################


category with images here code:
<div class="middel">
  <ul class="products">
<?php 
    $_main_categories=$this->getStoreCategories();
    foreach ($_main_categories as $_main_category):
      
            $_sub_categories=$_main_category->getChildren();
             foreach ($_sub_categories as $_sub_category):
           ?>
				  <?php
                    $cur_category=Mage::getModel('catalog/category')->load($_sub_category->getId());
                    $layer = Mage::getSingleton('catalog/layer');
                    $layer->setCurrentCategory($cur_category);                    
?>
               
                         <li> 
                           
                        <?php if($_imageUrl=$this->getCurrentCategory()->getImageUrl()):?>
                       <div class="products_img">
                        <a href="<?php echo $this->getCurrentCategory()->getUrl()?>"><img src="<?php echo $_imageUrl?>"  width="201" height="94" alt="<?php echo $this->getCurrentCategory()->getName();?>"></a></div>
                               <h2 id="4" style="color:#000; size:11px !important; font-weight:bold !important;  text-align:center;"><?php echo $this->getCurrentCategory()->getName();?></h2>
                        <?php else:?>
                                <a href="<?php echo $this->getCurrentCategory()->getUrl()?>">  <?php echo $this->getCurrentCategory()->getName();?></a>
                        <?php endif;?>
                        
                        
               </li>

<?php
            endforeach;

    endforeach;

?> </ul>
</div>


####################################################################

##############################################################

<ul>
<?php
$from = date("Y-m-d H:i:s", (time()-2592000));
$to = date("Y-m-d H:i:s", time());

$_productCollection = Mage::getResourceModel('reports/product_collection')
                   ->addAttributeToSelect('*')
                   ->addOrderedQty($from, $to, true)
                   ->addAttributeToFilter('status', 1)
                   ->setOrder('ordered_qty', 'desc')
                   ->getSelect()->limit(10)->query();

foreach ( $_productCollection as $prod ) :
$_product = Mage::getModel('catalog/product');
$_product->load($prod['entity_id']);
($i%2) ? $even = "class='even-li'" : $even = "";
?>
<li <?php echo $even ?>>
<div><a href="<?php echo $this->getUrl($_product->getUrlPath()) ?>" title="View <?php echo $_product->name ?>"><img src="<?php echo $this->helper('catalog/image')->init($_product, 'image')->resize(48); ?>" alt="<?php echo $_product->name ?>"  /></a>
<a href="<?php echo $this->getUrl($_product->getUrlPath()) ?>" title="View <?php echo $_product->name ?>"><?php echo Mage::helper('core/string')->truncate($_product->name, 50) ?></a>
<p><?php echo Mage::helper('core/string')->truncate(strip_tags($_product->description), 130); ?></p></div>
</li>
<?php
endforeach;
?>
</ul>

#############################################################
Create Session :1
<?php
$session = Mage::getSingleton("core/session", array("name"=>"frontend"));

    $session->setData("sessionvarible", 8);

    $variableName = $session->getData("sessionvarible");
   ?>
   
####################################################################

##############################################################

show store honor no in magento :

Display Magento Store Contact Number

    Custom Code

by admin

To display contact number of magento store, we need to just copy and paste the code given below, where we want.




###################################################################



call facbbok button in magento 
 <div id="fb-root"></div>
              <script src="http://connect.facebook.net/en_US/all.js#appId=181097698614858&amp;xfbml=1"></script>
              <fb:like href="<?php echo $_product->getProductUrl() ?>" send="false" show_faces="false"></fb:like>

###############################################################

this is use for adding attribute in  magento tocategory  :
<?php $setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$setup->addAttribute('catalog_category', 'newcut',  array(
'group'         => 'General',
'input'    => 'text',
 'type'     => 'varchar',
 'label'    => 'Cat',
 'backend'       => ",
 'visible'       => 1,
 'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
'required' => false,
'default'  => 1,
'user_defined'  => 1,
'default'  => 0,
));

?>

<?php

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

$setup->addAttribute('catalog_category', 'sliderimage', array(
    'group'         => 'General',
    'input'         => 'image',
    'type'          => 'varchar',
    'label'         => 'Slider Image',
    'backend'       => 'catalog/category_attribute_backend_image',
    'visible'       => 1,
    'required'        => 0,
    'user_defined' => 1,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));

?>




Add custom Field/attribute to category using script in magento
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
// below code will add text attribute
$setup->addAttribute('catalog_category', 'attribute_code', array(
'group'         => 'General',
'input'         => 'text',
'type'          => 'varchar',
'label'         => 'Attribute label',
'backend'       => ",
'visible'       => 1,
'required'      => 0,
'user_defined' => 1,
'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));
// below code will add yes/no attribute
$setup->addAttribute('catalog_category', 'attribute_code',  array(
'type'     => 'int',
'label'    => 'Attribute label',
'input'    => 'select',
'source'   => 'eav/entity_attribute_source_boolean',
'global'   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
'required' => false,
'default'  => 1,
'user_defined'  => 1,
'default'  => 0
));
// below code will use to add image attribute
$setup->addAttribute('catalog_category', 'attribute_code',  array(
'group'         => 'General',
'type'     => 'varchar',
'label'    => 'Attribute Label',
'input'    => 'image',
'source'   => 'eav/entity_attribute_source_boolean',
'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
'required' => false,
'backend' => 'catalog/category_attribute_backend_image',
'frontend_input' =>",
'default'  => 1,
'visible'       => 1,
'user_defined'  => 1,
));
 
'attribute_code' will be replace with your own attribute code and same way 'Attribute Label' will be replace with attribute label.
Once you execute above script, it will automatically creates attribute.
Thanks,


'label'    => 'Attribute Label',
'input'    => 'image',
'source'   => 'eav/entity_attribute_source_boolean',
'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
'required' => false,
'backend' => 'catalog/category_attribute_backend_image',
'frontend_input' =>",
'default'  => 1,
'visible'       => 1,
'user_defined'  => 1,
));
 
'attribute_code' will be replace with your own attribute code and same way 'Attribute Label' will be replace with attribute label.
Once you execute above script, it will automatically creates attribute.
Thanks,




<?php /*?>
<?php

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

$setup->addAttribute('catalog_category', 'short_description', array(
    'group'         => 'General Information',
    'input'         => 'text',
    'type'          => 'varchar',
    'label'         => 'Short Description',
    'backend'       => '',
    'visible'       => 1,
    'required'        => 0,
    'user_defined' => 1,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));

?>
<?php */?>

####################################################################
?>



sort
##############################################################


for sorting categories i use this code :



<?php
	$childrenIdArray = explode(',',$this->getCurrentCategory()->getChildren());
	if ($key = array_search($this->getCurrentCategory()->getId(),$childrenIdArray)) {
		unset($childrenIdArray[$key]);
	} 
	$collection = Mage::getModel('catalog/category')->getCollection()
	        	->addAttributeToFilter('entity_id', array('in' => $childrenIdArray))
		        ->addAttributeToSort('name')
				->addAttributeToSelect('*');
    foreach($collection as $collection1)
	echo $collection1->getName().'</br>';
	echo '<br>';
?>

####################################################################

##############################################################
####################################################################

Getting all options of a specific attribute in Magento is fairly easy:

$attribute = Mage::getModel('eav/config')->getAttribute('catalog_product', 'color');  
foreach ($attribute->getSource()->getAllOptions(true) as $option) {
    
this is code for caling the attribute option     
    
    

##############################################################
####################################################################

Create CMS Page

Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);

$cmsPage = array(
			'title' => 'Test Page',
			'identifier' => 'test-page',
			'content' => 'Sample Test Page',
			'is_active' => 1,
			'sort_order' => 0,
			'stores' => array(0),
			'root_template' => 'three_columns'
			);

Mage::getModel('cms/page')->setData($cmsPage)->save();


Create CMS Page

Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);

$cmsPage = array(
			'title' => 'Test Page',
			'identifier' => 'test-page',
			'content' => 'Sample Test Page',
			'is_active' => 1,
			'sort_order' => 0,
			'stores' => array(0),
			'root_template' => 'three_columns'
			);

Mage::getModel('cms/page')->setData($cmsPage)->save();


Create Static Block

Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);

$staticBlock = array(
				'title' => 'Test Block',
				'identifier' => 'test-block',
				'content' => 'Sample Test Block',
				'is_active' => 1,
				'stores' => array(0)
				);

Mage::getModel('cms/block')->setData($staticBlock)->save();

Please note the following line of code above. This is necessary when you are creating cms pages and static blocks from frontend.:-

Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);


##############################################################
####################################################################


<?php
$optionId = $product->getColor();
Mage::helper('attributeoptionimage')->getAttributeOptionImage($optionId);
?>

##############################################################

Add bundle product to cart without having to specify the options



I have bundle products with 3 checkboxes checked as default. I want to add a bundle product from the page category list (list.phtml) without having to specify the options. How can I do this?


add bundle products in list.phtml 

<form action="<?php echo Mage::$this->helper('checkout/cart')->getAddUrl($product); ?>" method="post" id="product_addtocart_form_<?php echo $product->getId()?>">
<?php

// If we have a bundle:
if ($_product->getTypeId() == 'bundle'){

    $selectionCollection = $_product->getTypeInstance(true)->getSelectionsCollection(
           $_product->getTypeInstance(true)->getOptionsIds($_product), $_product
        );

    foreach($selectionCollection as $option) {

        echo '<input type="hidden" name="bundle_option[' . $option->option_id  . ']" value="' .  $option->selection_id . '" />';
        echo '<input type="hidden" name="bundle_option_qty[' . $option->option_id . ']" value="1" />';

    }//end: foreach $selectionCollection

} // end: if $_product == bundle 
?>
<input type="text" name="qty" class="qty" maxlength="4" value="1" />
<button type="button" onclick="this.form.submit()">




####################################################################
call template by this also without made block 

					


#############################################################

by this way i call

  <input  type="radio" id="11" value="<?php  echo $options1['label'];  ?>" name="simplewidth"  onclick="simplewidth_new(this)"  class="styled" />
  
  
     <script type="text/javascript">
     function  simplewidth_new(id)
	 {
 	 	
               var getid = id.value;
			   return document.getElementById('getwidth').innerHTML = getid;
			          
	 }
  </script>
  
  
  or
  
    <input  type="radio" id="11" value="<?php  echo $options1['label'];  ?>" name="simplewidth"  onclick="simplewidth_new(value)"  class="styled" />
  
  
     <script type="text/javascript">
     function  simplewidth_new(value)
	 {
 	 	
               var getid = value;
			   return document.getElementById('getwidth').innerHTML = getid;
			          
	 }
  </script>
  
v###################################################################

###############################################################

function changeToGreenClass() {
	var element = document.getElementById('class_ex');
	element.className = "classGreen";
}
function changeToRedClass() {
	var element = document.getElementById('class_ex');
	element.className = "classRed";
}
function removeClass() {
	var element = document.getElementById('class_ex');
	element.className = 
    
    
    	
####################################################################

##############################################################


  <?php  $storeId = Mage::app()->getStore()->getId();
                          $pageIdentifier = Mage::getModel('cms/page')->checkIdentifier("home", $storeId); 
						 echo $pageIdentifier;
				   ?>
                   
####################################################################

##############################################################
####################################################################

 echo $this->getLayout()->createBlock('review/form')->setBlockId('product.review.form')->toHtml()
 
 
##############################################################
####################################################################
This is the url for using

Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_JS);
//http://magento.demo/js/

Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_LINK);
//http://magento.demo/index.php/

Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA);
//http://magento.demo/media/

Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_SKIN);
//http://magento.demo/skin/

Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_WEB);
//http://magento.demo/



##############################################################

This is  for facebook country code:
http://www.mybloggertricks.com/2011/06/facebook-like-and-send-button-in-108.html

####################################################################
this is for call category products

  <?php $categories = $_product->getCategoryId(); //get total count for caurrent category ?> 
   <?php $_category = Mage::getModel('catalog/category')->load($categories)->getProductCollection();   ?>
##############################################################
####################################################################

 <?php 
#############Call upsell product by kushagra###############################

// Get product object.
   $object = Mage::getModel('catalog/product');
   
   //Get product detail using product id  (Suppose you have product id is : $product_id)]
   
   
   $_productid = $_product->getId();
   $_product = $object->load($_productid);

  
   // Fetch list of upsell product using query.
   $upsell_product = $_product->getUpSellProductCollection()->addAttributeToSort('position', Varien_Db_Select::SQL_ASC)->addStoreFilter(); 
  // echo count( $upsell_product);
  // echo '<pre>';
 //  print_r( $upsell_product->getData());
   //check if record is empty or not
  
     //if result is not empty then get  upsell product detail using foreach loop
      foreach($upsell_product as $_upsell):
         
         //get detail of single upsell prdocut using upsell product id
         $upsp = $object->load($_upsell->getId());

      ?>
     <h1> <?php   echo $upsp->getName();
        // echo "Poduct url : ". $upsp->getProductUrl();
        ?></h1>
		   <div class="imageProduct">
                	<div> 
                    	<img width="97px" height="100px" src="<?php echo Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).'catalog/product/'.$upsp['image']  ;	?>" />
					</div>
				</div>
                
			<div class="price1">  <div class="price_text"><?php echo 'nur&nbsp;'.number_format($upsp->getPrice(),'2').'&nbsp;€'; ?></div>
            <div class="to_article"><a  onclick="setLocation('<?php echo $this->getAddToCartUrl($upsp) ?>')">zum Artikel</a></div>
            </div>
        <?php  
       endforeach;
?>


##############################################################
v###################################################################
this  is the way to call directly without made cms block 
<?php echo $this->getLayout()->createBlock('core/template')->setTemplate('cms/custumhomepagemenu.phtml')->toHtml(); ?>


###############################################################
####################################################################
 <?php // Previous and Next product links in product page
     
    $_product = $this->getProduct();
     
    if(!$_product->getCategoryIds())
    return; // Don't show Previous and Next if product is not in any category
     
    $cat_ids = $_product->getCategoryIds(); // get all categories where the product is located
   print_r($cat_ids);
    $cat = Mage::getModel('catalog/category')->load( $cat_ids[0] ); // load first category, you should enhance this, it works for me
     
    $order = Mage::getStoreConfig('catalog/frontend/default_sort_by');
    $direction = 'asc'; // asc or desc
     
    $category_products = $cat->getProductCollection()->addAttributeToSort($order, $direction);
    $category_products->addAttributeToFilter('status',1); // 1 or 2
    $category_products->addAttributeToFilter('visibility',4); // 1.2.3.4
     
    $cat_prod_ids = $category_products->getAllIds(); // get all products from the category
    $_product_id = $_product->getId();
     
    $_pos = array_search($_product_id, $cat_prod_ids); // get position of current product
    $_next_pos = $_pos+1;
    $_prev_pos = $_pos-1;
     
    // get the next product url
    if( isset($cat_prod_ids[$_next_pos]) ) {
    $_next_prod = Mage::getModel('catalog/product')->load( $cat_prod_ids[$_next_pos] );
    } else {
    $_next_prod = Mage::getModel('catalog/product')->load( reset($cat_prod_ids) );
    }
    // get the previous product url
    if( isset($cat_prod_ids[$_prev_pos]) ) {
    $_prev_prod = Mage::getModel('catalog/product')->load( $cat_prod_ids[$_prev_pos] );
    } else {
    $_prev_prod = Mage::getModel('catalog/product')->load( end($cat_prod_ids) );
    }
    ?>
     
   
    <?php if($_prev_prod != NULL): ?>
    <div class="button">
    <a href="<?php print $_prev_prod->getUrlPath(); if($search_parameter):?>?search=1<?php endif;?>"><span id="ppro"><?php echo $this->__('previous product');?></span></a></span></a>
    </div>
    <?php endif; ?>
     
    <?php if($_next_prod != NULL): ?>
    <div class="button" id="nextpro">
    <a href="<?php print $_next_prod->getUrlPath(); if($search_parameter):?>?search=1<?php endif;?>"><span id="pnext"><?php  echo $this->__('next product').' >>';?></span></a>
    </div>
    <?php endif; ?>
    this is also previos and next products good code 


###############################################################
####################################################################

###############################################################
####################################################################


<?php
                /**
                 * Determine the previous/next link and link to current category
                 */
                if ($this->helper('catalog/data')->getCategory()) {
                    $_ccat = $this->helper('catalog/data')->getCategory();
                } else {
                    $_ccats = $this->helper('catalog/data')->getProduct()->getCategoryIds();
                    $_ccat = Mage::getModel('catalog/category')->load($_ccats[0]);
                } 
                $ppos         = $_ccat->getProductsPosition();
                arsort($ppos);
                $current_pid  = $this->helper('catalog/data')->getProduct()->getId();
                // build array from products positions
                $plist = array();
                foreach ($ppos as $pid => $pos) {
                    $plist[] = $pid;
                }
                $curpos   = array_search($current_pid, $plist);
                // get link for prev product
                $previd   = isset($plist[$curpos+1])? $plist[$curpos+1] : $current_pid;
                $product  = Mage::getModel('catalog/product')->load($previd);
                $prevpos  = $curpos;
                while (!$product->isVisibleInCatalog()) {
                    $prevpos += 1;
                    $nextid   = isset($plist[$prevpos])? $plist[$prevpos] : $current_pid;
                    $product  = Mage::getModel('catalog/product')->load($nextid);
                }
                $prev_url = $product->getProductUrl();
                // get link for next product
                $nextid   = isset($plist[$curpos-1])? $plist[$curpos-1] : $current_pid;
                $product  = Mage::getModel('catalog/product')->load($nextid);
                $nextpos  = $curpos;
                while (!$product->isVisibleInCatalog()) {
                    $nextpos -= 1;
                    $nextid   = isset($plist[$nextpos])? $plist[$nextpos] : $current_pid;
                    $product  = Mage::getModel('catalog/product')->load($nextid);
                }
                $next_url = $product->getProductUrl();
                // get link for current category
                $more_url = $_ccat->getUrl(); 
            ?> 

<?php  if($_product->getProductUrl()!= $next_url){ ?>

<div class="button"><a href="<?php echo $next_url;?>">
<img alt="" src="<?php echo $this->getSkinUrl('images/previous_button.png')?>"></a></div>
<?php } ?>
<?php if(($_product->getProductUrl()!= $next_url) && ($_product->getProductUrl()!= $prev_url) ) {?>
<?php } ?>
<?php  if($_product->getProductUrl()!= $prev_url){ ?>
<div class="button"><a href="<?php  echo $prev_url;?>"><img alt="" src="<?php echo $this->getSkinUrl('images/next_button.png')?>"></a></div>
<?php } ?>

     
     
     
     
     
##############################################################
<? get all option for the attribite
$attribute = Mage::getModel('eav/config')->getAttribute('catalog_product', 'color'); //here, "color" is the attribute_code
$allOptions = $attribute->getSource()->getAllOptions(true, true);

foreach ($allOptions as $instance) {
    $myArray[$instance['value']] = $instance['label'];
}
Mage::log($myArray);



####################################################################


<script type="text/javascript">// <![CDATA[
$kn = jQuery.noConflict()
$kn("#kunster1").lass("active");
// ]]></script>


##############################################################
####################################################################
on product listing page we have to put thisa coce for  facebook like

 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 


 <div class="fb-like" data-href="<?php echo $_product->getProductUrl() ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
##############################################################
####################################################################
<script>
function Countdown(then) {
 
 	this.then = then;
 	
 	function setElement(id, value) {
 		if (value.length < 2) {
 	    	value = "0" + value;
 		}
 	
 		window.document.getElementById(id).innerHTML = value;
 	}
 	
 	function countdown() {
 		now  		  = new Date();
 	  	diff		  = new Date(this.then - now);
 	  	
 		seconds_left  = Math.floor(diff.valueOf() / 1000);
 	
 		seconds  = Math.floor(seconds_left / 1) % 60;
 		minutes  = Math.floor(seconds_left / 60) % 60;
 		hours    = Math.floor(seconds_left / 3600) % 24;
 		days     = Math.floor(seconds_left / 86400) % 86400;
 		
 		setElement('countdown-days', days);
 		setElement('countdown-hours', hours);
 		setElement('countdown-minutes', minutes);
 		setElement('countdown-seconds', seconds);
 		
 		countdown.timer = setTimeout(countdown, 1000);
 	}
 	
 		
 	function start() {
 		this.timer = setTimeout(countdown, 1000);
 	}
 	
 	start(then);	
 }
 
 Countdown(new Date("Dec 04 2012 12:00:00"));
</script>

<span id="countdown-days"></span> days
 
 <span id="countdown-hours"></span>:<span id="countdown-minutes"></span>:<span id="countdown-seconds"></span>
##############################################################
####################################################################

facebook like in product view p[age
  <?php $currentUrl = $this->helper('core/url')->getCurrentUrl(); ?>
<script src="http://connect.facebook.net/en_DE/all.js#xfbml=1"></script><fb:like href="<?php echo $currentUrl ?>" show_faces="false" width="450" font=""></fb:like>


##############################################################
####################################################################
this is the way to call css in  layout

<reference name="head">                 <action method="addItem"><type>skin_css</type><name>css/slider.css</name><params/></action> 	    	<action method="addItem"><type>skin_js</type><name>js/jquery-1.5.2.min.js</name></action> 	    	<action method="addItem"><type>skin_js</type><name>js/cycle-fade-effect.js</name></action> 	    	<action method="addItem"><type>skin_js</type><name>js/slider.js</name></action> </reference> 


##############################################################
v###################################################################

this is i done coustum and add datepicer in to coustuom module

in form.php
$dateFormatIso = Mage::app()->getLocale() ->getDateFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT);
		$fieldset->addField('start_date', 'date', array(
		'label' => Mage::helper('coustumvote')->__('Start Date'),
		'title' => Mage::helper('coustumvote')->__('Start Date'),
		'name' => 'start_date',
		'image' => $this->getSkinUrl('images/grid-cal.gif'),
		'format' => $dateFormatIso,
		'value' => 'start_date',
		//'required' => true,
		));
        
        
in controller.php

		  
        $model->setId($this->getRequest()->getParam('id'))
                  ->setcreated_time($postData['start_date'])
                  ->save();   
                  
                       
         ?>


###############################################################
<?php 

filter only visible products 

$categoryId = 39; // a category id that you can get from admin
$category = Mage::getModel('catalog/category')->load($categoryId);

$products = Mage::getModel('catalog/product')
    ->getCollection()
	->addAttributeToselect('*')
    ->ategoryFilter($category);
	Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($products);
   Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($products); 

?>
####################################################################

##############################################################
 
Hello 
For related products do this: 
$related = $product->getRelatedProductCollection()
            ->addAttributeToSelect('required_options')
            ->addAttributeToSort('position', Varien_Db_Select::SQL_ASC)
            ->addStoreFilter();

        if (Mage::helper('catalog')->isModuleEnabled('Mage_Checkout')) {//if you want to exclude the products in the cart
            Mage::getResourceSingleton('checkout/cart')->addExcludeProductFilter($related,
                Mage::getSingleton('checkout/session')->getQuoteId()
            );
            $this->_addProductAttributesAndPrices($related);
        }
        Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($related);

        $related->load();
For upsells 
$upsells = $product->getUpSellProductCollection()
            ->addAttributeToSort('position', Varien_Db_Select::SQL_ASC)
            ->addStoreFilter()
        ;
        if (Mage::helper('catalog')->isModuleEnabled('Mage_Checkout')) {//if you want to exclude the products in the cart
            Mage::getResourceSingleton('checkout/cart')->addExcludeProductFilter($upsells,
                Mage::getSingleton('checkout/session')->getQuoteId()
            );

            $this->_addProductAttributesAndPrices($upsells);
        }
        Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($upsells);

        //$upsells->setPageSize(10);//uncomment if you want to get only the first 10 items.

        $upsells->load();
For crosssels 
$crosssells = $product->getCrossSellProductCollection()
            ->addAttributeToSelect(Mage::getSingleton('catalog/config')->getProductAttributes())
            ->addAttributeToSort('position', 'asc')
            ->addStoreFilter();
          if (Mage::helper('catalog')->isModuleEnabled('Mage_Checkout')) {//if you want to exclude the products in the cart
            Mage::getResourceSingleton('checkout/cart')->addExcludeProductFilter($crosssells,
                Mage::getSingleton('checkout/session')->getQuoteId()
            );

            $this->_addProductAttributesAndPrices($crosssells);
        }
        Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($crosssells);

        $crosssells->load();
####################################################################

<?php echo $_product->getCrossSellProducts();?> ?>
##############################################################
####################################################################
form_action="../contacts/index/post"

<p>{{block type="core/template" name="contactForm1" template="contacts/contact1.phtml" form_action="../contacts/index/post"}}</p>
##############################################################
####################################################################
http://www.htmlhelp.com/reference/html40/entities/latin1.html

this like for set the text for in german issue

##############################################################
####################################################################
   to get the page title need to call this function
   <?php echo  Mage::getSingleton('cms/page')->getTitle();?>
##############################################################
####################################################################
<script type="text/javascript">
function  anotherurl(url,event)
{
	// alert('ggg');
	 location.href=url;
}
</script>


 <a href="#fragment-1" onClick="anotherurl('<?php echo Mage::helper('core/url')->getHomeUrl();?>voting');return false;"> 
##############################################################
v###################################################################
http://www.magentocommerce.com/magento-connect/web-to-print-and-dynamic-imaging.html

this is use for uplaod images in frontend
###############################################################
####################################################################
home condition
<?php 
				  if( Mage::getSingleton('cms/page')->getIdentifier() == 'home' && Mage::app()->getFrontController()->getRequest()->getRouteName() == 'cms'): ?>
					<li class="home active"><a href="<?php echo $this->getUrl('')?>" title="Home"><span><?php echo $this->__('Home')?></span></li></a>
				<?php else: ?>
					<li class="home"><a href="<?php echo $this->getUrl('')?>" title="Home"><span><?php echo $this->__('Home')?></span></a></li>
				<?php endif ?>
		
        
##############################################################
####################################################################

http://magentoextension.net/archives/1059

this is use for adding filed in registration form in magento and also add in login form and billing form
##############################################################
####################################################################
http://magentoextension.net/archives/1076

this is use for call bestselling and most viewd products by make class in extension folder.

##########################################
http://magentoextension.net/archives/774
this is for mailchip

#############################################################################################
Get overall Bestselling products

<?php public function getBestsellingProducts()
{  
    // number of products to display
    $productCount = 5;
     
    // store ID
    $storeId    = Mage::app()->getStore()->getId();      
     
    // get most viewed products for current category
    $products = Mage::getResourceModel('reports/product_collection')
                    ->addAttributeToSelect('*')     
                    ->addOrderedQty()
                    ->setStoreId($storeId)
                    ->addStoreFilter($storeId)                  
                    ->setOrder('ordered_qty', 'desc')
                    ->setPageSize($productCount);
     
    Mage::getSingleton('catalog/product_status')
            ->addVisibleFilterToCollection($products);
    Mage::getSingleton('catalog/product_visibility')
            ->addVisibleInCatalogFilterToCollection($products);
     
    return $products;
}
Get Bestselling products for current category

public function getBestsellingProducts()
{  
    // number of products to display
    $productCount = 5;
     
    // store ID
    $storeId    = Mage::app()->getStore()->getId();      
     
    // get most viewed products for current category
    $products = Mage::getResourceModel('reports/product_collection')
                    ->addAttributeToSelect('*')     
                    ->addOrderedQty()
                    ->setStoreId($storeId)
                    ->addStoreFilter($storeId)
                    ->ategoryFilter(Mage::registry('current_category'))
                    ->setOrder('ordered_qty', 'desc')
                    ->setPageSize($productCount);                    
     
    Mage::getSingleton('catalog/product_status')
            ->addVisibleFilterToCollection($products);
    Mage::getSingleton('catalog/product_visibility')
            ->addVisibleInCatalogFilterToCollection($products);
     
    return $products;
}
Get Bestselling products for last 30 days

public function getBestsellingProducts()
{  
    // number of products to display
    $productCount = 5;
     
    // store ID
    $storeId    = Mage::app()->getStore()->getId();
 
    // get today and last 30 days time
    $today = time();
    $last = $today - (60*60*24*30);
 
    $from = date("Y-m-d", $last);
    $to = date("Y-m-d", $today);
     
    // get most viewed products for current category
    $products = Mage::getResourceModel('reports/product_collection')
                    ->addAttributeToSelect('*')     
                    ->addOrderedQty($from, $to)
                    ->setStoreId($storeId)
                    ->addStoreFilter($storeId)                  
                    ->setOrder('ordered_qty', 'desc')
                    ->setPageSize($productCount);
     
    Mage::getSingleton('catalog/product_status')
            ->addVisibleFilterToCollection($products);
    Mage::getSingleton('catalog/product_visibility')
            ->addVisibleInCatalogFilterToCollection($products);
     
    return $products;
}
Note: For Magento version 1.5 and higher, you can also look into the following files to get bestselling products:

- app/code/core/Mage/Sales/Model/Mysql4/Report/Bestsellers.php
- app/code/core/Mage/Sales/Model/Mysql4/Report/Bestsellers/Collection.php

- See more at: http:
//blog.chapagain.com.np/magento-get-bestselling-products-by-category-and-date-time/#sthash.A2qcSjeq.dpuf?>
#############################################################################################

#############################################################################################

#############################################################################################

#############################################################################################

#############################################################################################





grera\ttotorial in magento :

(1)http://magentoextension.net/

all my url contents:

12:11 PM 11/16/2011
very imp:
magento menu extension

tp://shersingh.in/careers

5:06 PM 11/4/2011


--------------------------------------------------
tp://www.magentocommerce.com/wiki/5_-_modules_and_development/search_and_advanced_search/how_to_add_search_by_category_to_advanced_search
--------------------------------------------------
tp://www.e-commercewebdesign.co.uk/blog/magento-tutorials/create-a-customised-magento-search-form.php

imp-->tp://magentist.com/magento_help/magento-layered-navigation-drop-down/
(for drop down br6:01 PM 10/31/2011and value)

imp-->tp://blog.chapagain.com.np/magento-how-to-filter-product-collection-using-2-or-more-category-filters/

imp-->
made website and call to them:

tp://inchoo.net/ecommerce/magento/how-to-set-multiple-websites-with-multiple-store-views-in-magento/

--------------------------------------------------

showing sites :
tp://www.myntra.com/women-footwear-flip-flops
tp://www.pumashop.in/
tp://kagimedia.com/media-products.ml
tp://www.homeshop18.com/milton-tiffin-box-set/search:Milton+Tiffin+Box+set/searchprc:%5B175+TO+1999%5D/sort:asc/prc:%5B713+TO+1999%5D/f2nm:%28%22Brand%23Lock+N+Lock%22%29/
--------------------------------------------------
read it
tp://www.magikthemes.com/question-answers/how-to-show-category-image-on-product-page-in-magento/



-------------------------------------------------- 

read this that is show important :
tp://www.ecomthemes.com/archives/category/magento-extensions/page/2
tp://www.ecomthemes.com/archives/category/magento-guide(very important)

--------------------------------------------------
for jquery:

tp://smoothgallery.jondesign.net/download/tp://smoothgallery.jondesign.net/ 

tp://www.smoothdivscroll.com/ 

tp://galleria.aino.se/ 


tp://www.freshdesignweb.com/80jquery-image-slideshow-and-content-slider-tutorial.ml(by me this )
--------------------------------------------------
for php edit update and delete functionality:
tp://www.pixel2life.com/publish/tutorials/890/news_script_using_oop_add_edit_delete_mysql_driven/


--------------------------------------------------

very important:
tp://www.ecomthemes.com/archives/838

--------------------------------------------------
all extension url here :

bestseller category product (1)tp://www.magentocommerce.com/magento-connect/bestseller-selected-on-category-id.ml
-------------------------------------------
brands sekller product here (2)tp://www.magentocommerce.com/magento-connect/brands-lite.mlparadox galary for the home page
---------------------------------
(3)tp://www.magentocommerce.com/magento-connect/paradoxlabs-gallery.ml
----------------------------------------------------
(4)tp://www.magentocommerce.com/magento-connect/quick-inform-6931.ml
---------------------------------------------------------
tp://www.magentocommerce.com/magento-connect/quick-inform-6931.ml
--------------------------------------------------------------------------------
for rss feed 
tp://www.magentocommerce.com/magento-connect/promotion-rss-feed.ml
-----------------------------------------------------------------------------
tp://www.magentocommerce.com/magento-connect/grouped-product-gallery.ml--------------------------------------------------

-----------------------------------------------------------------------------
tp://www.magentocommerce.com/magento-connect/automatic-up-sells-cross-sells-and-personalization-with-strands-recommender.ml
-----------------------------------------------------------------------------
(revirews )tp://www.magentocommerce.com/magento-connect/reviews-sidebar.ml
-----------------------------------------------------------------------------
tp://visionwidget.com/inspiration/web/374-free-magento-extensions.ml

-----------------------------------------------------------------------------
tp://www.magentocommerce.com/magento-connect/german-shop-3384.ml

-----------------------------------------------------------------------------
tp://www.magentocommerce.com/magento-connect/facebook-like-button.ml(facebook like button)
---------------------------------------------------------------------------------------------------------------------
(magento jq zoom)tp://www.magentocommerce.com/magento-connect/satrun77/extension/1492/magento-jqzoom
-----------------------------------------------------------------------------
tp://www.magentocommerce.com/magento-connect/IDEALIAGroup/extension/1843/ig-ligbox
-----------------------------------------------------------------------------
(most viewed)tp://www.magentocommerce.com/magento-connect/varyous/extension/608/mostviewed-module
----------------------------------------------------------------------------------------------------------------------------------------------------------

tp://www.magentocommerce.com/magento-connect/cart-items-preview-on-mouseover.ml (ajax mouse over cart)
--------------------------------------------------------------------------------------------------------

tp://www.google.com/recaptcha/whyrecaptcha  (for generating the captcha  dode for  after  doing this we installed t he audio message )

---------------------------------------------------------------------
tp://techdad.wordpress.com/2010/02/20/most-downloaded-magento-extensions/
(copyyyyyy)

--------

most imp :	
tp://www.devraju.com/programming/different-category-url-keys-for-different-store-views-in-magento/
-----------------------------------------------------------------------------

tp://www.mrphpguru.com/blog/2011/05/09/magento-category-and-subcategory-display/
-----------------------------------------------------------------------------

tp://www.magentocommerce.com/magento-connect/Raptor+Commerce+%28toby%29/extension/1345/raptor_explodedmenu


-->tp://www.magentocommerce.com/magento-connect/site-management/catalog/magento-easytabs.ml--done
-->tp://www.magentocommerce.com/magento-connect/customer-experience/shopping-cart/order-approval.ml (done)
-->tp://www.magentocommerce.com/magento-connect/customer-experience/shopping-cart/random-related-products-6104.ml
-->tp://www.magentocommerce.com/magento-connect/customer-experience/shopping-cart/price-layout-extension.ml
-->tp://www.magentocommerce.com/magento-connect/customer-experience/shopping-cart/quickview.ml
-->tp://www.magentocommerce.com/magento-connect/site-management/ease-of-use/prepopulated-order-comments-messages.ml
-->tp://www.magentocommerce.com/magento-connect/site-management/ease-of-use/ordermonitor-7400.ml


-----------------------------------------------------------------------------

                             (jquery)
(1) tp://www.gcmingati.net/wordpress/wp-content/lab/jquery/imagestrip/imageslide-plugin.ml 


(2) tp://www.1stwebdesigner.com/css/57-free-image-gallery-slideshow-and-ligbox-solutions/

kushagra 


----->>>ended all url extension <<<-----

--------------------->>>>>>>>>>>>>reference category for magneto <<<<<<<<<<<<<-------------------

(1)(tp://www.futurebazaar.com/targus-156-revolution-expedition-laptop-backpack/pd/63301/)
(2) tp://www.futurebazaar.com/


--------------=======================-----------------
tp://www.tripwiremagazine.com/2011/09/jquery-slider.ml


tp://www.mind-projects.it/jqzoom_v10\\


=======================================================================================
tp://www.magentocommerce.com/magento-connect/satrun77/extension/4224/moo_cloudzoom  jqzoom like 

tp://www.magentocommerce.com/magento-connect/cueblocks-zoom.ml  (this is great daear kushagra )

----------------------------------------------------------

for navo slider 
tp://shakyabiral.blogspot.com/2011/04/nivo-slider-in-magento-front-page.ml 

tp://shakyaabiral.wordpress.com/2011/04/24/nivo-slider-in-magento-front-page/

---------------------------------------------------------------------------------------
new project all useful url for rechemco

all refernces Magento Supplier Product Group Extension


Magento Supplier Product Group Extension


tp://go.magento.com/support/kb/category/name/product-categories/

tp://visionwidget.com/inspiration/web/374-free-magento-extensions.ml

<*> extension 

Fooman Invoice=Order Number   

<**> extension for store manager 
    
     tp://www.mag-manager.com/


-------------------------------------------------------------------------------




rooom jakr

tp://shakyaabiral.wordpress.com/2011/04/24/nivo-slider-in-magento-front-page/

------------------------------------------------------------------------------------

kink that how to make better payment gateway in magento 
tp://www.magentocommerce.com/knowledge-base/entry/payment-gateways-paypal-payflow-link/



---------------------------------------------------------------------------------------------
kush need s

tp://www.shayona.biz/career.ml
career@shayona.biz 
-------------:"""""""::::::::::"""""""""""""""""""""""""""

tps://www.google.com/recaptcha/admin/site?siteid=315348896

######################################################################################

one of the free extension for business

Cart2Quote 2.0 - Customer Quotation - Free
##########################################################################################3

tp://green-magento-template.web-experiment.info/arts-crafts-sewing-magento-template.ml


tp://green-magento-template.web-experiment.info/


vs features zoom



####################################################################
Magento utility function: How to easily create select box for drop-down attributes?



function getSelectBox($attributeCode, $label = '', $defaultSelect = null, $extraParams = null){
    $options            = array();
    $product            = Mage::getModel('catalog/product');
    $attribute          = $product->getResource()->getAttribute($attributeCode);
    if($attribute->usesSource()){
        $options = $attribute->getSource()->getAllOptions(false);
        array_unshift($options, array('label' => $label, 'value' => ''));
    }
 
    $select = Mage::app()->getLayout()->createBlock('core/html_select')
            ->setName($attributeCode)
            ->setId($attributeCode)
            ->setTitle($label)
            ->setValue($defaultSelect)
            ->setExtraParams($extraParams)
            ->setOptions($options);
    return $select->getHtml();
}

<?php echo getSelectBox('manufacturer', 'Select Manufacturer'); ?>
##############################################################
<?php 
Url to showoff to 

(1)tp://livedemo00.template-help.com/magento_33487/
tp://www.kateliving.com/

tp://www.dmxzone.com/go?18775  (tempalte )
?>
<style type="text/css">
.left_part .produkte .produkte_box:last-child{ margin-right:0px  !important;}
</style>
####################################################################
magento theme
Gala_Eva

##############################################################

one page checkout process this is free for using  :
http://www.magentocommerce.com/magento-connect/customer-experience/checkout/iwd-free-one-page-step-checkout-6454.html

#####################################################
http://blog.magikcommerce.com/how-to-show-most-viewed-best-selling-products-in-magento-store/
this is for making product

##############################################################################################################################
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function(){
	jQuery(".scroll").click(function(event){
		//prevent the default action for the click event
		event.preventDefault();

		//get the full url - like mysitecom/index.htm#home
		var full_url = this.href;

		//split the url by # and get the anchor target name - home in mysitecom/index.htm#home
		var parts = full_url.split("#");
		var trgt = parts[1];

		//get the top offset of the target anchor
		var target_offset = jQuery("#"+trgt).offset();
		var target_top = target_offset.top;

		//goto that anchor by setting the body scroll top to anchor top
		jQuery('html, body').animate({scrollTop:target_top}, 500);
	});
});
</script>

<div id="top"></div>
use bottom to tom scrool button

################################################################################################################################
<a href="http://www.facebook.com/sharer.php?u=<?php echo $_productCollection1->getProductUrl()  ?>&t=Check+this+out" target="_blank" title="Share on Facebook"><img src="<?php echo $this->getSkinUrl('images/facebook.png');?>" alt="Share on Facebook"> </a>
custum facebook url for product page
################################################################################################################################

$pass = "admin";
$salt = "at";
echo md5($salt.$pass).":".$salt;

run this code 
################################################################################################################################
get category  staticd blocktitle
<?php $block = Mage::getModel('cms/block')->load($this->getCurrentCategory()->getLandingPage());
echo $block->getTitle();?>
?>
################################################################################################################################
add chckbox for newslatter

if($_POST['newslatter'])
{
$email = $_POST['email'];
$status = Mage::getModel('newsletter/subscriber')->subscribe($email);
if ($status == Mage_Newsletter_Model_Subscriber::STATUS_NOT_ACTIVE) {
    Mage::getSingleton('core/session')
       ->addSuccess($this->__('Confirmation request has been sent.'));
}
else {
    Mage::getSingleton('core/session')
        ->addSuccess($this->__('Thank you for your subscription.'));
}
}

################################################################################################################################
How To Get Child Product Of Configurable Product In Magento
<?php 
$product = Mage::getModel('catalog/product')->load($product_id);
$childProducts = Mage::getModel('catalog/product_type_configurable')->getUsedProducts(null,$product);
?>
################################################################################################################################
Deleting Any Order In Magento with Sql Query

SET @increment_id='43290';
SELECT @order_id:=entity_id FROM sales_order_entity WHERE increment_id=@increment_id;
DELETE FROM sales_order_entity WHERE entity_id=@order_id OR parent_id=@order_id;
DELETE FROM sales_order WHERE increment_id=@increment_id;

################################################################################################################################
How To Increase session timeout to one day In Magento
Session SQL
1
2
3
INSERT INTO core_config_data(path, value)
VALUES ('web/cookie/cookie_lifetime', 86400)
ON DUPLICATE KEY UPDATE value = 86400;
From Admin Panel:
1
2
3
4
System -> Configuration
General > Web
Session Cookie management
Cookie Lifetime: 86400


################################################################################################################################

Display Most Viewed Products In Magneto

<?php
<?php
  $productCount = 5;
 
  $storeId    = Mage::app()->getStore()->getId();      
 
  $products = Mage::getResourceModel('reports/product_collection')
  ->addAttributeToSelect('*')
  ->setStoreId($storeId)
  ->addStoreFilter($storeId)
  ->addViewsCount()
  ->setPageSize($productCount);
 
  Mage::getSingleton('catalog/product_status')
  ->addVisibleFilterToCollection($products);
  Mage::getSingleton('catalog/product_visibility')
  ->addVisibleInCatalogFilterToCollection($products);
 
  print"<pre>";
  print_r($products);
?>
?>
################################################################################################################################

Following is the code to get the login & logout link.


//check the user is loggedon or not
if (! Mage::getSingleton('customer/session')->isLoggedIn()){
//if user logged on show the logout link - add this code within anchor tag
echo Mage::helper('customer')->getLoginUrl();
}
else{
//if user is not logged on yet show the login link - add this code within anchor tag
echo Mage::helper('customer')->getLogoutUrl();
}

Here are more variable's that may you need to get the customer data on the frontend.


bool customerHasAddresses ()
string getAccountUrl ()
Mage_Customer_Model_Customer getCurrentCustomer ()
Mage_Customer_Model_Customer getCustomer ()
string getCustomerName ()
string getDashboardUrl ()
string getEditPostUrl ()
string getEditUrl ()
string getEmailConfirmationUrl ([string $email = null])
string getForgotPasswordUrl ()
Mage_Customer_Model_Entity_Group_Collection getGroups ()
string getLoginPostUrl ()
string getLoginUrl ()
string getLogoutUrl ()
string getRegisterPostUrl ()
string getRegisterUrl ()
bool isConfirmationRequired ()
bool isLoggedIn ()
bool isRegistrationAllowed ()

################################################################################################################################
kushagra practice from 28052013
<?php

$collection->addAttributeToFilter('start_date', array('date' => true, 'to' => $todaysDate))
    ->addAttributeToFilter('end_date', array(array(
        array('date' => true, 'from' => $todaysDate),
        array('null' => true)
    ), 'left');

?>

<?php
 
    $catagory_model = Mage::getModel('catalog/category')->load($category_id); //where $category_id is the id of the category
 
    $collection = Mage::getResourceModel('catalog/product_collection');
 
    $collection->ategoryFilter($catagory_model); //category filter
 
    $collection->addAttributeToFilter('status',1); //only enabled product
 
    $collection->addAttributeToSelect(array('name','url','small_image')); //add product attribute to be fetched
 
    //$collection->getSelect()->order('rand()'); //uncomment to get products in random order      
 
    $collection->addStoreFilter();           
 
    if(!empty($collection))
 
    {
 
            foreach ($collection as $_product): 
 
            echo $_product->getName();   //get product name          
 
        endforeach;
 
    }else
 
        {
 
            echo 'No products exists';
 
    }               
 
     
 
?>

################################################################################################################################

ade simle product by script
<?php
include('app/Mage.php');
umask(0);
Mage::app();


$i=6;
for($i=6;$i<=40;$i++)

{
$product = Mage::getModel('catalog/product');	
$data = array(
 'attribute_set_id'  => 4,
 'type_id'      =>  'simple',
 'store_id'   => 0,
 'category_ids' => array(3,4),
 'website_ids'  => array(1),
 'sku'    => 'sampleproduct'.$i.'',
 'name'    => 'SampleProduct'.$i.'',
 'description'  => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
 'short_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.',
 'status'   => 1,
 'visibility'  => 4,
 'weight'   => 1,
 'price'    => 100.00,
 'setcustomdefault' => 1,
 'tax_class_id'  => 0,
 'rearimage' => 'rear.png',
 'frontimage' => 'front.png',
 'defaultimage' => 'thumb.jpg',
 'stock_data'  => array('is_in_stock' => 1,'qty' => 20),
 'created_at' => strtotime('now')
);
$product->addData($data)
    ->setInitialSetupFlag(true)
    ->save();
}
?>
################################################################################################################################

this is for the sorting to related and crosscel and upcell products
->setOrder('position', Varien_Db_Select::SQL_ASC);

################################################################################################################################

     add via this method in local.xml
        <action method="addItem"><type>skin_js</type><name>formalize/js/prototype.formalize.js</name><params/></action>
        <!--Formalize CSS-->
        <action method="ss"><stylesheet>formalize/css/formalize.css</stylesheet></action>
		
		<action method="addItem"><type>skin_js</type><name>js/jquery-1.8.3.min.js</name><params/></action>
		<action method="addItem"><type>skin_js</type><name>js/jquery-noconflict.js</name><params/></action>
################################################################################################################################
call products ist in home page with toolbar and listing

<reference name="content">
 	<block type="catalog/product_list" name="product_listho"  template="catalog/product/list.phtml">
 	<action method="setCategoryId"><categoryid>3</categoryid></action>
         <action method="olumnCountLayoutDepend"><layout>three_columns</layout><count>3</count></action>
 	<action method="setToolbarBlockName"><name>product_list_toolbar</name></action>
 	
 	<block type="catalog/product_list_toolbar" name="product_list_toolbar" template="catalog/product/list/toolbar.phtml">
 		<block type="page/html_pager" name="product_list_toolbar_pager">             
 	</block>
 	</block>
 </block></reference>

################################################################################################################################

<?php 


 $object = Mage::getModel('catalog/product');
   
   //Get product detail using product id  (Suppose you have product id is : $product_id)
  
  
   $_product = $object->load($product_id);
  
   // Fetch list of upsell product using query.
   $upsell_product = $_product->getUpSellProductCollection()->addAttributeToSort('position', Varien_Db_Select::SQL_ASC)->addStoreFilter(); 

   //check if record is empty or not
   $count = count($upsell_product); 
   if(empty($count)) : 
       //if empty
       echo "Record not found";

   else:

     //if result is not empty then get  upsell product detail using foreach loop
      foreach($upsell_product as $_upsell):
         
         //get detail of single upsell prdocut using upsell product id
         $upsp = $object->load($_upsell->getId());

         echo "Product Name : ". $upsp->getName();
         echo "Poduct url : ". $upsp->getProductUrl();
         echo "Product regular price : ". $upsp->getPrice();
         
       endforeach;
   
   endif;

?>
################################################################################################################################

checkout success page customization

Customise Magento Checkout Success Page Based On Payment Type
<?php 
    // Get the id of the order just made.
    $order = Mage::getModel('sales/order')->loadByIncrementId($this->getOrderId());
 
    // If the order was paid for by Check or Money Order, display the custom message
    if ($order->getPayment()->getMethod() == "checkmo")
    {
        echo $this->getLayout()->createBlock('cms/block')->setBlockId('money_order_msg')->toHtml();
    }
?>


or

MAGENTO: GET ORDER INFORMATION ON SUCCESS PAGE

<?php
    $this->getOrderId()
?><?php
     //loading the order object 
    $orderObj = Mage::getModel('sales/order')->loadByIncrementId($this->getOrderId());?>
    //get all the items included on the order. 
    $orderItems = $orderObj->getAllItems();

    //do a loop to get the sku of each item
foreach($orderItems as $item)
{
  //you can either echo each sku of the order / you can use array variable to pass items sku's
  echo  $item->getSku();
}
?>

Getting Subtotal: Using the model above you can use the following code to get the subtotal of your order. 

<?php
$orderSubTotal = $orderObj ->subtotal;
?>

################################################################################################################################
script make to  cms page
<?php

Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);

for($i=1;$i<6;$i++)
{
$cmsPage = array(
			'title' => 'Test Page'.$i,
			'identifier' => 'test-page'.$i,
			'content' => 'Sample Test Page',
			'is_active' => 1,
			'sort_order' => 0,
			'stores' => array(0),
			'root_template' => 'one_column'
			);

Mage::getModel('cms/page')->setData($cmsPage)->save();
}
?>

################################################################################################################################

to call thumbnail image
<?php by this function getThumbnail();?>

################################################################################################################################
add breadcrubms in any page

<?php $breadcrumbs = $this->getLayout()->getBlock('breadcrumbs'); 
$carturl = $this->getCheckoutUrl();
$breadcrumbs->rumb('home', array('label'=>Mage::helper('cms')->__('Home'), 'title'=>Mage::helper('cms')->__('Home Page'), 'link'=>Mage::getBaseUrl()));
$breadcrumbs->rumb('shoppingcart', array('label'=>Mage::helper('cms')->__('Shopping Cart'), 'title'=>Mage::helper('cms')->__('Shopping Cart'), 'link'=>$carturl));
echo $this->getLayout()->getBlock('breadcrumbs')->toHtml(); 
?>

add tier price
<?php echo $product->getTierPrice();?>

################################################################################################################################

great popup box
<style type="text/css">
	.modalDialog {
		position: fixed;
		font-family: Arial, Helvetica, sans-serif;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(0,0,0,0.8);
		z-index: 99999;
		opacity:0;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		pointer-events: none;
	}

	.modalDialog:target {
		opacity:1;
		pointer-events: auto;
	}

	.modalDialog > div {
		width: 400px;
		position: relative;
		margin: 10% auto;
		padding: 5px 20px 13px 20px;
		border-radius: 10px;
		background: #fff;
		background: -moz-linear-gradient(#fff, #999);
		background: -webkit-linear-gradient(#fff, #999);
		background: -o-linear-gradient(#fff, #999);
	}

	.close {
		background: #606061;
		color: #FFFFFF;
		line-height: 25px;
		position: absolute;
		right: -12px;
		text-align: center;
		top: -10px;
		width: 24px;
		text-decoration: none;
		font-weight: bold;
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
	}

	.close:hover { background: #00d9ff; }
</style>


<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<?php echo $this->helper('ecomdev_checkitout')->getConfirmText() ?>
        
	</div>
</div>
<a href="#openModal">Terms & Conditions</a>

################################################################################################################################

advanced searching




<?php $maxQueryLength= $this->helper('catalogsearch')->getMaxQueryLength();?>
<?php  //echo $this->getMessagesBlock()->getGroupedHtml() ?>
<?php $custumurl = Mage::getBaseUrl().'catalogsearch/advanced/result/';?>

<form action="<?php echo $custumurl;?>" method="get" id="form-validate">
  <div class="fieldset advanced-search">
    <h2>Filter by Function</h2>
    <ul class="form-list" id="advanced-search-list">
      <?php foreach ($this->getSearchableAttributes() as $_attribute): ?>
      <?php $_code = $_attribute->getAttributeCode() ?>
      <?php  if($this->getAttributeInputType($_attribute) == 'yesno') : ?>
      <li>
        <?php switch($this->getAttributeInputType($_attribute)):
                    case 'number': ?>
        <?php break;
                    case 'yesno': ?>
        <?php  	  
		    $getcode = $_GET;
            $tsr = array();   
			$tsrcode = array();   //attributecode  that  comes from url by get method
		    foreach($getcode as $kk=>$vv)
		     {
		      $tsr[] =   $vv;
			  $tsrcodes[] =   $kk;
	         }
			 
	    ?>
        <input type="checkbox" name="<?php echo $_attribute->getAttributeCode(); ?>"  id="<?php echo $_attribute->getAttributeCode(); ?>"  value="1"   
		<?php   if(isset($tsrcodes)) : 
						foreach($tsrcodes as $t=>$s)
						{
							$val = $s;
							if( $_attribute->getAttributeCode() ==  $val) :
						    	echo  "checked='checked'";
							endif;
						}
               endif;
		?> />
        <label for="<?php echo $_attribute->getAttributeCode(); ?>"> <?php echo $this->getAttributeLabel($_attribute) ?></label>
        <?php endswitch; ?>
      </li>
      <?php endif;?>
      <?php endforeach; ?>
      <?php
		  $obj = new Mage_Catalog_Block_Navigation();

          $store_cats = $obj->getStoreCategories();

          $current_cat = $obj->getCurrentCategory();
		  
	      $current_cat->getId();  
	  ?>
      <li style="display:none;">
        <select name="category" id="category_search_field" style="visibility:hidden;" >
          <option value="">-- Select Category --</option>
          <?php foreach ($this->getStoreCategories() as $_category): ?>
          <?php if($_category->hasChildren()): ?>
          <option value="<?php echo $_category->getId(); ?>"><?php echo $_category->getName();?></option>
          <?php foreach ($_category->getChildren() as $subcategory): if($subcategory->getIsActive()) : ?>
          <option value="<?php echo $subcategory->getId(); ?>"<?php echo ($this->getRequest()->getQuery('category') == $subcategory->getId() ? ' selected="selected"': "") ?>><?php echo $subcategory->getName(); ?></option>
          <?php endif; endforeach; ?>
          <?php elseif($_category->getIsActive()): ?>
          <?php 
		  $url = Mage::getBaseUrl();
		  $currenturl  = Mage::helper('core/url')->getCurrentUrl();
		  ?>
          <?php if($currenturl == $url) { ?>
          <option <?php if ($_category->getId() == $current_cat->getId()):?> selected="selected" <?php endif; ?> value="<?php echo $_category->getId(); ?>"><?php echo $_category->getName();?></option>
          <?php } elseif($currenturl == $current_cat->getUrl()) { ?>
          <option <?php if ($_category->getId() == $current_cat->getId()):?> selected="selected" <?php endif; ?> value="<?php echo $_category->getId(); ?>"><?php echo $_category->getName();?></option>
          <?php } else { 
				if(isset($_GET['category']))
				 {
				$categoryloop =  $_GET['category']; //get category  
					  
				} ?>
          <option <?php if ($_category->getId() == $categoryloop ):?> selected="selected" <?php endif; ?> value="<?php echo $_category->getId(); ?>">
          <?php  echo $_category->getName();?>
          </option>
          <?php } ?>
          <?php endif; ?>
          <?php endforeach ?>
        </select>
      </li>
    </ul>
    <script type="text/javascript">decorateList('advanced-search-list')</script>
    <div class="buttons-set">
      <button type="submit" title="<?php echo $this->__('Search') ?>" class="button"><span><?php echo $this->__('Submit') ?></span></button>
    </div>
  </div>
</form>
<?php echo $this->getMessagesBlock()->getGroupedHtml() ?>
<script type="text/javascript">
//<![CDATA[
    var dataForm = new VarienForm('form-validate', true);
//]]>
</script> 


advanced searching result

<?php
/**
 * Magento Enterprise Edition
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento Enterprise Edition License
 * that is bundled with this package in the file LICENSE_EE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.magentocommerce.com/license/enterprise-edition
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    design
 * @package     base_default
 * @copyright   Copyright (c) 2013 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://www.magentocommerce.com/license/enterprise-edition
 */
?>
<?php 
//$_SESSION['cateoryname'] = $_GET['category'];
//echo $_GET['catagooryuse'];
$currentloopcat =  $_GET['category'];
?>
<div class="top-navigation1">
<?php
$storeId =2;

$id = Mage::app()->getStore($storeId)->getRootCategoryId();  //root category

$_helper = Mage::getModel('catalog/category')->load($id);


$obj = new Mage_Catalog_Block_Navigation();

$store_cats = $obj->getStoreCategories();

$current_cat = $obj->getCurrentCategory();
		  
$currentid = $current_cat->getId();   

$_categories = $_helper->getChildrenCategories();
 
$catloop = $_GET['category'];

?>
  <a    <?php if( $this->getUrl('') == $this->getUrl('*/*/*', array('_current'=>true, '_use_rewrite'=>true)) ):?>  class="active"    <?php endif; ?> href="<?php echo $this->getUrl()?>"><?php echo $this->__('ALL'); ?></a>
  <?php
foreach($_categories as $_categories1)
{
	?>
  <a <?php if($_categories1->getId() == $currentloopcat) {?> class="active" <?php } ?>  href="<?php echo $_categories1->getUrl() ?>"> <?php echo $_categories1->getName()?></a>
  <?php }
?>
  <div class="Clear"></div>
</div>
<?php echo $this->getMessagesBlock()->getGroupedHtml() ?>
<?php if($this->getResultCount()): ?>
<?php /*?>    <p class="advanced-search-amount">
        <?php echo $this->helper('catalogsearch')->__('<strong>%d item(s)</strong> were found using the following search criteria', $this->getResultCount()); ?>
    </p><?php */?>
<?php else: ?>
 <p class="error-msg"><?php echo $this->helper('catalogsearch')->__('No items were found using the following search criteria.');?> <a href="<?php echo $this->getFormUrl(); ?>"><?php echo $this->helper('catalogsearch')->__('Modify your search'); ?></a></p>
<?php endif; ?>
<div class="advanced-search-summary">
  <?php $searchCriterias=$this->getSearchCriterias(); ?>
  <?php foreach (array('left', 'right') as $side): ?>
  <?php if(@$searchCriterias[$side]): ?>
  <?php /*?><ul>
                    <?php foreach($searchCriterias[$side] as $criteria): ?>
                        <li><strong><?php echo $this->escapeHtml($this->helper('catalog')->__($criteria['name'])); ?>:</strong> <?php echo $this->escapeHtml($criteria['value']); ?></li>
                    <?php endforeach; ?>
                </ul><?php */?>
  <?php endif; ?>
  <?php endforeach; ?>
  <?php if($this->getResultCount()): ?>
  <p>
    <?php  //echo $this->helper('catalogsearch')->__("Don't see what you're looking for?"); ?>
    <?php /*?> <a href="<?php echo $this->getFormUrl(); ?>"><?php echo $this->helper('catalogsearch')->__('Modify your search'); ?></a><?php */?>
  </p>
  <?php endif; ?>
</div>
<?php if($this->getResultCount()): ?>
<?php echo $this->getProductListHtml() ?>
<?php endif; ?>
<?php $this->getSearchCriterias(); ?>







################################################################################################################################

give onlick location window:

<button onclick="location.href='<?php echo  $childcats->getUrl();  ?>';" ?>
################################################################################################################################

<?php  echo Mage::getSingleon('coustomer/session')->getCoustomer();?>

################################################################################################################################
image resize
<?php echo $this->getLayout()->createBlock('core/template')->setTemplate('cms/featured_product.phtml')->toHtml(); ?>
<div class="sub-cat-list">
<?php  $cucat = Mage::registry('current_category');?>
<h2 class="sub-cats"><?php echo $this->__('BROWSE '.$cucat['name']. ' BY CATEGORY') ?></h2>
<div class="sub-cat-listing">
<?php
$_category  = $this->getCurrentCategory(); 
$collection = Mage::getModel('catalog/category')->getCategories($_category->entity_id); //Get the current category and its children

foreach ($collection as $category){ 
	?>
    <div class="cat-list">
    <?php
    $subCategory = Mage::getModel('catalog/category')->load($category->getId()); 
    
	 $imgSrc = $subCategory['thumbnail'];
    
	if($imgSrc){ 
         $image = Mage::getBaseUrl('media').'catalog/category/'.$imgSrc;
		 ?>
<?php

$imageUrl = Mage::getBaseUrl('media').'catalog/category/'.$imgSrc;
if(!file_exists("./media/catalog/category/resized"))  
   mkdir("./media/catalog/category/resized",0777);
$imageName = $imgSrc;
$imageResized = Mage::getBaseDir('media').DS."catalog".DS."category".DS."resized".DS.$imageName;
$dirImg = Mage::getBaseDir().str_replace("/",DS,strstr($imageUrl,'/media'));

if (!file_exists($imageResized)&&file_exists($dirImg)) :
$imageObj = new Varien_Image($dirImg);
$imageObj->constrainOnly(TRUE);
$imageObj->keepAspectRatio(TRUE);
$imageObj->keepFrame(FALSE);
$imageObj->resize(98, 98);
$imageObj->save($imageResized);
endif;
$newImageUrl = Mage::getBaseUrl('media')."catalog/category/resized/".$imageName;
?>
<img src="<?php echo $newImageUrl;?>" />
 
<a href="<?php echo $subCategory->getUrl(); ?>"><img src="<?php echo $newImageUrl ?>" alt="<?php echo $subCategory['name'] ?>" title="<?php echo $subCategory['name'] ?>" /></a>

<?php echo '<h3><a href="'.$subCategory->getUrl().'">'.$subCategory['name'].'</a></h3>'; ?>
              <?php 
    }
	else
	{ 
        $image = Mage::getBaseUrl('media').'catalog/category/default_cat.jpg';
		echo '<a href="'.$subCategory->getUrl().'"><img height="98" width="98" src="'.$image.'" alt="'.$subCategory['name'].'" title="'.$subCategory['name'].'" /></a>';
		echo '<h3><a href="'.$subCategory->getUrl().'">'.$subCategory['name'].'</a></h3>';
     
    }
	
	?>
    </div>
    <?php
}
?>
</div>
</div>



################################################################################################################################
This code may help if you want to get child category of every current category
 <?php 
    $layer = Mage::getSingleton('catalog/layer');
    $_category = $layer->getCurrentCategory();
    $currentCategoryId= $_category->getId();
    $children = Mage::getModel('catalog/category')->getCategories($currentCategoryId);
    foreach ($children as $category)
    {
          echo $category->getName(); // will return category name 
          echo $category->getRequestPath(); // will return category URL
    }
    ?>
    
   <?php getCurrentChildCategories  ?>
magento get child category

<?php
 
// get category's child categories, assuming that you have known category object, $_category
 
$childrenIds = $_category->getChildren();
 
$childrenIds = explode(',', $childrenIds);
 
//loop get children category products
$visibility = array(
Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH,
Mage_Catalog_Model_Product_Visibility::VISIBILITY_IN_CATALOG
);
foreach($childrenIds as $childId) {
$_brand = Mage::getModel('catalog/category')->load($childId);
$_collection = Mage::getResourceModel('catalog/product_collection');
$_collection->addAttributeToFilter('visibility', $visibility)
->ategoryFilter($_brand)
->addAttributeToSelect('*')
->setOrder('news_from_date', 'desc')
->getSelect()
->limit(4);
 
?>


<?php
 
//load a product resources
$_product = Mage::getModel('catalog/product')->load($productId);
 
  //save the product into the registry
Mage::register('product', $_product);
 
 //call $_product's related products
echo $this->getLayout()->createBlock('catalog/product_list_related')->setTemplate('catalog/product/list/related.phtml')->toHtml();
 
?>
################################################################################################################################

ups by this 
always

Gateway URL: http://www.ups.com/using/services/rave/qcostcgi.cgi


################################################################################################################################

resize category images 

<?php

$imageUrl = Mage::getBaseDir('media').DS."catalog".DS."category".DS.$categoriesdata->getThumbnail();

// create folder

if(!file_exists("./media/catalog/category/resized"))     mkdir("./media/catalog/category/resized",0777);
// get image name

$imageName = $categoriesdata->getThumbnail();

// resized image path (media/catalog/category/resized/IMAGE_NAME)
$imageResized = Mage::getBaseDir('media').DS."catalog".DS."category".DS."resized".DS.$imageName;

// changing image url into direct path
$dirImg = Mage::getBaseDir().str_replace("/",DS,strstr($imageUrl,'/media'));

// if resized image doesn't exist, save the resized image to the resized directory
if (!file_exists($imageResized)&&file_exists($dirImg)) :
$imageObj = new Varien_Image($dirImg);
$imageObj->constrainOnly(TRUE);
$imageObj->keepAspectRatio(TRUE);
$imageObj->keepFrame(FALSE);
$imageObj->resize(120, 120);
$imageObj->save($imageResized);
endif;
$newImageUrl = Mage::getBaseUrl('media')."catalog/category/resized/".$imageName;
?>

// Finally your resized image is here..

<img src="<?php echo $newImageUrl ?>" />

?>
################################################################################################################################
In order to display sub categories in alphabetical order, go to app\code\core\Mage\Catalog\Model\Resource\category.php

and change in the line
<?php

->setOrder('position', Varien_Db_Select::SQL_ASC)

to

->setOrder('name', Varien_Db_Select::SQL_ASC)
?>

################################################################################################################################

<action method="addItem"><type>skin_js</type><name>js/zoom4magento/js/mootools.js
 </name></action>
 <action method="addItem"><type>skin_js</type><name>js/zoom4magento/js/swfobject.js
 </name></action>
 <action method="addItem"><type>skin_js</type><name>js/zoom4magento/js/videobox.js
 </name></action>
 <action method="ss"><stylesheet>js/zoom4magento/css/videobox.css</stylesheet>
 </action>
################################################################################################################################
 use to make module
 <?php  
 $helper = Mage::helper('checkout/cart')->getAddUrl($_product); ?>
 
################################################################################################################################
Magento: Sorting categories filter in left layered navigation
Magento: Sorting categories filter in left layered navigation

If you want to sort the categories listed in the layered navigation, it is very simple.
In the file app/code/core/Mage/catalog/Model/Layer/Filter/Abstract.php, add the following line before the return:

asort($this->_items);
################################################################################################################################

<?php   
#################################code to  sorting category by name kushagra#############################################

$layer = Mage::getSingleton('catalog/layer');
$category   = $layer->getCurrentCategory();
        /* @var $category Mage_Catalog_Model_Category */
$collection = Mage::getModel('catalog/category')->getCollection();
        /* @var $collection Mage_Catalog_Model_Resource_Eav_Mysql4_Category_Collection */
$collection->addAttributeToSelect('url_key')
            ->addAttributeToSelect('name')
			->addAttributeToSelect('thumbnail')
            ->addAttributeToSelect('is_anchor')
            ->addAttributeToSelect('image')
            ->addAttributeToFilter('is_active', 1)
			//->addAttributeToSort('name', 'ASC')
            ->addIdFilter($category->getChildren())
            ->setOrder('name', 'ASC')
            ->joinUrlRewrite()
            ->load();
 ?>
 <ul class="category-listing">
       <?php  foreach($collection as $collection1)
		{ ?>
         
          <li class="f-left">
		 	<?php if($collection1->getThumbnail())
			 {?>
  		          <a href="<?php echo $collection1->getURL();?>" title="<?php echo $collection1->getName();?>" class="cat-img"><img src="<?php echo Mage::getBaseUrl('media').'catalog/category/'.$collection1->getThumbnail();?>" width="172" alt="<?php echo $this->htmlEscape($collection1->getName()) ?>" /></a>
                      <?php } else {?>
                  <a href="<?php echo $collection1->getURL();?>" title="<?php echo $collection1->getName();?>"><img src="<?php echo $this->getSkinUrl('images/cat_no_imge.jpg')?>" width="172" height="172" /></a>
           <?php } ?>
    
         <a href="<?php echo $collection1->getURL();?>" title="<?php echo $collection1->getName();?>"><strong><?php echo $collection1->getName();?></strong></a>
	    
        </li> 
       <?php } ?> 
 </ul>       
################################################################################################################################

for making accordian menu we have to do following steps->
<action method="addItem"><type>skin_js</type><name>js/jquery-1.10.2.min.js</name></action>
<action method="addItem"><type>skin_js</type><name>js/jquery_noconflict.js</name></action>
<action method="addItem"><type>skin_js</type><name>js/jquery-ui.js</name></action>
 <action method="ss"><stylesheet>css/tabaccordian.css</stylesheet></action>
 
 
           
           
           
################################################################################################################################
add to cart with form

   <div class="button-sets"> 
                        
                        <form action="checkout/cart/add" method="get">
   <div><input type="hidden" name="product" value="<?php echo $product->getId() ?>" />

   <input  type="hidden" name="qty" value="1" />
   <input type="submit" name="submit" value="Add to cart" /></div>
  </form>
                        
                        
                        <button type="button" title="<?php echo $this->__('Details') ?>" class="button btn-cart" onClick="setLocation('<?php echo $product->getProductUrl() ?>')"><span><?php echo $this->__('Details') ?></span></button></div>
################################################################################################################################
   add to compare custom link
   
    <?php if($_compareUrl=$this->getAddToCompareUrl($_product)): ?>
                        <li><span class="separator">|</span> <a href="<?php echo $_compareUrl ?>" class="link-compare"><?php echo $this->__('Add to Compare') ?></a></li>
                    <?php endif; ?>

################################################################################################################################

call rating toany product collection
            
                <?php
$productId =  $_item->getId();
$reviews = Mage::getModel('review/review')
                ->getResourceCollection()
                ->addStoreFilter(Mage::app()->getStore()->getId())
                ->addEntityFilter('product', $productId)
                ->addStatusFilter(Mage_Review_Model_Review::STATUS_APPROVED)
                ->setDateOrder()
                ->addRateVotes();
$avg = 0;
$ratings = array();
if (count($reviews) > 0) {
    foreach ($reviews->getItems() as $review) {
        foreach( $review->getRatingVotes() as $vote ) {
            $ratings[] = $vote->getPercent();
        }
    }
    $avg = array_sum($ratings)/count($ratings);
}
if($avg): ?>
<div class="ratings">
    <div class="rating-box" style="float:left;">
        <div class="rating" style="width: <?php echo ceil($avg) ; ?>%;"></div>
    </div>
      </div>
<?php endif; ?>
################################################################################################################################
secure web url 
<?php echo  Mage::getBaseUrl('web', true); ?>

################################################################################################################################
get product avalibale qty
 <?php (int)Mage::getModel('cataloginventory/stock_item')->loadByProduct($_product)->getQty()?>
################################################################################################################################
alphabetical cat
<?php $allfonts = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"); ?>
<div class="designer-directory">
<h2>designers <span>&nbsp;</span> </h2>
<p><?php echo $this->__('Click on a designer from the list below to read their bio or browse their online flagship store.') ?></p>
<?php
$categoryName = 'Designers';
$categoryId = Mage::getResourceModel('catalog/category_collection')->addAttributeToSelect('entity_id')->addAttributeToFilter('name', $categoryName)->getFirstItem()->getEntityId();
$cats = Mage::getModel('catalog/category')->load($categoryId)->getChildren();
$catIds = explode(',',$cats);
$categories = array();
foreach($catIds as $catId) :
       $category = Mage::getModel('catalog/category')->load($catId); 
       $categories[$category->getName()] = $category->getUrl();
endforeach;
ksort($categories, SORT_STRING);
    $firstChar = '';
    $flag= 0;
?>
<div class="designer-category-content">
  <?php if(count($categories)<=0): ?>
  <div class="padder">
    <div class="note-msg"><?php echo $this->__('There are no category matching the selection.'); ?></div>
  </div>
  <?php else: ?>
  <div class="descat_main">
    <?php   $columncount = 0; 
          
		  	foreach($categories as $kk=>$vv):
				$firstCharOfCat = substr($kk,0,1);
				$alphafont[] = strtolower($firstCharOfCat);
			endforeach;
			
			
			
			
			foreach($categories as $kk=>$vv):
        	    
				$firstCharOfCat = substr($kk,0,1);
				
				if(strtolower($firstChar)!=strtolower($firstCharOfCat) and $firstChar!=''):
						   $flag = 1;
					endif; ?>
    <?php if($flag==1):?>
    <?php 
		$columncount++;
		if($columncount%5==0):
	?>
    </ul>
  </div>
  <div class="descat_main">
    <?php else :  ?>
    </ul>
    <?php endif; ?>
    <?php endif;?>
    <?php if(strtolower($firstChar)!=strtolower($firstCharOfCat)):
            $firstChar = $firstCharOfCat;
            $flag= 0;
				
				/*foreach($allfonts as $k1=>$v1):
				
				if(!in_array($v1,$alphafont)):
					echo $v1;
				endif;					
			endforeach;*/
				
			 ?>
    <div class="head"> <?php echo strtolower($firstChar);?> </div>
    <ul>
      <?php endif;
	  
	  if(strtolower($firstChar)==strtolower($firstCharOfCat)):
            $category_url = $vv; ?>
      <li><a href="<?php echo $category_url;?>"><?php echo strtoupper($kk);?></a></li>
      <?php endif;?>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php endif;?>
</div>
<?php //echo "<pre>";print_r($allfonts);?>

################################################################################################################################
kush code
<?php 
$page_tsr = explode("page=",Mage::helper("core/url")->getCurrentUrl());
$array1 = array(
    1 => "A",
    2 => "B",
    3 => "C",
	4 => "D",
	5 => "E",
	6 => "F",
	7 => "G",
	8 => "H",
	9 => "I",
    10 => "J",
    11 => "K",
	12 => "L",
	13 => "M",
	14 => "N",
	15 => "O",
	16 => "P",
	17 => "Q",
    18 => "R",
    19 => "S",
	20 => "T",
	21 => "U",
	22 => "V",
	23 => "W",
	24 => "X",
	25 => "Y",
	26 => "Z",
	27=>1,
	28=>2,29=>3,30=>4,31=>5,32=>6,33=>7,34=>8,35=>9,36=>0,
	
);

$catarray = $array1;
	
?>
<?php 
$_cat = new Mage_Catalog_Block_Navigation();
$currentCat = $_cat->getCurrentCategory();
$subCats = Mage::getModel('catalog/category')->load($currentCat->getId())->getChildren();
$subCatIds = explode(',',$subCats);

$categoriesCollection = Mage::getModel('catalog/category')->getCollection()
                            ->addAttributeToSelect('*')
                            ->addFieldToFilter('entity_id',array('in'=>$subCatIds))
                            ->setOrder('name', 'ASC')
                            ->joinUrlRewrite();
?>
<?php if (count($categoriesCollection) > 1): 
$categories = array();
?>
<?php foreach($categoriesCollection as $subCatId): ?>
<?php $subCat = Mage::getModel('catalog/category')->load($subCatId->getData('entity_id')); ?>
<?php if($subCat->getIsActive()): ?>
<?php $categories[$subCatId->getName()] = $subCatId->getUrl();?>
<?php endif; ?>
<?php endforeach ?>
<?php

    $firstChar = '';
    $flag= 0;
?>
<?php if(count($categories)<=0): ?>

<div class="padder">
  <div class="note-msg"> <?php echo $this->__('There are no category matching the selection.') ?> </div>
</div>
<?php else: ?>
<div class="designer-column" style="float:left;">
  <?php $i=1; 
        foreach($categories as $kk=>$vv):
		?>
  <?php $firstCharOfCat = substr($kk,0,1);?>

      
  <?php if(strtolower($firstChar)!=strtolower($firstCharOfCat)):
	    $firstChar = $firstCharOfCat;
?>
  
    <?php if ($i%4 == 0): ?>
    <div class="Clear"></div>
    <?php endif;?>
    
  <?php  if(in_array(strtoupper($firstChar),$catarray) || in_array(strtolower($firstCharOfCat),$catarray)) :?>
    <span class="cattitle_<?php echo $i;?>">
    <?php 
	 if(strtoupper($firstChar ==6 ) ||   strtoupper($firstChar ==7 )  || strtoupper($firstChar ==8 )  || strtoupper($firstChar ==9 ) ||  strtoupper($firstChar ==1 ) ||  strtoupper($firstChar ==2 ) ||
	 strtoupper($firstChar ==3 )  ||  strtoupper($firstChar ==4)  || strtoupper($firstChar ==5)
	  ) { 
	 echo "123";
	 } else { 
	   
	 echo strtoupper($firstChar);?>
    <?php  } ?>
   </span>
  <?php endif;?>
  <?php endif;?>
    
	<?php if($i==14) {  ?>
  </div><div class="designer-column" style="float:left;">
  <?php  $i=1;?>
	<?php  } if(strtolower($firstChar)==strtolower($firstCharOfCat)):
        $category_url = $vv;
?>
    <?php  if(in_array(strtoupper($firstChar),$catarray) || in_array(strtolower($firstCharOfCat),$catarray)) :?>
    <div class="catsname"><a href="<?php echo $category_url;?>"><?php echo ucfirst($kk);?></a></div>
    <?php endif;?>
    <?php endif;?>
  <?php  $i++; endforeach;?>
</div>
<?php endif;?>
<?php //endif;?>
<?php endif;  ?>






################################################################################################################################
     <form action="<?php echo $this->getAddToCartUrl($_item) ?>" class="listingcartform" method="post" id="product_addtocart_form_<?php echo $_item->getId()?>"<?php if($_item->getOptions()): ?> enctype="multipart/form-data"<?php endif; ?>>
          <?php if(!$_item->isGrouped()): ?>
          <label for="qty"><?php echo $this->__('Quantity') ?></label>
          <input type="text" class="input-text qty" name="qty" id="qty" maxlength="12" value="<?php echo ($this->getMinimalQty($_item)?$this->getMinimalQty($_item):1) ?>" />
          <?php endif; ?>
          <button type="button" class="button buy" onClick="this.form.submit()"><span><span><?php echo $this->__('Add to Cart') ?></span></span></button>
        </form>


################################################################################################################################
<?php 
$categoryId = Mage::registry('current_category')->getId();
$model  = Mage::getModel('catalog/category')->load($categoryId ) ;
$category = Mage::getModel('catalog/category')->load($categoryId);
$products = Mage::getModel('catalog/product')->getCollection();
$products = Mage::getModel('catalog/product')
    ->getCollection()
	->addAttributeToselect('*')
	->ategoryFilter($category)
	->addAttributeToFilter('featured_product',1);
	Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($products);
    Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($products); 
?>	





 ################################################################################################################################   
 
 
 for addding lightbox
     <reference name="head">
	   <action method="addItem"><type>skin_js</type><name>js/jquery.min.js</name></action>
       <action method="addItem"><type>skin_js</type><name>js/jquery.colorbox.js</name></action>
	   <action method="addItem"><type>skin_js</type><name>js/jquery_main_noconflict.js</name></action>
	</reference>   
    
################################################################################################################################   
to change prive format remove 00 do this

code/core/Mage/Directory/Model/cureency.php
 
 line no 195
   <?php 
     public function format($price, $options=array(), $includeContainer = true, $addBrackets = false)
    {
        //return $this->formatPrecision($price, 2, $options, $includeContainer, $addBrackets);
		return str_replace('.00', '', $this->formatPrecision($price, 2, $options, $includeContainer, $addBrackets));
    }
     ?>

################################################################################################################################   
http://www.excellencemagentoblog.com/magento-collection-paging

<?php
    protected function _prepareLayout()
    {
        parent::_prepareLayout();

        if ($toolbar = $this->getLayout()->getBlock('product_review_list.toolbar')) {
            $toolbar->setCollection($this->getReviewsCollection());
            $this->setChild('toolbar', $toolbar);
        }
   $pager = $this->getLayout()->createBlock('page/html_pager', 'custom.pager');
        $pager->setAvailableLimit(array(5=>5,10=>10,20=>20,'all'=>'all'));
        $pager->setCollection($this->getReviewsCollection());
        $this->setChild('pager', $pager);
        $this->getReviewsCollection()->load();
        return $this;
    }
	
	

	
	
	?>
then in phtml
  <?php echo $this->getPagerHtml(); ?> 

################################################################################################################################   



preshatashop
<?php

 $tsr_fc = array();
		//echo   '<div id="page">';
		  foreach($result as $result1)
			{
				
				//echo $result1['link_rewrite'];
				$result2 = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('select name,id_category from ps_category_lang where id_category='.$result1['id_category'].' ');  //get id_category
			 
			    //echo   '<ul>';
			  foreach($result2 as $result21)
			  {  
				// echo '<pre>';
				// print_r($result21);
				// echo  '<li><a href="http://localhost/preshtashop/index.php?id_category='.$result21['id_category'].'&controller=category">'.$result21['name'].'</a></li>';
				$tsr_fc[] = ''.$result21['name'].'</a>';
			  }
			  // echo   '</ul>';
		   }// echo "<pre>";print_r($tsr_fc);die;
		   $this->smarty->assign('tsrfc', $tsr_fc);
      // echo '</div>';			 
		//new steps
		$display = $this->display(__FILE__, 'blockcategories.tpl', $this->getCacheId());
		return $display;
?>


is login condition 
preshtashop
{if $logged}
{/if}

<?php  if((int)$this->context->cookie->id_customer)  ?>
 
 
 
 ################################################################################################################################   
when show only product i wishlist then 
In app/code/core/Mage/Wishlist/Model/Wishlist.php

<?php
$this->_itemCollection =  Mage::getResourceModel('wishlist/item_collection')
                ->addWishlistFilter($this)
                ->addStoreFilter($this->getSharedStoreIds($currentWebsiteOnly))
                ->setVisibilityFilter();
                


to change :
$this->_itemCollection =  Mage::getResourceModel('wishlist/item_collection')
                ->addWishlistFilter($this)
                ->addStoreFilter($this->getSharedStoreIds($currentWebsiteOnly));
?>                                 
################################################################################################################################   
<?php
echo $hostname = $_SERVER['SERVER_ADDR'];
echo "port".$port = $_SERVER['SERVER_PORT'];

?>



################################################################################################################################  
orders info
<?php 
	$customer_id = Mage::getSingleton('customer/session')->getCustomerId();
	$customer_data = Mage::getModel('customer/customer')->load($customer_id);
	$customer_address = Mage::getModel('customer/address')->load($customer_data->getDefaultBilling());
	$order = Mage::getModel('sales/order')->load(Mage::getSingleton('checkout/session')->getLastOrderId()); 
	$order_details = Mage::getModel('sales/order')->load($this->getOrderId());
	$all_items = $order->getAllItems();
	$noshipon = array(0,5,6);
	$h = 24;
	do{
    	$h+=24;
    	$shiptime = strtotime("now +$h hours");
	} while(in_array(date('w',$shiptime),$noshipon));
	$est_ship_date = date("Y-m-d",$shiptime);
?> 
################################################################################################################################   
get first time order id of customer
<?php $session = Mage::getModel('customer/session');
       $order = Mage::getModel('sales/order') ->getCollection()->addAttributeToFilter('customer_id',$session->getId())->getFirstItem(); ?>
################################################################################################################################   



http://mage-page.net/2011/10/magento-get-bestselling-products-by-category-and-date-time/

http://stackoverflow.com/questions/6288503/how-to-show-latest-top-rated-and-best-products-in-left-bar-in-magento
################################################################################################################################   

<?php
    $connection = Mage::getSingleton('core/resource')->getConnection('core_write');
    $attribute_set_id = 4;
    $store_id    = Mage::app()->getStore()->getId();
    $currentcategory = Mage::registry('current_category');
    $category_number = $currentcategory->getId(); //The number of the category you want to load
 
    $ts_sql = "SELECT * FROM `sales_flat_order_item` as `order_items` INNER JOIN sales_flat_order as `order` ON `order`.entity_id = order_items.order_id AND `order`.state <> 'canceled' LEFT JOIN catalog_product_entity as e ON e.entity_id = order_items.product_id AND e.entity_type_id = '".$attribute_set_id."' INNER JOIN catalog_category_product_index as cat_index ON cat_index.product_id=e.entity_id AND cat_index.store_id='".$store_id."' AND cat_index.category_id='".$category_number."' AND cat_index.is_parent=1 WHERE (parent_item_id IS NULL) GROUP BY order_items.product_id HAVING (SUM(order_items.qty_ordered) > 0) ORDER BY order_items.product_id DESC";
    $ts_query = $connection->query($ts_sql);
 
    while($ts_product=$ts_query->fetch()){
        $_product = Mage::getModel('catalog/product')->load($ts_product['product_id']);
        if($_product->getVisibility()!=1 && $_product->getStatus()==1){
    ?>
            <a href="<?php echo $_product->getProductUrl() ?>" title="<?php echo $this->stripTags($this->getImageLabel($_product, 'small_image'), null, true) ?>" class="product-image"><img src="<?php echo $this->helper('catalog/image')->init($_product, 'small_image')->resize(250, 207); ?>" width="250" height="207" alt="<?php echo $this->stripTags($this->getImageLabel($_product, 'small_image'), null, true) ?>" /></a>
            <h2 class="product-name">a href="<?php echo $this->stripTags($_product->getProductUrl()) ?>" title="<?php echo $this->stripTags($_product->getName(), null, true) ?>"> <?php echo $_product->getName(); ?></a></h2>
    <?php
        }
    }
?>


right one
<?php // $tpn  = '<h2 class="product-name"><a href="'.$this->stripTags($_product->getProductUrl()).'">'.$_product->getName().'=>sku'.$_product->getSku().'</a></h2>';
	//$productCount = 5; 
$category_number = $category->getId();

	$_featcategory = Mage::getModel('catalog/category')->load($category_number);
	$visibility     = array(
                      Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH,
                      Mage_Catalog_Model_Product_Visibility::VISIBILITY_IN_CATALOG
                  );
				  
	$storeId    = Mage::app()->getStore()->getId();       

	
     $products = Mage::getResourceModel('reports/product_collection')
	 ->addAttributeToSelect('*')
	 ->addcategoryFilter($_featcategory)
	 ->addOrderedQty()
	 ->addAttributeToFilter('visibility', $visibility)  
	 ->setStoreId($storeId)
	 ->addStoreFilter($storeId)
	 ->setOrder('ordered_qty', 'desc');
	 $i=1;
	 ?>
################################################################################################################################  

select category attribute

<?php

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');

$setup->addAttribute('catalog_category', 'featured', array(
    'group'         => 'General Information',
    'input'         => 'select',
    'type'          => 'varchar',
    'label'         => 'Featured Products',

          'option'        => array ('value' => array('optionone'=>array(0=>'yes'),'optiontwo'=>array(0=>'no'))
                       ),
	
    'backend'        => 'eav/entity_attribute_backend_array',
    'visible'       => 1,
    'required'      => 0,
    'user_defined' => 1,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));
$installer->endSetup();
?>
################################################################################################################################   
 get mutiple select
 <?php  $veri_acc =  $_product->getAttributeText('verified_accurate1');
		     if ($veri_acc ) { 
			   if(count($veri_acc) > 1)
			    { ?>
                <?php echo  $this->__('Verified Accurate:');
				       $lastveri = end($veri_acc);
					  foreach($veri_acc as $veri_acc1): ?>
                     <strong><?php echo $veri_acc1; ?><?php if($lastveri != $veri_acc1):  echo ","; endif; ?></strong>
                 <?php endforeach;?>
			   <?php  }  else { ?>
                      <?php echo $this->__('Verified Accurate:') ?> <strong><?php echo $veri_acc1; ?></strong> <br />
		   <?php }?>
               <?php }?>
               
               
               			 
					 <?php $url_media = Mage::getBaseUrl('media'); ?>   
                     <?php $skin =  $_product->getAttributeText('skin_type_filter');
		            if ($skin ) { 
						   if(count($skin) > 1)
							{ ?>    
										<?php  foreach($skin as $skin_val): ?>
                                               <?php if(file_exists(Mage::getBaseDir('media').'/'.'visual_attributes'.'/'.strtolower(str_replace(" ","",$skin_val)).'.jpg')){   ?>
                                                  <li style="margin:0 10px;"><img src="<?php echo $url_media.'visual_attributes/'.strtolower(str_replace(" ","",$skin_val)).'.jpg'?>" /></li>
                                                <?php }?>
                                         <?php endforeach;?>
                                    
						   <?php  }  else { ?>
									  <li><?php echo $skin_val; ?></li>
						  <?php }?>
				    <?php }?>
               
               
################################################################################################################################  
get customer information 
<?php get customer information 
			   $customer = Mage::getSingleton('customer/session')->getCustomer();
			   $cust_id = $customer->getId();
			   $collection = Mage::getModel("customer/customer")->load($cust_id);
					 
				$data = array();
				 foreach ($customer->getAddresses() as $address)
				 {
					$data[] = $address['currency'];
				 }	
	?>			  
################################################################################################################################   
eamil functioniity magento
<?php
include('app/Mage.php');
umask(0);
Mage::app();

if(isset($_POST['submit']))
{
   
  $name = $_POST['name'];
  $company  =$_POST['company'];
  $phoneno = $_POST['submit'];
  $email =$_POST['email'];
  $to = $_POST['adminemail'];
  $to = 'kushagra@unleadedgroup.com';
  $subject = 'Request product list'; 
  
	$message = '<html><body>';
	$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" .$name. "</td></tr>";
	$message .= "<tr><td><strong>Company:</strong> </td><td>" .$company . "</td></tr>";
	$message .= "<tr><td><strong>Phone no:</strong> </td><td>" .$phoneno. "</td></tr>";
	$message .= "<tr><td><strong>Email:</strong> </td><td>" .$email. "</td></tr>";
	$message .= "</table>";
	$message .= "</body></html>";
	$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  if(isset($email))
  {
   mail($to,$subject,$message,$headers);
  echo "thanks for";
  }
}
?>






################################################################################################################################   
<?php 
    $categoriesCollection = Mage::getModel('catalog/category')->getCollection()->addAttributeToSelect('name')->load();
    foreach ($categoriesCollection as $cat):
		if($cat->getName() == "NutraSourcing"):
             $CatId = $cat->getId();
	    endif;
    endforeach;
    $category = $this->getcustomCategoriesdata($CatId);
    $categories = Mage::getModel('catalog/category')->load($CatId)->getChildrenCategories();
	  ?>
  <ul>
    <?php $i=0;
		foreach($categories as $sub_category_id):?>
    <?php
			if( $i == 7)
			{  ?>
  </ul>
  <ul>
    <?php } ?>
     <?php if($sub_category_id->getName() != 'Category (New Product )') {  ?><li> <a href="<?php echo $sub_category_id->getUrl() ?>"> <?php echo $sub_category_id->getName() ?> </a> </li><?php } ?>
    <?php if( $i == 7) { $i = 0; } ?>
    <?php $i++; endforeach;  ?>
  </ul>
  
################################################################################################################################ 
     
     
     $query = "select title, body_value from node left join field_revision_body  on node.nid= field_revision_body.entity_id WHERE field_revision_body.bundle='blog' ORDER BY node.nid DESC  limit 0,2 ";

  
	  // echo  '<pre>';
	//   print_r($_customer->getData());
    ################################################################################################################################ 

################################################################################################################################ 

<script type="text/javascript" src="<?php echo $this->getSkinUrl('colorbox/jquery-1.8.2.min.js') ?>"></script>
<link rel="stylesheet" href="<?php echo $this->getSkinUrl('colorbox/colorbox.css') ?>" />
<script src="<?php echo $this->getSkinUrl('colorbox/jquery.colorbox.js') ?>"></script>

<?php $_helper = $this->helper('catalog/output'); ?>
<?php $_product = $this->getProduct(); ?>
<script type="text/javascript">
	jQuery.noConflict();
	jQuery(document).ready(function(){
		//Examples of how to assign the ColorBox event to elements
		
		jQuery(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
	});
</script>
     <?php if ($_product->getVideo()):?>
            <div class="detailsvideo">
            
      <a href="http://www.youtube.com/embed/<?php echo $_product->getVideo(); ?>" class="youtube" title="<?php echo $this->htmlEscape($this->getImageLabel()); ?>">
                <div class="play-icon"></div>
        <img src="http://img.youtube.com/vi/<?php echo $_product->getVideo(); ?>/0.jpg" width="100%" height="100%"/>
            </a>
            </div>
            <?php endif;?>

################################################################################################################################ 

<reference name="product.info">

################################################################################################################################ 
catalogsearch page listing custum list.phtml
	<catalogsearch_result_index translate="label">
	    <reference name="left">
          <remove name="catalogsearch.leftnav" />
		  <block type="cms/block" name="category-left-nav" before="-">
     			<action method="setBlockId"><block_id>category-left-nav</block_id></action>
			</block>
			<block type="cms/block" name="request-product-list" after="category-left-nav">
     			<action method="setBlockId"><block_id>request-product-list</block_id></action>
			</block>
        </reference>
		<reference name="root">
            <action method="setTemplate"><template>page/2columns-left.phtml</template></action>
        </reference>
	 <reference name="search_result_list">
        <action method="setTemplate"><template>catalog/product/list1.phtml</template></action>
    </reference>			
	</catalogsearch_result_index>	
    
################################################################################################################################ 
set anchor
<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
 
// Load Up Magento Core
define('MAGENTO', realpath(''));

require_once(MAGENTO . '/app/Mage.php');
 
$app = Mage::app();
 
$categories = Mage::getModel('catalog/category')
 ->getCollection()
 ->addAttributeToSelect('*')
 ->addAttributeToFilter('is_anchor', 0)
 ->addAttributeToFilter('entity_id', array("gt" => 1))
 ->setOrder('entity_id')
 ;
 
foreach($categories as $category) {
 echo $category->getId() . "\t" . $category->getName() . "\n";
 $category->setIsAnchor(1);
 $category->save();
}
?>

################################################################################################################################ 
<?php
        $query = "select title, body_value from node left join field_revision_body  on node.nid= field_revision_body.entity_id WHERE field_revision_body.bundle='blog' ORDER BY node.nid DESC  limit 0,2 ";
		$exe = mysql_query($query);
	
        $e_r = array();
       
 	    while($exe_r = mysql_fetch_array($exe))
             {
				 
				$title_href = strtolower(str_replace(" ","-",$exe_r['title']));
				//$e_r[] =     '<div class="news-list"><a href="'.'http://prestashop.perkinsdev1.org/blog/'.$title_href.'">'.$exe_r['title'].'</a><p>'.substr($exe_r['body_value'],'0','100').'</p></div>';
				$e_r[] =     '<div class="news-list"><a href="'.'http://prestashop.perkinsdev1.org/blog/'.$title_href.'">'.substr($exe_r['body_value'],'0','100').'</a></div>';
			 
			 }
			 
	   $this->smarty->assign('news_arra',$e_r);   

for smarty
{foreach $cmssevten as $cmssevtenval} 
 {$cmssevtenval}
{/foreach}

?>
################################################################################################################################ 
<?php
	error_reporting(E_ALL | E_STRICT);
	$mageFilename = 'app/Mage.php';
	require_once $mageFilename;
	$app = Mage::app('default'); 
	
	ini_set('display_errors', 1);


	$api = new Mage_Catalog_Model_Product_Api();
	
	$attribute_api = new Mage_Catalog_Model_Product_Attribute_Set_Api();
	$attribute_sets = $attribute_api->items();
	
	$productData = array(); 
	$productData['website_ids'] = array(1); 
	$productData['categories'] = array(23);

	$productData['status'] = 1;
	
	$productData['name'] = utf8_encode('nimit');
	$productData['description'] = utf8_encode('nimit desc');
	$productData['short_description'] = utf8_encode('nimit short desc');
	
	$productData['price'] = 12.34;
	$productData['weight'] = 23.25;
	$productData['tax_class_id'] =2;
	$productData['page_layout'] ='two_columns_left';
		
	$new_product_id = $api->create('simple',$attribute_sets[0]['set_id'],'ND3',$productData);
	
	print_r($new_product_id);
	
	$stockItem = Mage::getModel('cataloginventory/stock_item');
	$stockItem->loadByProduct( $new_product_id );
	
	$stockItem->setData('use_config_manage_stock', 1);
	$stockItem->setData('qty', 100);
	$stockItem->setData('min_qty', 0);
	$stockItem->setData('use_config_min_qty', 1);
	$stockItem->setData('min_sale_qty', 0);
	$stockItem->setData('use_config_max_sale_qty', 1);
	$stockItem->setData('max_sale_qty', 0);
	$stockItem->setData('use_config_max_sale_qty', 1);
	$stockItem->setData('is_qty_decimal', 0);
	$stockItem->setData('backorders', 0);
	$stockItem->setData('notify_stock_qty', 0);
	$stockItem->setData('is_in_stock', 1);
	$stockItem->setData('tax_class_id', 0);
	
	$stockItem->save();
	
	$product = Mage::getModel('catalog/product')->load($new_product_id);
	
	$product->setMediaGallery (array('images'=>array (), 'values'=>array ()));
	$product->addImageToMediaGallery ('E:/High Res Images/High Res Images/GC00012.jpg', array ('image','small_image','thumbnail'), false, false); 
	$product->addImageToMediaGallery ('E:/High Res Images/High Res Images/GC00014_1.jpg', array ('image','small_image','thumbnail'), false, false); 
	Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID); 

	$product->save();
	
	
	$product = Mage::getModel('catalog/product')->load($new_product_id);
	$optionData = 	array(
						"title" => "Custom Text Field Option Title 1",
						"type" => "field",
						"is_require" => 1,
						"sort_order" => 1,
						"price" => 0,
							"price_type" => "fixed",
							"sku" => "",
							"max_characters" => 15
					);
	
	$product->setHasOptions(1);
	$option = Mage::getModel('catalog/product_option')
			  ->setProductId($new_product_id)
			  ->setStoreId(1)
			  ->addData($optionData);
	$option->save();
	$product->addOption($option);
	
	Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID); 

	$product->save();
	
	$product = Mage::getModel('catalog/product')->load($new_product_id);
	$optionData = 	array(
						"title" => "Custom Text Field Option Title 2",
						"type" => "field",
						"is_require" => 1,
						"sort_order" => 2,
						"price" => 0,
							"price_type" => "fixed",
							"sku" => "",
							"max_characters" => 25
					);
	
	$product->setHasOptions(1);
	$option = Mage::getModel('catalog/product_option')
			  ->setProductId($new_product_id)
			  ->setStoreId(1)
			  ->addData($optionData);
	$option->save();
	$product->addOption($option);
	
	Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID); 

	$product->save();
?>

################################################################################################################################ 


<?php
if($this->helper('customer')->isLoggedIn()) {  
 $lastQuoteId = Mage::getSingleton('checkout/session')->getQuoteId();
  $customerQuote = Mage::getModel('sales/quote')->loadByCustomer(Mage::getSingleton('customer/session')->getCustomerId());
   $data = $customerQuote->setQuoteId($lastQuoteId);  

	
}?>
################################################################################################################################ 
<?php
    $orderId = $this->getOrderId();
    $order = Mage::getModel('sales/order')->loadByIncrementId($orderId);
    $customer = Mage::getModel('customer/customer')->load($order->getCustomerId());
    $address = $order->getShippingAddress();
	?>
################################################################################################################################ 

use this in local.xml to remove the js file form particular page or block

	<reference name="head">
				<action method="removeItem"><type>skin_js</type><name>js/jqzoom/jquery-1.3.1.min.js</name></action>
				<action method="addItem"><type>skin_js</type><name>colorbox/jquery.colorbox.js</name></action>
				<action method="ss"><stylesheet>css/jquery.jqzoom.css</stylesheet></action>
				<action method="ss"><stylesheet>colorbox/colorbox.css</stylesheet></action>
		</reference>

################################################################################################################################ 

RewriteCond %{REMOTE_HOST} !^123\.45\.67\.89
RewriteCond %{REQUEST_URI} !/updating\.html$
RewriteRule \.*$ /updating.html [R=302,L]

################################################################################################################################
 
Show blocks that are not loaded in the current object in Magento
Here is how to show the top search outside the header.phtml file. You can use this method anywhere in the template files to show other blocks that cannot be loaded with $this->getChildHtml()

?
echo $this->getLayout()->getBlock('top.search')->toHtml()
################################################################################################################################ 


<style type="text/css">
.orderStatusTable {
	border:1px solid #CCCCCC;
	font-size:11px;
}
.orderStatusTable td {
padding:8px;
}
.currentStatus {
	font-size: 11px;
	background-color: #eee;
	padding: 10px;
	margin: 0 0 15px 0;
	line-height: 15px;
	border: 1px solid #ccc;
	color: #333;
}
.currentStatus span {
	font-size: 14px;
	line-height: 23px;
	color: #000;
}
</style>
<div class="page-head">
	<h3>Check My Order Status</h3>
</div>

<p>Please enter your order number and email address to see the status of your order.</p>

<form name="" action="/order-status/" method="get">
<table border="0" cellspacing="0" cellpadding="0" class="orderStatusTable">
	<tr>
		<td><strong>Order Number:</strong></td>
		<td><input type="text" name="order_id" id="order_id" value="<?php echo (isset($_GET['order_id'])) ? $_GET['order_id'] : ''; ?>" /></td>
	</tr>
	<tr>
		<td><strong>Email Address:</strong></td>
		<td><input name="email_address" type="text" id="email_address" value="<?php echo (isset($_GET['email_address'])) ? $_GET['email_address'] : ''; ?>" size="30" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="Submit" /></td>
	</tr>
</table>

</form>

<div class="divider"></div>

<?php
	
	$live = true; //determines verbosity of errors
	
	$error = '';
	$statusMessage = '';
	$trackingNumberMessage = '';
	$shippingMessage = '';
	
	$orderID = '';
	$emailAddress = '';
	
	if(isset($_GET['order_id'])) {
		
		$orderID = trim(preg_replace('/[^0-9]*/', '', $_GET['order_id']));
		$emailAddress = trim($_GET['email_address']);
		
		try {
			
			ini_set("soap.wsdl_cache", "0");
			ini_set("soap.wsdl_cache_enabled", "0");
		
			//******************************************************************/
			
			// change to match your domain name
			$proxy = new SoapClient('http://www.yourdomain.com/api/soap/?wsdl');
			
			//change to your API username/password
			$sessionId = $proxy->login('apiusername', 'apikey');
			
			//******************************************************************/
			
			//find all orders related to this id
			$orderById = $proxy->call($sessionId, 'sales_order.info', $orderID);
			
			$items = $orderById['items'];
			
			if($orderById['customer_email'] == $emailAddress) {
				//we are setting this variable for use later
				$orderLookup = "success";
				if (strtolower($orderById['status']) == "holded") {
					$orderById['status'] = "On Hold";
				}
				$statusMessage = '<span>Your order status is: <strong>'.ucwords(str_replace('_', ' ', $orderById['status'])).'</strong></span>';
				
				if(ucwords(str_replace('_', ' ', $orderById['status'])) == "Processing"){
					$statusMessage .= '<br/><br/><strong>What does this mean?</strong><br/>Processing Time is the time it takes from when you submit your order to when the product leaves the Distribution Center.';
				}
				
			} else {
				$orderLookup = "failure";
				echo "We were unable to find your order information. Please verify your Order Number and Email Address are correct.";
			}
						
			//if the order status is complete we look up shipping information
			if(strtolower($orderById['status']) == "complete" && $orderLookup == "success") {
				

				//we look for all shipments related to this order id using internal magento order id
				$findShipments = $proxy->call($sessionId, 'sales_order_shipment.list', array(array('order_id'=>array('like'=>$orderById['order_id']))));
				
				if (count($findShipments) < 1) { //if $findShipments is not an array
					
					echo "There was an unknown error and your shipment information could not be found. Please contact Customer Service to get the current status of your order.";
					
				} else {
				
					//we pull the increment id for the shipment
					$thisShipmentID = $findShipments[0]['increment_id'];
					
					//now we pull all shipment info that specific shipment id
					$getShipmentInfo = $proxy->call($sessionId, 'sales_order_shipment.info', $thisShipmentID);
					$allowedCarriers = $proxy->call($sessionId, 'sales_order_shipment.getCarriers', $thisShipmentID);
					
					//set each variable
					$shipDate = $getShipmentInfo['created_at'];
					$service = $allowedCarriers[$getShipmentInfo['tracks'][0]['carrier_code']];
					if($service == "Custom Value") $service = "Truck Freight";
					$trackingNumber = $getShipmentInfo['tracks'][0]['number'];
													
					$defaultTimeZone = date_default_timezone_get();
					
					date_default_timezone_set('EST');
					
					//print_r($getShipmentInfo);
					
					if($service == "ups") {
						$trackingNumberMessage = "Tracking Number: <strong><a href='http://wwwapps.ups.com/WebTracking/track?loc=en_US&trackNums=".$trackingNumber."' target='_b�ank'%B.$trackingNumber."</a></strong>";
					} else {
						$trackingNumberMessage = "Tracking Number: <strong>".$trackingNumber."</strong>";
					}
					
					//and echo the data to screen
					$shippingMessage = "Your order was shipped on " . date("l, F jS, Y \\a\\t g:i:s a T", strtotime($shipDate . ' ' . $defaultTimeZone)) . " via " . $service . ".<br/><br/>";
					
									
				} //no errors
			
			}
			
			
			if($orderLookup != "failure"){
			
				echo '<p class="currentStatus">'.$statusMessage.'<br/>'.$trackingNumberMessage.'</p>';
				
				echo $shippingMessage;
				
				echo "<h4>Products in your order:</h4><ul>";
						foreach($items as $item){
							echo "<li>".number_format($item['qty_invoiced'], 0) . " x <strong>" . strtoupper($item['sku']) . "</strong> " . $item['name'] . "</li>";
						}
				echo "</ul>";
			}
			
		} catch (SoapFault $fault) {
			//this is a basic implementation of error checking. I am using try to stop the error from showing a nasty magento error page
			if($fault->faultcode == "100") {
				echo "That Order Number was not found in our system.";
			} elseif ($fault->faultcode == "http") {
				echo "Request timed out. Please try again later.";
			} else {
				//leave this on for testing so we can see SOAP status codes; turn off for live
				if ($live == false) {
					echo "Error $fault->faultcode: $fault->faultstring";
				} else {
					echo "There was an unknown error. Please try again later, or contact us.";
				}
			}			
		}
		
		
		
	} // end if

?>
<p><br /><br /><em>For detailed information regarding the status of your order, please contact our helpful Customer Service Experts.</em></p>
##############################################################
to make many option
return array(
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Option one')),
            array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('Option two')),
            array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('Option three')),
        );
##############################################################
condtion in cml files magento
<?xml version="1.0"?>
<layout version="0.1.0">
    <default>
      <reference name="head">
          
          
          <if ifconfig="bannerresponsive/bannertypecollection/bannertype">
  <condition>
    <equals>
      <string>bxslider</string>
    </equals>
  </condition>
  <then>
    <string>
        <![CDATA[
       Test bxslider
        ]]>
        </string>
  </then>
  <else>
    
  </else>
</if>

<!--
       <action method="addCss" ifconfig="bannerresponsive/bannertypecollection/bannertype" value="bxslider"><stylesheet>css/responsivebanner/jquery.bxslider.css</stylesheet></action>
       -->
       <action method="addCss" ifconfig="bannerresponsive/bannertypecollection/bannertype" value="bxslider"><stylesheet>css/responsivebanner/stylesresposive.css</stylesheet></action>
       <action method="addCss" ifconfig="bannerresponsive/bannertypecollection/bannertype" value="modernslide"><stylesheet>css/responsivebanner/sequencejs-theme.modern-slide-in.css</stylesheet></action>
       <action method="addItem" ifconfig="bannerresponsive/responsive/blockpostion"><type>skin_js</type><name>js/responsiveslider/jquerynocon.js</name></action>
       <action method="addItem" ifconfig="bannerresponsive/responsive/blockpostion"><type>skin_js</type><name>js/responsiveslider/jquery.js</name></action>
       <action method="addItem" ifconfig="bannerresponsive/bannertypecollection/bannertype" value="bxslider"><type>skin_js</type><name>js/responsiveslider/jquery.bxslider.min.js</name></action>
       <action method="addItem" ifconfig="bannerresponsive/bannertypecollection/bannertype" value="bxslider"><type>skin_js</type><name>js/responsiveslider/jquery.bxslider.js</name></action>
       <action method="addItem" ifconfig="bannerresponsive/bannertypecollection/bannertype" value="modernslide"><type>skin_js</type><name>js/responsiveslider/jquery.sequence-min.js</name></action>
       <action method="addItem" ifconfig="bannerresponsive/responsive/blockpostion"><type>skin_js</type><name>js/responsiveslider/jquerynocon.js</name></action>
       <action method="addItem" ifconfig="bannerresponsive/responsive/blockpostion"><type>skin_js</type><name>js/scripts/jquery.mobile.customized.min.js</name></action>
       <action method="addItem" ifconfig="bannerresponsive/responsive/blockpostion"><type>skin_js</type><name>js/scripts/jquery.easing.1.3.js</name></action>
       <action method="addItem" ifconfig="bannerresponsive/responsive/blockpostion"><type>skin_js</type><name>js/scripts/camera.min.js</name></action>
       <action method="addCss" ifconfig="bannerresponsive/responsive/blockpostion" ><stylesheet>css/camera.css</stylesheet></action>


    
</reference>  
    </default>

</layout> 

##############################################################


when magento dosent open in locahost then do the following 
 go to app\code\local\Mage\Core\Model\Session\Abstract\Varien.php 
    if (isset($cookieParams['domain'])) {
    $cookieParams['domain'] = $cookie->getDomain();
}                                                    
                                                        
  if (isset($cookieParams['domain']) && !in_array("127.0.0.1", self::getValidatorData())) {                                                    
                                                        ?>                                                       
##############################################################
: In config.xml files pass the menu target 


##############################################################
?>
differnces between  self and $this keyword
-self refers to the current class
-self can be used to call static functions and reference static
  member variables
-self can be used inside static functions
-self can also turn off polymorphic behavior by bypassing 
  the vtable
-$this refers to the current object
-$this can be used to call static functions
-$this should not be used to call static member
 variables.  Use self instead.
-$this can not be used inside static functions
                                                        
                                                        
                                                        

##############################################################
?>
                                                        
                                                        
                                                        <?php
##############################################################
      ajax
      kush

      <script type="text/javascript">
    jQuery(".ajax_loadermain").show();
jQuery(window).load(function () {
    jQuery(".ajax_loadermain").show();

var endid = <?php echo end($lastid); ?>;
var endincid = <?php echo end($lastincid); ?>;
jQuery.ajax({
url: '<?php echo $this->getUrl('orderfeedback/index/allorders');?>endid/'+endid,
type: 'POST',
//dataType: 'json',
data:{entity : endid,incid : endincid},
success:function(data){
jQuery(".ajax_loadermain").hide();
//alert(data);
 jQuery(".messages").fadeOut('xfast');
jQuery(".getorder").html(data);

}
});

});
</script>
##############################################################

##############################################################


##############################################################

##############################################################

##############################################################

##############################################################


##############################################################

##############################################################

##############################################################

##############################################################
cmd promt mysql
Create a MySQL Database from the Command Line
Every now and then I find myself needing to create a MySQL database while on the command line. Often it is just as fast or faster than loading up another program or accessing phpMyAdmin in a browser. So, first things first, we need to connect to the database:

"mysql -u root -p""

MySQL will prompt for the root password. Once your logged on you can issue the following command:

"CREATE DATABASE databasename;"

Next we need to give a user access to the new database:

"GRANT INSERT, DELETE, UPDATE, SELECT
ON databasename.*
TO �username�@'localhost� IDENTIFIED BY �password�";

Where �databasename� is the name of the database we created, �username� is the account allowed to access this database, �localhost� is the host this user is allowed to connect from, �password� is the password required for this user.

To activate the new permissions, issue the following command:

"FLUSH PRIVILEGES";

?>
<?php

?>

############################################################################################################
All links for to check the magento customization standard
http://alanstorm.com/
http://www.exploremagento.com/magento
http://classyllama.com/development/magento-development/
http://inchoo.net/ecommerce/magento/

############################################################################################################
this is the email action 
  public function preemailAction()
       {
	
  
	$orderid =  $this->getRequest()->getParam('order_id');
        $custid =  $this->getRequest()->getParam('cus_id');
        
        $messid = $_GET['premessageval'];
        
        $model  = Mage::getModel('prdefinemessage/prdefinemessage')->load($messid);
        //echo '<pre>';
        //print_r($model->getData());
     
        $senderemail = Mage::getStoreConfig('trans_email/ident_sales/email'); //sender email
        
        $senderename = Mage::getStoreConfig('trans_email/ident_sales/name'); //sender name
        
        $customer = Mage::getModel("customer/customer")->load($custid);
        
        $recipient_email = $customer['email']; // recevier email address
        
        $recipient_name = $customer['firstname'].'&nbsp;'.$customer['lastname']; // recevier email address
        
        //////////////////////////
        if($custid)
        {
        try {
            $emailTemplate  = Mage::getModel('core/email_template')
                        ->loadDefault('predefined_email_config_email_template_sent_to_customer');                                

            $sender_name =  $senderename;

            $recipient_name = $recipient_name; //reciver name
            $recipient_email =   $recipient_email;
            //$recipient_email = 'support@magerevol.com';
            
            $sender_email = $senderemail;
            //Create an array of variables to assign to template
            $emailTemplateVariables = array();

            $emailTemplateVariables['sender_name'] = $sender_name;
            $emailTemplateVariables['sender_email'] = $sender_email;
            $emailTemplateVariables['email_subject'] = $model['title'];
            $emailTemplateVariables['message'] = $model['content'];

            $processedTemplate = $emailTemplate->getProcessedTemplate($emailTemplateVariables);

            $email_subject = $model['title'];
            /*
             * Or you can send the email directly,
             * note getProcessedTemplate is called inside send()
             */
            $emailTemplate->setSenderName($sender_name);
            $emailTemplate->setSenderEmail($sender_email);
            $emailTemplate->setTemplateSubject($email_subject);
            $emailTemplate->send($recipient_email, $recipient_name, $emailTemplateVariables);

            $emailed = true;
            
            } catch(Exception $e) {
                Mage::getSingleton('core/session')->addError(Mage::helper('prdefinemessage')->__('Unable to send message at this time. Please, try later.'));
                $this->_redirectReferer();
                return;
            }
            }//if email enabled
            
            if($emailed)
            {
            $success_message = "Your Message Is Sent";
            Mage::getSingleton('core/session')->addSuccess(Mage::helper('prdefinemessage')->__($success_message));
            $this->_redirectReferer();
            return;
            }
            
            ////////////////////////////////////
            
        //echo "<pre>";
      //  print_r($customer->getData());
	
        
        
	           
	}


#######################################################################################
configurae email function in localhost wamp
http://blog.techwheels.net/send-email-from-localhost-wamp-server-using-sendmail/
http://flowingmotion.jojordan.org/2012/04/26/how-to-set-up-email-with-wamp/

#######################################################################################
skin and js url of our current store theme in magento
$logourl =Mage::getDesign()->getSkinUrl('images/')
#######################################################################################
controll the page layout outside from xml file do 

inside controller file
  public function indexAction()
    {
      

     $this->loadLayout();
         $this->getLayout()
             ->getBlock('root')->setTemplate('page/2columns-right.phtml');   
	$this->renderLayout();
    }
#######################################################################################
  
model option array 
 const STATUS_ENABLED	= 1;
    const STATUS_DISABLED	= 2;

    static public function getOptionArray()
    {
        return array(
            self::STATUS_ENABLED    => Mage::helper('bannerresponsive')->__('Enabled'),
            self::STATUS_DISABLED   => Mage::helper('bannerresponsive')->__('Disabled')
        );
    }
#######################################################################################

sample jquery tag

   <script>
jQuery(document).ready(function(){
  jQuery("#discoutcode").click(function(){
  jQuery("#collapse1").slideUp();
  //jQuery("#collapse2").slideDown("slow");
  jQuery("#collapse1").css("height","auto");
  });
});
</script> 
#######################################################################################
get table prefix in magento
magento getTable
magento getTableName
magento how to get table name
If you use table prefixes (you should) but you need to get the name of a table without having to hardcode in the table prefix, use this little snippet:
$tableName = Mage::getSingleton(�core/resource�)->getTableName(�catalog_product_option�);
#######################################################################################

<a href="<?php echo Mage::helper('checkout/cart')->getAddUrl($new); ?>
#######################################################################################

<contacts_index_index  ifconfig="contactsgooglemap/contactsgooglemap/enable">
way to write in module layout files 
in system.xml needs to put this way :
<fields>
                        <enable>
                            <label>YOUR MODULE</label>
                            <frontend_type>select</frontend_type>
                            <source_model>adminhtml/system_config_source_enabledisable</source_model>
                            <show_in_default>1</show_in_default>
                            <show_in_website>1</show_in_website>
                            <show_in_store>1</show_in_store>
                        </enable>
</fields>



#######################################################################################

select the limit for product collection:
<?php $collection->getSelect()->order('minimal_price','asc');
$collection->getSelect()->limit(1); ?>

#######################################################################################

customer attribute
http://www.lap-trinh.com/article/50714b0621126
#######################################################################################
<?php
add  editor 
   $configSettings = Mage::getSingleton('cms/wysiwyg_config')->getConfig(
array(
'add_widgets' => false,
'add_variables' => false,
'add_images' => false,
'files_browser_window_url'=> $this->getBaseUrl().'admin/cms_wysiwyg_images/index/',
));
 
$fieldset->addField('post_content', 'editor', array(
'name' => 'post_content',
'label' => Mage::helper('ajaxblog')->__('My Content'),
'title' => Mage::helper('ajaxblog')->__('My Content'),
'style' => 'width:700px; height:320px;',
'wysiwyg' => true,
'required' => true,
'config' => $configSettings,
));


?>

<?php


in edit.php file 
        protected function _prepareLayout()
{
    // added this code 
    if (Mage::getSingleton('cms/wysiwyg_config')->isEnabled()) {
        $this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
        $this->getLayout()->getBlock('head')->setCanLoadExtJs(true);
    }
    parent::_prepareLayout();
}
?>
#######################################################################################
if we want to call our function on body onload of window then we use this function of Body onload
jQuery(window).load(function () {

#######################################################################################
Add extra field in custom option feildset in magento 
<?php


?>

====>three tables is usufull

catalog_product_option_type_value,
catalog_product_option_type_title,
catalog_product_option_type_price.



#######################################################################################

wordpress style.css adding function

<?php bloginfo('stylesheet_url'); ?>


for custom folder
<?php bloginfo('template_directory') ?>/assets/ ?>


post query
<?php echo '<pre>';print_r(query_posts( 'orderby=date&order=ASC')); ?>


<?php $postdetails = get_post(29); ?>


#######################################################################################
#######################################################################################

Codelgniter Notes
(1) http://www.sourcecodester.com/category/tags/codeigniter

(2) http://code.tutsplus.com/articles/30-awesome-codeigniter-tutorials-for-all-skill-levels--net-16915

(3)





-> Segment based url lile this example.com/news/article/my_article

-> load url helper
  $this->load->helper('url');
    -site_url()
    -base_url();
    -current_url()
    
->in config.php  file you can remove index.php and add can .html to url
   -can enable query string .do like this
   $config['enable_query_strings'] = FALSE;
   $config['controller_trigger'] = 'c';
   $config['function_trigger'] = 'm';
 -index.php?c=controller&m=method
 



yesterday: http://localhost/magento-1.8.1.0/coden/cdnr/user_guide/general/views.html

->dynamic content can be add by object or in array format

example : <?php
class Blog extends CI_Controller {

	function index()
	{
		$data['title'] = "My Real Title";
		$data['heading'] = "My Real Heading";

		$this->load->view('blogview', $data);
	}
}
?>
the way to call 
<html>
<head>
<title><?php echo $title;?></title>
</head>
<body>
	<h1><?php echo $heading;?></h1>
</body>
</html>

->

->

->

->

->

->

->

->
#######################################################################################
BLog
http://magentopaper.blogspot.in/2011_05_01_archive.html



#######################################################################################
#######################################################################################

/*wordpress development*/
http://www.elegantthemes.com/blog/tips-tricks/how-to-create-a-wordpress-plugin



<?php echo get_stylesheet_directory_uri(); ?>
#######################################################################################
#######################################################################################
Core Php 

Private Visibility in PHP Classes
Private method or properties can only be accessible withing the class. You can not access private variable or function of the class by making object out side the class. But you can use private function and property within the class using $this object. Private visibility in php classes is used when you do not want your property or function to be exposed outside the class. Following example of Private visibility in php classes.
#######################################################################################
javas script fucntion for reload the current page

document.location.reload(true);
document.location.replace('https://developer.mozilla.org/en-US/docs/Web/API/Location.reload');
document.location.assign('https://developer.mozilla.org/en-US/docs/Web/API/Location.reload');
document.location.replace('https://developer.mozilla.org/en-US/docs/Web/API/Location.reload');

#######################################################################################
#######################################################################################
Jquery 

(1) jquery post method with json


$finalarray = array("status"=>"error","mes"=>"sucess");

$finalarray['status']= "error";

$finalarray['mes']= "sucess";



1)      GET � This request type is used to request some data from the server.

2)      POST � This request type is used to submit data for processing to the specified server

main =>
jQuery supports HTTP post request using two basic methods :


(1) jQuery post 
-it is used to loading data from the server using http post request.

$.post(URL, data, callback, type);


example script prototype


        $.post("getPostData.asp",

        {"name":"JSON_Request"},

        function(result){

        $("span").html(result);

        }

        );



(2) Ajax

        $.ajax({

        type: "POST",

        url: url,

        data: data,

        success: success,

        dataType: dataType

        });
        
  An AJAX request accepts five parameters :

1) type � This denotes the type of request. This parameter takes values GET, POST, PUT etc.

2) URL � This parameter denotes the URL to which the request has to be submitted.

3) Data � This parameter takes the request data that has to be sent along with the request. In this case, this parameter is one which is used to assign the JSON data.

4) success � This parameter denotes the function that is to be called once the AJAX request is completed.

5) dataType � This parameter is used to denote the expected dataType for the response from the server after processing the request data. Some smart data types include xml, JSON, txt, script etc.      
 

this is also one fucntion  for ajax process:
"error: function() {alert(data); }"


#######################################################################################

   Ajax with json
   <script type="text/javascript">
    var postdat = jQuery.noConflict();
    postdat("#loadingbar").hide();
    postdat(function() {
        postdat(".button").click(function() {


        var email = postdat("#newsletter").val();
        var lastname = postdat("#lastname").val();
        var resale = postdat("#resale").val();
        var url1 = postdat(".url1").val();
        var dataString = 'email='+ email;

            if(email== '' || lastname == ''|| resale == '')
            {
                //postdat('.success').fadeOut(200).hide();
                //postdat('.valid').fadeOut(200).hide();
               // postdat('.error').fadeIn(200).fadeOut(8000);

               postdat('.success').show();
               postdat('.error').show();
               postdat('.valid').hide();

            }
            if (email!='')
            {

                var a = email;

                var filter = /^[a-zA-Z0-9_.-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{1,4}$/;
                if(filter.test(a)){
                    ajaxn();
                }
                else{
                    postdat('.error').fadeOut(200).hide();
                    postdat('.success').fadeOut(200).hide();
                    postdat('.valid').fadeIn(200).fadeOut(8000);
                }

            }
        function ajaxn()
            {   postdat("#loadingbar").show();
                jQuery.ajax({
                type: "POST",
                dataType: 'json',
                url: url1,
                data: {emailsend:email,lastname:lastname,resale:resale},
                headers: { 'Access-Control-Allow-Origin': '*' },
                success: function(data)
                    {
                            postdat("#loadingbar").hide();
                            postdat('.error').fadeOut(200).hide();
                            postdat('.valid').fadeOut(200).hide();
                            postdat('.success').fadeIn(200).fadeOut(8000);
                            postdat("#comapny_message").html(data.msg);
                            postdat("#comapny_messagedemo").html(data.demo);
                    }

                });
            }
        return false;
        });
    });

    </script>

<!--    And in controller action-->
    <?php 
     public function postAction()
     {
        $params = $this->getRequest()->getParams();
      
        $postid = $_POST["id"];
        
        if (!$this->getRequest()->isXmlHttpRequest()) {
            $this->_redirect('/');
        }
        $this->loadLayout();
        $post_block = array();
        $post_block['message'] = "Post";
        $post_block['post_block'] = $this->getLayout()->createBlock('ajaxblog/ajaxblogpost')->toHtml();
        $this->getResponse()->setBody(json_encode($post_block));
       
     }
     ?>
    
<!--One more way to call the method -->
    
       public  function comm_saveingAction()
    {
        //echo $_POST['idcall'];
       // echo "2-144444444444444444";
       //// die;
       $postdata =$this->getRequest()->getParams();
       
       echo $postdata['idcall'];
     //  die;
          if (!$this->getRequest()->isXmlHttpRequest()) {
            $this->_redirect('/');
        }
     
       $this->getResponse()->setBody($this->getLayout()->createBlock('ajaxblog/ajaxblogpostcommsave')
        ->setPostId($postdata['idcall'])
        ->toHtml());
       
       //$orderfeedback_id =$this->getRequest()->getParams();

   
        //if (!$this->getRequest()->isXmlHttpRequest()) {
          //  $this->_redirect('/');
        //}
        
      //  $this->getResponse()->setBody($this->getLayout()->createBlock('orderfeedback/orderdata')
        //->setOrderid($orderfeedback_id['entity'])
        //->setIncorderid($orderfeedback_id['incid'])        
        //->toHtml());
        
    }
       
        

#######################################################################################


<?php $collection = Mage::getModel('ajaxblog/ajaxblogcat')->getCollection(); //get Blog collection ?>
<?php if($collection): ?>

<div class="block-title">
        <strong><span>Categories</span></strong>
 </div>
<div class="block-content ajax-blog">
    <?php 

               echo "<ol>";
                    foreach ($collection as $item) {
                        echo "<li id=".$item->getCatId()."  onclick='updateField(this.id)'><a>".$item->getTitle()."</a></li>";
                    }
               echo "</ol>";

    ?> 
</div>
<?php  //echo Mage::helper("ajaxblog")->getbasecatUrl();?>

    <script type="text/javascript">
	//jQuery(document).ready(function() {
	//jQuery('.showlatestpost').html();
	  //});
	 var count_current=1;
	 var count_val;
    function updateField(id)

    {  //jQuery("#recentpost").hide();
       
	   
	   jQuery("#loading").show(),
	   
       jQuery.ajax(
       
                       {
                           url: '<?php  echo Mage::helper("ajaxblog")->getbasecatUrl();?>',
                           type: 'POST',   
                           data:  {id :id },  
                           dataType : 'json',
                           success:function(data){
                                  jQuery("#loading").hide();
                                  //jQuery(".showlatestpost").hide();
								  //var getcount = data.post_block);
                                  //alert(getcount); 

								  jQuery('.showlatestpost').replaceWith(data.post_block);
                         }
						 
                       });
					     return false; //setTimeout(populate,5000);return false;
    }
	
    </script>
  
<?php else:?>
<div class="block-content">
            <p class="empty"><?php echo $this->__("Oops, There Are No Category.");?></p>
</div>
<?php endif; ?>

    
#######################################################################################
Magento Cookies

$name = ‘sample1′;

$value = ‘tester’;

// set cookie

Mage::getModel(‘core/cookie’)->set($name, $value);

// print cookie value

echo Mage::getModel(‘core/cookie’)->get($name);

// print cookie lifetime or period, by default the period is set as 3600 seconds

echo Mage::getModel(‘core/cookie’)->getLifetime($name);

// you can set different period value as well

$name = ‘sample2′;

$value = ‘tester1′;

$period = 7200;

Mage::getModel(‘core/cookie’)->set($name, $value, $period);

That’s it. Simple isn’t!! I guess you got an idea about working o

$cooiname ="postcode_cookeis";

$cookeis_value = base64_encode("postcode_array");

$cookies_period = 31556926; //set cookie for 1 year

Mage::getModel('core/cookie')->set($cooiname,$cookeis_value,$cookies_period );
        
Mage::getModel('core/cookie')->getLifetime($cooiname);\
delete cookie in magento
Mage::getModel('core/cookie')->delete($name, $path, $domain, $secure, $httponly);

get data of particluar cookie
 Mage::getModel('core/cookie')->get('orderDiscount')

//magento cookies way to make//
 Set Cookies:

    $name_c = ‘cookies_name’;

    $val_c = ‘cookies_value’;

    $expired = 31556926; /* 1 year */

    $path = ‘/’;

     

    $cookie = Mage::getSingleton(‘core/cookie’);
    $cookie->set($name_c, $val_c ,$expired,$path);

Get Cookies:

    $name_c = ‘cookies_name’;

    $cookie_value = Mage::getModel(‘core/cookie’)->get($name_c);

Delete Cookies:

    $name_c = ‘cookies_name’;

    Mage::getModel(‘core/cookie’)->delete($name_c)

#######################################################################################

Resize any image magento from url
http://your-website-url.com/media/catalog/product/b/f/bflo_bflo_A1_140613_M_Website-0229_1.jpg

    function resizeImg($fileName, $width, $height = ”,$cachedDir = ‘resized_image’)
    {
    $folderURL = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA);
    $imageURL = $folderURL . $fileName;

    $fileName = str_replace($folderURL,”,$fileName);

    $basePath = Mage::getBaseDir(Mage_Core_Model_Store::URL_TYPE_MEDIA) . DS . $fileName;
    $newPath = Mage::getBaseDir(Mage_Core_Model_Store::URL_TYPE_MEDIA) . DS . $cachedDir . DS . $fileName;
    if ($width != ”) {
    if (file_exists($basePath) && is_file($basePath) && !file_exists($newPath)) {
    $imageObj = new Varien_Image($basePath);

    $imageObj->constrainOnly(true);
    $imageObj->keepAspectRatio(true);
    $imageObj->keepFrame(false);
    $imageObj->keepTransparency(true);
    $imageObj->resize($width, $height);
    $imageObj->save($newPath);
    }
    $resizedURL = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA) . $cachedDir . DS . $fileName;
    } else {
    $resizedURL = $imageURL;
    }
    return $resizedURL;
    }

     

    #example

     

    $imageurl = ‘http://your-website-url.com/media/catalog/product/b/f/bflo_bflo_A1_140613_M_Website-0229_1.jpg’;

     

    echo resizeImg($img2nd, 160,155);

     

    #result : ’http://your-website-url.com/media/resized_image/catalog/product/b/f/bflo_bflo_A1_140613_M_Website-0229_1.jpg
	
	
#######################################################################################

nice blog http://blog.ansyori.com/magento-example-rewrite-multiple-controller-class/

#######################################################################################

three php function 
there are three PHP functions — str_rot13(), base64_encode(), and gzinflate — that are frequently used to obfuscate malicious strings of PHP code
#######################################################################################


jQuery: Detect if Browser Scrollable
by Ansyori | posted in: Javascript/Jquery | 0

to detect when browser is scrollable, use below jQuery script:

     

    if (jQuery(document).height() > jQuery(window).height()) {

    //alert(‘scroll bar exist’);
    }else
    {
    //alert(‘scroll bar Not exist’);
    }
    /* after page loaded */
    jQuery(window).scroll(function(e) {
    //alert(‘scrollable’);

    });
    /* after page resized or on window resize event*/
    jQuery(window).resize(function(e) {
    if (jQuery(document).height() > jQuery(window).height()) {

    //alert(‘scroll bar exist’);
    }else
    {
    //alert(‘scroll bar Not exist’);
    }
    });
	
#######################################################################################
for facebook
http://naileditdesign.com/facebook-open-graph-meta-tags-in-magento/

#######################################################################################


#######################################################################################

#######################################################################################
#######################################################################################
#######################################################################################
#######################################################################################
#######################################################################################
#######################################################################################
#######################################################################################


#######################################################################################

#######################################################################################
#######################################################################################
#######################################################################################
#######################################################################################
#######################################################################################
#######################################################################################






