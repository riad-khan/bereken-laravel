<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- Calculations Start -->
            <div class="services-area w-full py-8">

                <div class="flex justify-center">
                    <div class="w-full md:w-[805px]">
                        <h1 class="text-[#2B313B] text-2xl text-[32px] text-center font-semibold mb-6   ">Choose your coverage</h1>
                        <div class="left-info my-4 grid gap-4 content-between grid-cols-1">
                                <img src="{{asset('/frontend/assets/img/logos/fbto.png')}}" alt="logo">
                            </div>
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

                        <div class="bottom-part p-0 md:p-5 mt-3 md:mt-14 md:flex md:items-end md:flex-row md:justify-around">
                            
                                <div class="sm-info bg-[#F5F8FF] p-4 flex flex-col rounded-lg w-full h-auto md:w-64">
                                    <span class="flex justify-between"><h3 class="text-[#0052FE] font-semibold text-base">AC 3000</h3> <a href="#" class="font-normal text-[#0052FE] text-xs underline">Change</a></span>
                                    <span class="flex justify-between"><span class="text-[#2B313B] font-normal text-xs">Year</span> <span class="text-[#2B313B] text-xs font-semibold">February 1981</span></span>
                                </div>
                            <div class="button-area mt-6 md:mt-0 flex justify-between md:justify-end">
                                <a href="#" class="gray-btn outline-btn btn-translate-z flex bg-[#0052fe] text-white text-xs font-bold py-2.5 px-6 rounded transition-all cursor-pointer  text-xs font-semibold text-center justify-center items-center rounded py-4 px-2 w-fit mr-3"><span class="flex items-center"><svg class="mr-2 h-2.5 w-2.5 float-left" width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.32348 9.02425C5.08917 9.25857 4.70927 9.25857 4.47496 9.02425L0.874955 5.42425C0.64064 5.18994 0.64064 4.81004 0.874955 4.57572L4.47496 0.975724C4.70927 0.741409 5.08917 0.741409 5.32348 0.975724C5.5578 1.21004 5.5578 1.58994 5.32348 1.82425L2.74775 4.39999H9.69922C10.0306 4.39999 10.2992 4.66862 10.2992 4.99999C10.2992 5.33136 10.0306 5.59999 9.69922 5.59999L2.74775 5.59999L5.32348 8.17572C5.5578 8.41004 5.5578 8.78994 5.32348 9.02425Z" fill="white"></path>
</svg> Go Back </span></a>
    
                                <a href="#" class="next-btn outline-btn btn-translate-z flex bg-[#112954] text-white text-xs font-bold py-2.5 px-6 rounded transition-all cursor-pointer text-xs font-semibold text-center justify-center items-center rounded py-4 px-2 w-28"><span class="flex items-center"> Next <svg class="ml-2 h-2.5 w-2.5 float-right" width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.67496 0.975724C5.90927 0.741409 6.28917 0.741409 6.52348 0.975724L10.1235 4.57572C10.3578 4.81004 10.3578 5.18994 10.1235 5.42425L6.52348 9.02425C6.28917 9.25857 5.90927 9.25857 5.67496 9.02425C5.44064 8.78994 5.44064 8.41004 5.67496 8.17572L8.25069 5.59999L1.29922 5.59999C0.967848 5.59999 0.699219 5.33136 0.699219 4.99999C0.699219 4.66862 0.967849 4.39999 1.29922 4.39999H8.25069L5.67496 1.82425C5.44064 1.58994 5.44064 1.21004 5.67496 0.975724Z" fill="white"></path>
</svg></span></a>
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
