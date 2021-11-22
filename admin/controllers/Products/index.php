<?php 
require_once '../../../global.php';
require_once '../../models/Products.php';
require_once '../../models/Categories.php';
$product = new Products();
$category = new Categories();
require_once 'product.php';
$VIEW = '../../views/products/products.php';
include_once '../../views/layout/layout.php';