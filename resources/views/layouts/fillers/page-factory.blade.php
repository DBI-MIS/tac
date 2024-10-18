<div class="max-w-full w-full  py-6 dark:text-gray-100">
    @if(isset($mainPages['filler_page_factory']))
    <div class="flex flex-col gap-6 my-7 pt-2 border-t-[1px] dark:border-gray-100/10 border-red-600/10 ">

    <h1 class="text-3xl">{{ $mainPages['filler_page_factory']->title }}</h1>

    <p>{{ $mainPages['filler_page_factory']->desc1 }}</p>


    <div class="w-full max-w-full">
        <img class="w-full object-center md:object-right text-slate-700 dark:text-slate-300 aspect-auto"
        src="{{ $mainPages['filler_page_factory']->img ? asset('storage/' . $mainPages['filler_page_factory']->img) : asset('/default-slide-2.webp') }}" alt="img" />
     </div>

    </div>  

    @endif
</div>