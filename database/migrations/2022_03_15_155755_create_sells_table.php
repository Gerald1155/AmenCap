<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->id();
            $table->string("token");
            $table->string("sell_date")->nullable();
            $table->decimal("sell_price",$precision = 9, $scale = 2)->nullable();
            $table->decimal("sell_amount",$precision = 9, $scale = 2)->nullable();
            $table->decimal("sell_fee",$precision = 9, $scale = 2)->nullable();
            $table->decimal("sell_fee_usd",$precision = 9, $scale = 2)->nullable();
            $table->decimal("total_sold_price",$precision = 9, $scale = 2)->nullable();
            $table->decimal("current_holdings_total",$precision = 9, $scale = 2)->nullable();
            $table->decimal("profit_loss_number",$precision = 9, $scale = 2)->nullable();
            $table->decimal("profit_loss_percentage",$precision = 9, $scale = 2)->nullable();
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
        Schema::dropIfExists('sells');
    }
}
