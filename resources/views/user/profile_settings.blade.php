@extends('layouts.dashboard_layout')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Profile Settings</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">
                                    <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">User</li>
                            <li class="breadcrumb-item active"> Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="edit-profile">
                <div class="row">
                    {{-- <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title mb-0">My Profile</h4>
                                <div class="card-options"><a class="card-options-collapse" href="#"
                                        data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                        class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                            class="fe fe-x"></i></a></div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row mb-2">
                                        <div class="profile-title">
                                            <div class="media">
                                                <img class="img-70 rounded-circle" alt=""
                                                    src="/assets_dashboard/images/user/7.jpg">
                                                <div class="media-body">
                                                    <h3 class="mb-1 f-20 txt-primary">MARK JECNO</h3>
                                                    <p class="f-12">DESIGNER</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h6 class="form-label">Bio</h6>
                                        <textarea class="form-control" rows="5">On the other hand, we denounce with righteous indignation</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email-Address</label>
                                        <input class="form-control" placeholder="your-email@domain.com">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control" type="password" value="password">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Website</label>
                                        <input class="form-control" placeholder="http://Uplor .com">
                                    </div>
                                    <div class="form-footer">
                                        <button class="btn btn-primary btn-block">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-xl-12">
                        <form class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title mb-0">Edit Profile</h4>
                                <div class="card-options"><a class="card-options-collapse" href="#"
                                        data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                        class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                            class="fe fe-x"></i></a></div>
                            </div>
                            <br>
                            <div class="row mb-6" style="margin-left: 20px; margin-right: 20px;">
                                <div class="profile-title">
                                    <div class="media">
                                        <div class="card col-md-2" style="background-color: rgba(99,98,231,0.8);">
                                           <center>
                                            <img class="img-100 rounded-circle" alt=""
                                            src="/assets_dashboard/images/user/user.png">
                                           </center>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" style="color:rgba(99,98,231,0.8);">Name</label>
                                            <div class="container card card-body">
                                                <h4>{{ Auth::user()->name }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" style="color:rgba(99,98,231,0.8);">Email</label>
                                            <div class="container card card-body">
                                                <h4>{{ Auth::user()->email }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" style="color:rgba(99,98,231,0.8);">Phone</label>
                                            <input class="form-control"  name="phone"  placeholder="{{ Auth::user()->phone }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" style="color:rgba(99,98,231,0.8);">Country</label>
                                            <input class="form-control" name="address" type="text" placeholder="Country">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" style="color:rgba(99,98,231,0.8);">Address</label>
                                            <input class="form-control" type="text" placeholder="Home Address">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label" style="color:rgba(99,98,231,0.8);">State</label>
                                            <input class="form-control" type="text" placeholder="State">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label" style="color:rgba(99,98,231,0.8);">City</label>
                                            <input class="form-control" type="text" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label class="form-label" style="color:rgba(99,98,231,0.8);">Zip Code</label>
                                            <input class="form-control" type="number" placeholder="Zip code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">Update Profile</button>
                            </div>
                        </form>
                        <!-- Container-fluid Ends-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
