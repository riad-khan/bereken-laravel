@php
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
    
    $seo_social_sql = 'select a.social_network,a.title,a.description,d.url
from components_shared_meta_socials a
    left join components_shared_seos_components b on b.component_id = a.id
    left join files_related_morphs c on (c.related_id = b.entity_id and c.field="metaImage")
    left join files d on d.id = c.file_id
    where b.entity_id = ?';
    
    $seo_social = DB::select($seo_social_sql, [$seo_data[0]->component_id]);
    
@endphp
@section('meta')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ $seo_data[0]->meta_title }} </title>
    <meta name="description" content="{{ $seo_data[0]->meta_description }}">
    <meta name="keywords" content="{{ $seo_data[0]->keywords }}">

    @foreach ($seo_social as $social_meta)
        @if ($social_meta->social_network == 'Facebook')
            <meta property="og:title" content="{{ $social_meta->title }}">
            <meta property="og:description" content="{{ $social_meta->description }}">
            <meta property="og:image" content="{{ env('STRAPI_URL') . $social_meta->url }}">
            {{-- <meta property="og:url" content="URL of your page">
   <meta property="og:type" content="website"> --}}
        @else
            <meta name="twitter:card" content="{{$social_meta->description}}">
            <meta name="twitter:title" content="{{$social_meta->title}}">
            <meta name="twitter:description" content="{{$social_meta->description}}">
            <meta name="twitter:image" content="{{ env('STRAPI_URL') . $social_meta->url }}">
        @endif
    @endforeach

    <link rel="canonical" href="{{ $seo_data[0]->canonical_url }}">

    <script>
        {!! html_entity_decode($seo_data[0]->structured_data) !!}
    </script>
@endsection
<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 md:pb-4 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            
            <nav class="flex justify-start" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="inline-flex items-center text-sm font-semibold  text-[#C5C9D2] hover:text-gray-900">Home</a>
                    </li>
                    <li>
                        <div class="flex items-center"><span class="text-[#D3D7DE] font-normal text-xs"> <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.56341 13.2364C6.21194 12.8849 6.21194 12.3151 6.56341 11.9636L9.52701 9L6.56341 6.0364C6.21194 5.68492 6.21194 5.11508 6.56341 4.7636C6.91488 4.41213 7.48473 4.41213 7.8362 4.7636L11.4362 8.3636C11.7877 8.71508 11.7877 9.28492 11.4362 9.6364L7.8362 13.2364C7.48473 13.5879 6.91488 13.5879 6.56341 13.2364Z" fill="#C4C9D1"/>
</svg>
 </span><a
                                href="/calculations"
                                class="ml-1 text-sm font-semibold text-[#C5C9D2] hover:text-gray-900 md:ml-2">Calculations</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center"><span class="text-[#D3D7DE] font-normal text-xs"> <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.56341 13.2364C6.21194 12.8849 6.21194 12.3151 6.56341 11.9636L9.52701 9L6.56341 6.0364C6.21194 5.68492 6.21194 5.11508 6.56341 4.7636C6.91488 4.41213 7.48473 4.41213 7.8362 4.7636L11.4362 8.3636C11.7877 8.71508 11.7877 9.28492 11.4362 9.6364L7.8362 13.2364C7.48473 13.5879 6.91488 13.5879 6.56341 13.2364Z" fill="#C4C9D1"/>
</svg>
 </span><span
                                class="ml-1 text-sm font-semibold text-[#1E3062] md:ml-2">BMI</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="section-title ">
                <h1
                    class="flex justify-start items-center text-[32px] font-semibold text-[#1E3062] pl-0 p-4 sm:pb-6  sm:pt-4">
                    BMI Calculator

                    <svg id="removed_icon" onclick="save_search('Bmi Calculator')"
                        class="removed transition ml-2 cursor-pointer hidden" fill="#112954" width="22"
                        height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.799988 3.99999C0.799988 2.23268 2.23268 0.799988 3.99999 0.799988H20C21.7673 0.799988 23.2 2.23268 23.2 3.99999V20C23.2 21.7673 21.7673 23.2 20 23.2H3.99999C2.23268 23.2 0.799988 21.7673 0.799988 20V3.99999ZM18.4 5.59999H5.59999V18.4L12 15.2L18.4 18.4V5.59999Z">
                        </path>
                    </svg>

                    <svg id="save_icon" onclick="remove_search('Bmi Calculator')"
                        class="save transition ml-2 cursor-pointer hidden" fill="#26BA65" width="22" height="22"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.799988 3.99999C0.799988 2.23268 2.23268 0.799988 3.99999 0.799988H20C21.7673 0.799988 23.2 2.23268 23.2 3.99999V20C23.2 21.7673 21.7673 23.2 20 23.2H3.99999C2.23268 23.2 0.799988 21.7673 0.799988 20V3.99999ZM18.4 5.59999H5.59999V18.4L12 15.2L18.4 18.4V5.59999Z">
                        </path>
                    </svg>
                </h1>
            </div>

        </div>
        <!-- container end -->
    </section>



    <section class="content-area">
        <div class="container mx-auto max-w-screen-xl flex-none md:flex md:flex-row">
            <!-- container start -->
            <div class="main-area basis-full p-2 md:p-0 md:basis-8/12">
                <!-- left-side-area start -->
                <div class="main-inner p-5 border border-[#F5F8FF] rounded-t-2xl">
                    <form id="bmi_form" data-parsley-validate="" action="{{ url('/calculate-bmi') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <!-- form start -->
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div class="t-select">
                                <span class="flex  justify-between">
                                    <label for="gender"
                                        class="block mb-1 text-sm font-normal text-[#2B313B]">{{ $details[0]->gender_label }}</label>


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
                                                        {!! $details[0]->gender_caption !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Code Block for white tooltip ends-->
                                </span>
                                <select id="gender" name="gender"
                                    class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5">
                                    <option
                                        class="p-3 bg-white border-b border border-[#cccccc] font-normal rounded-lg text-base"
                                        value="Male" selected>Male</option>
                                    <option
                                        class="p-3 bg-white border-b border border-[#cccccc] font-normal rounded-lg text-base"
                                        value="Female">Female</option>
                                </select>

                                @error('gender')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <span class="flex justify-between">
                                    <label for="age"
                                        class="block mb-1  text-sm font-normal text-[#2B313B]">{{ $details[0]->age_label }}</label>

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
                                                        {!! $details[0]->age_caption !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </span>
                                <div class="flex single-field-wrapper">
                                    <input type="text" name="age" id="age" data-parsley-type="number"
                                        class="rounded-none rounded-l-md bg-white border border-r-0 border-[#F5F8FF] text-[#2B313B] font-normal text-sm focus:ring-[#3b82f6] focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-3"
                                        placeholder="" required="" data-parsley-errors-container="#age_error">
                                    <span
                                        class="inline-flex items-center px-3 bg-white text-[#2B313B] font-semibold text-xs focus:ring-[#3b82f6] border-[#F5F8FF] border rounded-r-md">
                                        Year
                                    </span>
                                    <label data-parsley-errors-container="#element"></label>
                                </div>
                                @error('age')
                                    <span style="color:red">*{{ $message }}</span>
                                @enderror

                                <span id="age_error"></span>
                            </div>
                            <div class="">
                                <label for="weight"
                                    class="block mb-1  text-sm font-normal text-[#2B313B]">{{ $details[0]->weight_label }}</label>
                                <div class="flex single-field-wrapper">
                                    <input type="text" name="weight" id="weight" data-parsley-type="number"
                                        class="rounded-none rounded-l-md bg-white border border-r-0 border-[#F5F8FF] text-[#2B313B] font-normal text-base focus:ring-[#3b82f6] focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-3"
                                        placeholder="" required="" data-parsley-errors-container="#weight_error">
                                    <span
                                        class="inline-flex items-center px-3 bg-white text-[#2B313B] font-semibold text-xs focus:ring-[#3b82f6] border-[#F5F8FF] border rounded-r-md">
                                        Kg
                                    </span>
                                </div>
                                @error('weight')
                                    <span style="color:red">*{{ $message }}</span>
                                @enderror

                                <span id="weight_error"></span>
                            </div>
                            <div> <span class="flex justify-between">
                                    <label for="height"
                                        class="block mb-1 text-sm font-normal text-[#2B313B]">{{ $details[0]->height_label }}</label>

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
                                                        {!! html_entity_decode($details[0]->height_caption) !!}

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Code Block for white tooltip ends-->
                                </span>
                                <div class="flex single-field-wrapper">
                                    <input type="text" name="height" id="height" data-parsley-type="number"
                                        class="rounded-none rounded-l-md bg-white border border-r-0 border-[#F5F8FF] text-[#2B313B] font-normal text-base focus:ring-[#3b82f6] focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-3"
                                        placeholder="" required="" data-parsley-errors-container="#height_error">
                                    <span
                                        class="input-label inline-flex items-center px-3 bg-white text-[#000] font-semibold text-xs focus:ring-[#3b82f6] border-[#F5F8FF] border rounded-r-md">
                                        Cm
                                    </span>
                                </div>
                                @error('height')
                                    <span style="color:red">*{{ $message }}</span>
                                @enderror
                                <span id="height_error"></span>
                            </div>
                        </div>
                        <div class="sm:flex my-8">
                            <div class="sm:flex sm:items-center">
                                <button type="submit"
                                    class="flex bg-[#1E3062] opacity-100 hover:opacity-90 transition justify-center text-white font-bold rounded-md text-base w-full sm:w-72 px-3 py-3"><span>{{ $details[0]->button_text }}</span></button>
                                <p class="my-4 sm:ml-6 text-[10px] text-[#6C7A93] font-normal">
                                    <i>*{!! html_entity_decode($details[0]->button_details) !!} </i>
                                </p>
                            </div>
                        </div>
                    </form> <!-- form end -->
                    <div class="info-area py-4">
                        <!-- info area start -->

                        <!-- hidden-start -->

                        <livewire:components.b-m-i.bmi-details :details="$details[0]->content" />


                        <!-- hidden-element end -->

                        <div class="bottom-part flex-none lg:flex lg:justify-between">
                            <div class="w-full lg:w-auto more-links">
                                <h5 class=" font-bold text-sm text-black mb-5">Other visitors also calculated</h5>
                                <div class="flex-wrap flex md:flex-none">
                                    @php
                                        $sql = 'select 
                                                    b.calculator_name,
                                                    b.link,
                                                    d.url as icon
                                                    from bmis_other_visitors_also_calculate_links a 
                                                    left join calculator_lists b on b.id = a.calculator_list_id
                                                    left join files_related_morphs c on (c.related_id = b.id and c.field="calculator_icon")
                                                    left join files d on d.id = c.file_id
                                                    where a.bmi_id = ?';
                                        $list = DB::select($sql,[$details[0]->id])
                                    @endphp

                                    @foreach ($list as $item )
                                        
                                   

                                    <a target="_blank" href="{{$item->link}}"
                                        class="text-[#0052FE] bg-white border border-[#0052FE] font-normal rounded-md transition-all text-sm px-2.5 py-1 text-center mr-2 mb-2">{{$item->calculator_name}}</a>

                                        @endforeach

                                </div>
                            </div>
                            <div class="w-full mt-4 lg:mt-0 lg:w-auto social-links text-left lg:text-right">
                                <h5 class="font-bold text-sm text-black mb-5">Share this Calculation</h5>
                                <ul class="flex flex-row justify-start md:justify-end">
                                    <li class="flex ml-0 md:ml-2"> <a href="#" class="  ml-0 md:ml-2"><span
                                                class="flex relative">
                                                <span
                                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                                    class=" h-5 w-5"
                                                    src="{{ asset('/frontend/assets/img/social/facebook.svg') }}"
                                                    alt=""> </span></a></li>
                                    <li class="flex  ml-0 md:ml-2"><a href="#" class=" ml-2"><img
                                                class="blob infinity rounded-full h-5 w-5"
                                                src="{{ asset('/frontend/assets/img/social/twitter.svg') }}"
                                                alt=""> </a></li>
                                    <li class="flex  ml-0 md:ml-2"> <a href="#" class=" ml-2"><span
                                                class="flex relative">
                                                <span
                                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                                    class="h-5 w-5"
                                                    src="{{ asset('/frontend/assets/img/social/instagram.svg') }}"
                                                    alt=""></span> </a></li>
                                    <li class="flex  ml-0 md:ml-2"><a href="#" class=" ml-2"><img
                                                class="blob infinity rounded-full h-5 w-5"
                                                src="{{ asset('/frontend/assets/img/social/youtube.svg') }}"
                                                alt=""> </a></li>
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

                    <livewire:components.b-m-i.featured-calculators :bmi="$details[0]->id" />
                    <livewire:components.b-m-i.related-articles />
                    <livewire:components.b-m-i.bmi-faq :bmi="$details[0]->id"/>
                    <livewire:components.b-m-i.bmi-ratings />

                </div>
            </div>
            <!-- right-side-area-end -->
        </div><!-- container end -->
    </section>
    <script src="https://unpkg.com/flowbite@1.6.1/dist/flowbite.min.js"></script>
    <!-- page-layout-end -->
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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>

    <script>
        $('#bmi_form').parsley({
            trigger: 'change',
            successClass: "success",
            errorClass: "error",
            classHandler: function(el) {
                return el.$element.closest('.flex'); //working
            },

        });

        function checkSavedList(item) {
            let abc = localStorage["saved_search"];
            if (abc) {
                let saved_search = JSON.parse(abc);
                if (saved_search.includes(item)) {
                    document.getElementsByClassName('removed')[0].classList.add('hidden');
                    document.getElementsByClassName('save')[0].classList.remove('hidden');
                } else {
                    document.getElementsByClassName('removed')[0].classList.remove('hidden');
                    document.getElementsByClassName('save')[0].classList.add('hidden');
                }
            } else {
                document.getElementsByClassName('removed')[0].classList.remove('hidden');
                document.getElementsByClassName('save')[0].classList.add('hidden');
            }
        }


        function save_search(item) {
            let abc = localStorage["saved_search"];
            let saved_search = JSON.parse(abc || "[]");
            if (saved_search.includes(item)) {
                console.log('already in saved list');
            } else {
                saved_search.push(item);
                localStorage["saved_search"] = JSON.stringify(saved_search);
                console.log(localStorage["saved_search"]);
            }

            checkSavedList(item);

        }

        function remove_search(item) {
            let abc = localStorage["saved_search"];
            if (abc) {
                let saved_item = JSON.parse(abc);
                let index = saved_item.indexOf(item);
                saved_item.splice(index, 1);
                localStorage.setItem('saved_search', JSON.stringify(saved_item));

                checkSavedList(item);
            }
        }

        checkSavedList('Bmi Calculator');
    </script>




</div>
