
@extends('frontend.layouts.main')
@push('title')
    <title>{{$blog->blog_title}}</title>
@endpush

@push('meta')
<meta name="title" content="{{ $blog->blog_title }}">
<meta name="description" content="{{ $blog->meta_description }}">
<meta name="keywords" content="{{ $blog->meta_tags }}">
<meta property="og:title" content="{{ $blog->blog_title }}" />  
<meta property="og:description" content="{{ $blog->meta_description }}" />  
<meta property="og:image" content="{{asset($blog->post_thumbnail)}}" />  
@endpush
@section('main')

            <!-- breadcrumb-area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-content">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                        <li class="breadcrumb-item" aria-current="page"><a href="{{url(strtolower($blog->category))}}">{{$blog->category}}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{$blog->blog_title}}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-end -->

            <!-- blog-details-area -->
            <section class="blog-details-area pt-60 pb-60">
                <div class="container">
                    <div class="author-inner-wrap">
                        <div class="row justify-content-center">
                            <div class="col-70">
                                <div class="blog-details-wrap">
                                    <div class="blog-details-content">
                                        <div class="blog-details-content-top">
                                            <a href="{{url(strtolower($blog->category))}}" class="post-tag">{{$blog->category}}</a>
                                            <h1 class="title">{{$blog->blog_title}}</h1>
                                            <div class="bd-content-inner">
                                                <div class="blog-post-meta">
                                                    <ul class="list-wrap">
                                                        <li><i class="flaticon-user"></i>by<a href="#">Admin</a></li>
                                                        <li><i class="flaticon-calendar"></i>{{ $blog->created_at->format('d F, Y') }} </li>
                                                        {{-- <li><i class="flaticon-chat"></i><a href="javascript:void(0)">05 Comments</a></li> --}}
                                                        <li><i class="flaticon-history"></i>{{ $blog->created_at->diffForHumans() }}</li>
                                                    </ul>
                                                </div>
                                                <div class="blog-details-social">
                                                    <ul class="list-wrap">
                                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                        {{-- <li><a href="#"><i class="fab fa-instagram"></i></a></li> --}}
                                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blog-details-thumb">
                                            <img src="{{asset($blog->post_thumbnail)}}" alt="{{$blog->blog_title}}" title="{{$blog->blog_title}}">
                                        </div>
                                        <p class="first-info">{!!$blog->content!!}</p>
                                        
                                        <div class="blog-details-bottom">
                                            <div class="row align-items-center">
                                                
                                                <div class="col-lg-12">
                                                    <div class="post-share">
                                                        <h5 class="title">Share:</h5>
                                                        <ul class="list-wrap">
                                                            <!-- Facebook Share -->
                                                            <li>
                                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}&text={{ urlencode($blog->blog_title) }}&summary={{ urlencode(Str::limit(strip_tags($blog->content), 150)) }}" target="_blank">
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>
                                                            </li>
                                                            <!-- Twitter Share -->
                                                            <li>
                                                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}&text={{ urlencode($blog->blog_title) }}&summary={{ urlencode(Str::limit(strip_tags($blog->content), 150)) }}"  target="_blank">
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>
                                                            </li>
                                                            <!-- LinkedIn Share -->
                                                            <li>
                                                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(Request::fullUrl()) }}&title={{ urlencode($blog->blog_title) }}&summary={{ urlencode(Str::limit(strip_tags($blog->content), 150)) }}" target="_blank">
                                                                    <i class="fab fa-linkedin-in"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-30">
                                <div class="sidebar-wrap">
                                    <div class="sidebar-widget">
                                        <div class="sidebar-search">
                                            <form action="#">
                                                <input type="text" placeholder="Search . . .">
                                                <button type="submit"><i class="flaticon-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
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
                                                        <a href="{{ url(strtolower($item->category) . '/' . $item->slug) }}">
                                                            <img src="{{asset($item->post_thumbnail)}}" alt="{{$item->blog_title}}" title="{{$blog->blog_title}}"></a>
                                                    </div>
                                                    <div class="hot-post-content">
                                                        <a href="javascript:void()" class="post-tag">{{ $item->category }}</a>
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
            <!-- blog-details-area-end -->

        </main>
        <!-- main-area-end -->

      @endsection