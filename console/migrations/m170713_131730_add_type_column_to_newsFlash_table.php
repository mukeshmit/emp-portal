<?php

use yii\db\Migration;

/**
 * Handles adding type to table `newsFlash`.
 */
class m170713_131730_add_type_column_to_newsFlash_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('newsFlash', 'type', $this->integer()->default(1));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('newsFlash', 'type');
    }
}
