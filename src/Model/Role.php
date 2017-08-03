<?php

namespace Tink\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property mixed $permission
 * @property string name
 */
class Role extends Model
{
    protected $table = 'role';

    public $timestamps = false;

    protected $with = ['permission'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permission()
    {
        return $this->belongsToMany(__NAMESPACE__.'\Permission', 'role_permission', 'role_id', 'permission_id');
    }

    /**
     * @param string $role
     * @return bool
     */
    public function hasRole($role) : bool
    {
        return $this->name === $role;
    }

    /**
     * @param string $permission
     * @return bool
     */
    public function hasPermission($permission) : bool
    {
        return $this->permission->contains('name', $permission);
    }
}
