@php
    $footerSql = 'select 
                a.footer_content,
                a.copyright_text,
                c.url as footer_logo
                from footer_settings a 
                left join files_related_morphs b on (b.related_id = a.id and b.field = "footer_logo")
                left join files c on c.id = b.file_id order by a.id ASC limit 1';
    $footerData = DB::select($footerSql);
@endphp

<footer class="p-4 md:p-12 bg-white sm:p-6">
    <div class="container mx-auto max-w-screen-xl">
        <div class="md:flex md:flex md:flex-row md:justify-between flex-none">
            <div class="mb-6 text-center md:text-left md:mb-0 md:basis-1/3 basis-full">
                <a href="#" class="flex justify-center md:justify-start items-center">
                    <img src="{{ env('STRAPI_URL') . $footerData[0]->footer_logo }}" class="mr-3 h-9" alt="FlowBite Logo" />
                </a>
                <p class="sm:space-y-6 py-2 sm:py-8 text-sm font-normal leading-5 text-[#2B313B] sm:pr-9">
                   {{ $footerData[0]->footer_content }}
                </p>
            </div>
            <div class="m-auto mb-6 md:mb-0 w-[80%] grid grid-cols-2 gap-2 sm:justify-between sm:flex sm:basis-1/2 md:basis-2/3 sm:flex-wrap basis-full">
                <div class="mb-6 md:mb-0">
                    <h2 class="mb-4 text-base font-semibold text-[#112954] ">General</h2>
                    <ul class="text-sm font-normal leading-5 text-[#2B313B]">
                        <li class="mb-4">
                            <a href="calculations" target="_blank" class="">Calculations</a>
                        </li>
                        <li class="mb-4">
                            <a href="/compares" target="_blank" class="">Compares</a>
                        </li>
                        <li class="mb-4">
                            <a href="/knowledge" target="_blank" class="">Knowledge</a>
                        </li>
                        <li class="mb-4">
                            <a href="/news" target="_blank" class="">News</a>
                        </li>
                    </ul>
                </div>
                <div class="mb-6 md:mb-0">
                    <h2 class="mb-6 text-base font-semibold text-[#112954] ">Insurance</h2>
                    <ul class="text-sm font-normal leading-5 text-[#2B313B]">
                        <li class="mb-4">
                            <a href="/car-insurance" class=" ">Car insurance</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="">Health insurance</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="">Home insurance</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="">Travel insurance</a>
                        </li>
                    </ul>
                </div>
                <div class="mb-6 md:mb-0">
                    <h2 class="mb-6 text-base font-semibold text-[#112954] ">Energy</h2>
                    <ul class="text-sm font-normal leading-5 text-[#2B313B]">
                        <li class="mb-4">
                            <a href="#" class="">Energy</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="">Telecom</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="">Mortgage</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="">Borrow money</a>
                        </li>
                    </ul>
                </div>
                <div class="mb-6 md:mb-0">
                    <h2 class="mb-6 text-base font-semibold text-[#112954] ">Community</h2>
                    <ul class="text-sm font-normal leading-5 text-[#2B313B]">
                        <li class="mb-4 flex">

                            <span class="flex relative">

                                @php
                                    $facebookUrl = DB::table('social_links')
                                    ->where('platform','=','facebook')
                                    ->orderBy('id','DESC')
                                    ->limit(1)
                                    ->get();

                                    $twitterUrl = DB::table('social_links')
                                    ->where('platform','=','twitter')
                                    ->orderBy('id','DESC')
                                    ->limit(1)
                                    ->get();

                                    $youtube = DB::table('social_links')
                                    ->where('platform','=','youtube')
                                    ->orderBy('id','DESC')
                                    ->limit(1)
                                    ->get();

                                    $instagram = DB::table('social_links')
                                    ->where('platform','=','instagram')
                                    ->orderBy('id','DESC')
                                    ->limit(1)
                                    ->get();
                                @endphp

                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                    class=" h-5 w-5" src="{{ asset('frontend/assets/img/social/facebook.svg') }}"
                                    alt=""> </span><a href="{{$facebookUrl[0]->links}}" target="_blank" class=" ml-2">Facebook</a>

                        </li>
                        <li class="mb-4  flex">
                            <img class="blob infinity rounded-full h-5 w-5"
                                src="{{ asset('frontend/assets/img/social/twitter.svg') }}" alt=""> <a
                                href="{{$twitterUrl[0]->links}}" target="_blank" class=" ml-2">Twitter</a>
                        </li>
                        
                        <li class="mb-4  flex">
                            <img class="blob infinity rounded-full h-5 w-5"
                                src="{{ asset('frontend/assets/img/social/youtube.svg') }}" alt=""> <a
                                href="{{$youtube[0]->links}}" target="_blanks" class=" ml-2">YouTube</a>
                        </li>
                        <li class="mb-4  flex">
                            <span class="flex relative">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                    class="h-5 w-5" src="{{ asset('frontend/assets/img/social/instagram.svg') }}"
                                    alt=""></span> <a href="{{$instagram[0]->links}}" target="_blank" class=" ml-2">Instagram</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <div class="flex flex-col md:flex-row gap-6 md:gap-0 justify-center items-center sm:justify-between">
            <span class="font-bold text-xs text-[#1E3062] sm:text-center">
                {{$footerData[0]->copyright_text}}
            </span>
            <span class="flex items-center gap-8">
                <img src="/images/image13.png" alt="">
                <img src="/images/image12.png" alt="">
            </span>
        </div>
    </div>
</footer>
<!-- footer- end -->
<!-- go to top -->
<div class="progress-bar" />
<button class="back-to-top hide">
    <svg xmlns="http://www.w3.org/2000/svg" class="back-to-top-icon" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
    </svg>
</button>
<div class="progress-bar" />
<!-- go to top end -->

<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
<script src="{{asset('/frontend/assets/js/jquery/jquery.min.js')}}"></script>
<script src="https://unpkg.com/flowbite@1.6.1/dist/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="{{asset('/frontend/assets/js/parsley.min.js')}}"></script>


{{-- <script>
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
                return this.$store.accordion.tab === this.idx ? 'rotate-0' : '';
            },
            handleToggle() {
                return this.$store.accordion.tab === this.idx ?
                    `max-height: ${this.$refs.tab.scrollHeight}px` : '';
            }
        }));
    })
</script> --}}
