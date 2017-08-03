<?php

namespace Tink\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 */
class Permission extends Model
{
    protected $table = 'permission';

    public $timestamps = false;

    protected $hidden = array('pivot');
}
