<div class="max-w-full w-full  py-6 dark:text-gray-100">
    @if(isset($mainPages['global_brand']))
    <div class="flex flex-col gap-6 my-7 pt-2 border-t-[1px] dark:border-gray-100/10 border-red-600/10 ">

    <h1 class="text-3xl">{{ $mainPages['global_brand']->title }}</h1>

    <p>{{ $mainPages['global_brand']->desc1 }}</p>


    <div class="relative min-h-[30svh] w-full max-w-full">
        <img class="absolute w-full h-full object-cover object-center md:object-right text-slate-700 dark:text-slate-300"
        src="{{ $mainPages['global_brand']->img ? asset('storage/' . $mainPages['global_brand']->img) : asset('/default-slide-2.webp') }}" alt="img" />
     </div>

    </div>  

    @endif
</div>