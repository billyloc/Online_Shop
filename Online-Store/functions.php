<?php 


// Require MySQL Connection
require('database/DBController.php');

// Require Product Class
require('database/Product.php');

// Require Cart Class
require('database/Cart.php');



// DBController object
$db = new DBController();   


// Product object
$product = new Product($db);
$product_shuffle = $product->getData();


// Cart object
$Cart = new Cart($db );

