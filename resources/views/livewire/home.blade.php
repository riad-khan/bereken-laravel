@php
    $seo_data_sql = 'select a.id,a.page_title,c.id as component_id,
                    c.meta_title,
                    c.meta_description,
                    c.keywords,
                    c.meta_robots,
                    c.structured_data,
                    c.meta_viewport,
                    c.canonical_url from page_seos a
                    left join page_seos_components b on (b.entity_id = a.id and b.field="page_seo" )
                    left join components_shared_seos c on c.id = b.component_id
                    where a.select_page_type="Home"
                    order by a.id ASC limit 1';
    $seo_data = DB::select($seo_data_sql);
    
    $seo_social_sql = 'select a.social_network,a.title,a.description,d.url  from components_shared_meta_socials a
    left join components_shared_seos_components b on b.component_id = a.id
    left join files_related_morphs c on (c.related_id = b.component_id and c.field="metaImage")
    left join files d on d.id = c.file_id
    where b.entity_id = ?';
    
    $seo_social = DB::select($seo_social_sql, [$seo_data[0]->component_id]);
    
    $seo_social = DB::select($seo_social_sql, [$seo_data[0]->component_id]);
    
    $settings = DB::select('select * from home_page_settings order by id ASC limit 1');
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
            <meta name="twitter:card" content="{{ $social_meta->description }}">
            <meta name="twitter:title" content="{{ $social_meta->title }}">
            <meta name="twitter:description" content="{{ $social_meta->description }}">
            <meta name="twitter:image" content="{{ env('STRAPI_URL') . $social_meta->url }}">
        @endif
    @endforeach

    <link rel="canonical" href="{{ $seo_data[0]->canonical_url }}">

    <script>
        {!! html_entity_decode($seo_data[0]->structured_data) !!}
    </script>
@endsection

<div>

    @php
        $content_sql = 'select 
                        a.page_title,
                        a.id,
                        d.url as left_icon,
                        e.url as right_icon
                        from page_seos a 
                        left join files_related_morphs b on (b.related_id = a.id and b.field="left_image_icon")
                        left join files_related_morphs c on (c.related_id = a.id and c.field="right_image_icon")
                        left join files d on d.id = b.file_id
                        left join files e on e.id = c.file_id
                        where a.id = ?';
        $data = DB::select($content_sql, [$seo_data[0]->id]);
    @endphp

    <section class="hero bg-[#F9FBFF] pt-20 p-4 md:p-12 md:pt-[80px] w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <div class="sm:w-[610px] w-full mx-auto px-4">
                <div class="flex items-center">
                    <!-- <div class="hidden sm:flex sm:flex-none w-14">
                        <img src="{{ env('STRAPI_URL') . $data[0]->left_icon }}" alt="icon">
                    </div> -->
                    <div class="grow text-center mt-12 md:mt-0">
                        <h1
                            class="text-[#1E3062] font-bold text-[24px] sm:text-[28px] md:text-[36px] leading-[1.1]">
                            {{ $data[0]->page_title }} </h1>
                    </div>
                    <div class="sm:flex sm:flex-none w-14 hidden">
                        <img src="{{ env('STRAPI_URL') . $data[0]->right_icon }}" alt="icon">
                    </div>
                </div>
            </div>
            <!-- search  -->
            <div class="search-area w-full mt-8 mb-0 md:my-6">
                <div class="sm:w-3/4 w-full z-20 relative mx-auto bg-white rounded-2xl shadow">
                    <div class="p-6">
                        <div class="flex justify-between items-center search-top">
                            <h2 class="text-base font-semibold text-[#2B313B]">{{ $settings[0]->search_text }}</h2>

                            <div class="save-search p-2 relative">
                                <a class="flex justify-between items-center cursor-pointer" onclick="showSearch()"
                                    class="flex justify-between transition-all opacity-100 hover:opacity-90">
                                    <!-- <img src="{{ asset('/frontend/assets/img/save-icon.svg') }}" alt="icon"> -->
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.1001 3.50001C2.1001 2.72681 2.7269 2.10001 3.5001 2.10001H10.5001C11.2733 2.10001 11.9001 2.72681 11.9001 3.50001V10.5C11.9001 11.2732 11.2733 11.9 10.5001 11.9H3.5001C2.7269 11.9 2.1001 11.2732 2.1001 10.5V3.50001ZM9.8001 4.20001H4.2001V9.80001L7.0001 8.40001L9.8001 9.80001V4.20001Z" fill="#26BA65"/>
</svg>


                                    <span class="text-[#26BA65] text-xs font-semibold ml-1"> Save Search</span>
                                </a>
                                <div
                                    class="show-search hidden saved-search bg-white h-auto p-4 rounded-xl shadow-md shadow-[0px 2px 20px rgba(69, 130, 220, 0.1)]">
                                    <h3 class="color-[#26BA65] font-semibold text-xs mb-2">Saved searches</h3>
                                    <ul id="show-save-list">

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="relative w-full">
                                <input type="search" id="search"
                                    class="block p-2.5 w-full z-20 text-sm text-[#2B313B] bg-white transition-all rounded-md shadow-none outline-none ring-0 border-4 border-[#EFF4FF] focus:ring-[#EFF4FF] focus:outline-none focus:shadow-[#EFF4FF] focus:border-[#EFF4FF] focus:shadow-md"
                                    placeholder="find your calculation" autocomplete="off" onkeyup="SearchCalculator()"
                                    required>




                                <button type="submit"
                                    class="absolute p-3 top-0 z-20 right-0 border-[#EFF4FF] border-2 text-sm font-bold text-[#0052FE] bg-[#EFF4FF] rounded-r-md hover:bg-[#EFF4FF] focus:outline-none hover:text-[#0052FE] focus:ring-[#EFF4FF]">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>

                                <ul id="search_by"
                                    class="cursor-pointer absolute z-20 top-12 bg-white left-0 h-auto w-full text-sm rounded-[5px] shadow-md shadow-[0px 2px 20px rgba(69, 130, 220, 0.1)] text-[#2B313B]"
                                    aria-labelledby="dropdownSearchButton">
                                </ul>
                            </div>
                        </div>

                        <p class="text-gray-600 text-[10px] font-normal my-2">
                            {{ $settings[0]->search_caption }}
                        </p>

                    </div>
                </div>
            </div>
            <!-- search-end -->

            <livewire:components.service />

        </div>
        <!-- container end -->



    </section>

    <livewire:components.populer-calculator :text="$settings[0]->populer_calculator_button_text" :url="$settings[0]->populer_calculator_button_url" />

    <section class="bg-white w-full p-4 md:p-12">
    <div class="container mx-auto max-w-screen-xl">
        <!-- container start -->
        <div class="section-title text-center ">
            <h2 class="text-[32px] leading-[38.4px] font-bold text-[#253F73] p-4 sm:pb-16  sm:pt-4">Berekenen en Vergelijken</h2>
        </div>
        <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="w-full md:w-1/2 order-2 md:order-1">
                    <h4 class="text-[#253F73] text-2xl font-semibold mb-8">Van bmi berekenen tot aan vergelijkingen; vergelijk bij Bereken.nl</h4>
                    <p class="text-[#2B3F70] font-normal text-base mb-8">In Nederland voeren Ziggo en KPN de boventoon. Heb je wel eens gekeken naar abonnementen van minder bekende providers? We zijn namelijk gezegend met enkele minder bekende providers die eveneens abonnementen op het gebied van internet, tv, bellen en telefonie aanbieden.</p> <p class="text-[#2B3F70] font-normal text-base">Verkrijg dankzij onze vergelijker een goed overzicht van alle mogelijkheden en maak zodoende de juiste keuze. Daarbij helpen we jou ook graag met het overstappen naar een andere provider.</p>
                </div>
                <div class="w-full md:w-1/2 text-right flex justify-end order-1 mb-8 md:mb-0 md:order-2">
                    <img src="images/001.png" alt="">
                </div>
        </div>
    </div><!-- container end -->
</section>

    {{-- <livewire:components.review-strategy /> --}}


    @if ($settings[0]->show_lattest_news_section == 1)
        <livewire:components.lattest-news :title="$settings[0]->lattest_news_section_title" :buttontext="$settings[0]->lattest_news_button_text" :link="$settings[0]->lattest_news_button_link" />
    @else
        <p></p>
    @endif
    <section class="bg-white w-full p-4 md:p-12 pb-[150px] pt-[100px] md:pb-[200px]">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="section-title text-center">
                <h4 class="text-[32px] leading-[38.4px] font-bold text-[#253F73] p-4 sm:pb-16  sm:pt-4  ribbon-s relative">Berekeningen <span class="title-ribbon">Nieuw!</span></h4>
            </div>
                <div class="">
                <div class="flex flex-col md:flex-row items-center justify-center text-center md:text-left md:justify-between">
                    <div class="single-calculation-info" >
                        <div class="">
                                <a href="#" class="text-[#253F73] font-normal text-base md:text-[21px] block mb-2 underline">Watt naar kWh</a>
                                <a href="#" class="text-[#253F73] font-normal text-base md:text-[21px] block mb-2 underline">KPA naar bar</a>
                                <a href="#" class="text-[#253F73] font-normal text-base md:text-[21px] block mb-2 underline">Inhoud zwembad berekenen</a>
                                <a href="#" class="text-[#253F73] font-normal text-base md:text-[21px] block mb-2 underline">Hardloopsnelheid berekenen</a>
                                <a href="#" class="text-[#253F73] font-normal text-base md:text-[21px] block mb-2 underline">MB naar KB</a>
                                <a href="#" class="text-[#253F73] font-normal text-base md:text-[21px] block mb-2 underline">M2 naar M3</a>
                            </div>

                    </div>    
                    <div class="single-calculation-info" >
                        <div class="">
                                <a href="#" class="text-[#253F73] font-normal text-[21px] block mb-2 underline">Lloan repayment amount</a>
                                <a href="#" class="text-[#253F73] font-normal text-[21px] block mb-2 underline">Amount of debt</a>
                                <a href="#" class="text-[#253F73] font-normal text-[21px] block mb-2 underline">Wallpaper rolls</a>
                                <a href="#" class="text-[#253F73] font-normal text-[21px] block mb-2 underline">Gas costs</a>
                                <a href="#" class="text-[#253F73] font-normal text-[21px] block mb-2 underline">Garnishment-free foot</a>
                                <a href="#" class="text-[#253F73] font-normal text-[21px] block mb-2 underline">Your smoking</a>
                            </div>

                    </div>    
                    <div class="single-calculation-info" >
                        <div class="">
                                <a href="#" class="text-[#253F73] font-normal text-[21px] block mb-2 underline">BMI guys</a>
                                <a href="#" class="text-[#253F73] font-normal text-[21px] block mb-2 underline">BMI child</a>
                                <a href="#" class="text-[#253F73] font-normal text-[21px] block mb-2 underline">BMI male</a>
                                <a href="#" class="text-[#253F73] font-normal text-[21px] block mb-2 underline">BMI calculate girls</a>
                                <a href="#" class="text-[#253F73] font-normal text-[21px] block mb-2 underline">BMI woman</a>
                                <a href="#" class="text-[#253F73] font-normal text-[21px] block mb-2 underline">BMR</a>
                            </div>

                    </div>    
                </div>
        </div>
    </section>
    @if ($settings[0]->show_contact_us_section == 1)
        <livewire:components.contact-us />
    @else
        <p></p>
    @endif



    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function SearchCalculator() {
            let data = {
                keywords: document.getElementById('search').value
            }
            axios.post('/api/search-calculator', data)
                .then((response) => {
                    document.getElementById('search_by').classList.remove('hidden');
                    if (response.data.length == 0) {
                        document.getElementById('search_by').classList.add('hidden');
                    }
                    document.getElementById('search_by').innerHTML = response.data;

                })
                .catch((error) => {
                    console.log(error);
                })
        }

        function save_search(item) {
            let saved_search = JSON.parse(localStorage["saved_search"] || "[]");
            if (saved_search.includes(item.getAttribute('data-name'))) {
                location.href = item.getAttribute('data-href')
            } else {
                saved_search.push(item.getAttribute('data-name'));
                localStorage["saved_search"] = JSON.stringify(saved_search);
                location.href = item.getAttribute('data-href')
                console.log(localStorage["saved_search"]);
            }

        }

        let show = false;

        function showSearch() {
            show = !show;
            let showElement = document.getElementsByClassName('show-search');
            if (show === true) {

                showElement[0].classList.remove('hidden');

                let saved_search = JSON.parse(localStorage["saved_search"]);
                let li = '';
                saved_search.map((item, i) => {

                    li += '<li class="color-[#2B313B] font-normal text-sm"><span>' + item +
                        ' <button onclick="removeItem(' + i +
                        ')"> <img src="{{ asset('/frontend/assets/img/close-white.svg') }}" alt="icon"></button></span></li>'
                })
                document.getElementById('show-save-list').innerHTML = li

            } else {
                showElement[0].classList.add('hidden');
            }
        }

        function removeItem(index) {
            let showElement = document.getElementsByClassName('show-search');

            let saved_item = JSON.parse(localStorage["saved_search"]);
            saved_item.splice(i, 1);
            localStorage.setItem('saved_search', JSON.stringify(saved_item));
            if (JSON.parse(localStorage["saved_search"]).length === 0) {
                showElement[0].classList.add('hidden');
            };

            var lis = document.querySelectorAll('#show-save-list li');
            for (var i = 0; li = lis[i]; i++) {
                // li.parentNode.removeChild(li);
                if (i === index) {
                    li.parentNode.removeChild(li)
                    console.log(true);
                }


            }

        }
    </script>

</div>
