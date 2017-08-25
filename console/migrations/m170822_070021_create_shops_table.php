<?php

use yii\db\Migration;

/**
 * Handles the creation of table `shops`.
 */
class m170822_070021_create_shops_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('shops', 

        [

            'Id' => $this->primaryKey(),
            'Tinnumber' => $this->string()->notNull()->unique(),
            'Nameshop' => $this->string()->notNull(),
            'Ownershop' => $this->string()->notNull(),
            'Statusshop' => $this->string()->notNull(),
            'Email' => $this->string()->notNull()->unique(),
            'Phonenumber' => $this->string()->notNull(), 
            'Address' => $this->string()->notNull(),
            'Datergst' => $this->string()->notNull()->unique(),
            'Datermv' => $this->string()->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('shops');
    }
}
