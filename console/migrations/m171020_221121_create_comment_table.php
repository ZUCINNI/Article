<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m171020_221121_create_comment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
            'article_id' => $this->integer(),
            'status'  => $this->integer(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('comment');
    }
}
