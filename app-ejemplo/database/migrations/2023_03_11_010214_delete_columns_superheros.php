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
        Schema::table('superheros', function (Blueprint $table) {
            $table->dropColumn('superpower');
            $table->dropColumn('first_appearance');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('superheros', function (Blueprint $table) {
            $table->string('superpower')->after('gender');
            $table->integer('first_appearance');
        });
    }
};