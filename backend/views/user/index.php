<?php
/**
 * Created by PhpStorm.
 * User: Elex.Zhuo
 * Date: 2018/7/28
 * Time: 14:54
 */

use yii\widgets\Pjax;
use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\form\ActiveForm;
use yii\bootstrap\Modal;
use yii\helpers\Url;

$this->title = Yii::t('app','User Manager');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
    <div class="box-header">
        <i class="fa fa-plus"></i>
        <h3 class="box-title"><?= Yii::t('app','Create User') ?></h3>
    </div>
    <div class="box-body">
    <?php $form = ActiveForm::begin([
        'action' => ['create'],
        'method' => 'post',
//        'enableAjaxValidation' => false,
        'type' => ActiveForm::TYPE_HORIZONTAL,
        'formConfig' => ['labelSpan' => 5 , 'deviceSize'=> ActiveForm::SIZE_SMALL]
    ]);
    ?>
    <div class="row">
        <div class="col-md-4"><?= $form->field($new_model,'username')->textInput(['maxlength'=>true]) ?></div>
        <div class="col-md-4"><?= $form->field($new_model,'email')->textInput() ?></div>
        <div class="col-md-4"><?= $form->field($new_model,'password')->passwordInput() ?></div>
    </div>
    <div class="row">
        <div class="col-md-12" style="text-align: right"><?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?></div>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
<div class="box box-primary">
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel'=> $searchModel,
        'summary'=>false,
        'export'=>false,
        'columns'=>[
            ['class'=>'yii\grid\SerialColumn'],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'username',
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'email',
            ],
            'status',
            'created_at:datetime',
            'updated_at:datetime',
            [
                'class'=>'yii\grid\ActionColumn',
                'template'=>'{reset-psd}&nbsp;&nbsp;{delete}',
                'buttons'=>[
                    'reset-psd' => function($url,$model,$key){
                        $options = [
                            'title' => Yii::t('app', 'Reset Psd'),
                            'aria-label' => Yii::t('app', 'Reset Psd'),
                            'data-toggle' => 'modal',
                            'data-target' => '#reset-psd-modal',
                            'class'=>'data-update',
                            'data-id'=>$key,
                        ];
                        return Html::a('<span class="glyphicon glyphicon-cog"></span>', $url, $options);
                    }
                ],
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
<?php
    Modal::begin([
        'id' => 'reset-psd-modal',
        'header' => '<h4 class="modal-title">'.Yii::t('app','Reset Psd').'</h4>',
    ]);
    $model_requestUrl = Url::toRoute('reset-psd');
    $model_js = <<<JS
    $('.data-update').on('click', function () {
        $.get('{$model_requestUrl}',{id:$(this).closest('tr').data('key')},
            function(data) {
              $('.modal-body').html(data);
            }
        );
    });
JS;
    $this->registerJs($model_js);
    Modal::end();
?>
