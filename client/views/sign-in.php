<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-conten padding-y" style="min-height: 84vh">
    <!-- ============================ COMPONENT LOGIN   ================================= -->
    <div class="card mx-auto" style="max-width: 380px; margin-top: 100px">
        <div class="card-body">
            <h4 class="card-title mb-4">Đăng nhập</h4>
            <form action="" method="POST">
                <a href="#" class="btn btn-facebook btn-block mb-2">
                    <i class="fab fa-facebook-f"></i> &nbsp Đăng nhập với Facebook</a>
                <a href="#" class="btn btn-google btn-block mb-4">
                    <i class="fab fa-google"></i> &nbsp Đăng nhập với Google</a>
                <div class="form-group">
                    <input class="form-control" placeholder="Email" type="email" name="email" />
                </div>
                <!-- form-group// -->
                <div class="form-group">
                    <input class="form-control" placeholder="Mật khẩu" type="password" name="password" />
                </div>
                <!-- form-group// -->

                <div class="form-group">
                    <a href="?page=rspass" class="float-right">Quên mật khẩu?</a>
                    <label class="float-left custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" checked="" />
                        <div class="custom-control-label">Ghi nhớ tài khoản</div>
                    </label>
                </div>
                <!-- form-group form-check .// -->
                <div class="form-group">
                    <button type="submit" name="btnLogin" class="btn btn-primary btn-block">
                        Đăng nhập
                    </button>
                </div>
                <!-- form-group// -->
            </form>
        </div>
        <!-- card-body.// -->
    </div>
    <!-- card .// -->

    <p class="text-center mt-4">
        Bạn chưa có tài khoản? <a href="../User/?page=register">Đăng ký</a>
    </p>
    <br /><br />
    <!-- ============================ COMPONENT LOGIN  END.// ================================= -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->