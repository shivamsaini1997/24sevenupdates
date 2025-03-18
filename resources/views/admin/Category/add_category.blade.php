@extends('admin.layouts.main')
@push('title')
    <title>{{$title}}</title>
@endpush
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <h2>{{$title}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body add-post">
                            <form action="{{ $url }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="mb-2" for="Category">Category:</label>
                                            <input class="form-control slug-create" id="Category" name="category" type="text" 
                                                value="{{ old('category', isset($categorys) ? $categorys->category : '') }}" placeholder="Category">
                                            @error('category')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="slug">Slug:</label>
                                            <input type="text" name="slug" class="form-control slug1" id="slug"
                                                value="{{ old('slug', isset($categorys) ? $categorys->slug : '') }}" placeholder="Slug">
                                            @error('slug')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="meta_title">Meta Title:</label>
                                            <input type="text" name="meta_title" id="meta_title" placeholder="Meta Title" class="form-control"
                                                maxlength="255" value="{{ old('meta_title', isset($categorys) ? $categorys->meta_title : '') }}">
                                            @error('meta_title')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="meta_description">Meta Description:</label>
                                            <input type="text" name="meta_description" id="meta_description" placeholder="Meta Description" 
                                                class="form-control" maxlength="255"
                                                value="{{ old('meta_description', isset($categorys) ? $categorys->meta_description : '') }}">
                                            @error('meta_description')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="meta_tags">Meta Tags:</label>
                                            <input type="text" name="meta_tags" id="meta_tags" placeholder="Meta Tags"maxlength="160" class="form-control" 
                                                value="{{ old('meta_tags', isset($categorys) ? $categorys->meta_tags : '') }}">
                                            @error('meta_tags')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <label for="category_thumbnail">Category Thumbnail:</label>
                                        <input type="file" class="form-control" name="category_thumbnail">
                                        <label class="custom-file-label" for="category_thumbnail">{{isset($categorys)? basename($categorys->category_thumbnail) : ''}}</label>

                                        @error('category_thumbnail')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="mb-3">
                                            @if (isset($categorys) && $categorys->category_thumbnail)
                                                <img src="{{ asset($categorys->category_thumbnail) }}" alt="Thumbnail Preview"
                                                    style="width: 80px; height: 80px; object-fit: contain;">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-showcase text-end blog-btn">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <button class="btn bg-light font-dark" type="reset">Discard</button>
                                </div>
                            </form>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
