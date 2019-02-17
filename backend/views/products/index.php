<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
//            'description:ntext',
            'price',
            'sale_prise',
            //'sku',
            //'quantity',
            //'available_stock',
            //'is_new',
            //'is_sale',
            //'image',
            //'is_feature',
            //'cat_id',
            //'brand_id',
            'slug',
            'reyting',
	        [
		        'attribute' => 'image',
		        'format' => 'raw',
		        'filter'=> '',
		        'value' => function($model){
			        return Html::img(\yii\helpers\Url::to('@image/products/'.$model->image),['width' => '70px','height' => '100px','class'=>'img']);
		        }
	        ] ,
            //'best',

//            ['class' => 'yii\grid\ActionColumn'],


	        [
		        'class' => 'yii\grid\ActionColumn',
		        'header'=>'Actions',
		        'headerOptions' => ['width' => '80'],
		        'template' => '{view} {update} {delete}',
		        'buttons' => [
//                    'update' => function ($url,$model,$key) {
//                         $url = \yii\helpers\Url::to(['/site?id='.$model->id]);
//                        return Html::a('<span class="glyphicon glyphicon-eye-close"></span>', $url);
//                    },
			        'link' => function ($url,$model,$key) {
				        // $url = \yii\helpers\Url::to(['/site?id='.$model->id]);
				        return Html::a('<span class="glyphicon glyphicon-eye-close"></span>', $url);
			        },
		        ],
	        ],




        ],
    ]); ?>

</div>
