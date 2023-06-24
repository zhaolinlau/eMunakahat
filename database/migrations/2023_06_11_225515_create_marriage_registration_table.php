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
		Schema::create('marriage_registration', function (Blueprint $table) {
			$table->id('RegistrationNo');
			$table->string('Registration_Type');
			$table->string('Registration_Date');
			$table->string('Registration_Status');
<<<<<<< HEAD:database/migrations/2023_06_08_194619_create__pendaftaran_perkahwinan_table.php
			$table->foreignId('Applicant_ID')->references('Applicant_ID')->on('Applicant_Info');
=======
			$table->foreignId('Applicant_ID')->references('Applicant_ID')->on('applicant_info');
>>>>>>> cddf615ed2c4cc4b2044ac98d76800faa7e541a1:database/migrations/2023_06_11_225515_create_marriage_registration_table.php
			$table->foreignId('User_ID')->references('id')->on('users');
			$table->foreignId('Approval_ID')->references('Approval_ID')->on('marriage_approval');
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('marriage_registration');
	}
};
