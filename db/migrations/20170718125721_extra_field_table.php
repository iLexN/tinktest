<?php

use Phinx\Migration\AbstractMigration;

class ExtraFieldTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $extraFieldTable = $this->table('extra_field');
        $extraFieldTable->addColumn('page_id', 'integer', array('signed'=>true))
            ->addColumn('field_name', 'string', array('limit'=>255))
            ->addColumn('field_value', 'text')
            ->addColumn('field_type', 'string', array('limit'=>255))
            ->addTimestamps()
            ->addIndex('page_id')
            ->create();
    }
}
