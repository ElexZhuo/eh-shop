<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Promotion */

$this->title = Yii::t('app', $model->title, [
    'nameAttribute' => '' . $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Promotions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="promotion-update">

    <?= $this->render('_form', [
        'model' => $model,
        'adList' => $adList,
    ]) ?>

</div>
