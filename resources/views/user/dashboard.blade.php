@extends('layouts.dashboard_layout')
<br>
<br>
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
                            <li class="breadcrumb-item"> <a class="home-item" href="{{ route('home') }}"><i
                                        data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item"> Dashboard</li>
                            <li class="breadcrumb-item active"> Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @if (Session::has('flash_message'))
        <center>
        <div class="alert {{ Session::get('flash_type') }} col-md-4">
           <h6>{{ Session::get('flash_message') }}</h6>
        </div>
        </center>
        @endif
        <div class="card alert alert-primary " role="alert">
            <div class="row">
                @if (Auth::user()->image == null)
                 <div class="col-md-2">
                 <img  class="rounded-circle img-fluid" src="/assets_dashboard/images/avtar/avatarimagez.png" alt="uploadimage">
                 </div>
                @else
                <div class="col-md-2 ">
                    <img  class="rounded-circle img-fluid" src="/upload_images/{{Auth::user()->image}}" alt="user_image">
                </div>
                @endif
                <div class="col-md-3" style="margin-top: 30px;">
                    <h3 class="caption">{{ Auth::user()->name }}</h3>
                    <h5>{{ Auth::user()->email }}</h5>
                </div><!-- single end -->
                <div class="col-md-2" style="margin-top: 30px;">
                    <h3 class="caption">Register Date</h3>
                    <p>{{ Auth::user()->created_at }}</p>
                </div><!-- single end -->
                <div class="col-md-2" style="margin-top: 30px;">
                    <h3 class="caption">Last Access</h3>
                    <p>{{ Auth::user()->updated_at }}</p>
                </div><!-- single end -->
                <div class="col-md-3 mb-2" style="margin-top: 30px;">
                        <h3 class="caption">Referral Code</h3>
                    <div class="input-group">
                        <input type="text" name="text" class="form-control" id="referralURL"
                            value="morhaulage.com/register?ref_code={{ Auth::user()->referral_link }}" readonly>
                        <div class="input-group-append">
                            <span class="input-group-text copytext copyBoard" id="copyBoard"
                                onclick="myFunction()"> <i data-feather="copy"
                                    style="color:rgba(99,98,231,0.8);"></i></i> </span>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dash">
            <div class="row">
                <div class="col-xl-6 col-md-12 dash-xl-100">
                    <div class="card profile-greeting">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <div class="greeting-user">
                                        <h1>Hello, {{ Auth::user()->name }}</h1>
                                        <p style="font-size: 12px;">Welcome back,your dashboard is ready!</p>
                                        <br>
                                        <h4>Available Balance::
                                            ${{ number_format(Auth::user()->wallet->balance) }}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="cartoon-img"><img class="img-fluid"
                                    src="http://admin.pixelstrap.com/zeta/assets/images/images.svg" alt=""></div>
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
                                                                            <form action="{{route('depv.form')}}" method="POST">
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
                                                                                    <h4>Deposit Wallet</h4>
                                                                                </div>
                                                                                <br>
                                                                                <div class="product-price">
                                                                                    <h2>${{ number_format(Auth::user()->wallet->balance) }}</h2>
                                                                                </div>
                                                                                <br>
                                                                                <a class="btn btn-secondary">
                                                                                    View Report
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
                                                                <h4>Deposit Wallet</h4>
                                                            </div>
                                                            <br>
                                                            <div class="product-price">
                                                                <h2>${{ number_format(Auth::user()->wallet->balance) }}
                                                                </h2>
                                                            </div>
                                                            <br>


                                                            <a class="btn btn-secondary" href="{{ route('depv.report') }}">
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
                                                                                <h2>${{ number_format(floatval(Auth::user()->trans->amount ?? 'unknown')) }}
                                                                                </h2>
                                                                            </div>
                                                                            <br>
                                                                            <a class="btn btn-secondary"
                                                                                href="">
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
                                                                <h2>${{ number_format(floatval(Auth::user()->trans->amount ?? 'unknown')) }}
                                                                </h2>
                                                            </div>
                                                            <br>


                                                            <a class="btn btn-secondary"
                                                                href="">
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
                                                                                <h2>${{ number_format(floatval(Auth::user()->trans->amount ?? 'unknown')) }}
                                                                                </h2>
                                                                            </div>
                                                                            <br>
                                                                            <a class="btn btn-secondary"
                                                                                href="">
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
                                                                <h2>${{ number_format(floatval(Auth::user()->trans->amount ?? 'unknown')) }}
                                                                </h2>
                                                            </div>
                                                            <br>


                                                            <a class="btn btn-secondary"
                                                                href="">
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
                                                                            <a class="btn btn-secondary" href="">
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


                                                            <a class="btn btn-secondary" href="">
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
                        {{-- <div class="container-fluid">
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
                                                                <h1>${{ number_format(floatval(Auth::user()->trans->amount ?? 'unknown')) }}
                                                                </h1>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="folder-box">
                                                        <div class="media"><i class="fa fa-folder f-36 txt-warning"></i>
                                                            <div class="media-body ms-3">
                                                                <h4 class="mb-0">Total Withdraw</h4>
                                                                <h1>
                                                                    $0
                                                                </h1>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="folder-box">
                                                        <div class="media"><i
                                                                class="fa fa-file-archive-o f-36 txt-warning"></i>
                                                            <div class="media-body ms-3">
                                                                <h4 class="mb-0">Last Deposit</h4>
                                                                <h1>${{ number_format(floatval(Auth::user()->trans->amount ?? 'unknown')) }}
                                                                </h1>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="folder-box">
                                                        <div class="media"><i class="fa fa-folder f-36 txt-warning"></i>
                                                            <div class="media-body ms-3">
                                                                <h4 class="mb-0">Last Withdraw</h4>
                                                                <h1>
                                                                    ${{ number_format(floatval(Auth::user()->trans->amount ?? 'unknown')) }}
                                                                </h1>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
