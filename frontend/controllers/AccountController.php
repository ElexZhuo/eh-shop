<?php
/**
 * Created by PhpStorm.
 * User: Elex.Zhuo
 * DateTime: 2018/8/3  18:10
 * By:www.enheng.tech
 */

namespace frontend\controllers;


class AccountController extends CommonController
{
    public function actionIndex(){
        return $this->render('index');
    }
}