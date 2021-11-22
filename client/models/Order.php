<?php require_once 'Connect.php';
class Order extends Connect
{
    function __construct()
    {
        parent::__construct();
    }

    function addOrder($userID)
    {
        $sql = "insert into hoadon(maKH) value ('$userID')";
        $this->execute($sql);
        return $this->lastInsertID();
    }

    function addOrderDetail($proName, $price, $total, $quantity, $orderID, $proID)
    {
        $sql = "insert into hoadonchitiet(tenSP, gia, tongGia, soLuongSP, maHD, maSP) values ('$proName','$price','$total', '$quantity', '$orderID', '$proID')";
        return $this->execute($sql);
    }

    function addOrderAddress($fullName, $phone, $address, $note, $orderID)
    {
        $sql = "insert into diachidonhang(hoTen, SDT, diaChi, ghiChu, maHD) values ('$fullName', '$phone', '$address', '$note', '$orderID')";
        return $this->execute($sql);
    }
}
