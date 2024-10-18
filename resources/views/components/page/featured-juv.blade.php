@props(['featuredjuv'])
<div
class="rounded-xl border border-opacity-10  bg-white hover:bg-gray-100 border-red-800 
cursor-pointer group hover:shadow-lg shadow-sm px-6 flex flex-col justify-between mx-auto py-4 max-w-[250px] min-w-[250px] w-full m-1">

    <div class="text-balance block mb-2"
    wire:navigate href="{{ route('organicproducts.show', $featuredjuv->slug) }}">

    <div class=" mx-auto w-auto group-hover:scale-105 transition-all ease-in-out duration-300">
            <img class="min-w-[200px]"
                src="{{ $featuredjuv->product_img ? asset('storage/' . $featuredjuv->product_img) : asset('/default-slide-1.webp') }}"
                alt="{{ $featuredjuv->title }}"/>
        </div>

        <div class="mt-2">
            <h2 class="text-2xl font-bold text-balance dark:text-slate-800">{{ $featuredjuv->title }}</h2>
        </div>
        <p class="text-sm pb-4 md:text-md text-gray-600">@markdown($featuredjuv->markdowntransform())</p>
        
    </div>
</div>
    
