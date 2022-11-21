<?php

use yii\db\Migration;

/**
 * Class m221119_130628_user
 */
class m221119_130628_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255),
            'password' => $this->string(255),
            'auth_key' => $this->string(255),
            'access_token' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('user');
//        echo "m221119_130628_user cannot be reverted.\n";
//
//        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221119_130628_user cannot be reverted.\n";

        return false;
    }
    */
}
