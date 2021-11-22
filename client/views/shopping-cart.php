<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page text-center">Giỏ hàng</h2>
    </div>
    <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">
        <div class="row">
            <main class="col-md-9">
                <div class="card">
                    <table class="table table-borderless table-shopping-cart">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Sản phẩm</th>
                                <th scope="col" width="120">Số lượng</th>
                                <th scope="col" width="180">Giá</th>
                                <th scope="col" class="text-right" width="100"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0;
                            if (isset($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $product) {
                                    extract($product);
                                    $total += $price * $quantity ?>
                                    <tr>
                                        <td>
                                            <figure class="itemside">
                                                <div class="aside">
                                                    <img src="../../assets/images/product/<?= $image ?>" class="img-sm" />
                                                </div>
                                                <figcaption class="info">
                                                    <a href="../Product/?page=detail&id=<?= $id ?>" class="title text-dark"><?= $name ?></a>
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td>
                                            <div class="input-group input-spinner">
                                                <div class="input-group-prepend">
                                                    <a href="?act=subtract&id=<?= $id ?>" class="btn btn-light" type="button" id="button-plus">
                                                        <i class="fa fa-minus"></i>
                                                    </a>
                                                </div>
                                                <input type="text" class="form-control" value="<?= $quantity ?>" />
                                                <div class="input-group-append">
                                                    <a href="?act=add&id=<?= $id ?>" class="btn btn-light" type="button" id="button-minus">
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="price-wrap">
                                                <var class="price"><?= number_format($price * $quantity) ?></var>
                                                <small class="text-muted"> <?= number_format($price) ?> / 1 cái </small>
                                            </div>
                                            <!-- price-wrap .// -->
                                        </td>
                                        <td class="text-right">
                                            <a href="?act=delete&id=<?= $id ?>" class="btn btn-light"> Xóa</a>
                                        </td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>

                    <div class="card-body border-top">
                        <a href="?page=checkout" class="btn btn-primary float-md-right">
                            Đặt hàng <i class="fa fa-chevron-right"></i>
                        </a>
                        <a href="../Product" class="btn btn-light">
                            <i class="fa fa-chevron-left"></i> Tiếp tục mua sắm
                        </a>
                    </div>
                </div>
                <!-- card.// -->

                <div class="alert alert-success mt-3">
                    <p class="icontext">
                        <i class="icon text-success fa fa-truck"></i> Miễn phí vận
                        chuyển trong nội thành
                    </p>
                </div>
            </main>
            <!-- col.// -->
            <aside class="col-md-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label>Bạn có mã giảm giá?</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="" placeholder="Mã giảm giá" />
                                    <span class="input-group-append">
                                        <button class="btn btn-primary">Áp dụng</button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- card-body.// -->
                </div>
                <!-- card .// -->
                <div class="card">
                    <div class="card-body">
                        <dl class="dlist-align">
                            <dt>Tổng giá:</dt>
                            <dd class="text-right"><?= number_format($total) ?></dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Giảm:</dt>
                            <dd class="text-right">0</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Tổng:</dt>
                            <dd class="text-right h5"><strong><?= number_format($total) ?></strong></dd>
                        </dl>
                        <hr />
                        <p class="text-center mb-3">
                            <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/misc/payments.png" height="26" />
                        </p>
                    </div>
                    <!-- card-body.// -->
                </div>
                <!-- card .// -->
            </aside>
            <!-- col.// -->
        </div>
    </div>
    <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->