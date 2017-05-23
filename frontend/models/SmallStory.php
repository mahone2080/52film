<?php

namespace frontend\models;

use Yii;
use frontend\models\SmallStoryComments;

/**
 * This is the model class for table "small_story".
 *
 * @property string $id
 * @property string $url
 * @property string $title
 * @property string $content
 * @property string $category
 * @property string $created_at
 */
class SmallStory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'small_story';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'title', 'content', 'category', 'created_at'], 'required'],
            [['content'], 'string'],
            [['url', 'title', 'category', 'created_at'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
            'title' => 'Title',
            'content' => 'Content',
            'category' => 'Category',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @inheritdoc
     * @return SmallStoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SmallStoryQuery(get_called_class());
    }

    public function getSmallStoryComments()
    {
//        return $this->hasMany(SmallStoryComments::className(), ['story_id' => 'id'])->where(['review' => 3]);
        return $this->hasMany(SmallStoryComments::className(), ['story_id' => 'id']);
    }
}
