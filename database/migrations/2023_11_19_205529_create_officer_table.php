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
        Schema::create('officer', function (Blueprint $table) {
            $table->id();
            $table->integer('unit_id');
            $table->string('name',255);
            $table->string('nick_name',255);
            $table->string('nip',255);
            $table->string('department',255);
            $table->string('foto')->default('no-profil.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('officer');
    }
};
