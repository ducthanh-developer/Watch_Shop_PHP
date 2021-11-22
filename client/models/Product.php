

<?php
require_once 'Connect.php';
class Product extends Connect
{
    function __construct()
    {
        parent::__construct();
    }

    function selectAllProduct()
    {
        $sql = 'select * from sanpham';
        return $this->getList($sql);
    }
    function selectByIdProduct($id)
    {
        $sql = "select * from sanpham where maSP = '$id'";
        return $this->getInstance($sql);
    }
    function selectByCategory($id)
    {
        $sql = "select * from sanpham where maLoai = '$id'";
        return $this->getList($sql);
    }
    function selectAllCategory()
    {
        $sql = 'select * from loaisanpham';
        return $this->getList($sql);
    }
    function selectByIdCategory($id)
    {
        $sql = "select * from loaisanpham where maLoai = '$id'";
        return $this->getInstance($sql);
    }
    function searchProduct($keyword)
    {
        $keyword = '%' . $keyword . '%';
        $sql = "select * from sanpham where tenSP like '$keyword'";
        return $this->getList($sql);
    }
    function sortPriceASC($id)
    {
        $sql = "select * from sanpham where maLoai = '$id' order by giaSP ASC";
        return $this->getList($sql);
    }
    function sortPriceDESC($id)
    {
        $sql = "select * from sanpham where maLoai = '$id' order by giaSP DESC";
        return $this->getList($sql);
    }
    function sortDateLastest($id)
    {
        $sql = "select * from sanpham where maLoai = '$id' order by ngayThem DESC";
        return $this->getList($sql);
    }
    function filterPrice($id, $minPrice, $maxPrice)
    {
        $sql = "select * from sanpham where maLoai = '$id' and giaSP between '$minPrice' and '$maxPrice'";
        return $this->getList($sql);
    }
    function getListSelling()
    {
        $sql = "select * from sanpham order by luotMua DESC limit 8";
        return $this->getList($sql);
    }
    function getListNew()
    {
        $sql = "select * from sanpham order by ngayThem DESC limit 8";
        return $this->getList($sql);
    }
    function increaseView($id){
        $sql = "update sanpham set luotXem = luotXem + 1 where maSP = '$id'";
        return $this->execute($sql);
    }
    function increasePurchases($id, $buy){
        $sql = "update sanpham set luotMua = luotMua + '$buy' where maSP = '$id'";
        return $this->execute($sql);
    }
    function getTotalRecord($id){
        $sql = "select count(maSP) as total from sanpham where maLoai = '$id'";
        $result = $this -> getInstance($sql);
        return $result['total'];
        
    }

    function renderProduct($id, $start, $limit){
        $sql = "select * from sanpham where maLoai = '$id' limit '$start', '$limit'";
        return $this -> getList($sql);
    }
}
