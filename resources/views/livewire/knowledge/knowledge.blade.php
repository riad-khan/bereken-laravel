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
                    where a.select_page_type="Knowledge"
                    order by a.id ASC limit 1';
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
    <section class="bg-[#F5F8FF] mt-12 md:mt-0 w-full p-4 md:p-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex p-6 flex-col items-center ">
                <div class="content text-left flex-none sm:flex sm:justify-between sm:items-center">
                    @php
                        $sql = 'select 
                                a.*,
                                c.url as image

                                from knowledge_settings a 
                                left join files_related_morphs b on (b.related_id = a.id and b.field="knowledge_section_banner")
                                left join files c on c.id = b.file_id order by a.id ASC limit 1';
                        
                        $knowledge_section = DB::select($sql);
                    @endphp
                    <div class="img-box w-full hidden md:flex md:w-2/5 order-none mb-6 sm:m-0 sm:order-last">
                        <img src="{{ env('STRAPI_URL') . $knowledge_section[0]->image }}"
                            class="mx-auto w-full sm:mx-0" alt="image">
                    </div>



                    <div class="text-content flex flex-col md:w-2/5 text-left">
                        <h1
                            class="text-[32px] sm:text-xl lg:text-[32px] leading-10 font-semibold mb-4 md:mb-8 text-[#2B313B]">
                            {{ $knowledge_section[0]->section_title }}</h1>
                        <p class="font-normal text-base text-[#2B313B] underline">
                            {{ $knowledge_section[0]->section_description }}</p>
                    </div>
                </div>
            </div>
        </div><!-- container end -->
    </section>

    @foreach ($categories as $row)
        <section class="slider-c bg-white pt-12 p-4 md:p-12 w-full items-center mx-auto">
            <div class="container mx-auto max-w-screen-xl">
                <div class="sec-title flex items-center justify-between">
                    <h3 class="mb-3 text-2xl font-semibold">{{ $row->category_name }}</h3>
                    <a href="/knowledge-filter/{{ $row->slug }}-{{ $row->id }}"
                        class="shadow-btn arrow-white  h-fit inline-flex items-center text-xs font-semibold text-center text-[#0052FE]  hover:text-white">
                        View More <img src="{{ asset('/frontend/assets/img/icons/arrow-right-blue.svg') }}"
                            class="ml-2" alt="arrow-icon">
                    </a>
                </div>

                <div class="center">

                    @php
                        $sql = 'select 
                                a.*,
                                e.url as image
                                from knowledges a 
                                left join knowledges_knowledge_categories_links b on a.id = b.knowledge_id
                                left join knowledge_categories c on c.id = b.knowledge_category_id
                                left join files_related_morphs d on (d.related_id = a.id and d.field="knowledge_image")
                                left join files e on e.id = d.file_id
                                where c.id = ?';
                        $data = DB::select($sql, [$row->id]);
                    @endphp

                    @foreach ($data as $item)
                        @php
                            $time;
                            $wpm = 200;
                            $wordCount = str_word_count(strip_tags($item->content));
                            $minutes = (int) floor($wordCount / $wpm);
                            $seconds = (int) floor(($wordCount % $wpm) / ($wpm / 60));
                            
                            if ($minutes === 0) {
                                $time = $seconds . ' sec';
                            } else {
                                $time = $minutes . 'min';
                            }
                        @endphp

                        <div class="items">
                            <a href="/knowledge-details/{{ $item->slug }}-{{ $item->id }}"
                                class="flex  mb-3 p-2 flex-col transition-all hover:bg-[#EBF1FF] border border-[#EBF1FF] hover:border-[#EBF1FF] rounded-lg hover:shadow md:flex-col  bg-white">
                                <img class="object-cover rounded-t-lg h-52 h-40 md:rounded-md "
                                    src="{{ url(env('STRAPI_URL') . $item->image) }}" alt="image">

                                <div class="flex flex-col justify-between px-2 leading-normal">
                                    <h5 class="mb-2 text-base font-semibold tracking-tight text-[#2B313B]">
                                        {{ Str::limit($item->title, 55) }}</h5>
                                    <p class="mb-3 font-normal text-xs text-[#6C7A93]">
                                        {{ Str::limit($item->short_description, 60) }}</p>
                                    <span
                                        class="publish-date-time  text-[#2B313B] font-normal text-xs">{{ date('F d, Y', strtotime($item->created_at)) }}
                                        • Read: {{ $time }}</span>

                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
            <!-- container end -->
        </section>
    @endforeach


    <script src="{{ asset('/frontend/assets/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/frontend/assets/js/slick/slick.min.js') }}"></script>
    <script>
        $('.center').slick({
            centerMode: true,
            centerPadding: '110px',
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><img src="/frontend/assets/img/slider/angle-right.svg" class="h-8 w-8" alt="previous-arrow"></button>',
            nextArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button"><img src="frontend/assets/img/slider/angle-left.svg" class="h-8 w-8" alt="next-arrow"></button>',
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [{
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
</div>
