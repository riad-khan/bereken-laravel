<?php
    $seo_data = DB::table('seo_data_tables')->where('page','=','Knowledge')->get();
?>
<?php $__env->startSection('meta'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo e($seo_data[0]->title); ?>  - <?php echo e($details[0]->title); ?></title>
    <meta name="description" content="<?php echo e($seo_data[0]->seo_meta); ?>">
    <meta name="description" content="<?php echo e($seo_data[0]->seo_keywords); ?>">

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
                            $cat_array = explode(',',$category);

                            $cat_name = DB::select('select category_name from knowledge_categories where id = '.$cat_array[0].'')
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
                        
                    <img class="rounded-lg my-3" src="<?php echo e(url($details[0]->banner_image)); ?>" alt="image">
                       
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
                              <ul class="flex flex-col">
                                <li class="" x-data="accordion(1)">
                                  <h4
                                    @click="handleClick()"
                                    class="flex items-center justify-between w-full py-5 text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer"
                                  >
                                    <span class="font-semibold text-2xl">Table of contents</span>
                                    <svg :class="handleRotate()" class="fill-current text-[#2B313B] h-7 w-7 md:h-7 md:w-7 transform transition-transform duration-500 rotate-90" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                  </h4>
                                  <div
                                    x-ref="tab"
                                    :style="handleToggle()"
                                    class="font-normal text-xs border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all"
                                  >
                                  <p class="mb-2 font-normal text-xs text-[#6C7A93]">
                                    <ul>
                                        <li><a href="#" class="block w-full font-normal text-sm text-[#2B313B] hover:text-[#0052fe] transition-all border-b border-[#F5F8FF] p-4" >Corona Kilos</a></li>
                                        <li><a href="#" class="block w-full font-normal text-sm text-[#2B313B] hover:text-[#0052fe] transition-all border-b border-[#F5F8FF] p-4" >Make a Good Plan</a></li>
                                        <li><a href="#" class="block w-full font-normal text-sm text-[#2B313B] hover:text-[#0052fe] transition-all border-b border-[#F5F8FF] p-4" >Tips to Prevent the Corona Kilos</a></li>
                                        <li><a href="#" class="block w-full font-normal text-sm text-[#2B313B] hover:text-[#0052fe] transition-all p-4" >Homework Stress.</a></li>
                                    </ul> 
                                    
                                    
                                    </p>
                                  </div>
                                </li>
                              </ul>
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
<?php /**PATH /home/dh_ag462h/bereken.webonedevs.com/resources/views/livewire/knowledge/knowledge-details.blade.php ENDPATH**/ ?>