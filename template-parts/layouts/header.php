<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Vietogethers - <?= /** @var TYPE_NAME  */
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
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<div class="header__bannderAds uk-position-z-index uk-position-relative">
    <div class="uk-container uk-padding-remove">
        <a href=""><img class="uk-width-1-1" src="images/BannerAds.png" alt=""></a>
    </div>
</div>
<div class="header uk-background-default" uk-sticky>
    <div class="header__top uk-visible@m">
        <div class="uk-container uk-padding-remove">
            <nav class="uk-navbar uk-navbar-container uk-navbar-transparent" uk-navbar>

                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <a href="" class="header__top__btn header__top__btn--store uk-button uk-button-primary"><span>Ghé Thăm Vietogethers Store</span></a>
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
                    <a class="uk-navbar-toggle header__center__iconMenu uk-hidden@m" uk-navbar-toggle-icon href=""></a>
                    <a href="" class="uk-navbar-item uk-logo uk-hidden@m uk-padding-remove"><img src="images/Vietogetherlogo.png" alt=""></a>
                    <div class="uk-navbar-item uk-visible@m">
                        <div class="header__center__linkTxt">Wed, August 25, 2021</div>
                    </div>
                    <div class="uk-navbar-item uk-visible@m">
                        <a href="" class="header__center__linkTxt">Hợp Tác Truyền Thông</a>
                    </div>
                </div>
                <div class="uk-navbar-center">
                    <a href="" class="uk-navbar-item uk-logo uk-visible@m"><img src="images/Vietogetherlogo.png" alt=""></a>
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
                        <li class="uk-active"><a href="#">Kinh Doanh</a></li>
                        <li><a href="#">Đời Sống</a></li>
                        <li><a href="#">Du Lịch</a></li>
                        <li><a href="#">Sáng Tạo</a></li>
                        <li><a href="#">Trải Nghiệm</a></li>
                        <li><a href="#">Video</a></li>
                        <li><a href="#">Podcast</a></li>
                        <li><a href="#">Cafe Vietogethers</a></li>
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
                        <div uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Tiếng Việt</option>
                                <option value="1">Option 01</option>
                                <option value="2">Option 02</option>
                                <option value="3">Option 03</option>
                                <option value="4">Option 04</option>
                            </select>
                            <button class="header__bottom__selectLang uk-button uk-button-default" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                            </button>
                        </div>
                    </div>
                </div>

            </nav>
        </div>
    </div>
</div>
<div class="uk-overlay uk-overlay-primary mask_menu"></div>