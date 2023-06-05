<div>
    <!-- Accurate & Strategic - start -->
    <section class="bg-white w-full p-4 md:p-12">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="section-title text-center ">
                <h2 class="text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-16  sm:pt-4">Accurate & Strategic</h2>
            </div>
            <div class="grid gap-2 grid-cols-1 sm:gap-4 sm:grid-cols-2">
              
               <?php $__currentLoopData = $strategies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
              
              
                <div class="content text-center sm:text-left flex-none sm:flex sm:justify-center sm:items-center">
                    <div class="img-box w-full sm:w-auto">
                        <img src="<?php echo e(url($row->images)); ?>" class="mx-auto sm:mx-0" alt="image">
                    </div>
                    <div class="text-content text-center sm:text-left">
                        <h3 class="text-2xl sm:text-xl lg:text-2xl font-semibold mb-2 text-[#2B313B]"><?php echo e($row->title); ?></h3>
                        <p class="text-sm font-normal text-[#6C7A93] mx-auto sm:mx-0 w-52"><?php echo e($row->short_description); ?></p>
                    </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div> <!-- container end -->
    </section>
    <!-- Accurate & Strategic - end -->

    <?php
        $stars = round($reviews[0]->ratings / 2);
        $rates = '';
        for($i = 1; $i <= 5; $i++){
            
              if($i <= $stars){
                $rates .= '<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Fourth star</title>
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>';
              }else{
                $rates .='<svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Fifth star</title>
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>';
              }
          
        }
    ?>

    <!-- review area - start -->
    <?php if($reviews[0]->active_status == 1): ?>
    <section class="bg-[#112954] w-full p-4 md:p-12">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="review-area flex flex-col p-4 md:p-0 md:flex-row justify-around items-center">
                <div class="rating text-left md:text-center w-full md:w-72">
                    <div class="top-part text-left md:text-center">
                        <span class="text-7xl font-bold text-white"><?php echo e($reviews[0]->ratings); ?></span><span
                            class="text-[#A4BCE6] text-[32px] font-bold">/10</span>
                       <div class="flex justify-start md:justify-center text-left md:items-center">
                        <?php echo html_entity_decode($rates); ?>

                       </div>
                    </div>
                    <p class="font-normal my-6 md:my-0 text-sm text-white">Based on 397,508 customer reviews</p>
                </div>
                <div class="review-text w-full md:w-6/12">
                    <h4 class="font-bold text-2xl text-white"><?php echo e($reviews[0]->review_title); ?>

                    </h4>
                    <p class="text-white text-sm font-normal my-4"><?php echo e($reviews[0]->short_description); ?>.</p>
                    <a href=""
                        class="shadow-btn
                     mt-4 flex items-center font-semibold text-xs text-white hover:text-[#A4BCE6] transition">Customer
                        Review <svg width="10" height="6" viewBox="0 0 10 6" class="ml-2 w-[10px] h-[6px] fill-white hover:fill-[#A4BCE6]" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.37593 0.175736C6.61025 -0.0585786 6.99015 -0.0585787 7.22446 0.175736L9.62446 2.57574C9.85878 2.81005 9.85878 3.18995 9.62446 3.42426L7.22446 5.82426C6.99015 6.05858 6.61025 6.05858 6.37593 5.82426C6.14162 5.58995 6.14162 5.21005 6.37593 4.97574L7.75167 3.6L0.800196 3.6C0.468825 3.6 0.200195 3.33137 0.200195 3C0.200195 2.66863 0.468825 2.4 0.800196 2.4L7.75167 2.4L6.37593 1.02426C6.14162 0.78995 6.14162 0.410051 6.37593 0.175736Z" fill="currentColor"/>
</svg>
</a>
                </div>
            </div>
        </div> <!-- container end -->
    </section>
    <?php endif; ?>
    <!-- review area - start -->
</div>
<?php /**PATH C:\Users\riadk\Documents\mftp_zip_2023_06_04_22_19_54\resources\views/livewire/components/review-strategy.blade.php ENDPATH**/ ?>