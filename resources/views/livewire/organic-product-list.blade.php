<div class=" px-3 lg:px-7">
    <div class="flex justify-between items-center border-b border-gray-100 mt-4 md:mt-0">
         <div class="text-gray-600 ">
            
            @if($this->activeCategory)
                <x-badge wire:navigate href="{{ route('organicproducts.index', ['organiccategory' => $this->activeCategory->slug])}}"
                :textColor="$this->activeCategory->text_color" :bgColor="$this->activeCategory->bg_color"> 
                {{ $this->activeCategory->title }}
                </x-badge>
            @elseif($search)
                <span class="ml-3 dark:text-white relative">
                Searching <strong>{{ $search }}</strong>
                </span>
            @endif

            @if($this->activeCategory || $search)
                <button class="text-gray-500 text-xs mr-3 ml-1 absolute dark:text-white" wire:click="clearFilters">x</button>
            @endif 
        </div>
        <div class="flex items-center space-x-4 font-light ">
            <button class="{{ $sort === 'desc' ? 'text-gray-900 border-t-2 dark:text-white border-red-700 dark:border-white': 'text-gray-500' }} py-4" wire:click="setSort('desc')">Latest</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-t-2 dark:text-white border-red-700 dark:border-white': 'text-gray-500' }} py-4 "wire:click="setSort('asc')">Oldest</button>
        </div>
    
    </div>
    <div class="py-5 flex flex-col md:grid md:grid-cols lg:grid-cols-2 gap-5 dark:text-white bg-white rounded-lg">
        @if ($this->organicproducts->count() == 0)
        <tr >
            <td colspan="4">No Products to display.</td>
        </tr>
        @endif

        @foreach($this->organicproducts as $organicproduct)
        <x-organicproducts.product-item :organicproduct="$organicproduct"/>
        @endforeach
    </div>
     <div class="my-3">
        {{ $this->organicproducts->onEachSide(1)->links() }}
    </div>
</div>
