<x-app-layout title="Team Asia Corporation">

    @section('hero')
        <!-- Hero -->
        @if(isset($mainPages['hero']))
        <div class="relative min-h-[50svh] w-full bg-fixed bg-no-repeat bg-cover bg-center"
        style="background-image: url({{ $mainPages['hero']->img ? asset('storage/' . $mainPages['hero']->img) : asset('/BG-WEB-01.webp') }})">
            
            <div class="absolute inset-0">

            <div class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col justify-center gap-2 bg-gradient-to-t from-slate-900/85 to-transparent md:px-16 md:py-12 p-6">
            
            <h1 class="w-full lg:w-[80%] text-balance text-4xl md:text-6xl font-bold text-white">{{ $mainPages['hero']->title }}</h1>
            <p class="lg:w-1/2 w-full text-lg md:text-2xl text-slate-300">{{ $mainPages['hero']->desc1 }}</p>
           
            {{-- contact us modal --}}
            <x-filament::modal width="2xl" wire:ignore.self>
                <x-slot name="trigger">
                    <x-filament::button class="text-xl py-2 px-16 border-2 border-white font-bold mt-5 text-white rounded-full hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-400">
                       Contact Us
                    </x-filament::button>
                </x-slot>
                <div class="relative" x-data="{ open: true }">
                    <div x-show="open" class="p-6 border-b border-gray-200">
                        <h2 class="text-2xl dark:text-white text-gray-600 font-semibold mb-4">Send Us a Message</h2>
                        <div class="flex flex-row  md:space-x-6 mb-4">
                            <div class="flex items-center mb-4 md:mb-0">
                                <svg class="h-5 w-5 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c2.21 0 4 1.79 4 4s-1.79 4-4 4-4-1.79-4-4 1.79-4 4-4zm0 0V5.5M12 12v6m-3-3h6"></path>
                                </svg>
                                <span class="text-gray-800 dark:text-white text-base">reception@dbiphils.com</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="h-5 w-5 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.5 12a4.5 4.5 0 019 0A4.5 4.5 0 017.5 12zm3-4.5a3 3 0 106 0 3 3 0 00-6 0zM4.5 12a7.5 7.5 0 1115 0 7.5 7.5 0 01-15 0z"></path>
                                </svg>
                                <span class="text-gray-800 dark:text-white text-base">(+632) 8723-4461 to 64</span>
                            </div>
                        </div>
                    </div>
                    <livewire:create-contact />
                </div>
            </x-filament::modal>

            
            
            </div>
{{-- 
            <img class="absolute w-full h-full object-cover object-center md:object-right text-slate-700 dark:text-slate-300"
                src="{{ $mainPages['hero']->img ? asset('storage/' . $mainPages['hero']->img) : asset('/default-slide-2.webp') }}" alt="img" /> --}}
            </div>
            
        </div>
        @endif

     


    @endsection

    {{-- <div class="w-full text-slate-700 dark:text-white max-w-[1366px] mx-auto dark:bg-slate-800 h-screen">
        <div class="px-12 py-4">
            Home
        </div>

     </div> --}}
     <div class="lg:px-16 flex flex-col justify-center">
        @include('layouts.sections.authorized-dealer')
        @include('layouts.sections.featured-products')
        @include('layouts.sections.featured-projects')
        @include('layouts.sections.certification')
     </div>
     {{-- @include('layouts.sections.famous-global-brand') --}}
     
    
   

</x-app-layout>
