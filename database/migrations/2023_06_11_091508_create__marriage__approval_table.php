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
        Schema::create('_marriage__approval', function (Blueprint $table) {
            $table->id('Approval_ID');
            $table->string('Approval_Status');
            $table->string('Approval_Date');
            $table->foreignId('User_ID')->references('id')->on('users');
            $table->foreignId('Card_No')->references('card')->on('MarriageCard_Info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_marriage__approval');
    }
};
