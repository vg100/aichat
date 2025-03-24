@extends('layouts.user_type.guest')

@section('content')
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">

                <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 my-3 blur blur-rounded shadow py-2 start-0 end-0 mx4">
                    <div class="container-fluid container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="">
                         Admin Panel
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                    </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto">
                               
                            </ul>
                            <ul class="navbar-nav d-lg-block d-none">
                                <li class="nav-item">
                                    <a href="" target="_blank" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-dark">Contact Now</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        @if($errors->any())
                            <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-text text-white">
                            {{$errors->first()}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endif
                        @if(session('success'))
                            <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </button>
                            </div>
                        @endif
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h4 class="mb-0">Forgot your password? Enter your email here</h4>
                        </div>
                        <div class="card-body">
                            @if(session('status'))
                                <div class="alert alert-success" role="alert" style="font-size:20px;">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="{{ route('password.email') }}" method="POST" role="form text-left">
                                @csrf
                                <div>
                                    <label for="email">Email</label>
                                    <div class="">
                                        <input id="email" name="email" type="email" value="{{ old('email') }}"  autofocus autocomplete="email" required class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                        @error('email')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Recover your password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                        <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url({{asset('assets/template-soft-ui/assets/img/curved-images/curved6.jpg')}})"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
