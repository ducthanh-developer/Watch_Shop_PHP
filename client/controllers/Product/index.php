<?php
require_once '../../models/Product.php';
require_once '../../../global.php';
require_once '../../models/Comment.php';
$_SESSION['page'] = 'product';
if (isset($_GET['page'])) {
    $_SESSION['page'] = $_GET['page'];
}

$page = $_SESSION['page'];

if (isset($_GET['catId'])) {
    $_SESSION['catId'] = $_GET['catId'];
}

if(isset($_GET['id'])){
    $_SESSION['idPro'] = $_GET['id'];
}
$products = new Product();
$comments = new Comment();

switch ($page) {
    case 'product': {
            include 'Product.php';
            include '../../views/layout.php';
            break;
        }
    case 'detail': {
            include 'ProductDetail.php';
            include '../../views/layout.php';
            break;
        }
    default:
        break;
}
