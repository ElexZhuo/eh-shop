<?php
/**
 * Created by PhpStorm.
 * User: Elex.Zhuo
 * DateTime: 2018/8/3  18:46
 * By:www.enheng.tech
 */

namespace frontend\controllers;

use common\models\Category;
use Yii;
use common\models\Promotion;
use common\models\Product;
use common\models\ProductAttr;

class ProductController extends CommonController
{
    public function actionCategory(){

        $category_id = Yii::$app->request->get("category_id");
        $res = Category::find()->where(['id'=>$category_id])->all();

        $attr = self::getPosterity($res);

        $attr_id =[];
        foreach ($attr as $key => $item){
            $attr_id[]= $item['id'];
        }

        $model = Product::find()->where(['in','category_id',$attr_id])->all();

//        var_dump(json_encode($attr));
//        var_dump(count($attr));
//        exit();

        return $this->render('category',[
            'model'=>$model
        ]);
    }

    private static function getPosterity($res){
        $output = array();
        foreach ($res as $key => $item){
            $sql = "select * from category where parent_id=".$item['id'];
            $tempRes = Yii::$app->db->createCommand($sql)->queryAll();
            $output []= $item;
            if(!empty($tempRes)){
                $output = array_merge($output,self::getPosterity($tempRes));
            }
        }
        return $output;
    }

    public function actionSimple(){

        $product_id = Yii::$app->request->get("product_id");
        $model = Product::findOne($product_id);
        $model_attr = ProductAttr::find()->where(['product_id'=>$product_id])->all();

        return $this->render('simple',[
            'model'=>$model,
            'model_attr'=>$model_attr,
        ]);
    }
    public function actionPromotion(){

        $promotion_id = Yii::$app->request->get("promotion_id");
        $promotion = Promotion::findOne($promotion_id);
        $data['product'] = Product::find()->joinWith('refPromotionProducts')->where('ref_promotion_product.promotion_id='.$promotion_id)->orderBy('created_at desc')->all();
        foreach ($data['product'] as $index => $product){
            $min_price = ProductAttr::find()->where(['product_id'=>$product['id']])->min('price');
            $max_price = ProductAttr::find()->where(['product_id'=>$product['id']])->max('price');
            $attr = [];
            if($min_price != $max_price){
                $attr['price'] = $min_price.'~'.$max_price;
            }else{
                $attr['price'] = $min_price;
            }
            $array = json_decode(ProductAttr::findOne(['product_id'=>$product['id']])->pictures);
            $attr['image'] = IMG_PRODUCT_SAVE_PATH.$array[0];
            $data['product_attr'][$index] = $attr;
        }
        return $this->render('promotion',[
            'data'=>$data,
            'promotion'=>$promotion,
        ]);
    }
}