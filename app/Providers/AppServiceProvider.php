<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        $categorysmenulink = Category::all(); 

        $schemaData = null;
        $slug = request()->segment(2); 
        $blog = Blog::where('slug', $slug)->first();
        if ($blog) {
            $article = [
                "@context"=>"https://schema.org",
                'type' => 'NewsArticle',
                'url' => url(strtolower($blog->category) . '/' . $blog->slug),
                'category' =>$blog->category,
                'headline' => $blog->blog_title,
                'description' => $blog->meta_description, 
                'image' => [
                    'url' => asset($blog->post_thumbnail),
                    'width' => '1200',
                    'height' => '800',
                ],
                'author' => '24sevenupdates', 
                'publisher' => [
                    'name' => '24 Seven Updates',
                    'logo' => [
                        'url' => asset('frontend/assets/img/favicon.png'), 
                        'width' => '150',
                        'height' => '75',
                    ],
                ],
                'datePublished' => $blog->created_at->toDateString(), 
                'dateModified' => $blog->updated_at->toDateString(),
            ];
            $schemaData = json_encode($article, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }

            $schemaDataCategory = null;
            $slug = request()->segment(1); 
            $category = Category::where('slug', $slug)->first();
        
            if ($category) {
                $categoryData = [
                    "@context"=>"https://schema.org",
                    'type' => 'NewsArticle',
                    'url' => url(strtolower($category->slug)), 
                    'category' =>$category->category,
                    'headline' => $category->meta_title,
                    'description' => $category->meta_description, 
                    'image' => [
                        'url' => asset($category->category_thumbnail), 
                        'width' => '1200',
                        'height' => '800',
                    ],
                    'author' => '24sevenupdates', 
                    'publisher' => [
                        'name' => '24 Seven Updates', 
                        'logo' => [
                            'url' => asset('frontend/assets/img/favicon.png'), // Publisher logo
                            'width' => '150',
                            'height' => '75',
                        ],
                    ],
                    'datePublished' => $category->created_at->toDateString(), // Category creation date
                    'dateModified' => $category->updated_at->toDateString(), // Category last modified date
                ];

                // Convert the schema data to JSON
                $schemaDataCategory = json_encode($categoryData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
            }


   
    
            $homepage = url('/');
            if ($homepage) {
                $homepagedata = [
                    "@context"=>"https://schema.org",
                    'type' => 'NewsArticle',
                    'url' => url('/'), 
                    'headline' => '24sevenupdates, Latest News, Sports, Entertainment, Health & Auto Trends.',
                    'description' => 'Stay updated with 24sevenupdates, your ultimate source for breaking news, live sports updates, political analysis, entertainment buzz, health and wellness tips, and the latest in automobiles and technology. Discover in-depth articles, cricket live scores, Bollywood news, fitness trends, and new car launches. Explore global news, government policies, and lifestyle trends—all in one place. Stay informed, inspired, and ahead of the curve with 24sevenupdates.', 
                    'image' => [
                        'url' => asset('frontend/assets/img/logo/24Sevenupdates.png'), 
                        'width' => '1200',
                        'height' => '800',
                    ],
                    'author' => '24sevenupdates', 
                    'publisher' => [
                        'name' => '24 Seven Updates', 
                        'logo' => [
                            'url' => asset('frontend/assets/img/favicon.png'),
                            'width' => '150',
                            'height' => '75',
                        ],
                    ],
                    
                ];

                // Convert the schema data to JSON
                $homedata = json_encode($homepagedata, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
            }

        // Share the data with all views
        view()->share([
            'categorysmenulink' => $categorysmenulink, // All categories for menu
            'schemaData' => $schemaData, // Dynamic schema for the blog
            'schemaDataCategory' => $schemaDataCategory, 
            'homedata' => $homedata
        ]);
    
        View::composer('*', function ($view) {
            if (Auth::check()) {

                $user = Auth::user();
                // dd( $user);
                $view->with('user', $user);
            }
        });
    }
}
