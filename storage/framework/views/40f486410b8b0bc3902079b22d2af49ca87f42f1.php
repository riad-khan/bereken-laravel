<div>
    <!-- slider-area start -->
    <div class="slider-area mb-3 lg:p-0">

        <div class="h-[307px] lg:h-[320px] w-[96vw] md:w-[72vw] lg:w-[720px] relative overflow-hidden rounded-lg"
            x-data="sliderData(slides)" x-init="init()">

            <div x-ref="swiper" class="swiper-container">
                <div class="swiper-wrapper">

                    <?php $__currentLoopData = $highlights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $time;
                            $wpm = 200;
                            $wordCount = str_word_count(strip_tags($item->content));
                            $minutes = (int) floor($wordCount / $wpm);
                            $seconds = (int) floor(($wordCount % $wpm) / ($wpm / 60));
                            
                            if ($minutes === 0) {
                                $time = $seconds . ' sec';
                            } else {
                                $time = $minutes . 'min';
                            }
                            
                            $categories = explode(',', $item->category_name);
                            
                        ?>

                        <a href="/news/<?php echo e($item->slug); ?>-<?php echo e($item->id); ?>">
                        <div class="swiper-slide">
                            <span class="overlay"></span>
                            <img src=<?php echo e(env("STRAPI_URL").$item->thumbnill_image); ?>

                                class="absolute block h-[307px] lg:h-auto w-full flex -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                            <div
                                class="inner-content z-20 grid grid-cols-1 gap-1 sm:gap-4 content-between h-[307px] md:h-80">
                                <div class="post-date text-xs font-semibold text-white flex flex-row items-center">
                                    <?php echo e(date('F d, Y', strtotime($item->created_at))); ?> <svg class="ml-2 mr-1"
                                        width="10" height="10" viewBox="0 0 10 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5 9C7.20914 9 9 7.20914 9 5C9 2.79086 7.20914 1 5 1C2.79086 1 1 2.79086 1 5C1 7.20914 2.79086 9 5 9ZM5.5 3C5.5 2.72386 5.27614 2.5 5 2.5C4.72386 2.5 4.5 2.72386 4.5 3V5C4.5 5.13261 4.55268 5.25979 4.64645 5.35355L6.06066 6.76777C6.25592 6.96303 6.5725 6.96303 6.76777 6.76777C6.96303 6.5725 6.96303 6.25592 6.76777 6.06066L5.5 4.79289V3Z"
                                            fill="white" />
                                    </svg>Read: <?php echo e($time); ?>

                                </div>


                                <div class="bottom-content text-left flex flex-col">
                                    <h2
                                        class="text-2xl ms:text-[32px] font-bold text-white w-[290px] sm:w-[488px] leading-9 mb-3">
                                        <?php echo e($item->title); ?></h2>
                                    <div class="news-tags">
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="#"><span
                                                    class="w-fit bg-[#EBF1FF] text-[#0051FF] text-xs font-semibold mt-2 px-2.5 py-2 rounded "><?php echo e($tag); ?></span></a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                </div>

                <div class="swiper-pagination"></div>
                <!-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->

            </div>
        </div>

    </div>
    <!-- slider-area end -->
</div>
<?php /**PATH /home/riad/Documents/bereken-laravel/resources/views/livewire/components/news/highlights.blade.php ENDPATH**/ ?>