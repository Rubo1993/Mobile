<?php

namespace backend\controllers;

use Yii;
use common\models\Brands;
use common\models\BrandsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\Categories;
use yii\helpers\ArrayHelper;


/**
 * BrandsController implements the CRUD actions for Brands model.
 */
class BrandsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Brands models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BrandsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
	    $categoriesIndex = Categories::find()->asArray()->all();
	    $categoriesIndex = ArrayHelper::map($categoriesIndex,'id','title');

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
	        'categoriesIndex'=>$categoriesIndex,
        ]);
    }

    /**
     * Displays a single Brands model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }







    /**
     * Creates a new Brands model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Brands();
	    $categories = Categories::find()->asArray()->all();
	    $categories = ArrayHelper::map($categories,'id','title');

	    if ($model->load(Yii::$app->request->post()) && $model->save()) {
		    $imgFile=UploadedFile::getInstance($model,'image');
		    if (!empty($imgFile)){
			    $filePath = Yii::getAlias('@frontend') . '/web/images/uploads/brands/';
			    $imgaName = Yii::$app->security->generateRandomString() . '.' . $imgFile->extension;
			    $path=$filePath.$imgaName;
			    if ($imgFile->saveAs($path)){
				    $model->image = $imgaName;
				    $model->save(['image']);
			    }
		    }

		    return $this->redirect(['view', 'id' => $model->id]);
	    }



        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
	        'categories'=>$categories,
        ]);



    }

    /**
     * Updates an existing Brands model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
	    $categories = Categories::find()->asArray()->all();
	    $categories = ArrayHelper::map($categories,'id','title');
$old_brand_img=$model->image;
	    if ($model->load(Yii::$app->request->post()) && $model->save()) {
		    $imgFile=UploadedFile::getInstance($model,'image');
		    if (!empty($imgFile)){
			    $filePath = Yii::getAlias('@frontend') . '/web/images/uploads/brands/';
			    $imgaName = Yii::$app->security->generateRandomString() . '.' . $imgFile->extension;
			    $path=$filePath.$imgaName;
			    if ($imgFile->saveAs($path)){
			    	if (file_exists($old_brand_img)){
			    		unset($old_brand_img);
				    }else{


				    $model->image = $imgaName;
				    $model->save(['image']);
				    }
			    }
		    }

		    return $this->redirect(['view', 'id' => $model->id]);
	    }

        return $this->render('update', [
            'model' => $model,
	        'categories' => $categories
        ]);
    }

    /**
     * Deletes an existing Brands model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Brands model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Brands the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Brands::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
