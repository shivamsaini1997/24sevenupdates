@extends('admin.layouts.main')
@push('title')
    <title>Dashboard</title>
@endpush
<style>
    .card-body ul {
    list-style: none;
}
</style>
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <h2> Dashboard</h2>
                        <p class="mb-0 text-title-gray">Welcome back! Let’s start from where you left.</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dashboard">
            <div class="row">

                <div class="col-xxl-12 col-xl-12 proorder-xxl-7 col-lg-12 box-col-12">
                    <div class="card job-card">
                        <div class="card-header pb-0 card-no-border">
                            <div class="header-top">
                                <h3>Today</h3>
                                <div>
                                    <p>
                                        {{ date('l j,') }} <span>{{ date('M Y') }}</span>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <ul class="d-flex align-center justify-content-start gap-3">
                                <li>
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0 bg-light-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="job-bag" viewBox="0 0 20 20"
                                                fill="none">
                                                <path opacity="0.4"
                                                    d="M0.804092 13.477C0.804092 13.477 0.946092 15.215 0.979092 15.763C1.02309 16.498 1.30709 17.319 1.78109 17.889C2.45009 18.697 3.23809 18.982 4.29009 18.984C5.52709 18.986 14.5221 18.986 15.7591 18.984C16.8111 18.982 17.5991 18.697 18.2681 17.889C18.7421 17.319 19.0261 16.498 19.0711 15.763C19.1031 15.215 19.2451 13.477 19.2451 13.477"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path
                                                    d="M6.49599 3.32949V2.95849C6.49599 1.73849 7.48399 0.750488 8.70399 0.750488H11.286C12.505 0.750488 13.494 1.73849 13.494 2.95849L13.495 3.32949"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M9.995 14.6782V13.3842" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0.749893 6.38909V9.85609C2.66789 11.1211 4.96589 12.0071 7.48789 12.3581C7.78989 11.2571 8.78289 10.4501 9.98989 10.4501C11.1779 10.4501 12.1909 11.2571 12.4729 12.3681C15.0049 12.0171 17.3119 11.1311 19.2399 9.85609V6.38909C19.2399 4.69509 17.8769 3.33109 16.1829 3.33109H3.81689C2.12289 3.33109 0.749893 4.69509 0.749893 6.38909Z"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3>{{$blogs->count()}}</h3>
                                            <p>Total Blogs </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0 bg-light-secondary">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="employees" viewBox="0 0 22 18"
                                                fill="none">
                                                <path opacity="0.4"
                                                    d="M16.8877 7.8967C18.2827 7.7007 19.3567 6.5047 19.3597 5.0557C19.3597 3.6277 18.3187 2.4437 16.9537 2.2197"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path
                                                    d="M18.7285 11.2503C20.0795 11.4523 21.0225 11.9253 21.0225 12.9003C21.0225 13.5713 20.5785 14.0073 19.8605 14.2813"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10.8867 11.6638C7.6727 11.6638 4.9277 12.1508 4.9277 14.0958C4.9277 16.0398 7.6557 16.5408 10.8867 16.5408C14.1007 16.5408 16.8447 16.0588 16.8447 14.1128C16.8447 12.1668 14.1177 11.6638 10.8867 11.6638Z"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10.8867 8.88791C12.9957 8.88791 14.7057 7.17891 14.7057 5.06891C14.7057 2.95991 12.9957 1.24991 10.8867 1.24991C8.77772 1.24991 7.06772 2.95991 7.06772 5.06891C7.05972 7.17091 8.75672 8.88091 10.8587 8.88791H10.8867Z"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path opacity="0.4"
                                                    d="M4.88481 7.8967C3.48881 7.7007 2.41581 6.5047 2.41281 5.0557C2.41281 3.6277 3.45381 2.4437 4.81881 2.2197"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path
                                                    d="M3.04391 11.2503C1.69291 11.4523 0.749908 11.9253 0.749908 12.9003C0.749908 13.5713 1.19391 14.0073 1.91191 14.2813"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3>{{$categorys->count()}}</h3>
                                            <p>Categorys</p>
                                        </div>
                                    </div>
                                </li>
                                {{-- <li>
                                    <div class="d-flex gap-2">
                                        <div class="flex-shrink-0 bg-light-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" id="hours-work" viewBox="0 0 20 20"
                                                fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.3347 0.750214H5.6657C2.6447 0.750214 0.750702 2.88921 0.750702 5.91621V14.0842C0.750702 17.1112 2.6347 19.2502 5.6657 19.2502H14.3337C17.3647 19.2502 19.2507 17.1112 19.2507 14.0842V5.91621C19.2507 2.88921 17.3647 0.750214 14.3347 0.750214Z"
                                                    stroke="#E6B54D" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path opacity="0.4" d="M13.3913 12.0177L10.0003 9.99473V5.63373"
                                                    stroke="#E6B54D" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h3>40</h3>
                                            <p>Hours of work</p>
                                        </div>
                                    </div>
                                </li> --}}
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
