<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Vietogether - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="<?= (isset($body))?$body:'' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<?php require "template-parts/data.php"; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<div id="offcanvas-flip-menu" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" uk-close></button>

    </div>
</div>
<div class="header__bannderAds uk-position-z-index uk-position-relative">
    <div class="uk-container uk-padding-remove">
        <a href=""><img class="uk-width-1-1" src="images/BannerAds.png" alt=""></a>
    </div>
</div>
<div class="header uk-background-default" uk-sticky="animation: uk-animation-slide-top;top: 600">
    <div class="header__top uk-visible@m">
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" uk-navbar>

                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <a href="" class="header__top__btn header__top__btn--store uk-button uk-button-primary"><span>Ghé Thăm Vietogether Store</span></a>
                    </div>
                </div>

                <div class="uk-navbar-right">
                    <a class="uk-navbar-item header__top__social header__top__social--facebook"></a>
                    <a class="uk-navbar-item header__top__social header__top__social--instagram"></a>
                    <a class="uk-navbar-item header__top__social header__top__social--youtube"></a>
                </div>

            </nav>
        </div>
    </div>
    <div class="header__center uk-position-z-index uk-position-relative">
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-toggle header__center__iconMenu uk-hidden@m" uk-navbar-toggle-icon href="#offcanvas-flip-menu" uk-toggle></a>
                    <a href="." class="uk-navbar-item uk-logo uk-hidden@m uk-padding-remove"><img src="images/Vietogetherlogo.png" alt=""></a>
                    <div class="uk-navbar-item uk-visible@m">
                        <div class="header__center__linkTxt">Wed, August 25, 2021</div>
                    </div>
                    <div class="uk-navbar-item uk-visible@m">
                        <a href="" class="header__center__linkTxt">Hợp Tác Truyền Thông</a>
                    </div>
                </div>
                <div class="uk-navbar-center">
                    <a href="." class="uk-navbar-item uk-logo uk-visible@m"><img src="images/Vietogetherlogo.png" alt=""></a>
                </div>
                <div class="uk-navbar-right">
                    <div>
                        <a class="header__center__navItemMobile uk-navbar-toggle uk-hidden@m" href="#" uk-search-icon></a>
                        <div class="uk-navbar-dropdown header__center__formSearchDropdown" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav">

                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-expand">
                                    <form class="uk-search uk-search-navbar uk-width-1-1">
                                        <input class="uk-search-input" type="search" placeholder="Search" autofocus>
                                    </form>
                                </div>
                                <div class="uk-width-auto">
                                    <a class="uk-navbar-dropdown-close" href="#" uk-close></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <a class="header__center__navItemMobile uk-navbar-toggle uk-hidden@m" uk-icon="icon: user" href="#"></a>
                    <a class="header__center__navItemMobile header__center__navItemMobile--signIn uk-navbar-toggle uk-hidden@m" uk-icon="icon: sign-in" href="#"></a>
                    <div class="uk-navbar-item uk-visible@m">
                        <a href="" class="header__center__linkTxt header__center__linkTxt--register">Đăng Ký</a>
                    </div>
                    <div class="uk-navbar-item uk-visible@m">
                        <a href="" class="header__top__btn uk-button uk-button-primary"><span>Đăng Nhập</span></a>
                    </div>
                    <a class="uk-navbar-toggle header__center__iconMenu uk-visible@m" uk-navbar-toggle-icon href=""></a>
                </div>
            </nav>
        </div>
    </div>
    <div class="header__bottom uk-visible@m">
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" uk-navbar>

                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="danhmuclon.php">Kinh Doanh</a></li>
                        <li><a href="danhmuclon.php">Đời Sống</a></li>
                        <li>
                            <a href="danhmuclon.php">Du Lịch</a>
                            <div class="uk-navbar-dropdown uk-margin-remove uk-padding-remove uk-dropdown uk-dropdown-bottom-left" uk-dropdown="animation: uk-animation-slide-bottom-small; duration: 300" style="left: 0px; top: 100px;">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="#">Đại học</a></li>
                                    <li><a href="#">Cao học</a></li>
                                    <li><a href="#">Nghiên cứu sinh</a></li>
                                    <li><a href="#">Vừa làm vừa học</a></li>
                                    <li>
                                        <a href="#" aria-expanded="false" class="">Văn bằng 2</a>
                                        <ul class="uk-nav uk-navbar-dropdown-nav uk-dropdown uk-dropdown-right-top" uk-dropdown="pos: right-top; animation: uk-animation-slide-bottom-small; duration: 300" style="left: 250px; top: 0px;">
                                            <li><a href="dautuduan-kehoachdauthau.php">Kế hoạch đấu thầu</a></li>
                                            <li><a href="#">Thông báo mời thầu</a></li>
                                            <li><a href="#">Kết quả lựa chọn nhà thầu</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="danhmuclon.php">Sáng Tạo</a></li>
                        <li><a href="danhmuclon.php">Trải Nghiệm</a></li>
                        <li><a href="danhmuclon.php">Video</a></li>
                        <li><a href="danhmuclon.php">Podcast</a></li>
                        <li><a href="danhmuclon.php">Cafe Vietogether</a></li>
                    </ul>

                </div>

                <div class="uk-navbar-right">
                    <div class="uk-navbar-item">
                        <form class="uk-search header__bottom__formSearch">
                            <span uk-search-icon></span>
                            <input class="uk-search-input" type="search" placeholder="Search">
                        </form>
                    </div>
                    <div class="uk-navbar-item">
                        <div class="uk-position-relative">
                            <div class="header__top__flag">
                                <span>Tiếng Việt</span>
                            </div>
                            <div class="uk-padding-small header__top__dropFlag" uk-dropdown="mode: click">
                                <ul class="uk-nav">
                                    <li class="uk-active"><a href="" style="--background: url('images/230px-Flag_of_North_Vietnam_(1955–1976).png')">Vietnamese</a></li>
                                    <li><a href="" style="--background: url('https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Flag_of_the_United_States_%281847%E2%80%931848%29.svg/1200px-Flag_of_the_United_States_%281847%E2%80%931848%29.svg.png')">English</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </nav>
        </div>
    </div>
</div>
<div class="uk-overlay uk-overlay-primary mask_menu"></div>