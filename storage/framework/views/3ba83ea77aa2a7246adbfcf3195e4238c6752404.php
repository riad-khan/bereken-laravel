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

  <div class="services-area w-full py-4 md:py-8 home">
    <div class="gap-2 grid grid-cols-3 mb-4 md:mb-8">

        <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
       
        <div>
                <a class="service-btn flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white my-2 text-[#253F73] w-full lg:w-[340px] text-sm text-center md:text-left md:text-base font-semibold p-6 rounded-lg hover:text-[#135FFF]"
                href="<?php echo e($item->link); ?>"><img src="<?php echo e(env('STRAPI_URL') . $item->icon); ?>" class="mr-0 mb-0 md:mr-6 h-12 w-12" alt="icon">
                <?php echo e($item->calculator_name); ?></a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
    </div>
    <div class="btn-area text-center mx-auto inline-flex justify-center w-full">
      <a href="" class="group font-bold text-sm text-white bg-[#1E3062] transition hover:bg-[#135FFF] rounded-xl px-6 py-4 flex items-center">Bekijk alle producten <svg class="translate-y-0 transition group-hover:translate-y-1 ml-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M13.3656 8.23432C13.678 8.54674 13.678 9.05327 13.3656 9.36569L8.56559 14.1657C8.25317 14.4781 7.74664 14.4781 7.43422 14.1657L2.63422 9.36569C2.3218 9.05327 2.3218 8.54674 2.63422 8.23432C2.94664 7.9219 3.45317 7.9219 3.76559 8.23432L7.1999 11.6686V2.40001C7.1999 1.95818 7.55808 1.60001 7.9999 1.60001C8.44173 1.60001 8.7999 1.95818 8.7999 2.40001L8.7999 11.6686L12.2342 8.23432C12.5466 7.9219 13.0532 7.9219 13.3656 8.23432Z" fill="white"/>
</svg>
</a>
    </div>
</div>
<!-- services End --><?php /**PATH C:\Users\saleh\OneDrive\Desktop\Hassn Vai\Breken.nl\New-Design\bereken-laravel\resources\views/livewire/components/service.blade.php ENDPATH**/ ?>