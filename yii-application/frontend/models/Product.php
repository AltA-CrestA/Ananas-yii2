<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $category
 * @property int|null $category_id
 * @property int|null $category_bisex_id
 * @property string|null $image
 * @property string|null $size
 * @property string|null $color
 * @property int|null $status
 */
class Product extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'category' => 'Category',
            'category_id' => 'Category ID',
            'category_bisex_id' => 'Category Bisex ID',
            'image' => 'Image',
            'size' => 'Size',
            'color' => 'Color',
            'status' => 'Status',
        ];
    }
}
