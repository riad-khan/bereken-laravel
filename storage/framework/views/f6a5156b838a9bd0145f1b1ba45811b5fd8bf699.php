<?php
    $seo_data_sql = 'select a.id,a.page_title,c.id as component_id,
                    c.meta_title,
                    c.meta_description,
                    c.keywords,
                    c.meta_robots,
                    c.structured_data,
                    c.meta_viewport,
                    c.canonical_url from page_seos a
                    left join page_seos_components b on (b.entity_id = a.id and b.field="page_seo" )
                    left join components_shared_seos c on c.id = b.component_id
                    where a.select_page_type="Knowledge"
                    order by a.id ASC limit 1';
    $seo_data = DB::select($seo_data_sql);
    
    $seo_social_sql = 'select a.social_network,a.title,a.description,d.url
from components_shared_meta_socials a
    left join components_shared_seos_components b on b.component_id = a.id
    left join files_related_morphs c on (c.related_id = b.entity_id and c.field="metaImage")
    left join files d on d.id = c.file_id
    where b.entity_id = ?';
    
    $seo_social = DB::select($seo_social_sql, [$seo_data[0]->component_id]);
    
?>
<?php $__env->startSection('meta'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo e($seo_data[0]->meta_title); ?> -  <?php echo e($categoryName[0]->category_name); ?> </title>
    <meta name="description" content="<?php echo e($seo_data[0]->meta_description); ?>">
    <meta name="keywords" content="<?php echo e($seo_data[0]->keywords); ?>">

    <?php $__currentLoopData = $seo_social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_meta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($social_meta->social_network == 'Facebook'): ?>
            <meta property="og:title" content="<?php echo e($social_meta->title.'-'. $categoryName[0]->category_name); ?>">
            <meta property="og:description" content="<?php echo e($social_meta->description); ?>">
            <meta property="og:image" content="<?php echo e(env('STRAPI_URL') . $social_meta->url); ?>">
            
        <?php else: ?>
            <meta name="twitter:card" content="<?php echo e($social_meta->description); ?>">
            <meta name="twitter:title" content="<?php echo e($social_meta->title.'-'. $categoryName[0]->category_name); ?>">
            <meta name="twitter:description" content="<?php echo e($social_meta->description); ?>">
            <meta name="twitter:image" content="<?php echo e(env('STRAPI_URL') . $social_meta->url); ?>">
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <link rel="canonical" href="<?php echo e($seo_data[0]->canonical_url); ?>">

    <script>
        <?php echo html_entity_decode($seo_data[0]->structured_data); ?>

    </script>
<?php $__env->stopSection(); ?>







<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="section-title text-center ">
                <h1 class="text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">
                    <?php echo e($categoryName[0]->category_name); ?></h1>
            </div>
        </div>
        <!-- container end -->
    </section>

    <section class="more-article-section">
        <div class="container mx-auto max-w-screen-xl">
            <h3 class="mb-3 text-2xl font-semibold">More Knowledges</h3>
            <ul class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-4">

                <?php $__currentLoopData = $filterKnowledge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $time;
                        $wpm = 200;
                        $wordCount = str_word_count(strip_tags($row->content));
                        $minutes = (int) floor($wordCount / $wpm);
                        $seconds = (int) floor(($wordCount % $wpm) / ($wpm / 60));
                        
                        if ($minutes === 0) {
                            $time = $seconds . ' sec';
                        } else {
                            $time = $minutes . 'min';
                        }
                    ?>
                    <li>
                        <a href="/knowledge-details/<?php echo e($row->slug); ?>-<?php echo e($row->id); ?>"
                            class="flex  mb-3 p-2 flex-col transition-all hover:bg-[#EBF1FF] border border-[#EBF1FF] hover:border-[#EBF1FF] rounded-lg hover:shadow md:flex-col  bg-white">
                            <img class="object-cover w-full rounded-t-lg h-auto md:rounded-none md:rounded-l-lg"
                                src="<?php echo e(env('STRAPI_URL') . $row->thumbnill_image); ?>" alt="image">

                            <div class="flex flex-col justify-between px-2 leading-normal">
                                <h5 class="mb-2 text-base font-semibold tracking-tight text-[#2B313B]">
                                    <?php echo e($row->title); ?></h5>
                                <p class="mb-3 font-normal text-xs text-[#6C7A93]">
                                    <?php echo e(Str::limit($row->short_description, 100)); ?></p>
                                <span class="publish-date-time  text-[#2B313B] font-normal text-xs"><?php echo e(date('F d, Y', strtotime($row->created_at))); ?> • Read: <?php echo e($time); ?></span>


                            </div>
                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            
        </div>
    </section>

</div>
<?php /**PATH /home/riad/Documents/bereken-laravel/resources/views/livewire/knowledge/knowledge-filter.blade.php ENDPATH**/ ?>