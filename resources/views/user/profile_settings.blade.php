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
                    <div class="col-xl-12">
                        <form class="card" action="{{ route('post.profile') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-header pb-0">
                                <h4 class="card-title mb-0">Edit Profile</h4>
                                <div class="card-options"><a class="card-options-collapse" href="#"
                                        data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                        class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                            class="fe fe-x"></i></a></div>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-2" style="margin-left: 30px;">
                                    <img class="rounded-circle img-fluid" src="/upload_images/{{ Auth::user()->image }}"
                                        alt="user_image">
                                </div>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <a  href="{{route('profile.settings')}}" type="button" class="close" data-dismiss="alert">×</a>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="col-md-2" style="margin-left: 30px;">
                                    <input type="file" name="image" class="form-control">
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
                                            <div class="container card card-body">
                                                <h4>{{ Auth::user()->phone }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" style="color:rgba(99,98,231,0.8);">Country</label>
                                            <input class="form-control" name="country" type="text" placeholder="{{ Auth::user()->country }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label" style="color:rgba(99,98,231,0.8);">Address</label>
                                            <input class="form-control" name="address" type="text"
                                                placeholder="{{ Auth::user()->address }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label" style="color:rgba(99,98,231,0.8);">State</label>
                                            <input class="form-control" name="state" type="text" placeholder="{{ Auth::user()->state }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label" style="color:rgba(99,98,231,0.8);">City</label>
                                            <input class="form-control" name="city" type="text" placeholder="{{ Auth::user()->city}}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label class="form-label" style="color:rgba(99,98,231,0.8);">Zip Code</label>
                                            <input class="form-control" name="zipcode" type="number" placeholder="{{ Auth::user()->zipcode }}"
                                                required>
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
