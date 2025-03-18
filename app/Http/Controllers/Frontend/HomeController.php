<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function HomePage(){

         
        $categorys = Category::where('status', 1)->orderBy('created_at', 'desc')->paginate(6);
        $categoryes = Category::where('status', 1)->get();
        $blogs = Blog::where('status',1)->orderBy('created_at', 'desc')->get();
        $data = compact('categorys','blogs','categoryes');
        return view('frontend.index')->with($data);
    }
    public function siteMap(){
        // return view('frontend.sitemap');
        $blogs=Blog::where('status',1)->get();
        $categorys = Category::where('status', 1)->get();
        return response()->view('frontend.sitemap', ['blogs' => $blogs,'categorys' => $categorys])
            ->header('Content-Type', 'application/xml');
    }
    public function disclaimer(){
        return view('frontend.disclaimer');
    }
    public function privacyPolicy(){
        return view('frontend.privacy-policy');
    }

}
    