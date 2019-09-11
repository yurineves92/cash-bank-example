<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\AccountsHistorical;
use Faker\Generator as Faker;

$factory->define(AccountsHistorical::class, function (Faker $faker) {
    $count = 0;
    return [
        'type_transaction' => rand(1, 2),
        'value' => 100.00,
        'date_operation' => date("Y-m-d H:i:s"),
        'account_id' => 1,

    ];
    $count++;
    print_r($count);
});
