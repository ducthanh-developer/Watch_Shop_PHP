<?php $VIEW = '../../views/reset-password.php';
if (isset($_POST['btnReset'])) {
    $email = $_POST['email'];
    $password = substr(md5(rand(0, 9999)), 0, 6);
    $title = "Reset mật khẩu";
    $content = "<h2>Mật khẩu mới của bạn là: " . $password . "</h2>";
    $user -> updateUser($email, $password);
    $mail = new Mail($email, $title, $content);
    $mail->sendMail();
    header('location: index.php');
}
