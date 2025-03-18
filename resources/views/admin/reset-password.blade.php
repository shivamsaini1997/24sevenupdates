@push('title')
    <title>Reset Your Password</title>
@endpush
@include('admin.layouts.head')

<style>
    footer {
        display: none;
    }
</style>
    <div class="page-wrapper">
      <div class="container-fluid p-0">
        <div class="row">
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
                  <form class="theme-form" action="{{route('forgetpasswordsubmit')}}" method="post">
                    @csrf
                    <h2>Reset Your Password</h2>
                    <div class="form-group mt-3">
                      <label class="col-form-label">Email</label>
                      <div class="form-input position-relative">
                        <input class="form-control" type="email" name="email">
                        @error('email')
                        <span class="text-danger mb-2">
                            {{ $message }}
                        </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group mb-0 checkbox-checked">
                     
                      <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Send Password Reset Link </button>
                    </div>
                   
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('admin.layouts.footer')