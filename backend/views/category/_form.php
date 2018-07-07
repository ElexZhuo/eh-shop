<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-horizontal col-md-6">

    <?php $form = ActiveForm::begin([
        'fieldConfig' => [
            'template' => '<div class="col-sm-2 control-label">{label}</div><div class="col-sm-10"> {input}</div>{error}',
        ],
    ]); ?>

    <?= $form->field($model, 'parent_id')->dropDownList($list) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success pull-right']) ?>


    <?php ActiveForm::end(); ?>

</div>
