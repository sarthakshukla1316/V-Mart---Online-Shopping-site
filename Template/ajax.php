<?php

// require MYSQL Connection
require('../database/DBController.php');

// require Product Class
require('../database/Product.php');

// require Laptop Class
require('../database/Laptop.php');

// DBController Object
$db = new DBController();

// Product Object
$product = new Product($db);

// Laptop Object
$laptop = new Laptop($db);

if (isset($_POST['itemid'])) {
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}

if (isset($_POST['itemid'])) {
    $result = $laptop->getProduct($_POST['itemid']);
    echo json_encode($result);
}
