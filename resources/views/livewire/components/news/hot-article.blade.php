<div>


    <div class="articles mb-3 border-l border-t rounded-t-2xl border-r border-[#F5F8FF]">
        <h3
            class="mx-3 py-5 border-t border-b border-[#F5F8FF] mx-auto md:text-base lg:text-2xl text-2xl text-[#2B313B] font-semibold">
            Hot Articles</h3>

        @foreach ($hotArticle as $item)
            <a href="/news/{{$item->slug}}-{{$item->id}}"
                class="flex px-3 items-center transition-all opacity-100 border-b border-[#F5F8FF] hover:opacity-90 bg-white py-2.5 my-2">
                <span class="fixed-size w-[60px] overflow-hidden h-[46px] sm:w-[54px] sm:h-10 lg:w-[60px] lg:h-[46px] rounded-md w-full">
                <img class="object-cover w-full h-full mb-0"
                    src="{{ url($item->thumbnill_image) }}" alt="icon" />
                </span>
                <div class="ml-3 text-base text-sm leading-5 sm:text-base lg:text-base w-10/12 inline-block font-semibold">
                    {{$item->title}}
                </div>
            </a>
        @endforeach


    </div>
</div>
