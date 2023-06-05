@php
    $seo_data = DB::table('seo_data_tables')->where('page','=','compares')->get();
@endphp
@section('meta')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{$seo_data[0]->title}}</title>
    <meta name="description" content="{{$seo_data[0]->seo_meta}}">
    <meta name="description" content="{{$seo_data[0]->seo_keywords}}">

    <script>
        {!! html_entity_decode($seo_data[0]->structured_data) !!}
    </script>
@endsection
<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <div class="sm:w-[480px] w-full mx-auto px-4 mb-4">
                <div class="flex items-center">
                    <div class="hidden sm:flex sm:flex-none w-14">
                        <img src="{{asset('/frontend/assets/img/umbrella.svg')}}" alt="icon">
                    </div>
                    <div class="grow text-center">
                        <h1
                            class="text-[#2B313B] font-semibold text-[24px] sm:text-[28px] md:text-[32px] leading-[1.1]">
                            All Compares that you can find out</h1>
                    </div>
                    <div class="sm:flex sm:flex-none w-14 hidden">
                        <img src="{{asset('/frontend/assets/img/hero-arrow.svg')}}" alt="icon">
                    </div>
                </div>
            </div>
            <nav class="flex justify-center" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="inline-flex items-center text-sm font-normal  text-[#2B313B] hover:text-gray-900">Home</a>
                    </li>
                    <li>
                        <div class="flex items-center"><span class="text-[#D3D7DE] font-normal text-xs"> / </span><a
                               
                                class="ml-1 text-sm font-normal text-[#2B313B] hover:text-gray-900 md:ml-2">Compares</a>
                        </div>
                    </li>
                  
                </ol>
            </nav>

            <div class="block md:hidden">
                <!-- search  -->
                <div class="search-area w-full my-6">
                    <div class="sm:w-3/4 w-full z-20 relative mx-auto bg-white rounded-2xl shadow">
                        <div class="p-3">
                            <div class="flex justify-between items-center search-top">
                                <h2 class="text-base font-semibold text-[#2B313B]">Search Calculator</h2>

                                <div class="save-search p-2 relative">
                                    <a onclick="showSearch()"
                                        class="flex justify-between transition-all opacity-100 hover:opacity-90"><img
                                            src="{{ asset('/frontend/assets/img/save-icon.svg') }}" alt="icon">
                                        <span class="text-[#26BA65] text-sm font-semibold ml-1 cursor-pointer"> Save Search</span> </a>
                                    <div
                                        class="show-search hidden saved-search bg-white h-auto p-4 rounded-xl shadow-md shadow-[0px 2px 20px rgba(69, 130, 220, 0.1)]">
                                        <h3 class="color-[#2B313B] font-semibold text-base mb-2">Saved searches</h3>
                                        <ul id="show-save-list">

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="flex">
                                <div class="relative w-full">
                                    <input type="search" id="search"
                                        class="block p-2.5 w-full z-20 text-sm text-[#2B313B] bg-white transition-all rounded-md shadow-none outline-none ring-0 border-4 border-[#EFF4FF] focus:ring-[#EFF4FF] focus:outline-none focus:shadow-[#EFF4FF] focus:border-[#EFF4FF] focus:shadow-md"
                                        placeholder="find your calculation" autocomplete="off" onkeyup="SearchCalculator()" required>




                                    <button type="submit"
                                        class="absolute p-3 top-0 z-20 right-0 border-[#EFF4FF] border-2 text-sm font-bold text-[#0052FE] bg-[#EFF4FF] rounded-r-md hover:bg-[#EFF4FF] focus:outline-none hover:text-[#0052FE] focus:ring-[#EFF4FF]">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                        <span class="sr-only">Search</span>
                                    </button>
                                </div>
                            </div>

                            <p class="text-gray-600 text-[10px] font-normal my-2">Ex: Calculate BMI,  Calculate inches to cm,  Calculate BPM.</p>
                        </div>
                        <ul id="search_by"
                            class="cursor-pointer hidden absolute z-10 px-3 bottom-[-5px] c bg-white left-4 pb-3 h-auto w-[95%] text-sm rounded-xl shadow-md shadow-[0px 2px 20px rgba(69, 130, 220, 0.1)] text-[#2B313B]"
                            aria-labelledby="dropdownSearchButton">

                        </ul>
                    </div>
                </div>
                <!-- search-end -->
            </div>
            <!-- services Start -->
            <div class="services-area compares w-full py-8">

                <div class="section-title text-left ">
                    <h2 class="text-2xl font-semibold text-[#2B313B] py-4 sm:pb-6  sm:pt-4">Insurance</h2>
                </div>
                <div class="justify-items-stretch gap-6 grid grid-cols-2 lg:grid-cols-3">
                    <a class="service-btn justify-self-start flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/Liability Insurance.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon">
                            Liability insurance</a>
                    <a class="service-btn lg:mx-auto flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/home-insurance.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon">
                            Home Insurance</a>
                    <a class="service-btn justify-self-end  flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/Travel Insurance.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon"> Travel insurance
                        </a>
                    
                    <a class="service-btn justify-self-start  flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href="/car-insurance"><img src="{{asset('/frontend/assets/img/icons/car-insurance.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon"> Car
                            Insurance</a>
                   <a class="service-btn lg:mx-auto flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/van-insurance.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon"> Van insurance
                        </a>
                    <a class="service-btn justify-self-end flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/scooter-insurance.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon"> Scooter insurance
                        </a>
                </div>


                <div class="section-title mt-20 text-left ">
                    <h2 class="text-2xl font-semibold text-[#2B313B] py-4 sm:pb-6  sm:pt-4">Internet & Calling</h2>
                </div>
                <div class="gap-6 grid grid-cols-2 lg:grid-cols-3">
                    <div><a class="service-btn justify-self-start flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href="/internet"><img src="{{asset('/frontend/assets/img/icons/Smart-TV.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon">
                            Internet & TV</a></div>
                    <div><a class="service-btn lg:mx-auto flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href="/sim-only"><img src="{{asset('/frontend/assets/img/icons/Sim.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon">
                            Sim Only</a></div>
                </div>

                
                <div class="section-title mt-20 text-left ">
                    <h2 class="text-2xl font-semibold text-[#2B313B] py-4 sm:pb-6  sm:pt-4">Health Care</h2>
                </div>
                <div class="gap-6 grid grid-cols-2 lg:grid-cols-3">
                    <div><a class="service-btn justify-self-start flex flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/Health-Insurance.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon">
                            Health Insurance</a></div>
                    <div><a class="service-btn lg:mx-auto flex flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/physiotherapy.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon">
                            Physiotherapy</a></div>
                    <div><a class="service-btn justify-self-end flex flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/general-practitioner.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon"> General practitioner</a>
                    </div>
                    <div><a class="service-btn justify-self-start flex flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/Dental.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon"> Dentist</a></div>
                    <div><a class="service-btn lg:mx-auto flex flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/hospital.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon"> Hospital</a></div>
                </div>
                

                <div class="section-title mt-20 text-left ">
                    <h2 class="text-2xl font-semibold text-[#2B313B] py-4 sm:pb-6  sm:pt-4">Money</h2>
                </div>
                <div class="gap-6 grid grid-cols-2 lg:grid-cols-3">
                    <div><a class="service-btn justify-self-start flex flex flex-col text-center md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/borrow-money-2.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon">
                            Borrow Money</a></div>
                    <div><a class="service-btn lg:mx-auto flex flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/cover.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon">
                            Cover</a></div>
                    <div><a class="service-btn justify-self-end flex flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/savings-account.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon"> Savings account</a>
                    </div>
                </div>
                
                
                <div class="section-title mt-20 text-left ">
                    <h2 class="text-2xl font-semibold text-[#2B313B] py-4 sm:pb-6  sm:pt-4">Mortgage</h2>
                </div>
                <div class="gap-6 grid grid-cols-2 lg:grid-cols-3">
                    <div><a class="service-btn justify-self-start flex flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/mortgage.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon">
                            House Mortgage</a></div>
                    <div><a class="service-btn lg:mx-auto flex flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/mortgage-rates.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon">
                            Compare mortgage rates</a></div>
                    <div><a class="service-btn justify-self-end flex flex flex-col text-center md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/maximum-mortgage.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon"> Maximum mortgage</a>
                    </div>
                    <div><a class="service-btn justify-self-start flex flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/advisors-in-your-area.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon"> Compare advisors in your area</a></div>
                </div>
                
                
                <div class="section-title mt-20 text-left ">
                    <h2 class="text-2xl font-semibold text-[#2B313B] py-4 sm:pb-6  sm:pt-4">Energy</h2>
                </div>
                <div class="gap-6 grid grid-cols-2 lg:grid-cols-3">
                    <div><a class="service-btn justify-self-start flex flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/Energy-Cost.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon">
                            Energy Cost</a></div>
                    <div><a class="service-btn lg:mx-auto flex flex flex-col md:flex-row border border-[#F5F8FF] items-center bg-white text-[#2B313B] grow w-full lg:w-[292px] text-base font-semibold p-[17px] rounded-md hover:text-[#135FFF]"
                            href=""><img src="{{asset('/frontend/assets/img/icons/solar-panels.svg')}}" class="mr-0 md:mr-3 h-10 w-10" alt="icon">
                            Solar panels</a></div>
                </div>
            </div>
            <!-- services End -->

        </div>
        <!-- container end -->
    </section>
      <!-- contact-us - start -->
      <section class="bg-[#F5F8FF] w-full p-4 md:p-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex p-6 flex-col items-center ">
                <div class="content text-center sm:text-left flex-none sm:flex sm:justify-center sm:items-center">
                    <div class="img-box w-full sm:w-2/5 order-none mb-6 sm:m-0 sm:order-last">
                        <img src="{{asset('frontend/assets/img/contact-us.svg')}}" class="mx-auto w-full sm:mx-0" alt="image">
                    </div>
                    <div class="text-content text-center sm:w-3/5 sm:text-left">
                        <h6 class="text-2xl sm:text-xl lg:text-2xl font-normal mb-8 text-[#2B313B]">We are best reached
                            via WhatsApp and chat Feel free to contact us if you want to know more. We are there today
                            until 18:00.</h6>
                        <a href="/contact-us"  class="outline-btn btn-translate-z flex w-fit m-auto md:m-0 bg-[#112954] text-white text-base font-bold py-2.5 px-14 rounded-lg transition-all">Contact Us</a>
                    </div>
                </div>
            </div>
        </div><!-- container end -->
    </section>
</div>
