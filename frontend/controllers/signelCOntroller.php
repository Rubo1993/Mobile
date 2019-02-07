<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.02.2019
 * Time: 13:50
 */

namespace frontend\controllers;


use yii\web\Controller;

class signelCOntroller extends Controller {
public function actionIndex($slug,$name=''){
	return $this->render('index');
}
}