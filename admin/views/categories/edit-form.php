<div class="modal fade" id="modal-edit<?=$maLoai?>" style="display: none" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-info">
      <div class="modal-header">
        <h4 class="modal-title">Sửa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body text-left">
        <form id="formEdit" action="?act=edit" method="POST">
        <input type="hidden" value="<?=$maLoai?>" name="cateID">
          <div class="card-body">
            <div class="form-group">
              <label>Tên loại sản phẩm</label>
              <input type="text" class="form-control" id="cateName" name="cateName" value="<?= $tenLoai ?>" />
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