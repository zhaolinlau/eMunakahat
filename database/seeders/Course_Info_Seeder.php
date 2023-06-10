<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course_Info;

class Course_Info_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course_infos = [
            [
                'Course_Organization' => 'PEJABAT AGAMA ISLAM MARAN',
                'Course_Venue' => 'DEWAN AUDITORIUM AL-GHAZALI PAID MARAN',
                'Course_DateStart' => '28 JANUARI 2023',
                'Course_DateEnd' => '29 JANUARI 2023',
                'Course_Capacity' => 100,
            ],
        ];

        foreach ($course_infos as $course_info) {
            Course_Info::create($course_info);
        }
    }
}
