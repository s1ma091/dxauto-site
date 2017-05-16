<?php
namespace frontend\models;
use Yii;
use yii\base\Model;

class Phone extends Model {
    public $phone;

 public function rules()
    {
        return [
           ['phone', 'isNumeric'],
          
           
        ];
    }


public function isNumeric($attribute, $params)
{
    $this->$attribute =  preg_replace("/[^0-9]/", '',$this->$attribute);
    if (!preg_match('/^[0-9]{10}$/', $this->$attribute)) {
        $this->addError($attribute, 'Введіть коректний номер телефону');
    }
}
}