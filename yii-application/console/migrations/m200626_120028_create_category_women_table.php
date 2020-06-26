<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category_woman}}`.
 */
class m200626_120028_create_category_women_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createCategoryWomen();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category_women}}');
    }

    public function createCategoryWomen()
    {
        $this->createTable('{{%category_women}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'sort_order' => $this->integer(),
            'status' => $this->integer()->defaultValue(1),
        ]);

        $this->insert('category_women', [
            'name' => 'Верхняя одежда',
            'sort_order' => '1',
        ]);

        $this->insert('category_women', [
            'name' => 'Блузки\футболки',
            'sort_order' => '2',
        ]);

        $this->insert('category_women', [
            'name' => 'Толстовки\свитера',
            'sort_order' => '3',
        ]);

        $this->insert('category_women', [
            'name' => 'Платья\юбки',
            'sort_order' => '4',
        ]);

        $this->insert('category_women', [
            'name' => 'Джинсы',
            'sort_order' => '5',
        ]);

        $this->insert('category_women', [
            'name' => 'Аксессуары',
            'sort_order' => '6',
        ]);
    }
}
