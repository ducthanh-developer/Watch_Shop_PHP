<?php
require_once 'Connect.php';
class User extends Connect
{
    function __construct()
    {
        parent::__construct();
    }

    function login($email, $password)
    {
        $password = md5($password);
        $sql = "select * from khachhang where email ='$email' and matKhau = '$password'";
        return $this->getInstance($sql);
    }

    function register($email, $name, $phone, $password)
    {
        $password = md5($password);
        $sql = "insert into khachhang(email, hoTenKH, SDT, matKhau) values ('$email', '$name', '$phone', '$password')";
        return $this->execute($sql);
    }
    function updateUser($email, $password)
    {
        $password = md5($password);
        $sql = "update khachhang set matKhau = '$password' where email = '$email'";
        return $this->execute($sql);
    }
}
