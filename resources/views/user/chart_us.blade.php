@extends('layouts.dashboard_layout')
<br>
<br>
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>CHART WITH US</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"> <a class="home-item" href="{{ route('home') }}">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Chart</li>
                            <li class="breadcrumb-item active">Us</li>
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
                                        <h2 class="mb-0">PAYMENT IN PROGRESS <i  data-feather="thumbs-up" style="color:yellow;" ></i> </h2>
                                    </center>
                                    <br>
                                    <h4>KINDLY CHART WITH US WITH A PROVE OF PAYMENT TO ACTIVATE AND CREDIT YOUR WALLET</h4>
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
