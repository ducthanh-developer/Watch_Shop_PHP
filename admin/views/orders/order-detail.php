<div class="modal fade" id="modal-view<?= $maHD ?>" style="display: none; padding-right: 16px" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content bg-primary">
            <div class="modal-header" style="border: none;">
                <h4 class="modal-title">Chi tiết đơn hàng</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">ID</th>
                            <th style="width: 60%" class="text-center">
                                Tên sản phẩm
                            </th>
                            <th style="width: 10%" class="text-center">
                                Số lượng
                            </th>
                            <th style="width: 15%" class="text-center">
                                Tổng giá
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $listOrderDetail = $orders->getListOrderDetail($maHD);
                        foreach ($listOrderDetail as $product) {extract($product) ?>
                            <tr>
                                <td><?=$maHDCT?></td>
                                <td class="text-center">
                                    <?=$tenSP?>
                                </td>
                                <td class="text-center">
                                    <?=$soLuongSP?>
                                </td>
                                <td class="text-center">
                                    <?=number_format($gia)?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>