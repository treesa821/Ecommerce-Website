<?php

//require mysql connection//

require('database/DBController.php');
require('database/product.php');

$db = new DBController();

//product object
$product = new Product($db);




?>