<?php
    $seo_data = DB::table('seo_data_tables')->where('page','=','Internet')->get();
?>
<?php $__env->startSection('meta'); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo e($seo_data[0]->title); ?></title>
    <meta name="description" content="<?php echo e($seo_data[0]->seo_meta); ?>">
    <meta name="description" content="<?php echo e($seo_data[0]->seo_keywords); ?>">

    <script>
        <?php echo html_entity_decode($seo_data[0]->structured_data); ?>

    </script>
<?php $__env->stopSection(); ?>
<div>
    <section class="hero bg-[#F5F8FF] pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- Calculations Start -->
            <div class="services-area w-full py-8">

                <div class="flex-none md:flex md:justify-around">
                    <div class="w-full md:w-80 flex flex-col">
                        <h1 class="flex items-center text-base font-normal text-[#26BA65] mb-5"><img src="<?php echo e(asset('/frontend/assets/img/verified.svg')); ?>" class="w-6 h-6 mr-2" alt="icon"> Save costs • Independent • Personal</h1>
                        <h2 class="text-[#2B313B] text-2xl font-semibold mb-5">Compare Internet & TV packages</h2>
                        <p class="text-[#6C7A93] text-base font-normal mb-5">Find the best and cheapest internet and TV at your address</p>
                        
                        <div class="pop-form-main" x-data="{ open: false }">
                            
                        <button type="button"  @click="open = ! open" class="outline-btn btn-translate-z flex md:hidden items-center w-fit bg-[#F9FBFF] text-white text-base font-bold py-2.5 px-6 mb-6">Get Started <img class="ml-4  " src="<?php echo e(asset('/frontend/assets/img/arrow-white.svg')); ?>" alt="arrow-icon"></button>

                            <div class="pop-form absolute md:relative" x-show="open" x-transition>
                                <div class="relative flex flex-col bg-[#F9FBFF] inner-area border border-[#F5F8FF] rounded-2xl p-5">
                                    <button class="absolute right-2 top-2 md:hidden" @click="open = false"><img src="<?php echo e(asset('/frontend/assets/img/close.svg')); ?>" alt="icon"></button>
                                    
                                        
                        <div :class="{'block': open, 'hidden': !open}" class="hidden form-area p-5 rounded-2xl border border-[#F5F8FF] bg-white">
                            <form action="" class="flex flex-col">
                                <div class="mb-3">
                                    <label for="" class="block mb-2 text-sm  font-normal text-[#2B313B]">Type</label>
                                    
                                    <div class="t-select no-label">
                                            <select id="gender" class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-sm  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm  rounded-lg font-base" value="all" selected="">All in One</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm  rounded-lg font-base" value="internet-tv">Internet & Tv</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm  rounded-lg font-base" value="internet-bellen">Internet & Bellen</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm  rounded-lg font-base" value="internet">Alleen Internet</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="block mb-2 text-sm  font-normal text-[#2B313B]">Zip code </label>                                    
                                        <div class="flex">
                                            <input type="text" 
                                            class="green-tick rounded-lg bg-white border border-[#F5F8FF] text-[#2B313B] font-normal text-sm  focus:ring-none focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-2.5"
                                            placeholder="">
                                        </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="block mb-2 text-sm  font-normal text-[#2B313B]">Housingnumber </label>                                    
                                        <div class="flex mb-3">
                                            <input type="text" 
                                            class="green-tick rounded-lg bg-white border border-[#F5F8FF] text-[#2B313B] font-normal text-sm  focus:ring-none focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-2.5"
                                            placeholder="">
                                        </div>
                                </div>
                                    <button type="button" class="p-4 text-center outline-btn btn-translate-z bg-[#112954] text-white w-full text-sm  font-bold rounded-md">Compare Now</button>
                                
                            </form>
                        </div>
                                    </span>
                                </div>

                            </div>
                        </div>
                        
                        <h3 class="text-[#2B313B] text-sm  font-semibold mb-3">We’re compare</h3>
                        <div class="grid grid-cols-5 gap-2">
                            <img src="<?php echo e(('/frontend/assets/img/internet/01.svg')); ?>" alt="icon">
                            <img src="<?php echo e(('/frontend/assets/img/internet/02.svg')); ?>" alt="icon">
                            <img src="<?php echo e(('/frontend/assets/img/internet/03.svg')); ?>" alt="icon">
                            <img src="<?php echo e(('/frontend/assets/img/internet/04.svg')); ?>" alt="icon">
                            <img src="<?php echo e(('/frontend/assets/img/internet/05.svg')); ?>" alt="icon">
                            <img src="<?php echo e(('/frontend/assets/img/internet/06.svg')); ?>" alt="icon">
                            <img src="<?php echo e(('/frontend/assets/img/internet/07.svg')); ?>" alt="icon">
                            <img src="<?php echo e(('/frontend/assets/img/internet/08.svg')); ?>" alt="icon">
                            <img src="<?php echo e(('/frontend/assets/img/internet/09.svg')); ?>" alt="icon">
                            <img src="<?php echo e(('/frontend/assets/img/internet/10.svg')); ?>" alt="icon">
                        </div>
                    </div>
                    <div class="w-full hidden md:block md:w-80">
                        <div class="form-area p-5 rounded-2xl border border-[#F5F8FF] bg-white">
                            <form action="<?php echo e(url('/internet-package')); ?>" method="post" class="flex flex-col">
                                <?php echo csrf_field(); ?>
                                <div class="mb-3">
                                    <label for="" class="block mb-2 text-sm  font-normal text-[#2B313B]">Type</label>
                                    
                                    <div class="t-select no-label">
                                        <select id="gender" name="type" class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-sm  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm  rounded-lg font-base" value="all" selected="">All in One</option>
                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm  rounded-lg font-base" value="internet-tv">Internet & Tv</option>
                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm  rounded-lg font-base" value="internet-bellen">Internet & Bellen</option>
                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm  rounded-lg font-base" value="alleen-internet">Alleen Internet</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="block mb-2 text-sm  font-normal text-[#2B313B]">Zip code </label>                                    
                                        <div class="flex">
                                            <input type="text" name="zip"
                                            class="green-tick rounded-lg bg-white border border-[#F5F8FF] text-[#2B313B] font-normal text-sm  focus:ring-none focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-2.5"
                                            placeholder="">
                                        </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="block mb-2 text-sm  font-normal text-[#2B313B]">Housingnumber </label>                                    
                                        <div class="flex mb-3">
                                            <input type="text" name="hn"
                                            class="green-tick rounded-lg bg-white border border-[#F5F8FF] text-[#2B313B] font-normal text-sm  focus:ring-none focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-2.5"
                                            placeholder="">
                                        </div>
                                </div>
                                    <button type="submit" class="p-4 text-center outline-btn btn-translate-z bg-[#112954] text-white w-full text-sm  font-bold rounded-md">Compare Now</button>
                                
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Calculations End -->

        </div>
        <!-- container end -->
    </section>

    <section class="bg-white p-4 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <h2 class="text-center font-semibold text-[32px] text-[#2B313B] leading-none mt-6 mb-14">How does it work?</h2>
            <div class="flex flex-col lg:flex-row items-start justify-between">
                <div class="w-full lg:w-80 mb-4 md:mb-0">
                    <div class="p-[19px] rounded-2xl border border-[#F5F8FF] bg-white">
                        <form action="<?php echo e(url('/internet-package')); ?>" method="post" class="flex flex-col">
                            <?php echo csrf_field(); ?>
                            <div class="mb-5 mt-2">
                                <label for="" class="block mb-3 text-xs font-normal text-[#2B313B]">Type</label>

                                <div class="t-select no-label">
                                    <select id="gender" name="type" class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-sm  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                        <option class="p-3 bg-white border-b border border-[#cccccc] text-sm  rounded-lg font-base" value="all" selected="">All in One</option>
                                        <option class="p-3 bg-white border-b border border-[#cccccc] text-sm  rounded-lg font-base" value="internet-tv">Internet & Tv</option>
                                        <option class="p-3 bg-white border-b border border-[#cccccc] text-sm  rounded-lg font-base" value="internet-bellen">Internet & Bellen</option>
                                        <option class="p-3 bg-white border-b border border-[#cccccc] text-sm  rounded-lg font-base" value="alleen-internet">Alleen Internet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-5">
                                <label for="" class="block mb-3 text-xs font-normal text-[#2B313B]">Zip code </label>
                                <div class="flex">
                                    <input type="text" name="zip"
                                           class="green-tick rounded-lg bg-white border border-[#F5F8FF] text-[#2B313B] font-normal text-xs focus:ring-none focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-2.5"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="mb-10">
                                <label for="" class="block mb-3 text-xs font-normal text-[#2B313B]">Housingnumber </label>
                                <div class="flex">
                                    <input type="text" name="hn"
                                           class="green-tick rounded-lg bg-white border border-[#F5F8FF] text-[#2B313B] font-normal text-xs focus:ring-none focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-2.5"
                                           placeholder="">
                                </div>
                            </div>
                            <button type="submit" class="p-4 text-center outline-btn btn-translate-z bg-[#112954] text-white w-full text-xs font-bold rounded-md">Compare Now</button>
                    </div>

                    </form>
                        <p class="text-[#2B313B] text-base font-normal text-center mb-8 md:mb-0 mt-4 px-2">1. Enter postal code and select package type</p>
                </div>
                <div class="w-full lg:w-80 range-sec mb-4 md:mb-0">
                    <form class="grid grid-cols-1 gap-8">
                        <div class="p-[19px] rounded-2xl border border-[#F5F8FF] bg-white">
                            <span class="relative flex items-center justify-end">
                                <label for="range2" class="absolute inset-y-0 left-0 font-normal text-sm  text-[#2B313B]">Download Speed</label> 
                                    <div class="order-3 flex items-center">
                                        <!-- <div id="" class="counter-top font-semibold text-sm  text-[#0052FE]"></div> -->
                                        
                                        <div class="font-semibold text-sm  text-[#0052FE]">mbps</div>
                                    </div>
                            </span>
                            <input id="range2" name="range2" type="range" min="0" max="300" value="150">
                        </div>
                        <div class="p-[19px] rounded-2xl border border-[#F5F8FF] bg-white">
                            <span class="relative flex items-center justify-end">
                                <label for="range1" class="absolute inset-y-0 left-0 font-normal text-sm  text-[#2B313B]">Costs per month</label>                                  
                                
                                    <div class="order-1 font-semibold text-sm  text-[#0052FE]  mr-1">€</div>
                                    
                                    <div class="order-3 flex items-center">
                                        <!-- <div id="" class="counter-top font-semibold text-sm  text-[#0052FE]"></div> -->
                                        <div class="font-semibold text-sm  text-[#0052FE] ml-1">to  € 95</div>
                                    </div>
                                </span>
                            <input id="range1" name="range1" type="range" min="0" max="95" value="20">
                        </div>                        
                        <div class="p-[19px] rounded-2xl border border-[#F5F8FF] bg-white">
                            <span class="relative flex items-center justify-end">
                                <label for="range2" class="absolute inset-y-0 left-0 font-normal text-sm  text-[#2B313B]">Number of HD channels</label> 
                                    <div class="order-3 flex items-center">
                                        <!-- <div id="" class="counter-top font-semibold text-sm  text-[#0052FE]"></div> -->
                                        <!-- <div class="font-semibold text-sm  text-[#0052FE]">mbps</div> -->
                                    </div>
                            </span>
                            <input id="range3" name="range3" type="range" min="0" max="300" value="150">
                        </div>
                    </form>
                    <p class="text-[#2B313B] text-base font-normal text-center mb-8 md:mb-0 mt-4 px-2">2. Filter subscriptions according to your wishes</p>
                </div>
                <div class="w-full lg:w-80 mb-4 md:mb-0">
                    <div class="grid grid-cols-1 gap-8 content-start">
                        <div class="bg-[#F5F8FF]  p-3 rounded-2xl">
                            <div class="flex items-center justify-between mb-2">
                                <span class="bg-[#9BAECF] rounded w-20 h-[27px]">

                                </span>
                                <span class="flex flex-col text-right">
                                    <span class="text-[#2B313B] text-base font-semibold">€ 56</span>
                                    <span class="text-[#6C7A93] text-[8px] font-normal">per maand</span>
                                </span>
                            </div>
                            <div class="flex flex-row items-center justify-between">
                                <span class="flex flex-col items-center w-[45px]">
                                    <span class="self-start bg-[#9BAECF] h-2.5 w-[45px] rounded mb-2"></span>
                                    <span class="self-end bg-[#DAE3F7] h-2.5 w-[45px] rounded"></span>
                                </span>
                                <span class="flex flex-col items-center w-[29px]">
                                    <span class="self-start bg-[#9BAECF] h-2.5 w-[29px] mb-2 rounded"></span>
                                    <span class="self-end bg-[#DAE3F7] h-2.5 w-[29px] rounded"></span>
                                </span>
                                <span class="flex flex-col items-center w-[24px]">
                                    <span class="self-start bg-[#9BAECF] h-2.5 w-[24px] mb-2 rounded"></span>
                                    <span class="self-end bg-[#DAE3F7] h-2.5 w-[24px] rounded"></span>
                                </span>
                                <span class="flex flex-col items-center w-[37px]">
                                    <span class="self-start bg-[#9BAECF] h-2.5 w-[37px] mb-2 rounded"></span>
                                    <span class="self-end bg-[#DAE3F7] h-2.5 w-[37px] rounded"></span>
                                </span>
                                <a href="#" class="btn-sm outline-btn btn-translate-z flex justify-center h-auto w-20  bg-[#112954] text-white text-[10px] font-bold py-2 px-2 rounded transition-all">Bekijk hier</a>
                            </div>
                           
                        </div>
                        <div class="bg-[#F5F8FF]  p-3 rounded-2xl">
                            <div class="flex items-center justify-between mb-2">
                                <span class="bg-[#9BAECF] rounded w-20 h-[27px]">

                                </span>
                                <span class="flex flex-col text-right">
                                    <span class="text-[#2B313B] text-base font-semibold">€ 56</span>
                                    <span class="text-[#6C7A93] text-[8px] font-normal">per maand</span>
                                </span>
                            </div>
                            <div class="flex flex-row items-center justify-between">
                                <span class="flex flex-col items-center w-[45px]">
                                    <span class="self-start bg-[#9BAECF] h-2.5 w-[45px] rounded mb-2"></span>
                                    <span class="self-end bg-[#DAE3F7] h-2.5 w-[45px] rounded"></span>
                                </span>
                                <span class="flex flex-col items-center w-[29px]">
                                    <span class="self-start bg-[#9BAECF] h-2.5 w-[29px] mb-2 rounded"></span>
                                    <span class="self-end bg-[#DAE3F7] h-2.5 w-[29px] rounded"></span>
                                </span>
                                <span class="flex flex-col items-center w-[24px]">
                                    <span class="self-start bg-[#9BAECF] h-2.5 w-[24px] mb-2 rounded"></span>
                                    <span class="self-end bg-[#DAE3F7] h-2.5 w-[24px] rounded"></span>
                                </span>
                                <span class="flex flex-col items-center w-[37px]">
                                    <span class="self-start bg-[#9BAECF] h-2.5 w-[37px] mb-2 rounded"></span>
                                    <span class="self-end bg-[#DAE3F7] h-2.5 w-[37px] rounded"></span>
                                </span>
                                <a href="#" class="btn-sm outline-btn btn-translate-z flex justify-center h-auto w-20  bg-[#112954] text-white text-[10px] font-bold py-2 px-2 rounded transition-all">Bekijk hier</a>
                            </div>
                           
                        </div>
                        <div class="bg-[#F5F8FF] p-3 rounded-2xl">
                            <div class="flex items-center justify-between mb-2">
                                <span class="bg-[#9BAECF] rounded w-20 h-[27px]">

                                </span>
                                <span class="flex flex-col text-right">
                                    <span class="text-[#2B313B] text-base font-semibold">€ 56</span>
                                    <span class="text-[#6C7A93] text-[8px] font-normal">per maand</span>
                                </span>
                            </div>
                            <div class="flex flex-row items-center justify-between">
                                <span class="flex flex-col items-center w-[45px]">
                                    <span class="self-start bg-[#9BAECF] h-2.5 w-[45px] rounded mb-2"></span>
                                    <span class="self-end bg-[#DAE3F7] h-2.5 w-[45px] rounded"></span>
                                </span>
                                <span class="flex flex-col items-center w-[29px]">
                                    <span class="self-start bg-[#9BAECF] h-2.5 w-[29px] mb-2 rounded"></span>
                                    <span class="self-end bg-[#DAE3F7] h-2.5 w-[29px] rounded"></span>
                                </span>
                                <span class="flex flex-col items-center w-[24px]">
                                    <span class="self-start bg-[#9BAECF] h-2.5 w-[24px] mb-2 rounded"></span>
                                    <span class="self-end bg-[#DAE3F7] h-2.5 w-[24px] rounded"></span>
                                </span>
                                <span class="flex flex-col items-center w-[37px]">
                                    <span class="self-start bg-[#9BAECF] h-2.5 w-[37px] mb-2 rounded"></span>
                                    <span class="self-end bg-[#DAE3F7] h-2.5 w-[37px] rounded"></span>
                                </span>
                                <a href="#" class="btn-sm outline-btn btn-translate-z flex justify-center h-auto w-20  bg-[#112954] text-white text-[10px] font-bold py-2 px-2 rounded transition-all">Bekijk hier</a>
                            </div>
                           
                        </div>
                    </div>
                    <p class="text-[#2B313B] text-base font-normal text-center mb-8 md:mb-0 mt-4 px-2">3. All subscriptions at a glance</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#F5F8FF] p-4 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <h2 class="text-center font-semibold w-fit md:w-[450px] text-[32px] text-[#2B313B] leading-none pb-6 my-6  mx-auto">Advantages of comparing Internet Packages</h2>
            <div class="flex flex-col lg:flex-row items-center justify-between pb-8">
                <div class="bg-white w-full mb-4 lg:mb-0 md:w-[308px] p-5 flex flex-col text-center border border-[#F5F8FF] rounded-2xl">
                    <img src="<?php echo e(('/frontend/assets/img/internet/001.svg')); ?>" class="pt-4 h-auto w-20 mx-auto mb-4" alt="icon">
                    <h3 class="my-3 text-[#2B313B] text-2xl font-semibold">Good Overview</h3>
                    <p class="text-[#6C7A93] text-base font-normal pb-4">Choosing the right internet package starts with a good overview.</p>
                </div>                
                <div class="bg-white w-full mb-4 lg:mb-0 md:w-[308px] p-5 flex flex-col text-center border border-[#F5F8FF] rounded-2xl">
                    <img src="<?php echo e(('/frontend/assets/img/internet/002.svg')); ?>" class="pt-4 h-auto w-20 mx-auto mb-4" alt="icon">
                    <h3 class="my-3 text-[#2B313B] text-2xl font-semibold">Choose the Best Deal</h3>
                    <p class="text-[#6C7A93] text-base font-normal pb-4">Thanks to the handy overview of the internet packages comparator.</p>
                </div>
                
                <div class="bg-white w-full mb-4 lg:mb-0 md:w-[308px] p-5 flex flex-col text-center border border-[#F5F8FF] rounded-2xl">
                    <img src="<?php echo e(('/frontend/assets/img/internet/003.svg')); ?>" class="pt-4 h-auto w-20 mx-auto mb-4" alt="icon">
                    <h3 class="my-3 text-[#2B313B] text-2xl font-semibold">Save Costs</h3>
                    <p class="text-[#6C7A93] text-base font-normal pb-4">Because you have all the information available about each deal.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white p-4 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex flex-col md:flex-row items-center justify-between py-6">
                <div class="w-full md:w-1/2 pr-4 mb-4 lg:mb-0">
                    <h3 class="text-left font-semibold text-[32px] text-[#2B313B] leading-none mt-6 mb-8">We’re Support by</h3>
                    <p class="text-[#6C7A93] text-base font-normal pb-4 mb-8">A health insurance that also reimburses your medicines? A greener energy supplier? Or the best mortgage? Whatever you need, we make comparing fun and easy. We love nothing more than making complex choices simple. That saves you a lot of research and at the bottom of the line usually a lot of premium.</p>
                    <p class="text-[#6C7A93] text-base font-normal pb-4 mb-8">How good does it feel when you save with the certainty that you have arranged your affairs better? You won't know that until you just give it a try. So start today. Welcome to Independer.</p>
                    <span class="flex flex-row items-center">
                        <img src="<?php echo e(('/frontend/assets/img/internet/support-01.svg')); ?>" class="mr-4" alt="logo">
                        <img src="<?php echo e(('/frontend/assets/img/internet/support-02.svg')); ?>" alt="logo">
                    </span>
                </div>
                <div class="hidden md:block w-full md:w-1/2 pl-4 mb-4 lg:mb-0">
                    <img src="<?php echo e(asset('/frontend/assets/img/internet/support-sec-img.svg')); ?>" alt="image">
                </div>
            </div>
        </div>
    </section>

    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('components.news-slider.news-slider', [])->html();
} elseif ($_instance->childHasBeenRendered('l543187583-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l543187583-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l543187583-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l543187583-0');
} else {
    $response = \Livewire\Livewire::mount('components.news-slider.news-slider', []);
    $html = $response->html();
    $_instance->logRenderedChild('l543187583-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

      <!-- contact-us - start -->
      <section class="bg-[#F5F8FF] w-full p-4 md:p-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex p-6 flex-col items-center ">
                <div class="content text-center sm:text-left flex-none sm:flex sm:justify-center sm:items-center">
                    <div class="img-box w-full sm:w-2/5 order-none mb-6 sm:m-0 sm:order-last">
                        <img src="<?php echo e(asset('frontend/assets/img/contact-us.svg')); ?>" class="mx-auto w-full sm:mx-0" alt="image">
                    </div>
                    <div class="text-content text-center sm:w-3/5 sm:text-left">
                        <h6 class="text-2xl sm:text-xl lg:text-2xl font-normal mb-8 text-[#2B313B]">We are best reached
                            via WhatsApp and chat Feel free to contact us if you want to know more. We are there today
                            until 18:00.</h6>
                        <a href="/contact-us"  class="outline-btn btn-translate-z flex w-fit m-auto md:m-0 bg-[#112954] text-white text-base font-bold py-2.5 px-14 rounded-lg transition-all">Contact Us</a>
                    </div>
                </div>
            </div>
        </div><!-- container end -->
    </section>


    <script src="<?php echo e(asset('/frontend/assets/js/jquery/jquery.min.js')); ?>"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    
    <script type="text/javascript" src="<?php echo e(asset('/frontend/assets/js/slick/slick.min.js')); ?>"></script>
    <script>        
            //date 
            flatpickr("#a-date", {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
        });
            flatpickr("#b-date", {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
        });
            flatpickr("#c-date", {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
        });
        $('.center').slick({
          centerMode: true,
          centerPadding: '110px',
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: true,
          prevArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><img src="<?php echo e(asset('/frontend/assets/img/slider/angle-right.svg')); ?>" class="h-[27px] w-8" alt="previous-arrow"></button>',
          nextArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button"><img src="<?php echo e(asset('/frontend/assets/img/slider/angle-left.svg')); ?>" class="h-[27px] w-8" alt="next-arrow"></button>',
          autoplay: true,
          autoplaySpeed: 3000,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '70px',
                slidesToShow: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
              }
            }
          ]
        });
    </script>
    <script>
        window.addEventListener("DOMContentLoaded",() => {
	let range1 = new RollCounterRange("#range1"),
        range2 = new RollCounterRange("#range2"),
        range3 = new RollCounterRange("#range3"),
        range4 = new RollCounterRange("#minutes"),
        range6 = new RollCounterRange("#minutes2"),
        range9 = new RollCounterRange("#minutes3"),
        range7 = new RollCounterRange("#data"),
        range8 = new RollCounterRange("#monthly2"),
        range10 = new RollCounterRange("#monthly3"),
        range5 = new RollCounterRange("#monthly");
});

class RollCounterRange {
	constructor(id) {
		this.el = document.querySelector(id);
		this.srValue = null;
		this.fill = null;
		this.digitCols = null;
		this.lastDigits = "";
		this.rollDuration = 0; // the transition duration from CSS will override this
		this.trans09 = false;

		if (this.el) {
			this.buildSlider();
			this.el.addEventListener("input",this.changeValue.bind(this));
		}
	}
	buildSlider() {
		// create a div to contain the <input>
		let rangeWrap = document.createElement("div");
        let counterTop = document.querySelector(".counter-top")
		rangeWrap.className = "range";
		this.el.parentElement.insertBefore(rangeWrap,this.el);

		// create another div to contain the <input> and fill
		let rangeInput = document.createElement("span");
		rangeInput.className = "range__input";
		rangeWrap.appendChild(rangeInput);

		// range fill, place the <input> and fill inside container <span>
		let rangeFill = document.createElement("span");
		rangeFill.className = "range__input-fill";
		rangeInput.appendChild(this.el);
		rangeInput.appendChild(rangeFill);

		// create the counter
		let counter = document.createElement("span");
		counter.className = "range__counter order-2 font-semibold text-sm  text-[#0052FE]";
		// document.getElementsById("counter-top").appendChild(counter);
		rangeWrap.previousSibling.previousSibling.appendChild(counter);

		// screen reader value
		let srValue = document.createElement("span");
		srValue.className = "range__counter-sr";
		srValue.textContent = "0";
		counter.appendChild(srValue);

		// column for each digit
		for (let D of this.el.max.split("")) {
			let digitCol = document.createElement("span");
			digitCol.className = "range__counter-column";
			digitCol.setAttribute("aria-hidden","true");
			counter.appendChild(digitCol);

			// digits (blank, 0–9, fake 0)
			for (let d = 0; d <= 11; ++d) {
				let digit = document.createElement("span");
				digit.className = "range__counter-digit";

				if (d > 0)
					digit.textContent = d == 11 ? 0 : `${d - 1}`;

				digitCol.appendChild(digit);
			}
		}

		this.srValue = srValue;
		this.fill = rangeFill;
		this.digitCols = counter.querySelectorAll(".range__counter-column");
		this.lastDigits = this.el.value;

		while (this.lastDigits.length < this.digitCols.length)
			this.lastDigits = " " + this.lastDigits;

		this.changeValue();

		// use the transition duration from CSS
		let colCS = window.getComputedStyle(this.digitCols[0]),
			transDur = colCS.getPropertyValue("transition-duration"),
			msLabelPos = transDur.indexOf("ms"),
			sLabelPos = transDur.indexOf("s");

		if (msLabelPos > -1)
			this.rollDuration = transDur.substr(0,msLabelPos);
		else if (sLabelPos > -1)
			this.rollDuration = transDur.substr(0,sLabelPos) * 1e3;
	}
	changeValue() {
		// keep the value within range
		if (+this.el.value > this.el.max)
			this.el.value = this.el.max;

		else if (+this.el.value < this.el.min)
			this.el.value = this.el.min;

		// update the screen reader value
		if (this.srValue)
			this.srValue.textContent = this.el.value;

		// width of fill
		if (this.fill) {
			let pct = this.el.value / this.el.max,
				fillWidth = pct * 100,
				thumbEm = -0.06 - pct;

			this.fill.style.width = `calc(${fillWidth}% + ${thumbEm}em)`;
		}
		
		if (this.digitCols) {
			let rangeVal = this.el.value;

			// add blanks at the start if needed
			while (rangeVal.length < this.digitCols.length)
				rangeVal = " " + rangeVal;

			// get the differences between current and last digits
			let diffsFromLast = [];
			if (this.lastDigits) {
				rangeVal.split("").forEach((r,i) => {
					let diff = +r - this.lastDigits[i];
					diffsFromLast.push(diff);
				});
			}

			// roll the digits
			this.trans09 = false;
			rangeVal.split("").forEach((e,i) => {
				let digitH = 1.5,
					over9 = false,
					under0 = false,
					transY = e === " " ? 0 : (-digitH * (+e + 1)),
					col = this.digitCols[i];

				// start handling the 9-to-0 or 0-to-9 transition
				if (e == 0 && diffsFromLast[i] == -9) {
					transY = -digitH * 11;
					over9 = true;

				} else if (e == 9 && diffsFromLast[i] == 9) {
					transY = 0;
					under0 = true;
				}

				col.style.transform = `translateY(${transY}em)`;
				col.firstChild.textContent = "";

				// finish the transition
				if (over9 || under0) {
					this.trans09 = true;
					// add a temporary 9
					if (under0)
						col.firstChild.textContent = e;

					setTimeout(() => {
						if (this.trans09) {
							let pauseClass = "range__counter-column--pause",
								transYAgain = -digitH * (over9 ? 1 : 10);

							col.classList.add(pauseClass);
							col.style.transform = `translateY(${transYAgain}em)`;
							void col.offsetHeight;
							col.classList.remove(pauseClass);

							// remove the 9
							if (under0)
								col.firstChild.textContent = "";
						}

					},this.rollDuration);
				}
			});
			this.lastDigits = rangeVal;
		}
	}
}
    </script>
</div>
<?php /**PATH /home/dh_ag462h/bereken.webonedevs.com/resources/views/livewire/internet/internet.blade.php ENDPATH**/ ?>