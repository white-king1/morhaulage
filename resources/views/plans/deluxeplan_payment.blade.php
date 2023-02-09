@extends('layouts.dashboard_layout')
<br>
<br>
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Deluxe Investment plan</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"> <a class="home-item" href="{{ route('home') }}">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Deluxe</li>
                            <li class="breadcrumb-item active">Investment Plan</li>
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
                                        1. Copy the Bitcoin wallet address and
                                        <br>
                                         make a payment of between USD50-USD999 ,
                                        <br>
                                        to start your investment,or
                                        <br>
                                        2.click on Pay Now for other Crypto payment options.
                                        <br>
                                        3. Click on the Live Chart to complete your transaction.
                                    </p>

                                    <br>
                                    <p>Pay between USD5,000-USD9,999 into this Bitcoin Wallet Address (BEP20)</p>
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
                                <a href="{{route('deposit')}}">
                                    <button class="btn btn-primary" style="padding-right: 30px; margin-left:10px;">Pay Now</button>
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
