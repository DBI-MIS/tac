<div class="">
        <!-- Landing Section -->
       
        <section class="relative min-h-[20svh] w-full bg-fixed bg-no-repeat bg-cover bg-center bg-gray-100 rounded-xl overflow-hidden"
        style="background-image: url({{ asset('/TICA_BG.webp') }})">

            <div class="absolute inset-0">

                <div class="absolute inset-0 z-10 flex flex-col md:flex-row gap-2 lg:gap-6 bg-gradient-to-t from-slate-900/85 to-transparent md:px-16 md:py-12 p-6 md:items-center ">
                    <img src="{{ asset('tica_logo_white.svg')}}" alt="GRAD" class="w-36 lg:w-[250px] ">
                <h1 class="w-full lg:w-[80%] text-balance text-3xl md:text-4xl lg:text-5xl font-bold text-white">Projects</h1>
                <p 
                class=" w-full  text-md md:text-lg lg:text-2xl text-white "
                x-data="{ texts: ['We keep improving and striving for perfection.'] }"
                x-typewriter.3000ms="texts">We keep improving and striving for perfection.
                </p>
                
                </div>
            </div>

        </section>
        
        
        
       <!-- tica project list Section -->
       <div class=" px-4 py-5 sm:px-6 sm:py-12 lg:max-w-9xl lg:px-8 flex flex-col md:flex-row w-full justify-between">
        <div class="mt-6 order-2 md:order-1 w-full px-2 py-2">
            <hr class="mb-2 md:hidden">
                @if ($this->projects->count() == 0)
                    <div class="w-full text-center text-gray-500">No Projects to display.</div>
                @endif
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                @foreach($this->projects as $project)
                <x-projects.project-item-category :project="$project"/>
                @endforeach
                </div>  
                <div class="my-3">
                    {{ $this->projects->onEachSide(1)->links() }}
                </div>
        </div>

            <div class="flex flex-wrap items-start order-1 md:order-2 md:max-w-[300px]">
                <x-projects.nav-category :category="$category"/>
            </div>
        </div>

        <!-- Navigation Section -->
        
    
    </div>
