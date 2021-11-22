<?php
require_once '../../../global.php';
require_once '../../models/User.php';
$user = new User();
require_once 'customer.php';
$VIEW = '../../views/customers/customers.php';
include '../../views/layout/layout.php';
