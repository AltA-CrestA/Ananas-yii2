<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "abonement".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $item
 * @property int|null $duration
 * @property int|null $price
 * @property string|null $description
 * @property int|null $sort_order
 * @property int|null $status
 */
class Abonement extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'abonement';
    }
}
