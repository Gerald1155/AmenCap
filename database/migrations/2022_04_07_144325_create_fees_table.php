<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->integer("asset_id");
            $table->string("date");
            $table->string("trx_description");
            $table->string("type_of_fee");
            $table->decimal("currency_price",9,2);
            $table->string("fee_currency");
            $table->decimal("amount_fee_currency",9,2);
            $table->decimal("amount_usd",9,2);
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
        Schema::dropIfExists('fees');
    }
}
