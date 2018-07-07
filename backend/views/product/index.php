<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Product'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute'=>'category_id',
                'value'=> function($model){
                    return $model->category->title;
                }
            ],
            'product_title',
//            'product_desc:ntext',
            'status',
            'created_at:datetime',
            'updated_at:datetime',
            //'created_user_id',
            //'updated_user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
