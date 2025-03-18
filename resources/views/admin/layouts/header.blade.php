@include('admin.layouts.head')
<div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>

<div class="loader-wrapper">
    <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
</div>
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <header class="page-header row">
        <div class="logo-wrapper d-flex align-items-center col-auto"><a href="{{ route('dashboard') }}">
                <img class="light-logo img-fluid" src="{{ asset('backend/assets/images/logo/24Sevenupdates.png') }}"
                    style="width: 55%;" alt="logo" />
                <img class="dark-logo img-fluid" src="{{ asset('backend/assets/images/logo/24Sevenupdates.png') }}"
                    style="width: 55%;" alt="logo" /></a>
            <a class="close-btn toggle-sidebar" href="javascript:void(0)">
                <img class="img-fluid" src="{{ asset('backend/assets/images/bars-solid.svg') }}" style="width: 55%;"
                    alt="logo" /></a>
            </a>
        </div>
        <div class="page-main-header col">
            <div class="header-left">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Admiro .." name="q" title=""
                                    autofocus="autofocus" />
                                <div class="spinner-border Typeahead-spinner" role="status"><span
                                        class="sr-only">Loading...</span></div>
                                <i class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                {{-- <div class="form-group-header d-lg-block d-none">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative d-flex align-items-center">
                            <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100" type="text"
                                placeholder="Type to Search..." name="q" title="" />
                            <svg class="search-bg iconly-Search icli" style="width: 15px;"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path fill="#292929"
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="nav-right">
                <ul class="header-right">

                    <li class="search d-lg-none d-flex"> <a href="javascript:void(0)">
                            <svg>
                                <use href="{{ asset('backend/assets/svg/iconly-sprite.svg#Search') }}"></use>
                            </svg></a></li>
                    <li> <a class="dark-mode" href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" id="moondark" viewBox="0 0 18 18">
                                <path
                                    d="M1.52251 9.31497C1.79251 13.1775 5.07001 16.32 8.99251 16.4925C11.76 16.6125 14.235 15.3225 15.72 13.29C16.335 12.4575 16.005 11.9025 14.9775 12.09C14.475 12.18 13.9575 12.2175 13.4175 12.195C9.75001 12.045 6.75001 8.97747 6.73501 5.35497C6.72751 4.37997 6.93001 3.45747 7.29751 2.61747C7.70251 1.68747 7.21501 1.24497 6.27751 1.64247C3.30751 2.89497 1.27501 5.88747 1.52251 9.31497Z"
                                    stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></a></li>

                    <li class="profile-nav custom-dropdown">
                        <div class="user-wrap">
                            <div class="user-content">
                                <h6>{{ $user->name }}</h6>
                                <p class="mb-0">
                                    @if ($user->type_role == 0)
                                        Super Admin
                                    @endif
                                    @if ($user->type_role == 1)
                                        Admin
                                    @endif
                                    <img class="icon-custom left-side"
                                        src="{{ asset('backend/assets/images/chevron-down-solid.svg') }}">
                                </p>
                            </div>
                        </div>
                        <div class="custom-menu overflow-hidden">
                            <ul class="profile-body">

                                <li class="d-flex">

                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        id="Login" viewBox="0 0 24 24" version="1.1">
                                        <g fill="none" fill-rule="evenodd" clip-rule="evenodd" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M15.8125 12.0217H3.77148"></path>
                                            <path d="M12.8848 9.10571L15.8128 12.0217L12.8848 14.9377"></path>
                                            <path opacity="0.5"
                                                d="M8.50439 7.38897V6.45597C8.50439 4.42097 10.1534 2.77197 12.1894 2.77197H17.0734C19.1034 2.77197 20.7484 4.41697 20.7484 6.44697V17.587C20.7484 19.622 19.0984 21.272 17.0634 21.272H12.1784C10.1494 21.272 8.50439 19.626 8.50439 17.597V16.655">
                                            </path>
                                        </g>
                                    </svg>

                                    <a class="ms-2" href="{{ route('logout') }}">Log Out</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- Page Body Start-->
