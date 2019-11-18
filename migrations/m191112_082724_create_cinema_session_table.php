<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cinema_session}}`.
 */
class m191112_082724_create_cinema_session_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cinema_session}}', [
            'id' => $this->primaryKey(),
            'film_id' => $this->integer(),
            'date' => $this->date(),
            'time' => $this->time(),
            'value' => $this->double(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cinema_session}}');
    }
}
