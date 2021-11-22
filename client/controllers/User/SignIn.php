<?php $VIEW = '../../views/sign-in.php';
if(isset($_POST['btnLogin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = $user -> login($email, $password);
    if($result){
        $_SESSION['userClient'] = [
            'id' => $result['maKH'],
            'email' => $result['email'],
            'name' => $result['hoTenKH'],
            'avatar' => $result['hinhAnh'],
        ];
        header('location: ../Home');
    }
}