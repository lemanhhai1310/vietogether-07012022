<?php $data["title"] = "DANH MỤC CON"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="danhmuclon__section uk-section" uk-height-viewport="offset-top: true;offset-bottom: true">
    <div class="uk-container">
        <div class="item__120">
            <div class="item__80">
                <?php require "template-parts/layouts/danhmuc.php"; ?>
            </div>
            <div class="item__80">
                <div class="uk-grid-30" uk-grid>
                    <div class="uk-width-expand">
                        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-30-m uk-grid-match" uk-grid>
                        <?php
                        shuffle($dataNews);
                        foreach ($dataNews as $k=>$v): ?>
                            <?php if ($k<=7): ?>
                            <div>
                                <div class="uk-flex uk-flex-column">
                                    <div class="danhmuccon__item">
                                        <div class="uk-cover-container">
                                            <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                            <canvas width="420" height="323"></canvas>
                                            <a href="" class="uk-position-cover"></a>
                                        </div>
                                    </div>
                                    <div class="danhmuccon__item uk-flex-auto">
                                        <h4 class="uk-h4 danhmuccon__title"><a href=""><?= $v['title'] ?></a></h4>
                                    </div>
                                    <div class="danhmuccon__item">
                                        <div class="uk-child-width-auto uk-grid-small uk-grid-30-m uk-flex-middle" uk-grid>
                                            <div>
                                                <div class="uk-child-width-auto uk-grid-10 uk-flex-middle" uk-grid>
                                                    <div>
                                                        <div class="uk-cover-container uk-border-circle uk-flex">
                                                            <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                                            <canvas width="30" height="30"></canvas>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="home__section__txtSmall">Lê Yến</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="home__section__txtSmall">8 Giờ Trước</div>
                                            </div>
                                            <div>
                                                <div class="home__section__txtSmall">250 Lượt Xem</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                            <div class="uk-width-auto">
                                <a href="" class="header__top__btn uk-button uk-button-primary" style="width: intrinsic;"><span>Xem Thêm</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m">
                        <aside>
                            <div class="danhmuccon__itemRight">
                                <div class="danhmuccon__title1">Doanh Nghiệp</div>
                                <div class="danhmuccon__txt">Các vấn đề doanh nghiệp cùng xu hướng kinh tế và những diễn biến mới nhất trên thị trường.</div>
                            </div>
                            <div class="danhmuccon__itemRight">
                                <div class="danhmuccon__title2">Chuyên Mục Liên Quan</div>
                                <ul class="danhmuccon__nav uk-nav-default uk-nav-divider" uk-nav>
                                    <li><a href="#">Khởi nghiệp</a></li>
                                    <li><a href="#">Lãnh đạo</a></li>
                                    <li><a href="#">Bất động sản</a></li>
                                    <li><a href="#">Chứng khoán</a></li>
                                    <li><a href="#">Quốc tế</a></li>
                                    <li><a href="#">Xu hướng kinh doanh</a></li>
                                    <li><a href="#">Chuyện đi làm</a></li>
                                </ul>
                            </div>
                            <div class="danhmuccon__itemRight">
                                <img class="uk-width-1-1" src="images/bannerAds2.png" alt="">
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>