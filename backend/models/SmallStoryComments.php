<?php

namespace backend\models;

use Yii;

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
            [['content', 'story_id', 'pid'], 'required'],
            [['story_id', 'pid', 'review'], 'integer'],
            [['created_at'], 'safe'],
            [['content'], 'string', 'max' => 255],
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
            'review' => '1未审核2不通过3通过',
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
}
