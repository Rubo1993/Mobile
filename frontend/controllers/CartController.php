<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.02.2019
 * Time: 12:05
 */
namespace frontend\controllers;
use common\models\Cart;
use yii\web\Controller;
use common\models\Products;
use Yii;
use yii\web\UploadedFile;
class CartController extends Controller {
	public function actionIndex() {
		$user = Yii::$app->user->id;
		if (!empty($user)){
			$get_cart = Cart::find()->with('product')->where(['user_id' => $user])->asArray()->all();
		}else{
			echo "empty";
		}
		return $this->render('index',[
			'get_cart'=>$get_cart,
		]);
	}
	public function actionAdd(){
		$id=\Yii::$app->request->get('add_product');
		$product=Products::findOne($id);
		$qty=\Yii::$app->request->get('quantity');
		if (!empty($id) && !empty($qty)){
			$user=Yii::$app->user->id;
			$cartProduct=Products::findOne($id);
			if (!empty($cartProduct)){
				$cart=Cart::findOne(['product_id'=>$cartProduct->id,'user_id'=>$user]);
				if (!empty($cart)){
					$cart->quantity+=$qty;
					$cart->save(false);
				}else{
					$add_cart=new Cart();
					$add_cart->product_id = $product['id'];
					$add_cart->user_id =  Yii::$app->user->id;
					$add_cart->quantity=$qty;
					$add_cart->save();
				}
			}
			$this->redirect('/cart');
		}else{
			?>
            <h1 id="empty_cart">Քարտը դատարկ է </h1>
			<?php
		}
	}
	public function actionDelete(){
		if (Yii::$app->request->get('user_id')){
			$user_id=\Yii::$app->request->get('user_id');
			if (!empty($user_id)){
				Cart::deleteAll(['user_id' => $user_id]);
			}
			$this->redirect('/cart');
		}
		if (Yii::$app->request->get('car_id')){
			$cart_id=\Yii::$app->request->get('car_id');
			if (!empty($cart_id)){
				Cart::deleteAll(['id' => $cart_id]);
			}
			$this->redirect('/cart');
		}
	}
}