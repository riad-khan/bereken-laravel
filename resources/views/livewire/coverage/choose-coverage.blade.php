<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- Calculations Start -->
            <div class="services-area w-full py-8">

                <div class="flex justify-center">
                    <div class="w-full md:w-[805px]">
                        <h1 class="text-[#2B313B] text-2xl text-center font-semibold mb-3">Choose your coverage</h1>
                        <div class="bg-white">
                            
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                                    <div class="pricing-table p-4 border border-[#F5F8FF] rounded-2xl">
                                        <div class="price-heading flex items-center justify-between pb-5 border-b border-[#F5F8FF]">
                                            <span class="mr-2">
                                                <h2 class="text-[#0052FE] text-base font-semibold mb-1">WAH</h2>
                                                <p class="text-[#6C7A93] text-base font-normal">Legal liability</p>
                                            </span>
                                            <span class="flex items-center py-2 px-4 bg-[#26BA65] text-white text-[10px] font-bold rounded-full">
                                                Recommended
                                            </span>
                                        </div>
                                        <div class="pricing-body pt-5 border-b border-[#F5F8FF]">
                                            <ul class="h-auto md:h-[160px]">
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> Harm to others</li>
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> Free Theft Cover</li>
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> up to € 7.500</li>
                                            </ul>
                                            <div class="flex flex-col text-right my-5">
                                                 <span class="text-sm text-[#2B313B] font-nomrmal">7 insurances from</span>  
                                                 <span class="text-[#2B313B] text-base font-semibold">17.89</span> 
                                            </div>
                                        </div>
                                        <div class="flex items-center my-5 radio-cu">
                                            <input id="inline-radio" onChange="(this.checked?addClassNameChecked(this):removeClassName(this))"  type="radio" value="" name="radio-group-pricing" class="pricing-radio w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                            <label for="inline-radio" class="ml-5 text-[#2B313B] font-normal text-xs">Choose this</label>
                                        </div>
                                    </div>
                                    <div class="pricing-table p-4 border border-[#F5F8FF] rounded-2xl">
                                        <div class="price-heading flex items-center justify-between pb-5 border-b border-[#F5F8FF]">
                                            <span class="mr-5">
                                                <h2 class="text-[#0052FE] text-base font-semibold mb-1">WA+</h2>
                                                <p class="text-[#6C7A93] text-base font-normal">Limited Hull</p>
                                            </span>                                           
                                        </div>
                                        <div class="pricing-body pt-5 border-b border-[#F5F8FF]">
                                            <ul class="h-auto md:h-[160px]">
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> Harm to others</li>
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> Free Theft Cover</li>
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> Free physio after a car accident</li>
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> Fire, storm, nature</li>
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> Window damage</li>
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> up to € 10.000</li>
                                            </ul>
                                            <div class="flex flex-col text-right my-5">
                                                 <span class="text-sm text-[#2B313B] font-nomrmal">11 insurances from</span>  
                                                 <span class="text-[#2B313B] text-base font-semibold">28,17</span> 
                                            </div>
                                        </div>
                                        <div class="flex items-center my-5 radio-cu">
                                            <input id="inline-2-radio"  onChange="(this.checked?addClassNameChecked(this):removeClassName(this))" type="radio" value="" name="radio-group-pricing" class="pricing-radio w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2">
                                            <label for="inline-2-radio" class="ml-5 text-[#2B313B] font-normal text-xs">Choose this</label>
                                        </div>
                                    </div>
                                    <div class="pricing-table p-4 border border-[#F5F8FF] rounded-2xl">
                                        <div class="price-heading flex items-center justify-between pb-5 border-b border-[#F5F8FF]">
                                            <span class="mr-5">
                                                <h2 class="text-[#0052FE] text-base font-semibold mb-1">All Risk</h2>
                                                <p class="text-[#6C7A93] text-base font-normal">Full Hull</p>
                                            </span>                                           
                                        </div>
                                        <div class="pricing-body pt-5 border-b border-[#F5F8FF]">
                                            <ul>
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> Harm to others</li>
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> Free Theft Cover</li>
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> Window damage</li>
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> Vandalism</li>
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> Own fault</li>
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> Free physio after a car accident</li>
                                                <li class="flex items-center text-xs text-[#2B313B] font-nomrmal mb-2"><img src="{{asset('/frontend/assets//img/green-tick.svg')}}" class="mr-1" alt="icon"> up to € 10.000</li>
                                            </ul>
                                            <div class="flex flex-col text-right my-5">
                                                 <span class="text-sm text-[#2B313B] font-nomrmal">11 insurances from</span>  
                                                 <span class="text-[#2B313B] text-base font-semibold">44,12</span> 
                                            </div>
                                        </div>
                                        <div class="flex items-center my-5 radio-cu">
                                            <input id="inline-3-radio"  onChange="(this.checked?addClassNameChecked(this):removeClassName(this))" type="radio" value="" name="radio-group-pricing" class="pricing-radio w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2">
                                            <label for="inline-3-radio" class="ml-5 text-[#2B313B] font-normal text-xs">Choose this</label>
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="bottom-part p-5 mt-3 md:mt-14 md:flex md:items-center md:flex-row md:justify-around">
                            
                                <div class="sm-info bg-[#F5F8FF] p-4 flex flex-col rounded-lg w-full h-auto md:w-64">
                                    <span class="flex justify-between"><h3 class="text-[#0052FE] font-semibold text-base">AC 3000</h3> <a href="#" class="font-normal text-[#0052FE] text-xs underline">Change</a></span>
                                    <span class="flex justify-between"><span class="text-[#2B313B] font-normal text-xs">Year</span> <span class="text-[#2B313B] text-xs font-semibold">February 1981</span></span>
                                </div>
                            <div class="button-area mt-14 md:mt-0 flex justify-between md:justify-end">
                                <a href="#" class="gray-btn outline-btn btn-translate-z flex bg-[#0052fe] text-white text-xs font-bold py-2.5 px-6 rounded transition-all cursor-pointer  text-xs font-semibold text-center justify-center items-center rounded py-4 px-2 my-6 w-fit mr-3"><span class="flex items-center"><img src="{{asset('/frontend/assets/img/arrow-white.svg')}}" class="mr-2 h-2 w-2 rotate-180 float-left" alt="icon"> Go Back </span></a>
    
                                <a href="#" class="next-btn outline-btn btn-translate-z flex bg-[#112954] text-white text-xs font-bold py-2.5 px-6 rounded transition-all cursor-pointer text-xs font-semibold text-center justify-center items-center rounded py-4 px-2 my-6 w-28"><span class="flex items-center"> Next <img src="{{asset('/frontend/assets/img/arrow-white.svg')}}" class="ml-2 h-2 w-2 float-right" alt="icon"></span></a>
                            </div>
                        
                        </div>
                    </div>
                </div>

            </div>
            <!-- Calculations End -->

        </div>
        <!-- container end -->
    </section>
</div>
