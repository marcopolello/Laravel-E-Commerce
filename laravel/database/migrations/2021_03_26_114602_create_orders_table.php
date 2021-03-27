<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('first_name_receiver',50);
            $table->string('last_name_receiver',50);
            $table->string('email_receiver',50);
            $table->string('phone_receiver',30);
            $table->string('comment_receiver') -> nullable();
            $table->string('address_receiver');
            $table->boolean('payment_state');
            $table->string('total_price', 6);
            $table->unsignedBigInteger('user_id');

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
        Schema::dropIfExists('orders');
    }
}
