<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content">
    <!-- ============================ COMPONENT REGISTER   ================================= -->
    <div class="card mx-auto" style="max-width: 520px; margin-top: 40px">
        <article class="card-body">
            <header class="mb-4">
                <h4 class="card-title">Đăng ký</h4>
            </header>
            <form action="" method="POST">
                <div class="form-row">
                    <div class="col form-group">
                        <label>Họ và tên</label>
                        <input type="text" class="form-control" placeholder="Nhập họ và tên" name="name"/>
                    </div>
                </div>
                <!-- form-row end.// -->
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Nhập email" name="email" />
                    <small class="form-text text-muted">Chúng tôi không chia sẻ email của bạn với bất kì ai.</small>
                </div>

                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="phone" />
                </div>
                <!-- form-group end.// -->

                <!-- form-row.// -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Mật khẩu</label>
                        <input class="form-control" type="password" placeholder="Nhập mật khẩu" name="password" />
                        <small class="form-text text-danger"><?=$errPass ?? null?></small>
                    </div>
                    <!-- form-group end.// -->
                    <div class="form-group col-md-6">
                        <label>Nhập lại mật khẩu</label>
                        <input class="form-control" type="password" placeholder="Nhập lại mật khẩu" name="passwordCopy" />
                    </div>
                    <!-- form-group end.// -->
                </div>
                <div class="form-group">
                    <button type="submit" name="btnRegister" class="btn btn-primary btn-block">
                        Đăng ký
                    </button>
                </div>
                <!-- form-group// -->
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" checked="" />
                        <div class="custom-control-label">
                            Tôi đồng ý với các <a href="#">điều khoản và điều kiện</a>
                        </div>
                    </label>
                </div>
                <!-- form-group end.// -->
            </form>
        </article>
        <!-- card-body.// -->
    </div>
    <!-- card .// -->
    <p class="text-center mt-4">Đã có tài khoản? <a href="../User/?page=login">Đăng nhập</a></p>
    <br /><br />
    <!-- ============================ COMPONENT REGISTER  END.// ================================= -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->