<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page text-center"><?= $category['tenLoai'] ?></h2>
    </div>
    <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">
        <div class="row">
            <aside class="col-md-3">
                <div class="card">
                    <form action="" method="POST">
                        <!-- filter-group  .// -->
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title">Thương hiệu</h6>
                                </a>
                            </header>
                            <div class="filter-content collapse show" id="collapse_2">
                                <div class="card-body">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" checked="" class="custom-control-input" />
                                        <div class="custom-control-label">
                                            Adriatica
                                            <b class="badge badge-pill badge-light float-right">120</b>
                                        </div>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" checked="" class="custom-control-input" />
                                        <div class="custom-control-label">
                                            Apple Watch
                                            <b class="badge badge-pill badge-light float-right">15</b>
                                        </div>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" checked="" class="custom-control-input" />
                                        <div class="custom-control-label">
                                            Baby-G
                                            <b class="badge badge-pill badge-light float-right">35</b>
                                        </div>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" checked="" class="custom-control-input" />
                                        <div class="custom-control-label">
                                            Bulova
                                            <b class="badge badge-pill badge-light float-right">89</b>
                                        </div>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" />
                                        <div class="custom-control-label">
                                            Calvin Klein (CK)
                                            <b class="badge badge-pill badge-light float-right">30</b>
                                        </div>
                                    </label>
                                </div>
                                <!-- card-body.// -->
                            </div>
                        </article>
                        <!-- filter-group .// -->
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title">Khoảng giá</h6>
                                </a>
                            </header>
                            <div class="filter-content collapse show" id="collapse_3">
                                <div class="card-body">
                                    <input type="range" class="custom-range" min="0" max="100" name="" />
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Thấp</label>
                                            <input class="form-control" placeholder="" type="number" name="minPrice" />
                                        </div>
                                        <div class="form-group text-right col-md-6">
                                            <label>Cao</label>
                                            <input class="form-control" placeholder="" type="number" name="maxPrice" />
                                        </div>
                                    </div>
                                    <!-- form-row.// -->
                                    <button type="submit" class="btn btn-block btn-primary" name="btnFilter">Áp dụng</button>
                                </div>
                                <!-- card-body.// -->
                            </div>
                        </article>
                    </form>

                </div>
                <!-- card.// -->
            </aside>
            <!-- col.// -->
            <main class="col-md-9">
                <header class="border-bottom mb-4 pb-3">
                    <div class="form-inline">
                        <span class="mr-md-auto"></span>
                        <select class="mr-2 form-control" onchange="handleSelect(this)">
                            <option>Sắp xếp</option>
                            <option value="lastest">Mới nhất</option>
                            <option>Bán chạy</option>
                            <option value="priceASC" id="priceASC">Giá: thấp - cao</option>
                            <option value="priceDESC" id="priceDESC">Giá: cao - thấp</option>
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
                        $name = strlen($tenSP) > 60 ? substr($tenSP, 0, 60) . '...' : $tenSP;
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
                        <?php for ($i = 1; $i <= $totalPage; $i++) { ?>
                            <!-- <li class="page-item active">
                                <a class="page-link" href="?numPage=1">1</a>
                            </li> -->
                            <li class="page-item">
                                <a class="page-link" href="?numPage=<?=$i?>"><?=$i?></a>
                            </li>
                        <?php } ?>
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
<script>
    const handleSelect = (elm) => {
        window.location = '../Product/?act=' + elm.value;
        document.getElementById(`${elm.value}`).selected = 'selected';
    }
</script>
<!-- ========================= SECTION CONTENT END// ========================= -->