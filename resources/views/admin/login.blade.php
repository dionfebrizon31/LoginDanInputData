<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('admin/assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
</head>

<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <!-- [ auth-signin ] start -->
    <div class="auth-wrapper">
        <div class="auth-content text-center">
            <img src="{{ asset('admin/assets/images/logo.png') }}" alt="" class="img-fluid mb-4">
            <div class="card borderless">
                <div class="row align-items-center ">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4 class="mb-3 f-w-400">Signin admin</h4>
                            <hr>
                            <form method="POST"  action="{{ url('admin/login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="username address" value="{{ old('username') }}" required>
                                   
                                </div>
                                <div class="form-group mb-4">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    
                                </div>
                                @error('username')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                                    <label class="custom-control-label" for="customCheck1">Save credentials.</label>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary mb-4">Signin</button>
                            </form>
                            <hr>
                            {{-- <p class="mb-2 text-muted">Forgot password? <a href="{{ route('password.request') }}" class="f-w-400">Reset</a></p> --}}
                            {{-- <p class="mb-0 text-muted">Don’t have an account? <a href="{{ route('register') }}" class="f-w-400">Signup</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ auth-signin ] end -->

    <!-- Required Js -->
    <script src="{{ asset('admin/assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pcoded.min.js') }}"></script>
</body>

</html>
