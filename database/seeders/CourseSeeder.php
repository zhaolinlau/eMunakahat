<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$courses = [
			[
				'Course_Organization' => 'PEJABAT AGAMA ISLAM MARAN',
				'Course_Venue' => 'DEWAN AUDITORIUM AL-GHAZALI PAID MARAN',
				'Course_DateStart' => '28 JANUARI 2023',
				'Course_DateEnd' => '29 JANUARI 2023',
				'Course_Capacity' => 100,
			],
			[
				'Course_Organization' => 'PEJABAT AGAMA ISLAM JERANTUT',
				'Course_Venue' => 'DEWAN SUNGAI JAN',
				'Course_DateStart' => '1 FEBRUARI 2023',
				'Course_DateEnd' => '10 FEBRUARI 2023',
				'Course_Capacity' => 100,
			],
			[
				'Course_Organization' => 'PEJABAT AGAMA ISLAM TEMERLOH',
				'Course_Venue' => 'DEWAN BESAR TEMERLOH',
				'Course_DateStart' => '7 MARCH 2023',
				'Course_DateEnd' => '9 MARCH 2023',
				'Course_Capacity' => 100,
			],
		];

		foreach ($courses as $key => $course) {
			Course::create($course);
		}
	}
}
