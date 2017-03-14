<?php

use yii\db\Migration;

/**
 * Handles the creation of table `year`.
 */
class m170127_174707_create_year_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('year', [
            'id' => $this->primaryKey(),
            'yearID' => $this->integer(),
            'theme' => $this->string(),
            'currentYear' => $this->boolean(),
            'date' => $this->date(),
            'description' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('year');
    }
}
