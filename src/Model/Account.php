<?php

namespace Tink\Model;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * @property int $id
 * @property int $ower
 * @property string $name
 * @property string $status
 * @property float $balance
 */
class Account extends Model
{
    protected $table = 'account';
    protected $primaryKey = 'id';

    protected $hidden = ['status','created_at', 'updated_at'];

    protected $casts = [
        'balance' => 'float',
    ];

    public function checkWithDraw($money)
    {
        return (float)$this->attributes['balance'] >= (float) $money;
    }

    public function calBalance($money, $status)
    {
        switch ($status) {
            case 'withdraw':
            case 'transferTo':
                $this->attributes['balance'] = $this->attributes['balance'] - $money;
                break;
            case 'deposit':
            case 'transferFrom':
                $this->attributes['balance'] = $this->attributes['balance'] + $money;
                break;
        }
    }

    public function history()
    {
        return $this->hasMany(__NAMESPACE__.'\History');
    }
}
