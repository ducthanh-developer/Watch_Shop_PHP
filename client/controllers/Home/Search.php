<?php $VIEW = '../../views/result.php';
if(isset($_POST['btnSearch'])){
    $keyword = $_POST['keyword'];
    $productList = $product -> searchProduct($keyword);
}