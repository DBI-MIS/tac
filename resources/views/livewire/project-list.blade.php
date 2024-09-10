<div class="">
        <div class="flex flex-col sm:flex-row items-center justify-center h-[30vh] sm:h-[20vh] bg-gray-100 rounded-xl overflow-hidden">
            
            <div class="flex-1 h-full w-full bg-cover bg-center group" style="background-image: url('{{ asset('/TICA_BG.webp') }}');">
                <a href="{{ route('projects.tica') }}" class="flex flex-col items-center justify-center h-full bg-slate-600 bg-opacity-50 text-white hover:bg-opacity-75 transition duration-300 ease-in-out">
                    <img src="{{ asset('tica_logo_white.svg')}}" alt="" class="w-[250px]">
                    <div class="text-3xl" x-data="{ texts: ['TICA PROJECTS'] }" x-typewriter.3000ms="texts">TICA PROJECTS</div>
                </a>
            </div>

            {{-- <div class="flex-1 h-full w-full bg-cover bg-center group" style="background-image: url('{{ asset('/GRAD_BG.webp') }}');">
                <a href="{{ route('projects.grad') }}" class="flex flex-col items-center justify-center h-full bg-slate-600 bg-opacity-50 text-white hover:bg-opacity-75 transition duration-300 ease-in-out">
                    <img src="{{ asset('GRAD_LOGO_WHITE.svg')}}" alt="" class="w-[300px]">
                    <span class="text-3xl" x-data="{ texts: ['GRAD PROJECTS'] }" x-typewriter.3000ms="texts">GRAD PROJECTS</span>
                </a>
            </div> --}}
            
        </div>
        <div class="mx-auto px-4 py-10 sm:px-6 lg:max-w-9xl lg:px-8">
            <div class="flex flex-col gap-6 border-b-[1px] dark:border-gray-100/10 border-red-600/10 ">
                <h1 class="text-2xl font-bold dark:text-white">Featured Projects</h1>
            </div>
            
            <div class="m-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @if ($this->projects->count() == 0)
                    <div class="col-span-full text-center text-gray-500 dark:text-white">No Projects to display.</div>
                @endif

                @foreach($this->projects as $project)
                    <x-projects.project-item :project="$project"/>
                @endforeach
            </div>
            <div class="flex flex-col gap-6 border-t-[1px] dark:border-gray-100/10 border-red-600/10  ">
                <h1 class="text-lg font-bold dark:text-white text-center m-6 cursor-pointer" href="{{ route('projects.tica') }}" wire:navigate>All Projects</h1>
            </div>
        </div>
</div>
    


