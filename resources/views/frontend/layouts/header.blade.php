

        <!-- preloader -->
        <div id="preloader">
            <div class="loader-inner">
                <div id="loader">
                    <h2 id="bg-loader">24Sevenupdates<span>.</span></h2>
                    <h2 id="fg-loader">24Sevenupdates<span>.</span></h2>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- Dark/Light-toggle -->
        <div class="darkmode-trigger">
            <label class="modeSwitch">
                <input type="checkbox">
                <span class="icon"></span>
            </label>
        </div>
        <!-- Dark/Light-toggle-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header class="header-style-two">
            <div id="header-fixed-height"></div>
            <div class="header-logo-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="hl-left-side">
                                <div class="logo">
                                    <a href="{{url('/')}}"><img src="{{asset('frontend/assets/img/logo/24Sevenupdates.png')}}" alt="24sevenupdates" title="24sevenupdates"></a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <span style="color: #fff;">{{date('D, M j, Y')}}</span>
                        </div>
                        <div class="col-lg-8">
                            <div class="hl-right-side">
                                <div class="header-search-wrap">
                                    <form action="{{route('blog-search')}}">
                                        <input type="text" name="search" placeholder="Search here . . .">
                                        <button type="submit"><i class="flaticon-search"></i></button>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="menu-area menu-style-two">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="menu-wrap">
                                <div class="row align-items-center">
                                    <div class="col-lg-12 col-md-4">
                                        <div class="logo d-none">
                                            <a href="{{url('/')}}"><img src="{{asset('frontend/assets/img/logo/24Sevenupdates.png')}}" alt=""></a>
                                        </div>
                                        <div class="navbar-wrap main-menu d-none d-lg-flex">
                                            <ul class="navigation">
                                                <li class="{{ request()->is('/') ? 'active' : '' }}">
                                                    <a href="{{ url('/') }}">Home</a>
                                                </li>
                                                @foreach ($categorysmenulink as $item)
                                                    <li class="{{ request()->is($item->slug) ? 'active' : '' }}">
                                                        <a href="{{ url($item->slug) }}">{{ $item->category }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                        <br><br>
                                    <div class="nav-logo d-none">
                                        <a href="{{url('/')}}"><img src="{{asset('frontend/assets/img/logo/24Sevenupdates.png')}}" alt="Logo"></a>
                                    </div>
                                    <div class="mobile-search">
                                        <form action="{{route('blog-search')}}">
                                            <input type="text" name="search" placeholder="Search here . . .">
                                            <button type="submit"><i class="flaticon-search"></i></button>
                                        </form>
                                    </div>
                                    <div class="menu-outer">
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->
        <!-- main-area -->
        <main class="fix">