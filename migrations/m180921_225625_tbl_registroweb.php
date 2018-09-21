<?php

use yii\db\Migration;

/**
 * Class m180921_225625_tbl_registroweb
 */
class m180921_225625_tbl_registroweb extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('registroweb', [
            'id' => $this->primaryKey(),
		'nombres' => $this->string(70)->notNull(),
		'apellidos' => $this->string(70)->notNull(), 
		'email' => $this->string(70)->notNull()->unique(),
		'celular' => $this->integer()->notNull(),
        ]);
	

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180921_225625_tbl_registroweb cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180921_225625_tbl_registroweb cannot be reverted.\n";

        return false;
    }
    */
}
