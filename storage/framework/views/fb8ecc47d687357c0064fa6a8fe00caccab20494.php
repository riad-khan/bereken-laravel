<div>
    <section class="slider-c bg-white p-4 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <div class="sec-title flex items-center justify-between">
                <h3 class="mb-3 text-2xl font-semibold">Latest News</h3>
                <a href="/news" class="shadow-btn arrow-white  h-fit inline-flex items-center text-[10px] font-semibold text-center text-[#0052FE]  hover:text-white">
                    View More <img src="<?php echo e(asset('/frontend/assets/img/icons/arrow-right-blue.svg')); ?>" class="ml-2" alt="arrow-icon">
                </a>
            </div>
            
            <div class="center">
                
                <?php $__currentLoopData = $lattest_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
               
                <div class="items">
                    <a href="/news/<?php echo e($row->slug); ?>-<?php echo e($row->id); ?>" class="flex  mb-3 p-2 flex-col transition-all hover:bg-[#EBF1FF] border border-[#EBF1FF] hover:border-[#EBF1FF] rounded-lg hover:shadow md:flex-col  bg-white">
                        <img class="object-cover rounded-t-lg h-52 h-40 md:rounded-md" src="<?php echo e(env('STRAPI_URL') . $row->thumbnill_image); ?>" alt="image">

                        <div class="flex flex-col justify-between px-2 leading-normal">
                            <h5 class="mb-2 text-base font-semibold tracking-tight text-[#2B313B]"><?php echo e($row->title); ?></h5>
                            <p class="mb-3 font-normal text-xs text-[#6C7A93]"><?php echo e(Str::limit($row->short_description,50)); ?></p>
                            <span class="publish-date-time  text-[#2B313B] font-normal text-xs">Jul 25, 2022 • Read: 5
                                min</span>

                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>              

        </div>
        <!-- container end -->
    </section>
</div>
<?php /**PATH C:\Users\saleh\OneDrive\Desktop\Hassn Vai\Breken.nl\New-Design\bereken-laravel\resources\views/livewire/components/news-slider/news-slider.blade.php ENDPATH**/ ?>