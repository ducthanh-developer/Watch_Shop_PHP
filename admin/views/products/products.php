<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản lý sản phẩm</h1>
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
                    Thêm sản phẩm
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
                            <th style="width: 5%">ID</th>
                            <th style="width: 15%" class="text-center">Tên sản phẩm</th>
                            <th style="width: 50%" class="text-center">Mô tả</th>
                            <th style="width: 10%" class="text-center">Giá</th>
                            <th style="width: 15%" class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listProduct as $pro) {
                            extract($pro);
                            $maLoaiSP = $maLoai; ?>
                            <tr>
                                <td><?= $maSP ?></td>
                                <td>
                                    <?= $tenSP ?>
                                </td>
                                <td style="display: flex">
                                    <div>
                                        <img src="../../images/product/<?= $hinhAnh ?>" alt="" width="80px" />
                                    </div>
                                    <div>
                                        <?= $moTa ?>
                                    </div>
                                </td>
                                <td class="text-center"><?= number_format($giaSP) ?></td>
                                <td class="project-actions text-center">
                                    <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit<?= $maSP ?>">
                                        <i class="fas fa-pencil-alt"> </i>
                                        Sửa
                                    </a>
                                    <a class="btn btn-danger btn-sm" onclick="deleteAlert(<?= $maSP ?>)">
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
<?php include_once 'insert-form.php'; ?>
<script>
    const deleteAlert = (id) => {
        Swal.fire({
            title: "Bạn chắc chắn muốn xóa?",
            text: "Tất cả dữ liệu liên quan sẽ bị xóa không thể hoàn tác",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Thoát",
            confirmButtonText: "Tiếp tục xóa",
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = `?proId=${id}&act=del`
            }
        });
    };
    <?= $alert ?? null  ?>
</script>