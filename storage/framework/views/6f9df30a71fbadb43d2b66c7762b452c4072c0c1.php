<div>
    <div class="faq mb-3 py-2 border rounded-t-2xl border-[#F5F8FF] ">
        <h3
            class="mx-3 py-5 border-t border-b border-[#F5F8FF] mx-auto md:text-base lg:text-2xl text-2xl font-semibold">
            FAQ</h3>
        <div class="flex justify-center items-start px-3">
            <div class="w-full">
                <ul class="flex flex-col">


                    <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                   <?php
                       $index = $key + 1
                   ?>

                    <li class="" x-data="accordion(<?php echo e($index); ?>)">
                        <h4 @click="handleClick()"
                            class="flex items-center justify-between w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer">
                            <span><?php echo e($row->title); ?></span>
                            <svg :class="handleRotate()"
                                class="fill-current text-[#2B313B] h-6 w-6 transform transition-transform duration-500 rotate-90"
                                fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </h4>
                        <div x-ref="tab" :style="handleToggle()"
                            class="font-normal text-xs border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all">
                            <p class="py-5 font-normal text-sm text-[#6C7A93]">
                               <?php echo e($row->content); ?>

                            </p>
                        </div>
                    </li>
                 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>

        <div
            class="px-3 items-center bg-white transition-all opacity-100 border-b border-[#F5F8FF] hover:opacity-90  py-4 my-2 text-center">
            <a href="#"
                class="shadow-btn arrow-white inline-flex items-center text-xs font-semibold text-center text-[#0052FE]  hover:text-white">
                View More <img src="<?php echo e(asset('/frontend/assets/img/icons/arrow-right-blue.svg')); ?>" class="ml-2"
                    alt="arrow-icon">
            </a>
        </div>
    </div>
</div>
<?php /**PATH /home/dh_ag462h/bereken.webonedevs.com/resources/views/livewire/components/vats/faq-section.blade.php ENDPATH**/ ?>