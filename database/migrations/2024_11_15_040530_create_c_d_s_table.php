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
        Schema::create('c_d_s', function (Blueprint $table) {
            $table->id();
            $table->string('Judul CD dan DVD');
            $table->string('Author');
            $table->year('Tahun Terbit');
            $table->boolean('Access_Granted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_d_s');
    }
};
