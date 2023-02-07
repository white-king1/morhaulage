@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>
                            Deposit
                        </h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="home-item" href="index.html"><i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Deposit</li>
                            <li class="breadcrumb-item active">Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid crypto-dash">
            <div class="row">
                <div class="col-xl-3 col-md-6 dash-lg-50">
                    <div class="card crypto-chart overflow-hidden">
                        <div class="card-header card-no-border">
                            <div class="media">
                                <div class="media-body">
                                    <div class="col-md-6">
                                        <img src="/assets_dashboard/images/bitcoinnew.jpg"alt="btc">
                                    </div>
                                </div>
                                <div class="media-end">
                                    <p class="font-primary" style="margin-left: 2px;">Bitcoin<span>(BEP20)</span></p>
                                    <span class="badge badge-light-primary" style="font-size: 8px; margin-left:7px;">
                                        <i data-feather="arrow-up"> </i>Binance SmartChain</span>
                                </div>
                            </div>
                            <h5 class="font-primary" style="margin-top:10px;">Bitcoin(BTC)</h5>
                            <br>
                            <br>
                            <a class="btn btn-secondary" href="{{ route('depositbtc.details') }}" style="margin-left:20px;">
                                Deposit Now
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="crypto-dashborad-chart">
                                <div id="bitcoin-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 dash-lg-50">
                    <div class="card crypto-chart overflow-hidden">
                        <div class="card-header card-no-border">
                            <div class="media">
                                <div class="media-body">
                                    <div class="col-md-6">
                                        <img src="/assets_dashboard/images/ethn.png"alt="eth">
                                    </div>
                                </div>
                                <div class="media-end">
                                    <p class="font-primary" style="margin-left: 2px;">Ethereum<span>(ERC20)</span></p>
                                    <span class="badge badge-light-primary" style="font-size: 8px; margin-left:7px;"><i
                                            data-feather="arrow-up"> </i>Smart Chain</span>
                                </div>
                            </div>
                            <h5 class="font-primary" style="margin-top:10px;">Ethereum(ETH)</h5>
                            <br>
                            <br>
                            <a class="btn btn-secondary" href="{{route('depositeth.details')}}" style="margin-left:20px;">
                                Deposit Now
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="crypto-dashborad-chart">
                                <div id="bitcoin-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 dash-lg-50">
                    <div class="card crypto-chart overflow-hidden">
                        <div class="card-header card-no-border">
                            <div class="media">
                                <div class="media-body">
                                    <div class="col-md-6">
                                        <img src="/assets_dashboard/images/usdtnnew.png"alt="usdt">
                                    </div>
                                    {{-- <h5 class="font-primary" style="margin-top:10px;">Bitcoin(BTC)</h5> --}}
                                </div>
                                <div class="media-end">
                                    <p class="font-primary" style="margin-left: 2px;">USDT</p>

                                </div>
                            </div>
                            <h5 class="font-primary" style="margin-top:10px;">USDT(TRC20)</h5>
                            <br>
                            <br>
                            <a class="btn btn-secondary" href="{{route('depositusdt.details')}}" style="margin-left:20px;">
                                Deposit Now
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="crypto-dashborad-chart">
                                <div id="bitcoin-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 dash-lg-50">
                    <div class="card crypto-chart overflow-hidden">
                        <div class="card-header card-no-border">
                            <div class="media">
                                <div class="media-body">
                                    <div class="col-md-6">
                                        <img src="/assets_dashboard/images/pm1new.png"alt="Pm">
                                    </div>
                                </div>
                                <div class="media-end">
                                    <p class="font-primary" style="margin-left: 2px;">Perfect Money</p>
                                </div>
                            </div>
                            <h6 class="font-primary" style="margin-top:10px;">Perfect Money(PM)</h6>
                            <br>
                            <br>
                            <a class="btn btn-secondary" href="" style="margin-left:20px;">
                                Deposit Now
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="crypto-dashborad-chart">
                                <div id="bitcoin-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
    </div>
@endsection
