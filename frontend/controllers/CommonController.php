<?php
/**
 * Created by PhpStorm.
 * User: Elex.Zhuo
 * DateTime: 2018/7/30  16:05
 * By:www.enheng.tech
 */

namespace frontend\controllers;


use yii\base\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Category;

class CommonController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function init()
    {
        $menu = Category::getMenu();
        $this->view->params['menu'] = $menu;

    }


}