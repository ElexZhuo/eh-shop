<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
//use kartik\dialog\Dialog;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;

//echo Dialog::widget([
//    'libName' => 'krajeeDialog',
//    'options' => [], // default options
//]);

?>
<div class="product-index">

    <h1></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Product'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'id'=>'grid',
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'yii\grid\CheckboxColumn',
                'name'=>'id',
            ],
            'product_title',
            [
                'attribute'=>'category_id',
                'value'=> function($model){
                    return $model->category->title;
                }
            ],
            [
                'label'=>Yii::t('app','Promotions'),
                'attribute'=>'promotion_id',
                'format'=>'html',
                'value'=> function($model){
                    $promotions = $model->getRefPromotionProducts()->all();
                    $promotion = "";
                    foreach ($promotions as $item){
                        $promotion .= \app\models\Promotion::findOne($item->promotion_id)->title.'<br>';
                    }
                    return $promotion;
                },
                 'filter' => Html::activeDropDownList($searchModel, 'promotion_id', \yii\helpers\ArrayHelper::map(\app\models\Promotion::find()->all(),'id','title'),
                    ['prompt' => Yii::t('app','All'), 'class' => 'form-control']
                ),
                'headerOptions' => ['width' => '140']
            ],
//            'product_desc:ntext',
            'status',
            'created_at:datetime',
            'updated_at:datetime',
            //'created_user_id',
            //'updated_user_id',

            ['class' => 'yii\grid\ActionColumn',
                'template'=>'{view} {delete}',],
        ],
    ]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Batch Delete'), ['delete-all'], ['class' => 'btn btn-danger btn-delete']) ?>
        <?= Html::dropDownList(null,null,$promotionList,['class'=>'btn btn-primary btn-add-to','id'=>'add-to','prompt'=>Yii::t('app','Batch AddTo'),'href'=>Url::to(['check-ref-promotion']),'href2'=>Url::to(['add-ref-promotion'])]) ?>

    </p>
</div>
<?php

$script = <<< js
    $(".btn-delete").on("click", function(){
        var ids = $("#grid").yiiGridView("getSelectedRows");
        var self = $(this);
        if(ids.length == 0){
            alert("Pls Select");
            return false;
        } 
        $.ajax({
           url:self.attr("href"),
           type:"post",
           data:{id:ids},
           success:function(res){
                alert("delete success");
           }
        });
    });

    $(".btn-add-to").change(function() {
      var ids = $("#grid").yiiGridView("getSelectedRows");
        var self = $(this);
        var x = document.getElementById("add-to");
        if(ids.length == 0){
            alert("Pls Select");
	        x.options[0].selected = true;
            return false;
        } 
        
        var pid = x.options[x.selectedIndex].value;
        $.ajax({
           url:self.attr("href"),
           type:"post",
           data:{id:ids,pid:pid},
           success:function(res){
                if(window.confirm(res.tip)){
                    $.ajax({
                        url:self.attr("href2"),
                        type:"post",
                        data:{id:ids,pid:pid},
                        success:function(re) {
                          alert(re.tip);
                        },
                        fail:function() {
                          alert("add ref promotion fail");
                        }
                    });
                }else{
                    alert("cancel add action");
                }
           },
           fail:function(res) {
             alert("check ref promotion fail");
           }
        });
    });
js;

$this->registerJs($script);
?>

