<?php

use Phinx\Seed\AbstractSeed;
use Tink\Model\Page;

class PageSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $pagesData = [];
        $pagesData[] = [
            'title' => 'Front Page',
            'body' => 'This is the Front Page',
            'uri' => '/',
            'content_type' => Page::TYPE_FRONTPAGE,
        ];
        $pagesData[] = [
            'title' => 'About Us',
            'body' => 'I am iLexN !',
            'uri' => '/ilexn',
            'content_type' => Page::TYPE_PAGE
        ];
        $pagesTable = $this->table('page');
        $pagesTable->insert($pagesData)
            ->save();
        //$pagesTable->truncate();
    }
}
