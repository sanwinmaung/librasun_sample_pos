<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellTempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_temps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('shift_id');
            $table->integer('product_id');
            $table->integer('product_qty');
            $table->decimal('total_cost', 9, 2);
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
        Schema::dropIfExists('sell_temps');
    }
}
