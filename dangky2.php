<?php $data["title"] = "ĐĂNG KÝ 2"; ?>
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
                    <form class="item__40">
                        <fieldset class="uk-fieldset">

                            <div class="uk-margin">
                                <input class="uk-input dangky1__input uk-form-danger" type="text" placeholder="Họ & Tên" value="Lee Manh Hai">
                                <small class="uk-text-danger">Please enter name</small>
                            </div>
                            <div class="uk-margin">
                                <input class="uk-input dangky1__input" type="text" placeholder="Ngày Sinh">
                            </div>
                            <div class="uk-margin">
                                <input class="uk-input dangky1__input" type="tel" placeholder="Số CMND / CCCD / Hộ Chiếu">
                            </div>
                            <div class="uk-margin">
                                <div class="uk-child-width-1-2@m uk-grid-20" uk-grid>
                                    <div>
                                        <input class="uk-input dangky1__input" type="text" placeholder="Ngày Cấp">
                                    </div>
                                    <div>
                                        <input class="uk-input dangky1__input" type="text" placeholder="Nơi Cấp">
                                    </div>
                                </div>
                            </div>

                            <div class="uk-margin uk-text-center">
                                <a href="dangky3.php" class="uk-button uk-button-primary dangky1__btnSubmit"><span>Tạo Tài Khoản</span></a>
                            </div>
                            <div class="uk-margin">
                                <div class="uk-child-width-auto uk-flex-center uk-grid-small uk-grid-40-m uk-flex-middle" uk-grid>
                                    <div>
                                        <div class="dangky1__txt">Bạn đã có tài khoản?</div>
                                    </div>
                                    <div>
                                        <a href="dangnhap.php" class="dangky1__txtLink">Đăng Nhập</a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-margin uk-text-center">
                                <div class="dangky2__txt">Khi bấm tạo “Tài khoản” bạn đã đồng ý với <a href="">quy định</a> & <a
                                            href="">chính sách bảo mật</a> của Vietogethers</div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>