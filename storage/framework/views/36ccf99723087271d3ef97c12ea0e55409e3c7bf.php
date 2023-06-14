<div>
      <!-- contact-us - start -->
      <section class="bg-[#F5F8FF] w-full p-4 md:p-4">
        <div class="container mx-auto max-w-screen-xl">
            <div class="flex p-6 flex-col items-center ">
                <div class="content text-center sm:text-left flex-none sm:flex sm:justify-center sm:items-center">
                    <div class="img-box w-full sm:w-2/5 order-none mb-6 sm:m-0 sm:order-last">
                        <img src="<?php echo e(env('STRAPI_URL') . $details[0]->url); ?>" class="mx-auto w-full sm:mx-0" alt="image">
                    </div>
                    <div class="text-content text-center sm:w-3/5 sm:text-left">
                        <h5 class="text-[#112954] font-extrabold text-[30px] mb-[10px]">Nog niet begonnen met vergelijken?</h5>
                        <h6 class="text-lg font-normal mb-8 text-[#2B313B]"><?php echo e($details[0]->contact_section_content); ?></h6>
                        <a href="/contact-us"  class="flex w-fit m-auto md:m-0 bg-[#1E3062] opacity-100 hover:opacity-90 transition text-white text-base font-bold py-2.5 px-14 rounded-lg transition-all"><?php echo e($details[0]->button_text); ?></a>
                    </div>
                </div>
            </div>
        </div><!-- container end -->
    </section>
    <!-- contact-us - end -->
</div>
<?php /**PATH C:\Users\saleh\OneDrive\Desktop\Hassn Vai\Breken.nl\New-Design\bereken-laravel\resources\views/livewire/components/contact-us.blade.php ENDPATH**/ ?>