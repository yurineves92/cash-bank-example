<?php

use Illuminate\Database\Seeder;
use App\Model\AccountsHistorical;

class AccountsHistoricalSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\AccountsHistorical::class, 10000)->create();
    }
}
