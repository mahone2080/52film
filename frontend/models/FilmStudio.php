<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "film_studio".
 *
 * @property string $id
 * @property string $url
 * @property string $title
 * @property string $category
 * @property string $content
 * @property resource $thumb
 * @property string $imgs
 * @property resource $pics
 * @property string $download
 * @property string $created_at
 */
class FilmStudio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'film_studio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['url', 'title', 'content',], 'required'],
            [['content', 'thumb', 'imgs', 'pics', 'download'], 'string'],
            [['created_at'], 'safe'],
            [['url', 'title'], 'string', 'max' => 255],
            [['url'], 'unique'],
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
            'thumb' => 'Thumb',
            'imgs' => 'Imgs',
            'pics' => 'Pics',
            'download' => 'Download',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @inheritdoc
     * @return FilmStudioQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FilmStudioQuery(get_called_class());
    }
}
