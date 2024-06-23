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
        Schema::table('result', function (Blueprint $table) {
            $table->integer('result_komunikasi')->after('result')->nullable();
            $table->integer('result_kompetensi')->after('result_komunikasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('result', function (Blueprint $table) {
            //
        });
    }
};
