<section class="bg-white w-full p-4 md:p-12">
    <div class="container mx-auto max-w-screen-xl">
        <!-- container start -->
        <div class="section-title text-center ">
            <h2 class="text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-16  sm:pt-4">Popular Calculator</h2>
        </div>
        <div class="calculator-option">
            <div class="grid-cols-2 gap-1 grid md:grid-cols-3 lg:grid-cols-4 md:gap-x-[93px] md:gap-4">
             
                <?php $__currentLoopData = $calculators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="cal-box flex-none sm:flex items-start bg-white p-[0.813rem] border border-[#F5F8FF] rounded-md">
                    <img class="blob w-8 h-8 w-full mb-3 sm:mb-0 sm:w-auto rounded-full"
                        src="<?php echo e($item->icon); ?>" alt="icon" />
                    <div class="sm:ml-3 text-sm font-normal">
                        <div class="mb-2 text-base font-semibold leading-5 mt-[-2px] w-32"><?php echo e($item->calculator_name); ?></div>
                        <a href="<?php echo e($item->link); ?>"
                            class="inline-flex text-[10px] font-semibold transition-all translate-x-0 hover:translate-x-2 text-center text-[#0052FE] hover:text-blue-700">
                            Check it <img src="<?php echo e(asset('frontend/assets/img/icons/arrow-right-blue.svg')); ?>" class="ml-2" alt="arrow-icon">
                        </a>
                    </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </div>
            <div class="btn-area flex justify-center">
                <a href="/calculations"
                    class="btn-translate-z bg-[#112954] opacity-100 hover:opacity-90 transition text-white flex text-xs font-semibold text-center justify-center items-center rounded py-[10px] px-[20px] my-6"><span class="flex items-center"> View More <img src="<?php echo e(asset('frontend/assets/img/icons/arrow-white.svg')); ?>" class="ml-2 h-2 w-2 float-right" class="ml-2"
                        alt="icon"></span></a>
            </div>
        </div>
    </div><!-- container end -->
</section>
<?php /**PATH /home/dh_ag462h/bereken.webonedevs.com/resources/views/livewire/components/populer-calculator.blade.php ENDPATH**/ ?>