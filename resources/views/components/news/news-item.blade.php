@props(['newsarticle'])

<div class="rounded-xl border border-opacity-10 dark:border-gray-600 bg-white hover:bg-gray-100 col-span-1 overflow-hidden cursor-pointer group mx-auto hover:shadow-lg shadow-sm max-h-max flex flex-col">
    <a href="{{route('newsarticles.show', $newsarticle->slug)}}">
        <div class="relative w-full">
            <!-- Image with hover effect -->
            
            <img class="w-full h-80 object-cover group-hover:scale-105 transition-all ease-in-out duration-300"
                src="{{ $newsarticle->img ? asset('storage/' . $newsarticle->img) : asset('/default-slide-2.webp') }}"
                alt="{{ $newsarticle->title }}" />
            
            
            <div class="absolute inset-0 flex justify-center items-center translate-y-[160px]">
                <div class="bg-red-800 uppercase text-white text-sm font-medium px-2 py-1 rounded-md text-center mx-auto tracking-wider">
                    {{ $newsarticle->category }}
                </div>
            </div>

            <div class="absolute flex flex-col justify-center items-center top-2 left-2 bg-red-800 text-white text-sm uppercase font-semibold px-3 py-1 rounded-sm">
                <span class="text-3xl font-bold">
                    {{ \Carbon\Carbon::parse($newsarticle->published_at)->format(' d') }}
                </span>
                <span class="text-xs">
                    {{ \Carbon\Carbon::parse($newsarticle->published_at)->format('M ') }}
                </span>
                
            </div>
            

           
        </div>
       

        <div class="flex flex-col items-center py-4 px-2 transition-all duration-300 h-max justify-center dark:text-gray-800">
            <h3 class="mt-2 text-center font-bold text-xl py-2">{{ $newsarticle->title }}</h3>
            <span class="text-sm font-light text-center">@markdown($newsarticle->markdowntransform())</span>
        </div>
    </a> 
   
</div>
