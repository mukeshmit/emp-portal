<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "campaigns".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $news_flash_id
 * @property integer $mc_camp_list_id
 * @property integer $mc_camp_id
 * @property integer $created_by
 * @property integer $created_at
 * @property integer $updated_at
 */
class Campaigns extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaigns';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'news_flash_id', 'mc_camp_list_id', 'mc_camp_id', 'created_by'], 'required'],
            [['user_id', 'news_flash_id', 'mc_camp_list_id', 'mc_camp_id', 'created_by', 'created_at', 'updated_at'], 'integer'],
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
            'news_flash_id' => 'Choose a news flash',
            'mc_camp_list_id' => 'Choose a Campaign',
            'mc_camp_id' => 'Mc Camp ID',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @inheritdoc
     * @return CampaignsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CampaignsQuery(get_called_class());
    }
}
