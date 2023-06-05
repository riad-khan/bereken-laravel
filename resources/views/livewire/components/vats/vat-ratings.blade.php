<div>
    <div class="faq mb-3 py-2 border rounded-t-2xl border-[#F5F8FF] ">
        <div
            class="mx-3 pt-2 pb-3 border-b border-[#F5F8FF] mx-auto md:text-base lg:text-2xl text-2xl font-semibold cursor-pointer">
            Rate</div>



            <div
                class="px-3 items-center font-semibold text- bg-white transition-all opacity-100 hover:opacity-90 py-3">
                <a class="cursor-pointer"  data-modal-target="authentication-modal" data-modal-toggle="authentication-modal">
                    Rate this calculation
                </a>

                <div class="rating-star flex flex-row items-center">

                    @php
                    $star = round($avgRating[0]->rate);
                    $rates = '';
                    for ($i = 1; $i <= 5; $i++) {
                        if ($i <= $star) {
                            $rates .= '<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fourth star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>';
                        } else {
                            $rates .= '<svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Fifth star</title>
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>';
                        }
                    }
                @endphp

               
                    <div class="flex items-center">
                        {!! html_entity_decode($rates) !!}
                    </div>
                    <p class="ml-2 text-2xl font-bold text-[#2B313B] mr-3">{{round($avgRating[0]->rate)}} </p>
                    <a href="#" class="text-xs font-nomrmal text-[#2B313B] hover:no-underlinev">
                        {{$reviewCount[0]->total}}
                        Reviews</a>
                </div>
            </div>

            <div class="btn-area mt-3 flex justify-center">
                <a href="#"
                    class="btn-translate-z bg-[#112954] opacity-100 hover:opacity-90 transition text-white flex text-xs font-semibold text-center justify-center items-center rounded py-4 px-2 w-full transition-all ">Need
                    some help?</a>
            </div>

    </div>

    {{-- Modal Code starts --}}


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
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Rate Bmi
                        calculator
                    </h3>
                    <form id="rate_form" data-parsley-validate="">
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
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                Message</label>
                            <textarea name="message" id="message"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required></textarea>
                        </div>
                        <div>
                            <div class="mt-3 mb-3">
                                <label for="rate"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    Ratings</label>
                                <div class="flex">
                                    {!! html_entity_decode($stars) !!}
                                </div>

                                <div id="response" class="mt-2 mb-2 text-red-500">

                                </div>

                            </div>
                        </div>

                        <button id="btn"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
                            your Review</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    {{-- Modal ends --}}
    <script src="https://unpkg.com/flowbite@1.6.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{asset('/frontend/assets/js/parsley.min.js')}}"></script>

    <script>
        let star;

        function test(value) {
            let element = document.querySelectorAll('.modal-star');
            star = value;
            for (let x = 1; x <= value; x++) {
                element[x - 1].classList.remove("text-gray-300");
                element[x - 1].classList.add("text-yellow-400");
            }
        }

        document.getElementById('btn').addEventListener('click', function(event) {

            event.preventDefault();
            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let message = document.getElementById('message').value;
            let ratings = star;
            let cal_id = 2;

            $('#rate_form').parsley().validate();
            axios.get('https://api.ipify.org?format=json')
                .then((response) => {
                    const formData = {
                        name: name,
                        email: email,
                        message: message,
                        rating: ratings,
                        cal_id: cal_id,
                        user_ip: response.data.ip,
                    }
                    

                    if ($('#rate_form').parsley().isValid()) {
                        axios.post('/api/calculator-ratings', formData)
                            .then((response) => {
                                document.getElementById('response').innerHTML = response.data
                            })
                    }


                })


        })
    </script>
</div>
