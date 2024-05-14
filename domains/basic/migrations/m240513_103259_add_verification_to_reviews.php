<?php

use yii\db\Migration;

/**
 * Class m240513_103259_add_verification_to_reviews
 */
class m240513_103259_add_verification_to_reviews extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp(){
    $this->addColumn('reviews', 'verification', $this->smallInteger()->notNull()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('reviews', 'verification');
    }

}
