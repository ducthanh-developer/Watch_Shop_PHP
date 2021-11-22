<?php require_once 'Connect.php';
class Categories extends Connect
{
    function __construct()
    {
        parent::__construct();
    }

    function getListCategories()
    {
        $sql = 'select * from loaisanpham';
        return $this->getList($sql);
    }

    function getCategorisById($id)
    {
        $sql = "select * from loaisanpham where maLoai = '$id'";
        return $this->getInstance($sql);
    }

    function insertCategories($name)
    {
        $sql = "insert into loaisanpham(tenLoai) value ('$name')";
        return $this->execute($sql);
    }

    function deleteCategories($id)
    {
        $sql = "delete from loaisanpham where maLoai = '$id'";
        return $this->execute($sql);
    }

    function editCategories($id, $name){
        $sql = "update loaisanpham set tenLoai = '$name' where maLoai = '$id'";
        return $this->execute($sql);
    }
}
