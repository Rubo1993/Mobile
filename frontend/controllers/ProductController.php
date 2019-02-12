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
use yii\web\NotFoundHttpException;

class ProductController extends controller {

	public function actionIndex( $slug = '',$brand = "" ) {
		$category = Categories::find()->asArray()->all();
		$products = Products::find()->asArray()->all();
		$brand    = Brands::find()->asArray()->all();

		if ( !empty( $slug ) ) {
			$cat    = Categories::findOne( [ 'slug' => $slug ] );
			$brands = Brands::findOne( [ 'slug' => $brand ] );
			if ( ! empty( $cat ) ) {
				$id       = $cat->id;
				$products = Products::find()->where( [ 'cat_id' => $id ] )->asArray()->all();
				$brand    = Brands::find()->where( [ 'cat_id' => $id ] )->asArray()->all();

				return $this->render( 'index', [
					'category' => $category,
					'products' => $products,
					'brand'    => $brand,

				] );
			}
		}
		if ( ! empty( $cat ) ) {
			$id       = $cat->id;
			$products = Products::find()->where( [ 'cat_id' => $id ] )->asArray()->all();
			$brand    = Brands::find()->where( [ 'cat_id' => $id ] )->asArray()->all();

			return $this->render( 'index', [
				'category' => $category,
				'products' => $products,
				'brand'    => $brand,

			] );

			return $this->render( 'index', [
				'category' => $category,
				'brand'    => $brand,
				'products' => $products,

			] );

		}
	}

	public function actionSingle( $slug = '' ) {
		$products = Products::findOne( [ 'slug' => $slug ] );

		return $this->render( 'single', [
			'products' => $products,
		] );
	}

//	public function actionAllproduct( $slug = '' ) {
//		$allcategories    = Categories::find()->asArray()->all();
//		$allproducts      = Products::find()->asArray()->all();
//		$allbrand         = Brands::find()->asArray()->all();
//		$filterCategories = Categories::findOne( [ 'slug' => $slug ] );
//		if ( ! $filterCategories ) {
//			throw new NotFoundHttpException();
//		}
//		$catId         = $filterCategories->id;
//		$filterProduct = Products::find()->where( [ 'cat_id' => $catId ] )->asArray()->all();
//
//
//		return $this->render( 'allproduct', [
//			'allcategories' => $allcategories,
//			'allproducts'   => $allproducts,
//			'allbrand'      => $allbrand,
//			'filterProduct' => $filterProduct,
//		] );
//	}


}