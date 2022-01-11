<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="home__section uk-section" uk-height-viewport="offset-top: true;offset-bottom: true">
    <div class="uk-container">
        <div class="item__120">
            <div class="uk-child-width-1-1 uk-grid-small uk-grid-40-m" uk-grid>
                <div>
                    <div class="uk-grid-small uk-grid-30-m" uk-grid>
                        <div class="uk-width-expand">
                            <div class="home__section__boxSlider" uk-slider>

                                <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                                    <ul class="uk-slider-items uk-child-width-1-1">
                                        <?php
                                        shuffle($dataNews);
                                        foreach ($dataNews as $k=>$v): ?>
                                        <?php if ($k<=3): ?>
                                        <li>
                                            <div class="uk-cover-container">
                                                <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                                <canvas width="870" height="530"></canvas>
                                            </div>
                                            <div class="uk-padding-small home__section__box1">
                                                <div class="item__20">
                                                    <h3 class="uk-h3 home__section__title1"><a href=""><?= $v['title'] ?></a></h3>
                                                </div>
                                                <div class="item__20">
                                                    <div class="item__10">
                                                        <div class="home__section__txt">it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout... </div>
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
                                        </li>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>

                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                                </div>

                                <ul class="home__section__dotnav uk-grid-10 uk-slider-nav uk-dotnav uk-margin uk-flex-center uk-flex-left@m"></ul>

                            </div>
                        </div>
                        <div class="uk-width-1-3@m">
                            <div class="uk-grid-small uk-grid-30-m uk-child-width-1-1" uk-grid>
                            <?php
                            shuffle($dataNews);
                            foreach ($dataNews as $k=>$v): ?>
                            <?php if ($k<=6): ?>
                            <div>
                                <div class="uk-grid-10 uk-grid-match" uk-grid>
                                    <div class="uk-width-auto">
                                        <div class="uk-cover-container">
                                            <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                            <canvas width="113" height="87"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="uk-flex uk-flex-column">
                                            <div class="uk-flex-auto">
                                                <h3 class="uk-h3 home__section__title2 line-clamp-2"><a href=""><?= $v['title'] ?></a></h3>
                                            </div>
                                            <div>
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
                                                        <div class="home__section__txtSmall">19 Thg 8, 2021</div>
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
                </div>
                <div>
                    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-30-m uk-grid-match" uk-grid>
                        <?php
                        shuffle($dataNews);
                        foreach ($dataNews as $k=>$v): ?>
                        <?php if ($k<=2): ?>
                        <div>
                            <div class="uk-grid-small uk-grid-30-m uk-grid-match" uk-grid>
                                <div class="uk-width-1-2 uk-width-1-2@m">
                                    <div class="uk-cover-container">
                                        <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                        <canvas width="195" height="150"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-flex uk-flex-column">
                                        <div class="uk-flex-auto">
                                            <div class="home__section__categore"><a href="">Đời Sống</a></div>
                                            <h3 class="uk-h3 home__section__title2 line-clamp-3"><a href=""><?= $v['title'] ?></a></h3>
                                        </div>
                                        <div>
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
        </div>
        <div class="item__120">
            <a href=""><img class="uk-width-1-1" src="images/ADS1.png" alt=""></a>
        </div>
        <div class="item__120">
            <div class="item__40">
                <h4 class="uk-h4 home__section__title3">Nổi Bật</h4>
            </div>
            <div class="item__40">
                <div class="uk-grid-small uk-grid-30-m" uk-grid>
                    <div class="uk-width-expand">
                        <div class="uk-child-width-1-1 uk-grid-small uk-grid-30-m" uk-grid>
                            <?php
                            shuffle($dataNews);
                            foreach ($dataNews as $k=>$v): ?>
                                <?php if ($k<=2): ?>
                                    <div>
                                        <div class="uk-grid-match uk-grid-small uk-grid-30-m" uk-grid>
                                            <div class="uk-width-1-2 uk-width-1-3@m">
                                                <div class="uk-cover-container">
                                                    <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                                    <canvas width="308" height="237"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <div class="uk-flex uk-flex-column">
                                                    <div class="uk-flex-auto item__10">
                                                        <div class="item__10">
                                                            <div class="home__section__categore"><a href="">Đời Sống</a></div>
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
                    <div class="uk-width-1-4@m">
                        <div class="uk-grid-small uk-grid-30-m uk-child-width-1-1" uk-grid>
                            <?php
                            shuffle($dataNews);
                            foreach ($dataNews as $k=>$v): ?>
                            <?php if ($k<=2): ?>
                            <div>
                                <div class="uk-cover-container">
                                    <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                    <canvas width="616" height="478"></canvas>
                                    <div class="uk-position-bottom home__section__boxOverlay"></div>
                                    <div class="uk-padding-small uk-position-bottom">
                                        <h4 class="uk-h4 home__section__title4"><a href=""><?= $v['title'] ?></a></h4>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item__120">
            <a href=""><img class="uk-width-1-1" src="images/ADS1.png" alt=""></a>
        </div>
        <div class="item__120">
            <div class="item__40">
                <div class="uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <h4 class="uk-h4 home__section__title3">Video</h4>
                    </div>
                    <div class="uk-width-auto">
                        <a href="" class="home__section__linkAll">Xem Tất Cả Video >></a>
                    </div>
                </div>
            </div>
            <div class="item__40">
                <div class="uk-child-width-1-2@m uk-grid-small uk-grid-30-m uk-grid-match" uk-grid>
                    <?php
                    shuffle($dataNews);
                    foreach ($dataNews as $k=>$v): ?>
                    <?php if ($k==0): ?>
                    <div>
                        <div class="uk-cover-container">
                            <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                            <canvas width="645" height="510"></canvas>
                            <div class="home__section__box2 uk-padding-small uk-position-bottom uk-flex uk-flex-bottom">
                                <h3 class="uk-h3 home__section__title1 line-clamp-3"><a href=""><?= $v['title'] ?></a></h3>
                            </div>
                            <a href="" class="uk-position-center home__section__iconPlay"></a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-child-width-1-1 uk-grid-small uk-grid-30-m uk-grid-match" uk-grid>
                            <?php elseif ($k<=3): ?>
                            <div>
                                <div class="uk-grid-small uk-grid-30-m uk-grid-match" uk-grid>
                                    <div class="uk-width-1-3">
                                        <div class="uk-cover-container">
                                            <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                            <canvas width="195" height="150"></canvas>
                                            <a href="" class="uk-position-center home__section__iconPlay"></a>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="uk-flex uk-flex-column">
                                            <div class="uk-flex-auto">
                                                <h3 class="uk-h3 home__section__title2 line-clamp-2"><a href=""><?= $v['title'] ?></a></h3>
                                            </div>
                                            <div>
                                                <div class="uk-child-width-auto uk-grid-small uk-grid-30-m uk-flex-middle" uk-grid>
                                                    <div>
                                                        <div class="home__section__txtSmall">21 Thg 08, 2021</div>
                                                    </div>
                                                    <div>
                                                        <div class="home__section__txtSmall">1.2k Lượt xem</div>
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
            </div>
        </div>
        <div class="item__120">
            <div class="item__40">
                <h4 class="uk-h4 home__section__title3">Xem Nhiều</h4>
            </div>
            <div class="item__40">
                <div class="uk-grid-small uk-grid-30-m uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>
                    <?php
                    shuffle($dataNews);
                    foreach ($dataNews as $k=>$v): ?>
                    <?php if ($k<=3): ?>
                    <div>
                        <div class="item__15">
                            <div class="uk-cover-container">
                                <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                <canvas width="616" height="474"></canvas>
                            </div>
                        </div>
                        <div class="item__15">
                            <div class="item__10">
                                <h3 class="uk-h3 home__section__title2 line-clamp-2"><a href=""><?= $v['title'] ?></a></h3>
                            </div>
                            <div class="item__10">
                                <div class="home__section__txt line-clamp-3">it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout... </div>
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
                                        <div class="home__section__txtSmall">19 Thg 8, 2021</div>
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
        <div class="item__120">
            <div class="uk-grid-small uk-grid-30-m uk-grid-match" uk-grid>
                <div class="uk-width-expand">
                    <img class="uk-width-1-1" src="images/bannerads1.png" alt="">
                </div>
                <div class="uk-width-2-5@m">
                    <div class="uk-padding-small home__section__box3 uk-flex uk-flex-middle">
                        <div class="uk-width-1-1">
                            <div class="uk-flex-middle uk-grid-small" uk-grid>
                                <div class="uk-width-expand">
                                    <h5 class="uk-h5 home__section__box3__title">Tham Gia Viết Bài Cùng Chúng Tôi</h5>
                                </div>
                                <div class="uk-width-auto@m">
                                    <a href="" class="header__top__btn uk-button uk-button-primary"><span>Đăng Ký</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item__120">
            <div class="item__40">
                <h4 class="uk-h4 home__section__title3">Popular</h4>
            </div>
            <div class="item__40">
                <div class="uk-grid-30" uk-grid>
                    <div class="uk-width-1-2@m">
                        <div class="item__15">
                            <div class="uk-cover-container">
                                <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                <canvas width="644" height="497"></canvas>
                            </div>
                        </div>
                        <div class="item__15">
                            <div class="item__10">
                                <h3 class="uk-h3 home__section__title1"><a href=""><?= $v['title'] ?></a></h3>
                            </div>
                            <div class="item__10">
                                <div class="home__section__txt">it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout... </div>
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
                    <div class="uk-width-1-4@m uk-flex-first@m">
                        <?php
                        shuffle($dataNews);
                        foreach ($dataNews as $k=>$v): ?>
                        <?php if ($k<=3): ?>
                        <div class="home__section__item">
                            <div class="item__10">
                                <h3 class="uk-h3 home__section__title2 line-clamp-2"><a href=""><?= $v['title'] ?></a></h3>
                            </div>
                            <div class="item__10">
                                <div class="home__section__txt line-clamp-3">it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout... </div>
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
                                        <div class="home__section__txtSmall">19 Thg 8, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="uk-width-1-4@m">
                        <div class="uk-grid-small uk-grid-30-m uk-child-width-1-1" uk-grid>
                            <?php
                            shuffle($dataNews);
                            foreach ($dataNews as $k=>$v): ?>
                                <?php if ($k<=1): ?>
                                    <div>
                                        <div class="uk-cover-container">
                                            <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                            <canvas width="616" height="478"></canvas>
                                            <div class="uk-position-bottom home__section__boxOverlay"></div>
                                            <div class="uk-padding-small uk-position-bottom">
                                                <h4 class="uk-h4 home__section__title4"><a href=""><?= $v['title'] ?></a></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <div>
                                <div class="home__section__card uk-card uk-card-body uk-flex uk-flex-middle">
                                    <div class="uk-width-1-1">
                                        <div class="uk-child-width-1-1 uk-grid-small uk-grid-30-m" uk-grid>
                                            <div>
                                                <div class="uk-text-center home__section__card__title">Đăng ký danh sách gửi thư của chúng tôi để nhận thông tin mới!</div>
                                            </div>
                                            <div>
                                                <input class="uk-input home__section__card__input" type="text" placeholder="Enter Your Mail">
                                            </div>
                                            <div>
                                                <button class="header__top__btn uk-button uk-button-primary uk-width-1-1"><span>Subscribe</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item__120">
            <div class="item__40">
                <h4 class="uk-h4 home__section__title3">Gần Đây</h4>
            </div>
            <div class="item__40">
                <div class="uk-grid-small uk-grid-30-m" uk-grid>
                    <div class="uk-width-expand">
                        <div class="uk-child-width-1-1 uk-grid-small uk-grid-30-m" uk-grid>
                            <?php
                            shuffle($dataNews);
                            foreach ($dataNews as $k=>$v): ?>
                                <?php if ($k<=1): ?>
                                    <div>
                                        <div class="uk-grid-match uk-grid-small uk-grid-30-m" uk-grid>
                                            <div class="uk-width-1-2 uk-width-1-3@m">
                                                <div class="uk-cover-container">
                                                    <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                                    <canvas width="308" height="237"></canvas>
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
                            <div>
                                <a href="" class="header__top__btn uk-button uk-button-primary" style="width: intrinsic;"><span>Xem Thêm</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-4@m uk-visible@m">
                        <img class="uk-width-1-1" src="images/bannerAds2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>