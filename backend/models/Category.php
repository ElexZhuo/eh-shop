<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property string $id
 * @property string $title
 * @property string $parent_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Category $parent
 * @property Category[] $categories
// * @property Product[] $products
 */
class Category extends CommonModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id','created_at', 'updated_at'], 'integer'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 32],
            [['title'], 'unique'],
//            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'parent_id' => Yii::t('app', 'Parent ID'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['parent_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }

    public function getCategoryList(){
        $data = ArrayHelper::toArray(self::find()->all());
        $data = $this->mergeTree($data);
        $data = $this->setPrefix($data);
        $categoryList = ['添加顶级类目'];
        foreach ($data as $item){
            $categoryList[$item['id']] = $item['title'];
        }
        return $categoryList;
    }

    public function mergeTree($data,$pid = 0){
        $tree = [];
        foreach ($data as $item){
            if($item['parent_id'] == $pid){
                $tree[] = $item;
                $tree = array_merge($tree,$this->mergeTree($data,$item['id']));
            }
        }
        return $tree;
    }

    public function  setPrefix($data , $p = "|---"){
        $tree = [];
        $num = 1;
        $prefix = [0 => 1];
        while($val = current($data)) {
            $key = key($data);
            if ($key > 0) {
                if ($data[$key - 1]['parent_id'] != $val['parent_id']) {
                    $num ++;
                }
            }
            if (array_key_exists($val['parent_id'], $prefix)) {
                $num = $prefix[$val['parent_id']];
            }
            $val['title'] = str_repeat($p, $num).$val['title'];
            $prefix[$val['parent_id']] = $num;
            $tree[] = $val;
            next($data);
        }
        return $tree;
    }

    /**
     * 查询所有的顶级分类
     *
     */
    public function getPrimaryCate()
    {
        $data = self::find()->where("parent_id = :pid", [":pid" => 0]);
        if (empty($data)) {
            return [];
        }
        $pages = new \yii\data\Pagination(['totalCount' => $data->count(), 'pageSize' => '10']);
        $data = $data->orderBy('created_at desc')->offset($pages->offset)->limit($pages->limit)->all();
        if (empty($data)) {
            return [];
        }
        $primary = [];
        foreach ($data as $item) {
            $primary[] = [
                'id' => $item->id,
                'text' => $item->title,
                'children' => $this->getChild($item->id)
            ];
        }
        return ['data' => $primary, 'pages' => $pages];
    }

    /**
     * getChild 递归查询所有子类数据
     *
     *
     */
    public function getChild($pid)
    {
        $data = self::find()->where('parent_id = :pid', [":pid" => $pid])->all();
        if (empty($data)) {
            return [];
        }
        $children = [];
        foreach ($data as $item) {
            $children[] = [
                "id" => $item->id,
                "text" => $item->title,
                "children" => $this->getChild($item->id)
            ];
        }
        return $children;
    }


}
