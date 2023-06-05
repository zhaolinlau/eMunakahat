<?php

namespace App\Http\Controllers\ManageMarriageApplication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarriageApplicationController extends Controller
{
  
    public function indexPemohon()
    {
        return view('ManageMarriageApplication.user.MarriageApplicationPemohon');
    }
  
    public function indexPasangan()
    {
        return view('ManageMarriageApplication.user.MarriageApplicationPasangan');
    }
  
    public function indexPerkahwinan()
    {
        return view('ManageMarriageApplication.user.MarriageApplicationPerkahwinan');
    }
    public function indexConsent()
  {
      return view('ManageMarriageApplication.user.MarriageApplicationConsent');
  }

  public function indexHiv()
  {
      return view('ManageMarriageApplication.user.MarriageApplicationHiv');
  }

  public function indexResident()
  {
      return view('ManageMarriageApplication.user.MarriageApplicationResident');
  }

  public function indexPermission()
  {
      return view('ManageMarriageApplication.user.MarriageApplicationPermission');
  }

  public function indexChecklist()
  {
      return view('ManageMarriageApplication.user.MarriageApplicationChecklist');
  }
}


