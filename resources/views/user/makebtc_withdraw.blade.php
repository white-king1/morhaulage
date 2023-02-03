@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Make  a Bitcoin Withdrawal</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"> <a class="home-item" href="{{ route('home') }}">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Withdrawal</li>
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

                                        <h4>
                                            You requested to make a withdrawal of::USD{{ number_format($withdraw->withdraw_amount) }},<br>
                                            To your Bitcoin(BEP20) wallet address:: {{($withdraw->wallet_address)}}.
                                        </h4>

                                    <br>
                                    <center>
                                        <h5 class="mb-0">Follow the instructions;</h5>
                                    </center>
                                    <br>
                                    <h4>1. click on Confrim </h4>
                                    <br>
                                    <h4>
                                        2. Chart with us on the Chart Us Button to complete your withdrawal.
                                    </h4>
                                    <br>
                                    <h6>NOTE:
                                        FOR QUICK WITHDRAWAL,KINDLY CLICK ON THE  CHART US BUTTON.
                                    </h6>
                                    <br>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2  ">
                                <form action=""
                                    method="POST">@csrf
                                    @if ($withdraw->status != 'paid')
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
