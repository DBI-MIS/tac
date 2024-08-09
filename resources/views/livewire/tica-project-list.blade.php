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
        <!-- Navigation Section -->
        <div class="w-full mx-auto lg:max-w-7xl">
            <nav class="flex flex-col md:flex-row sm:justify-center text-center gap-2 flex-grow-1">
                <a href="{{ route('projects.tica', ['category' => 'Hospital']) }}" 
                   class="text-md font-semibold  {{ $category === 'Hospital' ? 'border-b border-lg border-red-600 text-red-600' : 
                   'text-gray-800 dark:text-white hover:text-red-600 hover:border-b hover:border-lg' }}
                   transition duration-300 ease-in-out py-2 px-4 border-gray-200 ">
                   Hospital
                </a>
                <a href="{{ route('projects.tica', ['category' => 'Pharmaceutical Factory']) }}" 
                   class="text-md font-semibold  {{ $category === 'Pharmaceutical Factory' ? 'border-b border-lg border-red-600 text-red-600' : 
                   'text-gray-800 dark:text-white hover:text-red-600 hover:border-b hover:border-lg' }}
                   transition duration-300 ease-in-out py-2 px-4 border-gray-200 ">
                   Pharmaceutical Factory
                </a>
                <a href="{{ route('projects.tica', ['category' => 'Governments & Private']) }}" 
                   class="text-md font-semibold  {{ $category === 'Governments & Private' ? 'border-b border-lg border-red-600 text-red-600' : 
                    'text-gray-800 dark:text-white hover:text-red-600 hover:border-b hover:border-lg' }}
                   transition duration-300 ease-in-out py-2 px-4 border-gray-200 ">
                   Governments & Private
                </a>
                <a href="{{ route('projects.tica', ['category' => 'Hotel & Shopping Center']) }}" 
                   class="text-md font-semibold  {{ $category === 'Hotel & Shopping Center' ? 'border-b border-lg border-red-600 text-red-600' : 
                    'text-gray-800 dark:text-white hover:text-red-600 hover:border-b hover:border-lg' }}
                   transition duration-300 ease-in-out py-2 px-4 border-gray-200 ">
                   Hotel & Shopping Center
                </a>
                <a href="{{ route('projects.tica', ['category' => 'Electronic Factory']) }}" 
                   class="text-md font-semibold  {{ $category === 'Electronic Factory' ? 'border-b border-lg border-red-600 text-red-600' : 
                    'text-gray-800 dark:text-white hover:text-red-600 hover:border-b hover:border-lg' }}
                   transition duration-300 ease-in-out py-2 px-4 border-gray-200 ">
                   Electronic Factory
                </a>
            </nav>
        </div>
        
       <!-- tica project list Section -->
       <div class="mx-auto px-4 py-5 sm:px-6 sm:py-12 lg:max-w-9xl lg:px-8">
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @if ($this->projects->count() == 0)
                    <div class="col-span-full text-center text-gray-500">No Projects to display.</div>
                @endif

                @foreach($this->projects as $project)
                    <x-projects.grad-project-item :project="$project"/>
                @endforeach
            </div>

            <div class="my-3">
                {{ $this->projects->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
