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

    protected $hidden = ['status','created_at', 'updated_at'];

    public function address()
    {
        return $this->hasMany(__NAMESPACE__.'\Address', 'ppmid');
    }

    public function checkWithDraw($money)
    {
        return $this->attributes['balance'] >= $money;
    }

    public function calBalance($money, $status)
    {
        if ($status === 'withdraw') {
            $this->attributes['balance'] = $this->attributes['balance'] - $money;
        } else {
            //deposit
            $this->attributes['balance'] = $this->attributes['balance'] + $money;
        }
    }
}
