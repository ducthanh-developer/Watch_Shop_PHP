<!-- ========================= SECTION INTRO ========================= -->
<section class="section-intro padding-y-sm">
    <div class="container">
        <div class="intro-banner-wrap">
            <img src="https://cdn3.dhht.vn/wp-content/uploads/2021/03/banner-trang-chu-doxa-2021.jpg" class="img-fluid rounded" />
        </div>
    </div>
    <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION FEATURE ========================= -->
<section class="section-content padding-y-sm">
    <div class="container">
        <article class="card card-body">
            <div class="row">
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary"><i class="fa fa-2x fa-truck"></i></span>
                        <figcaption class="pt-3">
                            <h5 class="title">Giao hàng nhanh</h5>
                            <p>Gioa hàng nhanh trong nội thành HCM, HN</p>
                        </figcaption>
                    </figure>
                    <!-- iconbox // -->
                </div>
                <!-- col // -->
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary"><i class="fa fa-2x fa-landmark"></i></span>
                        <figcaption class="pt-3">
                            <h5 class="title">Mẫu mã sáng tạo</h5>
                            <p>Các mẫu đồng hồ cập nhật xu hướng sang trọng</p>
                        </figcaption>
                    </figure>
                    <!-- iconbox // -->
                </div>
                <!-- col // -->
                <div class="col-md-4">
                    <figure class="item-feature">
                        <span class="text-primary"><i class="fa fa-2x fa-lock"></i></span>
                        <figcaption class="pt-3">
                            <h5 class="title">Độ bền cao, chống nước</h5>
                            <p>Độ bền chuẩn quân đội kháng nước 20atm</p>
                        </figcaption>
                    </figure>
                    <!-- iconbox // -->
                </div>
                <!-- col // -->
            </div>
        </article>
    </div>
    <!-- container .//  -->
</section>
<!-- ========================= SECTION FEATURE END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
    <div class="container">
        <header class="section-heading">
            <a href="#" class="btn btn-outline-primary float-right">Xem tất cả</a>
            <h3 class="section-title">Sản phẩm bán chạy</h3>
        </header>
        <!-- sect-heading -->

        <div class="row">
            <?php foreach ($listSelling as $pro) {
                extract($pro);
                $name = strlen($tenSP) > 60 ? substr($tenSP, 0, 60) . '...' : $tenSP; ?>
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="../Product/?page=detail&id=<?= $maSP ?>" class="img-wrap">
                            <img src="../../assets/images/product/<?= $hinhAnh ?>" />
                        </a>
                        <figcaption class="info-wrap">
                            <a href="../Product/?page=detail&id=<?= $maSP ?>" class="title"><?= $name ?></a>

                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width: 80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <span class="label-rating text-muted"> 34 Đánh giá</span>
                            </div>
                            <div class="price mt-1"><?= number_format($giaSP) ?></div>
                            <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- row.// -->
    </div>
    <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
    <div class="container">
        <header class="section-heading">
            <a href="#" class="btn btn-outline-primary float-right">Xem tất cả</a>
            <h3 class="section-title">Sản phẩm mới</h3>
        </header>
        <!-- sect-heading -->

        <div class="row">
            <?php foreach ($listNew as $pro) {
                extract($pro);
                $name = strlen($tenSP) > 60 ? substr($tenSP, 0, 60) . '...' : $tenSP; ?>
                <div class="col-md-3">
                    <div href="#" class="card card-product-grid">
                        <a href="../Product/?page=detail&id=<?= $maSP ?>" class="img-wrap">
                            <img src="../../assets/images/product/<?= $hinhAnh ?>" />
                        </a>
                        <figcaption class="info-wrap">
                            <a href="../Product/?page=detail&id=<?= $maSP ?>" class="title"><?= $name ?></a>

                            <div class="rating-wrap">
                                <ul class="rating-stars">
                                    <li style="width: 80%" class="stars-active">
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <span class="label-rating text-muted"> 34 Đánh giá</span>
                            </div>
                            <div class="price mt-1"><?= number_format($giaSP) ?></div>
                            <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- row.// -->
    </div>
    <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->