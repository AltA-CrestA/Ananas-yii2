<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category_bisex}}`.
 */
class m200626_120522_create_category_bisex_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createCategoryBisex();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category_bisex}}');
    }

    public function createCategoryBisex()
    {
        $this->createTable('{{%category_bisex}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'sort_order' => $this->integer(),
            'status' => $this->integer()->defaultValue(1),
        ]);

        $this->insert('category_bisex', [
            'name' => 'Верхняя одежда',
            'sort_order' => '1',
        ]);

        $this->insert('category_bisex', [
            'name' => 'Рубашки/блузки/футболки',
            'sort_order' => '2',
        ]);

        $this->insert('category_bisex', [
            'name' => 'Свитера/толстовки',
            'sort_order' => '3',
        ]);

        $this->insert('category_bisex', [
            'name' => 'Платья\юбки',
            'sort_order' => '4',
        ]);

        $this->insert('category_bisex', [
            'name' => 'Джинсы/шорты',
            'sort_order' => '5',
        ]);

        $this->insert('category_bisex', [
            'name' => 'Аксессуары',
            'sort_order' => '6',
        ]);
    }
}
