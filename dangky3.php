<?php $data["title"] = "ĐĂNG KÝ 3"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section dangky1__section" uk-height-viewport="offset-top: true;offset-bottom: true">
    <div class="uk-container">
        <div class="uk-flex-center" uk-grid>
            <div class="uk-width-1-2@m">
                <div class="item__80">
                    <h1 class="uk-h1 danhmuclon__title uk-text-center"><span>Đăng Ký</span></h1>
                </div>
                <div class="item__80">
                    <div class="dangky3__card uk-card uk-card-default uk-card-body uk-text-center">
                        <div class="item__20">
                            <img src="images/new-product1.png" alt="">
                        </div>
                        <div class="item__20">
                            <div class="dangky3__card__title">Đăng ký thành công</div>
                        </div>
                        <div class="item__20">
                            <div class="dangky3__card__desc">Một mail xác nhận đã được gửi đến email của bạn <br> Để chắc chắn hãy kiểm tra cả hộp thư đến lẫn spam.</div>
                        </div>
                        <div class="item__20">
                            <a href="dangky3.php" class="uk-button uk-button-primary dangky1__btnSubmit"><span>Đồng Ý</span></a>
                        </div>
                        <div class="item__20">
                            <div class="uk-child-width-auto uk-flex-center uk-grid-small uk-grid-40-m uk-flex-middle" uk-grid>
                                <div>
                                    <div class="dangky1__txt">Bạn đã có tài khoản?</div>
                                </div>
                                <div>
                                    <a href="dangnhap.php" class="dangky1__txtLink">Đăng Nhập</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>