<?php

use Phinx\Seed\AbstractSeed;

class UserSeed extends AbstractSeed
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
        $userDate = [];
        $userDate[] = [
            'email' => 'user1@user1.com',
            'password' => 'password',
            'status' => '1',
            'role_id' => '1',
        ];
        $userDate[] = [
            'email' => 'user2@user2.com',
            'password' => 'password',
            'status' => '1',
            'role_id' => '2',
        ];
        $userTable = $this->table('user');
        $userTable->insert($userDate)->save();
    }
}
