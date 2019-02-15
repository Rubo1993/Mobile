<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="#">Գլխավոր</a></li>
                        <li>Product List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header-->
<!-- product-list -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <!-- sidenav-section -->
                <div id='cssmenu'>
                    <ul>
                        <li class='has-sub'><a href='#'>CATEGORY</a>
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
                        <li class='has-sub'><a href='#'>Brand</a>
                            <ul>
								<?php

								if ( ! empty( $brand ) ) {
									foreach ( $brand as $br ) {

										?>

                                        <li class="categoryList"><a
                                                    href='<?= \yii\helpers\Url::to( [ '/' ] ) . 'product/' . $slug . '/' . $br['slug'] ?>'><?= $br['title'] ?></a>
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
                                <div class="product-block">
                                    <div class="product-img"><img
                                                src="<?= \yii\helpers\Url::to( [ '/' ] ) . 'images/uploads/products/' . $product['image'] ?>"
                                                alt=""></div>
                                    <div class="product-content">
                                        <h5>
                                            <a href="<?= \yii\helpers\Url::to( [ '/' ] ) . 'product/single/' . $product['slug'] ?>"
                                               class="product-title"><?= $product['title'] ?></a></h5>
                                        <div class="product-meta"><a href="#"
                                                                     class="product-price"><?= $product['sale_prise'] ?></a>
                                            <a href="#" class="discounted-price"><?= $product['price'] ?></a>
                                            <span class="offer-price">20%off</span>
                                        </div>
                                        <div class="shopping-btn">
                                            <a href="#" class="product-btn btn-like"><i class="fa fa-heart"></i></a>
                                            <a href="#" class="product-btn btn-cart"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<?php
						}
					}

					?>

                    <!-- /.product -->
                    <!-- product -->

                    <!-- /.product -->
                </div>
                <div class="row">
                    <!-- pagination start -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="st-pagination">
                            <ul class="pagination">
                                <li><a href="#" aria-label="previous"><span aria-hidden="true">Previous</span></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- pagination close -->
                </div>
            </div>
        </div>
    </div>
</div>