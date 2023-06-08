<?php

namespace App\Http\Controllers\ManageMarriageRegistration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarriageRegistrationController extends Controller
{
    public function indexRegister()
    {
        return view('ManageMarriageRegisteration.MarriageRegistrationForm');
    }

    public function indexList()
    {
        return view('ManageMarriageRegistration.MarriageRegistrationList');
    }

    public function indexForm()
    {
        return view('ManageMarriageRegistration.MarriageRegistrationFormNew');
    }
    public function indexFormPasangan()
    {
        return view('ManageMarriageRegistration.MarriageRegistrationFormPasangan');
    }

    public function indexMaklumat() {
        return view('ManageMarriageRegistration.MarriageRegistrationFormMaklumat');
    }
}


