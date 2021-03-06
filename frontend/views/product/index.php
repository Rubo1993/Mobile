<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="<?= \yii\helpers\Url::to('/')?>">Գլխավոր</a></li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <!-- sidenav-section -->
                <div id='cssmenu' class="animated bounceln">
                    <ul>
                        <li class='has-sub'><a href='#'>Տեսականի</a>
                            <ul>
								<?php
								if ( ! empty( $category ) ) {
									foreach ( $category as $cat ) {
										?>
                                        <li class="categoryList"><a
                                                    href='<?= \yii\helpers\Url::to( [ '/' ] ) . 'product/' . $cat['slug'] ?> '><?= $cat['title'] ?></a>
                                        </li>
										<?php
									}
								}
								?>
                            </ul>
                        </li>
                        <li class='has-sub'><a href='#'>Ապրանքանիշերը</a>
                            <ul>
								<?php
								if ( ! empty( $brand ) ) {
									foreach ( $brand as $br ) {
										?>

                                        <li class="categoryList"><a href='<?= \yii\helpers\Url::to( [ '/' ] ) . 'product/' . $slug . '/' . $br['slug'] ?>'><?= $br['title'] ?></a>
                                        </li>

										<?php
									}
								}
								?>
                            </ul>
                        </li>

                    </ul>
                </div>


                <!-- /.sidenav-section -->
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">

                <div class="row">
                    <!-- product -->
					<?php
					if ( ! empty( $products ) ) {
						foreach ( $products as $product ) {
							?>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb30">
                                <div class="product-block animated bounceInDown">
                                    <div class="product-img productMyClass ">

                                        <a href="<?=\yii\helpers\Url::to(['/']) . 'product/single/'.$product['slug']?>">
                                        <img src="<?= \yii\helpers\Url::to( [ '/' ] ) . 'images/uploads/products/' . $product['image'] ?>" alt="">
                                            <a/>
                                    </div>

                                    <div class="product-content">
                                        <h5>
                                            <a href="<?= \yii\helpers\Url::to( [ '/' ] ) . 'product/single/' . $product['slug'] ?>" class="product-title"><?= $product['title'] ?></a></h5>

                                        <div class="product-meta"><a href="#" class="product-price"><?= $product['sale_prise'] ?> Դ</a>
                                            <a href="#" class="discounted-price">
												<?= $product['price'] ?>Դ
                                            </a>

                                        </div>
<!--                                        <div class="shopping-btn">-->
<!--                                            <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>-->
<!--                                            <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>-->
<!--                                        </div>-->
                                    </div>
                                </div>
                            </div>
							<?php
						}
					}
					?>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
