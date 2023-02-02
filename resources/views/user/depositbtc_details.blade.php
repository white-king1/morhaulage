@extends('layouts.dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>BITCOIN(BEP20) DEPOSIT PREVIEW</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">DEPOSIT</li>
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
                        <img src="assets_dashboard/images/bitcoinnew.jpg"alt="btc" style="margin-left: 400px; padding-top:50px;">
                    </div>
                    <div class="card-header pb-0">
                        <h5> DEPOSIT LIMIT: 10-1,000,000 USD</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="theme-form mega-form" action="{{route('postbtc.payment')}}" method="POST">
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

                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlSelect9">AMOUNT(USD)</label>
                                        <input class="form-control" name="amount" type="text" placeholder="Amount"
                                            required>
                                    </div>

                                    <div class="mb-3">
                                        <h4>CONVERTION RATE: 1USD = 1USD</h4>
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
