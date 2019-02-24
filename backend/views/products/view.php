<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Products */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description:ntext',
            'price',
            'sale_prise',
            'sku',
            'quantity',
            'available_stock',
	        [
		        'attribute'=>'is_new',
		        'value'=>function($data){
			        return !$data->is_new ? '<span class="text-danger">no</span>' : '<span class="text-success">yes</span>';
		        },
		        'format'=>'html',
	        ],
	        [
		        'attribute'=>'is_sale',
		        'value'=>function($data){
			        return !$data->is_sale ? '<span class="text-danger">no</span>' : '<span class="text-success">yes</span>';
		        },
		        'format'=>'html',
	        ],
            'image',
            'is_feature',
//            'cat_id',
	        [
		        'attribute' => 'cat_id',
		        'filter' => '',
		        'value' => function($model){
			        return \common\models\Categories::find()->where(['id' => $model->cat_id])->one()->title;
		        }
	        ] ,
	        [
		        'attribute'=>'best',
		        'value'=>function($data){
			        return !$data->best ? '<span class="text-danger">no</span>' : '<span class="text-success">yes</span>';
		        },
		        'format'=>'html',
	        ],
            'reyting',
        ],
    ]) ?>

</div>
