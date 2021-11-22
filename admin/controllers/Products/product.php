<?php
define('SLASH', DIRECTORY_SEPARATOR);
if (isset($_GET['act']) && $_GET['act'] == 'del') {
    $id = $_GET['proId'];
    $product->deleteProducts($id);
    $alert = 'Swal.fire({
        position: "center",
        icon: "success",
        title: "Xóa sản phẩm thành công!",
        showConfirmButton: false,
        timer: 1500,
      })';
}
if (isset($_GET['act']) && $_GET['act'] == 'edit') {
    $id = $_GET['proId'];
    $proCategory = $_POST['proCategory'];
    $proName = $_POST['proName'];
    $proDes = $_POST['proDes'];
    $proPrice = $_POST['proPrice'];
    $proQuan = $_POST['proQuan'];
    if ($_FILES['proImage']['name'] !== '') {
        $image_dir_path = getcwd() . SLASH . '..' . SLASH . '..' . SLASH . 'images' . SLASH . 'product';
        $filename = $_FILES['proImage']['name'];
        $source = $_FILES['proImage']['tmp_name'];
        $target = $image_dir_path . SLASH . $filename;
        move_uploaded_file($source, $target);
    } else {
        $filename = $_POST['imageName'];
    }
    $display = isset($_POST['proDisplay']) ? 1 : 0;
    $result = $product->editProducts($id, $proName, $proDes, $proPrice, $filename, $proQuan, $display, $proCategory);
    $alert = 'Swal.fire({
        position: "center",
        icon: "success",
        title: "Chỉnh sửa đã được lưu thành công!",
        showConfirmButton: false,
        timer: 1500,
      })';
}
if (isset($_POST['btnInsert'])) {
    $proCategory = $_POST['proCategory'];
    $proName = $_POST['proName'];
    $proDes = $_POST['proDes'];
    $proPrice = $_POST['proPrice'];
    $proDis = $_POST['proDis'];
    $proQuan = $_POST['proQuan'];
    $image_dir_path = getcwd() . SLASH . '..' . SLASH . '..' . SLASH . 'images' . SLASH . 'product';
    $filename = $_FILES['proImage']['name'];
    $source = $_FILES['proImage']['tmp_name'];
    $target = $image_dir_path . SLASH . $filename;
    move_uploaded_file($source, $target);
    $product->insertProducts($proName, $proDes, $proPrice, $proDis, $filename, $proQuan, $proCategory);
    $alert = 'Swal.fire({
        position: "center",
        icon: "success",
        title: "Thêm sản phẩm thành công!",
        showConfirmButton: false,
        timer: 1500,
      })';
}
$listCate = $category->getListCategories();
$listProduct = $product->getListProducts();
