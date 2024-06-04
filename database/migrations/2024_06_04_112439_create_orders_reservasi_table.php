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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id()->notnull();
            $table->unsignedBigInteger('pelanggan_id')->notnull();
            $table->foreign('pelanggan_id')->references('id')->on('pelanggan')->onDelete('cascade');

            $table->unsignedBigInteger('meja_id')->notnull();
            $table->foreign('meja_id')->references('id')->on('meja')->onDelete('cascade');

            $table->date('tanggal');
            $table->string('note',45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};
