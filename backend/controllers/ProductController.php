<?php

namespace backend\controllers;

use common\models\Category;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;
use common\models\ProductSearch;
use common\models\Promotion;
use common\models\Product;
use common\models\ProductAttr;
use common\models\RefPromotionProduct;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends BaseController
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
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $promotion = Promotion::find()->all();
        $promotionList = ArrayHelper::map($promotion,'id','title');

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'promotionList'=>$promotionList,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        $cate = new Category();
        $catelist = $cate->getCategoryList();
        unset($catelist[0]);

        $product_attr_data = new ActiveDataProvider([
            'query' => ProductAttr::find()->where(['product_id'=>$id]),
        ]);

        $ref_promotion_product = new ActiveDataProvider([
            'query' => RefPromotionProduct::find()->where(['product_id'=>$id]),
        ]);

        if(Yii::$app->request->post('Product')){
            $post = ['Product' => $_POST['Product']];
            if($model -> load($post)){
                $model->save();
            }
        }

        if(Yii::$app->request->post('hasEditable')){
            $id = Yii::$app->request->post('editableKey');
//            var_dump(Yii::$app->request->post());
            $model_attr = ProductAttr::findOne($id);
            $out = Json::encode(['output'=>'','message'=>'']);
            $posted = current($_POST['ProductAttr']);
            $post = ['ProductAttr'=>$posted];
            if($model_attr->load($post)){

                $image = UploadedFile::getInstances($model_attr,'['.Yii::$app->request->post('editableIndex').']pictures');
                if($image){
                    $pics = [];
                    foreach ($image as $img){
                        if(!is_null($img)){
                            $ext = $img->getExtension();
                            $imageName = time().rand(100,999).'.'.$ext;
                            $img->saveAs(IMG_PRODUCT_SAVE_PATH.$imageName);
                            $pics[]=$imageName;
                        }else{
                            var_dump('$img is null');
                            exit();
                        }
                    }
                    $model_attr->pictures = json_encode($pics);
                }

                $model_attr->save();
                $output = '';
                $cout = count($image);
//                isset($posted['attr']) && $output = $model_attr->attr;
            }
            $out = Json::encode(['output'=>$output,'message'=>'','count'=>$cout]);
            echo $out;
            return;
        }


        return $this->render('view', [
            'model' => $model,
            'product_attr_data' => $product_attr_data,
            'ref_promotion_product' => $ref_promotion_product,
            'catelist' => $catelist,
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();
        $product_attr = new ProductAttr();

        $cate = new Category();
        $catelist = $cate->getCategoryList();
        unset($catelist[0]);

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $transaction = Yii::$app->db->beginTransaction();
            try{
                $model->save();
                if($product_attr->load(Yii::$app->request->post()) ){
                    $product_attr->product_id = $model->id;
                    $image = UploadedFile::getInstances($product_attr,'pictures');
                    $pics = [];
                    foreach ($image as $img){
                        if(!is_null($img)){
                            $ext = $img->getExtension();
                            $imageName = time().rand(100,999).'.'.$ext;
                            $img->saveAs(IMG_PRODUCT_SAVE_PATH.$imageName);
                            $pics[]=$imageName;
                        }else{
                            var_dump('$img is null');
                            exit();
                        }
                    }
                    $product_attr->pictures = json_encode($pics);

                    if($product_attr->validate() && $product_attr->product_id != null){
                        $product_attr->save(false);
                    }
                }

                $transaction->commit();
                return $this->redirect(['view', 'id' => $model->id]);
            }catch (\Exception $e){
                $transaction->rollBack();
            }

        }

        return $this->render('create', [
            'model' => $model,'catelist'=>$catelist,'product_attr'=>$product_attr
        ]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $cate = new Category();
        $catelist = $cate->getCategoryList();
        unset($catelist[0]);

        $product_attr_Mul = [ProductAttr::tableName()->findModel('product_id',$id)];

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,'catelist'=>$catelist,'product_attr_Mul'=>$product_attr_Mul
        ]);
    }

    /**
     * Deletes an existing Product model.
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

    public function actionDeleteAll()
    {
        $ids =  Yii::$app->request->post('id');

        for ($i=0;$i<count($ids);$i++){
            $this->findModel($ids[$i])->delete();
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    public function actionAddAttr($product_id)
    {
        $product_attr = new ProductAttr();
        $product_attr->product_id = $product_id;

        if($product_attr->load(Yii::$app->request->post()) ){
            $image = UploadedFile::getInstances($product_attr,'pictures');
            $pics = [];
            foreach ($image as $img){
                if(!is_null($img)){
                    $ext = $img->getExtension();
                    $imageName = time().rand(100,999).'.'.$ext;
                    $img->saveAs(IMG_PRODUCT_SAVE_PATH.$imageName);
                    $pics[]=$imageName;
                }else{
                    var_dump('$img is null');
                    exit();
                }
            }
            $product_attr->pictures = json_encode($pics);
            $product_attr->save();
            return $this->redirect(['view','id'=>$product_id]);
        }else{
            return $this->renderAjax('add_attr',[
               'product_attr' => $product_attr,
            ]);
        }
    }

    public function actionValidateAddAttr(){
        Yii::$app->response->format = Response::FORMAT_JSON;
        $model = new ProductAttr();
        $model->load(Yii::$app->request->post());
        return ActiveForm::validate($model);
    }

    public function actionDelAttr($id)
    {
        $product_attr = ProductAttr::findOne($id);
        $product_id = $product_attr->product_id;
        $product_attr->delete();

        return $this->redirect(['view','id'=>$product_id]);
    }
    public function actionDelRefPromotion($id)
    {
        $model = RefPromotionProduct::findOne($id);
        $product_id = $model->product_id;
        $model->delete();

        return $this->redirect(['view','id'=>$product_id]);
    }

    public function actionCheckRefPromotion()
    {
        $ids =  Yii::$app->request->post('id');
        $pid =  Yii::$app->request->post('pid');

        $ref_promotion_product = RefPromotionProduct::findAll(['promotion_id'=>$pid,'product_id'=>$ids]);

        Yii::$app->response->format = Response::FORMAT_JSON;
        return ['tip'=>"Already Exist ".count($ref_promotion_product).",Will Add ".(count($ids)-count($ref_promotion_product)).'.'];

    }

    public function actionAddRefPromotion()
    {
        $ids =  Yii::$app->request->post('id');
        $pid =  Yii::$app->request->post('pid');

        $succ_count = 0;
        for ($i=0;$i<count($ids);$i++){
            $query = RefPromotionProduct::find()->andWhere(['and','promotion_id = :pid','product_id= :id'],[":pid"=>$pid,":id"=>$ids[$i]]);
            if($query->count() == 0){
                $model = new RefPromotionProduct();
                $model->product_id = $ids[$i];
                $model->promotion_id = $pid;
                $model->save();
                $succ_count += 1;
            }
        }

        Yii::$app->response->format = Response::FORMAT_JSON;
        return ['tip'=>"Add Success".$succ_count,'count'=>count($ids),'ids'=>$ids];

    }
}
