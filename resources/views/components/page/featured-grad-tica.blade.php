@props(['product'])
<div class="col-span-1 flex flex-col cursor-pointer group w-full">
<div class="z-20 w-full min-w-[100px] min-h-[200px] group-hover:scale-110 transition-all ease-in-out duration-300" wire:navigate href="{{ route('products.show', $product->slug) }}">
    <img
    class=" mx-auto min-w-16 max-w-52" 
    src="{{ $product->product_img ? asset('storage/' . $product->product_img) : asset('/default-slide-1.webp') }}"
    alt="{{ $product->title }}" />
</div>

<div class="text-balance flex flex-col -mt-[100px] h-full" 
    wire:navigate href="{{ route('products.show', $product->slug) }}">
        
        <div class="flex flex-col text-left gap-2 px-6 rounded-xl border border-opacity-10 group-hover:shadow-lg shadow-sm bg-white group-hover:bg-gray-100 border-red-800 w-full pt-16 h-full transition-all ease-in-out duration-300 pb-6">
            <span class="text-2xl font-bold text-balance dark:text-slate-800 block ">{{ $product->title }}</span>
            
            <div class="flex flex-col gap-1">
                <div class="flex flex-row gap-2 items-center w-min">
                 <img
                 class="w-[60%]" 
                 src="{{ $product->product_brand->brand_logo ? asset('storage/' . $product->product_brand->brand_logo) : asset('/default-slide-1.webp') }}"
                 alt="{{ $product->product_brand->name }}" /> 
                 {{-- <span>{{ $product->product_brand->name }}</span> --}}
                 <span class="font-bold text-[#0952A2]"> Products</span>
                </div>
                <span>{!! $product->getExcerpt() !!}</span>
             </div>

            <button class="text-xs font-light w-max whitespace-nowrap rounded-md px-2 py-1 tracking-wide text-red-800 bg-transparent group-hover:bg-red-800 border border-red-800 group-hover:text-white">Learn More</button>
           
        </div>
       
</div>

</div>