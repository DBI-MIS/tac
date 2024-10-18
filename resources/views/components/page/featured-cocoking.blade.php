@props(['featuredcocoking'])
<div
    class="rounded-xl border border-opacity-10  bg-white hover:bg-gray-100 border-red-800 
cursor-pointer group hover:shadow-lg shadow-sm px-6 flex flex-col justify-between py-4 max-w-[250px] min-w-[250px] w-full">

    <div class="text-balance block mb-2"
    wire:navigate href="{{ route('organicproducts.show', $featuredcocoking->slug) }}">

        <div class=" mx-auto w-auto group-hover:scale-105 transition-all ease-in-out duration-300">
            <img class="min-w-[200px]"
                src="{{ $featuredcocoking->product_img ? asset('storage/' . $featuredcocoking->product_img) : asset('/default-slide-1.webp') }}"
                alt="{{ $featuredcocoking->title }}"/>
        </div>

        <div class="mt-2">
            <h2 class="text-2xl font-bold text-balance dark:text-slate-800">{{ $featuredcocoking->title }}</h2>
        </div>
        <p class="text-sm pb-4 md:text-md text-gray-600">@markdown($featuredcocoking->markdowntransform())</p>
        
    </div>
    

</div>
