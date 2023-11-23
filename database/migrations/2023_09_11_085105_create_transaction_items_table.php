<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_items', function (Blueprint $table) {
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('product_id');
            $table->primary(['transaction_id', 'product_id']);

            $table->foreign('transaction_id')->references('idtransactions')->on('transactions')->onDelete('cascade');
            $table->foreign('product_id')->references('idproducts')->on('products')->onDelete('cascade');

            $table->unsignedInteger('jumlah');
            $table->unsignedDouble('total', 12, 2);
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
        Schema::dropIfExists('transaction_items');
    }
}
