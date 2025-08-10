<?php

namespace Modules\Blog\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = BlogCategory::active()->ordered()->withPostsCount()->get();
        
        $query = BlogPost::with(['category', 'user'])->published();
        
        // Filter by category if specified
        if ($request->has('category') && $request->category) {
            $query->byCategory($request->category);
        }
        
        // Search functionality
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }
        
        // Sort options
        $sort = $request->get('sort', 'recent');
        switch ($sort) {
            case 'popular':
                $query->popular();
                break;
            case 'recent':
            default:
                $query->recent();
                break;
        }
        
        $posts = $query->paginate(9);
        $featuredPosts = BlogPost::with(['category', 'user'])
            ->published()
            ->featured()
            ->recent()
            ->limit(3)
            ->get();
        
        return view('blog::index', compact('posts', 'categories', 'featuredPosts'));
    }

    /**
     * Show the specified resource.
     */
    public function show($slug)
    {
        $post = BlogPost::with(['category', 'user'])
            ->where('slug', $slug)
            ->published()
            ->firstOrFail();
        
        // Increment views
        $post->incrementViews();
        
        // Get related posts
        $relatedPosts = BlogPost::with(['category', 'user'])
            ->published()
            ->where('blog_category_id', $post->blog_category_id)
            ->where('id', '!=', $post->id)
            ->recent()
            ->limit(3)
            ->get();
        
        return view('blog::show', compact('post', 'relatedPosts'));
    }

    /**
     * Display posts by category.
     */
    public function category($slug)
    {
        $category = BlogCategory::where('slug', $slug)
            ->active()
            ->firstOrFail();
        
        $posts = BlogPost::with(['category', 'user'])
            ->published()
            ->where('blog_category_id', $category->id)
            ->recent()
            ->paginate(9);
        
        $categories = BlogCategory::active()->ordered()->withPostsCount()->get();
        
        return view('blog::category', compact('category', 'posts', 'categories'));
    }

    /**
     * Display blog archive.
     */
    public function archive()
    {
        $posts = BlogPost::with(['category', 'user'])
            ->published()
            ->recent()
            ->get();
        
        // Group posts by year and month
        $postsByYear = $posts->groupBy(function($post) {
            return $post->published_at->year;
        })->map(function($yearPosts) {
            return $yearPosts->groupBy(function($post) {
                return $post->published_at->month;
            });
        });
        
        return view('blog::archive', compact('postsByYear'));
    }
}
