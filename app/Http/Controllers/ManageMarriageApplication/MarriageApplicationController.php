<?php

namespace App\Http\Controllers\ManageMarriageApplication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarriageApplicationController extends Controller
{
  
    public function indexPemohon()
    {
        return view('ManageMarriageApplication.MarriageApplicationPemohon');
    }
  
    public function indexPasangan()
    {
        return view('ManageMarriageApplication.MarriageApplicationPasangan');
    }
  
    public function indexPerkahwinan()
    {
        return view('ManageMarriageApplication.MarriageApplicationPerkahwinan');
    }
    public function indexConsent()
  {
      return view('ManageMarriageApplication.MarriageApplicationConsent');
  }

  public function indexHiv()
  {
      return view('ManageMarriageApplication.MarriageApplicationHiv');
  }

  public function indexResident()
  {
      return view('ManageMarriageApplication.MarriageApplicationResident');
  }

  public function indexPermission()
  {
      return view('ManageMarriageApplication.MarriageApplicationPermission');
  }

  public function indexChecklist()
  {
      return view('ManageMarriageApplication.MarriageApplicationChecklist');
  }
}


