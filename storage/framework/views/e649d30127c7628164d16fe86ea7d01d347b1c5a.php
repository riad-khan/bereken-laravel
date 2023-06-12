
<?php $__env->startSection('meta'); ?>
    
    <style>
        .selected-tv {
            font-size: 16px;
            color: #0052f0;
            font-weight: 600;
            width: auto;
            position: relative;
            padding: 8px 15px;
            margin: 15px 5px;
            border: 1px solid #0052f0;
            border-radius: 4px;
            transition: 250ms;
            cursor: pointer;
            display: inline-block;
        }

        .selected-tv svg {
            display: inline-block;
            width: 14px;
            float: right;
        }

        #selected-tv-channel div {
            display: inline-block;
            text-align: left;
        }


        .selected-tv:hover {
            color: #fff;
            background: #0052f0;
        }

        .selected-tv:hover svg {
            fill: #ffffff;
        }

        #selected-tv-channel, #selected-tv-extra {
            text-align: left;
        }
        .wli_comparehelp {
            width: 32.5%;
            display: inline-block;
            vertical-align: top;
            padding: 10px;
        }

        .wli_text_container {
            height: 200px;
        }

        span.wli_title {
            display: block;
            font-weight: 700;
        }

        span.wli_text {
            font-size: 14px;
        }

        .wli_content .wli_comparehelp .wli_comparehelp_visual svg {
            fill: #ccc;
        }

        .wli_content .wli_comparehelp .wli_comparehelp_checkbox .wli_svg_checkbox, .wli_content .wli_comparehelp .wli_comparehelp_postalcheck .wli_svg_postalcheck, .wli_content .wli_comparehelp .wli_comparehelp_filter .wli_svg_filter {
            fill: #5581ff;
        }


        .single-com-details .top-part .left-info>img {
            height: 55px!important;
        }
        .com-top {
            padding-bottom: 55px!important;
        }

        .com-mid {
            padding-top: 70px!important;
        }

        .com-c {
            padding-top: 50px!important;
        }

        .com-d {
            padding-top: 60px!important;
            padding-bottom: 40px!important;
        }

        .com-e {
            padding-top: 35px!important;
        }
        .selected-link .range__counter-sr {
            color: #0052FE;
        }
        .selected-link span.range__counter {
            color: transparent;
        }
        div#info .filter-top-msg, .filter-msg {
            padding: 80px 10px;
        }
        #compare-tab .comp-card {
            display: inline-flex;
            margin: 5px;
            height: 50px;
            width: 200px;
            vertical-align: top;
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

        input#hnr {
            width: 100px;
        }
        .loader-img img{
            margin: 0 auto;
        }
        .wli_text_container {
            height: auto;
            margin: 15px auto;
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
            .wli_content {
                height: 70vh;
                overflow: scroll;
            }

            .wli_comparehelp {
                width: 100%;
                display: inline-block;
            }

            .wli_comparehelp_visual {
                width: 100%;
            }
        }
    </style>
<?php $__env->stopSection(); ?>
<div>

    <?php
        $type = $_GET['type'];
        $zip = $_GET['zip'];
        $hnr = $_GET['nr'];
    ?>

   <div>
       <section  id="product-content" class="hero bg-white pt-20 p-4 md:pt-12 lg:p-12 w-full items-center mx-auto">
           <div class="container mx-auto max-w-screen-xl">
               <!-- container start -->

               <div class="section-title text-center mb-4">
                   <h1 class="text-2xl font-semibold text-[#2B313B] p-4 sm:pb-6 sm:pt-4">Choose your Internet Package</h1>
                   <div
                           class="flex flex-row items-end md:flex-row md:items-center justify-between bg-white border border-[#F5F8FF] rounded-xl p-5">
                       <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="mb-4 md:mb-0">

                                <h2 class="text-[#2B313B] font-semibold text-base text-left">Type</h2>
                                    <form action="" class="flex flex-col text-left">
                                        <div>

                                            <div class="no-label w-full sm:w-52">
                                                <div class="select" id="news">
                                                    <div class="selectBtn" data-type="firstOption"><?php echo e($type == "all" ?"All in 1":""); ?></div>
                                                    <div class="selectDropdown" style="z-index: 2;">

                                                        <div class="option" onclick="FilterByType(this)"
                                                             data-value="all" data-type="firstOption">All in 1</div>
                                                        <div class="option" data-type="secondOption"
                                                             onclick="FilterByType(this)" data-value="internet-tv">
                                                            Internet & Tv
                                                        </div>
                                                        <div class="option" data-type="secondOption"
                                                             onclick="FilterByType(this)" data-value="internet-bellen">
                                                            Internet & Bellen
                                                        </div>
                                                        <div class="option" data-type="secondOption"
                                                             onclick="FilterByType(this)" data-value="internet">
                                                            Alleen Internet
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>


                           
                           

                           
                           
                           
                           

                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           

                           <div class="grid grid-cols-1 md:ml-4 lg:ml-14 md:grid-cols-2 gap-4">
                               <div class="flex items-center justify-start">
                                   <span class="text-[#2B313B] text-sm font-normal mr-3">Zip Code</span>
                                   <input type="text" id="zip" value="<?php echo e($zip ? $zip : ''); ?>"
                                          class="w-[100px] text-[#2B313B] text-base font-normal border-b border-[#0052FE] focus:outline-none ">
                               </div>
                               <div class="flex items-center justify-start md:justify-between">
                                   <span class="text-[#2B313B] text-sm font-normal mr-3">Huisnr</span>
                                   <input type="text" id="hnr" value="<?php echo e($hnr ? $hnr : ''); ?>"
                                          class="w-auto text-[#2B313B] text-base font-normal border-b border-[#0052FE] focus:outline-none ">
                               </div>
                           </div>
                       </div>
                       <button onclick="checkZip()" type="button"
                               class="bg-white text-[#0052FE] hover:bg-[#0052FE] hover:text-white border border-[#0052F0] transition h-fit focus:outline-none focus:ring-0 font-xs rounded font-bold px-10 py-2 text-center">Check</button>
                   </div>

                   <div id="info">

                   </div>
                   <div class="extra-btn-are flex flex-col justify-start md:flex-row md:items-center md:justify-between mt-4">
                            
                            <a class="text-[#0052FE] flex items-center" data-modal-target="large-modal2" data-modal-toggle="large-modal2"  type="button">
                                    Hulp bij vergelijken <svg  width="15" height="15" viewBox="0 0 12 13" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" class="ml-2" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 1.41421;"><rect id="info" x="0" y="0" width="12" height="12.02" style="fill: none;"></rect><clipPath id="_clip1"><rect x="0" y="0" width="12" height="12.02"></rect></clipPath><g clip-path="url(#_clip1)"><path d="M7.991,9.747l0,-1.245c0,-0.075 -0.023,-0.135 -0.07,-0.182c-0.046,-0.046 -0.102,-0.07 -0.168,-0.07l-0.755,0l0,-4.001c0,-0.075 -0.024,-0.136 -0.07,-0.182c-0.047,-0.047 -0.107,-0.07 -0.182,-0.07l-2.491,0c-0.074,0 -0.135,0.023 -0.182,0.07c-0.046,0.046 -0.069,0.107 -0.069,0.182l0,1.245c0,0.075 0.023,0.135 0.069,0.182c0.047,0.046 0.108,0.07 0.182,0.07l0.742,0l0,2.504l-0.742,0c-0.074,0 -0.135,0.024 -0.182,0.07c-0.046,0.047 -0.069,0.107 -0.069,0.182l0,1.245c0,0.075 0.023,0.136 0.069,0.182c0.047,0.047 0.108,0.07 0.182,0.07l3.498,0c0.066,0 0.122,-0.023 0.168,-0.07c0.047,-0.046 0.07,-0.107 0.07,-0.182Zm-0.993,-6.995l0,-1.246c0,-0.074 -0.024,-0.135 -0.07,-0.182c-0.047,-0.046 -0.107,-0.069 -0.182,-0.069l-1.497,0c-0.075,0 -0.135,0.023 -0.182,0.069c-0.047,0.047 -0.07,0.108 -0.07,0.182l0,1.246c0,0.074 0.023,0.135 0.07,0.181c0.047,0.047 0.107,0.07 0.182,0.07l1.497,0c0.075,0 0.135,-0.023 0.182,-0.07c0.046,-0.046 0.07,-0.107 0.07,-0.181Zm4.995,3.246c0,1.091 -0.266,2.094 -0.798,3.008c-0.531,0.914 -1.259,1.641 -2.182,2.182c-0.924,0.541 -1.927,0.812 -3.009,0.812c-1.082,0 -2.089,-0.271 -3.022,-0.812c-0.933,-0.541 -1.656,-1.268 -2.169,-2.182c-0.513,-0.914 -0.783,-1.917 -0.811,-3.008c-0.028,-1.092 0.242,-2.094 0.811,-3.009c0.569,-0.914 1.292,-1.641 2.169,-2.182c0.877,-0.541 1.884,-0.812 3.022,-0.812c1.138,0 2.141,0.271 3.009,0.812c0.867,0.541 1.595,1.268 2.182,2.182c0.588,0.915 0.854,1.917 0.798,3.009Z" style="fill-rule: nonzero;"></path></g></svg>
                                    </a>
    
                                    
                       <form action="" class="flex flex-col mt-4 md:mt-0">
                           <div class="">
    
                               <div class="no-label w-52">
                                   <div class="select" id="news">
                                       <div class="selectBtn" data-type="firstOption"> Goedkoopste eerst</div>
                                       <div class="selectDropdown" style="z-index: 2;">
    
    
                                           <div class="sort option choosed" data-type="secondOption"
                                                onclick="sort(this)" data-value="price">
                                               Goedkoopste eerst
                                           </div>
                                           <div class="sort option" data-type="secondOption"
                                                onclick="sort(this)" data-value="price_monthly">
                                               Laagste vaste prijs
                                           </div>
                                           <div class="sort option" data-type="secondOption"
                                                onclick="sort(this)" data-value="score">
                                               Ons advies
                                           </div>
                                           <div class="sort option" data-type="secondOption"
                                                onclick="sort(this)" data-value="speed">
                                               Snelste eerst
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </form>
                            </div>
                   <div id="selected-tv-channel">

                   </div>
                   <div id="selected-tv-extra">

                   </div>

                   <div class="hidden" id="info">

                   </div>


               </div>
               <div class="flex flex-col md:flex-row">
                   <div class="basis-full md:basis-3/12 mr-0 md:mr-4">


                       <div class="filter-area" x-data="{ open: false }">
                       
                        <span
                                class="flex border border-[#F5F8FF] rounded-md p-3 mb-4 md:border-none md:p-0  items-center justify-between">
                            <h2 class="text-[#2B313B] font-semibold text-base">Filters</h2>
                            <button class="visible md:hidden" @click="open = ! open"><img
                                        src="<?php echo e(asset('/frontend/assets/img/filter.svg')); ?>" alt="icon"></button>
                          
                        </span>

                           <div class="main-filter absolute md:relative filter-list md:block" x-show="open" x-transition>
                               <div
                                       class="relative flex flex-col bg-white inner-area border border-[#F5F8FF] rounded-2xl p-5">
                                   <button class="absolute right-2 top-2 md:hidden" @click="open = false"><img
                                               src="<?php echo e(asset('/frontend/assets/img/close.svg')); ?>" alt="icon"></button>
                                   <span class="single-filter mb-4">
                                    <h2 class="text-[#2B313B] font-semibold text-2xl mb-4 flex md:hidden">Filters</h2>
                                 





                                    <h3 class="font-semibold text-base text-[#2B313B] mb-2">Type</h3>
                                    <form action="" class="flex flex-col">
                                        <div class="mb-3">

                                            <div class="no-label w-full sm:w-52">
                                                <div class="select" id="news">
                                                    <div class="selectBtn" data-type="firstOption"><?php echo e($type == "all" ?"All in 1":""); ?></div>
                                                    <div class="selectDropdown" style="z-index: 2;">

                                                        <div class="option" onclick="FilterByType(this)"
                                                             data-value="all" data-type="firstOption">All in 1</div>
                                                        <div class="option" data-type="secondOption"
                                                             onclick="FilterByType(this)" data-value="internet-tv">
                                                            Internet & Tv
                                                        </div>
                                                        <div class="option" data-type="secondOption"
                                                             onclick="FilterByType(this)" data-value="internet-bellen">
                                                            Internet & Bellen
                                                        </div>
                                                        <div class="option" data-type="secondOption"
                                                             onclick="FilterByType(this)" data-value="internet">
                                                            Alleen Internet
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <h3 class="font-semibold text-base text-[#2B313B] mb-2">Internet</h3>
                                    <form class="grid grid-cols-1 gap-4">
                                        <div class="bg-white selected-link">
                                            <span class="relative flex items-center justify-end">
                                                <label for="range2"
                                                       class="absolute inset-y-0 left-0 font-normal text-sm text-[#2B313B]">Download
                                                    Speed</label>
                                                <div class="order-3 flex items-center">
                                                    <!-- <div id="" class="counter-top font-semibold text-sm text-[#0052FE]"></div> -->

                                                    <div class="font-semibold text-sm text-[#0052FE]">mbps</div>
                                                </div>
                                            </span>
                                            <input class="w-full" id="range2" oninput="internetMBFilter(this.value)"
                                                   name="range2" type="range" step="10" min="0"
                                                   max="300" value="40">
                                        </div>

                                        <button data-modal-target="large-modal" data-modal-toggle="large-modal" class="bg-white mb-3 text-[#0052FE] hover:bg-[#0052FE] hover:text-white border border-[#0052F0] transition h-fit focus:outline-none focus:ring-0 text-xs rounded font-bold p-2 text-center" type="button">
                                            welke snelheid past bij mij ?
                                            </button>






                                        <div class="bg-white">
                                            <span class="relative flex items-center justify-end">
                                                <label for="range1"
                                                       class="absolute inset-y-0 left-0 font-normal text-sm text-[#2B313B]">Costs
                                                    per month</label>

                                                <div class="order-1 font-semibold text-sm text-[#0052FE]  mr-1">€</div>

                                                <div class="order-3 flex items-center">
                                                    <!-- <div id="" class="counter-top font-semibold text-sm text-[#0052FE]"></div> -->
                                                    <div class="font-semibold text-sm text-[#0052FE] ml-1">to € 95
                                                    </div>
                                                </div>
                                            </span>
                                            <input class="w-full" id="range1" oninput="costPerMonth(this.value)"
                                                   name="range1" type="range" min="0" max="95"
                                                   value="0">
                                        </div>
                                        <div id="num_channel" class="bg-white">
                                            <span class="relative flex items-center justify-end">
                                                <label for="range2"
                                                       class="absolute inset-y-0 left-0 font-normal text-sm text-[#2B313B]">Number
                                                    of HD channels</label>
                                                <div class="order-3 flex items-center">
                                                    <!-- <div id="" class="counter-top font-semibold text-sm text-[#0052FE]"></div> -->
                                                    <!-- <div class="font-semibold text-sm text-[#0052FE]">mbps</div> -->
                                                </div>
                                            </span>

                                            <input class="w-full" oninput="numOfChannels(this.value)" id="range3"
                                                   name="range3" type="range" min="0" max="300"
                                                   value="0">
                                        </div>

                                        <div class="bg-white">
                                            <span class="relative flex items-center justify-end">
                                                <label for="range4"
                                                       class="absolute inset-y-0 left-0 font-normal text-sm text-[#2B313B]">
                                                    Aantal Zenders</label>
                                                <div class="order-3 flex items-center">
                                                    <!-- <div id="" class="counter-top font-semibold text-sm text-[#0052FE]"></div> -->
                                                    <!-- <div class="font-semibold text-sm text-[#0052FE]">mbps</div> -->
                                                </div>
                                            </span>
                                            <input class="w-full" oninput="numNormalChannels(this.value)"
                                                   id="range4" name="range4" type="range" min="0"
                                                   max="300" value="0">
                                        </div>
                                    </form>

                                    <span class="single-filter mb-4">
                                        <h3 class="font-semibold text-base text-[#2B313B] mb-2">Internet Providers</h3>
                                        <ul>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox" class="" value="budget-thuis"
                                                               onchange="ProviderFilter()" name="provider">
                                                        <span class="input-check"></span>
                                                        Budget Thuis
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox"  onchange="ProviderFilter()"
                                                               class="" value="caiway">
                                                        <span class="input-check"></span>
                                                        Caiway
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox"  onchange="ProviderFilter()"
                                                               class="" value="delta" name="provider">
                                                        <span class="input-check"></span>
                                                        Delta
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox"  onchange="ProviderFilter()"
                                                               class="" value="freedom" name="provider">
                                                        <span class="input-check"></span>
                                                        Freedom
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox"  onchange="ProviderFilter()"
                                                               class="" value="jonaz" name="provider">
                                                        <span class="input-check"></span>
                                                        Jonaz
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox"  onchange="ProviderFilter()"
                                                               class="" value="kpn" name="provider">
                                                        <span class="input-check"></span>
                                                        KPN
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox"  onchange="ProviderFilter()"
                                                               class="" value="onlinenl" name="provider">
                                                        <span class="input-check"></span>
                                                        Online.nl
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox"  onchange="ProviderFilter()"
                                                               class="" value="solcon" name="provider">
                                                        <span class="input-check"></span>
                                                        Solcon
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox"  onchange="ProviderFilter()"
                                                               class="" value="t-mobile" name="provider">
                                                        <span class="input-check"></span>
                                                        T-mobile
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox"  onchange="ProviderFilter()"
                                                               class="" value="youfone" name="provider">
                                                        <span class="input-check"></span>
                                                        Youfone
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox"  onchange="ProviderFilter()"
                                                               class="" value="ziggo" name="provider">
                                                        <span class="input-check"></span>
                                                        Ziggo
                                                    </label>
                                                </div>
                                            </li>

                                        </ul>
                                    </span>

                                    <span class="single-filter mb-4">
                                        <h3 class="font-semibold text-base text-[#2B313B] mb-2">Verbinding</h3>
                                        <ul id="binding">

                                        <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label  class="flex text-sm font-normal">
                                                        <input id="adsl" checked type="checkbox"
                                                               onchange="filterByconnectionType()" class=""
                                                               name="adsl">
                                                        <span  class="input-check"></span>
                                                        <span id="adsl-text">ADSL tot 200 Mb/s</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox"  checked class=""
                                                               onchange="filterByconnectionType()"
                                                               value="budget-mobiel" name="cable">
                                                        <span class="input-check"></span>
                                                        <span id="cable-text">Kabel tot 1000 Mb/s</span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label id="fiver-text" class="flex text-sm font-normal">
                                                        <input id="fiver" checked type="checkbox" class=""
                                                               onchange="filterByconnectionType()"
                                                               value="budget-mobiel" name="fiver">
                                                        <span class="input-check"></span>
                                                        Glasvezel tot 500 Mb/s
                                                    </label>
                                                </div>
                                            </li>

                                        </ul>
                                    </span>

                                    <span class="single-filter mb-4">
                                        <h3 class="font-semibold text-base text-[#2B313B] mb-2">Combi advantage</h3>
                                        <ul>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox" onchange="filterByOperator()"
                                                               value="ben" class="" name="mobile_filter">
                                                        <span class="input-check"></span>
                                                        Ben
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox" class=""
                                                               onchange="filterByOperator()" value="budget-mobiel"
                                                               name="mobile_filter">
                                                        <span class="input-check"></span>
                                                        Budget Mobiel
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox" class=""
                                                               onchange="filterByOperator()" value="delta"
                                                               name="mobile_filter">
                                                        <span class="input-check"></span>
                                                        Delta
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox" class=""
                                                               onchange="filterByOperator()" value="hollandsnieuwe"
                                                               name="mobile_filter">
                                                        <span class="input-check"></span>
                                                        hollandsnieuwe
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox" class=""
                                                               onchange="filterByOperator()" value="kpn"
                                                               name="mobile_filter">
                                                        <span class="input-check"></span>
                                                        KPN
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox" class=""
                                                               onchange="filterByOperator()" value="simyo"
                                                               name="mobile_filter">
                                                        <span class="input-check"></span>
                                                        Simyo
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox" class=""
                                                               onchange="filterByOperator()" value="t-mobile"
                                                               name="mobile_filter">
                                                        <span class="input-check"></span>
                                                        T-Mobile
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox" class=""
                                                               onchange="filterByOperator()" value="Tele2"
                                                               name="mobile_filter">
                                                        <span class="input-check"></span>
                                                        Tele2
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="mb-3">
                                                <div class="checkbox-animate">
                                                    <label class="flex text-sm font-normal">
                                                        <input type="checkbox" class=""
                                                               onchange="filterByOperator()" value="vodafone"
                                                               name="mobile_filter">
                                                        <span class="input-check"></span>
                                                        Vodafone
                                                    </label>
                                                </div>
                                            </li>

                                        </ul>
                                    </span>



                                </span>

                                   <span id="bellen" class="single-filter mb-4">
                                    <h3 class="font-semibold text-base text-[#2B313B] mb-2">Bellen</h3>
                                    <ul>
                                        <li class="mb-3">
                                            <div class="checkbox-animate">
                                                <label class="flex text-sm font-normal">
                                                    <input type="checkbox" class="" onchange="PhoneFilter()"
                                                           name="bellen1">
                                                    <span class="input-check"></span>
                                                    Nummerbehoud
                                                </label>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="checkbox-animate">
                                                <label class="flex text-sm font-normal">
                                                    <input type="checkbox" onchange="PhoneFilter()" class=""
                                                           name="bellen2">
                                                    <span class="input-check"></span>
                                                    Onbeperkt NL
                                                </label>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="checkbox-animate">
                                                <label class="flex text-sm font-normal">
                                                    <input type="checkbox" onchange="PhoneFilter()" class=""
                                                           name="bellen3">
                                                    <span class="input-check"></span>
                                                    Onbeperkt EU
                                                </label>
                                            </div>
                                        </li>
                                        <li class="mb-3">
                                            <div class="checkbox-animate">
                                                <label class="flex text-sm font-normal">
                                                    <input type="checkbox" onchange="PhoneFilter()" class=""
                                                           name="bellen4">
                                                    <span class="input-check"></span>
                                                    Onbeperkt Wereid
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </span>

                                   <button id="tv_options" type="button" data-modal-target="authentication-modal"
                                           data-modal-toggle="authentication-modal"
                                           class="bg-white mb-3 text-[#0052FE] hover:bg-[#0052FE] hover:text-white border border-[#0052F0] transition h-fit focus:outline-none focus:ring-0 font-xs rounded font-bold px-10 py-2 text-center">TV
                                       Opties</button>

                                   <button id="extra_tv" type="button" onclick="fetchChannel()"
                                           data-modal-target="authentication-modal3"
                                           data-modal-toggle="authentication-modal3"
                                           class="bg-white mb-3 text-[#0052FE] hover:bg-[#0052FE] hover:text-white border border-[#0052F0] transition h-fit focus:outline-none focus:ring-0 font-xs rounded font-bold p-2 text-center">Extra
                                       zenders kiezen</button>









                               </div>
                           </div>
                        
                       </div>
                   </div>

                   <div id="basic" class="content basis-full md:basis-9/12">
                       <h2 class="text-[#2B313B] font-semibold hidden md:block text-base mb-3">Best Deal from Bereken</h2>

                       <div id="product">

                       </div>



                        <div class="text-center loader-img">
                            <img id="loader" class="hidden" src="<?php echo e(asset('/frontend/assets/loader.svg')); ?>">

                        <button id="load_more" onclick="loadMore()" type="button"
                               class="hidden bg-white text-[#0052FE] hover:bg-[#0052FE] hover:text-white border border-[#0052F0] transition h-fit focus:outline-none focus:ring-0 font-xs rounded font-bold px-10 py-2 text-center">Load
                           More</button>
                        </div>



                   </div>







               </div>
           </div> <!-- container end -->

           



       </section>

       <div id="compare-section" x-data="{ open: false }" style="display: none" class="hidden compare-list bg-[#112954] flex-none md:flex items-center justify-between p-5 z-40 fixed bottom-0 left-0 w-full">
           <div id="compare-tab" class="">


           </div>
           <button class="absolute right-2 top-2 md:hidden" @click="open = false"><img
                                               src="<?php echo e(asset('/frontend/assets/img/close.svg')); ?>" alt="icon"></button>

           <a onclick="compareNow()" class="com-btn outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Compare</a>
           <a onclick="removeCompare()" class="com-btn-b bg-white text-[#0052FE] hover:bg-[#0052FE] hover:text-white transition h-fit focus:outline-none focus:ring-0 font-xs rounded-[6px] font-bold px-10 py-2 text-center">Sluiten</a>
       </div>

       <section id="plan-section" class="hidden hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
           <div class="section-title text-center ">
               <h1 class="text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-6 sm:pt-4">Compare 3 plans</h1>
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
                                       <div class="px-4 py-2 text-[#2B313B] text-base font-semibold">Samenvatting</div>

                                       <div class="px-4 py-2 text-black text-sm font-normal">Downloadsnelheid</div>

                                       <div class="px-4 py-2 text-black text-sm font-normal">Type internet</div>

                                       <div class="px-4 py-2 text-black text-sm font-normal">Levertijd (dagen)</div>

                                       <div class="px-4 py-2 text-black text-sm font-normal">Per jaar
                                       </div>

                                       <div class="px-4 py-2 text-black text-sm font-normal">Links</div>


                                   </div>

                                   <div class=" grid grid-cols-1 gap-2 justify-items-start content-center p-5">
                                       <div class="px-4 py-2 text-[#2B313B] text-base font-semibold">Internet</div>

                                       <div class="px-4 py-2 text-black text-sm font-normal">Downloadsnelheid</div>

                                       <div class="px-4 py-2 text-black text-sm font-normal">Uploadsnelheid</div>



                                   </div>

                                   <div class=" grid grid-cols-1 gap-2 justify-items-start content-center p-5">
                                       <div class="px-4 py-2 text-[#2B313B] text-base font-semibold">Televisie</div>

                                       <div class="px-4 py-2 text-black text-sm font-normal">TV Zenders</div>

                                       <div class="px-4 py-2 text-black text-sm font-normal">HD Zenders</div>
                                       <div class="px-4 py-2 text-black text-sm font-normal">TV App</div>
                                       <div class="px-4 py-2 text-black text-sm font-normal">Video On Demand</div>




                                   </div>
                                   <div class=" grid grid-cols-1 gap-2 justify-items-start content-center p-5">
                                       <div class="px-4 py-2 text-[#2B313B] text-base font-semibold">Bellen</div>

                                       <div class="px-4 py-2 text-black text-sm font-normal">Starttarief</div>

                                       <div class="px-4 py-2 text-black text-sm font-normal">Tarief vast</div>
                                       <div class="px-4 py-2 text-black text-sm font-normal">Tarief mobiel</div>
                                       <div class="px-4 py-2 text-black text-sm font-normal">Nummerbehoud</div>




                                   </div>

                               </div>
                           </div>
                           <div id="compare-cards" class="flex">

                           </div>




                       </div>
                   </div>
               </div>
               <div class="button-area flex justify-end mt-14">
                   <a onclick="showProduct()" class="gray-btn outline-btn btn-translate-z flex bg-[#0052fe] text-white text-xs font-bold py-2.5 px-6 rounded transition-all cursor-pointer  text-xs font-semibold text-center justify-center items-center rounded py-4 px-2 my-6 w-fit mr-3"><span class="flex items-center"><img src="<?php echo e(asset('/frontend/assets/img/arrow-white.svg')); ?>" class="mr-2 h-2 w-2 rotate-180 float-left"  alt="icon"> Go Back </span></a>
               </div>
           </div> <!-- container end -->
       </section>
   </div>
   
   
                                   <div id="authentication-modal3" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                       <div class="relative w-full h-full max-w-lg md:h-auto">
                                           <!-- Modal content -->
                                           <div class="relative bg-white rounded-lg shadow">
                                               <button type="button"
                                                       class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                                       data-modal-hide="authentication-modal3">
                                                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                       <path fill-rule="evenodd"
                                                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                             clip-rule="evenodd"></path>
                                                   </svg>
                                                   <span class="sr-only">Close modal</span>
                                               </button>
                                               <div class="px-6 py-6 lg:px-8">
                                                   <h3 class="mb-4 text-xl font-medium text-gray-900">TV zenders kiezen
                                                   </h3>
                                                   <div class="flex w-full search-bar mb-3">
                                                       <form action="https://bereken.webonedevs.com/search-news-submit"
                                                             class="w-full" method="post">
                                                           <input type="hidden" name="_token"
                                                                  value="5FhgSKR9dwfd4tpm966C2F2MBFWHN0lDWPSh5uDD">
                                                           <div class="relative single-field-wrapper w-full">
                                                               <div
                                                                       class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                                   <button type="submit">
                                                                       <svg aria-hidden="true"
                                                                            class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                                            fill="none" stroke="currentColor"
                                                                            viewBox="0 0 24 24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                           <path stroke-linecap="round"
                                                                                 stroke-linejoin="round" stroke-width="2"
                                                                                 d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                                                                           </path>
                                                                       </svg>
                                                                   </button>
                                                               </div>
                                                               <input type="text" id="default-search"
                                                                      onkeyup="searchChannel()"
                                                                      class="rounded-md bg-white border border-[#A4BCE6] text-[#6C7A93] font-normal text-xs focus:ring-[#3b82f6] focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-3 pl-10"
                                                                      placeholder="Favoriete zenders zoeken" name="search"
                                                                      required="">
                                                           </div>
                                                       </form>
                                                   </div>
                                                   <div class="channel-list">


                                                   </div>


                                                   <button id="btn" onclick="filterTvChannels()"
                                                           data-modal-hide="authentication-modal3"
                                                           class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">AKKOORD</button>



                                               </div>
                                           </div>
                                       </div>
                                   </div>

   
                                   <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                       <div class="relative w-full h-full max-w-md md:h-auto">
                                           <!-- Modal content -->
                                           <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                               <button type="button"
                                                       class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                       data-modal-hide="authentication-modal">
                                                   <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                       <path fill-rule="evenodd"
                                                             d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                             clip-rule="evenodd"></path>
                                                   </svg>
                                                   <span class="sr-only">Close modal</span>
                                               </button>
                                               <div class="px-6 py-6 lg:px-8">
                                                   <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tv
                                                       Opties
                                                   </h3>

                                                   <span class="single-filter mb-4">

                                                    <ul>
                                                        <li class="mb-3">
                                                            <div class="checkbox-animate">
                                                                <label class="flex text-sm font-normal">
                                                                    <input type="checkbox" data-text="Extra ontvanger"  onchange="selectTvOpties(this)" value="t_extra_receiver"
                                                                           class="" name="tv_opt">
                                                                    <span class="input-check"></span>
                                                                    Extra ontvanger
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="mb-3">
                                                            <div class="checkbox-animate">
                                                                <label class="flex text-sm font-normal">
                                                                    <input type="checkbox" data-text="Kijken via app" onchange="selectTvOpties(this)" value="t_app"
                                                                           class="" name="tv_opt">
                                                                    <span class="input-check"></span>
                                                                    Kijken via app
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="mb-3">
                                                            <div class="checkbox-animate">
                                                                <label class="flex text-sm font-normal">
                                                                    <input type="checkbox" data-text="Video On Demand" onchange="selectTvOpties(this)" value="t_vod"
                                                                           class="" name="tv_opt">
                                                                    <span class="input-check"></span>
                                                                    Video On Demand
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="mb-3">
                                                            <div class="checkbox-animate">
                                                                <label class="flex text-sm font-normal">
                                                                    <input type="checkbox" data-text="Opnemen" onchange="selectTvOpties(this)" value="t_record"
                                                                           class="" name="tv_opt">
                                                                    <span class="input-check"></span>
                                                                    Opnemen
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="mb-3">
                                                            <div class="checkbox-animate">
                                                                <label class="flex text-sm font-normal">
                                                                    <input type="checkbox" data-text="Begin gemist" onchange="selectTvOpties(this)" value="t_rewind"
                                                                           class="" name="tv_opt">
                                                                    <span class="input-check"></span>
                                                                    Begin gemist
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </span>



                                                   <button id="btn" onclick="filterTvOptions()"
                                                           data-modal-hide="authentication-modal"
                                                           class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">AKKOORD</button>



                                               </div>
                                           </div>
                                       </div>
                                   </div>

                                   <div id="large-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                    <div class="relative w-full h-full max-w-4xl md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                Welke snelheid past bij mij?
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="large-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                Gebruik onderstaande advieslijst om makkelijker de maximum snelheid te kiezen. De vergelijking wordt aangepast aan de hand van je keuze
                                </p>

                                            <div class="flex items-center radio-cu">
                                                        <input id="inline-radio"   type="radio" value="20" name="person" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 " >
                                                        <label for="inline-radio" class="ml-5 text-[#2B313B] font-normal text-xs">20Mb/s Gewoon , 2 personen</label>
                                                    </div>
                                <div class="flex items-center radio-cu">
                                                        <input id="inline-2-radio"  type="radio" value="40" name="person" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                                        <label for="inline-2-radio" class="ml-5 text-[#2B313B] font-normal text-xs">40Mb/s Gewoon , 2+ personen</label>
                                                    </div>

                                <div class="flex items-center radio-cu">
                                                        <input id="inline-3-radio"  type="radio" value="100" name="person" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 " data-parsley-multiple="vatStatus">
                                                        <label for="inline-3-radio" class="ml-5 text-[#2B313B] font-normal text-xs">100Mb/s Gewoon , 4+ personen</label>
                                                    </div>
                                <div class="flex items-center radio-cu">
                                                        <input id="inline-4-radio"  type="radio" value="150" name="person" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 " data-parsley-multiple="vatStatus">
                                                        <label for="inline-4-radio" class="ml-5 text-[#2B313B] font-normal text-xs">150Mb/s Gewoon , 5+ personen</label>
                                                    </div>
                                <div class="flex items-center radio-cu">
                                                        <input id="inline-5-radio"  type="radio" value="300" name="person" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 " data-parsley-multiple="vatStatus">
                                                        <label for="inline-5-radio" class="ml-5 text-[#2B313B] font-normal text-xs">300Mb/s Gewoon , Meerdere zware gebruikers / personen</label>
                                                    </div>

                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="large-modal" onclick="filterByPerson()" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">AKKOORD</button>

                            </div>
                        </div>
                    </div>
                </div>
                                          <!-- Large Modal -->
<div id="large-modal2" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full h-full max-w-4xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                   Hulp bij vergelijken
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="large-modal2">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
               <div class="wli_content"><div class="wli_comparehelp"><div class="wli_text_container"><span class="wli_title">Stap 1: Pakket samenstellen</span> <span class="wli_text">Stel je pakket samen door checkboxes boven aan de vergelijker uit of aan te vinken. Internet is standaard inbegrepen. Televisie en bellen kan je aan en uit vinken.</span></div> <div class="wli_comparehelp_visual wli_comparehelp_checkbox"><!----> <svg height="100%" version="1.1" viewBox="0 0 731 802" width="100%" xmlns="http://www.w3.org/2000/svg" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 1.41421;"><g><path d="M227.205,4c0,-2.209 -1.79,-4 -4,-4c-27.761,0 -191.444,0 -219.205,0c-2.209,0 -4,1.791 -4,4c0,14.526 0,64.394 0,78.92c0,2.209 1.791,4 4,4c27.761,0 191.444,0 219.205,0c2.21,0 4,-1.791 4,-4c0,-14.526 0,-64.394 0,-78.92l0,0Z" class="wli_svg_checkbox"></path><path d="M227.205,230.269c0,-2.209 -1.79,-4 -4,-4c-27.761,0 -191.444,0 -219.205,0c-2.209,0 -4,1.791 -4,4c0,32.123 0,247.703 0,279.827c0,2.209 1.791,4 4,4c27.761,0 191.444,0 219.205,0c2.21,0 4,-1.791 4,-4c0,-32.124 0,-247.704 0,-279.827Z" class="wli_svg_filter"></path><path d="M478.724,4c0,-2.209 -1.791,-4 -4,-4c-27.761,0 -191.444,0 -219.205,0c-2.209,0 -4,1.791 -4,4c0,14.526 0,64.394 0,78.92c0,2.209 1.791,4 4,4c27.761,0 191.444,0 219.205,0c2.209,0 4,-1.791 4,-4c0,-14.526 0,-64.394 0,-78.92l0,0Z" class="wli_svg_checkbox"></path><path d="M730.243,117.134c0,-1.06 -0.421,-2.078 -1.172,-2.828c-0.75,-0.75 -1.767,-1.172 -2.828,-1.172c-55.329,0 -666.914,0 -722.243,0c-1.061,0 -2.078,0.422 -2.828,1.172c-0.751,0.75 -1.172,1.768 -1.172,2.828c0,14.526 0,64.395 0,78.921c0,1.061 0.421,2.078 1.172,2.828c0.75,0.75 1.767,1.172 2.828,1.172c55.329,0 666.914,0 722.243,0c1.061,0 2.078,-0.422 2.828,-1.172c0.751,-0.75 1.172,-1.767 1.172,-2.828c0,-14.526 0,-64.395 0,-78.921Z" class="wli_svg_postalcheck"></path><path d="M730.243,230.269c0,-1.061 -0.421,-2.078 -1.172,-2.828c-0.75,-0.751 -1.767,-1.172 -2.828,-1.172c-43.459,0 -427.265,0 -470.724,0c-1.061,0 -2.078,0.421 -2.829,1.172c-0.75,0.75 -1.171,1.767 -1.171,2.828c0,23.401 0,142.341 0,165.742c0,1.06 0.421,2.078 1.171,2.828c0.751,0.75 1.768,1.172 2.829,1.172c43.459,0 427.265,0 470.724,0c1.061,0 2.078,-0.422 2.828,-1.172c0.751,-0.75 1.172,-1.768 1.172,-2.828c0,-23.401 0,-142.341 0,-165.742Z" class="wli_svg_products"></path><path d="M730.243,431.225c0,-1.061 -0.421,-2.078 -1.172,-2.829c-0.75,-0.75 -1.767,-1.171 -2.828,-1.171c-43.459,0 -427.265,0 -470.724,0c-1.061,0 -2.078,0.421 -2.829,1.171c-0.75,0.751 -1.171,1.768 -1.171,2.829c0,23.401 0,142.34 0,165.741c0,1.061 0.421,2.079 1.171,2.829c0.751,0.75 1.768,1.171 2.829,1.171c43.459,0 427.265,0 470.724,0c1.061,0 2.078,-0.421 2.828,-1.171c0.751,-0.75 1.172,-1.768 1.172,-2.829c0,-23.401 0,-142.34 0,-165.741Z" class="wli_svg_products"></path><path d="M730.243,632.181c0,-1.061 -0.421,-2.078 -1.172,-2.829c-0.75,-0.75 -1.767,-1.171 -2.828,-1.171c-43.459,0 -427.265,0 -470.724,0c-1.061,0 -2.078,0.421 -2.829,1.171c-0.75,0.751 -1.171,1.768 -1.171,2.829c0,23.401 0,142.34 0,165.741c0,1.061 0.421,2.079 1.171,2.829c0.751,0.75 1.768,1.171 2.829,1.171c43.459,0 427.265,0 470.724,0c1.061,0 2.078,-0.421 2.828,-1.171c0.751,-0.75 1.172,-1.768 1.172,-2.829c0,-23.401 0,-142.34 0,-165.741Z" class="wli_svg_products"></path><path d="M730.243,4c0,-2.209 -1.791,-4 -4,-4c-27.761,0 -191.444,0 -219.205,0c-2.209,0 -4,1.791 -4,4c0,14.526 0,64.394 0,78.92c0,2.209 1.791,4 4,4c27.761,0 191.444,0 219.205,0c2.209,0 4,-1.791 4,-4c0,-14.526 0,-64.394 0,-78.92l0,0Z" class="wli_svg_checkbox"></path></g></svg></div></div> <div class="wli_comparehelp"><div class="wli_text_container"><span class="wli_title">Stap 2: Postcodecheck</span> <span class="wli_text">Doe de postcodecheck om te kijken welke pakketten beschikbaar zijn op jouw adres. Je kunt meteen je maximale snelheden en beschikbare verbindingstypes zien op jouw adres.</span></div> <div class="wli_comparehelp_visual wli_comparehelp_postalcheck"><!----> <svg height="100%" viewBox="0 0 731 802" version="1.1" width="100%" xmlns="http://www.w3.org/2000/svg" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 1.41421;"><g><path d="M227.205,4c0,-2.209 -1.79,-4 -4,-4c-27.761,0 -191.444,0 -219.205,0c-2.209,0 -4,1.791 -4,4c0,14.526 0,64.394 0,78.92c0,2.209 1.791,4 4,4c27.761,0 191.444,0 219.205,0c2.21,0 4,-1.791 4,-4c0,-14.526 0,-64.394 0,-78.92l0,0Z" class="wli_svg_checkbox"></path><path d="M227.205,230.269c0,-2.209 -1.79,-4 -4,-4c-27.761,0 -191.444,0 -219.205,0c-2.209,0 -4,1.791 -4,4c0,32.123 0,247.703 0,279.827c0,2.209 1.791,4 4,4c27.761,0 191.444,0 219.205,0c2.21,0 4,-1.791 4,-4c0,-32.124 0,-247.704 0,-279.827Z" class="wli_svg_filter"></path><path d="M478.724,4c0,-2.209 -1.791,-4 -4,-4c-27.761,0 -191.444,0 -219.205,0c-2.209,0 -4,1.791 -4,4c0,14.526 0,64.394 0,78.92c0,2.209 1.791,4 4,4c27.761,0 191.444,0 219.205,0c2.209,0 4,-1.791 4,-4c0,-14.526 0,-64.394 0,-78.92l0,0Z" class="wli_svg_checkbox"></path><path d="M730.243,117.134c0,-1.06 -0.421,-2.078 -1.172,-2.828c-0.75,-0.75 -1.767,-1.172 -2.828,-1.172c-55.329,0 -666.914,0 -722.243,0c-1.061,0 -2.078,0.422 -2.828,1.172c-0.751,0.75 -1.172,1.768 -1.172,2.828c0,14.526 0,64.395 0,78.921c0,1.061 0.421,2.078 1.172,2.828c0.75,0.75 1.767,1.172 2.828,1.172c55.329,0 666.914,0 722.243,0c1.061,0 2.078,-0.422 2.828,-1.172c0.751,-0.75 1.172,-1.767 1.172,-2.828c0,-14.526 0,-64.395 0,-78.921Z" class="wli_svg_postalcheck"></path><path d="M730.243,230.269c0,-1.061 -0.421,-2.078 -1.172,-2.828c-0.75,-0.751 -1.767,-1.172 -2.828,-1.172c-43.459,0 -427.265,0 -470.724,0c-1.061,0 -2.078,0.421 -2.829,1.172c-0.75,0.75 -1.171,1.767 -1.171,2.828c0,23.401 0,142.341 0,165.742c0,1.06 0.421,2.078 1.171,2.828c0.751,0.75 1.768,1.172 2.829,1.172c43.459,0 427.265,0 470.724,0c1.061,0 2.078,-0.422 2.828,-1.172c0.751,-0.75 1.172,-1.768 1.172,-2.828c0,-23.401 0,-142.341 0,-165.742Z" class="wli_svg_products"></path><path d="M730.243,431.225c0,-1.061 -0.421,-2.078 -1.172,-2.829c-0.75,-0.75 -1.767,-1.171 -2.828,-1.171c-43.459,0 -427.265,0 -470.724,0c-1.061,0 -2.078,0.421 -2.829,1.171c-0.75,0.751 -1.171,1.768 -1.171,2.829c0,23.401 0,142.34 0,165.741c0,1.061 0.421,2.079 1.171,2.829c0.751,0.75 1.768,1.171 2.829,1.171c43.459,0 427.265,0 470.724,0c1.061,0 2.078,-0.421 2.828,-1.171c0.751,-0.75 1.172,-1.768 1.172,-2.829c0,-23.401 0,-142.34 0,-165.741Z" class="wli_svg_products"></path><path d="M730.243,632.181c0,-1.061 -0.421,-2.078 -1.172,-2.829c-0.75,-0.75 -1.767,-1.171 -2.828,-1.171c-43.459,0 -427.265,0 -470.724,0c-1.061,0 -2.078,0.421 -2.829,1.171c-0.75,0.751 -1.171,1.768 -1.171,2.829c0,23.401 0,142.34 0,165.741c0,1.061 0.421,2.079 1.171,2.829c0.751,0.75 1.768,1.171 2.829,1.171c43.459,0 427.265,0 470.724,0c1.061,0 2.078,-0.421 2.828,-1.171c0.751,-0.75 1.172,-1.768 1.172,-2.829c0,-23.401 0,-142.34 0,-165.741Z" class="wli_svg_products"></path><path d="M730.243,4c0,-2.209 -1.791,-4 -4,-4c-27.761,0 -191.444,0 -219.205,0c-2.209,0 -4,1.791 -4,4c0,14.526 0,64.394 0,78.92c0,2.209 1.791,4 4,4c27.761,0 191.444,0 219.205,0c2.209,0 4,-1.791 4,-4c0,-14.526 0,-64.394 0,-78.92l0,0Z" class="wli_svg_checkbox"></path></g></svg></div></div> <div class="wli_comparehelp"><div class="wli_text_container"><span class="wli_title">Stap 3: Filteren</span> <span class="wli_text">Gebruik de filters om aan te geven wat je precies in je pakket wilt hebben. De vergelijker sorteert automatisch de best passende producten voor jouw persoonlijke wensen.</span></div> <div class="wli_comparehelp_visual wli_comparehelp_filter"><!----> <svg height="100%" version="1.1" viewBox="0 0 731 802" width="100%" xmlns="http://www.w3.org/2000/svg" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 1.41421;"><path d="M227.205,4c0,-2.209 -1.79,-4 -4,-4c-27.761,0 -191.444,0 -219.205,0c-2.209,0 -4,1.791 -4,4c0,14.526 0,64.394 0,78.92c0,2.209 1.791,4 4,4c27.761,0 191.444,0 219.205,0c2.21,0 4,-1.791 4,-4c0,-14.526 0,-64.394 0,-78.92l0,0Z" class="wli_svg_checkbox"></path><path d="M227.205,230.269c0,-2.209 -1.79,-4 -4,-4c-27.761,0 -191.444,0 -219.205,0c-2.209,0 -4,1.791 -4,4c0,32.123 0,247.703 0,279.827c0,2.209 1.791,4 4,4c27.761,0 191.444,0 219.205,0c2.21,0 4,-1.791 4,-4c0,-32.124 0,-247.704 0,-279.827Z" class="wli_svg_filter"></path><path d="M478.724,4c0,-2.209 -1.791,-4 -4,-4c-27.761,0 -191.444,0 -219.205,0c-2.209,0 -4,1.791 -4,4c0,14.526 0,64.394 0,78.92c0,2.209 1.791,4 4,4c27.761,0 191.444,0 219.205,0c2.209,0 4,-1.791 4,-4c0,-14.526 0,-64.394 0,-78.92l0,0Z" class="wli_svg_checkbox"></path><path d="M730.243,117.134c0,-1.06 -0.421,-2.078 -1.172,-2.828c-0.75,-0.75 -1.767,-1.172 -2.828,-1.172c-55.329,0 -666.914,0 -722.243,0c-1.061,0 -2.078,0.422 -2.828,1.172c-0.751,0.75 -1.172,1.768 -1.172,2.828c0,14.526 0,64.395 0,78.921c0,1.061 0.421,2.078 1.172,2.828c0.75,0.75 1.767,1.172 2.828,1.172c55.329,0 666.914,0 722.243,0c1.061,0 2.078,-0.422 2.828,-1.172c0.751,-0.75 1.172,-1.767 1.172,-2.828c0,-14.526 0,-64.395 0,-78.921Z" class="wli_svg_postalcheck"></path><path d="M730.243,230.269c0,-1.061 -0.421,-2.078 -1.172,-2.828c-0.75,-0.751 -1.767,-1.172 -2.828,-1.172c-43.459,0 -427.265,0 -470.724,0c-1.061,0 -2.078,0.421 -2.829,1.172c-0.75,0.75 -1.171,1.767 -1.171,2.828c0,23.401 0,142.341 0,165.742c0,1.06 0.421,2.078 1.171,2.828c0.751,0.75 1.768,1.172 2.829,1.172c43.459,0 427.265,0 470.724,0c1.061,0 2.078,-0.422 2.828,-1.172c0.751,-0.75 1.172,-1.768 1.172,-2.828c0,-23.401 0,-142.341 0,-165.742Z" class="wli_svg_products"></path><path d="M730.243,431.225c0,-1.061 -0.421,-2.078 -1.172,-2.829c-0.75,-0.75 -1.767,-1.171 -2.828,-1.171c-43.459,0 -427.265,0 -470.724,0c-1.061,0 -2.078,0.421 -2.829,1.171c-0.75,0.751 -1.171,1.768 -1.171,2.829c0,23.401 0,142.34 0,165.741c0,1.061 0.421,2.079 1.171,2.829c0.751,0.75 1.768,1.171 2.829,1.171c43.459,0 427.265,0 470.724,0c1.061,0 2.078,-0.421 2.828,-1.171c0.751,-0.75 1.172,-1.768 1.172,-2.829c0,-23.401 0,-142.34 0,-165.741Z" class="wli_svg_products"></path><path d="M730.243,632.181c0,-1.061 -0.421,-2.078 -1.172,-2.829c-0.75,-0.75 -1.767,-1.171 -2.828,-1.171c-43.459,0 -427.265,0 -470.724,0c-1.061,0 -2.078,0.421 -2.829,1.171c-0.75,0.751 -1.171,1.768 -1.171,2.829c0,23.401 0,142.34 0,165.741c0,1.061 0.421,2.079 1.171,2.829c0.751,0.75 1.768,1.171 2.829,1.171c43.459,0 427.265,0 470.724,0c1.061,0 2.078,-0.421 2.828,-1.171c0.751,-0.75 1.172,-1.768 1.172,-2.829c0,-23.401 0,-142.34 0,-165.741Z" class="wli_svg_products"></path><path d="M730.243,4c0,-2.209 -1.791,-4 -4,-4c-27.761,0 -191.444,0 -219.205,0c-2.209,0 -4,1.791 -4,4c0,14.526 0,64.394 0,78.92c0,2.209 1.791,4 4,4c27.761,0 191.444,0 219.205,0c2.209,0 4,-1.791 4,-4c0,-14.526 0,-64.394 0,-78.92l0,0Z" class="wli_svg_checkbox"></path></svg></div></div></div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="large-modal2" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SLUITEN</button>

            </div>
        </div>
    </div>
</div>
    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        let products = [];
        let categories = [];
        let page = 1
        let selectedItem = [];
        let selectedProducts =[];

        function fetchProducts(maxDownRange,
            cost,
            hdChannel,
            types,
            normalChannel,
            combi_operators,
            bellenFilter,
            tvOption,
            selectedChannels,
            providers,
            connection,
             sort,

        ) {
            let defaultBellen = {
                bellen1: false,
                bellen2: false,
                bellen3: false,
                bellen4: false,
            };

            let defaultConnectionType = {
                adsl: true,
                cable: true,
                fiver: true,
            };
            let connectionType = connection ? connection : defaultConnectionType;


            let bellen = bellenFilter ? bellenFilter : defaultBellen;

            let LoadingStatus = true;
            document.getElementById('load_more').classList.add('hidden')

            let DownloadSpeedRange = maxDownRange ? maxDownRange : 40;
            let html = ``;

            let type = types ? types : "<?php echo $type; ?>";
            let include_tv;
            let normal_channel = normalChannel ? normalChannel : 0;
            let include_phone;
            let price_sort = sort ? sort :0

            //let SortPrice = price ? price : 20;
            let hdChannels = hdChannel ? hdChannel : 0
            let operators = combi_operators ? combi_operators.toString() : "";
            let zip =  document.getElementById('zip').value;
            let hnr = document.getElementById('hnr').value;

            if (type == 'all') {
                include_phone = true;
                include_tv = true;
                document.getElementById('num_channel').classList.remove('hidden');

            } else if (type == 'internet-tv') {
                include_phone = false;
                include_tv = true;
                document.getElementById('num_channel').classList.remove('hidden');
                document.getElementById('tv_options').classList.remove('hidden');
                document.getElementById('extra_tv').classList.remove('hidden');
            } else if (type == 'internet-bellen') {
                include_phone = true;
                include_tv = false;
                document.getElementById('num_channel').classList.add('hidden');
                document.getElementById('tv_options').classList.add('hidden');
                document.getElementById('extra_tv').classList.add('hidden');
            } else {
                include_phone = false;
                include_tv = false;
                document.getElementById('num_channel').classList.add('hidden');
                document.getElementById('tv_options').classList.add('hidden');
                document.getElementById('extra_tv').classList.add('hidden');
            }



            let apiUrl = `https://api-internet.whitelabeled.nl/v1/compare/QaCTJN7L9diEKuhT-262${zip && hnr ?`/${zip}/${hnr}`:""}?
&sort=${price_sort}&providers=${providers ? providers : ""}&min_upload_speed=1&min_download_speed=${DownloadSpeedRange}&tv_channel_count=${normal_channel}&tv_channel_hd_count=${hdChannels}
&p_number_retention=${bellen.bellen1}&p_unlimited_nl=${bellen.bellen2}&p_unlimited_europe=${bellen.bellen3}&p_unlimited_world=${bellen.bellen4}
&include_phone=${include_phone}&include_tv=${include_tv}&connection_type_dsl=${connectionType.adsl}&
connection_type_cable=${connectionType.cable}&connection_type_fiber=${connectionType.fiver}&group_provider_products=false&
tv_channels=${encodeURIComponent(JSON.stringify(selectedChannels))}&tv_options=${encodeURIComponent(JSON.stringify(tvOption))}&v=qz9IxSNGBBLJiL0M-ssT0xqmvG7uoM2f&vc=2a7c1&tracking=-&page=1&
combi_providers=${operators}`;



            axios.get(apiUrl)
                .then((response) => {
                    if(response.data.location){
                        let info =`<div class="filter-top-msg">
                                        <p>Postcode <strong>${response.data.location.postCode}</strong> met huisnummer <strong>${response.data.location.number}</strong>
                                            wordt niet herkend.
                                        </p>
                                    <strong>Voer een andere postcode of huisnummer in.</strong>
                                          </div>`;

                       if(!response.data.location.fiber_network){
                           document.getElementById('fiver').setAttribute('disabled','disabled');
                           document.getElementById('fiver').checked = false;
                       }

                       document.getElementById('adsl-text').innerText = "ADSL "+ response.data.location.max_dsl + " Mb/s"
                        document.getElementById('cable-text').innerText = "Kabel "+ response.data.location.max_cable + " Mb/s"
                        document.getElementById('info').innerHTML = info;
                        document.getElementById('info').classList.remove('hidden');



                    }
                    LoadingStatus = false;
                    products = [];
                    response.data.products.map((product, i) => {
                        products.push(product);
                    })
                    if (products.length !== response.data.total_products) {
                        document.getElementById('load_more').classList.remove('hidden')
                    }

                    products.map((item, i) => {
                        let stars = ``;
                        for (let x = 0; x < item.score_stars; x++) {

                            stars += ` <svg aria-hidden="true" class="w-4 h-4 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>First star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>`
                        }

                        let internetInfo = {
                            connection_type: item.internet.connection == 'cable' ?
                                'Snel internet via kabel' : '' || item.internet.connection == 'dsl' ?
                                "Internet via ADSL" : "" || item.internet.connection == 'fiber' ?
                                "Zeer snel internet via glasvezel" : "",
                            wifi_hotspot: item.internet.extra.hotspots == true ? "Gratis wifi hotspots" :
                                "no",
                            security: item.internet.extra.security == 'simple' ?
                                "Gratis beveiligingspakket" : "no",
                            wifi_repeater: item.internet.extra.wifi_repeater == true ?
                                "Gratis wifi repeater" : "no",
                            support: item.installation_support == "included" ? "Inclusief gratis monteur" :
                                "" || item.installation_support == "optional" ?
                                "Monteur als het niet zelf lukt" : "" || item.installation_support ==
                                "paid" ? "Paid" : ""
                        }
                        let tvInfo = {
                            video_on_demand: item.tv.extra.video_on_demand == true ? "Yes" : "No",
                            tv_app: item.tv.extra.tv_app == true ? "Yes" : "No"
                        }
                        let phoneInfo = {
                            number_retention: item.phone.number_retention == true ? "Gratis nummerbehoud" :
                                "No",
                            tariff_start: '€ ' + item.phone.tariff_start + ' starttarief',
                            tariff_minute_mobile: '€ ' + item.phone.tariff_minute_mobile + ' mobiel',
                            tarrif_fixed: 'Goedkoop bellen voor € ' + item.phone.tariff_minute_fixed +
                                ' naar vaste nummers'

                        }

                        let filteredData = item.additional.available.filter((item) => {
                            return item.category !== "phone";
                        })

                        let extra = "";

                        filteredData.map((data) => {
                            extra += `<tr>

                                             <td class="pl-5 text-[#2B313B] text-sm font-normal"> <span
                                                 class="ml-2">${data.name} € <strong>${data.price_monthly}</strong>,- p/m </span>
                                              </td>
                                          </tr>`
                        })




                        let index = i + 1;
                        html += `<div class="single-deal-box bg-white inner-area border border-[#F5F8FF] rounded-2xl p-5 mb-5">
                        <div class="top-part flex justify-between border-b border-[#F5F8FF] mb-3 pb-5">
                            <div class="left-info grid gap-4 content-between grid-cols-1">
                                <img width="76" src=${item.provider_logo} alt="logo">
                                <span
                                    class="w-fit bg-[#E9FDF2] text-[#26BA65] text-sm font-bold mt-2 px-2.5 py-2 rounded ">Value
                                    for money: Excellent</span>
                            </div>
                            <div class="right-info flex flex-col items-end">
                                <div class="price font-semibold text-2xl text-[#2B313B] "> € ${item.total_price} </div>
                                <div class="text-[#6C7A93] text-base font-normal"> per month </div>
                            </div>
                        </div>
                        <div class="in-list grid grid-cols-2 gap-2 lg:flex lg:flex-row lg:justify-between">
                            <div class="">
                                <div class="font-semibold text-sm text-[#2B313B]">
                                    <span class="flex"> ${item.internet.speed_down} Mbps </span>
                                </div>
                                <div class="font-normal text-sm text-[#2B313B] mt-2"> Download speed </div>
                            </div>
                            <div class="">
                                <div class="font-semibold text-sm text-[#2B313B]">
                                    <span class="flex"> ${item.internet.speed_up} Mbps </span>
                                </div>
                                <div class="font-normal text-sm text-[#2B313B] mt-2"> Upload speed </div>
                            </div>
                            <div id="tv_count" class="${type == 'all' || type == 'internet-tv'?'':'hidden'}">
                                <div class="font-semibold text-sm text-[#2B313B]">
                                    <span class="flex"> ${item.tv.channel_count } (${item.tv.channel_count_hd} HD) </span>
                                </div>
                                <div class="font-normal text-sm text-[#2B313B] mt-2"> Channels </div>
                            </div>
                            <div id="phone_count" class="${type == 'all' || type == 'internet-bellen'?'':'hidden'}" >
                                <div class="font-semibold text-sm text-[#2B313B]">
                                    <span class="flex"> Landline Calls </span>
                                </div>
                                <div class="font-normal text-sm text-[#2B313B] mt-2"> ${Math.floor(item.phone.tariff_minute_fixed * 100)} Ct. </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex mt-1">
                                        <div class="rating-star flex flex-row items-center">
                                            <p class="text-sm font-bold text-[#2B313B] mr-3">${item.score_stars} </p>
                                            <div class="flex items-center">


                                               ${stars}



                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="font-normal text-sm text-[#2B313B] mt-2">
                                    <a href=""> 10089 Reviews</a>
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="md:flex mt-3">
                            <span
                                class="w-full block md:grow bg-[#F5F8FF] p-3 text-[#0052FE] text-sm font-semibold rounded-md">${item.discount_text}</span>
                            <div class="flex justify-between my-3 md:my-0">
                                <a href=${item.signup_url} target=_blank class="flex items-center text-[#0052FE] font-bold text-sm mx-3">
                                    View <img src="<?php echo e(asset('/frontend/assets/img/goto-link.svg')); ?>" class="mx-2"
                                        alt="icon">
                                </a>
                                <span class="flex items-center">
                                    <input type="checkbox" onchange='compare(this)' data-index=${i} ${checkExists(item.base_id) == item.base_id ? "checked":""} data-id=${item.base_id} name="compare" id="compare-${item.base_id}" class="compare-checkbox mr-2">
                                    <label for="compare"
                                        class="text-[#2B313B] text-sm font-normal cursor-pointer">Compare</label>
                                </span>
                            </div>
                        </div>
                        <div class="mt-3" x-data="accordion(${index})">
                            <div x-ref="tab" :style="handleToggle()"
                                class="font-normal text-sm border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all">
                                <div class="insurance-tab mb-5">
                                    <article x-data="{ tab: 'pack-a' }" data-interval="6000">
                                        <nav role="tablist" class="my-3">
                                            <ul class="lg:flex lg:items-center">
                                                <li class="mb-2 lg:mb-0 mr-4">
                                                    <button x-on:click="tab = 'pack-a'"
                                                        class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm"
                                                        x-bind:class="{
                                                            'font-semibold active-tab border-b border-[#0052FE]': tab ===
                                                                'pack-a'
                                                        }">Internet</button>
                                                </li>
                                                <li class="${type == 'all' || type == 'internet-tv' ? '':"hidden" } mb-2 lg:mb-0 mr-4">
                                                    <button x-on:click="tab = 'pack-b'"
                                                        class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm"
                                                        x-bind:class="{
                                                            'font-semibold active-tab  border-b  border-[#0052FE]': tab ===
                                                                'pack-b'
                                                        }">Television</button>
                                                </li>
                                                <li class="${type == 'all' || type == 'internet-bellen' ? '':"hidden" } mb-2 lg:mb-0 mr-4">
                                                    <button x-on:click="tab = 'pack-c'"
                                                        x-bind:class="{
                                                            'font-semibold  active-tab border-b border-[#0052FE]': tab ===
                                                                'pack-c'
                                                        }"
                                                        class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Bellen</button>
                                                </li>
                                                <li class="mb-2 lg:mb-0 mr-4">
                                                    <button x-on:click="tab = 'pack-d'"
                                                        x-bind:class="{
                                                            'font-semibold  active-tab border-b border-[#0052FE]': tab ===
                                                                'pack-d'
                                                        }"
                                                        class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Extra mogelijkheden</button>
                                                </li>
                                                <li class="mb-2 lg:mb-0 mr-4">
                                                    <button x-on:click="tab = 'pack-e'"
                                                        x-bind:class="{
                                                            'font-semibold  active-tab border-b border-[#0052FE]': tab ===
                                                                'pack-e'
                                                        }"
                                                        class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Prijs</button>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div class="grid">
                                            <div x-show="tab === 'pack-a'">

                                                <table class="mb-5">
                                                    <tbody class="text-[#2B313B] text-sm font-normal">
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Download speed</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${item.internet.speed_down} Mbps</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">Upload
                                                                speed</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${item.internet.speed_up} Mbps</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">Type of
                                                                internet</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${internetInfo.connection_type}</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">Wifi Hotspot
                                                            </td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${internetInfo.wifi_hotspot}</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">Security
                                                            </td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${internetInfo.security}</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">Wifi Repeater
                                                            </td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${internetInfo.wifi_repeater}</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">Installation
                                                            </td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${internetInfo.support}</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="flex items-center justify-end">
                                                    <a href=${item.signup_url} target="_blank"
                                                        class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                                </div>
                                            </div>
                                            <div x-show="tab === 'pack-b'">


                                                <table class="mb-5">
                                                    <tbody class="text-[#2B313B] text-sm font-normal">
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Video on demand</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${tvInfo.video_on_demand}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                               Live Tv app</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${tvInfo.tv_app}</span>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                            </div>
                                            <div x-show="tab === 'pack-c'">
                                                <table class="mb-5">
                                                    <tbody class="text-[#2B313B] text-sm font-normal">
                                                        <tr>

                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal"> <span
                                                                    class="ml-2">${phoneInfo.tarrif_fixed}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal"> <span
                                                                    class="ml-2">${phoneInfo.tariff_minute_mobile}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal"> <span
                                                                    class="ml-2">${phoneInfo.tariff_start}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal"> <span
                                                                class="ml-2">${phoneInfo.number_retention}</span>
                                                        </td>
                                                    </tr>

                                                    </tbody>
                                                </table>

                                            </div>
                                            <div x-show="tab === 'pack-d'">
                                                <table class="mb-5">
                                                    <tbody class="text-[#2B313B] text-sm font-normal">
                                                        ${extra}
                                                    </tbody>
                                                </table>
                                                <div class="flex items-center justify-end">
                                                    <a href=${item.signup_url}
                                                        class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                                </div>
                                            </div>
                                            <div x-show="tab === 'pack-e'">

                                                <table class="mb-5">
                                                    <tbody class="text-[#2B313B] text-sm font-normal">
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Contractduur</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${item.contract_duration} maanden</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Prijs per maand</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${item.contract_duration} x € ${item.base_price} </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Korting per maand</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${item.discount_duration} x € ${item.discount_price} </span>
                                                            </td>
                                                        </tr>

                                                        <tr >
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                TV Standered</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${item.tv.enabled.length  !== 0 && item.tv.enabled[0].included == true ? "Included" : "No"}  </span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Aansluitkosten</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">€ ${item.base_price_initial}  </span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Eenmalige korting</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">- € ${item.discount_amount_initial}  </span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Totaalprijs</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">€ ${item.total_price_contract}  </span>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <h4 @click="handleClick()"
                                class="flex items-center justify-center w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer">
                                <span>Fold In</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-[#2B313B] h-5 w-5 transform transition-transform duration-500"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </h4>


                        </div>
                    </div>`;
                    })
                    

                    if (LoadingStatus == false) {
                        document.getElementById('product').innerHTML = html;
                    }

                })
                .catch(error =>{
                    LoadingStatus = false
                    let zipCode = document.getElementById('zip').value;
                    let hnr = document.getElementById('hnr').value;
                    let error_info = "";

                    error_info += `<div class="filter-top-msg"><p>PostCode <strong>${zip}</strong> met huisnummer <strong>${hnr}</strong> wordt niet herkend</p>
                                    <strong><p>Voer een andere postcode of huisnummer in.</p></strong></div>`;

                    document.getElementById('info').innerHTML = error_info;
                    document.getElementById('info').classList.remove('hidden');
                    document.getElementById('product').innerHTML = `<div class="filter-msg text-center grid grid-cols-1 gap-2 justify-items-center content-center">
<p>Geen resultaten beschikbaar</p>
<button onclick="checkZip()" type="button"
                        class="bg-white text-[#0052FE] hover:bg-[#0052FE] hover:text-white border border-[#0052F0] transition h-fit focus:outline-none focus:ring-0 font-xs rounded font-bold px-10 py-2 text-center">Terug naar laatste resultaten</button>
</div>`



                })

            if (LoadingStatus === true) {
                let skelton = '';
                for (let r = 0; r < 10; r++) {
                    skelton += `<div class="skeleton basis-full md:basis-9/12">
                    <h2 class="text-[#2B313B] font-semibold text-base mb-3"></h2>
                    <div class="single-deal-box bg-white inner-area border border-[#F5F8FF] rounded-2xl p-5 mb-5">
                        <div class="top-part flex justify-between border-b border-[#F5F8FF] mb-3 pb-5">
                            <div class="left-info grid gap-4 content-between grid-cols-1">
                                <span class="img-s card-loader"></span>
                                <span class="text-skeleton card-loader"></span>
                            </div>
                            <div class="right-info flex flex-col items-end">
                                <div class="price card-loader font-semibold text-2xl text-[#2B313B] ">

                                </div>
                                <div class="text-[#6C7A93] text-base font-normal">

                                </div>
                                <p class="font-normal card-loader text-sm text-[#0052FE]"></p>
                            </div>
                        </div>
                        <div class="in-list grid grid-cols-2 gap-2 lg:flex lg:flex-row lg:justify-between">
                            <div class="">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex top-sk card-loader">
                                    </span>
                                </div>
                                <div class="bottom-sk card-loader mt-2">

                                </div>
                            </div>
                            <div class="">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex card-loader top-sk">
                                    </span>
                                </div>
                                <div class="bottom-sk card-loader mt-2">

                                </div>
                            </div>

                            <div class="flex flex-col">
                                <div class="top-sk card-loader">
                                </div>
                                <div class="bottom-sk card-loader mt-2">

                                </div>
                            </div>
                            <div>
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex top-sk card-loader">
                                    </span>
                                </div>
                                <div class="bottom-sk card-loader mt-2">

                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="bottom-part-sk md:flex mt-3">
                            <span class="rounded-text  card-loader w-full block md:grow bg-[#F5F8FF] p-3 text-[#0052FE] text-sm font-semibold rounded-md"></span>

                            <div class="flex justify-between my-3 md:my-0">
                                <a href=""  class="flex items-center text-[#0052FE] font-bold text-sm mx-3"> </a>

                                <span class="flex items-center bottom-sk  card-loader">

                                </span>
                            </div>
                        </div>
                    </div>

                </div>`
                }

                document.getElementById('product').innerHTML = skelton
            }
           if(selectedItem.length > 0){
               document.getElementById('compare-section').style.display = "block";
           }else{
               document.getElementById('compare-section').style.display = "none";
           }

        }

        function internetMBFilter(value) {
            let connectionType = {
                adsl: document.querySelectorAll('input[name=adsl]:checked').length > 0 ? true : false,
                cable: document.querySelectorAll('input[name=cable]:checked').length > 0 ? true : false,
                fiver: document.querySelectorAll('input[name=fiver]:checked').length > 0 ? true : false,

            }



            let types;
            let type = document.getElementsByClassName('option selected');

            if (type.length == 0) {
                types = "all";
            } else {
                types = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            }


            let combi_operators = [];
            let tvOptions = [];
            let normalChannel = document.getElementById('range4').value;
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementById('range1').value;
            let num_channel = document.getElementById('range3').value;
            var checkedBoxes = document.querySelectorAll('input[name=mobile_filter]:checked');
            for (let x = 0; x < checkedBoxes.length; x++) {
                combi_operators.splice(x, 1);
                combi_operators.push(checkedBoxes[x].value)

            }

            let ConvertToString = combi_operators.toString();
            let bellenObj = {
                bellen1: document.querySelectorAll('input[name=bellen1]:checked').length > 0 ? true : false,
                bellen2: document.querySelectorAll('input[name=bellen2]:checked').length > 0 ? true : false,
                bellen3: document.querySelectorAll('input[name=bellen3]:checked').length > 0 ? true : false,
                bellen4: document.querySelectorAll('input[name=bellen4]:checked').length > 0 ? true : false,
            }
            let tv_opt = document.querySelectorAll('input[name=tv_opt]:checked');
            for (let y = 0; y < tv_opt.length; y++) {

                tvOptions.push(tv_opt[y].value)
            }

            let selectedChannels = [];
            let selectedName = [];
            let tv_channel = document.querySelectorAll('input[name=tv_channels]:checked');

            for (let z = 0; z < tv_channel.length; z++) {
                selectedChannels.push(tv_channel[z].value)

            }





            let providers = []
            var checkedBoxes = document.querySelectorAll('input[name=provider]:checked');

            for (let x = 0; x < checkedBoxes.length; x++) {
                providers.splice(x, 1);
                providers.push(checkedBoxes[x].value)

            }

            fetchProducts(downSpeed, cost, num_channel, types, normalChannel, ConvertToString, bellenObj, tvOptions,
                selectedChannels, providers.toString(), connectionType)
        }

        function costPerMonth(value) {
            let connectionType = {
                adsl: document.querySelectorAll('input[name=adsl]:checked').length > 0 ? true : false,
                cable: document.querySelectorAll('input[name=cable]:checked').length > 0 ? true : false,
                fiver: document.querySelectorAll('input[name=fiver]:checked').length > 0 ? true : false,

            }

            let types;
            let type = document.getElementsByClassName('option selected');

            if (type.length == 0) {
                types = "all";
            } else {
                types = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            }


            let combi_operators = [];
            let tvOptions = [];
            let normalChannel = document.getElementById('range4').value;
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementById('range1').value;
            let num_channel = document.getElementById('range3').value;
            var checkedBoxes = document.querySelectorAll('input[name=mobile_filter]:checked');
            for (let x = 0; x < checkedBoxes.length; x++) {
                combi_operators.splice(x, 1);
                combi_operators.push(checkedBoxes[x].value)

            }

            let ConvertToString = combi_operators.toString();
            let bellenObj = {
                bellen1: document.querySelectorAll('input[name=bellen1]:checked').length > 0 ? true : false,
                bellen2: document.querySelectorAll('input[name=bellen2]:checked').length > 0 ? true : false,
                bellen3: document.querySelectorAll('input[name=bellen3]:checked').length > 0 ? true : false,
                bellen4: document.querySelectorAll('input[name=bellen4]:checked').length > 0 ? true : false,
            }
            let tv_opt = document.querySelectorAll('input[name=tv_opt]:checked');
            for (let y = 0; y < tv_opt.length; y++) {

                tvOptions.push(tv_opt[y].value)
            }

            let selectedChannels = [];
            let selectedName = [];
            let tv_channel = document.querySelectorAll('input[name=tv_channels]:checked');

            for (let z = 0; z < tv_channel.length; z++) {
                selectedChannels.push(tv_channel[z].value)

            }





            let providers = []
            var checkedBoxes = document.querySelectorAll('input[name=provider]:checked');

            for (let x = 0; x < checkedBoxes.length; x++) {
                providers.splice(x, 1);
                providers.push(checkedBoxes[x].value)

            }

            fetchProducts(downSpeed, cost, num_channel, types, normalChannel, ConvertToString, bellenObj, tvOptions,
                selectedChannels, providers.toString(), connectionType)

        }

        function numOfChannels(channel) {
            let connectionType = {
                adsl: document.querySelectorAll('input[name=adsl]:checked').length > 0 ? true : false,
                cable: document.querySelectorAll('input[name=cable]:checked').length > 0 ? true : false,
                fiver: document.querySelectorAll('input[name=fiver]:checked').length > 0 ? true : false,

            }

            let types;
            let type = document.getElementsByClassName('option selected');

            if (type.length == 0) {
                types = "all";
            } else {
                types = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            }


            let combi_operators = [];
            let tvOptions = [];
            let normalChannel = document.getElementById('range4').value;
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementById('range1').value;
            let num_channel = document.getElementById('range3').value;
            var checkedBoxes = document.querySelectorAll('input[name=mobile_filter]:checked');
            for (let x = 0; x < checkedBoxes.length; x++) {
                combi_operators.splice(x, 1);
                combi_operators.push(checkedBoxes[x].value)

            }

            let ConvertToString = combi_operators.toString();
            let bellenObj = {
                bellen1: document.querySelectorAll('input[name=bellen1]:checked').length > 0 ? true : false,
                bellen2: document.querySelectorAll('input[name=bellen2]:checked').length > 0 ? true : false,
                bellen3: document.querySelectorAll('input[name=bellen3]:checked').length > 0 ? true : false,
                bellen4: document.querySelectorAll('input[name=bellen4]:checked').length > 0 ? true : false,
            }
            let tv_opt = document.querySelectorAll('input[name=tv_opt]:checked');
            for (let y = 0; y < tv_opt.length; y++) {

                tvOptions.push(tv_opt[y].value)
            }

            let selectedChannels = [];
            let selectedName = [];
            let tv_channel = document.querySelectorAll('input[name=tv_channels]:checked');

            for (let z = 0; z < tv_channel.length; z++) {
                selectedChannels.push(tv_channel[z].value)

            }





            let providers = []
            var checkedBoxes = document.querySelectorAll('input[name=provider]:checked');

            for (let x = 0; x < checkedBoxes.length; x++) {
                providers.splice(x, 1);
                providers.push(checkedBoxes[x].value)

            }

            fetchProducts(downSpeed, cost, num_channel, types, normalChannel, ConvertToString, bellenObj, tvOptions,
                selectedChannels, providers.toString(), connectionType)
        }



        function FilterByType(el) {
            let filterType = el.getAttribute('data-value');
            let allSelectedClass = document.getElementsByClassName('option selected');
            for (let y = 0; y < allSelectedClass.length; y++) {
                allSelectedClass[y].classList.remove('selected')
            }
            el.classList.add('selected');
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementById('range1').value;
            let num_channel = document.getElementById('range3').value;
            fetchProducts(downSpeed, cost, num_channel, filterType);

        }

        function numNormalChannels(value) {
            let connectionType = {
                adsl: document.querySelectorAll('input[name=adsl]:checked').length > 0 ? true : false,
                cable: document.querySelectorAll('input[name=cable]:checked').length > 0 ? true : false,
                fiver: document.querySelectorAll('input[name=fiver]:checked').length > 0 ? true : false,

            }

            let types;
            let type = document.getElementsByClassName('option selected');

            if (type.length == 0) {
                types = "all";
            } else {
                types = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            }


            let combi_operators = [];
            let tvOptions = [];
            let normalChannel = document.getElementById('range4').value;
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementById('range1').value;
            let num_channel = document.getElementById('range3').value;
            var checkedBoxes = document.querySelectorAll('input[name=mobile_filter]:checked');
            for (let x = 0; x < checkedBoxes.length; x++) {
                combi_operators.splice(x, 1);
                combi_operators.push(checkedBoxes[x].value)

            }

            let ConvertToString = combi_operators.toString();
            let bellenObj = {
                bellen1: document.querySelectorAll('input[name=bellen1]:checked').length > 0 ? true : false,
                bellen2: document.querySelectorAll('input[name=bellen2]:checked').length > 0 ? true : false,
                bellen3: document.querySelectorAll('input[name=bellen3]:checked').length > 0 ? true : false,
                bellen4: document.querySelectorAll('input[name=bellen4]:checked').length > 0 ? true : false,
            }
            let tv_opt = document.querySelectorAll('input[name=tv_opt]:checked');
            for (let y = 0; y < tv_opt.length; y++) {

                tvOptions.push(tv_opt[y].value)
            }

            let selectedChannels = [];
            let selectedName = [];
            let tv_channel = document.querySelectorAll('input[name=tv_channels]:checked');

            for (let z = 0; z < tv_channel.length; z++) {
                selectedChannels.push(tv_channel[z].value)

            }





            let providers = []
            var checkedBoxes = document.querySelectorAll('input[name=provider]:checked');

            for (let x = 0; x < checkedBoxes.length; x++) {
                providers.splice(x, 1);
                providers.push(checkedBoxes[x].value)

            }

            fetchProducts(downSpeed, cost, num_channel, types, normalChannel, ConvertToString, bellenObj, tvOptions,
                selectedChannels, providers.toString(), connectionType)
        }

        function filterByOperator() {
            let connectionType = {
                adsl: document.querySelectorAll('input[name=adsl]:checked').length > 0 ? true : false,
                cable: document.querySelectorAll('input[name=cable]:checked').length > 0 ? true : false,
                fiver: document.querySelectorAll('input[name=fiver]:checked').length > 0 ? true : false,

            }

            let types;
            let type = document.getElementsByClassName('option selected');

            if (type.length == 0) {
                types = "all";
            } else {
                types = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            }


            let combi_operators = [];
            let tvOptions = [];
            let normalChannel = document.getElementById('range4').value;
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementById('range1').value;
            let num_channel = document.getElementById('range3').value;
            var checkedBoxes = document.querySelectorAll('input[name=mobile_filter]:checked');
            for (let x = 0; x < checkedBoxes.length; x++) {
                combi_operators.splice(x, 1);
                combi_operators.push(checkedBoxes[x].value)

            }

            let ConvertToString = combi_operators.toString();
            let bellenObj = {
                bellen1: document.querySelectorAll('input[name=bellen1]:checked').length > 0 ? true : false,
                bellen2: document.querySelectorAll('input[name=bellen2]:checked').length > 0 ? true : false,
                bellen3: document.querySelectorAll('input[name=bellen3]:checked').length > 0 ? true : false,
                bellen4: document.querySelectorAll('input[name=bellen4]:checked').length > 0 ? true : false,
            }
            let tv_opt = document.querySelectorAll('input[name=tv_opt]:checked');
            for (let y = 0; y < tv_opt.length; y++) {

                tvOptions.push(tv_opt[y].value)
            }

            let selectedChannels = [];
            let selectedName = [];
            let tv_channel = document.querySelectorAll('input[name=tv_channels]:checked');

            for (let z = 0; z < tv_channel.length; z++) {
                selectedChannels.push(tv_channel[z].value)

            }





            let providers = []
            var checkedBoxes = document.querySelectorAll('input[name=provider]:checked');

            for (let x = 0; x < checkedBoxes.length; x++) {
                providers.splice(x, 1);
                providers.push(checkedBoxes[x].value)

            }

            fetchProducts(downSpeed, cost, num_channel, types, normalChannel, ConvertToString, bellenObj, tvOptions,
                selectedChannels, providers.toString(), connectionType)

        }

        function PhoneFilter() {
            let connectionType = {
                adsl: document.querySelectorAll('input[name=adsl]:checked').length > 0 ? true : false,
                cable: document.querySelectorAll('input[name=cable]:checked').length > 0 ? true : false,
                fiver: document.querySelectorAll('input[name=fiver]:checked').length > 0 ? true : false,

            }

            let types;
            let type = document.getElementsByClassName('option selected');

            if (type.length == 0) {
                types = "all";
            } else {
                types = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            }


            let combi_operators = [];
            let tvOptions = [];
            let normalChannel = document.getElementById('range4').value;
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementById('range1').value;
            let num_channel = document.getElementById('range3').value;
            var checkedBoxes = document.querySelectorAll('input[name=mobile_filter]:checked');
            for (let x = 0; x < checkedBoxes.length; x++) {
                combi_operators.splice(x, 1);
                combi_operators.push(checkedBoxes[x].value)

            }

            let ConvertToString = combi_operators.toString();
            let bellenObj = {
                bellen1: document.querySelectorAll('input[name=bellen1]:checked').length > 0 ? true : false,
                bellen2: document.querySelectorAll('input[name=bellen2]:checked').length > 0 ? true : false,
                bellen3: document.querySelectorAll('input[name=bellen3]:checked').length > 0 ? true : false,
                bellen4: document.querySelectorAll('input[name=bellen4]:checked').length > 0 ? true : false,
            }
            let tv_opt = document.querySelectorAll('input[name=tv_opt]:checked');
            for (let y = 0; y < tv_opt.length; y++) {

                tvOptions.push(tv_opt[y].value)
            }

            let selectedChannels = [];
            let selectedName = [];
            let tv_channel = document.querySelectorAll('input[name=tv_channels]:checked');

            for (let z = 0; z < tv_channel.length; z++) {
                selectedChannels.push(tv_channel[z].value)

            }





            let providers = []
            var checkedBoxes = document.querySelectorAll('input[name=provider]:checked');

            for (let x = 0; x < checkedBoxes.length; x++) {
                providers.splice(x, 1);
                providers.push(checkedBoxes[x].value)

            }

            fetchProducts(downSpeed, cost, num_channel, types, normalChannel, ConvertToString, bellenObj, tvOptions,
                selectedChannels, providers.toString(), connectionType)
        }

        function filterTvOptions() {
            let connectionType = {
                adsl: document.querySelectorAll('input[name=adsl]:checked').length > 0 ? true : false,
                cable: document.querySelectorAll('input[name=cable]:checked').length > 0 ? true : false,
                fiver: document.querySelectorAll('input[name=fiver]:checked').length > 0 ? true : false,

            }

            let types;
            let type = document.getElementsByClassName('option selected');

            if (type.length == 0) {
                types = "all";
            } else {
                types = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            }


            let combi_operators = [];
            let tvOptions = [];
            let normalChannel = document.getElementById('range4').value;
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementById('range1').value;
            let num_channel = document.getElementById('range3').value;
            var checkedBoxes = document.querySelectorAll('input[name=mobile_filter]:checked');
            for (let x = 0; x < checkedBoxes.length; x++) {
                combi_operators.splice(x, 1);
                combi_operators.push(checkedBoxes[x].value)

            }

            let ConvertToString = combi_operators.toString();
            let bellenObj = {
                bellen1: document.querySelectorAll('input[name=bellen1]:checked').length > 0 ? true : false,
                bellen2: document.querySelectorAll('input[name=bellen2]:checked').length > 0 ? true : false,
                bellen3: document.querySelectorAll('input[name=bellen3]:checked').length > 0 ? true : false,
                bellen4: document.querySelectorAll('input[name=bellen4]:checked').length > 0 ? true : false,
            }
            let tv_opt = document.querySelectorAll('input[name=tv_opt]:checked');
            for (let y = 0; y < tv_opt.length; y++) {

                tvOptions.push(tv_opt[y].value)
            }

            let selectedChannels = [];
            let selectedName = [];
            let tv_channel = document.querySelectorAll('input[name=tv_channels]:checked');

            for (let z = 0; z < tv_channel.length; z++) {
                selectedChannels.push(tv_channel[z].value)

            }





            let providers = []
            var checkedBoxes = document.querySelectorAll('input[name=provider]:checked');

            for (let x = 0; x < checkedBoxes.length; x++) {
                providers.splice(x, 1);
                providers.push(checkedBoxes[x].value)

            }

            fetchProducts(downSpeed, cost, num_channel, types, normalChannel, ConvertToString, bellenObj, tvOptions,
                selectedChannels, providers.toString(), connectionType)

        }

        function fetchChannel() {
            let html = "";
            let names = [];

            axios.get('https://api-internet.whitelabeled.nl/v1/tv-channels/QaCTJN7L9diEKuhT-262')
                .then((response) => {
                    categories = response.data;
                    response.data.categories.map((item, i) => {
                        let channel_list = "";
                        item.channels.map((channel, j) => {

                            let checkbox = "";
                            let selectedTv = document.getElementsByClassName('selected-tv');

                            if (selectedTv.length == 0) {
                                checkbox +=
                                    `<input onchange="selectedchannel(this)" type="checkbox" value=${channel.slug} data-name=${channel.name} class="" name="tv_channels">`
                            } else {
                                for (let s = 0; s < selectedTv.length; s++) {
                                    if (selectedTv[s].getAttribute('data-value') == channel.slug) {
                                        checkbox +=
                                            `<input onchange="selectedchannel(this)" type="checkbox" checked value=${channel.slug} data-name=${channel.name} class="" name="tv_channels">`
                                    } else {
                                        checkbox +=
                                            `<input onchange="selectedchannel(this)" type="checkbox" value=${channel.slug} data-name=${channel.name} class="" name="tv_channels">`
                                    }
                                }
                            }

                            channel_list += `  <ul>
<li class="channel-detail-area mb-3 flex items-center w-full">
                                                        <div class="checkbox-animate w-full">
                                                            <label class="flex justify-between items-center text-sm font-normal">
                                                                <div class="channel-name flex w-auto items-center">
                                                                    <span><img src=${channel.logo} class="w-[30px] h-auto mr-3" alt=""></span><span class="text-sm font-normal ">${channel.name}</span>
                                                                </div>
                                                                <span>
                                                                   ${checkbox}
                                                                    <span class="input-check"></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
</ul>`;
                        })
                        html += `     <span class="single-filter  mb-4">
                                            <div class="category-name flex justify-between items-center py-3">
                                                <span class="text-base font-normal text-black">${item.name}</span>

                                            </div>

                                                    ${channel_list}


                                            </span>`


                    })


                    document.querySelector('.channel-list').innerHTML = html;

                })

        }

        function filterTvChannels() {

            let connectionType = {
                adsl: document.querySelectorAll('input[name=adsl]:checked').length > 0 ? true : false,
                cable: document.querySelectorAll('input[name=cable]:checked').length > 0 ? true : false,
                fiver: document.querySelectorAll('input[name=fiver]:checked').length > 0 ? true : false,

            }

            let types;
            let type = document.getElementsByClassName('option selected');

            if (type.length == 0) {
                types = "all";
            } else {
                types = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            }


            let combi_operators = [];
            let tvOptions = [];
            let normalChannel = document.getElementById('range4').value;
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementById('range1').value;
            let num_channel = document.getElementById('range3').value;
            var checkedBoxes = document.querySelectorAll('input[name=mobile_filter]:checked');
            for (let x = 0; x < checkedBoxes.length; x++) {
                combi_operators.splice(x, 1);
                combi_operators.push(checkedBoxes[x].value)

            }

            let ConvertToString = combi_operators.toString();
            let bellenObj = {
                bellen1: document.querySelectorAll('input[name=bellen1]:checked').length > 0 ? true : false,
                bellen2: document.querySelectorAll('input[name=bellen2]:checked').length > 0 ? true : false,
                bellen3: document.querySelectorAll('input[name=bellen3]:checked').length > 0 ? true : false,
                bellen4: document.querySelectorAll('input[name=bellen4]:checked').length > 0 ? true : false,
            }
            let tv_opt = document.querySelectorAll('input[name=tv_opt]:checked');
            for (let y = 0; y < tv_opt.length; y++) {

                tvOptions.push(tv_opt[y].value)
            }

            let selectedChannels = [];
            let selectedName = [];
            let tv_channel = document.querySelectorAll('input[name=tv_channels]:checked');

            for (let z = 0; z < tv_channel.length; z++) {
                selectedChannels.push(tv_channel[z].value)

            }





            let providers = []
            var checkedBoxes = document.querySelectorAll('input[name=provider]:checked');

            for (let x = 0; x < checkedBoxes.length; x++) {
                providers.splice(x, 1);
                providers.push(checkedBoxes[x].value)

            }

            fetchProducts(downSpeed, cost, num_channel, types, normalChannel, ConvertToString, bellenObj, tvOptions,
                selectedChannels, providers.toString(), connectionType)
        }
        let selectedChannels = [];

        function selectedchannel(el) {
            let tv_channels = "";

            if(el.checked == true){
               selectedChannels.push(el.value);
            }else{
                //selectedChannels = selectedChannels.filter(x => x !== el.value);

                let index = selectedChannels.indexOf(el.value);
                if(index !== -1){
                    selectedChannels.splice(index,1)
                }

                console.log(selectedChannels)
            }

            selectedChannels.map((item)=>{
                tv_channels += ` <span class="selected-tv" onclick="remove(this)" data-value=${item}>${item}  <svg aria-hidden="true" class="ml-4 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg></span>`;
            })




            let parent = document.getElementById('selected-tv-channel');
            parent.innerHTML = tv_channels;


        }

        function checkExistChannel(val){
            if(selectedChannels.includes(val)){
                return val;
            }
        }


        function remove(el) {
            var element = el;
            let types;
            let type = document.getElementsByClassName('option selected');

            if (type.length == 0) {
                types = "all";
            } else {
                types = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            }
            let combi_operators = [];
            let tvOptions = [];
            let normalChannel = document.getElementById('range4').value;
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementById('range1').value;
            let num_channel = document.getElementById('range3').value;
            var checkedBoxes = document.querySelectorAll('input[name=mobile_filter]:checked');
            for (let x = 0; x < checkedBoxes.length; x++) {
                combi_operators.splice(x, 1);
                combi_operators.push(checkedBoxes[x].value)

            }

            let ConvertToString = combi_operators.toString();
            let bellenObj = {
                bellen1: document.querySelectorAll('input[name=bellen1]:checked').length > 0 ? true : false,
                bellen2: document.querySelectorAll('input[name=bellen2]:checked').length > 0 ? true : false,
                bellen3: document.querySelectorAll('input[name=bellen3]:checked').length > 0 ? true : false,
                bellen4: document.querySelectorAll('input[name=bellen4]:checked').length > 0 ? true : false,
            }
            let tv_opt = document.querySelectorAll('input[name=tv_opt]:checked');
            for (let y = 0; y < tv_opt.length; y++) {

                tvOptions.push(tv_opt[y].value)
            }

            let selectedChannels = [];
            let selectedName = [];
            let tv_channel = document.querySelectorAll('input[name=tv_channels]:checked');

            for (let z = 0; z < tv_channel.length; z++) {
                selectedChannels.push(tv_channel[z].value)

            }



            fetchProducts(downSpeed, cost, num_channel, types, normalChannel, ConvertToString, bellenObj, tvOptions,
                selectedChannels)
            element.remove();
        }

        function searchChannel() {
            let html = "";
            let value = document.getElementById('default-search').value;
            let channelArray = [];
            let checkbox = "";
            categories.categories.map((item) => {
                item.channels.map((channel) => {




                    if (channel.slug.substring(0, value.length) == value.toLowerCase()) {
                        channelArray.push(channel);
                    } else {
                        return false;
                    }
                })

            })

            channelArray.map((item) => {

                let selectedTv = document.getElementsByClassName('selected-tv');



                html += `     <span class="single-filter  mb-4">
                                                <ul>
<li class="channel-detail-area mb-3 flex items-center w-full">
                                                        <div class="checkbox-animate w-full">
                                                            <label class="flex justify-between items-center text-sm font-normal">
                                                                <div class="channel-name flex w-auto items-center">
                                                                    <span><img src=${item.logo} class="w-[30px] h-auto mr-3" alt=""></span><span class="text-sm font-normal ">${item.name}</span>
                                                                </div>
                                                                <span>
                                                                 <input onchange="selectedchannel(this)" ${checkExistChannel(item.slug) == item.slug ? "checked":""} type="checkbox"  value=${item.slug} data-name=${item.name} class="" name="tv_channels">
                                                                    <span class="input-check"></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
</ul>


                                            </span>`
            })
            document.querySelector('.channel-list').innerHTML = html;

        }







        function ProviderFilter() {
            let connectionType = {
                adsl: document.querySelectorAll('input[name=adsl]:checked').length > 0 ? true : false,
                cable: document.querySelectorAll('input[name=cable]:checked').length > 0 ? true : false,
                fiver: document.querySelectorAll('input[name=fiver]:checked').length > 0 ? true : false,

            }

            let types;
            let type = document.getElementsByClassName('option selected');

            if (type.length == 0) {
                types = "all";
            } else {
                types = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            }


            let combi_operators = [];
            let tvOptions = [];
            let normalChannel = document.getElementById('range4').value;
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementById('range1').value;
            let num_channel = document.getElementById('range3').value;
            var checkedBoxes = document.querySelectorAll('input[name=mobile_filter]:checked');
            for (let x = 0; x < checkedBoxes.length; x++) {
                combi_operators.splice(x, 1);
                combi_operators.push(checkedBoxes[x].value)

            }

            let ConvertToString = combi_operators.toString();
            let bellenObj = {
                bellen1: document.querySelectorAll('input[name=bellen1]:checked').length > 0 ? true : false,
                bellen2: document.querySelectorAll('input[name=bellen2]:checked').length > 0 ? true : false,
                bellen3: document.querySelectorAll('input[name=bellen3]:checked').length > 0 ? true : false,
                bellen4: document.querySelectorAll('input[name=bellen4]:checked').length > 0 ? true : false,
            }
            let tv_opt = document.querySelectorAll('input[name=tv_opt]:checked');
            for (let y = 0; y < tv_opt.length; y++) {

                tvOptions.push(tv_opt[y].value)
            }

            let selectedChannels = [];
            let selectedName = [];
            let tv_channel = document.querySelectorAll('input[name=tv_channels]:checked');

            for (let z = 0; z < tv_channel.length; z++) {
                selectedChannels.push(tv_channel[z].value)

            }





            let providers = []
            var checkedBoxes = document.querySelectorAll('input[name=provider]:checked');

            for (let x = 0; x < checkedBoxes.length; x++) {
                providers.splice(x, 1);
                providers.push(checkedBoxes[x].value)

            }

            fetchProducts(downSpeed, cost, num_channel, types, normalChannel, ConvertToString, bellenObj, tvOptions,
                selectedChannels, providers.toString(), connectionType)


        }

        function filterByconnectionType() {
            let connectionType = {
                adsl: document.querySelectorAll('input[name=adsl]:checked').length > 0 ? true : false,
                cable: document.querySelectorAll('input[name=cable]:checked').length > 0 ? true : false,
                fiver: document.querySelectorAll('input[name=fiver]:checked').length > 0 ? true : false,

            }

            let types;
            let type = document.getElementsByClassName('option selected');

            if (type.length == 0) {
                types = "all";
            } else {
                types = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            }


            let combi_operators = [];
            let tvOptions = [];
            let normalChannel = document.getElementById('range4').value;
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementById('range1').value;
            let num_channel = document.getElementById('range3').value;
            var checkedBoxes = document.querySelectorAll('input[name=mobile_filter]:checked');
            for (let x = 0; x < checkedBoxes.length; x++) {
                combi_operators.splice(x, 1);
                combi_operators.push(checkedBoxes[x].value)

            }

            let ConvertToString = combi_operators.toString();
            let bellenObj = {
                bellen1: document.querySelectorAll('input[name=bellen1]:checked').length > 0 ? true : false,
                bellen2: document.querySelectorAll('input[name=bellen2]:checked').length > 0 ? true : false,
                bellen3: document.querySelectorAll('input[name=bellen3]:checked').length > 0 ? true : false,
                bellen4: document.querySelectorAll('input[name=bellen4]:checked').length > 0 ? true : false,
            }
            let tv_opt = document.querySelectorAll('input[name=tv_opt]:checked');
            for (let y = 0; y < tv_opt.length; y++) {

                tvOptions.push(tv_opt[y].value)
            }

            let selectedChannels = [];
            let selectedName = [];
            let tv_channel = document.querySelectorAll('input[name=tv_channels]:checked');

            for (let z = 0; z < tv_channel.length; z++) {
                selectedChannels.push(tv_channel[z].value)

            }





            let providers = []
            var checkedBoxes = document.querySelectorAll('input[name=provider]:checked');

            for (let x = 0; x < checkedBoxes.length; x++) {
                providers.splice(x, 1);
                providers.push(checkedBoxes[x].value)

            }

            fetchProducts(downSpeed, cost, num_channel, types, normalChannel, ConvertToString, bellenObj, tvOptions,
                selectedChannels, providers.toString(), connectionType)


        }
        let moreProducts = [];

        function loadMore() {
            let html = ``;
            let loadingState = true;
            let count = ++page;

            let connectionType = {
                adsl: document.querySelectorAll('input[name=adsl]:checked').length > 0 ? true : false,
                cable: document.querySelectorAll('input[name=cable]:checked').length > 0 ? true : false,
                fiver: document.querySelectorAll('input[name=fiver]:checked').length > 0 ? true : false,

            }


            let types;
            let type = document.getElementsByClassName('option selected');

            if (type.length == 0) {
                types = "all";
            } else {
                types = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            }
            let include_phone;
            let include_tv;
            if (types == 'all') {
                include_phone = true;
                include_tv = true;
                document.getElementById('num_channel').classList.remove('hidden');

            } else if (types == 'internet-tv') {
                include_phone = false;
                include_tv = true;
                document.getElementById('num_channel').classList.remove('hidden');
            } else if (types == 'internet-bellen') {
                include_phone = true;
                include_tv = false;
                document.getElementById('num_channel').classList.add('hidden');
            } else {
                include_phone = false;
                include_tv = false;
                document.getElementById('num_channel').classList.add('hidden');
            }
            let combi_operators = [];
            let tvOptions = [];
            let normalChannel = document.getElementById('range4').value;
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementsByClassName('sort option choosed')[0].getAttribute('data-value');
            let num_channel = document.getElementById('range3').value;
            var checkedBoxes = document.querySelectorAll('input[name=mobile_filter]:checked');
            for (let x = 0; x < checkedBoxes.length; x++) {
                combi_operators.splice(x, 1);
                combi_operators.push(checkedBoxes[x].value)

            }

            let ConvertToString = combi_operators.toString();
            let bellenObj = {
                bellen1: document.querySelectorAll('input[name=bellen1]:checked').length > 0 ? true : false,
                bellen2: document.querySelectorAll('input[name=bellen2]:checked').length > 0 ? true : false,
                bellen3: document.querySelectorAll('input[name=bellen3]:checked').length > 0 ? true : false,
                bellen4: document.querySelectorAll('input[name=bellen4]:checked').length > 0 ? true : false,
            }
            let tv_opt = document.querySelectorAll('input[name=tv_opt]:checked');
            for (let y = 0; y < tv_opt.length; y++) {

                tvOptions.push(tv_opt[y].value)
            }

            let selectedChannels = [];
            let selectedName = [];
            let tv_channel = document.querySelectorAll('input[name=tv_channels]:checked');

            for (let z = 0; z < tv_channel.length; z++) {
                selectedChannels.push(tv_channel[z].value)

            }





            let providers = []
            var checkedBoxes = document.querySelectorAll('input[name=provider]:checked');

            for (let x = 0; x < checkedBoxes.length; x++) {
                providers.splice(x, 1);
                providers.push(checkedBoxes[x].value)

            }

            // fetchProducts(downSpeed, cost, num_channel, types, normalChannel, ConvertToString, bellenObj,tvOptions,selectedChannels,providers.toString(),connectionType)

            let apiUrl = `https://api-internet.whitelabeled.nl/v1/compare/QaCTJN7L9diEKuhT-262?
&sort=${cost}&providers=${providers.toString()}&min_upload_speed=1&min_download_speed=${downSpeed}&tv_channel_count=${normalChannel}&tv_channel_hd_count=${num_channel}
&p_number_retention=${bellenObj.bellen1}&p_unlimited_nl=${bellenObj.bellen2}&p_unlimited_europe=${bellenObj.bellen3}&p_unlimited_world=${bellenObj.bellen4}
&include_phone=${include_phone}&include_tv=${include_tv}&connection_type_dsl=${connectionType.adsl}&
connection_type_cable=${connectionType.cable}&connection_type_fiber=${connectionType.fiver}&group_provider_products=false&
tv_channels=${encodeURIComponent(JSON.stringify(selectedChannels))}&tv_options=${encodeURIComponent(JSON.stringify(tvOptions))}&v=qz9IxSNGBBLJiL0M-ssT0xqmvG7uoM2f&vc=2a7c1&tracking=-&page=${count}&
combi_providers=${ConvertToString}`;

            if(loadingState == true){
                document.getElementById('loader').classList.remove('hidden');
            }

            axios.get(apiUrl)
                .then((response) => {

                    loadingState = false;

                    if(loadingState == false){
                        document.getElementById('loader').classList.add('hidden');
                    }
                    if( response.data.products.length == 0 ){
                        document.getElementById('load_more').classList.add("hidden");
                    }

                    response.data.products.map((item) => {

                        products.push(item);
                    })

                    products.map((item,i) => {




                        let stars = ``;
                        for (let x = 0; x < item.score_stars; x++) {

                            stars += ` <svg aria-hidden="true" class="w-4 h-4 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>First star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>`
                        }

                        let internetInfo = {
                            connection_type: item.internet.connection == 'cable' ?
                                'Snel internet via kabel' : '' || item.internet.connection == 'dsl' ?
                                "Internet via ADSL" : "" || item.internet.connection == 'fiber' ?
                                "Zeer snel internet via glasvezel" : "",
                            wifi_hotspot: item.internet.extra.hotspots == true ? "Gratis wifi hotspots" :
                                "no",
                            security: item.internet.extra.security == 'simple' ?
                                "Gratis beveiligingspakket" : "no",
                            wifi_repeater: item.internet.extra.wifi_repeater == true ?
                                "Gratis wifi repeater" : "no",
                            support: item.installation_support == "included" ? "Inclusief gratis monteur" :
                                "" || item.installation_support == "optional" ?
                                "Monteur als het niet zelf lukt" : "" || item.installation_support ==
                                "paid" ? "Paid" : ""
                        }
                        let tvInfo = {
                            video_on_demand: item.tv.extra.video_on_demand == true ? "Yes" : "No",
                            tv_app: item.tv.extra.tv_app == true ? "Yes" : "No"
                        }
                        let phoneInfo = {
                            number_retention: item.phone.number_retention == true ? "Gratis nummerbehoud" :
                                "No",
                            tariff_start: '€ ' + item.phone.tariff_start + ' starttarief',
                            tariff_minute_mobile: '€ ' + item.phone.tariff_minute_mobile + ' mobiel',
                            tarrif_fixed: 'Goedkoop bellen voor € ' + item.phone.tariff_minute_fixed +
                                ' naar vaste nummers'

                        }

                        let filteredData = item.additional.available.filter((item) => {
                            return item.category !== "phone";
                        })

                        let extra = "";

                        filteredData.map((data) => {
                            extra += `<tr>

                                             <td class="pl-5 text-[#2B313B] text-sm font-normal"> <span
                                                 class="ml-2">${data.name} € <strong>${data.price_monthly}</strong>,- p/m </span>
                                              </td>
                                          </tr>`
                        })




                        let index = i + 1;
                        html += `<div class="single-deal-box bg-white inner-area border border-[#F5F8FF] rounded-2xl p-5 mb-5">
                        <div class="top-part flex justify-between border-b border-[#F5F8FF] mb-3 pb-5">
                            <div class="left-info grid gap-4 content-between grid-cols-1">
                                <img width="76" src=${item.provider_logo} alt="logo">
                                <span
                                    class="w-fit bg-[#E9FDF2] text-[#26BA65] text-sm font-bold mt-2 px-2.5 py-2 rounded ">Value
                                    for money: Excellent</span>
                            </div>
                            <div class="right-info flex flex-col items-end">
                                <div class="price font-semibold text-2xl text-[#2B313B] "> € ${item.total_price} </div>
                                <div class="text-[#6C7A93] text-base font-normal"> per month </div>
                            </div>
                        </div>
                        <div class="in-list grid grid-cols-2 gap-2 lg:flex lg:flex-row lg:justify-between">
                            <div class="">
                                <div class="font-semibold text-sm text-[#2B313B]">
                                    <span class="flex"> ${item.internet.speed_down} Mbps </span>
                                </div>
                                <div class="font-normal text-sm text-[#2B313B] mt-2"> Download speed </div>
                            </div>
                            <div class="">
                                <div class="font-semibold text-sm text-[#2B313B]">
                                    <span class="flex"> ${item.internet.speed_up} Mbps </span>
                                </div>
                                <div class="font-normal text-sm text-[#2B313B] mt-2"> Upload speed </div>
                            </div>
                            <div id="tv_count" class="${type == 'all' || type == 'internet-tv'?'':'hidden'}">
                                <div class="font-semibold text-sm text-[#2B313B]">
                                    <span class="flex"> ${item.tv.channel_count } (${item.tv.channel_count_hd} HD) </span>
                                </div>
                                <div class="font-normal text-sm text-[#2B313B] mt-2"> Channels </div>
                            </div>
                            <div id="phone_count" class="${type == 'all' || type == 'internet-bellen'?'':'hidden'}" >
                                <div class="font-semibold text-sm text-[#2B313B]">
                                    <span class="flex"> Landline Calls </span>
                                </div>
                                <div class="font-normal text-sm text-[#2B313B] mt-2"> ${Math.floor(item.phone.tariff_minute_fixed * 100)} Ct. </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="font-normal text-sm text-[#2B313B]">
                                    <span class="flex mt-1">
                                        <div class="rating-star flex flex-row items-center">
                                            <p class="text-sm font-bold text-[#2B313B] mr-3">${item.score_stars} </p>
                                            <div class="flex items-center">


                                               ${stars}



                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="font-normal text-sm text-[#2B313B] mt-2">
                                    <a href=""> 10089 Reviews</a>
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="md:flex mt-3">
                            <span
                                class="w-full block md:grow bg-[#F5F8FF] p-3 text-[#0052FE] text-sm font-semibold rounded-md">${item.discount_text}</span>
                            <div class="flex justify-between my-3 md:my-0">
                                <a href=${item.signup_url} target=_blank class="flex items-center text-[#0052FE] font-bold text-sm mx-3">
                                    View <img src="<?php echo e(asset('/frontend/assets/img/goto-link.svg')); ?>" class="mx-2"
                                        alt="icon">
                                </a>
                                  <span class="flex items-center">
                                    <input type="checkbox" onchange='compare(this)' data-index=${i} ${checkExists(item.base_id) == item.base_id ? "checked":""} data-id=${item.base_id} name="compare" id="compare" class="compare-checkbox mr-2">
                                    <label for="compare"
                                        class="text-[#2B313B] text-sm font-normal cursor-pointer">Compare</label>
                                </span>
                            </div>
                        </div>
                        <div class="mt-3" x-data="accordion(${index})">
                            <div x-ref="tab" :style="handleToggle()"
                                class="font-normal text-sm border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all">
                                <div class="insurance-tab mb-5">
                                    <article x-data="{ tab: 'pack-a' }" data-interval="6000">
                                        <nav role="tablist" class="my-3">
                                            <ul class="lg:flex lg:items-center">
                                                <li class="mb-2 lg:mb-0 mr-4">
                                                    <button x-on:click="tab = 'pack-a'"
                                                        class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm"
                                                        x-bind:class="{
                                                            'font-semibold active-tab border-b border-[#0052FE]': tab ===
                                                                'pack-a'
                                                        }">Internet</button>
                                                </li>
                                                <li class="${type == 'all' || type == 'internet-tv' ? '':"hidden" } mb-2 lg:mb-0 mr-4">
                                                    <button x-on:click="tab = 'pack-b'"
                                                        class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm"
                                                        x-bind:class="{
                                                            'font-semibold active-tab  border-b  border-[#0052FE]': tab ===
                                                                'pack-b'
                                                        }">Television</button>
                                                </li>
                                                <li class="${type == 'all' || type == 'internet-bellen' ? '':"hidden" }  mb-2 lg:mb-0 mr-4">
                                                    <button x-on:click="tab = 'pack-c'"
                                                        x-bind:class="{
                                                            'font-semibold  active-tab border-b border-[#0052FE]': tab ===
                                                                'pack-c'
                                                        }"
                                                        class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Bellen</button>
                                                </li>
                                                <li class="mb-2 lg:mb-0 mr-4">
                                                    <button x-on:click="tab = 'pack-d'"
                                                        x-bind:class="{
                                                            'font-semibold  active-tab border-b border-[#0052FE]': tab ===
                                                                'pack-d'
                                                        }"
                                                        class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Extra mogelijkheden</button>
                                                </li>
                                                <li class="mb-2 lg:mb-0 mr-4">
                                                    <button x-on:click="tab = 'pack-e'"
                                                        x-bind:class="{
                                                            'font-semibold  active-tab border-b border-[#0052FE]': tab ===
                                                                'pack-e'
                                                        }"
                                                        class="pb-1 text-[#6C7A93] border-b border-transparent font-normal text-sm">Prijs</button>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div class="grid">
                                            <div x-show="tab === 'pack-a'">

                                                <table class="mb-5">
                                                    <tbody class="text-[#2B313B] text-sm font-normal">
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Download speed</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${item.internet.speed_down} Mbps</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">Upload
                                                                speed</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${item.internet.speed_up} Mbps</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">Type of
                                                                internet</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${internetInfo.connection_type}</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">Wifi Hotspot
                                                            </td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${internetInfo.wifi_hotspot}</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">Security
                                                            </td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${internetInfo.security}</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">Wifi Repeater
                                                            </td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${internetInfo.wifi_repeater}</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">Installation
                                                            </td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${internetInfo.support}</span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="flex items-center justify-end">
                                                    <a href="${item.signup_url}"
                                                        class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                                </div>
                                            </div>
                                            <div x-show="tab === 'pack-b'">


                                                <table class="mb-5">
                                                    <tbody class="text-[#2B313B] text-sm font-normal">
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Video on demand</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${tvInfo.video_on_demand}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                               Live Tv app</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${tvInfo.tv_app}</span>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <div class="flex items-center justify-end">
                                                    <a href="#"
                                                        class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                                </div>
                                            </div>
                                            <div x-show="tab === 'pack-c'">
                                                <table class="mb-5">
                                                    <tbody class="text-[#2B313B] text-sm font-normal">
                                                        <tr>

                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal"> <span
                                                                    class="ml-2">${phoneInfo.tarrif_fixed}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal"> <span
                                                                    class="ml-2">${phoneInfo.tariff_minute_mobile}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal"> <span
                                                                    class="ml-2">${phoneInfo.tariff_start}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                        <td class="pl-5 text-[#2B313B] text-sm font-normal"> <span
                                                                class="ml-2">${phoneInfo.number_retention}</span>
                                                        </td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                                <div class="flex items-center justify-end">
                                                    <a href="#"
                                                        class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                                </div>
                                            </div>
                                            <div x-show="tab === 'pack-d'">
                                                <table class="mb-5">
                                                    <tbody class="text-[#2B313B] text-sm font-normal">
                                                        ${extra}
                                                    </tbody>
                                                </table>
                                                <div class="flex items-center justify-end">
                                                    <a href="#"
                                                        class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                                </div>
                                            </div>
                                            <div x-show="tab === 'pack-e'">

                                                <table class="mb-5">
                                                    <tbody class="text-[#2B313B] text-sm font-normal">
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Contractduur</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${item.contract_duration} maanden</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Prijs per maand</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${item.contract_duration} x € ${item.base_price} </span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Korting per maand</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${item.discount_duration} x € ${item.discount_price} </span>
                                                            </td>
                                                        </tr>

                                                        <tr >
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                TV Standered</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">${item.tv.enabled.length  !== 0 && item.tv.enabled[0].included == true ? "Included" : "No"}  </span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Aansluitkosten</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">€ ${item.base_price_initial}  </span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Eenmalige korting</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">- € ${item.discount_amount_initial}  </span>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="py-1 text-[#2B313B] text-sm font-normal">
                                                                Totaalprijs</td>
                                                            <td class="pl-5 text-[#2B313B] text-sm font-normal">: <span
                                                                    class="ml-2">€ ${item.total_price_contract}  </span>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <div class="flex items-center justify-end">
                                                    <a href="#"
                                                        class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded-lg transition-all">Choose</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <h4 @click="handleClick()"
                                class="flex items-center justify-center w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer">
                                <span>Fold In</span>
                                <svg :class="handleRotate()"
                                    class="fill-current text-[#2B313B] h-5 w-5 transform transition-transform duration-500"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </h4>


                        </div>
                    </div>`;
                    })

                    let parent = document.getElementById('product');
                    parent.innerHTML = html;
                })




        }
        function checkExists(val) {
            if(selectedItem.includes(val)){
               return val;
            }
        }

        function checkZip(){
            document.getElementById('info').classList.add('hidden')
           fetchProducts();
        }

        function compare(item){
            let tab = "";
            let base_id = parseInt(item.getAttribute('data-id'));
            let productIndex = item.getAttribute('data-index');
            if(item.checked){
                 if(!selectedItem.includes(base_id)){
                     selectedItem.push(base_id);
                     selectedProducts.push(products[productIndex]);



                     let items = products.filter(w => selectedItem.includes(w.base_id))
                     if(selectedItem.length > 0){
                         document.getElementById("compare-section").style.display = "block";
                     }
                     selectedProducts.map((item)=>{
                         tab += `              <span class="comp-card bg-white p-3 flex items-center h-[61px] w-full md:w-[217px] justify-between rounded-xl">
                                              <img src=${item.provider_logo} class="w-14 md:w-[70px] h-auto" alt="logo">
                                              <span class="price font-semibold text-base text-[#2B313B] mx-0 sm:mx-2 md:mx-3">
                                                 € ${item.total_price}
                                              </span>
                                              <button type="button"><img src="<?php echo e(asset('/frontend/assets/img/close-x.svg')); ?>" alt="icon"></button>

                                          </span>

                                                        `
                     })

                     document.getElementById('compare-tab').innerHTML = tab
                 }
            }else{

                let index = selectedItem.indexOf(item.getAttribute('data-id'));
                selectedItem.splice(index,1)
                let findProductIndex = selectedProducts.findIndex(obj => obj.base_id == item.getAttribute('data-id'));
                selectedProducts.splice(findProductIndex,1);


                selectedProducts.map((item)=>{
                    tab += `              <span class="comp-card bg-white p-3 flex items-center h-[61px] w-full md:w-[217px] justify-between rounded-xl">
                                              <img src=${item.provider_logo} class="w-14 md:w-[70px] h-auto" alt="logo">
                                              <span class="price font-semibold text-base text-[#2B313B] mx-0 sm:mx-2 md:mx-3">
                                                 € ${item.total_price}
                                              </span>
                                              <button onclick="removeTab(${item.base_id})" type="button"><img src="<?php echo e(asset('/frontend/assets/img/close-x.svg')); ?>" alt="icon"></button>

                                          </span>

                                                        `
                })
                document.getElementById('compare-tab').innerHTML = tab

                console.log(selectedItem)
            }

            if(document.querySelectorAll('input[name=compare]:checked').length == 0){
                document.getElementById("compare-section").style.display = "none";
            }




           // console.log(selectedItem)
        }

        function filterByPerson(){
            document.getElementById("range2").value = document.querySelectorAll('input[name=person]:checked')[0].value;
            const pct = document.querySelectorAll('input[name=person]:checked')[0].value / 300;
            let borderWidth = pct * 100;
            let thumbEm = -0.056 - pct;


            const border = document.getElementsByClassName('range__input-fill');

            document.getElementsByClassName('range__counter-sr')[0].textContent = document.querySelectorAll('input[name=person]:checked')[0].value

            border[0].style.width = `calc(${borderWidth}% + ${thumbEm}em)`;

            let connectionType = {
                adsl: document.querySelectorAll('input[name=adsl]:checked').length > 0 ? true : false,
                cable: document.querySelectorAll('input[name=cable]:checked').length > 0 ? true : false,
                fiver: document.querySelectorAll('input[name=fiver]:checked').length > 0 ? true : false,

            }

            let types;
            let type = document.getElementsByClassName('option selected');

            if (type.length == 0) {
                types = "all";
            } else {
                types = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            }


            let combi_operators = [];
            let tvOptions = [];
            let normalChannel = document.getElementById('range4').value;
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementById('range1').value;
            let num_channel = document.getElementById('range3').value;
            var checkedBoxes = document.querySelectorAll('input[name=mobile_filter]:checked');
            for (let x = 0; x < checkedBoxes.length; x++) {
                combi_operators.splice(x, 1);
                combi_operators.push(checkedBoxes[x].value)

            }

            let ConvertToString = combi_operators.toString();
            let bellenObj = {
                bellen1: document.querySelectorAll('input[name=bellen1]:checked').length > 0 ? true : false,
                bellen2: document.querySelectorAll('input[name=bellen2]:checked').length > 0 ? true : false,
                bellen3: document.querySelectorAll('input[name=bellen3]:checked').length > 0 ? true : false,
                bellen4: document.querySelectorAll('input[name=bellen4]:checked').length > 0 ? true : false,
            }
            let tv_opt = document.querySelectorAll('input[name=tv_opt]:checked');
            for (let y = 0; y < tv_opt.length; y++) {

                tvOptions.push(tv_opt[y].value)
            }

            let selectedChannels = [];
            let selectedName = [];
            let tv_channel = document.querySelectorAll('input[name=tv_channels]:checked');

            for (let z = 0; z < tv_channel.length; z++) {
                selectedChannels.push(tv_channel[z].value)

            }





            let providers = []
            var checkedBoxes = document.querySelectorAll('input[name=provider]:checked');

            for (let x = 0; x < checkedBoxes.length; x++) {
                providers.splice(x, 1);
                providers.push(checkedBoxes[x].value)

            }

            fetchProducts(downSpeed, cost, num_channel, types, normalChannel, ConvertToString, bellenObj, tvOptions,
                selectedChannels, providers.toString(), connectionType)
        }
        function compareNow(){



            let compareHtml = "";
            selectedProducts.map((item,i)=>{

              let stars = ``;
              for (let x = 0; x < item.score_stars; x++) {

                  stars += ` <svg aria-hidden="true" class="w-4 h-4 text-yellow-400"
                                                    fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <title>First star</title>
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>`
              }

              compareHtml += `  <div
                class="single-com-details ml-2 w-64 flex flex-col bg-white border border-#F5F8FF rounded-2xl">
                <div class="com-top p-5 border-b border-[#F5F8FF]">
                    <div class="top-part border-b border-[#F5F8FF] mb-3 pb-5">
                        <div class="left-info flex items-center justify-between">
                            <img src=${item.provider_logo} alt="logo">
                                
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

                        <div class="flex flex-col">
                            <div class="font-normal text-sm text-[#2B313B]">
                                            <span class="flex mt-1">
                                                <div class="rating-star flex flex-row items-center">
                                                    <p class="text-xs font-bold text-[#2B313B] mr-3">${item.score_stars} </p>
                                                    <div class="flex items-center">
                                                       ${stars}

                                                    </div>


                                                </div>
                                            </span>
                            </div>
                            <div class="font-normal text-sm text-[#2B313B] mt-2">
                                <a href=""> 10089 Reviews</a>
                            </div>
                        </div>
                    </div>

                    <p class="font-normal text-sm my-3 text-[#0052FE]">Free physio after a car accident</p>

                    <span
                        class="w-full block bg-[#E9FDF2] text-[#26BA65] text-center text-[10px] font-bold mt-2 px-2.5 py-2 rounded ">Value
                                    for money: Excellent</span>
                </div>



                <div
                    class="com-mid grid grid-cols-1 gap-2 justify-items-start content-center p-5 border-b border-[#F5F8FF]">
                    
                    
                    
                    
                                    <div class="py-2 text-black text-sm font-normal">${item.internet.speed_down}</div>
                                    <div class="py-2 text-black text-sm font-normal">${item.internet.connection}</div>
                                    <div class="py-2 text-black text-sm font-normal">${item.shipping_time}</div>
                                     <div class="py-2 text-black text-sm font-normal">${item.compare_price}</div>
                                      <div class="py-2 text-black text-sm font-normal"><a href=${item.signup_url} target="_blank" class="outline-btn btn-translate-z flex justify-center h-auto w-full  bg-[#112954] text-white text-sm font-bold py-2.5 px-6 mb-3 rounded-lg transition-all">${item.provider}</a></div>
                </div>

                 <div
                    class="com-c grid grid-cols-1 gap-2 justify-items-start content-center p-5 border-b border-[#F5F8FF]">
                    
              
              
              
              <div class="py-2 text-black text-sm font-normal">${item.internet.speed_down}</div>
                                    <div class="py-2 text-black text-sm font-normal">${item.internet.speed_up}</div>

                </div>

                  <div
                    class="com-d grid grid-cols-1 gap-4 justify-items-start content-center p-5 border-b border-[#F5F8FF] text-black text-sm font-normal">
                    
              
              
              
              <div class="py-2 text-black text-sm font-normal">${item.tv.channel_count}</div>
                                    <div class="py-2 text-black text-sm font-normal">${item.tv.channel_count_hd}</div>

                                    ${item.tv.extra.tv_app == true ? `<img src="<?php echo e(asset('/frontend/assets/img/green-tick.svg')); ?>" class="h-4 w-4" alt="icon">` :"No" }
                                     ${item.tv.extra.video_on_demand == true ? `<img src="<?php echo e(asset('/frontend/assets/img/green-tick.svg')); ?>" class="h-4 w-4" alt="icon">` :"No" }


                </div>

                <div
                    class="com-e grid grid-cols-1 gap-2 justify-items-start content-center p-5 border-b border-[#F5F8FF]">

              <div class="py-2 text-black text-sm font-normal">€ ${item.phone.tariff_start}</div>
                                    <div class="py-2 text-black text-sm font-normal">€ ${item.phone.tariff_minute_fixed}</div>
                                     <div class="py-2 text-black text-sm font-normal">€ ${item.phone.tariff_minute_mobile}</div>

                                    ${item.phone.number_retention == true ? `<img src="<?php echo e(asset('/frontend/assets/img/green-tick.svg')); ?>" class="h-4 w-4" alt="icon">` :"No" }



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
        function sort(el){
           let price = el.getAttribute('data-value');

           let allSelected = document.getElementsByClassName('sort option choosed');

           for(let i =0; i < allSelected.length; i++){
               allSelected[i].classList.remove("choosed");
           }

           el.classList.add("choosed")

            console.log(allSelected)

            let connectionType = {
                adsl: document.querySelectorAll('input[name=adsl]:checked').length > 0 ? true : false,
                cable: document.querySelectorAll('input[name=cable]:checked').length > 0 ? true : false,
                fiver: document.querySelectorAll('input[name=fiver]:checked').length > 0 ? true : false,

            }

            let types;
            let type = document.getElementsByClassName('option selected');

            if (type.length == 0) {
                types = "all";
            } else {
                types = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            }


            let combi_operators = [];
            let tvOptions = [];
            let normalChannel = document.getElementById('range4').value;
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementById('range1').value;
            let num_channel = document.getElementById('range3').value;
            var checkedBoxes = document.querySelectorAll('input[name=mobile_filter]:checked');
            for (let x = 0; x < checkedBoxes.length; x++) {
                combi_operators.splice(x, 1);
                combi_operators.push(checkedBoxes[x].value)

            }

            let ConvertToString = combi_operators.toString();
            let bellenObj = {
                bellen1: document.querySelectorAll('input[name=bellen1]:checked').length > 0 ? true : false,
                bellen2: document.querySelectorAll('input[name=bellen2]:checked').length > 0 ? true : false,
                bellen3: document.querySelectorAll('input[name=bellen3]:checked').length > 0 ? true : false,
                bellen4: document.querySelectorAll('input[name=bellen4]:checked').length > 0 ? true : false,
            }
            let tv_opt = document.querySelectorAll('input[name=tv_opt]:checked');
            for (let y = 0; y < tv_opt.length; y++) {

                tvOptions.push(tv_opt[y].value)
            }

            let selectedChannels = [];
            let selectedName = [];
            let tv_channel = document.querySelectorAll('input[name=tv_channels]:checked');

            for (let z = 0; z < tv_channel.length; z++) {
                selectedChannels.push(tv_channel[z].value)

            }





            let providers = []
            var checkedBoxes = document.querySelectorAll('input[name=provider]:checked');

            for (let x = 0; x < checkedBoxes.length; x++) {
                providers.splice(x, 1);
                providers.push(checkedBoxes[x].value)

            }

            fetchProducts(downSpeed, cost, num_channel, types, normalChannel, ConvertToString, bellenObj, tvOptions,
                selectedChannels, providers.toString(), connectionType,price)
        }

        let selectedTvOpties = [];

        function selectTvOpties(el){
           if(el.checked == true){
               selectedTvOpties.push(el.getAttribute('data-text'));
           }else{
               let index = selectedTvOpties.indexOf(el.getAttribute('data-text'));
               selectedTvOpties.splice(index,1);


           }
           let tv_extra ="";

           selectedTvOpties.map((item,i)=>{



               tv_extra += ` <span class="selected-tv" onclick="removeTvExtra(this)" data-text="${item}">${item}  <svg aria-hidden="true" class="ml-4 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg></span>`;
           })

            document.getElementById('selected-tv-extra').innerHTML = tv_extra;
        }

        function checkSelectedTvOpt(val){
            if(selectedTvOpties.includes(val)){
                return val;
            }
        }

        function removeTvExtra(el){
          let index = selectedTvOpties.indexOf(el.getAttribute('data-text'));

          selectedTvOpties.splice(index,1);

          let tv_extra=""
            selectedTvOpties.map((item,i)=>{



                tv_extra += ` <span class="selected-tv" onclick="removeTvExtra(this)" data-text="${item}">${item}  <svg aria-hidden="true" class="ml-4 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg></span>`;
            })

            document.getElementById('selected-tv-extra').innerHTML = tv_extra;

            let connectionType = {
                adsl: document.querySelectorAll('input[name=adsl]:checked').length > 0 ? true : false,
                cable: document.querySelectorAll('input[name=cable]:checked').length > 0 ? true : false,
                fiver: document.querySelectorAll('input[name=fiver]:checked').length > 0 ? true : false,

            }

            let types;
            let type = document.getElementsByClassName('option selected');

            if (type.length == 0) {
                types = "all";
            } else {
                types = document.getElementsByClassName('option selected')[0].getAttribute('data-value');
            }


            let combi_operators = [];
            let tvOptions = [];
            let normalChannel = document.getElementById('range4').value;
            let downSpeed = document.getElementById('range2').value;
            let cost = document.getElementById('range1').value;
            let num_channel = document.getElementById('range3').value;
            var checkedBoxes = document.querySelectorAll('input[name=mobile_filter]:checked');
            for (let x = 0; x < checkedBoxes.length; x++) {
                combi_operators.splice(x, 1);
                combi_operators.push(checkedBoxes[x].value)

            }

            let ConvertToString = combi_operators.toString();
            let bellenObj = {
                bellen1: document.querySelectorAll('input[name=bellen1]:checked').length > 0 ? true : false,
                bellen2: document.querySelectorAll('input[name=bellen2]:checked').length > 0 ? true : false,
                bellen3: document.querySelectorAll('input[name=bellen3]:checked').length > 0 ? true : false,
                bellen4: document.querySelectorAll('input[name=bellen4]:checked').length > 0 ? true : false,
            }
            let tv_opt = document.querySelectorAll('input[name=tv_opt]:checked');
            for (let y = 0; y < tv_opt.length; y++) {

                tvOptions.push(tv_opt[y].value)
            }

            let selectedChannels = [];
            let selectedName = [];
            let tv_channel = document.querySelectorAll('input[name=tv_channels]:checked');

            for (let z = 0; z < tv_channel.length; z++) {
                selectedChannels.push(tv_channel[z].value)

            }





            let providers = []
            var checkedBoxes = document.querySelectorAll('input[name=provider]:checked');

            for (let x = 0; x < checkedBoxes.length; x++) {
                providers.splice(x, 1);
                providers.push(checkedBoxes[x].value)

            }

            fetchProducts(downSpeed, cost, num_channel, types, normalChannel, ConvertToString, bellenObj, tvOptions,
                selectedChannels, providers.toString(), connectionType)
        }

        function removeCompare(){
            selectedItem = [];
            selectedProducts = [];


            if(selectedProducts.length == 0){
                document.getElementById("compare-section").style.display = "none";
            }

            let compareBox = document.getElementsByClassName('compare-checkbox');
            for(let i=0; i < compareBox.length;i++){
                compareBox[i].checked = false;
            }
        }

        function removeTab(value){
                console.log(value);
        }

        fetchProducts();
    </script>
    <script>
        window.addEventListener("DOMContentLoaded", () => {
            let range1 = new RollCounterRange("#range1"),
                range2 = new RollCounterRange("#range2"),
                range3 = new RollCounterRange("#range3");
            range4 = new RollCounterRange("#range4");
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
                    this.el.addEventListener("input", this.changeValue.bind(this));
                }
            }
            buildSlider() {
                // create a div to contain the <input>
                let rangeWrap = document.createElement("div");
                let counterTop = document.querySelector(".counter-top")
                rangeWrap.className = "range";
                this.el.parentElement.insertBefore(rangeWrap, this.el);

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
                    digitCol.setAttribute("aria-hidden", "true");
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
                    this.rollDuration = transDur.substr(0, msLabelPos);
                else if (sLabelPos > -1)
                    this.rollDuration = transDur.substr(0, sLabelPos) * 1e3;
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
                        thumbEm = -0.056 - pct;

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
                        rangeVal.split("").forEach((r, i) => {
                            let diff = +r - this.lastDigits[i];
                            diffsFromLast.push(diff);
                        });
                    }

                    // roll the digits
                    this.trans09 = false;
                    rangeVal.split("").forEach((e, i) => {
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

                            }, this.rollDuration);
                        }
                    });
                    this.lastDigits = rangeVal;
                }
            }
        }
    </script>
    <script>
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
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
    </script>
</div>
<?php /**PATH /home/riad/Documents/bereken-laravel/resources/views/livewire/internet/choose-package.blade.php ENDPATH**/ ?>