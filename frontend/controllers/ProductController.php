<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04.02.2019
 * Time: 20:28
 */

namespace frontend\controllers;

use common\models\Brands;
use common\models\Categories;
use yii\web\controller;
use common\models\Products;

class ProductController extends controller {

	public function actionIndex( $cat ) {
		$products = Products::find()->where( [ 'cat_id' => $cat ] )->asArray()->all();
		$category = Categories::find()->where( [ 'id' => $cat ] )->asArray()->one();

		return $this->render( 'index', [
			'products' => $products,
			'category' => $category,
		] );
	}


	public function actionBuffers() {
		return $this->render( "buffers" );
	}

	public function actionTelephone() {
		$telProduct  = Products::find()->asArray()->all();
		$telCategory = Categories::find()->where( [ 'id' => '6' ] )->asArray()->all();
		$telBrand    = Brands::find()->where( [ 'cat_id' => '6' ] )->asArray()->all();

		return $this->render( "telephone", [
			'telephones'  => $telProduct,
			'telCategory' => $telCategory,
			'telBrand'    => $telBrand,
		] );

	}

	public function actionAccessories() {
		$accesProduct  = Products::find()->asArray()->all();
		$accesCategory = Categories::find()->where( [ 'id' => '8' ] )->asArray()->all();
		$accesBrand    = Brands::find()->where( [ 'cat_id' => '8' ] )->asArray()->all();

		return $this->render( "accessories", [
			'accesProduct'  => $accesProduct,
			'accesCategory' => $accesCategory,
			'accesBrand'    => $accesBrand,
		] );
	}

	public function actionNotebooke() {
		$notProduct  = Products::find()->asArray()->all();
		$notCategory = Categories::find()->where( [ 'id' => '7' ] )->asArray()->all();
		$notBrand    = Brands::find()->where( [ 'cat_id' => '7' ] )->asArray()->all();

		return $this->render( "notebooke", [
			'notProduct'  => $notProduct,
			'notCategory' => $notCategory,
			'notBrand'    => $notBrand,
		] );
	}

}