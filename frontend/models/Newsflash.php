<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "newsflash".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $body
 * @property string $image
 * @property integer $type
 * @property integer $created_at
 * @property integer $updated_at
 */
class Newsflash extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'newsflash';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'body'], 'required'],
            [['user_id', 'type', 'created_at', 'updated_at'], 'integer'],
            [['body'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['image'], 'required','on' =>'update'], //
            [['image'], 'file','skipOnEmpty' => true,'extensions' => 'png, jpg'],
            // [['title'], 'unique'],
        ];
		
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'title' => Yii::t('app', 'Title'),
            'body' => Yii::t('app', 'Body'),
            'image' => Yii::t('app', 'Image'),
            'type' => Yii::t('app', 'Type'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @inheritdoc
     * @return NewsflashQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NewsflashQuery(get_called_class());
    }
	
	public static function getAllflashData()
    {
		$data = Newsflash::find()->orderBy('created_at')->all();
		
        return $data;
    }
	
	public static function getSingleData($id)
    {
		$data = Newsflash::find()
					->where(['id' => $id])
					->one();
		
        return $data;
    }
	
	public function upload()
    {
        if ($this->validate()) {
            $this->image->saveAs('uploads/' . $this->image->baseName . '.' . $this->image->extension);
            return true;
        } else {
            return false;
        }
    }
	
	public function scenarios()
    {
        $scenarios = parent::scenarios();
		$scenarios['update'] = ['image'];
		return $scenarios;
    }
	
}
