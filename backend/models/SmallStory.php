<?php

namespace backend\models;

use Yii;

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
            [['title', 'content', 'category'], 'required'],
            [['content'], 'string'],
            [['url', 'title', 'category'], 'string', 'max' => 255],
            [['created_at'],'safe'],
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
}
