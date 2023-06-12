<?php
    $seo_data_sql = 'select 
                        b.*
                       
                        from knowledges_components a 
                        left join components_shared_seos b on (b.id = a.component_id and a.field = "knowledge_seo")
                        where a.entity_id = ?';
    $seo_data = DB::select($seo_data_sql,[$details[0]->id]);
    
    $seo_social_sql = 'select a.social_network,a.title,a.description,d.url
from components_shared_meta_socials a
    left join components_shared_seos_components b on b.component_id = a.id
    left join files_related_morphs c on (c.related_id = b.entity_id and c.field="metaImage")
    left join files d on d.id = c.file_id
    where b.entity_id = ?';
    
    $seo_social = DB::select($seo_social_sql, [$seo_data[0]->id]);
    
?>
<?php $__env->startSection('meta'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo e($seo_data[0]->meta_title); ?> </title>
    <meta name="description" content="<?php echo e($seo_data[0]->meta_description); ?>">
    <meta name="keywords" content="<?php echo e($seo_data[0]->keywords); ?>">

    <?php $__currentLoopData = $seo_social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_meta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($social_meta->social_network == 'Facebook'): ?>
            <meta property="og:title" content="<?php echo e($social_meta->title); ?>">
            <meta property="og:description" content="<?php echo e($social_meta->description); ?>">
            <meta property="og:image" content="<?php echo e(env('STRAPI_URL') . $social_meta->url); ?>">
            
        <?php else: ?>
            <meta name="twitter:card" content="<?php echo e($social_meta->description); ?>">
            <meta name="twitter:title" content="<?php echo e($social_meta->title); ?>">
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
    <section class="hero bg-white pt-20 p-4 md:p-12 md:pb-4  w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <nav class="flex justify-start" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3"> 
                    <li class="inline-flex items-center">                        
                        <a href="#"
                            class="inline-flex items-center text-sm font-normal  text-[#2B313B] hover:text-gray-900">Knowledge</a>
                    </li>
                    <li>

                        <?php
                            $category = $details[0]->category_id;
                           

                            $cat_name = DB::select('select category_name from knowledge_categories where id = '.$category.'')
                        ?>

                        <div class="flex items-center"><span class="text-[#D3D7DE] font-normal text-xs"> / </span><a
                                href="#"
                                class="ml-1 text-sm font-normal text-[#2B313B] hover:text-gray-900 md:ml-2"><?php echo e(ucfirst($cat_name[0]->category_name)); ?></a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center"><span class="text-[#D3D7DE] font-normal text-xs"> / </span><span
                                class="ml-1 text-sm font-normal text-[#0052FE] md:ml-2"><?php echo e($details[0]->title); ?></span>
                        </div>
                    </li>
                </ol>
            </nav>

        </div>
        <!-- container end -->
    </section>

    <section class="content-area">
        <div class="container mx-auto max-w-screen-xl flex-none md:flex md:flex-row">
            <!-- container start -->
            <div class="main-area basis-full p-2 md:p-0 md:basis-8/12">
                <!-- left-side-area start -->
                <div class="main-inner p-5 border border-[#F5F8FF] rounded-t-2xl">

                    <div class="post-detail">
                        
                    <img class="rounded-lg my-3" src="<?php echo e(env('STRAPI_URL') . $details[0]->banner_image); ?>" alt="image">
                       
                        <h1 class="font-semibold text-[32px] text-[#2B313B] leading-none mb-6"><?php echo e($details[0]->title); ?></h1>
                        <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6"><?php echo e($details[0]->short_description); ?></p>
                    </div>                  
                    <div class="info-area py-4">
                        <!-- info area start -->
                        <div class="single-info">
                            <?php echo html_entity_decode($details[0]->content); ?>

                        </div>
                    </div> <!-- info area end -->
                </div> <!-- main-inner-area end -->
            </div>
            <!-- left-side-area end -->
            <!-- right-side-area-start -->
            <div class="side-bar basis-full md:basis-4/12">
                <div class="inner-area ml-1 lg:ml-4 p-2 md:p-0">    
                    
                    
                    <div class="faq mb-3 border-l border-t rounded-t-2xl border-r border-[#F5F8FF]">
                        <div class="flex justify-center items-start px-3">
                            <div class="w-full">                            
                                <?php echo html_entity_decode($details[0]->table_of_contents); ?>

                            </div>
                          </div>

                        <div
                            class="px-3 items-center bg-white transition-all opacity-100 border-b border-[#F5F8FF] hover:opacity-90  py-4 my-2 text-center">
                        </div>
                    </div>
                    <div class="adds-area p-4 flex flex-col bg-[#F5F8FF] rounded-lg mb-3">
                        <img src="<?php echo e(asset('/frontend/assets/img/compare-img.svg')); ?>" alt="image">
                        <h3 class="text-2xl text-[#2B313B] font-bold my-2">Compare your insurance</h3>
                        <p class="text-[#6C7A93] font-normal mb-2 text-sm">Save an average of € 259 per year on your car insurance?</p>
                        <a href="#" class="p-4 text-center outline-btn btn-translate-z bg-[#0052FE] opacity-100 hover:opacity-90 transition text-white text-xs font-bold rounded-md">Get it Now</a>
                    </div>
                </div>
            </div>
            <!-- right-side-area-end -->
        </div><!-- container end -->
    </section>
    <script>
    // accordion start
    document.addEventListener('alpine:init', () => {
        Alpine.store('accordion', {
            tab: 0
        });

        Alpine.data('accordion', (idx) => ({
            init() {
                this.idx = idx;
            },
            idx: -1,
            handleClick() {
                this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
                return this.$store.accordion.tab === this.idx ? 'rotate-0' : '';
            },
            handleToggle() {
                return this.$store.accordion.tab === this.idx ?
                    `max-height: ${this.$refs.tab.scrollHeight}px` : '';
            }
        }));
    })
</script>
</div>
<?php /**PATH /home/riad/Documents/bereken-laravel/resources/views/livewire/knowledge/knowledge-details.blade.php ENDPATH**/ ?>