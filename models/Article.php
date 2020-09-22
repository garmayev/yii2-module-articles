<?php

namespace coal\modules\events\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string $title
 * @property string $thumbs
 * @property string $summary
 * @property string $description
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'thumbs', 'summary', 'description'], 'required'],
            [['description'], 'string'],
            [['title', 'thumbs', 'summary'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'thumbs' => Yii::t('app', 'Thumbs'),
            'summary' => Yii::t('app', 'Summary'),
            'description' => Yii::t('app', 'Description'),
        ];
    }
}
