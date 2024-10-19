<div class="my-10 text-green-800 dark:text-white">

    <div class="border-t border-green-800 dark:border-white">
        <h2 class=" text-2xl md:text-3xl lg:text-4xl font-bold px-2 py-6">Why choose JUV?</h2>
    </div>
     <div class="grid grid-cols-1 md:grid-cols-3 mx-auto gap-4 my-5 ">

        <div class="flex flex-row justify-start items-center gap-4 w-full">
            <div class="max-w-[120px] min-w-[64px]">
                <img  src="{{ $juvPages['choose_juv1']?->img_page? asset('storage/' . $juvPages['choose_juv1']->img_page) : asset('/default-slide-2.webp') }}" 
                alt="img" class="p-2 min-h-6">
            </div>
            <div class="flex flex-col min-w-40">
                <p class="text-xl font-bold mb-2 ">  {{$juvPages['choose_juv1']->title ?? 'No Data'}}</p>
                <p class="text-gray-600 text-balance dark:text-white">{{$juvPages['choose_juv1']->description1 ?? 'No Data'}}</p>

            </div>
            
        </div>
    
        <div class="flex flex-row justify-start items-center gap-4 w-full">
            <div class="max-w-[120px] min-w-[64px]">
                <img  src="{{ $juvPages['choose_juv2']?->img_page? asset('storage/' . $juvPages['choose_juv2']->img_page) : asset('/default-slide-2.webp') }}" 
                alt="img" class="p-2 min-h-6">
            </div>
            <div class="flex flex-col min-w-40">
                <p class="text-xl font-bold mb-2 ">  {{$juvPages['choose_juv2']->title ?? 'No Data'}}</p>
                <p class="text-gray-600 text-balance dark:text-white">{{$juvPages['choose_juv2']->description1 ?? 'No Data'}}</p>

            </div>
            
        </div>
        <div class="flex flex-row justify-start items-center gap-4 w-full">
            <div class="max-w-[120px] min-w-[64px]">
                <img  src="{{ $juvPages['choose_juv3']?->img_page? asset('storage/' . $juvPages['choose_juv3']->img_page) : asset('/default-slide-2.webp') }}" 
                alt="img" class="p-2 min-h-6">
            </div>
            <div class="flex flex-col  min-w-40">
                <p class="text-xl font-bold mb-2 ">  {{$juvPages['choose_juv3']->title ?? 'No Data'}}</p>
                <p class="text-gray-600 text-balance dark:text-white">{{$juvPages['choose_juv3']->description1 ?? 'No Data'}}</p>

            </div>
            
        </div>
            
        </div>



    </div>