<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockInOutsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_in_outs_items', function (Blueprint $table) {
            $table->id();
            // base model
            $table->text('uuid')->nullable();
            $table->integer('ordering')->nullable();
            $table->boolean('hidden')->nullable();
            $table->boolean('created_by_id')->nullable();
            // base model end
            $table->double('qty')->nullable();
            $table->bigInteger('item_id')->nullable();
            $table->text('in_out_type')->nullable(); // I/O
            $table->bigInteger('stock_in_out_id')->nullable();
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
        Schema::dropIfExists('stock_in_outs_items');
    }
}
