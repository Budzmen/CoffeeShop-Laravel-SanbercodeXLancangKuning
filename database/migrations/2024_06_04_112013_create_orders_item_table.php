<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders_item', function (Blueprint $table) {
            $table->id()->notnull();
            $table->unsignedBigInteger('pelanggan_id')->notnull();
            $table->foreign('pelanggan_id')->references('id')->on('pelanggan')->onDelete('cascade');

            $table->unsignedBigInteger('product_id')->notnull();
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
            $table->timestamps();
            $table->integer('jumlah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_item');
    }
};
