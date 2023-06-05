<div>
    <div class="articles mb-3 border-l border-t rounded-t-2xl border-r border-[#F5F8FF]">
        <h3
        
            class="mx-3 py-5 border-t border-b border-[#F5F8FF] mx-auto md:text-base lg:text-2xl text-2xl font-semibold">
            Related Articles</h3>

           <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
           

        <a href="/news-details/<?php echo e($item->slug); ?>-<?php echo e($item->id); ?>"
            class="flex px-3 items-center transition-all opacity-100 border-b border-[#F5F8FF] hover:opacity-90 bg-white py-2.5 my-2">
           <span class="fixed-size w-[60px] overflow-hidden h-[46px] sm:w-[54px] sm:h-10 lg:w-[60px] lg:h-[46px] rounded-md w-full">
            <img class="object-cover w-full h-full mb-0"
                src="<?php echo e(url($item->banner_image)); ?>" alt="icon" />
                </span>
            <div
                class="ml-3 text-base text-sm leading-5 sm:text-base lg:text-base w-10/12 inline-block font-semibold">
                Clear, transparent and affordable for more than 20y
            </div>
        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        
        <div class="px-3 items-center bg-white transition-all  py-4 my-2 text-center">
            <a href="#"
                class="shadow-btn arrow-white inline-flex text-xs font-semibold text-center text-[#0052FE]  hover:text-white ">
                Read Details <img src="<?php echo e(asset('frontend/assets/img/icons/arrow-right-blue.svg')); ?>" class="ml-2"
                    alt="arrow-icon">
            </a>
        </div>
    </div>
</div>
<?php /**PATH /home/dh_ag462h/bereken.webonedevs.com/resources/views/livewire/components/b-m-i/related-articles.blade.php ENDPATH**/ ?>