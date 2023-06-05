<div>
    <div class="main-inner">
        <div class="news-area hidden md:block">
            <ul>
                <?php $__currentLoopData = $otherNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $time;
                        $wpm = 200;
                        $wordCount = str_word_count(strip_tags($item->content));
                        $minutes = (int) floor($wordCount / $wpm);
                        $seconds = (int) floor(($wordCount % $wpm) / ($wpm / 60));
                        
                        if ($minutes === 0) {
                            $time = $seconds . ' sec';
                        } else {
                            $time = $minutes . 'min';
                        }
                        $categories = explode(',', $item->category);
                    ?>
                    <li>
                        <a href="/news/<?php echo e($item->slug); ?>-<?php echo e($item->id); ?>"
                            class="flex  mb-3 p-4  flex-col transition-all items-center hover:bg-[#EBF1FF] border border-[#EBF1FF] hover:border-[#EBF1FF] rounded-lg hover:shadow md:flex-row w-full bg-white">
                            <img class="object-cover w-full rounded-lg h-96 md:h-[172px] md:w-[172px]"
                                src=<?php echo e(url($item->thumbnill_image)); ?> alt="image">

                            <div class="flex flex-col justify-between px-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#2B313B]"><?php echo e($item->title); ?>

                                </h5>
                                <p class="mb-3 font-normal text-base text-[#6C7A93] underline">
                                    <?php echo e($item->short_description); ?></p>
                                <span
                                    class="publish-date-time  text-[#2B313B] font-normal text-xs"><?php echo e(date('F d, Y', strtotime($item->created_at))); ?>

                                    • Read: <?php echo e($time); ?></span>

                                <div class="row mt-2">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                   
                                    <span
                                        class="w-fit bg-[#EBF1FF] text-[#0051FF] text-xs font-semibold mt-2 px-2.5 py-2 rounded "><?php echo e($tag); ?></span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
        </div> <!-- info area end -->
    </div> <!-- main-inner-area end -->
</div>
<?php /**PATH /home/dh_ag462h/bereken.webonedevs.com/resources/views/livewire/components/news/other-news.blade.php ENDPATH**/ ?>