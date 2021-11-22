<header class="section-header">
    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-6">
                    <a href="../Home" class="brand-wrap">
                        <img class="logo" src="https://donghohaitrieu.com/wp-content/uploads/2014/05/logo-hai-trieu3.png" />
                    </a>
                    <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-6 col-12 col-sm-12">
                    <form action="../Home/?page=search" method="POST" class="search">
                        <div class="input-group w-100">
                            <input type="text" class="form-control" placeholder="Tìm kiếm" name="keyword" />
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" name="btnSearch">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- search-wrap .end// -->
                </div>
                <!-- col.// -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="widgets-wrap float-md-right">
                        <div class="widget-header mr-3">
                            <a href="../Shopping" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart"></i></a>
                            <span class="badge badge-pill badge-danger notify"><?= isset($_SESSION['cart']) ? sizeof($_SESSION['cart']) : 0 ?></span>
                        </div>
                        <div class="widget-header icontext">
                            <?php if (isset($_SESSION['userClient'])) { ?>
                                <a href="#" class="icon icon-sm rounded-circle border"><img class="rounded-circle" src="../../assets/images/avatar/<?= $_SESSION['userClient']['avatar'] ?>" alt="" width="50px" height="50px"></a>
                                <div class="text">
                                    <span class="text-muted"><?= $_SESSION['userClient']['name'] ?></span>
                                    <div class="mt-2">
                                        <a href="?logout=">Đăng xuất</a>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                                <div class="text">
                                    <span class="text-muted">Chào bạn!</span>
                                    <div>
                                        <a href="../User">Đăng nhập</a> |
                                        <a href="../User/?page=register"> Đăng ký</a>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    <!-- widgets-wrap.// -->
                </div>
                <!-- col.// -->
            </div>
            <!-- row.// -->
        </div>
        <!-- container.// -->
    </section>
    <!-- header-main .// -->
</header>
<!-- section-header.// -->

<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong>
                            <i class="fa fa-bars"></i> &nbsp Tất cả danh mục</strong></a>
                    <div class="dropdown-menu">
                        <?php foreach ($arrCate as $cate) {
                            extract($cate) ?>
                            <a class="dropdown-item" href="../Product?catId=<?= $maLoai ?>"><?= $tenLoai ?></a>
                        <?php } ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nữ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cặp đôi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Phụ kiện</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dịch vụ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kinh nghiệm</a>
                </li>
            </ul>
        </div>
        <!-- collapse .// -->
    </div>
    <!-- container .// -->
</nav>