<?php
if (isset($_POST['btnLogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $login = $user->getLogin($email, $password);
    if ($login) {
        $_SESSION['userAdmin'] = $login;
        header('location: ../Dashboard');
    }
}
