<?php

//if (!empty($pr)) {
//    foreach ($pr as $p) {
//        echo $p['title'];
//    }
//}
?>

<div class="slider">
    <div class="owl-carousel owl-one owl-theme">
        <div class="item">
            <div class="slider-img">
                <img src="./images/banner-Ipon.jpg" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-6 col-xs-12">
                        <div class="slider-captions">
                            <div class="brand-img">
                                <img src="./images/mi_logo.png" alt="">
                            </div>
                            <h1 class="slider-title">Red Mi <span>Y1</span></h1>
                            <p class="hidden-xs">LED Selfie-light | Fingerprint sensor | Dedicated microSD card slot Snapdragon 435 octa-core processor </p>
                            <p class="slider-price">$138.99 </p>
                            <a href="#" class="btn btn-primary btn-lg hidden-xs">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-img"><img src="./images/iphone.jpg" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-6 col-xs-12">
                        <div class="slider-captions">
                            <div class="brand-img">
                                <img src="./images/google_logo.png" alt="">
                            </div>
                            <h1 class="slider-title">Google Pixel 2</h1>
                            <p class="hidden-xs">The latest Qualcomm Snapdragon 835 processor | Water-resistant metal unibody | Up to 7 hours of battery.</p>
                            <p class="slider-price">$ 938.10</p>
                            <a href="#" class="btn btn-primary btn-lg hidden-xs">Download Free Template</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="slider-img"><img src="./images/delNout.jpg" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-6 col-xs-12">
                        <div class="slider-captions">
                            <div class="brand-img">
                                <img src="./images/apple_logo.png" alt="">
                            </div>
                            <h1 class="slider-title">iphone 8 plus  </h1>
                            <p class="hidden-xs">5.5 inch Retina HD Display | 12MP wide-angle cameras
                                <br> | 64 GB &amp; 256 GB ROM Memory</p>
                            <p class="slider-price">$759.64</p>
                            <a href="#" class="btn btn-primary btn-lg hidden-xs">Download Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.slider -->
<!-- mobile showcase -->
<div class="space-medium">
    <div class="container">
<!--        <div class="row">-->
<!--            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">-->
<!--                <div class="showcase-block">-->
<!--                    <div class="display-logo ">-->
<!--                        <a href="#"> <img src="./images/nexus.png" alt=""></a>-->
<!--                    </div>-->
<!--                    <div class="showcase-img">-->
<!--                        <a href="#"> <img src="./images/display_img_1.png" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->


<!--            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">-->
<!--                <div class="showcase-block ">-->
<!--                    <div class="display-logo ">-->
<!--                        <a href="#"> <img src="./images/samsung.png" alt="">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="showcase-img">-->
<!--                        <a href="#"><img src="./images/display_img_3.png" alt="">                    </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">-->
<!--                <div class="showcase-block ">-->
<!--                    <div class="display-logo ">-->
<!--                        <a href="#"> <img src="./images/samsung.png" alt="">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="showcase-img">-->
<!--                        <a href="#"><img src="./images/display_img_3.png" alt="">                    </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->


<!--            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">-->
<!--                <div class="showcase-block ">-->
<!--                    <div class="display-logo ">-->
<!--                        <a href="#"> <img src="./images/samsung.png" alt="">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="showcase-img">-->
<!--                        <a href="#"><img src="./images/display_img_3.png" alt="">                    </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <div class="row product_flex">
        <?php
        if (!empty($allProduct)){
            foreach ($allProduct as $prodKey=>$product){
if ($prodKey==1){
    ?>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="showcase-block active">
            <div class="display-logo alignleft">
                <a href="#">  <img src="./images/iphone.png" alt="">
                </a>
            </div>
            <?=$product['title']?>
            <div class="showcase-img">

                <a href="#"> <img src="<?=\yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $product['image'] ?>" alt="" style="padding-left: 80px;"></a>
            </div>
        </div>
        <?php

        ?>
    </div>


 <?php
}else{
    ?>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="showcase-block">
            <!--                        <div class="display-logo ">-->
            <!--                            <a href="#"><img src="./images/htc.png" alt=""></a>-->
            <!--                        </div>-->
            <div class="showcase-img">
                <a href="#"><img src="<?=\yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $product['image'] ?>" alt=""></a>
            </div>
            <div>
                <div class="product-content">
                    <h5><a href="#" class="product-title"><?= $product['title']?></a></h5>

                </div>

            </div>
        </div>
    </div>


    <?php
}
            }
        }
        ?>
        </div>

<!--            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                <div class="showcase-block">-->
<!--                    <div class="display-logo ">-->
<!--                        <a href="#"><img src="./images/htc.png" alt=""></a>-->
<!--                     </div>-->
<!--                    <div class="showcase-img">-->
<!--                        <a href="#"><img src="./images/display_img_4.png" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                <div class="showcase-block">-->
<!--                    <div class="display-logo">-->
<!--                        <a href="#">  <img src="./images/alcatel.png" alt=""></a>-->
<!--                    </div>-->
<!--                    <div class="showcase-img">-->
<!--                        <a href="#"> <img src="./images/display_img_5.png" alt="">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                <div class="showcase-block">-->
<!--                    <div class="display-logo ">-->
<!--                        <a href="#"><img src="./images/pixel.png" alt=""></a>-->
<!--                    </div>-->
<!--                    <div class="showcase-img">-->
<!--                        <a href="#">    <img src="./images/display_img_6.png" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                <div class="showcase-block">-->
<!--                    <div class="display-logo ">-->
<!--                        <a href="#">  <img src="./images/vivo.png" alt=""></a>-->
<!--                    </div>-->
<!--                    <div class="showcase-img">-->
<!--                        <a href="#"><img src="./images/display_img_7.png" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

    </div>
</div>
<!-- /.mobile showcase -->
<!-- latest products -->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--            <div class="box">-->
<!--                <div class="box-head">-->
<!--                    <h3 class="head-title">Latest Product</h3>-->
<!--                </div>-->
<!--                <div class="box-body">-->
<!--                    <div class="row">-->
                        <!-- product -->
<!--                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                            <div class="product-block">-->
<!--                                <div class="product-img"><img src="./images/product_img_1.png" alt=""></div>-->
<!--                                <div class="product-content">-->
<!--                                    <h5><a href="#" class="product-title">Google Pixel <strong>(128GB, Black)</strong></a></h5>-->
<!--                                    <div class="product-meta"><a href="#" class="product-price">$1100</a>-->
<!--                                        <a href="#" class="discounted-price">$1400</a>-->
<!--                                        <span class="offer-price">20%off</span>-->
<!--                                    </div>-->
<!--                                    <div class="shopping-btn">-->
<!--                                        <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>-->
<!--                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- /.product -->
                        <!-- product -->
<!--                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                            <div class="product-block">-->
<!--                                <div class="product-img"><img src="./images/product_img_2.png" alt=""></div>-->
<!--                                <div class="product-content">-->
<!--                                    <h5><a href="#" class="product-title">HTC U Ultra <strong>(64GB, Blue)</strong></a></h5>-->
<!--                                    <div class="product-meta"><a href="#" class="product-price">$1200</a>-->
<!--                                        <a href="#" class="discounted-price">$1700</a>-->
<!--                                        <span class="offer-price">10%off</span>-->
<!--                                    </div>-->
<!--                                    <div class="shopping-btn">-->
<!--                                        <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>-->
<!--                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- /.product -->
                        <!-- product -->
<!--                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                            <div class="product-block">-->
<!--                                <div class="product-img"><img src="./images/product_img_3.png" alt=""></div>-->
<!--                                <div class="product-content">-->
<!--                                    <h5><a href="#" class="product-title">Samsung Galaxy Note 8</a></h5>-->
<!--                                    <div class="product-meta"><a href="#" class="product-price">$1500</a>-->
<!--                                        <a href="#" class="discounted-price">$2000</a>-->
<!--                                        <span class="offer-price">40%off</span>-->
<!--                                    </div>-->
<!--                                    <div class="shopping-btn">-->
<!--                                        <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>-->
<!--                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- /.product -->
                        <!-- product -->
<!--                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
<!--                            <div class="product-block">-->
<!--                                <div class="product-img"><img src="./images/product_img_4.png" alt=""></div>-->
<!--                                <div class="product-content">-->
<!--                                    <h5><a href="#" class="product-title">Vivo V5 Plus <strong>(Matte Black)</strong></a></h5>-->
<!--                                    <div class="product-meta"><a href="#" class="product-price">$1500</a>-->
<!--                                        <a href="#" class="discounted-price">$2000</a>-->
<!--                                        <span class="offer-price">15%off</span>-->
<!--                                    </div>-->
<!--                                    <div class="shopping-btn">-->
<!--                                        <a href="#" class="product-btn btn-like">-->
<!--                                            <i class="fa fa-heart"></i></a>-->
<!--                                        <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- /.product -->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- /.latest products -->
<!-- seller products -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-head">
                    <h3 class="head-title">Brands</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="product-carousel">
        <div class="box-body">
            <div class="row">
                <div class="owl-carousel owl-two owl-theme">
                    <!-- product -->
                    <?php
                    if (!empty($allBrands)){
                        foreach ($allBrands as $brands){
	                        ?>
	                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="product-block">
                                    <div class="product-img"><img src="./images/product_img_5.png" alt=""></div>
                                    <div class="product-content">
                                        <h5><a href="#" class="product-title"><?= $brands['title']?></a></h5>

                                    </div>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>




                    <?php
                        }
                    }
                    ?>

<!--                     product-->
<!--                    <div class="item">-->
<!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                            <div class="product-block">-->
<!--                                <div class="product-img"><img src="./images/product_img_6.png" alt=""></div>-->
<!--                                <div class="product-content">-->
<!--                                    <h5><a href="#" class="product-title">Apple iPhone 7 <strong>(256 GB, Black)</strong> </a></h5>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="item">-->
<!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                            <div class="product-block">-->
<!--                                <div class="product-img"><img src="./images/product_img_7.png" alt=""></div>-->
<!--                                <div class="product-content">-->
<!--                                    <h5><a href="#" class="product-title">Apple iPhone 6S <strong>(32GB, Gold)</strong> </a></h5>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!-- /.product -->
                    <!-- product -->
<!--                    <div class="item">-->
<!--                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                            <div class="product-block">-->
<!--                                <div class="product-img"><img src="./images/product_img_8.png" alt=""></div>-->
<!--                                <div class="product-content">-->
<!--                                    <h5><a href="#" class="product-title">Apple iPhone X <strong>(64 GB, Grey)</strong></a></h5>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- /.product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.seller products -->
<!-- featured products -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <div class="box-head">
                    <h3 class="head-title">Best Products</h3>
                </div>
                <div class="box-body">
                    <div class="row flex_bestProducts">
                        <!-- product -->
                        <?php
                       if (!empty($bestProducts)) {
                           foreach ($bestProducts as $bests){
                               ?>
                               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 productMyclass">
                                   <div class="product-block">
                                       <div class="product-img"><img src="./images/product_img_3.png" alt=""></div>
                                       <div class="product-content">
                                           <h5><a href="#" class="product-title"><?=$bests['title']?></a></h5>
                                           <div class="product-meta"><a href="#" class="product-price"><?=$bests['sale_prise']?></a>
                                               <a href="#" class="discounted-price"><?=$bests['price']?></a>

                                           </div>

                                       </div>
                                   </div>
                               </div>
                               <!--                        end-->

                        <?php
                           }
                       }


                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.featured products -->
<!-- cta -->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--            <div class="newsletter-wrapper">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-offset-5 col-lg-6 col-md-offset-5 col-md-6 col-sm-offset-5 col-sm-6 col-xs-12">-->
<!--                        <div class="newsletter-form">-->
<!--                            <h1>Subscribe To <strong>Get Discount &amp; Offers</strong></h1>-->
<!--                            <div class="input-group">-->
<!--                                <input type="text" class="form-control" placeholder="Search for...">-->
<!--                                <span class="input-group-btn">-->
<!--        <button type="button" class="btn btn-primary">Subscribe</button>-->
<!--      </span>-->
<!--                            </div>-->
<!--                            <!-- /input-group -->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->