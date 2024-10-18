<x-app-layout title="JUV">
    @section('juv')
        <section
            class="w-full min-h-[50vh] bg-cover bg-center flex flex-col md:flex-row items-center justify-between py-6 lg:px-32 md:px-16 shadow-lg shadow-gray-200 dark:shadow-gray-800 ">
            <div class="max-w-3xl order-2 md:order-1 text-center md:text-left w-[80%]">
                <h2
                    class="text-balance text-4xl lg:text-7xl font-bold tracking-widest leading-tight drop-shadow-md text-green-800 dark:text-white">
                    {{ $juvPages['headline']->title }}
                </h2>
                <h2
                    class="text-balance text-4xl lg:text-5xl font-bold tracking-wide leading-tight drop-shadow-md text-green-800 dark:text-white">
                    {{ $juvPages['headline']->description1 }}
                </h2>
                <p class="mt-4 text-lg md:text-2xl text-green-800 drop-shadow-md dark:text-white">
                    {{ $juvPages['subheadline']->title }}
                </p>

                <div class="py-4 w-max mx-auto md:mx-0 animate-minimal-bounce">
                    <div type="button"
                        class="group transition-all duration-200 hover:-translate-y-2 text-white rounded-lg bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shdow-green-800/80 px-5 py-2.5 text-center flex flex-row items-center gap-1 cursor-pointer ">
                        <div
                            class="transition transform duration-500 ease-in-out flex flex-row group-hover:flex-col justify-start">
                            <span class="transition transform duration-500 ease-in-out text-lg md:text-2xl font-bold">Buy
                                Now!</span>
                            <span
                                class="transition transform duration-500 ease-in-out hidden group-hover:block text-xs">Select>>></span>
                        </div>


                        <a href="https://shopee.ph/tacsupercocovco" rel="noreferrer nofollow" target="_blank">
                            <button type="button"
                                class="group transition-all duration-200 hover:translate-y-1 text-white rounded-full text-lg md:text-2xl font-bold">
                                <x-icon-shopee class="text-white size-12" />
                            </button>
                        </a>

                        <a href="https://www.lazada.com.ph/shop/team-asia-corporation-tac" rel="noreferrer nofollow"
                            target="_blank">
                            <button type="button"
                                class="group transition-all duration-200 hover:translate-y-1 text-white rounded-full  text-lg md:text-2xl font-bold">
                                <x-icon-lazada class="text-white size-12" />
                            </button>
                        </a>

                    </div>
                </div>

            </div>
            <div class="order-1 md:order-2">
                <img src="{{ asset('JUV Products.webp') }}" alt="JUV Product" class="w-full max-w-xl rounded-lg">
            </div>
        </section>
    @endsection

    @include('layouts.sections.juv-body')
    @include('layouts.sections.juv-featured-product')
    @include('layouts.sections.juv-choose')
    @include('layouts.sections.juv-bottom')
    @include('layouts.sections.testimonial')
    @include('layouts.fillers.page-vco')
    @include('layouts.fillers.page-video')
    @include('layouts.fillers.page-factory')
    @include('layouts.sections.tac-contact')
</x-app-layout>
