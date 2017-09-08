<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Campaigns]].
 *
 * @see Campaigns
 */
class CampaignsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Campaigns[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Campaigns|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
