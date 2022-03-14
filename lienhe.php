<?php $data["title"] = "LIÊN HỆ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section lienhe__section1">
    <div class="uk-container">
        <div class="uk-child-width-1-3@m uk-grid-divider" uk-grid>
            <div>
                <div class="uk-text-center">
                    <div class="item__15 uk-margin-auto lienhe__section1__icon lienhe__section1__icon--map"></div>
                    <div class="item__15">
                        <div class="lienhe__section1__txt1 item__10">Địa Chỉ</div>
                        <div class="lienhe__section1__txt2 item__10">82-84 Nguyễn Thị Minh Khai, Phường 6,  <br>Quận 3, Tp Hồ Chí Minh</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-text-center">
                    <div class="item__15 uk-margin-auto lienhe__section1__icon lienhe__section1__icon--phone"></div>
                    <div class="item__15">
                        <div class="lienhe__section1__txt1 item__10">Hot Line</div>
                        <div class="lienhe__section1__txt2 item__10">+84 286 286 2989 <br> +84 386 456 7890</div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-text-center">
                    <div class="item__15 uk-margin-auto lienhe__section1__icon lienhe__section1__icon--mail"></div>
                    <div class="item__15">
                        <div class="lienhe__section1__txt1 item__10">Email</div>
                        <div class="lienhe__section1__txt2 item__10">Vietogether@gmail.com<br>Team@vietogether.com</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="uk-cover-container">
    <canvas width="1920" height="800"></canvas>
    <iframe class="uk-position-cover" uk-responsive src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d239124.92453799103!2d105.9761925!3d20.533799549999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1646628116446!5m2!1svi!2s" width="1920" height="800" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<div class="uk-section lienhe__section2">
    <div class="uk-container">
        <div class="item__40">
            <h4 class="uk-h4 home__section__title3">Liên Hệ Với Chúng Tôi</h4>
        </div>
        <div class="item__40">
            <div class="uk-grid-small uk-grid-30-m uk-child-width-1-3@m" uk-grid>
                <div>
                    <input class="uk-input lienhe__section2__input" type="text" placeholder="Họ & Tên *">
                </div>
                <div>
                    <input class="uk-input lienhe__section2__input" type="text" placeholder="Email *">
                </div>
                <div>
                    <input class="uk-input lienhe__section2__input" type="text" placeholder="Số điện thoại *">
                </div>
                <div class="uk-width-1-1">
                    <textarea class="uk-textarea lienhe__section2__textarea" rows="5" placeholder="Tin nhắn *"></textarea>
                </div>
                <div class="uk-width-1-1">
                    <button class="header__top__btn uk-button uk-button-primary"><span>Gửi Tin Nhắn</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>