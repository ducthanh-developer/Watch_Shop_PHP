<?php
require_once '../../../global.php';
require_once '../../models/User.php';
$user = new User();
require_once 'login.php';
$VIEW = '../../views/login-form/login-form.php';
include '../../views/layout/layout-login.php';
