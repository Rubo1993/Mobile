<?php


namespace backend\widgets\order;
use Yii;
use common\models\Order;

class OrderWidget extends \yii\bootstrap\Widget {

    public function run() {
        $orders = Order::find()->count();
        return $orders;
    }

}