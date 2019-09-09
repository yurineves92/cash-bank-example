<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AccountsHistorical extends Model
{
    protected $table = "accounts_historical";
    
    protected $fillable = [
        'type_transaction', 'value','date_operation','account_id'
    ];

    public function account(){
        return $this->belongsTo('App\Model\Accounts');
    }
}
