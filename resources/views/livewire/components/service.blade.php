  <!-- services Start -->

  @php
          $calculator_list_sql = 'select 
                        a.id,
                        a.calculator_name,
                        a.link,
                        c.url as icon
                        from calculator_lists a 
                        left join files_related_morphs b on (b.related_id = a.id and b.field = "calculator_icon")
                        left join files c on c.id = b.file_id
                        where a.show_home_page = 1';
         $lists = DB::select($calculator_list_sql);

  @endphp

  <div class="services-area w-full py-8">
    <div class="sm:grid-cols-1 gap-2 grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-2">

        @foreach ($lists as $item )
                
       
        <div>
                <a class="service-btn flex border border-[#F5F8FF] items-center bg-white my-2 text-[#2B313B] grow  w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                href="{{ $item->link }}"><img src="{{ env('STRAPI_URL') . $item->icon }}" class="mr-3 h-10 w-10" alt="icon">
                {{ $item->calculator_name }}</a>
        </div>
        @endforeach

    </div>
</div>
<!-- services End -->