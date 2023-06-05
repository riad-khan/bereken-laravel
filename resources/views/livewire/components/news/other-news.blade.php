<div>
    <div class="main-inner">
        <div class="news-area hidden md:block">
            <ul>
                @foreach ($otherNews as $item)
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
                        $categories = explode(',', $item->category);
                    @endphp
                    <li>
                        <a href="/news/{{$item->slug}}-{{$item->id}}"
                            class="flex  mb-3 p-4  flex-col transition-all items-center hover:bg-[#EBF1FF] border border-[#EBF1FF] hover:border-[#EBF1FF] rounded-lg hover:shadow md:flex-row w-full bg-white">
                            <img class="object-cover w-full rounded-lg h-96 md:h-[172px] md:w-[172px]"
                                src={{ url($item->thumbnill_image) }} alt="image">

                            <div class="flex flex-col justify-between px-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#2B313B]">{{ $item->title }}
                                </h5>
                                <p class="mb-3 font-normal text-base text-[#6C7A93] underline">
                                    {{ $item->short_description }}</p>
                                <span
                                    class="publish-date-time  text-[#2B313B] font-normal text-xs">{{ date('F d, Y', strtotime($item->created_at)) }}
                                    • Read: {{ $time }}</span>

                                <div class="row mt-2">
                                    @foreach ($categories as $tag)
                                        
                                   
                                    <span
                                        class="w-fit bg-[#EBF1FF] text-[#0051FF] text-xs font-semibold mt-2 px-2.5 py-2 rounded ">{{$tag}}</span>
                                        @endforeach
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach

            </ul>
        </div> <!-- info area end -->
    </div> <!-- main-inner-area end -->
</div>
