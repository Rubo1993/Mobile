<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BrandsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Brands';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="brands-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Brands', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',
	        [
		        'attribute' => 'image',
		        'format' => 'raw',
		        'filter'=> '',
		        'value' => function($model){
			        return Html::img(\yii\helpers\Url::to('@image/brandsgi/'.$model->image),['width' => '70px','height' => '100px','class'=>'img']);
		        }
	        ] ,
            'cat_id',
            //'slug',
// $form->field($model, 'cat_id')->dropDownList($categories,['prompt' => 'Please select brand']),

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
