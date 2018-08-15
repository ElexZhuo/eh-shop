<?php

namespace backend\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use common\models\Promotion;
use common\models\AdLoc;
use common\models\RefPromotionProduct;

/**
 * PromotionController implements the CRUD actions for Promotion model.
 */
class PromotionController extends BaseController
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
     * Lists all Promotion models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Promotion::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Promotion model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $adList = ArrayHelper::map(AdLoc::find()->all(),'id','tag');

        $ref_promotion_product = new ActiveDataProvider([
            'query' => RefPromotionProduct::find()->where(['promotion_id'=>$id]),
        ]);

        $oldpic = $model->pictures;
        if(Yii::$app->request->post('Promotion')){
            $post = ['Promotion' => $_POST['Promotion']];
            if($model -> load($post)){
                $image = UploadedFile::getInstance($model,'pictures');
                if(!is_null($image)){
                    $ext = $image->getExtension();
                    $imageName = time().rand(100,999).'.'.$ext;
                    $image->saveAs(IMG_PROMOTION_SAVE_PATH.$imageName);
                    $model->pictures = $imageName;
                }else{
                    $model->pictures = $oldpic;
                }
                $model->save();
            }
        }

        return $this->render('view', [
            'model' => $model,
            'adList' => $adList,
            'ref_promotion_product' => $ref_promotion_product,
        ]);
    }

    /**
     * Creates a new Promotion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Promotion();

        $adList = ArrayHelper::map(AdLoc::find()->all(),'id','tag');

        if ($model->load(Yii::$app->request->post())) {

            $image = UploadedFile::getInstance($model,'pictures');
            if(!is_null($image)){
                $ext = $image->getExtension();
                $imageName = time().rand(100,999).'.'.$ext;
                $image->saveAs(IMG_PROMOTION_SAVE_PATH.$imageName);
                $model->pictures = $imageName;
            }

            if($model->validate()){
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                Yii::$app->session->setFlash("error","添加失败");
            }

        }

        return $this->render('create', [
            'model' => $model,
            'adList' => $adList,
        ]);
    }

    /**
     * Updates an existing Promotion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $adList = ArrayHelper::map(AdLoc::find()->all(),'id','tag');
        $oldpic = $model->pictures;
        if ($model->load(Yii::$app->request->post()) ) {
            $image = UploadedFile::getInstance($model,'pictures');
            if(!is_null($image)){
                $ext = $image->getExtension();
                $imageName = time().rand(100,999).'.'.$ext;
                $image->saveAs(IMG_PROMOTION_SAVE_PATH.$imageName);
                $model->pictures = $imageName;
            }else{
                $model->pictures = $oldpic;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'adList' => $adList,
        ]);
    }

    /**
     * Deletes an existing Promotion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Promotion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Promotion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Promotion::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    public function actionDelRefProduct($id)
    {
        $model = RefPromotionProduct::findOne($id);
        $promotion_id = $model->promotion_id;
        $model->delete();

        return $this->redirect(['view','id'=>$promotion_id]);
    }
}
