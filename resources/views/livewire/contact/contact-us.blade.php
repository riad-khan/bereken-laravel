@php
    $seo_data = DB::table('seo_data_tables')->where('page','=','contact us')->get();
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
    <style>
        .input-select .radio-cu label {
            width: 100%;text-align: left;
        }

        .input-select .radio-cu label::before {
            right: 18px;
            left: auto;
        }

        .input-select .radio-cu label::after {
            right: 20px;
            left: auto;
        }
    </style>
    <section class="content-area">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex p-6 flex-col items-center ">
                <div class="content w-full text-center p-6 md:p-8 sm:text-left flex-none sm:flex sm:justify-center sm:items-center">
            <!-- container start -->
                    <div class="main-area w-full">
                        
            <div class="section-title text-center ">
                
                <h1 class="text-[24px] font-semibold mb-4 p-5 text-[#2B313B] sm:pb-6  sm:pt-4">If your question remains unanswered within our frequently asked questions, please feel free to contact us via the contact form.</h1>
            </div>
                        <div class="main-inner w-full flex p-5">
                            <form class="w-full" id="contact_form" data-parsley-validate="" method="post" action="{{url('/send-contact-email')}}">
                                @csrf
                                <!-- form start -->
                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                    <div class="input-select">
                                        <span class="flex  justify-between">
                                            <label for="gender" class="block mb-2 text-sm font-semibold text-[#2B313B]">Salutation</label>
                                        </span>
                                        <div class="flex flex-row h-10 items-center justify-between">
                                            <div class="flex basis-1/2 items-center mr-4 radio-cu single-field-wrapper">
                                                <input id="inline-radio" checked type="radio" value="lord" name="salutation"
                                                    class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                                    <label for="inline-radio" onclick="selectBorder(this)" class="active-border rounded-md bg-white border border-[#a4bce6] text-[#2B313B] font-normal text-xs block flex-1 min-w-0 w-full p-3">Lord</label>
                                            </div>
                                            <div class="flex basis-1/2 items-center radio-cu single-field-wrapper">
                                                <input id="inline-2-radio" type="radio" value="mrs" name="salutation"
                                                    class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2">
                                                    <label for="inline-2-radio" onclick="selectBorder(this)"
                                                        class="rounded-md bg-white border border-[#a4bce6] text-[#2B313B] font-normal text-xs block flex-1 min-w-0 w-full p-3">Mrs</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">  
                                        <span class="flex justify-between">
                                        <label for="email" class="block mb-2  text-sm font-semibold text-[#2B313B]">Email Address</label>
                                        </span>
                                        <div class="flex single-field-wrapper">
                                            <input type="email" id="email"name="email"
                                                class="rounded-md bg-white border border-[#a4bce6] text-[#2B313B] font-normal text-xs focus:ring-[#3b82f6] focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-3"
                                                placeholder="Email Address" data-parsley-errors-container="#email_error" data-parsley-type='email' required>
                                        </div>

                                        <span id="email_error"></span>
                                    </div>
                                    <div><span class="flex justify-between">
                                        <label for="Name"
                                            class="block mb-2 text-sm font-semibold text-[#2B313B]">Name</label>
                                        </span>
                                        <div class="flex single-field-wrapper">
                                            <input type="text" id="Name"
                                                class="rounded-md bg-white border border-[#a4bce6] text-[#2B313B] font-normal text-xs focus:ring-[#3b82f6] focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-3"
                                                placeholder="Name" data-parsley-errors-container="#name_error" name="name" data-parsley-type='text' required>
                                        </div>
                                        <span id="name_error"></span>
                                    </div>
                                    <div> 
                                        <span class="flex justify-between">
                                        <label for="Company"
                                            class="block mb-2  text-sm font-semibold text-[#2B313B]">Company</label>
                                        </span>
                                        <div class="flex single-field-wrapper">
                                            <input type="text" id="Company"
                                                class="rounded-md bg-white border border-[#a4bce6] text-[#2B313B] font-normal text-xs focus:ring-[#3b82f6] focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-3"
                                                placeholder="Company" data-parsley-errors-container="#company_error" name="company" data-parsley-type='email' required>
                                        </div>
                                        <span id="company_error"></span>
                                    </div>
                                </div>
                                <div class="grid gap-2 mb-6 grid-cols-1">                                    
                                    <span class="flex">
                                        <label for="Question"
                                            class="block mb-2 text-sm font-semibold text-[#2B313B]">Question</label>
                                        </span>
                                    <div class="flex single-field-wrapper">
                                        <textarea name="question" id="Question" cols="30" data-parsley-errors-container="#qustion_error"  data-parsley-type='text' name="qustion" rows="10" placeholder="Type your questions" class="rounded-md bg-white border border-[#a4bce6] text-[#2B313B] font-normal text-xs focus:ring-[#3b82f6] focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-3" required></textarea>
                                    </div>
                                    <span id="qustion_error"></span>
                                </div>
                                
                                <div class="flex items-center justify-end">
                                    <button type="submit" class="outline-btn btn-translate-z flex justify-center h-auto w-full md:w-fit bg-[#0052FE] opacity-100 hover:opacity-90 transition text-white text-sm font-bold py-2.5 px-6 rounded-md transition-all">Send Message</a>
                                </div>
                            </form> <!-- form end -->
                        </div> <!-- main-inner-area end -->
                    </div>
                </div>
            </div>
        </div><!-- container end -->
    </section><script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" ></script>
<script>
    function selectBorder(ele){
    jQuery(ele).parent().parent().find("label.active-border").removeClass("active-border");
    jQuery(ele).addClass("active-border");
}

   
</script>

    <script>
        $('#contact_form').parsley();
    </script>
</div>
