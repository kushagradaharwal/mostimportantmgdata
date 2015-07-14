var hege = ["Cecilie", "Lone"];
var stale = ["Emil", "Tobias", "Linus"];
var kai = ["Robin"];
var children = hege.concat(stale,kai); 
var x=document.getElementById("demo");
x.innerHTML=children;


#####################################################################
the way to use array function in javascript
<p id="demo">Click the button to add elements to the array.</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction()
{
var fruits = ["Banana", "Orange", "Apple", "Mango"];
fruits.splice(2,0,"Lemon","Kiwi");
var x=document.getElementById("demo");
x.innerHTML=fruits;
}
</script>
#####################################################################

banner slidewshoe working : checkextension ,magento-1.8.1.0/magentomd

working on reviews image : MG
#####################################################################
Objects and properties in javascript
A JavaScript object has properties associated with it. A property of an object can be explained as a variable that is attached to the object. Object properties are basically the same as ordinary JavaScript variables, except for the attachment to objects. The properties of an object define the characteristics of the object. You access the properties of an object with a simple dot-notation:

objectName.propertyName

Like all JavaScript variables, both the object name (which could be a normal variable) and property name are case sensitive. You can define a property by assigning it a value. For example, let's create an object named myCar and give it properties named make, model, and year as follows:

var myCar = new Object();
myCar.make = "Ford";
myCar.model = "Mustang";
myCar.year = 1969;

javascript array

var cars = ["Saab","Volvo","BMW"];

[
Math.ceil(4.4);
this function give 5

Math.flooer(4.4))
4
]
#####################################################################
GIT REPO

#####################################################################

paypal details:

Classic TEST API credentials
Username:
kushagra.daharwal-facilitator_api1.clariontechnologies.co.in
Password:
L4LF6S7YX5XKYCNY
Signature:
AFcWxV21C7fd0v3bYYYRCpSSRl31AP7sSBqK1ZadQW0xQA8.OKVQjHgC

#####################################################################

wordpress plugin development:

There are two types of hooks: actions and filters. 

Hook is an umbrella term for actions and filters. Actions allow you to add your own functionality next
to existing functionality. Filters allow you to modify existing functionality. 

http://premium.wpmudev.org/blog/wordpress-hooks/


http://www.paulund.co.uk/creating-custom-tables-wordpress-plugin-activation

http://www.paulund.co.uk/theme-options-page
#####################################################################
=>
wordpress plugin select query
<?php 
global $wpdb;
echo "<pre>";
$rows = $wpdb->get_results("SELECT id,name,address from wp_devp");
?>
wordpress plugin insert query
<?php 
global $wpdb;
$wpdb->insert('school', //table
		array('id' => $id,'name' => $name), //data
		array('%s','%s') //data format			
	);
	$message.="School inserted";
?>

wordpress plugin update query
<?php
$wpdb->update(
		'school', //table
		array('name' => $name), //data
		array( 'ID' => $id ), //where
		array('%s'), //data format
		array('%s') //where format
?>

wordpress plugin delete query
<?php
$wpdb->query($wpdb->prepare("DELETE FROM school WHERE id = %s",$id));
?>
wordpress template tree strcuture 
https://developer.wordpress.org/themes/basics/template-hierarchy/
#####################################################################


#####################################################################
#####################################################################
#####################################################################
#####################################################################
#####################################################################
#####################################################################
#####################################################################
#####################################################################
#####################################################################
#####################################################################'
url of certification exam
http://magentools.com/blog/magento-certification-preparation-study-guide-answers/

very very good :http://www.sitepoint.com/magento-basics-request-flow-standards-best-practices/


for now : http://blog.belvg.com/category/magento-news/developer-certification/page/3
http://blog.belvg.com/magento-certified-developer-exam-flushing-data-output.html

=======================
for magento core :
=======================
http://navaneeth.me/magento-code-snippets/#.VN4IsUeUdUA

=======================
#####################################################################
This is  the core concept:
Function definitions look much like standalone PHP functions but are local to the class and will be used to set and access object data.
<?php
class phpClass{
   var $var1;
   var $var2 = "constant string";
   function myfunc ($arg1, $arg2) {
      [..]
   }
   [..]
}
?>

<?php
Constructor Functions:

Constructor Functions are special type of functions which are called automatically whenever an object 
is created. So we take full advantage of this behaviour, by initializing many things through constructor functions.
?>



#####################################################################

https://ephptutorial.wordpress.com/2012/10/26/learn-oops-concepts-in-php/

awesome one:
http://www.scribd.com/doc/24094382/OOPS-concepts-in-PHP

also good:
http://www.phpbuilder.com/articles/application-architecture/object-oriented/advanced-object-oriented-programming-in-php.html


nice one:
http://webitect.net/development/phpmysql/object-oriented-php-the-basics/


$this is a reference to the calling object

Object: An individual instance of the data structure defined by a class

#####################################################################
class MyClass
{
     const MYCONST = true;
     public function test()
     {
          echo self::MYCONST;
     }
}

From outside the class you would access it like this:

echo MyClass::MYCONST;

#################################################################
work
http://www.inserthtml.com/2013/01/scroll-pagination/

##################################################################
The addFieldToSelect is available for collection objects. It is defined in Mage_Core_Model_Resource_Db_Collection_Abstract so it is available in all its child classes.

You are calling it on a model object that most probably is a child of Mage_Core_Model_Abstract.

I think you meant to do this:

$collection = Mage::getModel("news/views")->getCollection()
            ->addFieldToSelect('post_id', array('eq' =>  $this->getRequest()->getParam("id")))
			
	 ->addFieldToFilter('postcode', array('like' => '%'.$postCode.'%'))
         ->addFieldToSelect(
                array(
                    'store_id',                    
                    'storename'                    
                    ))
         ;             		
##################################################################

for cookies
<?php
if(isset($_COOKIE["TestCookie"]))
{
echo "yes set";
}else

{
echo "not set cookies settingss";
$value = "my cookie value";

//send a cookie that expires in 24 hours
setcookie("TestCookie",$value, time()+ 60);//
}
?>

################################################################

for json and ajax in magento controller
    <?php    
	    $this->loadLayout();
        $post_block = array();
        $post_block['message'] = "Post";
        $post_block['post_block'] = $this->getLayout()->createBlock('ajaxblog/postcheck')->toHtml();
        $this->getResponse()->setBody(json_encode($post_block));
	?>

Ajax request without json


################################################################
Get An Array of Country Names/Codes in Magento

<?php

	$countryList = Mage::getResourceModel('directory/country_collection')
					->loadData()
					->toOptionArray(false);
	
	echo '<pre>';
	print_r( $countryList);
	exi
?>

Create a Country Drop Down in the Magento Admin

When creating forms in the Magento Admin area, it is very rare that we use actual HTML. The reason for this is that forms are generally built using pre-built functions. The benefit of this is that each Admin page looks uniform and helps to keep Magento looking like one whole application rather than having loads of bits stuck onto it. As our method of adding HTML changes, so must our method of creating our country drop down.

<?php

	$fieldset->addField('country', 'select', array(
		'name'	=> 'country',
		'label' 	=> 'Country',
		'values'	=> Mage::getModel('adminhtml/system_config_source_country')->toOptionArray(),	
	));

?>



addAttributeToFilter Conditionals In Magento

This entry was posted on April 16, 2010 by BT.

addAttributeToFilter is a function that can be called on a product collection in Magento. In short, it adds a condition to the WHERE part of the MySQL query used to extract a product collection from the database.
<?php
$_products = Mage::getModel('catalog/product')->getCollection()
   ->addAttributeToSelect(array('name', 'product_url', 'small_image'))
   ->addAttributeToFilter('sku', array('like' => 'UX%'))
    ->load();

?>


http://fishpig.co.uk/magento/tutorials/addattributetofilter/

#############################################################	
<?php

$collectionSimple = Mage::getResourceModel('catalog/product_collection')
                ->addAttributeToFilter('type_id', array('eq' => 'simple'));
				
				?>
#############################################################

read 
https://www.nicksays.co.uk/developers-guide-magento-cache/
http://www.magentocommerce.com/wiki/modules_reference/english/mage_adminhtml/system_cache/index#catalog
http://www.mgt-commerce.com/blog/the-right-magento-cache-strategy-for-best-performance/
http://magento.stackexchange.com/questions/19781/correct-method-of-flushing-caches-managing-the-compiler

##############################################################

2. How Magento ORM works?

ORM stands for Object Relational Mapping. It’s a programming technique used to convert different types of data to Objects and vice versa.

interview

http://ka.lpe.sh/2012/07/19/magento-interview-questions-and-answers/



http://code.tutsplus.com/tutorials/magento-custom-module-development--cms-20643
imp

EAV is expensive and should only be used when you are not sure about number of fields in a table which can vary in future. To just get one 
single record, Magento joins 4-5 tables to get data in EAV. But this doesn’t mean that EAV only has drawbacks. The main advantage of EAV is 
when you may want to add table field in future, when there are thousands or millions of records already present in your table. In regular 
table, if you add table field with these amount of data, it will screw up your table, as for each empty row also some bytes will be 
allocated as per data type you select. While in EAV, adding the table column will not affect the previously saved records
 (also the extra space will not get allocated!) 
and all the new records will seamlessly have data in these columns without any problem.
############################################################
for git

http://guides.beanstalkapp.com/version-control/git-on-windows.html#installing-git
https://help.github.com/articles/generating-ssh-keys/
https://www.atlassian.com/git/tutorials/saving-changes/git-commit

https://www.siteground.com/tutorials/git/commands.htm

############################################################	
again for raedning 

http://code.tutsplus.com/tutorials/magento-custom-module-development--cms-20643
#############################################################
certification examm questions
http://alanstorm.com/magento_advanced_orm_entity_attribute_value_part_1
http://quizlet.com/20443995/magento-certification-preparation-study-guide-answers-flash-cards/
##############################################################
############################################################
magento 2

http://www.ubertheme.com/magento-news/11-exciting-features-magento-2/
############################################################	

Question and ansner for magento certification

For which two of the following composite products could the options be shipped separately on the 
frontend using “Checkout with Multiple Address”? [Choose Two]?

ANS(The correct answer is: Bundle Product consisting of Physical Products, Group Product consisting of Physical Products)


-Which one of the following API protocols does native Magento support? : XmlRpc
-What must be done to allow a third party system to access the Magento API?
ans : c. Run a login call with username and password and use the return session_id for every request. 
-Which of the following methods exists in the Mage_Sales_Model_Quote_Address class?
ans:getAllNonNomialItems ()

-What is the Xpath to the list of product types?
ans : Global/Catalog/Product/Type

-Which indexing processes does the product type influence?
ans : Product Price

-
#############################################################
oops
http://www.techflirt.com/tutorials/oop-in-php/abstract-classes-interface.html

http://www.elated.com/articles/object-oriented-php-working-with-inheritance/

#############################################################
facebook login

http://onlinewebapplication.com/login-facebook-twitter-php/


http://www.9lessons.info/2011/02/login-with-facebook-and-twitter.html


http://www.krizna.com/general/login-with-facebook-using-php/


##############################################################

1. Explain Magento’s MVC architecture

First of all, what is MVC?

MVC stands for Model-View-Controller. Any application that separates it’s data access, business logic and user interface is called MVC. There can be two types of MVC: convention-based and configuration-based. Example, cakePHP is convention-based, i.e. you just need to follow the instructions of the core system to get your module ready in just few lines. Magento is configuration-based, i.e. you need to specify each and every thing to your module’s config file in order to get it work. Magento has Controller (for Routing), Block (for Business Logic), Model (for DB access, sql) and Template file (for Presentation i.e. View).

How Magento’s MVC works:

1. When you enter the URL (something like http://mysite.com/frontname/controller/method/param1/value1/param2/value2), this URL is intercepted by one PHP file called index.php which instantiates Magento application
2. Magento application instantiates Front Controller object
3. Further, front controller instantiates Router objects (specified in module’s config.xml, global tag)
4. Now, Router is responsible to “match” the frontname which is in our URL
5. If “match” is found, it sees controller name and method name in the URL, which is finally called.
6. Now depending on what is written in action name (method name), it is executed. If any models are called in it, the controller method will instantiate that model and call the method in it which is requested.
7. Then the controller action (method) instantiate the Layout object, which calls Block specified for this action (method) name (Each controller action name have block and template file associated with it, which can be found at app/design/frontend or adminhtml/namespace/module/layout/module.xml file, name of layout file (module.xml) can be found in config.xml of that module, in layout updates tag).
8. Template file (.phtml) now calls the corresponding block for any method request. So, if you write $this->methodName in .phtml file, it will check “methodName” in the block file which is associated in module.xml file.
9. Block contains PHP logic. It references Models for any data from DB.
10. If either Block, Template file or Controller need to get/set some data from/to database, they can call Model directly like Mage::getModel(‘modulename/modelname’).
For diagramatic view: click here (courtsey: Alan Storm)

2. How Magento ORM works?

ORM stands for Object Relational Mapping. It’s a programming technique used to convert different types of data to Objects and vice versa.

In Magento, ORM is shown as Model (based on Zend Framework’s Zend_Db_Adapter), which further breaks down to two types of Models.

- First is the “simple” i.e. Regular Models which is nothing but flat table or our regular table structure.
– Second Model is EAV (Entity Attribute Value), which is quite complicated and expensive to query.

All Magento Models interacting with database are inherited from Mage_Core_Model_Abstract class, which is further inherited from Varien_Object.

Difference between two Models is, Simple Model is inherited from Mage_Core_Model_Resource_Db_Abstract class,
while EAV is inherited from Mage_Eav_Model_Entity_Abstract.

For those who don’t know what EAV is, please read my 3rd answer below.

So, to end up this question,
when you want to get some data in Magento, you call it like this:

Mage::getModel(‘module/model’)->load(1);

where 1 is the primary key id for some Regular/Simple table, while in EAV so many tables are joined to fetch just single row of data.

3. What is EAV in Magento?

EAV, stands for Entity Attribute Value, is a technique which allows you to add unlimited columns to your table virtually. Means, the fields which is represented in “column” way in a regular table, is represented in a “row” (records) way in EAV. In EAV, you have one table which holds all the “attribute” (table field names) data, and other tables which hold the “entity” (id or primary id) and value (value for that id) against each attribute.

In Magento, there is one table to hold attribute values called eav_attribute and 5-6 tables which holds entity and data in fully normalized form,

- eav_entity, eav_entity_int (for holding Integer values),
– eav_entity_varchar (for holding Varchar values),
– eav_entity_datetime (for holding Datetime values),
– eav_entity_decimal (for holding Decimal/float values),
– eav_entity_text (for holding text (mysql Text type) values).

EAV is expensive and should only be used when you are not sure about number of fields in a table which can vary in future. To just get one single record, Magento joins 4-5 tables to get data in EAV. But this doesn’t mean that EAV only has drawbacks. The main advantage of EAV is when you may want to add table field in future, when there are thousands or millions of records already present in your table. In regular table, if you add table field with these amount of data, it will screw up your table, as for each empty row also some bytes will be allocated as per data type you select. While in EAV, adding the table column will not affect the previously saved records (also the extra space will not get allocated!) and all the new records will seamlessly have data in these columns without any problem.

4. Difference between Mage::getSingleton() and Mage::getModel()

The difference between Mage:getSingleton() and Mage::getModel() is that the former one does not create an object if the object for same class is already created, while the later creates new objects every time for the class when it’s called.

Mage::getSingleton() uses the “singleton design pattern” of PHP. If the object is not created, it will create it.

Mage::getSingleton() is mostly used when you want to create an object once, modify it and later fetch from it. Popular example is session, you first create a session object, and then add/remove values from session across different pages, so that it retains your values (e.g. cart values, logged in customer details, etc.) and doesn’t create new session object losing your last changes.

Mage::getModel() is used when you want to have the fresh data from the database. Example is when you want to show records from database.

############################################################

for classed

Difference between Abstract class and Interface in PHP
S.No
Abstract Class
Interface
1
For abstract class a method must be declared as abstract. Abstract methods doesn’t have any implementation.	For interface all the methods by default are abstract methods only. So one cannot declare variables or concrete methods in interfaces.
2
The Abstract methods can declare with Access modifiers like public, internal, protected. When implementing in subclass these methods must be defined with the same (or a less restricted) visibility.	All methods declared in an interface must be public.
3
Abstract class can contain variables and concrete methods.	Interfaces cannot contain variables and concrete methods except constants.
4
A class can Inherit only one Abstract class and Multiple inheritance is not possible for Abstract class.	A class can implement many interfaces and Multiple interface inheritance is possible.

class properties and objects:
-an object said to be an instance of the class and the process of creating object is call instantiation.
properties
=the data value that an object holdes are stored in varrible called as properties.
=the fucntion that are stored within a class and used in an object are knows as methods. 


############################################################	
wordpreess template fall back
category-{slug}.php - If the category's slug were news, WordPress would look for category-news.php
category-{id}.php - If the category's ID were 6, WordPress would look for category-6.php
category.php
archive.php
index.php


-make dynamic widget in wordpress
first of all in fuction.php of your theme
<?php
register_sidebar( array(
 'name' => __( 'Publications', 'YourChildThemeName' ),
 'id' => 'publications',
 'description' => __( 'A List of Publications', 'YourChildThemeName' ),
 'before_widget' => '<li id="%1$s">',
 'after_widget' => '</li>',
 'before_title' => '<h3>',
 'after_title' => '</h3>',
) );
?>

then create template and give there 
<?php if ( is_active_sidebar( 'publications' )) { ?>
 <div id="secondary" class="widget-area" role="complementary">
            <ul class="xoxo">
                <?php dynamic_sidebar( 'publications' );} ?>
            </ul>
 </div><!-- #publication .widget-area -->
 
 
 
 to add thumbnail image we do like this
 <?php  the_post_thumbnail();?>

<?php  the_post_thumbnail("thumbnail");?>
<?php  the_post_thumbnail("medium");?>
<?php  the_post_thumbnail("large");?> 

<?php  get_the_post_thumbnail();?> 
with your own dimesion
o use your own thumbnail dimensions:

<?php the_post_thumbnail(array( 200,200 ); ?>


Finally, if you would like to add a little CSS styling (‘alignleft’ being the new css class)

<?php the_post_thumbnail(array( 200,200 ), array( 'class' => 'alignleft' )); ?>


child theme

in style.css of child theme put these details :

Template : parent theme
@import url("../Denati/style.css");
#############################################################


very very important thing 

   - Blocks contain functions that are used to display data in templates.
    -Models contain the business logic of modules.
    -Resource Models contains functions that are used for database interaction.
    -Controllers defines page layout and blocks files and are loaded when a URL is requested.
    -etc contains configuration files in XML formats which tells Magento how many files modules have and how the module interacts.
    - Helpers contain functions that are used for defining common business logic (such as image resize, validation). These functions can used anywhere across the Magento application
     -sql contains SQL scripts to create, modify, or delete SQL tables.
##############################################################

this is the 
http://code.tutsplus.com/tutorials/magento-custom-module-development--cms-20643
############################################################
for GIT
http://www.vogella.com/tutorials/GitHosting/article.html
For big bucket 
https://confluence.atlassian.com/display/BITBUCKET/Clone+your+Git+repository+and+add+source+files
############################################################

Magento usefull extension links

http://www.magentoworks.net/importexport-magento-category-extension/

Great blog here for customization in magento 

http://www.blog.magepsycho.com/backup-magento-project-files-db-using-bash-script/

############################################################
 try {
            $uploader = new Varien_File_Uploader('file');
            $uploader->setAllowedExtensions(array('jpg','jpeg','png','gif'));
            $uploader->setAllowRenameFiles(true);
            $result = $uploader->save(
                Mage::getBaseDir('media') . DS . 'halo_slideshow'
            );
            $result['url'] = $this->getTmpMediaUrl($result['file']);
            $result['file'] = $result['file'];
        } catch (Exception $e) {
            $result = array('error'=>$e->getMessage(), 'errorcode'=>$e->getCode());
        }
############################################################

Magento join query

$collection->getSelect()
->joinLeft('sales_flat_shipment_grid', 'main_table.parent_id = sales_flat_shipment_grid.entity_id', array('increment_id as shipment_increment_id', 'created_at as shipment_created_at', 'order_increment_id','total_qty'));

############################################################


Using Ajax :
<script type="text/javascript">
 function updateField(id)

    {  //jQuery("#recentpost").hide();
       
	   
	   jQuery(".loading").show(),
	   
       jQuery.ajax(
       
                       {
                           url: '<?php  echo Mage::helper("ajaxblog")->getbasecatUrl();?>',
                           type: 'POST',   
                           data:  {id :id },  
                           dataType : 'json',
                           success:function(data){
                                  jQuery(".loading").hide();
                                  //jQuery(".showlatestpost").hide();
								  //var getcount = data.post_block);
                                  //alert(getcount);
								  
                                  
								  jQuery('.showlatestpost').replaceWith(data.post_block);
								  jQuery(".showlatestpostdefault").hide();
                         }
						 
                       });
					     return false; //setTimeout(populate,5000);return false;
    }
</script>
############################################################
responisve css:
@media (min-width:320px) and (max-width:667px){
#changeFont{font-weight:bold; font-size:20px;}
}

@media (min-device-width:320px) and (max-device-width:667px){
#changeFont{font-weight:bold; font-size:20px;}
}


@media only scrren and (max-width:667px)
{
  .acc{}
}

https://css-tricks.com/

############################################################
CDN basic

-content delivery network 
support to Amazon.rackspace

you need AWS  account after registering go to AWS portal ->create distrubution
############################################################
page templates hirerchy 

Custom Template — If the Page has a custom Template assigned, WordPress looks for that file and, if found, uses it.
page-{slug}.php — Else WordPress looks for and, if found, uses a specialized template named with the Page's slug.
page-{id}.php — Else WordPress looks for and, if found, uses a specialized template named with the Page's ID.
page.php — Else WordPress looks for and, if found, uses the Theme's default page template.
index.php — Else WordPress uses a the Theme's index file.
############################################################
Curl programming

http://codular.com/curl-with-php



############################################################
Optimization rules

htaccess 

<IfModule mod_expires.c>

############################################
## Add default Expires header
## http://developer.yahoo.com/performance/rules.html#expires

    ExpiresDefault "access plus 1 year"

</IfModule>

Follow:
<IfModule mod_expires.c>
# Enable expirations
ExpiresActive On 
# Default directive
ExpiresDefault "access plus 1 month"
# My favicon
ExpiresByType image/x-icon "access plus 1 year"
# Images
ExpiresByType image/gif "access plus 1 month"
ExpiresByType image/png "access plus 1 month"
ExpiresByType image/jpg "access plus 1 month"
ExpiresByType image/jpeg "access plus 1 month"
# CSS
ExpiresByType text/css "access plus 1 month"
# Javascript
ExpiresByType application/javascript "access plus 1 year"
</IfModule>















Urls:

https://developer.yahoo.com/performance/rules.html

############################################################
Twitter:

https://apps.twitter.com/app/8491825/keys


############################################################
http://www.solvingmagento.com/magento-routers-a-look-under-the-hood/

http://magentotutorial.net/magento-tutorials-request-routing-part-4/

http://www.mgt-commerce.com/blog/the-right-magento-cache-strategy-for-best-performance/ 
-great one for apc chanche 


############################################################
for loop javascript
 var checkboxes = $$('.custom-checkbox'); 
        var values = [];
		var tot = 0;
        for(var i=0;i<checkboxes.length;i++){
		if(checkboxes[i].checked) {
                   //alert(checkboxes[i].title);
				   tot += parseInt(checkboxes[i].title);
				   }
                 }
		 jQuery(".commonprice").text(tot);		
		 
############################################################

############################################################
#	Time	Memory	Function	Location
1	0.0010	176344	{main}( )	..\index.php:0
2	0.0090	362344	Mage::run( )	..\index.php:87
3	0.0370	1015192	Mage_Core_Model_App->run( )	..\Mage.php:684
4	4.0842	6866856	Mage_Core_Controller_Varien_Front->dispatch( )	..\App.php:354
5	4.1022	7053128	Mage_Core_Controller_Varien_Router_Standard->match( )	..\Front.php:172
6	4.1172	7445632	Mage_Core_Controller_Varien_Action->dispatch( )	..\Standard.php:250
7	4.5173	9930040	Custum_Newslatter_SubscriberController->commonproductatcAction( )	..\Action.php:418

############################################################

############################################################

############################################################

############################################################

