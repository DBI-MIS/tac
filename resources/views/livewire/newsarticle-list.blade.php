<div>

    @section('maintenance') 
    <div class="flex items-center justify-center h-[75svh] ">
        <div class=" text-white rounded-lg shadow-lg p-10 text-center bg-red-600 dark:bg-gray-800">
            <div class="text-4xl font-bold mb-4 flex flex-col sm:flex-row items-center gap-2">
                <span>🚧</span>
                <span>Page Under Construction</span>
                <span>🚧</span>
            </div>
            <p class="text-lg">We're working hard to bring you something amazing. Stay tuned!</p>
            <div class="mt-6">
                <a wire:navigate href="{{ route('home') }}" class="inline-block bg-white dark:bg-red-600 text-red-600 font-semibold py-2 px-4 rounded hover:bg-red-900 hover:text-white dark:text-white transition duration-200 animate-bounce">
                    Go Back Home
                </a>
            </div>
        </div>
    </div>
    @endsection

{{-- <div class="border-b-[1px] dark:border-gray-100/10 border-red-600/10">
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
</div> --}}

</div>
