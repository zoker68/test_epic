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
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();

            $table->string('activity_code');
            $table->dateTime('datetime');

            $table->foreign('activity_code')->references('code')->on('activities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timetables');
    }
};
