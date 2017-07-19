<?php

use Phinx\Seed\AbstractSeed;

class FieldDataSeeder extends AbstractSeed
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
        $fieldData = [];
        $fieldData[] = [
            'page_id' => 1,
            'field_name' => 'Description',
            'field_value' => 'This is The Description',
            'field_type' => 'PlanText',
        ];
        $fieldData[] = [
            'page_id' => 1,
            'field_name' => 'Title1',
            'field_value' => 'This is Title1',
            'field_type' => 'PlanText',
        ];
        $fieldData[] = [
            'page_id' => 1,
            'field_name' => 'Description1',
            'field_value' => '<p>This is Desc 1</p>',
            'field_type' => 'HTML',
        ];
        $fieldData[] = [
            'page_id' => 1,
            'field_name' => 'Link1',
            'field_value' => '1',
            'field_type' => 'InterLink',
        ];
        $fieldTable = $this->table('extra_field');
        $fieldTable->insert($fieldData)
            ->save();
    }
}
