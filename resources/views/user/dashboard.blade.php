@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"> <a class="home-item" href="index.html"><i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item"> Dashboard</li>
                            <li class="breadcrumb-item active"> Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card alert alert-primary " role="alert">
            <div class="row">
                <div class="col-md-2" style="margin-left:-10px;"><img src="assets_dashboard/images/gal7.jpg" alt="image">
                </div>
                <div class="col-md-3" style="margin-top: 30px;">
                    <h3 class="caption">{{ Auth::user()->name }}</h3>
                    <p>{{ Auth::user()->email }}</p>
                </div><!-- single end -->
                <div class="col-md-3" style="margin-top: 30px;">
                    <h3 class="caption">Registration Date</h3>
                    <p>{{ Auth::user()->created_at }}</p>
                </div><!-- single end -->
                <div class="col-md-4" style="margin-top: 30px;">
                    <h3 class="caption">Last Access</h3>
                    <p>{{ Auth::user()->updated_at }}</p>
                </div><!-- single end -->
            </div>
        </div>

        <!-- Container-fluid starts-->
        <div class="container-fluid default-dash">
            <div class="row">
                <div class="col-xl-6 col-md-6 dash-xl-50">
                    <div class="card profile-greeting">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <div class="greeting-user">
                                        <h1>Hello, {{ Auth::user()->name }}</h1>
                                        <p>Welcome back,your dashboard is ready!</p>
                                        <br>
                                        <h5>Available Balance: $1,200.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="cartoon-img"><img class="img-fluid"
                                    src="http://admin.pixelstrap.com/zeta/assets/images/images.svg" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 dash-xl-50">
                    <div class="card ">
                        <div class="card-body ">
                            <div class="col-md-6 mb-2" style="margin-left: 20px;">
                                <label>
                                    <h3>Referral Link</h3>
                                </label>
                                <div class="input-group">
                                    <input type="text" name="text" class="form-control" id="referralURL"
                                        value="http://127.0.0.1:8000/{{ Auth::user()->referral_link }}" readonly>
                                    <div class="input-group-append">
                                        <span class="input-group-text copytext copyBoard" id="copyBoard"
                                            onclick="myFunction()"> <i class="fa fa-copy"></i> </span>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="dashboard-main">
                    <div class="container-fluid">



                        <div class="container-fluid product-wrapper">
                            <div class="product-grid">
                                <div class="product-wrapper-grid">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 xl-3">
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
                                                                                <h4>Deposit Wallet</h4>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h2>$5</h2>
                                                                            </div>
                                                                            <br>
                                                                            <a class="btn btn-secondary"
                                                                                href="{{route('depv.report')}}">
                                                                                View Report
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
                                                                <h4>Deposit Wallet</h4>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h2>$5</h2>
                                                            </div>
                                                            <br>


                                                            <a class="btn btn-secondary" href="{{route('depv.report')}}">
                                                                View Report
                                                            </a>
                                                        </center>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 xl-3">
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
                                                                                <h4>Investment Wallet</h4>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h2>$0</h2>
                                                                            </div>
                                                                            <br>
                                                                            <a class="btn btn-secondary"
                                                                                href="product-page.html">
                                                                                View Report
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
                                                                <h4>Investment Wallet</h4>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h2>$0</h2>
                                                            </div>
                                                            <br>


                                                            <a class="btn btn-secondary" href="product-page.html">
                                                                View Report
                                                            </a>
                                                        </center>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 xl-3">
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
                                                                                <h4>Total Invest</h4>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h2>$0</h2>
                                                                            </div>
                                                                            <br>
                                                                            <a class="btn btn-secondary"
                                                                                href="product-page.html">
                                                                                View Report
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
                                                                <h4>Total Invest</h4>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h2>$0</h2>
                                                            </div>
                                                            <br>


                                                            <a class="btn btn-secondary" href="product-page.html">
                                                                View Report
                                                            </a>
                                                        </center>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 xl-3">
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
                                                                                <h4>Total Ticket</h4>
                                                                            </div>
                                                                            <br>
                                                                            <div class="product-price">
                                                                                <h2>0</h2>
                                                                            </div>
                                                                            <br>
                                                                            <a class="btn btn-secondary"
                                                                                href="product-page.html">
                                                                                View Report
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
                                                                <h4>Total Ticket</h4>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h2>0</h2>
                                                            </div>
                                                            <br>


                                                            <a class="btn btn-secondary" href="product-page.html">
                                                                View Report
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
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 box-col-9 ">
                                    <div class="file-content">
                                        <div class="card">
                                            <div class="card-body file-manager">
                                                <div class="row">
                                                    <div class="col-md-6" style="pading-right: 10px;">
                                                        <ol class="breadcrumb">
                                                            <i data-feather="credit-card"></i>
                                                            &ensp;
                                                            <h2 class="breadcrumb-item"> Deposit</h2>

                                                        </ol>
                                                    </div>
                                                    <div class="col-md-6" style="pading-right: 10px;">
                                                        <ol class="breadcrumb">
                                                            <i data-feather="credit-card"></i>
                                                            &ensp;
                                                            <h2 class="breadcrumb-item"> Withdraw</h2>

                                                        </ol>
                                                    </div>
                                                </div>
                                                <ul class="folder">
                                                    <li class="folder-box">
                                                        <div class="media"><i
                                                                class="fa fa-file-archive-o f-36 txt-warning"></i>
                                                            <div class="media-body ms-3">
                                                                <h4 class="mb-0">Total Deposit</h4>
                                                                <h1>$0.00</h1>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="folder-box">
                                                        <div class="media"><i class="fa fa-folder f-36 txt-warning"></i>
                                                            <div class="media-body ms-3">
                                                                <h4 class="mb-0">Total Withdraw</h4>
                                                                <h1>$0.00</h1>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="folder-box">
                                                        <div class="media"><i
                                                                class="fa fa-file-archive-o f-36 txt-warning"></i>
                                                            <div class="media-body ms-3">
                                                                <h4 class="mb-0">Last Deposit</h4>
                                                                <h1>$0.00</h1>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="folder-box">
                                                        <div class="media"><i class="fa fa-folder f-36 txt-warning"></i>
                                                            <div class="media-body ms-3">
                                                                <h4 class="mb-0">Last Withdraw</h4>
                                                                <h1>$0.00</h1>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>

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
