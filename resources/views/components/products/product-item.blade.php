@props(['product'])
<article class="[&:not(:last-child)]:border-b border-gray-100 pb-2 dark:border-white">
    <div class="article-body grid grid-cols-4 gap-3 mt-5 items-start cursor-pointer">
        <div class="col-span-4 flex flex-col sm:flex-row gap-2 items-start group px-5">
            <div class="col-span-1 flex-shrink-0 w-[180px]" wire:navigate href="{{ route('products.show', $product->slug) }}">
                
                <tr>
                    <td>
                        <img
                        src="{{ $product->product_img ? asset('storage/' . $product->product_img) : asset('/default-slide-1.webp') }}"
                        alt="{{ $product->title }}"
                        class="w-auto h-auto max-w-[160px] max-h-[100px] mx-auto group-hover:scale-110 transition-all ease-in-out duration-300">
                    </td>
                </tr>
             
            </div>
            <div class="col-span-2">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white ">
                    <a wire:navigate href="{{ route('products.show', $product->slug) }}" >
                        {{ $product->title }}
                        
                    </a>
                </h2>
                <div class="flex flex-row items-center dark:text-white py-1">
                    <img class="w-auto h-auto max-w-[50px]" src="/storage/{{ $product->product_brand->brand_logo }}" alt="">
                    {{-- <span class="ml-2">{{ $product->product_brand?->name }}</span> --}}
                </div>
                <div class="flex flex-col mt-2">
                    <div class="topics flex flex-wrap justify-start gap-1 my-auto">
                        @foreach ($product->productcategories as $category)
                                     <x-badge wire:navigate href="{{ route('products.index', ['category' => $category->slug])}}"
                                             :textColor="$category->text_color" :bgColor="$category->bg_color">
                                        {{ $category->title }}
                                    </x-badge>
                                @endforeach
                    
                    </div>
                    <div class="mt-2 text-base text-gray-700 font-light dark:text-white flex flex-col mb-2">
                    

                        @if ($product->description === null)
                        <tr>
                            <td>No Description to display.</td>
                        </tr>
                        @endif
                        {{ $product->getExcerpt() }}
                        <button 
                        class="text-xs font-light w-max whitespace-nowrap rounded-md px-2 py-1 tracking-wide text-red-800 bg-transparent group-hover:bg-red-800 border border-red-800 group-hover:text-white"
                        wire:navigate href="{{ route('products.show', $product->slug) }}"
                        >Learn More</button>
           
                        
                    

                </div>

                </div>
            </div>
            
        </div>
    </div>
</article>