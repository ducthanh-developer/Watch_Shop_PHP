<?php $listCate = $category->getListCategories();?>
<div class="modal fade" id="modal-insert" style="display: none" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-success">
            <div class="modal-header">
                <h4 class="modal-title">Thêm sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-left">
                <form id="formEdit" enctype="multipart/form-data" action="" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Loại sản phẩm</label>
                            <select class="form-control" name="proCategory">
                                <?php foreach ($listCate as $cate) {
                                    extract($cate) ?>
                                    <option value="<?=$maLoai?>"><?= $tenLoai ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="proName" />
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" rows="3" placeholder="Nhập mô tả" name="proDes"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <input type="number" class="form-control" placeholder="Nhập giá" min="0" name="proPrice"/>
                        </div>
                        <div class="form-group">
                            <label>Giảm giá</label>
                            <input type="number" class="form-control" placeholder="Nhập phần trăm giảm giá" min="0" max="100" name="proDis"/>
                        </div>
                        <div class="form-group">
                            <label>Số lượng</label>
                            <input type="number" class="form-control" placeholder="Nhập số lượng" name="proQuan"/>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Ảnh</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="proImage">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer" style="background-color: transparent">
                        <button type="submit" class="btn btn-primary" name="btnInsert">
                            Thêm
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>