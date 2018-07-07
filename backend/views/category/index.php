<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <p>
        <?= Html::a(Yii::t('app', 'Create Category'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="row-fluid table">
        <?= \yiidreamteam\jstree\JsTree::widget([
            'containerOptions' => [
                'class' => 'data-tree',
            ],
            'jsOptions' => [
                'core' => [
                    'check_callback' => true,
                    'multiple' => false,
                    'data' => [
                        'url' => \yii\helpers\Url::to(['category/tree', "page" => $page, "per-page" => $perpage]),
                    ],
                    'themes' => [
                        "stripes" => true,
                        "variant" => "large",
                    ]
                ],
                "plugins" => [
                    'contextmenu', 'dnd', 'search', 'state', 'types', 'wholerow'
                ],
//                "contextmenu" => [
//                    "items"=>[
//                        "create"=>"_disable",
//                        "rename"=>true
//                    ]
//                ],
            ]
        ]) ?>
    </div>
    <div class="pagination pull-right">
        <?php echo yii\widgets\LinkPager::widget([
            'pagination' => $pager,
            'prevPageLabel' => '&#8249;',
            'nextPageLabel' => '&#8250;',
        ]); ?>
    </div>
</div>
<?php
$rename = yii\helpers\Url::to(['category/rename']);
$delete = yii\helpers\Url::to(['category/delete']);
$csrfvar = Yii::$app->request->csrfParam;
$csrfval = Yii::$app->request->getCsrfToken();
$js = <<<JS
$("#w0").on("rename_node.jstree", function(e, data){
    var newtext = data.text;
    var old = data.old;
    var id = data.node.id;
    var postData = {
        '$csrfvar' : '$csrfval',
        'new' : newtext,
        'old' : old,
        'id' : id
    };
    $.post('$rename', postData, function(data) {
        if (data.code != 0) {
            alert('修改失败');
            window.location.reload();
        }
    });
}).on("delete_node.jstree", function(e, data){
    var id = data.node.id;
    $.get('$delete', {id: id}, function(data){
        if (data.code != 0) {
            alert('删除失败:'+data.message);
            window.location.reload();
        }
    });
})
JS;
$this->registerJs($js);
?>