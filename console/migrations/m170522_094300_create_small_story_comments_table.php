<?php

use yii\db\Migration;

/**
 * Handles the creation of table `small_story_comments`.
 */
class m170522_094300_create_small_story_comments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('small_story_comments', [
            'id' => $this->primaryKey(),
            'content' => $this->string()->notNull(),
            'story_id' => $this->bigInteger(20)->notNull(),
            'pid' => $this->integer()->notNull(),
            'user_id' => $this->bigInteger(20)->notNull(),
            'review' => $this->smallInteger(4)->notNull()->defaultValue(1)->comment('1未审核2不通过3通过'),
            'created_at' => $this->timestamp()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('small_story_comments');
    }
}
