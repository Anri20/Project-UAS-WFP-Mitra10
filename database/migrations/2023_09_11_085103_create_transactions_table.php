<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('idtransactions')->autoIncrement();
            $table->foreignId('customer')->constrained('customers', 'idcustomers');
            $table->foreignId('promo')->nullable()->constrained('promos', 'idpromos');
            $table->datetime('tanggal');
            $table->unsignedDouble('total', 12, 2);
            $table->string('metode_pembayaran');
            $table->dateTime('tanggal_pembayaran')->nullable()->default(null);
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
        Schema::dropIfExists('transactions');
    }
}
