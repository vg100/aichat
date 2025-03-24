@extends('layouts.user_type.guest')
@section('title')
    Login
@endsection
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
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                    <p>Welcome to our AI writing tools business! Our cutting-edge technology enables you to create high-quality content with ease.</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="EMAIL" id="email" name="email" value="{{ old('email') }}" autofocus required aria-label="Email" aria-describedby="email-addon">
                                            @error('email')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="PASSWORD" id="password" name="password" required aria-label="Password" aria-describedby="password-addon">
                                            @error('password')
                                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe"  >
                                            <label class="form-check-label" for="rememberMe">Keep me signed in </label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <small class="text-muted">Forgot Password?
                                        <a href="{{ route('password.request') }}" class="text-info text-gradient font-weight-bold">here</a>
                                    </small>
                                    {{--                                    <p class="mb-4 text-sm mx-auto">--}}
                                    {{--                                        Don't have an account?--}}
                                    {{--                                        <a href="register" class="text-info text-gradient font-weight-bold">Sign up</a>--}}
                                    {{--                                    </p>--}}
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
        </section>
    </main>
    <footer class="footer py-5">
        <div class="container">

            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright © WillDev team <script>
                            document.write(new Date().getFullYear())
                        </script> All rights reserved.

                    </p>
                </div>
            </div>
        </div>
    </footer>
@endsection
