@php
    $seo_data = DB::table('seo_data_tables')->where('page','=','calculations')->get();
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
            <div class="sm:w-[490px] w-full mx-auto px-4 mb-4">
                <div class="flex items-center">
                    <div class="hidden sm:flex sm:flex-none w-14">
                        <img src="{{asset('/frontend/assets/img/calculator-round.svg')}}" alt="icon">
                    </div>
                    <div class="grow text-center">
                        <h1
                            class="text-[#2B313B] font-semibold text-[24px] sm:text-[28px] md:text-[32px] leading-[1.1]">
                            All Calculations that you can find out</h1>
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
                                class="ml-1 text-sm font-normal text-[#2B313B] hover:text-gray-900 md:ml-2">Calculations</a>
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

                            <p class="text-gray-600 text-[10px] font-normal my-2">Ex: Calculate BMI, Calculate inches to cm,
                                Calculate BPM, Calculate VAT, Calculate road tax, Calculate financial</p>
                        </div>
                        <ul id="search_by"
                            class="cursor-pointer hidden absolute z-10 px-3 bottom-[-5px] c bg-white left-4 pb-3 h-auto w-[95%] text-sm rounded-xl shadow-md shadow-[0px 2px 20px rgba(69, 130, 220, 0.1)] text-[#2B313B]"
                            aria-labelledby="dropdownSearchButton">

                        </ul>
                    </div>
                </div>
                <!-- search-end -->
            </div>

            <!-- Calculations Start -->
            <div class="services-area w-full py-8">

                <div class="sm:grid-cols-1 gap-2 grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-4">
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                    <div class="single-calculation-info border border-[#F5F8FF] rounded-md" >
                            <div class="calculation-info-top flex px-3 items-center border-b border-[#F5F8FF]  bg-white py-2.5 my-2">
                                <img class="blob w-8 h-8 sm:w-6 sm:h-6 lg:w-8 lg:h-8 w-full mb-0 sm:w-auto rounded-full" src="{{asset('/frontend/assets/img/icons/work-income.svg')}}" alt="icon">
                                <div class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                                    Work, Income &amp; Dismissal
                                </div>
                            </div>
                            <div class="calculation-info-bottom p-4">
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Gross-net income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Minimum (youth) wage & hourly wage</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Box 1 tax</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Company car and bicycle</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Holiday pay, holidays and public holidays</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Purchasing power and cabinet plans</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Dismissal, unemployment benefit</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Allowances & assessment income</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Collective income, tax credits</a>
                                <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline">Daily wage and sv-loon</a>
                            </div>

                    </div>        
                </div>

            </div>
            <!-- Calculations End -->

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
