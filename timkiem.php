<?php $data["title"] = "TÌM KIẾM"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section timkiem__section" uk-height-viewport="offset-top: true;offset-bottom: true">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-expand">
                <div class="item__30">
                    <div class="item__10">
                        <div class="uk-grid-collapse" uk-grid>
                            <div class="uk-width-expand">
                                <input class="uk-input timkiem__input" type="text" placeholder="" value="Ăn Uống">
                            </div>
                            <div class="uk-width-auto">
                                <button class="timkiem__btn header__top__btn uk-button uk-button-primary"><span>Tìm Kiếm</span></button>
                            </div>
                        </div>
                        <small class="timkiem__suggest">Có 6 kết quả cho “ Ăn uống “</small>
                    </div>
                    <div class="item__10">
                        <div class="timkiem__txt">(Nếu bạn không hài lòng với kết quả, vui lòng thực hiện một tìm kiếm khác.)</div>
                    </div>
                </div>
                <div class="item__30">
                    <div class="uk-child-width-1-1 uk-grid-small uk-grid-30-m" uk-grid>
                        <?php
                        shuffle($dataNews);
                        foreach ($dataNews as $k=>$v): ?>
                            <?php if ($k<=5): ?>
                                <div>
                                    <div class="uk-grid-match uk-grid-small uk-grid-30-m" uk-grid>
                                        <div class="uk-width-1-2 uk-width-1-3@m">
                                            <div class="uk-cover-container">
                                                <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                                <canvas width="308" height="237"></canvas>
                                                <a href="" class="uk-position-cover"></a>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-flex uk-flex-column">
                                                <div class="uk-flex-auto item__10">
                                                    <div class="item__10">
                                                        <h3 class="uk-h3 home__section__title1 line-clamp-2"><a href=""><?= $v['title'] ?></a></h3>
                                                    </div>
                                                    <div class="item__10">
                                                        <div class="home__section__txt line-clamp-2">it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout... </div>
                                                    </div>
                                                </div>
                                                <div class="item__10">
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
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-4@m">
                <aside>
                    <div class="danhmuccon__itemRight">
                        <div class="danhmuccon__title2">Khám Phá Thêm</div>
                        <ul class="danhmuccon__nav uk-nav-default uk-nav-divider" uk-nav>
                            <li><a href="#">Kinh Doanh</a></li>
                            <li><a href="#">Đời Sống</a></li>
                            <li><a href="#">Du Lịch</a></li>
                            <li><a href="#">Sáng Tạo</a></li>
                            <li><a href="#">Trải Nghiệm</a></li>
                            <li><a href="#">Video</a></li>
                            <li><a href="#">Podcast</a></li>
                            <li><a href="">Cafe vietogethers</a></li>
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
<?php require "template-parts/layouts/footer.php"; ?>