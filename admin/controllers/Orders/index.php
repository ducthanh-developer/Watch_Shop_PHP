<?php
require_once '../../../global.php';
require_once '../../models/Orders.php';
$orders = new Orders();
require_once 'orders.php';
$VIEW = '../../views/orders/orders.php';
include_once '../../views/layout/layout.php';
