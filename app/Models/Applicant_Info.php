<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant_Info extends Model
{
    use HasFactory;

    protected $fillable = [
        'Applicant_ID',
        'Applicant_DOB',
        'Applicant_Race',
        'Applicant_Citizenship',
        'Applicant_Address',
        'Applican_EduLevel',
        'Applicant_EmpInfo',
        'Applicant_Income',
        'Applicant_Marital',
        'Applicant_EduLevel',
        'Applicant_Mualaf',

    ];

}
