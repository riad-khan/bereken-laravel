<div>


    <div class="articles mb-3 py-2 border rounded-t-2xl border-[#F5F8FF] ">
        <h3
            class="px-5 py-4  text-[#2B313B] mx-auto md:text-base lg:text-2xl text-2xl font-semibold">
            Hot Articles</h3>

        @foreach ($hotArticle as $item)
            <a href="/news/{{$item->slug}}-{{$item->id}}"
                class="flex px-3 items-center transition-all opacity-100 rounded-b-2xl border-t border-[#F5F8FF] hover:opacity-90 bg-white pl-5 pr-2.5 py-4">
                <span class="fixed-size w-[60px] overflow-hidden h-[46px] sm:w-[54px] sm:h-10 lg:w-[60px] lg:h-[46px] rounded-md w-full">
                <img class="object-cover w-full h-full mb-0"
                    src="{{ env('STRAPI_URL').$item->thumbnill_image }}" alt="icon" />
                </span>
                <div class="ellipsis-h ml-3 text-base text-sm leading-5 sm:text-base lg:text-base w-10/12 inline-block font-semibold">
                    <p>{{$item->title}}</p>
                </div>
            </a>
        @endforeach


    </div>
</div>
