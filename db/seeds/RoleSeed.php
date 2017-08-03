<?php

use Phinx\Seed\AbstractSeed;

class RoleSeed extends AbstractSeed
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
        $data = [];
        $data[] = [
            'name' => 'admin',
        ];
        $data[] = [
            'name' => 'member',
        ];
        $this->insert('role', $data);

        $data = [];
        $data[] = [
            'name' => 'api write',
        ];
        $data[] = [
            'name' => 'api read',
        ];
        $this->insert('permission', $data);

        $data = [];
        $data[] = [
            'role_id' => '1',
            'permission_id' => '1',
        ];
        $data[] = [
            'role_id' => '1',
            'permission_id' => '2',
        ];
        $data[] = [
            'role_id' => '2',
            'permission_id' => '2',
        ];
        $this->insert('role_permission', $data);
    }
}
