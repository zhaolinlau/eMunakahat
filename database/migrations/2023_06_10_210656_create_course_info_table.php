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
        Schema::create('course_info', function (Blueprint $table) {
            $table->id('Course_ID');
            $table->string('Course_Organization');
            $table->string('Course_DateStart');
            $table->string('Course_DateEnd');
            $table->string('Course_Slot');
            $table->string('Course_Siri');
            $table->string('Course_Rules');
            $table->string('Course_Venue');
            $table->string('Course_Location');
            $table->integer('Course_Capacity');
            $table->string('Course_Status');
            $table->string('Course_Staff');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_info');
    }
};
