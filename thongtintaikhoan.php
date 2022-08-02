<?php $data["title"] = "THÔNG TIN TÀI KHOẢN"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section thongtintaikhoan__section">
    <div class="uk-container">
        <div class="uk-grid-30-m" uk-grid>
            <div class="uk-width-expand">
                <div class="item__70">

                </div>
                <div class="item__70">
                    <div class="item__22">
                        <h2 class="uk-h2 thongtintaikhoan__title">Cài Đặt Email</h2>
                    </div>
                    <div class="item__22">
                        <div class="thongtintaikhoan__item">
                            <div class="item__5">
                                <div class="thongtintaikhoan__label1">Email của bạn</div>
                            </div>
                            <div class="item__5">
                                <div class="thongtintaikhoan__desc">Tentoila@gamil.com</div>
                            </div>
                        </div>
                        <div class="thongtintaikhoan__item">
                            <div class="item__16">
                                <div class="thongtintaikhoan__label1">Email từ Vietogethers</div>
                            </div>
                            <div class="item__16">
                                <div class="item__8">
                                    <div class="thongtintaikhoan__label2">Weekly Email</div>
                                </div>
                                <div class="item__8">
                                    <div class="uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="thongtintaikhoan__desc">Được gửi vào mỗi sáng thứ 3 hàng tuần, tổng hợp các bài viết hay nhất của Vietcetera trong tuần qua, được chọn lọc bởi đội ngũ biên tập viên.</div>
                                        </div>
                                        <div class="uk-width-auto">
                                            <label>
                                                <input class="uk-checkbox thongtintaikhoan__checkBox__input" type="checkbox" checked>
                                                <span class="thongtintaikhoan__checkBox__label"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item__16">
                                <div class="item__8">
                                    <div class="thongtintaikhoan__label2">Gợi ý bài viết</div>
                                </div>
                                <div class="item__8">
                                    <div class="uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="thongtintaikhoan__desc">Được gửi vào mỗi sáng thứ 2 và thứ 5 mỗi tuần, dựa trên những series, chủ đề, tác giả, bài viết bạn đã thích.</div>
                                        </div>
                                        <div class="uk-width-auto">
                                            <label>
                                                <input class="uk-checkbox thongtintaikhoan__checkBox__input" type="checkbox">
                                                <span class="thongtintaikhoan__checkBox__label"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item__70">
                    <div class="item__40">
                        <h2 class="uk-h2 thongtintaikhoan__title">Đổi Mật Khẩu</h2>
                    </div>
                    <div class="item__40">
                        <div uk-grid>
                            <div class="uk-width-3-4@s">
                                <div class="item__30">
                                    <div class="uk-position-relative">
                                        <input class="uk-input dangky1__input" type="password" placeholder="Mật Khẩu Cũ">
                                        <a href="" class="dangnhap__iconshowpass uk-position-small uk-position-center-right" uk-icon="icon: heart"></a>
                                    </div>
                                </div>
                                <div class="item__30">
                                    <div class="uk-position-relative">
                                        <input class="uk-input dangky1__input" type="password" placeholder="Mật Khẩu Mới">
                                        <a href="" class="dangnhap__iconshowpass uk-position-small uk-position-center-right" uk-icon="icon: heart"></a>
                                    </div>
                                </div>
                                <div class="item__30">
                                    <div class="uk-position-relative">
                                        <input class="uk-input dangky1__input" type="password" placeholder="Nhập Lại Mật Khẩu Mới">
                                        <a href="" class="dangnhap__iconshowpass uk-position-small uk-position-center-right" uk-icon="icon: heart"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item__40">
                        <button class="uk-button uk-button-primary dangky1__btnSubmit"><span>Đổi Mật Khẩu</span></button>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-3@m">
                <div class="thongtintaikhoan__topHeader"></div>
                <ul class="uk-nav uk-nav-default thongtintaikhoan__nav">
                    <li class="uk-active"><a href="#">Cài Đặt</a></li>
                    <li><a href="#">Bài viết đã lưu</a></li>
                    <li><a href="#">Bài viết yêu thích</a></li>
                    <li><a href="#">Chủ đề đang theo dõi</a></li>
                    <li><a href="#">Tác giả đang theo dõi</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>