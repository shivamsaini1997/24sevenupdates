@push('title')
    <title>Admin Login</title>
@endpush
@include('admin.layouts.head')

<style>
    footer {
        display: none;
    }
</style>
<!-- login page start-->
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
                        <form class="theme-form" action="{{route('admin-login')}}" method="post">
                            @csrf
                            <h2 class="text-center">Sign in to account</h2>
                            <p class="text-center">Enter your email &amp; password to login</p>
                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input class="form-control" type="email" name="email"  placeholder="">
                                
                                    @error('email')
                                    <span class="text-danger mb-2">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password" >
                                    <div class="show-hide"><span class="show"></span></div>
                                    
                                        @error('password')
                                        <span class="text-danger mb-2">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    
                                </div>
                            </div>
                            <div class="form-group mb-0 checkbox-checked">
                                <a class="link" href="{{route('forgetpassword')}}">Forgot password?</a>
                                <div class="text-end mt-3">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.layouts.footer')
