@props(['product'])
<article class="[&:not(:last-child)]:border-b border-gray-100 pb-2 dark:border-white">
    <div class="article-body grid grid-cols-4 gap-3 mt-5 items-start">
        <div class="col-span-4 flex flex-row gap-2 items-start ">
            <div class="col-span-1 flex-shrink-0 w-[180px]">
                @if ($product->product_img === null)
                <tr>
                    <td><img src="{{asset('/Product_Default.png')}}" alt="Product Image" class="w-auto h-auto max-w-[160px] max-h-[100px] mx-auto"></td>
                </tr>
                @endif
                <img class="w-auto h-auto max-w-[160px] max-h-[100px] mx-auto" src="/storage/{{ $product->product_img }}" alt="">
            </div>
            <div class="col-span-2">
                <h2 class="text-xl font-bold text-gray-900 dark:text-white">
                    <a wire:navigate href="{{ route('products.show', $product->slug) }}" >
                        {{ $product->title }}
                        
                    </a>
                </h2>
                <div class="flex flex-row items-center dark:text-white">
                    <img class="w-auto h-auto max-w-[50px]" src="/storage/{{ $product->product_brand->brand_logo }}" alt=""><span class="ml-2">{{ $product->product_brand?->name }}</span>
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

                    <p class="mt-2 text-base text-gray-700 font-light dark:text-white">

                        @if ($product->description === null)
                        <tr>
                            <td>No Description to display.</td>
                        </tr>
                        @endif
                        {{ $product->getExcerpt() }}
                    </p>

                </div>
            </div>
            
        </div>
    </div>
</article>