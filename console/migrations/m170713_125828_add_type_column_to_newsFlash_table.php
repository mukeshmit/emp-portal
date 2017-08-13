<?php

use yii\db\Migration;

/**
 * Handles adding type to table `newsFlash`.
 */
class m170713_125828_add_type_column_to_newsFlash_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('newsFlash', 'type', $this->tinyint()->default(1) COMMENT '1=private());
        $this->addColumn('newsFlash', '2=public'', $this->);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('newsFlash', 'type');
        $this->dropColumn('newsFlash', '2=public'');
    }
}
