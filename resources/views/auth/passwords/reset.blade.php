

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>1Reset Password </title>
    <link rel="icon" href="{{asset('uploads/logo.png')}}">
    <style>
        a:hover
        {
            text-decoration: none;
        }
        div.main-section{
            position: relative;
        }
        div.main-section .overlap-text{
            position: absolute;
            top: 50%;
            left:0%;
            transform: translate(0%,-50%);
            width:100%;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 main-section">
                <span class="overlap-text text-light text-center">
                    <span style="font-size:25px;">Nice to see you again</span><br>
                    <span style="font-size:60px;letter-spacing: 3px;">WELCOME BACK</span><br>

                    <div class="row mt-5"><div class="col-md-6 offset-md-3">Welcome to our AI writing tools business! Our cutting-edge technology enables you to create high-quality content with ease.</div></div>
                </span>
                <img src="{{asset('assets/images/bg_login.png')}}" alt="image" style="height:965px;margin-left:-15px;width:104%;">
            </div>
            <div class="col-md-7">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6">
                            <div class="p-4 text-center">
                                <h1 class="text-primary mb-5">Reset Password</h1>
                                @error('password')
                                    <div class="alert alert-success" role="alert" style="font-size:20px;">
                                        {{ $message }}
                                    </div>
                                @enderror
                                
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="row">
                                        <div class="col-12 mt-3">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" style="font-size:20px;" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" style="font-size:20px;" placeholder="Enter New Password" name="password" required autocomplete="new-password">
                                        </div>

                                        <div class="col-12 mt-3">
                                            <input id="password-confirm" type="password" class="form-control" style="font-size:20px;" name="password_confirmation" placeholder="Confirm New Password" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="row mb-0 mt-3">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block mt-3" style="font-size:22px;border-radius:25px;">
                                                Reset Password
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <section class="vh-100" style="background-image: url('{{ asset('assets/images/web_login_bg.png') }}');">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow shadow-lg">
                        <div class="card-body text-center">
                            <img src="{{asset('uploads/'.App\Models\Setting::getSetting('black_logo'))}}" width="300px" height="70px">
                            <h3 class="mt-4 mb-4" style="color:#f77b0b">Reset Password</h3>

                            @error('password')
                                <div class="alert alert-success" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="row">
                                    <div class="col-12 mt-3">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter New Password" name="password" required autocomplete="new-password">
                                    </div>

                                    <div class="col-12 mt-3">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm New Password" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-0 mt-3">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat" style="font-size:17px;background-color:#f77b0b;border-color:#f77b0b">
                                            {{ __('Reset Password') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
