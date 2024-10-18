<div class="max-w-full w-full pb-6 pt-2 px-4 dark:text-gray-100">
    <div class="border-b-[1px] dark:border-gray-100/10 border-red-600/10">
        <h1 class="dark:text-gray-100 text-4xl font-bold text-red-700">Latest News & Articles</h1>
    </div>

    
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 py-4 gap-2">
            @if ($featuredNewsArticles->count() == 0)
                <div>No News to display</div>
            @endif
            @foreach ($featuredNewsArticles as $newsarticle)
                <x-news.news-item :newsarticle="$newsarticle" />
            @endforeach

        </div>
    

</div>
