<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $comment;
    public $phone;



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'phone'], 'required', 'message'=>'Заповніть це поле'],
            ['email', 'email', 'message'=>'Введіть коректний  Email'],
            // email has to be a valid email address
            ['comment', 'trim'],
       
        ];
    }

}
