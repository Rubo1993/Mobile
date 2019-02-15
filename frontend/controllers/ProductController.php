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
use common\models\Slider;
use yii\web\controller;
use common\models\Products;
use yii\web\NotFoundHttpException;

class ProductController extends controller {

	public function actionIndex( $slug = '', $brand = "" ) {
		$category = Categories::find()->asArray()->all();

		$products = Products::find();

		if ( $slug && $slug != 'index' ) {
			$cat = Categories::findOne( [ 'slug' => $slug ] );

			if ( ! empty( $cat ) ) {
				$products    = $products->where( [ 'cat_id' => $cat->id ] );
				$brand_model = Brands::find()->where( [ 'cat_id' => $cat->id ] )->all();
			}
		}

		if ( ! isset( $brand_model ) ) {
			$brand_model = Brands::find()->asArray()->all();
		}

		if ( $brand ) {
			$current_brand = Brands::findOne( [ 'slug' => $brand ] );
			if ( $current_brand ) {
				$products = Products::find()->andWhere( [ 'brand_id' => $current_brand->id ] );
			}
		}

		$products = $products->asArray()->all();

		return $this->render( 'index', [
			'category' => $category,
			'brand'    => $brand_model,
			'products' => $products,
			'slug'     => $slug ? $slug : 'index',

		] );
	}

	public function actionSingle( $slug = '' ) {
		$products = Products::findOne( [ 'slug' => $slug ] );

		return $this->render( 'single', [
			'products' => $products,
		] );
	}


}