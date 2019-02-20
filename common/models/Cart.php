<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cart".
 *
 * @property int $id
 * @property int $product_id
 * @property int $user_id
 * @property int $quantity
 *
 * @property int $created_at
 * @property User $user
 * @property Products $product
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cart';
    }
//MyCart model

public function addToCart($product,$qty=1){

if (isset($_SESSION['cart'][$product->id])){
	$_SESSION['cart'][$product->id]['qty']+=$qty;
}else{
	$_SESSION['cart'][$product->id]=[
		'qty'=>$qty,
		'name'=>$product->title,
		'price'=>$product->price,
		'img'=>$product->image,
	];
}
$_SESSION['cart.qty']=isset($_SESSION['cart.qty'])?$_SESSION['cart.qty']+$qty * $product->price : $qty * $product->price;
}


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'user_id', 'quantity'], 'required'],
            [['product_id', 'user_id', 'quantity','created_at'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'user_id' => 'User ID',
            'quantity' => 'Quantity',
	        'created_at'=>'Created At'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Products::className(), ['id' => 'product_id']);
    }
}
