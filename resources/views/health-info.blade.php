<x-app-layout title="Health Info | Team Asia Corporation">

    @section('meta_title', 'Team Asia Corporation')
    @section('meta_type', 'website')
    @section('meta_description', 'From the Largest Producers and Exporters of Premium Quality Products in the Philippines')
    {{-- @section('meta_image', (asset('/Meta.png'))) --}}
    @section('meta_keywords', 'VCO, Coconut Products, SUPERCOCO, COCOKING, JUV, Virgin Coconut Oil')

    <h2 class="text-center text-3xl md:text-5xl text-red-600 font-bold py-6 dark:text-white">Health Benefits of Coconut Oil vs. Other Oils</h2>
    {{-- <div class="bg-[url('{{ asset('pp2.webp') }}')]"> --}}
    <div>
        <img src="{{  asset('/pp1.webp') }}" class="block md:hidden w-full" />
        <img src="{{  asset('/pp2.webp') }}" class="hidden md:block w-full" />
    </div>
    <div class="lg:px-16 flex flex-col md:flex-row justify-center gap-4">
     @include('layouts.sections.health-main')
     @include('layouts.sections.health-sub')
    </div>
    
</x-app-layout>
