<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\widgets\FileInput;
use yii\redactor\widgets\Redactor;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="product-form col-md-11">

        <?php $form = ActiveForm::begin([
            'type' => ActiveForm::TYPE_HORIZONTAL,
            'options' => ['enctype' => 'multipart/form-data'],
        ]); ?>

        <?= $form->field($model, 'product_title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'category_id')->dropDownList($catelist, ['id' => 'cates']) ?>

        <?= $form->field($model, 'product_desc')->widget(Redactor::className(), [
            'clientOptions' => [
                'imageManagerJson' => ['/redactor/upload/image-json'],
                'imageUpload' => ['/redactor/upload/image'],
                'fileUpload' => ['/redactor/upload/file'],
                'lang' => 'zh_cn',
                'plugins' => ['clips', 'fontcolor', 'imagemanager']
            ]
        ]) ?>

        <?= $form->field($product_attr, 'attr')->textInput(['maxlength' => true]); ?>
        <?= $form->field($product_attr, "price", ['addon' => ['append' => ['content' => 'RMB']],])->textInput(['maxlength' => true]); ?>
        <?= $form->field($product_attr, "count")->textInput(['maxlength' => true]); ?>
        <?= $form->field($product_attr, "pictures[]")->widget(FileInput::className(),[

            'options' => [
                'multiple'=>true,
                'accept' => 'image/*'
            ],
            'pluginOptions' => [
                'previewFileType' => 'image',
                'initialPreview' =>null==$product_attr->pictures?  "":IMG_PRODUCT_PATH.$product_attr->pictures,
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
                'maxFileCount' => 5
            ],
        ]); ?>

        <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success  pull-right']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>