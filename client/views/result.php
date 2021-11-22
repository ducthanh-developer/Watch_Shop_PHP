<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page text-center">Kết quả tìm kiếm</h2>
    </div>
    <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">
        <div class="row">
            <!-- col.// -->
            <main class="col-md-12">
                <header class="border-bottom mb-4 pb-3">
                    <div class="form-inline">
                        <span class="mr-md-auto"></span>
                        <select class="mr-2 form-control">
                            <option>Mới nhất</option>
                            <option>Phổ biến</option>
                            <option>Bán chạy</option>
                            <option>Giá: thấp - cao</option>
                            <option>Giá: cao - thấp</option>
                        </select>
                        <div class="btn-group">
                            <a href="#" class="btn btn-outline-secondary" data-toggle="tooltip" title="List view">
                                <i class="fa fa-bars"></i></a>
                            <a href="#" class="btn btn-outline-secondary active" data-toggle="tooltip" title="Grid view">
                                <i class="fa fa-th"></i></a>
                        </div>
                    </div>
                </header>
                <!-- sect-heading -->

                <div class="row">
                    <?php if (isset($productList)) foreach ($productList as $product) {
                        extract($product);
                        $name = strlen($tenSP) > 100 ? substr($tenSP, 0, 100) . '...' : $tenSP;
                    ?>
                        <div class="col-md-4">
                            <figure class="card card-product-grid">
                                <div class="img-wrap">
                                    <!-- <span class="badge badge-danger"> MỚI </span> -->
                                    <img src="../../assets/images/product/<?= $hinhAnh ?>" />
                                    <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Xem nhanh</a>
                                </div>
                                <!-- img-wrap.// -->
                                <figcaption class="info-wrap">
                                    <div class="fix-height">
                                        <a href="../Product/?page=detail&id=<?= $maSP ?>" class="title"><?= $name ?></a>
                                        <div class="price-wrap mt-2">
                                            <span class="price"><?= number_format($giaSP) ?></span>
                                            <!-- <del class="price-old">$1980</del> -->
                                        </div>
                                        <!-- price-wrap.// -->
                                    </div>
                                    <a href="?act=addCart&id=<?= $maSP ?>" class="btn btn-block btn-primary">Thêm giỏ hàng <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </figcaption>
                            </figure>
                        </div>
                    <?php } ?>
                    <!-- col.// -->
                </div>
                <!-- row end.// -->

                <nav class="mt-4" aria-label="Page navigation sample">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#">Trước</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Sau</a>
                        </li>
                    </ul>
                </nav>
            </main>
            <!-- col.// -->
        </div>
    </div>
    <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->