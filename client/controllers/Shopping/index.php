<?php 
require_once '../../../global.php';
require_once '../../models/Order.php';
require_once '../../models/Mail.php';
require_once '../../models/Product.php';
$page = 'cart';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$order = new Order();
$products = new Product();

switch ($page) {
    case 'cart': {
            include 'Cart.php';
            include '../../views/layout.php';
            break;
        }
    case 'checkout': {
            include 'Checkout.php';
            include '../../views/layout.php';
            break;
        }
    default:
        break;
}
