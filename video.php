<?php $data["title"] = "VIDEO"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section video__section">
    <div class="uk-container">
        <?php
        $title = array(
            'Bị ép tới "cửa tử", linh dương nổi điên một mình đuổi đánh 4 con báo và linh cẩu chạy tán loạn',
            'Đồng loại bị cá sấu tấn công, sư tử đực liều chết giải cứu',
            'Cô gái trở thành Tiktoker triệu view nhờ các món làm từ...',
            'Clip: Chở cô gái trên xe SH rồi tạt đầu, lượn trước xe container...',
            'Ngắm hoàng hôn mùa thu trên hồ Ba Bể',
            'Những tình huống dở khóc dở cười khó đỡ của các bà nội trợ',
            'Chiêm ngưỡng những siêu xe đắt giá nhất hành tinh',
            'Con đường độc nhất vô nhị Tây Bắc - xuyên hang tới ngôi làng',
            'Những hiện tượng bí ẩn mà các nhà khoa học chưa có lời giải',
        );
        ?>
        <div class="item__120">
            <div class="uk-grid-30-m uk-grid-small" uk-grid>
                <?php for ($i=1;$i<=5;$i++): ?>
                    <?php if ($i==1): ?>
                        <?php $img = 'https://picsum.photos/1320/880/?random?v='.+$i; ?>
                        <div class="uk-width-1-1">
                            <div class="uk-cover-container uk-light">
                                <img src="<?= $img ?>" alt="" uk-cover="">
                                <canvas width="1320" height="880"></canvas>
                                <div class="video__boxGradient uk-position-bottom uk-padding-small">
                                    <h3 class="uk-h3"><a href=""><?= $title[array_rand($title)] ?></a></h3>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php $img = 'https://picsum.photos/308/206/?random?v='.+$i; ?>
                        <div class="uk-width-1-4@m">
                            <div class="uk-child-width-1-2 uk-child-width-1-1@m uk-grid-13" uk-grid>
                                <div>
                                    <div class="uk-cover-container">
                                        <img src="<?= $img ?>" alt="" uk-cover="">
                                        <canvas width="308" height="206"></canvas>
                                    </div>
                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endfor; ?>
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