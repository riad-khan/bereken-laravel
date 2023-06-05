    <!-- header start -->
    <header>

        <div class="w-full z-40 absolute md:relative text-gray-700 bg-white">
            <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-2 mx-auto md:items-center md:justify-between md:flex-row md:px-0 ">
              <div class="py-4 flex flex-row items-center justify-between">
                <a href="/" class="flex items-center">
                    <img src="{{asset('/frontend/assets/img/full-logo.svg')}}" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
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
              <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                <a class="active-link py-2 mx-2 text-sm font-semibold text-[#2B313B] bg-white md:mt-0 hover:text-blue-500 " href="/">Home</a>
                <a href="/" @click.away="open = false" class="dropdown" x-data="{ open: false }">
                  <button @click="open = !open" class="flex flex-row items-center w-full py-2 my-2 mx-2 text-sm font-semibold text-left text-[#2B313B] bg-transparent md:w-auto md:inline md:mt-0 md:ml-4 hover:text-blue-500 ">
                    <span>Calculations</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </button>
                  <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="sub-dropdown absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg ">
                    
                    <div :class="{'grid': open, 'hidden': !open}" class="sub-dropdown hidden grid inset-x-0 top-0 absolute z-40 grid-cols-1 w-full text-sm bg-white shadow-md">
                        <div class="grid py-5 px-4 md:mx-auto max-w-screen-xl gap-4 sm:grid-cols-3 md:grid-cols-6 md:px-4">
                            <ul aria-labelledby="mega-menu-full-dropdown-button leading-7">
                                <li class="mb-2">
                                    <div class="font-semibold text-black text-base mb-4">Background Information</div>
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 1</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 2</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 3</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 4</a>
                                </li>
                            </ul>
                            <ul class="leading-7">
                                <li class="mb-2">
                                    <div class="font-semibold text-black text-base mb-4">What cost</div>
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 1</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 2</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 3</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 4</a>
                                </li>
                            </ul>
                            <ul class="leading-7">
                                <li class="mb-2">
                                    <div class="font-semibold text-black text-base mb-4">News Blog</div>
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 1</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 2</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 3</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 4</a>
                                </li>
                            </ul>
                            <ul class="leading-7">
                                <li class="mb-2">
                                    <div class="font-semibold text-black text-base mb-4">Business / B2B Information</div>
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 1</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 2</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 3</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 4</a>
                                </li>
                            </ul>
                            <ul class="leading-7">
                                <li class="mb-2">
                                    <div class="font-semibold text-black text-base mb-4">Current calculations</div>
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 1</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 2</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 3</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 4</a>
                                </li>
                            </ul>
                            <ul class="hidden md:block">
                                <li class="mb-2">
                                    <div class="font-semibold text-black text-base mb-4">Service pages</div>
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 1</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 2</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 3</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="block text-xs font-normal text-[#6B6C6F]">Sub-menu 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                  </div>
                </a> 
                <a class="py-2 my-2 mx-2 text-sm font-semibold text-[#2B313B] bg-white rounded-lg md:mt-0 hover:text-blue-500 " href="/compares">Compares</a>
                <a class="py-2 my-2 mx-2 text-sm font-semibold text-[#2B313B] bg-white rounded-lg md:mt-0 hover:text-blue-500 " href="/knowledge">Knowledge</a>   
                <a class="py-2 my-2 ml-4 text-sm font-semibold text-[#2B313B] bg-white rounded-lg md:mt-0 hover:text-blue-500 " href="/news">News</a>   
              </nav>
            </div>
          </div>
          
    </header>
    <!-- header end -->