<div class="w-full">
    <h3 class="text-lg font-semibold text-gray-900 mb-2 dark:text-white">Categories</h3>
    <div class="topics flex md:flex-col flex-wrap flex-row overflow-hidden rounded-md ">
        
        @foreach ($organiccategories as $category)
        <x-badge2 wire:navigate href="{{ route('organicproducts.index', ['organiccategory' => $category->slug])}}"
            :textColor="$category->text_color" :bgColor="$category->bg_color" :hoverBgColor="$category->bg_color"> 
            <div class="w-full">{{ $category->title }}</div>
        </x-badge2>
        @endforeach
    </div>
</div>