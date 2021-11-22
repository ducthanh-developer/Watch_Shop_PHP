<?php
require_once '../../../global.php';
require_once '../../models/User.php';
require_once '../../models/Mail.php';
$page = 'login';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$user = new User();

switch ($page) {
    case 'login': {
            include 'SignIn.php';
            include '../../views/layout-user.php';
            break;
        }
    case 'register': {
            include 'SignUp.php';
            include '../../views/layout-user.php';
            break;
        }
    case 'rspass': {
            include 'ResetPassword.php';
            include '../../views/layout-user.php';
            break;
        }
    default:
        break;
}
