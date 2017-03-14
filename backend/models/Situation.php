<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "situation".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $tag
 * @property string $content
 * @property integer $type
 * @property string $created_at
 *
 * @property Users $user
 */
class Situation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
  // ...

    public static function tableName()
    {
        return 'situation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'tag', 'content', 'type'], 'required'],
            [['user_id', 'type'], 'integer'],
            [['content'], 'string'],
            [['created_at'], 'safe'],
            [['tag'], 'string', 'max' => 500],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'tag' => 'Tag',
            'content' => 'Content',
            'type' => 'Type',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
