<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rbac_item}}`.
 */
class m240106_150818_create_rbac_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rbac_item}}', [
            'name' => $this->string(64)->notNull(),
            'type' => $this->integer()->notNull(),
            'description' => $this->text(),
            'rule_name' => $this->string(64),
            'data' => $this->text(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),

        ]);$this->addPrimaryKey('name_pk', 'rbac_item', ['name']);

    }
}
