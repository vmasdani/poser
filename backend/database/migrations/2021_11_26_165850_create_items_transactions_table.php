<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_transactions', function (Blueprint $table) {
            $table->id();
            // base model
            $table->text('uuid')->nullable();
            $table->integer('ordering')->nullable();
            $table->boolean('hidden')->nullable();
            $table->boolean('created_by_id')->nullable();
            // base model end
            $table->bigInteger('item_id')->nullable();
            $table->bigInteger('transaction_id')->nullable();
            $table->double('qty')->nullable();
            $table->boolean('is_custom_price')->nullable();
            $table->double('custom_price')->nullable();
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
        Schema::dropIfExists('items_transactions');
    }
}
