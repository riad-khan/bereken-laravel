<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- Calculations Start -->
            <div class="services-area w-full py-8">

                <div class="flex justify-center">
                    <div class="w-full md:w-[640px]">
                        <h1 class="text-[#2B313B] text-2xl text-center font-semibold mb-3">Select your car</h1>
                        <div class="p-5 rounded-2xl bg-white">
                            <form action="">
                                <div class="grid gap-2 grid-cols-1 md:grid-cols-2 md:gap-4">
                                    <div class="mb-3">
                                        <label for="" class="block mb-2 text-sm font-normal text-[#2B313B]">License plate number</label>
                                        
                                        <div class="flex">
                                            <span 
                                                class="inline-flex items-center px-2 bg-[#294394] text-white font-semibold text-sm border-white border focus:ring-none rounded-l-lg">
                                                <img src="{{asset('/frontend/assets/img/eur.svg')}}" alt="icon" class="h-6 w-6">
                                            </span>
                                            <input type="text"                                             class="rounded-none rounded-r-lg bg-[#EFBC21] border-white text-[#2B313B] font-semibold  ml-[-1px] text-sm border focus:ring-none focus:outline-none  flex-1 min-w-0 w-full p-2.5"
                                                placeholder="">
                                        </div>
                                    </div>
                                <div class="mb-3">
                                    <label for="" class="block mb-2 text-sm font-normal text-[#2B313B]">Construction month</label>
                                    
                                    <div class="t-select no-label">
                                            <select id="gender"
                                                class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="January" selected>January</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="February">February</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="March">March</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="April">April</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="May">May</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="June">June</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="July">July</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="August">August</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="September">September</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="October">October</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="November">November</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="December">December</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="mb-3">                                    
                                    <label for="" class="block mb-2 text-sm font-normal text-[#2B313B]">Model</label>
                                    
                                    <div class="t-select no-label">
                                            <select id="gender"
                                                class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="January" selected>AC 3000</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="February">AC 4000</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="March">AC 5000</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="block mb-2 text-sm font-normal text-[#2B313B]">Fuel</label>
                                    
                                    <div class="t-select no-label">
                                            <select id="gender"
                                                class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="Petrol" selected>Petrol</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="Diesel">Diesel</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="Octan">Octan</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="block mb-2 text-sm font-normal text-[#2B313B]">Transmission</label>
                                    <div class="flex flex-row items-center justify-between">
                                        <div class="flex justify-center">
                                            <input id="inline-radio" checked type="radio" value="" name="inline-radio-group"
                                                class="hidden text-blue-600 bg-gray-100 border-gray-300 focus:ring-none focus:none radio-btn">
                                            <label for="inline-radio"  class="outline-btn btn-translate-z flex justify-center w-28 bg-[#0052fe] text-white text-base font-bold py-2.5 px-6 rounded transition-all cursor-pointer">Manual</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="inline-2-radio" type="radio" value="" name="inline-radio-group"
                                                class="hidden text-blue-600 bg-gray-100 border-gray-300 focus:ring-none focus:none radio-btn">
                                                <label for="inline-2-radio" class="outline-btn btn-translate-z flex w-fit bg-[#0052fe] text-white text-base font-bold py-2.5 px-6 rounded transition-all cursor-pointer">Automation</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="block mb-2 text-sm font-normal text-[#2B313B]">Year</label>
                                    
                                    <div class="t-select no-label">
                                            <select id="gender"
                                                class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="Petrol" selected>1981</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="Diesel">1981</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-sm rounded-lg font-base" value="Octan">1981</option>
                                            </select>
                                        </div>
                                 </div>
                              </div>
                                <table class="hidden md:table divide-right table-auto text-left w-full mt-6">
                                    <thead>
                                      <tr>
                                        <th class="pb-2 border-b border-[#0052FE] text-[#2B313B] font-normal text-sm">Type</th>
                                        <th class="border-b border-[#0052FE] text-[#2B313B] font-normal text-sm">Doors</th>
                                        <th class="border-b border-[#0052FE] text-[#2B313B] font-normal text-sm">Execution</th>
                                        <th class="border-b border-[#0052FE] text-[#2B313B] font-normal text-sm">Ability</th>
                                        <th class="border-b border-[#0052FE] text-[#2B313B] font-normal text-sm">Weight</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="py-2">
                                            <div class="flex items-center mr-4 radio-cu">
                                                <input id="inline-radio-a" checked type="radio" value="" name="inline-radio-group-b" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                                <label for="inline-radio-a" class="ml-5 text-[#2B313B] font-normal text-sm">3.0 United States</label>
                                            </div>
                                        </td>
                                        <td class="text-[#2B313B] font-normal text-sm">2-doors</td>
                                        <td class="text-[#2B313B] font-normal text-sm">Coupe</td>
                                        <td class="text-[#2B313B] font-normal text-sm">101 KW</td>
                                        <td class="text-[#2B313B] font-normal text-sm">860 kg</td>
                                      </tr>
                                      <tr>
                                        <td class="py-2">
                                            <div class="flex items-center mr-4 radio-cu">
                                                <input id="inline-radio-2" type="radio" value="" name="inline-radio-group-b" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                                <label for="inline-radio-2" class="ml-5 text-[#2B313B] font-normal text-sm">4.0 Nether</label>
                                            </div>
                                        </td>
                                        <td class="text-[#2B313B] font-normal text-sm">4-doors</td>
                                        <td class="text-[#2B313B] font-normal text-sm">Coupe</td>
                                        <td class="text-[#2B313B] font-normal text-sm">105 KW</td>
                                        <td class="text-[#2B313B] font-normal text-sm">990 kg</td>
                                      </tr>
                                    </tbody>
                                  </table>
                             
                            <div class="block md:hidden">
                            <div class="pb-2 border-b border-[#0052FE] text-[#2B313B] font-normal text-sm  mb-4">Type</div>
                            
                            <!-- the button holds the title of the accordion-->
                            
                                    <span class="course-accordion"><div class="flex items-center mr-4 radio-cu">
                                        <input id="inline-radio-3" checked type="radio" value="" name="inline-radio-group-c" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                        <label for="inline-radio-3" class="ml-5 z-10  text-[#2B313B] font-normal text-sm">3.0 United States</label>
                                        </div></span>
                                 
                                        <!-- This div holds the content to be displayed-->
                                    <div class="course-panel">
                                        <table>
                                            <tbody>
                                                <tr class="py-2">
                                                    <td class="py-2 font-semibold pr-8">Doors</td>
                                                    <td>2-doors</td>
                                                </tr>
                                                <tr class="py-2">
                                                    <td class="py-2 font-semibold pr-8">Execution</td>
                                                    <td>Coupe</td>
                                                </tr>
                                                <tr class="py-2">
                                                    <td class="py-2 font-semibold pr-8">Ability</td>
                                                    <td>101 KW</td>
                                                </tr>
                                                <tr class="py-2">
                                                    <td class="py-2 font-semibold pr-8">Weight</td>
                                                    <td>860 kg</td>
                                                </tr>
                                            </tbody>
                                       </table>
                                    </div>


                    <span class="course-accordion">
                                <div class="flex items-center mr-4 radio-cu">
                                                <input id="inline-radio-4" type="radio" value="" name="inline-radio-group-c" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                                <label for="inline-radio-4" class="ml-5 z-10 text-[#2B313B] font-normal text-sm">4.0 Nether</label>
                                            </div>
                    </span>
                        <div class="course-panel">
                        <table>
                                            <tbody>
                                                <tr class="py-2">
                                                    <td class="py-2 font-semibold pr-8">Doors</td>
                                                    <td>4-doors</td>
                                                </tr>
                                                <tr class="py-2">
                                                    <td class="py-2 font-semibold pr-8">Execution</td>
                                                    <td>Coupe</td>
                                                </tr>
                                                <tr class="py-2">
                                                    <td class="py-2 font-semibold pr-8">Ability</td>
                                                    <td>105 KW</td>
                                                </tr>
                                                <tr class="py-2">
                                                    <td class="py-2 font-semibold pr-8">Weight</td>
                                                    <td>990 kg</td>
                                                </tr>
                                            </tbody>
                                       </table>
                    </div>



                            <!-- <ul>
                                <li class="" x-data="accordion(1)">
                                <h4  @click="handleClick()" class="flex items-center justify-between w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer">
                                    <span>                                            
                                        <div class="flex items-center mr-4 radio-cu">
                                                <input id="inline-radio-a" checked type="radio" value="" name="inline-radio-group-b" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                                <label for="inline-radio-a" class="ml-5 text-[#2B313B] font-normal text-sm">3.0 United States</label>
                                            </div>
                                    </span>
                                    <span :class="handleRotate()" class="icon-s">
                                        <div class="circle-plus closed">
                                            <div class="circle">
                                                <div class="horizontal"></div>
                                                <div class="vertical"></div>
                                            </div>
                                        </div>
                                        <div class="circle-plus-two closed">
                                            <div class="circle">
                                                <div class="horizontal"></div>
                                                <div class="vertical"></div>
                                            </div>
                                        </div>
                                    </span>
                                </h4>
                                  <div x-ref="tab"  :style="handleToggle()" class="font-normal text-xs border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all" >
                                    <p class="py-5 font-normal text-xs text-[#6C7A93]">
                                       <table>
                                            <tbody>
                                                <tr class="py-2">
                                                    <td class="py-2">Doors</td>
                                                    <td>2-doors</td>
                                                </tr>
                                                <tr class="py-2">
                                                    <td class="py-2">Execution</td>
                                                    <td>Coupe</td>
                                                </tr>
                                                <tr class="py-2">
                                                    <td class="py-2">Ability</td>
                                                    <td>101 KW</td>
                                                </tr>
                                                <tr class="py-2">
                                                    <td class="py-2">Weight</td>
                                                    <td>860 kg</td>
                                                </tr>
                                            </tbody>
                                       </table>
                                    </p>
                                  </div>
                                </li>
                                <li class="" x-data="accordion(2)">
                                  <h4
                                    @click="handleClick()"
                                    class="flex items-center justify-between w-full py-5 font-semibold text-sm text-left text-[#2B313B] border-b border-[#F5F8FF] cursor-pointer"
                                  >
                                    <span>
                                            <div class="flex items-center mr-4 radio-cu">
                                                <input id="inline-radio-2" type="radio" value="" name="inline-radio-group-b" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                                <label for="inline-radio-2" class="ml-5 text-[#2B313B] font-normal text-sm">4.0 Nether</label>
                                            </div>
                                    </span>
                                    <span :class="handleRotate()" class="icon-s">
                                        <div class="circle-plus closed">
                                            <div class="circle">
                                                <div class="horizontal"></div>
                                                <div class="vertical"></div>
                                            </div>
                                        </div>
                                        <div class="circle-plus-two closed">
                                            <div class="circle">
                                                <div class="horizontal"></div>
                                                <div class="vertical"></div>
                                            </div>
                                        </div>
                                    </span>
                                    <!-- <svg :class="handleRotate()" class="fill-current text-[#2B313B] h-7 w-7 transform transition-transform duration-500 rotate-90" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                    </svg> -->
                               <!--   </h4>
                                  <div
                                    x-ref="tab"
                                    :style="handleToggle()"
                                    class="font-normal text-xs border-b border-[#F5F8FF] overflow-hidden max-h-0 duration-500 transition-all"
                                  >
                                    <p class="pt-5 mb-2 font-normal text-xs text-[#6C7A93]">
                                    <table>
                                            <tbody>
                                                <tr>
                                                    <td>Doors</td>
                                                    <td>2-doors</td>
                                                </tr>
                                                <tr>
                                                    <td>Execution</td>
                                                    <td>Coupe</td>
                                                </tr>
                                                <tr>
                                                    <td>Ability</td>
                                                    <td>101 KW</td>
                                                </tr>
                                                <tr>
                                                    <td>Weight</td>
                                                    <td>860 kg</td>
                                                </tr>
                                            </tbody>
                                       </table>
                                    </p>
                                  </div>
                                </li>
                                </ul> -->
                                </div>
                                </form>
                        </div>
                        <div class=" p-5 md:p-0 flex justify-between md:justify-end mt-14">
                            <a href="#" class="gray-btn outline-btn btn-translate-z flex bg-[#0052fe] text-white text-base font-bold py-2.5 px-6 rounded transition-all cursor-pointer  text-sm font-semibold text-center justify-center items-center rounded py-4 px-2 my-6 w-fit mr-3"><span class="flex items-center">
                            <svg  class="mr-2 h-2.5 w-2.5 float-left" width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.32348 9.02425C5.08917 9.25857 4.70927 9.25857 4.47496 9.02425L0.874955 5.42425C0.64064 5.18994 0.64064 4.81004 0.874955 4.57572L4.47496 0.975724C4.70927 0.741409 5.08917 0.741409 5.32348 0.975724C5.5578 1.21004 5.5578 1.58994 5.32348 1.82425L2.74775 4.39999H9.69922C10.0306 4.39999 10.2992 4.66862 10.2992 4.99999C10.2992 5.33136 10.0306 5.59999 9.69922 5.59999L2.74775 5.59999L5.32348 8.17572C5.5578 8.41004 5.5578 8.78994 5.32348 9.02425Z" fill="white"/>
</svg>
                            <!-- <img src="{{asset('/frontend/assets/img/arrow-white.svg')}}" class="mr-2 h-2.5 w-2.5 rotate-180 float-left" alt="icon">  -->
                            Go Back 
                        </span></a>

                            <a href="{{url('/car-insurance/your-details')}}" class="next-btn outline-btn btn-translate-z flex bg-[#112954] text-white text-sm font-bold py-2.5 px-6 rounded transition-all cursor-pointer text-base font-semibold text-center justify-center items-center rounded py-4 px-2 my-6 w-28"><span class="flex items-center"> Next <svg class="ml-2 h-2.5 w-2.5 float-right" width="11" height="10" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.67496 0.975724C5.90927 0.741409 6.28917 0.741409 6.52348 0.975724L10.1235 4.57572C10.3578 4.81004 10.3578 5.18994 10.1235 5.42425L6.52348 9.02425C6.28917 9.25857 5.90927 9.25857 5.67496 9.02425C5.44064 8.78994 5.44064 8.41004 5.67496 8.17572L8.25069 5.59999L1.29922 5.59999C0.967848 5.59999 0.699219 5.33136 0.699219 4.99999C0.699219 4.66862 0.967849 4.39999 1.29922 4.39999H8.25069L5.67496 1.82425C5.44064 1.58994 5.44064 1.21004 5.67496 0.975724Z" fill="white"/>
</svg>

<!-- <img src="{{asset('/frontend/assets/img/arrow-white.svg')}}" class="ml-2 h-2.5 w-2.5 float-right" alt="icon"> -->
</span></a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Calculations End -->

        </div>
        <!-- container end -->
    </section>
</div>
<script>
	//this is the button
	var acc = document.getElementsByClassName("course-accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		//when one of the buttons are clicked run this function
	  acc[i].onclick = function() {
		//variables
		var panel = this.nextElementSibling;
		var coursePanel = document.getElementsByClassName("course-panel");
		var courseAccordion = document.getElementsByClassName("course-accordion");
		var courseAccordionActive = document.getElementsByClassName("course-accordion active");

		/*if pannel is already open - minimize*/
		if (panel.style.maxHeight){
			//minifies current pannel if already open
			panel.style.maxHeight = null;
			//removes the 'active' class as toggle didnt work on browsers minus chrome
			this.classList.remove("active");
		} else { //pannel isnt open...
			//goes through the buttons and removes the 'active' css (+ and -)
			for (var ii = 0; ii < courseAccordionActive.length; ii++) {
				courseAccordionActive[ii].classList.remove("active");
			}
			//Goes through and removes 'activ' from the css, also minifies any 'panels' that might be open
			for (var iii = 0; iii < coursePanel.length; iii++) {
			  this.classList.remove("active");
			  coursePanel[iii].style.maxHeight = null;
			}
		  //opens the specified pannel
		  panel.style.maxHeight = panel.scrollHeight + "px";
		  //adds the 'active' addition to the css.
		  this.classList.add("active");
		} 
	  }//closing to the acc onclick function
	}//closing to the for loop.


    </script>