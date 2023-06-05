<div>
    <section class="hero bg-white pt-20 p-2 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- Calculations Start -->
            <div class="services-area w-full py-8">

                <div class="flex justify-center">
                    <div class="w-full md:w-[640px]">
                        <h1 class="text-[#2B313B] text-2xl text-center font-semibold mb-3">Fill in your details</h1>
                        <div class="p-5 rounded-2xl tick-input bg-white grid grid-cols-1 justify-items-start">
                            <form action="" class="w-full md:w-[290px]">
                                <div>
                                    <div class="mb-3">
                                        <label for="" class="block mb-2 text-sm font-normal text-[#2B313B]">When were you born?</label>                                        

                                        <div class="flex check-green">
                                            <input type="text" id="b-date" 
                                            class="rounded-none rounded-l-lg bg-white border border-r-0 border-[#F5F8FF] text-[#2B313B] font-normal text-sm focus:ring-none focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-2.5"
                                            placeholder="">
                                            <div
                                                class="inline-flex items-center px-3 bg-white text-[#2B313B] font-semibold text-sm focus:ring-none border-l-0 border-[#F5F8FF] border rounded-r-lg">
                                                <img src="{{asset('frontend/assets/img/green-tick.svg')}}" class="h-4 w-4" alt="icon">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="block mb-2 text-sm font-normal text-[#2B313B]">How many kilometers do you drive per year?</label>                                        

                                        <div class="t-select no-label">
                                            <select id="gender"
                                                class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="Petrol" selected>Up to 7,500</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="Diesel">Up to 9,500</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="Octan">Up to 15,500</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="block mb-2 text-sm font-normal text-[#2B313B]">Accumulated damage-free years </label>                                        

                                        <div class="flex check-green">
                                            <input type="text" 
                                            class="rounded-none rounded-l-lg bg-white border border-r-0 border-[#F5F8FF] text-[#2B313B] font-normal text-sm focus:ring-none focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-2.5"
                                            placeholder="">
                                            <div
                                                class="inline-flex items-center px-3 bg-white text-[#2B313B] font-semibold text-sm focus:ring-none border-l-0 border-[#F5F8FF] border rounded-r-lg">
                                                <img src="{{asset('/frontend/assets/img/green-tick.svg')}}" class="h-4 w-4" alt="icon">
                                            </div>
                                        </div>
                                    </div>
                                <div class="mb-3">
                                    <label for="" class="block mb-2 text-sm font-normal text-[#2B313B]">When do you want your insurance to start?</label>
                                    <div class="flex flex-row h-8 items-center justify-between">
                                        <div class="flex items-center mr-4 radio-cu">
                                            <input id="inline-radio" checked="" type="radio" value="" name="inline-radio-group" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                            <label for="inline-radio" class="ml-5 text-[#2B313B] font-normal text-sm">Today</label>
                                        </div>
                                        <div class="flex items-center radio-cu">
                                            <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2">
                                            <label for="inline-2-radio" class="ml-5 text-[#2B313B] font-normal text-sm">Soon</label>
                                        </div>
                                        <div class="flex items-center radio-cu">
                                            <input id="inline-3-radio" type="radio" value="" name="inline-radio-group" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2">
                                            <label for="inline-3-radio" class="ml-5 text-[#2B313B] font-normal text-sm">I don’t know yet</label>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>

                        <div class="bottom-part p-5 mt-3 md:mt-14 md:flex md:items-end md:flex-row md:justify-between">
                            
                                <div class="sm-info bg-[#F5F8FF] p-4 flex flex-col rounded-lg w-full h-auto md:w-64">
                                    <span class="flex justify-between"><h3 class="text-[#0052FE] font-semibold text-base">AC 3000</h3> <a href="#" class="font-normal text-[#0052FE] text-sm underline">Change</a></span>
                                    <span class="flex justify-between"><span class="text-[#2B313B] font-normal text-sm">Year</span> <span class="text-[#2B313B] text-sm font-semibold">February 1981</span></span>
                                </div>
                            <div class="button-area mt-14 md:mt-0 flex items-end justify-between md:justify-end">
                                <a href="#" class="gray-btn outline-btn btn-translate-z flex bg-[#0052fe] text-white text-sm font-bold py-2.5 px-6 rounded transition-all cursor-pointer  text-sm font-semibold text-center justify-center items-center rounded py-4 px-2 w-fit mr-3"><span class="flex items-center"><svg class="mr-2 h-2.5 w-2.5 float-left" width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.32348 9.02425C5.08917 9.25857 4.70927 9.25857 4.47496 9.02425L0.874955 5.42425C0.64064 5.18994 0.64064 4.81004 0.874955 4.57572L4.47496 0.975724C4.70927 0.741409 5.08917 0.741409 5.32348 0.975724C5.5578 1.21004 5.5578 1.58994 5.32348 1.82425L2.74775 4.39999H9.69922C10.0306 4.39999 10.2992 4.66862 10.2992 4.99999C10.2992 5.33136 10.0306 5.59999 9.69922 5.59999L2.74775 5.59999L5.32348 8.17572C5.5578 8.41004 5.5578 8.78994 5.32348 9.02425Z" fill="white"></path>
</svg> Go Back </span></a>
    
                                <a href="#" class="next-btn outline-btn btn-translate-z flex bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded transition-all cursor-pointer text-sm font-semibold text-center justify-center items-center rounded py-4 px-2 w-28"><span class="flex items-center"> Next <svg class="ml-2 h-2.5 w-2.5 float-right" width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.67496 0.975724C5.90927 0.741409 6.28917 0.741409 6.52348 0.975724L10.1235 4.57572C10.3578 4.81004 10.3578 5.18994 10.1235 5.42425L6.52348 9.02425C6.28917 9.25857 5.90927 9.25857 5.67496 9.02425C5.44064 8.78994 5.44064 8.41004 5.67496 8.17572L8.25069 5.59999L1.29922 5.59999C0.967848 5.59999 0.699219 5.33136 0.699219 4.99999C0.699219 4.66862 0.967849 4.39999 1.29922 4.39999H8.25069L5.67496 1.82425C5.44064 1.58994 5.44064 1.21004 5.67496 0.975724Z" fill="white"></path>
</svg></span>
</a>
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
