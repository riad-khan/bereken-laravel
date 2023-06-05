<div>

    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="section-title text-center ">
                <h1 class="text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">Search Results</h1>
            </div>
        </div>
        <!-- container end -->
    </section>

    <section class="more-article-section">
        <div class="container mx-auto max-w-screen-xl">

            <ul class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-4">

                @foreach ($news as $row)
                    @php
                        $time;
                        $wpm = 200;
                        $wordCount = str_word_count(strip_tags($row->content));
                        $minutes = (int) floor($wordCount / $wpm);
                        $seconds = (int) floor(($wordCount % $wpm) / ($wpm / 60));
                        
                        if ($minutes === 0) {
                            $time = $seconds . ' sec';
                        } else {
                            $time = $minutes . 'min';
                        }
                        
                        $category = $row->category_id;
                        
                        $commaSeperated_category = explode(',', $row->category_name);
                        
                    @endphp


                    <li>
                        <a href="/news-details/{{$row->slug}}-{{$row->id}}"
                            class="flex  mb-3 p-2 flex-col transition-all hover:bg-[#EBF1FF] border border-[#EBF1FF] hover:border-[#EBF1FF] rounded-lg hover:shadow md:flex-col  bg-white">
                            <img class="object-cover rounded-t-lg h-52 h-40 md:rounded-md"
                                src="{{ url($row->thumbnill_image) }}" alt="image">

                            <div class="flex flex-col justify-between px-2 leading-normal">
                                <h5 class="mb-2 text-base font-semibold tracking-tight text-[#2B313B]">
                                    {{ $row->title }}</h5>
                                <p class="mb-3 font-normal text-xs text-[#6C7A93]">
                                    {{ substr($row->short_description, 0, 100) }}...</p>
                                <span
                                    class="publish-date-time  text-[#2B313B] font-normal text-xs">{{ date('F d, Y', strtotime($row->created_at)) }}
                                    • Read: {{ $time }}</span>

                                @foreach ($commaSeperated_category as $category)
                                    <span
                                        class="w-fit bg-[#EBF1FF] text-[#0051FF] text-xs font-semibold mt-2 px-2.5 py-2 rounded ">{{$category}}</span>
                                @endforeach
                            </div>
                        </a>
                    </li>
                @endforeach

            </ul>


        </div>
    </section>
</div>
