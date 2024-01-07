<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rbac_item_child}}`.
 */
class m240106_150824_create_rbac_item_child_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rbac_item_child}}', [
            'parent' => $this->string(64)->notNull()->unique(),
            'child' => $this->string(64)->notNull(),
        ]);$this->addPrimaryKey('name_pk', 'rbac_item_child', ['parent']);
    }

}
