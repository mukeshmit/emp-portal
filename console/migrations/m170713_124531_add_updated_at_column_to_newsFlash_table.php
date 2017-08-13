<?php

use yii\db\Migration;

/**
 * Handles adding updated_at to table `newsFlash`.
 */
class m170713_124531_add_updated_at_column_to_newsFlash_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('newsFlash', 'updated_at', $this->integer());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('newsFlash', 'updated_at');
    }
}
