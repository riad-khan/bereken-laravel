<div>
    <div class="cal-options mb-3 border-l border-t rounded-t-2xl border-r border-[#F5F8FF]">
        <h3
            class="mx-3 py-5 border-t border-b border-[#F5F8FF] mx-auto md:text-base lg:text-2xl text-2xl font-semibold">
            Featured Calculators</h3>
       
       
      
      @foreach ($featured_Calculators as $row)
          
     @php
         $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $row->calculator_name);
     @endphp
       

     
        <a href="/{{strtolower($slug)}}"
            class="flex px-3 items-center bg-white transition-all opacity-100 border-b rounded-b-2xl border-[#F5F8FF] hover:opacity-90  py-2.5 my-2 service-btn">
            <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full"
                src="{{asset('/frontend/assets/img/icons/saving-investing.svg')}}" alt="icon" />
            <div
                class="ml-3 text-base text-sm sm:text-xs w-auto w-10/12 md:inline-block lg:text-sm font-semibold">
                {{$row->calculator_name}}</div>
        </a>

        @endforeach
    </div>
</div>
