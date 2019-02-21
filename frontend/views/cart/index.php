<!--<div class="header-wrapper">-->
<!--	<div class="container">-->
<!--		<div class="row">-->
<!--			<!-- logo -->
<!--			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-8">-->
<!--				<div class="logo">-->
<!--					<a href="index.html"><img src="./images/logo.png" alt=""> </a>-->
<!--				</div>-->
<!--			</div>-->
<!--			<!-- /.logo -->
<!--			<!-- search -->
<!--			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">-->
<!--				<div class="search-bg">-->
<!--					<input type="text" class="form-control" placeholder="Search Here">-->
<!--					<button type="Submit"><i class="fa fa-search"></i></button>-->
<!--				</div>-->
<!--			</div>-->
<!--			<!-- /.search -->
<!--			<!-- account -->
<!--			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">-->
<!--				<div class="account-section">-->
<!--					<ul>-->
<!--						<li><a href="#" class="title hidden-xs">My Account</a></li>-->
<!--						<li class="hidden-xs">|</li>-->
<!--						<li><a href="#" class="title hidden-xs">Register</a></li>-->
<!--						<li><a href="#" class="title"><i class="fa fa-shopping-cart"></i>   <sup class="cart-quantity">1</sup></a>-->
<!--						</li>-->
<!--					</ul>-->
<!--				</div>-->
<!--				<!-- /.account -->
<!--			</div>-->
<!--			<!-- search -->
<!--		</div>-->
<!--	</div>-->
<!--	<!-- navigation -->
<!--	<div class="navigation">-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--					<!-- navigations-->
<!--					<div id="navigation">-->
<!--						<ul>-->
<!--							<li class="active"><a href="index.html">Home</a></li>-->
<!--							<li class="has-sub"><a href="#">Mobiles</a>-->
<!--								<ul>-->
<!--									<li><a href="product-list.html">Mobile List</a></li>-->
<!---->
<!--									<li><a href="product-single.html">Mobile Single </a></li>-->
<!--								</ul>-->
<!--							</li>-->
<!--							<li><a href="about.html">About</a>-->
<!--							</li>-->
<!--							<li class="has-sub"><a href="#">Pages</a>-->
<!--								<ul>-->
<!--									<li><a href="checkout.html">Checkout Form</a></li>-->
<!--									<li><a href="cart.html">Cart</a> </li>-->
<!--									<li><a href="login-form.html">Login</a> </li>-->
<!--									<li><a href="signup-form.html">Signup</a> </li>-->
<!--									<li><a href="404-page.html">404-page</a> </li>-->
<!--									<li><a href="styleguide.html">styleguide</a> </li>-->
<!--								</ul>-->
<!--							</li>-->
<!--							<li class="has-sub"><a href="#">Blog</a>-->
<!--								<ul>-->
<!--									<li><a href="blog-default.html">Blog Default</a></li>-->
<!--									<li><a href="blog-single.html">Blog Single</a></li>-->
<!--								</ul>-->
<!--							</li>-->
<!--							<li><a href="contact-us.html">Contact Us</a>-->
<!--							</li>-->
<!--							<li><a href="template-feature.html">Template Feature</a>-->
<!--							</li>-->
<!--						</ul>-->
<!--					</div>-->
<!--				</div>-->
<!--				<!-- /.navigations-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
<!-- /. header-section-->
<!-- page-header -->

<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<div class="page-breadcrumb">
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li>Product List</li>
						<li>Product Single</li>
						<li>Cart</li>
					</ol>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- /.page-header-->
<!-- cart-section -->
<div class="space-medium">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="box">
					<div class="box-head">
						<h3 class="head-title">My Cart (02)</h3>
					</div>
					<!-- cart-table-section -->
					<div class="box-body">
						<div class="table-responsive">
							<div class="cart">
								<table class="table table-bordered ">
									<thead>
									<tr>
										<th>
											<span>Ապրանք</span></th>
										<th>
											<span>Գին</span></th>
										<th>
											<span>Քանակ</span></th>
										<th>
											<span>Ընդհանուր</span></th>
										<th>
										</th>
									</tr>
									</thead>
									<tbody>
									<?php if (!empty($get_cart)){

									foreach ($get_cart as $cart){

//										$total =  ($cart['product']['sale_prise'] + $total)  * $cart['quantity'];
//										var_dump( $total);

//										$total = ( $cart['product']['sale_prise'] + $total ) * $cart['quantity'];

									?>
<?//=$total?>
        <tr>
			<td><a href="#"><img class="cart_image" src="<?= \yii\helpers\Url::to( [ '/' ] ) . 'images/uploads/products/' . $cart['product']['image'] ?>" alt=""></a>
				<span><a href="#"><?= $cart['product']['title'] ?></a></span>
			</td>
	        <?php if (!empty($cart['product']['sale_prise'])){?>
                <td><?=$cart['product']['sale_prise']?> Դ</td>
		        <?php
	        }else{ ?>
                <td><?=$cart['product']['prise']?> Դ</td>
            <?php
	        }?>
			<td>
				<div class="product-quantity">
					<div class="quantity">
                        <input type="number" class="input-text qty text" step="1" min="1" max="<?= $cart['product']['available_stock'] ?>" name="quantity" value="<?= $cart['quantity'] ?>" title="Qty" size="4" pattern="[0-9]*">
					</div>
				</div>
			</td>
			<td>
				<?= ( $cart['product']['sale_prise'] * $cart['quantity'] ) ?> Դ
                <form method="get" action="<?= \yii\helpers\Url::to( [ '/' ] ) . 'cart/delete' ?>">
                    <input type="hidden" name="car_id" value="<?= $cart['id'] ?>">
            <th scope="row"><input type="submit" value="X" class=" delet_btn">
            </th>
            </form>

            </td>


        </tr>

									<?php	}
									}


									?>





									</tbody>
								</table>
                                <form method="get" action="<?= \yii\helpers\Url::to( [ '/' ] ) . 'cart/delete' ?>">
                                    <input type="hidden" name="user_id" value="<?= Yii::$app->user->id ?>">
                                    <input type="submit" name="submit" value="remove_all">
                                </form>
							</div>
							<!-- /.cart-table-section -->
						</div>
					</div>
				</div>
				<a href="#" class="btn-link"><i class="fa fa-angle-left"></i> back to shopping</a>
			</div>
			<!-- cart-total -->
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="box mb30">
					<div class="box-head">
						<h3 class="head-title">Price Details</h3>
					</div>
					<div class="box-body">
						<div class=" table-responsive">
							<div class="pay-amount ">
								<table class="table mb20">
									<tbody>
                                    <tr>
                                        <th><span>Ընդհանուր</span></th>
                                        <td><strong class=""><?= $total?> Դ</strong></td>
                                    </tr>
									<tr>
										<th><span>Առաքում</span></th>
										<td><strong class="text-green">Անվճար</strong></td>
									</tr>
									</tbody>
									<tbody>
									<tr>
										<th>
											<span class="mb0" style="font-weight: 700;">Amount Payable</span></th>
										<td style="font-weight: 700; color: #1c1e1e; ">$2400</td>
									</tr>
									</tbody>
								</table>
							</div>
							<button class="btn btn-primary btn-block">Proceed To Checkout</button>
						</div>
					</div>
				</div>
				<!-- coupon-section -->
				<div class="box mb30">
					<div class="box-head">
						<h3 class="head-title">Coupons &amp; Offers</h3>
					</div>
					<div class="box-body">
						<form>
							<div class="coupon-form">
								<input type="text" name="coupon_code" class="form-control" id="coupon_code" value="" placeholder="Coupon code">
								<input type="submit" class="btn btn-primary btn-block" name="apply_coupon" value="Apply coupon">
							</div>
						</form>
					</div>
				</div>
				<!-- /.coupon-section -->
			</div>
		</div>
		<!-- /.cart-total -->
	</div>
</div>
