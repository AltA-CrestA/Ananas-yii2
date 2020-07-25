<?php

namespace frontend\models;

use phpDocumentor\Reflection\Types\Integer;
use Yii;
use yii\db\ActiveRecord;
use yii\redis\Connection;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string|null $verification_token
 */
class User extends ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
        ];
    }

    public static function findByUsername($username)
    {
        return self::find()->where(['username' => $username])->one();
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Finds an identity by the given ID.
     *
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string current user auth key
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @param string $authKey
     * @return bool if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function addFavorite($product)
    {
        /* @var $redis Connection */
        $redis = Yii::$app->redis;
        $redis->sadd("user:{$this->id}:favorite", $product->id);
    }

    public function getFavorites()
    {
        /* @var $redis Connection */
        $redis = Yii::$app->redis;
        $key = "user:{$this->id}:favorite";
        $ids = $redis->smembers($key);
        return Product::find()->where(['id' => $ids])->asArray()->all();
    }

    public function deleteFavorite($product)
    {
        /* @var $redis Connection */
        $redis = Yii::$app->redis;
        $redis->srem("user:{$this->id}:favorite", $product->id);
    }

    public function countFavorite()
    {
        /* @var $redis Connection */
        $redis = Yii::$app->redis;

        return $redis->scard("user:{$this->id}:favorite");
    }

    public function isAddedToFavorite($product)
    {
        /* @var $redis Connection */
        $redis = Yii::$app->redis;
        return $redis->sismember("user:{$this->id}:favorite", "$product");
    }
}
