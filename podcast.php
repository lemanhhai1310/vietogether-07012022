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
                            <button class="uk-button uk-button-default podcast__section1__btn podcast__section1__btn--viewAll">Xem Tất Cả Các Tập</button>
                            <button class="uk-button uk-button-primary podcast__section1__btn podcast__section1__btn--archire">Lưu Podcast</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container">

    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>