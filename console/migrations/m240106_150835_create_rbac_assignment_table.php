<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rbac_assignment}}`.
 */
class m240106_150835_create_rbac_assignment_table extends Migration
{
    /**
     * {@inheritdoc}
     */

    public function safeUp()
    {
        $this->createTable('{{%rbac_assignment}}', [
            'item_name' => $this->string(64)->notNull()->unique(),
            'user_id' => $this->string(64)->notNull()->unique(),
            'created_at' => $this->dateTime(),
        ]);$this->addPrimaryKey('name_pk', 'rbac_assignment', ['item_name','user_id']);

        $this->addForeignKey(
            '{{%fk-item_name}}',
            '{{%rbac_assignment}}',
            'item_name',
            '{{%rbac_item}}',
            'name',
            'CASCADE',
            'CASCADE',
        );
    }
}
