<?php

use yii\db\Migration;

/**
 * Handles the creation of table `newsFlash`.
 * Has foreign keys to the tables:
 *
 * - `user`
 */
class m170713_121759_create_newsFlash_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('newsFlash', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull()->unique(),
            'body' => $this->text(),
            'image' => $this->string(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            'idx-newsFlash-user_id',
            'newsFlash',
            'user_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-newsFlash-user_id',
            'newsFlash',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
	*/
	 
    public function down()
    {
        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-newsFlash-user_id',
            'newsFlash'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            'idx-newsFlash-user_id',
            'newsFlash'
        );

        $this->dropTable('newsFlash');
    }
}
