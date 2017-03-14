<?php

use yii\db\Migration;

/**
 * Handles the creation of table `likes`.
 */
class m161224_140926_create_likes_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('likes', [
            'id' => $this->primaryKey(),
              'user_id' => $this->integer()->notNull(),
              'situation_id' => $this->integer()->notNull()
              //'created_at' => $this->timestap()->defaultExpression('CURRENT_TIMESTAMP')

        ]);
        $this->createIndex(
            'idx_user_id',
            'likes',
            'user_id'
            );
        $this->addForeignKey(
            'fk_user_id_likes',
            'likes',
            'user_id',
            'users',
            'id',
            'RESTRICT'

            );
         $this->createIndex(
            'idx_situation_id',
            'likes',
            'situation_id'
            );
        $this->addForeignKey(
            'fk_situation_id_likes',
            'likes',
            'situation_id',
            'situation',
            'id',
            'RESTRICT'

            );




    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('likes');
    }
}
