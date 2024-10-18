<div class="flex flex-col">
    <div class="w-full rounded-b-xl overflow-hidden">
        <img src="{{ asset('juv.webp') }}" alt="JUV Product Collage" class="w-full h-auto">
    </div>

    <div class="flex flex-row relative w-full ">

        <button id="scrollProductLeft"
            class="absolute left-1 top-[25%] transform -translate-y-1/2 z-10 bg-green-600 text-white px-3 py-2 rounded-md hover:bg-green-800 focus:outline-none max-xl:block hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

        </button>

        <!-- Right Arrow -->
        <button id="scrollProductRight"
            class="absolute right-1 top-[25%] transform -translate-y-1/2 z-10 bg-green-600 text-white px-3 py-2 rounded-md hover:bg-green-800 focus:outline-none max-xl:block hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>

        </button>
        
        <div id="productContainer"
            class="w-full max-w-full overflow-x-scroll custom-scrollbar scroll-smooth flex flex-row mt-10 gap-4 justify-between">
            <div class=" w-full flex flex-row gap-4 justify-between">
                @foreach ($featuredJuvs as $featuredjuv)
                <x-page.featured-juv :featuredjuv="$featuredjuv" />
                @endforeach
                <div
                    class="rounded-xl border border-opacity-10  bg-white hover:bg-gray-100 border-red-800 cursor-pointer group hover:shadow-lg shadow-sm px-3 flex flex-col py-2 h-auto justify-center w-max min-w-max">
                    <div class="text-balance flex flex-col items-center mb-2" wire:navigate
                        href="{{ route('organicproducts.index') }}?organiccategory=juv">
                        <span class="text-lg font-bold">View All</span>
                        <x-icon-chevrons-right class="size-10 animate-animate-right" />
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>

<script>
    document.getElementById('scrollProductLeft').addEventListener('click', function() {
        document.getElementById('productContainer').scrollBy({
            left: -500, // Adjust scroll amount
            behavior: 'smooth' // Smooth scrolling
        });
    });

    document.getElementById('scrollProductRight').addEventListener('click', function() {
        document.getElementById('productContainer').scrollBy({
            left: 500, // Adjust scroll amount
            behavior: 'smooth'
        });
    });
</script>