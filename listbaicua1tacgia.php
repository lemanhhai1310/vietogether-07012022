<?php $data["title"] = "LIST BÀI CỦA 1 TÁC GIẢ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section listbaicua1tacgia__section1">
    <div class="uk-container">
        <div class="uk-grid-144-m uk-flex-middle" uk-grid>
            <div class="uk-width-auto@m">
                <div class="uk-flex-middle uk-child-width-auto@s uk-grid-30-m uk-grid-small" uk-grid>
                    <div class="uk-text-center">
                        <div class="uk-cover-container uk-border-circle uk-display-inline-block">
                            <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                            <canvas width="195" height="195"></canvas>
                        </div>
                    </div>
                    <div>
                        <div class="uk-text-center uk-text-left@s">
                            <div class="item__18">
                                <div class="item__8">
                                    <div class="listbaicua1tacgia__section1__label">Editor</div>
                                </div>
                                <div class="item__8">
                                    <h1 class="listbaicua1tacgia__section1__title uk-h1">Đào Tuấn</h1>
                                </div>
                            </div>
                            <div class="item__18">
                                <a href="" class="header__top__btn uk-button uk-button-primary" style="width: fit-content"><span>Theo Dõi</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-expand">
                <div class="listbaicua1tacgia__section1__desc">Lorem ipsum dolor sit amet consectetur adipiscing elit. Vestibulum ac vehicula leo. Donec urna lacus gravida ac vulputate sagittis tristique vitae lectus. Nullam rhoncus tortor at dignissim vehicula. Combined with a handful of model sentence structures, to generate lorem ipsum which looks reasonable.</div>
            </div>
        </div>
    </div>
</div>
<div class="uk-section listbaicua1tacgia__section2">
    <div class="uk-container">
        <div class="item__30">
            <h4 class="uk-h4 home__section__title3">Tất Cả Bài Viết</h4>
        </div>
        <div class="item__30">
            <div class="uk-child-width-1-3@m uk-grid-small uk-grid-30-m" uk-grid>
                <?php
                $label = array(
                    'kinh doanh',
                    'Thời trang',
                    'Đời Sống',
                    'Du lịch',
                    'nghệ thuật',
                );
                $title = array(
                    'Doanh nghiệp xoay xở mọi cách để níu chân người lao động',
                    'Bên trong thương vụ 1 tỉ USD bán tờ The Politico cho người Đức',
                    'Nghe fashion blogger xinh đẹp xứ Hàn rỉ tai cách mặc đẹp vào thời điểm cuối hè',
                    '9 Loại thực phẩm bổ sung giúp tăng cường hệ miễn dịch',
                    'Ngắm hoàng hôn mùa thu trên hồ Ba Bể',
                    '6 Ý tưởng sân khấu âm nhạc tái định nghĩa sàn diễn truyền thống',
                    'Bữa sáng đơn giản nhưng giàu năng lượng cho ngày dài làm việc',
                    'Giá xăng giảm hơn 500 đồng mỗi lít',
                    'Đón chờ sản phẩm âm nhạc đầu tay trong sự nghiệp solo của...',
                );
                for ($i=1;$i<=9;$i++):
                $img = 'https://picsum.photos/420/323/?random?v='.+$i;
                ?>
                <div>
                    <div class="uk-grid-small uk-grid-match" uk-grid>
                        <div class="uk-width-1-1@m uk-width-1-3">
                            <div class="uk-cover-container">
                                <img src="<?= $img ?>" alt="" uk-cover="">
                                <canvas width="420" height="323"></canvas>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div uk-grid>
                                <div>
                                    <div class="listbaicua1tacgia__section2__label"><?= $label[array_rand($label)] ?></div>
                                </div>
                                <div>
                                    <div class="listbaicua1tacgia__section2__time">16 Thg 08, 2021</div>
                                </div>
                            </div>
                            <h4 class="uk-h4 uk-margin-remove listbaicua1tacgia__section2__title"><a href=""><?= $title[array_rand($title)] ?></a></h4>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="item__30">
            <a href="" class="header__top__btn uk-button uk-button-primary" style="width: fit-content"><span>Xem Thêm</span></a>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>