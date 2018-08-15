<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ad_loc".
 *
 * @property string $id
 * @property string $tag
 * @property string $code
 * @property string $desc
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_user_id
 * @property int $updated_user_id
 */
class AdLoc extends CommonModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ad_loc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tag'], 'required'],
            [['desc'], 'string'],
            [['code'], 'unique'],
            [['tag'], 'string', 'max' => 255],
            [['code'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tag' => Yii::t('app', 'Tag'),
            'code' => Yii::t('app', 'Code'),
            'desc' => Yii::t('app', 'Desc'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_user_id' => Yii::t('app', 'Created User ID'),
            'updated_user_id' => Yii::t('app', 'Updated User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPromotions()
    {
        return $this->hasMany(Promotion::className(), ['ad_loc_id' => 'id']);
    }
}
