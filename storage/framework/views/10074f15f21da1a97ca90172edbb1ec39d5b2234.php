    <!-- header start -->
    <header>

        <div class="w-full z-40 top-0 absolute md:relative text-gray-700 bg-white">
            <div x-data="{ open: false }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-4 lg:px-0 ">
                <div class="py-4 flex flex-row items-center justify-between">
                    <a href="/" class="flex items-center">
                        <img src="<?php echo e(asset('/frontend/assets/img/full-logo.svg')); ?>" class="mr-3 h-6 sm:h-9"
                            alt="Flowbite Logo" />
                    </a>

                    <div class="flex items-center gap-4">
                    <button type="button" class="py-2 mx-0 md:mx-2 text-sm font-semibold text-[#2B313B] bg-white rounded-lg hover:text-[#0052fe] flex items-center gap-2"  data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                        ><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.603 13.715L12.1194 10.2333C12.9541 8.96265 13.3256 7.44346 13.1713 5.93126C13.017 4.41905 12.3464 3.00607 11.2722 1.92997C10.3885 1.04804 9.27263 0.434596 8.05417 0.160791C6.83571 -0.113015 5.56455 -0.035962 4.38813 0.383012C3.2117 0.801985 2.17823 1.54571 1.40757 2.52793C0.636917 3.51014 0.160659 4.69059 0.0340397 5.93237C-0.0925796 7.17414 0.135628 8.42635 0.692194 9.54375C1.24876 10.6611 2.11088 11.598 3.17855 12.2455C4.24622 12.8931 5.4757 13.2248 6.72437 13.2023C7.97304 13.1798 9.18975 12.8039 10.2334 12.1183L13.7131 15.5994C13.8365 15.7253 13.9835 15.8256 14.1459 15.8943C14.3082 15.9631 14.4826 15.999 14.6589 16C14.8352 16.001 15.01 15.967 15.1731 15.9C15.3361 15.8331 15.4843 15.7345 15.6091 15.6099C15.7338 15.4853 15.8325 15.3373 15.8996 15.1743C15.9667 15.0114 16.0008 14.8367 16 14.6605C15.9991 14.4843 15.9633 14.31 15.8946 14.1477C15.8259 13.9854 15.7257 13.8383 15.5998 13.715H15.603ZM3.8116 9.38659C3.26048 8.83558 2.8852 8.13363 2.73322 7.36947C2.58124 6.60532 2.65937 5.81328 2.95774 5.0935C3.25611 4.37373 3.76132 3.75854 4.40949 3.32571C5.05766 2.89289 5.81969 2.66188 6.59921 2.66188C7.37874 2.66188 8.14076 2.89289 8.78893 3.32571C9.4371 3.75854 9.94231 4.37373 10.2407 5.0935C10.5391 5.81328 10.6172 6.60532 10.4652 7.36947C10.3132 8.13363 9.93795 8.83558 9.38683 9.38659C8.64702 10.1246 7.64446 10.5391 6.59921 10.5391C5.55396 10.5391 4.55141 10.1246 3.8116 9.38659Z" fill="#1E3062"/>
</svg>
</button>

                    
                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <div id="nav-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                    </div>
                </div>
                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                    <a class="<?php echo e(Request::segment(1) == '' ? 'active-link':''); ?> py-2 mx-0 md:mx-2 text-sm font-semibold text-[#2B313B] hover:text-[#0052fe] bg-white md:mt-0 hover:text-blue-500 "
                        href="/">Home</a>

                   
                    <div x-on:mouseover="open = true" x-on:mouseleave="open = false" class=""
                        x-data="{ open: false }">
                        <button x-on:mouseover="open = true" x-on:mouseleave="open = false"
                            class="<?php echo e(Request::segment(1) == 'calculations' ? 'active-link':''); ?> flex flex-row items-center justify-between w-full py-2 my-0 md:mx-2 text-sm font-semibold text-left text-[#2B313B] bg-transparent md:w-auto md:inline md:ml-4 hover:text-[#0052fe] ">
                            <span><a href="/calculations">Calculations</a></span>
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                class="hidden md:inline w-4 h-4 mt-1 mr-2 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute hidden md:block right-0 w-full origin-top-right rounded-md shadow-lg border-t border-[#F5F8FF]">

                            <div :class="{ 'grid': open, 'hidden': !open }"
                                class="hidden grid inset-x-0 top-0 absolute z-40 grid-cols-1 w-full text-sm bg-white shadow-md">
                                <button class="absolute right-2 top-2 md:hidden" @click="open = false"><img
                                        src="<?php echo e(asset('frontend/assets/img/close.svg')); ?>" alt="icon"></button>
                                <div
                                    class="grid py-5 px-4 md:mx-auto max-w-screen-xl gap-4 grid-cols-2 sm:grid-cols-3 md:grid-cols-6 md:px-4">

                                    <?php
                                        $dropdownCategorySql = 'select a.id,a.name,a.status from dropdown_categories a where a.status = 1';
                                                                    
                                     $dropdownCategories = DB::select($dropdownCategorySql)
                                    ?>

                                    <?php $__currentLoopData = $dropdownCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <ul aria-labelledby="mega-menu-full-dropdown-button leading-7">



                                        <li class="mb-2">
                                            <div class="font-semibold text-black text-base mb-4">
                                                <?php echo e($item->name); ?>

                                            </div>

                                        </li>

                                        <?php
                                          $menuSql = 'select a.name,a.url from dropdown_menus a 
                                                    left join dropdown_menus_dropdown_category_links b on b.dropdown_menu_id = a.id
                                                    where b.dropdown_category_id = ? order by a.display_order';
                                        $menus = DB::select($menuSql, [$item->id])
                                        ?>

                                       
                                        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                           
                                            <li class="mb-2">
                                                <a href="<?php echo e($menu->url); ?>"
                                                    class="block text-xs font-normal text-[#6B6C6F]"><?php echo e($menu->name); ?></a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>
                                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    

                                   


                                   

                                   

                                  

                                    

                                </div>
                            </div>

                        </div>
                    </div>

                    <a class="<?php echo e(Request::segment(1) == 'knowledge' ? 'active-link':''); ?> py-2 mx-0 md:mx-2 text-sm font-semibold text-[#2B313B] bg-white rounded-lg hover:text-[#0052fe] "
                    href="/knowledge">Knowledge</a>
                <a class="<?php echo e(Request::segment(1) == 'compares' ? 'active-link':''); ?> py-2 mx-0 md:mx-2 text-sm font-semibold text-[#2B313B] bg-white rounded-lg hover:text-[#0052fe] "
                    href="/compares">Compares</a>

                    <a class="<?php echo e(Request::segment(1) == 'news' ? 'active-link':''); ?> py-2 mx-0 md:mx-2 text-sm font-semibold text-[#2B313B] bg-white rounded-lg hover:text-[#0052fe] "
                        href="/news">News</a>
                    <button type="button" class="py-2 mx-0 md:mx-2 text-sm font-semibold text-[#2B313B] bg-white rounded-lg hover:text-[#0052fe] flex items-center gap-2"  data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                        ><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.603 13.715L12.1194 10.2333C12.9541 8.96265 13.3256 7.44346 13.1713 5.93126C13.017 4.41905 12.3464 3.00607 11.2722 1.92997C10.3885 1.04804 9.27263 0.434596 8.05417 0.160791C6.83571 -0.113015 5.56455 -0.035962 4.38813 0.383012C3.2117 0.801985 2.17823 1.54571 1.40757 2.52793C0.636917 3.51014 0.160659 4.69059 0.0340397 5.93237C-0.0925796 7.17414 0.135628 8.42635 0.692194 9.54375C1.24876 10.6611 2.11088 11.598 3.17855 12.2455C4.24622 12.8931 5.4757 13.2248 6.72437 13.2023C7.97304 13.1798 9.18975 12.8039 10.2334 12.1183L13.7131 15.5994C13.8365 15.7253 13.9835 15.8256 14.1459 15.8943C14.3082 15.9631 14.4826 15.999 14.6589 16C14.8352 16.001 15.01 15.967 15.1731 15.9C15.3361 15.8331 15.4843 15.7345 15.6091 15.6099C15.7338 15.4853 15.8325 15.3373 15.8996 15.1743C15.9667 15.0114 16.0008 14.8367 16 14.6605C15.9991 14.4843 15.9633 14.31 15.8946 14.1477C15.8259 13.9854 15.7257 13.8383 15.5998 13.715H15.603ZM3.8116 9.38659C3.26048 8.83558 2.8852 8.13363 2.73322 7.36947C2.58124 6.60532 2.65937 5.81328 2.95774 5.0935C3.25611 4.37373 3.76132 3.75854 4.40949 3.32571C5.05766 2.89289 5.81969 2.66188 6.59921 2.66188C7.37874 2.66188 8.14076 2.89289 8.78893 3.32571C9.4371 3.75854 9.94231 4.37373 10.2407 5.0935C10.5391 5.81328 10.6172 6.60532 10.4652 7.36947C10.3132 8.13363 9.93795 8.83558 9.38683 9.38659C8.64702 10.1246 7.64446 10.5391 6.59921 10.5391C5.55396 10.5391 4.55141 10.1246 3.8116 9.38659Z" fill="#1E3062"/>
</svg>
Zoeken</button>
                </nav>
            </div>
        </div>

    </header>
    <div id="extralarge-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto inset-0 h-[calc(100%-1rem)] max-h-full !items-start">
    <div class="relative w-full max-w-7xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            
            <div class="flex">
                            <div class="relative w-full nav-search">
                                <input type="search" id="search"
                                    class="block p-2.5 w-full z-20 text-sm text-[#2B313B] bg-white transition-all rounded-md shadow-none outline-none ring-0 border-4 border-[#EFF4FF] focus:ring-[#EFF4FF] focus:outline-none focus:shadow-[#EFF4FF] focus:border-[#EFF4FF] focus:shadow-md"
                                    placeholder="find your calculation" autocomplete="off" onkeyup="SearchCalculator()"
                                    required>



                                    
                                    <span class="sr-only">Search</span>
                                <button type="submit" data-modal-hide="extralarge-modal"
                                    class="absolute p-3 top-0 z-20 right-0 border-[#EFF4FF] border-2 text-sm font-bold text-[#0052FE] bg-[#EFF4FF] rounded-r-md hover:bg-[#EFF4FF] focus:outline-none hover:text-[#0052FE] focus:ring-[#EFF4FF]">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <!-- <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="extralarge-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button> -->
                                <ul id="search_by" class="absolute z-20 top-12 bg-white mt-2 left-0 h-auto w-full text-sm rounded-[5px] shadow-md shadow-[0px 2px 20px rgba(69, 130, 220, 0.1)] text-[#2B313B]" aria-labelledby="dropdownSearchButton">
                
                <div class="flex p-3 border-b border-[#D3D7DE]">
                
                <div class="w-full text-base font-bold text-[#2B313B]">Trending Search:</div>
                
                </div>
                <li>
                <a href="/bmi-calculator">
                <div data-name="Bmi Calculator" class="flex px-3 py-2 rounded  hover:bg-gray-100">
                
                <label for="checkbox-item-11" class="w-full text-base font-normal text-[#2B313B] cursor-pointer rounded flex items-center gap-2"><img src="/images/search-icon-2.svg" alt=""> History 1</label>
                
                </div>
                </a>                                                
            
            </li>
                <li>
                <a href="/bmi-calculator">
                <div data-name="Bmi Calculator" class="flex px-3 py-2 rounded  hover:bg-gray-100">
                
                <label for="checkbox-item-11" class="w-full text-base font-normal text-[#2B313B] cursor-pointer rounded flex items-center gap-2"><img src="/images/search-icon-2.svg" alt=""> History 2</label>
                
                </div>
                </a>                                                
            
            </li>
                <li>
                <a href="/bmi-calculator">
                <div data-name="Bmi Calculator" class="flex px-3 py-2 rounded  hover:bg-gray-100">
                
                <label for="checkbox-item-11" class="w-full text-base font-normal text-[#2B313B] cursor-pointer rounded flex items-center gap-2"><img src="/images/search-icon-2.svg" alt=""> History 3</label>
                
                </div>
                </a>                                                
            
            </li>
        
            </div>
                        </div>   
        </ul>
            <!-- <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Extra Large modal
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="extralarge-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div> -->
            <!-- Modal body -->
           
            <!-- Modal footer -->
            <!-- <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="extralarge-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                <button data-modal-hide="extralarge-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
            </div> -->
        </div>
    </div>
                                    </div>
    <!-- header end -->
<?php /**PATH C:\Users\saleh\OneDrive\Desktop\Hassn Vai\Breken.nl\New-Design\bereken-laravel\resources\views/livewire/includes/header.blade.php ENDPATH**/ ?>