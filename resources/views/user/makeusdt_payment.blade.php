@extends('layouts.dashboard_layout')
<br>
<br>
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Make Payment and Confirm</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"> <a class="home-item" href="{{ route('home') }}">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Payment</li>
                            <li class="breadcrumb-item active">Confirm</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dash">
            <div class="row">
                <div class="col-xl-12 col-md-12 box-col-9 dash-50">
                    <div class="card ongoing-project">
                        <div class="card-header card-no-border">
                            <div class="media media-dashboard">
                                <div class="media-body">
                                    <div class="mb-3">
                                        <h2>You requested to make a deposit of::</h2>
                                        <div class="container card card-body">
                                            <h2>USD{{ number_format($trans->amount) }}</h2>
                                        </div>
                                    </div>
                                    <br>
                                    <center>
                                        <h5 class="mb-0">Follow the instructions;</h5>
                                    </center>
                                    <br>
                                    <h4>1. Copy the USDT wallet address, make a payment of</h4>

                                    <h4>USD{{ number_format($trans->amount) }} ,to start your investment,and</h4>
                                    <br>
                                    <h4>2.click on Confrim</h4>
                                    <br>
                                    <h4>
                                        3. Chart with us on the Chart Us Button to complete your transaction.
                                    </h4>
                                    <br>
                                    <div class="mb-3">
                                        <h2>Transaction ID::</h2>
                                        <div class="container card card-body">
                                            <h2>{{ $trans->transaction_id }}</h2>
                                        </div>
                                    </div>
                                    <br>
                                    <h6>NOTE:
                                        FOR IMMEDIATE ACTIVATION OF PLAN AND CREDITING OF WALLET,KINDLY CLICK ON CHART US BUTTON.
                                    </h6>
                                    <br>
                                    <div class="col-md-6 mb-2" style="margin-right: 50px;">
                                        <h4>USDT</h4>
                                        <div class="input-group">

                                            <input type="text" name="text" class="form-control" id="referralURL"
                                                value="TA6HJBgzYsjncgcYZ3UuxpRyZNhsLxbaWx" readonly>
                                            &ensp;
                                            <div class="input-group-append">
                                                <span class="input-group-text copytext copyBoard" id="copyBoard"
                                                    onclick="myFunction()"> <i data-feather="copy"></i> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">

                            </div>
                            <div class="col-md-2  ">
                                <form action="{{ route('congrats.pay',$trans->user_id) }}"
                                    method="POST">@csrf


                                    @if ($trans->status != 'paid')
                                        <button class="btn btn-success" type="submit">Confirm</button>
                                    @endif


                                </form>
                            </div>
                        </div>
                        <br>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>
@endsection
