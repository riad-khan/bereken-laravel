@php
    $seo_data = DB::table('seo_data_tables')->where('page','=','sim only')->get();
@endphp
@section('meta')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{$seo_data[0]->title}} -choose package</title>
    <meta name="description" content="{{$seo_data[0]->seo_meta}}">
    <meta name="description" content="{{$seo_data[0]->seo_keywords}}">

    <script>
        {!! html_entity_decode($seo_data[0]->structured_data) !!}
    </script>

    <style>
        .single-com-details .top-part .left-info {
            height: 100px;
        }
        #compare-tab .comp-card {
            display: inline-flex;
            margin: 5px;
            height: 50px;
            width: 200px;
            vertical-align: top;
        }

        input#hnr {
            width: 135px;
        }
        a.com-btn, .com-btn-b {
            position: absolute;
            right: 15px;
            top: 30px;
            cursor: pointer;
        }
        .com-btn-b {
            right: 150px;
        }


        @media only screen and (max-width: 769px) {
            a.com-btn {
                position: relative;
                right: auto;
                top: auto;
                display: inline-block;
                width: auto;
                margin: 0 5px;
            }
            .com-btn-b {
                position: relative;
                right: auto;
                top: auto;
                display: inline-block;
                margin-top: 10px;
            }
        }
    </style>
@endsection

<div>
    @php
        $provider = base64_decode($_GET['provider']);
        $number = base64_decode($_GET['number']);
        $data = base64_decode($_GET['data']);
        $min = base64_decode($_GET['min']);
    @endphp

    <section id="product-content" class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl"> <!-- container start -->   
        <div class="section-title text-center mb-4">
            <h1 class="text-2xl font-semibold text-[#2B313B] p-4 sm:pb-6 sm:pt-4">Choose your Mobile Plan</h1>

            <p class="text-sm font-semibold text-[#2B313B] p-4 sm:pb-6 sm:pt-4">Vergelijk nu alle sim only abonnementen doormiddel van onze sim only vergelijker.</p>
        </div>         
            <div class="flex flex-col md:flex-row">
                <div class="basis-full md:basis-3/12 mr-0 md:mr-4">
                    <div class="filter-area" x-data="{ open: false }">
                       <span class="flex border border-[#F5F8FF] rounded-md p-3 mb-4 md:border-none md:p-0 items-center justify-between">     
                        <h2 class="text-[#2B313B] font-semibold text-base">Filters</h2>
                            <button class="visible md:hidden" @click="open = ! open"><img src="{{asset('/frontend/assets/img/filter.svg')}}" alt="icon"></button>                        
                       </span>
                        <div class="main-filter absolute md:relative filter-list md:block" x-show="open" x-transition>
                            <div class="relative flex flex-col bg-white inner-area border border-[#F5F8FF] rounded-2xl p-5">
                                <button class="absolute right-2 top-2 md:hidden" @click="open = false"><img src="{{asset('/frontend/assets/img/close.svg')}}" alt="icon"></button>
                                <span class="single-filter mb-4">
                                    
                                <h2 class="text-[#2B313B] font-semibold text-2xl mb-4 flex md:hidden">Filters</h2>
                                    <h3 class="font-semibold text-base text-[#2B313B] mb-2">Mobile Plan</h3>
                                    <form class="grid grid-cols-1 gap-4">
                                        <div class="bg-white selected-link">
                                            <span class="relative flex items-center justify-end">
                                                <label for="range2" class="absolute inset-y-0 left-0 font-normal text-sm text-[#2B313B]">Data</label> 
                                                    <div class="order-3 flex items-center">
                                                        <!-- <div id="" class="counter-top font-semibold text-sm text-[#0052FE]"></div> -->
                                                        
                                                        <div class="data-range-text font-semibold text-sm text-[#0052FE]">MB</div>
                                                    </div>
                                            </span>
                                            <input class="w-full" onchange="filterByData(this)" id="range2" name="range2" type="range" min="0" max="7" value="0">
                                        </div>                      
                                        <div class="bg-white">
                                            <span class="relative flex items-center justify-end">
                                                <label for="range2" class="absolute inset-y-0 left-0 font-normal text-sm text-[#2B313B]">Minutes</label> 
                                                    <div class="order-3 flex items-center">
                                                        <!-- <div id="" class="counter-top font-semibold text-sm text-[#0052FE]"></div> -->
                                                        <!-- <div class="font-semibold text-sm text-[#0052FE]">mbps</div> -->
                                                    </div>
                                            </span>
                                            <input class="w-full" id="range3" onchange="filterByMin(this)" name="range3" type="range" min="0" step="100" max="600" value="100">
                                        </div>

                                    </form>

                                </span>
                                <span class="single-filter mb-4">
                                    <h3 class="font-semibold text-base text-[#2B313B] mb-2">Internet</h3>
                                    <div class="flex items-center radio-cu">
                                        <input id="inline-radio" onchange="changeNetworkType(this)" checked type="radio" value="all" name="network_type" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                        <label for="inline-radio" class="ml-5 text-[#2B313B] font-normal text-sm">4G/5G</label>
                                    </div>

                                    <div class="flex items-center radio-cu">
                                        <input id="inline-2-radio" onchange="changeNetworkType(this)" type="radio" value="3G" name="network_type" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                        <label for="inline-2-radio" class="ml-5 text-[#2B313B] font-normal text-sm">3G</label>
                                    </div>
                                    <div class="flex items-center radio-cu">
                                        <input id="inline-3-radio" onchange="changeNetworkType(this)" type="radio" value="4G" name="network_type" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                        <label for="inline-3-radio" class="ml-5 text-[#2B313B] font-normal text-sm">4G</label>
                                    </div>
                                     <div class="flex items-center radio-cu">
                                        <input id="inline-4-radio" onchange="changeNetworkType(this)" type="radio" value="5G" name="network_type" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                        <label for="inline-4-radio" class="ml-5 text-[#2B313B] font-normal text-sm">5G</label>
                                    </div>
                                </span>
{{--                                <div class="mb-3">--}}
{{--                                    <label for="" class="block mb-2 text-sm font-normal text-[#2B313B]">Provider</label>--}}

{{--                                    <div class="t-select no-label">--}}
{{--                                        <select id="gender" name="provider" onchange="filterByProvider()" class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">--}}
{{--                                            <option class="option-selected p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="all" selected>Alles</option>--}}
{{--                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="50-mobiel" >50+ Mobiel</option>--}}
{{--                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="ben">Ben</option>--}}
{{--                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="budget-mobiel">Budget Mobiel</option>--}}
{{--                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="delta">Delta</option>--}}
{{--                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="hollandsnieuwe">hollandsnieuwe</option>--}}
{{--                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="kpn">KPN</option>--}}
{{--                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="lebara">Lebara</option>--}}
{{--                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="robin-mobile">Robin Mobiel</option>--}}
{{--                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="simpel">Simpel</option>--}}
{{--                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="simyo">Simyo</option>--}}
{{--                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="t-mobiel">T-Mobiel</option>--}}
{{--                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="tele2">Tele2</option>--}}
{{--                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="telfort">Telfort</option>--}}
{{--                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="vodafone">Vodafone</option>--}}
{{--                                            <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="youfone">Youfone</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="mb-3">
                                    <h4>Providers</h4>

                                    <div class="no-label w-full sm:w-52">
                                        <div class="select" id="news">
                                            <div class="selectBtn" data-type="firstOption">All in 1</div>
                                            <div class="selectDropdown" style="z-index: 2;">

                                                <div class="option selected" onclick="FilterByProviders(this)" data-value="all" data-type="firstOption">Alles</div>
                                                <div class="option" data-type="secondOption" onclick="FilterByProviders(this)" data-value="50-mobiel">
                                                    50+ Mobiel
                                                </div>
                                                <div class="option" data-type="secondOption" onclick="FilterByProviders(this)" data-value="ben">
                                                    Ben
                                                </div>
                                                <div class="option" data-type="secondOption" onclick="FilterByProviders(this)" data-value="budget-mobiel">
                                                    Budget Mobiel
                                                </div>
                                                <div class="option" data-type="secondOption" onclick="FilterByProviders(this)" data-value="delta">
                                                    Delta
                                                </div>
                                                <div class="option" data-type="secondOption" onclick="FilterByProviders(this)" data-value="hollandsnieuwe">
                                                    hollandsnieuwe
                                                </div>
                                                <div class="option" data-type="secondOption" onclick="FilterByProviders(this)" data-value="kpn">
                                                    KPN
                                                </div>
                                                <div class="option" data-type="secondOption" onclick="FilterByProviders(this)" data-value="lebara">
                                                    Lebara
                                                </div>
                                                <div class="option" data-type="secondOption" onclick="FilterByProviders(this)" data-value="robin-mobile">
                                                    Robin Mobiel
                                                </div>
                                                <div class="option" data-type="secondOption" onclick="FilterByProviders(this)" data-value="simpel">
                                                    Simpel
                                                </div>
                                                <div class="option" data-type="secondOption" onclick="FilterByProviders(this)" data-value="simyo">
                                                    Simyo
                                                </div>
                                                <div class="option" data-type="secondOption" onclick="FilterByProviders(this)" data-value="t-mobiel">
                                                    T-Mobiel
                                                </div>
                                                <div class="option" data-type="secondOption" onclick="FilterByProviders(this)" data-value="tele2">
                                                    Tele2
                                                </div>
                                                <div class="option" data-type="secondOption" onclick="FilterByProviders(this)" data-value="telfort">
                                                    Telfort
                                                </div>
                                                <div class="option" data-type="secondOption" onclick="FilterByProviders(this)" data-value="vodafone">
                                                    Vodafone
                                                </div>
                                                <div class="option" data-type="secondOption" onclick="FilterByProviders(this)" data-value="youfone">
                                                    Youfone
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <div class="mb-3">
                                    <h4>Contractduur</h4>

                                    <div class="no-label w-full sm:w-52">
                                        <div class="select" id="news">
                                            <div class="selectBtn" data-type="firstOption">All in 1</div>
                                            <div class="selectDropdown" style="z-index: 2;">

                                                <div class="option contract selected" onclick="FilterByContract(this)" data-value="all" data-type="firstOption">Alles</div>
                                                <div class="option contract" data-type="secondOption" onclick="FilterByContract(this)" data-value="12">
                                                   1 jaar
                                                </div>
                                                <div class="option contract" data-type="secondOption" onclick="FilterByContract(this)" data-value="24">
                                                    2 jaar
                                                </div>
                                                <div class="option contract" data-type="secondOption" onclick="FilterByContract(this)" data-value="1">
                                                    1 maand
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
{{--                                <span class="single-filter mb-4">--}}
{{--                                    <h3 class="font-semibold text-base text-[#2B313B] mb-2">Combi Benefits</h3>--}}
{{--                                    <ul>--}}
{{--                                        <li class="mb-3"><div class="checkbox-animate">--}}
{{--                                            <label class="flex text-sm font-normal">--}}
{{--                                              <input type="checkbox" class=""  name="check">--}}
{{--                                              <span class="input-check"></span>--}}
{{--                                              Ben/T-Mobile Home   --}}
{{--                                            </label>--}}
{{--                                          </div>--}}
{{--                                        </li>--}}
{{--                                        <li class="mb-3"><div class="checkbox-animate">--}}
{{--                                            <label class="flex text-sm font-normal">--}}
{{--                                              <input type="checkbox" class=""  name="check">--}}
{{--                                              <span class="input-check"></span>--}}
{{--                                              Budget Home--}}
{{--                                            </label>--}}
{{--                                          </div>--}}
{{--                                        </li>--}}
{{--                                        <li class="mb-3"><div class="checkbox-animate">--}}
{{--                                            <label class="flex text-sm font-normal">--}}
{{--                                              <input type="checkbox" class=""  name="check">--}}
{{--                                              <span class="input-check"></span>--}}
{{--                                              KPN Home--}}
{{--                                            </label>--}}
{{--                                          </div>--}}
{{--                                        </li>--}}
{{--                                        <li class="mb-3"><div class="checkbox-animate">--}}
{{--                                            <label class="flex text-sm font-normal">--}}
{{--                                              <input type="checkbox" class=""  name="check">--}}
{{--                                              <span class="input-check"></span>--}}
{{--                                              T-Mobile Fixed and Mobile--}}
{{--                                            </label>--}}
{{--                                          </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </span>--}}
{{--                                <span class="single-filter mb-4">--}}
{{--                                    <h3 class="font-semibold text-base text-[#2B313B] mb-2">Additional Options</h3>--}}
{{--                                    <ul>--}}
{{--                                        <li class="mb-3"><div class="checkbox-animate">--}}
{{--                                            <label class="flex text-sm font-normal">--}}
{{--                                              <input type="checkbox" checked class=""  name="check">--}}
{{--                                              <span class="input-check"></span>--}}
{{--                                              Extra Secure Online  --}}
{{--                                            </label>--}}
{{--                                          </div>--}}
{{--                                        </li>--}}
{{--                                        <li class="mb-3"><div class="checkbox-animate">--}}
{{--                                            <label class="flex text-sm font-normal">--}}
{{--                                              <input type="checkbox" class=""  name="check">--}}
{{--                                              <span class="input-check"></span>--}}
{{--                                              5G Capable--}}
{{--                                            </label>--}}
{{--                                          </div>--}}
{{--                                        </li>--}}
{{--                                        <li class="mb-3"><div class="checkbox-animate">--}}
{{--                                            <label class="flex text-sm font-normal">--}}
{{--                                              <input type="checkbox" class=""  name="check">--}}
{{--                                              <span class="input-check"></span>--}}
{{--                                              T-Mobile Unlimited--}}
{{--                                            </label>--}}
{{--                                          </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </span>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="basis-full md:basis-9/12">
                    <h2 class="text-[#2B313B] font-semibold text-base mb-3 hidden md:block">Best Deal from Bereken</h2>
                  <div id="products">

                  </div>

                </div>
              </div>
        </div> <!-- container end -->       
    </section>

    <div id="compare-section" x-data="{ open: false }" style="display: none" class="hidden compare-list bg-[#112954] flex-none md:flex items-center justify-between p-5 z-40 fixed bottom-0 left-0 w-full">
        <div id="compare-tab" class="">


        </div>
        <button class="absolute right-2 top-2 md:hidden" @click="open = false"><img
                    src="{{ asset('/frontend/assets/img/close.svg') }}" alt="icon"></button>
        <a onclick="compareNow()" class="com-btn outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Compare</a>
        <a onclick="removeCompare()" class="com-btn-b bg-white text-[#0052FE] hover:bg-[#0052FE] hover:text-white transition h-fit focus:outline-none focus:ring-0 text-sm rounded-[6px] font-bold px-10 py-2.5 text-center">Sluiten</a>
    </div>

    <section id="plan-section" class="hidden hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="section-title text-center ">
            <h1 class="text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-6 sm:pt-4">Compare plans</h1>
        </div>
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="table-b table-auto overflow-x-auto ">
                <div class="flex flex-row items-center">
                    <div class="com-lists flex flex-row ">

                        <div class="table-labels w-72">
                            <div class="">
                                <div class="h-[310px]"></div>



                                <div class="h-80 grid grid-cols-1 gap-2 justify-items-start content-center p-5">
                                    <div class="px-4 py-2 text-[#2B313B] text-base font-semibold">Comparison</div>

                                    <div class="px-4 py-2 text-black text-sm font-normal">Network Speed</div>

                                    <div class="px-4 py-2 text-black text-sm font-normal">Network Type</div>

                                    <div class="px-4 py-2 text-black text-sm font-normal">Minutes</div>

                                    <div class="px-4 py-2 text-black text-sm font-normal">Duration
                                    </div>
                                    <div class="px-4 py-2 text-black text-sm font-normal">
                                        Prijs per MB
                                    </div>

                                    <div class="px-4 py-2 text-black text-sm font-normal">
                                        Prijs per minuut
                                    </div>



                                </div>



                            </div>
                        </div>
                        <div id="compare-cards" class="flex">

                        </div>




                    </div>
                </div>
            </div>
            <div class="button-area flex justify-end mt-14">
                <a onclick="showProduct()" class="gray-btn outline-btn btn-translate-z flex bg-[#0052fe] text-white text-xs font-bold py-2.5 px-6 rounded transition-all cursor-pointer  text-xs font-semibold text-center justify-center items-center rounded py-4 px-2 my-6 w-fit mr-3"><span class="flex items-center"><img src="{{asset('/frontend/assets/img/arrow-white.svg')}}" class="mr-2 h-2 w-2 rotate-180 float-left"  alt="icon"> Go Back </span></a>
            </div>
        </div> <!-- container end -->
    </section>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        let products =[];
        function fetchProducts(data,min,selectedProviders,selectedInternet,contract){
            let defaultData = "<?php echo $data?>" ? "<?php echo $data?>": document.getElementById('range2').value;
            let defaultMin = "<?php echo $min?>" ? "<?php echo $min?>": document.getElementById('range3').value;
            let internetData = data ? data : defaultData;
            let totalData = internetData ;
            let totalMin = min ? min : defaultMin;
            let selectedProvider = selectedProviders ? selectedProviders :"<?php echo $provider?>"
            let provider;
            let network_type;
            let contract_duration;
            if(selectedProvider == "all" || !selectedProvider){
                provider = "";
            }
            else{
                provider = selectedProvider
            }

            if(contract == "all" || !contract){
                contract_duration = "";
            }
            else{
                contract_duration = contract
            }
            if(selectedInternet == "all" || !selectedInternet){
                network_type = "";
            }else{
                network_type = selectedInternet
            }

            let html =``;

            let apiUrl = `https://api-mobile.whitelabeled.nl/v1/compare/mhRxoDeIyEMUgOrq-240?&min_minutes=${totalMin}&min_data=${totalData}&provider=${provider}&network_type=${network_type}&contract_duration=${contract_duration}&items_per_page=999&group_provider_products=${provider ? false : true}&v=657f_ExPhOCmnT4U94wS6cJyiwxclhlX&vc=64a18&tracking=-`;

            axios.get(apiUrl)
                .then((response)=>{
                    products = [];
                    response.data.products.map((item)=>{
                        products.push(item);
                    });

                    products.map((item,i)=>{



                        let index = i +1;
                        html += `  <div class="single-deal-box bg-white inner-area border border-[#F5F8FF] rounded-2xl p-5 mb-5">
                        <div class="top-part flex justify-between border-b border-[#F5F8FF] mb-3 pb-5">
                            <div class="left-info grid gap-4 content-between grid-cols-1">
                                <img width="76px" src=${item.provider_logo} alt="logo">
                                <span class="w-fit bg-[#E9FDF2] text-[#26BA65] text-[10px] font-bold mt-2 px-2.5 py-2 rounded ">Value for money: Excellent</span>
                            </div>
                            <div class="right-info flex flex-col items-end">
                                <div class="price font-semibold text-2xl text-[#2B313B] ">
                                    € ${item.total_price}
                                </div>
                                <div class="text-[#6C7A93] text-base font-normal">
                                        per month
                                </div>
                            </div>
                        </div>
                        <div class="in-list grid grid-cols-1 gap-2 lg:flex lg:flex-row lg:justify-between">
                            <div class="grid grid-cols-2 gap-2 lg:flex lg:flex-row lg:justify-between">
                                <div class="mr-4">
                                    <div class="font-semibold text-sm text-[#2B313B] mb-2">
                                      ${item.data / 1000 == 99.999 ? "Onbeperkt":item.data / 1000 } GB(${item.network_type})
                                    </div>
                                    <div class="font-normal text-sm text-[#2B313B]">
                                        <span class="flex">   Data
                                        </span>
                                    </div>
                                </div>
                                <div class="mr-4">
                                    <div class="font-semibold text-sm text-[#2B313B] mb-2">
                                        ${item.minutes == 99999 ?"Onbeperkt": item.minutes}
                                    </div>
                                    <div class="font-normal text-sm text-[#2B313B]">
                                        <span class="flex">  Minutes/Sms
                                        </span>
                                    </div>
                                </div>


                                </div>
                                <div class="flex justify-between my-3 md:my-0">
                                    <a href=${item.signup_url} target="_blank" class="flex items-center text-[#0052FE] font-bold text-sm mx-3"> View <img src="{{asset('/frontend/assets/img/goto-link.svg')}}" class="mx-2" alt="icon"></a>

                                    <span class="flex items-center">
                                        <input type="checkbox" onchange="compare(this)" data-index=${i} ${checkExists(item.base_id) == item.base_id ? "checked":""} data-id=${item.base_id} name="compare" id="compare" class="compare-checkbox mr-2">
                                    <label for="compare" class="text-[#2B313B] text-sm font-normal cursor-pointer">Compare</label>
                                    </span>
                                </div>
                        </div>
                        <div class="mt-3" x-data="accordion(${index})">

                            <div
                              x-ref="tab"
                              :style="handleToggle()"
                              class="font-normal text-sm border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all"
                            >
                            <div class="insurance-tab mb-5">
                                <article  x-data="{ tab: 0 }" data-interval="6000">

                                    <nav role="tablist" class="my-3">
                                        <ul class="lg:flex lg:items-center">
                                            <li class="mb-2 lg:mb-0 mr-4"><button href="!#" x-on:click="tab = 0" class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm" x-bind:class="{ 'font-semibold active-tab border-b border-[#0052FE]': tab === 0 }" >Prijsinformatie</button></li>

                                        </ul>
                                    </nav>

                                    <div class="grid">
                                        <div x-show="tab === 0">

                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Eerste 6 maanden</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">€ ${item.discount_price}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Daarna per maand</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">€ ${item.base_price}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Gemiddelde prijs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">€ ${item.total_price_contract / item.contract_duration} </span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Totale contractprijs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">€ ${item.total_price_contract} voor ${item.contract_duration_text}</span></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href=${item.signup_url} target="_blank" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 1">
                                            <h4>Second content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 2">
                                            <h4>Third content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 3">
                                            <h4>Fourth content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                        <div x-show="tab === 4">
                                            <h4>Fourth content</h4>
                                            <h3 class="text-[#2B313B] text-sm font-semibold my-5">FBTO Autoverzekering (schadeherstellers FBTO) 12 maanden</h3>
                                            <table class="mb-5">
                                                <tbody class="text-[#2B313B] text-sm font-normal">
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Independer quality mark</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">One-off policy costs</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Yes</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Can be cancelled daily</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Telephone contact possible</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">No</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-1 text-[#2B313B] text-sm font-normal">Type of policy</td>
                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span class="ml-2">Digital Policy</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="flex items-center justify-end">
                                                <a href="#" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                            </div>
                                        </div>
                                     </div>

                                </article>
                            </div>
                            </div>
                            <h4
                              @click="handleClick()"
                              class="flex items-center justify-center w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer"
                            >
                              <span>Fold In</span>
                              <svg :class="handleRotate()" class="fill-current text-[#2B313B] h-5 w-5 transform transition-transform duration-500" fill="currentColor"
                              viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                          </svg>
                            </h4>
                          </div>
                    </div>`
                    })

                    document.getElementById('products').innerHTML = html
                })


        }

        function filterByData(el){
            let dataValue;
            let showGB = document.getElementsByClassName('range__counter')
            let rangeText = document.getElementsByClassName('data-range-text')[0];

            if(el.value == 0){
                dataValue = 0;
                showGB[0].innerText = "0";
                rangeText.innerText = "MB"
            }
           else if(el.value == 1){
                dataValue = 500;
                showGB[0].innerText = "500";
                rangeText.innerText = "MB"

            }else if(el.value == 2){
                dataValue = 1000;
                showGB[0].innerText = "1";
                rangeText.innerText = "GB"

            }else if(el.value == 3){
                dataValue = 2000;
                showGB[0].innerText = "2";
                rangeText.innerText = "GB";
            }else if(el.value == 4){
                dataValue = 5000;
                showGB[0].innerText = "5";
                rangeText.innerText = "GB";
            }else if(el.value == 5){
                dataValue = 10000;
                showGB[0].innerText = "10";
                rangeText.innerText = "GB";
            }else if(el.value == 6){
                showGB[0].innerText = "20";
                rangeText.innerText = "GB";
                dataValue = 20000
            }else if(el.value == 7){
                showGB[0].innerText = "Onbeperkt";
                rangeText.innerText = "";
                dataValue = 99999
            }
            let minValue = document.getElementById('range3').value;

            let selectedProvider = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            let selectedInternet =document.querySelectorAll('input[name=network_type]:checked')[0].value;
            let contract = document.getElementsByClassName('option contract selected')[0].getAttribute('data-value');





            fetchProducts(dataValue,minValue,selectedProvider,selectedInternet,contract)
        }

        function filterByMin(el){
            let minValue = el.value;
            let dataValue;
            let data = document.getElementById('range2').value;
            if(data == 0){
                dataValue = 100;
            }
           else if(data == 1){
                dataValue = 500;
            }else if(data == 2){
                dataValue = 1000;
            }else if(data == 3){
                dataValue = 2000;
            }else if(data == 4){
                dataValue = 5000;
            }else if(data == 5){
                dataValue = 10000;
            }else if(data == 6){
                dataValue = 20000
            }else if (data == 7){
                dataValue = 99999
            }

            let selectedProvider = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            let selectedInternet =document.querySelectorAll('input[name=network_type]:checked')[0].value;
            let contract = document.getElementsByClassName('option contract selected')[0].getAttribute('data-value');


            fetchProducts(dataValue,minValue,selectedProvider,selectedInternet,contract)


        }

        function FilterByProviders(el){
            let selectedValue = el.getAttribute('data-value');
            let previousSelected = document.getElementsByClassName('option selected');

            for(let i =0; i < previousSelected.length; i++){
                previousSelected[i].classList.remove('selected');
            }
            el.classList.add('selected');

            let minValue =document.getElementById('range3').value;
            let dataValue;
            let data = document.getElementById('range2').value;
            if(data == 0){
                dataValue = 100;
            }
            else if(data == 1){
                dataValue = 500;
            }else if(data == 2){
                dataValue = 1000;
            }else if(data == 3){
                dataValue = 2000;
            }else if(data == 4){
                dataValue = 5000;
            }else if(data == 5){
                dataValue = 10000;
            }else if(data == 6){
                dataValue = 20000
            }else if (data == 7){
                dataValue = 99999
            }

            let selectedInternet =document.querySelectorAll('input[name=network_type]:checked')[0].value;
            let contract = document.getElementsByClassName('option contract selected')[0].getAttribute('data-value');
            fetchProducts(dataValue,minValue,selectedValue,selectedInternet,contract)

        }

        function changeNetworkType(el){
            let selectedInternet = el.value;
            let dataValue;
            let data = document.getElementById('range2').value;
            if(data == 0){
                dataValue = 100;
            }
            else if(data == 1){
                dataValue = 500;
            }else if(data == 2){
                dataValue = 1000;
            }else if(data == 3){
                dataValue = 2000;
            }else if(data == 4){
                dataValue = 5000;
            }else if(data == 5){
                dataValue = 10000;
            }else if(data == 6){
                dataValue = 20000
            }else if (data == 7){
                dataValue = 99999
            }
            let minValue =document.getElementById('range3').value;
            let selectedProvider = document.getElementsByClassName('option selected')[0].getAttribute('data-value');

            let contract = document.getElementsByClassName('option contract selected')[0].getAttribute('data-value');



            fetchProducts(dataValue,minValue,selectedProvider,selectedInternet,contract)
        }

        function FilterByContract(el){
          let selectedValue = el.getAttribute('data-value');
            let previousSelected = document.getElementsByClassName('option contract selected');
            for(let i =0; i < previousSelected.length; i++){
                previousSelected[i].classList.remove('selected');
            }
            el.classList.add('selected');
            let minValue =document.getElementById('range3').value;
            let dataValue;
            let data = document.getElementById('range2').value;
            if(data == 0){
                dataValue = 100;
            }
            else if(data == 1){
                dataValue = 500;
            }else if(data == 2){
                dataValue = 1000;
            }else if(data == 3){
                dataValue = 2000;
            }else if(data == 4){
                dataValue = 5000;
            }else if(data == 5){
                dataValue = 10000;
            }else if(data == 6){
                dataValue = 20000
            }else if (data == 7){
                dataValue = 99999
            }
            let selectedInternet =document.querySelectorAll('input[name=network_type]:checked')[0].value;
            let selectedProvider = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            fetchProducts(dataValue,minValue,selectedProvider,selectedInternet,selectedValue)

        }

        let selectedProduct = [];
        let allSelectedProduct =[];
        function compare(el){

            let tab = "";
            if(el.checked){
                if(!selectedProduct.includes(el.getAttribute('data-id'))){
                    selectedProduct.push(parseInt(el.getAttribute('data-id')));
                    allSelectedProduct.push(products[el.getAttribute('data-index')])
                }


                allSelectedProduct.map((item,i)=>{
                    tab += `              <span class="comp-card bg-white p-3 flex items-center h-[61px] w-full md:w-[217px] justify-between rounded-xl">
                                              <img src=${item.provider_logo} class="w-14 md:w-[70px] h-auto" alt="logo">
                                              <span class="price font-semibold text-base text-[#2B313B] mx-0 sm:mx-2 md:mx-3">
                                                 € ${item.total_price}
                                              </span>
                                            {{--<a type="button" onclick="removeCompare(${item.base_id})" ><img src="{{asset('/frontend/assets/img/close-x.svg')}}" alt="icon"></a>--}}

                                          </span>

                                                        `
                })


                if(selectedProduct.length > 0){
                    document.getElementById("compare-section").style.display = "block";
                }
                document.getElementById('compare-tab').innerHTML = tab
            }else{
                let index = selectedProduct.indexOf(el.getAttribute('data-id'));
                selectedProduct.splice(index,1)
               let findProductIndex = allSelectedProduct.findIndex(obj => obj.base_id == el.getAttribute('data-id'));
               allSelectedProduct.splice(findProductIndex,1);

                allSelectedProduct.map((item,i)=>{
                    tab += `              <span class="comp-card bg-white p-3 flex items-center h-[61px] w-full md:w-[217px] justify-between rounded-xl">
                                              <img src=${item.provider_logo} class="w-14 md:w-[70px] h-auto" alt="logo">
                                              <span class="price font-semibold text-base text-[#2B313B] mx-0 sm:mx-2 md:mx-3">
                                                 € ${item.total_price}
                                              </span>

                                          </span>

                                                        `
                })

                document.getElementById('compare-tab').innerHTML = tab

                console.log(allSelectedProduct)
            }

            if(document.querySelectorAll('input[name=compare]:checked').length == 0){
                document.getElementById("compare-section").style.display = "none";
            }



        }

        function compareNow(){
            let compareHtml = "";
           let filteredArray = products.filter(el => selectedProduct.includes(el.base_id));

            allSelectedProduct.map((item)=>{
               compareHtml += `  <div
                            class="single-com-details ml-2 w-64 flex flex-col bg-white border border-#F5F8FF rounded-2xl">
                            <div class="p-5 border-b border-[#F5F8FF]">
                                <div class="top-part border-b border-[#F5F8FF] mb-3 pb-5">
                                    <div class="left-info flex items-center justify-between">
                                        <img src=${item.provider_logo} alt="logo">
                                        {{--<button type="button"><img src="{{asset('/frontend/assets/img/close-x.svg')}}" alt="icon"></button>--}}
                                    </div>
                                </div>
                                <div class="in-list flex flex-row items-center justify-between">

                                    <div class="right-info flex flex-col items-start">
                                        <div class="price font-semibold text-2xl text-[#2B313B] ">
                                            € ${item.total_price}
                                        </div>
                                        <div class="text-[#6C7A93] text-base font-normal">
                                            per month
                                        </div>
                                    </div>


                                </div>


                                <div class="flex items-center justify-center">
                                    <a href=${item.signup_url} target="_blank"
                                        class="outline-btn btn-translate-z flex justify-center h-auto w-full  bg-[#112954] text-white text-sm font-bold py-2.5 px-6 mb-3 rounded-lg transition-all">Choose</a>
                                </div>
                                <span
                                    class="w-full block bg-[#E9FDF2] text-[#26BA65] text-center text-[10px] font-bold mt-2 px-2.5 py-2 rounded ">Value
                                    for money: Excellent</span>
                            </div>
                            <div
                                class="h-80  pt-8 grid grid-cols-1 gap-0 justify-items-start content-center p-5 border-b border-[#F5F8FF]">
                                <div class="py-3 pt-10  text-[#2B313B] text-base font-normal">${item.network_speed}</div>
                                <div class="py-3 text-black text-sm font-normal">${item.network_type}</div>
                                <div class="py-3 text-[#2B313B] text-base font-normal">${item.minutes}</div>
                                <div class="py-3 text-black text-sm font-normal">${item.contract_duration_text}</div>
                                <div class="py-3 text-[#2B313B] text-base font-normal">${item.score_elements[0].positive == true ? "Yes":"No"}</div>
                                <div class="py-3 text-black text-sm font-normal">${item.score_elements[1].positive == true ? "Yes":"No"}</div>
                            </div>







                        </div>`
           })

            document.getElementById('compare-cards').innerHTML = compareHtml;
            document.getElementById('plan-section').classList.remove('hidden');
            document.getElementById('product-content').classList.add('hidden')
        }
        function showProduct(){
            document.getElementById('product-content').classList.remove('hidden')
            document.getElementById('plan-section').classList.add('hidden');

        }

        function checkExists(val) {
            if(selectedProduct.includes(val)){
                return val;
            }else{
                return false;
            }
        }

        function removeCompare(id){
            let tab = "";
            let findIndex = selectedProduct.indexOf(id);

            {{--if(selectedProduct.includes(parseInt(id))){--}}
            {{--    document.getElementsByClassName('compare-checkbox-'+id)[0].checked = false--}}
            {{--}--}}

            selectedProduct = [];
            allSelectedProduct =[];
            if(allSelectedProduct.length == 0){
                document.getElementById("compare-section").style.display = "none";
            }

            let compareBox = document.getElementsByClassName('compare-checkbox');
            for(let i=0; i < compareBox.length;i++){
                compareBox[i].checked = false;
            }



            {{--allSelectedProduct.map((item,i)=>{--}}
            {{--    tab += `              <span class="comp-card bg-white p-3 flex items-center h-[61px] w-full md:w-[217px] justify-between rounded-xl">--}}
            {{--                                  <img src=${item.provider_logo} class="w-14 md:w-[70px] h-auto" alt="logo">--}}
            {{--                                  <span class="price font-semibold text-base text-[#2B313B] mx-0 sm:mx-2 md:mx-3">--}}
            {{--                                     € ${item.total_price}--}}
            {{--                                  </span>--}}
            {{--                                <button type="button" onclick="removeCompare(${i})"><img src="{{asset('/frontend/assets/img/close-x.svg')}}" alt="icon"></button>--}}

            {{--                              </span>--}}
            {{--                                            `--}}
            {{--});--}}


           // document.getElementById('compare-tab').innerHTML = tab;



        }
        fetchProducts()
    </script>
    <script>
        window.addEventListener("DOMContentLoaded",() => {
	let range1 = new RollCounterRange("#range1"),
        range2 = new RollCounterRange("#range2"),
        range3 = new RollCounterRange("#range3");
});

class RollCounterRange {
	constructor(id) {
		this.el = document.querySelector(id);
		this.srValue = null;
		this.fill = null;
		this.digitCols = null;
		this.lastDigits = "";
		this.rollDuration = 0; // the transition duration from CSS will override this
		this.trans09 = false;

		if (this.el) {
			this.buildSlider();
			this.el.addEventListener("input",this.changeValue.bind(this));
		}
	}
	buildSlider() {
		// create a div to contain the <input>
		let rangeWrap = document.createElement("div");
        let counterTop = document.querySelector(".counter-top")
		rangeWrap.className = "range";
		this.el.parentElement.insertBefore(rangeWrap,this.el);

		// create another div to contain the <input> and fill
		let rangeInput = document.createElement("span");
		rangeInput.className = "range__input";
		rangeWrap.appendChild(rangeInput);

		// range fill, place the <input> and fill inside container <span>
		let rangeFill = document.createElement("span");
		rangeFill.className = "range__input-fill";
		rangeInput.appendChild(this.el);
		rangeInput.appendChild(rangeFill);

		// create the counter
		let counter = document.createElement("span");
		counter.className = "range__counter order-2 font-semibold text-sm text-[#0052FE]";
		// document.getElementsById("counter-top").appendChild(counter);
		rangeWrap.previousSibling.previousSibling.appendChild(counter);

		// screen reader value
		let srValue = document.createElement("span");
		srValue.className = "range__counter-sr";
		srValue.textContent = "0";
		counter.appendChild(srValue);

		// column for each digit
		for (let D of this.el.max.split("")) {
			let digitCol = document.createElement("span");
			digitCol.className = "range__counter-column";
			digitCol.setAttribute("aria-hidden","true");
			counter.appendChild(digitCol);

			// digits (blank, 0–9, fake 0)
			for (let d = 0; d <= 11; ++d) {
				let digit = document.createElement("span");
				digit.className = "range__counter-digit";

				if (d > 0)
					digit.textContent = d == 11 ? 0 : `${d - 1}`;

				digitCol.appendChild(digit);
			}
		}

		this.srValue = srValue;
		this.fill = rangeFill;
		this.digitCols = counter.querySelectorAll(".range__counter-column");
		this.lastDigits = this.el.value;

		while (this.lastDigits.length < this.digitCols.length)
			this.lastDigits = " " + this.lastDigits;

		this.changeValue();

		// use the transition duration from CSS
		let colCS = window.getComputedStyle(this.digitCols[0]),
			transDur = colCS.getPropertyValue("transition-duration"),
			msLabelPos = transDur.indexOf("ms"),
			sLabelPos = transDur.indexOf("s");

		if (msLabelPos > -1)
			this.rollDuration = transDur.substr(0,msLabelPos);
		else if (sLabelPos > -1)
			this.rollDuration = transDur.substr(0,sLabelPos) * 1e3;
	}
	changeValue() {
		// keep the value within range
		if (+this.el.value > this.el.max)
			this.el.value = this.el.max;

		else if (+this.el.value < this.el.min)
			this.el.value = this.el.min;

		// update the screen reader value
		if (this.srValue)
			this.srValue.textContent = this.el.value;

		// width of fill
		if (this.fill) {
			let pct = this.el.value / this.el.max,
				fillWidth = pct * 100,
				thumbEm = 1 - pct;

			this.fill.style.width = `calc(${fillWidth}% + ${thumbEm}em)`;
		}
		
		if (this.digitCols) {
			let rangeVal = this.el.value;

			// add blanks at the start if needed
			while (rangeVal.length < this.digitCols.length)
				rangeVal = " " + rangeVal;

			// get the differences between current and last digits
			let diffsFromLast = [];
			if (this.lastDigits) {
				rangeVal.split("").forEach((r,i) => {
					let diff = +r - this.lastDigits[i];
					diffsFromLast.push(diff);
				});
			}

			// roll the digits
			this.trans09 = false;
			rangeVal.split("").forEach((e,i) => {
				let digitH = 1.5,
					over9 = false,
					under0 = false,
					transY = e === " " ? 0 : (-digitH * (+e + 1)),
					col = this.digitCols[i];

				// start handling the 9-to-0 or 0-to-9 transition
				if (e == 0 && diffsFromLast[i] == -9) {
					transY = -digitH * 11;
					over9 = true;

				} else if (e == 9 && diffsFromLast[i] == 9) {
					transY = 0;
					under0 = true;
				}

				col.style.transform = `translateY(${transY}em)`;
				col.firstChild.textContent = "";

				// finish the transition
				if (over9 || under0) {
					this.trans09 = true;
					// add a temporary 9
					if (under0)
						col.firstChild.textContent = e;

					setTimeout(() => {
						if (this.trans09) {
							let pauseClass = "range__counter-column--pause",
								transYAgain = -digitH * (over9 ? 1 : 10);

							col.classList.add(pauseClass);
							col.style.transform = `translateY(${transYAgain}em)`;
							void col.offsetHeight;
							col.classList.remove(pauseClass);

							// remove the 9
							if (under0)
								col.firstChild.textContent = "";
						}

					},this.rollDuration);
				}
			});
			this.lastDigits = rangeVal;
		}
	}
}
    </script>
    <script>
        // accordion start
    document.addEventListener('alpine:init', () => {
        Alpine.store('accordion', {
            tab: 0
            });
            Alpine.data('accordion', (idx) => ({
            init() {
                this.idx = idx;
            },
                idx: -1,
            handleClick() {
                this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
                return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
            },
            handleToggle() {
                return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : '';
            }
        }));
    })
</script>
</div>
