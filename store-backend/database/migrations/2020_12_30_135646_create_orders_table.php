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
            $table->bigInteger('order_no');
            $table->unsignedBigInteger('user_id');
            $table->string('status');
            $table->bigInteger('item_count');
            $table->decimal('grand_total', 11, 2);
            $table->boolean('is_paid');
            $table->string('payment_method');
            $table->text('notes')->nullable();
            $table->string('shipping_fullname');
            $table->string('shipping_phone');
            $table->string('shipping_notes')->nullable();
            $table->string('shipping_address');
            $table->string('shipping_barangay');
            $table->string('shipping_city');
            $table->string('shipping_province');
            $table->string('shipping_country');
            $table->string('billing_fullname');
            $table->string('billing_phone');
            $table->string('billing_notes')->nullable();
            $table->string('billing_address');
            $table->string('billing_barangay');
            $table->string('billing_city');
            $table->string('billing_province');
            $table->string('billing_country');
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
