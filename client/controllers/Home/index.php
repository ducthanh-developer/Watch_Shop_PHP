<?php
require_once '../../../global.php';
require_once '../../models/Product.php';
$page = 'home';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$products = new Product();

switch ($page) {
    case 'home': {
            require_once 'Home.php';
            include '../../views/layout.php';
            break;
        }
    case 'search': {
            require_once 'Search.php';
            include '../../views/layout.php';
            break;
        }
    default: {
            require_once 'Home.php';
            include '../../views/layout.php';
            break;
        }
        break;
}
