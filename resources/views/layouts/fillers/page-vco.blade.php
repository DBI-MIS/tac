<div class="max-w-full w-full py-6 dark:text-gray-100 ">
    @if (isset($mainPages['filler_page_vco']))
        <div class="flex flex-col gap-6">

            <div class="relative min-h-[65svh] sm:min-h-[40svh] md:min-h-[35svh] lg:min-h-[30svh] w-full max-w-full rounded-xl overflow-hidden"
                style="background-image: url({{ $mainPages['filler_page_vco']->img ? asset('storage/' . $mainPages['filler_page_vco']->img) : asset('/default-slide-2.webp') }})">

              

                    <div
                        class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col justify-center gap-2 bg-gradient-to-t from-slate-900/85 to-transparent md:px-16 md:py-12 p-6">

                        <h2 class="w-full text-balance text-3xl text-white">{{ $mainPages['filler_page_vco']->title }}
                        </h2>
                        <p class="py-1 text-slate-100">{{ $mainPages['filler_page_vco']->desc1 }}</p>
                        <p class="py-1 text-slate-100">{{ $mainPages['filler_page_vco']->desc2 }}</p>
                    </div>
                

            </div>

        </div>
    @endif
</div>
