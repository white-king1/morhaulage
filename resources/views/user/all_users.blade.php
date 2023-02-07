@extends('layouts.admin_dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>LIST OF USERS</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">ALL</li>
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
                            <h5 class="mb-0">ALL USERS DETAILS </h5>
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
                                    <th> <span>Name</span></th>
                                    <th> <span>Email</span></th>
                                    <th> <span>Phone </span></th>
                                    <th> <span>referral_link </span></th>
                                    <th> <span>Balance </span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_users as $user)
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
                                            <h6>{{ $user->referral_link }}</h6>
                                        </td>
                                        <td class="img-content-box">
                                            <h6>
                                                ${{ number_format(floatval($user->wallet->balance ?? 'unknown')) }}
                                            </h6>
                                        </td>
                                        <td>
                                            <div class="badge badge-light-primary"></div>
                                        </td>
                                        <td>

                                            <form action="" method="POST">@csrf
                                                @if ($user->status != 'restricted')
                                                <button class="btn btn-success" type="submit">Restrict</button>
                                                @endif
                                            </form>
                                        </td>
                                        <td>
                                            <a href="{{ route('delete.users', $user->id) }}" class="btn btn-danger"
                                                type="submit">Delete
                                            </a>
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
