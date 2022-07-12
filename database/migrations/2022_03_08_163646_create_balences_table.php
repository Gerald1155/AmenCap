<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balences', function (Blueprint $table) {
            $table->id();
            $table->string("time");
            $table->string("time_line");
            $table->decimal("balence",$precision = 20, $scale = 2);
            $table->decimal("balence_percentage",$precision = 20, $scale = 2);
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
        Schema::dropIfExists('balences');
    }
}
