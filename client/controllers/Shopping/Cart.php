<?php
$VIEW = '../../views/shopping-cart.php';

if (isset($_GET['act']) && $_GET['act'] == 'subtract') {
    foreach ($_SESSION['cart'] as $index => $pro) {
        if ($pro['id'] == $id) {
            if ($_SESSION['cart'][$index]['quantity'] > 1) {
                $_SESSION['cart'][$index]['quantity'] -= 1;
            }
        }
    }
}

if (isset($_GET['act']) && $_GET['act'] == 'add') {
    foreach ($_SESSION['cart'] as $index => $pro) {
        if ($pro['id'] == $id) {
            $_SESSION['cart'][$index]['quantity'] += 1;
        }
    }
}

if (isset($_GET['act']) && $_GET['act'] == 'delete') {
    foreach ($_SESSION['cart'] as $index => $pro) {
        if ($pro['id'] == $id) {
            unset($_SESSION['cart'][$index]);
        }
    }
}
