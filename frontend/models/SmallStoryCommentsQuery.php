<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[SmallStoryComments]].
 *
 * @see SmallStoryComments
 */
class SmallStoryCommentsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return SmallStoryComments[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return SmallStoryComments|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
