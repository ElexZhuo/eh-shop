<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Promotion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="promotion-form  col-md-6">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pictures')->widget(FileInput::className(),[
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'previewFileType' => 'image',
            'initialPreview' =>null==$model->pictures?  "":IMG_PROMOTION_PATH.$model->pictures,
            'initialPreviewConfig' => ['width' => '180px'],
            'initialPreviewAsData' => true,
            'showCaption'=>false,
            'showUpload' => false,
            'showRemove' => false,
            'maxFileSize'=>1024,
            'fileActionSettings' => [
                'showZoom' => false,
                'showDrag' => false,
            ] ,
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
