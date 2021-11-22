<?php require_once 'Connect.php';
class Comment extends Connect
{
    function __construct()
    {
        parent::__construct();
    }
    function addComment($title, $content, $star, $userID, $proID){
        $sql = "insert into binhluan(chuDe, noiDung, danhGia, maKH, maSP) values ('$title','$content', '$star', '$userID', '$proID')";
        return $this->execute($sql);
    }
    function renderComment($id){
        $sql = "select * from binhluan as bl inner join khachhang as kh on bl.maKH = kh.maKH where bl.maSP = '$id'";
        return $this->getList($sql);
    }
}
