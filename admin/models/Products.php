<?php require_once 'Connect.php';
class Products extends Connect
{
    function __construct()
    {
        parent::__construct();
    }

    function getListProducts()
    {
        $sql = 'select * from sanpham';
        return $this->getList($sql);
    }

    function getProductsById($id)
    {
        $sql = "select * from sanpham where maSP = '$id'";
        return $this->getInstance($sql);
    }

    function insertProducts($name, $descript, $price, $discount, $image, $quantity, $categories)
    {
        $sql = "insert into sanpham(tenSP, moTa, giaSP, giamGia, hinhAnh, soLuongSP, maLoai) 
        value ('$name', '$descript', '$price', '$discount', '$image', '$quantity', '$categories')";
        return $this->execute($sql);
    }

    function deleteProducts($id)
    {
        $sql = "delete from sanpham where maSP = '$id'";
        return $this->execute($sql);
    }

    function editProducts($id, $name, $descript, $price, $image, $quantity, $display, $category)
    {   
        $sql = "update sanpham set tenSP = '$name', moTa = '$descript', giaSP = '$price', hinhAnh = '$image', soLuongSP = '$quantity', hienThi = '$display', maLoai = '$category' where maSP = '$id'";
        return $this->execute($sql);
    }
}
