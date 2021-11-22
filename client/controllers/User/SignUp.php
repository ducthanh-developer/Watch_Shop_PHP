<?php $VIEW = '../../views/sign-up.php';
if (isset($_POST['btnRegister'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $passwordCopy = $_POST['passwordCopy'];
    if ($password !== $passwordCopy) {
        $errPass = 'Mật khẩu không trùng khớp';
    } else {
        $result = $user->register($email, $name, $phone, $password);
        if ($result) {
            header('location: index.php');
        }
    }
}
