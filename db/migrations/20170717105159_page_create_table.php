<?php

use Phinx\Migration\AbstractMigration;

class PageCreateTable extends AbstractMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $pages = $this->table('page');
        $pages->addColumn('title', 'string', array('limit' => 255))
            ->addColumn('body', 'text')
            ->addColumn('uri', 'string', array('limit' => 255))
            ->addColumn('content_type', 'string', array('limit' => 255))
            ->addTimestamps()
            ->addIndex('uri', array('unique' => true))
            ->create();
    }

    public function down()
    {
        $pages = $this->table('page');
        $pages->drop();
    }
}
