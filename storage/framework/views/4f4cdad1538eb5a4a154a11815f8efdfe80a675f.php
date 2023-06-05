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
                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <div id="nav-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                    </button>
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
                                        $title1 = DB::table('dropdown_categories')
                                            ->where('id', '=', 1)
                                            ->get();
                                        $links1 = DB::table('dropdown_menus')
                                            ->where('cat_id', '=', 1)
                                            ->get();
                                    ?>
                                    <?php if($title1[0]->status == 1): ?>
                                        <ul aria-labelledby="mega-menu-full-dropdown-button leading-7">



                                            <li class="mb-2">
                                                <div class="font-semibold text-black text-base mb-4">
                                                    <?php echo e($title1[0]->name); ?>

                                                </div>

                                            </li>
                                            <?php $__currentLoopData = $links1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="mb-2">
                                                    <a href="<?php echo e($item->url); ?>"
                                                        class="block text-xs font-normal text-[#6B6C6F]"><?php echo e($item->name); ?></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                    <?php endif; ?>

                                    <?php
                                        $title2 = DB::table('dropdown_categories')
                                            ->where('id', '=', 2)
                                            ->get();
                                        $links2 = DB::table('dropdown_menus')
                                            ->where('cat_id', '=', 2)
                                            ->get();
                                    ?>
                                    <?php if($title2[0]->status == 1): ?>
                                        <ul aria-labelledby="mega-menu-full-dropdown-button leading-7">



                                            <li class="mb-2">
                                                <div class="font-semibold text-black text-base mb-4">
                                                    <?php echo e($title2[0]->name); ?>

                                                </div>

                                            </li>
                                            <?php $__currentLoopData = $links2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="mb-2">
                                                    <a href="<?php echo e($item->url); ?>"
                                                        class="block text-xs font-normal text-[#6B6C6F]"><?php echo e($item->name); ?></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                    <?php endif; ?>


                                    <?php
                                        $title3 = DB::table('dropdown_categories')
                                            ->where('id', '=', 3)
                                            ->get();
                                        $links3 = DB::table('dropdown_menus')
                                            ->where('cat_id', '=', 3)
                                            ->get();
                                    ?>
                                    <?php if($title3[0]->status == 1): ?>
                                        <ul aria-labelledby="mega-menu-full-dropdown-button leading-7">



                                            <li class="mb-2">
                                                <div class="font-semibold text-black text-base mb-4">
                                                    <?php echo e($title3[0]->name); ?>

                                                </div>

                                            </li>
                                            <?php $__currentLoopData = $links3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="mb-2">
                                                    <a href="<?php echo e($item->url); ?>"
                                                        class="block text-xs font-normal text-[#6B6C6F]"><?php echo e($item->name); ?></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                    <?php endif; ?>

                                    <?php
                                        $title4 = DB::table('dropdown_categories')
                                            ->where('id', '=', 4)
                                            ->get();
                                        $links4 = DB::table('dropdown_menus')
                                            ->where('cat_id', '=', 4)
                                            ->get();
                                    ?>
                                    <?php if($title4[0]->status == 1): ?>
                                        <ul aria-labelledby="mega-menu-full-dropdown-button leading-7">



                                            <li class="mb-2">
                                                <div class="font-semibold text-black text-base mb-4">
                                                    <?php echo e($title4[0]->name); ?>

                                                </div>

                                            </li>
                                            <?php $__currentLoopData = $links4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="mb-2">
                                                    <a href="<?php echo e($item->url); ?>"
                                                        class="block text-xs font-normal text-[#6B6C6F]"><?php echo e($item->name); ?></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                    <?php endif; ?>

                                    <?php
                                        $title5 = DB::table('dropdown_categories')
                                            ->where('id', '=', 5)
                                            ->get();
                                        $links5 = DB::table('dropdown_menus')
                                            ->where('cat_id', '=', 5)
                                            ->get();
                                    ?>
                                    <?php if($title5[0]->status == 1): ?>
                                        <ul aria-labelledby="mega-menu-full-dropdown-button leading-7">



                                            <li class="mb-2">
                                                <div class="font-semibold text-black text-base mb-4">
                                                    <?php echo e($title5[0]->name); ?>

                                                </div>

                                            </li>
                                            <?php $__currentLoopData = $links5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="mb-2">
                                                    <a href="<?php echo e($item->url); ?>"
                                                        class="block text-xs font-normal text-[#6B6C6F]"><?php echo e($item->name); ?></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                    <?php endif; ?>

                                    <?php
                                        $title6 = DB::table('dropdown_categories')
                                            ->where('id', '=', 6)
                                            ->get();
                                        $links6 = DB::table('dropdown_menus')
                                            ->where('cat_id', '=', 6)
                                            ->get();
                                    ?>
                                    <?php if($title6[0]->status == 1): ?>
                                        <ul aria-labelledby="mega-menu-full-dropdown-button leading-7">



                                            <li class="mb-2">
                                                <div class="font-semibold text-black text-base mb-4">
                                                    <?php echo e($title6[0]->name); ?>

                                                </div>

                                            </li>
                                            <?php $__currentLoopData = $links6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li class="mb-2">
                                                    <a href="<?php echo e($item->url); ?>"
                                                        class="block text-xs font-normal text-[#6B6C6F]"><?php echo e($item->name); ?></a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </ul>
                                    <?php endif; ?>


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
                </nav>
            </div>
        </div>

    </header>
    <!-- header end -->
<?php /**PATH /home/dh_ag462h/bereken.webonedevs.com/resources/views/livewire/includes/header.blade.php ENDPATH**/ ?>