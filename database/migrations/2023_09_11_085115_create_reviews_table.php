<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->unsignedBigInteger('idreviews')->autoIncrement();
            $table->foreignId('transaction_id')->constrained('transactions', 'idtransactions');
            $table->foreignId('product_id')->constrained('products', 'idproducts');
            $table->foreignId('customer_id')->constrained('customers', 'idcustomers');
            $table->unsignedTinyInteger('rating');
            $table->text('ulasan')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
