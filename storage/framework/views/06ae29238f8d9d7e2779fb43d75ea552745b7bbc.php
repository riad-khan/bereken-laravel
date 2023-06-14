<?php if($calculators[0]->status == 1): ?>
<section class="bg-white w-full p-4 md:p-12">
    <div class="container mx-auto max-w-screen-xl">
        <!-- container start -->
        <div class="section-title text-center ">
            <h2 class="text-[32px] font-bold text-[#1E3062] p-4 sm:pb-16  sm:pt-4"><?php echo e($calculators[0]->section_title); ?></h2>
        </div>
        <div class="calculator-option">
            <div class="grid-cols-2 gap-5 grid md:grid-cols-3 lg:grid-cols-4 md:gap-x-[93px] md:gap-4">
                
                <?php
                    $populer_calculator_sql = 'select 
                        b.id,
                        b.calculator_name,
                        b.link,
                        d.url as icon
                        from populer_calculators_calculator_lists_links a 
                        left join calculator_lists b on b.id = a.calculator_list_id
                        left join files_related_morphs c on (c.related_id = b.id and c.field="calculator_icon")
                        left join files d on d.id = c.file_id';

                        $populer_calculators = DB::select($populer_calculator_sql)

                ?> 


                <?php $__currentLoopData = $populer_calculators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="cal-box flex-none sm:flex items-start bg-white px-3 py-5 border-2 border-[#F5F8FF] rounded-lg">
                    <img class="blob w-8 h-8 w-full mb-3 sm:mb-0 sm:w-auto rounded-full"
                        src="<?php echo e(env('STRAPI_URL') . $item->icon); ?>" alt="icon" />
                    <div class="sm:ml-3 text-sm font-normal">
                        <div class="mb-2 text-base text-[#2B3E6F] font-semibold leading-5 mt-[-2px] w-32"><?php echo e($item->calculator_name); ?></div>
                        <a href="<?php echo e($item->link); ?>"
                            class="inline-flex text-[10px] font-semibold transition-all translate-x-0 hover:translate-x-2 text-center text-[#0052FE] hover:text-blue-700">
                            Check it <img src="<?php echo e(asset('frontend/assets/img/icons/arrow-right-blue.svg')); ?>" class="ml-2" alt="arrow-icon">
                        </a>
                    </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </div>
            <div class="btn-area flex justify-center">
                <a href="<?php echo e($url); ?>"
                    class="btn-translate-z bg-[#112954] opacity-100 hover:opacity-90 transition text-white flex text-xs font-semibold text-center justify-center items-center rounded py-[10px] px-[20px] my-6"><span class="flex items-center"> <?php echo e($text); ?> <img src="<?php echo e(asset('frontend/assets/img/icons/arrow-white.svg')); ?>" class="ml-2 h-2 w-2 float-right" class="ml-2"
                        alt="icon"></span></a>
            </div>
        </div>
    </div><!-- container end -->
</section>

<?php else: ?> 
    <p></p>

<?php endif; ?>
<?php /**PATH C:\Users\saleh\OneDrive\Desktop\Hassn Vai\Breken.nl\New-Design\bereken-laravel\resources\views/livewire/components/populer-calculator.blade.php ENDPATH**/ ?>