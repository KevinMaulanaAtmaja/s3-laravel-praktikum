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
        Schema::create('peminjaman_koleksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peminjaman_id');
            $table->foreign('peminjaman_id')
                ->references('id')
                ->on('peminjaman')
                ->onDelete('cascade');


            $table->unsignedBigInteger('koleksi_id');
            $table->foreign('koleksi_id')
                ->references('id')
                ->on('koleksi')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman_koleksi');
    }
};
