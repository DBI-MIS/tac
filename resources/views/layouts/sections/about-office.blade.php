<div class="max-w-full w-full dark:text-gray-100">
    

    @if (isset($mainPages['about_page_office']))
        <div class="flex flex-col gap-2 my-4 pt-2 border-t-[1px] dark:border-gray-100/10 border-red-600/10 ">

            <h1 class="text-xl font-bold">{{ $mainPages['about_page_office']->title }}</h1>

            <p>{!! $mainPages['about_page_office']->desc1 !!}</p>
            <p>{!! $mainPages['about_page_office']->desc2 !!}</p>

        </div>
    @endif

    @if (isset($mainPages['about_page_showroom']))
        <div class="flex flex-col gap-2 my-4 pt-2 border-t-[1px] dark:border-gray-100/10 border-red-600/10 ">

            <h1 class="text-xl font-bold">{{ $mainPages['about_page_showroom']->title }}</h1>

            <p>{!! $mainPages['about_page_showroom']->desc1 !!}</p>

        </div>
    @endif

    @if (isset($mainPages['about_page_singapore']))
        <div class="flex flex-col gap-2 my-4 pt-2 border-t-[1px] dark:border-gray-100/10 border-red-600/10 ">

            <h1 class="text-xl font-bold">{{ $mainPages['about_page_singapore']->title }}</h1>

            <p>{!! $mainPages['about_page_singapore']->desc1 !!}</p>

        </div>
    @endif

    @if (isset($mainPages['about_page_shanghai']))
        <div class="flex flex-col gap-2 my-4 pt-2 border-t-[1px] dark:border-gray-100/10 border-red-600/10 ">

            <h1 class="text-xl font-bold">{{ $mainPages['about_page_shanghai']->title }}</h1>

            <p>{!! $mainPages['about_page_shanghai']->desc1 !!}</p>

        </div>
    @endif
</div>
