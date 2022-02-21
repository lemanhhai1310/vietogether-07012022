<?php $data["title"] = "ĐĂNG KÝ 1"; ?>
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
                                <input class="uk-input dangky1__input" type="email" placeholder="Email">
                            </div>
                            <div class="uk-margin">
                                <input class="uk-input dangky1__input" type="password" placeholder="Mật Khẩu">
                            </div>
                            <div class="uk-margin">
                                <input class="uk-input dangky1__input" type="password" placeholder="Nhập Lại Mật Khẩu">
                            </div>

                            <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                <label><input class="uk-checkbox" type="checkbox" checked> <span class="dangky1__txt">Nhận tin tức mới nhất từ Vietogethers</span></label>
                            </div>

                            <div class="uk-margin uk-text-center">
                                <a href="dangky2.php" class="uk-button uk-button-primary dangky1__btnSubmit"><span>Tiếp Tục</span></a>
                            </div>

                        </fieldset>
                    </form>
                    <div class="item__40">
                        <div class="item__30">
                            <div class="uk-child-width-1-2@m uk-grid-small uk-grid-30-m" uk-grid>
                                <div>
                                    <button class="dangky1__btn dangky1__btn--google uk-button uk-button-default uk-width-1-1"><span>Đăng Ký Bằng Google</span></button>
                                </div>
                                <div>
                                    <button class="dangky1__btn dangky1__btn--fb uk-button uk-button-default uk-width-1-1"><span>Đăng Ký Bằng Facebook</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="item__30">
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