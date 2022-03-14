<?php $data["title"] = "GIỚI THIỆU"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section gioithieu__section">
    <div class="uk-container">
        <div class="item__120">
            <article class="uk-article uk-column-1-2@m gioithieu__article">
                <h1 class="uk-h1 gioithieu__article__title">Vietogether Đang <br class="uk-visible@m"> Làm Gì Hàng Ngày ?</h1>
                <p class="gioithieu__article__desc">Vietogether được thành lập với một sứ mệnh giản đơn: đưa Việt Nam ra thế giới và đưa thế giới về Việt Nam. Chúng tôi mong muốn làm nền tảng tin cậy để người Việt hiện đại trao đổi về công việc và cuộc sống, cũng như mở rộng cuộc hội thoại với những góc nhìn mới.</p>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. </p>
                <figure class="uk-column-span">
                    <img src="images/wallpaperflare1.png" alt="">
                </figure>
            </article>
        </div>
        <div class="item__120">
            <div class="item__40">
                <h4 class="uk-h4 home__section__title3">Đội Ngũ Của Chúng Tôi</h4>
            </div>
            <div class="item__40">
                <div class="uk-child-width-1-3@m uk-child-width-1-2 uk-grid-small uk-grid-30-m" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/cong-nghe.png',
                            'txt' => 'Công Nghệ',
                        ),
                        array(
                            'src' => 'images/van-hanh.png',
                            'txt' => 'Vận Hành',
                        ),
                        array(
                            'src' => 'images/quan-ly.png',
                            'txt' => 'Quản Lý',
                        ),
                        array(
                            'src' => 'images/marketing.png',
                            'txt' => 'Maketing',
                        ),
                        array(
                            'src' => 'images/audio.png',
                            'txt' => 'Audio & Video',
                        ),
                        array(
                            'src' => 'images/content.png',
                            'txt' => 'Viết Bài',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                    <div>
                        <div class="gioithieu__card uk-card uk-card-default uk-text-center">
                            <div class="uk-cover-container">
                                <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                <canvas width="420" height="323"></canvas>
                            </div>
                            <div class="uk-padding-small">
                                <div class="gioithieu__card__title"><?= $v['txt'] ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="item__120">
            <div class="item__40">
                <h4 class="uk-h4 home__section__title3">Đối Tác Của Chúng Tôi</h4>
            </div>
            <div class="item__40">
                <div class="gioithieu__doitac__desc">Vietogether sản xuất những gì chưa từng có. Một series nói thẳng-thật về tình dục. Một loạt bài về những nghề nghiệp mới xuất hiện trên thị trường. Những chiếc cúp Bánh Mì cho các nhà hàng và quán bar xuất sắc nhất. Một nền tảng công nghệ dành riêng cho nội dung chất lượng.</div>
            </div>
            <div class="item__40">
                <div class="uk-child-width-1-6@m uk-child-width-1-2 uk-grid-10 uk-grid-30-m" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/doi-tac/img1.png',
                        ),
                        array(
                            'src' => 'images/doi-tac/img2.png',
                        ),
                        array(
                            'src' => 'images/doi-tac/img3.png',
                        ),
                        array(
                            'src' => 'images/doi-tac/img4.png',
                        ),
                        array(
                            'src' => 'images/doi-tac/img5.png',
                        ),
                        array(
                            'src' => 'images/doi-tac/img6.png',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                    <div>
                        <div class="gioithieu__doitac__item uk-background-norepeat uk-background-center-center" data-src="<?= $v['src'] ?>" uk-img>

                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="item__120">
            <div class="item__40">
                <h4 class="uk-h4 home__section__title3">Nên Stalk Ai Trước Khi Apply Cho Vietcetera?</h4>
            </div>
            <div class="item__40">
                <div class="gioithieu__doitac__desc">Bất cứ người sản xuất nội dung nào tại Vietogether - các <br class="uk-visible@m"> biên tập viên, nhiếp ảnh gia, videographer, kỹ sư phần mềm.</div>
            </div>
            <div class="item__40">
                <div class="uk-child-width-1-4@m uk-grid-10 uk-grid-30-m" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/user/img1.png',
                            'name' => 'Trần Hữu Tiến',
                            'txt' => 'Một nhà khởi nghiệp đam mê nhiếp ảnh và thiết kế. Anh là người sáng lập Vietogether.',
                        ),
                        array(
                            'src' => 'images/user/img2.png',
                            'name' => 'Jenny',
                            'txt' => 'COO của Vietogether. Chị từng làm việc tại những startup hàng đầu, và làm thơ vào thời gian rảnh.',
                        ),
                        array(
                            'src' => 'images/user/img3.png',
                            'name' => 'Trần Thế Anh',
                            'txt' => 'Một Việt Kiều trẻ từng bỏ việc ở quỹ đầu tư để viết bài cho Vietogether. Giờ đây anh là CEO của công ty.',
                        ),
                        array(
                            'src' => 'images/user/img4.png',
                            'name' => 'Trần Trung Đông',
                            'txt' => 'Một chuyên gia format từng đi qua không thiếu ngõ ngách nào của thị trường nội dung Việt Nam. Chị là Head of Content tại Vietogether.',
                        ),
                    );
                    foreach ($data as $k=>$v): ?>
                        <div>
                            <div class="item__15">
                                <div class="uk-cover-container uk-display-inline-block gioithieu__avartar__bg">
                                    <img src="<?= $v['src'] ?>" alt="" uk-cover="">
                                    <canvas width="195" height="316"></canvas>
                                </div>
                            </div>
                            <div class="item__15">
                                <div class="gioithieu__avartar__name"><?= $v['name'] ?></div>
                                <div class="gioithieu__avartar__desc"><?= $v['txt'] ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="item__120">
            <div class="item__40">
                <h4 class="uk-h4 home__section__title3">Làm Sao Để Được Vào Team?</h4>
            </div>
            <div class="item__40">
                <div class="gioithieu__doitac__desc">Sau khi gửi đơn ứng tuyển, những ứng viên phù hợp nhất sẽ nhận được thư mời trò chuyện với quản lý bộ phận và các nhà sáng lập. Nếu bạn có mặt tại văn phòng, bạn còn có thể gặp gỡ và nói chuyện với những đồng nghiệp tương lai.</div>
            </div>
            <div class="item__40">
                <button class="header__top__btn header__top__btn--job uk-button uk-button-primary"><span>Cơ Hội Nghề Nghiệp</span></button>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>