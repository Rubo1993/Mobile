<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mail".
 *
 * @property int $id
 * @property string $email
 * @property string $content
 * @property string $date
 *  * @property string $name

 */
class Mail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'content',], 'required'],
            [['date'], 'safe'],
            [['email', 'content','name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'content' => 'Content',
            'date' => 'Date',
	        'name'=>"Name",
        ];
    }
}
