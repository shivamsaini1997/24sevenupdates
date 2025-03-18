
@extends('frontend.layouts.main')
@push('title')
<title>{{$categoryes->category}}</title>

@endpush
@push('meta')
<meta name="title" content="{{ $categoryes->blog_title }}">
<meta name="keywords" content="{{ $categoryes->meta_tags }}">
        <meta name="description" content="{{ $categoryes->meta_description }}">
@endpush
@section('main')
{{-- @php
    dd($categoryes->category);
@endphp --}}
            <!-- breadcrumb-area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$categoryes->category}}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-end -->

            <!-- blog-area -->
            <section class="blog-area pt-60 pb-60">
                <div class="container">
                    <div class="author-inner-wrap">
                        <div class="row justify-content-center">
                            <div class="col-70">
                                <div class="weekly-post-item-wrap">
                                    @foreach ($blogs as $item)
                                        <div class="weekly-post-item weekly-post-four">
                                            <div class="weekly-post-thumb">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img src="{{asset($item->post_thumbnail)}}" alt="{{$item->blog_title}}" title="{{$item->blog_title}}"></a>
                                            </div>
                                            <div class="weekly-post-content">
                                                <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}" class="post-tag">{{ $item->category }}</a>
                                                <h2 class="post-title"><a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}" class="content-two-line">{{$item->blog_title}}</a></h2>
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }} </li>
                                                        <li><i class="flaticon-history"></i>{{ $item->created_at->diffForHumans() }} </li>
                                                    </ul>
                                                </div>
                                                <div class="content-two-line">{!!$item->content!!}</div>
                                                <div class="view-all-btn">
                                                    <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}" class="link-btn">Read More
                                                        <span class="svg-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10" fill="none">
                                                                <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                                                <path d="M1.07692 10L0 8.92308L7.38462 1.53846H0.769231V0H10V9.23077H8.46154V2.61538L1.07692 10Z" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                  
                   
                                </div>
                                <div class="pagination-wrap mt-60">
                                    <nav aria-label="Page navigation example">
                                        <div class="blog__pagination px-2">
                                            {{ $blogs->links('pagination::bootstrap-4') }}
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-30">
                                <div class="sidebar-wrap">
                                    
                                    <div class="sidebar-widget sidebar-widget-two">
                                        <div class="widget-title mb-30">
                                            <h6 class="title">Hot Categories</h6>
                                            <div class="section-title-line"></div>
                                        </div>
                                        <div class="sidebar-categories">
                                            <ul class="list-wrap">
                                                @foreach ($allcategoryes as $item)
                                                <li>
                                                    <a href="{{url(strtolower($item->category))}}" class="hot-cat">
                                                        <img src="{{asset($item->category_thumbnail)}}" alt="{{$item->category}}">
                                                        <span class="redirect-hot">
                                                            <span class="post-tag post-tag-three">{{$item->category}}</span>
                                                            <span class="right-arrow">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                                                    <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                                    <path d="M1.72308 16L0 14.2769L11.8154 2.46154H1.23077V0H16V14.7692H13.5385V4.18462L1.72308 16Z" fill="currentcolor"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                                @endforeach
                                                
                                    
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="sidebar-widget sidebar-widget-two">
                                        <div class="widget-title mb-30">
                                            <h6 class="title">Recent News</h6>
                                            <div class="section-title-line"></div>
                                        </div>
                                        <div class="hot-post-wrap">
                                            @foreach ($allblogs->take(5) as $item)
                                                <div class="hot-post-item">
                                                    <div class="hot-post-thumb">
                                                        <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}"><img src="{{asset($item->post_thumbnail)}}" alt="{{$item->blog_title}}" title="{{$item->blog_title}}"></a>
                                                    </div>
                                                    <div class="hot-post-content">
                                                        <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}" class="post-tag">{{ $item->category }}</a>
                                                        <h4 class="post-title"><a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">{{$item->blog_title}}</a></h4>
                                                        <div class="blog-post-meta">
                                                            <ul class="list-wrap">
                                                                <li><i class="flaticon-calendar"></i>{{ $item->created_at->format('d F, Y') }} </li>
                                                                <li><i class="flaticon-history"></i>{{ $item->created_at->diffForHumans() }} </li>
                                                            </ul>
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
                </div>
            </section>
   @endsection
