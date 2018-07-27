<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_promotion_product".
 *
 * @property string $id
 * @property string $product_id
 * @property string $promotion_id
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_user_id
 * @property int $updated_user_id
 *
 * @property Product $product
 * @property Promotion $promotion
 */
class RefPromotionProduct extends CommonModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_promotion_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'promotion_id'], 'required'],
            [['product_id', 'promotion_id'], 'integer'],
//            [['product_id', 'promotion_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_id' => Yii::t('app', 'Product'),
            'promotion_id' => Yii::t('app', 'Promotions'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_user_id' => Yii::t('app', 'Created User ID'),
            'updated_user_id' => Yii::t('app', 'Updated User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPromotion()
    {
        return $this->hasOne(Promotion::className(), ['id' => 'promotion_id']);
    }
}
