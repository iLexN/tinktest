<?php

namespace Tink\Model;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * This is the database Owner table
 *
 * @property int $id
 * @property string $status
 */
class Owner extends Model
{
    protected $table = 'ower';
    protected $primaryKey = 'id';

    protected $hidden = ['status', 'created_at', 'updated_at'];
}
