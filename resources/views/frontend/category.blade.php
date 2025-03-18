@extends('frontend.layouts.main')
@push('title')
    <title>Categories</title>
@endpush
@push('meta')
    <meta name="title" content="Categories">
        <meta name="keywords" content="sports news, national news, politics updates, entertainment news, health tips, automobile trends, cricket news, Bollywood updates, fitness advice, car launches, government policies, breaking news India, electric vehicles, celebrity gossip, medical breakthroughs, Indian politics, movie reviews, mental health, wellness tips, live match updates, OTT platforms, nutrition updates, vehicle reviews">
        <meta name="description" content="Stay informed with the latest updates across all categories, including sports, national, politics, entertainment, health, and automobiles. Explore breaking news, in-depth analysis, wellness tips, celebrity gossip, government policies, car launches, and much more. This unified meta tag and description encompass all the categories, providing comprehensive coverage for a diverse audience.">
@endpush

@section('main')

    <!-- categories-area -->
    <section class="categories-area-two pt-70 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-wrap-three mb-40">
                        <div class="section-title-three black-title">
                            <h6 class="title">Categories
                                <span class="section-title-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 40" fill="none"
                                        preserveAspectRatio="none">
                                        <path
                                            d="M10.1448 2.85061C10.6524 1.15867 12.2097 0 13.9761 0H241.624C244.303 0 246.225 2.58294 245.455 5.14939L235.855 37.1494C235.348 38.8413 233.79 40 232.024 40H4.37612C1.69667 40 -0.225117 37.4171 0.544817 34.8506L10.1448 2.85061Z"
                                            fill="currentcolor"></path>
                                    </svg>
                                </span>
                            </h6>
                            <div class="section-title-line-three"></div>
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
                                    <a href="{{ url($item->slug) }}"><img src="{{ asset($item->category_thumbnail) }}"
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
@endsection