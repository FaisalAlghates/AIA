<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }} - AIA Blog</title>
    <meta name="description" content="{{ $category->description }}">
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

        .back-btn {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }

        .back-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .category-header {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .category-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            display: block;
        }

        .category-title {
            font-size: 3rem;
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

        .category-description {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        .posts-stats {
            text-align: center;
            margin-bottom: 40px;
        }

        .stats-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            display: inline-block;
            color: white;
        }

        .stats-number {
            font-size: 2rem;
            font-weight: 700;
            color: #4ecdc4;
        }

        .stats-label {
            font-size: 1rem;
            opacity: 0.8;
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
            margin-bottom: 15px;
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

        .no-posts {
            text-align: center;
            padding: 60px;
            color: white;
        }

        .no-posts i {
            font-size: 3rem;
            margin-bottom: 20px;
            opacity: 0.7;
        }

        .no-posts h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .no-posts p {
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .category-title { font-size: 2rem; }
            .posts-grid { 
                grid-template-columns: 1fr; 
                gap: 20px;
            }
            .post-meta { flex-direction: column; gap: 10px; align-items: flex-start; }
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
        <a href="{{ route('blog.index') }}" class="back-btn">
            <i class="fas fa-arrow-left"></i> Back to Blog
        </a>

        <!-- Category Header -->
        <div class="category-header">
            <span class="category-icon" style="color: {{ $category->color }};">{{ $category->icon }}</span>
            <h1 class="category-title">{{ $category->name }}</h1>
            <p class="category-description">{{ $category->description }}</p>
        </div>

        <!-- Posts Stats -->
        <div class="posts-stats">
            <div class="stats-card glassmorphism">
                <div class="stats-number">{{ $posts->total() }}</div>
                <div class="stats-label">{{ $posts->total() == 1 ? 'Article' : 'Articles' }}</div>
            </div>
        </div>

        <!-- Posts Grid -->
        @if($posts->count() > 0)
            <div class="posts-grid">
                @foreach($posts as $post)
                <div class="post-card" onclick="location.href='{{ route('blog.show', $post->slug) }}'">
                    @if($post->is_featured)
                    <div class="featured-badge">
                        <i class="fas fa-star"></i> Featured
                    </div>
                    @endif
                    
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
            <div class="glassmorphism no-posts">
                <i class="fas fa-search"></i>
                <h3>No Articles Found</h3>
                <p>There are no articles in this category at the moment. Check back later!</p>
                <a href="{{ route('blog.index') }}" class="back-btn" style="margin-top: 20px;">
                    <i class="fas fa-home"></i> View All Articles
                </a>
            </div>
        @endif
    </div>

    <script>
        // Add smooth animations
        document.querySelectorAll('.post-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Add intersection observer for card animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.post-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>
