<?php
    $seo_data_sql = 'select a.id,a.page_title,c.id as component_id,
                    c.meta_title,
                    c.meta_description,
                    c.keywords,
                    c.meta_robots,
                    c.structured_data,
                    c.meta_viewport,
                    c.canonical_url from page_seos a
                    left join page_seos_components b on (b.entity_id = a.id and b.field="page_seo" )
                    left join components_shared_seos c on c.id = b.component_id
                    where a.select_page_type="News"
                    order by a.id ASC limit 1';
    $seo_data = DB::select($seo_data_sql);
    
    $seo_social_sql = 'select a.social_network,a.title,a.description,d.url
from components_shared_meta_socials a
    left join components_shared_seos_components b on b.component_id = a.id
    left join files_related_morphs c on (c.related_id = b.entity_id and c.field="metaImage")
    left join files d on d.id = c.file_id
    where b.entity_id = ?';
    
    $seo_social = DB::select($seo_social_sql, [$seo_data[0]->component_id]);
    
?>
<?php $__env->startSection('meta'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo e($seo_data[0]->meta_title); ?> </title>
    <meta name="description" content="<?php echo e($seo_data[0]->meta_description); ?>">
    <meta name="keywords" content="<?php echo e($seo_data[0]->keywords); ?>">

    <?php $__currentLoopData = $seo_social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_meta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($social_meta->social_network == 'Facebook'): ?>
            <meta property="og:title" content="<?php echo e($social_meta->title); ?>">
            <meta property="og:description" content="<?php echo e($social_meta->description); ?>">
            <meta property="og:image" content="<?php echo e(env('STRAPI_URL') . $social_meta->url); ?>">
            
        <?php else: ?>
            <meta name="twitter:card" content="<?php echo e($social_meta->description); ?>">
            <meta name="twitter:title" content="<?php echo e($social_meta->title); ?>">
            <meta name="twitter:description" content="<?php echo e($social_meta->description); ?>">
            <meta name="twitter:image" content="<?php echo e(env('STRAPI_URL') . $social_meta->url); ?>">
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <link rel="canonical" href="<?php echo e($seo_data[0]->canonical_url); ?>">

    <script>
        <?php echo html_entity_decode($seo_data[0]->structured_data); ?>

    </script>
<?php $__env->stopSection(); ?>
<div>


    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="section-title text-center ">
                <h1 class="text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">News</h1>
            </div>
        </div>
        <!-- container end -->
    </section>


    <section class="content-area mb-6">
        <div class="container mx-auto max-w-screen-xl flex-none md:flex md:flex-row">
            <!-- container start -->
            <div class="main-area basis-full p-2 md:p-3 lg:p-0 md:basis-8/12">
                <!-- left-side-area start -->

                <span class="flex flex-col sm:flex-row justify-between mb-5 items-center">
                    <h3 class="mb-2 md:mb-0 text-2xl basis-full sm:basis-1/2 font-semibold">Highlights</h3>


                    <div class="no-label w-full sm:w-52">
                        <div class="select" id="news">
                            <div class="selectBtn" data-type="firstOption">All News</div>
                            <div class="selectDropdown">
                                <div class="option" data-type="firstOption">All News</div>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="option" data-type="secondOption" onclick="Redirect(this)"
                                        data-url="<?php echo e('/news/' . $item->slug . '/' . $item->id . ''); ?>">
                                        <?php echo e($item->category_name); ?>

                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>


                    <div class="block md:hidden search-bar my-3 w-full">
                        <form action="<?php echo e(url('/search-news-submit')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="relative single-field-wrapper">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <button type="submit">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <input type="text" id="default-search"
                                    class="rounded-lg bg-white border border-[#A4BCE6] text-[#6C7A93] font-normal text-xs focus:ring-[#3b82f6] focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-3.5 pl-10"
                                    placeholder="Search Articles" name="search" required>
                            </div>
                        </form>

                    </div>

                </span>

                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.news.highlights', ['category' => 'all'])->html();
} elseif ($_instance->childHasBeenRendered('l2366132802-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2366132802-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2366132802-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2366132802-0');
} else {
    $response = \Livewire\Livewire::mount('components.news.highlights', ['category' => 'all']);
    $html = $response->html();
    $_instance->logRenderedChild('l2366132802-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.news.other-news', ['category' => 'all'])->html();
} elseif ($_instance->childHasBeenRendered('l2366132802-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2366132802-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2366132802-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2366132802-1');
} else {
    $response = \Livewire\Livewire::mount('components.news.other-news', ['category' => 'all']);
    $html = $response->html();
    $_instance->logRenderedChild('l2366132802-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
            <!-- left-side-area end -->
            <!-- right-side-area-start -->
            <div class="side-bar basis-full md:basis-4/12">
                <div class="inner-area ml-1 lg:ml-4 p-2 md:p-0">

                    <div class="hidden md:block  search-bar mb-3">
                        <form action="<?php echo e(url('/search-news-submit')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="relative single-field-wrapper">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <button type="submit">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                                <input type="text" id="default-search"
                                    class="rounded-md bg-white border border-[#A4BCE6] text-[#6C7A93] font-normal text-xs focus:ring-[#3b82f6] focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-3 pl-10"
                                    placeholder="Search Articles" name="search" required>
                            </div>
                        </form>

                    </div>
                    <div class="adds-area p-4 flex flex-col bg-[#F5F8FF] rounded-lg mb-3">
                        <img src="<?php echo e(asset('frontend/assets/img/compare-img.svg')); ?>" alt="image">
                        <h3 class="text-2xl text-[#2B313B] font-bold my-2">Compare your insurance</h3>
                        <p class="text-[#6C7A93] font-normal mb-2 text-sm">Save an average of € 259 per year on your car
                            insurance?</p>
                        <a href="/compares"
                            class="p-4 text-center outline-btn btn-translate-z bg-[#0052FE] opacity-100 hover:opacity-90 transition text-white text-xs font-bold rounded-md">Get
                            it Now</a>
                    </div>

                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.news.hot-article', ['category' => 'all'])->html();
} elseif ($_instance->childHasBeenRendered('l2366132802-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l2366132802-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2366132802-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2366132802-2');
} else {
    $response = \Livewire\Livewire::mount('components.news.hot-article', ['category' => 'all']);
    $html = $response->html();
    $_instance->logRenderedChild('l2366132802-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                </div>
            </div>
            <!-- right-side-area-end -->

        </div><!-- container end -->
    </section>

    <section class="more-article-section">
        <div class="container mx-auto max-w-screen-xl p-2 md:p-0">
            <h3 class="mb-3 text-2xl font-semibold">More Articles</h3>
            <ul class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-4">



                <?php $__currentLoopData = $moreNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="/news/<?php echo e($item->slug); ?>-<?php echo e($item->id); ?>"
                            class="flex  mb-3 p-2 flex-col transition-all hover:bg-[#EBF1FF] border border-[#EBF1FF] hover:border-[#EBF1FF] rounded-lg hover:shadow md:flex-col  bg-white">
                            <img class="object-cover w-full rounded-t-lg h-auto md:rounded-none md:rounded-l-lg"
                                src="<?php echo e($item->thumbnill_image); ?>" alt="image">

                            <div class="flex flex-col justify-between px-2 leading-normal">
                                <h5 class="mb-2 text-base font-semibold tracking-tight text-[#2B313B]">
                                    <?php echo e($item->title); ?></h5>
                                <p class="mb-3 font-normal text-xs text-[#6C7A93]">BMI is an internationally
                                    used
                                    that...</p>
                                <span class="publish-date-time  text-[#2B313B] font-normal text-xs">Jul 25, 2022 •
                                    Read:
                                    5
                                    min</span>

                                <span
                                    class="w-fit bg-[#EBF1FF] text-[#0051FF] text-xs font-semibold mt-2 px-2.5 py-2 rounded ">Health
                                    insurance</span>
                            </div>
                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </ul>
            <?php echo e($moreNews->links('livewire.includes.pagination-links')); ?>


        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        function test() {
            console.log('ok');
        }
    </script>
    <script>
        window.slides = []
        sliderData = function(slides) {
            return {
                title: "Swiper Slider",
                mySwiper: {},
                slideIndex: 0,
                slides: [],

                init() {

                    this.slides = slides.map((slide, index) => {
                        slide.id = index + Date.now();
                        return slide;
                    });

                    console.log(this.slides);

                    this.initSwiper();
                },
                initSwiper() {
                    const autoplay = 4500;

                    this.mySwiper = new Swiper(".swiper-container", {
                        init: false,
                        autoplay: {
                            delay: autoplay,
                            disableOnInteraction: false
                        },
                        loop: true,
                        keyboard: {
                            enabled: true
                        },
                        effect: "fade",
                        grabCursor: true,
                        centeredSlides: true,
                        slidesPerView: "auto",
                        watchSlidesProgress: true,
                        preloadImages: false,
                        // Enable lazy loading
                        lazy: {
                            loadPrevNextAmount: 3,
                            loadOnTransitionStart: true
                        },
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true
                        },
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev"
                        }
                    });



                    // wait for alpine finishing the DOM manipulation
                    this.$nextTick(() => {
                        this.mySwiper.init();
                        // slides are ready, rerender the slider
                        this.mySwiper.update();
                    });
                }
            };
        };

        function Redirect(val) {
            let link = val.getAttribute('data-url')
            location.href = link;
        }
    </script>



</div>
<?php /**PATH /home/riad/Documents/bereken-laravel/resources/views/livewire/news/news.blade.php ENDPATH**/ ?>