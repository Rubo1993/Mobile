<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register( $this );
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode( $this->title ) ?></title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div class="header-wrapper">
    <div class="container">
        <div class="row">
            <!-- logo -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8">
                <div class="logo" id="mylogo">
                    <a href="index.html"><img  src="../images/logo.png" alt=""> </a>
                </div>
            </div>
            <!-- /.logo -->
            <!-- search -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="search-bg">
                </div>
            </div>
            <!-- /.search -->
            <!-- account -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="account-section">

					<?php
					if ( Yii::$app->user->id ) {
						?>
                        <ul>
                            <li><a href="<?= \yii\helpers\Url::to( [ '/site/logout' ] )?>" class="title hidden-xs">Ելք</a></li>
                            </li>
                            <li class="hidden-xs">|</li>
                            <li><a href="<?= \yii\helpers\Url::to( [ '/' ] ) . 'cart' ?>" class="title"><i
                                            class="fa fa-shopping-cart"></i> <sup
                                            class="cart-quantity"><?= \frontend\widgets\cart\CartWidget::widget(); ?></sup></a>
                            </li>
                        </ul>
						<?php
					} else {
						?>
                        <ul>
                            <li><a href="<?= \yii\helpers\Url::to( [ '/' ] ) . 'site/login' ?>" class="title hidden-xs">Մուտք</a>
                            </li>

                            <li><a href="<?= \yii\helpers\Url::to( [ '/' ] ) . 'site/signup' ?>"
                                   class="title hidden-xs">Գրանցվել</a></li>
                        </ul>
					<?php }
					?>

                </div>
                <!-- /.account -->
            </div>
            <!-- search -->
        </div>
    </div>
    <!-- navigation -->
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- navigations-->
                    <div id="navigation">
						<?php
						$menuItems = [
							[ 'label' => 'ԳԼԽԱՎՈՐ', 'url' => [ '@web/' ] ],
							[ 'label' => 'ՀԵՌԱԽՈՍՆԵՐ', 'url' => [ '@web/product/telephone' ] ],
							[ 'label' => 'ԱԿՍԵՍՈՒԱՐՆԵՐ', 'url' => [ '@web/product/accessories' ] ],
							[ 'label' => 'ԲՈւՖԵՐՆԵՐ', 'url' => [ '@web/product/buffers' ] ],
							[ 'label' => 'ՆՈՈՒԹԲՈՒՔԵՐ', 'url' => [ '@web/product/notebooke' ] ],
							[ 'label' => 'ԿԱՊ', 'url' => [ '@web/site/contact' ] ],
						];
						echo Nav::widget( [
							'options' => [ 'class' => 'active' ],
							'items'   => $menuItems,
						] );
						?>

                    </div>
                </div>
                <!-- /.navigations-->
            </div>
        </div>

    </div>
</div>
<?= Breadcrumbs::widget( [
	'links' => isset( $this->params['breadcrumbs'] ) ? $this->params['breadcrumbs'] : [],
] ) ?>
<?= Alert::widget() ?>
<?= $content ?>

<div class="bg-default pdt40 pdb40">
<!--    <div class="container">-->
        <div class="row myfoother">

            <!-- features -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="feature-left">
                    <div class="feature-outline-icon">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <div class="feature-content">


                        <h3 class="text-white margin_none">+374 95 15 25 35</h3>
                        <p>Սպասարկման ծառայության աշխատանքային ժամեր են՝ 10:00 - 21:00</p>
                    </div>
                </div>
            </div>
            <!-- features -->
            <!-- features -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="feature-left">
                    <div class="feature-outline-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="text-white margin_none">Առաքում</h3>
                        <p>1 աշխատանքային օրվա ընթացքում 10:00 - 20:00</p>
                    </div>
                </div>
            </div>
            <!-- features -->
            <!-- features -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="feature-left feature-circle">
                    <div class="feature-outline-icon">
                        <i class="fa fa-rotate-left "></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="text-white margin_none">Ապառիկի պայմաններ</h3>
                        <p>Ծանոթացեք ապառիկի պայմանների հետ այստեղ</p>
                    </div>
                </div>
            </div>
            <!-- features -->
            <!-- features -->
<!--            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                <div class="feature-left">-->
<!--                    <div class="feature-outline-icon">-->
<!--                        <i class="fa fa-dollar"></i>-->
<!--                    </div>-->
<!--                    <div class="feature-content">-->
<!--                        <h3 class="text-white">Great Value</h3>-->
<!--                        <p>Morbi necmi turpiulm tristiq ueipsm inodiopharetr amal esuat erdumetalesuada.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <!-- features -->
        </div>
<!--    </div>-->
</div>
<!-- /.features -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <!-- footer-company-links -->
            <!-- footer-contact links -->
            <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer-widget">
                    <h3 class="footer-title footer_my_title">Կոնտակտներ </h3>
                    <div class="contact-info">
                        <span class="contact-icon"><i class="fa fa-map-marker"></i></span>
                        <span class="contact-text">Ք․ Գյումրի, Վարդանանց <br>հրպ 2 շենք

</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-icon"><i class="fa fa-phone"></i></span>
                        <span class="contact-text">+374 95 15 25 35</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-icon"><i class="fa fa-envelope"></i></span>
                        <span class="contact-text">arm_phone@mail.ru</span>
                    </div>
                </div>
            </div>
            <!-- /.footer-useful-links -->
            <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer-widget">
                    <h3 class="footer-title">Արագ հղումներ</h3>
                    <div id="foother_menu">
		                <?php
		                $menuItems = [
			                [ 'label' => 'Գլխավոր', 'url' => [ '@web/' ] ],
			                [ 'label' => 'Հեռախոսներ', 'url' => [ '@web/product/telephone' ] ],
			                [ 'label' => 'Ակսեսուարներ', 'url' => [ '@web/product/accessories' ] ],
			                [ 'label' => 'Բուֆերներ', 'url' => [ '@web/product/buffers' ] ],
			                [ 'label' => 'Նոութբուքեր', 'url' => [ '@web/product/notebooke' ] ],

		                ];
		                echo Nav::widget( [
			                'options' => [ 'class' => '' ],
			                'items'   => $menuItems,
		                ] );
		                ?>

                    </div>
                </div>
            </div>
            <!-- /.footer-useful-links -->
            <!-- footer-policy-list-links -->
            <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer-widget">
                    <h3 class="footer-title">Վճարումներ</h3>
                    <ul class="arrow">
                        <li><a href="#">Չեղյալ եւ վերադարձը</a></li>
                        <li><a href="#">Առաքում եւ առաքում</a></li>
                        <div class="paymn">
<!--                            <ul>-->
                                <li><a href="#"><i class="fa fa-cc-paypal fa-2x"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-mastercard  fa-2x"></i></a></li>
                                <li><a href="#"><i class="fa fa-cc-visa fa-2x"></i></a></li>

<!--                            </ul>-->
                        </div>
                    </ul>
                </div>
            </div>
            <!-- /.footer-policy-list-links -->
            <!-- footer-social links -->
            <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer-widget">
                    <h3 class="footer-title">Միացեք մեզ</h3>
                    <div class="ft-social">
                        <span><a href="#" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a></span>
                        <span><a href="#" class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a></span>
                        <span><a href="#" class="btn-social btn-googleplus"><i class="fa fa-google-plus"></i></a></span>
                        <span><a href="#" class=" btn-social btn-linkedin"><i class="fa fa-linkedin"></i></a></span>
                        <span><a href="#" class=" btn-social btn-pinterest"><i class="fa fa-pinterest-p"></i></a></span>
                        <span><a href="#" class=" btn-social btn-instagram"><i class="fa fa-instagram"></i></a></span>
                    </div>
                </div>
            </div>
            <!-- /.footer-social links -->
        </div>
    </div>
    <!-- tiny-footer -->
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <p class="alignright">Copyright © All Rights Reserved 2020 Template Design by
                        <a href="https://easetemplate.com/" target="_blank" class="copyrightlink">EaseTemplate</a></p>
                </div>
            </div>
        </div>
        <!-- /. tiny-footer -->
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
