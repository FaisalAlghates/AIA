<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} - AIA Blog</title>
    <meta name="description" content="{{ $post->excerpt }}">
    <meta name="keywords" content="{{ implode(', ', $post->meta_tags ?? []) }}">
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
            line-height: 1.8;
        }

        .glassmorphism {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 1000px;
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

        .article-header {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .article-category {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .article-title {
            font-size: 3rem;
            font-weight: 900;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientShift 3s ease infinite;
            line-height: 1.2;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .article-excerpt {
            font-size: 1.3rem;
            opacity: 0.9;
            margin-bottom: 30px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .article-meta {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-bottom: 40px;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.95rem;
        }

        .meta-item i {
            color: #4ecdc4;
        }

        .article-content {
            background: rgba(255, 255, 255, 0.95);
            padding: 50px;
            border-radius: 25px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
            color: #333;
        }

        .article-content h2 {
            color: #2c3e50;
            font-size: 2rem;
            font-weight: 700;
            margin: 40px 0 20px 0;
            border-bottom: 3px solid #667eea;
            padding-bottom: 10px;
        }

        .article-content h3 {
            color: #34495e;
            font-size: 1.5rem;
            font-weight: 600;
            margin: 30px 0 15px 0;
        }

        .article-content p {
            margin-bottom: 20px;
            font-size: 1.1rem;
            color: #555;
        }

        .article-content ul, .article-content ol {
            margin: 20px 0;
            padding-left: 30px;
        }

        .article-content li {
            margin-bottom: 10px;
            font-size: 1.05rem;
            color: #555;
        }

        .article-content strong {
            color: #2c3e50;
            font-weight: 600;
        }

        .tags-section {
            margin-bottom: 40px;
        }

        .tags-title {
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .tags {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .tag {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 6px 15px;
            border-radius: 15px;
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .tag:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        .share-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .share-title {
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .share-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .share-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .share-btn:hover {
            transform: translateY(-3px) scale(1.1);
        }

        .share-btn.facebook { background: #3b5998; }
        .share-btn.twitter { background: #1da1f2; }
        .share-btn.linkedin { background: #0077b5; }
        .share-btn.whatsapp { background: #25d366; }
        .share-btn.copy { background: #6c757d; }

        .related-posts {
            margin-top: 60px;
        }

        .related-title {
            color: white;
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 30px;
        }

        .related-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .related-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 25px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .related-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .related-card-category {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            display: inline-block;
            margin-bottom: 15px;
        }

        .related-card-title {
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .related-card-excerpt {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .related-card-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.85rem;
        }

        .reading-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            z-index: 1000;
            transition: width 0.3s ease;
        }

        @media (max-width: 768px) {
            .article-title { font-size: 2rem; }
            .article-content { padding: 30px 25px; }
            .article-meta { flex-direction: column; gap: 15px; }
            .share-buttons { justify-content: center; }
            .nav .container { flex-direction: column; gap: 10px; }
            .related-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <div class="reading-progress"></div>
    
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

        <article>
            <!-- Article Header -->
            <header class="article-header">
                <div class="article-category" style="background-color: {{ $post->category->color }};">
                    {{ $post->category->icon }} {{ $post->category->name }}
                </div>
                
                <h1 class="article-title">{{ $post->title }}</h1>
                
                <p class="article-excerpt">{{ $post->excerpt }}</p>
                
                <div class="article-meta">
                    <div class="meta-item">
                        <i class="fas fa-user"></i>
                        <span>{{ $post->user->name }}</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-calendar"></i>
                        <span>{{ $post->published_at->format('F j, Y') }}</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-clock"></i>
                        <span>{{ $post->reading_time_text }}</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-eye"></i>
                        <span>{{ $post->views_count }} views</span>
                    </div>
                </div>
            </header>

            <!-- Article Content -->
            <div class="article-content">
                {!! $post->content !!}
            </div>
        </article>

        <!-- Tags -->
        @if($post->meta_tags && count($post->meta_tags) > 0)
        <div class="tags-section glassmorphism" style="padding: 25px;">
            <h3 class="tags-title">Tags</h3>
            <div class="tags">
                @foreach($post->meta_tags as $tag)
                <a href="{{ route('blog.index', ['search' => $tag]) }}" class="tag">
                    #{{ $tag }}
                </a>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Share Section -->
        <div class="share-section glassmorphism" style="padding: 30px;">
            <h3 class="share-title">Share This Article</h3>
            <div class="share-buttons">
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                   class="share-btn facebook" target="_blank" title="Share on Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($post->title) }}" 
                   class="share-btn twitter" target="_blank" title="Share on Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" 
                   class="share-btn linkedin" target="_blank" title="Share on LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://wa.me/?text={{ urlencode($post->title . ' ' . request()->fullUrl()) }}" 
                   class="share-btn whatsapp" target="_blank" title="Share on WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <button onclick="copyToClipboard()" class="share-btn copy" title="Copy Link" style="border: none; cursor: pointer;">
                    <i class="fas fa-link"></i>
                </button>
            </div>
        </div>

        <!-- Related Posts -->
        @if($relatedPosts->count() > 0)
        <section class="related-posts">
            <h2 class="related-title">Related Articles</h2>
            <div class="related-grid">
                @foreach($relatedPosts as $relatedPost)
                <div class="related-card" onclick="location.href='{{ route('blog.show', $relatedPost->slug) }}'">
                    <div class="related-card-category" style="background-color: {{ $relatedPost->category->color }};">
                        {{ $relatedPost->category->icon }} {{ $relatedPost->category->name }}
                    </div>
                    <h3 class="related-card-title">{{ $relatedPost->title }}</h3>
                    <p class="related-card-excerpt">{{ Str::limit($relatedPost->excerpt, 100) }}</p>
                    <div class="related-card-meta">
                        <span><i class="fas fa-calendar"></i> {{ $relatedPost->published_at->format('M j, Y') }}</span>
                        <span><i class="fas fa-eye"></i> {{ $relatedPost->views_count }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        @endif
    </div>

    <script>
        // Reading progress bar
        window.addEventListener('scroll', function() {
            const article = document.querySelector('.article-content');
            const progress = document.querySelector('.reading-progress');
            
            if (article && progress) {
                const articleTop = article.offsetTop;
                const articleHeight = article.offsetHeight;
                const windowHeight = window.innerHeight;
                const scrollTop = window.pageYOffset;
                
                const articleBottom = articleTop + articleHeight - windowHeight;
                const scrolled = Math.max(0, Math.min(100, 
                    ((scrollTop - articleTop) / (articleBottom - articleTop)) * 100
                ));
                
                progress.style.width = scrolled + '%';
            }
        });

        // Copy to clipboard function
        function copyToClipboard() {
            navigator.clipboard.writeText(window.location.href).then(function() {
                const btn = document.querySelector('.share-btn.copy');
                const originalHTML = btn.innerHTML;
                btn.innerHTML = '<i class="fas fa-check"></i>';
                btn.style.background = '#28a745';
                
                setTimeout(() => {
                    btn.innerHTML = originalHTML;
                    btn.style.background = '#6c757d';
                }, 2000);
            });
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add animation to related cards
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

        document.querySelectorAll('.related-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>
