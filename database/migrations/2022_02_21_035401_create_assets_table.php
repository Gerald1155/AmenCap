<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string("token");
            $table->string("ticker");
            $table->string("buy_date");
            $table->string("sold_asset");
            $table->string("exchange");
            $table->decimal("buy_price",$precision = 20, $scale = 2);
            $table->decimal("purchased_amount",$precision = 20, $scale = 2);
            $table->decimal("amount_acquired",$precision = 20, $scale = 2);
            $table->decimal("amount_spent",$precision = 20, $scale = 5);
            $table->decimal("current_value_usd",$precision = 20, $scale = 5);
            $table->decimal("profit_loss_number",$precision = 20, $scale = 2);
            $table->decimal("profit_loss_percentage",$precision = 20);
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
        Schema::dropIfExists('assets');
    }
}
