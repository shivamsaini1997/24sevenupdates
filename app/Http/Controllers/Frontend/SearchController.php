<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function blogSearch(Request $request)
    {
        $categories = Category::where('status', 1)->get();
        $allcategoryes = Category::get();



        $search = $request->input('search', '');

        if (!empty($search)) {
            $blogs = Blog::where('blog_title', 'LIKE', "%$search%")->paginate(5);
        } else {
            $blogs = Blog::where('status', 1)->orderBy('created_at', 'desc')->paginate(5);
        }

        $allblogs = Blog::where('status', 1)->orderBy('created_at', 'desc')->paginate(3);
        return view('frontend.search-result', compact('categories','blogs','allcategoryes','allblogs'));
    }
}

