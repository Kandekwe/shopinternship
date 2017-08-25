<?php

use yii\db\Migration;

/**
 * Handles the creation of table `items`.
 * Has foreign keys to the tables:
 *
 * - `shops`
 * - `category`
 */
class m170822_081419_create_items_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('items', [
            'Iditem' => $this->primaryKey(),
            'itemname' => $this->integer()->notNull(),
            'itemprice' => $this->integer()->defaultValue(1),
            'expdate' => $this->string(),
            'qty' => $this->string(),
            'barcode' => $this->string(),
            'image' => $this->string(),
            'category' => $this->string(),
            'status' => $this->string(),
            'Idshop' => $this->integer(),
        ]);

        // creates index for column `Iditem`
        $this->createIndex(
            'idx-items-',
            'items',
            'Iditem'
        );

        // add foreign key for table `shops`
        $this->addForeignKey(
            'fk-items-Id',
            'items',
            'Idshop',
            'shops',
            'Id',
            'CASCADE'
        
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `shops`
        $this->dropForeignKey(
            'fk-items-Id',
            'items'
        );

        // drops index for column `Id`
        $this->dropIndex(
            'idx-items-Id',
            'items'
        
        );

        $this->dropTable('items');
    }
}
