<div class=" px-3 lg:px-7">
    <div class="flex justify-between items-center border-b border-gray-100 mt-4 md:mt-0">
         <div class="text-gray-600 ">
            
            @if($this->activeCategory)
                <x-badge wire:navigate href="{{ route('products.index', ['category' => $this->activeCategory->slug])}}"
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
        {{-- <div class="flex items-center space-x-4 font-light ">
            {{-- <button class="{{ $sort === 'desc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500' }} py-4" wire:click="setSort('desc')">Latest</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500' }} py-4 "wire:click="setSort('asc')">Oldest</button> 
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500' }} py-4 " wire:click="filterByCategory('brown-rice-tea')">Brown Rice Tea Products</button>
            {{-- <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500' }} py-4 " wire:click="filterByCategory('vco')">VCO</button> 
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500' }} py-4" wire:click="filterByCategory('airconditioning')">Airconditioning</button>
             <button  class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500' }} py-4" wire:click="filterByCategory('refrigeration')">Refrigeration</button>
            {{-- <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500' }} py-4 " wire:click="setSort('asc')">Airconditioning</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500' }} py-4 " wire:click="setSort('asc')">Refrigeration</button> 
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500' }} py-4 " wire:click="filterByCategory('elta-fans')">Ventilation</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500' }} py-4 " wire:click="filterByCategory('data-center-application')">Data Center Solutions</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500' }} py-4 " wire:click="filterByCategory('led-displays')">LED Products</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500' }} py-4 " wire:click="filterByCategory('truwater')">TRUWATER Cooling Platforms</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500' }} py-4 " wire:click="filterByCategory('grad')">GRAD Products</button>
            {{-- <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500' }} py-4 " wire:click="filterByCategory('ventilation-system-product')">Ventilation System</button>
            <button class="{{ $sort === 'asc' ? 'text-gray-900 border-b border-gray-700': 'text-gray-500' }} py-4 " wire:click="filterByCategory('virgin-coconut-oil')">Virgin Coconut Oil Products</button>
        </div> --}}
    </div>
    <div class="py-5 flex flex-col md:grid md:grid-cols lg:grid-cols-2 gap-5 dark:text-white bg-white rounded-lg">
        @if ($this->products->count() == 0)
        <tr >
            <td colspan="4">No Products to display.</td>
        </tr>
        @endif

        @foreach($this->products as $product)
        <x-products.product-item :product="$product"/>
        @endforeach
    </div>
     <div class="my-3">
        {{ $this->products->onEachSide(1)->links() }}
    </div>
</div>
