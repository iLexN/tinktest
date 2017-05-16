<?php

namespace Tink\Model;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * @property int $id
 * @property string $status
 */
class Owner extends Model
{
    protected $table = 'ower';
    protected $primaryKey = 'id';

    protected $hidden = ['status', 'created_at', 'updated_at'];
}
