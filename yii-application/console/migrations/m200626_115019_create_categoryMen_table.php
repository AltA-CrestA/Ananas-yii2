<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categoryMen}}`.
 */
class m200626_115019_create_categoryMen_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createCategoryMen();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category_men}}');
    }

    public function createCategoryMen()
    {
        $this->createTable('{{%category_men}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'sort_order' => $this->integer(),
            'status' => $this->integer()->defaultValue(1),
        ]);

        $this->insert('category_men', [
            'name' => 'Верхняя одежда',
            'sort_order' => '1',
        ]);

        $this->insert('category_men', [
            'name' => 'Рубашки\футболки',
            'sort_order' => '2',
        ]);

        $this->insert('category_men', [
            'name' => 'Свитера\толстовки',
            'sort_order' => '3',
        ]);

        $this->insert('category_men', [
            'name' => 'Джинсы\шорты',
            'sort_order' => '4',
        ]);

        $this->insert('category_men', [
            'name' => 'Аксессуары',
            'sort_order' => '5',
        ]);
    }
}
