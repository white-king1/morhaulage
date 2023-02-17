@extends('layouts.dashboard_layout')
<br>
<br>
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>RE-INVEST BALANCE <i  data-feather="thumbs-up" style="color:greenyellow;" ></i></h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"> <a class="home-item" href="{{ route('home') }}">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Re-Invest</li>
                            <li class="breadcrumb-item active">Balance</li>
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
                                        <h2 class="mb-0">YOUR REQUEST TO RE-INVEST YOUR TOTAL WALLET BALANCE WAS SUCCESSFULL<i  data-feather="thumbs-up" style="color:greenyellow;" ></i> </h2>
                                    </center>
                                    <br>
                                    <h6></h6>
                                    <h4>TOTAL RE-INVESTMENT CAPITAL:: ${{number_format(Auth::user()->balance)}}</h4>
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
