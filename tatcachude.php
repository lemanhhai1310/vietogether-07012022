<?php $data["title"] = "TẤT CẢ CHỦ ĐỀ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section tatcachude__section" uk-height-viewport="offset-top: true;offset-bottom: true">
    <div class="uk-container">
        <div class="item__50">
            <h4 class="uk-h4 home__section__title3">Khám Phá Các Chủ Đề</h4>
        </div>
        <div class="item__50">
            <div class="item__30">
                <div class="cohoivieclam__title"><span>Kinh Doanh</span></div>
            </div>
            <div class="item__30">
                <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-10 uk-grid-30-m uk-grid-match" uk-grid>
                    <?php for ($i=0;$i<=7;$i++): ?>
                    <div>
                        <div class="tatcachude__box1">
                            <div class="item__10">
                                <div class="uk-cover-container">
                                    <img src="images/photo-1612296727716-d6c69d2a2cbb 1.png" alt="" uk-cover="">
                                    <canvas width="308" height="237"></canvas>
                                </div>
                            </div>
                            <div class="item__10">
                                <div class="uk-section-xsmall tatcachude__box1__section">
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="tatcachude__box1__title">Doanh Nghiệp</div>
                                        </div>
                                        <div class="uk-width-auto@s">
                                            <a href="" class="tatcachude__box1__btn uk-button uk-button-default uk-button-small"><span>Theo Dõi</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        <div class="item__50">
            <div class="item__30">
                <div class="cohoivieclam__title"><span>Đời Sống</span></div>
            </div>
            <div class="item__30">
                <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-10 uk-grid-30-m uk-grid-match" uk-grid>
                    <?php for ($i=0;$i<=7;$i++): ?>
                        <div>
                            <div class="tatcachude__box1">
                                <div class="item__10">
                                    <div class="uk-cover-container">
                                        <img src="images/photo-1612296727716-d6c69d2a2cbb 1.png" alt="" uk-cover="">
                                        <canvas width="308" height="237"></canvas>
                                    </div>
                                </div>
                                <div class="item__10">
                                    <div class="uk-section-xsmall tatcachude__box1__section">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <div class="tatcachude__box1__title">Doanh Nghiệp</div>
                                            </div>
                                            <div class="uk-width-auto@s">
                                                <a href="" class="tatcachude__box1__btn uk-button uk-button-default uk-button-small"><span>Theo Dõi</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>