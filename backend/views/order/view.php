<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Order;
use common\models\OrderItems;

/* @var $this yii\web\View */
/* @var $model common\models\Order */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <h1>Պատվեր №<?=$model->id?></h1>

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
            'created_at',
            'updated_at',
            'qty',
            'sum',
	        [
		        'attribute'=>'status',
		        'value'=>function($data){
			        return !$data->status ? '<span class="text-danger">Ակտիվ</span>' : '<span class="text-danger">Ստուգված</span>';
		        },
		        'format'=>'html',
	        ],
            'name',
            'email:email',
            'phone',
            'address',
        ],
    ]) ?>

<?php

$items = Orderitems::find()->where(['order_id' => $model->id])->asArray()->all();
?>

    <div class="table-responsive">
        <div class="cart">

            <table class="table table-bordered " style="border: 1px solid black;">
                <thead>
                <tr>
                    <th style="border: 1px solid black ;">
                        <span>Ապրանք</span></th>
                    <th style="border: 1px solid black ;">
                        <span>Քանակ</span></th>
                    <th style="border: 1px solid black ;">
                        <span>Գին</span></th>

<!--                    <th>-->
<!--                        <span>Ընդհանուր</span></th>-->
<!--                    <th>-->
<!--                        Ընդհանուր արժեք-->
                    </th>
                </tr>
                </thead>
                <tbody>

				<?php
				foreach ($items as $item){
					?>

                    <tr>
<!--                        <td><a href="#"><img class="cart_image" src="--><?//= \yii\helpers\Url::to( [ '/' ] ) . 'images/uploads/products/' . $item['product']['image'] ?><!--" alt=""></a>-->
                            <td><a href="<?=\yii\helpers\Url::to(['/product/index','id'=>$item['product_id']])?>"><?= $item['name'] ?></a></td>
                        <td><?=$item['qty_item']?></td>
                        <td><?=$item['price']?>Դ</td>
                        <td><?=$item['sum_item']?>Դ</td>



                    </tr>

				<?php	}
				?>
                </tbody>
            </table>

        </div>
        <!-- /.cart-table-section -->
    </div>
</div>
