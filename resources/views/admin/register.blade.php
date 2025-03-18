@extends('admin.layouts.main')
@push('title')
    <title>Register</title>
@endpush
@section('content')
    <div class="page-body">
        <section class="content-header">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <h2>Add Admin</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <!-- Removed duplicate form tag -->
            <form action="{{ route('store-admin') }}" method="post">
                @csrf
                <div class="card">

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="full_name" placeholder="Full name"
                                        value="{{ old('full_name') }}"> <!-- Added value attribute to retain old input -->
                                    <span class="text-danger mb-2">
                                        @error('full_name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Role</label>
                                    <select name="role_type" class="form-control">
                                        <option value="">Select</option>
                                        <option value="1">Admin</option>
                                    </select>
                                    <span class="text-danger mb-2">
                                        @error('role_type')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>

                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                        value="{{ old('email') }}"> <!-- Added value attribute to retain old input -->
                                    <span class="text-danger mb-2">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <span class="text-danger mb-2">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="password-confir"
                                        placeholder="Retype password">
                                    <span class="text-danger mb-2">
                                        @error('password-confir')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary w-25 btn-block">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            <h2 class="mt-5">Admin List</h2>
            <table class="table table-striped mt-1 table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    @php $counter = 1; @endphp

                    @foreach ($register as $user)
                        <tr>
                            <td><span class="increment">{{ $counter }}.</span></td>
                            <td>{{ $user ? $user->name : '' }}</td>
                            <td>{{ $user ? $user->email : '' }}</td>
                            <td>
                                @if ($user)
                                    @if ($user->type_role == 0)
                                        Super Admin
                                    @elseif ($user->type_role == 1)
                                        Admin
                                    @endif
                                @endif
                            </td>
                            <td class="delete">
                                <a href="{{ route('delete-register', ['id' => $user->id]) }}" class="open-detele-modal"
                                    type="button" data-bs-toggle="modal" data-bs-target="#tooltipmodal">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 13px;"
                                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#e74b2b"
                                            d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0L284.2 0c12.1 0 23.2 6.8 28.6 17.7L320 32l96 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 96C14.3 96 0 81.7 0 64S14.3 32 32 32l96 0 7.2-14.3zM32 128l384 0 0 320c0 35.3-28.7 64-64 64L96 512c-35.3 0-64-28.7-64-64l0-320zm96 64c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @php $counter++; @endphp
                    @endforeach

                </tbody>

                </tbody>
            </table>
        </section>
    </div>

    <div class="modal fade" id="tooltipmodal" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5">Confirm Delete</h3>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p class="mt-2"> Are you sure want to delete this Admin</p>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    <a href="" class="btn btn-primary delete-modal">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
