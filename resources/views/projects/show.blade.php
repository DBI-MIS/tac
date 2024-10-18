@props(['project'])
<x-app-layout>
    <div class=" min-h-full pb-40 mb-40">
        <!-- Hero Section -->
        {{-- <section class="relative flex items-center h-[30vh] sm:h-[40vh] text-white overflow-hidden">
        @php
            $backgroundImage = $project->brand === 'GRAD Projects' ? asset('/GRAD_BG.webp') : asset('/TICA_BG.webp');
        @endphp
        <img src="{{ $backgroundImage }}" alt="Background" class="absolute  inset-0 w-full h-full object-cover z-0">
        <div class="absolute inset-0 bg-black bg-opacity-40 z-10"></div>
        <div class="relative z-20 ml-4 sm:ml-10">
            <h1 class="text-3xl sm:text-5xl font-bold uppercase">{{$project->category}}</h1>
            <p class="text-lg sm:text-xl mt-4 uppercase">{{$project->brand}}</p>
        </div>
    </section> --}}
        @php
            $isGradProject = $project->brand === 'GRAD Projects';
            $backgroundImage = $isGradProject ? asset('/GRAD_BG.webp') : asset('/TICA_BG.webp');
            $logoImage = $isGradProject ? asset('GRAD_LOGO_WHITE.svg') : asset('tica_logo_white.svg');
            $brandWords = explode(' ', $project->brand);
            $brandSecondWord = isset($brandWords[1]) ? $brandWords[1] : '';
        @endphp

        <section
            class="relative min-h-[15svh] sm:min-h-[20svh] w-full bg-fixed bg-no-repeat bg-cover bg-center bg-gray-100 rounded-xl overflow-hidden"
            style="background-image: url('{{ $backgroundImage }}')">

            <div class="absolute inset-0">
                <div
                    class="absolute inset-0 z-10 flex flex-col justify-center gap-2 lg:gap-6 bg-gradient-to-t from-slate-900/85 to-transparent px-8 sm:px-16 p-6">
                    <p class="w-full text-3xl sm:text-4xl md:text-5xl font-bold uppercase text-white"
                        x-data="{ texts: ['{{ $project->category }}'] }" x-typewriter.3000ms="texts">
                        {{ $project->category }}
                    </p>
                    <div class="flex  flex-row gap-2">
                        <img src="{{ $logoImage }}" alt="{{ $project->brand }}"
                            class="w-20 hidden sm:block lg:w-[120px]">
                        <h1
                            class="w-full  lg:w-[80%] hidden sm:block text-balance text-xl md:text-2xl lg:text-3xl font-bold text-white">
                            {{ $brandSecondWord }}</h1>


                    </div>
                </div>
            </div>
        </section>


        <!-- Project Details Section -->
        <div class="container mx-auto px-4 py-8">
            <div class="grid lg:grid-cols-2 gap-8 items-start">
                <!-- Project Image -->
                <div class="flex justify-center">
                    <img class="w-full h-auto max-w-lg rounded-lg shadow-xl"
                        src="{{ $project->project_img ? asset('storage/' . $project->project_img) : asset('/default-slide-2.webp') }}"
                        {{-- src="{{ $project->project_img }}" --}} alt="{{ $project->title }}">
                </div>
                <!-- Project Info -->
                <div class="text-balance ">
                    <h1 class="text-2xl font-bold leading-8 tracking-wide text-red-800 dark:text-red-400 mb-4">
                        {{ $project->title }}</h1>
                    {{-- <p class="hidden sm:block text-lg mb-2 dark:text-white "><strong>Category:</strong>
                        {{ $project->category }}</p>
                    <p class="block sm:hidden text-lg mb-2 dark:text-white"><strong>Brand:</strong>
                        {{ $project->brand }}</p> --}}
                   
                    <hr>
                    <p class=" text-md sm:text-lg my-4 leading-8 dark:text-white ">{{ $project->description }}</p>
                    @if($project->country)
                    <p class="block text-lg mb-2 dark:text-white "><strong>Country:</strong>
                        {{ $project->country }}</p>
                    @endif
                    @if($project->product_type)
                    <p class="block text-lg mb-2 dark:text-white "><strong>Product Type:</strong>
                        {{ $project->product_type }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
