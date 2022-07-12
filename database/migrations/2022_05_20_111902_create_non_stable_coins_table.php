<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonStableCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('non_stable_coins', function (Blueprint $table) {
            $table->id();
            $table->string("token");
            $table->string("ticker");
            $table->decimal("avg_buy_price",$precision = 6, $scale = 2);
            $table->decimal("purchased_amount",$precision = 20, $scale = 2);
            $table->decimal("holdings",$precision = 20, $scale = 2);
            $table->decimal("amount_spent",$precision = 20, $scale = 2);
            $table->decimal("profit_loss_number",$precision = 20, $scale = 2);
            $table->decimal("profit_loss_precentage",$precision = 20, $scale = 2);
            $table->decimal("total_value",$precision = 20, $scale = 2);
            $table->decimal("total_precentage_of_portfolio",$precision = 20,$scale = 2)->nullable();
            $table->decimal("temp_amount_spent",$precision = 20, $scale = 2);
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
        Schema::dropIfExists('non_stable_coins');
    }
}
