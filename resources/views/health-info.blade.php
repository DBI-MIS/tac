<x-app-layout title="Health Info | Team Asia Corporation">

    @section('meta_title', 'Team Asia Corporation')
    @section('meta_type', 'website')
    @section('meta_description', 'From the Largest Producers and Exporters of Premium Quality Products in the Philippines')
    {{-- @section('meta_image', (asset('/Meta.png'))) --}}
    @section('meta_keywords', 'VCO, Coconut Products, SUPERCOCO, COCOKING, JUV, Virgin Coconut Oil')

    {{-- @section('maintenance') 
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
    @endsection --}}
    
    <h2 class="text-center text-3xl md:text-5xl text-red-600 font-bold py-6 dark:text-white">Health Benefits of Coconut Oil vs. Other Oils</h2>
    <div>
        <img src="{{  asset('/pp1.webp') }}" class="block md:hidden w-full" />
        <img src="{{  asset('/pp2.webp') }}" class="hidden md:block w-full" />
    </div>
    <div class="lg:px-16 flex flex-col md:flex-row justify-center gap-4">
     @include('layouts.sections.health-main')
     @include('layouts.sections.health-sub')
    </div>
    
</x-app-layout>
