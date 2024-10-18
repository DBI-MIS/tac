<x-app-layout title="Products">
    <div class="grid grid-cols-5 md:gap-x-10">
        <div class="col-span-5 w-full mx-auto border-b border-red-800/20 dark:border-white">
            @include('organicproduct.partials.search-box')
        </div>
        <div id="side-bar"
        class="order-1 col-span-5 md:col-span-1 pt-2 px-4  h-full md:h-screen relative md:sticky top-0">
            @include('organicproduct.partials.organic-categories-box')
        </div>
        <div class="md:col-span-4 col-span-5 order-2 ">
            <livewire:organic-product-list />
        </div>
       
    </div>
    </x-app-layout>