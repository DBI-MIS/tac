<div>
<div class="border-b-[1px] dark:border-gray-100/10 border-red-600/10">
    <h1 class="text-3xl text-red-600 font-bold">News and Articles</h1>
</div>

<div class="mx-auto px-4 py-5 sm:px-6 sm:py-12 lg:max-w-9xl lg:px-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 py-4 gap-4">
    @if($this->newsarticles->count() == 0)
    <div>No News to display</div>
    @endif
    @foreach($this->newsarticles as $newsarticle)
    <x-news.news-item :newsarticle="$newsarticle"/>
    @endforeach

</div>
</div>
</div>
