<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonStableCoinStakingEarningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_stable_coin_staking_earnings', function (Blueprint $table) {
            $table->id();
            $table->string("token");
            $table->string("ticker");
            $table->string("date");
            $table->decimal("amount_earned",$precision = 9, $scale = 2);
            $table->decimal("value",$precision = 9, $scale = 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('non_stable_coin_staking_earnings');
    }
}
