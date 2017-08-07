<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[FilmStudio]].
 *
 * @see FilmStudio
 */
class FilmStudioQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return FilmStudio[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return FilmStudio|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
