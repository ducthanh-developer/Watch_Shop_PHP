<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản lý loại sản phẩm</h1>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-outline-success m-2" data-toggle="modal" data-target="#modal-insert">
                    Thêm loại
                </button>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0" style="display: block">
                <table class="table projects">
                    <thead>
                        <tr>
                            <th style="width: 20%">ID</th>
                            <th style="width: 40%" class="text-center">
                                Tên loại sản phẩm
                            </th>
                            <th style="width: 20%" class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listCate as $cate) {
                            extract($cate) ?>
                            <tr>
                                <td><?= $maLoai ?></td>
                                <td class="text-center"><?= $tenLoai ?></td>
                                <td class="project-actions text-center">
                                    <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit<?= $maLoai ?>">
                                        <i class="fas fa-pencil-alt"> </i>
                                        Sửa
                                    </a>
                                    <a class="btn btn-danger btn-sm" onclick="deleteAlert(<?= $maLoai ?>)">
                                        <i class="fas fa-trash"> </i>
                                        Xóa
                                    </a>
                                </td>
                            </tr>
                        <?php include 'edit-form.php';
                        } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<script>
    const deleteAlert = (id) => {
        Swal.fire({
            title: "Bạn chắc chắn muốn xóa?",
            text: "Tất cả dữ liệu liên quan sẽ bị xóa không thể hoàn lại!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Thoát",
            confirmButtonText: "Tiếp tục xóa",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = `?catId=${id}&act=del`
            }
        });
    };
    <?= $alert ?? null  ?>
</script>

<?php
include_once 'insert-form.php';
