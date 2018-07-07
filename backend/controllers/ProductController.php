<?php

namespace backend\controllers;

use app\models\Category;
use app\models\Product;
use app\models\ProductAttr;
use app\models\ProductSearch;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends CommonController
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

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
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
        return $this->render('view', [
            'model' => $this->findModel($id),
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
        $product_attr_Mul = [new ProductAttr()];

        $cate = new Category();
        $catelist = $cate->getCategoryList();
        unset($catelist[0]);

        $count = count(Yii::$app->request->post('ProductAttr',[]));
        for ($i = 1;$i<$count;$i++){
            $product_attr = new ProductAttr();
            $product_attr_Mul[] = $product_attr;
        }

        if ($model->load(Yii::$app->request->post()) ) {

            if($model->validate()){
                $model->save();
                if(Model::loadMultiple($product_attr_Mul,Yii::$app->request->post())){

                    foreach ($product_attr_Mul as $product_attr){
                        $product_attr->product_id = $model->id;

                        for ($i = 0 ;$i<count($product_attr_Mul);$i++){
                            $image = UploadedFile::getInstances($product_attr,'['.$i.']pictures');

                            $pics = [];
                            foreach ($image as $img){
                                if(!is_null($img)){
                                    $ext = $img->getExtension();
                                    $imageName = time().rand(100,999).'.'.$ext;
                                    $img->saveAs(IMG_PRODUCT_SAVE_PATH.$imageName);
                                    $pics[]=$imageName;
//                                    var_dump(json_encode($pics));
                                }else{
                                    var_dump('$img is null');
                                    exit();
                                }
                            }

                        }

                        $product_attr->pictures = json_encode($pics);

                        if($product_attr->validate() && $product_attr->product_id != null){
                            $product_attr->save(false);
                        }
                    }

                }else{
                    Yii::$app->session->setFlash("error","添加失败");
                    var_dump('attr 添加失败');
                    exit();
                }

            }else{
                Yii::$app->session->setFlash("error","添加失败");
                var_dump('验证失败，添加失败');exit();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,'catelist'=>$catelist,'product_attr_Mul'=>$product_attr_Mul
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
}
