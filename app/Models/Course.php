<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

		protected $fillable = [
			'Course_Organization',
			'Course_Venue',
			'Course_DateStart',
			'Course_DateEnd',
			'Course_Capacity',
		];
}
