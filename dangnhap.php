<?php $data["title"] = "ĐĂNG NHẬP"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section dangky1__section" uk-height-viewport="offset-top: true;offset-bottom: true">
    <div class="uk-container">
        <div class="uk-flex-center" uk-grid>
            <div class="uk-width-1-2@m">
                <div class="item__80">
                    <div class="item__10">
                        <h1 class="uk-h1 danhmuclon__title uk-text-center"><span>Đăng Nhập</span></h1>
                    </div>
                    <div class="item__10">

                    </div>
                </div>
                <div class="item__80">
                    <form class="item__40">
                        <fieldset class="uk-fieldset">

                            <div class="uk-margin">
                                <input class="uk-input dangky1__input" type="email" placeholder="Email">
                            </div>
                            <div class="uk-margin">
                                <div class="uk-position-relative">
                                    <input class="uk-input dangky1__input" type="password" placeholder="Mật Khẩu">
                                    <a href="" class="dangnhap__iconshowpass uk-position-small uk-position-center-right" uk-icon="icon: heart"></a>
                                </div>
                            </div>

                            <div class="uk-margin">
                                <div class="uk-flex-middle" uk-grid>
                                    <div class="uk-width-expand">
                                        <a href="dangky2.php" class="uk-button uk-button-primary dangky1__btnSubmit"><span>Đăng Nhập</span></a>
                                    </div>
                                    <div class="uk-width-auto">
                                        <a href="" class="dangnhap__txtforgot">Quên Mật Khẩu</a>
                                    </div>
                                </div>
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
                                    <div class="dangky1__txt">Bạn chưa có tài khoản?</div>
                                </div>
                                <div>
                                    <a href="dangky1.php" class="dangky1__txtLink">Đăng Ký</a>
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