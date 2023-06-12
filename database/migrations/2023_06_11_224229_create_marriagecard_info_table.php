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
        Schema::create('marriagecard_info', function (Blueprint $table) {
            $table->id('cardNo');
            $table->string('Card_Details');
            $table->string('Card_Date');
            $table->string('Card_Status');
            $table->foreignId('RegistrationNo')->references('registration')->on('Marriage_Registration');
            $table->foreignId('Partner_ID')->references('partner')->on('Partner_Info');
			$table->foreignId('Applicant_ID')->references('applicant')->on('Applicant_Info');
            $table->foreignId('Approval_ID')->references('approval')->on('Marriage_Approval');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriagecard_info');
    }
};
