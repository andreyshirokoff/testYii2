<?php

use yii\db\Migration;

/**
 * Class m221119_132324_product
 */
class m221119_132324_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'category_name' => $this->string(255),
            'brand_name' => $this->string(255),
            'price' => $this->integer(11),
            'rrp_price' => $this->integer(11),
            'status' => $this->integer(11),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221119_132324_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221119_132324_product cannot be reverted.\n";

        return false;
    }
    */
}
