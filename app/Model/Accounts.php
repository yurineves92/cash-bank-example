<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $fillable = [
        'holder', 'agency', 'account', 'password', 'balance'
    ];

    public function accounts_historical(){
        return $this->hasMany('App\Model\AccountsHistorical');
    }
}
