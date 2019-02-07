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

	public function actionIndex( $slug ) {
		$category = Categories::findOne(['slug' => $slug]);
		if(!empty($category)){
			$id = $category->id;
			$products = Products::find()->where(['cat_id' => $id])->asArray()->all();
//			$brId=$products->id;
			$brand = Brands::find()->where(['cat_id' => $id])->asArray()->all();

//		$products = Products::find()->where( [ 'cat_id' => 'id' ] )->asArray()->all();
//		$brands = brands::find()->where( [ 'slug' => $slug ] )->asArray()->all();
			return $this->render( 'index', [
				'category' => $category,
				'products'=>$products,
				'brand'=>$brand,

			] );


		}else{
			echo "no product";
		}

	}
}