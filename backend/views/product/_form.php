<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="product-form col-md-11">

        <?php $form = ActiveForm::begin([
            'type' => ActiveForm::TYPE_HORIZONTAL,
            'options' => ['enctype' => 'multipart/form-data'],
        ]); ?>

        <?= $form->field($model, 'product_title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'category_id')->dropDownList($catelist, ['id' => 'cates']) ?>

        <?= $form->field($model, 'product_desc')->widget(\yii\redactor\widgets\Redactor::className(), [
            'clientOptions' => [
                'imageManagerJson' => ['/redactor/upload/image-json'],
                'imageUpload' => ['/redactor/upload/image'],
                'fileUpload' => ['/redactor/upload/file'],
                'lang' => 'zh_cn',
                'plugins' => ['clips', 'fontcolor', 'imagemanager']
            ]
        ]) ?>

        <div id="attr_grp" >
            <?php
            foreach ($product_attr_Mul as $index => $v) {
                echo '<div id="tt" class="form-group">';
                if ($index == 0) {
                    echo '<a id="add_attr" class="btn btn-primary col-md-2">' . Yii::t("app", "Create Attr") . '</a>';
                } else {
                    echo '<a id="del_attr" class="btn btn-danger col-md-2">' . Yii::t("app", "Delete") . '</a>';
                }
                echo '<div class="col-md-10">';
                echo $form->field($v, "[{$index}]attr")->textInput(['maxlength' => true, 'index' => $index]);
                echo $form->field($v, "[{$index}]price", ['addon' => ['append' => ['content' => 'RMB']],])->textInput(['maxlength' => true]);
                echo $form->field($v, "[{$index}]count")->textInput(['maxlength' => true]);
                echo '</div>';
                echo $form->field($v, "[{$index}]pictures[]")->widget(FileInput::className(),[

                    'options' => [
                        'multiple'=>true,
                        'accept' => 'image/*'
                    ],
                    'pluginOptions' => [
                        'previewFileType' => 'image',
                        'initialPreview' =>null==$v->pictures?  "":IMG_PRODUCT_PATH.$v->pictures,
                        'initialPreviewConfig' => ['width' => '180px'],
                        'initialPreviewAsData' => true,
                        'showCaption'=>false,
                        'showUpload' => false,
                        'showRemove' => false,
                        'maxFileSize'=>1024,
                        'fileActionSettings' => [
                            'showZoom' => false,
                            'showDrag' => false,
                        ] ,
                        'maxFileCount' => 5
                    ],
                ]);
                echo '</div>';
            }
            ?>
        </div>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success  pull-right']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
<?php
$this->registerJs('
    $(document).ready(function(){
        var htm_bak = $("#tt").last().eq(0).clone();
        
        $(document).on("click","#add_attr",function(){
            if(document.getElementById("tt"))
            {
                var htm=$("#tt").last().eq(0).clone();
                htm.find("a").attr("id","del_attr").attr("class","btn btn-danger col-md-2").text("删除");
                var old = parseInt(htm.find("input").attr("index"));
                var index = 1 + old;
//                console.log(htm);
                htm.find("input").eq(0).attr("id","productattr-"+index+"-attr");
                htm.find("input").eq(0).attr("name","ProductAttr["+index+"][attr]");
                htm.find("input").eq(0).attr("index",index);
                htm.find("input").eq(1).attr("id","productattr-"+index+"-price");
                htm.find("input").eq(1).attr("name","ProductAttr["+index+"][price]");
                htm.find("input").eq(1).attr("index",index);
                htm.find("input").eq(2).attr("id","productattr-"+index+"-count");
                htm.find("input").eq(2).attr("name","ProductAttr["+index+"][count]");
                htm.find("input").eq(2).attr("index",index);
                
                htm.find("input").eq(3).attr("name","ProductAttr["+index+"][pictures][]");
                htm.find("input").eq(3).attr("index",index);
                htm.find("input").eq(4).attr("id","productattr-"+index+"-pictures");
                htm.find("input").eq(4).attr("name","ProductAttr["+index+"][pictures][]");
                
                htm.find("input").eq(3).parent("div").parent("div").attr("class","form-group productattr-"+index+"-pictures");
                htm.find("input").eq(3).parent("div").parent("div").find("label").eq(0).attr("for","productattr-"+index+"-pictures");
                
                htm.appendTo("#attr_grp");
            }else{
                var htm=htm_bak;
                htm.appendTo("#attr_grp");
            }
        })


        $(document).on("click","#del_attr",function(event){
            $(event.target).parent("div").remove();
        })
    })
');