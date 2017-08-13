<?php

use yii\db\Migration;

/**
 * Handles adding type to table `newsFlash`.
 */
class m170713_131113_add_type_column_to_newsFlash_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('newsFlash', 'type', $this->tinyint()->default(1));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('newsFlash', 'type');
    }
}
