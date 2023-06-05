@php
    $seo_data = DB::table('seo_data_tables')->where('page','=','News')->get();
@endphp
@section('meta')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{$seo_data[0]->title}} - {{strtoupper(Route::input('category'))}}  </title>
    <meta name="description" content="{{$seo_data[0]->seo_meta}}">
    <meta name="description" content="{{$seo_data[0]->seo_keywords}}">

    <script>
        {!! html_entity_decode($seo_data[0]->structured_data) !!}
    </script>
@endsection
<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="section-title text-center ">
                <h1 class="text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">{{strtoupper(Route::input('category'))}} News</h1>
            </div>
        </div>
        <!-- container end -->
    </section>

    <section class="content-area mb-6">
        <div class="container mx-auto max-w-screen-xl flex-none md:flex md:flex-row">
            <!-- container start -->
            <div class="main-area basis-full p-2 md:p-3 lg:p-0 md:basis-8/12">
                <!-- left-side-area start -->
               
                <span class="flex flex-col sm:flex-row justify-between mb-5 items-center">
                    <h3 class=" text-2xl basis-full sm:basis-1/2 font-semibold">Highlights</h3>

                    
                    <div class="no-label w-full sm:w-52">
                        <div class="select" id="news">
                            <div class="selectBtn" data-type="firstOption">All News</div>
                                <div class="selectDropdown">

                                    @php
                                        $categories = DB::table('categories')->get();
                                    @endphp

                                    <div class="option" data-type="firstOption">All News</div>
                                    @foreach ($categories as $item)
                                        <div class="option" data-type="secondOption" onclick="Redirect(this)" data-url="{{'/news/'.$item->slug.'/'.$item->id.''}}">
                                        {{ $item->category_name }}
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                    </div>
                </span>
                 <!-- slider-area start -->
                
                 <livewire:components.news.highlights :category="Route::input('id')" />

                <!-- slider-area end -->    

                <livewire:components.news.other-news :category="Route::input('id')" />

              <!-- main-inner-area end -->
            </div>
            <!-- left-side-area end -->
            <!-- right-side-area-start -->
            <div class="side-bar basis-full md:basis-4/12">
                <div class="inner-area ml-1 lg:ml-4 p-2 md:p-0">

                    <div class="search-bar mb-3">
                        <form>   
                            <div class="relative single-field-wrapper">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </div>
                                <input type="search" id="default-search" class="rounded-md bg-white border border-[#A4BCE6] text-[#6C7A93] font-normal text-xs focus:ring-[#3b82f6] focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-3 pl-10" placeholder="Search Articles" required>                                
                            </div>
                        </form>
                        
                    </div>
                    <div class="adds-area p-4 flex flex-col bg-[#F5F8FF] rounded-lg mb-3">
                        <img src="{{asset('/frontend/assets/img/compare-img.svg')}}" alt="image">
                        <h3 class="text-2xl text-[#2B313B] font-bold my-2">Compare your insurance</h3>
                        <p class="text-[#6C7A93] font-normal mb-2 text-sm">Save an average of € 259 per year on your car insurance?</p>
                        <a href="#" class="p-4 text-center outline-btn btn-translate-z bg-[#0052FE] opacity-100 hover:opacity-90 transition text-white text-xs font-bold rounded-md">Get it Now</a>
                    </div>
                    

                    <livewire:components.news.hot-article :category="Route::input('id')" />


                </div>
            </div>
            <!-- right-side-area-end -->

        </div><!-- container end -->
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        window.slides = []
        sliderData = function(slides) {
            return {
                title: "Swiper Slider",
                mySwiper: {},
                slideIndex: 0,
                slides: [],

                init() {

                    this.slides = slides.map((slide, index) => {
                        slide.id = index + Date.now();
                        return slide;
                    });

                    console.log(this.slides);

                    this.initSwiper();
                },
                initSwiper() {
                    const autoplay = 4500;

                    this.mySwiper = new Swiper(".swiper-container", {
                        init: false,
                        autoplay: {
                            delay: autoplay,
                            disableOnInteraction: false
                        },
                        loop: true,
                        keyboard: {
                            enabled: true
                        },
                        effect: "fade",
                        grabCursor: true,
                        centeredSlides: true,
                        slidesPerView: "auto",
                        watchSlidesProgress: true,
                        preloadImages: false,
                        // Enable lazy loading
                        lazy: {
                            loadPrevNextAmount: 3,
                            loadOnTransitionStart: true
                        },
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true
                        },
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev"
                        }
                    });



                    // wait for alpine finishing the DOM manipulation
                    this.$nextTick(() => {
                        this.mySwiper.init();
                        // slides are ready, rerender the slider
                        this.mySwiper.update();
                    });
                }
            };
        };

        function Redirect(val){
            let link = val.getAttribute('data-url')
            location.href = link;
        }
    </script>

</div>
