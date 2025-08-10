<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive - AIA Blog</title>
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

        .timeline-section {
            position: relative;
        }

        .timeline-year {
            color: white;
            font-size: 2rem;
            font-weight: 700;
            margin: 40px 0 20px 0;
            padding: 15px 25px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 15px;
            text-align: center;
            position: sticky;
            top: 80px;
            z-index: 50;
        }

        .timeline-month {
            margin-bottom: 30px;
        }

        .month-header {
            color: white;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            padding: 10px 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            border-left: 4px solid #4ecdc4;
        }

        .posts-list {
            display: grid;
            gap: 15px;
        }

        .post-item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 20px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .post-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.15);
        }

        .post-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 10px;
            gap: 15px;
        }

        .post-category {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            white-space: nowrap;
            font-weight: 600;
        }

        .post-date {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            white-space: nowrap;
        }

        .post-title {
            color: white;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 8px;
            line-height: 1.4;
        }

        .post-excerpt {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .post-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }

        .post-stats {
            display: flex;
            gap: 15px;
        }

        .read-more {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
        }

        .read-more:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
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
            .header h1 { font-size: 2.5rem; }
            .post-header { flex-direction: column; align-items: flex-start; }
            .post-meta { flex-direction: column; gap: 10px; align-items: flex-start; }
            .nav .container { flex-direction: column; gap: 10px; }
            .timeline-year { position: relative; }
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

        <!-- Header -->
        <div class="header">
            <h1>Article Archive</h1>
            <p>Browse all our articles organized chronologically</p>
        </div>

        @if($postsByYear->count() > 0)
            <div class="timeline-section">
                @foreach($postsByYear as $year => $months)
                    <div class="timeline-year">
                        <i class="fas fa-calendar-alt"></i> {{ $year }}
                    </div>
                    
                    @foreach($months as $month => $posts)
                        <div class="timeline-month glassmorphism" style="padding: 25px; margin-bottom: 30px;">
                            <div class="month-header">
                                <i class="fas fa-calendar"></i> {{ \Carbon\Carbon::createFromFormat('n', $month)->format('F') }}
                            </div>
                            
                            <div class="posts-list">
                                @foreach($posts as $post)
                                    <div class="post-item" onclick="location.href='{{ route('blog.show', $post->slug) }}'">
                                        <div class="post-header">
                                            <div class="post-category" style="background-color: {{ $post->category->color }};">
                                                {{ $post->category->icon }} {{ $post->category->name }}
                                            </div>
                                            <div class="post-date">
                                                <i class="fas fa-calendar"></i> {{ $post->published_at->format('M j, Y') }}
                                            </div>
                                        </div>
                                        
                                        <h3 class="post-title">{{ $post->title }}</h3>
                                        <p class="post-excerpt">{{ Str::limit($post->excerpt, 150) }}</p>
                                        
                                        <div class="post-meta">
                                            <div class="post-stats">
                                                <span><i class="fas fa-user"></i> {{ $post->user ? $post->user->name : "Anonymous" }}</span>
                                                <span><i class="fas fa-eye"></i> {{ $post->views_count }}</span>
                                                <span><i class="fas fa-clock"></i> {{ $post->reading_time_text }}</span>
                                            </div>
                                            <a href="{{ route('blog.show', $post->slug) }}" class="read-more">
                                                Read More <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        @else
            <div class="glassmorphism no-posts">
                <i class="fas fa-archive"></i>
                <h3>No Articles in Archive</h3>
                <p>There are no published articles yet. Check back later!</p>
            </div>
        @endif
    </div>

    <script>
        // Add smooth scroll animation for timeline navigation
        document.querySelectorAll('.post-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px) scale(1.01)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Add intersection observer for animations
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

        document.querySelectorAll('.timeline-month').forEach(month => {
            month.style.opacity = '0';
            month.style.transform = 'translateY(20px)';
            month.style.transition = 'all 0.6s ease';
            observer.observe(month);
        });
    </script>
</body>
</html>
