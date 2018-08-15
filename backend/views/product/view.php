<?php

use kartik\detail\DetailView;
use kartik\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->product_title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <?= DetailView::widget([
        'model' => $model,
        'condensed' => true,
        'hover' => true,
        'buttons1' => '{update}',
        'buttons2' => '{view} {save}',
        'mode' => DetailView::MODE_VIEW,
        'panel' => [
            'heading' => Yii::t('app', 'Product Info'),
            'type' => DetailView::TYPE_INFO,
        ],
        'attributes' => [
            [
                'columns' => [
                    [
                        'attribute' => 'product_title',
                        'labelColOptions' => ['style' => 'width:10%'],
                        'valueColOptions' => ['style' => 'width:20%'],
                    ],
                    [
                        'attribute' => 'category_id',
                        'labelColOptions' => ['style' => 'width:10%'],
                        'valueColOptions' => ['style' => 'width:30%'],
                        'value' => $model->category->title,
                        'type'=>DetailView::INPUT_SELECT2,
                        'widgetOptions' => [
                            'data'=>$catelist,
                            'options'=>['placeholder' => Yii::t('app','Pls Select')],
                            'pluginOptions' => ['allowClear'=>false, 'width'=>'100%'],
                        ],
                    ],
                    [
                        'attribute' => 'status',
                        'labelColOptions' => ['style' => 'width:10%'],
                        'valueColOptions' => ['style' => 'width:20%'],
                    ],
                ]
            ],
        ],
    ]); ?>

    <div class="row">
        <div class="text-right">
            <?= Html::a(Yii::t('app', 'Create Attr'), '#',
                [
                    'id' => 'add-attr',
                    'data-toggle' => 'modal',
                    'data-target' => '#add-attr-modal',
                    'class' => 'btn btn-success'
                ]
            ); ?>
        </div>
    </div>

    <?php
    Modal::begin([
        'id' => 'add-attr-modal',
        'header' => '<h4 class="modal-title">创建</h4>',
    ]);
    $product_attr_requestUrl = Url::toRoute(['add-attr', 'product_id' => $model->id]);
    $product_attr_js = <<<JS
    $.get('{$product_attr_requestUrl}',{},
        function(data) {
          $('#add-attr-modal').find('.modal-body').html(data);
        }
    );
JS;
    $this->registerJs($product_attr_js);
    Modal::end();
    ?>
    <p></p>
    <?= GridView::widget([
        'dataProvider' => $product_attr_data,
        'id'=>'attr-grid',
        'layout' => '{items}<div class="text-right tooltip-demo">{pager}</div>',
        'pager' => [
            'options' => ['class' => 'hidden']//关闭分页
        ],
        'export'=>false,
        'responsive'=>true,
        'hover'=>true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class'=>'kartik\grid\EditableColumn',
                'attribute'=>'attr',
                'editableOptions'=> function ($model, $key, $index) {
                    return [
                        'asPopover' => false,
                        'buttonsTemplate'=>'{submit}',
                        'submitButton'=>[
                            'class'=>'btn btn-sm btn-primary',
                            'icon'=>'<i class="glyphicon glyphicon-floppy-disk"></i> '
                        ],
                    ];
                }
            ],
            [
                'class'=>'kartik\grid\EditableColumn',
                'attribute'=>'price',
                'editableOptions'=> function ($model, $key, $index) {
                    return [
                        'asPopover' => false,
                        'buttonsTemplate'=>'{submit}',
                        'submitButton'=>[
                            'class'=>'btn btn-sm btn-primary',
                            'icon'=>'<i class="glyphicon glyphicon-floppy-disk"></i> '
                        ],
                    ];
                }
            ],
            [
                'class'=>'kartik\grid\EditableColumn',
                'attribute'=>'count',
                'editableOptions'=> function ($model, $key, $index) {
                    return [
                        'asPopover' => false,
                        'buttonsTemplate'=>'{submit}',
                        'submitButton'=>[
                            'class'=>'btn btn-sm btn-primary',
                            'icon'=>'<i class="glyphicon glyphicon-floppy-disk"></i> '
                        ],
                    ];
                }
            ],
            [
                'class'=>'kartik\grid\EditableColumn',
                'attribute'=>'pictures',
                'format'=>'html',
                'value'=>function($model,$key,$index){
                    $array = json_decode($model->pictures);
                    $str = "";
                    for ($i = 0 ; $i < count($array) ; $i++){
                        $str .= "<img style=\"width:120px\" src=\"".IMG_PRODUCT_SAVE_PATH.$array[$i]."\" />";
                    }
                    return $str;
                },
                'editableOptions'=>function($model, $key, $index) {
                    $array = json_decode($model->pictures);
//                    $str = "";
                    for ($i = 0 ; $i < count($array) ; $i++){
                       $array[$i] = IMG_PRODUCT_SAVE_PATH.$array[$i];
                    }
                    return [
                        'asPopover' => false,
                        'inputType'=>\kartik\editable\Editable::INPUT_FILEINPUT,
                        'options'=>[
                            'options'=>[
                                'multiple'=>true,
                                'accept' => 'image/*'
                            ],
                            'pluginOptions'=>[
                                'initialPreview'=>$array,
                                'initialPreviewAsData'=>true,
                                'showCaption'=>false,
//                            'initialCaption'=>"The Moon and the Earth",
//                                'initialPreviewConfig' => [
//                                    ['caption' => 'Moon.jpg', 'size' => '873727'],
//                                    ['caption' => 'Earth.jpg', 'size' => '1287883'],
//                                ],
//                                'overwriteInitial'=>false,
                                'maxFileSize'=>2800,
                                'showUpload' => false,
                                'showRemove' => false,
                                'maxFileCount' => 6,
                            ],

                        ]
                    ];
                },
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{del-attr}',
                'headerOptions'=>['width'=>'80'],
                'buttons'=>[
                    'del-attr'=>function($url,$model,$key){
                        $options=[
                            'title'=>Yii::t('app','Delete'),
                            'aria-label' => Yii::t('yii', 'Delete'),
                            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, $options);
                    }
                ],
            ],
        ],
    ]);
    ?>

    <?= GridView::widget([
        'dataProvider' => $ref_promotion_product,
        'layout' => '{items}<div class="text-right tooltip-demo">{pager}</div>',
        'pager' => [
            'options' => ['class' => 'hidden']//关闭分页
        ],
        'export'=>false,
        'responsive'=>true,
        'hover'=>true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'promotion_id',
                'value'=> function($model){
                    return $model->promotion->title;
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{del-ref-promotion}',
                'headerOptions'=>['width'=>'80'],
                'buttons'=>[
                    'del-ref-promotion'=>function($url,$model,$key){
                        $options=[
                            'title'=>Yii::t('app','Delete'),
                            'aria-label' => Yii::t('yii', 'Delete'),
                            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                            'data-method' => 'post',
                            'data-pjax' => '0',
                        ];
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, $options);
                    }
                ],
            ],
        ],
    ]);
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'condensed' => true,
        'hover' => true,
        'buttons1' => '{update}',
        'buttons2' => '{view} {save}',
        'mode' => DetailView::MODE_VIEW,
        'panel' => [
            'heading' => Yii::t('app', 'Product Desc'),
            'type' => DetailView::TYPE_INFO,
        ],
        'attributes' => [
            [
                'attribute' => 'product_desc',
                'format' => 'html',
//                'value'=>'<span class="text-justify"><em>' . $model->product_desc . '</em></span>',
//                'options'=>['rows'=>6],
//                'type'=>DetailView::INPUT_TEXTAREA,
                'labelColOptions' => ['style' => 'width:20%'],
            ],
        ],
    ]); ?>
</div>

<?php
$script = <<<JS
$(document).ready(function(){
  var htm = $("#attr-grid-container").last().eq(0);
  htm.find('input[name$="\[pictures\]"]').each(function(i,value) {
    $(value).attr("name",$(value).attr("name")+"[]");
     // alert( $(value).attr("name"));
  });
 
})
JS;

$this->registerJs($script);
?>

