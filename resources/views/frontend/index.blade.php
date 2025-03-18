@extends('frontend.layouts.main')
@push('title')
    <title>Home</title>
@endpush
@push('meta')
<meta name="title" content="24sevenupdates, Latest News, Sports, Entertainment, Health & Auto Trends, Crypto & Tech News.">
<meta name="keywords" content="24seven updates, 24 seven updates, latest news, 24sevenupdates, sports updates, national headlines, political analysis, entertainment buzz, health tips, automobile innovations, cricket live scores, Bollywood news, celebrity gossip, fitness trends, new car launches, government policies, breaking news India, electric vehicles, movie reviews, mental health awareness, wellness guides, live sports streaming, OTT platform releases, nutrition tips, vehicle comparisons, global news, lifestyle trends, technology updates, crypto news, blockchain updates, tech innovations, gadget news, artificial intelligence trends, trending updates, current events, breaking headlines, daily updates, in-depth analysis">
<meta name="description" content="Stay updated with 24sevenupdates, your ultimate source for breaking news, live sports updates, political analysis, entertainment buzz, health and wellness tips, the latest in automobiles, technology, and crypto. Discover in-depth articles, crypto market trends, blockchain updates, gadget news, cricket live scores, Bollywood news, fitness trends, and new car launches. Explore global news, government policies, and lifestyle trends—all in one place. Stay informed, inspired, and ahead of the curve with 24sevenupdates.">    
<meta property="og:title" content="24sevenupdates, Latest News, Sports, Crypto, Tech, Entertainment, Health & Auto Trends." />
<meta property="og:description" content="24seven updates, 24 seven updates, latest news, 24sevenupdates, sports updates, national headlines, political analysis, entertainment buzz, health tips, automobile innovations, cricket live scores, Bollywood news, celebrity gossip, fitness trends, new car launches, government policies, breaking news India, electric vehicles, movie reviews, mental health awareness, wellness guides, live sports streaming, OTT platform releases, nutrition tips, vehicle comparisons, global news, lifestyle trends, technology updates, trending updates, current events, breaking headlines, daily updates, in-depth analysis, crypto news, blockchain updates, tech innovations, gadget news, artificial intelligence trends" />
@endpush
@section('main')
    <!-- banner-post-area -->
    <section class="banner-post-area">
        <div class="container-fluid p-0">
            <div class="row g-0">
                @foreach ($blogs->take(3) as $item)
                    <div class="col-lg-4">
                        <div class="banner-post-item">
                            <div class="banner-post-thumb">
                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img src="{{ asset($item->post_thumbnail) }}"
                                        alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>
                            </div>
                            <div class="banner-post-content">
                                <a href="#" class="post-tag">{{ $item->category }}</a>
                                <h2 class="post-title"><a
                                        href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">{{ $item->blog_title }}</a>
                                </h2>
                                <div class="blog-post-meta white-blog-meta">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-user"></i>by <a href="#">Admin</a></li>
                                        <li><i class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}</li>
                                        <li><i class="flaticon-history"></i>{{ $item->created_at->diffForHumans() }}</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
    <!-- banner-post-area-end -->

    <!-- categories-area -->
    <section class="categories-area-two pt-70 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wrap-three mb-40">
                        <div class="section-title-three black-title">
                            <div class="title">Exciting Categories
                                <span class="section-title-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 40" fill="none"
                                        preserveAspectRatio="none">
                                        <path
                                            d="M10.1448 2.85061C10.6524 1.15867 12.2097 0 13.9761 0H241.624C244.303 0 246.225 2.58294 245.455 5.14939L235.855 37.1494C235.348 38.8413 233.79 40 232.024 40H4.37612C1.69667 40 -0.225117 37.4171 0.544817 34.8506L10.1448 2.85061Z"
                                            fill="currentcolor"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="section-title-line-three"></div>
                        </div>
                        <div class="view-all-btn view-all-btn-two">
                            <a href="{{route('category')}}" class="link-btn">View All
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                        <path
                                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="categories-item-wrap-two">
                <div class="row">
                    @foreach ($categorys as $item)
        
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="categories-item-two">
                                <div class="categories-img-two">
                                    <a href="{{ url($item->slug) }}">
                                        <img src="{{ asset($item->category_thumbnail) }}"
                                            alt="{{$item->category}}" title="{{$item->category}}"></a>
                                </div>
                                <div class="categories-content-two">
                                    <a href="{{ url($item->slug) }}" class="post-tag">{{ $item->category }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!-- categories-area-end -->

    <!-- Today’s Spacial  -->
    <section class="spotlight-post-area pt-70 pb-60">
        <div class="spotlight-post-inner-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-100">
                        <div class="spotlight-post-item-wrap">
                            <div class="section-title-wrap-three mb-10">
                                <div class="section-title-three">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 p-0">
                                                <div class="section-title-wrap-three mb-40">
                                                    <div class="section-title-three black-title">
                                                        <div class="title">Today’s Spacial
                                                            <span class="section-title-svg">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 40"
                                                                    fill="none" preserveAspectRatio="none">
                                                                    <path
                                                                        d="M10.1448 2.85061C10.6524 1.15867 12.2097 0 13.9761 0H241.624C244.303 0 246.225 2.58294 245.455 5.14939L235.855 37.1494C235.348 38.8413 233.79 40 232.024 40H4.37612C1.69667 40 -0.225117 37.4171 0.544817 34.8506L10.1448 2.85061Z"
                                                                        fill="currentcolor"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="section-title-line-three"></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($blogs->take(1) as $item)
                                    <div class="col-57">
                                        <div class="spotlight-post big-post">
                                            <div class="spotlight-post-thumb">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">
                                                    <img
                                                        src="{{ asset($item->post_thumbnail) }}"
                                                        alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>
                                            </div>
                                            <div class="spotlight-post-content">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}" class="post-tag-two">{{ $item->category }}</a>
                                                <h2 class="post-title bold-underline">
                                                    <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">{{ $item->blog_title }}</a>
                                                </h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-user"></i>by<a href="$">Admin</a></li>
                                                        <li><i class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                        </li>
                                                        <li><i class="flaticon-history"></i>{{ $item->created_at->diffForHumans() }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-43">
                                    @foreach ($blogs->skip(1)->take(3) as $item)
                                        <div class="spotlight-post small-post">
                                            <div class="spotlight-post-thumb">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img
                                                        src="{{ asset($item->post_thumbnail) }}"
                                                        alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>
                                            </div>
                                            <div class="spotlight-post-content">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}" class="post-tag-two">{{ $item->category }}</a>
                                                <h2 class="post-title"><a
                                                        href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">{{ $item->blog_title }}</a>
                                                </h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i
                                                                class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="spotlight-post-item-wrap mt-40">
                            <div class="section-title-wrap-three mb-10">
                                <div class="section-title-three">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 p-0">
                                                <div class="section-title-wrap-three mb-40">
                                                    @foreach ($categoryes->where('category', 'Crypto')->take(2) as $item)
                                                        <div class="section-title-three black-title">
                                                            <div class="title">{{ $item->category }}
                                                                <span class="section-title-svg">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 40"
                                                                        fill="none" preserveAspectRatio="none">
                                                                        <path
                                                                            d="M10.1448 2.85061C10.6524 1.15867 12.2097 0 13.9761 0H241.624C244.303 0 246.225 2.58294 245.455 5.14939L235.855 37.1494C235.348 38.8413 233.79 40 232.024 40H4.37612C1.69667 40 -0.225117 37.4171 0.544817 34.8506L10.1448 2.85061Z"
                                                                            fill="currentcolor"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="section-title-line-three"></div>
                                                        </div>
                                                        <div class="view-all-btn view-all-btn-two">
                                                            <a href="{{ url($item->slug) }}" class="link-btn">View All
                                                                <span class="svg-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"
                                                                        fill="none">
                                                                        <path
                                                                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                            fill="currentColor"></path>
                                                                        <path
                                                                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                @foreach ($blogs->where('category', 'Crypto')->take(6) as $item)
                                <div class="col-lg-6">
                                        <div class="spotlight-post small-post">
                                            <div class="spotlight-post-thumb">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img
                                                        src="{{ asset($item->post_thumbnail) }}"
                                                        alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>
                                            </div>
                                            <div class="spotlight-post-content">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}" class="post-tag-two">{{ $item->category }}</a>
                                                <h2 class="post-title"><a
                                                        href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">{{ $item->blog_title }}</a>
                                                </h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i
                                                                class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                            </div>
                        </div>
                        <div class="popular-post-item-wrap">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title-wrap-three mb-40">
                                        @foreach ($categoryes->where('category', 'Health')->take(2) as $item)
                                            <div class="section-title-three black-title">
                                                <div class="title">{{ $item->category }}
                                                    <span class="section-title-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 40"
                                                            fill="none" preserveAspectRatio="none">
                                                            <path
                                                                d="M10.1448 2.85061C10.6524 1.15867 12.2097 0 13.9761 0H241.624C244.303 0 246.225 2.58294 245.455 5.14939L235.855 37.1494C235.348 38.8413 233.79 40 232.024 40H4.37612C1.69667 40 -0.225117 37.4171 0.544817 34.8506L10.1448 2.85061Z"
                                                                fill="currentcolor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="section-title-line-three"></div>
                                            </div>
                                            <div class="view-all-btn view-all-btn-two">
                                                <a href="{{ url($item->slug) }}" class="link-btn">View All
                                                    <span class="svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"
                                                            fill="none">
                                                            <path
                                                                d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($blogs->where('category', 'Health')->take(2) as $item)
                                    <div class="col-lg-6">
                                        <div class="ta-overlay-post-two">
                                            <div class="overlay-post-thumb-two">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img
                                                        src="{{ asset($item->post_thumbnail) }}"
                                                        alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>
                                            </div>
                                            <div class="overlay-post-content-two">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"
                                                    class="post-tag post-tag-three">{{ $item->category }}</a>
                                                <h2 class="post-title">
                                                    <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">
                                                        {{ $item->blog_title }}
                                                    </a>
                                                </h2>
                                                <div class="blog-post-meta white-blog-meta">
                                                    <ul class="list-wrap">
                                                        <li><i
                                                                class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                        </li>
                                                        <li><i
                                                                class="flaticon-history"></i>{{ $item->created_at->diffForHumans() }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                                @foreach ($blogs->where('category', 'Health')->skip(2)->take(3) as $item)
                                    <div class="col-lg-4">
                                        <div class="ta-overlay-post-two">
                                            <div class="overlay-post-thumb-two">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img
                                                        src="{{ asset($item->post_thumbnail) }}"
                                                        alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>

                                            </div>
                                            <div class="overlay-post-content-two">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"
                                                    class="post-tag post-tag-three">{{ $item->category }}</a>
                                                <h2 class="post-title"><a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">
                                                        {{ $item->blog_title }}</a></h2>
                                                <div class="blog-post-meta white-blog-meta">
                                                    <ul class="list-wrap">
                                                        <li><i
                                                                class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="spotlight-post-item-wrap mt-40">
                            <div class="section-title-wrap-three mb-10">
                                <div class="section-title-three">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 p-0">
                                                <div class="section-title-wrap-three mb-40">
                                                    @foreach ($categoryes->where('category', 'Politics')->take(2) as $item)
                                                        <div class="section-title-three black-title">
                                                            <div class="title">{{ $item->category }}
                                                                <span class="section-title-svg">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 40"
                                                                        fill="none" preserveAspectRatio="none">
                                                                        <path
                                                                            d="M10.1448 2.85061C10.6524 1.15867 12.2097 0 13.9761 0H241.624C244.303 0 246.225 2.58294 245.455 5.14939L235.855 37.1494C235.348 38.8413 233.79 40 232.024 40H4.37612C1.69667 40 -0.225117 37.4171 0.544817 34.8506L10.1448 2.85061Z"
                                                                            fill="currentcolor"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="section-title-line-three"></div>
                                                        </div>
                                                        <div class="view-all-btn view-all-btn-two">
                                                            <a href="{{ url($item->slug) }}" class="link-btn">View All
                                                                <span class="svg-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"
                                                                        fill="none">
                                                                        <path
                                                                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                            fill="currentColor"></path>
                                                                        <path
                                                                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                @foreach ($blogs->where('category', 'Politics')->take(6) as $item)
                                <div class="col-lg-6">
                                        <div class="spotlight-post small-post">
                                            <div class="spotlight-post-thumb">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img
                                                        src="{{ asset($item->post_thumbnail) }}"
                                                        alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>
                                            </div>
                                            <div class="spotlight-post-content">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}" class="post-tag-two">{{ $item->category }}</a>
                                                <h2 class="post-title"><a
                                                        href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">{{ $item->blog_title }}</a>
                                                </h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i
                                                                class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Today’s Spacial  -->

    <!-- spotlight-post-area -->
    <section class="spotlight-post-area pt-10 pb-60 video-post-area video-post-bg"
        data-background="{{ asset('frontend/assets/img/bg/video_post_bg.jpg') }}">
        <div class="spotlight-post-inner-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="section-title-wrap-three mb-40">
                            @foreach ($categoryes->where('category', 'National')->take(2) as $item)
                                <div class="section-title-three black-title">
                                    <div class="title">{{ $item->category }}
                                        <span class="section-title-svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 40" fill="none"
                                                preserveAspectRatio="none">
                                                <path
                                                    d="M10.1448 2.85061C10.6524 1.15867 12.2097 0 13.9761 0H241.624C244.303 0 246.225 2.58294 245.455 5.14939L235.855 37.1494C235.348 38.8413 233.79 40 232.024 40H4.37612C1.69667 40 -0.225117 37.4171 0.544817 34.8506L10.1448 2.85061Z"
                                                    fill="currentcolor"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="section-title-line-three"></div>
                                </div>
                                <div class="view-all-btn view-all-btn-two">
                                    <a href="{{ url($item->slug) }}" class="link-btn">View All
                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                                <path
                                                    d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="spotlight-post-item-wrap">
                    <div class="row">
                        <div class="col-43">
                            @foreach ($blogs->where('category', 'National')->skip(1)->take(3) as $item)
                                <div class="spotlight-post small-post">
                                    <div class="spotlight-post-thumb">
                                        <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img
                                                src="{{ asset($item->post_thumbnail) }}"
                                                alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>
                                    </div>
                                    <div class="spotlight-post-content">
                                        <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}" class="post-tag post-tag-three">{{ $item->category }}</a>
                                        <h2 class="post-title bold-underline"><a
                                                href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">{{ $item->blog_title }}</a>
                                        </h2>
                                        <div class="blog-post-meta">
                                            <ul class="list-wrap">
                                                <li><i
                                                        class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @foreach ($blogs->where('category', 'National')->take(1) as $item)
                            <div class="col-57">
                                <div class="spotlight-post big-post">
                                    <div class="spotlight-post-thumb">
                                        <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img
                                                src="{{ asset($item->post_thumbnail) }}"
                                                alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>
                                    </div>
                                    <div class="spotlight-post-content">
                                        <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}" class="post-tag post-tag-three">{{ $item->category }}</a>
                                        <h2 class="post-title bold-underline"><a
                                                href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">{{ $item->blog_title }}</a>
                                        </h2>
                                        <div class="blog-post-meta">
                                            <ul class="list-wrap">
                                                <li><i class="flaticon-user"></i>by<a href="$">Admin</a></li>
                                                <li><i
                                                        class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                </li>
                                                <li><i
                                                        class="flaticon-history"></i>{{ $item->created_at->diffForHumans() }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- spotlight-post-area-end -->

    <section class="spotlight-post-area pt-70 pb-60">
        <div class="spotlight-post-inner-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-100">
                        <div class="spotlight-post-item-wrap">
                            <div class="section-title-wrap-three mb-10">
                                <div class="section-title-three">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="section-title-wrap-three mb-40">
                                                    @foreach ($categoryes->where('category', 'Automobile')->take(2) as $item)
                                                        <div class="section-title-three black-title">
                                                            <div class="title">{{ $item->category }}
                                                                <span class="section-title-svg">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 40"
                                                                        fill="none" preserveAspectRatio="none">
                                                                        <path
                                                                            d="M10.1448 2.85061C10.6524 1.15867 12.2097 0 13.9761 0H241.624C244.303 0 246.225 2.58294 245.455 5.14939L235.855 37.1494C235.348 38.8413 233.79 40 232.024 40H4.37612C1.69667 40 -0.225117 37.4171 0.544817 34.8506L10.1448 2.85061Z"
                                                                            fill="currentcolor"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="section-title-line-three"></div>
                                                        </div>
                                                        <div class="view-all-btn view-all-btn-two">
                                                            <a href="{{ url($item->slug) }}" class="link-btn">View All
                                                                <span class="svg-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"
                                                                        fill="none">
                                                                        <path
                                                                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                            fill="currentColor"></path>
                                                                        <path
                                                                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($blogs->where('category', 'Automobile')->take(1) as $item)
                                    <div class="col-57">
                                        <div class="spotlight-post big-post">
                                            <div class="spotlight-post-thumb">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img
                                                        src="{{ asset($item->post_thumbnail) }}"
                                                        alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>
                                            </div>
                                            <div class="spotlight-post-content">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}" class="post-tag-two">{{ $item->category }}</a>
                                                <h2 class="post-title bold-underline"><a
                                                        href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">{{ $item->blog_title }}</a>
                                                </h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-user"></i>by<a href="$">Admin</a></li>
                                                        <li><i
                                                                class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                        </li>
                                                        <li><i
                                                                class="flaticon-history"></i>{{ $item->created_at->diffForHumans() }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-43">
                                    @foreach ($blogs->where('category', 'Automobile')->skip(1)->take(3) as $item)
                                        <div class="spotlight-post small-post">
                                            <div class="spotlight-post-thumb">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img
                                                        src="{{ asset($item->post_thumbnail) }}"
                                                        alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>
                                            </div>
                                            <div class="spotlight-post-content">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}" class="post-tag-two">{{ $item->category }}</a>
                                                <h2 class="post-title"><a
                                                        href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">{{ $item->blog_title }}</a>
                                                </h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i
                                                                class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="popular-post-item-wrap">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title-wrap-three mb-40">
                                        @foreach ($categoryes->where('category', 'Sports')->take(2) as $item)
                                            <div class="section-title-three black-title">
                                                <div class="title">{{ $item->category }}
                                                    <span class="section-title-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 40"
                                                            fill="none" preserveAspectRatio="none">
                                                            <path
                                                                d="M10.1448 2.85061C10.6524 1.15867 12.2097 0 13.9761 0H241.624C244.303 0 246.225 2.58294 245.455 5.14939L235.855 37.1494C235.348 38.8413 233.79 40 232.024 40H4.37612C1.69667 40 -0.225117 37.4171 0.544817 34.8506L10.1448 2.85061Z"
                                                                fill="currentcolor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="section-title-line-three"></div>
                                            </div>
                                            <div class="view-all-btn view-all-btn-two">
                                                <a href="{{ url($item->slug) }}" class="link-btn">View All
                                                    <span class="svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"
                                                            fill="none">
                                                            <path
                                                                d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($blogs->where('category', 'Sports')->take(2) as $item)
                                    <div class="col-lg-6">
                                        <div class="ta-overlay-post-two">
                                            <div class="overlay-post-thumb-two">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img
                                                        src="{{ asset($item->post_thumbnail) }}"
                                                        alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>
                                            </div>
                                            <div class="overlay-post-content-two">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"
                                                    class="post-tag post-tag-three">{{ $item->category }}</a>
                                                <h2 class="post-title">
                                                    <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">
                                                        {{ $item->blog_title }}
                                                    </a>
                                                </h2>
                                                <div class="blog-post-meta white-blog-meta">
                                                    <ul class="list-wrap">
                                                        <li><i
                                                                class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                        </li>
                                                        <li><i
                                                                class="flaticon-history"></i>{{ $item->created_at->diffForHumans() }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                                @foreach ($blogs->where('category', 'Sports')->skip(2)->take(3) as $item)
                                    <div class="col-lg-4">
                                        <div class="ta-overlay-post-two">
                                            <div class="overlay-post-thumb-two">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img
                                                        src="{{ asset($item->post_thumbnail) }}"
                                                        alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>

                                            </div>
                                            <div class="overlay-post-content-two">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"
                                                    class="post-tag post-tag-three">{{ $item->category }}</a>
                                                <h2 class="post-title"><a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">
                                                        {{ $item->blog_title }}</a></h2>
                                                <div class="blog-post-meta white-blog-meta">
                                                    <ul class="list-wrap">
                                                        <li><i
                                                                class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            
                            
                        </div>
                        <div class="spotlight-post-item-wrap">
                            <div class="section-title-wrap-three mt-50 mb-10">
                                <div class="section-title-three">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="section-title-wrap-three mb-40">
                                                    @foreach ($categoryes->where('category', 'Entertainment')->take(2) as $item)
                                                        <div class="section-title-three black-title">
                                                            <div class="title">{{ $item->category }}
                                                                <span class="section-title-svg">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 40"
                                                                        fill="none" preserveAspectRatio="none">
                                                                        <path
                                                                            d="M10.1448 2.85061C10.6524 1.15867 12.2097 0 13.9761 0H241.624C244.303 0 246.225 2.58294 245.455 5.14939L235.855 37.1494C235.348 38.8413 233.79 40 232.024 40H4.37612C1.69667 40 -0.225117 37.4171 0.544817 34.8506L10.1448 2.85061Z"
                                                                            fill="currentcolor"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="section-title-line-three"></div>
                                                        </div>
                                                        <div class="view-all-btn view-all-btn-two">
                                                            <a href="{{ url($item->slug) }}" class="link-btn">View All
                                                                <span class="svg-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"
                                                                        fill="none">
                                                                        <path
                                                                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                            fill="currentColor"></path>
                                                                        <path
                                                                            d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-43">
                                    @foreach ($blogs->where('category', 'Entertainment')->skip(1)->take(3) as $item)
                                        <div class="spotlight-post small-post">
                                            <div class="spotlight-post-thumb">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img
                                                        src="{{ asset($item->post_thumbnail) }}"
                                                        alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>
                                            </div>
                                            <div class="spotlight-post-content">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}" class="post-tag-two">{{ $item->category }}</a>
                                                <h2 class="post-title"><a
                                                        href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">{{ $item->blog_title }}</a>
                                                </h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i
                                                                class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                @foreach ($blogs->where('category', 'Entertainment')->take(1) as $item)
                                    <div class="col-57">
                                        <div class="spotlight-post big-post">
                                            <div class="spotlight-post-thumb">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img
                                                        src="{{ asset($item->post_thumbnail) }}"
                                                        alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"> </a>
                                            </div>
                                            <div class="spotlight-post-content">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}" class="post-tag-two">{{ $item->category }}</a>
                                                <h2 class="post-title bold-underline"><a
                                                        href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">{{ $item->blog_title }}</a>
                                                </h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-user"></i>by<a href="$">Admin</a></li>
                                                        <li><i
                                                                class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                        </li>
                                                        <li><i
                                                                class="flaticon-history"></i>{{ $item->created_at->diffForHumans() }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="popular-post-item-wrap">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title-wrap-three mb-40">
                                        @foreach ($categoryes->where('category', 'Tech')->take(2) as $item)
                                            <div class="section-title-three black-title">
                                                <div class="title">{{ $item->category }}
                                                    <span class="section-title-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 40"
                                                            fill="none" preserveAspectRatio="none">
                                                            <path
                                                                d="M10.1448 2.85061C10.6524 1.15867 12.2097 0 13.9761 0H241.624C244.303 0 246.225 2.58294 245.455 5.14939L235.855 37.1494C235.348 38.8413 233.79 40 232.024 40H4.37612C1.69667 40 -0.225117 37.4171 0.544817 34.8506L10.1448 2.85061Z"
                                                                fill="currentcolor"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="section-title-line-three"></div>
                                            </div>
                                            <div class="view-all-btn view-all-btn-two">
                                                <a href="{{ url($item->slug) }}" class="link-btn">View All
                                                    <span class="svg-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"
                                                            fill="none">
                                                            <path
                                                                d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @foreach ($blogs->where('category', 'Tech')->take(2) as $item)
                                    <div class="col-lg-6">
                                        <div class="ta-overlay-post-two">
                                            <div class="overlay-post-thumb-two">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img
                                                        src="{{ asset($item->post_thumbnail) }}"
                                                        alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>
                                            </div>
                                            <div class="overlay-post-content-two">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}" class="post-tag post-tag-three">{{ $item->category }}</a>
                                                <h2 class="post-title">
                                                    <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">
                                                        {{ $item->blog_title }}
                                                    </a>
                                                </h2>
                                                <div class="blog-post-meta white-blog-meta">
                                                    <ul class="list-wrap">
                                                        <li><i
                                                                class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                        </li>
                                                        <li><i
                                                                class="flaticon-history"></i>{{ $item->created_at->diffForHumans() }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                                @foreach ($blogs->where('category', 'Tech')->skip(2)->take(3) as $item)
                                    <div class="col-lg-4">
                                        <div class="ta-overlay-post-two">
                                            <div class="overlay-post-thumb-two">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img
                                                        src="{{ asset($item->post_thumbnail) }}"
                                                        alt="{{ $item->blog_title }}" title="{{ $item->blog_title }}"></a>

                                            </div>
                                            <div class="overlay-post-content-two">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"
                                                    class="post-tag post-tag-three">{{ $item->category }}</a>
                                                <h2 class="post-title"><a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">
                                                        {{ $item->blog_title }}</a></h2>
                                                <div class="blog-post-meta white-blog-meta">
                                                    <ul class="list-wrap">
                                                        <li><i
                                                                class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                            
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
