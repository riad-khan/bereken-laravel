@php
    $seo_data = DB::table('seo_data_tables')->where('page','=','Vat')->get();
@endphp
@section('meta')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{$seo_data[0]->title}}</title>
    <meta name="description" content="{{$seo_data[0]->seo_meta}}">
    <meta name="description" content="{{$seo_data[0]->seo_keywords}}">

    <script>
        {!! html_entity_decode($seo_data[0]->structured_data) !!}
    </script>
@endsection
<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="section-title text-center ">
                <h1 class="flex justify-center items-center text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">VAT Calculator
                    <svg id="removed_icon" onclick="save_search('Vat Calculator')" class="removed transition ml-2 cursor-pointer hidden" fill="#112954" width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.799988 3.99999C0.799988 2.23268 2.23268 0.799988 3.99999 0.799988H20C21.7673 0.799988 23.2 2.23268 23.2 3.99999V20C23.2 21.7673 21.7673 23.2 20 23.2H3.99999C2.23268 23.2 0.799988 21.7673 0.799988 20V3.99999ZM18.4 5.59999H5.59999V18.4L12 15.2L18.4 18.4V5.59999Z"></path>
                    </svg>

                    <svg id="save_icon" onclick="remove_search('Vat Calculator')" class="save transition ml-2 cursor-pointer hidden" fill="#26BA65" width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                                class="ml-1 text-sm font-normal text-[#0052FE] md:ml-2">VAT</span>
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
                    <form id="vat_form" method="post" data-parsley-validate="" action="{{url('/calculate-vat')}}" enctype="multipart/form-data">
                        @csrf
                        <!-- form start -->
                        <div class="grid gap-4 mb-4 md:mb-6 md:grid-cols-2">
                            <div class="order-1"> <span class="flex justify-between">
                                    <label for="amount"
                                        class="block mb-2  text-xs font-normal text-[#2B313B]">{{$details[0]->amount_label}}</label>

                                    <!--Code Block for white tooltip starts-->

                                    <div class="flex items-center justify-center">
                                        <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                                                class="cursor-pointer">
                                                <img src="{{ asset('frontend/assets/img/icons/info-icon.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                                                :class="{ 'flex': tooltip = true, 'hidden': tooltip = false }"
                                                class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                                <div
                                                    class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                                    <div class="">
                                                        <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto"
                                                            width="9px" height="16px" viewBox="0 0 9 16"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g id="Page-1" stroke="none" stroke-width="1"
                                                                fill="none" fill-rule="evenodd">
                                                                <g id="Tooltips-"
                                                                    transform="translate(-874.000000, -1029.000000)"
                                                                    fill="#FFFFFF">
                                                                    <g id="Group-3-Copy-16"
                                                                        transform="translate(850.000000, 975.000000)">
                                                                        <g id="Group-2"
                                                                            transform="translate(24.000000, 0.000000)">
                                                                            <polygon id="Triangle"
                                                                                transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                                                                                points="4.5 57.5 12.5 66.5 -3.5 66.5">
                                                                            </polygon>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                       {!!html_entity_decode($details[0]->amount_tooltip)!!}
                                                        <div class="flex justify-between">
                                                            <div class="flex items-center">
                                                                <span class="text-xs font-bold text-indigo-700">Step 1
                                                                    of 4</span>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <button
                                                                    class="focus:outline-none  focus:text-gray-400 text-xs text-gray-600 underline mr-2 cursor-pointer">Skip
                                                                    Tour</button>
                                                                <button onblur="hideTooltip(1)"
                                                                    class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-xs">Next</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Code Block for white tooltip ends-->
                                </span>
                                <div class="flex single-field-wrapper">
                                    <span
                                        class="parent-span inline-flex items-center px-3 bg-white text-[#000] font-semibold text-xs border-[#A4BCE6] border focus:ring-none rounded-l-md">
                                        €
                                    </span>
                                    <input type="text" id="amount" name="amount"
                                        class="label-span rounded-none rounded-r-md bg-white border-[#A4BCE6] text-[#6C7A93] font-normal text-xs border border-l-0 focus:ring-none focus:outline-none focus:border-[#3b82f6] flex-1 min-w-0 w-full p-3"
                                        placeholder="" data-parsley-type='digits' data-parsley-errors-container="#amount_error" required>

                                        
                                </div>
                                <span id="amount_error"></span>
                            </div>
                            <div  class="order-3 md:order-2">
                                <span class="flex justify-between">
                                    <label for="weight" class="block mb-2  text-xs font-normal text-[#2B313B]">{{$details[0]->convert_label}}</label>

                                    <!--Code Block for white tooltip starts-->

                                    <div class="flex items-center justify-center">
                                        <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                                                class="cursor-pointer">
                                                <img src="{{ asset('/frontend/assets/img/icons/info-icon.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                                                :class="{ 'flex': tooltip = true, 'hidden': tooltip = false }"
                                                class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                                <div
                                                    class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                                    <div class="">
                                                        <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto"
                                                            width="9px" height="16px" viewBox="0 0 9 16"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g id="Page-1" stroke="none" stroke-width="1"
                                                                fill="none" fill-rule="evenodd">
                                                                <g id="Tooltips-"
                                                                    transform="translate(-874.000000, -1029.000000)"
                                                                    fill="#FFFFFF">
                                                                    <g id="Group-3-Copy-16"
                                                                        transform="translate(850.000000, 975.000000)">
                                                                        <g id="Group-2"
                                                                            transform="translate(24.000000, 0.000000)">
                                                                            <polygon id="Triangle"
                                                                                transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                                                                                points="4.5 57.5 12.5 66.5 -3.5 66.5">
                                                                            </polygon>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                       {!!html_entity_decode($details[0]->convert_tooltip)!!}
                                                        <div class="flex justify-between">
                                                            <div class="flex items-center">
                                                                <span class="text-xs font-bold text-indigo-700">Step 1
                                                                    of 4</span>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <button
                                                                    class="focus:outline-none  focus:text-gray-400 text-xs text-gray-600 underline mr-2 cursor-pointer">Skip
                                                                    Tour</button>
                                                                <button onblur="hideTooltip(1)"
                                                                    class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-xs">Next</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Code Block for white tooltip ends-->
                                </span>
                                <div class="grid gap-2 grid-cols-2 mt-0 md:mt-1 md:grid-cols-1 h-8 items-center">
                                    <div class="flex items-center radio-cu">
                                        <input id="inline-radio" checked type="radio" value="include"
                                            name="vatStatus"
                                            class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                        <label for="inline-radio"
                                            class="ml-5 text-[#2B313B] font-normal text-xs">Amount
                                            including VAT</label>
                                    </div>
                                    <div class="flex items-center radio-cu">
                                        <input id="inline-2-radio" type="radio" value="exclude"
                                            name="vatStatus"
                                            class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2">
                                        <label for="inline-2-radio"
                                            class="ml-5 text-[#2B313B] font-normal text-xs">Amount excluding
                                            VAT</label>
                                    </div>
                                </div>

                            </div>

                            <div class="t-select order-2 md:order-3">
                                <span class="flex justify-between">
                                    <label for="rate" class="block mb-2 text-xs font-normal text-[#2B313B]">{{$details[0]->rate_label}}</label>
                                    <!--Code Block for white tooltip starts-->

                                    <div class="flex items-center justify-center">
                                        <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                                                class="cursor-pointer">
                                                <img src="{{ asset('frontend/assets/img/icons/info-icon.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                                                :class="{ 'flex': tooltip = true, 'hidden': tooltip = false }"
                                                class="relative hidden" x-cloak
                                                x-show.transition.origin.top="tooltip">
                                                <div
                                                    class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                                    <div class="">
                                                        <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto"
                                                            width="9px" height="16px" viewBox="0 0 9 16"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g id="Page-1" stroke="none" stroke-width="1"
                                                                fill="none" fill-rule="evenodd">
                                                                <g id="Tooltips-"
                                                                    transform="translate(-874.000000, -1029.000000)"
                                                                    fill="#FFFFFF">
                                                                    <g id="Group-3-Copy-16"
                                                                        transform="translate(850.000000, 975.000000)">
                                                                        <g id="Group-2"
                                                                            transform="translate(24.000000, 0.000000)">
                                                                            <polygon id="Triangle"
                                                                                transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                                                                                points="4.5 57.5 12.5 66.5 -3.5 66.5">
                                                                            </polygon>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        {!! html_entity_decode($details[0]->rate_tooltip) !!}
                                                        <div class="flex justify-between">
                                                            <div class="flex items-center">
                                                                <span class="text-xs font-bold text-indigo-700">Step 1
                                                                    of 4</span>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <button
                                                                    class="focus:outline-none  focus:text-gray-400 text-xs text-gray-600 underline mr-2 cursor-pointer">Skip
                                                                    Tour</button>
                                                                <button onblur="hideTooltip(1)"
                                                                    class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-xs">Next</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Code Block for white tooltip ends-->
                                </span>
                                <select  id="rate" name="vat_rate"
                                    class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" data-parsley-errors-container="#rate_error" required="">
                                    <option  value="">Select Vat Parcentage</option>
                                    <option  value="21">21% NL high rate</option>
                                    <option value="9">9%% NL Reduced rate</option>
                                </select>
                                <span id="rate_error"></span>
                            </div>
                            
                            <div class="block md:flex md:items-end order-4">
                                <button type="submit"
                                    class="outline-btn btn-translate-z flex bg-[#0052FE] opacity-100 hover:opacity-90 transition justify-center text-white font-bold rounded-md text-xs w-full px-5 py-3.5 text-center">{{$details[0]->button_text}}</button>
                                    <p class="my-4 block md:hidden sm:ml-6 text-[10px] text-[#6C7A93] font-normal">
                                    
                                </p>
                            </div>
                        </div>
                    </form>

                    <!-- form end -->
                    <div class="info-area py-4">
                        <!-- info area start -->
                        <div id="load-more" class="transition-all">
                        <div class="single-info">
                            {!! html_entity_decode($details[0]->content)!!}
                           </div>
                           
                           <button id="load-more-btn" type="button" class="load-btn-area w-full  inline-block transition-all scale hover:scale-105 mb-4 text-center md:hidden text-[10px] 		font-semibold text-center text-[#0052FE] hover:text-blue-700  ">
                                                 View More <img src="{{asset('frontend/assets/img/icons/arrow-right-blue.svg')}}" class="ml-2 inline-block" alt="arrow-icon">
                           </button>
                           
                           
                           </div>

                       <div class="bottom-part flex-none lg:flex lg:justify-between">
                        <div class="w-full lg:w-auto more-links">
                            <h5 class=" font-bold text-xs text-black mb-2">Other visitors also calculated</h5>
                            <div class="tag-area flex-wrap flex md:flex-none">
                               
                                @php
                                        $list = DB::table('others_calculators')->where('calculator_id','=','2')->get();
                                    @endphp

                                    @foreach ($list as $item )
                                        
                                   

                                    <a target="_blank" href="{{$item->link}}"
                                        class="text-[#0052FE] bg-white border border-[#0052FE] font-normal rounded-md transition-all text-[10px] px-2.5 py-1 text-center mr-2 mb-2">{{$item->name}}</a>

                                        @endforeach
                               
                                    
                            </div>
                        </div>
                        <div class="w-full mt-4 lg:mt-0 lg:w-auto social-links text-left lg:text-right">
                            <h5 class="font-bold text-xs text-black mb-2">Share this Calculation</h5>
                            <ul class="flex flex-row justify-start md:justify-end">
                                <li class="flex ml-0 md:ml-2"> <a href="#" class="  ml-0 md:ml-2"><span
                                            class="flex relative">
                                            <span
                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                                class=" h-5 w-5" src="{{asset('/frontend/assets/img/social/facebook.svg')}}"
                                                alt=""> </span></a></li>
                                <li class="flex  ml-0 md:ml-2"><a href="#" class=" ml-2"><img
                                            class="blob infinity rounded-full h-5 w-5"
                                            src="{{asset('/frontend/assets/img/social/twitter.svg')}}" alt=""> </a></li>
                                <li class="flex  ml-0 md:ml-2"> <a href="#" class=" ml-2"><span
                                            class="flex relative">
                                            <span
                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                                class="h-5 w-5" src="{{asset('/frontend/assets/img/social/instagram.svg')}}"
                                                alt=""></span> </a></li>
                                <li class="flex  ml-0 md:ml-2"><a href="#" class=" ml-2"><img
                                            class="blob infinity rounded-full h-5 w-5"
                                            src="{{asset('/frontend/assets/img/social/youtube.svg')}}" alt=""> </a></li>
                            </ul>
                        </div>
                    </div>
                    </div> <!-- info area end -->
                </div> <!-- main-inner-area end -->
            </div>
            <!-- left-side-area end -->
            <!-- right-side-area-start -->
            <div class="side-bar basis-full md:basis-4/12">
                <div class="inner-area ml-1 lg:ml-4 p-2 md:p-0">
                    <livewire:components.vats.featured-calculators />     
                    <livewire:components.vats.related-news />   

                    <livewire:components.vats.faq-section />
                   
                    <livewire:components.vats.vat-ratings />
                </div>
            </div>
            <!-- right-side-area-end -->
        </div><!-- container end -->
    </section>
    
    
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" ></script>
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
    $('#vat_form').parsley({
            trigger:      'change',
            successClass: "success",
            errorClass: "error",
            classHandler: function (el) {
                return el.$element.closest('.flex'); //working
            },

        });

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

    checkSavedList('Vat Calculator');
</script>

