<div class="relative max-w-full w-full dark:text-gray-100">
    @if (isset($mainPages['filler_page_video']))
        <div class="flex flex-col gap-6 my-7 pt-2 border-t-[1px] dark:border-gray-100/10 border-red-600/10">
            <h1 class="text-3xl">{{ $mainPages['filler_page_video']->title }}</h1>

            <!-- Video container with left and right arrows -->
            <div class="relative w-full max-w-full overflow-hidden rounded-xl">
                <!-- Left Arrow -->
                <button id="scrollLeft" class="absolute left-1 top-1/2 transform -translate-y-1/2 z-10 bg-red-600 text-white px-3 py-2 rounded-md hover:bg-red-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                      
                </button>

                <!-- Right Arrow -->
                <button id="scrollRight" class="absolute right-1 top-1/2 transform -translate-y-1/2 z-10 bg-red-600 text-white px-3 py-2 rounded-md hover:bg-red-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                      </svg>
                      
                </button>

                <div id="videoContainer" class="w-full max-w-full flex gap-4 h-[281px] overflow-x-auto custom-scrollbar scroll-smooth">
                    <iframe class="flex-none w-[500px] h-full" src="https://www.youtube.com/embed/-N8g6kILyOo?feature=oembed"
                        frameborder="0" allow=" autoplay; clipboard-write; encrypted-media; picture-in-picture"
                        allowfullscreen="" poster></iframe>

                    <iframe class="flex-none w-[500px] h-full" src="https://www.youtube.com/embed/iAs3kiNU80o?feature=oembed"
                        frameborder="0" allow=" autoplay; clipboard-write; encrypted-media; picture-in-picture"
                        allowfullscreen="" poster></iframe>

                    <iframe class="flex-none w-[500px] h-full" src="https://www.youtube.com/embed/eozJiTiqfh8?feature=oembed"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; picture-in-picture"
                        allowfullscreen="" poster></iframe>

                    <iframe class="flex-none w-[500px] h-full" src="https://player.vimeo.com/video/288089368?app_id=122963"
                        frameborder="0" title="WCC Event Recap 2018" webkitallowfullscreen="" mozallowfullscreen=""
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; picture-in-picture"
                        allowfullscreen="" poster></iframe>
                </div>
            </div>
        </div>
    @endif
</div>

<script>
    document.getElementById('scrollLeft').addEventListener('click', function () {
    document.getElementById('videoContainer').scrollBy({
        left: -500, // Adjust scroll amount
        behavior: 'smooth' // Smooth scrolling
    });
});

document.getElementById('scrollRight').addEventListener('click', function () {
    document.getElementById('videoContainer').scrollBy({
        left: 500, // Adjust scroll amount
        behavior: 'smooth'
    });
});
</script>
