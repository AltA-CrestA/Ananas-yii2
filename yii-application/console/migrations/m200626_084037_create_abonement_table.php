<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%abonement}}`.
 */
class m200626_084037_create_abonement_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createAbonement();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%abonement}}');
    }

    public function createAbonement()
    {
        $this->createTable('{{%abonement}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'item' => $this->integer(),
            'duration' => $this->integer(),
            'price' => $this->integer(),
            'description' => $this->text(),
            'sort_order' => $this->integer(),
            'status' => $this->integer()->defaultValue(1),
        ]);

        $this->insert('abonement', [
            'name' => 'Абонемент №1',
            'item' => 2,
            'duration' => 3,
            'price' => 2000,
            'description' => 'Купив абонемент, вы получаете доступ к бесконечному количеству образов из нашего гардероба, которым вы можете пользоваться в течении 3 месяцев, арендуя по 2 вещи в течении каждого из них. Аренда на каждую из вещей длится ровно месяц, в конце которого вы сдаете ранее выбранные вещи и выбираете новые.<br><br>Такой абонемент идеально подойдет для тех кто в первые знакомится с концепцией shopsharing, и делает лишь первые шаги в этом направлении.',
            'sort_order' => 1,
        ]);

        $this->insert('abonement', [
            'name' => 'Абонемент №2',
            'item' => 4,
            'duration' => 3,
            'price' => 3000,
            'description' => 'Купив абонемент, в течении трех месяцев вам становится доступны 4 вещи из нашего гардероба. Каждый месяц вы можете подбирать для себя образы которые наилучшим образом подчеркнут вашу индивидуальность, и позволят во всей полноте ощутить все преимущества нашего сервиса!',
            'sort_order' => 2,
        ]);

        $this->insert('abonement', [
            'name' => 'Абонемент №3',
            'item' => 2,
            'duration' => 6,
            'price' => 4500,
            'description' => 'Открывает доступ к нашему гардеробу на пол года для его обладателя, в течении этого времени, вы можете ежемесячно брать и сдавать любые понравившееся вам две вещи, объединяя их между собой и создавая неповторимы и запоминающееся образы.',
            'sort_order' => 3,
        ]);

        $this->insert('abonement', [
            'name' => 'Абонемент №4',
            'item' => 4,
            'duration' => 6,
            'price' => 6000,
            'description' => 'С момента покупки, вы в праве выбрать четыре вещи и менять их ежемесячно в течении следующих 6 месяцев, на это время можно забыть о вопросе «что мне одеть?», мы позаботимся об этом!',
            'sort_order' => 4,
        ]);
    }
}
