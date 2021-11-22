<section class="container padding-y">
    <div class="row justify-content-center">
        <main class="col-md-8">
            <form action="" method="POST">
                <article class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Thông tin giao hàng</h4>
                        <!-- row.// -->

                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label>Họ và tên</label>
                                <input type="text" placeholder="" class="form-control" name="fullName" />
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Số điện thoại</label>
                                <input type="text" placeholder="" class="form-control" name="phone" />
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Địa chỉ</label>
                                <input type="text" placeholder="" class="form-control" name="address" />
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Ghi chú</label>
                                <textarea cols="30" rows="10" class="form-control" name="note"></textarea>
                            </div>
                        </div>
                        <!-- row.// -->
                    </div>
                    <!-- card-body.// -->
                </article>
                <!-- card.// -->

                <!-- accordion end.// -->

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary btn-block" name="btnOrder">
                        Đặt hàng
                    </button>
                </div>
            </form>
        </main>
        <!-- col.// -->
    </div>
</section>
<script><?=$alertOrder ?? null?></script>