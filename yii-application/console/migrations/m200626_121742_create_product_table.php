<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m200626_121742_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createProduct();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }

    public function createProduct()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'category' => $this->integer(),
            'category_id' => $this->integer(),
            'category_bisex_id' => $this->integer(),
            'image' => $this->string(),
            'size' => $this->string(),
            'color' => $this->string(),
            'status' => $this->integer()->defaultValue(1),
        ]);

        $this->insert('product', [
            'name' => 'Укороченная толстовка с капюшоном',
            'category' => 1,
            'category_id' => 3,
            'category_bisex_id' => 3,
            'image' => '1.jpg',
            'size' => 'S',
            'color' => 'красный',
        ]);

        $this->insert('product', [
            'name' => 'Короткое платье на тонких брительках с неоновым принтом',
            'category' => 1,
            'category_id' => 4,
            'category_bisex_id' => 4,
            'image' => '2.jpg',
            'size' => 'S',
            'color' => 'черный',
        ]);

        $this->insert('product', [
            'name' => 'Платье из искусственной кожи',
            'category' => 1,
            'category_id' => 4,
            'category_bisex_id' => 4,
            'image' => '3.jpg',
            'size' => 'S',
            'color' => 'черный',
        ]);

        $this->insert('product', [
            'name' => 'Кроп-топ с надписью "ORIGINAL"',
            'category' => 1,
            'category_id' => 2,
            'category_bisex_id' => 2,
            'image' => '4.jpg',
            'size' => 'S',
            'color' => 'оранжевый',
        ]);

        $this->insert('product', [
            'name' => 'Лёгкая хлопковая юбка с поясом',
            'category' => 1,
            'category_id' => 4,
            'category_bisex_id' => 4,
            'image' => '5.jpg',
            'size' => 'S',
            'color' => 'белый',
        ]);

        $this->insert('product', [
            'name' => 'Укороченная футболка',
            'category' => 1,
            'category_id' => 2,
            'category_bisex_id' => 2,
            'image' => '8.jpg',
            'size' => 'S',
            'color' => 'белый',
        ]);

        $this->insert('product', [
            'name' => 'Платье-сарафан из лёгкой ткани',
            'category' => 1,
            'category_id' => 4,
            'category_bisex_id' => 4,
            'image' => '9.jpg',
            'size' => 'M',
            'color' => 'коричневый',
        ]);

        $this->insert('product', [
            'name' => 'Топ с халтером',
            'category' => 1,
            'category_id' => 2,
            'category_bisex_id' => 2,
            'image' => '10.jpg',
            'size' => 'S',
            'color' => 'зелёный',
        ]);

        $this->insert('product', [
            'name' => 'Сетчатая неоновая футболка',
            'category' => 1,
            'category_id' => 2,
            'category_bisex_id' => 2,
            'image' => '13.jpg',
            'size' => 'M',
            'color' => 'оранжевый',
        ]);

        $this->insert('product', [
            'name' => 'Облегающий неоновый топ',
            'category' => 1,
            'category_id' => 2,
            'category_bisex_id' => 2,
            'image' => '14.jpg',
            'size' => 'M',
            'color' => 'зелёный',
        ]);

        $this->insert('product', [
            'name' => 'Короткая юбка из искуственной кожи',
            'category' => 1,
            'category_id' => 4,
            'category_bisex_id' => 4,
            'image' => '15.jpg',
            'size' => 'S',
            'color' => 'чёрный',
        ]);

        $this->insert('product', [
            'name' => 'Топ из кожи с длинным рукавом',
            'category' => 1,
            'category_id' => 2,
            'category_bisex_id' => 2,
            'image' => '16.jpg',
            'size' => 'S',
            'color' => 'чёрный',
        ]);

        $this->insert('product', [
            'name' => 'Велосипедки с змеиным принтом',
            'category' => 1,
            'category_id' => 5,
            'category_bisex_id' => 5,
            'image' => '17.jpg',
            'size' => 'S',
            'color' => 'змеиный принт',
        ]);

        $this->insert('product', [
            'name' => 'Короткий топ в оранжевую полоску',
            'category' => 1,
            'category_id' => 2,
            'category_bisex_id' => 2,
            'image' => '18.jpg',
            'size' => 'S',
            'color' => 'белый',
        ]);

        $this->insert('product', [
            'name' => 'Широкие джинсы',
            'category' => 1,
            'category_id' => 5,
            'category_bisex_id' => 5,
            'image' => '19.jpg',
            'size' => 'S',
            'color' => 'синий',
        ]);

        $this->insert('product', [
            'name' => 'Топ с длинным рукавом',
            'category' => 1,
            'category_id' => 2,
            'category_bisex_id' => 2,
            'image' => '20.jpg',
            'size' => 'S',
            'color' => 'чёрный',
        ]);

        $this->insert('product', [
            'name' => 'Джоггеры с высокой талией',
            'category' => 1,
            'category_id' => 5,
            'category_bisex_id' => 5,
            'image' => '21.jpg',
            'size' => 'S\M',
            'color' => 'бежевый',
        ]);

        $this->insert('product', [
            'name' => 'Длинное платье-сарафан',
            'category' => 1,
            'category_id' => 4,
            'category_bisex_id' => 4,
            'image' => '22.jpg',
            'size' => 'M',
            'color' => 'чёрный',
        ]);

        $this->insert('product', [
            'name' => 'Лёгкая блузка',
            'category' => 1,
            'category_id' => 2,
            'category_bisex_id' => 2,
            'image' => '25.jpg',
            'size' => 'M',
            'color' => 'чёрный',
        ]);

        $this->insert('product', [
            'name' => 'Короткая юбка с лёгкой плиссеровкой',
            'category' => 1,
            'category_id' => 4,
            'category_bisex_id' => 4,
            'image' => '26.jpg',
            'size' => 'S',
            'color' => 'коричневый',
        ]);

        $this->insert('product', [
            'name' => 'Неоновый боди на одно плечо',
            'category' => 1,
            'category_id' => 2,
            'category_bisex_id' => 2,
            'image' => '27.jpg',
            'size' => 'S',
            'color' => 'зелёный',
        ]);

        $this->insert('product', [
            'name' => 'Тёплые шорты с чёрным поясом',
            'category' => 1,
            'category_id' => 5,
            'category_bisex_id' => 5,
            'image' => '28.jpg',
            'size' => 'M',
            'color' => 'зелёный',
        ]);

        $this->insert('product', [
            'name' => 'Кофта из плотной ткани',
            'category' => 1,
            'category_id' => 1,
            'category_bisex_id' => 1,
            'image' => '29.jpg',
            'size' => 'M',
            'color' => 'чёрный',
        ]);

        $this->insert('product', [
            'name' => 'Джоггеры из мягкой ткани',
            'category' => 1,
            'category_id' => 5,
            'category_bisex_id' => 5,
            'image' => '30.jpg',
            'size' => 'S',
            'color' => 'зелёный',
        ]);

        $this->insert('product', [
            'name' => 'Футболка из плотной ткани с молнией',
            'category' => 1,
            'category_id' => 2,
            'category_bisex_id' => 2,
            'image' => '34.jpg',
            'size' => 'S',
            'color' => 'оранжевый',
        ]);

        $this->insert('product', [
            'name' => 'Джинсовая юбка',
            'category' => 1,
            'category_id' => 4,
            'category_bisex_id' => 4,
            'image' => '35.jpg',
            'size' => 'S',
            'color' => 'синий',
        ]);

        $this->insert('product', [
            'name' => 'Короткое розовое платье с принтом',
            'category' => 1,
            'category_id' => 4,
            'category_bisex_id' => 4,
            'image' => '36.jpg',
            'size' => 'S',
            'color' => 'розовый',
        ]);

        $this->insert('product', [
            'name' => 'Футболка в полоску',
            'category' => 1,
            'category_id' => 2,
            'category_bisex_id' => 2,
            'image' => '37.jpg',
            'size' => 'M',
            'color' => 'белый',
        ]);

        $this->insert('product', [
            'name' => 'Лёгкая куртка',
            'category' => 1,
            'category_id' => 1,
            'category_bisex_id' => 1,
            'image' => '38.jpg',
            'size' => 'M',
            'color' => 'бежевый',
        ]);

        $this->insert('product', [
            'name' => 'Прямые брюки',
            'category' => 1,
            'category_id' => 5,
            'category_bisex_id' => 5,
            'image' => '39.jpg',
            'size' => 'S',
            'color' => 'жёлтый',
        ]);

        $this->insert('product', [
            'name' => 'Тёплая кофта с длинным рукавом',
            'category' => 1,
            'category_id' => 3,
            'category_bisex_id' => 3,
            'image' => '40.jpg',
            'size' => 'M',
            'color' => 'коричневый',
        ]);

        $this->insert('product', [
            'name' => 'Джинсовая юбка',
            'category' => 1,
            'category_id' => 4,
            'category_bisex_id' => 4,
            'image' => '41.jpg',
            'size' => 'S',
            'color' => 'синий',
        ]);

        $this->insert('product', [
            'name' => 'Кофтка с цветочным принтом',
            'category' => 1,
            'category_id' => 3,
            'category_bisex_id' => 3,
            'image' => '42.jpg',
            'size' => 'M',
            'color' => 'серый',
        ]);

        $this->insert('product', [
            'name' => 'Кожаная юбка с молнией спереди',
            'category' => 1,
            'category_id' => 4,
            'category_bisex_id' => 4,
            'image' => '43.jpg',
            'size' => 'M',
            'color' => 'красный',
        ]);

        $this->insert('product', [
            'name' => 'Короткая футболка из плотной ткани',
            'category' => 1,
            'category_id' => 2,
            'category_bisex_id' => 2,
            'image' => '44.jpg',
            'size' => 'S',
            'color' => 'зелёный',
        ]);

        $this->insert('product', [
            'name' => 'Джинсы с лампасами и разрезом',
            'category' => 1,
            'category_id' => 5,
            'category_bisex_id' => 5,
            'image' => '45.jpg',
            'size' => 'S',
            'color' => 'синий',
        ]);

        $this->insert('product', [
            'name' => 'Спортивная куртка с молнией',
            'category' => 1,
            'category_id' => 1,
            'category_bisex_id' => 1,
            'image' => '46.jpg',
            'size' => 'M',
            'color' => 'розовый',
        ]);

        $this->insert('product', [
            'name' => 'Зауженные брюки',
            'category' => 1,
            'category_id' => 5,
            'category_bisex_id' => 5,
            'image' => '47.jpg',
            'size' => 'M',
            'color' => 'зелёный',
        ]);

        $this->insert('product', [
            'name' => 'Футболка с текстовым принтом',
            'category' => 2,
            'category_id' => 2,
            'category_bisex_id' => 2,
            'image' => '6.jpg',
            'size' => 'M',
            'color' => 'чёрный',
        ]);

        $this->insert('product', [
            'name' => 'Джоггеры из политрикотажа в тонкую полоску',
            'category' => 2,
            'category_id' => 4,
            'category_bisex_id' => 5,
            'image' => '7.jpg',
            'size' => 'M',
            'color' => 'синий',
        ]);

        $this->insert('product', [
            'name' => 'Лёгкая кофта с длинными жёлтыми рукавами',
            'category' => 2,
            'category_id' => 3,
            'category_bisex_id' => 3,
            'image' => '11.jpg',
            'size' => 'M',
            'color' => 'белый',
        ]);

        $this->insert('product', [
            'name' => 'Светлые джоггеры',
            'category' => 2,
            'category_id' => 4,
            'category_bisex_id' => 5,
            'image' => '12.jpg',
            'size' => 'M',
            'color' => 'бежевый',
        ]);

        $this->insert('product', [
            'name' => 'Лёгкая куртка с принтом',
            'category' => 2,
            'category_id' => 1,
            'category_bisex_id' => 1,
            'image' => '23.jpg',
            'size' => 'M',
            'color' => 'коричневый',
        ]);

        $this->insert('product', [
            'name' => 'Лёгкая штаны с принтом',
            'category' => 2,
            'category_id' => 4,
            'category_bisex_id' => 5,
            'image' => '24.jpg',
            'size' => 'M',
            'color' => 'коричневый',
        ]);

        $this->insert('product', [
            'name' => 'Лёгкая куртка на пуговицах',
            'category' => 2,
            'category_id' => 1,
            'category_bisex_id' => 1,
            'image' => '31.jpg',
            'size' => 'M',
            'color' => 'жёлтый',
        ]);

        $this->insert('product', [
            'name' => 'Кофта с длинным рукавом',
            'category' => 2,
            'category_id' => 3,
            'category_bisex_id' => 3,
            'image' => '32.jpg',
            'size' => 'M',
            'color' => 'белый',
        ]);

        $this->insert('product', [
            'name' => 'Лёгкие брюки',
            'category' => 2,
            'category_id' => 4,
            'category_bisex_id' => 5,
            'image' => '33.jpg',
            'size' => 'M',
            'color' => 'серый',
        ]);
    }
}
