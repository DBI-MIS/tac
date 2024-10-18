<div class="max-w-full w-full dark:text-gray-100">
    <div class="flex flex-col gap-4">
        <div class="relative w-full max-w-full bg-green-800 rounded-t-xl text-white">
            <div class="flex flex-row justify-between items-center px-6 py-6">
                <h2 class=" text-2xl md:text-3xl lg:text-4xl font-bold  ">
                {{ $juvPages['introduction']->title }}
            </h2>
            <abbr title="View All">
                <x-icon-all-products
                    class="size-8 cursor-pointer transition-all ease-in-out duration-500 animate-minimal-bounce"
                    wire:navigate href="{{ route('organicproducts.index') }}?organiccategory=juv"/>
            </abbr>
        </div>
        <p class="bg-yellow-200 py-3 text-pretty px-6 text-green-600">
                <span class="text-base text-balance ">{{ $juvPages['introduction']->description1 }}</span>
            </p>

        </div>
    </div>
</div>
