@extends('layouts.dashboard_layout')
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
                                    <center>
                                        <h5 class="mb-0">Follow the instructions;</h5>
                                    </center>
                                    <p>
                                        1. Copy the Bitcoin(BEP20) wallet address and
                                        <br>
                                         make a payment of between USD{{number_format($trans->amount)}} ,
                                        <br>
                                        to start your investment,and
                                        <br>
                                        2.click on Confrim
                                        <br>
                                        3. Chart with us onLive Chart to complete your transaction.
                                    </p>

                                    <br>
                                    <p>You requested to pay USD{{number_format($trans->amount)}} into this Bitcoin(BEP20) Wallet Address</p>
                                    <div class="col-md-6 mb-2" style="margin-right: 50px;">
                                        <div class="input-group">
                                            <input type="text" name="text" class="form-control" id="referralURL"
                                                value="1HKPH8R5vb2KGZSVu7npfg2GhgJYgXjk6u" readonly>
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
                                <a href="">
                                    <button class="btn btn-primary" style="padding-right: 30px; margin-left:10px;">Confirm</button>
                                </a>
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
