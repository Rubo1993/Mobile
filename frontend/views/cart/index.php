<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>
<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<div class="page-breadcrumb">
					<ol class="breadcrumb">
						<li><a href="<?= \yii\helpers\Url::to( '/' ) ?>">Գլխավոր</a></li>
                        <li><a href="<?= \yii\helpers\Url::to( 'product' ) ?>">Ապրանքներ</a></li>

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
						<h3 class="head-title">Իմ Զամբյուղը (<?=$count?>)</h3>
					</div>
					<!-- cart-table-section -->
					<div class="box-body">
						<div class="table-responsive">
							<div class="cart">
								<?php if (!empty($get_cart)){?>
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

									<?php
                                    foreach ($get_cart as $cart){
									?>

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
                                    <?php if (!empty($get_cart)){
                                        ?>
                                        <input type="submit" name="submit" value="remove_all">
                                    <?php
                                    }else{
                                        ?>
                                        <h1 class="red_empyt">Զամբյուղը դատարկ է</h1>
                                            <?php
                                    }
                                    ?>

                                </form>
							</div>
							<!-- /.cart-table-section -->
						</div>
					</div>
				</div>
				<?php if ($get_cart){?>
                <div class="orderdForm">
					<?php
					$username = strtoupper(Yii::$app->user->identity->username);
					$email = Yii::$app->user->identity->email;

					?>
					<?php $form=ActiveForm::begin()?>
					<?=$form->field($myorder,'name')->textInput(['readonly' => true, 'value' => $username]) ?>
					<?=$form->field($myorder,'email')->input('email', ['readonly' => true, 'value' => $email]) ?>
					<?=$form->field($myorder,'phone')->input('number')?>
					<?=$form->field($myorder,'address')->textInput() ?>
					<?=Html::submitButton('Պատվիրել',['class'=>'btn btn-success'])?>
					<?php $form=ActiveForm::end()?>
                </div>
				<a href="#" class="btn-link"><i class="fa fa-angle-left"></i> back to shopping</a>
			</div>

			<!-- cart-total -->

			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="box mb30">
					<div class="box-head">
						<h3 class="head-title">Մանրամասն</h3>
					</div>
					<div class="box-body">
						<div class=" table-responsive">
							<div class="pay-amount ">
								<table class="table mb20">
									<tbody>
                                    <tr>


                                        <th><span class="mb0" style="font-weight: 700;">Ապրանքի քանակ</span></th>
                                        <td style="font-weight: 700; color: #1c1e1e; "><?=$count?></td>

                                    </tr>
									<tr>
										<th><span>Առաքում</span></th>
										<td><strong class="text-green">Անվճար</strong></td>
									</tr>
									</tbody>
									<tbody>
									<tr>
										<th>
                                       <span>Ընդհանուր</span></th>
                                        <td><strong class=""><?= $total?> Դ</strong></td>
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
        <?php
        }?>
		<!-- /.cart-total -->

	</div>
</div>
<hr/>

