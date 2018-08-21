<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Promotions');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="promotion-index">

    <h1></h1>
    <?php Pjax::begin(); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Promotion'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title',
            [
                'attribute' => 'pictures',
                'format' => 'raw',
                'value' => function($model){
                    return Html::img(IMG_PROMOTION_SAVE_PATH.$model->pictures,['width'=>250]);
                },
            ],
            [
                'attribute' => 'ad_loc_id',
                'value' => function($model){
                    return $model->adLoc == null ? '':$model->adLoc->tag;
                }
            ],
            'status',
            'created_at:datetime',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
