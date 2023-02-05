@extends('layouts.admin_dashboard_layout')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>MAKE TRANSFERS</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">TRANSFER</li>
                        <li class="breadcrumb-item active">PAGE</li>
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
                    <div class="card-header pb-0">
                        <h5> TRANSFER LIMIT: USD50 - USD1,000,000 </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="theme-form mega-form" action="{{route('transfer.details')}}" method="POST">
                                         @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="exampleFormControlSelect9">CHARGE</label>
                                                <select class="form-select digits" name="charge"
                                                    id="exampleFormControlSelect9">
                                                    <option>0.00USD</option>
                                                    <option>0.00USD</option>


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlSelect9">REFERRRAL LINK</label>
                                        <input class="form-control" name="referral_link" type="text" placeholder="Referral Link"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlSelect9">AMOUNT(USD)</label>
                                        <input class="form-control" name="transfer_amount" type="text" placeholder="Amount"
                                            required>
                                    </div>

                                    <div class="mb-3">
                                        <h4>CONVERSION RATE: 1USD = 1USD</h4>
                                    </div>
                                    <div class="card-body">
                                        <center>
                                            <div class="card-footer text-end">
                                            <button class="btn btn-success">Transfer</button>
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
