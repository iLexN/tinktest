<?php

namespace Tink\Model;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * @property int $id
 * @property int $account_id
 * @property string $action
 * @property float $amount
 */
class History extends Model
{
    protected $table = 'history';
    protected $primaryKey = 'id';

    protected $hidden = ['account_id','created_at', 'updated_at'];

    protected $casts = [
        'amount' => 'float',
    ];

    public function address()
    {
        return $this->hasMany(__NAMESPACE__.'\Address', 'ppmid');
    }

    public function checkWithDraw($money)
    {
        return $this->attributes['balance'] >= $money;
    }
}
