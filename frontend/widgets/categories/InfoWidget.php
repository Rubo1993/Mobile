<?php

namespace frontend\widgets\categories;

use common\models\Categories;

class InfoWidget extends \yii\bootstrap\Widget
{
	public $action;

	public function run(){

		if(!empty($this->action)){
			if($this->action == 'title'){
				$info = Info::find()->select('slug')->asArray()->one();
				return $info['slug'];
			}elseif($this->action == 'info'){
				$info = Info::find()->select('info')->asArray()->one();
				return $info['info'];
			}elseif($this->action == 'phone'){
				$info = Info::find()->select('phone')->asArray()->one();
				return $info['phone'];
			}elseif($this->action == 'currency'){
				$currency = Info::find()->select('currencies')->asArray()->one();
				if(!empty($currency)){
					$currency_info = "";
					$currency_list = explode(',',$currency['currencies']);
					$currency_info .= '<select class="selection-1" name="time">';

					foreach ($currency_list as $cur){
						$currency_info .= "<option>$cur</option>";
					}
					$currency_info .= "</select>";
					return $currency_info;
				}


			}
		}


	}

}