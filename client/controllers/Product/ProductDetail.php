<?php
$VIEW = '../../views/product-detail.php';
$idPro = $_SESSION['idPro'];
$products->increaseView($idPro);
$product = $products->selectByIdProduct($idPro);
extract($product);
$proInfo = explode(" ", $tenSP);
$listComment = $comments->renderComment($idPro);
if (isset($_POST['btnComment'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $star = $_POST['star'];
    $userID = $_SESSION['userClient']['id'];
    $comments->addComment($title, $content, $star, $userID, $idPro);
    $listComment = $comments->renderComment($idPro);
}
