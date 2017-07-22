<?php

namespace Tink\Model;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * This is the database History table
 *
 * @property int $id
 * @property int $account_id
 * @property string $action
 * @property float $amount
 * @property int $related_ac
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class History extends Model
{
    protected $table = 'history';

    protected $primaryKey = 'id';

    protected $hidden = ['account_id', 'created_at', 'updated_at'];

    protected $casts = [
        'amount' => 'float',
    ];
}
