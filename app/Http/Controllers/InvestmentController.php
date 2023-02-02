<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function investment()
    {
        return view ('viewreport.investment');
    }

//   STANDARD INVESTMENT PLAN
    public function makePayment()
    {
        return view ('plans.standard_payment');
    }

// PRO INVESTMENT PLAN
public function proPlan()
{
    return view ('plans.proplan_payment');
}

// DELUXE PLAN
public function deluxePlan()
{
    return view ('plans.deluxeplan_payment');
}

// GOLD PLAN
public function goldPlan()
{
    return view ('plans.goldplan_payment');
}

// BUSINESS PLAN
public function businessPlan()
{
    return view ('plans.businessplan_payment');
}

// CARHOUSE PLAN
public function carHouse()
{
    return view ('plans.carhouseplan_payment');
}
}
