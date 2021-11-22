<?php require_once 'Connect.php';
class Orders extends Connect
{
    function __construct()
    {
        parent::__construct();
    }

    function getListOrders(){
        $sql = "select *, hd.trangThai from hoadon as hd inner join khachhang as kh on hd.maKH = kh.maKH inner join diachidonhang as dc on hd.maHD = dc.maHD";
        return $this -> getList($sql);
    }

    function getListOrderDetail($maHD){
        $sql = "select * from hoadonchitiet where maHD = '$maHD'";
        return $this -> getList($sql);
    }
}
