<?php


namespace backend\widgets\email;

use common\models\Mail;

class EmailWidget extends  \yii\bootstrap\Widget
{

    public $count;

    public function run()
    {

        if($this->count == 'count'){
            $count = Mail::find()->all();
            return count($count);
        }

        $messages = Mail::find()->asArray()->all();
        return $this->render('messages',[
            'messages' => $messages,
        ]);

    }
}