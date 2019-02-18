<div class="slider">

    <div class="owl-carousel owl-one owl-theme">


        <?php foreach ($slider as $slid){?>
        <div class="item">
            <div class="slider-img">
                <img src="<?=\yii\helpers\Url::to(['/']) . 'images/uploads/slider/'.$slid['image']?>" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-6 col-xs-12">
                        <div class="slider-captions">
                            <div class="brand-img">
<!--                                <img src="--><?//=\yii\helpers\Url::to(['/']) . 'images/uploads/slider/'.$slid['image']?><!--" alt="">-->
                            </div>
<!--                            <h1 class="slider-title">Red Mi <span>Y1</span></h1>-->
<!--                            <p class="hidden-xs">LED Selfie-light | Fingerprint sensor | Dedicated microSD card slot Snapdragon 435 octa-core processor </p>-->
<!--                            <p class="slider-price">$138.99 </p>-->
                            <a href="#" class="btn btn-primary btn-lg hidden-xs">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
       } ?>
<!--        <div class="item">-->
<!--            <div class="slider-img"><img src="--><?//=\yii\helpers\Url::to(['/']) . 'images/uploads/products/'?><!--" alt=""></div>-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-5 col-md-8 col-sm-6 col-xs-12">-->
<!--                        <div class="slider-captions">-->
<!--                            <div class="brand-img">-->
<!--                                <img src="./images/google_logo.png" alt="">-->
<!--                            </div>-->
<!--                            <h1 class="slider-title">Google Pixel 2</h1>-->
<!--                            <p class="hidden-xs">The latest Qualcomm Snapdragon 835 processor | Water-resistant metal unibody | Up to 7 hours of battery.</p>-->
<!--                            <p class="slider-price">$ 938.10</p>-->
<!--                            <a href="#" class="btn btn-primary btn-lg hidden-xs">Download Free Template</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item">-->
<!--            <div class="slider-img"><img src="./images/delNout.jpg" alt=""></div>-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-5 col-md-8 col-sm-6 col-xs-12">-->
<!--                        <div class="slider-captions">-->
<!--                            <div class="brand-img">-->
<!--                                <img src="./images/apple_logo.png" alt="">-->
<!--                            </div>-->
<!--                            <h1 class="slider-title">iphone 8 plus  </h1>-->
<!--                            <p class="hidden-xs">5.5 inch Retina HD Display | 12MP wide-angle cameras-->
<!--                                <br> | 64 GB &amp; 256 GB ROM Memory</p>-->
<!--                            <p class="slider-price">$759.64</p>-->
<!--                            <a href="#" class="btn btn-primary btn-lg hidden-xs">Download Now</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>
<!-- /.slider -->
<!-- mobile showcase -->
<div class="space-medium">
    <div class="container">
	    <?php  \yii\widgets\Pjax::begin(['enablePushState' => false]);?>
        <div class="row product_flex">
        <?php
        if (!empty($allProduct)){
            foreach ($allProduct as $prodKey=>$product){
if ($prodKey==1){
    ?>

    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="showcase-block active">
            <div class="display-logo alignleft">
                <a href="<?=\yii\helpers\Url::to(['/']) . 'product/single/'.$product['slug'] ?>">  <?=$product['title']?>
                </a>
            </div>

            <div class="showcase-img">

                <a href="<?=\yii\helpers\Url::to(['/']) . 'product/single/'.$product['slug']?>"> <img class="centre_product" src="<?=\yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $product['image'] ?>" alt="" style="padding-left: 80px;"></a>
                <div><a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a></div>
            </div>
        </div>
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
                <a href="<?=\yii\helpers\Url::to(['/']) . 'product/single/'.$product['slug']?>"><img src="<?=\yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $product['image'] ?>" alt=""></a>
            </div>
            <div>
                <div class="product-content">
                    <h5><a href="<?=\yii\helpers\Url::to(['/']) . 'product/single/'.$product['slug']?>" class="product-title"><?= $product['title']?></a></h5>
                  <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
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
        <div class="allproductPage">
            <a href="<?=\yii\helpers\Url::to(['/']) .'product'?>">ԲՈԼՈՐ ԱՊՐԱՆՔՆԵՐԸ</a>
        </div>
        <div class="paginationDIv">
		    <?php
		    echo \yii\widgets\LinkPager::widget(
			    [
				    'pagination' => $pagination,

			    ]);



		    ?>

        </div>

    </div>
</div>
<?php \yii\widgets\Pjax::end();?>
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
                                    <div class="brand_image">
                                        <a href="<?=\yii\helpers\Url::to(['/']) . 'product/index/'.$brands['slug']?>">
                                        <img src="<?=\yii\helpers\Url::to(['/']) . 'images/uploads/brands/'.$brands['image']?>" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="<?=\yii\helpers\Url::to(['/']) . 'product/index/'.$brands['slug']?>" class="product-title"><?= $brands['title']?></a></h5>

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
                                       <div class="product-img"><a href="<?=\yii\helpers\Url::to(['/']) . 'product/single/'.$bests['slug']?>"><img  src="<?=\yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $bests['image'] ?>" class="best_images" alt=""></a></div>
                                       <div class="product-content">
                                           <h5><a href="<?=\yii\helpers\Url::to(['/']) . 'product/single/'.$bests['slug']?>" class="product-title"><?=$bests['title']?></a></h5>
                                           <div class="product-meta"><a href="#" class="product-price"><?=$bests['sale_prise']?></a>
                                               <a href="#" class="discounted-price"><?=$bests['price']?></a>
                                               <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
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