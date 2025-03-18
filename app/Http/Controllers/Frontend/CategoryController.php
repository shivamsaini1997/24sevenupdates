<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function Category(){
        $categorys = Category::get();
        $data = compact('categorys');
        return view('frontend.category')->with($data);
    }
    public function blog($category){
        $categoryes = Category::where('category', $category)->first();
        $allcategoryes = Category::get();
        $blogs = Blog::where('category', $category)->where('status', 1)->orderBy('created_at', 'desc')->paginate(8);
        $allblogs = Blog::where('status', 1)->orderBy('created_at', 'desc')->paginate(3);
        $data = compact('blogs' , 'categoryes','allcategoryes','allblogs');
        // dd($data);
        return view('frontend.blog')->with($data);
    }
    

    public function blogDetail($category, $slug){
        $blog = Blog::where('status', 1)->where('slug', $slug)->first();
        $allblogs = Blog::where('status', 1)->orderBy('created_at', 'desc')->paginate(3);
        $allcategoryes = Category::get();
        $data = compact('blog','allcategoryes','allblogs');
        return view('frontend.blog-details')->with($data);
    }
}
