<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Models\User;
use Carbon\Carbon;

class BlogPostSeeder extends Seeder
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
                'title' => 'مستقبل الذكاء الاصطناعي في الطب',
                'excerpt' => 'كيف يثور الذكاء الاصطناعي مجال الطب من خلال التشخيص المبكر والعلاج الشخصي',
                'content' => $this->getMedicalAIContent(),
                'blog_category_id' => $categories->where('name', 'تطبيقات الذكاء الاصطناعي')->first()->id,
                'user_id' => $users->random()->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(2),
                'is_featured' => true,
                'views_count' => 1250,
                'meta_tags' => ['ذكاء اصطناعي', 'طب', 'تشخيص', 'صحة'],
            ],
            [
                'title' => 'أساسيات تعلم الآلة للمبتدئين',
                'excerpt' => 'دليل شامل للمبتدئين لفهم مفاهيم تعلم الآلة والخوارزميات الأساسية',
                'content' => $this->getMLBasicsContent(),
                'blog_category_id' => $categories->where('name', 'دروس ومقالات تعليمية')->first()->id,
                'user_id' => $users->random()->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(5),
                'is_featured' => true,
                'views_count' => 890,
                'meta_tags' => ['تعلم آلة', 'مبتدئين', 'خوارزميات', 'تعليم'],
            ],
            [
                'title' => 'ثورة ChatGPT في معالجة اللغات الطبيعية',
                'excerpt' => 'تحليل شامل لتأثير ChatGPT على مجال معالجة اللغات الطبيعية والتطبيقات المستقبلية',
                'content' => $this->getChatGPTContent(),
                'blog_category_id' => $categories->where('name', 'معالجة اللغات الطبيعية')->first()->id,
                'user_id' => $users->random()->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(1),
                'is_featured' => false,
                'views_count' => 2150,
                'meta_tags' => ['ChatGPT', 'معالجة لغات', 'OpenAI', 'نص'],
            ],
            [
                'title' => 'الرؤية الحاسوبية في السيارات ذاتية القيادة',
                'excerpt' => 'كيف تستخدم السيارات ذاتية القيادة تقنيات الرؤية الحاسوبية للتنقل الآمن',
                'content' => $this->getComputerVisionContent(),
                'blog_category_id' => $categories->where('name', 'الرؤية الحاسوبية')->first()->id,
                'user_id' => $users->random()->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(3),
                'is_featured' => false,
                'views_count' => 670,
                'meta_tags' => ['رؤية حاسوبية', 'سيارات ذكية', 'قيادة ذاتية', 'تصور'],
            ],
            [
                'title' => 'أحدث تطورات الذكاء الاصطناعي في 2024',
                'excerpt' => 'نظرة على أهم التطورات والابتكارات في مجال الذكاء الاصطناعي خلال العام الحالي',
                'content' => $this->getAI2024Content(),
                'blog_category_id' => $categories->where('name', 'أخبار التقنية')->first()->id,
                'user_id' => $users->random()->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subHours(6),
                'is_featured' => true,
                'views_count' => 340,
                'meta_tags' => ['أخبار AI', '2024', 'تطورات', 'ابتكار'],
            ],
            [
                'title' => 'بناء نموذج تصنيف الصور باستخدام TensorFlow',
                'excerpt' => 'دليل تطبيقي خطوة بخطوة لبناء نموذج تعلم عميق لتصنيف الصور',
                'content' => $this->getTensorFlowContent(),
                'blog_category_id' => $categories->where('name', 'دروس ومقالات تعليمية')->first()->id,
                'user_id' => $users->random()->id,
                'status' => 'published',
                'published_at' => Carbon::now()->subDays(4),
                'is_featured' => false,
                'views_count' => 520,
                'meta_tags' => ['TensorFlow', 'تصنيف صور', 'تعلم عميق', 'Python'],
            ],
            [
                'title' => 'أخلاقيات الذكاء الاصطناعي والمسؤولية الاجتماعية',
                'excerpt' => 'مناقشة التحديات الأخلاقية والاجتماعية المرتبطة بتطوير واستخدام تقنيات الذكاء الاصطناعي',
                'content' => $this->getAIEthicsContent(),
                'blog_category_id' => $categories->where('name', 'الذكاء الاصطناعي')->first()->id,
                'user_id' => $users->random()->id,
                'status' => 'draft',
                'published_at' => null,
                'is_featured' => false,
                'views_count' => 0,
                'meta_tags' => ['أخلاقيات AI', 'مسؤولية', 'مجتمع', 'فلسفة'],
            ],
        ];

        foreach ($posts as $postData) {
            BlogPost::create($postData);
        }

        // Update categories posts count
        foreach ($categories as $category) {
            $category->updatePostsCount();
        }
    }

    private function getMedicalAIContent(): string
    {
        return '<p>يشهد مجال الطب ثورة حقيقية بفضل تقنيات الذكاء الاصطناعي المتقدمة، حيث تساهم هذه التقنيات في تحسين دقة التشخيص وتسريع عمليات العلاج.</p>

<h2>التشخيص المبكر والدقيق</h2>
<p>تستطيع خوارزميات الذكاء الاصطناعي تحليل الصور الطبية مثل الأشعة السينية والرنين المغناطيسي بدقة تفوق الأطباء البشريين في بعض الحالات. هذا يؤدي إلى:</p>
<ul>
<li>اكتشاف مبكر للأورام السرطانية</li>
<li>تحديد الكسور والإصابات بدقة عالية</li>
<li>تشخيص أمراض العيون والشبكية</li>
</ul>

<h2>العلاج الشخصي</h2>
<p>يمكن للذكاء الاصطناعي تحليل البيانات الجينية والتاريخ الطبي لكل مريض لوضع خطة علاج مخصصة تناسب حالته الفردية.</p>

<h2>اكتشاف الأدوية</h2>
<p>تسرع تقنيات الذكاء الاصطناعي من عملية اكتشاف وتطوير الأدوية الجديدة، مما يقلل الوقت والتكلفة اللازمين لإنتاج علاجات فعالة.</p>';
    }

    private function getMLBasicsContent(): string
    {
        return '<p>تعلم الآلة هو فرع من فروع الذكاء الاصطناعي يمكّن الحاسوب من التعلم والتحسن من التجربة دون برمجة صريحة.</p>

<h2>المفاهيم الأساسية</h2>
<h3>1. البيانات التدريبية</h3>
<p>هي مجموعة البيانات التي يستخدمها النموذج للتعلم وفهم الأنماط.</p>

<h3>2. الخوارزميات</h3>
<p>التعليمات الرياضية التي تحلل البيانات وتبني النموذج:</p>
<ul>
<li>التعلم المراقب (Supervised Learning)</li>
<li>التعلم غير المراقب (Unsupervised Learning)</li>
<li>التعلم المعزز (Reinforcement Learning)</li>
</ul>

<h3>3. التقييم والاختبار</h3>
<p>قياس أداء النموذج على بيانات جديدة لم يرها من قبل.</p>

<h2>التطبيقات العملية</h2>
<p>يستخدم تعلم الآلة في:</p>
<ul>
<li>توصيات المحتوى في منصات التواصل</li>
<li>التعرف على الصوت والكلام</li>
<li>التداول الخوارزمي</li>
<li>السيارات ذاتية القيادة</li>
</ul>';
    }

    private function getChatGPTContent(): string
    {
        return '<p>أحدث ChatGPT ثورة حقيقية في مجال معالجة اللغات الطبيعية، حيث أظهر قدرات مذهلة في فهم وإنتاج النصوص البشرية.</p>

<h2>التقنيات المستخدمة</h2>
<h3>معمارية المحول (Transformer)</h3>
<p>تعتمد ChatGPT على معمارية المحول التي تستخدم آلية الانتباه (Attention Mechanism) لفهم السياق والعلاقات بين الكلمات.</p>

<h3>التدريب المعزز من التفاعل البشري</h3>
<p>تم تدريب النموذج باستخدام تقنية RLHF لتحسين جودة الاستجابات وجعلها أكثر فائدة وأماناً.</p>

<h2>التأثير على الصناعة</h2>
<ul>
<li>تطوير مساعدين ذكيين أكثر تفاعلية</li>
<li>تحسين خدمات الترجمة الآلية</li>
<li>إنتاج المحتوى الإبداعي</li>
<li>التعليم والتدريب الشخصي</li>
</ul>

<h2>التحديات المستقبلية</h2>
<p>رغم النجاح الكبير، هناك تحديات مثل:</p>
<ul>
<li>ضمان دقة المعلومات</li>
<li>تجنب التحيز في الاستجابات</li>
<li>الحفاظ على الخصوصية</li>
</ul>';
    }

    private function getComputerVisionContent(): string
    {
        return '<p>تعتبر الرؤية الحاسوبية العمود الفقري للسيارات ذاتية القيادة، حيث تمكنها من "رؤية" وفهم البيئة المحيطة بها.</p>

<h2>المكونات الأساسية</h2>
<h3>الكاميرات والأجهزة الاستشعار</h3>
<ul>
<li>كاميرات عالية الدقة في زوايا متعددة</li>
<li>أجهزة الليدار (LiDAR) للكشف المسافي</li>
<li>أجهزة الرادار للكشف في الطقس السيء</li>
</ul>

<h3>معالجة الصور في الوقت الفعلي</h3>
<p>تحليل البيانات البصرية لتحديد:</p>
<ul>
<li>السيارات والمشاة والعوائق</li>
<li>إشارات المرور وعلامات الطريق</li>
<li>خطوط الطريق والحدود</li>
</ul>

<h2>خوارزميات التعلم العميق</h2>
<p>تستخدم السيارات شبكات عصبية متقدمة مثل:</p>
<ul>
<li>CNN للتعرف على الأشياء</li>
<li>RNN لتتبع الحركة</li>
<li>Transformer للفهم السياقي</li>
</ul>

<h2>التحديات التقنية</h2>
<ul>
<li>القيادة في ظروف الطقس السيء</li>
<li>التعامل مع السيناريوهات غير المتوقعة</li>
<li>ضمان الأمان بنسبة 100%</li>
</ul>';
    }

    private function getAI2024Content(): string
    {
        return '<p>شهد عام 2024 تطورات مذهلة في مجال الذكاء الاصطناعي، مع ظهور تقنيات جديدة وتحسينات كبيرة على النماذج الموجودة.</p>

<h2>النماذج اللغوية الكبيرة</h2>
<h3>GPT-4 Turbo و Claude 3</h3>
<p>تحسينات كبيرة في:</p>
<ul>
<li>فهم السياق الطويل</li>
<li>دقة الاستجابات</li>
<li>القدرة على التفكير المنطقي</li>
</ul>

<h3>النماذج متعددة الوسائط</h3>
<p>قدرة على معالجة النصوص والصور والصوت معاً في نموذج واحد.</p>

<h2>الذكاء الاصطناعي التوليدي</h2>
<h3>إنتاج الفيديو</h3>
<ul>
<li>Sora من OpenAI</li>
<li>تقنيات إنتاج فيديو عالي الجودة</li>
<li>تطبيقات في الإعلام والترفيه</li>
</ul>

<h3>تصميم البروتينات</h3>
<p>استخدام AI في تصميم بروتينات جديدة للأدوية والعلاجات.</p>

<h2>AI في الحوسبة الكمية</h2>
<p>دمج تقنيات الذكاء الاصطناعي مع الحوسبة الكمية لحل مشاكل معقدة.</p>

<h2>التطبيقات الناشئة</h2>
<ul>
<li>المساعدين الذكيين المتقدمين</li>
<li>التشخيص الطبي الدقيق</li>
<li>التعليم الشخصي المتكيف</li>
<li>إدارة الطاقة الذكية</li>
</ul>';
    }

    private function getTensorFlowContent(): string
    {
        return '<p>في هذا الدليل التطبيقي، سنتعلم كيفية بناء نموذج تصنيف الصور باستخدام TensorFlow وKeras.</p>

<h2>إعداد البيئة</h2>
<pre><code>pip install tensorflow matplotlib numpy
import tensorflow as tf
from tensorflow import keras
import numpy as np
import matplotlib.pyplot as plt</code></pre>

<h2>تحضير البيانات</h2>
<h3>تحميل مجموعة بيانات CIFAR-10</h3>
<pre><code>(x_train, y_train), (x_test, y_test) = keras.datasets.cifar10.load_data()

# تطبيع البيانات
x_train = x_train.astype("float32") / 255.0
x_test = x_test.astype("float32") / 255.0

# تحويل التصنيفات إلى categorical
y_train = keras.utils.to_categorical(y_train, 10)
y_test = keras.utils.to_categorical(y_test, 10)</code></pre>

<h2>بناء النموذج</h2>
<pre><code>model = keras.Sequential([
    keras.layers.Conv2D(32, (3, 3), activation="relu", input_shape=(32, 32, 3)),
    keras.layers.MaxPooling2D((2, 2)),
    keras.layers.Conv2D(64, (3, 3), activation="relu"),
    keras.layers.MaxPooling2D((2, 2)),
    keras.layers.Conv2D(64, (3, 3), activation="relu"),
    keras.layers.Flatten(),
    keras.layers.Dense(64, activation="relu"),
    keras.layers.Dense(10, activation="softmax")
])</code></pre>

<h2>تدريب النموذج</h2>
<pre><code>model.compile(
    optimizer="adam",
    loss="categorical_crossentropy",
    metrics=["accuracy"]
)

history = model.fit(
    x_train, y_train,
    batch_size=32,
    epochs=10,
    validation_data=(x_test, y_test)
)</code></pre>

<h2>تقييم الأداء</h2>
<p>بعد التدريب، يمكننا تقييم دقة النموذج واستخدامه للتنبؤ على صور جديدة.</p>';
    }

    private function getAIEthicsContent(): string
    {
        return '<p>مع التطور السريع لتقنيات الذكاء الاصطناعي، تزداد أهمية مناقشة التحديات الأخلاقية والمسؤولية الاجتماعية.</p>

<h2>التحديات الأخلاقية الرئيسية</h2>
<h3>التحيز والعدالة</h3>
<ul>
<li>تحيز البيانات التدريبية</li>
<li>التمييز في القرارات الآلية</li>
<li>عدم المساواة في الوصول للتقنية</li>
</ul>

<h3>الشفافية والمساءلة</h3>
<ul>
<li>صعوبة فهم قرارات النماذج المعقدة</li>
<li>تحديد المسؤولية عن الأخطاء</li>
<li>الحاجة لتفسير النتائج</li>
</ul>

<h2>الخصوصية وحماية البيانات</h2>
<p>يجب ضمان:</p>
<ul>
<li>حماية البيانات الشخصية</li>
<li>الموافقة المستنيرة للمستخدمين</li>
<li>أمان تخزين ونقل البيانات</li>
</ul>

<h2>التأثير على سوق العمل</h2>
<h3>التحديات</h3>
<ul>
<li>فقدان بعض الوظائف التقليدية</li>
<li>الحاجة لمهارات جديدة</li>
<li>زيادة الفجوة الرقمية</li>
</ul>

<h3>الفرص</h3>
<ul>
<li>خلق وظائف جديدة</li>
<li>تحسين الإنتاجية</li>
<li>تطوير مهارات متقدمة</li>
</ul>

<h2>المبادئ الأخلاقية للذكاء الاصطناعي</h2>
<ol>
<li>العدالة والإنصاف</li>
<li>الشفافية والمساءلة</li>
<li>احترام الخصوصية</li>
<li>الأمان والموثوقية</li>
<li>المسؤولية الاجتماعية</li>
</ol>';
    }
}
