<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.02.2019
 * Time: 12:05
 */

namespace frontend\controllers;


use yii\web\Controller;
use common\models\Products;

class CartController extends Controller {

	public function actionIndex() {
return $this->render('index');

	}


	public function actionAdd(){




		$this->redirect('/cart');
	}
}