<?php //echo Yii::$app->request->get('add_product');?>
<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<div class="page-breadcrumb">
					<ol class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li><a href="/product">Product List</a></li>
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
<?php
if (!empty($get_cart)){
foreach ($get_cart as $cart){
?>
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






    <tr>
        <td><a href="#"><img class="cart_image" src="<?=\yii\helpers\Url::to(['/']) . 'images/uploads/products/' . $cart['product']['image'] ?>" alt=""></a>
            <span><a href="#"><?=$cart['product']['title']?></a></span>
        </td>
        <td><?=$cart['product']['price']?> Դ</td>
        <td>
            <div class="product-quantity">
                <div class="quantity">
                    <input type="number" class="input-text qty text" step="1" min="1" max="<?=$cart['product']['available_stock']?>" name="quantity" value="<?=$cart['quantity']?>" title="Qty" size="4" pattern="[0-9]*">
                </div>
            </div>
        </td>

        <td><?=($cart['product']['price'] * $cart['quantity'] )?> Դ</td>
        <form method="get" action="<?=\yii\helpers\Url::to(['/']) . 'cart/delete'?>">
            <input type="hidden" name="user_id" value="<?=$cart['product']['id']?>">
            <input type="hidden" name="car_id" value="<?=$cart['user_id']?>">
        <th scope="row"><input type="submit" value="X" class=" delet_btn"></th>
        </form>
    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <form method="get" action="<?=\yii\helpers\Url::to(['/']) . 'cart/delete'?>">
                                <input type="hidden" name="user_id" value="<?=$cart['product']['id']?>">
                                <input type="submit" name="submit" value="remove_all">
                            </form>



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
										<th>
											<span>Արժեք (2 items)</span></th>
										<td>$2400</td>
									</tr>
									<tr>
										<th>
											<span>Առաքմում</span></th>
										<td><strong class="text-green">Անվճար</strong></td>
									</tr>
									</tbody>
									<tbody>
									<tr>
										<th>
											<span class="mb0" style="font-weight: 700;">Amount Payable</span></th>
										<td style="font-weight: 700; color: #1c1e1e; ">5500</td>
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
	<?php
}
}
else{
	?>
    <h1>Քարտը դատարկ է</h1>
	<?php
}
?>