<?php
    $seo_data_sql = 'select 
                        b.id as component_id,
                        b.meta_title,
                        b.meta_description,
                        b.keywords,
                        b.meta_robots,
                        b.structured_data,
                        b.meta_viewport,
                        b.canonical_url

                        from bmis_components a 
                        left join components_shared_seos b on (b.id = a.component_id and a.field="bmi_seo")
                        where a.field="bmi_seo"';
    $seo_data = DB::select($seo_data_sql);
    
    $seo_social_sql = 'select a.social_network,a.title,a.description,d.url  from components_shared_meta_socials a
    left join components_shared_seos_components b on b.component_id = a.id
    left join files_related_morphs c on (c.related_id = b.component_id and c.field="metaImage")
    left join files d on d.id = c.file_id
    where b.entity_id = ?';
    
    $seo_social = DB::select($seo_social_sql, [$seo_data[0]->component_id]);
    
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

    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="section-title text-center ">
                <h1 class="flex justify-center items-center text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">BMI Calculator
                    <svg id="removed_icon" onclick="save_search('Bmi Calculator')" class="removed transition ml-2 cursor-pointer hidden" fill="#112954" width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.799988 3.99999C0.799988 2.23268 2.23268 0.799988 3.99999 0.799988H20C21.7673 0.799988 23.2 2.23268 23.2 3.99999V20C23.2 21.7673 21.7673 23.2 20 23.2H3.99999C2.23268 23.2 0.799988 21.7673 0.799988 20V3.99999ZM18.4 5.59999H5.59999V18.4L12 15.2L18.4 18.4V5.59999Z"></path>
                    </svg>

                    <svg id="save_icon" onclick="remove_search('Bmi Calculator')" class="save transition ml-2 cursor-pointer hidden" fill="#26BA65" width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.799988 3.99999C0.799988 2.23268 2.23268 0.799988 3.99999 0.799988H20C21.7673 0.799988 23.2 2.23268 23.2 3.99999V20C23.2 21.7673 21.7673 23.2 20 23.2H3.99999C2.23268 23.2 0.799988 21.7673 0.799988 20V3.99999ZM18.4 5.59999H5.59999V18.4L12 15.2L18.4 18.4V5.59999Z"></path>
                    </svg>

</h1>
            </div>
            <nav class="flex justify-center" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="inline-flex items-center text-sm font-normal  text-[#2B313B] hover:text-gray-900">Home</a>
                    </li>
                    <li>
                        <div class="flex items-center"><span class="text-[#D3D7DE] font-normal text-xs"> / </span><a
                                href="/calculations"
                                class="ml-1 text-sm font-normal text-[#2B313B] hover:text-gray-900 md:ml-2">Calculations</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center"><span class="text-[#D3D7DE] font-normal text-xs"> / </span><span
                                class="ml-1 text-sm font-normal text-[#0052FE] md:ml-2">BMI</span>
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
                    <h3 class="my-5 text-2xl font-semibold">Result</h3>
                    <div class="flex-col sm:flex-row flex items-start sm:items-center justify-between">
                        <?php if($bmi < 16): ?>
                            <span style="opacity: 0.7"
                                class="bg-[red] text-[white]   text-base font-normal mr-2 px-3 py-2 rounded-lg">Your BMI
                                is: <strong><?php echo e($bmi); ?></strong> Severe Thinness</span>
                        <?php elseif($bmi < 18.5 && $bmi >= 16): ?>
                            <span
                                class="bg-[#FFF4E6] text-[#FF7800]  text-base font-normal mr-2 px-3 py-2 rounded-lg">Your
                                BMI is: <strong><?php echo e($bmi); ?></strong> Mild Thinness</span>
                        <?php elseif($bmi < 25 && $bmi >= 18.5): ?>
                            <span class="bg-[green] text-[#ffff]  text-base font-normal mr-2 px-3 py-2 rounded-lg">Your
                                BMI is: <strong><?php echo e($bmi); ?></strong> Normal</span>
                        <?php elseif($bmi <= 30 && $bmi >= 25): ?>
                            <span
                                class="bg-[#FFF4E6] text-[#FF7800]  text-base font-normal mr-2 px-3 py-2 rounded-lg">Your
                                BMI is: <strong><?php echo e($bmi); ?></strong> Overweight</span>
                        <?php else: ?>
                            <span style="opacity: 0.7"
                                class="bg-[red] text-[white]  text-base font-normal mr-2 px-3 py-2 rounded-lg">Your
                                BMI is: <strong><?php echo e($bmi); ?> </strong> Obese</span>
                        <?php endif; ?>





                        <a href="/bmi-calculator"
                            class="recalculate-btn text-white mt-6 sm:mt-0  bg-[#6C7A93] transition-all opacity-100 hover:opacity-90 font-bold rounded-lg text-xs px-5 py-2.5 text-center mr-2 inline-flex items-center">
                            <svg role="status" class="inline mr-3 text-white  hover:animate-anti-spin" width="21"
                                height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.5 2C5.05228 2 5.5 2.44772 5.5 3V5.10125C6.77009 3.80489 8.54052 3 10.5 3C13.5494 3 16.141 4.94932 17.1014 7.66675C17.2855 8.18747 17.0126 8.75879 16.4918 8.94284C15.9711 9.12689 15.3998 8.85396 15.2157 8.33325C14.5289 6.38991 12.6755 5 10.5 5C8.86507 5 7.41204 5.78502 6.49935 7H9.5C10.0523 7 10.5 7.44772 10.5 8C10.5 8.55228 10.0523 9 9.5 9H4.5C3.94772 9 3.5 8.55228 3.5 8V3C3.5 2.44772 3.94772 2 4.5 2ZM4.50817 11.0572C5.02888 10.8731 5.6002 11.146 5.78425 11.6668C6.47112 13.6101 8.32453 15 10.5 15C12.1349 15 13.588 14.215 14.5006 13L11.5 13C10.9477 13 10.5 12.5523 10.5 12C10.5 11.4477 10.9477 11 11.5 11H16.5C16.7652 11 17.0196 11.1054 17.2071 11.2929C17.3946 11.4804 17.5 11.7348 17.5 12V17C17.5 17.5523 17.0523 18 16.5 18C15.9477 18 15.5 17.5523 15.5 17V14.8987C14.2299 16.1951 12.4595 17 10.5 17C7.45059 17 4.85905 15.0507 3.89857 12.3332C3.71452 11.8125 3.98745 11.2412 4.50817 11.0572Z"
                                    fill="white" />
                            </svg>
                            Recalculate
                        </a>
                    </div>
                    <div class="info-area py-4">

                        <!-- info area start -->
                        <div class="single-info">
                            <h2 class="text-[#2B313B] text-base font-semibold mb-3"><?php echo e($result[0]->result_title); ?>

                            </h2>
                            <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6"><?php echo html_entity_decode($result[0]->result_content); ?></p>

                            <p class="bmi-msg text-base font-normal text-[#26BA65] my-4">Your ideal weight is between: <?php echo e($idealStart); ?>kg to
                                <?php echo e($idealEnd); ?>kg</p>
                            <div class="bmi-chart grid grid-cols-4 gap-2">
                                <div class="flex flex-col">
                                    <div class="py-1 rounded bg-[#A4BCE6]"></div>
                                    <div class="text-[#2B313B] text-[10px] font-normal text-center mt-1">
                                        <p>Underweight</p>
                                        <p class="font-semibold">Below 60kg</p>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="py-1 rounded bg-[#26BA65]"></div>
                                    <div class="text-[#2B313B] text-[10px] font-normal text-center mt-1">
                                        <p>Normal</p>
                                        <p class="font-semibold">65-70kg</p>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="py-1 rounded bg-[#EFBC21]"></div>
                                    <div class="text-[#2B313B] text-[10px] font-normal text-center mt-1">
                                        <p>Overweight</p>
                                        <p class="font-semibold">75-80kg</p>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="py-1 rounded bg-[#F22222]"></div>
                                    <div class="text-[#2B313B] text-[10px] font-normal text-center mt-1">
                                        <p>Obese</p>
                                        <p class="font-semibold">Above 85</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php
                            $sql = 'select 
                                        b.id,
                                        b.title,
                                        b.slug
                                        from bmi_results_most_read_news_links a 
                                        left join news b on b.id = a.news_section_id
                                        ';
                            $news = DB::select($sql);
                        ?>

                        <h2 class="text-[#2B313B] text-base font-semibold mt-4 mb-3">Most Read</h2>

                        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="/news/<?php echo e($item->slug); ?>-<?php echo e($item->id); ?>" class="text-[#0052FE] font-normal text-xs block mb-2 underline"> <?php echo e($item->title); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                      
                    </div>
                    <div id="load-more" class="transition-all">
                            <div class="single-info py-4">

                                    <?php
                                        $result_content = DB::table('bmis')->get();
                                    ?>

                                    <?php echo html_entity_decode($result_content[0]->result_content); ?>

                            
                            </div>
                            
                            <button id="load-more-btn" type="button" class="load-btn-area w-full  inline-block transition-all scale hover:scale-105 mb-4 text-center md:hidden text-[10px] 		font-semibold text-center text-[#0052FE] hover:text-blue-700  ">
                                View More <img src="<?php echo e(asset('frontend/assets/img/icons/arrow-right-blue.svg')); ?>" class="ml-2 inline-block" alt="arrow-icon">
                             </button>
                            </div>
                            <!-- hidden-element end -->

                            <div class="bottom-part flex-none lg:flex lg:justify-between">
                                <div class="w-full lg:w-auto more-links">
                                    <h5 class=" font-bold text-xs text-black mb-2">Other visitors also calculated</h5>
                                    <div class="tag-area flex-wrap flex md:flex-none">
                                        <?php
                                       $sql = 'select 
                                                    b.calculator_name,
                                                    b.link,
                                                    d.url as icon
                                                    from bmis_other_visitors_also_calculate_links a 
                                                    left join calculator_lists b on b.id = a.calculator_list_id
                                                    left join files_related_morphs c on (c.related_id = b.id and c.field="calculator_icon")
                                                    left join files d on d.id = c.file_id
                                                    where a.bmi_id = ?';
                                        $list = DB::select($sql,[$result_content[0]->id])
                                    ?>

                                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                                   

                                    <a target="_blank" href="<?php echo e($item->link); ?>"
                                        class="text-[#0052FE] bg-white border border-[#0052FE] font-normal rounded-md transition-all text-[10px] px-2.5 py-1 text-center mr-2 mb-2"><?php echo e($item->calculator_name); ?></a>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                    </div>
                                </div>
                                <?php
                                    $fb_url='https://www.facebook.com/sharer/sharer.php?u='.url()->current().'';
                                ?>
                                <div class="w-full mt-4 lg:mt-0 lg:w-auto social-links text-left lg:text-right">
                                    <h5 class="font-bold text-xs text-black mb-2">Share this Calculation</h5>
                                    <ul class="flex flex-row justify-start md:justify-end">
                                        <li class="flex"> <a href="<?php echo e($fb_url); ?>" target="_blank" class=" ml-2"><span
                                                    class="flex relative">
                                                    <span
                                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                                        class=" h-5 w-5" src="<?php echo e(asset('frontend/assets/img/social/facebook.svg')); ?>"
                                                        alt=""> </span></a></li>
                                        <li class="flex ml-2"><a href="#" class=" ml-2"><img
                                                    class="blob infinity rounded-full h-5 w-5"
                                                    src="<?php echo e(asset('frontend/assets/img/social/twitter.svg')); ?>" alt=""> </a></li>
                                        <li class="flex ml-2"> <a href="#" class=" ml-2"><span
                                                    class="flex relative">
                                                    <span
                                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                                        class="h-5 w-5" src="<?php echo e(asset('frontend/assets/img/social/instagram.svg')); ?>"
                                                        alt=""></span> </a></li>
                                    
                                    </ul>
                                </div>
                            </div>
                </div> <!-- main-inner-area end -->
            </div>
            <!-- left-side-area end -->
            <!-- right-side-area-start -->
            <div class="side-bar basis-full md:basis-4/12">
                <div class="inner-area ml-1 lg:ml-4 p-2 md:p-0">
                  
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.b-m-i.featured-calculators', ['bmi' => $result_content[0]->id])->html();
} elseif ($_instance->childHasBeenRendered('l3081529593-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3081529593-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3081529593-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3081529593-0');
} else {
    $response = \Livewire\Livewire::mount('components.b-m-i.featured-calculators', ['bmi' => $result_content[0]->id]);
    $html = $response->html();
    $_instance->logRenderedChild('l3081529593-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                   

                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.b-m-i.related-articles', ['bmi' => $result_content[0]->id])->html();
} elseif ($_instance->childHasBeenRendered('l3081529593-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3081529593-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3081529593-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3081529593-1');
} else {
    $response = \Livewire\Livewire::mount('components.b-m-i.related-articles', ['bmi' => $result_content[0]->id]);
    $html = $response->html();
    $_instance->logRenderedChild('l3081529593-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.b-m-i.bmi-faq', ['bmi' => $result_content[0]->id])->html();
} elseif ($_instance->childHasBeenRendered('l3081529593-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l3081529593-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3081529593-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3081529593-2');
} else {
    $response = \Livewire\Livewire::mount('components.b-m-i.bmi-faq', ['bmi' => $result_content[0]->id]);
    $html = $response->html();
    $_instance->logRenderedChild('l3081529593-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.b-m-i.bmi-ratings', ['bmi' => $result_content[0]->id])->html();
} elseif ($_instance->childHasBeenRendered('l3081529593-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l3081529593-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3081529593-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3081529593-3');
} else {
    $response = \Livewire\Livewire::mount('components.b-m-i.bmi-ratings', ['bmi' => $result_content[0]->id]);
    $html = $response->html();
    $_instance->logRenderedChild('l3081529593-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
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

    <script>
        function checkSavedList(item){
            let abc = localStorage["saved_search"];
            if(abc){
                let saved_search = JSON.parse(abc);
                if (saved_search.includes(item)) {
                    document.getElementsByClassName('removed')[0].classList.add('hidden');
                    document.getElementsByClassName('save')[0].classList.remove('hidden');
                }else{
                    document.getElementsByClassName('removed')[0].classList.remove('hidden');
                    document.getElementsByClassName('save')[0].classList.add('hidden');
                }
            }else{
                document.getElementsByClassName('removed')[0].classList.remove('hidden');
                document.getElementsByClassName('save')[0].classList.add('hidden');
            }
        }


        function save_search(item) {
            let abc = localStorage["saved_search"];
            let saved_search = JSON.parse(abc||"[]");
            if (saved_search.includes(item)) {
                console.log('already in saved list');
            } else {
                saved_search.push(item);
                localStorage["saved_search"] = JSON.stringify(saved_search);
                console.log(localStorage["saved_search"]);
            }

            checkSavedList(item);

        }
        function remove_search(item){
            let abc = localStorage["saved_search"];
            if(abc){
                let saved_item = JSON.parse(abc);
                let index = saved_item.indexOf(item);
                saved_item.splice(index,1);
                localStorage.setItem('saved_search',JSON.stringify(saved_item));

                checkSavedList(item);
            }
        }

        checkSavedList('Bmi Calculator');
    </script>


</div>
<?php /**PATH /home/riad/Documents/bereken-laravel/resources/views/livewire/calculators/b-m-i/bmi-result.blade.php ENDPATH**/ ?>