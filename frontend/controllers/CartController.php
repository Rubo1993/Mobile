<?php

namespace frontend\controllers;

use common\models\Cart;
use function foo\func;
use yii\web\Controller;
use common\models\Products;
use Yii;
use yii\web\UploadedFile;
use common\models\Order;
use common\models\OrderItems;

class CartController extends Controller {
	public function actionIndex() {
		$user = Yii::$app->user->id;
		if ( ! empty( $user ) ) {

			$get_cart = Cart::find()->with( 'product' )->where( [ 'user_id' => $user ] )->asArray()->all();
			$total    = 0;
			$count    = 0;
			$myorder  = new Order();
			$mycart   = Cart::find()->with('product')->where(['user_id'=>$user])->asArray()->all();
			if ( ! empty( $get_cart ) ) {
				foreach ( $get_cart as $c ) {
					if ( ! empty( $c['product']['sale_prise'] ) ) {
						$total = ( $c['product']['sale_prise'] + $total ) * $c['quantity'];
					} else {
						$total = ( $c['product']['price'] + $total ) * $c['quantity'];
					}
					if ( ! empty( $c['quantity'] ) ) {
						$count += $c['quantity'];
					}
				}
			}
			if ( $myorder->load( Yii::$app->request->post() ) ) {
				$myorder->qty = $count;
				$myorder->sum = $total;

				if ( $myorder->save( false ) ) {
					$product=Products::find()->all();
					foreach ($product as $prod){
						$prod->quantity-=$myorder['qty'];
						$prod->save();
                    }

//		if (!empty($myorder)){
//
//		    $ordItem=OrderItems::find()->all();
//		    foreach ($ordItem as $ordit){
//			    var_dump($ordit['']);
//            }
//		    $del = Products::find()->with( 'order_items' )->where( [ 'id' => 'id' ] )->asArray()->all();
//
//
////                foreach ($product as $prod){
////	                foreach ($mycart as $my){
////		        $prod->quantity-=$my['quantity'];
////			    $prod->available_stock-=$my['quantity'];
////			    $prod->save();
////            }
////			}
//
//
//		}
				    $this->saveOrederItems($mycart,$myorder->id);
//					\Yii::$app->mailer->compose('order',['cart' => $mycart])
//					                  ->setFrom(['arm_phone@mail.ru' => 'Armphone.am'])
//					                  ->setTo($myorder->email)
//					                  ->setSubject('Mobile')
//					                  ->send();

				    Yii::$app->session->setFlash( 'success', 'Պատվերն ընդունված է' );
					foreach ($get_cart as $carts){
					   $delId=$carts['user_id'];
                        Cart::deleteAll(['user_id' => $delId]);
                    }

					return $this->refresh();
				} else {
					Yii::$app->session->setFlash( 'error', 'Ошибка оформления заказа ' );
				}
			}
		}
		return $this->render( 'index', [
			'myorder'  => $myorder,
			'mycart'   => $mycart,
			'get_cart' => $get_cart,
			'total'    => $total,
			'count'    => $count,
		] );
	}

	protected function saveOrederItems($items, $order_id)
	{
		foreach ($items as $id => $item) {

			$order_items = new OrderItems();
			$order_items->order_id = $order_id;
			$order_items->product_id = $item['product_id'];
			$order_items->name = $item['product']['title'];
			$order_items->price = $item['product']['price'];
			$order_items->qty_item = $item['quantity'];
			$order_items->sum_item = $item['product']['price'] * $item['quantity'];
			$order_items->save();
		}
	}
	public function actionAdd() {
		$id      = \Yii::$app->request->get( 'add_product' );
		$product = Products::findOne( $id );
		$qty     = \Yii::$app->request->get( 'quantity' );
		if ( ! empty( $id ) && ! empty( $qty ) ) {
			$user        = Yii::$app->user->id;
			$cartProduct = Products::findOne( $id );
			if ( ! empty( $cartProduct ) ) {
				$cart = Cart::findOne( [ 'product_id' => $cartProduct->id, 'user_id' => $user ] );
				if ( ! empty( $cart ) ) {
					$cart->quantity += $qty;
					$cart->save( false );
				} else {
					$add_cart             = new Cart();
					$add_cart->product_id = $product['id'];
					$add_cart->user_id    = Yii::$app->user->id;
					$add_cart->quantity   = $qty;
					$add_cart->save();
				}
			}
			$this->redirect( '/cart' );
		} else {
			?>
            <h1 id="empty_cart">Քարտը դատարկ է </h1>
			<?php
		}
	}

	public function actionDelete() {
		if ( Yii::$app->request->get( 'user_id' ) ) {
			$user_id = \Yii::$app->request->get( 'user_id' );
			if ( ! empty( $user_id ) ) {
				Cart::deleteAll( [ 'user_id' => $user_id ] );
			}
			$this->redirect( '/cart' );
		}
		if ( Yii::$app->request->get( 'car_id' ) ) {
			$cart_id = \Yii::$app->request->get( 'car_id' );
			if ( ! empty( $cart_id ) ) {
				Cart::deleteAll( [ 'id' => $cart_id ] );
			}
			$this->redirect( '/cart' );
		}
	}
}



