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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('nim', 10);
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan'])->default('Laki-Laki');
            $table->enum('agama', ['Hindu', 'Islam', 'Kristen Protestan', 'Kristen Katolik', 'Buddha', 'Khonghucu'])->default('Hindu');
            $table->string('telepon', 30);
            $table->string('prodi', 50);
            $table->string('alamat', 100)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
