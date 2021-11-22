<?php
require_once '../../../global.php';
require_once '../../models/Categories.php';
$category = new Categories();
require_once 'categories.php';
$VIEW = '../../views/categories/categories.php';
include_once '../../views/layout/layout.php';