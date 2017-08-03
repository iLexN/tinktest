<?php

use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{
    public function up()
    {
        $userTable = $this->table('user');
        $userTable->addColumn('email', 'string', ['limit'=>255])
            ->addColumn('password', 'string', ['limit'=>255])
            ->addColumn('status', 'integer', ['signed' => false, 'limit'=>1])
            ->addColumn('role_id', 'integer')
            ->addTimestamps()
            ->addIndex('email', array('unique' => true))
            ->create();

        $role = $this->table('role');
        $role->addColumn('name', 'string', ['limit'=>255])
            ->create();

        $permissionTble = $this->table('permission');
        $permissionTble->addColumn('name', 'string', ['limit'=>255])
            ->addIndex('name', ['unique' => true])
            ->create();

        $rolePermissionTable = $this->table('role_permission');
        $rolePermissionTable->addColumn('role_id', 'integer')
            ->addColumn('permission_id', 'integer')
            ->addIndex('role_id')
            ->addIndex('permission_id')
            ->addForeignKey('role_id', 'role', 'id', array('delete'=> 'CASCADE', 'update'=> 'NO_ACTION'))
            ->addForeignKey('permission_id', 'permission', 'id', array('delete'=> 'CASCADE', 'update'=> 'NO_ACTION'))
            ->create();
    }

    public function down()
    {
        $rolePermissionTable = $this->table('role_permission');
        $rolePermissionTable->drop();

        $permissionTble = $this->table('permission');
        $permissionTble->drop();

        $role = $this->table('role');
        $role->drop();

        $userTable = $this->table('user');
        $userTable->drop();


    }
}
