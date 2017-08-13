<?php

use yii\db\Migration;

/**
 * Handles adding created_at to table `newsFlash`.
 */
class m170713_124443_add_created_at_column_to_newsFlash_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('newsFlash', 'created_at', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('newsFlash', 'created_at');
    }
}
