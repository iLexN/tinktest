<?php

namespace Tink\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class User extends Model
{
    protected $table = 'user';

    protected $hidden = ['status', 'created_at', 'updated_at','password','role_id'];

    protected $with =['role'];

    public function role()
    {
        return $this->belongsTo(__NAMESPACE__.'\Role');
    }

    /**
     * @param string $role
     * @return bool
     */
    public function hasRole($role):bool
    {
        return $this->role->hasRole($role);
    }

    /**
     * @param string $permission
     * @return bool
     */
    public function hasPermission($permission):bool
    {
        return $this->role->hasPermission($permission);
    }
}
