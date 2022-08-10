<div class="footer">
    <div class="footer__top uk-section">
        <div class="uk-container">
            <div class="uk-child-width-1-4@m" uk-grid>
                <div class="<?= (isset($store))?'uk-width-1-2@m':'uk-width-1-4@m' ?>">
                    <div><img src="images/Vietogethers2.png" alt=""></div>
                    <?php if (isset($store)): ?>
                        <div class="item__20" uk-grid>
                            <div class="uk-width-3-4@m">
                                <div class="store__footer__desc">Vietogether Store - cửa hiệu trực tuyến của Vietogether, mang đến cho độc giả những sản phẩm độc đáo, phản ánh được tinh thần của Vietogether: Đa dạng, cách tân và truyền cảm hứng. Chúng tôi mong rằng, những thành quả được dệt lên tâm huyết này sẽ trở thành món quà ý nghĩa cho bạn và cả người thương.</div>
                            </div>
                        </div>
                    <?php else: ?>
                        <ul class="uk-list">
                            <li>
                                <div class="footer__top__txt1">Hotline</div>
                                <div class="footer__top__txt2">Toll Free (123) 456-7890</div>
                            </li>
                            <li>
                                <div class="footer__top__txt1">Email</div>
                                <div class="footer__top__txt2">Vietogether@mail.com</div>
                            </li>
                            <li>
                                <div class="footer__top__txt1">Address</div>
                                <div class="footer__top__txt2">123 Street, City, Country</div>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
                <?php if (isset($store)): ?>
                    <div class="uk-width-1-4@m uk-width-1-2">
                        <h4 class="uk-h4 footer__top__title">Liên Kết</h4>
                        <ul class="uk-nav uk-nav-default">
                            <li><a href="">Giới thiệu</a></li>
                            <li><a href="">Điều kiện và điều khoản</a></li>
                            <li><a href="">Chính sách đổi trả</a></li>
                            <li><a href="">Chính sách bảo mật </a></li>
                            <li><a href="">Thông tin cá nhân</a></li>
                            <li><a href="">Chính sách bảo mật </a></li>
                            <li><a href="">Thanh toán</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-1-4@m uk-width-1-2">
                        <h4 class="uk-h4 footer__top__title">Liên Hệ</h4>
                        <ul class="uk-list">
                            <li>
                                <div class="footer__top__txt1">Hotline</div>
                                <div class="footer__top__txt2">Toll Free (123) 456-7890</div>
                            </li>
                            <li>
                                <div class="footer__top__txt1">Email</div>
                                <div class="footer__top__txt2">Vietogether@mail.com</div>
                            </li>
                            <li>
                                <div class="footer__top__txt1">Address</div>
                                <div class="footer__top__txt2">123 Street, City, Country</div>
                            </li>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="uk-width-1-4@m uk-width-1-2">
                        <h4 class="uk-h4 footer__top__title">Kinh Doanh</h4>
                        <ul class="uk-nav uk-nav-default">
                            <li><a href="#">Doanh nghiệp</a></li>
                            <li><a href="#">Khởi nghiệp</a></li>
                            <li><a href="#">Lãnh đạo</a></li>
                            <li><a href="#">Bất động sản</a></li>
                            <li><a href="#">Chứng khoán</a></li>
                            <li><a href="#">Quốc tế</a></li>
                            <li><a href="#">Xu hướng kinh doanh</a></li>
                            <li><a href="#">Chuyện đi làm</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-1-4@m uk-width-1-2">
                        <h4 class="uk-h4 footer__top__title">Đời Sống</h4>
                        <ul class="uk-nav uk-nav-default">
                            <li><a href="#">Tin tức</a></li>
                            <li><a href="#">Tri thức</a></li>
                            <li><a href="#">Xã hội</a></li>
                            <li><a href="#">Tiêu dùng</a></li>
                            <li><a href="#">Xu hướng cuộc sống</a></li>
                            <li><a href="#">Gia đình</a></li>
                            <li><a href="#">Chất lượng sống</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-1-4@m uk-width-1-2">
                        <h4 class="uk-h4 footer__top__title">Sáng Tạo</h4>
                        <ul class="uk-nav uk-nav-default">
                            <li><a href="#">Doanh nghiệp</a></li>
                            <li><a href="#">Khởi nghiệp</a></li>
                            <li><a href="#">Lãnh đạo</a></li>
                            <li><a href="#">Bất động sản</a></li>
                            <li><a href="#">Chứng khoán</a></li>
                            <li><a href="#">Quốc tế</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-1-4@m uk-width-1-2">
                        <h4 class="uk-h4 footer__top__title">Du Lịch</h4>
                        <ul class="uk-nav uk-nav-default">
                            <li><a href="#">Doanh nghiệp</a></li>
                            <li><a href="#">Khởi nghiệp</a></li>
                            <li><a href="#">Lãnh đạo</a></li>
                            <li><a href="#">Bất động sản</a></li>
                            <li><a href="#">Chứng khoán</a></li>
                            <li><a href="#">Quốc tế</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-1-4@m uk-width-1-2">
                        <h4 class="uk-h4 footer__top__title">Trải Nghiệm</h4>
                        <ul class="uk-nav uk-nav-default">
                            <li><a href="#">Tin tức</a></li>
                            <li><a href="#">Tri thức</a></li>
                            <li><a href="#">Xã hội</a></li>
                            <li><a href="#">Tiêu dùng</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-1-4@m uk-width-1-2">
                        <h4 class="uk-h4 footer__top__title">Cafe Vietogether</h4>
                        <ul class="uk-nav uk-nav-default">
                            <li><a href="#">Doanh nghiệp</a></li>
                            <li><a href="#">Khởi nghiệp</a></li>
                            <li><a href="#">Lãnh đạo</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-1-4@m uk-width-1-2">
                        <h4 class="uk-h4 footer__top__title">Về Chúng Tôi</h4>
                        <ul class="uk-nav uk-nav-default">
                            <li><a href="#">Doanh nghiệp</a></li>
                            <li><a href="#">Khởi nghiệp</a></li>
                            <li><a href="#">Lãnh đạo</a></li>
                            <li><a href="#">Bất động sản</a></li>
                            <li><a href="#">Chứng khoán</a></li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="footer__bottom uk-flex uk-flex-middle uk-section-xsmall uk-text-center uk-text-left@m">
        <div class="uk-width-1-1">
            <div class="uk-container">
                <div class="uk-flex-middle uk-grid-small" uk-grid>
                    <div class="uk-width-expand">
                        <div class="footer__bottom__txtCopyRight">© 2021, Design by Vietogether.All right reserved </div>
                    </div>
                    <div class="uk-width-auto@m">
                        <ul class="uk-grid uk-grid-small uk-flex-center uk-flex-middle uk-child-width-auto" uk-grid>
                            <li><a href="" class="header__top__social header__top__social--facebook"></a></li>
                            <li><a href="" class="header__top__social header__top__social--instagram"></a></li>
                            <li><a href="" class="header__top__social header__top__social--youtube"></a></li>
                            <li><a href="" class="header__top__social header__top__social--tiktok"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--/app-->
</body>
</html>