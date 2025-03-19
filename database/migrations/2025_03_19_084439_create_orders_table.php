<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->date('created_data');
            $table->boolean('status');
            $table->foreignId('product_id')->constrained('products');
            $table->decimal('total_price', 8, 2);
            $table->string('comment')->nullable()->default('нет');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
