<?php

namespace Tink\Model;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * This is the database Account table
 *
 * @property int $id account id , db pk
 * @property int $ower owner id
 * @property string $name account name
 * @property string $status account status,open/close
 * @property float $balance account money
 */
class Account extends Model
{
    const AC_STATUS_ACTIVE = 'Active';
    const AC_STATUS_INACTIVE = 'inActive';
    protected $table = 'account';
    protected $primaryKey = 'id';
    protected $hidden = ['status', 'created_at', 'updated_at'];
    protected $casts = [
        'balance' => 'float',
    ];

    /**
     * Check have enough money for with draw.
     *
     * @param float $money
     *
     * @return bool
     */
    public function checkWithDraw($money)
    {
        return (float) $this->attributes['balance'] >= (float) $money;
    }

    /**
     * Cal Account Balance after some action.
     *
     * @param float  $money
     * @param string $status
     * @return void
     */
    public function calBalance($money, $status)
    {
        switch ($status) {
            case 'withdraw':
            case 'transferTo':
            case 'charge':
                $this->attributes['balance'] = $this->attributes['balance'] - $money;
                break;
            case 'deposit':
            case 'transferFrom':
                $this->attributes['balance'] = $this->attributes['balance'] + $money;
                break;
        }
    }

    /**
     * Account HasMany History.
     */
    public function history()
    {
        return $this->hasMany(__NAMESPACE__.'\History');
    }
}
