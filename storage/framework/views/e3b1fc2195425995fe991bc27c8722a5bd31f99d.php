  <!-- services Start -->

  <?php
          $calculator_list_sql = 'select 
                        a.id,
                        a.calculator_name,
                        a.link,
                        c.url as icon
                        from calculator_lists a 
                        left join files_related_morphs b on (b.related_id = a.id and b.field = "calculator_icon")
                        left join files c on c.id = b.file_id
                        where a.show_home_page = 1';
         $lists = DB::select($calculator_list_sql);

  ?>

  <div class="services-area w-full py-8">
    <div class="sm:grid-cols-1 gap-2 grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-2">

        <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
       
        <div>
                <a class="service-btn flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow  w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                href="<?php echo e($item->link); ?>"><img src="<?php echo e(env('STRAPI_URL') . $item->icon); ?>" class="mr-3 h-10 w-10" alt="icon">
                <?php echo e($item->calculator_name); ?></a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
<!-- services End --><?php /**PATH C:\Users\riadk\Documents\bereken-laravel\resources\views/livewire/components/service.blade.php ENDPATH**/ ?>