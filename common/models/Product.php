<?php

namespace common\models;

use Yii;
use common\models\User;
use common\models\CommonModel;
use common\models\Category;

/**
 * This is the model class for table "product".
 *
 * @property string $id
 * @property string $category_id
 * @property string $product_title
 * @property string $product_desc
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_user_id
 * @property int $updated_user_id
 *
 * @property Category $category
 * @property User $createdUser
 * @property User $updatedUser
 * @property ProductAttr[] $productAttrs
 * @property RefPromotionProduct[] $refPromotionProducts
 */
class Product extends CommonModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'product_title', 'product_desc'], 'required'],
            [['category_id', 'status', 'created_at', 'updated_at', 'created_user_id', 'updated_user_id'], 'integer'],
            [['product_desc'], 'string'],
            [['product_title'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_user_id' => 'id']],
            [['updated_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category_id' => Yii::t('app', 'Categories'),
            'product_title' => Yii::t('app', 'Product Title'),
            'product_desc' => Yii::t('app', 'Product Desc'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_user_id' => Yii::t('app', 'Created User ID'),
            'updated_user_id' => Yii::t('app', 'Updated User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductAttrs()
    {
        return $this->hasMany(ProductAttr::className(), ['product_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefPromotionProducts()
    {
        return $this->hasMany(RefPromotionProduct::className(), ['product_id' => 'id']);
    }
}
