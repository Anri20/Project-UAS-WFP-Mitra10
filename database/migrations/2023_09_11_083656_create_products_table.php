<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->unsignedBigInteger('idproducts')->autoIncrement();
            $table->foreignId('category_id')->constrained('categories', 'idcategories');
            $table->foreignId('brand_id')->constrained('brands', 'idbrands');
            $table->string('nama');
            $table->string('gambar')->default('');
            $table->longText('deskripsi');
            $table->unsignedDouble('harga', 12, 2);
            $table->unsignedDouble('diskon', 3, 2)->nullable();
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
        Schema::dropIfExists('products');
    }
}
