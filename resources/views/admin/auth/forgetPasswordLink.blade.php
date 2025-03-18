@extends('admin.layouts.head')
@push('title')
    <title>Reset Password</title>
@endpush

<body class="hold-transition login-page">
    <style>
        footer {
            display: none !important;
        }
    </style>

<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card login-dark">
                <div>
                    <div>
                        <a class="logo" href="{{ route('admin-login') }}">
                            <img class="img-fluid for-light m-auto" src="{{ asset('backend/assets/images/logo/24Sevenupdates.png') }}" style="width: 130px;" alt="24Sevenupdates">
                            <img class="img-fluid for-dark" src="{{ asset('backend/assets/images/logo/24Sevenupdates.png') }}" style="width: 130px;" alt="24Sevenupdates">
                        </a>
                    </div>
                    <div class="login-main">
                        <form action="{{route('reset.password.post')}}" method="post">
                            @csrf
                            <h2 class="mb-3">Reset Your Password</h2>
                            <input type="hidden" name="email" value="{{$email}}">
                            <div class="input-group mb-3">
                                <label class="col-form-label">Password</label>
                                <div class="input-group">

                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"id="password"  placeholder="Password"
                                        autofocus>
                                    
                                </div>
                                <span class="text-danger mb-2">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="input-group mb-3">
                                <label class="col-form-label">Password Confirm</label> 
                                <div class="input-group">
                                    <input type="password" id="password-confirm" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password"
                                        autofocus>
                                   
                                </div>
                                <span class="text-danger mb-2">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
        
                            <div class="form-group row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block"> Reset Password</button>
                                </div>
                            </div>
        
        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>


@include('admin.layouts.footer')
