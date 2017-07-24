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
        $pages->addColumn('title', 'string', ['limit' => 255])
              ->addColumn('body', 'text')
              ->addColumn('uri', 'string', ['limit' => 255])
              ->addColumn('content_type', 'string', ['limit' => 255])
              ->addTimestamps()
              ->addIndex('uri', ['unique' => true])
              ->create();
    }

    public function down()
    {
        $pages = $this->table('page');
        $pages->drop();
    }
}
