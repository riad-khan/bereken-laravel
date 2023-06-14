<div>

   
       <!-- Latest News - start -->
       <section class="bg-white w-full p-4 md:p-12">
       
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="section-title text-center ">
                <h2 class="text-[32px] font-bold text-[#253F73] p-4 sm:pb-8  sm:pt-16">{{$title}}</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-1 gap-5 md:gap-0">
            @foreach ($news as $key => $item )
            @php
                $time;
                $wpm = 200;
                $wordCount = str_word_count(strip_tags($item->content));
                $minutes = (int) floor($wordCount / $wpm);
                $seconds = (int) floor($wordCount % $wpm / ($wpm / 60));

                if($minutes === 0){
                    $time = $seconds.' sec';
                }else{
                    $time = $minutes.'min';
                };

              

              

              $commaSeperated_category = explode(",",$item->category_name)
             
            
              
            @endphp

            <ul class="my-4">
               
            
                 
             
                <li>
                    <a href="/news/{{$item->slug}}-{{$item->id}}"
                        class="flex my-2 p-[6px] md:p-4 flex-col transition-all items-center justify-start hover:bg-[#EBF1FF] border-2 border-[#F5F8FF] hover:border-[#EBF1FF] rounded-lg hover:shadow md:flex-row w-full bg-white">
                        <div class=" rounded-lg w-full h-24 sm:h-[204px] sm:w-[255px] overflow-hidden">
                            <img class="object-cover w-full h-full"
                            src="{{ env('STRAPI_URL') . $item->image }}" alt="image">
                        </div>
                        <div class="flex flex-col w-full justify-between py-2 md:py-0 md:px-4 leading-normal">
                            <h5 class="mb-0 md:mb-2 text-xs leading-4 md:leading-6 md:text-[21px] font-bold tracking-tight text-[#253F73]">{{$item->title}}</h5>
                            <p class="hidden md:flex mb-2 md:mb-4 font-normal text-base text-[#2B3F70]">{{$item->short_description}}</p>
                            <span class="publish-date-time  text-[#606F93] font-normal text-[10px] md:text-xs">{{ date('F d, Y', strtotime($item->created_at)) }} <span class="ml-2">• Read: {{$time}}</span></span>

                            <!-- <div class="row mt-2">
                              @foreach ($commaSeperated_category as $category )

                            <span
                                class="w-fit bg-[#EBF1FF] text-[#0051FF] text-xs font-semibold mt-2 px-2.5 py-2 rounded ">{{$category}}
                               </span>&nbsp;

                               @endforeach
                            </div> -->
                        </div>
                    </a>
                </li>

                </ul>
            @if ($key === 2)
            
            <div class="promo-add flex flex-col justify-start lg:flex-row lg:justify-between lg:items-center bg-[#0052FE] p-10 my-4 rounded-xl">
                <div class="text-left">
                    <h5 class="text-2xl text-bold text-white">Don't you want to miss anything anymore?</h5>
                    <p class="font-normal text-base text-white mt-2">And don't worry, we will send you a handy email no
                        more than once a week.</p>
                </div>
                <a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" href="javascript:void(0)" class="w-[170px] mt-4 lg:mt-0 hover:text-[#0052FE] transition-all text-white border bg-[#0052FE] hover:bg-white focus:ring-4 focus:outline-none focus:ring-0 font-bold rounded-lg  text-bold px-5 py-2.5 text-center mr-2 mb-2">Subscribe Now</a>
            </div>

            @endif

            @endforeach
            </div>

            <div class="btn-area flex justify-center">
                <a href="{{$link}}"
                    class="btn-translate-z bg-[#112954] opacity-100 hover:opacity-90 transition text-white flex text-xs font-semibold text-center justify-center items-center rounded py-[10px] px-[20px] my-6">
                    <span class="flex items-center"> {{ $button_text }} <img src="{{asset('frontend/assets/img/icons/arrow-white.svg')}}" class="ml-2 h-2 w-2 float-right" class="ml-2"
                        alt="icon"></span></a>
            </div>
        </div> <!-- container end -->
             <!-- Main modal -->
 <div id="authentication-modal" tabindex="-1" aria-hidden="true"
 class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
 <div class="relative w-full h-full max-w-md md:h-auto">
     <!-- Modal content -->
     <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
         <button type="button"
             class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
             data-modal-hide="authentication-modal">
             <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                 xmlns="http://www.w3.org/2000/svg">
                 <path fill-rule="evenodd"
                     d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                     clip-rule="evenodd"></path>
             </svg>
             <span class="sr-only">Close modal</span>
         </button>
         <div class="px-6 py-6 lg:px-8">
             <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Subscribe Bereken
             </h3>
             <form id="rate_form" action="{{url('/submit-subscribe')}}" method="post" data-parsley-validate="">
                @csrf
                 <div>
                     <label for="Name"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                         name</label>
                     <input type="text" name="name" id="name"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                         required>
                 </div>
                 <div>
                     <label for="email"
                         class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                         email</label>
                     <input type="email" name="email" id="email"
                         class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                         required>
                 </div>
                
               

                 <button id="btn"
                     class="w-full mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subscribe</button>

             </form>

         </div>
     </div>
 </div>
</div>
{{-- Modal ends --}}
    </section>
    <!-- Latest News - End -->
</div>
