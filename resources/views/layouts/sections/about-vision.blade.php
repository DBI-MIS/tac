<div class="max-w-full w-full  dark:text-gray-100">
    @if(isset($mainPages['about_page_vision']))
    <div class="flex flex-col gap-6 my-7 pt-2 border-t-[1px] dark:border-gray-100/10 border-red-600/10 ">

    <h1 class="text-3xl text-red-600 font-bold">{{ $mainPages['about_page_vision']->title }}</h1>

    <p>{{ $mainPages['about_page_vision']->desc1 }}</p>

    </div>  

    @endif
</div>