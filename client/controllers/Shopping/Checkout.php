<?php
if (!isset($_SESSION['userClient'])) {
    header('location: ../User');
}
if (isset($_POST['btnOrder'])) {
    $fullName = $_POST['fullName'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $userID = $_SESSION['userClient']['id'];
    $orderID = $order->addOrder($userID);
    foreach ($_SESSION['cart'] as $pro) {
        extract($pro);
        $total = $price * $quantity;
        $products -> increasePurchases($id, $quantity);
        $order->addOrderDetail($name, $price, $total, $quantity, $orderID, $id);
    }
    $order->addOrderAddress($fullName, $phone, $address, $note, $orderID);
    $email = $_SESSION['userClient']['email'];
    $title = "Xác nhận đơn hàng";
    $content = "Đơn hàng số " . $orderID . " đã đặt thành công!";
    $mail = new Mail($email, $title, $content);
    $mail->sendMail();
    unset($_SESSION['cart']);
    $VIEW = '../../views/order-complete.php';
} else {
    $VIEW = '../../views/checkout.php';
}
