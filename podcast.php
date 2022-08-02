<?php $data["title"] = "PODCAST"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section podcast__section1">
    <div class="uk-container">
        <div class="uk-grid-small uk-grid-30-m uk-flex-middle" uk-grid>
            <?php $img = 'https://picsum.photos/420/420/?random'; ?>
            <div class="uk-width-auto@m">
                <div class="podcast__section1__boxCover uk-cover-container uk-border-rounded">
                    <img src="<?= $img ?>" alt="" uk-cover="">
                    <canvas width="420" height="420"></canvas>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="item__20">
                    <div class="item__13">
                        <div class="podcast__section1__label">Vietnam Innovators</div>
                    </div>
                    <div class="item__13">
                        <h1 class="uk-h1 podcast__section1__title">#2 Emin Turan, Foundation General  Manager and Country Lead, Sanofi  Vietnam & Cambodia</h1>
                    </div>
                </div>
                <div class="item__20">
                    <p class="podcast__section1__desc">It is a long-established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using lorem ipsum is that it has a more-or-less normal distribution of letters...</p>
                </div>
                <div class="item__20">
                    <div class="uk-grid-80-m uk-child-width-auto uk-grid-small uk-flex-middle" uk-grid>
                        <div>
                            <a href="" class="podcast__section1__btnPlay"></a>
                        </div>
                        <div>
                            <div class="uk-grid-10 uk-child-width-auto" uk-grid>
                                <div>
                                    <button class="uk-button uk-button-default podcast__section1__btn podcast__section1__btn--viewAll">Xem Tất Cả Các Tập</button>
                                </div>
                                <div>
                                    <button class="uk-button uk-button-primary podcast__section1__btn podcast__section1__btn--archire">Lưu Podcast</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section podcast__section2">
    <div class="uk-container">
        <div class="item__120">
            <div class="item__40">
                <h4 class="uk-h4 home__section__title3">Các Tập Mới Nhất</h4>
            </div>
            <div class="item__40">
                <div class="uk-grid-30-m uk-grid-small uk-child-width-1-2@m uk-grid-match" uk-grid>
                    <?php
                    $label = array(
                        'TÓM LẠI LÀ',
                        'HAVE A SHIP',
                        'ÂM NHẠC',
                        'NGHỆ THUẬT',
                        'CỞI MỞ',
                    );
                    $title = array(
                        '#11: OnlyFans - cấm hay không cấm nội dung khiêu dâm?',
                        '#48 Đặng Hoàng Giang: Viết lách giống như đánh tennis mỗi ngày',
                        '#12: Điều gì đứng sau cuộc thanh trừng các ngôi sao tại Trung Quốc?',
                        '#51: Âm nhạc là sự chữa lành - Nhạc của Trang',
                        '#20 Thảo Đan, Visual Artist và Creative Director: Kể chuyện bằng hình ảnh 3D',
                        '#4 Chủ động - bị động: sâu sắc hơn bạn nghĩ',
                    );
                    for ($i=1;$i<=6;$i++):
                    $img = 'https://picsum.photos/180/180/?random?v='.+$i;
                    ?>
                        <div>
                            <div class="podcast__section2__box1">
                                <div class="item__5">
                                    <div class="uk-grid-10 uk-grid-20-m uk-grid-match" uk-grid>
                                        <div class="uk-width-1-3">
                                            <div class="uk-cover-container uk-border-rounded">
                                                <img src="<?= $img ?>" alt="" uk-cover="">
                                                <canvas width="180" height="180"></canvas>
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-flex uk-flex-column">
                                                <div class="uk-flex-auto">
                                                    <div><?= $label[array_rand($label)] ?></div>
                                                    <h3 class="uk-h3 uk-margin-remove"><a href=""><?= $title[array_rand($title)] ?></a></h3>
                                                </div>
                                                <div>20 Thg 08, 2021</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__5">
                                    <div class="uk-grid-10 uk-flex-middle uk-child-width-auto" uk-grid>
                                        <div class="uk-width-expand">
                                            <input class="uk-range" type="range" value="2" min="0" max="10" step="0.1">
                                        </div>
                                        <div>
                                            <div>48 : 35</div>
                                        </div>
                                        <div>
                                            <a href="" class=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <div class="item__120">
            <a href=""><img class="uk-width-1-1" src="images/ADS1.png" alt=""></a>
        </div>
        <div class="item__120">

        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>