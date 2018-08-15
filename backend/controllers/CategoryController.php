<?php

namespace backend\controllers;

use Yii;
use common\models\Category;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends BaseController
{

    /**
     * Lists all Category models.
     * @return mixed
     */
    public function actionIndex()
    {
        $page = (int)Yii::$app->request->get("page") ? (int)Yii::$app->request->get("page") : 1;
        $perpage = (int)Yii::$app->request->get("per-page") ? (int)Yii::$app->request->get("per-page") : 10;
        $model = new Category;
        $data = $model->getPrimaryCate();
        return $this->render("index", ['pager' => $data['pages'], "page" => $page, "perpage" => $perpage]);

    }

    /**
     * Displays a single Category model.
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
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Category();
        $list = $model->getCategoryList();
        if(Yii::$app->request->isPost){
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
//                Yii::$app->session->setFlash("info", "添加成功");
                return $this->redirect(['index', 'id' => $model->id]);
            }else{
                Yii::$app->session->setFlash("error","添加失败");
            }
        }

        return $this->render('create', ['model' => $model,'list'=>$list ]);
    }

    /**
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Category model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */

    public function actionDelete()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        if (!Yii::$app->request->isAjax) {
            throw new \yii\web\MethodNotAllowedHttpException('Access Denied');
        }
        $id = (int)Yii::$app->request->get("id");
        if (empty($id)) {
            return ['code' => -1, 'message' => '参数错误', 'data' => []];
        }
        $cate = Category::findOne($id);
        if (empty($cate)) {
            return ['code' => -1, 'message' => '参数错误', 'data' => []];
        }
        $total = Category::find()->where("parent_id = :pid", [":pid" => $id])->count();
        if ($total > 0) {
            return ['code' => 1, 'message' => '该分类下包含子类，不允许删除', 'data' => []];
        }
        if ($cate->delete()) {
            return ['code' => 0, 'message' => 'ok', 'data' => []];
        }
        return ['code' => 1, 'message' => '删除失败', 'data' => []];
    }

    /**
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    public function actionTree()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $model = new Category;
        $data = $model->getPrimaryCate();
        if (!empty($data)) {
            return $data['data'];
        }
        return [];
    }

    public function actionRename()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        if (!Yii::$app->request->isAjax) {
            throw new \yii\web\MethodNotAllowedHttpException('Access Denied');
        }
        $post = Yii::$app->request->post();
        $newtext = $post['new'];
        $old = $post['old'];
        $id = (int)$post['id'];
        if (empty($newtext) || empty($id)) {
            return ['code' => -1, 'message' => '参数错误', 'data' => []];
        }
        if ($old == $newtext) {
            return ['code' => 0, 'message' => 'ok', 'data' => []];
        }
        $model = Category::findOne($id);
        $model->title = $newtext;
        if ($model->save()) {
            return ['code' => 0, 'message' => 'ok', 'data' => []];
        }
        return ['code' => 1, 'message' => '更新失败', 'data' => []];
    }
}
