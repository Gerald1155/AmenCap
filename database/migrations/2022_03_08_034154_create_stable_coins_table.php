<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStableCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stable_coins', function (Blueprint $table) {
        $table->id();
            $table->string("token");
            $table->string("ticker");
            $table->decimal("avg_buy_price",$precision = 9, $scale = 2);
            $table->decimal("purchased_amount",$precision = 9, $scale = 2);
            $table->decimal("holdings",$precision = 9, $scale = 2);
            $table->decimal("amount_spent",$precision = 9, $scale = 2);
            $table->decimal("staking_earnings",$precision = 9, $scale = 2);
            $table->decimal("profit_loss_number",$precision = 9, $scale = 2);
            $table->decimal("profit_loss_precentage",$precision = 20, $scale = 2);
            $table->decimal("total_value",$precision = 9, $scale = 2);
            $table->decimal("total_precentage_of_portfolio",$precision = 20,$scale = 2)->nullable();
            $table->decimal("temp_amount_spent",$precision = 20, $scale = 2)->nullable();
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
        Schema::dropIfExists('stable_coins');
    }
}
