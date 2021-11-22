<?php
if (isset($_GET['act']) && $_GET['act'] == 'del') {
    $id = $_GET['catId'];
    $category->deleteCategories($id);
    $alert = 'Swal.fire({
        position: "center",
        icon: "success",
        title: "Xóa loại thành công!",
        showConfirmButton: false,
        timer: 1500,
      })';
}
if (isset($_POST['btnInsert'])) {
    $tenLoai = $_POST['cateName'];
    $category->insertCategories($tenLoai);
    $alert = 'Swal.fire({
        position: "center",
        icon: "success",
        title: "Thêm loại thành công!",
        showConfirmButton: false,
        timer: 1500,
      })';
}
if (isset($_GET['act']) && $_GET['act'] == 'edit') {
    $tenLoai = $_POST['cateName'];
    $id = $_POST['cateID'];
    $category->editCategories($id, $tenLoai);
    $alert = 'Swal.fire({
        position: "center",
        icon: "success",
        title: "Cập nhật thành công!",
        showConfirmButton: false,
        timer: 1500,
      })';
}
$listCate = $category->getListCategories();
