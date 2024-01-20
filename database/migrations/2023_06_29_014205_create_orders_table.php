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
            $table->dateTime('created_date');
            $table->foreignId('payment_method_id')->constrained('payment_methods');
            $table->foreignId('delivery_method_id')->constrained('delivery_methods');
            $table->foreignId('admin_id')->constrained('accounts');
            $table->foreignId('customer_id')->constrained('accounts');
            $table->integer('status');
            $table->string('name_customer');
            $table->string('phone_number_customer', 10);
            $table->text('address_customer');
            $table->text('bill_code');
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
