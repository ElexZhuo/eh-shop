<?php
/**
 * Created by PhpStorm.
 * User: Elex.Zhuo
 * Date: 2018/7/28
 * Time: 14:50
 */

namespace backend\controllers;

use kartik\form\ActiveForm;
use yii\web\Response;
use common\models\User;
use Yii;
use yii\helpers\Json;
use common\models\UserSearch;

class UserController extends BaseController
{

    public function actionIndex(){

        $searchModel = new UserSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $new_model = new User();

        if(Yii::$app->request->post('hasEditable')){
            $id = Yii::$app->request->post('editableKey');
            $model = User::findOne($id);

            $posted = current($_POST['User']);
            $post = ['User'=>$posted];
//            if($model->load($post) && $model->validate()){
            if($model->load($post) ){
                $model->password = 'testpsd';//Bug Waiting Fix, Use Scenario
                $model->save();
//                isset($posted['User']) && $output = '';
            }
            $out = Json::encode(['output'=>'','message'=>$model->getFirstErrors()]);
            echo $out;
            return;
        }

        return $this->render('index',[
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'new_model' => $new_model,
        ]);
    }

    public function actionCreate()
    {
        $model = new User();
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->setPassword($model->password);
            $model->generateAuthKey();
            $model->save();
            return $this->redirect(['index']);
        }else{
            Yii::$app->getResponse()->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionResetPsd($id)
    {
        $model = $this->findModel($id);

        if($model->load(Yii::$app->request->post())){
            $model->setPassword($model->password);
            $model->removePasswordResetToken();
            $model->save(false);
            return $this->redirect(['index']);
        }

        return $this->renderAjax('reset_psd',[
            'model' => $model,
        ]);
    }

}