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
        Schema::create('Marriage_Info', function (Blueprint $table) {
            $table->id('MarriageInfo_ID');
            $table->string('Marriage_Date');
            $table->string('Marriage_Venue');
            $table->string('Marriage_DowryType');
            $table->integer('Marriage_DowryAmount');
            $table->integer('Marriage_HantaranAmount');
            $table->string('Marriage_Country');
            $table->string('Marriage_State');
            $table->foreignId('Guardian_IC')->references('Guardian_IC')->on('guardian_Info');
            $table->foreignId('Witness_IC')->references('Witness_IC')->on('witness_Info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Marriage_Info');
    }
};
