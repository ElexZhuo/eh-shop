<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_attr".
 *
 * @property string $id
 * @property string $product_id
 * @property string $attr
 * @property string $pictures
 * @property string $count
 * @property string $price
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_user_id
 * @property int $updated_user_id
 *
 * @property Cart[] $carts
 * @property OrderDetail[] $orderDetails
 * @property Product $product
 */
class ProductAttr extends CommonModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_attr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'count', 'created_at', 'updated_at', 'created_user_id', 'updated_user_id'], 'integer'],
            [['attr','price'], 'required'],
            [['pictures'], 'string'],
            [['price'], 'number'],
            [['attr'], 'string', 'max' => 64],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'attr' => Yii::t('app', 'Attr'),
            'pictures' => Yii::t('app', 'Pictures'),
            'count' => Yii::t('app', 'Count'),
            'price' => Yii::t('app', 'Price'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_user_id' => Yii::t('app', 'Created User ID'),
            'updated_user_id' => Yii::t('app', 'Updated User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarts()
    {
        return $this->hasMany(Cart::className(), ['product_attr_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['product_attr_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
