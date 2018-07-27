<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RefPromotionProduct */

$this->title = Yii::t('app', 'Create Ref Promotion Product');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ref Promotion Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-promotion-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
