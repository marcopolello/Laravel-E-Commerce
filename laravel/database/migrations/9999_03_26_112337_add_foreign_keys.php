<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('orders', function(Blueprint $table){
        $table  ->foreign('user_id', 'order_user')
                ->references('id')
                ->on('users');
      });

      Schema::table('category_product', function (Blueprint $table) {
        $table  ->foreign('category_id', 'cp_category')
                ->references('id')
                ->on('categories');

        $table  ->foreign('product_id', 'cp_product')
                ->references('id')
                ->on('products');
      });

      Schema::table('order_product', function (Blueprint $table) {
        $table  ->foreign('order_id', 'op_order')
                ->references('id')
                ->on('orders');

        $table  ->foreign('product_id', 'op_product')
                ->references('id')
                ->on('products');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('order_product', function (Blueprint $table) {
        $table ->dropForeign('op_product');
        $table ->dropForeign('op_order');
      });

      Schema::table('category_product', function (Blueprint $table) {
        $table ->dropForeign('cp_product');
        $table ->dropForeign('cp_category');
      });

      Schema::table('orders', function (Blueprint $table) {
        $table  ->dropForeign('order_user');
      });
    }
}
