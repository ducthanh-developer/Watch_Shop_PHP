<?php require_once 'Connect.php';
class User extends Connect
{
    function __construct()
    {
        parent::__construct();
    }

    function getLogin($email, $password)
    {
        $password = md5($password);
        $sql = "select * from khachhang where email = '$email' and matKhau = '$password'";
        return $this->getInstance($sql);
    }

    function getListUser()
    {
        $sql = "select * from khachhang";
        return $this->getList($sql);
    }
}
