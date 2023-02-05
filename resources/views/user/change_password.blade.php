@extends('layouts.dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>CHANGE PASSWORD</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">CHANGE</li>
                        <li class="breadcrumb-item active">PASSWORD</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid credit-card payment-details">

        <div class="row">
            <!-- Individual column searching (text inputs) Starts-->
            <div class="col-xxl-10 col-md-10 mx-auto box-col-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="theme-form mega-form" action="" method="POST">
                                         @csrf
                                         <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect9">CURRENT PASSWORD</label>
                                            <input class="form-control" name="current_password" type="text" placeholder="CURRENT PASSWORD"
                                                required>
                                        </div>
                                        <br>
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect9">NEW PASSWORD</label>
                                            <input class="form-control" name="new_password" type="text" placeholder="NEW PASSWORD"
                                                required>
                                        </div>
                                        <br>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlSelect9">CONFIRM NEW PASSWORD</label>
                                        <input class="form-control" name="confirm" type="text" placeholder="CONFIRM NEW PASSWORD"
                                            required>
                                    </div>

                                    <div class="card-body">
                                        <center>
                                            <div class="card-footer text-end">
                                            <button class="btn btn-primary">CHANGE PASSWORD</button>
                                            </div>
                                        </center>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection