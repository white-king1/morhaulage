@extends('layouts.dashboard_layout')
<br>
<br>
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>REFERRED USERS</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">REFERRED</li>
                            <li class="breadcrumb-item active">USERS</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-md-12 dash-50">
            <div class="card ongoing-project">
                <div class="card-header card-no-border">
                    <div class="media media-dashboard">
                        <div class="media-body">
                            <h5 class="mb-0">REFERRED USERS DETAILS </h5>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive custom-scrollbar">
                        <table class="table table-bordernone">
                            <thead>
                                <tr>
                                    <th> <span>Name</span></th>
                                    <th> <span>Email</span></th>
                                    <th> <span>Phone </span></th>
                                    <th> <span>Balance </span></th>
                                    <th> <span>referral_link </span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($referrals as $user)
                                    <tr>
                                        <td>
                                            <h6>{{ $user->name }}</h6>
                                        </td>
                                        <td class="img-content-box">
                                            <h6>{{ $user->email }}</h6>
                                        </td>
                                        <td class="img-content-box">
                                            <h6>{{ $user->phone }}</h6>
                                        </td>
                                        <td class="img-content-box">
                                            <h6>
                                                ${{ number_format($user->balance ) }}
                                            </h6>
                                        </td>
                                        <td class="img-content-box">
                                            <h6>{{ $user->referral_link }}</h6>
                                        </td>


                                        <td>
                                            <div class="badge badge-light-primary"></div>
                                        </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
