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
        Schema::create('admin_satgas', function (Blueprint $table) {
            $table->id('id_admin');
            $table->string('nama', 100);
            $table->string('email', 100);
            $table->string('password', 100);
            $table->enum('jenis_kelamin', ['wanita', 'laki-laki'])->nullable();
            $table->binary('foto_profile')->nullable(); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_satgas');
    }
};
