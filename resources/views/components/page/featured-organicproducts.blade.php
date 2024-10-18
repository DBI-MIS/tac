@props(['organicproduct'])
<div
    class="rounded-xl border border-opacity-10  bg-white hover:bg-gray-100 border-red-800 
cursor-pointer group hover:shadow-lg shadow-sm px-6 flex flex-col justify-between mx-auto py-4 max-w-[250px] min-w-[250px] w-full m-1">

    <div class="text-balance block mb-2"
    wire:navigate href="{{ route('organicproducts.show', $organicproduct->slug) }}">

        <div class=" mx-auto w-auto group-hover:scale-105 transition-all ease-in-out duration-300">
            <img class="min-w-[200px]"
                src="{{ $organicproduct->product_img ? asset('storage/' . $organicproduct->product_img) : asset('/default-slide-1.webp') }}"
                alt="{{ $organicproduct->title }}"/>
        </div>

        <div class=" ">
            <h2 class="text-2xl font-bold text-balance dark:text-slate-800">{{ $organicproduct->title }}</h2>
        </div>

        
    </div>
    <div class="flex flex-row gap-1 justify-between items-center h-auto">
        <button
            class="text-nowrap text-xs font-light w-min rounded-md px-2 py-1 tracking-wide text-red-800 bg-transparent group-hover:bg-red-800 border border-red-800 group-hover:text-white">Learn
            More</button>
        <div class="flex flex-row gap-1 items-center">
          
        </div>
    </div>

</div>
