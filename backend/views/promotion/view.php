<?php

use kartik\detail\DetailView;
use kartik\grid\GridView;
use kartik\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Promotion */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Promotions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="promotion-view">

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
                'columns'=>[
                    [
                        'attribute' => 'title',
                        'labelColOptions' => ['style' => 'width:10%'],
                        'valueColOptions' => ['style' => 'width:30%'],
                    ],
                    [
                        'attribute' => 'ad_loc_id',
                        'labelColOptions' => ['style' => 'width:10%'],
                        'valueColOptions' => ['style' => 'width:20%'],
                        'value'=> $model->adLoc == null ? '':$model->adLoc->tag,
                        'type'=>DetailView::INPUT_SELECT2,
                        'widgetOptions' => [
                            'data'=>$adList,
                            'options'=>['placeholder' => Yii::t('app','Pls Select')],
                            'pluginOptions' => ['allowClear'=>false, 'width'=>'100%'],
                        ],
                    ],
                    [
                        'attribute' => 'status',
                        'labelColOptions' => ['style' => 'width:10%'],
                        'valueColOptions' => ['style' => 'width:20%'],
//                        'value'=> $model->adLoc == null ? '':$model->adLoc->tag,
//                        'type'=>DetailView::INPUT_SELECT2,
//                        'widgetOptions' => [
//                            'data'=>$adList,
//                            'options'=>['placeholder' => Yii::t('app','Pls Select')],
//                            'pluginOptions' => ['allowClear'=>false, 'width'=>'100%'],
//                        ],
                    ],

                ],
            ],
            [
                'attribute' => 'pictures',
                'format'=>['image',['width'=>'250']],
                'labelColOptions' => ['style' => 'width:10%'],
//                'valueColOptions' => ['style' => 'width:20%'],
                'value'=>IMG_PROMOTION_SAVE_PATH.$model->pictures,
                'type'=>DetailView::INPUT_FILEINPUT,
                'widgetOptions'=>[

                    'pluginOptions' => [
                        'showCaption'=>false,
                        'showUpload' => false,
                        'showRemove' => false,
                        'maxFileSize'=>2048,
                        'fileActionSettings' => [
                            'showZoom' => false,
                            'showDrag' => false,
                        ] ,
                    ]
                ],
            ],
//            'created_at:datetime',
//            'updated_at:datetime',
        ],
    ]) ?>
</div>
<div>
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
                'attribute'=>'product_id',
                'value'=> function($model){
                    return $model->product->product_title;
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template'=>'{del-ref-product}',
                'headerOptions'=>['width'=>'80'],
                'buttons'=>[
                    'del-ref-product'=>function($url,$model,$key){
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
</div>