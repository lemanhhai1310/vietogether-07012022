<?php $data["title"] = "CƠ HỘI VIỆC LÀM"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section cohoivieclam__section" uk-height-viewport="offset-top: true;offset-bottom: true">
    <div class="uk-container">
        <div class="item__50">
            <div class="uk-child-width-1-4@m uk-grid-small uk-grid-30-m" uk-grid>
                <div>
                    <h4 class="uk-h4 home__section__title3">Filter By:</h4>
                </div>
                <div>
                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                        <select>
                            <option value="">Location</option>
                            <option value="1">Option 01</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="cohoivieclam__filter__btn uk-button uk-button-default uk-width-1-1 uk-position-relative uk-text-left" type="button" tabindex="-1">
                            <span></span>
                            <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                        </button>
                    </div>
                </div>
                <div>
                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                        <select>
                            <option value="">Team</option>
                            <option value="1">Option 01</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="cohoivieclam__filter__btn uk-button uk-button-default uk-width-1-1 uk-position-relative uk-text-left" type="button" tabindex="-1">
                            <span></span>
                            <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                        </button>
                    </div>
                </div>
                <div>
                    <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                        <select>
                            <option value="">Work Type</option>
                            <option value="1">Option 01</option>
                            <option value="2">Option 02</option>
                            <option value="3">Option 03</option>
                            <option value="4">Option 04</option>
                        </select>
                        <button class="cohoivieclam__filter__btn uk-button uk-button-default uk-width-1-1 uk-position-relative uk-text-left" type="button" tabindex="-1">
                            <span></span>
                            <span class="uk-position-center-right uk-position-small" uk-icon="icon: chevron-down"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="item__50">
            <div class="item__30">
                <div class="cohoivieclam__title"><span>Audio / Visual</span></div>
            </div>
            <div class="item__30">
                <?php for ($i=0;$i<=5;$i++): ?>
                    <div class="item__20">
                        <div class="cohoivieclam__box1 uk-card uk-card-body">
                            <div class="uk-flex-middle uk-grid-small" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="uk-margin-small">
                                        <h4 class="cohoivieclam__box1__title uk-h4 uk-margin-remove"><a href="">Motion Graphic Designer</a></h4>
                                    </div>
                                    <div class="uk-margin-small-top">
                                        <div class="uk-grid-small uk-child-width-auto" uk-grid>
                                            <div>
                                                <span class="cohoivieclam__box1__txt">Hồ Chí Minh City</span>
                                            </div>
                                            <div>
                                                <span class="cohoivieclam__box1__txt">Audio/Visual</span>
                                            </div>
                                            <div>
                                                <span class="cohoivieclam__box1__txt">Fulltime</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-auto@m">
                                    <a href="" class="header__top__btn uk-button uk-button-primary"><span>Apply</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <div class="item__50">
            <div class="item__30">
                <div class="cohoivieclam__title"><span>Business</span></div>
            </div>
            <div class="item__30">
                <?php for ($i=0;$i<=5;$i++): ?>
                    <div class="item__20">
                        <div class="cohoivieclam__box1 uk-card uk-card-body">
                            <div class="uk-flex-middle uk-grid-small" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="uk-margin-small">
                                        <h4 class="cohoivieclam__box1__title uk-h4 uk-margin-remove"><a href="">Motion Graphic Designer</a></h4>
                                    </div>
                                    <div class="uk-margin-small-top">
                                        <div class="uk-grid-small uk-child-width-auto" uk-grid>
                                            <div>
                                                <span class="cohoivieclam__box1__txt">Hồ Chí Minh City</span>
                                            </div>
                                            <div>
                                                <span class="cohoivieclam__box1__txt">Audio/Visual</span>
                                            </div>
                                            <div>
                                                <span class="cohoivieclam__box1__txt">Fulltime</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-auto@m">
                                    <a href="" class="header__top__btn uk-button uk-button-primary"><span>Apply</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>