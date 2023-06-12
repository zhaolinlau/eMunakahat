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
		Schema::create('marriage_approval', function (Blueprint $table) {
			$table->id('Approval_ID');
			$table->string('Approval_Status');
			$table->string('Approval_Date');
			$table->foreignId('User_IC')->references('id')->on('users');
			$table->foreignId('Partner_ID')->references('partner')->on('Partner_Info');
			$table->foreignId('Applicant_ID')->references('applicant')->on('Applicant_Info');
			$table->foreignId('Card_No')->references('card')->on('MarriageCard_Info');
			$table->foreignId('RegistrationNo')->references('registration')->on('Marriage_Registration');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('marriage_approval');
	}
};
