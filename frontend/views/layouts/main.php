<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-8">
                    <div class="logo">
                        <a href="index.html"><img src="./images/logo.png" alt=""> </a>
                    </div>
                </div>
                <!-- /.logo -->
                <!-- search -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="search-bg">
<!--                        <input type="text" class="form-control" placeholder="Search Here">-->
<!--                        <button type="Submit"><i class="fa fa-search"></i></button>-->
                    </div>
                </div>
                <!-- /.search -->
                <!-- account -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="account-section">
                        <ul>
                            <li><a href="#" class="title hidden-xs">My Account</a></li>
                            <li class="hidden-xs">|</li>
                            <li><a href="site/signup" class="title hidden-xs">Register</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/']) . 'cart'?>" class="title"><i class="fa fa-shopping-cart"></i>   <sup class="cart-quantity">1</sup></a></li>
                        </ul>
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
		                        ['label' => 'ԳԼԽԱՎՈՐ', 'url' => ['/']],
		                        ['label' => 'ՀԵՌԱԽՈՍՆԵՐ', 'url' => ['product/telephone']],
		                        ['label' => 'ԱԿՍԵՍՈՒԱՐՆԵՐ', 'url' => ['product/accessories']],
		                        ['label' => 'ԲՈւՖԵՐՆԵՐ', 'url' => ['product/buffers']],
		                        ['label' => 'ՆՈՈՒԹԲՈՒՔԵՐ', 'url' => ['product/notebooke']],
		                        ['label' => 'ԿԱՊ', 'url' => ['contact']],
	                        ];
	                        echo Nav::widget([
		                        'options' => ['class' => 'active'],
		                        'items' => $menuItems,
	                        ]);
	                        ?>

                        </div>
                    </div>
                    <!-- /.navigations-->
                </div>
            </div>

        </div>
    </div>
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>
	<?= Alert::widget() ?>
	<?= $content ?>

<div class="bg-default pdt40 pdb40">
    <div class="container">
        <div class="row">

            <!-- features -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="feature-left">
                    <div class="feature-outline-icon">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="text-white">Safe Payment</h3>
                        <p>Praesent orci dolor, pretium vitae hendrerit convallisutes orcgravida bibendum.</p>
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
                        <h3 class="text-white">24/7 Help Center</h3>
                        <p>Aliquam molestie urnased one pharetra vestibulum Interdum et malesuada fames.</p>
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
                        <h3 class="text-white">Free &amp; Easy Return</h3>
                        <p>Vivamus semper nisnesbla accumsan dui justo esw finibus turpis serom.</p>
                    </div>
                </div>
            </div>
            <!-- features -->
            <!-- features -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="feature-left">
                    <div class="feature-outline-icon">
                        <i class="fa fa-dollar"></i>
                    </div>
                    <div class="feature-content">
                        <h3 class="text-white">Great Value</h3>
                        <p>Morbi necmi turpiulm tristiq ueipsm inodiopharetr amal esuat erdumetalesuada.</p>
                    </div>
                </div>
            </div>
            <!-- features -->
        </div>
    </div>
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
                    <h3 class="footer-title footer_my_title">Contact Info </h3>
                    <div class="contact-info">
                        <span class="contact-icon"><i class="fa fa-map-marker"></i></span>
                        <span class="contact-text">1683 Pickens Way Sherman,<br>
Bird Street Albuquerque
Us 75090</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-icon"><i class="fa fa-phone"></i></span>
                        <span class="contact-text">+180-123-4567 / 89</span>
                    </div>
                    <div class="contact-info">
                        <span class="contact-icon"><i class="fa fa-envelope"></i></span>
                        <span class="contact-text">info@demo.com</span>
                    </div>
                </div>
            </div>
            <!-- /.footer-useful-links -->
            <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer-widget">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="arrow">
                        <li><a href="#">Home </a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Mobiles</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.footer-useful-links -->
            <!-- footer-policy-list-links -->
            <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer-widget">
                    <h3 class="footer-title">Policy Info</h3>
                    <ul class="arrow">
                        <li><a href="#">Payments</a></li>
                        <li><a href="#">Cancellation &amp; Returns</a></li>
                        <li><a href="#">Shipping and Delivery</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">T &amp; C</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.footer-policy-list-links -->
            <!-- footer-social links -->
            <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="footer-widget">
                    <h3 class="footer-title">Connect With Us</h3>
                    <div class="ft-social">
                        <span><a href="#" class="btn-social btn-facebook" ><i class="fa fa-facebook"></i></a></span>
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
                    <div class="payment-method alignleft">
                        <ul>
                            <li><a href="#"><i class="fa fa-cc-paypal fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-mastercard  fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-visa fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-discover fa-2x"></i></a></li>
                        </ul>
                    </div>
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
