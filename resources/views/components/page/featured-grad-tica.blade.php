@props(['product'])
<div
    class="rounded-xl border border-opacity-10  bg-white hover:bg-gray-100 border-red-800 
cursor-pointer group hover:shadow-lg shadow-sm px-6 flex flex-col justify-between mx-auto py-4 max-w-[280px] min-w-[280px] w-full m-1">

    <div class="text-balance block h-[340px] mb-2"
    wire:navigate href="{{ route('products.show', $product->slug) }}">

        <div class=" mx-auto w-auto group-hover:scale-110 transition-all ease-in-out duration-300">
            <img class="min-w-[200px]"
                src="{{ $product->product_img ? asset('storage/' . $product->product_img) : asset('/default-slide-1.webp') }}"
                alt="{{ $product->title }}"/>
        </div>

        <div class=" ">
            <h2 class="text-xl font-bold text-balance dark:text-slate-800">{{ $product->title }}</h2>
        </div>

        
    </div>
    <div class="flex flex-row gap-1 justify-between items-center h-auto">
        <button
            class="text-nowrap text-xs font-light w-min rounded-md px-2 py-1 tracking-wide text-red-800 bg-transparent group-hover:bg-red-800 border border-red-800 group-hover:text-white">Learn
            More</button>
        <div class="flex flex-row gap-1 items-center">
            <img src="{{ $product->product_brand->brand_logo ? asset('storage/' . $product->product_brand->brand_logo) : asset('/default-slide-1.webp') }}"
                alt="{{ $product->product_brand->name }}" style="max-height: 12px">
            <p class="font-bold text-gray-500"> Products</p>
        </div>
    </div>

</div>
