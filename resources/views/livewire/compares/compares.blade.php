@php
    $sql = 'select a.id,a.page_title,c.id as component_id,
        c.meta_title,
        c.meta_description,
        c.keywords,
        c.meta_robots,
        c.structured_data,
        c.meta_viewport,
        c.canonical_url from page_seos a
        left join page_seos_components b on (b.entity_id = a.id and b.field="page_seo" )
        left join components_shared_seos c on c.id = b.component_id
        where a.select_page_type="Compares"
        order by a.id ASC limit 1';
    $seo_data = DB::select($sql);
    
    $seo_social_sql = 'select a.social_network,a.title,a.description,d.url  from components_shared_meta_socials a
    left join components_shared_seos_components b on b.component_id = a.id
    left join files_related_morphs c on (c.related_id = b.component_id and c.field="metaImage")
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

    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <div class="sm:w-[480px] w-full mx-auto px-4 mb-4">
                <div class="flex items-center">
                    <div class="hidden sm:flex sm:flex-none w-14">
                        <img src="{{ env('STRAPI_URL') . $data[0]->left_icon }}" alt="icon">
                    </div>
                    <div class="grow text-center">
                        <h1
                            class="text-[#2B313B] font-semibold text-[24px] sm:text-[28px] md:text-[32px] leading-[1.1]">
                            {{ $data[0]->page_title }}</h1>
                    </div>
                    <div class="sm:flex sm:flex-none w-14 hidden">
                        <img src="{{ env('STRAPI_URL') . $data[0]->right_icon }}" alt="icon">
                    </div>
                </div>
            </div>
            <nav class="flex justify-center" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="inline-flex items-center text-sm font-semibold  text-[#C5C9D2] hover:text-gray-900">Home</a>
                    </li>
                    <li>
                        <div class="flex items-center"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.56439 13.2364C6.21291 12.8849 6.21291 12.3151 6.56439 11.9636L9.52799 9L6.56438 6.0364C6.21291 5.68492 6.21291 5.11508 6.56438 4.7636C6.91586 4.41213 7.48571 4.41213 7.83718 4.7636L11.4372 8.3636C11.7886 8.71508 11.7886 9.28492 11.4372 9.6364L7.83718 13.2364C7.48571 13.5879 6.91586 13.5879 6.56439 13.2364Z" fill="#C4C9D1"/>
</svg>
<a
                                class="ml-1 text-sm font-semibold text-[#1E3062] hover:text-gray-900 md:ml-2">Compares</a>
                        </div>
                    </li>

                </ol>
            </nav>

            <div class="block md:hidden">
                <!-- search  -->
                <div class="search-area w-full my-6">
                    <div class="sm:w-3/4 w-full z-20 relative mx-auto bg-white rounded-2xl shadow">
                        <div class="p-3">
                            <div class="flex justify-between items-center search-top">
                                <h2 class="text-base font-semibold text-[#2B313B]">Search Calculator</h2>

                                <div class="save-search p-2 relative">
                                    <a onclick="showSearch()"
                                        class="flex justify-between transition-all opacity-100 hover:opacity-90"><img
                                            src="{{ asset('/frontend/assets/img/save-icon.svg') }}" alt="icon">
                                        <span class="text-[#26BA65] text-sm font-semibold ml-1 cursor-pointer"> Save
                                            Search</span> </a>
                                    <div
                                        class="show-search hidden saved-search bg-white h-auto p-4 rounded-xl shadow-md shadow-[0px 2px 20px rgba(69, 130, 220, 0.1)]">
                                        <h3 class="color-[#2B313B] font-semibold text-base mb-2">Saved searches</h3>
                                        <ul id="show-save-list">

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="relative w-full">
                                    <input type="search" id="search"
                                        class="block p-2.5 w-full z-20 text-sm text-[#2B313B] bg-white transition-all rounded-md shadow-none outline-none ring-0 border-4 border-[#EFF4FF] focus:ring-[#EFF4FF] focus:outline-none focus:shadow-[#EFF4FF] focus:border-[#EFF4FF] focus:shadow-md"
                                        placeholder="find your calculation" autocomplete="off"
                                        onkeyup="SearchCalculator()" required>




                                    <button type="submit"
                                        class="absolute p-3 top-0 z-20 right-0 border-[#EFF4FF] border-2 text-sm font-bold text-[#0052FE] bg-[#EFF4FF] rounded-r-md hover:bg-[#EFF4FF] focus:outline-none hover:text-[#0052FE] focus:ring-[#EFF4FF]">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                        <span class="sr-only">Search</span>
                                    </button>
                                </div>
                            </div>

                            <p class="text-gray-600 text-[10px] font-normal my-2">Ex: Calculate BMI, Calculate inches to
                                cm, Calculate BPM.</p>
                        </div>
                        <ul id="search_by"
                            class="cursor-pointer hidden absolute z-10 px-3 bottom-[-5px] c bg-white left-4 pb-3 h-auto w-[95%] text-sm rounded-xl shadow-md shadow-[0px 2px 20px rgba(69, 130, 220, 0.1)] text-[#2B313B]"
                            aria-labelledby="dropdownSearchButton">

                        </ul>
                    </div>
                </div>
                <!-- search-end -->
            </div>
            <!-- services Start -->

            @php
                $compareSql = 'select 
                            a.name,
                            a.id
                            from compare_categories a
                            where status = 1';
                
                $compare_categories = DB::select($compareSql);
            @endphp
            @foreach ($compare_categories as $compare_category)
                <div class="services-area compares w-full py-8">




                    <div class="section-title text-left ">
                        <h2 class="text-2xl font-semibold text-[#2B313B] py-4 sm:pb-6  sm:pt-4">
                            {{ $compare_category->name }}</h2>
                    </div>

                    @php
                        $itemsSql = 'select 
                                    b.title,
                                    b.url,
                                    d.url as icon 
                                    from compare_items_compare_category_links a 
                                    left join compare_items b on b.id = a.compare_item_id
                                    left join files_related_morphs c on (c.related_id = b.id and c.field="compare_icon")
                                    left join files d on d.id = c.file_id
                                    where a.compare_category_id = ?
                                    order by b.display_order';
                        $compare_items = DB::select($itemsSql, [$compare_category->id]);
                    @endphp

                    <div class="justify-items-stretch gap-6 grid grid-cols-2 lg:grid-cols-3">

                        @foreach ($compare_items as $item)
                            <a class="service-btn justify-self-start flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                                href="{{ $item->url }}" target="_blank"><img
                                    src="{{ env('STRAPI_URL') . $item->icon }}" class="mr-0 md:mr-3 h-10 w-10"
                                    alt="icon">
                                {{ $item->title }}</a>
                        @endforeach



                    </div>










                </div>
            @endforeach
            <!-- services End -->

        </div>
        <!-- container end -->
    </section>
    <!-- contact-us - start -->
    {{-- <livewire:components.contact-us /> --}}
</div>
