@extends('admin.layouts.main')
@push('title')
    <title>{{ $title }}</title>
@endpush
@section('content')
    <style>
        .choices {
            margin: 0;
        }

        .note-editor {}
    </style>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <h2>{{ $title }}</h2>
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
                            <form action="{{ $url }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="blog_title">Blog Title:</label>
                                                <input type="text" name="blog_title" class="form-control slug-create"
                                                    value="{{ old('blog_title', isset($blogs) ? $blogs->blog_title : '') }}"
                                                    placeholder="Post Title">
                                                @error('blog_title')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="slug">Slug:</label>
                                                <input type="text" class="form-control slug1" id="slug"
                                                    value="{{ old('slug', isset($blogs) ? $blogs->slug : '') }}"
                                                    name="slug" placeholder="Slug">
                                                @error('slug')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3" data-test-hook="remove-button">
                                            <label class="col-form-label mb-2" for="choices-remove-button">Category:</label>

                                            <select class="form-select" id="choices-remove-button" name="category">
                                                <option value="">Select Category Name</option>
                                                @foreach ($categorys as $item)
                                                    <option value="{{ $item->category }}" 
                                                        {{ old('category', $blogs->category ?? '') == $item->category ? 'selected' : '' }}>
                                                        {{ $item->category }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            
                                            
                                            @error('category')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-5">

                                        <label for="post_thumbnail">Post Thumbnail:</label>
                                        <input type="file" class="form-control" name="post_thumbnail">
                                        <label class="custom-file-label"
                                            for="post_thumbnail">{{ isset($blogs) ? basename($blogs->post_thumbnail) : '' }}</label>

                                        @error('post_thumbnail')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="mb-3">
                                            @if (isset($blogs) && $blogs->post_thumbnail)
                                                <img src="{{ asset($blogs->post_thumbnail) }}" alt="Thumbnail Preview"
                                                    style="width: 80px; height: 80px; object-fit: contain;">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="meta_description" class="">Meta Description:</label>
                                            <input type="text" name="meta_description" id="meta_description"
                                                placeholder="Meta Description" class="form-control meta_description" maxlength="255"
                                                
                                                value="{{ old('meta_description', isset($blogs) ? $blogs->meta_description : '') }}" />
                                            @error('meta_description')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="meta_tags" class="">Meta Tags:</label>
                                            <input type="text" name="meta_tags" id="meta_tags" class="form-control"
                                                placeholder="Meta Tags" maxlength="160"
                                                value="{{ old('meta_tags', isset($blogs) ? $blogs->meta_tags : '') }}" />
                                            @error('meta_tags')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Content</label>
                                            <textarea class="form-control" id="summernote" name="content">{{ old('content', isset($blogs) ? $blogs->content : '') }}</textarea>
                                            @error('content')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="btn-showcase text-end blog-btn">
                                        <button class="btn btn-primary" type="submit">Post</button>
                                        <input class="btn bg-light font-dark" type="reset" value="Discard">
                                    </div>
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
