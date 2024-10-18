<div class="mt-10 text-green-800 dark:text-white">

    <div class="border-t border-green-800 dark:border-white">
        <h2 class=" text-2xl md:text-3xl lg:text-4xl font-bold px-2 py-6">Why choose SUPERCOCO?</h2>
    </div>
     <div class="grid grid-cols-1 md:grid-cols-3 mx-auto gap-4 my-5 ">

        <div class="flex flex-row justify-start items-center gap-4 w-full">
            <div class="max-w-[120px] min-w-[64px]">
                <img src="{{asset('best-seller.png')}}" alt="Mouth Freshener" class="p-2 min-h-6">
            </div>
            <div class="flex flex-col min-w-40">
                <p class="text-xl font-bold mb-2  ">  {{$superPages['choose_supercoco1']->title}}</p>
                <p class="text-gray-600 text-balance dark:text-white">{{$superPages['choose_supercoco1']->description1}}</p>

            </div>
            
        </div>
    
        <div class="flex flex-row justify-start items-center gap-4 w-full">
            <div class="max-w-[120px] min-w-[64px]">
                <img src="{{asset('natural.png')}}" alt="Mouth Freshener" class="p-2 min-h-6">
            </div>
            <div class="flex flex-col min-w-40">
                <p class="text-xl font-bold mb-2  ">  {{$superPages['choose_supercoco2']->title}}</p>
                <p class="text-gray-600 text-balance dark:text-white">{{$superPages['choose_supercoco2']->description1}}</p>

            </div>
            
        </div>
        <div class="flex flex-row justify-start items-center gap-4 w-full">
            <div class="max-w-[120px] min-w-[64px]">
                <img src="{{asset('nontoxic.png')}}" alt="Mouth Freshener" class="p-2 min-h-6">
            </div>
            <div class="flex flex-col  min-w-40">
                <p class="text-xl font-bold mb-2  ">  {{$superPages['choose_supercoco3']->title}}</p>
                <p class="text-gray-600 text-balance dark:text-white">{{$superPages['choose_supercoco3']->description1}}</p>

            </div>
            
        </div>
            
        </div>



    </div>