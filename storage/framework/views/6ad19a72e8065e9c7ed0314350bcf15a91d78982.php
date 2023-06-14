<div>
    <div class="cal-options mb-3 border rounded-2xl border-[#F5F8FF]">
        <h3
            class="px-5 py-4  text-[#2B313B] mx-auto md:text-base lg:text-2xl text-2xl font-semibold">
            Featured Calculators</h3>
       
       
      
      <?php $__currentLoopData = $featured_Calculators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
     <?php
         $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $row->calculator_name);
     ?>
       

     
        <a href="/<?php echo e(strtolower($slug)); ?>"
            class="flex px-3 items-center bg-white transition-all opacity-100 rounded-b-2xl px-5 py-4 border-t border-[#F5F8FF] hover:opacity-90 service-btn">
            <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full"
                src="<?php echo e(asset('/frontend/assets/img/icons/saving-investing.svg')); ?>" alt="icon" />
            <div
                class="ml-3 text-sm sm:text-xs w-auto w-10/12 md:inline-block lg:text-base font-semibold">
                <?php echo e($row->calculator_name); ?></div>
        </a>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\saleh\OneDrive\Desktop\Hassn Vai\Breken.nl\New-Design\bereken-laravel\resources\views/livewire/components/vats/featured-calculators.blade.php ENDPATH**/ ?>