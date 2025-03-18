<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Stringable;

class AdminController extends Controller
{
    public function Dashboard(){
        $blogs = Blog::get();
        $categorys = Category::get();

        $data = compact('blogs','categorys');
        // dd($data);
        return view('admin.Dashboard.dashboard')->with($data);
    }
    public function loginAdmin(){
        return view('admin.login');
    }
    public function adminLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
    
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/dashboard')->with('success', 'You have successfully logged in.');
        }
    
        return redirect('/admin')->with('error', 'Oops! You have entered invalid credentials.');
    }
    public function logout(Request $request): RedirectResponse{
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flush();

        return redirect('/admin')->with('success', 'You have successfully logged out.');
    }
    public function registerAdmin(){
        $register = User::all();
        $data = compact('register');
        return view('admin.register')->with($data);
    }
    public function storeAdmin(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:250',
            'email' => 'required|string|email|max:250|unique:users,email',
            'password' => 'required|min:8',
            'password-confir' => 'required|same:password',
            'role_type' => 'required|in:1,2',
        ]);
    
        // Create a new user
        User::create([
            'name' => $validatedData['full_name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'type_role' => $validatedData['role_type'],
        ]);
    
        $register = User::all();
    
        // Pass the data to the view with success message
        return view('admin.register')->with([
            'register' => $register,
            'success' => 'Admin successfully registered',
        ]);
    }
   
    public function deleteRegister($id){
        $register = User::find($id);
        $register->delete();
        return back();
    }


    public function forgetPassword(){
        return view('admin.reset-password');
    }

    public function forgetPasswordSubmit(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);
    
        $token = Str::random(64);
        $url = route('reset.password.get', Crypt::encrypt($request->email));
    
        // Delete existing token if it exists
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();
    
        // Insert the new token
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);
    
        Mail::send('admin.auth.reset_password_email', ['url' => $url], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });
    
        return back()->with('success', 'We have emailed your password reset link!');
    

    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function showResetPasswordForm($email) {
        // dd(decrypt($email));
        $data['email']=decrypt($email);
        return view('admin.auth.forgetPasswordLink',$data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitResetPasswordForm(Request $request){
        $request->validate([
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);


        return redirect('/admin')->with('success', 'Your password has been changed!');
    }



    public function addCategory(){
        $title = "Add Category";
        $url =  url("/admin/add-category");
        $data = compact('title','url');
        return view('admin.Category.add_category')->with($data);
    }
    public function storeCategory(Request $request){
        $categorys = new Category();
            $request->validate([
            'category' => 'required|string|unique:category,category|max:255',
            'slug' => 'required|string|unique:category,slug|max:255',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:1000',
            'meta_tags' => 'required|string|max:600',
            'category_thumbnail' => 'required|image|mimes:jpg,jpeg,webp|max:2048'
        ]);

        $categorys->category = $request->input('category');
        $categorys->slug = $request->input('slug');
        $categorys->meta_title = $request->input('meta_title');
        $categorys->meta_description = $request->input('meta_description');
        $categorys->meta_tags = $request->input('meta_tags');
    

        if ($request->hasFile('category_thumbnail')) {
            if ($categorys->category_thumbnail && file_exists(public_path($categorys->category_thumbnail))) {
                unlink(public_path($categorys->category_thumbnail));
            }
            $file = $request->file('category_thumbnail');
            $fileName = time() . '_thumbnail' . $file->getClientOriginalName();
            $file->move(public_path('upload/category/'), $fileName);
            $categorys->category_thumbnail = 'upload/category/' . $fileName;
        }
            $categorys->save();
            return redirect()->route('manage-category')->with('success', 'Category Added Successfully');
    }
    public function manageCategory(){
        $categorys = Category::orderBy('created_at', 'desc')->get();
        $data = compact('categorys');
        // dd($data);
        return view('admin.Category.manage_category')->with($data);
    }
    public function editCategory($id){
        $categorys = Category::find($id);
        $title = "Edit Category";
        $url = url('/admin/manage-category/update/') . "/" . $id;
        $data = compact('categorys', 'title', 'url');
        // dd($data);
        return view('admin.Category.add_category')->with($data);

    }
    public function updateCategory(Request $request, $id)
    {
        // Find the category by ID
        $categorys = Category::findOrFail($id);
    
        // Validate the incoming request data
        $request->validate([
            'category' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:1000',
            'meta_tags' => 'required|string|max:800',
            'category_thumbnail' => 'nullable|image|mimes:jpg,jpeg,webp,png|max:2048'
        ]);
    
        $categorys->category = $request->input('category');
        $categorys->slug = $request->input('slug');
        $categorys->meta_title = $request->input('meta_title');
        $categorys->meta_description = $request->input('meta_description');
        $categorys->meta_tags = $request->input('meta_tags');
    
        if ($request->hasFile('category_thumbnail')) {
            if ($categorys->category_thumbnail && file_exists(public_path($categorys->category_thumbnail))) {
                unlink(public_path($categorys->category_thumbnail));
            }
            $file = $request->file('category_thumbnail');
            $fileName = time() . '_thumbnail' . $file->getClientOriginalName();
            $file->move(public_path('upload/category/'), $fileName);
            $categorys->category_thumbnail = 'upload/category/' . $fileName;
        }
    
        $categorys->save();
    
        return redirect()->route('manage-category')->with('success', 'Category Updated Successfully');
    }
    public function statusCategory($id,$status){
        $categorys = Category::find($id);
        $categorys->status = $status;
        $categorys->save();
        return back();
    }
    public function deleteCategory($id){
        $categorys = Category::find($id);
        $categorys->delete();
        return back();
    }

    public function addBlog(){
        $categorys =  Category::get();

        $title = "Add Post";
        $url = url('/admin/add-blog');
        $data = compact('categorys','title', 'url');
        // dd($categorys);
        return view('admin.Post.add_post')->with($data);
    }
    public function manageBlog(){
        $blogs = Blog::orderBy('created_at', 'desc')->get();;
        $data = compact('blogs');

        return view('admin.Post.manage_post')->with($data);
    }
    public function storeBlog(Request $request){
        $request->validate([
            'blog_title' => 'required|string|unique:blog,blog_title',
            'slug' => 'required|string|unique:blog,slug',
            'category' => 'required|string',
            'post_thumbnail' => 'required|image|mimes:jpg,jpeg,webp,avif|max:2048',
            'meta_description' => 'required|string',
            'meta_tags' => 'required|string',
            'content' => 'required|string',
        ]);
    
        $post = new Blog();
        $post->blog_title = $request->input('blog_title');
        $post->slug = $request->input('slug');
        $post->category = $request->input('category');
    
        if ($request->hasFile('post_thumbnail')) {
            $file = $request->file('post_thumbnail');
            $fileName = time() . '_post_thumbnail_' . $file->getClientOriginalName();
            $file->move(public_path('upload/post/'), $fileName);
            $post->post_thumbnail = 'upload/post/' . $fileName;
        }
    
        $post->meta_description = $request->input('meta_description');
        $post->meta_tags = $request->input('meta_tags');
        $post->content = $request->input('content');
    
        $post->save();
    
        return redirect()->route('manage-blog')->with('success', 'Post Added Successfully');
    }
    public function editBlog($id){
        $blogs = Blog::find($id);
        $categorys =  Category::get();
        $title = "Edit Post";
        $url = url('/admin/manage-blog/update/') . "/" . $id;
        $data = compact('categorys','blogs', 'title', 'url');
        // dd($blogs);
        return view('admin.Post.add_post')->with($data);
    }
    public function updateBlog(Request $request, $id){
        $post = Blog::findOrFail($id);
        $request->validate([
            'blog_title' => 'string',
            'slug' => 'string',
            'category' => 'string',
            'post_thumbnail' => 'image|mimes:jpg,jpeg,webp,avif|max:2048',
            'meta_description' => 'string',
            'meta_tags' => 'string',
            'content' => 'string',
        ]);
    
        
        $post->blog_title = $request->input('blog_title');
        $post->slug = $request->input('slug');
        $post->category = $request->input('category');
    
        if ($request->hasFile('post_thumbnail')) {
            $file = $request->file('post_thumbnail');
            $fileName = time() . '_post_thumbnail_' . $file->getClientOriginalName();
            $file->move(public_path('upload/post/'), $fileName);
            $post->post_thumbnail = 'upload/post/' . $fileName;
        }
    
        $post->meta_description = $request->input('meta_description');
        $post->meta_tags = $request->input('meta_tags');
        $post->content = $request->input('content');
    
        $post->save();
    
        return redirect()->route('manage-blog')->with('success', 'Post Added Successfully');
    }
    public function statusBlog($id, $status){
        $blogs = Blog::find($id);
        $blogs->status = $status;
        $blogs->save();
        return back();
    }
    public function deleteBlog($id){
        $blogs = Blog::find($id);
        $blogs->delete();
        return back();
    }

}
