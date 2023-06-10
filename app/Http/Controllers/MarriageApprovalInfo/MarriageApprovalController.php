<?php

namespace App\Http\Controllers\MarriageApprovalInfo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarriageApprovalController extends Controller
{
    public function indexApproval()
    {
        return view('Marriage_Approval.MarriageApprovalInfo');
    }
}
