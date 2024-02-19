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
        Schema::create('rumah', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perumahan_id')->nullable();
            $table->foreign('perumahan_id')->references('id')->on('perumahan')->onDelete('set null');
            $table->unsignedBigInteger('konsumen_id')->nullable();
            $table->foreign('konsumen_id')->references('id')->on('konsumen')->onDelete('set null');
            $table->string('blok');
            $table->string('ukuran');
            $table->integer('progress');
            $table->boolean('status_subsidi');
            $table->boolean('status_pesan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rumah');
    }
};
