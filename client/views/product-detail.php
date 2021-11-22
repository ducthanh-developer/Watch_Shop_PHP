<section class="section-pagetop bg">
    <div class="container">
        <h2 class="title-page text-center">Chi tiết sản phẩm</h2>
    </div>
    <!-- container //  -->
</section>

<section class="container padding-y section-content">
    <div class="card">
        <div class="row no-gutters">
            <aside class="col-md-6">
                <article class="gallery-wrap">
                    <div class="img-big-wrap">
                        <a href="#"><img src="../../assets/images/product/<?= $hinhAnh ?>" /></a>
                    </div>
                    <!-- img-big-wrap.// -->
                    <div class="thumbs-wrap">
                        <a href="#" class="item-thumb">
                            <img src="../../assets/images/product/<?= $hinhAnh ?>" /></a>
                        <a href="#" class="item-thumb">
                            <img src="https://cdn3.dhht.vn/wp-content/uploads/2017/09/CITIZEN-NH8350-59A-3-399x399.jpg" /></a>
                        <a href="#" class="item-thumb">
                            <img src="https://cdn3.dhht.vn/wp-content/uploads/2017/09/CITIZEN-NH8350-59A-2-399x399.jpg" /></a>
                    </div>
                    <!-- thumbs-wrap.// -->
                </article>
                <!-- gallery-wrap .end// -->
            </aside>
            <main class="col-md-6 border-left">
                <article class="content-body">
                    <h2 class="title">
                        <?= $tenSP ?>
                    </h2>

                    <div class="rating-wrap my-3">
                        <ul class="rating-stars">
                            <li style="width: 80%" class="stars-active">
                                <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/icons/stars-active.svg" alt="" />
                            </li>
                            <li>
                                <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/icons/starts-disable.svg" alt="" />
                            </li>
                        </ul>
                        <small class="label-rating text-muted">132 đánh giá</small>
                        <small class="label-rating text-success">
                            <i class="fa fa-clipboard-check"></i> 154 đã mua
                        </small>
                    </div>
                    <!-- rating-wrap.// -->

                    <div class="mb-3">
                        <var class="price h4"><?= number_format($giaSP) ?></var>
                    </div>

                    <p>
                        <?= $moTa ?>
                    </p>

                    <dl class="row">
                        <dt class="col-sm-3">Mã sản phẩm#</dt>
                        <dd class="col-sm-9"><?= $proInfo[0] ?></dd>

                        <dt class="col-sm-3">Thương hiệu</dt>
                        <dd class="col-sm-9"><?= $proInfo[1] ?></dd>

                        <dt class="col-sm-3">Xuất xứ</dt>
                        <dd class="col-sm-9">Nhật Bản</dd>
                    </dl>

                    <hr />
                    <div class="row">
                        <div class="form-group col-md flex-grow-0">
                            <label>Số lượng</label>
                            <div class="input-group mb-3 input-spinner">
                                <div class="input-group-prepend">
                                    <a href="?page=detail&act=add" class="btn btn-light" type="button" id="button-plus">
                                        +
                                    </a>
                                </div>
                                <input type="text" class="form-control" value="1" />
                                <div class="input-group-append">
                                    <a href="?page=detail&act=sub" class="btn btn-light" type="button" id="button-minus">
                                        −
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- col.// -->

                        <!-- col.// -->
                    </div>
                    <!-- row.// -->
                    <a href="?page=detail&id=<?= $maSP ?>&act=addCart" class="btn btn-outline-primary">
                        <span class="text">Thêm giỏ hàng</span>
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </article>
                <!-- product-info-aside .// -->
            </main>
            <!-- col.// -->
        </div>
        <!-- row.// -->
    </div>
</section>

<section class="section-content padding-y bg">
    <div class="container">
        <!-- ============================ COMPONENT 1 ================================= -->
        <div class="row justify-content-center">
            <div class="col-md-9">
                <header class="section-heading text-center">
                    <h3>Đánh giá</h3>
                    <!-- <div class="rating-wrap">
                        <ul class="rating-stars stars-lg">
                            <li style="width: 0%" class="stars-active">
                                <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/icons/stars-active.svg" alt="" />
                            </li>
                            <li>
                                <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/icons/starts-disable.svg" alt="" />
                            </li>
                        </ul>
                        <strong class="label-rating text-lg">
                            0 <span class="text-muted">|  đánh giá</span></strong>
                    </div> -->
                </header>
                <?php if (isset($listComment)) {
                    foreach ($listComment as $comment) {
                        extract($comment); ?>
                        <article class="box mb-3">
                            <div class="icontext w-100">
                                <img src="../../assets/images/avatar/<?= $hinhAnh ?>" class="img-xs icon rounded-circle" />
                                <div class="text">
                                    <span class="date text-muted float-md-right"><?= date("d-m-Y", strtotime($ngayTao)) ?>
                                    </span>
                                    <h6 class="mb-1"><?= $hoTenKH ?></h6>
                                    <ul class="rating-stars">
                                        <li style="width: 80%" class="stars-active">
                                            <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/icons/stars-active.svg" alt="" />
                                        </li>
                                        <li>
                                            <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/icons/starts-disable.svg" alt="" />
                                        </li>
                                    </ul>
                                    <span class="label-rating text-warning"><?= $chuDe ?></span>
                                </div>
                            </div>
                            <!-- icontext.// -->
                            <div class="mt-3">
                                <p>
                                    <?= $noiDung ?>
                                </p>
                            </div>
                        </article>
                <?php }
                } ?>
            </div>
            <!-- col.// -->
        </div>
        <!-- row.// -->
        <!-- ============================ COMPONENT 1 END .// ================================= -->
    </div>
    <!-- container .//  -->
</section>

<?php if (isset($_SESSION['userClient'])) { ?>
    <section class="container padding-y">
        <div class="row justify-content-center">
            <div class="card col-md-9">
                <div class="card-body">
                    <h4 class="card-title mb-4">Bình luận</h4>
                    <form action="?page=detail" method="POST">
                        <div class="form-group col-3 pl-0">
                            <label>Đánh giá (từ 1 - 5 sao)</label>
                            <input type="number" class="form-control" placeholder="" min="1" max="5" name="star" />
                        </div>
                        <div class="form-group">
                            <label>Chủ đề</label>
                            <input type="text" class="form-control" placeholder="" name="title" />
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea class="form-control" rows="3" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">
                                <input type="file" class="form-control-file" />
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit" name="btnComment">Gửi bình luận</button>
                    </form>
                </div>
                <!-- card-body.// -->
            </div>
        </div>
    </section>
<?php } ?>