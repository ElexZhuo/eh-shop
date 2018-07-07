<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/25
 * Time: 16:03
 */

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use common\models\User;

class CommonModel extends ActiveRecord
{
    public function behaviors()
    {
        return [
            [
                'class'=>TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at','updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value'=>time(),
            ],
            [
                'class'=>BlameableBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_user_id','updated_user_id'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_user_id'],
                ],
                'value'=>Yii::$app->user->identity->getId(),
            ],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(User::className(), ['id' => 'created_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedUser()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_user_id']);
    }
}