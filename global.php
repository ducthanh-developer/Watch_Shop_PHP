<?php
session_start();

function renderCategory()
{
    require_once '../../models/Product.php';
    $product = new Product();
    $categories = $product->selectAllCategory();
    return $categories;
};

function addCart($idPro)
{
    require_once '../../models/Product.php';
    $products = new Product();
    $product = $products->selectByIdProduct($idPro);
    $productCart = ["id" => $product['maSP'], 'name' => $product['tenSP'], 'price' => $product['giaSP'], 'image' => $product['hinhAnh'], 'quantity' => 1];
    if (isset($_SESSION['cart'])) {
        $arrID = array_column($_SESSION['cart'], 'id');
        if (!in_array($productCart['id'], $arrID)) {
            array_push($_SESSION['cart'], $productCart);
        } else {
            foreach ($_SESSION['cart'] as $index => $pro) {
                if ($pro['id'] == $productCart['id']) {
                    $_SESSION['cart'][$index]['quantity'] += 1;
                }
            }
        }
    } else {
        $_SESSION['cart'][0] = $productCart;
    }
}

if (isset($_GET['logout'])) {
    unset($_SESSION['userAdmin']);
    header('location: ../../');
}

// if(isset($_GET['act']) && $_GET['act'] == 'addCart'){
//     $idPro = $_GET['id'];
//     addCart($idPro);
// }

// if (isset($_GET['logout'])) {
//     unset($_SESSION['userClient']);
// }
// $arrCate = renderCategory();
