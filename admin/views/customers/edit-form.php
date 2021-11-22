<?php $listCate = $category->getListCategories();
$display = $hienThi == 1 ? 'Hiển thị' : 'Ẩn' ?>
<div class="modal fade" id="modal-edit<?= $maSP ?>" style="display: none" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-info">
      <div class="modal-header">
        <h4 class="modal-title">Sửa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body text-left">
        <form id="formEdit" action="?proId=<?= $maSP ?>&act=edit" method="POST" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label>Loại sản phẩm</label>
              <select class="form-control" name="proCategory">
                <?php foreach ($listCate as $cate) {
                  extract($cate) ?>
                  <option value="<?= $maLoai ?>" <?= $maLoai == $maLoaiSP ? 'selected' : null ?>><?= $tenLoai ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label>Tên sản phẩm</label>
              <input type="text" class="form-control" name="proName" value="<?= $tenSP ?>" />
            </div>
            <div class="form-group">
              <label>Mô tả</label>
              <textarea class="form-control" rows="3" name="proDes"><?= $moTa ?></textarea>
            </div>
            <div class="form-group">
              <label>Giá</label>
              <input type="number" class="form-control" value="<?= $giaSP ?>" min="0" name="proPrice" />
            </div>
            <div class="form-group">
              <label>Số lượng</label>
              <input type="number" class="form-control" value="<?= $soLuongSP ?>" name="proQuan" />
            </div>
            <div class="form-group">
              <label>Ảnh</label>
              <input type="text" value="<?= $hinhAnh ?>" class="mb-2 form-control" name="imageName" readonly>
              <input type="file" class="form-control-file" name="proImage">
            </div>
            <div class="form-group">
              <label for="">Trạng thái hiển thị</label>
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1" <?= $hienThi == 1 ? 'checked' : null ?> name="proDisplay">
                <label class="custom-control-label" for="customSwitch1"><?= $display ?></label>
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer" style="background-color: transparent">
            <button type="submit" class="btn btn-primary">
              Cập nhật
            </button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>