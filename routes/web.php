<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\SearchController;
use Illuminate\Support\Facades\Route;


Route::get('/admin',[AdminController::class, 'loginAdmin'])->name('admin');
Route::post('/admin',[AdminController::class, 'adminLogin'])->name('admin-login');

Route::get('/admin/forget-password', [AdminController::class, 'forgetPassword'])->name('forgetpassword');
Route::post('/admin/forget-password', [AdminController::class, 'forgetPasswordSubmit'])->name('forgetpasswordsubmit');
Route::get('/admin/reset-password/{token}', [AdminController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('/admin/reset-password', [AdminController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::middleware('auth.middlewear')->group(function(){
    Route::middleware('superadmin')->group(function(){
        Route::get('/admin/register',[AdminController::class, 'registerAdmin'])->name('register-admin');
        Route::post('/admin/register',[AdminController::class, 'storeAdmin'])->name('store-admin');
        Route::get('/admin/register/delete/{id}',[AdminController::class, 'deleteRegister'])->name('delete-register');
    });
    Route::get('/admin/logout',[AdminController::class, 'logout'])->name('logout');
    Route::get('/admin/dashboard',[AdminController::class, 'Dashboard'])->name('dashboard');
    Route::get('/admin/add-category',[AdminController::class, 'addCategory'])->name('add-category');
    Route::post('/admin/add-category',[AdminController::class, 'storeCategory'])->name('store-category');
    Route::get('/admin/manage-category',[AdminController::class, 'manageCategory'])->name('manage-category');
    Route::get('/admin/manage-category/edit/{id}',[AdminController::class, 'editCategory'])->name('edit-category');
    Route::post('/admin/manage-category/update/{id}',[AdminController::class, 'updateCategory'])->name('update-category');
    Route::get('/admin/manage-category/status/{id}/{status}',[AdminController::class, 'statusCategory'])->name('status-category');
    Route::get('/admin/manage-category/delete/{id}',[AdminController::class, 'deleteCategory'])->name('delete-category');

    Route::get('/admin/add-blog',[AdminController::class, 'addBlog'])->name('add-blog');
    Route::post('/admin/add-blog',[AdminController::class, 'storeBlog'])->name('store-blog');
    Route::get('/admin/manage-blog',[AdminController::class, 'manageBlog'])->name('manage-blog');
    Route::get('/admin/manage-blog/edit/{id}',[AdminController::class, 'editBlog'])->name('edit-blog');
    Route::post('/admin/manage-blog/update/{id}',[AdminController::class, 'updateBlog'])->name('update-blog');
    Route::get('/admin/manage-blog/status/{id}/{status}',[AdminController::class, 'statusBlog'])->name('status-blog');
    Route::get('/admin/manage-blog/delete/{id}',[AdminController::class, 'deleteBlog'])->name('delete-blog');
});


Route::get('/search', [SearchController::class, 'blogSearch'])->name('blog-search');
Route::get('/', [HomeController::class, 'HomePage'])->name('home');
Route::get('/sitemap.xml', [HomeController ::class, 'siteMap'])->name('site-map');

Route::get('/about', [AboutController::class, 'AboutUs'])->name('about-us');
Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name('disclaimer');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/category', [CategoryController ::class, 'Category'])->name('category');
Route::get('/{category}', [CategoryController ::class, 'blog'])->name('blog');
Route::get('/{category}/{slug}', [CategoryController ::class, 'blogDetail'])->name('blog-detail');

// Route::get('/category/{id}', [CategoryController::class, 'CategoryDetail'])->name('category-detail');
