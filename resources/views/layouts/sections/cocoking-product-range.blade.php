<div class="mt-16">
    <h3 class="bg-[#28704b] py-3 text-2xl md:text-3xl lg:text-4xl font-bold uppercase text-[#ebf8af] text-center "> Our Product Range</h3>

    <div class="w-full rounded-b-xl overflow-hidden">
        <img src="{{ asset('cocokingcollage.webp') }}" alt="Cocoking Product Collage" class="w-full h-auto">
    </div>
    <div class="mt-10 grid grid-cols-2 md:grid-cols-5  gap-4">
        <div class=" bg-white shadow-md rounded-lg p-2 text-center">
            {{-- <img src="{{asset('mouth-freshener.webp')}}" alt="Mouth Freshener" class="w-full object-cover rounded-md mb-4"> --}}
            <img src="{{$cocoPages['product_range1']->img_page ? asset('storage/'. $cocoPages['product_range1']->img_page) : asset('/COCONUT_03.webp') }}" alt="Mouth Freshener" class="w-80 object-cover rounded-md mb-4">
            <h3 class="text-xl  mb-2 font-serif font-extrabold text-[#28704b] ">  {{$cocoPages['product_range1']->title}}</h3>
            <p class="text-sm pb-4 md:text-md text-gray-600">{{$cocoPages['product_range1']->description1}}</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-2 text-center">
            <img src="{{$cocoPages['product_range2']->img_page ? asset('storage/'. $cocoPages['product_range2']->img_page) : asset('/COCONUT_03.webp') }}" alt="" class="w-full object-cover rounded-md mb-4">
            <h3 class="text-xl  mb-2 font-serif font-extrabold text-[#28704b] ">  {{$cocoPages['product_range2']->title}}</h3>
            <p class="text-sm md:text-md text-gray-600">{{$cocoPages['product_range2']->description1}}</p>
         </div>
         <div class="bg-white shadow-md rounded-lg p-2 text-center">
            <img src="{{$cocoPages['product_range3']->img_page ? asset('storage/'. $cocoPages['product_range3']->img_page) : asset('/COCONUT_03.webp') }}" alt="" class="w-full object-cover rounded-md mb-4">
            <h3 class="text-xl  mb-2 font-serif font-extrabold text-[#28704b] ">  {{$cocoPages['product_range3']->title}}</h3>
            <p class="text-sm md:text-md text-gray-600">{{$cocoPages['product_range3']->description1}}</p>
         </div>
         <div class="bg-white shadow-md rounded-lg p-2 text-center">
            <img src="{{$cocoPages['product_range4']->img_page ? asset('storage/'. $cocoPages['product_range4']->img_page) : asset('/COCONUT_03.webp') }}" alt="" class="w-full object-cover rounded-md mb-4">
            <h3 class="text-xl  mb-2 font-serif font-extrabold text-[#28704b] ">  {{$cocoPages['product_range4']->title}}</h3>
            <p class="text-sm md:text-md text-gray-600">{{$cocoPages['product_range4']->description1}}</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-2 text-center">
            <img src="{{$cocoPages['product_range5']->img_page ? asset('storage/'. $cocoPages['product_range5']->img_page) : asset('/COCONUT_03.webp') }}"
            alt="" 
             class="w-full object-cover rounded-md mb-4">
            <h3 class="text-xl  mb-2 font-serif font-extrabold text-[#28704b] ">  {{$cocoPages['product_range5']->title}}</h3>
            <p class="text-sm md:text-md text-gray-600">{{$cocoPages['product_range5']->description1}}</p>
        </div>
    </div>

   
</div>
