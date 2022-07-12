<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultiAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multi_assets', function (Blueprint $table) {
            $table->id();
            $table->string("token");
            $table->string("ticker");
            $table->string("buy_date");
            $table->decimal("buy_price",$precision = 20, $scale = 2);
            $table->decimal("purchased_amount",$precision = 20, $scale = 2);
            $table->decimal("holdings",$precision = 20, $scale = 2);
            $table->decimal("amount_spent",$precision = 20, $scale = 5);
            $table->decimal("profit_loss_number",$precision = 20, $scale = 2);
            $table->decimal("profit_loss_percentage",$precision = 20);
            $table->decimal("total_holdings_per_coin",$precision = 20, $scale = 2);
            $table->decimal("total_value_per_coin",$precision = 20, $scale = 2);
            $table->decimal("total_value")->default(0);
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
        Schema::dropIfExists('multi_assets');
    }
}
