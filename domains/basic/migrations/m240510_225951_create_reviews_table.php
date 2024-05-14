<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%reviews}}`.
 */
class m240510_225951_create_reviews_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%reviews}}', [
            'id' => $this->primaryKey(),
            'author_name' => $this->string()->notNull(),
            'photo' => $this->string(),
            'review_text' => $this->text(),
            'company_id' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey(
            'fk-reviews-company_id',
            'reviews',
            'company_id',
            'companies',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%reviews}}');
    }
}
