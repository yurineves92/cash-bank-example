<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsHistoricalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts_historical', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_transaction',10);
            $table->decimal('value',10,2);
            $table->date('date_operation');
            $table->unsignedBigInteger('account_id')->unsigned()->nullable();  
            $table->timestamps();
        });
        Schema::table('accounts_historical', function(Blueprint $table) {
            $table->foreign('account_id')->references('id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts_historical');
    }
}
