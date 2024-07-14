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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ukm_id');
            $table->string('judul');
            $table->string('foto');
            $table->string('deskripsi');
            $table->string('status');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->timestamps();

            $table->foreign('ukm_id')->references('id')->on('ukms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
