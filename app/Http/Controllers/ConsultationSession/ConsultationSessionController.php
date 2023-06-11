<?php

namespace App\Http\Controllers\ConsultationSession;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultationSessionController extends Controller
{

    public function indexConsultSession()
    {
        return view('ManageConsultationSession.user.ConsultationSessionApplication');
    }
}