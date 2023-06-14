@if($calculators[0]->status == 1)
<section class="bg-white w-full p-4 md:p-12">
    <div class="container mx-auto max-w-screen-xl">
        <!-- container start -->
        <div class="section-title text-center ">
            <h2 class="text-[32px] font-bold text-[#1E3062] p-4 sm:pb-16  sm:pt-4">{{$calculators[0]->section_title}}</h2>
        </div>
        <div class="calculator-option">
            <div class="grid-cols-2 gap-5 grid md:grid-cols-3 lg:grid-cols-4 md:gap-x-[93px] md:gap-4">
                
                @php
                    $populer_calculator_sql = 'select 
                        b.id,
                        b.calculator_name,
                        b.link,
                        d.url as icon
                        from populer_calculators_calculator_lists_links a 
                        left join calculator_lists b on b.id = a.calculator_list_id
                        left join files_related_morphs c on (c.related_id = b.id and c.field="calculator_icon")
                        left join files d on d.id = c.file_id';

                        $populer_calculators = DB::select($populer_calculator_sql)

                @endphp 


                @foreach($populer_calculators as $item)

                <div class="cal-box flex-none sm:flex items-start bg-white px-3 py-5 border-2 border-[#F5F8FF] rounded-lg">
                    <img class="blob w-8 h-8 w-full mb-3 sm:mb-0 sm:w-auto rounded-full"
                        src="{{ env('STRAPI_URL') . $item->icon}}" alt="icon" />
                    <div class="sm:ml-3 text-sm font-normal">
                        <div class="mb-2 text-base text-[#2B3E6F] font-semibold leading-5 mt-[-2px] w-32">{{$item->calculator_name}}</div>
                        <a href="{{$item->link}}"
                            class="inline-flex text-[10px] font-semibold transition-all translate-x-0 hover:translate-x-2 text-center text-[#0052FE] hover:text-blue-700">
                            Check it <img src="{{asset('frontend/assets/img/icons/arrow-right-blue.svg')}}" class="ml-2" alt="arrow-icon">
                        </a>
                    </div>
                </div>

                @endforeach
              
            </div>
            <div class="btn-area flex justify-center">
                <a href="{{$url}}"
                    class="btn-translate-z bg-[#112954] opacity-100 hover:opacity-90 transition text-white flex text-xs font-semibold text-center justify-center items-center rounded py-[10px] px-[20px] my-6"><span class="flex items-center"> {{ $text }} <img src="{{asset('frontend/assets/img/icons/arrow-white.svg')}}" class="ml-2 h-2 w-2 float-right" class="ml-2"
                        alt="icon"></span></a>
            </div>
        </div>
    </div><!-- container end -->
</section>

@else 
    <p></p>

@endif
