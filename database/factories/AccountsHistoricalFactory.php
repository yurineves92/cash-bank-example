<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\AccountsHistorical;
use Faker\Generator as Faker;

$factory->define(AccountsHistorical::class, function (Faker $faker) {
    return [
        'type_transaction' => rand(1, 2),
        'value' => rand(100, 2200),
        'date_operation' => date("Y-m-".rand(1, 29)." H:i:s"),
        'account_id' => rand(1, 2),
    ];
});
