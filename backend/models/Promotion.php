<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "promotion".
 *
 * @property string $id
 * @property string $title
 * @property int $status
 * @property string $pictures
 * @property int $created_at
 * @property int $updated_at
 *
 * @property RefPromotionProduct[] $refPromotionProducts
 */
class Promotion extends CommonModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'promotion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['pictures'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['title'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'status' => Yii::t('app', 'Status'),
            'pictures' => Yii::t('app', 'Pictures'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefPromotionProducts()
    {
        return $this->hasMany(RefPromotionProduct::className(), ['promotion_id' => 'id']);
    }
}
