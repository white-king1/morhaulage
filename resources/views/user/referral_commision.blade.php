@extends('layouts.dashboard_layout')
<br>
<br>
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Deposit Referral Commissions</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"> <a class="home-item" href="{{ route('home') }}"><i
                                        data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item"> Referral</li>
                            <li class="breadcrumb-item active"> Commissions</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dash">
            <div class="col-lg-12">
                <div class="dashboard-main">
                    <div class="container-fluid">
                        <div class="container-fluid product-wrapper">
                            <div class="product-grid">
                                <div class="product-wrapper-grid">
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-6 xl-6">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="modal fade" id="exampleModalCenter16">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <div class="product-box row">

                                                                        <center>
                                                                            <form action="" method="POST">
                                                                                @csrf
                                                                                <div class="rating">
                                                                                    <i class="fa fa-star"></i><i
                                                                                        class="fa fa-star"></i><i
                                                                                        class="fa fa-star"></i><i
                                                                                        class="fa fa-star"></i><i
                                                                                        class="fa fa-star"></i>
                                                                                </div>
                                                                                <br>
                                                                                <div class="product-price">
                                                                                    <h4>Deposit Commission</h4>
                                                                                </div>
                                                                                <br>
                                                                                <div class="product-price">
                                                                                    <h2>${{ number_format(Auth::user()->balance ) }}
                                                                                    </h2>
                                                                                </div>
                                                                                <br>
                                                                                <a class="btn btn-secondary">
                                                                                    Earn More
                                                                                </a>
                                                                            </form>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-details">
                                                        <center>
                                                            <div class="rating">

                                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                                    class="fa fa-star"></i>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h4>Deposit Commission</h4>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h2>${{ number_format(Auth::user()->balance ) }}
                                                                </h2>
                                                            </div>
                                                            <br>


                                                            <a class="btn btn-secondary" href="">
                                                                Earn More
                                                            </a>
                                                        </center>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-6 xl-6">
                                            <div class="card">
                                                <div class="product-box">
                                                    <div class="modal fade" id="exampleModalCenter16">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <div class="product-box row">

                                                                        <center>
                                                                            <div class="rating">

                                                                                <i class="fa fa-star"></i><i
                                                                                    class="fa fa-star"></i><i
                                                                                    class="fa fa-star"></i><i
                                                                                    class="fa fa-star"></i><i
                                                                                    class="fa fa-star"></i>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h4>Interest Commission</h4>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h2>${{ number_format(Auth::user()->balance ) }}
                                                                                </h2>
                                                                            </div>
                                                                            <br>
                                                                            <a class="btn btn-secondary"
                                                                                href="">
                                                                                Earn More
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

                                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                                    class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                                    class="fa fa-star"></i>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h4>Interest Commission</h4>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h2>${{ number_format(Auth::user()->balance ) }}
                                                                </h2>
                                                            </div>
                                                            <br>


                                                            <a class="btn btn-secondary"
                                                                href="">
                                                                Earn More
                                                            </a>
                                                        </center>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


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
