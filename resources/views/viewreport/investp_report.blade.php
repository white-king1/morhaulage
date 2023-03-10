@extends('layouts.dashboard_layout')
<br>
<br>
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Investment History</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"> <a class="home-item" href="{{ route('home') }}">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Investment</li>
                            <li class="breadcrumb-item active"> Log</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dash">
            <div class="row">
                <div class="col-xl-12 col-md-12 dash-50">
                    <div class="card ongoing-project">
                        <div class="card-header card-no-border">
                            <div class="media media-dashboard">
                                <div class="media-body">
                                    <h5 class="mb-0">INTEREST LOG </h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-10">
                                        <a href="{{route('investments')}}">
                                            <button class="btn btn-primary" style="padding-right: 30px;">InvestPlan</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="icon-box onhover-dropdown"><i data-feather="more-horizontal"></i>
                                    <div class="icon-box-show onhover-show-div">
                                        <ul>
                                            <li> <a>
                                                    Pending</a></li>
                                            <li> <a>
                                                    Paid</a></li>
                                            <li> <a>
                                                    Completed</a></li>
                                            <li> <a>Canceled</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="table-responsive custom-scrollbar">
                                <table class="table table-bordernone">
                                    <thead>
                                        <tr>
                                            <th> <span>Plan</span></th>
                                            <th> <span>Return</span></th>
                                            <th> <span>Recieve</span></th>
                                            <th> <span>NextPayment </span></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                dkjkjskjkj1237
                                            </td>
                                            <td class="img-content-box">
                                                <h6>$1,200.00</h6>
                                            </td>
                                            <td>
                                                <h6>Pending</h6>

                                            </td>
                                            <td>
                                                <div class="badge badge-light-primary">28th January 2023</div>
                                            </td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>
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
