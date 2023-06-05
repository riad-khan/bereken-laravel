<?php if($paginator->hasPages()): ?>

    <nav aria-label="Page navigation example" class="my-6 text-center">
        <ul class="inline-flex items-center -space-x-px">
            <?php if($paginator->onFirstPage()): ?>
                <li></li>
            <?php else: ?>
                <li wire:click="previousPage">
                    <a class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white hover:text-gray-700">
                        <span class="sr-only">Previous</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            <?php endif; ?>


            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li>
                                <a aria-current="page" wire:click="gotoPage(<?php echo e($page); ?>)"
                                    class="z-10 px-3 py-2 bg-[#0052FE] leading-tight transition-all text-white rounded-lg hover:bg-[#0052FE] hover:text-white"><?php echo e($page); ?></a>
                            </li>
                        <?php else: ?>
                            <li>
                                <a wire:click="gotoPage(<?php echo e($page); ?>)"
                                    class="px-3 py-2 leading-tight text-gray-500 bg-white px-3 py-2 leading-tight text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700"><?php echo e($page); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($paginator->hasMorePages()): ?>
                <li wire:click="nextPage">
                    <a 
                        class="block px-3 py-2 leading-tight text-gray-500 bg-white 700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Next</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            <?php else: ?>
                <li></li>
            <?php endif; ?>
        </ul>
    </nav>

<?php endif; ?>
<?php /**PATH C:\Users\riadk\Documents\mftp_zip_2023_06_04_22_19_54\resources\views/livewire/includes/pagination-links.blade.php ENDPATH**/ ?>