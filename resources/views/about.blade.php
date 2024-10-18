<x-app-layout title="Team Asia Corporation">

    @section('meta_title', 'Team Asia Corporation')
    @section('meta_type', 'website')
    @section('meta_description', 'Exclusive Distributor of TICA Products and Authorized Dealer in the Philippines')
    {{-- @section('meta_image', (asset('/Meta.png'))) --}}
    @section('meta_keywords', 'TICA, GGC, HVAC, HVAC Philippines, Airconditioning, Refrigeration, Ventilation Equipment ')


    @section('hero')
        <!-- Hero -->
        @if(isset($mainPages['about_page_title']))
        <div
        class="relative min-h-[50svh] w-full bg-fixed bg-no-repeat bg-cover bg-center"
        style="background-image: url({{ $mainPages['about_page_title']->img ? asset('storage/' . $mainPages['about_page_title']->img) : asset('/default-slide-3.webp') }})">
            
            <div class="absolute inset-0">

            <div class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col justify-center gap-2 bg-gradient-to-t from-slate-900/85 to-transparent md:px-16 md:py-12 p-6">
            
            <h1 class="w-full lg:w-[80%] text-balance text-4xl md:text-6xl font-bold text-white drop-shadow-md">{{ $mainPages['about_page_title']->title }}</h1>
            <p class="lg:w-2/3 w-full text-lg md:text-xl text-white drop-shadow-md text-balance">{{ $mainPages['about_page_title']->desc1 }}</p>
            
            </div>

            {{-- <img class="absolute w-full h-full object-cover object-center md:object-right  text-slate-700 dark:text-slate-300"
                src="{{ $mainPages['about_page_title']->img ? asset('storage/' . $mainPages['about_page_title']->img) : asset('/default-slide-3.webp') }}" alt="img" /> --}}
            </div>
        </div>
        @endif

       


    @endsection
    <div class="flex md:flex-row flex-col gap-2 lg:px-16">
    <div class="flex flex-col mx-6">
        @include('layouts.sections.about-mission')
        @include('layouts.sections.about-vision')
        <div class="flex md:hidden">
        @include('layouts.sections.about-partnership')
        </div>
        @include('layouts.sections.contact')
         {{-- @include('news.index') --}}
    </div>
    <div class="w-full ">
        <div class="hidden md:flex">
        @include('layouts.sections.about-partnership')
        </div>
        @include('layouts.sections.about-office')
    </div>
    </div>
    
    
    


     {{-- @include('layouts.sections.famous-global-brand')
     @include('layouts.sections.authorized-dealer')
     @include('layouts.sections.featured-products')
     @include('layouts.sections.featured-projects')
     @include('layouts.sections.certification') --}}
    
   

</x-app-layout>
