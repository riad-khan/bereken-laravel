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

                        from vats_components a 
                        left join components_shared_seos b on (b.id = a.component_id and a.field="vat_seo")
                        where a.field="vat_seo"';
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
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 md:pb-0 w-full items-center mx-auto">
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
                                class="ml-1 text-sm font-semibold text-[#1E3062] md:ml-2">VAT</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="section-title text-center ">
                <h1 class="flex justify-start items-center text-[32px] font-semibold text-[#1E3062] pl-0 p-4 sm:pb-6  sm:pt-4">VAT Calculator
                    <svg id="removed_icon" onclick="save_search('Vat Calculator')" class="removed transition ml-2 cursor-pointer hidden" fill="#112954" width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.799988 3.99999C0.799988 2.23268 2.23268 0.799988 3.99999 0.799988H20C21.7673 0.799988 23.2 2.23268 23.2 3.99999V20C23.2 21.7673 21.7673 23.2 20 23.2H3.99999C2.23268 23.2 0.799988 21.7673 0.799988 20V3.99999ZM18.4 5.59999H5.59999V18.4L12 15.2L18.4 18.4V5.59999Z"></path>
                    </svg>

                    <svg id="save_icon" onclick="remove_search('Vat Calculator')" class="save transition ml-2 cursor-pointer hidden" fill="#26BA65" width="22" height="22" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.799988 3.99999C0.799988 2.23268 2.23268 0.799988 3.99999 0.799988H20C21.7673 0.799988 23.2 2.23268 23.2 3.99999V20C23.2 21.7673 21.7673 23.2 20 23.2H3.99999C2.23268 23.2 0.799988 21.7673 0.799988 20V3.99999ZM18.4 5.59999H5.59999V18.4L12 15.2L18.4 18.4V5.59999Z"></path>
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
                    <h3 class="my-5 text-2xl text-[#2B313B] font-semibold">Result</h3>
                    <div class="flex-col sm:flex-row flex items-start sm:items-center justify-between">

                        <span class="bg-[#FFF4E6] text-[#FF7800]  text-base font-normal mr-2 px-3 py-2 rounded-lg">THE RESULT IS: <strong>US€{{ $amount + $vat }}</strong> </span>

                        <a href="/vat-calculator"
                            class="recalculate-btn text-white mt-6 sm:mt-0  bg-[#6C7A93] transition-all opacity-100 hover:opacity-90 font-bold rounded-lg text-xs px-5 py-2.5 text-center mr-2 inline-flex items-center">
                            <svg role="status" class="inline mr-3 text-white  hover:animate-anti-spin" width="21"
                                height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.5 2C5.05228 2 5.5 2.44772 5.5 3V5.10125C6.77009 3.80489 8.54052 3 10.5 3C13.5494 3 16.141 4.94932 17.1014 7.66675C17.2855 8.18747 17.0126 8.75879 16.4918 8.94284C15.9711 9.12689 15.3998 8.85396 15.2157 8.33325C14.5289 6.38991 12.6755 5 10.5 5C8.86507 5 7.41204 5.78502 6.49935 7H9.5C10.0523 7 10.5 7.44772 10.5 8C10.5 8.55228 10.0523 9 9.5 9H4.5C3.94772 9 3.5 8.55228 3.5 8V3C3.5 2.44772 3.94772 2 4.5 2ZM4.50817 11.0572C5.02888 10.8731 5.6002 11.146 5.78425 11.6668C6.47112 13.6101 8.32453 15 10.5 15C12.1349 15 13.588 14.215 14.5006 13L11.5 13C10.9477 13 10.5 12.5523 10.5 12C10.5 11.4477 10.9477 11 11.5 11H16.5C16.7652 11 17.0196 11.1054 17.2071 11.2929C17.3946 11.4804 17.5 11.7348 17.5 12V17C17.5 17.5523 17.0523 18 16.5 18C15.9477 18 15.5 17.5523 15.5 17V14.8987C14.2299 16.1951 12.4595 17 10.5 17C7.45059 17 4.85905 15.0507 3.89857 12.3332C3.71452 11.8125 3.98745 11.2412 4.50817 11.0572Z"
                                    fill="white" />
                            </svg>
                            Recalculate
                        </a>
                    </div>

                    @if ($method == 'exclude')
                        <div class="my-6 border border-[#F5F8FF] rounded-2xl text-[#2B313B] font-normal text-xs ">
                            <table class="table-auto w-full">
                                <tr class="border-b border-[#F5F8FF]">
                                    <td colspan="3" class="py-6 px-4 my-4">
                                        <p class="text-base font-normal text-[#26BA65]">Specification: Amount Excluding
                                            VAT</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4 m-4">Amount</td>
                                    <td class="text-right">€{{ $amount }}</td>
                                    <td></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td class="p-4 m-4">VAT</td>
                                    <td class="border-b-2 border-[#A4BCE6] text-right">
                                        <span>€{{ $vat }}</span>
                                    </td>
                                    <td class="text-right pr-6">{{ $rate }}% VAT</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td class="p-4 m-4"><strong>Amount including VAT</strong></td>
                                    <td class="text-right"><strong>€{{ $amount + $vat }}</strong></td>
                                    <td></td>
                                    <td> </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    @elseif ($method == 'include')
                        <div class="my-6 border border-[#F5F8FF] rounded-2xl text-[#2B313B] font-normal text-xs ">
                            <table class="table-auto w-full">
                                <tr class="border-b border-[#F5F8FF]">
                                    <td colspan="3" class="py-6 px-4 my-4">
                                        <p class="text-base font-normal text-[#26BA65]">Specification: Amount Including
                                            VAT</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4 m-4">Amount</td>
                                    <td class="text-right">€{{ $amount }}</td>
                                    <td></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td class="p-4 m-4">VAT</td>
                                    <td class="border-b-2 border-[#A4BCE6] text-right">
                                        <span>€{{ $vat }}</span>
                                    </td>
                                    <td class="text-right pr-6">{{ $rate }}% VAT</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td class="p-4 m-4"><strong>Amount excluding VAT</strong></td>
                                    <td class="text-right"><strong>€{{ $amount - $vat }}</strong></td>
                                    <td></td>
                                    <td> </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        @else
                        <script>window.location = "/vat-calculator";</script>
                    @endif



                

                    <div class="info-area py-4">

                      
                        <div id="load-more" class="transition-all">
                            <div  class="single-info">

                                {!! html_entity_decode($details[0]->result_content) !!}

                            </div>
                        <button id="load-more-btn" type="button"
                            class="load-btn-area w-full  inline-block transition-all scale hover:scale-105 mb-4 text-center md:hidden text-[10px] font-semibold text-center text-[#0052FE] hover:text-blue-700">
                            View More <img src="{{asset('frontend/assets/img/icons/arrow-right-blue.svg')}}" class="ml-2 inline-block"
                                alt="arrow-icon">
                        </button>
                        </div>
                        <!-- hidden-element end -->

                        <div class="bottom-part flex-none lg:flex lg:justify-between">
                            <div class="w-full lg:w-auto more-links">
                                <h5 class="font-bold text-sm text-black mb-5">Other visitors also calculated</h5>
                                <div class="tag-area flex-wrap flex md:flex-none">
                                    @php
                                    $sql = 'select 
                                                b.calculator_name,
                                                b.link,
                                                d.url as icon
                                                from vats_others_visitor_also_calculated_links a 
                                                left join calculator_lists b on b.id = a.calculator_list_id
                                                left join files_related_morphs c on (c.related_id = b.id and c.field="calculator_icon")
                                                left join files d on d.id = c.file_id
                                                where a.vat_id = ?';
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
                                    <li class="flex"> <a href="#" class=" ml-2"><span
                                                class="flex relative">
                                                <span
                                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                                    class=" h-5 w-5" src="{{asset('/frontend/assets/img/social/facebook.svg')}}"
                                                    alt=""> </span></a></li>
                                    <li class="flex ml-2"><a href="#" class=" ml-2"><img
                                                class="blob infinity rounded-full h-5 w-5"
                                                src="{{asset('/frontend/assets/img/social/twitter.svg')}}" alt=""> </a></li>
                                    <li class="flex ml-2"> <a href="#" class=" ml-2"><span
                                                class="flex relative">
                                                <span
                                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                                    class="h-5 w-5" src="{{asset('/frontend/assets/img/social/instagram.svg')}}"
                                                    alt=""></span> </a></li>
                                    <li class="flex ml-2"><a href="#" class=" ml-2"><img
                                                class="blob infinity rounded-full h-5 w-5"
                                                src="{{asset('/frontend/assets/img/social/youtube.svg')}}" alt=""> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                    
                    <!-- info area end -->
                </div> <!-- main-inner-area end -->
            </div>
            <!-- left-side-area end -->
            <!-- right-side-area-start -->
            <div class="side-bar basis-full md:basis-4/12">
                <div class="inner-area ml-1 lg:ml-4 p-2 md:p-0">
                    <livewire:components.vats.featured-calculators :vat="$details[0]->id" />     
                    <livewire:components.vats.related-news />
                    <livewire:components.vats.faq-section :vat="$details[0]->id" />

                  
                    <livewire:components.vats.vat-ratings :vat="$details[0]->id" />
                </div>
            </div>
            <!-- right-side-area-end -->
        </div><!-- container end -->
    </section>
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
</div>
