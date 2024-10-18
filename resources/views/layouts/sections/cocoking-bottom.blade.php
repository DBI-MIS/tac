<section
    class="w-full my-16 min-h-[50vh]  bg-cover bg-center flex items-center justify-between rounded-xl overflow-hidden"
    style="background-image: url({{ $cocoPages['cocoking_bottom']->img_page ? asset('storage/' . $cocoPages['cocoking_bottom']->img_page) : asset('/default-slide-2.webp') }})">

    <div
        class="grid grid-cols-1 lg:grid-cols-3 gap-2 content-center items-center lg:px-32 lg:py-14 md:px-16 md:py-12 p-6">

        <div class="col-span-2 ">
            <h1 class="text-3xl lg:text-5xl font-bold  tracking-wide leading-tight drop-shadow-md text-white ">
                {{ $cocoPages['cocoking_bottom']->title }}
            </h1>
            <p class="max-w-xl mt-4 text-md md:text-lg  text-white drop-shadow-md">
                {{ $cocoPages['cocoking_bottom']->description1 }}
            </p>

            <div class="mt-0 md:mt-10 w-full h-auto py-8 flex items-center justify-start gap-4 flex-wrap">

                <abbr title="FB: Team Asia Corporation">
                    <a href="https://www.facebook.com/teamasiacorporation" target="_blank" rel="noreferer">
                        <button
                            class="group transition-all duration-300 hover:-translate-y-2 border-white border rounded-md">
                            <x-icon-social-facebook class="text-white size-12" />
                        </button>
                    </a>
                </abbr>
                <abbr title="Insta:">
                    <a href="https://www.facebook.com/teamasiacorporation" target="_blank" rel="noreferer">
                        <button
                            class="group transition-all duration-300 hover:-translate-y-2 border-white border rounded-md">
                            <x-icon-social-instagram class="text-white size-12" />
                        </button>
                    </a>
                </abbr>
                <abbr title="linkedin: Team Asia Corporation ">
                    <a href="https://www.linkedin.com/in/team-asia-corporation-9a89b01a9/" target="_blank"
                        rel="noreferer">
                        <button
                            class="group transition-all duration-300 hover:-translate-y-2 border-white border rounded-md">
                            <x-icon-social-linkedin class="text-white size-12" />
                        </button>
                    </a>
                </abbr>
                <abbr title="Yotube: SUPERCOCO AVP 2017">
                    <a href="https://www.youtube.com/watch?v=OGR1DH_Y0nk" target="_blank" rel="noreferer">
                        <button
                            class="group transition-all duration-300 hover:-translate-y-2 border-white border rounded-md">
                            <x-icon-social-youtube class="text-white size-12" />
                        </button>
                    </a>
                </abbr>

            </div>
        </div>

        <div class="col-span-1">

            <div class="py-6 w-max mx-auto md:mx-0 animate-minimal-bounce">
                <div type="button"
                    class="group transition-all duration-200 hover:-translate-y-2 text-green-800 rounded-lg bg-gradient-to-r from-slate-200 via-gray-200 to-slate-400 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-slate-200 dark:focus:ring-slate-800 shadow-lg shadow-gray-500/50 dark:shadow-lg dark:shdow-green-800/80 px-8 py-6 text-center me-2 mb-2 flex flex-row items-center gap-1 cursor-pointer ">
                    <div
                        class="transition transform duration-500 ease-in-out flex flex-row group-hover:flex-col justify-start">
                        <span class="transition transform duration-500 ease-in-out text-xl md:text-3xl font-bold">Buy
                            Now!</span>
                        <span
                            class="transition transform duration-500 ease-in-out hidden group-hover:block text-sm">Select>>></span>
                    </div>


                    <a href="https://shopee.ph/tacsupercocovco" rel="noreferrer nofollow" target="_blank">
                        <button type="button"
                            class="group transition-all duration-200 hover:translate-y-1 rounded-full text-lg md:text-2xl font-bold">
                            <x-icon-shopee_color class="size-16" />
                        </button>
                    </a>

                    <a href="https://www.lazada.com.ph/shop/team-asia-corporation-tac" rel="noreferrer nofollow"
                        target="_blank">
                        <button type="button"
                            class="group transition-all duration-200 hover:translate-y-1 rounded-full  text-lg md:text-2xl font-bold">
                            <x-icon-lazada_color class="size-16" />
                        </button>
                    </a>

                </div>
            </div>

        </div>
    </div>

</section>
