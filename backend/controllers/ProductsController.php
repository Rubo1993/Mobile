<?php

namespace backend\controllers;

use common\models\Brands;
use Yii;
use common\models\Products;
use common\models\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\Categories;
use yii\helpers\ArrayHelper;
use yii\data\ActiveDataProvider;


/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
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
     * Lists all Products models.
     * @return mixed
     */




    public function actionIndex()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,

        ]);
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
	    $categories = Categories::find()->asArray()->all();
	    $categories = ArrayHelper::map($categories,'id','title');
        return $this->render('view', [
            'model' => $this->findModel($id),
	        'categories'=>$categories,

        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Products();

	    $categories = Categories::find()->asArray()->all();
	    $categories = ArrayHelper::map($categories,'id','title');

	    $brands = Brands::find()->asArray()->all();
	    $brands = ArrayHelper::map($brands,'id','title');

	    if ($model->load(Yii::$app->request->post()) && $model->save()) {
		    Yii::$app->session->setFlash('success','Ապրանքն ավելացված է');

		    $imgFile=UploadedFile::getInstance($model,'image');
        	if (!empty($imgFile)){
				$filePath = Yii::getAlias('@frontend') . '/web/images/uploads/products/';
		        $imgaName = Yii::$app->security->generateRandomString() . '.' . $imgFile->extension;
		        $path=$filePath.$imgaName;
		        if ($imgFile->saveAs($path)){
		        	$model->image = $imgaName;
		        	$model->save(['image']);
		        }
	        }

            return $this->redirect(['view', 'id' => $model->id]);
        }
	    $allbrands= Brands::find()->asArray()->all();

	    return $this->render('create', [
            'model' => $model,
		    'allbrands'=>$allbrands,
            'categories' => $categories,
            'brands' => $brands
        ]);
    }
    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
	    $categories = Categories::find()->asArray()->all();
	    $categories = ArrayHelper::map($categories,'id','title');
	    $brands = Brands::find()->asArray()->all();
	    $brands = ArrayHelper::map($brands,'id','title');
	    $model = $this->findModel($id);
	    $old_image = $model->image;

	    if ($model->load(Yii::$app->request->post()) && $model->save()) {
		    $imgFile=UploadedFile::getInstance($model,'image');
		    if (!empty($imgFile)){
			    $filePath = Yii::getAlias('@frontend') . '/web/images/uploads/products/';
			    $imgaName = Yii::$app->security->generateRandomString() . '.' . $imgFile->extension;
			    $path=$filePath.$imgaName;

			    if ($imgFile->saveAs($path)){
				    if (file_exists($old_image)){
			    		unset($old_image);
				    } else{
					    $model->image = $imgaName;
				    $model->save(['image']);
				    }
			    }
		    }else{
			    $model->image = $old_image;
			    $model->save(['image']);
		    }

		    return $this->redirect(['view', 'id' => $model->id]);
	    }





	    if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'categories'=>$categories,
	        'brands'=>$brands,
        ]);
    }








    /**
     * Deletes an existing Products model.
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
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {

        if (($model = Products::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }





}
