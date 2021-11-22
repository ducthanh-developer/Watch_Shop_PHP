<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quản lý đơn hàng</h1>
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
                <h3 class="card-title">Bảng đơn hàng</h3>

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
                            <th style="width: 1%">ID</th>
                            <th style="width: 15%" class="text-center">
                                Tên khách hàng
                            </th>
                            <th style="width: 15%" class="text-center">Địa chỉ</th>
                            <th style="width: 10%" class="text-center">Email</th>
                            <th style="width: 10%" class="text-center">
                                Số điện thoại
                            </th>
                            <th style="width: 10%" class="text-center">Ngày tạo</th>
                            <th style="width: 10%" class="text-center">Trạng thái</th>
                            <th style="width: 20%" class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listOrder as $order) { extract($order) ?>
                            <tr>
                                <td><?=$maHD?></td>
                                <td class="text-center"><?=$hoTenKH?></td>
                                <td><?=$diaChi?></td>
                                <td class="text-center"><?=$email?></td>
                                <td class="text-center"><?=$SDT?></td>
                                <td class="text-center"><?= date("d-m-Y", strtotime($ngayTao))?></td>
                                <td class="text-center"><?=$trangThai?></td>
                                <td class="project-actions text-center">
                                    <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-view<?=$maHD?>">
                                        <i class="fas fa-folder"> </i>
                                        Xem
                                    </a>
                                    <?php include 'order-detail.php';?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>

