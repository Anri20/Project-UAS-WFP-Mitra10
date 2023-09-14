<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function(Blueprint $table){
            $table->unsignedBigInteger('categories_idcategories');

            $table->foreign('categories_idcategories')->references('idcategories')->on('categories');
        });

        Schema::table('carts', function(Blueprint $table){
            $table->unsignedBigInteger('products_idproducts');

            $table->foreign('products_idproducts')->references('idproducts')->on('products');


            $table->unsignedBigInteger('transactions_idtransactions');

            $table->foreign('transactions_idtransactions')->references('idtransactions')->on('transactions');
        });

        Schema::table('transactions', function(Blueprint $table){
            $table->unsignedBigInteger('cutomers_idcustomers');

            $table->foreign('cutomers_idcustomers')->references('idcustomers')->on('customers');


            $table->unsignedBigInteger('promos_idpromos');

            $table->foreign('promos_idpromos')->references('idpromos')->on('promos');
        });

        Schema::table('shops', function(Blueprint $table){
            $table->unsignedBigInteger('area_idareas');

            $table->foreign('area_idareas')->references('idareas')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function(Blueprint $table){
            $table->dropForeign('categories_idcategories');
            $table->dropColumn('categories_idcategories');
        });

        Schema::table('carts', function(Blueprint $table){
            $table->dropForeign('products_idproducts');
            $table->dropColumn('products_idproducts');

            $table->dropForeign('transactions_idtransactions');
            $table->dropColumn('transactions_idtransactions');
        });

        Schema::table('transactions', function(Blueprint $table){
            $table->dropForeign('cutomers_idcustomers');
            $table->dropColumn('cutomers_idcustomers');

            $table->dropForeign('promos_idpromos');
            $table->dropColumn('promos_idpromos');
        });

        Schema::table('shops', function(Blueprint $table){
            $table->dropForeign('area_idareas');
            $table->dropColumn('area_idareas');
        });
    }
}
