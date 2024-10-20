<div class="max-w-full w-full pb-6 pt-2 px-4">
    <div class="border-b-[1px] dark:border-gray-100/10 border-red-600/10">
    <h1 class="dark:text-gray-100 text-4xl font-bold text-red-700">VCO Products</h1>
    </div>
    <div class="p-4"></div>
    {{-- <div class="flex flex-wrap py-6 gap-2"> --}}
        {{-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 py-6 gap-4 place-items-center justify-items-center"> --}}
            <div class="flex flex-wrap gap-2">
    @foreach ($featuredOrganicProducts as $organicproduct)
        <x-page.featured-organicproducts :organicproduct="$organicproduct" />
    @endforeach
    </div>
</div>