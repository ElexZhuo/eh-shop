<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\widgets\FileInput;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $product_attr app\models\ProductAttr */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="">

        <?php $form = ActiveForm::begin([
            'id' => $product_attr->formName(),
            'type' => ActiveForm::TYPE_HORIZONTAL,
            'enableAjaxValidation' => true,
            'validationUrl' => Url::toRoute(['validate-add-attr']),
//            'options' => ['enctype' => 'multipart/form-data'],
        ]); ?>

        <?= $form->field($product_attr, 'attr')->textInput(['maxlength' => true]) ?>

        <?= $form->field($product_attr, "price", ['addon' => ['append' => ['content' => 'RMB']],])->textInput(['maxlength' => true]); ?>

        <?= $form->field($product_attr, "count")->textInput(['maxlength' => true]); ?>

        <?= $form->field($product_attr, "pictures[]")->widget(FileInput::className(),[

            'options' => [
                'multiple'=>true,
                'accept' => 'image/*'
            ],
            'pluginOptions' => [
                'previewFileType' => 'image',
//                'initialPreview' =>null==$product_attr->pictures?  "":IMG_PRODUCT_PATH.$product_attr->pictures,
//                'initialPreviewConfig' => ['width' => '180px'],
//                'initialPreviewAsData' => true,
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