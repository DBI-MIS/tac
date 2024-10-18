@props(['newsarticle'])

<x-app-layout>

    <div class="max-w-4xl mx-auto p-4">



        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $newsarticle->title }}</h1>


        <div class="flex flex-row items-start gap-2">

            <div
                class="flex flex-col justify-center items-center top-2 left-2 bg-red-800 text-white text-sm uppercase font-semibold px-3 py-1 rounded-sm">
                <span class="text-3xl font-bold">
                    {{ \Carbon\Carbon::parse($newsarticle->published_at)->format(' d') }}
                </span>
                <span class="text-xs">
                    {{ \Carbon\Carbon::parse($newsarticle->published_at)->format('M ') }}
                </span>

                <span class="text-xs">
                    {{ \Carbon\Carbon::parse($newsarticle->published_at)->format('Y ') }}
                </span>

            </div>


            <div class="flex flex-col items-start gap-2">

                <h2 class=" bg-[#014421] text-center uppercase text-white text-sm font-medium px-2 py-1 rounded-md">
                    {{ $newsarticle->category }}</h2>

                <div class="w-full inline-flex items-center mb-10">
                    <span>Share | </span>
                    {!! $shareComponent !!}
                </div>

            </div>
        </div>

        <div class="h-1/2 w-full">
            @if ($newsarticle->img)
                <img src="{{ $newsarticle->img ? asset('storage/' . $newsarticle->img) : asset('/default-slide-2.webp') }}"
                    alt="{{ $newsarticle->title }}" class=" w-full  h-full object-cover rounded-lg mb-4">
            @endif
        </div>
        <div>
            @markdown($newsarticle->description)
        </div>

    </div>
</x-app-layout>
