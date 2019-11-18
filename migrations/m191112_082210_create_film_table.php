<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%film}}`.
 */
class m191112_082210_create_film_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%film}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'image_ext' => $this->string(),
            'preview' => $this->text(),
            'time' => $this->time(),
            'age_restrict' => $this->string(3)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%film}}');
    }
}
