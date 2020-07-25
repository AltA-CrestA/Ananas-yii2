<?php


namespace frontend\models\forms;


use frontend\models\User;
use Yii;
use yii\base\Model;

class SignupForm extends Model
{

    public $name;
    public $email;
    public $phone;
    public $username;
    public $password;
    public $card;
    public $password_repeat;

    public function rules()
    {
        return [
            ['name', 'trim'],
            ['name', 'required'],
            ['name', 'string', 'min' => 6, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            [['email'], 'unique', 'targetClass' => User::className()],

            ['phone', 'required'],
            ['phone', 'string'],

            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'string', 'min' => 6, 'max' => 255],
            [['username'], 'unique', 'targetClass' => User::className()],

            [['password', 'password_repeat'], 'required'],
            ['password', 'string', 'min' => 6],
            ['password_repeat', 'compare', 'compareAttribute' => 'password'],

            ['card', 'integer'],
            [['card'], 'unique', 'targetClass' => User::className()],
        ];
    }

    /**
     * Save User
     * @return User | null
     */
    public function save()
    {

        if ($this->validate()) {
            $user = new User;
            $user->name = $this->name;
            $user->email = $this->email;
            $user->phone = $this->phone;
            $user->username = $this->username;
            $user->created_at = $time = time();
            $user->updated_at = $time;
            $user->auth_key = Yii::$app->security->generateRandomString();
            $user->password_hash = Yii::$app->security->generatePasswordHash($this->password);
            $user->card = $this->card;

            if ($user->save()) {
                return $user;
            }
        }
    }

}