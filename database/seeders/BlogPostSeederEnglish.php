<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\User;
use Carbon\Carbon;

class BlogPostSeederEnglish extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure we have users and categories
        $users = User::all();
        $categories = BlogCategory::all();

        if ($users->isEmpty() || $categories->isEmpty()) {
            $this->command->error('Please seed users and blog categories first!');
            return;
        }

        $posts = [
            [
                'title' => 'The Future of Artificial Intelligence in Medicine',
                'excerpt' => 'How AI is revolutionizing healthcare through early diagnosis and personalized treatment',
                'content' => $this->getMedicalAIContent(),
                'blog_category_id' => $categories->where('name', 'AI Applications')->first()->id,
                'user_id' => $users->random()->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(2),
                'is_featured' => true,
                'views_count' => 1250,
                'meta_tags' => ['artificial intelligence', 'medicine', 'diagnosis', 'healthcare'],
            ],
            [
                'title' => 'Machine Learning Basics for Beginners',
                'excerpt' => 'A comprehensive guide for beginners to understand machine learning concepts and basic algorithms',
                'content' => $this->getMLBasicsContent(),
                'blog_category_id' => $categories->where('name', 'Tutorials & Educational Content')->first()->id,
                'user_id' => $users->random()->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(5),
                'is_featured' => true,
                'views_count' => 890,
                'meta_tags' => ['machine learning', 'beginners', 'algorithms', 'tutorial'],
            ],
            [
                'title' => 'Natural Language Processing: From Theory to Practice',
                'excerpt' => 'Exploring how machines understand and process human language in real-world applications',
                'content' => $this->getNLPContent(),
                'blog_category_id' => $categories->where('name', 'Natural Language Processing')->first()->id,
                'user_id' => $users->random()->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(7),
                'is_featured' => false,
                'views_count' => 642,
                'meta_tags' => ['nlp', 'natural language', 'processing', 'text analysis'],
            ],
            [
                'title' => 'Computer Vision: Revolutionizing Visual Intelligence',
                'excerpt' => 'How computer vision is transforming industries through advanced image and video analysis',
                'content' => $this->getComputerVisionContent(),
                'blog_category_id' => $categories->where('name', 'Computer Vision')->first()->id,
                'user_id' => $users->random()->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(10),
                'is_featured' => false,
                'views_count' => 523,
                'meta_tags' => ['computer vision', 'image processing', 'deep learning', 'AI'],
            ],
            [
                'title' => 'Latest Breakthroughs in Artificial Intelligence',
                'excerpt' => 'Recent developments and innovations that are shaping the future of AI technology',
                'content' => $this->getAINewsContent(),
                'blog_category_id' => $categories->where('name', 'Technology News')->first()->id,
                'user_id' => $users->random()->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(12),
                'is_featured' => true,
                'views_count' => 1089,
                'meta_tags' => ['AI news', 'breakthroughs', 'technology', 'innovation'],
            ],
            [
                'title' => 'Deep Learning Neural Networks Explained',
                'excerpt' => 'Understanding the architecture and functionality of deep neural networks in modern AI',
                'content' => $this->getDeepLearningContent(),
                'blog_category_id' => $categories->where('name', 'Machine Learning')->first()->id,
                'user_id' => $users->random()->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(15),
                'is_featured' => false,
                'views_count' => 734,
                'meta_tags' => ['deep learning', 'neural networks', 'AI architecture', 'algorithms'],
            ],
            [
                'title' => 'Building Your First AI Application: A Step-by-Step Guide',
                'excerpt' => 'Learn how to create your first AI application from concept to deployment',
                'content' => $this->getAITutorialContent(),
                'blog_category_id' => $categories->where('name', 'Tutorials & Educational Content')->first()->id,
                'user_id' => $users->random()->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(18),
                'is_featured' => false,
                'views_count' => 456,
                'meta_tags' => ['AI tutorial', 'programming', 'development', 'beginners'],
            ],
        ];

        foreach ($posts as $postData) {
            // Generate slug from title
            $postData['slug'] = \Str::slug($postData['title']);
            
            BlogPost::create($postData);
        }
    }

    private function getMedicalAIContent()
    {
        return "
        <h2>Introduction to AI in Healthcare</h2>
        <p>Artificial Intelligence is transforming the healthcare industry in unprecedented ways. From diagnostic imaging to drug discovery, AI technologies are enabling more accurate, efficient, and personalized medical care.</p>

        <h3>Key Applications</h3>
        <ul>
            <li><strong>Medical Imaging:</strong> AI algorithms can analyze X-rays, MRIs, and CT scans with remarkable accuracy</li>
            <li><strong>Drug Discovery:</strong> Machine learning accelerates the identification of potential therapeutic compounds</li>
            <li><strong>Personalized Treatment:</strong> AI helps tailor treatments based on individual patient data</li>
            <li><strong>Predictive Analytics:</strong> Early warning systems for critical health conditions</li>
        </ul>

        <h3>Benefits and Challenges</h3>
        <p>While AI in medicine offers tremendous benefits including improved accuracy and efficiency, it also presents challenges related to data privacy, regulatory approval, and integration with existing healthcare systems.</p>

        <h3>Future Outlook</h3>
        <p>The future of AI in medicine looks promising with continued advancements in deep learning, natural language processing, and robotics. We can expect to see more sophisticated diagnostic tools and treatment recommendations in the coming years.</p>
        ";
    }

    private function getMLBasicsContent()
    {
        return "
        <h2>What is Machine Learning?</h2>
        <p>Machine Learning is a subset of artificial intelligence that enables computers to learn and make decisions from data without being explicitly programmed for every scenario.</p>

        <h3>Types of Machine Learning</h3>
        <ol>
            <li><strong>Supervised Learning:</strong> Learning with labeled data examples</li>
            <li><strong>Unsupervised Learning:</strong> Finding patterns in data without labels</li>
            <li><strong>Reinforcement Learning:</strong> Learning through trial and error with rewards</li>
        </ol>

        <h3>Common Algorithms</h3>
        <ul>
            <li>Linear Regression</li>
            <li>Decision Trees</li>
            <li>Random Forest</li>
            <li>Support Vector Machines</li>
            <li>Neural Networks</li>
        </ul>

        <h3>Getting Started</h3>
        <p>To begin your machine learning journey, start with understanding statistics and programming languages like Python or R. Practice with real datasets and gradually move to more complex algorithms.</p>
        ";
    }

    private function getNLPContent()
    {
        return "
        <h2>Understanding Natural Language Processing</h2>
        <p>Natural Language Processing (NLP) is a branch of AI that helps computers understand, interpret, and generate human language in a valuable way.</p>

        <h3>Core NLP Tasks</h3>
        <ul>
            <li>Text Classification</li>
            <li>Sentiment Analysis</li>
            <li>Named Entity Recognition</li>
            <li>Machine Translation</li>
            <li>Question Answering</li>
        </ul>

        <h3>Modern Applications</h3>
        <p>NLP powers many applications we use daily including virtual assistants, chatbots, language translation services, and content recommendation systems.</p>

        <h3>Challenges in NLP</h3>
        <p>Language is complex and context-dependent. Current challenges include handling ambiguity, understanding context, and processing multiple languages effectively.</p>
        ";
    }

    private function getComputerVisionContent()
    {
        return "
        <h2>Computer Vision Revolution</h2>
        <p>Computer vision enables machines to interpret and understand visual information from the world, mimicking human visual capabilities.</p>

        <h3>Key Technologies</h3>
        <ul>
            <li>Convolutional Neural Networks (CNNs)</li>
            <li>Object Detection Algorithms</li>
            <li>Image Segmentation</li>
            <li>Facial Recognition</li>
        </ul>

        <h3>Industry Applications</h3>
        <p>Computer vision is being used in autonomous vehicles, medical imaging, quality control in manufacturing, security systems, and augmented reality applications.</p>

        <h3>Future Developments</h3>
        <p>We're moving towards more sophisticated 3D vision, real-time processing capabilities, and integration with other AI technologies for comprehensive understanding.</p>
        ";
    }

    private function getAINewsContent()
    {
        return "
        <h2>Recent AI Breakthroughs</h2>
        <p>The field of artificial intelligence continues to evolve rapidly with groundbreaking developments across multiple domains.</p>

        <h3>Notable Achievements</h3>
        <ul>
            <li>Advanced language models with improved reasoning capabilities</li>
            <li>Breakthrough in protein folding prediction</li>
            <li>Enhanced computer vision for autonomous systems</li>
            <li>Progress in quantum machine learning</li>
        </ul>

        <h3>Industry Impact</h3>
        <p>These advancements are creating new opportunities in healthcare, finance, transportation, and creative industries while also raising important questions about AI ethics and governance.</p>

        <h3>Looking Ahead</h3>
        <p>The next wave of AI innovation is expected to focus on more efficient algorithms, better human-AI collaboration, and addressing current limitations in AI systems.</p>
        ";
    }

    private function getDeepLearningContent()
    {
        return "
        <h2>Deep Learning Neural Networks</h2>
        <p>Deep learning represents a significant advancement in machine learning, using neural networks with multiple layers to process complex data patterns.</p>

        <h3>Architecture Components</h3>
        <ul>
            <li>Input Layer: Receives raw data</li>
            <li>Hidden Layers: Process and transform data</li>
            <li>Output Layer: Produces final predictions</li>
            <li>Activation Functions: Add non-linearity</li>
        </ul>

        <h3>Popular Architectures</h3>
        <p>Common deep learning architectures include Convolutional Neural Networks (CNNs) for image processing, Recurrent Neural Networks (RNNs) for sequence data, and Transformers for natural language processing.</p>

        <h3>Training Process</h3>
        <p>Deep learning models learn through backpropagation, adjusting weights based on prediction errors to improve accuracy over time.</p>
        ";
    }

    private function getAITutorialContent()
    {
        return "
        <h2>Building Your First AI Application</h2>
        <p>Creating an AI application might seem daunting, but with the right approach and tools, you can build impressive solutions.</p>

        <h3>Step 1: Define Your Problem</h3>
        <p>Start by clearly defining what problem you want to solve and what type of AI approach would be most suitable.</p>

        <h3>Step 2: Gather and Prepare Data</h3>
        <p>Quality data is crucial for AI success. Collect, clean, and organize your dataset properly.</p>

        <h3>Step 3: Choose Your Tools</h3>
        <ul>
            <li>Programming Language: Python or R</li>
            <li>Libraries: TensorFlow, PyTorch, or Scikit-learn</li>
            <li>Development Environment: Jupyter Notebook or Google Colab</li>
        </ul>

        <h3>Step 4: Build and Train Your Model</h3>
        <p>Start with simple algorithms and gradually increase complexity as needed. Remember to validate your model's performance.</p>

        <h3>Step 5: Deploy and Monitor</h3>
        <p>Deploy your application and continuously monitor its performance in real-world scenarios.</p>
        ";
    }
}
