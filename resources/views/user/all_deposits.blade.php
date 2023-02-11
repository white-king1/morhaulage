@extends('layouts.admin_dashboard_layout')
<br>
<br>
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3>LIST OF DEPOSITS</h3>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">ALL</li>
                        <li class="breadcrumb-item active">DEPOSITS</li>
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
                        <h5 class="mb-0">ALL DEPSOITS </h5>
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
                                <th> <span>Transaction ID</span></th>
                                <th> <span>Plan </span></th>
                                <th> <span>Amount</span></th>
                                <th> <span>Referral Link </span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $all_deposits as $trans )
                                <tr>
                                    <td>
                                        <h6>{{ $trans->user->name }}</h6>
                                    </td>
                                    <td class="img-content-box">
                                        <h6>{{$trans->transaction_id}}</h6>
                                    </td>
                                    <td class="img-content-box">
                                        <h6>{{($trans->plan)}}</h6>
                                    </td>
                                    <td class="img-content-box">
                                        <h6>${{number_format($trans->amount)}}</h6>
                                    </td>
                                    <td class="img-content-box">
                                        <h6>{{ $trans->user->referral_link }}</h6>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-primary"></div>
                                    </td>
                                    <td>
                                         @if ($trans->status != 'paid')
                                         <a href="{{route('paid.deposits',$trans->id)}}" class="btn btn-success" type="submit">Paid</a>

                                         @endif

                                    </td>
                                    @endforeach
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
