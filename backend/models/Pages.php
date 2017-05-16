<?php

namespace backend\models;

use Yii;


class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'value', 'nameBlock'], 'required'],
            [['value', 'all_text', 'nameBlock'], 'string'],
            [['name'], 'string', 'max' => 22],
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
            'nameBlock' => 'NameBLock',
            'value' => 'Value',
            'all_text' => 'All Text',
            'image'=> 'Image',
            
        ];
    }
}
