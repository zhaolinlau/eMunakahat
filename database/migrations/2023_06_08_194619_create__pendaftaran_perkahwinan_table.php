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
		Schema::create('Marriage_Registration', function (Blueprint $table) {
			$table->id('RegistrationNo');
			$table->string('Registration_Type');
			$table->string('Registration_Date');
			$table->string('Registration_Status');
			$table->foreignId('User_ID')->references('id')->on('users');
			$table->string('Approval_ID')->references('Approval_ID')->on('Marriage_Aprroval');
		});
	}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Marriage_Registration');
    }
};
