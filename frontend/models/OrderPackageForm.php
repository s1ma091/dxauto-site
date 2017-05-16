<?php
namespace frontend\models;
use Yii;
use yii\base\Model;

class OrderPackageForm extends Model {
    public $name;
    public $email;
    public $phone;
    public $company;
    public $comment;
    public $workPlaceCount;
    public $departmentCount;
    public $country;
    public $city;
    public $address;
    public $package;
    public $checked;

 public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'phone', 'workPlaceCount', 'departmentCount'], 'required', 'message'=>'Будь ласка, заповніть це поле'],
          [['company', 'city', 'address', 'comment', 'country', 'package', 'checked'], 'trim'],
            // email has to be a valid email address
           [['email', 'email'],'required', 'message'=>'Введіть коректний Email'],
           ['phone', 'isNumeric']
           
        ];
    }
public function isNumeric($attribute)
{
    if (!preg_match('/^[0-9]{10}$/', $this->$attribute)) {
        $this->addError($attribute, 'Введіть коректний номер телефону');
    }


}
}