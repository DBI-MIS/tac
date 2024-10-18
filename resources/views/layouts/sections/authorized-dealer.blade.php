<div class="max-w-full w-full pb-6 pt-2 px-4 dark:text-gray-100" data-nosnippet>
    
    @if(isset($mainPages['dealership']))
    <div class="flex flex-col gap-6 border-b-[1px] dark:border-gray-100/10 border-red-600/10 ">
    <h1 class="text-4xl font-bold text-red-700 dark:text-gray-100">{{ $mainPages['dealership']->desc2 }}</h1>
    </div> 
    <div class="p-4">Exclusive Distributor and {{ $mainPages['dealership']->title }} in the Philippines</div>

    <div class="rounded-xl overflow-hidden w-full flex flex-col">
    <div class="flex flex-col sm:flex-row items-center justify-center h-[50vh] sm:h-[30vh] bg-gray-100 w-full ">
        
        <div class="flex-1 h-full w-full bg-cover bg-center group relative" 
        style="background-image: url('{{ asset('/TICA_BG.webp') }}');">
            <a href="{{ route('ticaProducts') }}"
            class="flex flex-col items-center justify-center h-full bg-slate-600 bg-opacity-50 text-white hover:bg-opacity-75 transition duration-300 ease-in-out px-12">
                <img src="{{ asset('tica_logo_white.svg')}}" alt="TICA" class="w-[280px] sm:w-[250px] md:w-[300px] absolute inset-auto">
                <span class="sm:bg-slate-600/50 sm:py-4 text-xs lg:text-sm mt-6 opacity-0 group-hover:opacity-100 hidden sm:block group-hover:sm:bottom-0 -bottom-1 transition-all duration-300 ease-in-out absolute px-2 sm:px-4 lg:px-6">TICA is a professional company integrating R&D, manufacture, sales and service of
                    environment and thermal energy utilization.</span>
            </a>
        </div>
        {{-- <div class="flex-1 h-full w-full bg-cover bg-center group relative" 
        style="background-image: url('{{ asset('/GRAD_BG.webp') }}');">
            <a href="{{ route('gradProducts') }}"
            class="flex flex-col items-center justify-center h-full bg-slate-600 bg-opacity-50 text-white group-hover:bg-opacity-75 transition duration-300 ease-in-out px-12">
                <img src="{{ asset('GRAD_LOGO_WHITE.svg')}}" alt="GRAD" class="w-[280px] sm:w-[250px] md:w-[320px] absolute inset-auto">
                <span class="sm:bg-slate-600/50 sm:py-4 text-xs lg:text-sm mt-6 opacity-0 group-hover:opacity-100 hidden sm:block group-hover:sm:bottom-0 -bottom-1 transition-all duration-300 ease-in-out absolute px-2 sm:px-4 lg:px-6">GRAD is a large modern enterprise with the research & development, design, production, sales installation and maintenance for central air conditioning products, composite material products and solar energy products.</span>
            </a>
        </div> --}}
     </div>
     <div class="flex flex-col sm:flex-row items-center justify-center h-[50vh] sm:h-[30vh] bg-gray-100 w-full">
        <div class="flex-1 h-full w-full bg-cover bg-center group relative" 
        style="background-image: url('{{ asset('/COCONUT_01.webp') }}');">
            <a href="{{ route('supercoco') }}"
            class="flex flex-col items-center justify-center h-full bg-slate-600 bg-opacity-50 text-white group-hover:bg-opacity-75 transition duration-300 ease-in-out px-12">
                <img src="{{ asset('SUPERCOCO_LOGO_WHITE.svg')}}" alt="SUPERCOCO" class="h-28 md:h-36 absolute inset-auto">
                <span class="sm:bg-slate-600/50 sm:py-4 text-xs lg:text-sm mt-6 opacity-0 group-hover:opacity-100 hidden sm:block group-hover:sm:bottom-0 -bottom-1 transition-all duration-300 ease-in-out absolute px-2 sm:px-4 lg:px-6">SUPERCOCO offers a range of all-natural, organic-certified products, including virgin coconut oil, cocoa spread, and coconut sugar, all made without any chemicals or preservatives.</span>
            </a>
        </div>
        <div class="flex-1 h-full w-full bg-cover bg-center group relative" 
        style="background-image: url('{{ asset('/COCONUT_02.webp') }}');">
        <a href="{{ route('cocoking') }}"
            class="flex flex-col items-center justify-center h-full bg-slate-600 bg-opacity-50 text-white hover:bg-opacity-75 transition duration-300 ease-in-out px-12">
                <img src="{{ asset('CocokingLogo_white.svg')}}" alt="COCOKING" class="h-24 md:h-32 absolute inset-auto">
                <span class="sm:bg-slate-600/50 sm:py-4 text-xs lg:text-sm mt-6 opacity-0 group-hover:opacity-100 hidden sm:block group-hover:sm:bottom-0 -bottom-1 transition-all duration-300 ease-in-out absolute px-2 sm:px-4 lg:px-6">COCOKING offers premium virgin coconut oil products, including all-natural mouth fresheners, skin ointments, nasal sprays, MCT oil, and organic VCO.</span>
            </a>
        </div>
        <div class="flex-1 h-full w-full bg-cover bg-center group relative" 
        style="background-image: url('{{ asset('/COCONUT_03.webp') }}');">
        <a href="{{ route('juv') }}"
            class="flex flex-col items-center justify-center h-full bg-slate-600 bg-opacity-50 text-white hover:bg-opacity-75 transition duration-300 ease-in-out px-12">
                <img src="{{ asset('JUV_LOGO_WHITE.svg')}}" alt="JUV" class="h-20 md:h-28 absolute inset-auto">
                <span class="sm:bg-slate-600/50 sm:py-4 text-xs lg:text-sm mt-6 opacity-0 group-hover:opacity-100 hidden sm:block group-hover:sm:bottom-0 -bottom-1 transition-all duration-300 ease-in-out absolute px-2 sm:px-4 lg:px-6">JUV is a versatile VCO product perfect for mouth fresheners, lip balms, and multi-effect base oils.</span>
            </a>
        </div>
     </div>
    </div>
    
    

    @endif
</div>