<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Expresses');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
    <div class="box-header">
        <i class="fa fa-plus"></i>
        <h3 class="box-title"><?= Yii::t('app', 'Create') ?></h3>
    </div>
    <div class="box-body">
        <?php $form = ActiveForm::begin([
            'action' => ['create'],
            'method' => 'post',
            'type' => ActiveForm::TYPE_HORIZONTAL,

        ]); ?>
        <div class="row">
            <div class="col-md-6"><?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?></div>
            <div class="col-md-6"><?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?></div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<div class="express-index">
    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'export' => false,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class'=>'kartik\grid\EditableColumn',
                'attribute'=>'name',
            ],
            'status',
            'created_at:datetime',
            'updated_at:datetime',
            [
                'attribute'=>'created_user_id',
                'value'=>function($mod){
                    return $mod->createdUser->username;
                }
            ],
            [
                'attribute'=>'updated_user_id',
                'value'=>function($mod){
                    return $mod->updatedUser->username;
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{delete}',
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
