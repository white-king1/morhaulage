@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Transfer Successful</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"> <a class="home-item" href="{{ route('home') }}">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Transfer</li>
                            <li class="breadcrumb-item active">Successful</li>
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
                                        <h4>
                                            The Transfer of USD{{ number_format($trf->transfer_amount) }} was successful
                                        </h4>
                                    </center>
                                    <br>
                                    <center>
                                        <h5 class="mb-0">With Referral_Code:: {{ $trf->referral_link }}</h5>
                                    </center>
                                    <br>
                                </div>

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
