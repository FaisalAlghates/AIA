<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIA Blog - Artificial Intelligence & Technology</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
            direction: ltr;
        }

        .glassmorphism {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .nav {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 15px 0;
            margin-bottom: 30px;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav .container {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .nav a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .header h1 {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 15px;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientShift 3s ease infinite;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .search-section {
            margin-bottom: 40px;
            padding: 30px;
        }

        .search-form {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .search-input {
            flex: 1;
            padding: 15px 20px;
            border: none;
            border-radius: 25px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            font-size: 1rem;
            min-width: 300px;
        }

        .search-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .search-btn, .filter-btn {
            padding: 15px 25px;
            border: none;
            border-radius: 25px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-btn:hover, .filter-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .categories {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .category-tag {
            padding: 8px 16px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .category-tag:hover, .category-tag.active {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        .featured-section {
            margin-bottom: 50px;
        }

        .section-title {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
        }

        .featured-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .post-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 25px;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .post-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .featured-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(45deg, #ff6b6b, #ffa500);
            color: white;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .post-category {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            display: inline-block;
            margin-bottom: 15px;
        }

        .post-title {
            color: white;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .post-excerpt {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .post-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .post-author {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        .post-date {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        .post-stats {
            display: flex;
            gap: 15px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        .read-more {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .read-more:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 40px;
        }

        .pagination a, .pagination span {
            padding: 10px 15px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .pagination a:hover, .pagination .current {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .header h1 { font-size: 2.5rem; }
            .search-form { flex-direction: column; }
            .search-input { min-width: auto; }
            .featured-grid, .posts-grid { 
                grid-template-columns: 1fr; 
                gap: 20px;
            }
            .nav .container { flex-direction: column; gap: 10px; }
        }
    </style>
</head>
<body>
    <div class="nav">
        <div class="container">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('blog.index') }}">Blog</a>
            <a href="{{ route('blog.archive') }}">Archive</a>
            <a href="{{ url('/services') }}">Services</a>
            <a href="{{ url('/team') }}">Team</a>
        </div>
    </div>

    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Artificial Intelligence Blog</h1>
            <p>Discover the latest developments and trends in artificial intelligence and machine learning</p>
        </div>

        <!-- Search and Filter Section -->
        <div class="search-section glassmorphism">
            <form method="GET" class="search-form">
                <input type="text" name="search" placeholder="Search articles..." class="search-input" value="{{ request('search') }}">
                <button type="submit" class="search-btn">
                    <i class="fas fa-search"></i> Search
                </button>
                <select name="sort" class="filter-btn" onchange="this.form.submit()">
                    <option value="recent" {{ request('sort') == 'recent' ? 'selected' : '' }}>Latest</option>
                    <option value="popular" {{ request('sort') == 'popular' ? 'selected' : '' }}>Most Read</option>
                </select>
            </form>

            <div class="categories">
                <a href="{{ route('blog.index') }}" class="category-tag {{ !request('category') ? 'active' : '' }}">
                    All Articles
                </a>
                @foreach($categories as $category)
                    <a href="{{ route('blog.index', ['category' => $category->slug]) }}" 
                       class="category-tag {{ request('category') == $category->slug ? 'active' : '' }}"
                       style="background-color: {{ $category->color }}20; border-color: {{ $category->color }};">
                        {{ $category->icon }} {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Featured Posts -->
        @if($featuredPosts->count() > 0 && !request('search') && !request('category'))
        <div class="featured-section">
            <h2 class="section-title">Featured Articles</h2>
            <div class="featured-grid">
                @foreach($featuredPosts as $post)
                <div class="post-card" onclick="location.href='{{ route('blog.show', $post->slug) }}'">
                    <div class="featured-badge">
                        <i class="fas fa-star"></i> Featured
                    </div>
                    <div class="post-category" style="background-color: {{ $post->category->color }};">
                        {{ $post->category->icon }} {{ $post->category->name }}
                    </div>
                    <h3 class="post-title">{{ $post->title }}</h3>
                    <p class="post-excerpt">{{ $post->excerpt }}</p>
                    <div class="post-meta">
                        <span class="post-author">
                            <i class="fas fa-user"></i> {{ $post->user->name }}
                        </span>
                        <span class="post-date">
                            <i class="fas fa-calendar"></i> {{ $post->published_at->format('M j, Y') }}
                        </span>
                    </div>
                    <div class="post-stats">
                        <span><i class="fas fa-eye"></i> {{ $post->views_count }}</span>
                        <span><i class="fas fa-clock"></i> {{ $post->reading_time_text }}</span>
                    </div>
                    <a href="{{ route('blog.show', $post->slug) }}" class="read-more">
                        Read More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        <!-- All Posts -->
        <div class="posts-section">
            <h2 class="section-title">
                @if(request('category'))
                    {{ $categories->where('slug', request('category'))->first()->name ?? 'Category' }} Articles
                @elseif(request('search'))
                    Search results for "{{ request('search') }}"
                @else
                    All Articles
                @endif
            </h2>

            @if($posts->count() > 0)
            <div class="posts-grid">
                @foreach($posts as $post)
                <div class="post-card" onclick="location.href='{{ route('blog.show', $post->slug) }}'">
                    @if($post->is_featured)
                    <div class="featured-badge">
                        <i class="fas fa-star"></i> Featured
                    </div>
                    @endif
                    <div class="post-category" style="background-color: {{ $post->category->color }};">
                        {{ $post->category->icon }} {{ $post->category->name }}
                    </div>
                    <h3 class="post-title">{{ $post->title }}</h3>
                    <p class="post-excerpt">{{ $post->excerpt }}</p>
                    <div class="post-meta">
                        <span class="post-author">
                            <i class="fas fa-user"></i> {{ $post->user->name }}
                        </span>
                        <span class="post-date">
                            <i class="fas fa-calendar"></i> {{ $post->published_at->format('M j, Y') }}
                        </span>
                    </div>
                    <div class="post-stats">
                        <span><i class="fas fa-eye"></i> {{ $post->views_count }}</span>
                        <span><i class="fas fa-clock"></i> {{ $post->reading_time_text }}</span>
                    </div>
                    <a href="{{ route('blog.show', $post->slug) }}" class="read-more">
                        Read More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="pagination">
                {{ $posts->links() }}
            </div>
            @else
            <div class="glassmorphism" style="padding: 60px; text-align: center; margin: 40px 0;">
                <i class="fas fa-search" style="font-size: 3rem; color: white; margin-bottom: 20px;"></i>
                <h3 style="color: white; margin-bottom: 15px;">No Articles Found</h3>
                <p style="color: rgba(255, 255, 255, 0.8);">
                    @if(request('search'))
                        We couldn't find any articles matching your search "{{ request('search') }}"
                    @else
                        There are no articles in this category at the moment
                    @endif
                </p>
                <a href="{{ route('blog.index') }}" class="read-more" style="margin-top: 20px;">
                    <i class="fas fa-home"></i> View All Articles
                </a>
            </div>
            @endif
        </div>
    </div>

    <script>
        // Auto-submit search form
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.querySelector('.search-input');
            const form = document.querySelector('.search-form');
            
            let timeout;
            searchInput.addEventListener('input', function() {
                clearTimeout(timeout);
                timeout = setTimeout(() => {
                    if (this.value.length >= 3 || this.value.length === 0) {
                        form.submit();
                    }
                }, 500);
            });
        });

        // Smooth animations
        document.querySelectorAll('.post-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>
</body>
</html>
