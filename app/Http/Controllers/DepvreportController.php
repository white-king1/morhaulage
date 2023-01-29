<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepvreportController extends Controller
{
    public function depvReport()
    {
        return view('viewreport.depv_report');
    }

    public function investpReport()
    {
        return view ('viewreport.investp_report');
    }
}
