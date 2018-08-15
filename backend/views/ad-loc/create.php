<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AdLoc */

$this->title = Yii::t('app', 'Create Ad Loc');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ad Locs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ad-loc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
