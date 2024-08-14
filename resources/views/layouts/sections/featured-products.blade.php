<div class="max-w-full w-full pb-6 pt-2 px-4">
    <div class="border-b-[1px] dark:border-gray-100/10 border-red-600/10">
    <h1 class="dark:text-gray-100 text-3xl">Featured Products</h1>
    </div>
    <div class="p-4"></div>
    <div class="flex flex-wrap py-6 gap-2">
    @foreach ($featuredProducts as $product)
        <x-page.featured-products :product="$product" />
    @endforeach
    </div>
</div>