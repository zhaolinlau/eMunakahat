<?php

namespace App\Http\Controllers\ManageMarriageCard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarriageCardController extends Controller
{
    public function indexCard()
    {
        return view('ManageMarriageCard.MarriageCard');
    }
}
