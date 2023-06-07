<?php

namespace App\Http\Controllers\ManageMarriageCertificate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarriageCertificateController extends Controller
{
    public function indexCertificate()
    {
        return view('ManageMarriageCertificate.MarriageCertificate');
    }
}
