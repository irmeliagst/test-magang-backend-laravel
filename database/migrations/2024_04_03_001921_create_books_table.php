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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('author', 50);
            $table->string('judul', 50);
            $table->string('deskripsi', 255);
            $table->string('cover')->nullable(); // Kolom cover untuk menyimpan path gambar
            $table->enum('status', ['publish', 'notpublish']); // Tipe data enum untuk status
            $table->timestamp('tanggal_upload')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
