<?php
/**
 * Created by PhpStorm.
 * User: Elex.Zhuo
 * DateTime: 2018/7/28  21:23
 * By:www.enheng.tech
 */
use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $model common\models\User */

?>

<?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

<?= $form->field($model, 'password')->passwordInput() ?>

<div class="form-group">
    <?= Html::submitButton(Yii::t('app','Save'), ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
