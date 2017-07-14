<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users`.
 */
class m170713_143547_create_users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'groupId' => $this->integer(11)->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'lastName' => $this->string()->notNull(),
            'firstName' => $this->string()->notNull(),
            'state' => $this->boolean()->defaultValue(1),
            'creationDate' => $this->dateTime()->defaultExpression('NOW()'),
        ]);

        $this->createIndex('users_groupId', 'users', 'groupId');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users');
    }
}
