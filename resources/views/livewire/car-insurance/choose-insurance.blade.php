<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="section-title text-center ">
            <h1 class="text-2xl md:text-[32px] font-semibold text-[#2B313B] p-4 mb-6 sm:mb-14 sm:pt-4">Choose your Insurance</h1>
        </div>
        <div class="container mx-auto max-w-screen-xl"> <!-- container start -->            
            <div class="flex flex-col md:flex-row">
                <div class="basis-full md:basis-3/12 mr-0 md:mr-4">
                    <div class="filter-area" x-data="{ open: false }">
                       <span class="flex border border-[#F5F8FF] p-3 mb-4 rounded-md md:border-none md:p-0  items-center justify-between">     
                        <h2 class="text-[#2B313B] font-semibold text-base">Filters</h2>
                            <button class="visible md:hidden" @click="open = ! open"><img src="{{asset('/frontend/assets/img/filter.svg')}}" alt="icon"></button>                        
                       </span>
                        <div class="main-filter absolute md:relative filter-list md:block" x-show="open" x-transition>
                            <div class="relative flex flex-col bg-white inner-area border border-[#F5F8FF] rounded-2xl p-5">
                                <button class="absolute right-2 top-2 md:hidden" @click="open = false"><img src="{{asset('/frontend/assets/img/close.svg')}}" alt="icon"></button>
                                <span class="single-filter mb-4">
                                <h2 class="text-[#2B313B] font-semibold text-2xl mb-4 flex md:hidden">Filters</h2>
                                    <h3 class="font-semibold text-base text-[#2B313B] mb-2">Coverage</h3>
                                    <ul>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              <ul class="-mt-1">
                                                <li>Wah</li>
                                                <li><span class="sm-text text-[#6C7A93] text-sm font-normal block">Legal liability</span></li>
                                              </ul>
                                            </label>
                                          </div>
                                        </li>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              <ul class="-mt-1">
                                                <li>WA+</li>
                                                <li><span class="sm-text text-[#6C7A93] text-sm font-normal block">Limited Hull</span></li>
                                              </ul>
                                            </label>
                                          </div>
                                        </li>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              <ul class="-mt-1">
                                                <li>All Risk</li>
                                                <li><span class="sm-text text-[#6C7A93] text-sm font-normal block">Full Hull</span></li>
                                              </ul>
                                            </label>
                                          </div>
                                        </li>
                                    </ul>
                                </span>
                                <span class="single-filter mb-4">
                                    <h3 class="font-semibold text-base text-[#2B313B] mb-2">Categories</h3>
                                    <ul>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class="" name="check">
                                              <span class="input-check"></span>
                                              Best at Bereken
                                            </label>
                                          </div>
                                        </li>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              Best Conditions
                                            </label>
                                          </div>
                                        </li>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              All Insurances
                                            </label>
                                          </div>
                                        </li>
                                    </ul>
                                </span>
                                <span class="single-filter mb-4">
                                    <h3 class="font-semibold text-base text-[#2B313B] mb-2">Excess</h3>
                                    <ul>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              No preference   
                                            </label>
                                          </div>
                                        </li>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              Best Conditions
                                            </label>
                                          </div>
                                        </li>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              Up to €150
                                            </label>
                                          </div>
                                        </li>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              Up to €500
                                            </label>
                                          </div>
                                        </li>
                                    </ul>
                                </span>
                                <span class="single-filter mb-4">
                                    <h3 class="font-semibold text-base text-[#2B313B] mb-2">Cost per</h3>
                                    <ul>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              Month   
                                            </label>
                                          </div>
                                        </li>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              Year
                                            </label>
                                          </div>
                                        </li>
                                    </ul>
                                </span>
                                <span class="single-filter mb-4">
                                    <h3 class="font-semibold text-base text-[#2B313B] mb-2">Others</h3>
                                    <ul>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" checked class=""  name="check">
                                              <span class="input-check"></span>
                                              Close via Bereken   
                                            </label>
                                          </div>
                                        </li>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              Can be cancelled daily
                                            </label>
                                          </div>
                                        </li>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              Equivalent car scheme
                                            </label>
                                          </div>
                                        </li>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              Free choice of repair
                                            </label>
                                          </div>
                                        </li>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              Telephone contact possible
                                            </label>
                                          </div>
                                        </li>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              No policy costs
                                            </label>
                                          </div>
                                        </li>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              Independer quality mark
                                            </label>
                                          </div>
                                        </li>
                                        <li class="mb-3"><div class="checkbox-animate">
                                            <label class="flex item-center text-sm font-normal">
                                              <input type="checkbox" class=""  name="check">
                                              <span class="input-check"></span>
                                              Driving behavior insurance
                                            </label>
                                          </div>
                                        </li>
                                    </ul>
                                </span>
                            </div>
                        </div>
                        <div class="sm-info bg-[#F5F8FF] p-4 mb-4 flex flex-col rounded-lg w-full h-auto">
                            <span class="flex justify-between"><h3 class="text-[#0052FE] mb-2 font-semibold text-base">AC 3000</h3> <a href="#" class="font-normal text-[#0052FE] text-sm underline">Change</a></span>
                            <span class="flex justify-between"><span class="text-[#2B313B] mb-2 font-normal text-sm">Year</span> <span class="text-[#2B313B] text-sm font-semibold">February 1981</span></span>
                        </div>
                    </div>
                </div>
                <div class="basis-full md:basis-9/12">
                    <h2 class="text-[#2B313B] font-semibold hidden md:block text-base mb-3">Best Deal from Bereken</h2>
                    <div class="single-deal-box bg-white inner-area border border-[#F5F8FF] rounded-2xl p-5 mb-5">
                        <div class="top-part flex justify-between border-b border-[#F5F8FF] mb-3 pb-5">
                            <div class="left-info grid gap-4 content-between grid-cols-1">
                                <img src="{{asset('/frontend/assets/img/logos/fbto.png')}}" alt="logo">
                                <span class="w-fit bg-[#E9FDF2] text-[#26BA65] text-[10px] md:text-sm font-bold mt-2 px-2.5 py-2 rounded ">Value for money: Excellent</span>
                            </div>
                            <div class="right-info flex flex-col items-end">
                                <div class="price font-semibold text-2xl text-[#2B313B] ">
                                    € 28.99
                                </div>
                                <div class="text-[#6C7A93] text-base font-normal">
                                    per month
                                </div>
                                <p class="font-normal  text-xs md:text-sm text-[#0052FE]">Free physio after a car accident</p>
                            </div>
                        </div>
                        <div class="in-list grid grid-cols-2 gap-6 md:gap-2 lg:flex lg:flex-row lg:justify-between">
                        <div class="">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex"> Excess  
                                 <!--Code Block for white tooltip starts-->
                                                        
                                <div class="flex items-center justify-centerr ml-3">
                                    <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                        <img src="{{asset('/frontend/assets/img/info-cir.svg')}}" alt="icon">
                                    </div>
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" :class="{'flex': tooltip = true, 'hidden': tooltip = false}" class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                        <div class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                            <div class="">
                                                <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto" width="9px" height="16px" viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                                            <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                                <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                                    <polygon id="Triangle" transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) " points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="text-sm font-bold text-gray-800 pb-1">Keep track of follow ups</p>
                                                <p class="text-sm leading-4 text-gray-600 pb-3">Reach out to more prospects at the right moment.</p>
                                                <div class="flex justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-sm font-bold text-indigo-700">Step 1 of 4</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <button class="focus:outline-none  focus:text-gray-400 text-sm text-gray-600 underline mr-2 cursor-pointer">Skip Tour</button>
                                                        <button onblur="hideTooltip(1)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-sm">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>         

                                <!--Code Block for white tooltip ends-->
                                    </span>
                                </div>
                                <div class="font-semibold text-sm text-[#2B313B] mt-2">
                                    € 0,-
                                </div>
                            </div>
                            <div class="">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex"> Policy Conditions  
                                 <!--Code Block for white tooltip starts-->
                                                        
                                <div class="flex items-center justify-center ml-3">
                                    <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                        <img src="{{asset('/frontend/assets/img/info-cir.svg')}}" alt="icon">
                                    </div>
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" :class="{'flex': tooltip = true, 'hidden': tooltip = false}" class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                        <div class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                            <div class="">
                                                <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto" width="9px" height="16px" viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                                            <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                                <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                                    <polygon id="Triangle" transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) " points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="text-sm font-bold text-gray-800 pb-1">Keep track of follow ups</p>
                                                <p class="text-sm leading-4 text-gray-600 pb-3">Reach out to more prospects at the right moment.</p>
                                                <div class="flex justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-sm font-bold text-indigo-700">Step 1 of 4</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <button class="focus:outline-none  focus:text-gray-400 text-sm text-gray-600 underline mr-2 cursor-pointer">Skip Tour</button>
                                                        <button onblur="hideTooltip(1)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-sm">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>         

                                <!--Code Block for white tooltip ends-->
                                    </span>
                                </div>
                                <div class="font-semibold text-sm text-[#2B313B] mt-2">
                                    8,3
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex mt-1"> 
                                        <div class="rating-star flex flex-row items-center">
                                        <p class="text-sm font-bold text-[#2B313B] mr-3">8.5 </p>
                                        <div class="flex items-center">
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>First star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Second star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Third star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Fourth star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Fifth star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                        </div>
                                        
                                       
                                    </div>
                                    </span>
                                </div>
                                <div class="font-normal text-sm text-[#2B313B] mt-2">
                                   <a href=""> 10089 Reviews</a>
                                </div>
                            </div>
                            <div>
                                    <div class="font-normal text-sm text-[#2B313B]">
                                        <span class="flex items-center"> <span>Independer Quality Mark</span>  
                                    <!--Code Block for white tooltip starts-->
                                                                    
                                            <div class="flex items-center justify-center ml-3">
                                                <div x-data="{ tooltip: false }" class="h-6 w-6 relative z-30 inline-flex">
                                                <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer flex  items-center">
                                                    <img src="{{asset('/frontend/assets/img/info-cir.svg')}}" alt="icon">
                                                </div>
                                                <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" :class="{'flex': tooltip = true, 'hidden': tooltip = false}" class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                                    <div class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                                        <div class="">
                                                            <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto" width="9px" height="16px" viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                                                        <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                                            <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                                                <polygon id="Triangle" transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) " points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            <p class="text-sm font-bold text-gray-800 pb-1">Keep track of follow ups</p>
                                                            <p class="text-sm leading-4 text-gray-600 pb-3">Reach out to more prospects at the right moment.</p>
                                                            <div class="flex justify-between">
                                                                <div class="flex items-center">
                                                                    <span class="text-sm font-bold text-indigo-700">Step 1 of 4</span>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <button class="focus:outline-none  focus:text-gray-400 text-sm text-gray-600 underline mr-2 cursor-pointer">Skip Tour</button>
                                                                    <button onblur="hideTooltip(1)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-sm">Next</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>         

                                    <!--Code Block for white tooltip ends-->
                                        </span>
                                    </div>
                                    <div class="font-semibold text-sm text-[#2B313B] mt-2">
                                        Yes ✓
                                    </div>
                                </div>
                            <div></div>
                        </div>
                        <div class="md:flex mt-3">
                            <span class="w-full block md:grow bg-[#F5F8FF] p-3 text-[#0052FE] text-sm font-semibold rounded-md">6 months for US€21.00 per month</span>
                            
                            <div class="flex justify-between my-3 md:my-0">                           
                                <a href=""  class="flex items-center text-[#0052FE] font-bold text-sm mx-3"> View <img src="{{asset('/frontend/assets/img/goto-link.svg')}}" class="mx-2" alt="icon"></a>
                                
                                <span class="flex items-center">
                                    <input type="checkbox" name="compare" id="compare" class="mr-2">
                                <label for="compare" class="text-[#2B313B] text-sm font-normal cursor-pointer">Compare</label> 
                                </span>
                            </div>
                        </div>
                        <div class="mt-3" x-data="accordion(1)">
                            
                            <div
                              x-ref="tab"
                              :style="handleToggle()"
                              class="font-normal text-sm border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all"
                            >
                            <div class="insurance-tab mb-5">
                                <article  x-data="{ tab: 'pack-a' }" data-interval="6000">
                                    
                                    <nav role="tablist" class="my-3">
                                        <ul class="lg:flex lg:items-center">
                                            <li class="mb-2 lg:mb-0 mr-4"><button x-on:click="tab = 'pack-a'" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm" x-bind:class="{ 'font-semibold active-tab border-b border-[#0052FE]': tab === 'pack-a' }" >Characterize</button></li>
                                            <li class="mb-2 lg:mb-0 mr-4"><button x-on:click="tab = 'pack-b'" class="pb-1 text-[#6C7A93] border-transparent border-b font-normal text-sm" x-bind:class="{'font-semibold active-tab  border-[#0052FE]': tab === 'pack-b' }" >Pros and Cons</button></li>
                                            <li class="mb-2 lg:mb-0 mr-4"><button x-on:click="tab = 'pack-c'" x-bind:class="{'font-semibold  active-tab border-[#0052FE]': tab === 'pack-c' }" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Coverage</button></li>
                                            <li class="mb-2 lg:mb-0 mr-4"><button x-on:click="tab = 'pack-d'" x-bind:class="{'font-semibold  active-tab border-[#0052FE]': tab === 'pack-d' }" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Value for Money</button></li>
                                            <li class="mb-2 lg:mb-0 "><button  x-on:click="tab = 'pack-e'" x-bind:class="{'font-semibold  active-tab border-[#0052FE]': tab === 'pack-e' }" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Reviews</button></li>
                                        </ul>
                                    </nav>
                                    
                                    <div class="grid">
                                        <div x-show="tab === 'pack-a'">
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 'pack-b'">
                                            <h4>Second content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 'pack-c'">
                                            <h4>Third content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 'pack-d'">
                                            <h4>Fourth content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 'pack-e'">
                                            <h4>Fourth content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                     </div>
                                    
                                </article>
                            </div>
                            </div>
                            <h4
                              @click="handleClick()"
                              class="flex items-center justify-center w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer"
                            >
                              <span>Fold In</span>
                              <svg :class="handleRotate()" class="fill-current text-[#2B313B] h-5 w-5 transform transition-transform duration-500" fill="currentColor"
                              viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                          </svg>
                            </h4>
                          </div>
                    </div>
                    <div class="single-deal-box bg-white inner-area border border-[#F5F8FF] rounded-2xl p-5 mb-5">
                        <div class="top-part flex justify-between border-b border-[#F5F8FF] mb-3 pb-5">
                            <div class="left-info grid gap-4 content-between grid-cols-1">
                                <img src="{{asset('/frontend/assets/img/logos/unive.png')}}" alt="logo">
                                <span class="w-fit bg-[#E9FDF2] text-[#26BA65]  text-[10px] md:text-sm font-bold mt-2 px-2.5 py-2 rounded ">Value for money: Excellent</span>
                            </div>
                            <div class="right-info flex flex-col items-end">
                                <div class="price font-semibold text-2xl text-[#2B313B] ">
                                    € 28.99
                                </div>
                                <div class="text-[#6C7A93] text-base font-normal">
                                    per month
                                </div>
                                <p class="font-normal text-xs md:text-sm text-[#0052FE]">Free physio after a car accident</p>
                            </div>
                        </div>
                        <div class="in-list grid grid-cols-2 gap-6 md:gap-2 lg:flex lg:flex-row lg:justify-between">
                            <div class="">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex"> Excess  
                                 <!--Code Block for white tooltip starts-->
                                                        
                                <div class="flex items-center justify-centerr ml-3">
                                    <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                        <img src="{{asset('/frontend/assets/img/info-cir.svg')}}" alt="icon">
                                    </div>
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" :class="{'flex': tooltip = true, 'hidden': tooltip = false}" class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                        <div class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                            <div class="">
                                                <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto" width="9px" height="16px" viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                                            <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                                <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                                    <polygon id="Triangle" transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) " points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="text-sm font-bold text-gray-800 pb-1">Keep track of follow ups</p>
                                                <p class="text-sm leading-4 text-gray-600 pb-3">Reach out to more prospects at the right moment.</p>
                                                <div class="flex justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-sm font-bold text-indigo-700">Step 1 of 4</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <button class="focus:outline-none  focus:text-gray-400 text-sm text-gray-600 underline mr-2 cursor-pointer">Skip Tour</button>
                                                        <button onblur="hideTooltip(1)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-sm">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>         

                                <!--Code Block for white tooltip ends-->
                                    </span>
                                </div>
                                <div class="font-semibold text-sm text-[#2B313B] mt-2">
                                    € 0,-
                                </div>
                            </div>
                            <div class="">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex"> Policy Conditions  
                                 <!--Code Block for white tooltip starts-->
                                                        
                                <div class="flex items-center justify-center ml-3">
                                    <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                        <img src="{{asset('/frontend/assets/img/info-cir.svg')}}" alt="icon">
                                    </div>
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" :class="{'flex': tooltip = true, 'hidden': tooltip = false}" class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                        <div class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                            <div class="">
                                                <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto" width="9px" height="16px" viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                                            <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                                <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                                    <polygon id="Triangle" transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) " points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="text-sm font-bold text-gray-800 pb-1">Keep track of follow ups</p>
                                                <p class="text-sm leading-4 text-gray-600 pb-3">Reach out to more prospects at the right moment.</p>
                                                <div class="flex justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-sm font-bold text-indigo-700">Step 1 of 4</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <button class="focus:outline-none  focus:text-gray-400 text-sm text-gray-600 underline mr-2 cursor-pointer">Skip Tour</button>
                                                        <button onblur="hideTooltip(1)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-sm">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>         

                                <!--Code Block for white tooltip ends-->
                                    </span>
                                </div>
                                <div class="font-semibold text-sm text-[#2B313B] mt-2">
                                    8,3
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex mt-1"> 
                                        <div class="rating-star flex flex-row items-center">
                                        <p class="text-sm font-bold text-[#2B313B] mr-3">8.5 </p>
                                        <div class="flex items-center">
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>First star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Second star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Third star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Fourth star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Fifth star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                        </div>
                                        
                                       
                                    </div>
                                    </span>
                                </div>
                                <div class="font-normal text-sm text-[#2B313B] mt-2">
                                   <a href=""> 10089 Reviews</a>
                                </div>
                            </div>
                            <div>
                                    <div class="font-normal text-sm text-[#2B313B]">
                                        <span class="flex items-center"> <span>Independer Quality Mark</span>  
                                    <!--Code Block for white tooltip starts-->
                                                                    
                                            <div class="flex items-center justify-center ml-3">
                                                <div x-data="{ tooltip: false }" class="h-6 w-6 relative z-30 inline-flex">
                                                <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer flex  items-center">
                                                    <img src="{{asset('/frontend/assets/img/info-cir.svg')}}" alt="icon">
                                                </div>
                                                <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" :class="{'flex': tooltip = true, 'hidden': tooltip = false}" class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                                    <div class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                                        <div class="">
                                                            <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto" width="9px" height="16px" viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                                                        <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                                            <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                                                <polygon id="Triangle" transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) " points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                            <p class="text-sm font-bold text-gray-800 pb-1">Keep track of follow ups</p>
                                                            <p class="text-sm leading-4 text-gray-600 pb-3">Reach out to more prospects at the right moment.</p>
                                                            <div class="flex justify-between">
                                                                <div class="flex items-center">
                                                                    <span class="text-sm font-bold text-indigo-700">Step 1 of 4</span>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <button class="focus:outline-none  focus:text-gray-400 text-sm text-gray-600 underline mr-2 cursor-pointer">Skip Tour</button>
                                                                    <button onblur="hideTooltip(1)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-sm">Next</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>         

                                    <!--Code Block for white tooltip ends-->
                                        </span>
                                    </div>
                                    <div class="font-semibold text-sm text-[#2B313B] mt-2">
                                        Yes ✓
                                    </div>
                                </div>
                            <div>


                            </div>
                        </div>
                        <div class="md:flex mt-3">
                            <span class="w-full block md:grow bg-[#F5F8FF] p-3 text-[#0052FE] text-sm font-semibold rounded-md">6 months for US€21.00 per month</span>
                            
                            <div class="flex justify-between my-3 md:my-0">                           
                                <a href=""  class="flex items-center text-[#0052FE] font-bold text-sm mx-3"> View <img src="{{asset('/frontend/assets/img/goto-link.svg')}}" class="mx-2" alt="icon"></a>
                                
                                <span class="flex items-center">
                                    <input type="checkbox" name="compare" id="compare" class="mr-2">
                                <label for="compare" class="text-[#2B313B] text-sm font-normal cursor-pointer">Compare</label> 
                                </span>
                            </div>
                        </div>
                        <div class="mt-3" x-data="accordion(2)">
                            
                            <div
                              x-ref="tab"
                              :style="handleToggle()"
                              class="font-normal text-sm border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all"
                            >
                            <div class="insurance-tab mb-5">
                                <article  x-data="{ tab: 0 }" data-interval="6000">
                                    
                                    <nav role="tablist" class="my-3">
                                        <ul class="lg:flex lg:items-center">
                                            <li class="mb-2 lg:mb-0 mr-4"><button href="!#" x-on:click="tab = 0" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm" x-bind:class="{ 'font-semibold active-tab border-[#0052FE]': tab === 0 }" >Characterize</button></li>
                                            <li class="mb-2 lg:mb-0 mr-4"><button x-on:click="tab = 1" class="pb-1 text-[#6C7A93] border-transparent font-normal text-sm" x-bind:class="{'font-semibold  active-tab border-b  border-[#0052FE]': tab === 1 }" >Pros and Cons</button></li>
                                            <li class="mb-2 lg:mb-0 mr-4"><button x-on:click="tab = 2" x-bind:class="{'font-semibold  active-tab border-[#0052FE]': tab === 2 }" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Coverage</button></li>
                                            <li class="mb-2 lg:mb-0 mr-4"><button x-on:click="tab = 3" x-bind:class="{'font-semibold  active-tab border-[#0052FE]': tab === 3 }" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Value for Money</button></li>
                                            <li class="mb-2 lg:mb-0 "><button  x-on:click="tab = 4" x-bind:class="{'font-semibold  active-tab border-[#0052FE]': tab === 4 }" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Reviews</button></li>
                                        </ul>
                                    </nav>
                                    
                                    <div class="grid">
                                        <div x-show="tab === 0">
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 1">
                                            <h4>Second content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 2">
                                            <h4>Third content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 3">
                                            <h4>Fourth content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 4">
                                            <h4>Fourth content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                     </div>
                                    
                                </article>
                            </div>
                            </div>
                            <h4
                              @click="handleClick()"
                              class="flex items-center justify-center w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer"
                            >
                              <span>Fold In</span>
                              <svg :class="handleRotate()" class="fill-current text-[#2B313B] h-5 w-5 transform transition-transform duration-500" fill="currentColor"
                              viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                          </svg>
                            </h4>
                          </div>
                    </div>
                    <div class="single-deal-box bg-white inner-area border border-[#F5F8FF] rounded-2xl p-5 mb-5">
                        <div class="top-part flex justify-between border-b border-[#F5F8FF] mb-3 pb-5">
                            <div class="left-info grid gap-4 content-between grid-cols-1">
                                <img src="{{asset('/frontend/assets/img/logos/centraal.png')}}" alt="logo">
                                <span class="w-fit bg-[#E9FDF2] text-[#26BA65]  text-[10px] md:text-sm font-bold mt-2 px-2.5 py-2 rounded ">Value for money: Excellent</span>
                            </div>
                            <div class="right-info flex flex-col items-end">
                                <div class="price font-semibold text-2xl text-[#2B313B] ">
                                    € 28.99
                                </div>
                                <div class="text-[#6C7A93] text-base font-normal">
                                    per month
                                </div>
                                <p class="font-normal  text-xs md:text-sm text-[#0052FE]">Free physio after a car accident</p>
                            </div>
                        </div>
                        <div class="in-list grid grid-cols-2 gap-6 md:gap-2 lg:flex lg:flex-row lg:justify-between">
                            <div class="">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex"> Excess  
                                 <!--Code Block for white tooltip starts-->
                                                        
                                <div class="flex items-center justify-centerr ml-3">
                                    <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                        <img src="{{asset('/frontend/assets/img/info-cir.svg')}}" alt="icon">
                                    </div>
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" :class="{'flex': tooltip = true, 'hidden': tooltip = false}" class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                        <div class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                            <div class="">
                                                <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto" width="9px" height="16px" viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                                            <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                                <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                                    <polygon id="Triangle" transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) " points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="text-sm font-bold text-gray-800 pb-1">Keep track of follow ups</p>
                                                <p class="text-sm leading-4 text-gray-600 pb-3">Reach out to more prospects at the right moment.</p>
                                                <div class="flex justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-sm font-bold text-indigo-700">Step 1 of 4</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <button class="focus:outline-none  focus:text-gray-400 text-sm text-gray-600 underline mr-2 cursor-pointer">Skip Tour</button>
                                                        <button onblur="hideTooltip(1)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-sm">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>         

                                <!--Code Block for white tooltip ends-->
                                    </span>
                                </div>
                                <div class="font-semibold text-sm text-[#2B313B] mt-2">
                                    € 0,-
                                </div>
                            </div>
                            <div class="">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex"> Policy Conditions  
                                 <!--Code Block for white tooltip starts-->
                                                        
                                <div class="flex items-center justify-center ml-3">
                                    <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                        <img src="{{asset('/frontend/assets/img/info-cir.svg')}}" alt="icon">
                                    </div>
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" :class="{'flex': tooltip = true, 'hidden': tooltip = false}" class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                        <div class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                            <div class="">
                                                <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto" width="9px" height="16px" viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                                            <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                                <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                                    <polygon id="Triangle" transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) " points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="text-sm font-bold text-gray-800 pb-1">Keep track of follow ups</p>
                                                <p class="text-sm leading-4 text-gray-600 pb-3">Reach out to more prospects at the right moment.</p>
                                                <div class="flex justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-sm font-bold text-indigo-700">Step 1 of 4</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <button class="focus:outline-none  focus:text-gray-400 text-sm text-gray-600 underline mr-2 cursor-pointer">Skip Tour</button>
                                                        <button onblur="hideTooltip(1)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-sm">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>         

                                <!--Code Block for white tooltip ends-->
                                    </span>
                                </div>
                                <div class="font-semibold text-sm text-[#2B313B] mt-2">
                                    8,3
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex mt-1"> 
                                        <div class="rating-star flex flex-row items-center">
                                        <p class="text-sm font-bold text-[#2B313B] mr-3">8.5 </p>
                                        <div class="flex items-center">
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>First star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Second star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Third star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Fourth star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Fifth star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                        </div>
                                        
                                       
                                    </div>
                                    </span>
                                </div>
                                <div class="font-normal text-sm text-[#2B313B] mt-2">
                                   <a href=""> 10089 Reviews</a>
                                </div>
                            </div>
                            <div>
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex items-center"> <span>Independer Quality Mark</span>  
                                 <!--Code Block for white tooltip starts-->
                                                                
                                        <div class="flex items-center justify-center ml-3">
                                            <div x-data="{ tooltip: false }" class="h-6 w-6 relative z-30 inline-flex">
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer flex  items-center">
                                                <img src="{{asset('/frontend/assets/img/info-cir.svg')}}" alt="icon">
                                            </div>
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" :class="{'flex': tooltip = true, 'hidden': tooltip = false}" class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                                <div class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                                    <div class="">
                                                        <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto" width="9px" height="16px" viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                                                    <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                                        <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                                            <polygon id="Triangle" transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) " points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <p class="text-sm font-bold text-gray-800 pb-1">Keep track of follow ups</p>
                                                        <p class="text-sm leading-4 text-gray-600 pb-3">Reach out to more prospects at the right moment.</p>
                                                        <div class="flex justify-between">
                                                            <div class="flex items-center">
                                                                <span class="text-sm font-bold text-indigo-700">Step 1 of 4</span>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <button class="focus:outline-none  focus:text-gray-400 text-sm text-gray-600 underline mr-2 cursor-pointer">Skip Tour</button>
                                                                <button onblur="hideTooltip(1)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-sm">Next</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>         

                                <!--Code Block for white tooltip ends-->
                                    </span>
                                </div>
                                <div class="font-semibold text-sm text-[#2B313B] mt-2">
                                    Yes ✓
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="md:flex mt-3">
                            <span class="w-full block md:grow bg-[#F5F8FF] p-3 text-[#0052FE] text-sm font-semibold rounded-md">6 months for US€21.00 per month</span>
                            
                            <div class="flex justify-between my-3 md:my-0">                           
                                <a href=""  class="flex items-center text-[#0052FE] font-bold text-sm mx-3"> View <img src="{{asset('/frontend/assets/img/goto-link.svg')}}" class="mx-2" alt="icon"></a>
                                
                                <span class="flex items-center">
                                    <input type="checkbox" name="compare" id="compare" class="mr-2">
                                <label for="compare" class="text-[#2B313B] text-sm font-normal cursor-pointer">Compare</label> 
                                </span>
                            </div>
                        </div>
                        <div class="mt-3" x-data="accordion(3)">
                            
                            <div
                              x-ref="tab"
                              :style="handleToggle()"
                              class="font-normal text-sm border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all"
                            >
                            <div class="insurance-tab mb-5" x-data="slider()">
                                <article  x-data="{ tab: 0 }" data-interval="6000">
                                    
                                    <nav role="tablist" class="my-3">
                                        <ul class="lg:flex lg:items-center">
                                            <li class="mb-2 lg:mb-0 mr-4"><button x-on:click="tab = 0" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm" x-bind:class="{ 'font-semibold  active-tab border-[#0052FE]': tab === 0 }" >Characterize</button></li>
                                            <li class="mb-2 lg:mb-0 mr-4"><button x-on:click="tab = 1" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm" x-bind:class="{'font-semibold  active-tab  border-[#0052FE]': tab === 1 }" >Pros and Cons</button></li>
                                            <li class="mb-2 lg:mb-0 mr-4"><button x-on:click="tab = 2" x-bind:class="{'font-semibold  active-tab border-[#0052FE]': tab === 2 }" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Coverage</button></li>
                                            <li class="mb-2 lg:mb-0 mr-4"><button x-on:click="tab = 3" x-bind:class="{'font-semibold  active-tab border-[#0052FE]': tab === 3 }" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Value for Money</button></li>
                                            <li class="mb-2 lg:mb-0 "><button  x-on:click="tab = 4" x-bind:class="{'font-semibold  active-tab border-[#0052FE]': tab === 4 }" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Reviews</button></li>
                                        </ul>
                                    </nav>
                                    
                                    <div class="grid">
                                        <div x-show="tab === 0">
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 1">
                                            <h4>Second content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 2">
                                            <h4>Third content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 3">
                                            <h4>Fourth content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 4">
                                            <h4>Fourth content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                     </div>
                                    
                                </article>
                            </div>
                            </div>
                            <h4
                              @click="handleClick()"
                              class="flex items-center justify-center w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer"
                            >
                              <span>Fold In</span>
                              <svg :class="handleRotate()" class="fill-current text-[#2B313B] h-5 w-5 transform transition-transform duration-500" fill="currentColor"
                              viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                          </svg>
                            </h4>
                          </div>
                    </div>
                    <div class="single-deal-box bg-white inner-area border border-[#F5F8FF] rounded-2xl p-5 mb-5">
                        <div class="top-part flex justify-between border-b border-[#F5F8FF] mb-3 pb-5">
                            <div class="left-info grid gap-4 content-between grid-cols-1">
                                <img src="{{asset('/frontend/assets/img/logos/asr.png')}}" alt="logo">
                                <span class="w-fit bg-[#E9FDF2] text-[#26BA65]  text-[10px] md:text-sm font-bold mt-2 px-2.5 py-2 rounded ">Value for money: Excellent</span>
                            </div>
                            <div class="right-info flex flex-col items-end">
                                <div class="price font-semibold text-2xl text-[#2B313B] ">
                                    € 28.99
                                </div>
                                <div class="text-[#6C7A93] text-base font-normal">
                                    per month
                                </div>
                                <p class="font-normal  text-xs md:text-sm text-[#0052FE]">Free physio after a car accident</p>
                            </div>
                        </div>
                        <div class="in-list grid grid-cols-2 gap-6 md:gap-2 lg:flex lg:flex-row lg:justify-between">
                            <div class="">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex"> Excess  
                                 <!--Code Block for white tooltip starts-->
                                                        
                                <div class="flex items-center justify-centerr ml-3">
                                    <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                        <img src="{{asset('/frontend/assets/img/info-cir.svg')}}" alt="icon">
                                    </div>
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" :class="{'flex': tooltip = true, 'hidden': tooltip = false}" class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                        <div class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                            <div class="">
                                                <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto" width="9px" height="16px" viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                                            <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                                <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                                    <polygon id="Triangle" transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) " points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="text-sm font-bold text-gray-800 pb-1">Keep track of follow ups</p>
                                                <p class="text-sm leading-4 text-gray-600 pb-3">Reach out to more prospects at the right moment.</p>
                                                <div class="flex justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-sm font-bold text-indigo-700">Step 1 of 4</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <button class="focus:outline-none  focus:text-gray-400 text-sm text-gray-600 underline mr-2 cursor-pointer">Skip Tour</button>
                                                        <button onblur="hideTooltip(1)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-sm">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>         

                                <!--Code Block for white tooltip ends-->
                                    </span>
                                </div>
                                <div class="font-semibold text-sm text-[#2B313B] mt-2">
                                    € 0,-
                                </div>
                            </div>
                            <div class="">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex"> Policy Conditions  
                                 <!--Code Block for white tooltip starts-->
                                                        
                                <div class="flex items-center justify-center ml-3">
                                    <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer">
                                        <img src="{{asset('/frontend/assets/img/info-cir.svg')}}" alt="icon">
                                    </div>
                                    <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" :class="{'flex': tooltip = true, 'hidden': tooltip = false}" class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                        <div class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                            <div class="">
                                                <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto" width="9px" height="16px" viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                                            <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                                <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                                    <polygon id="Triangle" transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) " points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <p class="text-sm font-bold text-gray-800 pb-1">Keep track of follow ups</p>
                                                <p class="text-sm leading-4 text-gray-600 pb-3">Reach out to more prospects at the right moment.</p>
                                                <div class="flex justify-between">
                                                    <div class="flex items-center">
                                                        <span class="text-sm font-bold text-indigo-700">Step 1 of 4</span>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <button class="focus:outline-none  focus:text-gray-400 text-sm text-gray-600 underline mr-2 cursor-pointer">Skip Tour</button>
                                                        <button onblur="hideTooltip(1)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-sm">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>         

                                <!--Code Block for white tooltip ends-->
                                    </span>
                                </div>
                                <div class="font-semibold text-sm text-[#2B313B] mt-2">
                                    8,3
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex mt-1"> 
                                        <div class="rating-star flex flex-row items-center">
                                        <p class="text-sm font-bold text-[#2B313B] mr-3">8.5 </p>
                                        <div class="flex items-center">
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>First star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Second star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Third star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Fourth star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" class="w-4 h-4 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <title>Fifth star</title>
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                        </div>
                                        
                                       
                                    </div>
                                    </span>
                                </div>
                                <div class="font-normal text-sm text-[#2B313B] mt-2">
                                   <a href=""> 10089 Reviews</a>
                                </div>
                            </div>
                            <div>
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex items-center"> <span>Independer Quality Mark</span>  
                                 <!--Code Block for white tooltip starts-->
                                                                
                                        <div class="flex items-center justify-center ml-3">
                                            <div x-data="{ tooltip: false }" class="h-6 w-6 relative z-30 inline-flex">
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" class="cursor-pointer flex  items-center">
                                                <img src="{{asset('/frontend/assets/img/info-cir.svg')}}" alt="icon">
                                            </div>
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false" :class="{'flex': tooltip = true, 'hidden': tooltip = false}" class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                                <div class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                                    <div class="">
                                                        <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto" width="9px" height="16px" viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                                                                    <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                                                        <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                                                            <polygon id="Triangle" transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) " points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        <p class="text-sm font-bold text-gray-800 pb-1">Keep track of follow ups</p>
                                                        <p class="text-sm leading-4 text-gray-600 pb-3">Reach out to more prospects at the right moment.</p>
                                                        <div class="flex justify-between">
                                                            <div class="flex items-center">
                                                                <span class="text-sm font-bold text-indigo-700">Step 1 of 4</span>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <button class="focus:outline-none  focus:text-gray-400 text-sm text-gray-600 underline mr-2 cursor-pointer">Skip Tour</button>
                                                                <button onblur="hideTooltip(1)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-sm">Next</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>         

                                <!--Code Block for white tooltip ends-->
                                    </span>
                                </div>
                                <div class="font-semibold text-sm text-[#2B313B] mt-2">
                                    Yes ✓
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="md:flex mt-3">
                            <span class="w-full block md:grow bg-[#F5F8FF] p-3 text-[#0052FE] text-sm font-semibold rounded-md">6 months for US€21.00 per month</span>
                            
                            <div class="flex justify-between my-3 md:my-0">                           
                                <a href=""  class="flex items-center text-[#0052FE] font-bold text-sm mx-3"> View <img src="{{asset('/frontend/assets/img/goto-link.svg')}}" class="mx-2" alt="icon"></a>
                                
                                <span class="flex items-center">
                                    <input type="checkbox" name="compare" id="compare" class="mr-2">
                                <label for="compare" class="text-[#2B313B] text-sm font-normal cursor-pointer">Compare</label> 
                                </span>
                            </div>
                        </div>
                        <div class="mt-3" x-data="accordion(4)">
                            
                            <div
                              x-ref="tab"
                              :style="handleToggle()"
                              class="font-normal text-sm border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all"
                            >
                            <div class="insurance-tab mb-5" x-data="slider()">
                                <article  x-data="{ tab: 0 }" data-interval="6000">
                                    
                                    <nav role="tablist" class="my-3">
                                        <ul class="lg:flex lg:items-center">
                                            <li class="mb-2 lg:mb-0 mr-4"><button x-on:click="tab = 0" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm" x-bind:class="{ 'font-semibold active-tab border-[#0052FE]': tab === 0 }" >Characterize</button></li>
                                            <li class="mb-2 lg:mb-0 mr-4"><button x-on:click="tab = 1" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm" x-bind:class="{'font-semibold  active-tab  border-[#0052FE]': tab === 1 }" >Pros and Cons</button></li>
                                            <li class="mb-2 lg:mb-0 mr-4"><button x-on:click="tab = 2" x-bind:class="{'font-semibold  active-tab border-[#0052FE]': tab === 2 }" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Coverage</button></li>
                                            <li class="mb-2 lg:mb-0 mr-4"><button x-on:click="tab = 3" x-bind:class="{'font-semibold  active-tab border-[#0052FE]': tab === 3 }" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Value for Money</button></li>
                                            <li class="mb-2 lg:mb-0 "><button  x-on:click="tab = 4" x-bind:class="{'font-semibold  active-tab border-[#0052FE]': tab === 4 }" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Reviews</button></li>
                                        </ul>
                                    </nav>
                                    
                                    <div class="grid">
                                        <div x-show="tab === 0">
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 1">
                                            <h4>Second content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 2">
                                            <h4>Third content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 3">
                                            <h4>Fourth content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 4">
                                            <h4>Fourth content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                     </div>
                                    
                                </article>
                            </div>
                            </div>
                            <h4
                              @click="handleClick()"
                              class="flex items-center justify-center w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer"
                            >
                              <span>Fold In</span>
                              <svg :class="handleRotate()" class="fill-current text-[#2B313B] h-5 w-5 transform transition-transform duration-500" fill="currentColor"
                              viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                          </svg>
                            </h4>
                          </div>
                    </div>
                </div>
              </div>
        </div> <!-- container end -->       
    </section>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
   
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
                return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
            },
            handleToggle() {
                return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
            }
        }));
    })
</script>
</div>
