<?php


namespace frontend\models\forms;


use frontend\models\User;
use yii\base\Model;

class EditForm extends Model
{

    public $name;
    public $email;
    public $phone;
    public $username;

    /**
     * @var User
     */
    private $_user;

    /**
     * @param User $user
     * @param array $config
     */
    public function __construct(User $user, $config = [])
    {
        $this->_user = $user;
        $this->email = $user->email;
        parent::__construct($config);
    }

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

        ];
    }

    /**
     * Save User
     * @return User | null
     */
    public function edit()
    {

        if ($this->validate()) {
            $user = $this->_user;
            $user->name = $this->name;
            $user->email = $this->email;
            $user->phone = $this->phone;
            $user->username = $this->username;
            $user->updated_at = $time = time();

            if ($user->save()) {
                return $user;
            }
        }
    }

}