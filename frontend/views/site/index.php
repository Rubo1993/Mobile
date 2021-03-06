<div class="slider">
    <div class="owl-carousel owl-one owl-theme">
		<?php foreach ($slider as $slid){?>
            <div class="item">
                <div class="slider-img">
                    <img src="<?=\yii\helpers\Url::to(['/']) . 'images/uploads/slider/'.$slid['image']?>" alt="" id="slide_img"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-8 col-sm-6 col-xs-12">
                            <div class="slider-captions">
                                <div class="brand-img">
                                </div>
<!--                                <div>-->
<!--                                    <h2 class="slider_description">--><?//=$slid['description']?><!--</h2>-->
<!---->
<!--                                </div>-->
<!--                                <a href="#" class="btn btn-primary btn-lg hidden-xs">Buy Now</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			<?php
		} ?>

    </div>
</div>
<!-- /.slider -->
<!-- mobile showcase -->
<div class="space-medium">
    <div class="container">
<!--        <form  method="get" action="--><?//= \yii\helpers\Url::to( [ 'product/search' ] )?><!--" class="myform">-->
<!--            <input type="search" class="searchinput" name="q">-->
<!--            <input type="submit" value="O" class="fa fa-search">-->
<!--        </form>-->
		<?php  \yii\widgets\Pjax::begin(['enablePushState' => false]);?>
        <div class="row product_flex">
			<?php
			if (!empty($allProduct)){
				foreach ($allProduct as $prodKey=>$product){
					if ($prodKey==1){
						?>
                        <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 animated bounceInUp">
                            <div class="showcase-block active ">
                                <div class="display-logo alignleft">
                                    <a href="<?=\yii\helpers\Url::to(['/']) . 'product/single/'.$product['slug'] ?>">  <?=$product['title']?>
                                    </a>
                                </div>

                                <div class="showcase-img">
                                    <a href="<?=\yii\helpers\Url::to(['/']) . 'product/single/'.$product['slug']?>"> <img class="centre_product" src="<?=\yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $product['image'] ?>" alt="" style="padding-left: 80px;"></a>
                                </div>
                            </div>
                        </div>
						<?php
					}else{
						?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 animated bounceInDown`">
                            <div class="showcase-block">

                                <div class="showcase-img">
                                    <a href="<?=\yii\helpers\Url::to(['/']) . 'product/single/'.$product['slug']?>"><img src="<?=\yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $product['image'] ?>" alt=""></a>
                                </div>
                                <div>
                                    <div class="product-content">
                                        <h5><a href="<?=\yii\helpers\Url::to(['/']) . 'product/single/'.$product['slug']?>" class="product-title"><?= $product['title']?></a></h5>
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
                                            <a href="<?=\yii\helpers\Url::to(['/']) . 'product/'.$brands['slug']?>">
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
                </div>
            </div>
        </div>
    </div>
</div>

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
                                                <!--                                               <form method="get" action="--><?//=\yii\helpers\Url::to(['/']) . 'cart/add/'?><!--">-->
                                                <!--                                                   <input type="hidden" name="add_product" value="--><?//=$bests['id']?><!--">-->
                                                <!--                                                  <i class="fa fa-shopping-cart myIcon"></i><input type="submit" name="submit" class="product-btn btn-cart myBut sendBut add_to_cart" value="">-->
                                                <!--                                               </form>-->
                                                <!--                                               <a href="--><?//=\yii\helpers\Url::to(['/']) . 'cart/add'.'/'?><!--" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>-->
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
