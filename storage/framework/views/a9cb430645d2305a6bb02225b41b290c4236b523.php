<?php
   // $seo_data = DB::table('seo_data_tables')->where('page','=','News')->get();
?>

<?php
    $tag = explode(',', $details[0]->tag);
?>
<?php $__env->startSection('meta'); ?>
    
<?php $__env->stopSection(); ?>
<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 md:pb-4 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <!-- <div class="section-title text-center ">
                <h1 class="text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">News Details</h1>
            </div> -->
            <nav class="flex justify-start" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="inline-flex items-center text-sm font-semibold  text-[#C5C9D2] hover:text-gray-900">Home</a>
                    </li>
                    <li>
                        <div class="flex items-center"><span class="text-[#D3D7DE] font-normal text-xs"> <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.56341 13.2364C6.21194 12.8849 6.21194 12.3151 6.56341 11.9636L9.52701 9L6.56341 6.0364C6.21194 5.68492 6.21194 5.11508 6.56341 4.7636C6.91488 4.41213 7.48473 4.41213 7.8362 4.7636L11.4362 8.3636C11.7877 8.71508 11.7877 9.28492 11.4362 9.6364L7.8362 13.2364C7.48473 13.5879 6.91488 13.5879 6.56341 13.2364Z" fill="#C4C9D1"/>
</svg>
 </span><a
                                href="/news"
                                class="ml-1 text-sm font-semibold text-[#C5C9D2] hover:text-gray-900 md:ml-2">News</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center"><span class="text-[#D3D7DE] font-normal text-xs"> <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.56341 13.2364C6.21194 12.8849 6.21194 12.3151 6.56341 11.9636L9.52701 9L6.56341 6.0364C6.21194 5.68492 6.21194 5.11508 6.56341 4.7636C6.91488 4.41213 7.48473 4.41213 7.8362 4.7636L11.4362 8.3636C11.7877 8.71508 11.7877 9.28492 11.4362 9.6364L7.8362 13.2364C7.48473 13.5879 6.91488 13.5879 6.56341 13.2364Z" fill="#C4C9D1"/>
</svg>
 </span><span
                                class="ml-1 text-sm font-semibold text-[#1E3062] md:ml-2"><?php echo e($details[0]->slug); ?></span>
                        </div>
                    </li>
                </ol>
            </nav>        
        </div>
        <!-- container end -->
    </section>

    <!-- page-layout-start -->

    <section class="content-area">
        <div class="container mx-auto max-w-screen-xl flex-none md:flex md:flex-row">
            <!-- container start -->
            <div class="main-area basis-full p-2 md:p-0 md:basis-8/12">
                <!-- left-side-area start -->
                <div class="main-inner p-5 border border-[#F5F8FF] rounded-2xl">

                    <div class="post-detail">
                        <h1 class="font-semibold text-[32px] text-[#2B313B] leading-none mb-6"><?php echo e($details[0]->title); ?>

                        </h1>
                        <div class="post-info flex justify-between">
                            <span class="publish-date-time  text-[#2B313B] font-normal text-xs">Jul 25, 2022 • Read: 5
                                min</span>

                            <span class="social-shear flex items-center">
                                <p class="text-[#2B313B] font-normal text-xs hidden md:inline">Share this Article </p>
                                <ul class="flex flex-row justify-end">
                                    <li class="flex ml-2"> <a href="#" class=" ml-2"><span class="flex relative">
                                                <span
                                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                                    class=" h-5 w-5"
                                                    src="<?php echo e(asset('frontend/assets/img/social/facebook.svg')); ?>"
                                                    alt=""> </span></a></li>
                                    <li class="flex ml-2"><a href="#" class=" ml-2"><img
                                                class="blob infinity rounded-full h-5 w-5"
                                                src="<?php echo e(asset('frontend/assets/img/social/twitter.svg')); ?>"
                                                alt=""> </a></li>
                                    <li class="flex ml-2"> <a href="#" class=" ml-2"><span class="flex relative">
                                                <span
                                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                                    class="h-5 w-5"
                                                    src="<?php echo e(asset('frontend/assets/img/social/instagram.svg')); ?>"
                                                    alt=""></span> </a></li>
                                    <li class="flex ml-2"><a href="#" class=" ml-2"><img
                                                class="blob infinity rounded-full h-5 w-5"
                                                src="<?php echo e(asset('frontend/assets/img/social/youtube.svg')); ?>"
                                                alt=""> </a></li>
                                </ul>
                            </span>
                        </div>
                        
                        <div class="post-img-area mb-3">
                            <div class="bottom-content text-left flex flex-col">
                                <div class="h-[230px] sm:h-[360px]">
                                <img class="rounded-lg object-cover w-full h-full mb-0" src="<?php echo e(env('STRAPI_URL').$details[0]->thumbnill_image); ?>" alt="image">
                                </div>
                                <div class="news-tags">
                                    <a href="#">
                                        <span class="w-fit bg-[#EBF1FF] text-[#0051FF] text-xs font-semibold mt-2 px-2.5 py-2 rounded ">BMI</span>
                                    </a>
                                    <a href="#"><span class="w-fit bg-[#EBF1FF] text-[#0051FF] text-xs font-semibold mt-2 px-2.5 py-2 rounded ">VAT</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                         <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6">
                            <?php echo e($details[0]->short_description); ?></p>
                    </div>
                    <div class="info-area py-4">
                        <!-- info area start -->
                        <div class="single-info">
                            <?php echo html_entity_decode($details[0]->content); ?>

                        </div>
                    </div> <!-- info area end -->
                </div> <!-- main-inner-area end -->
            </div>
            <!-- left-side-area end -->
            <!-- right-side-area-start -->
            <div class="side-bar basis-full md:basis-4/12">
                <div class="inner-area ml-1 lg:ml-4 p-2 md:p-0">


                    <div class="faq mb-3 border rounded-2xl border-[#F5F8FF]">
                        <div class="flex justify-center items-start px-3">
                            <div class="w-full">
                               <?php echo html_entity_decode($details[0]->table_of_contents); ?>

                            </div>
                        </div>

                    </div>

                    <div class="articles mb-3 border rounded-2xl border-[#F5F8FF]">
                        <h3
                            class="px-5 py-4  text-[#2B313B] mx-auto md:text-base lg:text-2xl text-2xl font-semibold">
                            Related Articles</h3>
                     
                       <?php $__currentLoopData = $recents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                       
                       
                        <a href="/news/<?php echo e($item->slug); ?>-<?php echo e($item->id); ?>"
                            class="flex px-3 items-center transition-all opacity-100 rounded-b-2xl border-t border-[#F5F8FF] hover:opacity-90 bg-white pl-5 pr-2.5 py-4">
                            <span class="fixed-size w-[60px] overflow-hidden h-[46px] sm:w-[54px] sm:h-10 lg:w-[60px] lg:h-[46px] rounded-md w-full">
                            <img class="object-cover w-full h-full mb-0"
                                src="<?php echo e(env('STRAPI_URL').$item->thumbnill_image); ?>" alt="icon" />
                            </span>
                            <div
                                class="ml-3 text-[#2B313B] text-sm leading-5 sm:text-base lg:text-base w-10/12 inline-block font-semibold">
                               <?php echo e($item->title); ?>

                            </div>
                        </a>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div
                            class="px-3 items-center bg-white transition-all opacity-100 border-b border-[#F5F8FF] hover:opacity-90  py-4 my-2 text-center">
                            <a href="/news"
                                class="shadow-btn arrow-white inline-flex text-[10px] font-semibold text-center text-[#0052FE]  hover:text-white ">
                                Read Details <img src="<?php echo e(asset('frontend/assets/img/icons/arrow-right-blue.svg')); ?>" class="ml-2"
                                    alt="arrow-icon">
                            </a>
                        </div>
                    </div>

                    <div class="faq mb-3 border rounded-2xl border-[#F5F8FF]">
                        <h3
                            class="px-5 py-4  text-[#2B313B] mx-auto md:text-base lg:text-2xl text-2xl font-semibold">
                            Tags</h3>



                        <div class="tags">

                            <?php $__currentLoopData = $tag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="#"
                                    class="bg-[#F5F8FF] transition-all hover:bg-blue-200 text-[#2B313B] text-xs font-semibold my-2 inline-flex mx-2 px-3 py-1 rounded-2xl"><?php echo e($item); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="faq mb-3 py-2">                     

                        <a href="/bmi-calculator" class="flex bg-[#1E3062] opacity-100 hover:opacity-90 transition text-white text-xl font-normal  rounded-lg py-4 px-4 my-6"><span class=" w-full flex items-center justify-between"><span>Check your BMI</span> <img src="<?php echo e(asset('/frontend/assets/img/icons/arrow-white.svg')); ?>" class="ml-2 h-2 w-2" alt="icon"></span></a>

                    </div>

                </div>
            </div>
            <!-- right-side-area-end -->
        </div><!-- container end -->
    </section>

    <script>
    // accordion start
    document.addEventListener('alpine:init', () => {
        Alpine.store('accordion', {
            tab: 0
        });

        Alpine.data('accordion', (idx) => ({
            init() {
                this.idx = idx;
            },
            idx: -1,
            handleClick() {
                this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
                return this.$store.accordion.tab === this.idx ? 'rotate-0' : '';
            },
            handleToggle() {
                return this.$store.accordion.tab === this.idx ?
                    `max-height: ${this.$refs.tab.scrollHeight}px` : '';
            }
        }));
    })
</script>
</div>
<?php /**PATH C:\Users\saleh\OneDrive\Desktop\Hassn Vai\Breken.nl\New-Design\bereken-laravel\resources\views/livewire/news/news-details.blade.php ENDPATH**/ ?>