<div>
    <section class="slider-c bg-white p-4 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <div class="sec-title flex items-center justify-between">
                <h3 class="mb-3 text-2xl font-semibold">Latest News</h3>
                <a href="/news" class="shadow-btn arrow-white  h-fit inline-flex items-center text-[10px] font-semibold text-center text-[#0052FE]  hover:text-white">
                    View More <img src="{{asset('/frontend/assets/img/icons/arrow-right-blue.svg')}}" class="ml-2" alt="arrow-icon">
                </a>
            </div>
            
            <div class="center">
                
                @foreach ($lattest_news as $row )
                    
               
                <div class="items">
                    <a href="/news/{{$row->slug}}-{{$row->id}}" class="flex  mb-3 p-2 flex-col transition-all hover:bg-[#EBF1FF] border border-[#EBF1FF] hover:border-[#EBF1FF] rounded-lg hover:shadow md:flex-col  bg-white">
                        <img class="object-cover rounded-t-lg h-52 h-40 md:rounded-md" src="{{url($row->thumbnill_image)}}" alt="image">

                        <div class="flex flex-col justify-between px-2 leading-normal">
                            <h5 class="mb-2 text-base font-semibold tracking-tight text-[#2B313B]">{{$row->title}}</h5>
                            <p class="mb-3 font-normal text-xs text-[#6C7A93]">{{Str::limit($row->short_description,50)}}</p>
                            <span class="publish-date-time  text-[#2B313B] font-normal text-xs">Jul 25, 2022 • Read: 5
                                min</span>

                        </div>
                    </a>
                </div>
                @endforeach
               
            </div>              

        </div>
        <!-- container end -->
    </section>
</div>
