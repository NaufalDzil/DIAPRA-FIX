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
        Schema::create('nodins', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_penomoran');
            $table->string('alamat');
            $table->date('tanggal_surat');
            $table->string('perihal');
            $table->string('surat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nodins');
    }
};
