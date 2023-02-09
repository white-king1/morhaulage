@extends('layouts.dashboard_layout')
<br>
<br>
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Investment Plans</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"> <a class="home-item" href="{{ route('home') }}"><i
                                        data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item"> Investment</li>
                            <li class="breadcrumb-item active"> Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        {{-- <div class="row">
            <div class="col-md-9">

            </div>
            <div class="col-md-3">
                <a href="{{ route('investp.report') }}">
                    <button class="btn btn-primary" style="padding-right: 30px;">My Investments</button>
                </a>
            </div>
        </div>
        <br> --}}
        <div class="container-fluid default-dash">
            <div class="col-lg-12">
                <div class="dashboard-main">
                    <div class="container-fluid">
                        <div class="container-fluid product-wrapper">
                            <div class="product-grid">
                                <div class="product-wrapper-grid">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="modal fade" id="exampleModalCenter16">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <div class="product-box row">
                                                                        <center>
                                                                            <div class="rating">
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h4>Standard Plan</h4>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h2>$50-$999</h2>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Return 2%</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Everyday</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>For 10days</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Total 20% + Capital</h6>
                                                                            </div>
                                                                            <br>
                                                                            <a class="btn btn-secondary"
                                                                                href="{{ route('deposit.now') }}">
                                                                                Invest Now
                                                                            </a>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-details">
                                                        <center>
                                                            <div class="rating">
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h4>Standard Plan</h4>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h2>$50-$999</h2>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Return 2%</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Everyday</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>For 10days</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Total 20% + Capital</h6>
                                                            </div>
                                                            <br>
                                                            <a class="btn btn-secondary" href="{{ route('deposit.now') }}">
                                                                Invest Now
                                                            </a>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- PRO PLAN STARTS HERE --}}
                                        <div class="col-xl-4 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="modal fade" id="exampleModalCenter16">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <div class="product-box row">
                                                                        <center>
                                                                            <div class="rating">
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h4>Pro Plan</h4>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h2>$1,000-$4,999</h2>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Return 2.5%</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Everyday</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>For 10days</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Total 25% + Capital</h6>
                                                                            </div>
                                                                            <br>
                                                                            <a class="btn btn-secondary"
                                                                                href="{{ route('deposit.now') }}">
                                                                                Invest Now
                                                                            </a>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-details">
                                                        <center>
                                                            <div class="rating">
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h4>Pro Plan</h4>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h2>$1,000-$4,999</h2>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Return 2.5%</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Everyday</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>For 10days</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Total 25% + Capital</h6>
                                                            </div>
                                                            <br>
                                                            <a class="btn btn-secondary" href="{{ route('deposit.now') }}">
                                                                Invest Now
                                                            </a>
                                                        </center>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- PRO PLAN ENDS HERE --}}

                                        {{-- DELUXE PLAN STARTS HERE --}}
                                        <div class="col-xl-4 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="modal fade" id="exampleModalCenter16">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <div class="product-box row">
                                                                        <center>
                                                                            <div class="rating">
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h4>Deluxe Plan</h4>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h2>$5,000-$9,999</h2>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Return 2%</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Everyday</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>For 10days</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Total 30% + Capital</h6>
                                                                            </div>
                                                                            <br>
                                                                            <a class="btn btn-secondary"
                                                                                href="{{ route('deposit.now') }}">
                                                                                Invest Now
                                                                            </a>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-details">
                                                        <center>
                                                            <div class="rating">
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h4>Deluxe Plan</h4>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h2>$5,000-$9,999</h2>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Return 3%</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Everyday</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>For 10days</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Total 30% + Capital</h6>
                                                            </div>
                                                            <br>
                                                            <a class="btn btn-secondary"
                                                                href="{{ route('deposit.now') }}">
                                                                Invest Now
                                                            </a>
                                                        </center>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- DELUXE PLAN ENDS HERE --}}

                                        {{-- GOLD PLAN STARTS HERE --}}
                                        <div class="col-xl-4 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="modal fade" id="exampleModalCenter16">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <div class="product-box row">
                                                                        <center>
                                                                            <div class="rating">
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h4>Gold Plan</h4>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h2>$10,000-$49,999</h2>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Return 4%</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Everyday</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>For 10days</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Total 40% + Capital</h6>
                                                                            </div>
                                                                            <br>
                                                                            <a class="btn btn-secondary"
                                                                                href="{{ route('deposit.now') }}">
                                                                                Invest Now
                                                                            </a>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-details">
                                                        <center>
                                                            <div class="rating">
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h4>Gold Plan</h4>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h2>$10,000-$49,999</h2>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Return 4%</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Everyday</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>For 10days</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Total 40% + Capital</h6>
                                                            </div>
                                                            <br>
                                                            <a class="btn btn-secondary" href="{{ route('deposit.now') }}">
                                                                Invest Now
                                                            </a>
                                                        </center>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- GOLD PLAN ENDS HERE --}}

                                        {{-- BUSINESS PLAN STARTS HERE --}}
                                        <div class="col-xl-4 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="modal fade" id="exampleModalCenter16">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <div class="product-box row">
                                                                        <center>
                                                                            <div class="rating">
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h4>Business Plan</h4>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h2>$50,000-$99,999</h2>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Return 5%</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Everyday</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>For 10days</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Total 50% + Capital</h6>
                                                                            </div>
                                                                            <br>
                                                                            <a class="btn btn-secondary"
                                                                                href="{{ route('deposit.now') }}">
                                                                                Invest Now
                                                                            </a>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-details">
                                                        <center>
                                                            <div class="rating">
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h4>Business Plan</h4>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h2>$50,000-$99,999</h2>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Return 5%</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Everyday</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>For 10days</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Total 50% + Capital</h6>
                                                            </div>
                                                            <br>
                                                            <a class="btn btn-secondary"
                                                                href="{{ route('deposit.now') }}">
                                                                Invest Now
                                                            </a>
                                                        </center>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- BUSINESS PLAN ENDS HERE --}}

                                        {{-- CAR/HOUSE PLAN STARTS HERE --}}
                                        <div class="col-xl-4 col-sm-6 xl-4">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="modal fade" id="exampleModalCenter16">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <div class="product-box row">
                                                                        <center>
                                                                            <div class="rating">
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h4>Car/House Plan</h4>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h2>$100,000-$199,999</h2>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Return 100%</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Every Month</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>For 2 Months</h6>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h6>Total 200% + Capital</h6>
                                                                            </div>
                                                                            <br>
                                                                            <a class="btn btn-secondary"
                                                                                href="{{ route('deposit.now') }}">
                                                                                Invest Now
                                                                            </a>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-details">
                                                        <center>
                                                            <div class="rating">
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                                <i data-feather="star" style="color:yellow;"></i>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h4>Car/House Plan</h4>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h2>$100,000-$199,999</h2>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Return 100%</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Every Month</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>For 2 Months</h6>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h6>Total 200% + Capital</h6>
                                                            </div>
                                                            <br>
                                                            <a class="btn btn-secondary"
                                                                href="{{ route('deposit.now') }}">
                                                                Invest Now
                                                            </a>
                                                        </center>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- CAR/HOUSE PLAN ENDS HERE --}}

                                        {{-- END IT HERE NOW --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
