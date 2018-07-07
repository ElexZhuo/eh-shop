<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = Yii::t('app', 'Create Product');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-create">

    <h1></h1>

    <?= $this->render('_form', [
        'model' => $model,'catelist'=>$catelist,'product_attr_Mul'=>$product_attr_Mul
    ]) ?>

</div>
