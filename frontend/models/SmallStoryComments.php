<?php

namespace frontend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "small_story_comments".
 *
 * @property integer $id
 * @property string $content
 * @property string $story_id
 * @property integer $pid
 * @property integer $review
 * @property string $created_at
 */
class SmallStoryComments extends \yii\db\ActiveRecord
{
    public static function getDb()
    {
        return Yii::$app->getDb('story_db');
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'small_story_comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'story_id',], 'required'],
            [['story_id', 'pid', 'review'], 'integer'],
            [['created_at'], 'safe'],
            [['pid'], 'default', 'value' => 0],
            [['review'], 'default', 'value' => 1],
            [['content'], 'string', 'max' => 255],
            ['user_id', 'default', 'value' => Yii::$app->user->id]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'story_id' => 'Story ID',
            'pid' => 'Pid',
            'review' => 'Review',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @inheritdoc
     * @return SmallStoryCommentsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SmallStoryCommentsQuery(get_called_class());
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
