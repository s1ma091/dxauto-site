<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "orderform".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $company
 * @property string $comment
 * @property integer $workPlaceCount
 * @property integer $departmentCount
 * @property string $country
 * @property string $city
 * @property string $address
 * @property string $package
 * @property integer $checked
 */
class Orderform extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orderform';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'workPlaceCount', 'departmentCount'], 'required'],
            [['comment', 'address', 'checked'], 'string'],
            [['workPlaceCount', 'departmentCount', ], 'integer'],
            [['name', 'email', 'company'], 'string', 'max' => 32],
            [['phone', 'country'], 'string', 'max' => 22],
            [['city'], 'string', 'max' => 30],
            [['package'], 'string', 'max' => 20],
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
            'email' => 'Email',
            'phone' => 'Phone',
            'company' => 'Company',
            'comment' => 'Comment',
            'workPlaceCount' => 'Work Place Count',
            'departmentCount' => 'Department Count',
            'country' => 'Country',
            'city' => 'City',
            'address' => 'Address',
            'package' => 'Package',
            'checked' => 'Checked',
        ];
    }
}
