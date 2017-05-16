<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $text
 * @property string $all_text
 * @property string $date
 * @property integer $views_count
 * @property string $organization
 * @property string $img
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'title', 'text', 'all_text', 'organization'], 'required'],
            [['title', 'text', 'all_text'], 'string'],
            [['date'], 'safe'],
            [['views_count'], 'integer'],
            [['name'], 'string', 'max' => 22],
            [['organization'], 'string', 'max' => 32],
             [['image'], 'file', 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'text' => 'Text',
            'all_text' => 'All Text',
            'date' => 'Date',
            'views_count' => 'Views Count',
            'organization' => 'Organization',
            'image' => 'Image',
        ];
    }
}
