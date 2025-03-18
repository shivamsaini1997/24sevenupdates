@extends('admin.layouts.main')
@push('title')
    <title>Manage Category</title>
@endpush
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <h2>Manage Category</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display" id="basic-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th>Slug</th>
                                            <th>Thumbnail</th>
                                            <th>Meta Title</th>
                                            <th>Meta Description</th>
                                            <th>Meta Tags</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categorys as $item)
                                            
                                        <tr>
                                            <td>
                                                <span class="increment">
                                                    {{ $loop->iteration }}.
                                                </span>
                                            </td>
                                            <td>{{$item->category}}</td>
                                            <td>{{$item->slug}}</td>
                                            <td>
                                                <img style="width: 60px;" src="{{asset($item->category_thumbnail)}}" alt="">
                                            </td>
                                            <td>{{$item->meta_title}}</td>
                                            <td>{{$item->meta_description}}</td>
                        
                                            <td>{{$item->meta_tags}}</td>
                                            <td>
                                                
                                                @if ($item->status == '1')
                                                    <a href="{{route('status-category', ['id' => $item->id, 'status' => '0'])}}" onclick="return confirm('Are you sure!')">
                                                        <span class="badge rounded-pill badge-success">Active</span>
                                                    </a>
                                                @endif
                                               
                                                @if ($item->status == '0')
                                                <a href="{{route('status-category', ['id' => $item->id, 'status' => '1'])}}" onclick="return confirm('Are you sure!')">
                                                    <span class="badge rounded-pill badge-danger">Deactive</span>
                                                </a>
                                                @endif
                                            </td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit">
                                                        <a href="{{route('edit-category',['id' => $item->id])}}">
                                                            <svg style="width:15px" xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                                <path fill="#3eb95f"
                                                                    d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152L0 424c0 48.6 39.4 88 88 88l272 0c48.6 0 88-39.4 88-88l0-112c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 112c0 22.1-17.9 40-40 40L88 464c-22.1 0-40-17.9-40-40l0-272c0-22.1 17.9-40 40-40l112 0c13.3 0 24-10.7 24-24s-10.7-24-24-24L88 64z" />
                                                            </svg>
                                                        </a>
                                                    </li>
                                                    <li class="delete ps-2">
                                                        <a href="{{route('delete-category',['id' => $item->id])}}" class="open-detele-modal" type="button" data-bs-toggle="modal" data-bs-target="#tooltipmodal">
                                                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 13px;"
                                                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                                <path fill="#e74b2b"
                                                                    d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0L284.2 0c12.1 0 23.2 6.8 28.6 17.7L320 32l96 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 96C14.3 96 0 81.7 0 64S14.3 32 32 32l96 0 7.2-14.3zM32 128l384 0 0 320c0 35.3-28.7 64-64 64L96 512c-35.3 0-64-28.7-64-64l0-320zm96 64c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16z" />
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    <p class="mt-2"> Are you sure want to delete this category</p>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    <a href="" class="btn btn-primary delete-modal">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
