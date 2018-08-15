<?php

namespace common\models;

use Yii;
use app\models\RefPromotionProduct;
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
 * @property AdLoc $adLoc
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
            [['status','ad_loc_id'], 'integer'],
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
            'ad_loc_id' => Yii::t('app', 'Ad Loc'),
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdLoc()
    {
        return $this->hasOne(AdLoc::className(), ['id' => 'ad_loc_id']);
    }
}
