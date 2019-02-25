<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box">
                <!-- product-description -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 single_half">
                            <div id="slideshow"><img src="<?= \yii\helpers\Url::to( [ '/' ] ) . 'images/uploads/products/' . $products['image'] ?>" alt=""></div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="product-single">
                                <h2><?php echo $products['title'] ?></h2>
                                <div class="product-rating">
									<?php
									if ( ! empty( $products['reyting'] ) ) {


										for ( $i = 0; $i < $products['reyting']; $i ++ ) {
											?>
                                            <span><i class="fa fa-star"></i></span>
											<?php
										}
										?>
										<?php for ( $i = 0; $i < ( 5 - $products['reyting'] ); $i ++ ) {
											?>
                                            <span><i class="fa fa-star-o"></i></span>                                        <?php
										} ?>
                                        <span class="text-secondary">&nbsp;(<?= $products['reyting'] . "Review Stars" ?>
                                            )</span>
										<?php
									} else {
										echo "no reyting";
									}
									?>
                                </div>
                                <p class="product-price" style="font-size: 38px;"><?= $products['sale_prise'] ?>Դ
                                    <strike><?= $products['price'] ?>Դ</strike></p>
                                <p><?= $products['description'] ?></p>
                                <form method="get" action="<?= \yii\helpers\Url::to( [ '/' ] ) . 'cart/add' ?>">
                                    <div class="product-quantity">
										<?php if ( ! empty( $products['quantity'] ) ) { ?>
                                        <h5>Քանակ</h5>
                                        <div class="quantity mb20">
                                            <input type="number" class="input-text qty text" step="1" min="0"
                                                   max="<?= $products['available_stock'] ?>"
                                                   name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*">
                                        </div>
                                        <input type="hidden" name="add_product" value="<?= $products['id'] ?>">
                                        <input type="hidden" name="product_qty" value="<?= $products['quantity'] ?>">
                                        <input type="submit" class="btn btn-default" name="add_to_cart" value=" Add to cart">
                                </form>
								<?php
								}else{
								?>
                                <h4 class="no_prod_qty">Ապրանքն առկա չէ<h4>
										<?php
										}
										?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>