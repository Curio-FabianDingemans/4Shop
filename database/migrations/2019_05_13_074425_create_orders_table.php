<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('slug')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('speltak');
            $table->decimal('amount', 8, 2)->nullable();
            $table->string('mollie_id')->nullable();
            $table->boolean('payed')->default(false);
            $table->boolean("delivered")->default(false);
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
