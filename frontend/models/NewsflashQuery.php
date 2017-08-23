<?php

namespace app\frontend\models;

/**
 * This is the ActiveQuery class for [[Newsflash]].
 *
 * @see Newsflash
 */
class NewsflashQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Newsflash[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Newsflash|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
