<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Promotion */

$this->title = Yii::t('app', 'Create Promotion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Promotions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="promotion-create">

    <h1></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
