@extends('layouts.dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>ETHEREUM(ERC20) DEPOSIT PREVIEW</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">ETHEREUM DEPOSIT</li>
                        <li class="breadcrumb-item active">PREVIEW</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid credit-card payment-details">

        <div class="row">
            <!-- Individual column searching (text inputs) Starts-->
            <div class="col-xxl-10 col-md-10 mx-auto box-col-10">
                <div class="card">
                    <div class="col-md-6">
                        <img src="assets_dashboard/images/ethn.png"alt="btc" style="margin-left: 400px; padding-top:50px;">
                    </div>
                    <div class="card-header pb-0">
                        <h5> DEPOSIT LIMIT: USD50 - USD1,000,000 </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="theme-form mega-form" action="{{route('posteth.payment')}}" method="POST">
                                         @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="exampleFormControlSelect9">CHARGE</label>
                                                <select class="form-select digits" name="charge"
                                                    id="exampleFormControlSelect9">
                                                    <option>0.00USD</option>
                                                    <option>0.00USD</option>


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="exampleFormControlSelect9">Plan</label>
                                                <select class="form-select digits" name="plan"
                                                    id="exampleFormControlSelect9">
                                                    <option>STANDARD PLAN(USD50 - USD999)</option>
                                                    <option>PRO PLAN(USD1,000 - USD4,999)</option>
                                                    <option>DELUXE PLAN(USD5,000 - USD9,999)</option>
                                                    <option>GOLD PLAN(USD10,000 - USD49,999)</option>
                                                    <option>BUSINESS PLAN(USD50,000 - USD149,999)</option>
                                                    <option>CAR/HOUSE PLAN(USD150,000 - USD199,999)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlSelect9">AMOUNT(USD)</label>
                                        <input class="form-control" name="amount" type="text" placeholder="Amount"
                                            required>
                                    </div>

                                    <div class="mb-3">
                                        <h4>CONVERSION RATE: 1USD = 1USD</h4>
                                    </div>
                                    <div class="card-body">
                                        <center>
                                            <div class="card-footer text-end">
                                            <button class="btn btn-primary">NEXT</button>
                                            </div>
                                        </center>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
