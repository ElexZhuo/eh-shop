<?php
/**
 * Created by PhpStorm.
 * User: Elex.Zhuo
 * DateTime: 2018/8/3  17:43
 * By:www.enheng.tech
 */

namespace frontend\controllers;


class CartController extends CommonController
{
    public function actionIndex()
    {
        return $this->render('index',[
            'data'=>'',
        ]);
    }

    public function actionAdd()
    {
        return $this->render('index',[
            'data'=>'',
        ]);
    }
}