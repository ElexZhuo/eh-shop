<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Products'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'category_id',
                'value'=>$model->category->title,
            ],
            'product_title',
            [
                'attribute' => 'product_desc',
                'format'=>'html',
            ],
            'status',
            'created_at:datetime',
            'updated_at:datetime',
            [
                'attribute' => 'created_user_id',
                'value'=>$model->createdUser->username,
            ],
            [
                'attribute' => 'updated_user_id',
                'value'=>$model->updatedUser->username,
            ]
        ],
    ]) ?>

</div>
